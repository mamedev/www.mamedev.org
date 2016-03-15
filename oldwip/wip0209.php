<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>September 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-09-30</h2>
					<p>
					David Haywood added SF-X to the Scramble driver, but it's missing sound emulation. Stephane Humbert fixed the inputs and DIP switch settings in it. Olivier Galibert fixed some V60 CPU core bugs which caused jerky scrolling in Change Air Blade.
					</p>
					<div class="wippix">
						<img src="wippics/0209/sfx_1.png" alt="SF-X (c) 1983 Nichibutsu" width="224" height="224" />
						<img src="wippics/0209/sfx_2.png" alt="The gameplay of SF-X" width="224" height="224" />
						<img src="wippics/0209/sfx_3.png" alt="The gameplay of SF-X" width="224" height="224" />
						<img src="wippics/0209/sfx_4.png" alt="The gameplay of SF-X" width="224" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-29</h2>
					<p>
					Kale submitted a fix for the protection check in Sen Jin. David Graves sent in a Taito Z driver update with DIP switch fixes.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-28</h2>
					<p>
					Paul Priest added sprite and background zooming to the Jaleco Mega System 32 driver, Stephane Humbert fixed the DIP switches in Desert War and David Haywood cleaned up the driver.
					</p>
					<div class="wippix">
						<img src="wippics/0209/desertwr_zoom.png" alt="Desert War zooming" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-27</h2>
					<p>
					ElSemi and Paul Priest fixed the Neo Geo memory card interface. David Haywood fixed the background graphics in Jan Jan Paradise 2 with a redumped ROM and he fixed another problem that also caused incorrect graphics emulation in it.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-26</h2>
					<p>
					Stefan Jokisch sent in a driver for Sky Raider, but it is missing sound emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0209/skyraid_1.png" alt="Sky Raider (c) 1978 Atari" width="256" height="240" />
						<img src="wippics/0209/skyraid_2.png" alt="The gameplay of Sky Raider" width="256" height="240" />
						<img src="wippics/0209/skyraid_3.png" alt="The gameplay of Sky Raider" width="256" height="240" />
						<img src="wippics/0209/skyraid_4.png" alt="The gameplay of Sky Raider" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-25</h2>
					<p>
					Ian Patterson added new cheat types and fixed some bugs in the cheat engine. David Haywood sent in a preliminary Jaleco Mega System 32 driver with support for Desert War, Gratia, Game Tengoku - The Game Paradise, Tetris Plus, Best Bout Boxing and F1 Super Battle, although the graphics emulation is incomplete and there is no sound.
					</p>
					<div class="wippix">
						<img src="wippics/0209/desertwr_wip_1.png" alt="Desert War (c) 1995 Jaleco" width="224" height="320" />
						<img src="wippics/0209/desertwr_wip_2.png" alt="The gameplay of Desert War" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/gratia_wip_1.png" alt="Gratia (c) 1996 Jaleco" width="320" height="224" />
						<img src="wippics/0209/gratia_wip_2.png" alt="The gameplay of Gratia" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/gametngk_wip_1.png" alt="Game Tengoku (c) 1995 Jaleco" width="224" height="320" />
						<img src="wippics/0209/gametngk_wip_2.png" alt="The gameplay of Game Tengoku" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/tetrisp_wip_1.png" alt="Tetris Plus (c) 1995 Jaleco" width="320" height="224" />
						<img src="wippics/0209/tetrisp_wip_2.png" alt="The gameplay of Tetris Plus" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/bbbxing_wip_1.png" alt="Best Bout Boxing (c) 1994 Jaleco" width="320" height="224" />
						<img src="wippics/0209/bbbxing_wip_2.png" alt="The gameplay of Best Bout Boxing" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/f1superb_wip_1.png" alt="F1 Super Battle (c) 199? Jaleco" width="320" height="224" />
						<img src="wippics/0209/f1superb_wip_2.png" alt="The gameplay of F1 Super Battle" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-24</h2>
					<p>
					Stephane Humbert fixed the DIP switch settings in some of the games in the Gottlieb driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-23</h2>
					<p>
					Olivier Galibert fixed the debugger and -listinfo with V70. smf sent in another update to the DOS version of MAME, with support for reducing the number of colors for 8-bit graphics modes.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-22</h2>
					<p>
					Brian A. Troha corrected the DIP switch settings in Battle Shark. Olivier Galibert added V70 support to the V60 core.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-21</h2>
					<p>
					Stephane Humbert cleaned up the N.Y. Captor driver, fixed inputs and DIP switch settings and added some comments to the driver. Olivier Galibert improved the game information screen, combining multiple instances of identical processors to one entry.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-20</h2>
					<p>
					Phil Stroffolino improved the road generator and NB1-style sprites in the Namco System 2 driver, making Lucky and Wild and Suzuka 8 Hours 2 playable. Stephane Humbert fixed the DIP switches and inputs in the Blood Bros. driver. Kale submitted cocktail mode and flip screen support for the M-72 driver, but the support is not yet perfect.
					</p>
					<div class="wippix">
						<img src="wippics/0209/luckywld_1.png" alt="Lucky &amp; Wild (c) 1992 Namco" width="288" height="224" />
						<img src="wippics/0209/luckywld_2.png" alt="The intro of Lucky &amp; Wild" width="288" height="224" />
						<img src="wippics/0209/luckywld_3.png" alt="The gameplay of Lucky &amp; Wild" width="288" height="224" />
						<img src="wippics/0209/luckywld_4.png" alt="The gameplay of Lucky &amp; Wild" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/suzuk8h2_1.png" alt="Suzuka 8 Hours 2 (c) 1993 Namco" width="288" height="224" />
						<img src="wippics/0209/suzuk8h2_2.png" alt="The intro of Suzuka 8 Hours 2" width="288" height="224" />
						<img src="wippics/0209/suzuk8h2_3.png" alt="The intro of Suzuka 8 Hours 2" width="288" height="224" />
						<img src="wippics/0209/suzuk8h2_4.png" alt="The gameplay of Suzuka 8 Hours 2" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-19</h2>
					<p>
					Jarek Burczynski sent in a driver for Ace, it's missing sound emulation though. Tomasz Slanina submitted a driver for N.Y. Captor, there are some graphics glitches but it's mostly working and playable. Stefan Jokisch updated Frank Palazzolo's old Starship 1 driver to current standards and did some fixes and additions.
					</p>
					<div class="wippix">
						<img src="wippics/0209/ace_1.png" alt="Ace (c) 1976 Allied Leisure" width="224" height="240" />
						<img src="wippics/0209/ace_2.png" alt="The gameplay of Ace" width="224" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/nycaptor_1.png" alt="N.Y. Captor (c) 1985 Taito" width="256" height="224" />
						<img src="wippics/0209/nycaptor_2.png" alt="The gameplay of N.Y. Captor" width="256" height="224" />
						<img src="wippics/0209/nycaptor_3.png" alt="The gameplay of N.Y. Captor" width="256" height="224" />
						<img src="wippics/0209/nycaptor_4.png" alt="The gameplay of N.Y. Captor" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/starship1_1.png" alt="Starship 1 (c) 1977 Atari" width="256" height="240" />
						<img src="wippics/0209/starship1_2.png" alt="The gameplay of Starship 1" width="256" height="240" />
						<img src="wippics/0209/starship1_3.png" alt="The gameplay of Starship 1" width="256" height="240" />
						<img src="wippics/0209/starship1_4.png" alt="The gameplay of Starship 1" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-18</h2>
					<p>
					Aaron Giles fixed the remaining issues with the Rampart slapstic behaviour.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-17</h2>
					<p>
					Robert Hunt added an alternate Chopper I version to the SNK driver. Brian A. Troha added an original version of Space Invasion to the Commando driver. MooglyGuy submitted an addition of manual RGB levels control to the OSD menu. Paul Priest added sprite zooming and background linescroll and fixed sprite positions in the Super Kaneko Nova System driver.
					</p>
					<div class="wippix">
						<img src="wippics/0209/galpani4_rotatingbg.png" alt="Rotating backgrounds in Gals Panic 4" width="320" height="240" />
						<img src="wippics/0209/galpani4_zooming_columnscroll.png" alt="Zooming and linescroll in Gals Panic 4" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-16</h2>
					<p>
					Paul Priest cleaned up the Psikyo SH-2 games' driver and lowered the memory requirements in the Taisen Hot Gimmick games a little.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-15</h2>
					<p>
					R. Belmont fixed the SH7604 internal timers so that the music in the Super Kaneko Nova System games is fixed and the controls work in the Taisen Hot Gimmick games. Stephane Humbert fixed a small issue in the Pole Position MCU coinage handling.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-14</h2>
					<p>
					R. Belmont implemented the SH7604 internal timers which gets music and sound running in the rest of the Super Kaneko Nova System games, but the music still suddenly stops working after a while in the games. It also adds sound to Sol Divide and gets the Taisen Hot Gimmick games working. Uki added the controls to both Taisen Hot Gimmick and Taisen Hot Gimmick Kairakuten, but the controls stop working after a while, like the music in the Super Kaneko Nova System games. Nicola Salmoria optimized the Super Kaneko Nova System tilemap graphics drawing even more, and Paul Priest added support for separate RGB brightness controls, fixing the color fades in the games.
					</p>
					<div class="wippix">
						<img src="wippics/0209/hgka_1.png" alt="Taisen Hot Gimmick Kairakuten (c) 1998 Psikyo" width="320" height="224" />
						<img src="wippics/0209/hgka_2.png" alt="The intro of Taisen Hot Gimmick Kairakuten" width="320" height="224" />
						<img src="wippics/0209/hgka_3.png" alt="The intro of Taisen Hot Gimmick Kairakuten" width="320" height="224" />
						<img src="wippics/0209/hgka_4.png" alt="The intro of Taisen Hot Gimmick Kairakuten" width="320" height="224" />
						<img src="wippics/0209/hgka_5.png" alt="The intro of Taisen Hot Gimmick Kairakuten" width="320" height="224" />
						<img src="wippics/0209/hgka_6.png" alt="The intro of Taisen Hot Gimmick Kairakuten" width="320" height="224" />
						<img src="wippics/0209/hgka_7.png" alt="The gameplay of Taisen Hot Gimmick Kairakuten" width="320" height="224" />
						<img src="wippics/0209/hgka_8.png" alt="The gameplay of Taisen Hot Gimmick Kairakuten" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-13</h2>
					<p>
					Nicola Salmoria reduced the memory requirements of the Super Kaneko Nova System driver and hooked up the rotation and zoom control registers. David Haywood and Paul Priest optimized the graphics drawing in it a little. spice fixed a SH-2 CPU core bug which caused the freezing boss in Strikers 1945 II. Barry Rodewald submitted a fix for the CPS-2 driver to reset the Z80 properly after exiting service mode.
					</p>
					<div class="wippix">
						<img src="wippics/0209/s194_1.png" alt="The boss in Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0209/s194_2.png" alt="The boss in Strikers 1945 II" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-12</h2>
					<p>
					David Haywood sent in an update to the Super Kaneko Nova System driver, fixing the sprite positioning in Gals Panic 4 and Gals Panic S.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-11</h2>
					<p>
					Nicola Salmoria added sound emulation to some of the games in the Super Kaneko Nova System driver, Paul Priest fixed the inputs, added Puzz Loop European version and cleaned up a few things in it and David Haywood added Panic Street, Gals Panic S2 and Jan Jan Paradise 2 which are playable, and Gals Panic S and Gals Panic 4 which have some misplaced sprites. Jan Jan Paradise 2 has a bad graphics ROM which causes some graphics to be corrupt.
					</p>
					<div class="wippix">
						<img src="wippics/0209/panicstr_1.png" alt="Panic Street (c) 1999 Kaneko" width="320" height="240" />
						<img src="wippics/0209/panicstr_2.png" alt="The intro of Panic Street" width="320" height="240" />
						<img src="wippics/0209/panicstr_3.png" alt="The intro of Panic Street" width="320" height="240" />
						<img src="wippics/0209/panicstr_4.png" alt="The gameplay of Panic Street" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/galpans2_1.png" alt="Gals Panic S2 (c) 1999 Kaneko" width="320" height="240" />
						<img src="wippics/0209/galpans2_2.png" alt="The intro of Gals Panic S2" width="320" height="240" />
						<img src="wippics/0209/galpans2_3.png" alt="The intro of Gals Panic S2" width="320" height="240" />
						<img src="wippics/0209/galpans2_4.png" alt="The gameplay of Gals Panic S2" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/jjparad2_1.png" alt="Jan Jan Paradise 2 (c) 1997 Electro Design" width="320" height="240" />
						<img src="wippics/0209/jjparad2_2.png" alt="The intro of Jan Jan Paradise 2" width="320" height="240" />
						<img src="wippics/0209/jjparad2_3.png" alt="The intro of Jan Jan Paradise 2" width="320" height="240" />
						<img src="wippics/0209/jjparad2_4.png" alt="The gameplay of Jan Jan Paradise 2" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/galpanis_1.png" alt="Gals Panic S (c) 1997 Kaneko" width="320" height="240" />
						<img src="wippics/0209/galpanis_2.png" alt="The intro of Gals Panic S" width="320" height="240" />
						<img src="wippics/0209/galpanis_3.png" alt="The gameplay of Gals Panic S" width="320" height="240" />
						<img src="wippics/0209/galpanis_4.png" alt="The gameplay of Gals Panic S" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/galpani4_1.png" alt="Gals Panic 4 (c) 1996 Kaneko" width="320" height="240" />
						<img src="wippics/0209/galpani4_2.png" alt="The intro of Gals Panic 4" width="320" height="240" />
						<img src="wippics/0209/galpani4_3.png" alt="The intro of Gals Panic 4" width="320" height="240" />
						<img src="wippics/0209/galpani4_4.png" alt="The gameplay of Gals Panic 4" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/puzzloop_euro_1.png" alt="Puzz Loop (c) 1998 Mitchell" width="320" height="240" />
						<img src="wippics/0209/puzzloop_euro_2.png" alt="The intro of Puzz Loop" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-10</h2>
					<p>
					David Haywood updated and re-wrote S. Glaize's old Super Kaneko Nova System driver. The driver lacks sound and has graphics glitches, but Cyvern, Puzz Loop, Sen-know, Otome Ryouran, Tel Jan and Jan Jan Paradise are playable. Aaron Giles added a prototype game called Speed Ball to the Williams driver.
					</p>
					<div class="wippix">
						<img src="wippics/0209/cyve_1.png" alt="Cyvern (c) 1998 Kaneko" width="240" height="320" />
						<img src="wippics/0209/cyve_2.png" alt="The intro of Cyvern" width="240" height="320" />
						<img src="wippics/0209/cyve_3.png" alt="The gameplay of Cyvern" width="240" height="320" />
						<img src="wippics/0209/cyve_4.png" alt="The gameplay of Cyvern" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/puzz_1.png" alt="Puzz Loop (c) 1998 Mitchell" width="320" height="240" />
						<img src="wippics/0209/puzz_2.png" alt="The intro of Puzz Loop" width="320" height="240" />
						<img src="wippics/0209/puzz_3.png" alt="The gameplay of Puzz Loop" width="320" height="240" />
						<img src="wippics/0209/puzz_4.png" alt="The gameplay of Puzz Loop" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/senk_1.png" alt="Sen-know (c) 1999 Kaneko" width="320" height="240" />
						<img src="wippics/0209/senk_2.png" alt="The intro of Sen-know" width="320" height="240" />
						<img src="wippics/0209/senk_3.png" alt="The intro of Sen-know" width="320" height="240" />
						<img src="wippics/0209/senk_4.png" alt="The gameplay of Sen-know" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/ryou_1.png" alt="Otome Ryouran (c) 1998 Electro Design" width="320" height="240" />
						<img src="wippics/0209/ryou_2.png" alt="The gameplay of Otome Ryouran" width="320" height="240" />
						<img src="wippics/0209/ryou_3.png" alt="The intro of Otome Ryouran" width="320" height="240" />
						<img src="wippics/0209/ryou_4.png" alt="The intro of Otome Ryouran" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/telj_1.png" alt="Tel Jan (c) 1999 Electro Design" width="320" height="240" />
						<img src="wippics/0209/telj_2.png" alt="The intro of Tel Jan" width="320" height="240" />
						<img src="wippics/0209/telj_3.png" alt="The intro of Tel Jan" width="320" height="240" />
						<img src="wippics/0209/telj_4.png" alt="The gameplay of Tel Jan" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/jjpa_1.png" alt="Jan Jan Paradise (c) 1996 Electro Design" width="320" height="240" />
						<img src="wippics/0209/jjpa_2.png" alt="The intro of Jan Jan Paradise" width="320" height="240" />
						<img src="wippics/0209/jjpa_3.png" alt="The intro of Jan Jan Paradise" width="320" height="240" />
						<img src="wippics/0209/jjpa_4.png" alt="The gameplay of Jan Jan Paradise" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0209/spdb_1.png" alt="Speed Ball (c) 1985 Williams" width="292" height="240" />
						<img src="wippics/0209/spdb_2.png" alt="The intro of Speed Ball" width="292" height="240" />
						<img src="wippics/0209/spdb_3.png" alt="The gameplay of Speed Ball" width="292" height="240" />
						<img src="wippics/0209/spdb_4.png" alt="The gameplay of Speed Ball" width="292" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-09</h2>
					<p>
					Stephane Humbert sent in the US Games driver with the two new versions added earlier and some other changes. The Guru and R. Belmont fixed the music and sound effects in Battle Bakraid. Luis Faria submitted a bug fix for a crash in Super Locomotive. Reip submitted some drivers with clone ROM sets added.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-08</h2>
					<p>
					An anonymous contributor added Quiz de Idol! Hot Debut to the Psikyo SH-2 driver. R. Belmont fixed the missing bass and drum sounds in the YMF278B sound chip emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0209/hotd_1.png" alt="Quiz de Idol! Hot Debut (c) 2000 Psikyo" width="320" height="240" />
						<img src="wippics/0209/hotd_2.png" alt="The intro of Quiz de Idol! Hot Debut" width="320" height="240" />
						<img src="wippics/0209/hotd_3.png" alt="The intro of Quiz de Idol! Hot Debut" width="320" height="240" />
						<img src="wippics/0209/hotd_4.png" alt="The gameplay of Quiz de Idol! Hot Debut" width="320" height="240" />
						<img src="wippics/0209/hotd_5.png" alt="The gameplay of Quiz de Idol! Hot Debut" width="320" height="240" />
						<img src="wippics/0209/hotd_6.png" alt="The gameplay of Quiz de Idol! Hot Debut" width="320" height="240" />
						<img src="wippics/0209/hotd_7.png" alt="The gameplay of Quiz de Idol! Hot Debut" width="320" height="240" />
						<img src="wippics/0209/hotd_8.png" alt="The gameplay of Quiz de Idol! Hot Debut" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-07</h2>
					<p>
					R. Belmont added music to Aquarium, but lots of sound effects are still missing. Paul Priest sent in a patch to disable frameskipping when the debugger is activated.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-06</h2>
					<p>
					Barry Rodewald submitted an improvement to the CPS-2 driver raster effects' emulation, improving many cases, however it still causes flicker from time to time. Paul Priest added definitely correct keyboard LED handling but it only helps Windows NT / 2000 / XP.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-05</h2>
					<p>
					Tim Lindner submitted a fix to the SEX instruction in the m6809 CPU core. David Haywood sent in a driver for Aquarium, it works fine except sound isn't emulated. Paul Priest fixed the keyboard LEDs from being incorrect reset after exiting MAME.
					</p>
					<div class="wippix">
						<img src="wippics/0209/aqua_1.png" alt="Aquarium (c) 1996 Excellent System" width="320" height="256" />
						<img src="wippics/0209/aqua_2.png" alt="The intro of Aquarium" width="320" height="256" />
						<img src="wippics/0209/aqua_3.png" alt="The gameplay of Aquarium" width="320" height="256" />
						<img src="wippics/0209/aqua_4.png" alt="The gameplay of Aquarium" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-04</h2>
					<p>
					Phil Stroffolino sent in an update to the Halley's Comet driver. The title screen works but it crashes after a few seconds into the game, and the graphics emulation is missing a lot of things. Brian A. Troha submitted a new version of Gunbird (World) that fixes several bugs caused by the older, corrupt ROMs.
					</p>
					<div class="wippix">
						<img src="wippics/0209/hall_1.png" alt="Halley's Comet (c) 1986 Taito" width="256" height="256" />
						<img src="wippics/0209/hall_2.png" alt="The attract mode of Halley's Comet" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-09-03</h2>
					<p>
					smf sent in a major update to the DOS version. Paul Priest fixed the dec8 driver from crashing.
					</p>
				</div>

				<div class="row">
					<h2>2002-09-02</h2>
					<p>
					Stephane Humbert fixed the speedup in mkr4, added a 2 players version of Main Event and he added a new version to the Gaplus driver. R. Belmont added sound to Blazing Tornado. ElSemi submitted a fix for the YM2610 Delta-T samples which fixes the sound in the KOF99 how to play screen and in the Shock Troopers intro.
					</p>
				</div>

				<div class="rowlast">
					<h2>2002-09-01</h2>
					<p>
					David Haywood added two alternate versions of the US Games ROMs. Bryan McPhail fixed several problems with the light gun support. Olivier Galibert made the pause brightness level configurable.
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
