<?php include('includes/header.php'); ?>
				<h1>Development</h1>
				<p>
				The developers of Transmission often browse the <a href="http://forum.transmissionbt.com">forums</a>, and are almost always idling on IRC. We currently occupy an IRC channel (<a href="irc://irc.freenode.net/transmission">#transmission</a>) on the <a href="http://www.freenode.net/">Freenode</a> network. Feel free to stop by IRC for some real-time help with building, contributing to the project or debugging. Of course, our forums offer the largest exposure for issues and support.
				</p>
				<h2>Requirements for building</h2>
				<ul>
					<li>
						<strong>Mac OS X</strong>
						<ul>
							<li>
						Mac OS X (10.5 and later) users need Xcode 3.0 or later, with the Mac OS X 10.5 SDK installed.
							</li>
						</ul>
					</li>
					<li>
						<strong>GTK</strong>
						<ul>
							<li>
								A version of the `getopt' library with getopt_long().  Most systems already have this.
							</li>
							<li>
							intltool 0.23 or later
							</li>
							<li>
							gettext 0.14.1 or later
							</li>
							<li>
								OpenSSL 0.9.8 or later. (See note)
							</li>
							<li>
								GTK+ 2.6 or later. (See note)
							</li>
							<li>
							Note: if installing OpenSSL or GTK+ from a package manager, you'll also need to install their corresponding development packages.  These are usually named $PACKAGENAME-devel or $PACKAGENAME-dev, depending on which distribution and/or repository you use.
							</li>						
						</ul>
					</li>
					<li>
						<strong>BeOS</strong>
						<ul>
							<li>
								BeOS users need <a href="http://www.bebits.com/app/4011">gcc 2.95.3</a>.
							</li>
						</ul>
					</li>
				</ul>
				<h2>Getting the Source</h2>
					If you'd like to stay on top of Transmission's development, our source code is available here:
						<br /><br />
					<div class="code">svn co svn://svn.m0k.org/Transmission/trunk Transmission</div>
					To access this on OS X, you must install <a href="http://subversion.tigris.org">SVN</a>, then open a Terminal window and type the above command.
						<br /><br/>
Transmission is written entirely in C, except for the Mac OS X frontend, which is written in Objective-C.
						<br /><br />
To view the current status of our source code without downloading it all, feel free to check out our <a href="http://trac.transmissionbt.com/browser/trunk/">Trac</a>. You can also submit feature requests, patches and bugs via the <a href="http://trac.transmissionbt.com">Trac</a>.
					<br /><br />
				<h2>Building the Source</h2>
					Building a Transmission release in the command line:<br />
					Example: 
					<div class="code">
						tar xvjf transmission-1.32.tar.bz2<br />
						cd transmission-1.32<br />
						./configure -q &amp;&amp; make -s<br />
						su (if necessary for the next line)<br />
						make install
					</div>
					On Mac OS X, simply open the Transmission Xcode project file and click 'build'.
					<br /><br />
					<h2>Developmental Builds and Source</h2>
					<a href="http://transmission.xpjets.com">Daily OS X builds</a> from the SVN repository are available thanks to Dhruv Kalra and pea. Be sure to get the latest revision. (<a href="http://trac.transmissionbt.com/timeline">Change Log</a>)
						<br /><br />
					<span style="font-style: italic">
						&lowast; Please note the daily builds may not be stable, and could be harmful to your system. Use them with care. &lowast;
					</span>
					<br /><br />

				<h2>Identifying Transmission from a tracker or another client</h2>
				
				<p>Versions of Transmission use the format MAJOR.MINOR&lsaquo;MAINTENANCE&rsaquo;, with MAJOR between 0 and 99, MINOR and MAINTENANCE between 0 and 9</p>
				
				<h3>PeerID format</h3>
				
				<p>Starting with 0.80 instead of XXYZ for major, minor and maintenace, it's XYZB for major, minor, maintenance and development builds</p>
				
				<p>For instance, 0.80 IDs start with '-TR0800-' (0.80) for releases, and '-TR080Z-' (0.80+) for development builds.</p>
				
				<h3>User Agent</h3>
				
				<p>Since 0.4, tracker requests include a User-Agent field: 'Transmission/MAJOR.MINOR&lsaquo;MAINTENANCE&rsaquo;'.</p>
				
				<p>For instance, Transmission 0.70 sets 'User-Agent: Transmission/0.70'.</p>
<?php include('includes/footer.php'); ?>