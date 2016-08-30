<?php
	/*
	 * Code is © Copyright Transmission 2007, All Rights Reserved
	 * Written by: Malcolm Jarvis (gimp@nilok.ca) from http://www.nilok.ca
	 */

include('includes/version.php');
$releasedl = TRANSMISSION_VERSION;
$betadl = TRANSMISSION_BETA_VERSION;

	// Do NOT change anything in this file unless you know what you're doing.

	function get_unformatted_posts($page = 0, $numposts = 5)
	{
		$start = (int) ($page*$numposts);
		$end = (int) $numposts;
		$result = mysql_query("SELECT `id`,`date`,`title`,`body`,`poster`,`realdate` FROM `". posts_table ."` ORDER BY `realdate` DESC LIMIT {$start},{$end}");
		if (mysql_num_rows($result) > 0)
		{
			while ($post = mysql_fetch_assoc($result))
				$posts[] = $post;
			return $posts;
		}
		else
			return array();
	}

	function get_counter()
	{
		$result = mysql_query("SELECT `counter` FROM `counter`");
		list($count) = mysql_fetch_row($result);
		return $count;
	}

	function get_beta_counter()
	{
		$beta_result = mysql_query("SELECT `beta_counter` FROM `beta_counter`");
		list($beta_count) = mysql_fetch_row($beta_result);
		return $beta_count;
	}

	function generate_admin_page($pageid = 'login')
	{
		$pageid = (empty($pageid)) ? 'login' : $pageid;
	
		if ((login_check_session() === false) && $pageid != 'logincheck')
			$pageid = 'login';

		switch($pageid)
		{
			case 'login':
				return generate_admin_login();
			break;

			case 'logincheck':
				return login_check($_POST['username'], $_POST['password']);
			break;

			case 'mainpage':
				return generate_admin_mainpage();
			break;

			case 'posts':
				return generate_admin_postmanager();
			break;

			case 'modifyposts':
				return admin_modify_posts();
			break;

			case 'users':
				return generate_admin_page('mainpage');
			break;

			case 'logout':
				return login_logout();
			break;
		}	
	}

	function generate_admin_mainpage()
	{
		return '
<ul>
	<li>
		<a href="admin.php?'. adminpages .'=posts">Manage News Posts</a>
	</li>
	<li>
		<a href="admin.php?'. adminpages .'=users">Manage Users</a>
	</li>
	<li>
		<a href="admin.php?'. adminpages .'=logout">Logout</a>
	</li>
	<li>
 		 Transmission OS X ' . TRANSMISSION_VERSION .' downloads: '. get_counter() .'
	</li>
	<li>
		Transmission OS X ' . TRANSMISSION_BETA_VERSION . ' downloads: ' . get_beta_counter() .'
	</li>
</ul><br />
';
	}

	function generate_admin_login()
	{
		if ($_SESSION['yeslogin'] == 'oic94y')
			echo generate_admin_page('mainpage');
		else
		{
			return '<form id="login" action="admin.php?'. adminpages .'=logincheck" method="post">
	<p>
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
		<input type="submit" value="Login" />
	</p>
</form>
';
		}
	}
	
	function generate_admin_postmanager()
	{
		$content = generate_admin_navigation();
		$content .= '
<div class="PostContainer">
	<form action="admin.php?'. adminpages .'=modifyposts" method="post">
		<div class="SubmitButtons">
			<p>
				<input type="submit" name="submit" value="Add" />
			</p>
		</div>
		<div class="Textareas">
			<p>
				<input type="text" name="title" style="font-weight: bold;" /><br />
				<textarea name="body" cols="50" rows="5"></textarea>
			</p>
		</div>
	</form>
</div>
<hr />
';

		$posts = get_unformatted_posts($_GET['page'], max_posts);
		foreach ($posts as $post)
		{
			$content .= '
<div class="PostContainer">
	<form action="admin.php?'. adminpages .'=modifyposts" method="post">
		<div class="SubmitButtons">
			<p>
				<input type="hidden" name="id" value="' . $post['id'] . '" />
				<input type="submit" name="submit" value="Delete" />
			</p>
			<p>
				<input type="submit" name="submit" value="Update" />
			</p>
		</div>
		<div class="Textareas">
			<p>
				<input type="text" name="title" value="'. $post['title'] .'" style="font-weight: bold;" />
				 Posted on '. $post['date'] .'<br />
				<textarea name="body" cols="50" rows="5">'. $post['body'] .'</textarea>
			</p>
		</div>
	</form>
</div>
<hr />
';
		}

		$content .= get_pagination($_GET['page'], 'admin.php?'. adminpages .'=posts&');
		return $content;
	}

	function generate_admin_navigation()
	{
		return '
<a href="admin.php?'. adminpages .'=mainpage">Main</a> - 
<a href="admin.php?'. adminpages .'=posts">Post Manager</a> - 
<a href="admin.php?'. adminpages .'=users">User Manager</a><br />
';
	}

	/*
	 * BEGIN SESSION AND LOGIN FUNCTIONS
	 */

	function login_check($login, $password)
	{
		$login = mysql_real_escape_string($login);
		$pass = sha1($password);

		$result = mysql_query("SELECT `id` FROM `". users_table ."` WHERE `login`='$login' AND `pass`='$pass'");
		if (mysql_num_rows($result) == '1')
		{
			list($id) = mysql_fetch_row($result);
			$_SESSION['yeslogin'] = 'oic94y';
			$_SESSION['userid'] = $id;
			echo generate_admin_page('mainpage');
		}
		else
			echo generate_admin_page();
	}

	function login_check_session()
	{
		if ($_SESSION['yeslogin'] === 'oic94y')
			return true;
		else
			return false;
	}

	function login_logout()
	{
		session_unset();
		session_destroy();
		echo generate_admin_page();
	}
	
	/*
	 * END SESSION AND LOGIN FUNCTIONS
	 */

	function admin_modify_posts()
	{
		$id = (int) $_POST['id'];
		$title = $_POST['title'];
		$body = $_POST['body'];

		switch($_POST['submit'])
		{
			case 'Add':
				$return = admin_post_create($title, $body);
			break;
			case 'Update':
				$return = admin_post_update($id, $title, $body);
			break;
			case 'Delete':
				$return = admin_post_delete($id);
			break;
		}

		write_rss(site_dir.'/rss.xml', generate_rss());
		return $return;
	}

	function admin_post_create($title, $body)
	{
		$title = mysql_real_escape_string($title);
		$body = mysql_real_escape_string($body);
		$poster = (int) $_SESSION['userid'];
		$date = date('d/m/y');
		$realdate = date('ymd').time();

		mysql_query("INSERT INTO `". posts_table ."` (`title`, `body`, `poster`, `date`, `realdate`) VALUES ('$title', '$body', '$poster', '$date', '$realdate')");

		echo generate_admin_page('posts');
	}

	function admin_post_update($postid, $title, $body)
	{
		$postid = (int) $postid;
//		$body .= "\n\n".'[edit]This post was edited by '. get_poster($_SESSION['userid']) .' on '. date('d/m/y') .'[/edit]';
		$title = mysql_real_escape_string($title);
		$body = mysql_real_escape_string($body);
		$poster = (int) $_SESSION['userid'];

		mysql_query("UPDATE `". posts_table ."` SET `title`='$title', `body`='$body' WHERE `id`='$postid'");

		echo generate_admin_page('posts');
	}

	function admin_post_delete($postid)
	{
		$postid = (int) $postid;

		mysql_query("DELETE FROM `". posts_table ."` WHERE `id`='$postid'");

		echo generate_admin_page('posts');
	}

	function admin_user_create($createname, $createpass, $type)
	{
		$user = admin_check_usertype();
		if ($userid['type'] != 2)
			return false;

		$createname = mysql_real_escape_string($createname);
		$createpass = sha1($createpass);
		$type = (int) $type;

		$result = mysql_query("INSERT INTO `". users_table ."` (`login`, `pass`, `type`) VALUES ('$createname', '$createpass', '$type')");
		if ($result === false)
			return false;
		else
			return true;
	}

	function admin_user_delete($id)
	{
		$usertype = admin_check_usertype();
		if ($usertype['type'] === false)
			return false;

		$id = (int) $id;

		if ($userid == $id)
			return false;

		mysql_query("DELETE FROM `". users_table ."` WHERE `id`='$id'");
		return true;
	}

	function admin_user_update($id, $name, $pass)
	{
		$checkuser = admin_check_usertype($id);
		$user = admin_check_usertype();
		if ($user['id'] == $id)
			return false;
		if (($user['type'] != 2) && ($checkuser['type'] == 2))
			return false;

		
	}

	function admin_check_usertype($userid = false)
	{
		if ($userid == false) $userid = $_SESSION['userid'];
		$user['id'] = $userid;
		$result = mysql_query("SELECT `type` FROM `". users_table ."` WHERE `id`='$userid'");
		list($user['type']) = mysql_fetch_row($result);
		return $user;
	}
?>
