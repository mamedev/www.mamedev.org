<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>April 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-04-30</h2>
					<p>
					Acho A. Tang sent in an update to the SNK driver, fixing the tempo in Psycho Soldier, various graphics problems in Fighting Golf, Athena, T.N.K. III, Bermuda Triangle and Touchdown Fever.
					</p>
					</div>

				<div class="row">
					<h2>2003-04-29</h2>
					<p>
					Luca Elia sent in a driver for The Deep / Run Deep. Jarek Burczynski sent in a fix to the delta-t decoding in the YM2608 sound core, fixing the bad sounds in Mechanized Attack, and he fixed the LFO emulation in all of the FM chips.
					</p>
					<div class="wippix">
						<img src="wippics/0304/rundeep_1.png" alt="Run Deep (c) 1988 Cream" width="248" height="256" />
						<img src="wippics/0304/rundeep_2.png" alt="The intro of Run Deep" width="248" height="256" />
						<img src="wippics/0304/rundeep_3.png" alt="The gameplay of Run Deep" width="248" height="256" />
						<img src="wippics/0304/rundeep_4.png" alt="The gameplay of Run Deep" width="248" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-28</h2>
					<p>
					Martin Pugh submitted a little patch to Fire Battle, making it completely playable.
					</p>
					<div class="wippix">
						<img src="wippics/0304/firebatl_1.png" alt="Fire Battle (c) 1984 Taito" width="224" height="288" />
						<img src="wippics/0304/firebatl_2.png" alt="The gameplay of Fire Battle" width="224" height="288" />
						<img src="wippics/0304/firebatl_3.png" alt="The gameplay of Fire Battle" width="224" height="288" />
						<img src="wippics/0304/firebatl_4.png" alt="The gameplay of Fire Battle" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-27</h2>
					<p>
					smf fixed Twinbee, so it is playable again. smf also converted Horizon to use the tilemap system. Hau submitted a fix to a graphics glitch in Kitten Kaboodle / Nyan Nyan Panic and he fixed flipscreen in all of the games in the Nemesis driver. Bryan McPhail fixed Dark Tower in the Double Dragon driver, it's now completely playable though coin inputs don't work perfectly. David Haywood fixed the visible area in Dark Tower.
					</p>
					<div class="wippix">
						<img src="wippics/0304/darktowr_1.png" alt="Dark Tower (c) 19?? The Game Room" width="256" height="256" />
						<img src="wippics/0304/darktowr_2.png" alt="The gameplay of Dark Tower" width="256" height="256" />
						<img src="wippics/0304/darktowr_3.png" alt="The gameplay of Dark Tower" width="256" height="256" />
						<img src="wippics/0304/darktowr_4.png" alt="The gameplay of Dark Tower" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-26</h2>
					<p>
					Stefan Jokisch fixed the cycle counts for the P[HL][PA] instructions in the 6502 CPU core. sthief fixed a bug in the CMPSTR instruction in the SH-2 CPU core. David Haywood added a bunch of new ROM sets to the ST-V driver but none of them work. David Haywood also added two games on bootleg Double Dragon hardware but they don't work either. smf added a bootleg Scramble called Explorer to the Scramble driver, though sound does not work yet in it. smf also added another encrypted version of Wonderboy to the Sega System 1/2 driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-04-25</h2>
					<p>
					Stefan Jokisch sent in another bug fix to cycle counting in the timer system. Tomasz Slanina added Straight Flush to the 8080bw driver. Luca Elia added Galaxy Gunners to the Fantasy Land driver. David Haywood added Moon Alien to the Galaxian driver and Catsbee to the Galaga driver. David Silva submitted a fix to the DIP switch settings in the Dragon Master driver.
					</p>
					<div class="wippix">
						<img src="wippics/0304/sflush_1.png" alt="Straight Flush (c) 1979 Taito" width="208" height="248" />
						<img src="wippics/0304/sflush_2.png" alt="The gameplay of Straight Flush" width="208" height="248" />
						<img src="wippics/0304/sflush_3.png" alt="The gameplay of Straight Flush" width="208" height="248" />
						<img src="wippics/0304/sflush_4.png" alt="The gameplay of Straight Flush" width="208" height="248" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/galaxygn_1.png" alt="Galaxy Gunners (c) 1989 Electronics Devices" width="256" height="352" />
						<img src="wippics/0304/galaxygn_2.png" alt="The intro of Galaxy Gunners" width="256" height="352" />
						<img src="wippics/0304/galaxygn_3.png" alt="The gameplay of Galaxy Gunners" width="256" height="352" />
						<img src="wippics/0304/galaxygn_4.png" alt="The gameplay of Galaxy Gunners" width="256" height="352" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-24</h2>
					<p>
					Aaron Giles fixed the sound in Revolution X that got broken with the Mac changes. David Haywood submitted Olivier Galibert's System 24 driver separated from the rest of the Sega rewrite. It supports Quiz Ghost Hunter, Tokoro-san no MahMahjong, Tokoro-san no MahMahjong 2 and Quiz Mekurumeku Story. Bonanza Brothers has serious graphics problems and Hot Rod boots up but doesn't work at all, so they aren't yet playable.
					</p>
					<div class="wippix">
						<img src="wippics/0304/qgh_1.png" alt="Quiz Ghost Hunter (c) 1994 Sega" width="496" height="384" />
						<img src="wippics/0304/qgh_2.png" alt="The intro of Quiz Ghost Hunter" width="496" height="384" />
						<img src="wippics/0304/qgh_3.png" alt="The intro of Quiz Ghost Hunter" width="496" height="384" />
						<img src="wippics/0304/qgh_4.png" alt="The gameplay of Quiz Ghost Hunter" width="496" height="384" />
						<img src="wippics/0304/qgh_5.png" alt="The gameplay of Quiz Ghost Hunter" width="496" height="384" />
						<img src="wippics/0304/qgh_6.png" alt="The gameplay of Quiz Ghost Hunter" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/mahmajn_1.png" alt="Tokoro-san no MahMahjong (c) 1992 Sega" width="496" height="384" />
						<img src="wippics/0304/mahmajn_2.png" alt="The intro of Tokoro-san no MahMahjong" width="496" height="384" />
						<img src="wippics/0304/mahmajn_3.png" alt="The intro of Tokoro-san no MahMahjong" width="496" height="384" />
						<img src="wippics/0304/mahmajn_4.png" alt="The gameplay of Tokoro-san no MahMahjong" width="496" height="384" />
						<img src="wippics/0304/mahmajn_5.png" alt="The gameplay of Tokoro-san no MahMahjong" width="496" height="384" />
						<img src="wippics/0304/mahmajn_6.png" alt="The gameplay of Tokoro-san no MahMahjong" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/mahmajn2_1.png" alt="Tokoro-san no MahMahjong 2 (c) 1994 Sega" width="496" height="384" />
						<img src="wippics/0304/mahmajn2_2.png" alt="The intro of Tokoro-san no MahMahjong 2" width="496" height="384" />
						<img src="wippics/0304/mahmajn2_3.png" alt="The intro of Tokoro-san no MahMahjong 2" width="496" height="384" />
						<img src="wippics/0304/mahmajn2_4.png" alt="The gameplay of Tokoro-san no MahMahjong 2" width="496" height="384" />
						<img src="wippics/0304/mahmajn2_5.png" alt="The gameplay of Tokoro-san no MahMahjong 2" width="496" height="384" />
						<img src="wippics/0304/mahmajn2_6.png" alt="The gameplay of Tokoro-san no MahMahjong 2" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/quizmeki_1.png" alt="Quiz Mekurumeku Story (c) 1992 Sega" width="496" height="384" />
						<img src="wippics/0304/quizmeki_2.png" alt="The intro of Quiz Mekurumeku Story" width="496" height="384" />
						<img src="wippics/0304/quizmeki_3.png" alt="The gameplay of Quiz Mekurumeku Story" width="496" height="384" />
						<img src="wippics/0304/quizmeki_4.png" alt="The gameplay of Quiz Mekurumeku Story" width="496" height="384" />
						<img src="wippics/0304/quizmeki_5.png" alt="The gameplay of Quiz Mekurumeku Story" width="496" height="384" />
						<img src="wippics/0304/quizmeki_6.png" alt="The gameplay of Quiz Mekurumeku Story" width="496" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-23</h2>
					<p>
					Brian A. Troha added the USA version of Lethal Enforcers II to the Konami GX driver. David Haywood added BlockBuster to the Mr. Jong driver. Jarek Burczynski sent in some minor fixes to the YMF262 sound core. Stefan Jokisch fixed a bug in the cycle counting that occurred when a new timer was fired within the current time slice.
					</p>
					<div class="wippix">
						<img src="wippics/0304/blkbustr_1.png" alt="BlockBuster (c) 1983 Kiwako" width="224" height="240" />
						<img src="wippics/0304/blkbustr_2.png" alt="The gameplay of BlockBuster" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-22</h2>
					<p>
					Luca Elia sent in a driver for The Deep, it works but the colors are wrong since the color PROMs are missing. Acho A. Tang converted the Mystic Warriors and Konami GX drivers to different drawing routines that will allow more improvements later on. Jason Lo added dual screen support, added sprite shadows and improved the graphics priorities in the Sega System Multi 32 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0304/thedeep_1.png" alt="The Deep (c) 1987 Woodplace" width="248" height="256" />
						<img src="wippics/0304/thedeep_2.png" alt="The intro of The Deep" width="248" height="256" />
						<img src="wippics/0304/thedeep_3.png" alt="The gameplay of The Deep" width="248" height="256" />
						<img src="wippics/0304/thedeep_4.png" alt="The gameplay of The Deep" width="248" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-21</h2>
					<p>
					David Haywood added Idol Janshi Su-Chi-Pie 2 to the Jaleco Mega System 32 driver and fixed the bad graphics in Tetris Plus 2 (MS32 version) with the correct ROMs. Nicola Salmoria fixed the graphics priorities in Horizon. Bryan McPhail forwarded a fix for the missing sound in Super Kaneko Nova System games.
					</p>
					<div class="wippix">
						<img src="wippics/0304/47pie2_1.png" alt="Idol Janshi Su-Chi-Pie 2 (c) 1994 Jaleco" width="320" height="224" />
						<img src="wippics/0304/47pie2_2.png" alt="The intro of Idol Janshi Su-Chi-Pie 2" width="320" height="224" />
						<img src="wippics/0304/47pie2_3.png" alt="The intro of Idol Janshi Su-Chi-Pie 2" width="320" height="224" />
						<img src="wippics/0304/47pie2_4.png" alt="The gameplay of Idol Janshi Su-Chi-Pie 2" width="320" height="224" />
						<img src="wippics/0304/47pie2_5.png" alt="The gameplay of Idol Janshi Su-Chi-Pie 2" width="320" height="224" />
						<img src="wippics/0304/47pie2_6.png" alt="The gameplay of Idol Janshi Su-Chi-Pie 2" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-20</h2>
					<p>
					R. Belmont fixed a few memory leaks in the ES550x sound core. Tomasz Slanina simulated the 8741 MCU protection in Oigas, so it is now playable. smf fixed the colors in Horizon.
					</p>
					<div class="wippix">
						<img src="wippics/0304/horizon_3.png" alt="Horizon (c) 1985 IREM" width="256" height="256" />
						<img src="wippics/0304/horizon_4.png" alt="The intro of Horizon" width="256" height="256" />
						<img src="wippics/0304/horizon_5.png" alt="The gameplay of Horizon" width="256" height="256" />
						<img src="wippics/0304/horizon_6.png" alt="The gameplay of Horizon" width="256" height="256" />
						<img src="wippics/0304/horizon_7.png" alt="The gameplay of Horizon" width="256" height="256" />
						<img src="wippics/0304/horizon_8.png" alt="The gameplay of Horizon" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-19</h2>
					<p>
					Luca Elia added Zero Point 2 to the Unico driver.
					</p>
					<div class="wippix">
						<img src="wippics/0304/zeropoint2_1.png" alt="Zero Point 2 (c) 1999 Unico" width="384" height="224" />
						<img src="wippics/0304/zeropoint2_2.png" alt="The intro of Zero Point 2" width="384" height="224" />
						<img src="wippics/0304/zeropoint2_3.png" alt="The gameplay of Zero Point 2" width="384" height="224" />
						<img src="wippics/0304/zeropoint2_4.png" alt="The gameplay of Zero Point 2" width="384" height="224" />
						<img src="wippics/0304/zeropoint2_5.png" alt="The gameplay of Zero Point 2" width="384" height="224" />
						<img src="wippics/0304/zeropoint2_6.png" alt="The gameplay of Zero Point 2" width="384" height="224" />
						<img src="wippics/0304/zeropoint2_7.png" alt="The gameplay of Zero Point 2" width="384" height="224" />
						<img src="wippics/0304/zeropoint2_8.png" alt="The gameplay of Zero Point 2" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-18</h2>
					<p>
					Ian Patterson sent in an update to the cheat engine, fixing some bugs and adding a few new features. smf fixed the sprites in Horizon.
					</p>
					</div>

				<div class="row">
					<h2>2003-04-17</h2>
					<p>
					Bryan McPhail incorporated some fixes from MAME32 Plus! to the main version. David Haywood and smf added Horizon to the IREM M-62 driver, but it's got a few graphics glitches. David Haywood also added Vasara to the SSV driver and forwarded BUT's latest Chack'n Pop driver from MAME32 Plus!
					</p>
					<div class="wippix">
						<img src="wippics/0304/horizon_1.png" alt="Horizon (c) 1985 IREM" width="256" height="256" />
						<img src="wippics/0304/horizon_2.png" alt="The gameplay of Horizon" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/vasara_1.png" alt="Vasara (c) 2000 Visco" width="240" height="336" />
						<img src="wippics/0304/vasara_2.png" alt="The attract mode of Vasara" width="240" height="336" />
						<img src="wippics/0304/vasara_3.png" alt="The attract mode of Vasara" width="240" height="336" />
						<img src="wippics/0304/vasara_4.png" alt="The intro of Vasara" width="240" height="336" />
						<img src="wippics/0304/vasara_5.png" alt="The gameplay of Vasara" width="240" height="336" />
						<img src="wippics/0304/vasara_6.png" alt="The gameplay of Vasara" width="240" height="336" />
						<img src="wippics/0304/vasara_7.png" alt="The gameplay of Vasara" width="240" height="336" />
						<img src="wippics/0304/vasara_8.png" alt="The gameplay of Vasara" width="240" height="336" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-16</h2>
					<p>
					David Haywood added Big Bang, an alternative version of Thunder Dragon 2 to the NMK16 driver and fixed the frame rate in it. Luca Elia added SD Gundam Neo Battling to the Seta driver. Brian A. Troha fixed the DIP switch settings in Rezon. minachun improved the panning and volume adjustment in the K054539 sound core.
					</p>
					<div class="wippix">
						<img src="wippics/0304/bigbang_1.png" alt="Big Bang (c) 1993 NMK" width="224" height="384" />
						<img src="wippics/0304/bigbang_2.png" alt="The gameplay of Big Bang" width="224" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/neobattl_1.png" alt="SD Gundam Neo Battling (c) 1992 Banpresto" width="240" height="384" />
						<img src="wippics/0304/neobattl_2.png" alt="The intro of SD Gundam Neo Battling" width="240" height="384" />
						<img src="wippics/0304/neobattl_3.png" alt="The gameplay of SD Gundam Neo Battling" width="240" height="384" />
						<img src="wippics/0304/neobattl_4.png" alt="The gameplay of SD Gundam Neo Battling" width="240" height="384" />
						<img src="wippics/0304/neobattl_5.png" alt="The gameplay of SD Gundam Neo Battling" width="240" height="384" />
						<img src="wippics/0304/neobattl_6.png" alt="The gameplay of SD Gundam Neo Battling" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-15</h2>
					<p>
					Bryan McPhail and David Graves wrote a driver for Ground Effects and fixed the graphics and timing glitches in Under Fire.
					</p>
					<div class="wippix">
						<img src="wippics/0304/groundfx_1.png" alt="Ground Effects (c) 1992 Taito" width="320" height="232" />
						<img src="wippics/0304/groundfx_2.png" alt="The attract mode of Ground Effects" width="320" height="232" />
						<img src="wippics/0304/groundfx_3.png" alt="The intro of Ground Effects" width="320" height="232" />
						<img src="wippics/0304/groundfx_4.png" alt="The gameplay of Ground Effects" width="320" height="232" />
						<img src="wippics/0304/groundfx_5.png" alt="The gameplay of Ground Effects" width="320" height="232" />
						<img src="wippics/0304/groundfx_6.png" alt="The gameplay of Ground Effects" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-14</h2>
					<p>
					Jarek Burczynski fixed LFO support in an YM2610-only compilation. David Haywood fixed one DIP switch setting in Kick Start Wheelie King.
					</p>
					</div>

				<div class="row">
					<h2>2003-04-13</h2>
					<p>
					Nathan Woods fixed MAME from crashing on non-MMX machines. Sir Poonga submitted a new artwork option that crops the artwork just enough to make it fill the screen. Yorik submitted fixes to graphics glitches in Midnight Resistance and Speed Rumbler.
					</p>
					</div>

				<div class="row">
					<h2>2003-04-12</h2>
					<p>
					Luca Elia sent in a driver for Billiard Academy Real Break. Lawrence Gold fixed several compiling bugs when using an older GCC or another compiler. R. Belmont added save state support to the MultiPCM sound core and did a little cleanup on it.
					</p>
					<div class="wippix">
						<img src="wippics/0304/realbrk_1.png" alt="Billiard Academy Real Break (c) 1998 Nakanihon" width="320" height="224" />
						<img src="wippics/0304/realbrk_2.png" alt="The intro of Billiard Academy Real Break" width="320" height="224" />
						<img src="wippics/0304/realbrk_3.png" alt="The intro of Billiard Academy Real Break" width="320" height="224" />
						<img src="wippics/0304/realbrk_4.png" alt="The gameplay of Billiard Academy Real Break" width="320" height="224" />
						<img src="wippics/0304/realbrk_5.png" alt="The gameplay of Billiard Academy Real Break" width="320" height="224" />
						<img src="wippics/0304/realbrk_6.png" alt="The gameplay of Billiard Academy Real Break" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-11</h2>
					<p>
					Ernesto Corvi sent in a driver for TrucoTron, it works fine except the sound is not emulated. eabair fixed a potential crash bug in the tilemap disposing code. Luca Elia fixed some graphics glitches in Change Air Blade, added a new main ROM set for Super Real Mahjong Part 4 and he added Koi Koi Shimasho 2 to the SSV driver, it works fine except one of the ROMs is bad, causing corrupted tiles. Brian A. Troha did some minor fixes to the SSV driver, for example the CPU frequencies should now be correct.
					</p>
					<div class="wippix">
						<img src="wippics/0304/truco_1.png" alt="Truco-Tron (c) 198? Playtronic SRL" width="256" height="192" />
						<img src="wippics/0304/truco_2.png" alt="The attract mode of Truco-Tron" width="256" height="192" />
						<img src="wippics/0304/truco_3.png" alt="The intro of Truco-Tron" width="256" height="192" />
						<img src="wippics/0304/truco_4.png" alt="The gameplay of Truco-Tron" width="256" height="192" />
						<img src="wippics/0304/truco_5.png" alt="The gameplay of Truco-Tron" width="256" height="192" />
						<img src="wippics/0304/truco_6.png" alt="The gameplay of Truco-Tron" width="256" height="192" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/koikois2_1.png" alt="Koi Koi Shimasho 2 (c) 1997 Visco" width="336" height="240" />
						<img src="wippics/0304/koikois2_2.png" alt="The attract mode of Koi Koi Shimasho 2Koi Koi Shimasho 2" width="336" height="240" />
						<img src="wippics/0304/koikois2_3.png" alt="The attract mode of Koi Koi Shimasho 2" width="336" height="240" />
						<img src="wippics/0304/koikois2_4.png" alt="The attract mode of Koi Koi Shimasho 2" width="336" height="240" />
						<img src="wippics/0304/koikois2_5.png" alt="The gameplay of Koi Koi Shimasho 2" width="336" height="240" />
						<img src="wippics/0304/koikois2_6.png" alt="The gameplay of Koi Koi Shimasho 2" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-10</h2>
					<p>
					Aaron Giles added an option to control the audio output latency and another option to set a maximum size for the error log file. Paul Priest fixed the graphics priorities in Psikyo SH-2 games using the new zdrawgfx core functions. Jarek Burczynski fixed an interrupt problem in Exterminator and resubmitted the Cannon Ball addition in the Crazy Climber driver. Paul Priest fixed the crashes in Namco System 1/2 and Shanghai 3. Tomasz Slanina fixed Kick Start Wheelie King in the Taito SJ driver, and David Haywood fixed the controls in it.
					</p>
					<div class="wippix">
						<img src="wippics/0304/kikstart_1.png" alt="Kick Start Wheelie King (c) 1984 Taito" width="256" height="224" />
						<img src="wippics/0304/kikstart_2.png" alt="The gameplay of Kick Start Wheelie King" width="256" height="224" />
						<img src="wippics/0304/kikstart_3.png" alt="The gameplay of Kick Start Wheelie King" width="256" height="224" />
						<img src="wippics/0304/kikstart_4.png" alt="The gameplay of Kick Start Wheelie King" width="256" height="224" />
						<img src="wippics/0304/kikstart_5.png" alt="The gameplay of Kick Start Wheelie King" width="256" height="224" />
						<img src="wippics/0304/kikstart_6.png" alt="The gameplay of Kick Start Wheelie King" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-09</h2>
					<p>
					Phil Stroffolino sent in an update to drawgfx with preliminary zdrawgfx support and other fixes. David Haywood fixed the rowscroll / rowselect in Sega System 32 graphics emulation, fixing the title screen in Outrunners, playfield in Super Visual Football, floors in Arabian Fight and Burning Rival and mirror view in Rad Rally. Bryan McPhail added sound emulation to Macross Plus and Quiz Sailor Moon, but wrong samples are sometimes played in Quiz Sailor Moon.
					</p>
					</div>

				<div class="row">
					<h2>2003-04-08</h2>
					<p>
					Nathan Woods moved the printf and exit functions from the core to the OS dependant part, allowing them to be handled differently.
					</p>
					</div>

				<div class="row">
					<h2>2003-04-07</h2>
					<p>
					Jarek Burczynski improved the Shougi driver, but it's still not playable due to an unemulated MCU. Luca Elia added F-1 Grand Prix Star II to the Cisco Heat driver, it works fine except that sprites are glitchy because of incorrect ROMs. David Haywood added Mello Yello Q*bert to the Gottlieb driver. Nathan Woods cleaned up some MESS specific code in the core.
					</p>
					<div class="wippix">
						<img src="wippics/0304/f1gpstr2_1.png" alt="F-1 Grand Prix Star II (c) 1993 Jaleco" width="256" height="224" />
						<img src="wippics/0304/f1gpstr2_2.png" alt="The gameplay of F-1 Grand Prix Star II" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/myqbert_1.png" alt="Mello Yello Q*bert (c) 1982 Gottlieb" width="240" height="256" />
						<img src="wippics/0304/myqbert_2.png" alt="The gameplay of Mello Yello Q*bert" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-06</h2>
					<p>
					David Haywood fixed the background graphics decode in Salamander 2, but it's not otherwise improved. Acho A. Tang fixed the scrolling in Mystic Warriors and some other graphics glitches in Martial Champion. Brad Oliver fixed some compiling problems.
					</p>
					<div class="wippix">
						<img src="wippics/0304/salmndr2_new_1.png" alt="Salamander 2 (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0304/salmndr2_new_2.png" alt="The attract mode of Salamander 2" width="288" height="224" />
						<img src="wippics/0304/salmndr2_new_3.png" alt="The attract mode of Salamander 2" width="288" height="224" />
						<img src="wippics/0304/salmndr2_new_4.png" alt="The attract mode of Salamander 2" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-05</h2>
					<p>
					Quench sent in a PIC16C5x CPU core and added sound emulation to Dragon Master using it. R. Belmont fixed the background color methods in the Konami GX driver. Olivier Galibert partially fixed the sprites in Salamander 2 but they are still completely incorrect in-game. Acho A. Tang broke the protection in Martial Champion, it is now perfect except for the missing linescroll.
					</p>
					<div class="wippix">
						<img src="wippics/0304/salmndr2_1.png" alt="Salamander 2 (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0304/salmndr2_2.png" alt="The attract mode of Salamander 2" width="288" height="224" />
						<img src="wippics/0304/salmndr2_3.png" alt="The attract mode of Salamander 2" width="288" height="224" />
						<img src="wippics/0304/salmndr2_4.png" alt="The attract mode of Salamander 2" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/mtlchmpj_1.png" alt="Martial Champion (c) 1992 Konami" width="384" height="224" />
						<img src="wippics/0304/mtlchmpj_2.png" alt="The attract mode of Martial Champion" width="384" height="224" />
						<img src="wippics/0304/mtlchmpj_3.png" alt="The attract mode of Martial Champion" width="384" height="224" />
						<img src="wippics/0304/mtlchmpj_4.png" alt="The attract mode of Martial Champion" width="384" height="224" />
						<img src="wippics/0304/mtlchmpj_5.png" alt="The attract mode of Martial Champion" width="384" height="224" />
						<img src="wippics/0304/mtlchmpj_6.png" alt="The attract mode of Martial Champion" width="384" height="224" />
						<img src="wippics/0304/mtlchmpj_7.png" alt="The attract mode of Martial Champion" width="384" height="224" />
						<img src="wippics/0304/mtlchmpj_8.png" alt="The attract mode of Martial Champion" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-04</h2>
					<p>
					Jason Lo submitted major improvements to the Sega System Multi 32 driver, Hard Dunk and Outrunners are playable though they have a few graphics glitches. David Haywood fixed the row scroll / row select in Outrunners. Steve Ellenoff submitted various graphics emulation improvements to the U.S. Championship V'ball driver.
					</p>
					<div class="wippix">
						<img src="wippics/0304/harddunk_new_1.png" alt="Hard Dunk (c) 1994 Sega" width="320" height="224" />
						<img src="wippics/0304/harddunk_new_2.png" alt="The intro of Hard Dunk" width="320" height="224" />
						<img src="wippics/0304/harddunk_new_3.png" alt="The intro of Hard Dunk" width="320" height="224" />
						<img src="wippics/0304/harddunk_new_4.png" alt="The gameplay of Hard Dunk" width="320" height="224" />
						<img src="wippics/0304/harddunk_new_5.png" alt="The gameplay of Hard Dunk" width="320" height="224" />
						<img src="wippics/0304/harddunk_new_6.png" alt="The gameplay of Hard Dunk" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/orunners_new_1.png" alt="Outrunners (c) 1992 Sega" width="320" height="224" />
						<img src="wippics/0304/orunners_new_2.png" alt="The intro of Outrunners" width="320" height="224" />
						<img src="wippics/0304/orunners_new_3.png" alt="The intro of Outrunners" width="320" height="224" />
						<img src="wippics/0304/orunners_new_4.png" alt="The gameplay of Outrunners" width="320" height="224" />
						<img src="wippics/0304/orunners_new_5.png" alt="The gameplay of Outrunners" width="320" height="224" />
						<img src="wippics/0304/orunners_new_6.png" alt="The gameplay of Outrunners" width="320" height="224" />
						<img src="wippics/0304/orunners_new_7.png" alt="The gameplay of Outrunners" width="320" height="224" />
						<img src="wippics/0304/orunners_new_8.png" alt="The gameplay of Outrunners" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-03</h2>
					<p>
					Stefan Jokisch sent in a driver for Tournament Table. David Haywood added Las Vegas Girl (Girl '94) to the Zero Zone driver.
					</p>
					<div class="wippix">
						<img src="wippics/0304/tourtabl_1.png" alt="Tournament Table (c) 1978 Atari" width="320" height="200" />
						<img src="wippics/0304/tourtabl_2.png" alt="The gameplay of Tournament Table" width="320" height="200" />
						<img src="wippics/0304/tourtabl_3.png" alt="The gameplay of Tournament Table" width="320" height="200" />
						<img src="wippics/0304/tourtabl_4.png" alt="The gameplay of Tournament Table" width="320" height="200" />
					</div>
					<div class="wippix">
						<img src="wippics/0304/lvgirl94_1.png" alt="Las Vegas Girl (Girl '94) (c) 1994 Comad" width="368" height="224" />
						<img src="wippics/0304/lvgirl94_2.png" alt="The intro of Las Vegas Girl (Girl '94)" width="368" height="224" />
						<img src="wippics/0304/lvgirl94_3.png" alt="The gameplay of Las Vegas Girl (Girl '94)" width="368" height="224" />
						<img src="wippics/0304/lvgirl94_4.png" alt="The gameplay of Las Vegas Girl (Girl '94)" width="368" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-04-02</h2>
					<p>
					David Haywood added sprites and fixed the interrupts in Tecmo Bowl so it's working now, though the sound emulation is incomplete.
					</p>
					<div class="wippix">
						<img src="wippics/0304/tecmobowl_1.png" alt="Tecmo Bowl (c) 1987 Tecmo" width="512" height="224" />
						<img src="wippics/0304/tecmobowl_2.png" alt="The intro of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0304/tecmobowl_3.png" alt="The gameplay of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0304/tecmobowl_4.png" alt="The gameplay of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0304/tecmobowl_5.png" alt="The gameplay of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0304/tecmobowl_6.png" alt="The gameplay of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0304/tecmobowl_7.png" alt="The gameplay of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0304/tecmobowl_8.png" alt="The gameplay of Tecmo Bowl" width="512" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-04-01</h2>
					<p>
					Charles MacDonald submitted a HuC6280 sound chip emulator and added support for it in the Battle Rangers / Bloody Wolf driver. David Haywood doubled the palette RAM size in Tecmo Bowl but there are no other improvements.
					</p>
				</div>

            </div>
            <!-- content end --> 
		
		<!--#include virtual="/_include/html/footer.txt" -->
    
    </div>    
    </div>
    <!-- main end -->
	<br/><br/><br/>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>	
</body>

</html>
