<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>October 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-10-31</h2>
					<p>
					Aaron Giles moved bitmap allocation to the core code as opposed to being in the OS-dependant code. Aaron also fixed Pipe Dream from crashing. Stephane Humbert fixed cocktail mode in Space Zap.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-30</h2>
					<p>
					inside out boy submitted a driver for Popper. It has several little problems but is playable.
					</p>
					<div class="wippix">
						<img src="wippics/0110/popp_1.png" alt="Popper (c) 1983 Omori" width="224" height="264" />
						<img src="wippics/0110/popp_2.png" alt="The gameplay of Popper" width="224" height="264" />
						<img src="wippics/0110/popp_3.png" alt="The gameplay of Popper" width="224" height="264" />
						<img src="wippics/0110/popp_4.png" alt="The gameplay of Popper" width="224" height="264" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-29</h2>
					<p>
					Olivier Galibert added tilemap viewing with the F4 key. Jarek Burczynski sent a driver for Forty-Love, but there are some graphics problems.
					</p>
					<div class="wippix">
						<img src="wippics/0110/40lo_1.png" alt="Forty-Love (c) 1984 Taito" width="256" height="224" />
						<img src="wippics/0110/40lo_2.png" alt="The intro of Forty-Love" width="256" height="224" />
						<img src="wippics/0110/40lo_3.png" alt="The gameplay of Forty-Love" width="256" height="224" />
						<img src="wippics/0110/40lo_4.png" alt="The gameplay of Forty-Love" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-28</h2>
					<p>
					William Kucharski submitted a patch to add cocktail mode to Omega Race. Aaron Giles added Catch 22, a later version of Combat, to the Exidy 440 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-27</h2>
					<p>
					Stephane Humbert added cocktail mode in several games in the Galaxian driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-26</h2>
					<p>
					Olivier Galibert fixed a bug which caused the debugger to crash when using the V60 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-25</h2>
					<p>
					Kale submitted a patch for Captain Commando input ports, adding 4 player support. William Kucharski added flip screen support to the Ninja Gaiden driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-24</h2>
					<p>
					Aaron Giles fixed a bug in scanline rendering which affected Turbo, and he fixed Hard Drivin' from crashing randomly. Aaron also added a debugging feature to help tracing the crashes.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-23</h2>
					<p>
					Aaron Giles added a debugging feature to the Windows version which allows catching of some memory access bugs. William Kucharski submitted a fix for Toy Pop crashing.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-22</h2>
					<p>
					William Kucharski sent in cocktail mode fixes for 1943 and Popeye.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-21</h2>
					<p>
					Jarek Burczynski sent in a MSM5232 sound chip emulator (thanks to CAB), adding music to Fairy Land Story and adding one missing sound effect to Buggy Challenge. Jarek also sent in the Metal Soldier Isaac II driver, which is unplayable due to a missing MCU dump.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-20</h2>
					<p>
					Gerardo Oporto fixed DIP switch settings in the Irem M90 driver. Olivier Galibert fixed a bug which caused the debugger to show wrong values with the V60 CPU core. Bryan McPhail fixed the missing sprites in Mystic Riders. Stefan Jokisch fixed several compilation errors which occurred in Visual C, and sent a project file to use with it.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-19</h2>
					<p>
					Mathis Rosenhauer fixed a copyrozbitmap bug which affected Asteroids Deluxe when using artwork and rotated screen. William Kucharski submitted a truckload of cocktail mode fixes to various drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-18</h2>
					<p>
					Mike Coates added a bootleg version of Scorpion running on Galaxian hardware, but the addition isn't complete yet.
					</p>
					<div class="wippix">
						<img src="wippics/0110/scor_1.png" alt="Scorpion (c) 19?? Dorneer" width="224" height="256" />
						<img src="wippics/0110/scor_2.png" alt="The gameplay of Scorpion" width="224" height="256" />
						<img src="wippics/0110/scor_3.png" alt="The gameplay of Scorpion" width="224" height="256" />
						<img src="wippics/0110/scor_4.png" alt="The gameplay of Scorpion" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-17</h2>
					<p>
					Nicola Salmoria decrypted Spatter, which runs on Sega System 1 hardware.
					</p>
					<div class="wippix">
						<img src="wippics/0110/spat_1.png" alt="Spatter (c) 1984 Sega" width="240" height="224" />
						<img src="wippics/0110/spat_2.png" alt="The intro of Spatter" width="240" height="224" />
						<img src="wippics/0110/spat_3.png" alt="The gameplay of Spatter" width="240" height="224" />
						<img src="wippics/0110/spat_4.png" alt="The gameplay of Spatter" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-16</h2>
					<p>
					Ian Patterson fixed cocktail mode in Space Fury.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-15</h2>
					<p>
					Chack'n fixed some DIP switch settings in the Sega System 1 driver. SUZ updated the Toaplan1 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-14</h2>
					<p>
					Martin M. submitted some changes to various drivers, such as correct input ports and fixed sprites in Mega Zone.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-13</h2>
					<p>
					Gerardo Oporto fixed some DIP switch settings in Irem M107 and M92 drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-12</h2>
					<p>
					Luca Elia added Metamoqester to the Cave driver and fixed missing sprites in the water level of Mazinger Z. Phil Stroffolino fixed the tilemap bug which caused the Green Beret cocktail mode problem.
					</p>
					<div class="wippix">
						<img src="wippics/0110/metm_1.png" alt="Metamoqester (c) 1995 Banpresto" width="384" height="240" />
						<img src="wippics/0110/metm_2.png" alt="The intro of Metamoqester" width="384" height="240" />
						<img src="wippics/0110/metm_3.png" alt="The intro of Metamoqester" width="384" height="240" />
						<img src="wippics/0110/metm_4.png" alt="The gameplay of Metamoqester" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-11</h2>
					<p>
					Luca Elia added Wai-Wai Jockey Gate-In to the Lasso driver, but it may have bad colors.
					</p>
					<div class="wippix">
						<img src="wippics/0110/wwjg_1.png" alt="Wai-Wai Jockey Gate-In (c) 1984 Jaleco" width="240" height="224" />
						<img src="wippics/0110/wwjg_2.png" alt="The intro of Wai-Wai Jockey Gate-In" width="240" height="224" />
						<img src="wippics/0110/wwjg_3.png" alt="The intro of Wai-Wai Jockey Gate-In" width="240" height="224" />
						<img src="wippics/0110/wwjg_4.png" alt="The gameplay of Wai-Wai Jockey Gate-In" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-10</h2>
					<p>
					Quench sent in an update to the Toaplan1 driver, adding two clone ROM sets and fixing a lot of bugs in the graphics emulation.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-09</h2>
					<p>
					Aaron Giles added Star Guards to the MCR3 driver and did some other cleanups and bugfixes. William Kucharski submitted a fix for Xevious cocktail mode.
					</p>
					<div class="wippix">
						<img src="wippics/0110/star_1.png" alt="Star Guards (c) 1987 Bally Midway" width="512" height="480" />
						<img src="wippics/0110/star_2.png" alt="The intro of Star Guards" width="512" height="480" />
						<img src="wippics/0110/star_3.png" alt="The gameplay of Star Guards" width="512" height="480" />
						<img src="wippics/0110/star_4.png" alt="The gameplay of Star Guards" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-08</h2>
					<p>
					Luca Elia added Chameleon to the Lasso driver. Kale submitted a fix for proper joystick support for Block Block.
					</p>
					<div class="wippix">
						<img src="wippics/0110/cham_1.png" alt="Chameleon (c) 1983 Jaleco" width="256" height="223" />
						<img src="wippics/0110/cham_2.png" alt="The intro of Chameleon" width="256" height="223" />
						<img src="wippics/0110/cham_3.png" alt="The gameplay of Chameleon" width="256" height="223" />
						<img src="wippics/0110/cham_4.png" alt="The gameplay of Chameleon" width="256" height="223" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-07</h2>
					<p>
					William Kucharski fixed the Phoenix cocktail mode bug. Phil Stroffolino fixed most of the graphics glitches in the Homedata driver so that Reikai Doushi / Chinese Exorcist is now fully playable.
					</p>
					<div class="wippix">
						<img src="wippics/0110/reik_5.png" alt="Reikai Doushi / Chinese Exorcist (c) 1988 Homedata" width="256" height="224" />
						<img src="wippics/0110/reik_6.png" alt="The intro of Reikai Doushi / Chinese Exorcist" width="256" height="224" />
						<img src="wippics/0110/reik_7.png" alt="The intro of Reikai Doushi / Chinese Exorcist" width="256" height="224" />
						<img src="wippics/0110/reik_8.png" alt="The gameplay of Reikai Doushi / Chinese Exorcist" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-06</h2>
					<p>
					Chack'n fixed the DIP switch settings in Gradius 2. William Kucharski fixed the Galaga explosion sample code to play the sample during bootup as well.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-05</h2>
					<p>
					Chack'n fixed a few driver names and filenames in TNZS and Taito F2 drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-04</h2>
					<p>
					Puzzle De Bowling graphics errors were corrected with a new ROM dump.
					</p>
					<div class="wippix">
						<img src="wippics/0110/pzlb_1.png" alt="Puzzle De Bowling (c) 1999 Nihon System / Moss" width="384" height="240" />
						<img src="wippics/0110/pzlb_2.png" alt="The intro of Puzzle De Bowling" width="384" height="240" />
						<img src="wippics/0110/pzlb_3.png" alt="The intro of Puzzle De Bowling" width="384" height="240" />
						<img src="wippics/0110/pzlb_4.png" alt="The gameplay of Puzzle De Bowling" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-10-03</h2>
					<p>
					Olivier Galibert ported the V60 CPU core originally made by Farfetch'd and R. Belmont to MAME. William Kucharski added cocktail mode support to the Haunted Castle driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-10-02</h2>
					<p>
					Stefan Jokisch fixed a bug in the YM2610 sound chip emulation which caused missing sounds in Chase H.Q. Phil Stroffolino sent a work-in-progress driver for Homedata games such as Reikai Doushi / Chinese Exorcist, and Mahjong Kojinkyouju. However, there are graphics errors and sound is not hooked up yet. Mathis Rosenhauer fixed a Speed Freak bug which affected 16 bit input ports, and he fixed the bug which caused vector games to save incorrect screenshots.
					</p>
					<div class="wippix">
						<img src="wippics/0110/reik_1.png" alt="Reikai Doushi / Chinese Exorcist (c) 1988 Homedata" width="256" height="256" />
						<img src="wippics/0110/reik_2.png" alt="The intro of Reikai Doushi / Chinese Exorcist" width="256" height="256" />
						<img src="wippics/0110/reik_3.png" alt="The intro of Reikai Doushi / Chinese Exorcist" width="256" height="256" />
						<img src="wippics/0110/reik_4.png" alt="The gameplay of Reikai Doushi / Chinese Exorcist" width="256" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2001-10-01</h2>
					<p>
					inside out boy fixed a tilemap bug which occurred when screen size didn't match the tilemap size. Brian A. Troha added the Korean versions of Donpachi and Gunbird.
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
