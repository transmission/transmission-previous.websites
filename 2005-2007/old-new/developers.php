<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title>Transmission - Development</title>
<meta name="keywords" content="BitTorrent, Bit, Torrent, Client, Mac, OS X, OSX, BeOS, Linux, MIT">
<style type="text/css">
body,p,td    { font-family: Verdana,Arial,Helvetica,sans-serif;
               font-size: 8pt;
               font-weight: normal;
               color: #000000; }
body         { margin-left: 0;
               margin-top: 0;
               margin-right:0;
               margin-bottom: 0;
               background-color: #FFFFFF; }
p.menu       { margin-left: 5pt;
               margin-right: 5pt;
               margin-top: 2pt;
               margin-bottom: 2pt; }
a            { color: #000000;
               text-decoration: underline; }
a:hover      { color: #888888; }
a.menu       { margin-left: 5pt;
               margin-right: 5pt;
               margin-top: 5pt;
               margin-bottom: 5pt; }
td.menu      { background-color: #EEEEEE;
               border-left: 1px solid #888888;
               border-right: 1px solid #888888;
               border-top: 1px solid #888888;
               border-bottom: 1px solid #888888; }
td.play      { background-color: #EEEEEE;
               text-align: center; }
td.playyes   { background-color: #DDFFDD;
               text-align: center; }
td.playno    { background-color: #FFDDDD;
               text-align: center; }
</style>
</head>

<body bgcolor="#ffffff">

<table width="100%" cellspacing=0 cellpadding=10>
<tr>
<td colspan=3>
<table cellspacing=0 cellpadding=0>
<tr>
<td>
<img src="http://download.m0k.org/transmission/images/Transmission-Icon-48.gif" vspace=0 hspace=10 alt="Transmission icon">
</td>
<td valign="middle">
<h1>Transmission</h1>
</td>
</tr>
</table>
<hr>
</td>
</tr>
<tr>
<td width=140 valign=top>
<table width=130 cellspacing=0 cellpadding=0 align="center">
<tr>
<td class=menu>
<p class=menu><a href="/">Home</a></p>
<p class=menu><a href="screenshots.php">Screenshots</a></p>
<p class=menu><a href="documentation.php">Documentation</a></p>
<p class=menu><a href="developers.php">Developers</a></p>
<p class=menu><a href="contribute.php">Contribute</a></p>
<p class=menu><a href="forum/">Forum</a></p>
</td>
</tr>
</table>
<br>
<table width=130 cellspacing=0 cellpadding=0 align="center">
<tr>
<td class=menu>
<p class=menu>Other projects:</p>
<p class=menu><a href="http://handbrake.m0k.org/">HandBrake</a></p>
</td>
</tr>
</table>
</td>
<td valign=top>

<!-- here the page really starts -->


<h2>Developers</h2>

<h3>Getting the sources</h3>

<p>You can download the latest sources of Transmission using SVN:</p>

<p>svn co svn://svn.m0k.org/Transmission/trunk Transmission</p>

<p>You can also browse the SVN with <a href="http://transmission.m0k.org/cgi-bin/trac.cgi/browser/trunk/">Trac</a>.

<h3>Requirements</h3>

<!--<p><a href="ftp://ftp.perforce.com/pub/jam/">Jam</a> 2.5 is needed to
build Transmission. </p>-->

<p>Support for getopt_long() is required to build the command line
client (many systems have it built-in already).</p>

<p>It is better to have OpenSSL installed, although not mandatory.</p>

<p>BeOS users need <a href="http://www.bebits.com/app/4011">gcc
2.95.3</a>.</p>

<p>Mac OS X users need Xcode 2.1 or later, with the Mac OS X 10.4
(Universal) SDK installed.</p>

<h3>Building</h3>

<p>'cd' to the folder that contains the sources and run
'./configure' then 'make'.</p>

<p>OS X users <b>must</b> run make too. Opening the Xcode project and
trying to build with Xcode won't work.</p>

<!-- $Id: footer.php,v 1.1 2004/06/28 16:11:42 titer Exp $ -->

<!-- here the page ends -->

</td>
<td valign="top">
<script type="text/javascript"><!--
google_ad_client = "pub-6410905720750156";
google_ad_width = 160;
google_ad_height = 600;
google_ad_format = "160x600_as";
google_ad_type = "text_image";
google_ad_channel ="";
google_color_border = "DDDDDD";
google_color_bg = "FFFFFF";
google_color_link = "000000";
google_color_url = "666666";
google_color_text = "333333";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td>
</tr>
<tr>
<td colspan=3>
<hr>
<table align=right border=0 cellpadding=0 cellspacing=0>
<tr>
<td align=right>
<a href="http://validator.w3.org/check/referer"><img border="0"
src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01!"
height="31" width="88"></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img border=0
width=88 height=31 src="http://jigsaw.w3.org/css-validator/images/vcss"
alt="Valid CSS!"></a>
</td>
</tr>
<tr>
<td align=right>
<a href="http://m0k.org/">Hosted by m0k</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
