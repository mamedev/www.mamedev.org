<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>November 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-11-30</h2>
					<p>
					David Haywood decoded the background graphics in Miss Bubble 2, but they're not emulated yet. Aaron Giles sent in another update to chdman, making it verify the files when doing an update, merge or a diff operation. Aaron Giles also added NFL Blitz and NFL Blitz 2000 to the Seattle driver.
					</p>
					<div class="wippix">
						<img src="wippics/0311/blitz_1.png" alt="NFL Blitz (c) 1997 Midway" width="511" height="384" />
						<img src="wippics/0311/blitz_2.png" alt="The intro of NFL Blitz" width="511" height="384" />
						<img src="wippics/0311/blitz_3.png" alt="The intro of NFL Blitz" width="511" height="384" />
						<img src="wippics/0311/blitz_4.png" alt="The gameplay of NFL Blitz" width="511" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/blitz2k_1.png" alt="NFL Blitz 2000 (c) 2000 Midway" width="511" height="384" />
						<img src="wippics/0311/blitz2k_2.png" alt="The intro of NFL Blitz 2000" width="511" height="384" />
						<img src="wippics/0311/blitz2k_3.png" alt="The intro of NFL Blitz 2000" width="511" height="384" />
						<img src="wippics/0311/blitz2k_4.png" alt="The gameplay of NFL Blitz 2000" width="511" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-29</h2>
					<p>
					Pierpaolo Prazzoli removed the patch from Puzzle De Bowling and emulated the protection.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-28</h2>
					<p>
					R. Belmont fixed the volume balance in Raiden by making the drums louder. Pierpaolo Prazzoli added sprite buffering to the Seta2 driver, which fixes some wrong colors in MS Gundam EX Revue.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-27</h2>
					<p>
					David Haywood added a partial dump of Rock'n Tread to the Tetris Plus 2 driver. Pierpaolo Prazzoli finished the MS Gundam EX Revue driver. ElSemi fixed the erratic static sounds in the SCSP sound core. Leon van Rooij fixed the state saving support in the YM2610 sound core.
					</p>
					<div class="wippix">
						<img src="wippics/0311/gundamex_1.png" alt="MS Gundam EX Revue (c) 1994 Banpresto" width="384" height="224" />
						<img src="wippics/0311/gundamex_2.png" alt="The intro of MS Gundam EX Revue" width="384" height="224" />
						<img src="wippics/0311/gundamex_3.png" alt="The intro of MS Gundam EX Revue" width="384" height="224" />
						<img src="wippics/0311/gundamex_4.png" alt="The gameplay of MS Gundam EX Revue" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-26</h2>
					<p>
					R. Belmont and ElSemi fixed various bugs in the SCSP sound core, improving the sound greatly in the ST-V driver. Stefan Jokisch sent in a driver for Runaway and merged the Qwak driver with it.
					</p>
					<div class="wippix">
						<img src="wippics/0311/runaway_1.png" alt="Runaway (c) 1982 Atari" width="256" height="240" />
						<img src="wippics/0311/runaway_2.png" alt="The gameplay of Runaway" width="256" height="240" />
						<img src="wippics/0311/runaway_3.png" alt="The gameplay of Runaway" width="256" height="240" />
						<img src="wippics/0311/runaway_4.png" alt="The gameplay of Runaway" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-25</h2>
					<p>
					Luca Elia added Kyuukyoku no Striker to the Taito X system driver. smf fixed some slight bugs in chdman that prevented it from compiling under DOS. Peter Gurris fixed the input ports in X-day 2 and Primal Rage. Pierpaolo Prazzoli added DIP switch settings to Grand Striker 2 and fixed the graphics in Kyuukyoku no Striker with a new set of ROMs. David Haywood sent in a preliminary driver for MS Gundam EX Revue, it has quite a few graphics glitches and inputs are not correctly mapped. David Haywood also merged the Taito X system and Seta drivers, and added Arnold Palmer Tournament Golf to the Sega MegaTech driver. Curt Coder added correct video timings to the Mysterious Stones driver. BUT added Thunder Ceptor to the Thunder Ceptor 2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0311/kyustrkr_1.png" alt="Kyuukyoku no Striker (c) 1989 East Technology" width="384" height="240" />
						<img src="wippics/0311/kyustrkr_2.png" alt="The intro of Kyuukyoku no Striker" width="384" height="240" />
						<img src="wippics/0311/kyustrkr_3.png" alt="The gameplay of Kyuukyoku no Striker" width="384" height="240" />
						<img src="wippics/0311/kyustrkr_4.png" alt="The gameplay of Kyuukyoku no Striker" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/tceptor_1.png" alt="Thunder Ceptor (c) 1986 Namco" width="272" height="224" />
						<img src="wippics/0311/tceptor_2.png" alt="The intro of Thunder Ceptor" width="272" height="224" />
						<img src="wippics/0311/tceptor_3.png" alt="The gameplay of Thunder Ceptor" width="272" height="224" />
						<img src="wippics/0311/tceptor_4.png" alt="The gameplay of Thunder Ceptor" width="272" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-24</h2>
					<p>
					Luca Elia added Nettoh Quiz Champion to the Don Den Lover driver. Nathan Woods merged some MESS code in the file I/O functions. Olivier Galibert fixed the negf and absf opcodes in the V60 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0311/nettoqc_1.png" alt="Nettoh Quiz Champion (c) 1995 Nakanihon" width="336" height="240" />
						<img src="wippics/0311/nettoqc_2.png" alt="The intro of Nettoh Quiz Champion" width="336" height="240" />
						<img src="wippics/0311/nettoqc_3.png" alt="The intro of Nettoh Quiz Champion" width="336" height="240" />
						<img src="wippics/0311/nettoqc_4.png" alt="The gameplay of Nettoh Quiz Champion" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-23</h2>
					<p>
					Pierpaolo Prazzoli added Capitol to the Phoenix driver.
					</p>
					<div class="wippix">
						<img src="wippics/0311/capitol_1.png" alt="Capitol (c) 1981 Universal Video Spiel GmbH" width="208" height="248" />
						<img src="wippics/0311/capitol_2.png" alt="The gameplay of Capitol" width="208" height="248" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-22</h2>
					<p>
					Olivier Galibert fixed the sclf opcode in the V60 CPU core.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-21</h2>
					<p>
					Pierpaolo Prazzoli finished the Quiz Panicuru Fantasy driver, except for the sound banking.
					</p>
					<div class="wippix">
						<img src="wippics/0311/quizpani_1.png" alt="Quiz Panicuru Fantasy (c) 1993 NMK" width="384" height="224" />
						<img src="wippics/0311/quizpani_2.png" alt="The intro of Quiz Panicuru Fantasy" width="384" height="224" />
						<img src="wippics/0311/quizpani_3.png" alt="The intro of Quiz Panicuru Fantasy" width="384" height="224" />
						<img src="wippics/0311/quizpani_4.png" alt="The gameplay of Quiz Panicuru Fantasy" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-20</h2>
					<p>
					David Haywood fixed the tilemap graphics in Grand Striker 2. Curt Coder fixed DIP switch settings in the IREM M-72 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0311/gstrik2_3.png" alt="Grand Striker 2 (c) 1996 Human" width="304" height="224" />
						<img src="wippics/0311/gstrik2_4.png" alt="The intro of Grand Striker 2" width="304" height="224" />
						<img src="wippics/0311/gstrik2_5.png" alt="The gameplay of Grand Striker 2" width="304" height="224" />
						<img src="wippics/0311/gstrik2_6.png" alt="The gameplay of Grand Striker 2" width="304" height="224" />
						<img src="wippics/0311/gstrik2_7.png" alt="The gameplay of Grand Striker 2" width="304" height="224" />
						<img src="wippics/0311/gstrik2_8.png" alt="The gameplay of Grand Striker 2" width="304" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-19</h2>
					<p>
					Lawrence Gold fixed several warnings and errors in compiling on different compilers. El Condor submitted some input port fixes. David Haywood added Grand Striker 2 to the Metro driver, it's playable but it has graphics glitches. Joe Redfish submitted a fix to a bug in setting the keyboard LEDs in the Windows version. Stefan Jokisch re-wrote the Video Pinball driver, gameplay bugs and other things have been fixed.
					</p>
					<div class="wippix">
						<img src="wippics/0311/gstrik2_1.png" alt="Grand Striker 2 (c) 1996 Human" width="304" height="224" />
						<img src="wippics/0311/gstrik2_2.png" alt="The gameplay of Grand Striker 2" width="304" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-18</h2>
					<p>
					Nathan Woods did some minor cleanups in the ST-V and Sengoku Mahjong drivers and forwarded some updates to the 6522 VIA and TMS9928a cores from MESS. David Haywood added Mahjong Angel Kiss to the Jaleco Mega System 32 driver. David Haywood also emulated the protection in Cookie &amp; Bibi 2. Aaron Giles fixed various problems in the new CHD code. Curt Coder fixed the inputs in Sonic the Hedgehog and Dead Angle / Gang Hunter.
					</p>
					<div class="wippix">
						<img src="wippics/0311/akiss_1.png" alt="Mahjong Angel Kiss (c) 1995 Jaleco" width="320" height="224" />
						<img src="wippics/0311/akiss_2.png" alt="The intro of Mahjong Angel Kiss" width="320" height="224" />
						<img src="wippics/0311/akiss_3.png" alt="The intro of Mahjong Angel Kiss" width="320" height="224" />
						<img src="wippics/0311/akiss_4.png" alt="The gameplay of Mahjong Angel Kiss" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/cookbib2_1.png" alt="Cookie &amp; Bibi 2 (c) 1986 SemiCom" width="256" height="224" />
						<img src="wippics/0311/cookbib2_2.png" alt="The intro of Cookie &amp; Bibi 2" width="256" height="224" />
						<img src="wippics/0311/cookbib2_3.png" alt="The gameplay of Cookie &amp; Bibi 2" width="256" height="224" />
						<img src="wippics/0311/cookbib2_4.png" alt="The gameplay of Cookie &amp; Bibi 2" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-17</h2>
					<p>
					Aaron Giles sent in the first update to the CHD format support, separating the file format and hard disk functionality and adding support for SHA1 checksums in the format. Curt Coder submitted cleanups and tilemap conversions for Cloak &amp; Dagger, Jail Break, Pac-Land and Omega Fighter.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-16</h2>
					<p>
					Curt Coder cleaned up the Nova 2001 and KO Punch drivers, and fixed input ports in the Double Dragon 3 driver. El Condor fixed some inputs in D-Day and Cisco Heat.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-15</h2>
					<p>
					BUT fixed the background layers and added support for transparent road color in the Thunder Ceptor 2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0311/tceptor2_1.png" alt="Thunder Ceptor II (c) 1986 Namco" width="272" height="224" />
						<img src="wippics/0311/tceptor2_2.png" alt="The intro of Thunder Ceptor II" width="272" height="224" />
						<img src="wippics/0311/tceptor2_3.png" alt="The gameplay of Thunder Ceptor II" width="272" height="224" />
						<img src="wippics/0311/tceptor2_4.png" alt="The gameplay of Thunder Ceptor II" width="272" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-14</h2>
					<p>
					Aaron Giles started rewriting the compressed hard disk code to better support different formats.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-13</h2>
					<p>
					Brian A. Troha cleaned up a few unnecessary ROM loads in the Neo Geo driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-12</h2>
					<p>
					David Haywood emulated the protection in Hatch Catch, so it's now fully playable with sound. Dave D. submitted a few input port and DIP switch corrections to various Midway drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0311/htchctch_1.png" alt="Hatch Catch (c) 1995 Semicom" width="320" height="240" />
						<img src="wippics/0311/htchctch_2.png" alt="The intro of Hatch Catch" width="320" height="240" />
						<img src="wippics/0311/htchctch_3.png" alt="The gameplay of Hatch Catch" width="320" height="240" />
						<img src="wippics/0311/htchctch_4.png" alt="The gameplay of Hatch Catch" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-11</h2>
					<p>
					Aaron Giles sent in an update to the Atari GT driver with fixed graphics in the T-Mek prototype version, though sound doesn't work in it. Rene Single submitted a few manufacturer / year corrections.
					</p>
					<div class="wippix">
						<img src="wippics/0311/tmekprot_1.png" alt="T-Mek (prototype) (c) 1994 Atari" width="336" height="240" />
						<img src="wippics/0311/tmekprot_2.png" alt="The intro of T-Mek (prototype)" width="336" height="240" />
						<img src="wippics/0311/tmekprot_3.png" alt="The gameplay of T-Mek (prototype)" width="336" height="240" />
						<img src="wippics/0311/tmekprot_4.png" alt="The gameplay of T-Mek (prototype)" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-10</h2>
					<p>
					R. Belmont added an alternate 2-player set of The Simpsons, and a European version of Martial Champion to the respective drivers.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-09</h2>
					<p>
					Pierpaolo Prazzoli added Bonks Adventure to the Kaneko16 driver, but it doesn't work because the MCU isn't emulated.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-08</h2>
					<p>
					smf did some more cleanup on the Namco System 11 driver. Pierpaolo Prazzoli added a bunch of non-working games to the Legionnaire driver and sent in a driver for Goal! '92.
					</p>
					<div class="wippix">
						<img src="wippics/0311/goal92_1.png" alt="Goal! '92 (c) 1992 bootleg" width="320" height="224" />
						<img src="wippics/0311/goal92_2.png" alt="The attract mode of Goal! '92" width="320" height="224" />
						<img src="wippics/0311/goal92_3.png" alt="The intro of Goal! '92" width="320" height="224" />
						<img src="wippics/0311/goal92_4.png" alt="The intro of Goal! '92" width="320" height="224" />
						<img src="wippics/0311/goal92_5.png" alt="The gameplay of Goal! '92" width="320" height="224" />
						<img src="wippics/0311/goal92_6.png" alt="The gameplay of Goal! '92" width="320" height="224" />
						<img src="wippics/0311/goal92_7.png" alt="The gameplay of Goal! '92" width="320" height="224" />
						<img src="wippics/0311/goal92_8.png" alt="The gameplay of Goal! '92" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/godzilla_1.png" alt="Godzilla (c) 1993 Banpresto" width="320" height="224" />
						<img src="wippics/0311/seibucupsoccer_1.png" alt="Seibu Cup Soccer (c) 1992 Seibu" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/gundam_rainbow_1.png" alt="SD Gundam Sangokushi Rainbow Tairiku Senki (c) 1993 Banpresto" width="320" height="224" />
						<img src="wippics/0311/gundam_rainbow_2.png" alt="The attract mode of SD Gundam Sangokushi Rainbow Tairiku Senki" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-07</h2>
					<p>
					Aaron Giles added the CAGE sound system emulation to Primal Rage (and a bunch of non-working drivers) and fixed Guardians of the Hood, so it's now playable. Aaron Giles also added graphics checksumming support to various Atari drivers and fixed sprite/playfield priorities in them. Nathan Woods improved some MESS-specific functionality in the UI code. Howard Casto submitted a bunch of fixes to input port defitinions. Rene Single added a sanity check for get_path_for_filetype.
					</p>
					<div class="wippix">
						<img src="wippics/0311/guardian_1.png" alt="Guardians of the Hood (c) 1992 Atari" width="336" height="240" />
						<img src="wippics/0311/guardian_2.png" alt="The intro of Guardians of the Hood" width="336" height="240" />
						<img src="wippics/0311/guardian_3.png" alt="The gameplay of Guardians of the Hood" width="336" height="240" />
						<img src="wippics/0311/guardian_4.png" alt="The gameplay of Guardians of the Hood" width="336" height="240" />
						<img src="wippics/0311/guardian_5.png" alt="The gameplay of Guardians of the Hood" width="336" height="240" />
						<img src="wippics/0311/guardian_6.png" alt="The gameplay of Guardians of the Hood" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-06</h2>
					<p>
					Aaron Giles fixed the unmapped memory access logging to show the effective address (taking the address shift into account on CPUs like TMS34010 or TMS32031). Robin Merrill fixed the input ports in various games that mapped the 'A' key instead of nothing to some inputs.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-05</h2>
					<p>
					Aaron Giles sent in the Atari Seattle driver, supporting CarnEvil, NFL Blitz '99, Wayne Gretzky's 3D Hockey, Mace: The Dark Age (all working fine) and San Francisco Rush (freezes when starting a game). Aaron Giles also improved the TMS32031 core a lot, making Offroad Challenge almost playable. Chris Hardy added an English version of Super Pierrot to the Mr. Do's Castle driver.
					</p>
					<div class="wippix">
						<img src="wippics/0311/carnevil_1.png" alt="CarnEvil (c) 1998 Midway" width="399" height="256" />
						<img src="wippics/0311/carnevil_2.png" alt="The attract mode of CarnEvil" width="399" height="256" />
						<img src="wippics/0311/carnevil_3.png" alt="The attract mode of CarnEvil" width="399" height="256" />
						<img src="wippics/0311/carnevil_4.png" alt="The intro of CarnEvil" width="399" height="256" />
						<img src="wippics/0311/carnevil_5.png" alt="The gameplay of CarnEvil" width="399" height="256" />
						<img src="wippics/0311/carnevil_6.png" alt="The gameplay of CarnEvil" width="399" height="256" />
						<img src="wippics/0311/carnevil_7.png" alt="The gameplay of CarnEvil" width="399" height="256" />
						<img src="wippics/0311/carnevil_8.png" alt="The gameplay of CarnEvil" width="399" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/blitz99_1.png" alt="NFL Blitz '99 (c) 1998 Midway" width="511" height="384" />
						<img src="wippics/0311/blitz99_2.png" alt="The intro of NFL Blitz '99" width="511" height="384" />
						<img src="wippics/0311/blitz99_3.png" alt="The gameplay of NFL Blitz '99" width="511" height="384" />
						<img src="wippics/0311/blitz99_4.png" alt="The gameplay of NFL Blitz '99" width="511" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/wg3dh_1.png" alt="Wayne Gretzky's 3D Hockey (c) 1996 Atari" width="511" height="256" />
						<img src="wippics/0311/wg3dh_2.png" alt="The intro of Wayne Gretzky's 3D Hockey" width="511" height="256" />
						<img src="wippics/0311/wg3dh_3.png" alt="The gameplay of Wayne Gretzky's 3D Hockey" width="511" height="256" />
						<img src="wippics/0311/wg3dh_4.png" alt="The gameplay of Wayne Gretzky's 3D Hockey" width="511" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/mace_1.png" alt="Mace: The Dark Age (c) 1996 Atari" width="511" height="384" />
						<img src="wippics/0311/mace_2.png" alt="The intro of Mace: The Dark Age" width="511" height="384" />
						<img src="wippics/0311/mace_3.png" alt="The gameplay of Mace: The Dark Age" width="511" height="384" />
						<img src="wippics/0311/mace_4.png" alt="The gameplay of Mace: The Dark Age" width="511" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/sfrush_1.png" alt="San Francisco Rush (c) 1996 Atari" width="511" height="384" />
						<img src="wippics/0311/sfrush_2.png" alt="The attract mode of San Francisco Rush" width="511" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-04</h2>
					<p>
					Curt Coder submitted a bunch of fixes to the Konami Twin16 driver and fixed the inputs and visible area in some games in the TMNT driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-11-03</h2>
					<p>
					Bryan McPhail fixed the video and interrupt timing in the Double Dragon driver, made Thunder Strike boot (but it doesn't show sprites), fixed Dangerous Dungeons and added the World version of Double Dragon. ANY added Sport Fishing 2 to the ST-V driver but it doesn't work at all.
					</p>
					<div class="wippix">
						<img src="wippics/0311/ddungeon_1.png" alt="Dangerous Dungeons (c) 199? East Coast Coin Company (Melbourne)" width="256" height="256" />
						<img src="wippics/0311/ddungeon_2.png" alt="The intro of Dangerous Dungeons" width="256" height="256" />
						<img src="wippics/0311/ddungeon_3.png" alt="The gameplay of Dangerous Dungeons" width="256" height="256" />
						<img src="wippics/0311/ddungeon_4.png" alt="The gameplay of Dangerous Dungeons" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0311/tstrike_1.png" alt="Thunder Strike (c) 19?? Game Room" width="256" height="256" />
						<img src="wippics/0311/tstrike_2.png" alt="The intro of Thunder Strike" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-11-02</h2>
					<p>
					Angelo Salese fixed the colors in Bishi Bashi Champ, but the graphics are still mostly corrupted. Pierpaolo Prazzoli fixed the wrong sprites in Crazy Kong (Scramble hardware).
					</p>
					</div>

				<div class="rowlast">
					<h2>2003-11-01</h2>
					<p>
					Pierpaolo Prazzoli improved the music tempo in the World Cup 90 bootleg. R. Belmont fixed the ADPCM functions so that games can have both MSM6295 sound chips and plain ADPCM at the same time, and he added complete sound emulation to Grand Cross Pinball. smf did some changes to the GPU DMA in the Namco System 11 driver and added some Namco System 12 ROMs, but they don't work at all yet.
					</p>
				</div>
				
            </div>
            <!-- content end --> 
		
		<!--#include virtual="/_include/html/footer.txt" -->
    
    </div>    
    </div>
    <!-- main end -->

</body>

</html>
