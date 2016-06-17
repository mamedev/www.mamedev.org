<?php
$title = 'MAME | Project History';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

		<center><h1 class="page-header">MAME Project History</h1></center>
		<center><h2>...and MESS</h2></center>
		
		<h2>What's New?</h2>

		<p>
		A project as big as MAME certainly has had its ups and downs during the course of its existence. A comprehensive list of what has changed in the project from a source code point of view is 
		available in the various whatsnew.txt files that can be found on the <a href="oldrel.html">Previous Releases</a> page. The content of these files has also been extracted into our wiki in the <a href="http://wiki.mamedev.org/index.php/Previous_MAME_Versions">Previous MAME Versions</a> section.
		</p>
		
		<a target="_blank" href="mame_chart_0174.png"><img alt="Chart of MAME Development" align="right" src="mame_chart_0174_thumb.png" width="256" height="167" /></a>

		<h2>Supported ROMs</h2>

		<p>
		An alternate measure of the success of the project is to simply count the number of supported sets. The chart at the right (click for a larger view) shows the overall trend since the beginning.
		</p>
		<a target="_blank" href="mame_chart_0174.pdf">Vector PDF file</a>

		<h2>Daily Work-in-Progress 1999-2004</h2>
		
		<p>
		Another fascinating way to look back at the project's history is to peruse the incredibly detailed Daily MAME Work-in-Progress (WIP) pages. From <a href="oldwip/wip9902.html">Feburary 1999</a> through <a href="oldwip/wip0407.html">July 2004</a>, Santeri Saarimaa took on the challenging task of maintaining a detailed daily work-in-progress report of MAME development. These page represent a peek into what was happening during one of the most active times in the project's development.
		</p>
		
		<h2>Tables</h2>
		
		<p>
		Two tables are provided for people that want to know more about the project's history.<br>
		The first one right below, lists what are considered major milestones of the project.
		</p>
		<p>
		Then there is a much bigger table (super-set of the one below), listing every MAME (and MESS) release, important milestones, date of release, number of parents, clones, devices, CHD (for MAME only), Mechanical and non-working sets. These data are also used for the graph.
		</p>
		<a target="_blank" href="full_mame_history.html">MAME Complete History Table</a>
		
		<h2>Project Milestones</h2>

<div class="panel panel-primary">
	  <div class="panel-heading">MAME Project Milestones</div>
<table class="table">
 <col width=12% align="right">
 <col width=18% align="center">
 <col width=70%>
 <tr>
  <td>Release</td>
  <td>Version</td>
  <td>Milestone</td>
 </tr>
 <tr>
  <td>27
  Apr 16</td>
  <td>0.173</td>
  <td>Plenty new graphics
  scaling modes. Support for large archives (&gt;4GB and newer archive
  features), solving the issue with huge zipped extras in PD. Some work towards
  Universal Windows App support (UWP).
  </td>
 </tr>
 <tr>
  <td>30
  Mar 16</td>
  <td>0.172</td>
  <td>First MAME release with
  new license. New documentation. Major ini changes. Extended BGFX renderer
  (planing to move completely to). Improved screen effects. Major improvement
  of file handling support.</td>
 </tr>
 <tr>
  <td>04
  Mar 16</td>
  <td></td>
  <td>MAME is now Free and Open
  Source software based on GPL-2.0+ license.</td>
 </tr>
 <tr>
  <td>24
  Feb 16</td>
  <td>0.171</td>
  <td>MEWUI merges with MAME
  replacing default MAME UI for most platforms. Initial BGFX work. Support for
  videosnaps capture.</td>
 </tr>
 <tr>
  <td>27
  Jan 16</td>
  <td>0.170</td>
  <td>LUA support (back) in.
  More video filtering/effects work.</td>
 </tr>
 <tr>
  <td>01
  Jan 16</td>
  <td></td>
  <td>MSYS2 based tools to build
  MAME.</td>
 </tr>
 <tr>
  <td>30
  Dec 15</td>
  <td>0.169</td>
  <td>Modernized core to C++14.
  First release to build clean in Raspberry Pi 2 and other ARM Linux targets.</td>
 </tr>
 <tr>
  <td>25
  Nov 15</td>
  <td>0.168</td>
  <td>More HLSL changes.</td>
 </tr>
 <tr>
  <td>28
  Oct 15</td>
  <td>0.167</td>
  <td>Major HLSL changes.</td>
 </tr>
 <tr>
  <td>27
  May 15</td>
  <td>0.162</td>
  <td>MESS merges with MAME.</td>
 </tr>
 <tr>
  <td>20
  May 15</td>
  <td></td>
  <td>MAME starts work to become
  Open Source.</td>
 </tr>
 <tr>
  <td>25
  Feb 15</td>
  <td>0.159</td>
  <td>Massive addition of mechanical games.</td>
 </tr>
 <tr>
  <td>23
  Jul 14</td>
  <td>0.154</td>
  <td>Many devices added.</td>
 </tr>
 <tr>
  <td>20
  Oct 14</td>
  <td></td>
  <td>Project (also) on GIT.</td>
 </tr>
 <tr>
  <td>07
  Apr 14</td>
  <td>0.153</td>
  <td>Independent palettes (as
  devices) and other architectural changes and major code modernization.</td>
 </tr>
 <tr>
  <td>05
  Nov 13</td>
  <td>0.151</td>
  <td>Major NeoGeo driver
  updates.</td>
 </tr>
 <tr>
  <td>17
  Sep 13</td>
  <td>0.150</td>
  <td>First release after
  abandoning u intermediate releases. Major video interface changes. Many new video devices because of the change.</td>
 </tr>
 <tr>
  <td>23
  Jul 13</td>
  <td>0.149u1</td>
  <td>Last u release. Major work on the definition of devices.</td>
 </tr>
 <tr>
  <td>10
  Mar 13</td>
  <td></td>
  <td>Site on new server.</td>
 </tr>
 <tr>
  <td>11
  Jan 13</td>
  <td>0.148</td>
  <td>First mention of MESS
  along with MAME in release news and first MESS binary in mamedev.org site,
  widening the foundation towards project merging.</td>
 </tr>
 <tr>
  <td>07
  Dec 12</td>
  <td></td>
  <td>Support for Python (and
  new dev tools).</td>
 </tr>
 <tr>
  <td>17
  Sep 12</td>
  <td>0.147</td>
  <td>Pong is back in MAME.</td>
 </tr>
 <tr>
  <td>21
  Aug 12</td>
  <td></td>
  <td>Project (MAME and MESS)
  moved to SVN.</td>
 </tr>
 <tr>
  <td>20
  Aug 12</td>
  <td>0.146u5</td>
  <td>New dev tools including
  support for building QT4. Massive addition of mechanical games and clones (not necessarily working).</td>
 </tr>
 <tr>
  <td>30
  Jul 12</td>
  <td>0.146u4</td>
  <td>Major addition of mechanical games and clones
  .</td>
 </tr>
 <tr>
  <td>26
  Apr 12</td>
  <td></td>
  <td>Miodrag Milanovic (Micko)
  takes over from Kale.</td>
 </tr>
 <tr>
  <td>08
  Apr 12</td>
  <td>0.145u6</td>
  <td>Many drivers modernized.</td>
 </tr>
 <tr>
  <td>19
  Feb 12</td>
  <td>0.145u1</td>
  <td>7zip support and change in
  CHD format.</td>
 </tr>
 <tr>
  <td>20
  Sep 11</td>
  <td>0.143u6</td>
  <td>One more major addition of gambling and fruit machine titles.</td>
 </tr>
 <tr>
  <td>25
  Aug 11</td>
  <td>0.143u4</td>
  <td>Further addition of gambling and fruit machine titles.</td>
 </tr>
 <tr>
  <td>15
  Aug 11</td>
  <td>0.143u3</td>
  <td>Beginning of the concept of "devices". Further addition of gambling and fruit machine titles.</td>
 </tr>
 <tr>
  <td>27
  Jul 11</td>
  <td>0.143u2</td>
  <td>Major addition of gambling titles.</td>
 </tr>
 <tr>
  <td>24
  May 11</td>
  <td>0.142u4</td>
  <td>HLSL effects added.</td>
 </tr>
 <tr>
  <td>05
  Apr 11</td>
  <td></td>
  <td>Angelo Salese (Kale) takes
  over from Aaron Giles (longest standing yet - with Nicola Salmoria close
  behind) as MAME coordinator.</td>
 </tr>
 <tr>
  <td>24
  Jan 11</td>
  <td>0.141u1</td>
  <td>Implemented mechanical games (pinball, redemption, bowling etc.). Imported drivers from PINMAME.</td>
 </tr>
 <tr>
  <td>29
  Jul 10</td>
  <td>0.139</td>
  <td>Larger binary due to
  on-going move to C++ work.</td>
 </tr>
 <tr>
  <td>15
  May 10</td>
  <td>0.138</td>
  <td>MESS gets support for
  Software Lists.</td>
 </tr>
 <tr>
  <td>11
  Mar 10</td>
  <td>0.137</td>
  <td>SDLMAME is now part of the main source package.</td>
 </tr>
 <tr>
  <td>13
  Aug 09</td>
  <td>0.133u2</td>
  <td>Many renames.</td>
 </tr>
 <tr>
  <td>02
  Aug 09</td>
  <td>0.133u1</td>
  <td>39 in 1 (MAME rip-off
  originally added in 0.117) now working. Huge number of renames.</td>
 </tr>
 <tr>
  <td>19
  Mar 09</td>
  <td>0.130u1</td>
  <td>Major change in CHD file
  format.</td>
 </tr>
 <tr>
  <td>26
  Feb 09</td>
  <td>0.129u5</td>
  <td>More hardware components
  are becoming &quot;devices&quot;.</td>
 </tr>
 <tr>
  <td>17
  Feb 09</td>
  <td>0.129u4</td>
  <td>Added some AGEMAME drivers.</td>
 </tr>
 <tr>
  <td>21
  Dec 08</td>
  <td>0.128u7</td>
  <td>Internal (source) changes:
  Global Machine pointer eliminated, CPUs are &quot;devices&quot;.</td>
 </tr>
 <tr>
  <td>01
  Nov 08</td>
  <td>0.128u2</td>
  <td>mamedev.org renovated.</td>
 </tr>
 <tr>
  <td>19
  Aug 08</td>
  <td>0.127</td>
  <td>First laserdisc game
  emulated (Cube Quest).</td>
 </tr>
 <tr>
  <td>07
  Aug 08</td>
  <td>0.126u4</td>
  <td>Cheat re-enabled
  (read-only), renovation continues.</td>
 </tr>
 <tr>
  <td>06
  Jul 08</td>
  <td>0.126</td>
  <td>New universal recompiler
  engine (started few u releases earlier), cheat engine in the middle of
  renovation (disabled).</td>
 </tr>
 <tr>
  <td>26
  Jun 08</td>
  <td>0.125u8</td>
  <td>MAME debugger included all
  the time.</td>
 </tr>
 <tr>
  <td>01
  Dec 07</td>
  <td></td>
  <td>New server for
  mamedev.org.</td>
 </tr>
 <tr>
  <td>15
  Oct 07</td>
  <td>0.120</td>
  <td>First official x64 build.
  Further source tree clean up (started few u releases earlier with new
  development tools).</td>
 </tr>
 <tr>
  <td>19
  Jul 07</td>
  <td>0.117u1</td>
  <td>Major changes in input
  system. Basic UI to select a game.</td>
 </tr>
 <tr>
  <td>10
  Jul 07</td>
  <td>0.117</td>
  <td>Interesting little fact of
  history: MAME for the first time includes a preliminary driver of a bootleg
  multigame arcade that is based on a hacked early version... MAME!</td>
 </tr>
 <tr>
  <td>20
  Jun 07</td>
  <td>0.116u2</td>
  <td>CPS3 decryption added.</td>
 </tr>
 <tr>
  <td>17
  Jun 07</td>
  <td></td>
  <td>SDL headers/libraries.
  Build SDLMAME out of the box.</td>
 </tr>
 <tr>
  <td>26
  Feb 07</td>
  <td>0.112u3</td>
  <td>Major changes in sound
  generation.</td>
 </tr>
 <tr>
  <td>12
  Feb 07</td>
  <td>0.112u1</td>
  <td>MAME code reorganized.</td>
 </tr>
 <tr>
  <td>07
  Feb 07</td>
  <td></td>
  <td>MAME 10 year anniversary.
  Wiki added in mamedev.org.</td>
 </tr>
 <tr>
  <td>05
  Feb 07</td>
  <td>0.112</td>
  <td>CPS2 decryption fully
  implemented.</td>
 </tr>
 <tr>
  <td>16`
  Nov 06</td>
  <td>0.110u3</td>
  <td>Added support for split CHD.</td>
 </tr>
 <tr>
  <td>20
  Aug 06</td>
  <td>0.108</td>
  <td>High score support
  removed.</td>
 </tr>
 <tr>
  <td>25
  May 06</td>
  <td>0.106u2</td>
  <td>New video system, focused
  on letting the video hardware do compositing (enabled by default in 0.106u3 -
  Jun 1)</td>
 </tr>
 <tr>
  <td>03
  Jun 06</td>
  <td>0.106u1</td>
  <td>First version of SDLMAME
  released.</td>
 </tr>
 <tr>
  <td>23
  Jan 06</td>
  <td></td>
  <td>mamedev.org is finally an
  .org (and on new servers).</td>
 </tr>
 <tr>
  <td>14
  Sep 05</td>
  <td>0.100</td>
  <td>Added back support for
  some gambling games.</td>
 </tr>
 <tr>
  <td>14
  Aug 05</td>
  <td>0.99u2</td>
  <td>Video-based gambling games
  added (drivers ported from AGEMAME).</td>
 </tr>
 <tr>
  <td>03
  May 05</td>
  <td>0.96</td>
  <td>Changed the license to be
  based off of the BSD license, with commercial restrictions.</td>
 </tr>
 <tr>
  <td>18
  Apr 05</td>
  <td></td>
  <td>Aaron Giles takes over
  from David Haywood as MAME coordinator.</td>
 </tr>
 <tr>
  <td>07
  Apr 05</td>
  <td></td>
  <td>mamedev.org is born
  (mamedev.com actually initially).</td>
 </tr>
 <tr>
  <td>27
  Feb 05</td>
  <td>0.93</td>
  <td>Major sound system
  reorganization around streams.</td>
 </tr>
 <tr>
  <td>13
  Feb 05</td>
  <td>0.92</td>
  <td>Sega improvements and clean up.</td>
 </tr>
 <tr>
  <td>24
  Nov 04</td>
  <td>0.89</td>
  <td>New debugger added.</td>
 </tr>
 <tr>
  <td>24
  Oct 04</td>
  <td>0.88</td>
  <td>Sega FD1094 decryption
  added.</td>
 </tr>
 <tr>
  <td>11
  Nov 03</td>
  <td>0.77</td>
  <td>3dfx Voodoo emulation
  added.</td>
 </tr>
 <tr>
  <td>06
  Oct 03</td>
  <td>0.74u2</td>
  <td>Removed the concept of
  TESTDRIVERS, making all drivers available in all builds.</td>
 </tr>
 <tr>
  <td>09
  Aug 03</td>
  <td>0.72</td>
  <td>First emulation of the
  SP0250 speech chip.</td>
 </tr>
 <tr>
  <td>05
  Jun 03</td>
  <td>0.69u3</td>
  <td>First release to have
  intermediate 'u' updates.</td>
 </tr>
 <tr>
  <td>15
  May 03</td>
  <td>0.68</td>
  <td>David Haywood takes over
  from Nicola as MAME coordinator. Added SHA1 hashes in addition to CRCs to
  reduce hacks and prevent collisions.</td>
 </tr>
 <tr>
  <td>06
  Apr 03</td>
  <td>0.67</td>
  <td>First dynamic recompiled
  CPU core added: MIPS3.</td>
 </tr>
 <tr>
  <td>04
  Jul 02</td>
  <td>0.61</td>
  <td>Added initial support for
  artwork external to games.</td>
 </tr>
 <tr>
  <td>01
  May 02</td>
  <td>0.60</td>
  <td>Removed SoundBlaster FM
  support as software-based emulation finally became better in almost all
  cases.</td>
 </tr>
 <tr>
  <td>24
  Aug 01</td>
  <td>0.54</td>
  <td>First release to call out
  MAMETesters bugs.</td>
 </tr>
 <tr>
  <td>16
  Aug 01</td>
  <td>0.37b15 (MESS)</td>
  <td>First Win32 MESS release.</td>
 </tr>
 <tr>
  <td>12
  Aug 01</td>
  <td>0.53</td>
  <td>Abandoning of
  &quot;beta&quot; numbering scheme.</td>
 </tr>
 <tr>
  <td>19
  Aug 01</td>
  <td>-</td>
  <td>First checkins for
  AdvanceMAME (0.37b16).</td>
 </tr>
 <tr>
  <td>24
  May 01</td>
  <td>0.37b15</td>
  <td>Windows takes over from
  DOS as the primary development target. MAMEW becomes MAME and MAME (DOS MAME)
  becomes DMAME. Restructuring of parents and clones.</td>
 </tr>
 <tr>
  <td>17
  Jan 01</td>
  <td>0.37b11</td>
  <td>Initial support for
  discrete sound emulation.</td>
 </tr>
 <tr>
  <td>06
  Nov 00</td>
  <td>0.37b9</td>
  <td>First proper 32-bit CPU
  added (68EC020).</td>
 </tr>
 <tr>
  <td>26
  Feb 00</td>
  <td>0.36rc1</td>
  <td>Removed Pong and gambling
  game drivers.</td>
 </tr>
 <tr>
  <td>10
  Oct 99</td>
  <td>0.36b6 (MESS)</td>
  <td>MESS versions are synced
  to MAME versions (MAME source override.</td>
 </tr>
 <tr>
  <td>08
  Aug 99</td>
  <td>0.36b2</td>
  <td>Konami 052001/053248 CPU
  first emulated.</td>
 </tr>
 <tr>
  <td>05
  Jul 99</td>
  <td>0.35b3</td>
  <td>License change. First history.dat support.</td>
 </tr>
 <tr>
  <td>24
  May 99</td>
  <td>0.35b13</td>
  <td>Switched to PNG from PCX
  as the main screenshot image format.</td>
 </tr>
 <tr>
  <td>15
  Feb 99</td>
  <td>0.35b3</td>
  <td>Internal tilemap code
  added. Previously many drivers did tilemaps their own way.</td>
 </tr>
 <tr>
  <td>04
  Oct 98</td>
  <td>0.34b4</td>
  <td>Began using CRCs to
  identify ROMs.</td>
 </tr>
 <tr>
  <td>30
  Aug 98</td>
  <td>0.34b2</td>
  <td>First DSP core added: the
  TMS34010.</td>
 </tr>
 <tr>
  <td>16
  Aug 98</td>
  <td>0.34b1</td>
  <td>First BIOS (NEOGEO). First appearance of Neo
  Geo games, which have been the source of much controversy ever since.</td>
 </tr>
 <tr>
  <td>03
  Jun 98</td>
  <td>0.1 (MESS)</td>
  <td>First public release of
  MESS.</td>
 </tr>
 <tr>
  <td>10
  Jun 98</td>
  <td>0.33b5</td>
  <td>First CHD.</td>
 </tr>
 <tr>
  <td>03
  May 98</td>
  <td>0.33b1</td>
  <td>Public betas started;
  previously users would have to wait several months between releases. The
  series of betas were sometimes followed by some rc (release candidate)
  versions.</td>
 </tr>
 <tr>
  <td>-</td>
  <td>0.32</td>
  <td>0.32 does not exist to
  avoid confusion with MAME32.</td>
 </tr>
 <tr>
  <td>25
  Apr 98</td>
  <td>0.31</td>
  <td>Atari slapstic first
  emulated. Timer system added. Built-in ZIP file support added.</td>
 </tr>
 <tr>
  <td>08
  Jan 98</td>
  <td>0.30</td>
  <td>First official "non working" game, Future Spy. YM2151 support added.</td>
 </tr>
 <tr>
  <td>07
  Sep 97</td>
  <td>0.28</td>
  <td>First 68000 game emulated
  (Rastan).</td>
 </tr>
 <tr>
  <td>10
  Aug 97</td>
  <td>0.27</td>
  <td>Nicola returns as MAME
  coordinator. MAME switched away from the GPL license.</td>
 </tr>
 <tr>
  <td>18
  Jul 97</td>
  <td>0.26.1</td>
  <td>First release of MAME32.</td>
 </tr>
 <tr>
  <td>14
  Jul 97</td>
  <td>0.26</td>
  <td>First vector games added
  to MAME.</td>
 </tr>
 <tr>
  <td>02
  Jun 97</td>
  <td>0.23</td>
  <td>First FM synthesis-based
  sound chip supported — but only through a hack to use the OPL on a
  SoundBlaster card under DOS.</td>
 </tr>
 <tr>
  <td>26
  Apr 97</td>
  <td>0.19</td>
  <td>Mirko Buffoni takes over
  from Nicola as MAME coordinator.</td>
 </tr>
 <tr>
  <td>20
  Apr 97</td>
  <td>0.18</td>
  <td>First version of X/MAME
  checked in.</td>
 </tr>
 <tr>
  <td>02
  Apr 97</td>
  <td>0.14</td>
  <td>First version to use samples - Donkey Kong.</td>
 </tr>
 <tr>
  <td>26
  Mar 97</td>
  <td>0.13</td>
  <td>High score saving support
  added.</td>
 </tr>
 <tr>
  <td>23
  Mar 97</td>
  <td>0.12</td>
  <td>First support for multiple
  CPUs.</td>
 </tr>
 <tr>
  <td>18
  Feb 97</td>
  <td>-</td>
  <td>First version of MacMAME
  released (0.4).</td>
 </tr>
 <tr>
  <td>16
  Feb 97</td>
  <td>0.4</td>
  <td>First not playable game added (although there is no official concept for "non working" yet).</td>
 </tr>
 <tr>
  <td>05
  Feb 97</td>
  <td>0.1</td>
  <td>MAME 0.1 released.</td>
 </tr>
</table>
</div> 
		
<!--	Original Table for reference
<div class="panel panel-primary">
	  <div class="panel-heading">MAME Project Compact Timeline</div>
<table class="table">
 <tr>
  <th width="7%">Release</th>
  <th width="6%">Version</th>
  <th width="5%">Parents</th>
  <th width="5%">Clones</th>
  <th width="5%">Software</th>
  <th width="70%">Milestone</th>
 </tr>
 <tr>
  <th colspan=6>1997</th>
 </tr>
 <tr>
  <td class="date">05 Feb 97</td>
  <td class="version">0.1</td>
  <td>5</td>
  <td>-</td>
  <td>-</td>
  <td>MAME 0.1 released.</td>
 </tr>
</table>
</div>

-->

<br/>
This page has been heavily modified and enriched in May and June 2016, by <a target="_blank" href="http://blog.ilogic.gr">NLS</a>, using historical data from various sources. A big thanks to Fujix for the original chart idea and <a target="_blank" href="http://www.progettosnaps.net/">AntoPISA</a> for his "renameSET" detailed files that helped immensely to build the statistics.
<br/>
</div>

<!-- /.container -->
	
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
