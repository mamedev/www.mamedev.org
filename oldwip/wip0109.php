<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>September 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-09-30</h2>
					<p>
					Luca Elia sent in a driver for Seta's 2nd generation hardware, supporting Kosodate Quiz My Angel, Kosodate Quiz My Angel 2 and Puzzle De Bowling. Olivier Galibert added support for port-dependent user-configurable keys, for example for changing the fullscreen toggle key.
					</p>
					<div class="wippix">
						<img src="wippics/0109/myan_1.png" alt="Kosodate Quiz My Angel (c) 1996 Namco" width="376" height="240" />
						<img src="wippics/0109/myan_2.png" alt="The intro of Kosodate Quiz My Angel" width="376" height="240" />
						<img src="wippics/0109/myan_3.png" alt="The gameplay of Kosodate Quiz My Angel" width="376" height="240" />
						<img src="wippics/0109/myan_4.png" alt="The gameplay of Kosodate Quiz My Angel" width="376" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0109/mya2_1.png" alt="Kosodate Quiz My Angel 2 (c) 1997 Namco" width="376" height="240" />
						<img src="wippics/0109/mya2_2.png" alt="The intro of Kosodate Quiz My Angel 2" width="376" height="240" />
						<img src="wippics/0109/mya2_3.png" alt="The gameplay of Kosodate Quiz My Angel 2" width="376" height="240" />
						<img src="wippics/0109/mya2_4.png" alt="The gameplay of Kosodate Quiz My Angel 2" width="376" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0109/pzlb_1.png" alt="Puzzle De Bowling (c) 1999 Nihon System / Moss" width="384" height="240" />
						<img src="wippics/0109/pzlb_2.png" alt="The intro of Puzzle De Bowling" width="384" height="240" />
						<img src="wippics/0109/pzlb_3.png" alt="The intro of Puzzle De Bowling" width="384" height="240" />
						<img src="wippics/0109/pzlb_4.png" alt="The gameplay of Puzzle De Bowling" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-29</h2>
					<p>
					Ian Patterson added support for NVRAM modification in the cheat engine, and he fixed a memory violation bug in it as well.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-28</h2>
					<p>
					Stefan Jokisch fixed a graphics bug in Rainbow Islands which affected the secret room on the last island.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-27</h2>
					<p>
					Mathis Rosenhauer added support for artwork that is of different size or position than the game graphics. Chack'n added some clone ROM sets and Rafflesia to the Sega System 1 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0109/rafl_1.png" alt="Rafflesia (c) 1986 Sega" width="224" height="256" />
						<img src="wippics/0109/rafl_2.png" alt="The intro of Rafflesia" width="224" height="256" />
						<img src="wippics/0109/rafl_3.png" alt="The gameplay of Rafflesia" width="224" height="256" />
						<img src="wippics/0109/rafl_4.png" alt="The gameplay of Rafflesia" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-26</h2>
					<p>
					Mathis Rosenhauer fixed the colors in Crazy Rally.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-25</h2>
					<p>
					Bryan McPhail re-added some fixes to the Taito F3 driver. Adam Hourigan fixed the graphics color in Gunfight. SUZ fixed the sprite priority in Circus Charlie.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-24</h2>
					<p>
					Nicola Salmoria added Water Match to the Sega System 1 driver. David Widel provided the correct color PROM for Exerion. Chris Hardy added the Asian version of Pop'n'Pop to the Taito F3 driver. Manuel Abadia fixed Big Karnak, which was broken due to tilemap changes.
					</p>
					<div class="wippix">
						<img src="wippics/0109/wmat_1.png" alt="Water Match (c) 1984 Sega" width="224" height="256" />
						<img src="wippics/0109/wmat_2.png" alt="The intro of Water Match" width="224" height="256" />
						<img src="wippics/0109/wmat_3.png" alt="The intro of Water Match" width="224" height="256" />
						<img src="wippics/0109/wmat_4.png" alt="The gameplay of Water Match" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-23</h2>
					<p>
					Brian A. Troha added quite a few clone ROM sets to various drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-22</h2>
					<p>
					Luca Elia added correct linescroll emulation to the Kaneko16 driver. David Graves fixed a few more graphics problems in the Taito Z driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-21</h2>
					<p>
					Bryan McPhail fixed the DIP switch settings in Prehistoric Isle, and added 3rd and 4th player controls to Ninja Baseball Batman.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-20</h2>
					<p>
					William Kucharski fixed a Space Invaders Deluxe overlay problem.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-19</h2>
					<p>
					Troy Gratton submitted an updated Gottlieb driver with support for Cobra Command, but like Mach 3 and Us vs. Them, the laserdisc backgrounds aren't emulated.
					</p>
					<div class="wippix">
						<img src="wippics/0109/cobr_1.png" alt="Cobra Command (c) 1984 Data East" width="256" height="240" />
						<img src="wippics/0109/cobr_2.png" alt="The gameplay of Cobra Command" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-18</h2>
					<p>
					Jarek Burczynski fixed Metal Soldier Isaac II sound CPU interrupt problem. Yasuhiro Ogawa resubmitted some Taito F3 driver changes by Uki.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-17</h2>
					<p>
					Adam Hourigan added artwork to Boot Hill. Nicola Salmoria implemented correct y zoom for the Neo Geo hardware thanks to help from Miguel Angel Horna, but it causes some problems with games using raster effects. Aaron Giles made the Exidy driver sounds much more accurate.
					</p>
					<div class="wippix">
						<img src="wippics/0109/boot_1.png" alt="Boot Hill (c) 1977 Midway" width="400" height="300" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-16</h2>
					<p>
					Luca Elia added Ultraman Club to the Seta driver. Nicola Salmoria fixed Space Fortress from crashing.
					</p>
					<div class="wippix">
						<img src="wippics/0109/uman_1.png" alt="Ultraman Club (c) 1992 Banpresto" width="384" height="240" />
						<img src="wippics/0109/uman_2.png" alt="The intro of Ultraman Club" width="384" height="240" />
						<img src="wippics/0109/uman_3.png" alt="The gameplay of Ultraman Club" width="384" height="240" />
						<img src="wippics/0109/uman_4.png" alt="The gameplay of Ultraman Club" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-15</h2>
					<p>
					Aaron Giles fixed some problems with 68k CPU interrupts. Andrea Mazzoleni fixed a ROM loading problem which may have caused slow loading or unwanted network accesses.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-14</h2>
					<p>
					Aaron Giles fixed Battler fire buttons and Empire City 1931 / Street Fight which were broken due to the interrupt handling and he fixed the Leland driver graphics which were broken due to the AY8910 changes. Jarek Burczynski sent in some preliminary screenshots of Metal Soldier Isaac II.
					</p>
					<div class="wippix">
						<img src="wippics/0109/msis_1.png" alt="Metal Soldier Isaac II (c) 1985 Taito" width="240" height="256" />
						<img src="wippics/0109/msis_2.png" alt="The intro of Metal Soldier Isaac II" width="240" height="256" />
						<img src="wippics/0109/msis_3.png" alt="The gameplay of Metal Soldier Isaac II" width="240" height="256" />
						<img src="wippics/0109/msis_4.png" alt="The gameplay of Metal Soldier Isaac II" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-13</h2>
					<p>
					Nicola Salmoria fixed the graphics in Crazy Rally, and hooked up the AY8910 sound chip correctly.
					</p>
					<div class="wippix">
						<img src="wippics/0109/crzr_1.png" alt="Crazy Rally (c) 1985 Tecfri" width="224" height="256" />
						<img src="wippics/0109/crzr_2.png" alt="The intro of Crazy Rally" width="224" height="256" />
						<img src="wippics/0109/crzr_3.png" alt="The gameplay of Crazy Rally" width="224" height="256" />
						<img src="wippics/0109/crzr_4.png" alt="The gameplay of Crazy Rally" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-12</h2>
					<p>
					Nicola Salmoria partially decrypted the original program ROMs of King of Fighters '99.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-11</h2>
					<p>
					Jarek Burczynski added the USA version of Volfied. Phil Stroffolino reported some progress with the Namco System 2 driver, specifically the sprites are now perfect but the road is not yet working. David Haywood added an unprotected bootleg of Ichidant-R to the Sega C2 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-10</h2>
					<p>
					David Graves cleaned up the Taito Z graphics emulation and road transparency. Mike Coates added Space Fortress to the CVS driver.
					</p>
					<div class="wippix">
						<img src="wippics/0109/spac_1.png" alt="Space Fortress (c) 1981 Century" width="248" height="256" />
						<img src="wippics/0109/spac_2.png" alt="The intro of Space Fortress" width="248" height="256" />
						<img src="wippics/0109/spac_3.png" alt="The gameplay of Space Fortress" width="248" height="256" />
						<img src="wippics/0109/spac_4.png" alt="The gameplay of Space Fortress" width="248" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-09</h2>
					<p>
					SUZ improved graphics in the Toaplan1 driver. David Graves yet improved the Taito Z road graphics emulation. William Kucharski submitted a bugfix to prevent Shark Attack from crashing. Nicola Salmoria fixed the title screen graphics in Mad Motor.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-08</h2>
					<p>
					David Haywood resubmitted the New York, New York driver originally made by Darren Olafson, and added Waga Seishun no Arcadia to it. David Haywood also added another version of Got-Ya called The Hand. Nicola Salmoria improved the graphics emulation in New York, New York. SUZ added a Xevious bootleg called Battles to the Xevious driver. Phil Stroffolino improved the Namco System21 driver, but it is still far from perfect.
					</p>
					<div class="wippix">
						<img src="wippics/0109/star_1.png" alt="Starblade (c) 1991 Namco" width="496" height="480" />
						<img src="wippics/0109/star_2.png" alt="The intro of Starblade" width="496" height="480" />
						<img src="wippics/0109/star_3.png" alt="The gameplay of Starblade" width="496" height="480" />
						<img src="wippics/0109/star_4.png" alt="The gameplay of Starblade" width="496" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-07</h2>
					<p>
					Jan Tleskac added another version of Rambo 3 to the Taito B driver. Jarek Burczynski added another version of Space Invaders DX to the same driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-06</h2>
					<p>
					Gerardo Oporto fixed DIP switch settings in some Nichibutsu drivers. David Haywood added Typhoon to the Ajax driver and converted the Car Jamboree driver for tilemaps.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-05</h2>
					<p>
					inside out boy submitted a driver for Car Jamboree.
					</p>
					<div class="wippix">
						<img src="wippics/0109/carj_1.png" alt="Car Jamboree (c) 1983 Omori" width="224" height="256" />
						<img src="wippics/0109/carj_2.png" alt="The intro of Car Jamboree" width="224" height="256" />
						<img src="wippics/0109/carj_3.png" alt="The gameplay of Car Jamboree" width="224" height="256" />
						<img src="wippics/0109/carj_4.png" alt="The gameplay of Car Jamboree" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-09-04</h2>
					<p>
					David Graves improved the road colors in Continental Circus. Nicola Salmoria added preliminary sound support to Zaccaria. Mathis Rosenhauer converted all vector games to use the direct RGB modes.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-03</h2>
					<p>
					Mathis Rosenhauer added support for direct RGB modes in the vector graphics functions. Aaron Giles fixed the wrong voice samples being played in Puzzle Bobble 3.
					</p>
				</div>

				<div class="row">
					<h2>2001-09-02</h2>
					<p>
					David Graves added preliminary support for the Taito TC0150ROD road graphics chip used in the Taito Z games, and he also optimized the sprite drawing in Top Speed. Stefan Jokisch improved the C-Chip emulation in Bonze Adventure.
					</p>
				</div>

				<div class="rowlast">
					<h2>2001-09-01</h2>
					<p>
					Mirko Buffoni added support for the Dragon's Lair video. However, it only works with the DVD-ROM version and only in Windows, so inclusion is unlikely.
					</p>
					<div class="wippix">
						<img src="wippics/0109/dlai_1.png" alt="Dragon's Lair (c) 1983 Cinematronics" width="322" height="285" />
						<img src="wippics/0109/dlai_2.png" alt="The gameplay of Dragon's Lair" width="322" height="285" />
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
