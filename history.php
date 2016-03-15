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
				<th colspan="2">1997</th>
			</tr>
			<tr>
				<td class="date" width="10%">05 Feb</td>
				<td>MAME 0.1 released (0.1)</td>
			</tr>
			<tr>
				<td class="date">18 Feb</td>
				<td>First version of MacMAME released (0.4)</td>
			</tr>
			<tr>
				<td class="date">23 Mar</td>
				<td>First support for multiple CPUs (0.12)</td>
			</tr>
			<tr>
				<td class="date">26 Mar</td>
				<td>High score saving support added (0.13)</td>
			</tr>
			<tr>
				<td class="date">20 Apr</td>
				<td>First version of X/MAME checked in (0.18)</td>
			</tr>
			<tr>
				<td class="date">26 Apr</td>
				<td>Mirko Buffoni takes over from Nicola as MAME coordinator (0.19)</td>
			</tr>
			<tr>
				<td class="date">02 Jun</td>
				<td>First FM synthesis-based sound chip supported &mdash; but only through a hack to use the OPL on a SoundBlaster card under DOS (0.23)</td>
			</tr>
			<tr>
				<td class="date">14 Jul</td>
				<td>First vector games added to MAME (0.26)</td>
			</tr>
			<tr>
				<td class="date">18 Jul</td>
				<td>First release of MAME32 (0.26.1)</td>
			</tr>
			<tr>
				<td class="date">10 Aug</td>
				<td>Nicola returns as MAME coordinator (0.27)</td>
			</tr>
			<tr>
				<td class="date">10 Aug</td>
				<td>MAME switched away from the GPL license (0.27)</td>
			</tr>
			<tr>
				<td class="date">07 Sep</td>
				<td>First 68000 game emulated (Rastan) (0.28)</td>
			</tr>
			<tr>
				<th colspan="2">1998</th>
			</tr>
			<tr>
				<td class="date">08 Jan</td>
				<td>YM2151 supported added (0.30)</td>
			</tr>
			<tr>
				<td class="date">25 Apr</td>
				<td>Atari slapstic first emulated (0.31)</td>
			</tr>
			<tr>
				<td class="date">25 Apr</td>
				<td>Timer system added (0.31)</td>
			</tr>
			<tr>
				<td class="date">25 Apr</td>
				<td>Built-in ZIP file support added (0.31)</td>
			</tr>
			<tr>
				<td class="date">03 May</td>
				<td>Public betas started; previously users would have to wait several months between releases (0.33b1)</td>
			</tr>
			<tr>
				<td class="date">16 Aug</td>
				<td>First appearance of Neo Geo games, which have been the source of much controversy ever since (0.34b1)</td>
			</tr>
			<tr>
				<td class="date">30 Aug</td>
				<td>First DSP core added: the TMS34010 (0.34b2)</td>
			</tr>
			<tr>
				<td class="date">04 Oct</td>
				<td>Began using CRCs to identify ROMs (0.34b4)</td>
			</tr>
			<tr>
				<th colspan="2">1999</th>
			</tr>
			<tr>
				<td class="date">15 Feb</td>
				<td>Internal tilemap code added &mdash; previously many drivers did tilemaps their own way (0.35b3)</td>
			</tr>
			<tr>
				<td class="date">24 May</td>
				<td>Switched to PNG from PCX as the main screenshot image format (0.35b13)</td>
			</tr>
			<tr>
				<td class="date">08 Aug</td>
				<td>Konami 052001/053248 CPU first emulated (0.36b2)</td>
			</tr>
			<tr>
				<th colspan="2">2000</th>
			</tr>
			<tr>
				<td class="date">26 Feb</td>
				<td>Removed Pong and gambling game drivers (0.36rc1)</td>
			</tr>
			<tr>
				<td class="date">06 Nov</td>
				<td>First proper 32-bit CPU added (68EC020) (0.37b9)</td>
			</tr>
			<tr>
				<th colspan="2">2001</th>
			</tr>
			<tr>
				<td class="date">17 Jan</td>
				<td>Initial support for discrete sound emulation (0.37b11)</td>
			</tr>
			<tr>
				<td class="date">24 May</td>
				<td>Windows takes over from DOS as the primary development target (0.37b15)</td>
			</tr>
			<tr>
				<td class="date">19 Aug</td>
				<td>First checkins for AdvanceMAME (0.37b16)</td>
			</tr>
			<tr>
				<td class="date">24 Aug</td>
				<td>First release to call out MAMETesters bugs (0.54)</td>
			</tr>
			<tr>
				<th colspan="2">2002</th>
			</tr>
			<tr>
				<td class="date">01 May</td>
				<td>Removed SoundBlaster FM support as software-based emulation finally became better in almost all cases (0.60)</td>
			</tr>
			<tr>
				<td class="date">04 Jul</td>
				<td>Added initial support for artwork external to games (0.61)</td>
			</tr>
			<tr>
				<th colspan="2">2003</th>
			</tr>
			<tr>
				<td class="date">06 Apr</td>
				<td>First dynamic recompiled CPU core added: MIPS3 (0.67)</td>
			</tr>
			<tr>
				<td class="date">15 May</td>
				<td>David Haywood takes over from Nicola as MAME coordinator (0.68)</td>
			</tr>
			<tr>
				<td class="date">15 May</td>
				<td>Added SHA1 hashes in addition to CRCs to reduce hacks and prevent collisions (0.68)</td>
			</tr>
			<tr>
				<td class="date">23 May</td>
				<td>First release to have intermediate 'u' updates (0.69)</td>
			</tr>
			<tr>
				<td class="date">09 Aug</td>
				<td>First emulation of the SP0250 speech chip (0.72)</td>
			</tr>
			<tr>
				<td class="date">12 Oct</td>
				<td>Removed the concept of TESTDRIVERS, making all drivers available in all builds (0.75)</td>
			</tr>
			<tr>
				<td class="date">11 Nov</td>
				<td>3dfx Voodoo emulation added (0.77)</td>
			</tr>
			<tr>
				<th colspan="2">2004</th>
			</tr>
			<tr>
				<td class="date">24 Oct</td>
				<td>Sega FD1094 decryption added (0.88)</td>
			</tr>
			<tr>
				<td class="date">24 Nov</td>
				<td>New debugger added (0.89)</td>
			</tr>
			<tr>
				<th colspan="2">2005</th>
			</tr>
			<tr>
				<td class="date">27 Feb</td>
				<td>Major sound system reorganization around streams (0.93)</td>
			</tr>
			<tr>
				<td class="date">07 Apr</td>
				<td>mamedev.org is born</td>
			</tr>
			<tr>
				<td class="date">18 Apr</td>
				<td>Aaron Giles takes over from David Haywood as MAME coordinator</td>
			</tr>
			<tr>
				<td class="date">03 May</td>
				<td>Changed the license to be based off of the BSD license, with commercial restrictions (0.96)</td>
			</tr>
			<tr>
				<td class="date">14 Sep</td>
				<td>Added back support for some gambling games (0.100)</td>
			</tr>
			<tr>
				<th colspan="2">2006</th>
			</tr>
			<tr>
				<td class="date">03 Jun</td>
				<td>First version of SDLMAME released (0.106u1)</td>
			</tr>
			<tr>
				<td class="date">23 Jul</td>
				<td>New video system comes online, focused on letting the video hardware do compositing (0.107)</td>
			</tr>
			<tr>
				<td class="date">20 Aug</td>
				<td>High score support removed (0.108)</td>
			</tr>
			<tr>
				<th colspan="2">2007</th>
			</tr>
			<tr>
				<td class="date">05 Feb</td>
				<td>CPS2 decryption fully implemented (0.112)</td>
			</tr>
			<tr>
				<td class="date">20 Jun</td>
				<td>CPS3 decryption added (0.116u2)</td>
			</tr>
			<tr>
				<th colspan="2">2008</th>
			</tr>			
			<tr>
				<td class="date">19 Aug</td>
				<td>First laserdisc game emulated (Cube Quest) (0.127)</td>
			</tr>
		</table>
		</div>
	<br/>
	<br/>
	</div>
    <!-- /.container -->
	
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
