<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>June 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-06-30</h2>
					<p>
					Jarek Burczynski and J&uuml;rgen Buchm&uuml;ller improved the Taito-B driver pixel color handling. Luca Elia sent in a Psikyo driver, the strongest games being Sengoku Ace and Gun Bird. Gerardo Oporto fixed some more dip switches in several games.<br/>
					</p>
					<div class="wippix">
						<img src="wippics/0006/sngk_1.png" alt="Sengoku Ace (c) 1993 Psikyo" width="224" height="320" />
						<img src="wippics/0006/sngk_2.png" alt="The intro of Sengoku Ace" width="224" height="320" />
						<img src="wippics/0006/sngk_3.png" alt="The gameplay of Sengoku Ace" width="224" height="320" />
						<img src="wippics/0006/sngk_4.png" alt="The gameplay of Sengoku Ace" width="224" height="320" />
						<img src="wippics/0006/sngk_5.png" alt="The gameplay of Sengoku Ace" width="224" height="320" />
						<img src="wippics/0006/sngk_6.png" alt="The gameplay of Sengoku Ace" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/gunb_1.png" alt="Gun Bird (c) 1994 Psikyo" width="224" height="320" />
						<img src="wippics/0006/gunb_2.png" alt="The intro of Gun Bird" width="224" height="320" />
						<img src="wippics/0006/gunb_3.png" alt="The gameplay of Gun Bird" width="224" height="320" />
						<img src="wippics/0006/gunb_4.png" alt="The gameplay of Gun Bird" width="224" height="320" />
						<img src="wippics/0006/gunb_5.png" alt="The gameplay of Gun Bird" width="224" height="320" />
						<img src="wippics/0006/gunb_6.png" alt="The gameplay of Gun Bird" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-29</h2>
					<p>
					Hans de Goede fixed Super Space Invaders '91 and Majestic 12 from crashing.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-28</h2>
					<p>
					More progress was made on the Williams 34010 driver by Aaron Giles and Ernesto Corvi, fixing the T-Unit version of Mortal Kombat 1 almost completely and adding sound to NBA Jam (and Tournament Edition).
					</p>
				</div>

				<div class="row">
					<h2>2000-06-27</h2>
					<p>
					Luca Elia added Dodonpachi and Guwange to the Cave driver. Nicola Salmoria added a clone of The Hustler called Rack 'em Up. Aaron Giles finally fixed the protection issues in Mortal Kombat 2 and NBA Jam, but graphics glitches still remain and sound is not emulated. He also sent in an update to the YMZ280B sound core with much better sound output.
					</p>
					<div class="wippix">
						<img src="wippics/0006/guwa_1.png" alt="Guwange (c) 1999 Cave" width="240" height="320" />
						<img src="wippics/0006/guwa_2.png" alt="The intro of Guwange" width="240" height="320" />
						<img src="wippics/0006/guwa_3.png" alt="The intro of Guwange" width="240" height="320" />
						<img src="wippics/0006/guwa_4.png" alt="The gameplay of Guwange" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/ddon_1.png" alt="Dodonpachi (c) 1997 Cave" width="240" height="320" />
						<img src="wippics/0006/ddon_2.png" alt="The intro of Dodonpachi" width="240" height="320" />
						<img src="wippics/0006/ddon_3.png" alt="The intro of Dodonpachi" width="240" height="320" />
						<img src="wippics/0006/ddon_4.png" alt="The gameplay of Dodonpachi" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/rack_1.png" alt="Rack 'em Up (c) 1987 Konami" width="224" height="256" />
						<img src="wippics/0006/rack_2.png" alt="The gameplay of Rack 'em Up" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-26</h2>
					<p>
					CAB added compressed PCM playback to the C140 core and did some cleanups. Phil Stroffolino sent in a preliminary Namco NA-1 driver, which supports Cosmo Gang the Puzzle, Tinkle Pit and Emeraldia as nearly playable games.
					</p>
					<div class="wippix">
						<img src="wippics/0006/cgan_1.png" alt="Cosmo Gang the Puzzle (c) 1992 Namco" width="288" height="224" />
						<img src="wippics/0006/cgan_2.png" alt="The gameplay of Cosmo Gang the Puzzle" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/emer_1.png" alt="Emeraldia (c) 199? Namco" width="288" height="224" />
						<img src="wippics/0006/emer_2.png" alt="The gameplay of Emeraldia" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/tink_1.png" alt="Tinkle Pit (c) 1993 Namco" width="288" height="224" />
						<img src="wippics/0006/tink_2.png" alt="The gameplay of Tinkle Pit" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-25</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed the Pokey sound core, and Tempest sounds a bit better now. E. Watanabe fixed the ADPCM sound in the Tecmo16 driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-24</h2>
					<p>
					E. Watanabe submitted a Tecmo16 driver, which supports Ganbare Ginkun and Final Star Force. Nicola Salmoria fixed some graphics glitches in the Tecmo16 driver. Mike Coates fixed some ASM 68k core bugs.
					</p>
					<div class="wippix">
						<img src="wippics/0006/fsta_1.png" alt="Final Star Force (c) 1992 Tecmo" width="224" height="256" />
						<img src="wippics/0006/fsta_2.png" alt="The gameplay of Final Star Force" width="224" height="256" />
						<img src="wippics/0006/fsta_3.png" alt="The gameplay of Final Star Force" width="224" height="256" />
						<img src="wippics/0006/fsta_4.png" alt="The gameplay of Final Star Force" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/gink_1.png" alt="Ganbare Ginkun (c) 1995 Tecmo" width="256" height="224" />
						<img src="wippics/0006/gink_2.png" alt="The intro of Ganbare Ginkun" width="256" height="224" />
						<img src="wippics/0006/gink_3.png" alt="The intro of Ganbare Ginkun" width="256" height="224" />
						<img src="wippics/0006/gink_4.png" alt="The gameplay of Ganbare Ginkun" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-23</h2>
					<p>
					Gerardo Oporto fixed a lot of dip switches. Hans de Goede fixed some compilation problems on different platforms.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-22</h2>
					<p>
					Aaron Giles sent in a preliminary YMZ280B sound core, adding sound to Dangun Feveron, ESP Ra.De. and Uo Poko.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-21</h2>
					<p>
					Karl Stenerud and Mike Coates fixed some problems in the 68k cores.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-20</h2>
					<p>
					Bryan McPhail fixed some YM2151/OKIM6295 sound balance problems in several drivers.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-19</h2>
					<p>
					Aaron Giles added a new Blasteroids romset, which replaces the rocks with designer Ed Rotberg's head under certain circumstances.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-18</h2>
					<p>
					Aaron Giles added a new Cyberball romset.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-17</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed the cycle counts in 8080A/8085 CPU cores. Hans de Goede fixed a small bug in the Smash TV driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-16</h2>
					<p>
					David Graves and Brad Oliver submitted yet another Taito F2 driver update, and now Ninja Kids works. He also sent in a cheat system update, adding the search capability.
					</p>
					<div class="wippix">
						<img src="wippics/0006/ninj_1.png" alt="Ninja Kids (c) 1990 Taito" width="320" height="224" />
						<img src="wippics/0006/ninj_2.png" alt="The intro of Ninja Kids" width="320" height="224" />
						<img src="wippics/0006/ninj_3.png" alt="The intro of Ninja Kids" width="320" height="224" />
						<img src="wippics/0006/ninj_4.png" alt="The gameplay of Ninja Kids" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-15</h2>
					<p>
					A small bug in the M6809 core was squished, fixing some CoCo 3 program bug on the MESS side.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-14</h2>
					<p>
					John Dickson fixed a few graphics glitches in I, Robot.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-13</h2>
					<p>
					Jarek Burczynski added Hit the Ice, Puzzle Bobble, Quiz Sekai wa SHOW by shobai and Rambo 3 to the Taito-B driver. Nicola Salmoria fixed the sprite zooming code in the Taito-B driver.
					</p>
					<div class="wippix">
						<img src="wippics/0006/hiti_1.png" alt="Hit the Ice (c) 1990 Williams" width="320" height="224" />
						<img src="wippics/0006/hiti_2.png" alt="The gameplay of Hit the Ice" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/puzb_1.png" alt="Puzzle Bobble (c) 1994 Taito" width="320" height="224" />
						<img src="wippics/0006/puzb_2.png" alt="The gameplay of Puzzle Bobble" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/qzsh_1.png" alt="Quiz Sekai wa SHOW by shobai (c) 1994 Taito" width="320" height="224" />
						<img src="wippics/0006/qzsh_2.png" alt="The gameplay of Quiz Sekai wa SHOW by shobai" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/ramb_1.png" alt="Rambo 3 (c) 1989 Taito" width="320" height="224" />
						<img src="wippics/0006/ramb_2.png" alt="The gameplay of Rambo 3" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-12</h2>
					<p>
					Takahiro Nogi sent in a preliminary driver for Mag Max, however it still has some graphics glitches. Kieron Wilkinson added the Tournament Arkanoid romset to the Arkanoid driver. Preliminary Super Dodgeball and China Gate drivers were submitted, but they lack minor things like controls ;-(
					</p>
					<div class="wippix">
						<img src="wippics/0006/tark_1.png" alt="Tournament Arkanoid (c) 1987 Taito" width="224" height="256" />
						<img src="wippics/0006/tark_2.png" alt="The gameplay of Tournament Arkanoid" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/magm_1.png" alt="Mag Max (c) 1985 Nichibutsu" width="256" height="224" />
						<img src="wippics/0006/magm_2.png" alt="The attract mode of Mag Max" width="256" height="224" />
						<img src="wippics/0006/magm_3.png" alt="The intro of Mag Max" width="256" height="224" />
						<img src="wippics/0006/magm_4.png" alt="The gameplay of Mag Max" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-11</h2>
					<p>
					David Graves and Brad Oliver improved the Taito F2 driver, but it doesn't yet have any new working games.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-10</h2>
					<p>
					Zsolt Vasvari converted some drivers to the new flipscreen handling API.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-09</h2>
					<p>
					Aaron Giles fixed the Williams 34010 games, Zwackery graphics and he cleaned up a few drivers.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-08</h2>
					<p>
					Zsolt Vasvari simplified the flipscreen handling. Luca Elia sent in a driver for Sky Fox / Exerizer. Aaron Giles did some cleanup on the Exidy driver. Gerardo Oporto fixed some dipswitch settings.
					</p>
					<div class="wippix">
						<img src="wippics/0006/skyf_1.png" alt="Sky Fox (c) 1987 Jaleco" width="224" height="320" />
						<img src="wippics/0006/exer_1.png" alt="Exerizer (c) 1987 Jaleco" width="224" height="320" />
						<img src="wippics/0006/skyf_2.png" alt="The intro of Sky Fox" width="224" height="320" />
						<img src="wippics/0006/skyf_3.png" alt="The gameplay of Sky Fox" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-07</h2>
					<p>
					Paul Leaman sent in a YM2413 update with proper frequency calculations.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-06</h2>
					<p>
					Zsolt Vasvari sent in a driver for Hana Awase. Jarek Burczynski fixed a zoomed sprites bug in 16bpp modes. Phil Stroffolino sent yet another Grand Champion update with graphics fixes and preliminary collision detection working. Nicola Salmoria fixed Victory from crashing.
					</p>
					<div class="wippix">
						<img src="wippics/0006/grch_1.png" alt="Grand Champion (c) 1981 Taito" width="224" height="256" />
						<img src="wippics/0006/grch_2.png" alt="The intro of Grand Champion" width="224" height="256" />
						<img src="wippics/0006/grch_3.png" alt="The intro of Grand Champion" width="224" height="256" />
						<img src="wippics/0006/grch_4.png" alt="The gameplay of Grand Champion" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0006/hana_1.png" alt="Hana Awase (c) 1982 Seta" width="240" height="256" />
						<img src="wippics/0006/hana_2.png" alt="The intro of Hana Awase" width="240" height="256" />
						<img src="wippics/0006/hana_3.png" alt="The gameplay of Hana Awase" width="240" height="256" />
						<img src="wippics/0006/hana_4.png" alt="The gameplay of Hana Awase" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-05</h2>
					<p>
					Paul Leaman added clone romsets of Pang!3 and Warriors of Fate to the CPS-1 driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-4</h2>
					<p>
					Aaron Giles added another Rescue Raider romset to the Bally/Sente driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-06-03</h2>
					<p>
					Sebastien Monassa sent in a driver for Video Pinball.
					</p>
					<div class="wippix">
						<img src="wippics/0006/vide_1.png" alt="Video Pinball (c) 1979 Atari" width="312" height="360" />
						<img src="wippics/0006/vide_2.png" alt="The gameplay of Video Pinball" width="312" height="360" />
					</div>
				</div>

				<div class="row">
					<h2>2000-06-02</h2>
					<p>
					Mike Coates added Exodus (which is the original version of Red UFO) to the Galaxian driver. Aaron Giles sent in a Star Fire / Fire One update, fixing more of the graphics glitches, and he sent in an Exidy sound system update. Jarek Burczynski fixed another SEAL sound bug.
					</p>
				</div>

				<div class="rowlast">
					<h2>2000-06-01</h2>
					<p>
					Mathis Rosenhauer fixed the sprites in Hole Land. Phil Stroffolino sent in an update for Grand Champion, fixing graphics and other stuff.
					</p>
					<div class="wippix">
						<img src="wippics/0006/hole_1.png" alt="Hole Land (c) 1984 Tecfri" width="256" height="224" />
						<img src="wippics/0006/hole_2.png" alt="The gameplay of Hole Land" width="256" height="224" />
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
