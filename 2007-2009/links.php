<?php
include('includes/header.php');
include('includes/version.php');
?>

<h1>Links</h1>

<p>
These are third-party projects that people have written for use with Transmission.
<br/>
They are <i>not supported, endorsed, or even tested</i> by the Transmission team,
<br/>
but are listed here "as-is" in the hopes that they'll be useful.
</p>

<ul>
<li style="margin-top: 10px">
    <a href="http://code.google.com/p/transmission-remote-dotnet">transmission-remote-dotnet</a>
    is a .NET application written in C# to remotely manage Transmission.</li>
<li style="margin-top: 10px">
    <a href="http://forum.transmissionbt.com/memberlist.php?mode=viewprofile&u=9045">Drolidis</a>
    has an
    <a href="http://forum.transmissionbt.com/viewtopic.php?f=1&t=6104&start=0&st=0&sk=t&sd=a">RSS Helper named "Automatic"</a>
    for the Mac OS X version of Transmission.
    He's also been providing technical support in the forums.</li>
<li style="margin-top: 10px"><a href="http://forum.transmissionbt.com/memberlist.php?mode=viewprofile&u=9272">Spry</a>
    is working on a
    <a href="https://sourceforge.net/projects/wintransmission/">Windows client</a>
    for Transmission written in C#.</li>
<li style="margin-top: 10px"><a href="http://forum.transmissionbt.com/memberlist.php?mode=viewprofile&u=9261">fagga</a>
    is working on a
    <a href="http://github.com/fagga/transmission-remote-cli/tree/master">curses-based frontend</a>
    for Transmission written in Python.</li>
<li style="margin-top: 10px">
    <a href="http://www.dweebd.com/">Duncan Beevers</a>
    is working on a
    <a href="http://github.com/duncanbeevers/transmission-web-ui/tree/master">new and improved Web UI</a>.
<li style="margin-top: 10px">
    Erik Svensson has written 
    <a href="http://bitbucket.org/blueluna/transmission_supervisor/">Transmission Supervisor</a>,
    a Python-based helper application that adds seeding limits and some RSS capabilities
    to transmission-daemon.
</li>
<li style="margin-top: 10px">
    <a href="http://forum.transmissionbt.com/viewtopic.php?f=1&t=4300#p20751">beekum</a>
    has 
    <a href="http://forum.transmissionbt.com/viewtopic.php?f=1&t=4300#p31260">an alternative RSS Helper</a>,
    also for use on Mac OS X.</li>
<li style="margin-top: 10px">
    <a href="http://code.google.com/p/transmisson-remote-gui/">transmission-remote-gui</a>
    is an application written in Free Pascal to remotely manage Transmission.</li>
<li style="margin-top: 10px">
    <a href="http://code.google.com/p/selene-transmission">selene-transmission</a>
    is a GTK+ application written in Python to remotely manage Transmission.</li>
<li style="margin-top: 10px">
    Moritz Warning has a project named
    <a href="http://web-gmui.sourceforge.net/">Web-GMUI</a>
    which can be used as a remote web interface for many applications, including Transmission.
</li>
<li style="margin-top: 10px">
    Tom Lazar has written
    <a href="http://pypi.python.org/pypi/TransmissionClient/0.2rc1">TransmissionClient</a>,
    which appears to be both a Python-based Transmission client and a set of Python bindings
    to communicate with Transmission.
</li>
<li style="margin-top: 10px">
    <a href="http://search.cpan.org/~miyagawa/">Tatsuhiko Miyagawa</a>
    has written a perl module named
    <a href="http://kobesearch.cpan.org/htdocs/P2P-Transmission-Remote/P2P/Transmission/Remote.pm.html">P2P::Transmission::Remote</a>
    to communicate with Transmission through json-rpc.</li>
<li style="margin-top: 10px"><a href="http://www.kryogenix.org/days/">Stuart Langridge</a>
    has a
    <a href="http://www.kryogenix.org/days/2008/11/15/pause-torrents-while-im-using-the-computer">20-line python script</a>
    for
    <a href="http://www.gnome.org/">GNOME</a>
    that enables Transmission only when his screensaver is on.  Shivan has a
    <a href="http://www.kryogenix.org/days/2008/11/15/pause-torrents-while-im-using-the-computer#comment-122877">tweak</a>
    to change the speed limits instead.</li>
<li style="margin-top: 10px">nstehr has created an <a href="http://code.google.com/p/torrent-bot/">MSN Messenger bot</a>, which interacts with Transmission daemon through json-rpc.</li> 
<li style="margin-top: 10px">erickok has created an <a href="http://code.google.com/p/transdroid/">Android app</a> that controls a remote Transmission daemon session json-rpc.</li>

</ul>

<p>
<a href="irc://irc.freenode.net/transmission">Suggest a link</a>
</p>


<?php include('includes/footer.php'); ?>
