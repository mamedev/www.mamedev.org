<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            		
            	<h1>May 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-05-31</h2>
					<p>
					Brad Oliver integrated the Super Space Invaders and Taito F2 drivers. Mike Coates fixed the Zaccaria 2650 games to work with 0.37b3.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-30</h2>
					<p>
					Aaron Giles sent in a driver for Victory.
					</p>
					<div class="wippix">
						<img src="wippics/0005/vict_1.png" alt="Victory (c) 1982 Exidy" width="256" height="256" />
						<img src="wippics/0005/vict_2.png" alt="The intro of Victory" width="256" height="256" />
						<img src="wippics/0005/vict_3.png" alt="The intro of Victory" width="256" height="256" />
						<img src="wippics/0005/vict_4.png" alt="The gameplay of Victory" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-29</h2>
					<p>
					Nicola Salmoria fixed a bug in TRANSPARENCY_COLOR handling, fixing Crazy Climber graphics glitches.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-28</h2>
					<p>
					Karl Stenerud updated the G658C16 CPU core, and sent in a new SPC700 CPU core. Nicola Salmoria finally emulated the graphics smoothing circuitry in Return of the Jedi.
					</p>
					<div class="wippix">
						<img src="wippics/0005/jedi_1.png" alt="Return of the Jedi (c) 1984 Atari" width="296" height="240" />
						<img src="wippics/0005/jedi_2.png" alt="The gameplay of Return of the Jedi" width="296" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-27</h2>
					<p>
					Peter Trauner added Space Beam to the Sky Chuter driver.
					</p>
					<div class="wippix">
						<img src="wippics/0005/spac_1.png" alt="Space Beam (c) 1980 Irem" width="256" height="224" />
						<img src="wippics/0005/spac_2.png" alt="The gameplay of Space Beam" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-26</h2>
					<p>
					Jarek Burczynski added Ashura Blaster to the Taito-B driver. Aaron Giles added two new Quarterback rom sets to the Leland driver.
					</p>
					<div class="wippix">
						<img src="wippics/0005/ashu_1.png" alt="Ashura Blaster (c) 1990 Taito" width="224" height="320" />
						<img src="wippics/0005/ashu_2.png" alt="The gameplay of Ashura Blaster" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-25</h2>
					<p>
					Phil Stroffolino fixed a lot of bugs in Knuckle Joe, but colors are still wrong and there is no sound. Mathis Rosenhauer sent in a preliminary driver for Hole Land, but sprites aren't yet displayed correctly.
					</p>
					<div class="wippix">
						<img src="wippics/0005/hole_1.png" alt="Hole Land (c) 1984 Tecfri" width="256" height="224" />
						<img src="wippics/0005/hole_2.png" alt="The gameplay of Hole Land" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-24</h2>
					<p>
					Aaron Giles sent in a minor Leland update, fixing Alley Master crash and adding some clone romsets. Phil Stroffolino sent in a very preliminary work-in-progress driver for Grand Champion.
					</p>
					<div class="wippix">
						<img src="wippics/0005/grch_1.png" alt="Grand Champion (c) 1981 Taito" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-23</h2>
					<p>
					Zsolt Vasvari added the cloud display to Phantom II in the 8080bw driver, and he added Zero Time to the driver. Luca Elia sent in a driver for Magix. Quench added Batsugun (Special version) romset to the Toaplan2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0005/magi_1.png" alt="Magix (c) 1995 Yun Sung" width="384" height="240" />
						<img src="wippics/0005/magi_2.png" alt="The gameplay of Magix" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-22</h2>
					<p>
					Aaron Giles improved the Exidy sound system, fixed some YM2608 core bugs and he added Hatris to the Pipe Dream driver. Lee Hammerton fixed yet some more G65C816 core bugs. Nicola Salmoria added Play Girls and Play Girls 2 to the Taito-L driver, but only Play Girls 2 works and with graphics glitches. Zsolt Vasvari added another romset of Pac &amp; Pal to the driver.
					</p>
					<div class="wippix">
						<img src="wippics/0005/plgi_1.png" alt="Play Girls 2 (c) 1993 Hot-B" width="224" height="320" />
						<img src="wippics/0005/plgi_2.png" alt="The gameplay of Play Girls 2" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/hatr_1.png" alt="Hatris (c) 1990 Video System" width="352" height="240" />
						<img src="wippics/0005/hatr_2.png" alt="The gameplay of Hatris" width="352" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-21</h2>
					<p>
					Zsolt Vasvari and Mathis Rosenhauer fixed some overlay issues. Bryan McPhail added some clone romsets to the Taito-B system driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-20</h2>
					<p>
					Zsolt Vasvari fixed the colors in Heli Fire, and added cocktail support to it and Sheriff. Nicola Salmoria fixed Return of the Jedi to work in 16bpp modes. Ernesto Corvi sent in a preliminary Knuckle Joe driver - sprites are garbled and there is no sound. Jarek Burczynski fixed some YM2151 bugs and he sent in a Taito-B system driver, with support for Crime City and Rastan Saga 2. Lee Hammerton fixed a G65C816 core disassembly bug.
					</p>
					<div class="wippix">
						<img src="wippics/0005/rast_1.png" alt="Rastan Saga (c) 1988 Taito" width="320" height="224" />
						<img src="wippics/0005/rast_2.png" alt="The intro of Rastan Saga" width="320" height="224" />
						<img src="wippics/0005/rast_3.png" alt="The gameplay of Rastan Saga" width="320" height="224" />
						<img src="wippics/0005/rast_4.png" alt="The gameplay of Rastan Saga" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/crim_1.png" alt="Crime City (c) 1989 Taito" width="320" height="224" />
						<img src="wippics/0005/crim_2.png" alt="The intro of Crime City" width="320" height="224" />
						<img src="wippics/0005/crim_3.png" alt="The gameplay of Crime City" width="320" height="224" />
						<img src="wippics/0005/crim_4.png" alt="The gameplay of Crime City" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/kncl_1.png" alt="Knuckle Joe (c) 1985 Taito" width="240" height="256" />
						<img src="wippics/0005/kncl_2.png" alt="The intro of Knuckle Joe" width="240" height="256" />
						<img src="wippics/0005/kncl_3.png" alt="The intro of Knuckle Joe" width="240" height="256" />
						<img src="wippics/0005/kncl_4.png" alt="The gameplay of Knuckle Joe" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-19</h2>
					<p>
					Aaron Giles improved some of the drawgfx functions, and updated the Leland driver to use the new functionality.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-18</h2>
					<p>
					Karl Stenerud sent in a preliminary G65C816 CPU core. Zsolt Vasvari fixed some bugs in the artwork code.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-17</h2>
					<p>
					Jarek Burczynski added sound support to Jumping. Aaron Giles cleaned up some of the Atari drivers.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-16</h2>
					<p>
					Gerardo Oporto sent in more dip switch fixes. Karl Stenerud fixed some C 68k core bugs and sped it up. Phil Stroffolino fixed some graphics glitches in the Pacific Novelty driver and merged Shark Attack to it.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-15</h2>
					<p>
					Phil Stroffolino fixed the lockups of Mr. F. Lea. Zsolt Vasvari, Mathis Rosenhauer and Al Kossow submitted a big artwork update, with better opacity/translucency support. Aaron Giles finally submitted the Leland driver first started by Paul Leaman, adding the following games: Cerberus, Mayhem 2002, World Series, Alley Master, Danger Zone, Baseball The Season II, Super Baseball Double Play Home Run Derby, Redline Racer, Quarterback, Strike Zone, Viper, John Elway's Team Quarterback, All American Football, Ironman Stewart's Super Off-Road, Ataxx, World Soccer Finals, Pigout and Danny Sullivan's Indy Heat.
					</p>
					<div class="wippix">
						<img src="wippics/0005/offr_1.png" alt="Ironman Stewart's Super Off-Road (c) 1989 Leland" width="320" height="240" />
						<img src="wippics/0005/offr_2.png" alt="The gameplay of Ironman Stewart's Super Off-Road" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/indy_1.png" alt="Danny Sullivan's Indy Heat (c) 1991 Leland" width="320" height="240" />
						<img src="wippics/0005/indy_2.png" alt="The gameplay of Danny Sullivan's Indy Heat" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/pigo_1.png" alt="Pigout (c) 1990 Leland" width="320" height="240" />
						<img src="wippics/0005/pigo_2.png" alt="The gameplay of Pigout" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/atax_1.png" alt="Ataxx (c) 1990 Leland" width="320" height="240" />
						<img src="wippics/0005/atax_2.png" alt="The gameplay of Ataxx" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/wsf_1.png" alt="World Soccer Finals (c) 1990 Leland" width="320" height="240" />
						<img src="wippics/0005/wsf_2.png" alt="The gameplay of World Soccer Finals" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/alle_1.png" alt="Alley Master (c) 1986 Cinematronics" width="240" height="320" />
						<img src="wippics/0005/alle_2.png" alt="The gameplay of Alley Master" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/aafb_1.png" alt="All American Football (c) 1989 Leland" width="240" height="320" />
						<img src="wippics/0005/aafb_2.png" alt="The gameplay of All American Football" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/team_1.png" alt="John Elway's Team Quarterback (c) 1988 Leland" width="240" height="320" />
						<img src="wippics/0005/quar_1.png" alt="Quarterback (c) 1987 Leland" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/dang_1.png" alt="Danger Zone (c) 1986 Cinematronics" width="320" height="240" />
						<img src="wippics/0005/dang_2.png" alt="The gameplay of Danger Zone" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/vipe_1.png" alt="Viper (c) 1988 Leland" width="320" height="240" />
						<img src="wippics/0005/vipe_2.png" alt="The gameplay of Viper" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/redl_1.png" alt="Redline Racer (c) 1987 Tradewest" width="240" height="320" />
						<img src="wippics/0005/redl_2.png" alt="The gameplay of Redline Racer" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/mayh_1.png" alt="Mayhem 2002 (c) 1985 Cinematronics" width="320" height="240" />
						<img src="wippics/0005/mayh_2.png" alt="The gameplay of Mayhem 2002" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/cerb_1.png" alt="Cerberus (c) 1985 Cinematronics" width="320" height="240" />
						<img src="wippics/0005/cerb_2.png" alt="The gameplay of Cerberus" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0005/wser_1.png" alt="World Series: The Season (c) 1985 Cinematronics" width="320" height="240" />
						<img src="wippics/0005/dblp_1.png" alt="Super Baseball Double Play Home Run Derby (c) 1987 Leland" width="320" height="240" />
						<img src="wippics/0005/strk_1.png" alt="Strike Zone (c) 1988 Leland" width="320" height="240" />
						<img src="wippics/0005/base_1.png" alt="Baseball The Season II (c) 1987 Leland" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-14</h2>
					<p>
					Phil Stroffolino sent in a preliminary driver for Mr. F. Lea, but it locks up sometimes and doesn't yet have sound.
					</p>
					<div class="wippix">
						<img src="wippics/0005/mrfl_1.png" alt="Mr. F. Lea (c) 1982 Pacific Novelty" width="256" height="256" />
						<img src="wippics/0005/mrfl_2.png" alt="The intro of Mr. F. Lea" width="256" height="256" />
						<img src="wippics/0005/mrfl_3.png" alt="The gameplay of Mr. F. Lea" width="256" height="256" />
						<img src="wippics/0005/mrfl_4.png" alt="The gameplay of Mr. F. Lea" width="256" height="256" />
						<img src="wippics/0005/mrfl_5.png" alt="The gameplay of Mr. F. Lea" width="256" height="256" />
						<img src="wippics/0005/mrfl_6.png" alt="The gameplay of Mr. F. Lea" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-13</h2>
					<p>
					Aaron Giles sent in another i86 core / Gottlieb drivers update fixing some bugs.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-12</h2>
					<p>
					Nicola Salmoria fixed a drawgfxzoom bug affecting Cisco Heat and F1 GrandPrix Star.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-11</h2>
					<p>
					Aaron Giles sent in some major functionality updates to the 8086, 80186 and 80286 cores. Luca Elia fixed some bugs in Power Instinct.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-10</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller cleaned up some general CPU functions, and Peter Trauner added a m4510 (m6502 variant) CPU core. Zsolt Vasvari improved the 8080bw drivers' overlay support. Gerardo Oporto fixed a whole lot of dip switches definitions.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-09</h2>
					<p>
					Mathis Rosenhauer improved the artwork functions for better transparency support. J&uuml;rgen Buchm&uuml;ller fixed some Z80 core bugs.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-08</h2>
					<p>
					Zsolt Vasvari fixed Desert Gun and Blue Shark, and he sent in a driver for Safari Rally.
					</p>
					<div class="wippix">
						<img src="wippics/0005/safa_1.png" alt="Safari Rally (c) ???? SNK" width="224" height="240" />
						<img src="wippics/0005/safa_2.png" alt="The intro of Safari Rally" width="224" height="240" />
						<img src="wippics/0005/safa_3.png" alt="The gameplay of Safari Rally" width="224" height="240" />
						<img src="wippics/0005/safa_4.png" alt="The gameplay of Safari Rally" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-07</h2>
					<p>
					Nicola Salmoria sent in a driver for Oh My God! Phil Stroffolino fixed the colors and sounds in Munch Mobile.
					</p>
					<div class="wippix">
						<img src="wippics/0005/ohmy_1.png" alt="Oh My God! (c) 1993 Atlus" width="320" height="240" />
						<img src="wippics/0005/ohmy_2.png" alt="The intro of Oh My God!" width="320" height="240" />
						<img src="wippics/0005/ohmy_3.png" alt="The gameplay of Oh My God!" width="320" height="240" />
						<img src="wippics/0005/ohmy_4.png" alt="The gameplay of Oh My God!" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-06</h2>
					<p>
					Luca Elia sent in a driver for Power Instinct.
					</p>
					<div class="wippix">
						<img src="wippics/0005/powe_1.png" alt="Power Instinct (c) 1993 Atlus" width="320" height="224" />
						<img src="wippics/0005/powe_2.png" alt="The intro of Power Instinct" width="320" height="224" />
						<img src="wippics/0005/powe_3.png" alt="The intro of Power Instinct" width="320" height="224" />
						<img src="wippics/0005/powe_4.png" alt="The gameplay of Power Instinct" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-05</h2>
					<p>
					Mike Coates fixed some S2650 core bugs. Mathis Rosenhauer fixed a bug in Space Encounters artwork handling. Nicola Salmoria fixed the Lasso vertical throw bug. Mike Coates sent in drivers for two Zaccaria/Zelco games, Super Invader Attack and The Invaders.
					</p>
					<div class="wippix">
						<img src="wippics/0005/sia2_1.png" alt="Super Invader Attack (c) 19?? Zaccaria/Zelco" width="256" height="240" />
						<img src="wippics/0005/sia2_2.png" alt="The gameplay of Super Invader Attack" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-04</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed again a bug in the 65c02 opcodes. Phil Stroffolino fixed Lasso palette and added cocktail support. Zsolt Vasvari added another 8080bw clone romset. Bryan McPhail sent in a driver for Battle Rangers / Bloody Wolf. Nicola Salmoria added sound to Lasso.
					</p>
					<div class="wippix">
						<img src="wippics/0005/batt_1.png" alt="Battle Rangers (c) 1988 Data East" width="256" height="232" />
						<img src="wippics/0005/batt_2.png" alt="The intro of Battle Rangers" width="256" height="232" />
						<img src="wippics/0005/batt_3.png" alt="The gameplay of Battle Rangers" width="256" height="232" />
						<img src="wippics/0005/batt_4.png" alt="The gameplay of Battle Rangers" width="256" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2000-05-03</h2>
					<p>
					Tatsuyuki Satoh sent in a FM sound core update, with a lot of bugfixes and cleanups. Zsolt Vasvari added another romset of Mariner to the driver, and he added some 8080bw clone romsets.
					</p>
				</div>

				<div class="row">
					<h2>2000-05-02</h2>
					<p>
					Darren Olafson sent in a driver for New York New York, but a part of the background graphics is missing. Zsolt Vasvari sent in a 8080bw driver update with support for another version of Space Chaser and some other fixes, and he also added the B&amp;W version of Space Attack to the vicdual driver.
					</p>
					<div class="wippix">
						<img src="wippics/0005/nyny_1.png" alt="New York New York (c) 1980 Sigma" width="248" height="256" />
						<img src="wippics/0005/nyny_2.png" alt="The intro of New York New York" width="248" height="256" />
						<img src="wippics/0005/nyny_3.png" alt="The gameplay of New York New York" width="248" height="256" />
						<img src="wippics/0005/nyny_4.png" alt="The gameplay of New York New York" width="248" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2000-05-01</h2>
					<p>
					Phil Stroffolino converted the Namco System 2 driver to the new tilemap API. Brad Oliver sent in yet another cheat system update. Aaron Giles improved the EEPROM simulation functions. Mathis Rosenhauer added samples support to Warrior.
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
