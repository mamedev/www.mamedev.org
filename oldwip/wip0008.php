<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>August 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-08-31</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller simplified the makefile handling. Nicola Salmoria sent in a driver for World Beach Volley, again without sound due to an undumped PIC chip. Nicola also sped up the graphics decoding a bit and did some cosmetic changes to Xexex, but most of the graphics is still missing. Brad Oliver fixed Winter Bobble to work on Macs.
					</p>
					<div class="wippix">
						<img src="wippics/0008/wbea_1.png" alt="World Beach Volley (c) 1995 Playmark" width="320" height="240" />
						<img src="wippics/0008/wbea_2.png" alt="The intro of World Beach Volley" width="320" height="240" />
						<img src="wippics/0008/wbea_3.png" alt="The intro of World Beach Volley" width="320" height="240" />
						<img src="wippics/0008/wbea_4.png" alt="The gameplay of World Beach Volley" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-30</h2>
					<p>
					Olivier Galibert has resumed work on the Xexex driver, adding preliminary sprites and background emulation. Fortunately Olivier has vowed to perfect them at a later date, so you will see more and better pictures then ;-)
					</p>
					<div class="wippix">
						<img src="wippics/0008/xexe_1.png" alt="Xexex (c) 1991 Konami" width="384" height="256" />
						<img src="wippics/0008/xexe_2.png" alt="The intro of Xexex" width="384" height="256" />
						<img src="wippics/0008/xexe_3.png" alt="The intro of Xexex" width="384" height="256" />
						<img src="wippics/0008/xexe_4.png" alt="The gameplay of Xexex" width="384" height="256" />
						<img src="wippics/0008/xexe_5.png" alt="The gameplay of Xexex" width="384" height="256" />
						<img src="wippics/0008/xexe_6.png" alt="The gameplay of Xexex" width="384" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-29</h2>
					<p>
					Nicola Salmoria added correct Z80 ADPCM emulation to the Legendary Wings / Trojan driver. Yochizo added Battle Garegga to the Toaplan2 driver but it has problems with the current 68k emulation core. David Haywood added Winter Bobble to the Snow Bros driver.
					</p>
					<div class="wippix">
						<img src="wippics/0008/batt_1.png" alt="Battle Garegga (c) 1996 Raizing" width="240" height="320" />
						<img src="wippics/0008/batt_2.png" alt="The intro of Battle Garegga" width="240" height="320" />
						<img src="wippics/0008/batt_3.png" alt="The gameplay of Battle Garegga" width="240" height="320" />
						<img src="wippics/0008/batt_4.png" alt="The gameplay of Battle Garegga" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/wint_1.png" alt="Winter Bobble (c) 1990 Sakowa Project" width="256" height="224" />
						<img src="wippics/0008/wint_2.png" alt="The gameplay of Winter Bobble" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-28</h2>
					<p>
					Zsolt Vasvari added cocktail mode and fixed sprite lag in Legendary Wings / Trojan and Ghosts and Goblins. Ernesto Corvi added proper timing to the PlayChoice 10 driver, fixing tearing in the scrolling games and fixing Ninja Gaiden 3. J&uuml;rgen Buchm&uuml;ller modified the Pokey RNG functions to finally work as they would in real hardware. Nicola Salmoria sent in a driver for Big Twin, without sound support though.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-27</h2>
					<p>
					Ernesto Corvi sent in an update to the PlayChoice 10 driver, adding support for over twenty more games. Nicola Salmoria perfected the CPS-1 starfield graphics emulation (used in Forgotten World and Strider).
					</p>
				</div>

				<div class="row">
					<h2>2000-08-26</h2>
					<p>
					Zsolt Vasvari converted Vastar to the tilemap system and fixed a few bugs.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-25</h2>
					<p>
					Zsolt Vasvari converted Fire Trap, 1943 and Gun Smoke to the tilemap system. David Graves improved the Taito F2 zooming graphics in Football Champ, Metal Black and Dead Connection.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-24</h2>
					<p>
					Nicola Salmoria sent in drivers for Hot Pinball, Miss World '96, Fantasia and New Fantasia. Zsolt Vasvari converted Exed Exes and Mysterious Stones to the tilemap system.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-23</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller added preliminary analog sound emulation to Pulsar. Nicola Salmoria fixed graphics priority problems in Black Tiger. Zsolt Vasvari converted 1942, Commando and Vulgus to the tilemap system. Peter Trauner added a CDP1802 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-22</h2>
					<p>
					Zsolt Vasvari converted the Sega System1 driver to the tilemap system and fixed a few bugs. Nicola Salmoria fixed a 68k bug affecting Bombjack Twin.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-21</h2>
					<p>
					Yochizo added Mahou Daisakusen and Shippu Mahou Daisakusen to the Toaplan2 driver. Nicola Salmoria added preliminary starfield emulation to the CPS-1 driver and fixed a few things in the Toaplan2 driver. Hans de Goede fixed a memory trashing bug. Andrea Mazzoleni fixed -listinfo output for PlayChoice 10 BIOS.
					</p>
					<div class="wippix">
						<img src="wippics/0008/maho_1.png" alt="Mahou Daisakusen (c) 1993 Raizing" width="240" height="320" />
						<img src="wippics/0008/maho_2.png" alt="The intro of Mahou Daisakusen" width="240" height="320" />
						<img src="wippics/0008/maho_3.png" alt="The intro of Mahou Daisakusen" width="240" height="320" />
						<img src="wippics/0008/maho_4.png" alt="The gameplay of Mahou Daisakusen" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/ship_1.png" alt="Shippu Mahou Daisakusen (c) 1994 Raizing" width="240" height="320" />
						<img src="wippics/0008/ship_2.png" alt="The intro of Shippu Mahou Daisakusen" width="240" height="320" />
						<img src="wippics/0008/ship_3.png" alt="The intro of Shippu Mahou Daisakusen" width="240" height="320" />
						<img src="wippics/0008/ship_4.png" alt="The gameplay of Shippu Mahou Daisakusen" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-20</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed yet more graphics mode debugger bugs.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-19</h2>
					<p>
					Nicola Salmoria sent in a Dooyong driver with support for Pollux, Blue Hawk, Primella, R-Shark and The Last Day.
					</p>
					<div class="wippix">
						<img src="wippics/0008/blue_1.png" alt="Blue Hawk (c) 1993 Dooyong" width="240" height="384" />
						<img src="wippics/0008/blue_2.png" alt="The intro of Blue Hawk" width="240" height="384" />
						<img src="wippics/0008/blue_3.png" alt="The gameplay of Blue Hawk" width="240" height="384" />
						<img src="wippics/0008/blue_4.png" alt="The gameplay of Blue Hawk" width="240" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/poll_1.png" alt="Pollux (c) 1991 Dooyong" width="240" height="384" />
						<img src="wippics/0008/poll_2.png" alt="The intro of Pollux" width="240" height="384" />
						<img src="wippics/0008/poll_3.png" alt="The gameplay of Pollux" width="240" height="384" />
						<img src="wippics/0008/poll_4.png" alt="The gameplay of Pollux" width="240" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/rsha_1.png" alt="R-Shark (c) 1995 Dooyong" width="240" height="384" />
						<img src="wippics/0008/rsha_2.png" alt="The intro of R-Shark" width="240" height="384" />
						<img src="wippics/0008/rsha_3.png" alt="The intro of R-Shark" width="240" height="384" />
						<img src="wippics/0008/rsha_4.png" alt="The gameplay of R-Shark" width="240" height="384" />
						<img src="wippics/0008/rsha_5.png" alt="The gameplay of R-Shark" width="240" height="384" />
						<img src="wippics/0008/rsha_6.png" alt="The gameplay of R-Shark" width="240" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/prim_1.png" alt="Primella (c) 1994 Dooyong" width="384" height="256" />
						<img src="wippics/0008/prim_2.png" alt="The intro of Primella" width="384" height="256" />
						<img src="wippics/0008/prim_3.png" alt="The intro of Primella" width="384" height="256" />
						<img src="wippics/0008/prim_4.png" alt="The gameplay of Primella" width="384" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-18</h2>
					<p>
					Tim Lindner submitted a HD6309 CPU core to replace the current hack of 6809 core. Tatsuyuki Satoh and Nicola Salmoria fixed some bugs related to memory handling. Nicola also sent in a preliminary driver for Gals Pinball.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-17</h2>
					<p>
					Jarek Burczynski fixed a crash in Mag Max. Aaron Giles sent in updated ADSP2100 and TMS34010 cores, fixing some bugs which affected the Atari polygon games. Nicola Salmoria fixed the Logic Pro music speed. Yochizo added Tatsujin 2 to the Toaplan2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0008/tats_1.png" alt="Tatsujin 2 (c) 1992 Toaplan" width="240" height="320" />
						<img src="wippics/0008/tats_2.png" alt="The intro of Tatsujin 2" width="240" height="320" />
						<img src="wippics/0008/tats_3.png" alt="The gameplay of Tatsujin 2" width="240" height="320" />
						<img src="wippics/0008/tats_4.png" alt="The gameplay of Tatsujin 2" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-16</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed a bug in 6809 cycle counting. Zsolt Vasvari fixed the sprite lag in all Sega System1 games. David Graves improved the linescroll in the Taito F2 driver and did some other graphics bugfixes.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-15</h2>
					<p>
					Zsolt Vasvari added cocktail mode support to all games in Sega System1 driver except WBML. Nicola Salmoria fixed a small priority bug in Teddy Boy Blues.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-14</h2>
					<p>
					Nicola Salmoria added correct linescroll emulation to some of the Taito F2 games.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-13</h2>
					<p>
					Karl Stenerud fixed some bugs in the C 68k core. Nicola Salmoria sent in a driver for The Last Day. David Graves sent in a Taito F2 update improving the Football Champ zoom layer graphics.
					</p>
					<div class="wippix">
						<img src="wippics/0008/last_1.png" alt="The Last Day (c) 1990 Dooyong" width="240" height="384" />
						<img src="wippics/0008/last_2.png" alt="The intro of The Last Day" width="240" height="384" />
						<img src="wippics/0008/last_3.png" alt="The gameplay of The Last Day" width="240" height="384" />
						<img src="wippics/0008/last_4.png" alt="The gameplay of The Last Day" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-12</h2>
					<p>
					Phil Stroffolino sent in the Namco NA-1 system driver, semi-working games are Cosmo Gang the Puzzle, Emeraldia and Tinkle Pit.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-11</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller started work on enhancing the debugger functionality and removing the need to use text mode for it. Jarek Burczynski sent in the Mag Max driver. Aaron Giles fixed the missing status bar in S.T.U.N. Runner.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-10</h2>
					<p>
					Nicola Salmoria fixed the protection bugs in Slam Masters. Zsolt Vasvari converted several drivers for correct split screen functionality. Aaron Giles did some brilliant work and finally got the polygon graphics working in the preliminary Hard Drivin' / S.T.U.N. Runner driver, which requires about 2 GHz to run properly (<a href="http://www.xmission.com/~jasonr/stunrunner/">more info and pictures</a>).
					</p>
					<div class="wippix">
						<img src="wippics/0008/hard_1.png" alt="Hard Drivin' (c) 1988 Atari" width="512" height="384" />
						<img src="wippics/0008/hard_2.png" alt="The gameplay of Hard Drivin'" width="512" height="384" />
						<img src="wippics/0008/hard_3.png" alt="The gameplay of Hard Drivin'" width="512" height="384" />
						<img src="wippics/0008/hard_4.png" alt="The gameplay of Hard Drivin'" width="512" height="384" />
						<img src="wippics/0008/hard_5.png" alt="The gameplay of Hard Drivin'" width="512" height="384" />
						<img src="wippics/0008/hard_6.png" alt="The gameplay of Hard Drivin'" width="512" height="384" />
						<img src="wippics/0008/hard_7.png" alt="The gameplay of Hard Drivin'" width="512" height="384" />
						<img src="wippics/0008/hard_8.png" alt="The gameplay of Hard Drivin'" width="512" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/stun_1.png" alt="S.T.U.N. Runner (c) 1989 Atari" width="512" height="240" />
						<img src="wippics/0008/stun_2.png" alt="The intro of S.T.U.N. Runner" width="512" height="240" />
						<img src="wippics/0008/stun_3.png" alt="The intro of S.T.U.N. Runner" width="512" height="240" />
						<img src="wippics/0008/stun_4.png" alt="The intro of S.T.U.N. Runner" width="512" height="240" />
						<img src="wippics/0008/stun_5.png" alt="The gameplay of S.T.U.N. Runner" width="512" height="240" />
						<img src="wippics/0008/stun_6.png" alt="The gameplay of S.T.U.N. Runner" width="512" height="240" />
						<img src="wippics/0008/stun_7.png" alt="The gameplay of S.T.U.N. Runner" width="512" height="240" />
						<img src="wippics/0008/stun_8.png" alt="The gameplay of S.T.U.N. Runner" width="512" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-09</h2>
					<p>
					Manuel Abadia fixed the bad graphics between levels in the Ultraman driver. Jarek Burczynski added preliminary support for the background graphics in Mag Max.
					</p>
					<div class="wippix">
						<img src="wippics/0008/magm_1.png" alt="Mag Max (c) 1985 Nichibutsu" width="256" height="224" />
						<img src="wippics/0008/magm_2.png" alt="The gameplay of Mag Max" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-08</h2>
					<p>
					Jarek Burczynski wrote a TMS5110 emulator and added speech support to Bagman. Nicola Salmoria implemented zooming tilemap functionality for Dead Connection, Football Champ and Metal Black. Greg Hackmann submitted a fix for the bug that prevented proper operation of the HISTORY.DAT and MAMEINFO.DAT files.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-07</h2>
					<p>
					KBD fixed, hopefully finally, the Tempest 150k reset bug. David Graves fixed a few graphical glitches in newer Taito F2 games and Metal Black now works. Ernesto Corvi fixed the VBLANK timings in the Playchoice 10 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0008/meta_1.png" alt="Metal Black (c) 1991 Taito" width="320" height="224" />
						<img src="wippics/0008/meta_2.png" alt="The intro of Metal Black" width="320" height="224" />
						<img src="wippics/0008/meta_3.png" alt="The gameplay of Metal Black" width="320" height="224" />
						<img src="wippics/0008/meta_4.png" alt="The gameplay of Metal Black" width="320" height="224" />
						<img src="wippics/0008/meta_5.png" alt="The gameplay of Metal Black" width="320" height="224" />
						<img src="wippics/0008/meta_6.png" alt="The gameplay of Metal Black" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-06</h2>
					<p>
					Nicola Salmoria implemented correct tile/sprite priority system in Bionic Commando, Exed Exes, Ghosts 'n Goblins and Last Duel. Karl Stenerud fixed a few problems in the C 68k cores.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-05</h2>
					<p>
					Ernesto Corvi fixed the screen aspect ratio and some other bugs in the Playchoice 10 driver. Nicola Salmoria fixed some bugs in the artwork functions.
					</p>
				</div>

				<div class="row">
					<h2>2000-08-04</h2>
					<p>
					Ernesto Corvi sent in a fully working Playchoice 10 driver with support for Excite Bike, Super Mario Bros, Duck Hunt, Pro Wrestling, Rush N' Attack, Contra, The Goonies, Ninja Gaiden and Super Mario Bros 3. Andrea Mazzoleni added support for a second mouse to the DOS version.
					</p>
					<div class="wippix">
						<img src="wippics/0008/pcsm_1.png" alt="Playchoice 10: Super Mario Bros (c) 1985 Nintendo" width="256" height="480" />
						<img src="wippics/0008/pcs3_1.png" alt="Playchoice 10: Super Mario Bros 3 (c) 1988 Nintendo" width="256" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-03</h2>
					<p>
					Jarek Burczynski fixed sound in Raimais and Champion Wrestler in the Taito L driver. Nicola Salmoria fixed several graphics in the Taito L driver and added Kuri Kinton.
					</p>
					<div class="wippix">
						<img src="wippics/0008/kuri_1.png" alt="Kuri Kinton (c) 1988 Taito" width="320" height="224" />
						<img src="wippics/0008/kuri_2.png" alt="The intro of Kuri Kinton" width="320" height="224" />
						<img src="wippics/0008/kuri_3.png" alt="The intro of Kuri Kinton" width="320" height="224" />
						<img src="wippics/0008/kuri_4.png" alt="The gameplay of Kuri Kinton" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-08-02</h2>
					<p>
					Jim Hernandez fixed the sound balance in Terminator 2 and Mortal Kombat. Andrea Mazzoleni fixed a compilation bug in the C 68k core.
					</p>
				</div>

				<div class="rowlast">
					<h2>2000-08-01</h2>
					<p>
					David Graves fixed some flip screen mode bugs in the Taito F2 driver. Michael Soderstrom fixed some uninitialized variable bugs. Jim Hernandez fixed the volume balance in the NBA Jam games. Nicola Salmoria sent in a driver for Deniam games, supporting Logic Pro, Logic Pro 2 and Karian Cross.
					</p>
					<div class="wippix">
						<img src="wippics/0008/logi_1.png" alt="Logic Pro (c) 1996 Deniam" width="320" height="224" />
						<img src="wippics/0008/logi_2.png" alt="The intro of Logic Pro" width="320" height="224" />
						<img src="wippics/0008/logi_3.png" alt="The intro of Logic Pro" width="320" height="224" />
						<img src="wippics/0008/logi_4.png" alt="The gameplay of Logic Pro" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/log2_1.png" alt="Logic Pro 2 (c) 1997 Deniam" width="320" height="224" />
						<img src="wippics/0008/log2_2.png" alt="The intro of Logic Pro 2" width="320" height="224" />
						<img src="wippics/0008/log2_3.png" alt="The intro of Logic Pro 2" width="320" height="224" />
						<img src="wippics/0008/log2_4.png" alt="The gameplay of Logic Pro 2" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0008/kari_1.png" alt="Karian Cross (c) 1996 Deniam" width="320" height="224" />
						<img src="wippics/0008/kari_2.png" alt="The intro of Karian Cross" width="320" height="224" />
						<img src="wippics/0008/kari_3.png" alt="The intro of Karian Cross" width="320" height="224" />
						<img src="wippics/0008/kari_4.png" alt="The gameplay of Karian Cross" width="320" height="224" />
					</div>
				</div>

            </div>
            <!-- content end --> 
		
		<!--#include virtual="/_include/html/footer.txt" -->
    
    </div>    
    </div>
    <!-- main end -->

</body>

</html>
