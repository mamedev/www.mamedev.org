<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
           		
            	<h1>March 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-03-31</h2>
					<p>
					Brad Oliver fixed a HISCORE.DAT bug affecting MacMAME. Takahiro Nogi sent in a driver for Mr. Jong and Crazy Blocks.
					</p>
					<div class="wippix">
						<img src="wippics/0003/mrjo_1.png" alt="Mr. Jong (c) 1983 Kiwako" width="224" height="240" />
						<img src="wippics/0003/mrjo_2.png" alt="The intro of Mr. Jong" width="224" height="240" />
						<img src="wippics/0003/mrjo_3.png" alt="The gameplay of Mr. Jong" width="224" height="240" />
						<img src="wippics/0003/mrjo_4.png" alt="The gameplay of Mr. Jong" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-30</h2>
					<p>
					Aaron Giles sent in a driver for Rabbit Punch / Rabio Lepus. Nicola Salmoria fixed yet more problems with the Astrocade video hardware, and he added a correct R-Type romset. Zsolt Vasvari did some fixes and cleanups to the 8080bw driver. Roberto Fresca fixed some Pound for Pound and Air Duel dipswitches.
					</p>
					<div class="wippix">
						<img src="wippics/0003/rabi_1.png" alt="Rabio Lepus (c) 1987 V-System Co" width="288" height="216" />
						<img src="wippics/0003/rabi_2.png" alt="Rabbit Punch (c) 1987 V-System Co" width="288" height="216" />
						<img src="wippics/0003/rabi_3.png" alt="The intro of Rabio Lepus" width="288" height="216" />
						<img src="wippics/0003/rabi_4.png" alt="The gameplay of Rabio Lepus" width="288" height="216" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-29</h2>
					<p>
					Nicola Salmoria fixed the Astrocade hardware star and sparkle generators, and he added Professor Pacman to the driver (however it doesn't work at all). Manuel Abadia added cocktail support to Double Dribble. Phil Stroffolino sent in some tilemap system fixes.
					</p>
					<div class="wippix">
						<img src="wippics/0003/prof_1.png" alt="Professor Pacman (c) 1983 Bally Midway" width="320" height="204" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-28</h2>
					<p>
					Manuel Abadia added cocktail support to Baraduke, Metro-Cross, Gaplus and Pandora's Palace. Nicola Salmoria added better emulation of Astrocade hardware palette registers, affecting Extra Bases, Seawolf 2 and Robby Roto.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-27</h2>
					<p>
					Phil Stroffolino sent in a preliminary Thief driver, but only attract mode works. Nicola Salmoria added Air Duel to the M72 driver. Manuel Abadia added cocktail support to Grobda.
					</p>
					<div class="wippix">
						<img src="wippics/0003/aird_1.png" alt="Air Duel (c) 1990 Irem" width="256" height="384" />
						<img src="wippics/0003/aird_2.png" alt="The intro of Air Duel" width="256" height="384" />
						<img src="wippics/0003/aird_3.png" alt="The gameplay of Air Duel" width="256" height="384" />
						<img src="wippics/0003/aird_4.png" alt="The gameplay of Air Duel" width="256" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0003/thie_1.png" alt="Thief (c) 1981 Pacific Novelty" width="256" height="256" />
						<img src="wippics/0003/thie_2.png" alt="The attract mode of Thief" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-26</h2>
					<p>
					Andrea Mazzoleni fixed an input port bug affecting debug modes. Manuel Abadia added cocktail support to Sky Kid and Dragon Buster. Aaron Giles added cocktail support to Exerion. Darren Hatton added another Astro Blaster romset. Karl Stenerud updated the 68020 core a bit.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-25</h2>
					<p>
					Aaron Giles finally added the background graphics to Exerion, however a few color problems might still remain.
					</p>
					<div class="wippix">
						<img src="wippics/0003/exer_1.png" alt="Exerion (c) 1983 Jaleco" width="224" height="320" />
						<img src="wippics/0003/exer_2.png" alt="The gameplay of Exerion" width="224" height="320" />
						<img src="wippics/0003/exer_3.png" alt="The gameplay of Exerion" width="224" height="320" />
						<img src="wippics/0003/exer_4.png" alt="The gameplay of Exerion" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-24</h2>
					<p>
					Zsolt Vasvari added overlay support to Space Encounters. Manuel Abadia added MSM5205 sound to Splash! Mathis Rosenhauer added support for true color backdrops to artwork.c.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-23</h2>
					<p>
					Mike Coates fixed an ASM 68k core bug which affected Super Sidekicks 4. Nicola Salmoria added Pound for Pound to the M72 driver. Zsolt Vasvari added sample support to Got-Ya. Aaron Giles added another Spy Hunter 2 romset.
					</p>
					<div class="wippix">
						<img src="wippics/0003/poun_1.png" alt="Pound for Pound (c) 1990 Irem" width="256" height="384" />
						<img src="wippics/0003/poun_2.png" alt="The intro of Pound for Pound" width="256" height="384" />
						<img src="wippics/0003/poun_3.png" alt="The intro of Pound for Pound" width="256" height="384" />
						<img src="wippics/0003/poun_4.png" alt="The gameplay of Pound for Pound" width="256" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-22</h2>
					<p>
					Zsolt Vasvari added SN76477 support to Space Invaders. Aaron Giles fixed a low-level noise bug in the mixer functions. Phil Stroffolino fixed some more bugs in the priority buffer functions.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-21</h2>
					<p>
					Mike Coates added cocktail support to Space Panic and variants. Brian Lewis fixed a tweaked mode bug. J&uuml;rgen Buchm&uuml;ller added .WAV sound recording function to mixer.c.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-20</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller made the makefile quieter, and he fixed a long-standing SEAL bug which prevented some newer models of SB128PCI to function correctly, and he also fixed some SN76477 and Phoenix sound bugs. Mike Haaland adjusted the Pop Flamer sound settings.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-19</h2>
					<p>
					Yasuhiro Ogawa added IF-SEGA joystick support. Nicola Salmoria made the priority buffer support yet more drawing functions.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-18</h2>
					<p>
					Quench fixed tnzsb from crashing without sound. Nicola Salmoria started work on a generalized priority drawing functions.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-17</h2>
					<p>
					Zsolt Vasvari fixed a Route 16 crash bug and a Dragon Ninja romloader bug.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-16</h2>
					<p>
					Zsolt Vasvari added cocktail mode support for yet more 8080bw drivers. Michael Soderstrom fixed an uninitialized variable bug. Phil Stroffolino fixed some bugs in the high score routines.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-15</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller sent in yet another TMS36xx sound core update with some bugfixes and adjustments. Phil Stroffolino added a function to the tilemap system to support more efficient priority control and rendering. Zsolt Vasvari fixed the colors in Astro Invader and he fixed the star field in Jump Bug. Aaron Giles fixed Narc from freezing.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-14</h2>
					<p>
					Zsolt Vasvari fixed Funky Fish scrolling effect. E. Watanabe fixed Ajax and Gradius 3 priority problems.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-13</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed some problems in the TMS36xx sound core. Takahiro Nogi fixed the stereo sound output problem. Aaron Giles fixed Xybots stereo sound.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-12</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller sent in a sound core for TMS36xx sound chips, and modified Phoenix, Pleiads, Naughty Boy and Monster Bash to use it. Quench sent in a Toaplan2 update with support for Ghox, V-Five, Dogyuun and Batsugun.
					</p>
					<div class="wippix">
						<img src="wippics/0003/ghox_1.png" alt="Ghox (c) 1991 Toaplan" width="240" height="320" />
						<img src="wippics/0003/vfiv_1.png" alt="V-Five (c) 1993 Toaplan" width="240" height="320" />
						<img src="wippics/0003/dogy_1.png" alt="Dogyuun (c) 1991 Toaplan" width="240" height="320" />
						<img src="wippics/0003/bats_1.png" alt="Batsugun (c) 1993 Toaplan" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-11</h2>
					<p>
					Mike Coates fixed some more 68k core bugs. Zsolt Vasvari wrote functions for global sound enable and modified MCR and D-Day drivers to use them, and he also fixed some 8080bw and alibaba driver problems.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-10</h2>
					<p>
					Tatsuyuki Satoh fixed m6800 port write functions, Namco System 1 DAC gain and also a sound stream bug. J&uuml;rgen Buchm&uuml;ller improved the Phoenix sound driver again. Malcolm Lear fixed Lazer Command palette. Aaron Giles added sound volume control to the MCR drivers.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-09</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller sent a preliminary Phoenix analog sound driver. Aaron Giles fixed yet more Vindicators color problems.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-08</h2>
					<p>
					Gareth Hall added a new Kangaroo romset. Marco Cassili added the Japanese romset of Tiger Heli. Nicola Salmoria added Funky Fish to the Kangaroo driver. Aaron Giles fixed Vindicators II palette marking bugs. Bryan McPhail added some clone romsets of Data East games.
					</p>
					<div class="wippix">
						<img src="wippics/0003/fnky_1.png" alt="Funky Fish (c) 1981 Sun Electronics" width="240" height="256" />
						<img src="wippics/0003/fnky_2.png" alt="The intro of Funky Fish" width="240" height="256" />
						<img src="wippics/0003/fnky_3.png" alt="The gameplay of Funky Fish" width="240" height="256" />
						<img src="wippics/0003/fnky_4.png" alt="The gameplay of Funky Fish" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-07</h2>
					<p>
					Vernon C. Brooks added Puzzle Club (prototype) to the Namco System 1 driver. Zsolt Vasvari added Desert Gun and Shuffleboard to the 8080bw driver. Mathis Rosenhauer fixed Star Castle circle drawing.
					</p>
					<div class="wippix">
						<img src="wippics/0003/puzl_1.png" alt="Puzzle Club (c) 1990 Namco" width="224" height="288" />
						<img src="wippics/0003/puzl_2.png" alt="The intro of Puzzle Club" width="224" height="288" />
						<img src="wippics/0003/puzl_3.png" alt="The gameplay of Puzzle Club" width="224" height="288" />
						<img src="wippics/0003/puzl_4.png" alt="The gameplay of Puzzle Club" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/0003/dese_1.png" alt="Desert Gun (c) 1977 Midway" width="256" height="224" />
						<img src="wippics/0003/dese_2.png" alt="The gameplay of Desert Gun" width="256" height="224" />
						<img src="wippics/0003/dese_3.png" alt="The gameplay of Desert Gun" width="256" height="224" />
						<img src="wippics/0003/dese_4.png" alt="The gameplay of Desert Gun" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0003/shuf_1.png" alt="Shuffleboard (c) 1978 Midway" width="224" height="256" />
						<img src="wippics/0003/shuf_2.png" alt="The intro of Shuffleboard" width="224" height="256" />
						<img src="wippics/0003/shuf_3.png" alt="The intro of Shuffleboard" width="224" height="256" />
						<img src="wippics/0003/shuf_4.png" alt="The gameplay of Shuffleboard" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-06</h2>
					<p>
					Phil Stroffolino sent in a driver for Lasso, and some tilemap bugfixes. Zsolt Vasvari fixed cocktail mode in the Rock-Ola/SNK games, and he added the correct PROMs to the Space Invaders driver.
					</p>
					<div class="wippix">
						<img src="wippics/0003/lass_1.png" alt="Lasso (c) 1982 SNK" width="240" height="256" />
						<img src="wippics/0003/lass_2.png" alt="The intro of Lasso" width="240" height="256" />
						<img src="wippics/0003/lass_3.png" alt="The gameplay of Lasso" width="240" height="256" />
						<img src="wippics/0003/lass_4.png" alt="The gameplay of Lasso" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-05</h2>
					<p>
					Vernon C. Brooks added Kyukai Douchuuki to the Namco System 2 driver. Mike Coates fixed a 68k bug.
					</p>
					<div class="wippix">
					<img src="wippics/0003/kyuk_1.png" alt="Kyukai Douchuuki (c) 1990 Namco" width="288" height="224" />
					<img src="wippics/0003/kyuk_2.png" alt="The intro of Kyukai Douchuuki" width="288" height="224" />
					<img src="wippics/0003/kyuk_3.png" alt="The gameplay of Kyukai Douchuuki" width="288" height="224" />
					<img src="wippics/0003/kyuk_4.png" alt="The gameplay of Kyukai Douchuuki" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-03-04</h2>
					<p>
					Zsolt Vasvari fixed Ambush palette bugs, and he rewrote the 8080bw and z80bw drivers. J&uuml;rgen Buchm&uuml;ller tweaked Tempest again to work better.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-03</h2>
					<p>
					Karl Stenerud has added some more 68020 functionality to the C 68k core. Vernon C. Brooks fixed some key chip problems with World Stadium.
					</p>
				</div>

				<div class="row">
					<h2>2000-03-02</h2>
					<p>
					Bryan McPhail added the world romset of Cobra Command.
					</p>
				</div>

				<div class="rowlast">
					<h2>2000-03-01</h2>
					<p>
					Vernon C. Brooks added World Stadium and World Stadium '89 to the Namco System 1 driver, and he cleaned up some things in the Namco System 2 driver. Marco Cassili fixed quite some dipswitches all over the place. CAB fixed Labyrinth Runner sound frequency. Tatsuyuki Satoh fixed a memory corruption bug in the Namco System 1 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0003/ws_1.png" alt="World Stadium (c) 1988 Namco" width="288" height="224" />
						<img src="wippics/0003/ws89_1.png" alt="World Stadium '89 (c) 1989 Namco" width="288" height="224" />
						<img src="wippics/0003/ws_2.png" alt="The gameplay of World Stadium" width="288" height="224" />
						<img src="wippics/0003/ws89_2.png" alt="The gameplay of World Stadium '89" width="288" height="224" />
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
