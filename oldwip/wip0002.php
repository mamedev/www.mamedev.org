<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">


            	<h1>February 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-02-29</h2>
					<p>
					Zsolt Vasvari added another Cosmic Alien romset. Jarek Burczynski fixed some SEAL issues when 16 bit sound output was used. Nicola Salmoria fixed some problems in Speed Rumbler.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-28</h2>
					<p>
					Nicola Salmoria fixed another Allegro bug. J&uuml;rgen Buchm&uuml;ller significantly improved the Asteroids sound simulation.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-27</h2>
					<p>
					Nicola Salmoria fixed a Centipede palette bug, and he fixed Tomahawk and Astro Fighter from crashing. Bernd Wiebelt fixed the bug that caused MAME to hang when joysticks were used. Zsolt Vasvari fixed Tomahawk protection, and he added the Japanese romset of Fantasy. Aaron Giles fixed Narc from crashing.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-26</h2>
					<p>
					Michael Soderstrom fixed some Galaxian memory handling bugs. Zsolt Vasvari sent a driver for Got-Ya. Bernd Wiebelt fixed the 400x300 bug in Allegro. Vernon C. Brooks fixed a cheat system text input bug.
					</p>
					<div class="wippix">
						<img src="wippics/0002/goty_1.png" alt="Got-Ya (c) 1981 Game-A-Tron" width="224" height="288" />
						<img src="wippics/0002/goty_2.png" alt="The intro of Got-Ya" width="224" height="288" />
						<img src="wippics/0002/goty_3.png" alt="The gameplay of Got-Ya" width="224" height="288" />
						<img src="wippics/0002/goty_4.png" alt="The gameplay of Got-Ya" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2000-02-25</h2>
					<p>
					Vernon C. Brooks fixed Namco System 1 DAC.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-24</h2>
					<p>
					Manuel Abadia fixed bad tiles in the ending of Haunted Castle. Aaron Giles added the Japanese romset of Pole Position 2. Phil Stroffolino fixed Dark Adventure romset. Vernon C. Brooks fixed Super World Stadium 92, and it works now.
					</p>
					<div class="wippix">
						<img src="wippics/0002/sws9_1.png" alt="Super World Stadium '92 (c) 1992 Namco" width="288" height="224" />
						<img src="wippics/0002/sws9_2.png" alt="The intro of Super World Stadium '92" width="288" height="224" />
						<img src="wippics/0002/sws9_3.png" alt="The intro of Super World Stadium '92" width="288" height="224" />
						<img src="wippics/0002/sws9_4.png" alt="The gameplay of Super World Stadium '92" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-02-23</h2>
					<p>
					Zsolt Vasvari got Dream Shopper playable. Mike Coates fixed Cosmic Guerrilla. Vernon C. Brooks added Face Off to Namco System 1 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0002/drem_1.png" alt="Dream Shopper (c) 1982 Sanritsu" width="224" height="288" />
						<img src="wippics/0002/drem_2.png" alt="The intro of Dream Shopper" width="224" height="288" />
						<img src="wippics/0002/drem_3.png" alt="The gameplay of Dream Shopper" width="224" height="288" />
						<img src="wippics/0002/drem_4.png" alt="The gameplay of Dream Shopper" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/0002/face_1.png" alt="Face Off (c) 1988 Namco" width="288" height="224" />
						<img src="wippics/0002/face_2.png" alt="The intro of Face Off" width="288" height="224" />
						<img src="wippics/0002/face_3.png" alt="The intro of Face Off" width="288" height="224" />
						<img src="wippics/0002/face_4.png" alt="The gameplay of Face Off" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-02-22</h2>
					<p>
					Phil Stroffolino wrote preliminary highscore loading/saving routines. Vernon C. Brooks added Quester to the Namco System 1 driver. Zsolt Vasvari added Dream Shopper to the Van Van Car driver but it's not working. Aaron Giles fixed a memory bug affecting Trog. Vernon C. Brooks added Suzuka 8 Hours 2 to the Namco System 2 driver, but like the other racing games, it's unplayable.
					</p>
					<div class="wippix">
						<img src="wippics/0002/ques_1.png" alt="Quester (c) 1987 Namco" width="224" height="288" />
						<img src="wippics/0002/ques_2.png" alt="The intro of Quester" width="224" height="288" />
						<img src="wippics/0002/ques_3.png" alt="The gameplay of Quester" width="224" height="288" />
						<img src="wippics/0002/ques_4.png" alt="The gameplay of Quester" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2000-02-21</h2>
					<p>
					Luca Elia added another Berlin Wall romset.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-20</h2>
					<p>
					Quench sent in a lot of fixes to the Toaplan driver, for example the startup hangs are fixed now, and he also added Fire Shark / Same! Same! Same! to the driver. Phil Stroffolino sent in a playable Mole Attack driver.
					</p>
					<div class="wippix">
						<img src="wippics/0002/mole_1.png" alt="Mole Attack (c) 1982 Yachiyo" width="320" height="200" />
						<img src="wippics/0002/mole_2.png" alt="The attract mode of Mole Attack" width="320" height="200" />
						<img src="wippics/0002/mole_3.png" alt="The intro of Mole Attack" width="320" height="200" />
						<img src="wippics/0002/mole_4.png" alt="The gameplay of Mole Attack" width="320" height="200" />
					</div>
					<div class="wippix">
						<img src="wippics/0002/fire_1.png" alt="Fire Shark (c) 1990 Toaplan" width="240" height="320" />
						<img src="wippics/0002/fire_2.png" alt="The intro of Fire Shark" width="240" height="320" />
						<img src="wippics/0002/fire_3.png" alt="The gameplay of Fire Shark" width="240" height="320" />
						<img src="wippics/0002/fire_4.png" alt="The gameplay of Fire Shark" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-02-19</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed some problems with the Pokey sound core.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-18</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed yet more problems with Battle Zone sound. Manuel Abadia sent in a driver for Ultraman and Nicola Salmoria fixed some graphics problems.
					</p>
					<div class="wippix">
						<img src="wippics/0002/ultr_1.png" alt="Ultraman (c) 1991 Banpresto" width="289" height="224" />
						<img src="wippics/0002/ultr_2.png" alt="The intro of Ultraman" width="289" height="224" />
						<img src="wippics/0002/ultr_3.png" alt="The intro of Ultraman" width="289" height="224" />
						<img src="wippics/0002/ultr_4.png" alt="The gameplay of Ultraman" width="289" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-02-17</h2>
					<p>
					Aaron Giles cleaned up the Atari drivers a lot, and fixed Gauntlet's shadow rendering. Andrew Prime fixed SegaPCM sound in the System16 drivers.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-16</h2>
					<p>
					Brian A. Troha added the USA romset of Varth. Zsolt Vasvari and J&uuml;rgen Buchm&uuml;ller added preliminary DAC and SN76477 sound to Bandido. J&uuml;rgen also fixed Asteroids Deluxe explosion sound.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-15</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed some bugs in the Asteroids sound simulation.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-14</h2>
					<p>
					Vernon C. Brooks cleaned up the Namco System 1 driver a bit. Aaron Giles modified TMS5220 and ADPCM sound cores to produce sound streams at correct sample rates. J&uuml;rgen Buchm&uuml;ller fixed some bugs in the SN76477 sound core, and added support for it to Crazy Balloon.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-13</h2>
					<p>
					Marco Cassili added the USA romset of Ghouls'n Ghosts. J&uuml;rgen Buchm&uuml;ller added preliminary analog sound simulation to Asteroids. John Butler fixed a keyboard bug which affected MacMAME. Nicola Salmoria fixed the bad sound of Ali Baba.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-12</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller added preliminary analog sound simulation to Battle Zone and Red Baron.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-11</h2>
					<p>
					Vernon C. Brooks fixed some Namco System 1 graphics bugs. Luca Elia added Takeda Shingen to the Mega System 1 driver. J&uuml;rgen Buchm&uuml;ller added preliminary SN76477 analog/digital sound chip emulation to Stratovox / Speak &amp; Rescue.
					</p>
					<div class="wippix">
						<img src="wippics/0002/tshi_1.png" alt="Takeda Shingen (c) 1988 Jaleco" width="256" height="224" />
						<img src="wippics/0002/tshi_2.png" alt="The intro of Takeda Shingen" width="256" height="224" />
						<img src="wippics/0002/tshi_3.png" alt="The gameplay of Takeda Shingen" width="256" height="224" />
						<img src="wippics/0002/tshi_4.png" alt="The gameplay of Takeda Shingen" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-02-10</h2>
					<p>
					Nicola Salmoria made streams.c more accurate. Aaron Giles fixed APB sprite bugs. J&uuml;rgen Buchm&uuml;ller fixed yet more stuff in the Pokey core.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-09</h2>
					<p>
					Tatsuyuki Satoh fixed some DAC problems in Namco System 1 games. Mike Coates fixed some ASM 68k core bugs.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-08</h2>
					<p>
					Tatsuyuki Satoh did a few bugfixes and optimized the m6800 core. Mathis Rosenhauer fixed Red Baron graphics. Luca Elia fixed a 68020 bug.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-07</h2>
					<p>
					Aaron Giles fixed another 68k core bug.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-06</h2>
					<p>
					Aaron Giles fixed a memory.c bug. Bernd Wiebelt sped up vector games by fixing some dirty marking bugs. Nicola Salmoria modified video.c to function better with Allegro. Bryan McPhail added another Defender romset. Aaron Giles improved the 68020 support a lot, and added distinction for 68EC020. Jarek Parchanski added better samples to Asteroids and Asteroids Deluxe.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-05</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller made some speedups to the Pokey core. Zsolt Vasvari fixed a dirty marking bug in lazercmd and geebee drivers.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-04</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed a Z80 bug with banked memory. Nicola Salmoria fixed a vector brightness bug.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-03</h2>
					<p>
					Aaron Giles added the Japanese romset of Rampart. Vernon C. Brooks fixed most graphics problems in the Namco System 1 driver. J&uuml;rgen Buchm&uuml;ller rewrote the Pokey code. Bernd Wiebelt sped up the blitting routines a bit.
					</p>
				</div>

				<div class="row">
					<h2>2000-02-02</h2>
					<p>
					Bernd Wiebelt added 50% and 75% bright scanlines. Aaron Giles added internal mixing routines to MAME. Tatsuyuki Satoh fixed some problems in the FM cores.
					</p>
				</div>

				<div class="rowlast">
					<h2>2000-02-01</h2>
					<p>
					Vernon C. Brooks partially fixed the Dangerous Seed title screen problem.
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
