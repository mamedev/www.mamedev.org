<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>June 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-06-30</h2>
					<p>
					Paul Leaman sent a new CPS-1 driver with stub functions for the Qsound system. It doesn't play anything yet, but simple sample playing shouldn't be far off. Zsolt Vasvari added Star Castle version 3 and fixed some dip switches in the Cinematronics driver. Mathis Rosenhauer added samples for Rip Off and Solar Quest. Nicola added a Zaxxon bootleg called Jackson.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-29</h2>
					<p>
					Nicola fixed 720's controls. Tatsuyuki Satoh changed the treatment of memory handlers. Ernesto Corvi sent a preliminary Arcadia system driver, which is basically just an Amiga 500 modified for arcade usage. Zsolt Vasvari added Ponpoko's original Japanese version and Nicola added Klax's Japanese version. Manuel Abadia fixed Super Pacman's reset / service mode bugs.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-28</h2>
					<p>
					Tatsuyuki Satoh fixed the VLM5030 and RC filter interface in Double Dribble. Manuel Abadia added coin counters and some little fixes to the same driver, and he also fixed the custom IO chip reset bugs in Mappy driver. Nicola Salmoria fixed the filter interface in Time Pilot 84. Mathis Rosenhauer fixed double coin input in Cinematronics vector games.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-27</h2>
					<p>
					Nicola modified all the 68705 roms to be 2048 bytes instead of 1920, added Video Hustler and fixed player 2 buttons in Ikari Warriors and Victory Road. Jim Hernandez did some sound fixes on Star Castle. Mike Coates modified Gorf to be rotated correctly (vertical).
					</p>
				</div>

				<div class="row">
					<h2>1999-06-26</h2>
					<p>
					Nicola added a Locomotion bootleg romset and correct color PROMs for Sega's Commando, and also fixed the input ports in Nemesis and the others. Quench fixed some background graphics in Rally Bike. Mathis Rosenhauer added samples to Star Castle and Space Wars.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-25</h2>
					<p>
					Tatsuyuki Satoh added more graphics support to the Namco System 1 driver. Zsolt Vasvari fixed Kung Fu Master sprite priorities at the end of a level. Quench sent Rally Bike with high score scroll fix and flipped sprites added. Mike Coates modified Popeye to be properly rotated.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-24</h2>
					<p>
					Brad Oliver fixed Flying Shark bootleg MCU rom loading on the Mac side. Steve Ellenoff fixed Gladiator ADPCM sample pitch. Brian Lewis fixed the blitting functions' bug with 280x240 screen size. Nicola added made-up 68705 roms to Arkanoid's US and Japanese versions, which fixes the later levels.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-23</h2>
					<p>
					Mathis Rosenhauer fixed the Empire Strikes Back mathbox chip, and the 3D vectors aren't anymore corrupt sometimes.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-22</h2>
					<p>
					Marco Cassili fixed the dipswitches in Empire Strikes Back. Ernesto Corvi fixed the slapstic problems in Rampart. Phil Stroffolino sent a new Sprite Manager with some bugfixes. Jim Hernandez partially fixed the sound in Vapor Trail. Nicola Salmoria fixed the slapstic problems in Xybots, and fixed Empire Strikes Back from hanging at the highscore screen.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-21</h2>
					<p>
					Marco Cassili fixed the dipswitches in Nemesis and the others. Zsolt Vasvari added sound to Meteoroids. Mathis Rosenhauer did some fixes to Cinematronics games, for example Demon doesn't crash anymore. Nicola Salmoria finally fixed Empire Strikes Back's slapstic issues, and the game itself is playable! (It hangs on the high score entry screen though)
					</p>
					<div class="wippix">
						<img src="wippics/9906/empi_1.png" alt="The gameplay of Empire Strikes Back" width="640" height="480" />
						<img src="wippics/9906/empi_2.png" alt="The gameplay of Empire Strikes Back" width="640" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-20</h2>
					<p>
					Mike Coates fixed ASM 68k core timings in debug mode. Bryan McPhail added sound to West Story / Blood Brothers. Elestir fixed Nemesis from crashing at startup. Darren Olafson fixed Rally Bike graphics at the gas station, and also its colors. Yasuhiro Ogawa added some new romsets for Ghosts'n'Goblins. Roberto Fresca added highscore saving for Ufo Robo Dangar. Nicola Salmoria and Ernesto Corvi fixed the slapstic issues in Gauntlet and Gauntlet 2. Tatsuyuki Satoh fixed music tempo in Star Force after a reset.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-19</h2>
					<p>
					Phil Stroffolino sent in a Legend of Kage driver with a fix to the text layer color, and a new core function called Sprite Manager, which should help the speed and accuracy just like the Tilemap Manager does for background graphics etc. He also sent a preliminary Blood Brothers driver by him and Carlos (with help from Richard Bush).
					</p>
					<div class="wippix">
						<img src="wippics/9906/bloo_1.png" alt="Blood Bros (c) 1990 TAD" width="256" height="224" />
						<img src="wippics/9906/bloo_2.png" alt="The intro of Blood Bros" width="256" height="224" />
						<img src="wippics/9906/bloo_3.png" alt="The gameplay of Blood Bros" width="256" height="224" />
						<img src="wippics/9906/bloo_4.png" alt="The gameplay of Blood Bros" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-18</h2>
					<p>
					Tatsuyuki Satoh fixed the screen size in Appoooh. Ernesto Corvi sent in a preliminary driver for Gyrodine / Son of Phoenix / SRD Mission, but sprites are missing. Quench sent in a driver for Flying Shark and Wardner. Marco fixed the dips in Demon's World and Rally Bike. Roberto Fresca added high score saving for Wardner.
					</p>
					<div class="wippix">
						<img src="wippics/9906/fsha_1.png" alt="Flying Shark (c) 1987 Taito" width="240" height="320" />
						<img src="wippics/9906/fsha_2.png" alt="The intro of Flying Shark" width="240" height="320" />
						<img src="wippics/9906/fsha_3.png" alt="The gameplay of Flying Shark" width="240" height="320" />
						<img src="wippics/9906/fsha_4.png" alt="The gameplay of Flying Shark" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/ward_1.png" alt="Wardner (c) 1987 Taito" width="320" height="240" />
						<img src="wippics/9906/ward_2.png" alt="The intro of Wardner" width="320" height="240" />
						<img src="wippics/9906/ward_3.png" alt="The intro of Wardner" width="320" height="240" />
						<img src="wippics/9906/ward_4.png" alt="The gameplay of Wardner" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-17</h2>
					<p>
					Darren Olafson sent in a driver with Demon's World and Rally Bike, but they still have some glitches. Bryan McPhail added Kuhga to the Vapor Trail driver and the Japanese version of Street Smart. Brad Oliver fixed YM2203 core to be multi-session friendly.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-16</h2>
					<p>
					Bryan McPhail submitted Vapor Trail driver, and Marco Cassili went on to fix the dip switches of it, Act Fancer, Street Smart, Search And Rescue, some SNK drivers and Cabal. Aaron Giles did a small T-11 cpu core fix, but it doesn't help any of the games. Brian Lewis fixed the PAL video modes.
					</p>
					<div class="wippix">
						<img src="wippics/9906/vapo_1.png" alt="Vapor Trail (c) 1989 Data East" width="240" height="256" />
						<img src="wippics/9906/vapo_2.png" alt="The intro of Vapor Trail" width="240" height="256" />
						<img src="wippics/9906/vapo_3.png" alt="The gameplay of Vapor Trail" width="240" height="256" />
						<img src="wippics/9906/vapo_4.png" alt="The gameplay of Vapor Trail" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-15</h2>
					<p>
					Bryan McPhail submitted Street Smart &amp; Search And Rescue drivers. Marco Cassili fixed the dip switches in Caveman Ninja. Paul Leaman fixed sprite glitches in SF2CE.
					</p>
					<div class="wippix">
						<img src="wippics/9906/stre_1.png" alt="Street Smart (c) 1989 SNK" width="256" height="224" />
						<img src="wippics/9906/stre_2.png" alt="The intro of Street Smart" width="256" height="224" />
						<img src="wippics/9906/stre_3.png" alt="The gameplay of Street Smart" width="256" height="224" />
						<img src="wippics/9906/stre_4.png" alt="The gameplay of Street Smart" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/sear_1.png" alt="Search And Rescue (c) 1989 SNK" width="224" height="256" />
						<img src="wippics/9906/sear_2.png" alt="The intro of Search And Rescue" width="224" height="256" />
						<img src="wippics/9906/sear_3.png" alt="The intro of Search And Rescue" width="224" height="256" />
						<img src="wippics/9906/sear_4.png" alt="The gameplay of Search And Rescue" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-14</h2>
					<p>
					Yasuhiro Ogawa fixed a sound problem in Appoooh. Bryan McPhail fixed Hu6280 communications in Caveman Ninja sound system.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-13</h2>
					<p>
					Bryan McPhail fixed Act Fancer with a new romset.
					</p>
					<div class="wippix">
						<img src="wippics/9906/actf_1.png" alt="Act Fancer (c) 1989 Data East" width="256" height="240" />
						<img src="wippics/9906/actf_2.png" alt="The intro of Act Fancer" width="256" height="240" />
						<img src="wippics/9906/actf_3.png" alt="The gameplay of Act Fancer" width="256" height="240" />
						<img src="wippics/9906/actf_4.png" alt="The gameplay of Act Fancer" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-12</h2>
					<p>
					Nicola added dip switches to the Atari System 2 driver. Jarek Burczynski added bankswitching to Led Storm &amp; Mad Gear.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-11</h2>
					<p>
					Paul Leaman and Nicola added one of the DACs to the Leland driver. There are still some sprite problems to be fixed until Alley Master is ready for a release.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-10</h2>
					<p>
					Brian Lewis added the low scanrate video modes for arcade monitors. Elestir added the last missing sound channel to Nemesis and the rest. Eric Hustvedt added the original romset of Pleiades. Phil Stroffolino fixed colors and sprite priorities of Legend of Kage. Nicola did a major update to the keyboard analog input port handling.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-09</h2>
					<p>
					Nicola Salmoria sent in a huge update to the video code, removing the doubling/tripling etc. crap, and calculating the multiplying factor in a more sensible way. Zsolt Vasvari added Levers to the Jump Bug driver, another Eyes set and a Galaga hack called Nebulous Bee. Phil Stroffolino fixed the rest of the sound in Marvin's Maze except the wave generator, and converted the graphics for tilemap system. Al Kossow added another version of Qix.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-08</h2>
					<p>
					Phil Stroffolino got Marvin's Maze fully working with 90 % complete sound. Nicola Salmoria fixed the sprites in Mahjong Gakuen. Zsolt Vasvari added the original Route 16 romset.
					</p>
				</div>

				<div class="row">
					<h2>1999-06-07</h2>
					<p>
					Nicola added Mahjong Gakuen and Quiz Tonosama no Yabou 2 Zenkoku-ban. Mike Coates fixed Gorf title screen.
					</p>
					<div class="wippix">
						<img src="wippics/9906/mgak_1.png" alt="Mahjong Gakuen (c) 1988 Yuga" width="384" height="240" />
						<img src="wippics/9906/mgak_2.png" alt="The gameplay of Mahjong Gakuen" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/qtono2_1.png" alt="Quiz Tonosama no Yabou 2 Zenkoku-ban (c) 1995 Capcom" width="384" height="224" />
						<img src="wippics/9906/qtono2_2.png" alt="The gameplay of Quiz Tonosama no Yabou 2 Zenkoku-ban" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-06</h2>
					<p>
					Mirko Buffoni added another version of Champion Skill, and Zsolt Vasvari sent in a driver for Meteoroids. Bryan McPhail has gotten a nice new shiny computer science degree, and for a nice celebration he almost finished some drivers. Here are some pics of Gang Wars, Gold Medalist, Sky Adventure, Sky Soldiers and Time Soldiers, but don't expect to see these before 0.36b1.
					</p>
					<div class="wippix">
						<img src="wippics/9906/mete_1.png" alt="Meteoroids (c) 1981 Venture Line" width="224" height="256" />
						<img src="wippics/9906/mete_2.png" alt="The gameplay of Aster.. Meteoroids" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/gang_1.png" alt="Gang Wars (c) 1989 Alpha Denshi Co" width="256" height="224" />
						<img src="wippics/9906/gang_2.png" alt="The intro of Gang Wars" width="256" height="224" />
						<img src="wippics/9906/gang_3.png" alt="The gameplay of Gang Wars" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/gold_1.png" alt="Gold Medalist (c) 1988 SNK" width="256" height="224" />
						<img src="wippics/9906/gold_2.png" alt="The gameplay of Gold Medalist" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/skya_1.png" alt="Sky Adventure (c) 1989 SNK" width="224" height="256" />
						<img src="wippics/9906/skya_2.png" alt="The intro of Sky Adventure" width="224" height="256" />
						<img src="wippics/9906/skya_3.png" alt="The gameplay of Sky Adventure" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/skys_1.png" alt="Sky Soldiers (c) 1988 SNK" width="224" height="256" />
						<img src="wippics/9906/skys_2.png" alt="The gameplay of Sky Soldiers" width="224" height="256" />
						<img src="wippics/9906/skys_3.png" alt="The gameplay of Sky Soldiers" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/time_1.png" alt="Time Soldiers (c) 1987 SNK/Romstar" width="224" height="256" />
						<img src="wippics/9906/time_2.png" alt="The gameplay of Time Soldiers" width="224" height="256" />
						<img src="wippics/9906/time_3.png" alt="The gameplay of Time Soldiers" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-05</h2>
					<p>
					Nicola fixed the colors of Blue Print, and a Japanese version of Cadillacs &amp; Dinousaurs was added. Nicola also added Capcom World and Poker Ladies to the Pang driver.
					</p>
					<div class="wippix">
						<img src="wippics/9906/cwor_1.png" alt="Capcom World (c) 1989 Capcom" width="384" height="240" />
						<img src="wippics/9906/cwor_2.png" alt="The gameplay of Capcom World" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/pkla_1.png" alt="Poker Ladies (c) 1989 Mitchell" width="384" height="240" />
						<img src="wippics/9906/pkla_2.png" alt="The gameplay of Poker Ladies" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-04</h2>
					<p>
					Brian Lewis added a 384x224 tweaked VGA mode. Nicola fixed the colors and graphics priorities of Appoooh. Zsolt Vasvari sent in a driver for Hot Shocker.
					</p>
					<div class="wippix">
						<img src="wippics/9906/hots_1.png" alt="Hot Shocker (c) 1982 Dudley" width="224" height="256" />
						<img src="wippics/9906/hots_2.png" alt="The gameplay of Hot Shocker" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-03</h2>
					<p>
					Street Fight driver was sent to the list, but colors aren't any better yet. Marco fixed the dip switches of it though. Nicola added Super Marukin-Ban and Mahjong Gakuen 2 Gakuen-chou no Fukushuu.
					</p>
					<div class="wippix">
						<img src="wippics/9906/maru_1.png" alt="Super Marukin-Ban (c) 1990 Yuga" width="384" height="240" />
						<img src="wippics/9906/maru_2.png" alt="The gameplay of Super Marukin-Ban" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/mga2_1.png" alt="Mahjong Gakuen 2 Gakuen-chou no Fukushuu (c) 1989 Face" width="384" height="240" />
						<img src="wippics/9906/mga2_2.png" alt="The gameplay of Mahjong Gakuen 2 Gakuen-chou no Fukushuu" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-06-02</h2>
					<p>
					Mirko Buffoni sent in a Champion Skill update with support for ability, and hopper simulated. Nicola sent in a preliminary Shanghai driver, but it stumbles on a bug of the i86 core. Tatsuyuki Satoh totally rebuilt the MSM5205 emulator and it's a lot better now. Nicola fixed Street Fighter ADPCM sound and added the second channel for the YM3012 chip. Zsolt Vasvari added Azurian Attack to the Galaxian driver. Mike Coates added the moving river to No Man's Land, but the colors aren't correct. Paul Leaman sent another Leland driver update, containing better slave CPU communications.
					</p>
					<div class="wippix">
						<img src="wippics/9906/shan_1.png" alt="Shanghai (c) 1988 Activision" width="384" height="280" />
						<img src="wippics/9906/shan_2.png" alt="The gameplay of Shanghai" width="384" height="280" />
					</div>
					<div class="wippix">
						<img src="wippics/9906/azur_1.png" alt="Azurian Attack (c) 1982 Rait" width="224" height="256" />
						<img src="wippics/9906/azur_2.png" alt="The gameplay of Azurian Attack" width="224" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>1999-06-01</h2>
					<p>
					Nicola Salmoria added Freeze. Tatsuyuki Satoh fixed the ADPCM hack in Gladiator driver, Jarek Parchanski made the background colors accurate in Great Swordsman, added 2nd player controls and fixed sound speed. Nicola also worked on the Great Swordsman ADPCM sound. Bryan McPhail modified Caveman Ninja to tilemaps, and it's sometimes a bit faster now.
					</p>
					<div class="wippix">
						<img src="wippics/9906/free_1.png" alt="Freeze (c) ???? Cinematronics" width="224" height="256" />
						<img src="wippics/9906/free_2.png" alt="The intro of Freeze" width="224" height="256" />
						<img src="wippics/9906/free_3.png" alt="The gameplay of Freeze" width="224" height="256" />
						<img src="wippics/9906/free_4.png" alt="H.E.R.O. ?" width="224" height="256" />
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
