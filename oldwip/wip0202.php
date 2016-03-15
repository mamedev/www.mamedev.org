<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>February 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-02-28</h2>
					<p>
					Stephane Humbert fixed DIP switches and inputs in Kuri Kinton and Mermaid.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-27</h2>
					<p>
					Aaron Giles fixed some more problems in the updated file routines. David Haywood fixed the sprite colors in the Psikyo SH-2 games driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-26</h2>
					<p>
					Mike Coates added another bootleg of Pac-Man Hearts to the Pac-Man driver. Stephane Humbert fixed the DIP switch settings in it. Jeremy Witt submitted a patch for Burning Force ground plane offset bug. S. Glaize added Gal's Panic S2 to the Super Kaneko NOVA System driver. David Haywood added the World version of Dynasty Wars to the CPS-1 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0202/gps2_1.png" alt="Gal's Panic S2 (c) 1999 Kaneko" width="320" height="256" />
						<img src="wippics/0202/gps2_2.png" alt="The intro of Gal's Panic S2" width="320" height="256" />
						<img src="wippics/0202/gps2_3.png" alt="The intro of Gal's Panic S2" width="320" height="256" />
						<img src="wippics/0202/gps2_4.png" alt="The intro of Gal's Panic S2" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-25</h2>
					<p>
					Olivier Galibert made the full screen key configurable in Windows and fixed a few other user interface bugs. Ian Patterson also fixed a crash in the user interface. Uki added Quiz Gekiretsu Scramble (Gakuen Paradise 2) to the Quiz DNA no Hanran driver, fixed a sound problem in it and also wrote a driver for Mahjong Sisters. R. Belmont fixed the EEPROM code in the Psikyo SH-2 games and David Haywood added preliminary background graphics support to Space Bomber, unfortunately it doesn't work in any of the other games. Hiromitsu Shioya added stereo sound support to the Taito dual and triple screen games, and fixed the Taito F3 sound frequency.
					</p>
					<div class="wippix">
						<img src="wippics/0202/geki_1.png" alt="Quiz Gekiretsu Scramble (c) 1992 Face" width="384" height="224" />
						<img src="wippics/0202/geki_2.png" alt="The intro of Quiz Gekiretsu Scramble" width="384" height="224" />
						<img src="wippics/0202/geki_3.png" alt="The intro of Quiz Gekiretsu Scramble" width="384" height="224" />
						<img src="wippics/0202/geki_4.png" alt="The gameplay of Quiz Gekiretsu Scramble" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/mjsi_1.png" alt="Mahjong Sisters (c) 1986 Toaplan" width="260" height="240" />
						<img src="wippics/0202/mjsi_2.png" alt="The intro of Mahjong Sisters" width="260" height="240" />
						<img src="wippics/0202/mjsi_3.png" alt="The gameplay of Mahjong Sisters" width="260" height="240" />
						<img src="wippics/0202/mjsi_4.png" alt="The gameplay of Mahjong Sisters" width="260" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-24</h2>
					<p>
					Olivier Galibert fixed a bug that caused SH-2 registers fail to appear in the debug mode. Quench fixed the missing DAC sound in Finalizer. David Haywood added speedups to the Psikyo SH-2 games driver. Yasuhiro Ogawa added the correct color PROM to the Hexion driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-23</h2>
					<p>
					David Haywood added Gunbird 2 to the newer Psikyo games driver, it works fine except for the background graphics and sound. Kale submitted a fix for Express Raider not accepting more than 1 coin.
					</p>
					<div class="wippix">
						<img src="wippics/0202/gunb_1.png" alt="Gunbird 2 (c) 1998 Psikyo" width="224" height="320" />
						<img src="wippics/0202/gunb_2.png" alt="The intro of Gunbird 2" width="224" height="320" />
						<img src="wippics/0202/gunb_3.png" alt="The gameplay of Gunbird 2" width="224" height="320" />
						<img src="wippics/0202/gunb_4.png" alt="The gameplay of Gunbird 2" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-22</h2>
					<p>
					David Haywood reported some more progress with the newer Psikyo games. Most color problems are fixed, Sol Divide also works and Daraku Tenshi - The Fallen Angels also works almost up to the actual game but crashes at that point. The background graphics in Strikers 1945 II and Space Bomber are still missing, though.
					</p>
					<div class="wippix">
						<img src="wippics/0202/s194_1.png" alt="Strikers 1945 II (c) 1997 Psikyo" width="224" height="320" />
						<img src="wippics/0202/s194_2.png" alt="The intro of Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0202/s194_3.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0202/s194_4.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/sbom_3.png" alt="Space Bomber (c) 1998 Psikyo" width="224" height="320" />
						<img src="wippics/0202/sbom_4.png" alt="The intro of Space Bomber" width="224" height="320" />
						<img src="wippics/0202/sbom_5.png" alt="The gameplay of Space Bomber" width="224" height="320" />
						<img src="wippics/0202/sbom_6.png" alt="The gameplay of Space Bomber" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/sold_1.png" alt="Sol Divide (c) 1997 Psikyo" width="320" height="224" />
						<img src="wippics/0202/sold_2.png" alt="The intro of Sol Divide" width="320" height="224" />
						<img src="wippics/0202/sold_3.png" alt="The intro of Sol Divide" width="320" height="224" />
						<img src="wippics/0202/sold_4.png" alt="The intro of Sol Divide" width="320" height="224" />
						<img src="wippics/0202/sold_5.png" alt="The gameplay of Sol Divide" width="320" height="224" />
						<img src="wippics/0202/sold_6.png" alt="The gameplay of Sol Divide" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/dara_1.png" alt="Daraku Tenshi (c) 1998 Psikyo" width="320" height="224" />
						<img src="wippics/0202/dara_2.png" alt="The intro of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0202/dara_3.png" alt="The intro of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0202/dara_4.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-21</h2>
					<p>
					David Haywood reported some progress in emulating Hitachi SH-2 based Psikyo games. Strikers 1945 II and Space Bomber are playable, although they miss a lot of graphics, have some wrong colors and no sound. S. Glaize reported progress on Super Kaneko Nova System which also uses the Hitachi SH-2 CPU. Gal's Panic S and Gal's Panic 4 work up to the title screen, Panic Street, Cyvern, Jan Jan Paradise, Sen-know and Tel Jan work up to the actual gameplay but crash after a while, and Puzz Loop isn't playable although the attract mode shows something.
					</p>
					<div class="wippix">
						<img src="wippics/0202/s1945_1.png" alt="Strikers 1945 II (c) 1997 Psikyo" width="224" height="320" />
						<img src="wippics/0202/s1945_2.png" alt="The intro of Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0202/s1945_3.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0202/s1945_4.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/sbom_1.png" alt="Space Bomber (c) 1998 Psikyo" width="224" height="320" />
						<img src="wippics/0202/sbom_2.png" alt="The gameplay of Space Bomber" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/galpanis.png" alt="Gal's Panic S (c) 1997 Kaneko" width="329" height="241" />
						<img src="wippics/0202/galpani4.png" alt="Gal's Panic 4 (c) 1996 Kaneko" width="320" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/pani_1.png" alt="Panic Street (c) 1999 Kaneko" width="320" height="256" />
						<img src="wippics/0202/pani_2.png" alt="The intro of Panic Street" width="320" height="256" />
						<img src="wippics/0202/pani_3.png" alt="The intro of Panic Street" width="320" height="256" />
						<img src="wippics/0202/pani_4.png" alt="The gameplay of Panic Street" width="320" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/cyve_1.png" alt="Cyvern (c) 1998 Kaneko" width="256" height="320" />
						<img src="wippics/0202/cyve_2.png" alt="The intro of Cyvern" width="256" height="320" />
						<img src="wippics/0202/cyve_3.png" alt="The intro of Cyvern" width="256" height="320" />
						<img src="wippics/0202/cyve_4.png" alt="The gameplay of Cyvern" width="256" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/jjpa_1.png" alt="Jan Jan Paradise (c) 1996 Electro Design" width="320" height="256" />
						<img src="wippics/0202/jjpa_2.png" alt="The intro of Jan Jan Paradise" width="320" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/senk_1.png" alt="Sen-know (c) ????" width="329" height="241" />
						<img src="wippics/0202/senk_2.png" alt="The intro of Sen-know" width="320" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/telj_1.png" alt="Tel Jan (c) 1999 Electro Design" width="320" height="256" />
						<img src="wippics/0202/telj_2.png" alt="The gameplay of Tel Jan" width="320" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/puzz_1.png" alt="Puzz Loop (c) ????" width="329" height="241" />
						<img src="wippics/0202/puzz_2.png" alt="The attract mode of Puzz Loop" width="329" height="241" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-20</h2>
					<p>
					Stefan Jokisch fixed Sprint 2 which was broken in 0.58. Jarek Burczynski sent in an improvement to the YM2151 sound emulation's LFO noise generator which makes the YM2151 emulation almost exactly sample-accurate to the original. Aaron Giles fixed an audit problem that caused problems when finding files by the CRC32, and he fixed snapshot handling and memcard saving in it. Brad Oliver fixed a V60 CPU core memory bug that occurred on the Mac side. R. Belmont submitted a fix to Jaleco Mega System 1 sound to remove a hack from the sound hardware.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-19</h2>
					<p>
					Aaron Giles cleaned up the file I/O functions in the Windows version and added support for hard disk images. David Haywood fixed most of the reported graphics glitches in Mug Smashers. Farfetch'd optimized the tilemap functions without having to use MMX. Brad Oliver re-submitted a few fixes to compile problems on the Mac side.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-18</h2>
					<p>
					David Haywood sent in a driver for Super Pinball Action complete with sound, although there are some graphical glitches, and again Stephane Humbert did the inputs and DIP switch settings in the driver.
					</p>
					<div class="wippix">
						<img src="wippics/0202/spba_1.png" alt="Super Pinball Action (c) 1991 Tecmo" width="224" height="512" />
						<img src="wippics/0202/spba_2.png" alt="The intro of Super Pinball Action" width="224" height="512" />
						<img src="wippics/0202/spba_3.png" alt="The intro of Super Pinball Action" width="224" height="512" />
						<img src="wippics/0202/spba_4.png" alt="The gameplay of Super Pinball Action" width="224" height="512" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-17</h2>
					<p>
					Andrea Mazzoleni optimized a few tilemap functions with MMX, gaining about 5% to 10% more speed. Bryan McPhail fixed it to compile with Visual C as well.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-16</h2>
					<p>
					Lawrence Gold sent in a few more patches fixing compile errors.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-15</h2>
					<p>
					Brad Oliver fixed a few compile errors.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-14</h2>
					<p>
					Robert Gallagher improved the C-chip emulation in Rainbow Islands and Rainbow Islands Extra. David Graves fixed a sprite priority bug in Eto, and consolidated the emulation of the Taito sprite chip PC090OJ. Stephane Humbert and Gerardo Oporto fixed DIP switch settings in Volfied.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-13</h2>
					<p>
					Jarek Burczynski added flip screen support to the Taito B system driver. Acho A. Tang submitted a major improvement to the old SNK games drivers, fixing a lot of bugs. Jarek Burczynski added oversampling to the YM2151 interface.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-12</h2>
					<p>
					Aaron Giles fixed the Quantum and Omega Race vector graphics bugs. Stephane Humbert updated his various fixes for 0.58. Olivier Galibert rewrote the UPD7759 sound chip emulation with far better accuracy and he fixed a few problems in the drivers that use it. BUT submitted an improved version of the Namco sound core, which allows for cleaner sound.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-11</h2>
					<p>
					Bryan McPhail fixed the screen not updating when using the debugger or pausing the emulation. Aaron Giles sent in an R3000 CPU core and a driver for Police Trainer, complete with sound.
					</p>
					<div class="wippix">
						<img src="wippics/0202/poli_1.png" alt="Police Trainer (c) 1996 P&amp;P Marketing" width="394" height="240" />
						<img src="wippics/0202/poli_2.png" alt="The gameplay of Police Trainer" width="394" height="240" />
						<img src="wippics/0202/poli_3.png" alt="The gameplay of Police Trainer" width="394" height="240" />
						<img src="wippics/0202/poli_4.png" alt="The gameplay of Police Trainer" width="394" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-10</h2>
					<p>
					David Haywood sent in a driver for Pass, and Stephane Humbert did the inputs and DIP switches in it, however it doesn't have correct sound yet. Shiriru submitted a fix for the Cave driver, fixing a lot of graphics glitches. Kale submitted a fix for the scrambled graphics in Kuri Kinton prototype.
					</p>
					<div class="wippix">
						<img src="wippics/0202/pass_1.png" alt="Pass (c) 1992 Oksan" width="320" height="224" />
						<img src="wippics/0202/pass_2.png" alt="The intro of Pass" width="320" height="224" />
						<img src="wippics/0202/pass_3.png" alt="The gameplay of Pass" width="320" height="224" />
						<img src="wippics/0202/pass_4.png" alt="The gameplay of Pass" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-09</h2>
					<p>
					David Haywood updated the Quiz DNA no Hanran and Quiz Gakuen Paradise driver for 0.58 and re-submitted it. Stephane Humbert fixed the DIP switches, inputs and a few other problems in the Galaxian driver, and re-added the Scorpion bootleg running on the Galaxian hardware.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-08</h2>
					<p>
					Mike Coates added a bootleg of Frogger that runs on the Galaxian hardware. Aaron Giles fixed the bug in FM timers which affected Final Fight and lots of other games. Aaron Giles also fixed an Yie Ar Kung-Fu speed problem caused by a wrong interrupt.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-07</h2>
					<p>
					Aaron Giles sent in a driver for Rapid Fire. inside out boy submitted a fix for Popper which was broken in 0.58. Paul Priest improved the key remapping with the hotrod/hotrodse presets. Robin Merrill re-submitted his analog pedal support patch which fixes several driving games' inputs.
					</p>
					<div class="wippix">
						<img src="wippics/0202/rapi_1.png" alt="Rapid Fire (c) 1998 Hanaho" width="380" height="240" />
						<img src="wippics/0202/rapi_2.png" alt="The intro of Rapid Fire" width="380" height="240" />
						<img src="wippics/0202/rapi_3.png" alt="The gameplay of Rapid Fire" width="380" height="240" />
						<img src="wippics/0202/rapi_4.png" alt="The gameplay of Rapid Fire" width="380" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-06</h2>
					<p>
					Aaron Giles re-submitted Zsolt Vasvari's and Jim Hernandez's Buck Rogers sample support, fixed the Blaster line fill and added the missing ASIC65 source file. Phil Stroffolino re-submitted the tilemap fix for Numan Athletics. William Kucharski re-submitted his batch of fixes for the various drivers. Chris Hardy added a newer revision ROM set to the Crystal Castles driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-02-05</h2>
					<p>
					Bryan McPhail sent in a driver for the prototype arcade version of Lemmings, with thanks to Guru and Mike Dailly for supplying the ultra rare board.
					</p>
					<div class="wippix">
						<img src="wippics/0202/lemm_1.png" alt="Lemmings (c) 1991 Data East" width="320" height="224" />
						<img src="wippics/0202/lemm_2.png" alt="The intro of Lemmings" width="320" height="224" />
						<img src="wippics/0202/lemm_3.png" alt="The gameplay of Lemmings" width="320" height="224" />
						<img src="wippics/0202/lemm_4.png" alt="The gameplay of Lemmings" width="320" height="224" />
						<img src="wippics/0202/lemm_5.png" alt="The gameplay of Lemmings" width="320" height="224" />
						<img src="wippics/0202/lemm_6.png" alt="The gameplay of Lemmings" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-04</h2>
					<p>
					Stefan Jokisch sent in a driver for Flyball. Stephane Humbert fixed some compilation problems. David Haywood sent in a driver for Steel Force, and Stephane Humbert fixed the inputs in it.
					</p>
					<div class="wippix">
						<img src="wippics/0202/flyb_1.png" alt="Flyball (c) 1976 Atari" width="256" height="240" />
						<img src="wippics/0202/flyb_2.png" alt="The gameplay of Flyball" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/stlf_1.png" alt="Steel Force (c) 1994 Electronic Devices" width="368" height="232" />
						<img src="wippics/0202/stlf_2.png" alt="The intro of Steel Force" width="368" height="232" />
						<img src="wippics/0202/stlf_3.png" alt="The gameplay of Steel Force" width="368" height="232" />
						<img src="wippics/0202/stlf_4.png" alt="The gameplay of Steel Force" width="368" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-03</h2>
					<p>
					David Graves sent in a playable Grand Cross Pinball driver, although it lacks sound emulation. Stephane Humbert fixed the DIP switch settings and input ports in Mug Smashers. Bryan McPhail submitted the Captain America driver and ARM CPU core written by him and Phil Stroffolino. Captain America is almost perfect and includes sound, but the other games in that driver don't work - Fighter's History uses a protection chip, Dragon Gun and Locked 'N Loaded use a different sprite RAM format which is not yet emulated, and Tattoo Assassins works with sound, but lacks the graphics ROMs. Bryan McPhail also sent in a fix for Robocop 2, which now has support for the 8bpp tilemap mode as used in the attract mode.
					</p>
					<div class="wippix">
						<img src="wippics/0202/capt_1.png" alt="Captain America (c) 1991 Data East" width="320" height="240" />
						<img src="wippics/0202/capt_2.png" alt="The intro of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_3.png" alt="The intro of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_4.png" alt="The intro of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_5.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_6.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_7.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_8.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_9.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_10.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_11.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_12.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_13.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_14.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_15.png" alt="The gameplay of Captain America" width="320" height="240" />
						<img src="wippics/0202/capt_16.png" alt="The gameplay of Captain America" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0202/gcpi_1.png" alt="Grand Cross Pinball (c) 1994 Excellent System" width="224" height="320" />
						<img src="wippics/0202/gcpi_2.png" alt="The intro of Grand Cross Pinball" width="224" height="320" />
						<img src="wippics/0202/gcpi_3.png" alt="The gameplay of Grand Cross Pinball" width="224" height="320" />
						<img src="wippics/0202/gcpi_4.png" alt="The gameplay of Grand Cross Pinball" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-02-02</h2>
					<p>
					Mike Coates fixed scrolling in Mr. Do while flip screen is active. David Haywood sent in a driver for Mug Smashers, complete with sound but DIP switches and coin inputs still need to be added.
					</p>
					<div class="wippix">
						<img src="wippics/0202/mugs_1.png" alt="Mug Smashers (c) 1990 Electronic Devices" width="320" height="232" />
						<img src="wippics/0202/mugs_2.png" alt="The intro of Mug Smashers" width="320" height="232" />
						<img src="wippics/0202/mugs_3.png" alt="The intro of Mug Smashers" width="320" height="232" />
						<img src="wippics/0202/mugs_4.png" alt="The gameplay of Mug Smashers" width="320" height="232" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2002-02-01</h2>
					<p>
					Aaron Giles cleaned up the plot_pixel support and added another Alpha One prototype ROM set to the Major Havoc driver.
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
