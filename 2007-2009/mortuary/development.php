<?php
include('includes/header.php');
include('includes/version.php');
?>

<h1>Development</h1>

<h2>Getting Help</h2>
<div class='section'>
    <p>
    Building a program from source can be daunting
    if you've never done it before &mdash;
    and sometimes even if you have.
    Our <a href="/community.php">community page</a>
    has resources on where to find help.
    </p>
</div>

<h2 id="source">Getting the Source</h2>
<div class='section'>
    <p>Source code for official releases can be found on our <a href="/download.php">download page</a>.</p>
    <p>If you've got  <a href="http://subversion.tigris.org">SVN</a> installed and would like
    to use a fresh code snapshot, open a terminal window and type:</p>
    <p><span class="code">svn co svn://svn.m0k.org/Transmission/trunk Transmission</span></p>
</div>

<h2 id="osx">Building on Mac OS X</h2>
<div class='section'>
    <p>The first step is to skim the
    <q><a href="#Unix">Building on Unix</a></q> section below
    and be grateful that you don't have to do all of that.</p>
    <p>Next, make sure you have this software:</p>
    <ul>
    <li>Mac OS X 10.5 or newer</li>
    <li>Mac OS X 10.5 SDK</li>
    <li>Xcode 3.0 or newer</li>
    </ul>
    <p>Then, just open the Transmission Xcode project file and click 'build'.</p>
</div>

<h2 id="unix">Building on Unix</h2>
<div class='section'>
    <p>
    If this is your first time compiling on Unix,
    you'll need a few basic tools:</p>
    <ul>
    <li>gcc</li>
    <li>autoconf 2.54 or newer</li>
    <li>libtool</li>
    <li>automake 1.9 or newer</li>
    <li>gettext 0.14.1 or newer</li>
    <li>intltool 0.23 or newer</li>
    </ul>

    <p>
    Once you've got the basics out of the way, here are the
    libraries that Transmission needs to have in order to build:
    </p>

    <ul>
    <li>OpenSSL 0.9.8 or newer</li>
    <li>libcurl 7.15.0 or newer</li>
    <li>GTK+ 2.6 or newer (only needed by the GTK+ gui)</li>
    <li>libnotify 0.0.4 (optional, and only needed by the GTK+ gui)</li>
    <li>DBUS 0.70 (optional, and only needed by the GTK+ gui)</li>
    </ul>

    <p>
    <b>Ubuntu users:</b> a list of Ubuntu packages for the prerequisites is
    <a href="http://forum.transmissionbt.com/viewtopic.php?f=13&t=5604&p=27503#p27503">here</a>.
    <br/><b>RPM users:</b> you'll also need to install the corresponding -devel packages.
    </p>

    <p>Building from an SVN snapshot:<br/>
    <div class='code'>
    cd Transmission<br/>
    ./autogen.sh<br/>
    make -s<br/>
    su (if necessary for the next line)<br/>
    make install
    </div>
    </p>

    <p>Building from a tarball:<br/>
    <div class='code'>
    tar xvjf transmission-<? echo TRANSMISSION_VERSION ?>.tar.bz2<br/>
    cd transmission-<? echo TRANSMISSION_VERSION ?><br/>
    ./configure -q<br/>
    make -s<br/>
    su (if necessary for the next line)<br/>
    make install
    </div>
    </p>
</div>

<h2 id="peer-id">Peer-Id and User-Agent</h2>
<div class='section'>
    <p>From version 0.80 onward,
    Transmission's peer-id is formatted
    <q><a href="http://wiki.theory.org/BitTorrentSpecification#peer_id">Azureus style</a></q>
    with one digit for the major version,
    two digits for the minor version,
    and one character to denote a stable release (<code>0</code>),
    nightly build (<code>Z</code>),
    or prerelease beta (<code>X</code>).
    For example:
    </p>

    <table>
        <tr><td><code>-TR130X-</code></td><td>Beta release leading up to version 1.30</td></tr>
        <tr><td><code>-TR1320-</code></td><td>Official 1.32 release</td></tr>
        <tr><td><code>-TR132Z-</code></td><td>Nightly build between 1.32 and 1.33</td></tr>
    </table>

    <p>
    Its User-Agent header follows a similar format, 
    plus the <a href="http://trac.transmissionbt.com/log/">SVN revision</a> in parenthesis:
    </p>

    <table>
        <tr><td><code>Transmission/1.30X (6416)</code></td><td>Beta release leading up to version 1.30</td></tr>
        <tr><td><code>Transmission/1.32 (6455)</code></td><td>Official 1.32 release</td></tr>
        <tr><td><code>Transmission/1.32+ (6499)</code></td><td>Nightly build between 1.32 and 1.33</td></tr>
    </table>

    <p>
    Before 0.80,
    versions of Transmission used
    two digits for the major version
    and two for the minor.
    For example, <code>-TR0072-</code> was Transmission 0.72.
    </p>
 </div>

<?php include('includes/footer.php'); ?>
