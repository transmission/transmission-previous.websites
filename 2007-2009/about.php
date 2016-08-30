<?php include('includes/header.php'); ?>

<p>Transmission is a cross-platform <a href="http://en.wikipedia.org/wiki/BitTorrent_%28protocol%29">BitTorrent</a> client that is:</p>

<h2><a name="easy">Easy</a>.</h2>
<p>Transmission is designed from the ground up to balance power with simplicity. We've set initial preferences so things <q>Just Work</q>, while advanced features like watch directories, bad peer blocking, and the web interface can be configured with just a few clicks. When <a href="http://digg.com/software/Transmission_Becomes_Default_BitTorrent_Client_for_Ubuntu">Ubuntu chose Transmission</a> as its default BitTorrent client, one of the most-cited reasons was its easy learning curve.</p>

<h2>Lean.</h2>
<p>
With few dependencies and written in C, Transmission <a href="http://pastehtml.com/view/090621g11KlBWM.html">uses less memory</a> than any other BitTorrent client we've seen.
It's also the <a href="http://www.nslu2-linux.org/wiki/Optware/Transmission">client of choice</a> on low-memory hardware.
<a href="http://forum.transmissionbt.com/viewtopic.php?t=4993">Imageshack chose Transmission</a> for its BitTorrent farms because the competition <q><a href="http://forum.transmissionbt.com/viewtopic.php?t=4993&p=25006">requires amounts of memory several times greater than Transmission</a></q>.
</p>
<p>
As seedboxhosting.com says, <a href="http://seedboxhosting.com/seedbox/41/which-bittorrent-client-should-i-use-with-torrentflux">"Bottom line: use Transmission if possible."</a>
</p>

<h2>Native.</h2>
<p>Unlike some cross-platform programs, Transmission seamlessly integrates with your operating system. The <a href="/images/screenshots/mac-large.png">Mac OS X interface</a> is written in Objective-C and uses <a href="http://growl.info/">Growl notifications</a> and dock badging to keep you informed.

<blockquote>
<span style="font-style: italic"><q>It's fast, it's extremely lightweight, and &mdash; even though it's available for a variety of platforms &mdash; it behaves just as you'd expect a Mac program to.</q></span>
<br>
<a href="http://www.macworld.com/article/134316/2008/08/transmission1gem.html"><i>Macworld</i>, naming Transmission a <q>Mac Gem</q></a></span>
</blockquote>

<p>The <a href="/images/screenshots/gtk-large.png">GTK+ interface</a> has been carefully written with the <a href="http://developer.gnome.org/projects/gup/hig/2.0/">GNOME Human Interface Guidelines</a> in mind.  It uses libnotify for torrent notification, DBUS for hibernation management, and <a href="http://library.gnome.org/misc/release-notes/2.22/#sect:gvfs-gio">GIO</a> for watch directories.</p>

<h2>Powerful.</h2>
<p>Transmission has the features you expect in a BitTorrent client: <a href="http://en.wikipedia.org/wiki/BitTorrent_protocol_encryption">encryption</a>, a web-based interface, <a href="http://en.wikipedia.org/wiki/Peer_exchange">peer exchange</a>, PeerGuardian-style peer blocklists, UPnP and NAT-PMP port forwarding, web seed support, watch directories, off-hour speed limit scheduling, tracker editing, global and per-torrent speed limits, and more.</p>

<h2>Free.</h2>
<p>Transmission is free software. All its code is <a href="http://trac.transmissionbt.com/browser/trunk">freely available online</a> and is <a href="http://trac.transmissionbt.com/browser/trunk/COPYING">licensed</a> under either the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU Public License v2</a> or the <a href="http://en.wikipedia.org/wiki/MIT_License">MIT License</a>. The development team <a href="http://www.transmissionbt.com/resources.php">welcomes anyone</a> who is interested in contributing code, documentation, translations, or other help.</p>

<?php include('includes/footer.php'); ?>