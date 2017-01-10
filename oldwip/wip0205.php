<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>May 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-05-31</h2>
					<p>
					Paul Priest added alpha blending to the Psikyo SH-2 driver. Bryan McPhail fixed a few small things in the Taito F3 system driver.
					</p>
					<div class="wippix">
						<img src="wippics/0205/psh2_1.png" alt="Alpha blending in Psikyo SH-2 driver" width="224" height="320" />
						<img src="wippics/0205/psh2_2.png" alt="Alpha blending in Psikyo SH-2 driver" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-30</h2>
					<p>
					Aaron Giles added an early prototype called Lunar Battle to the Gravitar driver, and he fixed the artwork-related command line parameters. David Haywood improved the Speed Spin driver slightly, but it's still not very playable. Stephane Humbert fixed the DIP switches in the Gravitar driver. Zsolt Vasvari cleaned up the Sky Diver driver. David Graves fixed a crash in the Toki driver. Acho A. Tang did a few small cleanups in various drivers and improved the Irem GA-20 sound chip emulation slightly.
					</p>
				</div>

				<div class="row">
					<h2>2002-05-29</h2>
					<p>
					Aaron Giles fixed a bug in resizing the screen with vector games. Stefan Jokisch merged the Fire Truck and Super Bug drivers and improved both of them significantly. Bernd Wiebelt added a configurable dead zone for analog joysticks to the Windows version. Gerardo Oporto fixed the DIP switch settings in the nmk16 driver. Stephane Humbert fixed DIP switches in various drivers.
					</p>
				</div>

				<div class="row">
					<h2>2002-05-28</h2>
					<p>
					Stephane Humbert fixed the inputs and DIP switches in various drivers. Aaron Giles changed the display interface a little. David Haywood sent in a preliminary driver for Speed Spin, but it doesn't really work at all. Gerardo Oporto fixed the DIP switch settings in the Toffy driver. Zsolt Vasvari and Aaron Giles added artwork support to Sky Diver.
					</p>
				</div>

				<div class="row">
					<h2>2002-05-27</h2>
					<p>
					Bryan McPhail sent in a driver for Super Shanghai Dragon's Eye, though only the bootleg version works and without sound. Zsolt Vasvari reversed the colors in Skydiver in preparation for adding the artwork. Bernd Wiebelt added support for multiple ini-directories to the Windows version. Quench did a few small cleanups on the toaplan2 driver. David Haywood cleaned up a few things in the PGM driver.
					</p>
					<div class="wippix">
						<img src="wippics/0205/ssha_1.png" alt="Super Shanghai Dragon's Eye (c) 1992 Hot-B" width="320" height="240" />
						<img src="wippics/0205/ssha_2.png" alt="The intro of Super Shanghai Dragon's Eye" width="320" height="240" />
						<img src="wippics/0205/ssha_3.png" alt="The gameplay of Super Shanghai Dragon's Eye" width="320" height="240" />
						<img src="wippics/0205/ssha_4.png" alt="The gameplay of Super Shanghai Dragon's Eye" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-26</h2>
					<p>
					Aaron Giles fixed a few artwork bugs. David Haywood added Indoor Soccer to the Mr. Do's Castle driver, and he added Knights of Valour to the PGM driver with much thanks to ElSemi for valuable information. Bryan McPhail improved the protection emulation in Funky Jet and fixed some DIP switch settings in it. Nicola Salmoria added Sankokushi to the Metro driver. Nicola Salmoria also added a resample filter to the AY8910 emulator, but there isn't much of a quality improvement. Zsolt Vasvari added an original Sega version of Super Cobra.
					</p>
					<div class="wippix">
						<img src="wippics/0205/sang_1.png" alt="Knights of Valour (c) 1999 IGS" width="448" height="224" />
						<img src="wippics/0205/sang_2.png" alt="The intro of Knights of Valour" width="448" height="224" />
						<img src="wippics/0205/sang_3.png" alt="The gameplay of Knights of Valour" width="448" height="224" />
						<img src="wippics/0205/sang_4.png" alt="The gameplay of Knights of Valour" width="448" height="224" />
						<img src="wippics/0205/sang_5.png" alt="The gameplay of Knights of Valour" width="448" height="224" />
						<img src="wippics/0205/sang_6.png" alt="The gameplay of Knights of Valour" width="448" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/3kok_1.png" alt="Sankokushi (c) 1996 Mitchell" width="320" height="240" />
						<img src="wippics/0205/3kok_2.png" alt="The intro of Sankokushi" width="320" height="240" />
						<img src="wippics/0205/3kok_3.png" alt="The intro of Sankokushi" width="320" height="240" />
						<img src="wippics/0205/3kok_4.png" alt="The gameplay of Sankokushi" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/idso_1.png" alt="Indoor Soccer (c) 1985 Universal" width="240" height="192" />
						<img src="wippics/0205/idso_2.png" alt="The gameplay of Indoor Soccer" width="240" height="192" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-25</h2>
					<p>
					Paul Priest added sprite zoom and alpha blending to the Macross Plus driver. Aaron Giles fixed another two bugs in the new artwork functions. David Haywood added the Chinese version of Oriental Legend to the PGM driver. Zsolt Vasvari cleaned up the Route 16 driver. Nicola Salmoria added proper 053936 emulation which makes the 3D graphics work in Golfing Greats, but the game is not 100% playable due to other protection. Premier Soccer and Super Slams graphics are also improved. Bryan McPhail fixed some memory leaks. Stephane Humbert fixed the DIP switch settings in Desert Assault.
					</p>
					<div class="wippix">
						<img src="wippics/0205/glfg_1.png" alt="Golfing Greats (c) 1991 Konami" width="288" height="224" />
						<img src="wippics/0205/glfg_2.png" alt="The intro of Golfing Greats" width="288" height="224" />
						<img src="wippics/0205/glfg_3.png" alt="The gameplay of Golfing Greats" width="288" height="224" />
						<img src="wippics/0205/glfg_4.png" alt="The gameplay of Golfing Greats" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-24</h2>
					<p>
					Bryan McPhail sent in a driver for Desert Assault. Zsolt Vasvari added support for the lamps in Gorf. Stephane Humbert fixed DIP switch settings in Condor and Grand Striker. Aaron Giles fixed another crash bug in the new artwork functions.
					</p>
					<div class="wippix">
						<img src="wippics/0205/dass_1.png" alt="Desert Assault (c) 1991 Data East" width="320" height="240" />
						<img src="wippics/0205/dass_2.png" alt="The intro of Desert Assault" width="320" height="240" />
						<img src="wippics/0205/dass_3.png" alt="The gameplay of Desert Assault" width="320" height="240" />
						<img src="wippics/0205/dass_4.png" alt="The gameplay of Desert Assault" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-23</h2>
					<p>
					Zsolt Vasvari added Mr. Kougar to the Scramble driver, and he added Condor to the Phoenix driver, which is basically a version of Phoenix running on Z80 instead of I8085, and it has a time limit. Zsolt Vasvari also fixed the button artwork in Space War. Aaron Giles fixed yet another load of bugs in the new artwork functions, and he added support for blit-time rotation which may or may not speed up some games, but it will at the very least make it easier to write custom drawing routines. David Haywood sent in a very preliminary driver for SNK's Main Event, which works otherwise but there is no graphics or sound emulation. David Haywood also sent in a bare bones driver for the Tecmo 68k system, but it doesn't work at all due to unemulated protection. Nathan Woods fixed a crash in the command line parameters.
					</p>
					<div class="wippix">
						<img src="wippics/0205/mrko_1.png" alt="Mr. Kougar (c) 1984 ATW" width="224" height="256" />
						<img src="wippics/0205/mrko_2.png" alt="The gameplay of Mr. Kougar" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-22</h2>
					<p>
					Stephane Humbert fixed the DIP switches and inputs in Storm Blade, and Brian A. Troha fixed the screen size in it. Bryan McPhail integrated Shiriru's updates to the Taito F3 driver which adds better graphics priority emulation and better alpha blending. Farfetch'd sent in a driver for Grand Striker, which works fine except the playfield graphics and priorities are not yet correct. Kale submitted a fix for the interrupt system in Iga Ninjyutsuden. MASH added various clone ROM sets to several drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0205/gstr_1.png" alt="Grand Striker (c) 1993 Human" width="320" height="232" />
						<img src="wippics/0205/gstr_2.png" alt="The intro of Grand Striker" width="320" height="232" />
						<img src="wippics/0205/gstr_3.png" alt="The intro of Grand Striker" width="320" height="232" />
						<img src="wippics/0205/gstr_4.png" alt="The gameplay of Grand Striker" width="320" height="232" />
						<img src="wippics/0205/gstr_5.png" alt="The gameplay of Grand Striker" width="320" height="232" />
						<img src="wippics/0205/gstr_6.png" alt="The gameplay of Grand Striker" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-21</h2>
					<p>
					David Haywood fixed the sprite colors in Macross Plus, but Quiz Sailor Moon is not improved. An anonymous contributor sent in a fix for the V60 core which makes Super Real Mahjong Part 4 and 7 playable. Nicola Salmoria fixed the rotation and zoom in the Super Slams driver. Brian A. Troha added Storm Blade to the SSV driver, and David Haywood fixed the graphics in it. MASH submitted a clone ROM set for Saboten Bombers. Aaron Giles optimized a few things in the new artwork system. Chris Hardy added the color PROMs to Dog-Fight. Paul Priest improved the sprite zooming in the Psikyo SH-2 driver, and added brightness control to it.
					</p>
					<div class="wippix">
						<img src="wippics/0205/macr_5.png" alt="The intro of Macross Plus" width="240" height="384" />
						<img src="wippics/0205/macr_6.png" alt="The gameplay of Macross Plus" width="240" height="384" />
						<img src="wippics/0205/macr_7.png" alt="The gameplay of Macross Plus" width="240" height="384" />
						<img src="wippics/0205/macr_8.png" alt="The gameplay of Macross Plus" width="240" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/stmb_1.png" alt="Storm Blade (c) 1996 Visco" width="236" height="336" />
						<img src="wippics/0205/stmb_2.png" alt="The intro of Storm Blade" width="236" height="336" />
						<img src="wippics/0205/stmb_3.png" alt="The gameplay of Storm Blade" width="236" height="336" />
						<img src="wippics/0205/stmb_4.png" alt="The gameplay of Storm Blade" width="236" height="336" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/dogf_5.png" alt="Dog-Fight (c) 1984 Technos" width="256" height="240" />
						<img src="wippics/0205/dogf_6.png" alt="The gameplay of Dog-Fight" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-20</h2>
					<p>
					David Haywood improved the sprite zooming in Super Slams and sent a few pictures of a very preliminary Macross Plus and Quiz Sailor Moon driver, which is missing sprite colors and sound and a few other things. Kale added the World version to Power Spikes. MASH re-submitted the Eliminator 4 players prototype version.
					</p>
					<div class="wippix">
						<img src="wippics/0205/macr_1.png" alt="Macross Plus (c) 1996 Banpresto" width="240" height="384" />
						<img src="wippics/0205/macr_2.png" alt="The attract mode of Macross Plus" width="240" height="384" />
						<img src="wippics/0205/macr_3.png" alt="The attract mode of Macross Plus" width="240" height="384" />
						<img src="wippics/0205/macr_4.png" alt="The attract mode of Macross Plus" width="240" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/quiz_1.png" alt="Quiz Sailor Moon (c) 1997 Banpresto" width="384" height="240" />
						<img src="wippics/0205/quiz_2.png" alt="The attract mode of Quiz Sailor Moon" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-19</h2>
					<p>
					David Haywood sent in a very preliminary driver for Super Slams, which is playable and has sound, but graphics aren't yet entirely correctly emulated. Aaron Giles added a Gravitar prototype to the Black Widow driver. Nicola Salmoria cleaned up the bare bones Halley's Comet driver, but did not progress any further.
					</p>
					<div class="wippix">
						<img src="wippics/0205/supr_1.png" alt="Super Slams (c) 1995 Banpresto" width="320" height="224" />
						<img src="wippics/0205/supr_2.png" alt="The intro of Super Slams" width="320" height="224" />
						<img src="wippics/0205/supr_3.png" alt="The intro of Super Slams" width="320" height="224" />
						<img src="wippics/0205/supr_4.png" alt="The gameplay of Super Slams" width="320" height="224" />
						<img src="wippics/0205/supr_5.png" alt="The gameplay of Super Slams" width="320" height="224" />
						<img src="wippics/0205/supr_6.png" alt="The gameplay of Super Slams" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-18</h2>
					<p>
					Stefan Jokisch sent in a driver for Orbit. Aaron Giles fixed yet another pile of bugs that were caused by the artwork updates. Brian A. Troha fixed the CPU frequency in Survival Arts. MASH added clone ROMs to Mach Rider, Mega Zone and Stratovox.
					</p>
					<div class="wippix">
						<img src="wippics/0205/orbi_1.png" alt="Orbit (c) 1977 Atari" width="256" height="240" />
						<img src="wippics/0205/orbi_2.png" alt="The gameplay of Orbit" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-17</h2>
					<p>
					Aaron Giles fixed several bugs that were caused by the artwork updates. Zsolt Vasvari removed the use of plot_pixel2 which cleans up a few things, and he fixed a few other things in the 8080bw driver. David Haywood fixed the scrolling in Battle Cross and added sound. MASH added clone ROMs to S.P.Y. and Super Basketball.
					</p>
					<div class="wippix">
						<img src="wippics/0205/batt_1.png" alt="Battle Cross (c) 1982 Omori" width="256" height="224" />
						<img src="wippics/0205/batt_2.png" alt="The intro of Battle Cross" width="256" height="224" />
						<img src="wippics/0205/batt_3.png" alt="The gameplay of Battle Cross" width="256" height="224" />
						<img src="wippics/0205/batt_4.png" alt="The gameplay of Battle Cross" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-16</h2>
					<p>
					David Haywood sent in a preliminary driver for Battle Cross, but it has no sound and graphics aren't correct. Stephane Humbert fixed the controls in it. Aaron Giles sent in a massive update to the artwork system, which is now much more flexible and easier to use. Quench updated the toaplan1 driver with a few fixes and additions. Nicola Salmoria sent in a driver for Dog-Fight, but color PROMs are missing.
					</p>
					<div class="wippix">
						<img src="wippics/0205/dogf_1.png" alt="Dog-Fight (c) 1984 Technos" width="256" height="240" />
						<img src="wippics/0205/dogf_2.png" alt="The intro of Dog-Fight" width="256" height="240" />
						<img src="wippics/0205/dogf_3.png" alt="The gameplay of Dog-Fight" width="256" height="240" />
						<img src="wippics/0205/dogf_4.png" alt="The gameplay of Dog-Fight" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-15</h2>
					<p>
					Stephane Humbert fixed inputs and DIP switches in the Metro, Pac Man and Volfied drivers. Zsolt Vasvari cleaned up the Berzerk driver, and fixed the optical joystick inputs in Exterminator. MASH added Birdie King to the Birdie King 2 driver. David Haywood fixed a few color problems in Toffy and others. Lawrence Gold sent a few patches that fix warnings with GCC 3.1. SUZ fixed screen refresh rates in a few drivers. MASH added a clone ROM to Baraduke.
					</p>
				</div>

				<div class="row">
					<h2>2002-05-14</h2>
					<p>
					David Haywood added Toffy, Super Toffy and Dangerous Dungeons to the Double Dragon driver, but Dangerous Dungeons isn't playable. Derrick Renaud submitted an addition of proper optical joysticks input to the Exterminator driver.
					</p>
					<div class="wippix">
						<img src="wippics/0205/toff_1.png" alt="Toffy (c) 1993 Unico" width="256" height="224" />
						<img src="wippics/0205/toff_2.png" alt="The gameplay of Toffy" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/stof_1.png" alt="Super Toffy (c) 1994 Unico" width="256" height="224" />
						<img src="wippics/0205/stof_2.png" alt="The gameplay of Super Toffy" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/ddun_1.png" alt="Dangerous Dungeons (c) 199? ???" width="256" height="224" />
						<img src="wippics/0205/ddun_2.png" alt="The gameplay of Dangerous Dungeons" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-13</h2>
					<p>
					Zsolt Vasvari fixed the colors in Space King 2, fixed the screen sizes in the 8080bw and z80bw drivers and he fixed unmapped memory reads on 8/16-bit CPUs. S. Suzuki re-submitted the Xevious driver with Battles added and fixed coin inputs. Nicola Salmoria sent in a driver for F-1 Grand Prix, and R. Belmont fixed the music in it. MASH submitted clones of Frogger on Scramble hardware and Ginga Ninkyouden. Keisuke added Battle Garegga Type 2 to the toaplan2 driver. Brian A. Troha submitted a DIP switch update for World Class Bowling.
					</p>
					<div class="wippix">
						<img src="wippics/0205/f1gp_1.png" alt="F-1 Grand Prix (c) 1991 Video System Co" width="240" height="320" />
						<img src="wippics/0205/f1gp_2.png" alt="The intro of F-1 Grand Prix" width="240" height="320" />
						<img src="wippics/0205/f1gp_3.png" alt="The gameplay of F-1 Grand Prix" width="240" height="320" />
						<img src="wippics/0205/f1gp_4.png" alt="The gameplay of F-1 Grand Prix" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-12</h2>
					<p>
					Jarek Burczynski fixed a few inaccuracies in the YM2151 sound chip emulator. Acho A. Tang fixed Ripcord so it is now playable. Barry Rodewald submitted an update to the CPS-2 driver supporting raster effects, but it unfortunately causes the background / sprite sync to be broken.
					</p>
					<div class="wippix">
						<img src="wippics/0205/ripc_1.png" alt="Ripcord (c) 1977 Exidy" width="248" height="256" />
						<img src="wippics/0205/ripc_2.png" alt="The gameplay of Ripcord" width="248" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-11</h2>
					<p>
					Aaron Giles fixed a few more problems that occurred after the display update changes. MASH added some clone ROMs to a few drivers. Brian A. Troha added the international version of ESP Ra. De. to the Cave driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-05-10</h2>
					<p>
					Ron Fries fixed a memory corrupting bug in the new controller input remapping support. Hiromitsu Shioya improved the K007232 sound chip emulation. Stephane Humbert fixed DIP switches in the Lethal Crash Race driver. Jarek Burczynski fixed the garbage graphics in Ryu Jin attract mode. Acho A. Tang worked out the protection in S.P.Y. and fixed a few other problems in it. Paul priest improved the dual screen support in Lode Runner the Dig Fight. Kale fixed a tilemap bug in the Japanese version of Shoot Out. Dan Gendreau submitted a change to the Neo Geo driver so that Pop 'n Bounce can be controlled with a paddle. William Kucharski re-submitted the various cocktail mode patches.
					</p>
					<div class="wippix">
						<img src="wippics/0205/spy_1.png" alt="S.P.Y. (c) 1989 Konami" width="288" height="224" />
						<img src="wippics/0205/spy_2.png" alt="The gameplay of S.P.Y." width="288" height="224" />
						<img src="wippics/0205/spy_3.png" alt="The gameplay of S.P.Y." width="288" height="224" />
						<img src="wippics/0205/spy_4.png" alt="The gameplay of S.P.Y." width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-09</h2>
					<p>
					Chack'n submitted some input fixes to the Toaplan drivers and added a few clone ROM sets. Nicola Salmoria added the color PROMs to Wily Tower. Shiriru fixed zooming and added alpha blending to the Taito F3 driver. Zsolt Vasvari changed the color decoding in Saturn to be more correct, but the colors might not be entirely correct. Paul Priest added dual screen support to Lode Runner the Dig Fight. Olivier Galibert fixed the reset opcode in the ASM 68k core.
					</p>
					<div class="wippix">
						<img src="wippics/0205/wily_5.png" alt="Wily Tower (c) 1984 IREM" width="256" height="224" />
						<img src="wippics/0205/wily_6.png" alt="The gameplay of Wily Tower" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-08</h2>
					<p>
					Stephane Humbert fixed the DIP switches and inputs in the Taito SJ driver. Nicola Salmoria sent in a driver for Lethal Crash Race.
					</p>
					<div class="wippix">
						<img src="wippics/0205/crsh_1.png" alt="Lethal Crash Race (c) 1993 Video System Co" width="224" height="320" />
						<img src="wippics/0205/crsh_2.png" alt="The intro of Lethal Crash Race" width="224" height="320" />
						<img src="wippics/0205/crsh_3.png" alt="The gameplay of Lethal Crash Race" width="224" height="320" />
						<img src="wippics/0205/crsh_4.png" alt="The gameplay of Lethal Crash Race" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-07</h2>
					<p>
					Bryan McPhail fixed a few bugs in the Sega System 16 driver and added the shadows back to Outrun and others. David Haywood passed on Norix's update for the Taito F3 system driver that fixes zoomed sprite blocks and some other small things. Aaron Giles fixed another small bug in the vector games that happened because of the display updating changes. Nicola Salmoria fixed the tilemaps in Sotsugyo Shousho. Stephane Humbert fixed DIP switch settings in the dec8 and Funky Jet drivers. Phil Stroffolino fixed the Outfoxies graphics which broke when fixing the Mach Breakers graphics. Jarek Burczynski decoded the program code in Halley's Comet but the driver doesn't do anything else yet.
					</p>
				</div>

				<div class="row">
					<h2>2002-05-06</h2>
					<p>
					Zsolt Vasvari added the off screen bonus display to 4 Player Bowling in the 8080bw driver. David Haywood added the newer Oriental Legend version to the PGM driver, and together with Paul Priest got Lode Runner playable. Aaron Giles fixed a small bug in the vector games that happened after yesterday's display update changes. Phil Stroffolino fixed the graphics bugs in Mach Breakers, but controls aren't yet emulated so it isn't yet playable. Nephrite submitted a fix for the DIP switch settings in Funky Jet.
					</p>
					<div class="wippix">
						<img src="wippics/0205/mach_1.png" alt="Mach Breakers (c) 1994 Namco" width="288" height="224" />
						<img src="wippics/0205/mach_2.png" alt="The attract mode of Mach Breakers" width="288" height="224" />
						<img src="wippics/0205/mach_3.png" alt="The attract mode of Mach Breakers" width="288" height="224" />
						<img src="wippics/0205/mach_4.png" alt="The attract mode of Mach Breakers" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/lode_5.png" alt="Lode Runner the Dig Fight (c) 2000 Psikyo" width="320" height="224" />
						<img src="wippics/0205/lode_6.png" alt="The intro of Lode Runner the Dig Fight" width="320" height="224" />
						<img src="wippics/0205/lode_7.png" alt="The gameplay of Lode Runner the Dig Fight" width="320" height="224" />
						<img src="wippics/0205/lode_8.png" alt="The gameplay of Lode Runner the Dig Fight" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-05</h2>
					<p>
					David Haywood fixed the crash bug in Shao-Lin's Road, and he fixed the car sprite stuttering in Wec Le Mans 24. Aaron Giles sent in a massive update for the display updating, which is now a lot cleaner and more consistent. Nicola Salmoria sent in a preliminary driver for Wily Tower / Atomic Boy but color PROMs are missing and sound isn't emulated. Nicola Salmoria also fixed the AY8910 emulator which caused missing sounds in some IREM M-62 system games.
					</p>
					<div class="wippix">
						<img src="wippics/0205/wily_1.png" alt="Wily Tower (c) 1984 IREM" width="256" height="224" />
						<img src="wippics/0205/wily_2.png" alt="The gameplay of Wily Tower" width="256" height="224" />
						<img src="wippics/0205/wily_3.png" alt="The gameplay of Wily Tower" width="256" height="224" />
						<img src="wippics/0205/wily_4.png" alt="The gameplay of Wily Tower" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-04</h2>
					<p>
					Aaron Giles fixed the level select screens in (Ultimate) Mortal Kombat 3. Zsolt Vasvari added color PROM support for Sheriff, but the PROMs still need to be dumped. David Haywood improved the Psikyo SH-2 games' driver and got Lode Runner and Hot Gimmick to run through the attract modes, though the gameplay doesn't yet work. Nicola Salmoria fixed the V60 CPU core bug which broke the SSV system games. Brian A. Troha added the Japanese version of Outfoxies and Mach Breakers to the Namco NB-1 driver, but Mach Breakers has lots of graphics bugs.
					</p>
					<div class="wippix">
						<img src="wippics/0205/lode_1.png" alt="Lode Runner the Dig Fight (c) 2000 Psikyo" width="320" height="224" />
						<img src="wippics/0205/lode_2.png" alt="The attract mode of Lode Runner the Dig Fight" width="320" height="224" />
						<img src="wippics/0205/lode_3.png" alt="The attract mode of Lode Runner the Dig Fight" width="320" height="224" />
						<img src="wippics/0205/lode_4.png" alt="The attract mode of Lode Runner the Dig Fight" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/hotg_1.png" alt="Hot Gimmick (c) 1997 Psikyo" width="320" height="224" />
						<img src="wippics/0205/hotg_2.png" alt="The attract mode of Hot Gimmick" width="320" height="224" />
						<img src="wippics/0205/hotg_3.png" alt="The attract mode of Hot Gimmick" width="320" height="224" />
						<img src="wippics/0205/hotg_4.png" alt="The attract mode of Hot Gimmick" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-03</h2>
					<p>
					Brian A. Troha added the newer ESP Ra. De. version to the Cave driver. Zsolt Vasvari cleaned up the Leprechaun / Pot of Gold drivers and added proper VIA 6522 chip emulation. Hau added raster effects to the Hyper Duel driver, but there are still some graphics glitches. Nicola Salmoria fixed the colors in Kick &amp; Goal, and David Haywood fixed a small tilemap vertical scroll bug. Nephrite submitted a DIP switch fix for Ozma Wars.
					</p>
					<div class="wippix">
						<img src="wippics/0205/kick_1.png" alt="Kick &amp; Goal (c) 1995 TCH" width="368" height="224" />
						<img src="wippics/0205/kick_2.png" alt="The intro of Kick &amp; Goal" width="368" height="224" />
						<img src="wippics/0205/kick_3.png" alt="The attract mode of Kick &amp; Goal" width="368" height="224" />
						<img src="wippics/0205/kick_4.png" alt="The gameplay of Kick &amp; Goal" width="368" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-05-02</h2>
					<p>
					David Haywood sent in a driver for Kick &amp; Goal, but it's missing sound and colors. Nicola Salmoria fixed sound in the SNK games that need Y8950 together with YM3526/YM3812, and fixed the graphics in Great 1000 Miles Rally 2. Nicola Salmoria also improved romcmp's bad address line detection and output message. Hiromitsu Shioya fixed a few sound bugs in Hot Chase, and some bugs in the YM2612 and K007232 interfaces. SUZ fixed a graphics bug in the Namco System 86 driver. Stephane Humbert re-submitted some DIP switch fixes for the Moo Mesa driver and he re-submitted some other small updates. Stefan Jokisch sent in a driver for Triple Hunt, although it lacks artwork, sound emulation and samples.
					</p>
					<div class="wippix">
						<img src="wippics/0205/gtmr_1.png" alt="Great 1000 Miles Rally 2 (c) 1995 Kaneko" width="320" height="240" />
						<img src="wippics/0205/gtmr_2.png" alt="The intro of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0205/gtmr_3.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0205/gtmr_4.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0205/trip_1.png" alt="Triple Hunt (c) 1977 Atari" width="256" height="240" />
						<img src="wippics/0205/trip_2.png" alt="The gameplay of Triple Hunt" width="256" height="240" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2002-05-01</h2>
					<p>
					Uki added Dragon Punch to the Dynax driver.
					</p>
					<div class="wippix">
						<img src="wippics/0205/drgp_1.png" alt="Dragon Punch (c) 1988 Dynax" width="256" height="240" />
						<img src="wippics/0205/drgp_2.png" alt="The intro of Dragon Punch" width="256" height="240" />
						<img src="wippics/0205/drgp_3.png" alt="The gameplay of Dragon Punch" width="256" height="240" />
						<img src="wippics/0205/drgp_4.png" alt="The gameplay of Dragon Punch" width="256" height="240" />
					</div>
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
