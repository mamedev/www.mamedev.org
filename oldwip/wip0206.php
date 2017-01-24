<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>June 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-06-30</h2>
					<p>
					smf fixed the random number emulation in the Neo Geo driver thanks to information from Razoola. SUZ fixed a coin lockout bug in the Galaga driver, and added explosion sound to the startup. Quench fixed a few things in the Twin Cobra driver. David Haywood added Bubble 2000 to the Afega driver.
					</p>
					<div class="wippix">
						<img src="wippics/0206/bubl_1.png" alt="Bubble 2000 (c) 1998 Tuning" width="256" height="224" />
						<img src="wippics/0206/bubl_2.png" alt="The intro of Bubble 2000" width="256" height="224" />
						<img src="wippics/0206/bubl_3.png" alt="The gameplay of Bubble 2000" width="256" height="224" />
						<img src="wippics/0206/bubl_4.png" alt="The gameplay of Bubble 2000" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-29</h2>
					<p>
					Zsolt Vasvari added the steering wheel input to Car Polo and improved the emulation of the rest of the hardware. Stephane Humbert fixed the inputs and DIP switches in the Equites driver, and Bryan McPhail added a non-Sega licensed version to it. Nathan Woods submitted a fix for a timing bug in the M6809 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-28</h2>
					<p>
					Nicola Salmoria adjusted the Neo Geo raster effects emulation thanks to information from Razoola. Stephane Humbert fixed the inputs and DIP switch settings in the 4 Fun in 1 driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-27</h2>
					<p>
					David Haywood cleaned up and re-submitted the 4 Fun in 1 bootleg of various games to the Galaxian driver.
					</p>
					<div class="wippix">
						<img src="wippics/0206/4in1_1.png" alt="4 Fun in 1 (c) 1981 Armenia" width="224" height="256" />
						<img src="wippics/0206/4in1_2.png" alt="The intro of 4 Fun in 1" width="224" height="256" />
						<img src="wippics/0206/4in1_3.png" alt="The gameplay of 4 Fun in 1" width="224" height="256" />
						<img src="wippics/0206/4in1_4.png" alt="The gameplay of 4 Fun in 1" width="224" height="256" />
						<img src="wippics/0206/4in1_5.png" alt="The gameplay of 4 Fun in 1" width="224" height="256" />
						<img src="wippics/0206/4in1_6.png" alt="The gameplay of 4 Fun in 1" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-26</h2>
					<p>
					Zsolt Vasvari added a missing ROM to The Glob driver. Ron Fries fixed a small typo in the input remapping system. Paul Priest fixed Cloud 9 from crashing. Acho A. Tang added the missing Equites ROMs to the driver to fix the missing graphics.
					</p>
					<div class="wippix">
						<img src="wippics/0206/equi_3.png" alt="The gameplay of Equites" width="208" height="256" />
						<img src="wippics/0206/equi_4.png" alt="The gameplay of Equites" width="208" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-25</h2>
					<p>
					Acho A. Tang fixed a small bug in the High Voltage and Splendor Blast graphics emulation, speeding them up about 25%. David Haywood added another Space Panic clone ROM set.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-24</h2>
					<p>
					Jarek Burczynski added sound to Halley's Comet, but it isn't otherwise improved.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-23</h2>
					<p>
					Acho A. Tang submitted drivers for Equites, Bull Fighter, The Koukouyakyuh, Splendor Blast and High Voltage. They are all playable and have sound, though the MCU emulation is not complete so there may be gameplay errors. Acho A. Tang also added sound and improved the colors in HAL21, fixed a few graphics glitches in Labyrinth Runner, Fast Lane and Combat School, and he submitted an update to the i8085 core, fixing the interrupt system.
					</p>
					<div class="wippix">
						<img src="wippics/0206/equi_1.png" alt="Equites (c) 1984 Alpha Denshi" width="208" height="256" />
						<img src="wippics/0206/equi_2.png" alt="The gameplay of Equites" width="208" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/bull_1.png" alt="Bull Fighter (c) 1984 Alpha Denshi" width="208" height="256" />
						<img src="wippics/0206/bull_2.png" alt="The gameplay of Bull Fighter" width="208" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/kouy_1.png" alt="The Koukouyakyuh (c) 1985 Alpha Denshi" width="256" height="208" />
						<img src="wippics/0206/kouy_2.png" alt="The gameplay of The Koukouyakyuh" width="256" height="208" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/sple_1.png" alt="Splendor Blast (c) 1985 Alpha Denshi" width="256" height="192" />
						<img src="wippics/0206/sple_2.png" alt="The gameplay of Splendor Blast" width="256" height="192" />
						<img src="wippics/0206/sple_3.png" alt="The gameplay of Splendor Blast" width="256" height="192" />
						<img src="wippics/0206/sple_4.png" alt="The gameplay of Splendor Blast" width="256" height="192" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/hvol_1.png" alt="High Voltage (c) 1985 Alpha Denshi" width="256" height="192" />
						<img src="wippics/0206/hvol_2.png" alt="The gameplay of High Voltage" width="256" height="192" />
						<img src="wippics/0206/hvol_3.png" alt="The gameplay of High Voltage" width="256" height="192" />
						<img src="wippics/0206/hvol_4.png" alt="The gameplay of High Voltage" width="256" height="192" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-22</h2>
					<p>
					Acho A. Tang fixed a few more problems in the Namco System 86 driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-21</h2>
					<p>
					Acho A. Tang fixed the sprite lag in Namco System 86 and System 1 drivers. Nicola Salmoria fixed the colors in Battle Cross.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-20</h2>
					<p>
					David Haywood resubmitted a Pac-Man bootleg. Zsolt Vasvari added emulation for a 74148 chip which will be needed for proper emulation of Car Polo.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-19</h2>
					<p>
					David Widel added two new versions of Piranha to the Pac-Man driver. Stephane Humbert fixed the inputs and DIP switch settings in the alpha68k driver. Jarek Burczynski fixed a small graphics glitch in the Tube Panic rotated sprites. David Haywood added an alternate harder version of Space Panic. Quench fixed the colors in Gulf War 2. smf merged the various input system updates.
					</p>
					<div class="wippix">
						<img src="wippics/0206/pir2_1.png" alt="Piranha (c) 1981 GL" width="224" height="288" />
						<img src="wippics/0206/pir2_2.png" alt="The gameplay of Piranha" width="224" height="288" />
						<img src="wippics/0206/pir3_1.png" alt="Piranha (c) 1981 GL" width="224" height="288" />
						<img src="wippics/0206/pir3_2.png" alt="The gameplay of Piranha" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-18</h2>
					<p>
					Nicola Salmoria added the color PROMs to Dynamic Ski but the colors may still be incorrect. HobbesAtPlay submitted a patch to add saving the NVRAM in Tri-Sports. Acho A. Tang improved the random number simulation in Splatterhouse. Robin Merrill submitted a patch to allow mapping of analog joystick inputs and fixed a bug regarding pedal inputs. Zsolt Vasvari sent in a work-in-progress driver for Car Polo, which is missing collision detection and steering inputs. David Haywood added Gulf War 2 to the Twin Cobra driver.
					</p>
					<div class="wippix">
						<img src="wippics/0206/carp_1.png" alt="Car Polo (c) 1977 Exidy" width="240" height="256" />
						<img src="wippics/0206/carp_2.png" alt="The intro of Car Polo" width="240" height="256" />
						<img src="wippics/0206/carp_3.png" alt="The gameplay of Car Polo" width="240" height="256" />
						<img src="wippics/0206/carp_4.png" alt="The gameplay of Car Polo" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/gulf_1.png" alt="Gulf War 2 (c) 1991 Comad" width="240" height="320" />
						<img src="wippics/0206/gulf_2.png" alt="The attract mode of Gulf War 2" width="240" height="320" />
						<img src="wippics/0206/gulf_3.png" alt="The gameplay of Gulf War 2" width="240" height="320" />
						<img src="wippics/0206/gulf_4.png" alt="The gameplay of Gulf War 2" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-17</h2>
					<p>
					Acho A. Tang added Bakutotsu Kijuutei to the Namco System 1 driver and fixed a lot of bugs in it. Mike Haaland added the original US ROM set of Donkey Kong which includes the ladder trick. David Haywood sent in a very preliminary driver for Space Bugger, however it crashes when starting the game.
					</p>
					<div class="wippix">
						<img src="wippics/0206/baku_1.png" alt="Bakutotsu Kijuutei (c) 1988 Namco" width="288" height="224" />
						<img src="wippics/0206/baku_2.png" alt="The intro of Bakutotsu Kijuutei" width="288" height="224" />
						<img src="wippics/0206/baku_3.png" alt="The gameplay of Bakutotsu Kijuutei" width="288" height="224" />
						<img src="wippics/0206/baku_4.png" alt="The gameplay of Bakutotsu Kijuutei" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/sbug_1.png" alt="Space Bugger (c) 1981 GAT" width="256" height="512" />
						<img src="wippics/0206/sbug_2.png" alt="The intro of Space Bugger" width="256" height="512" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-16</h2>
					<p>
					MASH added Dingo, and Zsolt Vasvari cleaned it up. David Haywood resubmitted some old clones.
					</p>
					<div class="wippix">
						<img src="wippics/0206/ding_1.png" alt="Dingo (c) 1983 Ashby" width="224" height="256" />
						<img src="wippics/0206/ding_2.png" alt="The intro of Dingo" width="224" height="256" />
						<img src="wippics/0206/ding_3.png" alt="The gameplay of Dingo" width="224" height="256" />
						<img src="wippics/0206/ding_4.png" alt="The gameplay of Dingo" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-15</h2>
					<p>
					Zsolt Vasvari sent in a driver for Clay Shoot, but sound isn't emulated. Brad Oliver fixed a few more bugs that caused problems on the Mac side.
					</p>
					<div class="wippix">
						<img src="wippics/0206/clay_1.png" alt="Clay Shoot (c) 1979 Allied Leisure" width="240" height="176" />
						<img src="wippics/0206/clay_2.png" alt="The intro of Clay Shoot" width="240" height="176" />
						<img src="wippics/0206/clay_3.png" alt="The gameplay of Clay Shoot" width="240" height="176" />
						<img src="wippics/0206/clay_4.png" alt="The gameplay of Clay Shoot" width="240" height="176" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-14</h2>
					<p>
					Bryan McPhail updated a few more drivers for the light gun support, and changed the order of mouse buttons.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-13</h2>
					<p>
					Bryan McPhail submitted a major update to the input system, adding support for light guns. Sean Young submitted Fabio R. Schmidlin's improved YM2413 sound chip emulator. Zsolt Vasvari merged the Lasso and Pinbo drivers. Robin Merrill fixed a small omission in -listinfo.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-12</h2>
					<p>
					Stephane Humbert fixed the inputs in Warrior Blade. Nicola Salmoria improved the US Games driver, making the other games playable. Quench submitted an update to the toaplan2 driver which fixes a few bugs and makes Battle Bakraid playable. smf fixed the sounds in Rampart.
					</p>
					<div class="wippix">
						<img src="wippics/0206/bbak_1.png" alt="Battle Bakraid (c) 1999 Raizing" width="240" height="320" />
						<img src="wippics/0206/bbak_2.png" alt="The gameplay of Battle Bakraid" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/USG152_1.png" alt="US Games (c) 1991 US Games" width="400" height="248" />
						<img src="wippics/0206/USG152_2.png" alt="The gameplay of US Games" width="400" height="248" />
						<img src="wippics/0206/USG252_1.png" alt="US Games (c) 1992 US Games" width="400" height="248" />
						<img src="wippics/0206/USG252_2.png" alt="The gameplay of US Games" width="400" height="248" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-11</h2>
					<p>
					Zsolt Vasvari added Net Wars to the Espial driver. Karl Stenerud updated the C 68k core to emulate address error exceptions. Ian Patterson sent in a small bug fix to the cheat engine. Aaron Giles fixed a bug in the new artwork system and added another ROM set to the Dribbling driver. smf sent in an update to the DOS version. David Haywood and Zsolt Vasvari fixed some graphics glitches in Pinbo.
					</p>
					<div class="wippix">
						<img src="wippics/0206/netw_1.png" alt="Net Wars (c) 1983 Orca" width="224" height="256" />
						<img src="wippics/0206/netw_2.png" alt="The gameplay of Net Wars" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-10</h2>
					<p>
					Aaron Giles sent in a driver for Dribbling, improved Inferno to a point where it is now playable and he fixed the clock speeds in some games that use the S2650 CPU. Jarek Burczynski fixed the backgrounds and sprites in Tube Panic and Roller Jammer. Brad Oliver fixed bugs in the Revolution X driver and Atari RLE decoding that affected MacMAME.
					</p>
					<div class="wippix">
						<img src="wippics/0206/tube_1.png" alt="Tube Panic (c) 1984 Nichibutsu" width="256" height="224" />
						<img src="wippics/0206/tube_2.png" alt="The gameplay of Tube Panic" width="256" height="224" />
						<img src="wippics/0206/tube_3.png" alt="The gameplay of Tube Panic" width="256" height="224" />
						<img src="wippics/0206/tube_4.png" alt="The gameplay of Tube Panic" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/rjam_1.png" alt="Roller Jammer (c) 1984 Nichibutsu" width="256" height="224" />
						<img src="wippics/0206/rjam_2.png" alt="The intro of Roller Jammer" width="256" height="224" />
						<img src="wippics/0206/rjam_3.png" alt="The gameplay of Roller Jammer" width="256" height="224" />
						<img src="wippics/0206/rjam_4.png" alt="The gameplay of Roller Jammer" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/drib_1.png" alt="Dribbling (c) 1983 Olympia" width="256" height="216" />
						<img src="wippics/0206/drib_2.png" alt="The intro of Dribbling" width="256" height="216" />
						<img src="wippics/0206/drib_3.png" alt="The gameplay of Dribbling" width="256" height="216" />
						<img src="wippics/0206/drib_4.png" alt="The gameplay of Dribbling" width="256" height="216" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-09</h2>
					<p>
					Brad Oliver fixed a small logging problem. Stefan Jokisch added Monte Carlo to the Fire Truck driver.
					</p>
					<div class="wippix">
						<img src="wippics/0206/mont_1.png" alt="Monte Carlo (c) 1979 Atari" width="240" height="320" />
						<img src="wippics/0206/mont_2.png" alt="The gameplay of Monte Carlo" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-08</h2>
					<p>
					Brad Oliver fixed Battle Garegga in MacMAME. Phil Stroffolino sent in another small update to Halley's Comet.
					</p>
					<div class="wippix">
						<img src="wippics/0206/hall_1.png" alt="Halley's Comet (c) 1986 Taito" width="256" height="256" />
						<img src="wippics/0206/hall_2.png" alt="The test mode of Halley's Comet" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-07</h2>
					<p>
					Phil Stroffolino sent in a preliminary Halley's Comet driver that works up to the test mode. Paul Priest fixed cchasm1 from crashing at startup. Aaron Giles fixed a problem with the tilemaps which could cause crashes.
					</p>
				</div>

				<div class="row">
					<h2>2002-06-06</h2>
					<p>
					David Haywood sent in a very preliminary driver for U.S. Games multigame systems, and Nicola Salmoria fixed the colors and sound in them. David Haywood also added Legion to the Terra Force / Armed Formation driver, but it has various graphics glitches. Acho A. Tang cleaned up the alpha68k driver and fixed the colors in The Next Space. Aaron Giles fixed some more artwork bugs. Paul Priest fixed a crash in the Mad Motor driver. MASH added a few clones.
					</p>
					<div class="wippix">
						<img src="wippics/0206/legi_1.png" alt="Legion (c) 1987 Nichibutsu" width="288" height="224" />
						<img src="wippics/0206/legi_2.png" alt="The attract mode of Legion" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/supe_1.png" alt="Super Ten (c) 1988 U.S. Games" width="512" height="256" />
						<img src="wippics/0206/supe_2.png" alt="The intro of Super Ten" width="512" height="256" />
						<img src="wippics/0206/supe_3.png" alt="The gameplay of Super Ten" width="512" height="256" />
						<img src="wippics/0206/supe_4.png" alt="The gameplay of Super Ten" width="512" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/casi_1.png" alt="Super Duper Casino (c) 1987 U.S. Games" width="512" height="256" />
						<img src="wippics/0206/casi_2.png" alt="The intro of Super Duper Casino" width="512" height="256" />
						<img src="wippics/0206/casi_3.png" alt="The gameplay of Super Duper Casino" width="512" height="256" />
						<img src="wippics/0206/casi_4.png" alt="The gameplay of Super Duper Casino" width="512" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-05</h2>
					<p>
					Robin Merrill submitted an improvement to the input support that allows remapping of the analog joystick inputs and it also fixes a bug with analog joysticks. Stephane Humbert updated DIP switches and inputs in various drivers. Zsolt Vasvari sent in a driver for Talbot which works up to the demo mode but then crashes due to unemulated protection, so it's not playable. Jarek Burczynski added a new opcode to the M6800/NSC8105 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0206/talb_1.png" alt="Talbot (c) 1982 Volt" width="224" height="256" />
						<img src="wippics/0206/talb_2.png" alt="The attract mode of Talbot" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-04</h2>
					<p>
					Stephane Humbert fixed the DIP switch settings in the Air Buster driver. Nicola Salmoria added zoomed tilemaps to the Macross Plus driver, but there are still some problems. Aaron Giles fixed several artwork support bugs. Uki submitted a driver for Kiki Ippatsu Mayumi-chan. David Haywood and Bryan McPhail added Jump Kids to the Tumble Pop driver. Bryan McPhail also added The Next Space to the alpha68k driver. MASH added Woodpecker to the Pacman driver and Alpha Fighter / Head On to the VIC Dual driver, but Woodpecker doesn't work due to a missing ROM.
					</p>
					<div class="wippix">
						<img src="wippics/0206/jump_1.png" alt="Jump Kids (c) 1993 Comad" width="320" height="240" />
						<img src="wippics/0206/jump_2.png" alt="The intro of Jump Kids" width="320" height="240" />
						<img src="wippics/0206/jump_3.png" alt="The gameplay of Jump Kids" width="320" height="240" />
						<img src="wippics/0206/jump_4.png" alt="The gameplay of Jump Kids" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/tnex_1.png" alt="The Next Space (c) 1989 SNK" width="224" height="256" />
						<img src="wippics/0206/tnex_2.png" alt="The intro of The Next Space" width="224" height="256" />
						<img src="wippics/0206/tnex_3.png" alt="The gameplay of The Next Space" width="224" height="256" />
						<img src="wippics/0206/tnex_4.png" alt="The gameplay of The Next Space" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/mayu_1.png" alt="Kiki Ippatsu Mayumi-chan (c) 1988 Victory" width="480" height="448" />
						<img src="wippics/0206/mayu_2.png" alt="The intro of Kiki Ippatsu Mayumi-chan" width="480" height="448" />
						<img src="wippics/0206/mayu_3.png" alt="The intro of Kiki Ippatsu Mayumi-chan" width="480" height="448" />
						<img src="wippics/0206/mayu_4.png" alt="The gameplay of Kiki Ippatsu Mayumi-chan" width="480" height="448" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-03</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller added Inferno to the Meadows driver, but it's not playable due to incomplete controls. Brian A. Troha added X-Day 2 to the Namco NA-1/2 driver, but it has a lot of graphics bugs and is not playable. Bernd Wiebelt fixed verifying samples and updated the documents. Bryan McPhail sent in a driver for Beast Busters and Mechanized Attack. smf submitted a major patch to the DOS version, bringing it up to date with the core changes. Nicola Salmoria fixed the colors in Quiz Sailor Moon. MASH submitted clone ROMs to two drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0206/bbus_1.png" alt="Beast Busters (c) 1989 SNK" width="256" height="224" />
						<img src="wippics/0206/bbus_2.png" alt="The intro of Beast Busters" width="256" height="224" />
						<img src="wippics/0206/bbus_3.png" alt="The intro of Beast Busters" width="256" height="224" />
						<img src="wippics/0206/bbus_4.png" alt="The gameplay of Beast Busters" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/mech_1.png" alt="Mechanized Attack (c) 1989 SNK" width="256" height="224" />
						<img src="wippics/0206/mech_2.png" alt="The intro of Mechanized Attack" width="256" height="224" />
						<img src="wippics/0206/mech_3.png" alt="The intro of Mechanized Attack" width="256" height="224" />
						<img src="wippics/0206/mech_4.png" alt="The gameplay of Mechanized Attack" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/quiz_1.png" alt="Quiz Sailor Moon (c) 1997 Banpresto" width="384" height="224" />
						<img src="wippics/0206/quiz_2.png" alt="The intro of Quiz Sailor Moon" width="384" height="224" />
						<img src="wippics/0206/quiz_3.png" alt="The intro of Quiz Sailor Moon" width="384" height="224" />
						<img src="wippics/0206/quiz_4.png" alt="The intro of Quiz Sailor Moon" width="384" height="224" />
						<img src="wippics/0206/quiz_5.png" alt="The gameplay of Quiz Sailor Moon" width="384" height="224" />
						<img src="wippics/0206/quiz_6.png" alt="The gameplay of Quiz Sailor Moon" width="384" height="224" />
						<img src="wippics/0206/quiz_7.png" alt="The gameplay of Quiz Sailor Moon" width="384" height="224" />
						<img src="wippics/0206/quiz_8.png" alt="The gameplay of Quiz Sailor Moon" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/xday_1.png" alt="X-Day 2 (c) 1995 Namco" width="288" height="224" />
						<img src="wippics/0206/xday_2.png" alt="The attract mode of X-Day 2" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-06-02</h2>
					<p>
					Zsolt Vasvari added Red Robin to the Fast Freddie driver. Ian Patterson fixed a bug in changing sound volume while paused. Paul Priest fixed a few things in the Psikyo SH-2 alpha blending support. David Haywood fixed the colors in Dragonball Z 2.
					</p>
					<div class="wippix">
						<img src="wippics/0206/dbz2_5.png" alt="Dragonball Z 2 (c) 1994 Banpresto" width="512" height="256" />
						<img src="wippics/0206/dbz2_6.png" alt="The gameplay of Dragonball Z 2" width="512" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/redr_1.png" alt="Red Robin (c) 1986 Elettronolo" width="224" height="256" />
						<img src="wippics/0206/redr_2.png" alt="The intro of Red Robin" width="224" height="256" />
						<img src="wippics/0206/redr_3.png" alt="The gameplay of Red Robin" width="224" height="256" />
						<img src="wippics/0206/redr_4.png" alt="The gameplay of Red Robin" width="224" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2002-06-01</h2>
					<p>
					Bernd Wiebelt added configurable vector intensity. R. Belmont submitted a preliminary driver for Run &amp; Gun. Also a driver for Dragonball Z 2 appeared out of thin air. However, the background graphics aren't emulated and there are other problems as well. MASH submitted a few clones to various drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0206/dbz2_1.png" alt="Dragonball Z 2 (c) 1994 Banpresto" width="512" height="256" />
						<img src="wippics/0206/dbz2_2.png" alt="The intro of Dragonball Z 2" width="512" height="256" />
						<img src="wippics/0206/dbz2_3.png" alt="The gameplay of Dragonball Z 2" width="512" height="256" />
						<img src="wippics/0206/dbz2_4.png" alt="The gameplay of Dragonball Z 2" width="512" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0206/rung_1.png" alt="Run &amp; Gun (c) 199? Konami" width="512" height="256" />
						<img src="wippics/0206/rung_2.png" alt="The intro of Run &amp; Gun" width="512" height="256" />
						<img src="wippics/0206/rung_3.png" alt="The gameplay of Run &amp; Gun" width="512" height="256" />
						<img src="wippics/0206/rung_4.png" alt="The gameplay of Run &amp; Gun" width="512" height="256" />
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
