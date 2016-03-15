<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>March 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-03-31</h2>
					<p>
					Marco Cassili fixed and rearranged the dips of Sega vector games. J&uuml;rgen fixed and added several things to the new debugger. Luca Elia sent in a huge update to the Jaleco Mega System 1 driver, with support for Rodland (Japanese version only), Earth Defense Force and Avenging Spirit. Phil Stroffolino fixed the sprites of Passing Shot. Mike Coates added Balloon Bomber to the 8080bw driver.
					</p>
					<div class="wippix">
						<img src="wippics/9903/rodla_1.png" alt="Rodland (c) 1990 Jaleco" width="256" height="224" />
						<img src="wippics/9903/rodla_2.png" alt="The intro of Rodland" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/avsp_1.png" alt="Avenging Spirit (c) 1991 Jaleco" width="256" height="224" />
						<img src="wippics/9903/avsp_2.png" alt="The gameplay of Avenging Spirit" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/edf_1.png" alt="Earth Defense Force (c) 1991 Jaleco" width="256" height="224" />
						<img src="wippics/9903/edf_2.png" alt="The intro of Earth Defense Force" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/ball_1.png" alt="Balloon Bomber (c) 1980 Taito" width="224" height="256" />
						<img src="wippics/9903/ball_2.png" alt="The gameplay of Balloon Bomber" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-30</h2>
					<p>
					Tatsuyuki Satoh modified the RC filter to be external and separated it from streams system. Zsolt Vasvari added cocktail mode to Super Locomotive. Nicola added the correct PROMs to Van Van Car.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-29</h2>
					<p>
					Zsolt Vasvari finally figured out the background graphics of Super Locomotive. Nicola fixed the screeching sounds of Gaplus.
					</p>
					<div class="wippix">
						<img src="wippics/9903/suprl_1.png" alt="Super Locomotive (c) 1982 Sega" width="240" height="224" />
						<img src="wippics/9903/suprl_2.png" alt="The intro of Super Locomotive" width="240" height="224" />
						<img src="wippics/9903/suprl_3.png" alt="The gameplay of Super Locomotive" width="240" height="224" />
						<img src="wippics/9903/suprl_4.png" alt="The gameplay of Super Locomotive" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-28</h2>
					<p>
					Mike Balfour finished the Sinbad Mystery driver except for dips and sound. Phil Stroffolino sent in a tilemap update and a preliminary Armed Formation / Terra Force driver by Carlos and him. J&uuml;rgen sent in another core update with better debugger functions. Mike Coates implemented the STOP operation correctly in the ASM 68k core, which should help getting Indy working. Ernesto Corvi sent in a new Gaplus driver with preliminary Galaga 3 support added (not working because of a different custom I/O chip).
					</p>
					<div class="wippix">
						<img src="wippics/9903/sinbad_1.png" alt="Sinbad Mystery (c) 1983 Sega" width="256" height="256" />
						<img src="wippics/9903/sinbad_2.png" alt="The gameplay of Sinbad Mystery" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-27</h2>
					<p>
					Nicola fixed the Galaxian starfield, and got correct colors to Yamato. Paul Leaman has continued the Leland driver and most games get into the test mode now. Ernesto Corvi sent in a much better Gaplus driver which is now fully playable and has also sound support.
					</p>
					<div class="wippix">
						<img src="wippics/9903/yamato_1.png" alt="Yamato (c) 1983 Sega" width="240" height="256" />
						<img src="wippics/9903/yamato_2.png" alt="The gameplay of Yamato" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/gap_1.png" alt="Gaplus (c) 1984 Namco" width="224" height="288" />
						<img src="wippics/9903/gap_2.png" alt="The starting screen of Gaplus" width="224" height="288" />
						<img src="wippics/9903/gap_3.png" alt="A fierce battle" width="224" height="288" />
						<img src="wippics/9903/gap_4.png" alt="Getting the suck beam" width="224" height="288" />
						<img src="wippics/9903/gap_5.png" alt="Colorful circles" width="224" height="288" />
						<img src="wippics/9903/gap_6.png" alt="Captured some aliens" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-26</h2>
					<p>
					Nicola decrypted the last old Sega game, Yamato. Zsolt Vasvari merged Jump Bug with Galaxian and emulated the protection. J&uuml;rgen Buchm&uuml;ller fixed the Gottlieb games (Q*Bert, Reactor). Nicola modified Cloak &amp; Dagger for correct rotation support. Roberto Fresca added hiscore saving to TNK3. Nicola fixed 64th Street to work with the C 68k core and fixed Gaplus colors. Zsolt Vasvari added the brown background to Strategy X. J&uuml;rgen sent in another cpu/debugger update.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-25</h2>
					<p>
					Nicola finished decrypting Sinbad Mystery, but there is still background graphics missing. Bryan McPhail fixed Super Real Darwin crashing at bosses, but the boss order isn't known. Please mail <a href="mailto:mish@tendril.force9.net">him</a> with information about that. Valerio Verrando tweaked the 256x256 video mode.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-24</h2>
					<p>
					Bryan McPhail submitted the Super Burger Time driver. Phil Stroffolino has updated the tilemap API, and Ernesto Corvi has sent in a preliminary driver for Gaplus (happy now QuarterGuy?), made by Manuel Abadia and him. There are still many things to figure out, first being controls and colors.
					</p>
					<div class="wippix">
						<img src="wippics/9903/gaplus_1.png" alt="Gaplus (c) 1984 Namco" width="224" height="288" />
						<img src="wippics/9903/gaplus_2.png" alt="The attract mode of Gaplus" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/sbti_1.png" alt="The intro of Super Burger Time" width="320" height="240" />
						<img src="wippics/9903/sbti_2.png" alt="The gameplay of Super Burger Time" width="320" height="240" />
						<img src="wippics/9903/sbti_3.png" alt="Eat my pepper!" width="320" height="240" />
						<img src="wippics/9903/sbti_4.png" alt="My first hamburger!" width="320" height="240" />
						<img src="wippics/9903/sbti_5.png" alt="The choice is yours.." width="320" height="240" />
						<img src="wippics/9903/sbti_6.png" alt="Big Mac anyone?" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-23</h2>
					<p>
					Darren Olafson has updated the asm 68k core for better cycle timing.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-22</h2>
					<p>
					Ernesto Corvi fixed some problems with Rolling Thunder samples. Nicola fixed two bugs in tilemap system.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-21</h2>
					<p>
					Bryan McPhail has worked on Salamander and Super Burger Time. Zsolt Vasvari has combined Crazy Kong (scramble hardware) with the main Scramble driver. Nicola fixed several things in the Tower of Druaga driver.
					</p>
					<div class="wippix">
						<img src="wippics/9903/supb_1.png" alt="Super Burger Time (c) 1990 Data East" width="320" height="240" />
						<img src="wippics/9903/supb_2.png" alt="The gameplay of Super Burger Time" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/sala_1.png" alt="Salamander (c) 1986 Konami" width="256" height="224" />
						<img src="wippics/9903/sala_2.png" alt="The gameplay of Salamander" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-20</h2>
					<p>
					John Butler has added a new feature to show the game's history or trivia about it (like Retrocade). The RC team generously gave their history databases for MAME use. Brad Oliver has updated the Cinematronics driver, for example Solar Quest now loads an overlay if present. Valerio Verrando added switches to disable artwork and sample loading. Ernesto Corvi has plugged samples into Rolling Thunder.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-19</h2>
					<p>
					Nicola added Rally X and Tower of Druaga clones. Phil Stroffolino fixed Xevious graphics when rotated. Nicola also did some small changes to the SNK driver, adding romsets. Bryan McPhail fixed some Captain Silver graphic lags, and J&uuml;rgen has fixed some bugs in the 6800 core. John Butler has fixed memory trashing in zoomed graphics drawing functions. Nicola has fixed Cinematronics games from locking up, and updated the tilemap/palette functions.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-18</h2>
					<p>
					Zsolt Vasvari has added RC filter functions to all the games which use the Time Pilot sound board. J&uuml;rgen Buchm&uuml;ller has made some BIG changes to CPU cores and interfaces.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-17</h2>
					<p>
					Frank Palazzolo added Speed Coin prototype to Super Cobra driver. Phil Stroffolino sent a new SNK driver with working support for nearly all of the games, though some color problems with Athena and TNK3 still remain. He also fixed some bugs in the tilemap code. Eric Hustvedt fixed the priority problems of Battle Road and Lode Runners. Bryan McPhail fixed the controls of Gondomania and Last Mission.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-16</h2>
					<p>
					Quench fixed Twin Cobra from crashing. Valerio Verrando modified autoframeskip to work better with vsync. Brad Oliver and Nicola Salmoria have worked on TNZS, trying to fix crashes and adding a bootleg.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-15</h2>
					<p>
					Bryan McPhail has submitted a driver for Tumble Pop, a rare game from Data East. Victor Trucco added a Pacman clone. Bryan McPhail also fixed graphics of Cobra Command, Captain Silver and Super Real Darwin.
					</p>
					<div class="wippix">
						<img src="wippics/9903/tumb_1.png" alt="Tumble Pop (c) 1991 Data East" width="320" height="240" />
						<img src="wippics/9903/tumb_2.png" alt="The gameplay of Tumble Pop" width="320" height="240" />
						<img src="wippics/9903/tumb_3.png" alt="The gameplay of Tumble Pop" width="320" height="240" />
						<img src="wippics/9903/tumb_4.png" alt="The gameplay of Tumble Pop" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-14</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller has split some of the cpu cores into separate cores (should help adding new ones). Tatsuyuki Satoh has modified the FM engine IRQ handling. Bryan McPhail has submitted the Caveman Ninja driver with support for also Joe &amp; Mac and Stone Age. Zsolt Vasvari has fixed Frenzy coin inputs and added a Crazy Climber bootleg. Mathis Rosenhauer has modified the snapshot routines to save PNG's.
					</p>
					<div class="wippix">
						<img src="wippics/9903/cnin_1.png" alt="Caveman Ninja (c) 1991 Data East" width="256" height="240" />
						<img src="wippics/9903/cnin_2.png" alt="The intro of Caveman Ninja" width="256" height="240" />
						<img src="wippics/9903/cnin_3.png" alt="The gameplay of Caveman Ninja" width="256" height="240" />
						<img src="wippics/9903/cnin_4.png" alt="The gameplay of Caveman Ninja" width="256" height="240" />
						<img src="wippics/9903/cnin_5.png" alt="The gameplay of Caveman Ninja" width="256" height="240" />
						<img src="wippics/9903/cnin_6.png" alt="The gameplay of Caveman Ninja" width="256" height="240" />
						<img src="wippics/9903/cnin_7.png" alt="The gameplay of Caveman Ninja" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-13</h2>
					<p>
					Nicola Salmoria updated the Namco sound driver to support dynamic changes to the waveform data, and also converted Rolling Thunder to the tilemap system. Speed gain was minimal though. He also fixed a sprite offset bug in Xevious and converted it to tilemap system. Zsolt Vasvari added a newer version of Yie Ar Kung-Fu.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-12</h2>
					<p>
					Nicola Salmoria converted Time Pilot to tilemap system and fixed a few bugs along the way. Bryan McPhail added several Pocket Gal clones. Allard Van Der Bas added a new Pacman clone and Van Van Car to the Pacman driver.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-11</h2>
					<p>
					Zsolt Vasvari added another Tazmania set to the Super Cobra driver. Tatsuyuki Satoh upgraded the FM engine, for example one tune of Sonic Wings 2 sounds better. Ernesto Corvi has gotten the sprites of Namco System 1 games working thanks to JROK, but the driver is still extremely slow. The screenshots don't have FPS counter turned on because of that :-P.. Zsolt Vasvari has sent in a driver for Pontoon, a blackjack gambling game from Tehkan. Thierry Lescot has added an alternate set for Eliminator. Jim Hernandez fixed Rolling Thunder sound settings.
					</p>
					<div class="wippix">
						<img src="wippics/9903/pont_1.png" alt="Pontoon (c) 1985 Tehkan" width="256" height="240" />
						<img src="wippics/9903/pont_2.png" alt="The gameplay of Pontoon" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/pacmn_1.png" alt="Pacmania (c) 1987 Namco" width="224" height="288" />
						<img src="wippics/9903/pacmn_2.png" alt="The intro of Pacmania" width="224" height="288" />
						<img src="wippics/9903/pacmn_3.png" alt="Pacman says hello to a ghost" width="224" height="288" />
						<img src="wippics/9903/pacmn_4.png" alt="Mmm. Must eat ghosts" width="224" height="288" />
						<img src="wippics/9903/pacmn_5.png" alt="He jumps over ghosts? Blasphemy!" width="224" height="288" />
						<img src="wippics/9903/pacmn_6.png" alt="The highscore screen of Pacmania" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-10</h2>
					<p>
					Tatsuyuki Satoh has sent in an interface for YM-2612 (System18 games use this sound chip), and Nicola fixed Lode Runner 2 character colors and level selecting. Zsolt Vasvari added two clones Scramble (a Konami version and a bootleg). Mike Balfour has changed Circus and Super Breakout to use the artwork functions instead of their own custom ones.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-09</h2>
					<p>
					Michael Soderstrom has finally sent in the newest Williams driver with added support for Mystic Marathon, Turkey Shoot, Inferno and Joust 2. Nicola Salmoria has modified the DOS video code for automatic stretching (double, triple and quadra options in one command), and fixed the user interface to rotate correctly. J&uuml;rgen Buchm&uuml;ller has updated the 6809 core again.
					</p>
					<div class="wippix">
						<img src="wippics/9903/joust2_1.png" alt="Joust 2 (c) 1986 Williams" width="248" height="288" />
						<img src="wippics/9903/joust2_2.png" alt="The intro of Joust 2" width="248" height="288" />
						<img src="wippics/9903/joust2_3.png" alt="The gameplay of Joust 2" width="248" height="288" />
						<img src="wippics/9903/joust2_4.png" alt="The gameplay of Joust 2" width="248" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/mystic_1.png" alt="Mystic Marathon (c) 1983 Williams" width="284" height="248" />
						<img src="wippics/9903/mystic_2.png" alt="The intro of Mystic Marathon" width="284" height="248" />
						<img src="wippics/9903/mystic_3.png" alt="The gameplay of Mystic Marathon" width="284" height="248" />
						<img src="wippics/9903/mystic_4.png" alt="Stumbled over that rock" width="284" height="248" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-08</h2>
					<p>
					Eric Hustvedt added another Fax clone, J&uuml;rgen Buchm&uuml;ller improved the Z80 core (regulus &amp; starjack work again). Tatsuyuki Satoh has made volume controller routines, Mike Coates has fixed several bugs in the asm m68k core, Bryan McPhail has added another Dark Seal clone and fixed graphics, Mathis Rosenhauer has fixed some bugs in the artwork routines. Paul Leaman has begun work on a Leland games (Pigout, Super Offroad etc.) driver, but at the moment it doesn't do anything more than goes to the self-test.
					</p>
					<div class="wippix">
						<img src="wippics/9903/offroad.png" alt="Super Off-Road (c) 198? Leland" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-07</h2>
					<p>
					Olivier Galibert added the second Z80 to Street Fighter 1, which was needed to add the sample playing support. Brad Oliver has finally sent in the Cinematronics vector games driver with working support for Space Wars, Barrier, Star Castle, Tailgunner, Rip Off, Armor Attack, War of the Worlds, Warrior, Star Hawk, Solar Quest.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-06</h2>
					<p>
					Nicola has added an option to show the total colors on screen (only in debug builds though), and rewritten the DOS blitting routines using macros. He also added sound to Legend of Kage, which works otherwise but graphics are screwed.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-05</h2>
					<p>
					Aaron Giles has fixed more drivers to work with rotation (galaga, frogger, burger time and their clones). Brad Oliver updated the Toaplan driver, graphics now use palette reduction (16-bit video mode not needed), Vimana rom sets are merged and a few other changes. Phil Stroffolino has continued his work on tilemaps, added support for Ghosts'n'Goblins cocktail mode and Gaiden video driver has some fixes.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-04</h2>
					<p>
					Darren Olafson has started a driver for Vimana with information from Carl-Henrik Sk&aring;rstedt. Aaron Giles fixed rotating handling in the older Namco drivers, and also added Crack Shot to the Exidy 440 driver. Ernesto Corvi submitted the Namco System 1 driver with support for Pacmania and Galaga 88. He also submitted a preliminary driver for Gyrodine. The Namco System 1 driver is still very slow and sprites are screwed. Pacmania and Galaga 88 are the games that work best, Dragon Spirits is almost there, Splatter House and Blazer have missing graphics and World Stadium 90 has protection problems. Nicola Salmoria has converted Traverse USA to the tilemap system for testing purposes.
					</p>
					<div class="wippix">
						<img src="wippics/9903/pacm_1.png" alt="Pacmania (c) 1987 Namco" width="224" height="288" />
						<img src="wippics/9903/pacm_2.png" alt="The intro of Pacmania" width="224" height="288" />
						<img src="wippics/9903/pacm_3.png" alt="The gameplay of Pacmania" width="224" height="288" />
						<img src="wippics/9903/pacm_4.png" alt="The gameplay of Pacmania" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/gala_1.png" alt="Galaga 88 (c) 1987 Namco" width="224" height="288" />
						<img src="wippics/9903/gala_2.png" alt="The intro of Galaga 88" width="224" height="288" />
						<img src="wippics/9903/gala_3.png" alt="The gameplay of Galaga 88" width="224" height="288" />
						<img src="wippics/9903/gala_4.png" alt="The gameplay of Galaga 88" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/crack_1.png" alt="Crack Shot (c) 1985 Exidy" width="320" height="240" />
						<img src="wippics/9903/crack_2.png" alt="The intro of Crack Shot" width="320" height="240" />
						<img src="wippics/9903/crack_3.png" alt="The gameplay of Crack Shot" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/vimana_1.png" alt="Vimana (c) 1991 Toaplan" width="240" height="320" />
						<img src="wippics/9903/vimana_2.png" alt="The intro of Vimana" width="240" height="320" />
						<img src="wippics/9903/vimana_3.png" alt="The gameplay of Vimana" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/9903/gyrodine.png" alt="Gyrodine (c) 1984 Taito" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-03-03</h2>
					<p>
					J&uuml;rgen fixed Capcom Bowling to work again, and Hiromitsu Shioya sent in a newer version of the K007232 sound chip emulation which now supports stereo output.
					</p>
				</div>

				<div class="row">
					<h2>1999-03-02</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller has fixed Rolling Thunder MCU problems by simplifying the 6809 interrupt handling and corrected CWAI emulation. Nicola fixed Mario Bros. death sound with information from Brian Stern, Brad Oliver fixed problems of the C Z80 core on Mac and Tatsuyuki Satoh updated the FM engine to the version FM 0.35d. This removes 8-bit output mode (won't matter if you have a 8-bit soundcard since SEAL can downsample the 16-bit audio stream to your 8-bit soundcard) and changes a few other things. Eric Hustvedt has added another Mouse Trap clone, and J&uuml;rgen fixed Astro Invader and Kamikaze. He also updated the CPU interface, resulting in a little speed boost. Ernesto Corvi fixed Pacland and Rolling Thunder sound by emulating two new opcodes in the 63701 core, and Mike Coates fixed Space Panic colors.
					</p>
				</div>

				<div class="rowlast">
					<h2>1999-03-01</h2>
					<p>
					Bryan McPhail has sent in his dec0 driver, with Boulder Dash support added and Sly Spy and Midnight Resistance now have full sound and music. All this was possible to do because he also added support for the Hu6280 CPU into MAME. Aaron Giles has updated the Namco System 1 sound system, merging it with the other Namco system. He also added 16-bit sampling support for it. Tatsuyuki Satoh has sped up the C 68k core, and Ernesto Corvi has updated Pacland to support sound. Mike Coates has fixed several bugs with the ASM 68k core (Shock Troopers should work now). J&uuml;rgen Buchm&uuml;ller has fixed a RETN opcode bug in the Z80 core.
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
