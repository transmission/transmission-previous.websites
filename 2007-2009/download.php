<?php
include('includes/header.php'); 
include('includes/version.php');
$folder = "http://mirrors.m0k.org/transmission/files/";
$dmg = "Transmission-" . TRANSMISSION_VERSION . ".dmg";
$dmg_url = $folder . $dmg;
$tarball_bz2 = "transmission-" . TRANSMISSION_VERSION . ".tar.bz2";
$tarball_bz2_url = $folder . $tarball_bz2;
$tarball_lzma = "transmission-" . TRANSMISSION_VERSION . ".tar.lzma";
$tarball_lzma_url = $folder . $tarball_lzma;
?>

<table id="DownloadTable">
	<tr>
		<td colspan="4">
			<big><b>Download Transmission</b></big>
			<br>The current release version is <b><?php echo TRANSMISSION_VERSION ?></b>
			<br>Thanks to our bandwidth sponsor, <a href="http://www.cachefly.com/">CacheFly</a>.
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/osx.png"></td>
		<td>
			<big><b>Mac OS X</b></big>
			<br><?php echo "<a href=\"" . $dmg_url . "\">" . $dmg ?></a>
			<br><small>Requires Mac OS X 10.5 or later</small>
			<br><a href="http://transmission.xpjets.com/">Nightly builds</a>
			<br><a href="http://trac.transmissionbt.com/wiki/PreviousReleases">Previous Releases</a>
			</td>
		<td><img src="/images/platforms/tarball.png"></td>
		<td>
			<big><b>Source Code</b></big>
			<br><?php echo "transmission-"
				. TRANSMISSION_VERSION
				. ".tar: <a href=\""
				. $tarball_lzma_url
				. "\">lzma</a> <a href=\""
				. $tarball_bz2_url
				. "\">bz2</a>" ?>
			<br><a href="http://build.transmissionbt.com/job/trunk-linux-inc/">Nightly tarballs</a>
			<br><a href="http://mirrors.m0k.org/transmission/files/">Older tarballs</a>
			<br><a href="http://trac.transmissionbt.com/wiki/Building">How to build</a>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="padding-top: 10px;"><h1>Unix Distros</h1></td>
	</tr>
	<tr>
		<td><img src="/images/platforms/ubuntu.png"></td>
		<td>
			<b>Ubuntu</b>
			<br><a href="http://packages.ubuntu.com/search?keywords=transmission&amp;searchon=names&amp;suite=all&amp;section=all">Official Packages</a>
			<br><a href="https://launchpad.net/~transmissionbt-nightly/+archive/ppa">Nightly</a>
				and <a href="https://launchpad.net/~transmissionbt-beta/+archive/ppa">Beta</a> PPAs
			<br><a href="http://forum.transmissionbt.com/viewtopic.php?f=13&amp;t=5604">More info</a>
		</td>
		<td><img src="/images/platforms/fedora.png"></td>
		<td>
			<b>Fedora</b>
			<br><a href="https://admin.fedoraproject.org/pkgdb/packages/name/transmission">Official Packages</a>
			<br><small><code>$ yum install transmsision</code></small>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/opensuse.png"></td>
		<td>
			<b>OpenSUSE</b>
			<br><a href="http://software.opensuse.org/search?baseproject=openSUSE%3A11.1&amp;p=1&amp;q=transmission">Official Packages</a>
		</td>
		<td><img src="/images/platforms/mandriva.png"></td>
		<td>
			<b>Mandriva</b>
			<br><a href="http://wiki.mandriva.com/fr/Transmission">Mandriva Wiki</a>
			<br><small><code>$ urpmi transmission</code></small>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/debian.png"></td>
		<td>
			<b>Debian</b>
			<br><a href="http://packages.debian.org/search?searchon=names&amp;keywords=transmission">Official Packages</a>
			<br><small><code>$ apt-get install transmission</code></small>
		</td>
		<td><img src="/images/platforms/puppy.png"></td>
		<td>
			<b>Puppy</b>
			<br><a href="http://www.murga-linux.com/puppy/viewtopic.php?t=38969">.pet Packages</a>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/arch-linux.png"></td>
		<td>
			<b>Arch Linux</b>
			<br><a href="http://www.archlinux.org/packages/?arch=&amp;repo=&amp;q=transmission&amp;last_update=&amp;limit=50">Official Packages</a>
		</td>
		<td><img src="/images/platforms/freebsd.png"></td>
		<td>
			<b>FreeBSD</b>
			<br><a href="http://www.freebsd.org/cgi/ports.cgi?query=transmission&amp;stype=name&amp;sektion=net-p2p">Official Packages</a>
			<br><a href="http://www.freshports.org/net-p2p/transmission-gtk2/">Fresh Ports</a>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/gentoo.png"></td>
		<td>
			<b>Gentoo</b>
			<br><a href="http://packages.gentoo.org/package/net-p2p/transmission">Official Packages</a>
		</td>
		<td><img src="/images/platforms/pardus.png"></td>
		<td>
			<b>Pardus</b>
			<br><a href="http://packages.pardus.org.tr/info/contrib/2009/stable/source/transmission.html">Official Packages</a>
			<br><small><code>$ sudo pisi it transmission</code></small>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/openbsd.png"></td>
		<td>
			<b>OpenBSD</b>
			<br><a href="http://www.google.com/search?q=transmission&amp;domains=www.openbsd.org&amp;sitesearch=www.openbsd.org&amp;btnG=Search">Official Packages</a>
		</td>
		<td><img src="/images/platforms/netbsd.png"></td>
		<td>
			<b>NetBSD</b>
			<br><a href="ftp://ftp.netbsd.org/pub/pkgsrc/current/pkgsrc/net/Transmission/README.html">Official Packages</a>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/solaris.png"></td>
		<td>
			<b>Solaris</b>
			<br><a href="http://pkg.opensolaris.org/release/en/advanced_search.shtml?token=transmission&amp;show=p">Official Packages</a>
			<br><a href="http://trisk.acm.jhu.edu/SFE/">Contrib packages</a>
			<small><i>(<a href="http://pkgbuild.sourceforge.net/spec-files-extra">README</a>)</i></small>
		</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="4" style="padding-top: 10px;"><h1>Embedded Systems</h1></td>
	</tr>
	<tr>
		<td><img src="/images/platforms/networked-media-tank.png"></td>
		<td>
			<b>Networked Media Tank</b>
			<br><a href="http://www.networkedmediatank.com/showthread.php?tid=10662&amp;page=1">Newest Build</a>
			<br><a href="http://www.networkedmediatank.com/forumdisplay.php?fid=64">Forum Help</a>
		</td>
		<td><img src="/images/platforms/wd-mybook.png"></td>
		<td>
			<b>WD MyBook</b>
			<br><a href="http://mybookworld.wikidot.com/forum/t-162908/transmission-1-72">Optware Package</a>
			<br><a href="http://mybookworld.wikidot.com/forum/c-34400/torrent-programs">Forum Help</a>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/netgear-readynas.png"></td>
		<td>
			<b>ReadyNAS</b>
			<br><a href="http://www.readynas.com/forum/viewtopic.php?f=47&amp;t=24271">Newest Build</a>
			<br><a href="http://www.readynas.com/forum/viewtopic.php?f=36&amp;t=27242&amp;start=240">Forum Help</a>
		</td>
		<td><img src="/images/platforms/dsm-g600.png"></td>
		<td>
			<b>DSM-G600</b>
			<br><a href="http://forum.dsmg600.info/t2719-%5BREL%5D-Transmission.html">Newest Build</a>
		</td>
	</tr>
	<tr>
		<td><img src="/images/platforms/synology.png"></td>
		<td>
			<b>Synology</b>
			<br><a href="http://forum.synology.com/enu/viewtopic.php?f=38&t=14773">Newest Build</a>
			<br><a href="http://forum.synology.com/enu/viewforum.php?f=38">Forum Help</a>
		</td>
		<td><img src="/images/platforms/ip-box-9000.png"></td>
		<td>
			<b>IP Box 9000</b>
			<br><a href="http://www.sat-universe.com/showthread.php?t=123931&page=2">Newest Build</a>
		</td>
	</tr>
</tbody></table>

<?php include('includes/footer.php'); ?>
