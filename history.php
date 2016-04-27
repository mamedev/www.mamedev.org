<?php
$title = 'MAME | Project History';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

		<center><h1 class="page-header">MAME Project History</h1></center>
		
		<h2>What's New?</h2>

		<p>
		A project as big as MAME certainly has had its ups and downs during the course of its existence.
		A comprehensive list of what has changed in the project from a source code point of view is 
		available in the various whatsnew.txt files that can be found on the 
		<a href="oldrel.html">Previous Releases</a> page. The content of these files has also been
		extracted into our wiki in the <a href="http://wiki.mamedev.org/index.php/Previous_MAME_Versions">Previous MAME Versions</a>
		section.
		</p>
		
		<p>
		And if you're looking for
		a comprehensive whatsnew up to version 0.112, you can download the source code for the 10th
		anniversary 0.112 release, which contains giant combined whatsnew.
		</p>

		<a href="mame_chart_0128.png"><img alt="Chart of MAME Development" align="right" src="mame_chart_0128_thumb.png" width="256" height="192" /></a>

		<h2>Supported ROMs</h2>

		<p>
		An alternate measure of the success of the project is to simply count the number of supported ROMsets.
		The chart at the right (click for a larger view, and thanks to Fujix for producing the chart) 
		shows the overall trend since the beginning, counting both "unique" ROMsets and total ROMsets. 
		As you can see, the project is still achieving a respectable 
		trajectory given just how challenging it is becoming to find new unemulated arcade systems.
		</p>

		<p>
		Additional versions:
		</p>
		<ul>
		<li><a href="mame_chart_0128.png">1600 x 1200 PNG image</a></li>
		<li><a href="mame_chart_0128.pdf">Vector PDF file</a></li>
		</ul>

		<h2>Daily Work-in-Progress 1999-2004</h2>
		
		<p>
		Another fascinating way to look back at the project's history is to peruse the incredibly
		detailed Daily MAME Work-in-Progress (WIP) pages. From <a href="oldwip/wip9902.html">Feburary 1999</a>
		through <a href="oldwip/wip0407.html">July 2004</a>, Santeri Saarimaa took on the challenging task of 
		maintaining a detailed daily work-in-progress report of MAME development. These page represent a peek 
		into what was happening during one of the most active times in the project's development.
		</p>

		<h2>Project Milestones</h2>
		<p>
		However, even just simply counting supported ROMsets, reading the whatsnew files, and looking
		at the old WIP pages isn't enough to reflect the full history of the project. In an effort to at 
		least touch on some of the highlights and project milestones that generally aren't directly 
		reflected in the whatsnew, the table below lists some important project-level changes and significant 
		new achievements that have impacted the project.
		</p>
		
			<div class="panel panel-primary">
			  <div class="panel-heading">MAME Project Timeline</div>

<table class="table">
 <tr>
  <th colspan=3>1997</th>
 </tr>
 <tr>
  <td class="date" width="10%">05 Feb 97</td>
  <td class="version" width="15%">0.1</td>
  <td>MAME 0.1 released.</td>
 </tr>
 <tr>
  <td class="date" width="10%">18 Feb 97</td>
  <td class="version" width="15%">0.4</td>
  <td>First version of MacMAME released.</td>
 </tr>
 <tr>
  <td class="date" width="10%">23 Mar 97</td>
  <td class="version" width="15%">0.12</td>
  <td>First support for multiple CPUs.</td>
 </tr>
 <tr>
  <td class="date" width="10%">26 Mar 97</td>
  <td class="version" width="15%">0.13</td>
  <td>High score saving support added.</td>
 </tr>
 <tr>
  <td class="date" width="10%">20 Apr 97</td>
  <td class="version" width="15%">0.18</td>
  <td>First version of X/MAME checked in.</td>
 </tr>
 <tr>
  <td class="date" width="10%">26 Apr 97</td>
  <td class="version" width="15%">0.19</td>
  <td>Mirko Buffoni takes over from Nicola as MAME coordinator.</td>
 </tr>
 <tr>
  <td class="date" width="10%">02 Jun 97</td>
  <td class="version" width="15%">0.23</td>
  <td>First FM synthesis-based sound chip supported — but only through a hack
  to use the OPL on a SoundBlaster card under DOS.</td>
 </tr>
 <tr>
  <td class="date" width="10%">14 Jul 97</td>
  <td class="version" width="15%">0.26</td>
  <td>First vector games added to MAME.</td>
 </tr>
 <tr>
  <td class="date" width="10%">18 Jul 97</td>
  <td class="version" width="15%">0.26.1</td>
  <td>First release of MAME32.</td>
 </tr>
 <tr>
  <td class="date" width="10%">10 Aug 97</td>
  <td class="version" width="15%">0.27</td>
  <td>Nicola returns as MAME coordinator. MAME switched away from the GPL
  license.</td>
 </tr>
 <tr>
  <td class="date" width="10%">07 Sep 97</td>
  <td class="version" width="15%">0.28</td>
  <td>First 68000 game emulated (Rastan).</td>
 </tr>
 <tr>
  <th colspan=3>1998</th>
 </tr>
 <tr>
  <td class="date" width="10%">08 Jan 98</td>
  <td class="version" width="15%">0.30</td>
  <td>YM2151 supported added.</td>
 </tr>
 <tr>
  <td class="date" width="10%">25 Apr 98</td>
  <td class="version" width="15%">0.31</td>
  <td>Atari slapstic first emulated. Timer system added. Built-in ZIP file
  support added.</td>
 </tr>
 <tr>
  <td class="date" width="10%">03 May 98</td>
  <td class="version" width="15%">0.33b1</td>
  <td>Public betas started; previously users would have to wait several months
  between releases. The series of betas were sometimes followed by some rc
  (release candidate) versions.</td>
 </tr>
 <tr>
  <td class="date" width="10%">16 Aug 98</td>
  <td class="version" width="15%">0.34b1</td>
  <td>First appearance of Neo Geo games, which have been the source of much
  controversy ever since.</td>
 </tr>
 <tr>
  <td class="date" width="10%">30 Aug 98</td>
  <td class="version" width="15%">0.34b2</td>
  <td>First DSP core added: the TMS34010.</td>
 </tr>
 <tr>
  <td class="date" width="10%">04 Oct 98</td>
  <td class="version" width="15%">0.34b4</td>
  <td>Began using CRCs to identify ROMs.</td>
 </tr>
 <tr>
  <th colspan=3>1999</th>
 </tr>
 <tr>
  <td class="date" width="10%">15 Feb 99</td>
  <td class="version" width="15%">0.35b3</td>
  <td>Internal tilemap code added. Previously many drivers did tilemaps their
  own way.</td>
 </tr>
 <tr>
  <td class="date" width="10%">24 May 99</td>
  <td class="version" width="15%">0.35b13</td>
  <td>Switched to PNG from PCX as the main screenshot image format.</td>
 </tr>
 <tr>
  <td class="date" width="10%">08 Aug 99</td>
  <td class="version" width="15%">0.36b2</td>
  <td>Konami 052001/053248 CPU first emulated.</td>
 </tr>
 <tr>
  <th colspan=3>2000</th>
 </tr>
 <tr>
  <td class="date" width="10%">26 Feb 00</td>
  <td class="version" width="15%">0.36rc1</td>
  <td>Removed Pong and gambling game drivers.</td>
 </tr>
 <tr>
  <td class="date" width="10%">06 Nov 00</td>
  <td class="version" width="15%">0.37b9</td>
  <td>First proper 32-bit CPU added (68EC020).</td>
 </tr>
 <tr>
  <th colspan=3>2001</th>
 </tr>
 <tr>
  <td class="date" width="10%">17 Jan 01</td>
  <td class="version" width="15%">0.37b11</td>
  <td>Initial support for discrete sound emulation.</td>
 </tr>
 <tr>
  <td class="date" width="10%">24 May 01</td>
  <td class="version" width="15%">0.37b15</td>
  <td>Windows takes over from DOS as the primary development target.</td>
 </tr>
 <tr>
  <td class="date" width="10%">19 Aug 01</td>
  <td class="version" width="15%">0.37b16</td>
  <td>First checkins for AdvanceMAME.</td>
 </tr>
 <tr>
  <td class="date" width="10%">12 Aug 01</td>
  <td class="version" width="15%">0.53</td>
  <td>Abandoning of &quot;beta&quot; numbering scheme.</td>
 </tr>
 <tr>
  <td class="date" width="10%">24 Aug 01</td>
  <td class="version" width="15%">0.54</td>
  <td>First release to call out MAMETesters bugs.</td>
 </tr>
 <tr>
  <th colspan=3>2002</th>
 </tr>
 <tr>
  <td class="date" width="10%">01 May 02</td>
  <td class="version" width="15%">0.60</td>
  <td>Removed SoundBlaster FM support as software-based emulation finally
  became better in almost all cases.</td>
 </tr>
 <tr>
  <td class="date" width="10%">04 Jul 02</td>
  <td class="version" width="15%">0.61</td>
  <td>Added initial support for artwork external to games.</td>
 </tr>
 <tr>
  <th colspan=3>2003</th>
 </tr>
 <tr>
  <td class="date" width="10%">06 Apr 03</td>
  <td class="version" width="15%">0.67</td>
  <td>First dynamic recompiled CPU core added: MIPS3.</td>
 </tr>
 <tr>
  <td class="date" width="10%">15 May 03</td>
  <td class="version" width="15%">0.68</td>
  <td>David Haywood takes over from Nicola as MAME coordinator. Added SHA1
  hashes in addition to CRCs to reduce hacks and prevent collisions.</td>
 </tr>
 <tr>
  <td class="date" width="10%">23 May 03</td>
  <td class="version" width="15%">0.69u3</td>
  <td>First release to have intermediate 'u' updates (0.69), actual first 5
  Jun.</td>
 </tr>
 <tr>
  <td class="date" width="10%">09 Aug 03</td>
  <td class="version" width="15%">0.72</td>
  <td>First emulation of the SP0250 speech chip.</td>
 </tr>
 <tr>
  <td class="date" width="10%">12 Oct 03</td>
  <td class="version" width="15%">0.75</td>
  <td>Removed the concept of TESTDRIVERS, making all drivers available in all
  builds.</td>
 </tr>
 <tr>
  <td class="date" width="10%">11 Nov 03</td>
  <td class="version" width="15%">0.77</td>
  <td>3dfx Voodoo emulation added.</td>
 </tr>
 <tr>
  <th colspan=3>2004</th>
 </tr>
 <tr>
  <td class="date" width="10%">24 Oct 04</td>
  <td class="version" width="15%">0.88</td>
  <td>Sega FD1094 decryption added.</td>
 </tr>
 <tr>
  <td class="date" width="10%">24 Nov 04</td>
  <td class="version" width="15%">0.89</td>
  <td>New debugger added.</td>
 </tr>
 <tr>
  <th colspan=3>2005</th>
 </tr>
 <tr>
  <td class="date" width="10%">27 Feb 05</td>
  <td class="version" width="15%">0.93</td>
  <td>Major sound system reorganization around streams.</td>
 </tr>
 <tr>
  <td class="date" width="10%">07 Apr 05</td>
  <td></td>
  <td>mamedev.org is born (mamedev.com actually initially).</td>
 </tr>
 <tr>
  <td class="date" width="10%">18 Apr 05</td>
  <td></td>
  <td>Aaron Giles takes over from David Haywood as MAME coordinator.</td>
 </tr>
 <tr>
  <td class="date" width="10%">03 May 05</td>
  <td class="version" width="15%">0.96</td>
  <td>Changed the license to be based off of the BSD license, with commercial
  restrictions.</td>
 </tr>
 <tr>
  <td class="date" width="10%">14 Aug 05</td>
  <td class="version" width="15%">0.99u2</td>
  <td>Video-based gambling games added (drivers ported from AGEMAME).</td>
 </tr>
 <tr>
  <td class="date" width="10%">14 Sep 05</td>
  <td class="version" width="15%">0.100</td>
  <td>Added back support for some gambling games.</td>
 </tr>
 <tr>
  <th colspan=3>2006</th>
 </tr>
 <tr>
  <td class="date" width="10%">23 Jan 06</td>
  <td></td>
  <td>mamedev.org is finally an .org (and on new servers).</td>
 </tr>
 <tr>
  <td class="date" width="10%">03 Jun 06</td>
  <td class="version" width="15%">0.106u1</td>
  <td>First version of SDLMAME released.</td>
 </tr>
 <tr>
  <td class="date" width="10%">25 May 06</td>
  <td class="version" width="15%">0.106u2</td>
  <td>New video system, focused on letting the video hardware do compositing
  (enabled by default in 0.106u3 - Jun 1)</td>
 </tr>
 <tr>
  <td class="date" width="10%">20 Aug 06</td>
  <td class="version" width="15%">0.108</td>
  <td>High score support removed.</td>
 </tr>
 <tr>
  <th colspan=3>2007</th>
 </tr>
 <tr>
  <td class="date" width="10%">05 Feb 07</td>
  <td class="version" width="15%">0.112</td>
  <td>CPS2 decryption fully implemented.</td>
 </tr>
 <tr>
  <td class="date" width="10%">07 Feb 07</td>
  <td></td>
  <td>MAME 10 year anniversary. Wiki added in mamedev.org.</td>
 </tr>
 <tr>
  <td class="date" width="10%">12 Feb 07</td>
  <td class="version" width="15%">0.112u1</td>
  <td>MAME code reorganized.</td>
 </tr>
 <tr>
  <td class="date" width="10%">26 Feb 07</td>
  <td class="version" width="15%">0.112u3</td>
  <td>Major changes in sound generation.</td>
 </tr>
 <tr>
  <td class="date" width="10%">17 Jun 07</td>
  <td></td>
  <td>SDL headers/libraries. Build SDLMAME out of the box.</td>
 </tr>
 <tr>
  <td class="date" width="10%">20 Jun 07</td>
  <td></td>
  <td>CPS3 decryption added. (0.116u2)</td>
 </tr>
 <tr>
  <td class="date" width="10%">10 Jul 07</td>
  <td class="version" width="15%">0.117</td>
  <td>Interesting little fact of history: MAME for the first time includes a
  preliminary driver of a bootleg multigame arcade that is based on a hacked
  early version... MAME!</td>
 </tr>
 <tr>
  <td class="date" width="10%">19 Jul 07</td>
  <td class="version" width="15%">0.117u1</td>
  <td>Major changes in input system. Basic UI to select a game.</td>
 </tr>
 <tr>
  <td class="date" width="10%">15 Oct 07</td>
  <td class="version" width="15%">0.120</td>
  <td>First official x64 build. Further source tree clean up (started few u
  releases earlier with new development tools).</td>
 </tr>
 <tr>
  <td class="date" width="10%">01 Dev 07</td>
  <td></td>
  <td>New server for mamedev.org.</td>
 </tr>
 <tr>
  <th colspan=3>2008</th>
 </tr>
 <tr>
  <td class="date" width="10%">26 Jun 08</td>
  <td></td>
  <td>MAME debugger included all the time.</td>
 </tr>
 <tr>
  <td class="date" width="10%">06 Jul 08</td>
  <td class="version" width="15%">0.126</td>
  <td>New universal recompiler engine (started few u releases earlier), cheat
  engine in the middle of renovation (disabled).</td>
 </tr>
 <tr>
  <td class="date" width="10%">07 Aug 08</td>
  <td class="version" width="15%">0.126u4</td>
  <td>Cheat re-enabled (read-only), renovation continues.</td>
 </tr>
 <tr>
  <td class="date" width="10%">19 Aug 08</td>
  <td class="version" width="15%">0.127</td>
  <td>First laserdisc game emulated (Cube Quest).</td>
 </tr>
 <tr>
  <td class="date" width="10%">01 Nov 08</td>
  <td></td>
  <td>mamedev.org renovated.</td>
 </tr>
 <tr>
  <td class="date" width="10%">21 Dev 08</td>
  <td class="version" width="15%">0.128u7</td>
  <td>Internal (source) changes: Global Machine pointer eliminated, CPUs are
  &quot;devices&quot;.</td>
 </tr>
 <tr>
  <th colspan=3>2009</th>
 </tr>
 <tr>
  <td class="date" width="10%">26 Feb 09</td>
  <td class="version" width="15%">0.129u5</td>
  <td>More hardware components are becoming &quot;devices&quot;.</td>
 </tr>
 <tr>
  <td class="date" width="10%">19 Mar 09</td>
  <td class="version" width="15%">0.130u1</td>
  <td>Major change in CHD file format.</td>
 </tr>
 <tr>
  <td class="date" width="10%">02 Aug 09</td>
  <td class="version" width="15%">0.133u1</td>
  <td>39 in 1 (MAME rip-off originally added in 0.117) now working.</td>
 </tr>
 <tr>
  <th colspan=3>2010</th>
 </tr>
 <tr>
  <td class="date" width="10%">15 May 10</td>
  <td class="version" width="15%">0.138</td>
  <td>MESS gets support for Software Lists.</td>
 </tr>
 <tr>
  <td class="date" width="10%">29 Jul 10</td>
  <td class="version" width="15%">0.139</td>
  <td>Larger binary due to on-going move to C++ work.</td>
 </tr>
 <tr>
  <th colspan=3>2011</th>
 </tr>
 <tr>
  <td class="date" width="10%">05 Apr 11</td>
  <td></td>
  <td>Angelo Salese (Kale) takes over from Aaron Giles (longest standing yet -
  with Nicola Salmoria close behind) as MAME coordinator.</td>
 </tr>
 <tr>
  <td class="date" width="10%">24 May 11</td>
  <td class="version" width="15%">0.142u4</td>
  <td>HLSL effects added.</td>
 </tr>
 <tr>
  <th colspan=3>2012</th>
 </tr>
 <tr>
  <td class="date" width="10%">19 Feb 12</td>
  <td class="version" width="15%">0.145u1</td>
  <td>7zip support and change in CHD format.</td>
 </tr>
 <tr>
  <td class="date" width="10%">08 Apr 12</td>
  <td></td>
  <td>Many drivers modernized.</td>
 </tr>
 <tr>
  <td class="date" width="10%">26 Apr 12</td>
  <td></td>
  <td>Miodrag Milanovic (Micko) takes over from Kale.</td>
 </tr>
 <tr>
  <td class="date" width="10%">20 Aug 12</td>
  <td></td>
  <td>New dev tools including support for building QT4.</td>
 </tr>
 <tr>
  <td class="date" width="10%">21 Aug 12</td>
  <td></td>
  <td>Project (MAME and MESS) moved to SVN.</td>
 </tr>
 <tr>
  <td class="date" width="10%">07 Dev 12</td>
  <td></td>
  <td>Support for Python (and new dev tools).</td>
 </tr>
 <tr>
  <th colspan=3>2013</th>
 </tr>
 <tr>
  <td class="date" width="10%">11 Jan 13</td>
  <td class="version" width="15%">0.148</td>
  <td>First mention of MESS along with MAME in release news and first MESS
  binary in mamedev.org site, widening the foundation towards project merging.</td>
 </tr>
 <tr>
  <td class="date" width="10%">10 Mar 13</td>
  <td></td>
  <td>Site on new server.</td>
 </tr>
 <tr>
  <td class="date" width="10%">23 Jul 13</td>
  <td class="version" width="15%">0.149u1</td>
  <td>Last u release.</td>
 </tr>
 <tr>
  <td class="date" width="10%">17 Sep 13</td>
  <td class="version" width="15%">0.150</td>
  <td>First release after abandoning u intermediate releases. Major video
  interface changes.</td>
 </tr>
 <tr>
  <td class="date" width="10%">05 Nov 13</td>
  <td class="version" width="15%">0.151</td>
  <td>Major NeoGeo driver updates.</td>
 </tr>
 <tr>
  <th colspan=3>2014</th>
 </tr>
 <tr>
  <td class="date" width="10%">07 Apr 14</td>
  <td class="version" width="15%">0.153</td>
  <td>Independent palettes (as devices) and other architectural changes and
  major code modernization.</td>
 </tr>
 <tr>
  <td class="date" width="10%">20 Oct 14</td>
  <td></td>
  <td>Project (alson) on GIT.</td>
 </tr>
 <tr>
  <th colspan=3>2015</th>
 </tr>
 <tr>
  <td class="date" width="10%">20 May 15</td>
  <td></td>
  <td>MAME starts work to become Open Source.</td>
 </tr>
 <tr>
  <td class="date" width="10%">27 May 15</td>
  <td class="version" width="15%">0.162</td>
  <td>MESS merges with MAME.</td>
 </tr>
 <tr>
  <td class="date" width="10%">28 Oct 15</td>
  <td class="version" width="15%">0.167</td>
  <td>Major HLSL changes.</td>
 </tr>
 <tr>
  <td class="date" width="10%">25 Nov 15</td>
  <td class="version" width="15%">0.168</td>
  <td>More HLSL changes.</td>
 </tr>
 <tr>
  <td class="date" width="10%">30 Dev 15</td>
  <td class="version" width="15%">0.169</td>
  <td>Modernized core to C++14. First release to build clean in Raspberry Pi 2
  and other ARM Linux targets.</td>
 </tr>
 <tr>
  <th colspan=3>2016</th>
 </tr>
 <tr>
  <td class="date" width="10%">01 Jan 16</td>
  <td></td>
  <td>MSYS2 based tools to build MAME.</td>
 </tr>
 <tr>
  <td class="date" width="10%">27 Jan 16</td>
  <td class="version" width="15%">0.170</td>
  <td>LUA support (back) in. More video filtering/effects work.</td>
 </tr>
 <tr>
  <td class="date" width="10%">24 Feb 16</td>
  <td class="version" width="15%">0.171</td>
  <td>MEWUI merges with MAME replacing default MAME UI for most platforms.
  Initial BGFX work. Support for videosnaps capture.</td>
 </tr>
 <tr>
  <td class="date" width="10%">04 Mar 16</td>
  <td></td>
  <td>MAME is now Free and Open Source software based on GPL-2.0+ license.</td>
 </tr>
 <tr>
  <td class="date" width="10%">30 Mar 16</td>
  <td class="version" width="15%">0.172</td>
  <td>First MAME release with new license. New documentation. Major ini
  changes. Extended BGFX renderer (planing to move completely to). Improved
  screen effects. Major improvement of file handling support.</td>
 </tr>
 <tr>
  <td class="date" width="10%">27 Apr 16</td>
  <td class="version" width="15%">0.173</td>
  <td>Plenty new graphics scaling modes. Support for large archives (&gt;4GB
  and newer archive features), solving the issue with huge zipped extras in PD.
  Some work towards Universal Windows App support (UWP).</td>
 </tr>
 </table>

		</div>
	<br/>
	<br/>
	</div>
    <!-- /.container -->
	
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
