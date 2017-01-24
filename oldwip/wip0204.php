<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>April 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-04-30</h2>
					<p>
					David Haywood resubmitted the Tecmo Bowl driver with proper controls, but it is still unplayable. Jarek Burczynski sent in significant improvements to both the YM3812 and YM2151 cores. Aaron Giles replaced the palette array in palette initialization functions with a function that changes the colors.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-29</h2>
					<p>
					Nicola Salmoria added sound to Hyper Pacman. Paul Priest submitted yet another improvement to the Psikyo SH-2 games' driver, fixing alpha blending and speeding up sprite drawing. Acho A. Tang fixed another problem in the WEC Le Mans 24 colors. Stephane Humbert fixed Shocking from crashing in DOS, and he added Great 1000 Miles Rally 2 to the Kaneko16 driver, but it's missing lots of graphics due to a missing or bad ROM. E. Watanabe fixed the controls in Hyper Duel.
					</p>
					<div class="wippix">
						<img src="wippics/0204/gtmr_1.png" alt="Great 1000 Miles Rally 2 (c) 1995 Kaneko" width="320" height="240" />
						<img src="wippics/0204/gtmr_2.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0204/gtmr_3.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0204/gtmr_4.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0204/gtmr_5.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0204/gtmr_6.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0204/gtmr_7.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
						<img src="wippics/0204/gtmr_8.png" alt="The gameplay of Great 1000 Miles Rally 2" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-28</h2>
					<p>
					David Haywood sent in a driver for Hyper Pacman, but sounds are not yet emulated. Stephane Humbert fixed the DIP switches and inputs in it. Nephrite submitted a fix for cocktail mode in Jack Rabbit and Money Money.
					</p>
					<div class="wippix">
						<img src="wippics/0204/hype_1.png" alt="Hyper Pacman (c) 1995 Semicom" width="256" height="224" />
						<img src="wippics/0204/hype_2.png" alt="The gameplay of Hyper Pacman" width="256" height="224" />
						<img src="wippics/0204/hype_3.png" alt="The gameplay of Hyper Pacman" width="256" height="224" />
						<img src="wippics/0204/hype_4.png" alt="The gameplay of Hyper Pacman" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-27</h2>
					<p>
					Stephane Humbert fixed the DIP switches in Xyonix, DIP switches and inputs in Zero Zone and DIP switches in Extermination. E. Watanabe sent in a driver for Hyper Duel, but it lacks controls and crashes sometimes as well. Acho A. Tang submitted a major improvement to the WEC Le Mans 24 driver, fixing the colors and fixing a lot of graphics glitches in it and Hot Chase.
					</p>
					<div class="wippix">
						<img src="wippics/0204/wecl_1.png" alt="WEC Le Mans 24 (c) 1986 Konami" width="320" height="224" />
						<img src="wippics/0204/wecl_2.png" alt="The attract mode of WEC Le Mans 24" width="320" height="224" />
						<img src="wippics/0204/wecl_3.png" alt="The attract mode of WEC Le Mans 24" width="320" height="224" />
						<img src="wippics/0204/wecl_4.png" alt="The attract mode of WEC Le Mans 24" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/hypr_1.png" alt="Hyper Duel (c) 1993 Technosoft" width="320" height="224" />
						<img src="wippics/0204/hypr_2.png" alt="The intro of Hyper Duel" width="320" height="224" />
						<img src="wippics/0204/hypr_3.png" alt="The intro of Hyper Duel" width="320" height="224" />
						<img src="wippics/0204/hypr_4.png" alt="The gameplay of Hyper Duel" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-26</h2>
					<p>
					Nicola Salmoria fixed the controls and sound in Xyonix, and added the correct color PROM. Paul Priest fixed even more bugs in the background graphics in the Psikyo SH-2 games' driver and enabled alpha blending. SpinelSun2 submitted a fix for The Simpsons inputs. Kale submitted a fix for some tilemap priority bugs in Batsugun.
					</p>
					<div class="wippix">
						<img src="wippics/0204/xyon_3.png" alt="Xyonix (c) ???? ????" width="320" height="224" />
						<img src="wippics/0204/xyon_4.png" alt="The attract mode of Xyonix" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-25</h2>
					<p>
					David Haywood and Stephane Humbert wrote a driver for Xyonix, but it is missing controls, has wrong colors and sound hasn't been emulated. Nicola Salmoria fixed the sprite colors in Miss Bubble 2, however the background graphics are not yet emulated.
					</p>
					<div class="wippix">
						<img src="wippics/0204/xyon_1.png" alt="Xyonix (c) ???? ????" width="320" height="224" />
						<img src="wippics/0204/xyon_2.png" alt="The attract mode of Xyonix" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/miss_3.png" alt="Miss Bubble 2 (c) 1986 bootleg" width="256" height="224" />
						<img src="wippics/0204/miss_4.png" alt="The gameplay of Miss Bubble 2" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-24</h2>
					<p>
					David Haywood added the Eliminator 4 players prototype version to the Sega vector hardware driver. Mathis Rosenhauer added several new ROM sets to the Cinematronics vector hardware driver. Nicola Salmoria sent in a preliminary driver for Taxi Driver, which has bad colors due to missing color PROMs. David Haywood also sent in a driver for Miss Bubble 2, a bootleg of the original Bubble Bobble with redesigned levels and redrawn graphics, however the driver lacks correct colors and sound. Stephane Humbert added a patch to the Seta driver so that Twin Eagle can be played with two players. SpinelSun2 submitted a fix for the DIP switch settings in Zero Zone.
					</p>
					<div class="wippix">
						<img src="wippics/0204/taxi_1.png" alt="Taxi Driver (c) 1984 Graphic Techno" width="208" height="256" />
						<img src="wippics/0204/taxi_2.png" alt="The gameplay of Taxi Driver" width="208" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/miss_1.png" alt="Miss Bubble 2 (c) 1986 bootleg" width="256" height="224" />
						<img src="wippics/0204/miss_2.png" alt="The gameplay of Miss Bubble 2" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-23</h2>
					<p>
					Uki fixed the DAC sound to stop at reset in the Mahjong Sisters driver. David Haywood improved the graphics emulation in the Legend of the Silkroad driver, fixing priorities, scrolling and the glitches that weren't caused by a bad ROM but rather a defect in the original hardware. David Haywood also fixed the sound in that driver. Karl Stenerud fixed a bug in the privilege violation emulation in the C 68k core, and he fixed a lot of undocumented behaviour thanks to information from Bart T. Filipe Estima submitted an addition of a third button to Final Fight, which is only enabled with cheats. Nephrite submitted correct DIP switch settings for Wrestlefest and The Three Stooges.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-22</h2>
					<p>
					David Haywood sent in a preliminary driver for Legend of Silkroad, in which scrolling and graphics priorities are not correct and it doesn't yet have sound emulation, and one of the ROMs is bad, but it's otherwise playable. Stephane Humbert and R. Belmont added the inputs and DIP switch settings to it.
					</p>
					<div class="wippix">
						<img src="wippics/0204/silk_1.png" alt="Legend of Silkroad (c) 1999 Unico" width="380" height="224" />
						<img src="wippics/0204/silk_2.png" alt="The intro of Legend of Silkroad" width="380" height="224" />
						<img src="wippics/0204/silk_3.png" alt="The intro of Legend of Silkroad" width="380" height="224" />
						<img src="wippics/0204/silk_4.png" alt="The intro of Legend of Silkroad" width="380" height="224" />
						<img src="wippics/0204/silk_5.png" alt="The gameplay of Legend of Silkroad" width="380" height="224" />
						<img src="wippics/0204/silk_6.png" alt="The gameplay of Legend of Silkroad" width="380" height="224" />
						<img src="wippics/0204/silk_7.png" alt="The gameplay of Legend of Silkroad" width="380" height="224" />
						<img src="wippics/0204/silk_8.png" alt="The gameplay of Legend of Silkroad" width="380" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-21</h2>
					<p>
					Nicola Salmoria fixed the tile colors, priorities and palette fades, and he added sound to Shadow Force. Stephane Humbert fixed the inputs as well. Hau submitted an update to the Nemesis / Gradius driver, fixing a lot of graphics bugs in all of the games in that driver. Gerardo Oporto fixed some DIP switch settings in Darius and Warrior Blade.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-20</h2>
					<p>
					Nicola Salmoria fixed the background graphics in News. David Haywood sent in a preliminary driver for Shadow Force which doesn't yet have sound and there are some graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0204/sfor_1.png" alt="Shadow Force (c) 1993 Technos" width="320" height="256" />
						<img src="wippics/0204/sfor_2.png" alt="The intro of Shadow Force" width="320" height="256" />
						<img src="wippics/0204/sfor_3.png" alt="The itnro of Shadow Force" width="320" height="256" />
						<img src="wippics/0204/sfor_4.png" alt="The gameplay of Shadow Force" width="320" height="256" />
						<img src="wippics/0204/sfor_5.png" alt="The gameplay of Shadow Force" width="320" height="256" />
						<img src="wippics/0204/sfor_6.png" alt="The gameplay of Shadow Force" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-19</h2>
					<p>
					Aaron Giles fixed a divide by zero error in Dyno Bop and he fixed the alternate Road Blasters set so that inserting coins works again.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-18</h2>
					<p>
					David Haywood wrote a driver for News, complete with sound, and he updated the old Hit Me / Brick Yard drivers and added Barricade to it. Stephane Humbert updated the News and IQ Block drivers with correct inputs and DIP switch settings. Aaron Giles added Dyno Bop without proper controls and new versions of Hot Shots Tennis and Strata Bowling to the itech8 driver, and he added some unused PROMs to the Atari GT system driver. Acho A. Tang submitted a major improvement to the old Formation Z / Aeroboto driver which is now playable, and he improved the IREM GA-20 sound chip emulation which helps some of the games on the IREM M-92 hardware.
					</p>
					<div class="wippix">
						<img src="wippics/0204/aero_1.png" alt="Aeroboto (c) 1984 Jaleco / Williams" width="248" height="216" />
						<img src="wippics/0204/aero_2.png" alt="The gameplay of Aeroboto" width="248" height="216" />
						<img src="wippics/0204/aero_3.png" alt="The gameplay of Aeroboto" width="248" height="216" />
						<img src="wippics/0204/aero_4.png" alt="The gameplay of Aeroboto" width="248" height="216" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/dyno_1.png" alt="Dyno Bop (c) 1990 Incredible Tech" width="240" height="256" />
						<img src="wippics/0204/dyno_2.png" alt="The intro of Dyno Bop" width="240" height="256" />
						<img src="wippics/0204/dyno_3.png" alt="The gameplay of Dyno Bop" width="240" height="256" />
						<img src="wippics/0204/dyno_4.png" alt="The gameplay of Dyno Bop" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/news_1.png" alt="News (c) 1993 Poby / Virus" width="256" height="224" />
						<img src="wippics/0204/news_2.png" alt="The gameplay of News" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/hitme.png" alt="Hit Me (c) 1976 Ramtek" width="320" height="128" />
						<img src="wippics/0204/brickyrd.png" alt="Brickyard (c) 1976 Ramtek" width="256" height="192" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-17</h2>
					<p>
					Stephane Humbert fixed the inputs and DIP switches in Many Block, and David Haywood fixed a few graphics glitches in it. Hiromitsu Shioya modified the sound CPU bank changing in the Darius driver. Ernesto Corvi figured out the protection in IQ Block and Nicola Salmoria finished the driver, except sound is not yet emulated in it. Kale adjusted the sound volume balance in Gold Medalist and Tehkan World Cup.
					</p>
					<div class="wippix">
						<img src="wippics/0204/iqbl_1.png" alt="IQ Block (c) 1993 IGS" width="512" height="480" />
						<img src="wippics/0204/iqbl_2.png" alt="The intro of IQ Block" width="512" height="480" />
						<img src="wippics/0204/iqbl_3.png" alt="The gameplay of IQ Block" width="512" height="480" />
						<img src="wippics/0204/iqbl_4.png" alt="The gameplay of IQ Block" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-16</h2>
					<p>
					Kamel added protection patches that make Black Heart and Mustang playable in the nmk16 driver, and David Haywood added Many Block which doesn't work yet due to missing controls. Nicola Salmoria sent in a preliminary driver for IQ Block which shows the service mode but doesn't work otherwise.
					</p>
					<div class="wippix">
						<img src="wippics/0204/blkh_1.png" alt="Black Heart (c) 1991 UPL" width="256" height="224" />
						<img src="wippics/0204/blkh_2.png" alt="The intro of Black Heart" width="256" height="224" />
						<img src="wippics/0204/blkh_3.png" alt="The gameplay of Black Heart" width="256" height="224" />
						<img src="wippics/0204/blkh_4.png" alt="The gameplay of Black Heart" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/must_1.png" alt="Mustang (c) 1990 UPL" width="256" height="224" />
						<img src="wippics/0204/must_2.png" alt="The intro of Mustang" width="256" height="224" />
						<img src="wippics/0204/must_3.png" alt="The gameplay of Mustang" width="256" height="224" />
						<img src="wippics/0204/must_4.png" alt="The gameplay of Mustang" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/many_1.png" alt="Many Block (c) 1991 Bee Oh" width="224" height="256" />
						<img src="wippics/0204/many_2.png" alt="The attract mode of Many Block" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-15</h2>
					<p>
					David Haywood sent in a preliminary driver for IGS's PGM system that supports Oriental Legend, with much thanks to ElSemi for valuable information on the system. Aaron Giles merged the Centipede, Millipede, Warlords and Qwak prototype drivers because they were similar.
					</p>
					<div class="wippix">
						<img src="wippics/0204/orle_1.png" alt="Oriental Legend (c) 1997 IGS" width="448" height="224" />
						<img src="wippics/0204/orle_2.png" alt="The intro of Oriental Legend" width="448" height="224" />
						<img src="wippics/0204/orle_3.png" alt="The gameplay of Oriental Legend" width="448" height="224" />
						<img src="wippics/0204/orle_4.png" alt="The gameplay of Oriental Legend" width="448" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-14</h2>
					<p>
					Phil Stroffolino fixed a crash bug in the Renegade driver that occurred in 0.59. Aaron Giles added World Class Bowling, another version of Bloodstorm and fixed the DIP switches in the itech32 driver, and he also added a prototype version to the Street Fighter driver, and a bootleg called Magic Worm to the Centipede driver. Kale fixed the Final Round version L and M graphics that have been broken for a while.
					</p>
					<div class="wippix">
						<img src="wippics/0204/wcbo_1.png" alt="World Class Bowling (c) 1995 Incredible Technologies" width="384" height="255" />
						<img src="wippics/0204/wcbo_2.png" alt="The gameplay of World Class Bowling" width="384" height="255" />
						<img src="wippics/0204/wcbo_3.png" alt="The gameplay of World Class Bowling" width="384" height="255" />
						<img src="wippics/0204/wcbo_4.png" alt="The gameplay of World Class Bowling" width="384" height="255" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/magw_1.png" alt="Magic Worm (c) 1981 Sidam" width="240" height="256" />
						<img src="wippics/0204/magw_2.png" alt="The gameplay of Magic Worm" width="240" height="256" />
						<img src="wippics/0204/magw_3.png" alt="The gameplay of Magic Worm" width="240" height="256" />
						<img src="wippics/0204/magw_4.png" alt="The gameplay of Magic Worm" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-13</h2>
					<p>
					Stefan Jokisch sent in a driver for Poolshark.
					</p>
					<div class="wippix">
						<img src="wippics/0204/pool_1.png" alt="Poolshark (c) 1977 Atari" width="255" height="232" />
						<img src="wippics/0204/pool_2.png" alt="The gameplay of Poolshark" width="255" height="232" />
						<img src="wippics/0204/pool_3.png" alt="The gameplay of Poolshark" width="255" height="232" />
						<img src="wippics/0204/pool_4.png" alt="The gameplay of Poolshark" width="255" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-12</h2>
					<p>
					Aaron Giles converted all the Atari drivers for the tilemap system and added some protection workarounds for Primal Rage and Road Riot's Revenge, but neither of them is perfect. Ron Fries sent in another update to the controller-specific .ini file support system.
					</p>
					<div class="wippix">
						<img src="wippics/0204/prim_1.png" alt="Primal Rage (c) 1994 Atari" width="336" height="240" />
						<img src="wippics/0204/prim_2.png" alt="The intro of Primal Rage" width="336" height="240" />
						<img src="wippics/0204/prim_3.png" alt="The gameplay of Primal Rage" width="336" height="240" />
						<img src="wippics/0204/prim_4.png" alt="The gameplay of Primal Rage" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0204/rrre_1.png" alt="Road Riot's Revenge (c) 1993 Atari" width="336" height="240" />
						<img src="wippics/0204/rrre_2.png" alt="The intro of Road Riot's Revenge" width="336" height="240" />
						<img src="wippics/0204/rrre_3.png" alt="The gameplay of Road Riot's Revenge" width="336" height="240" />
						<img src="wippics/0204/rrre_4.png" alt="The gameplay of Road Riot's Revenge" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-11</h2>
					<p>
					Stephane Humbert fixed the inputs in the Track 'n Field driver. Paul Priest added sprite buffering to the Psikyo SH-2 games' driver, which fixes a few glitches in Daraku Tenshi. Ian Patterson sent in a new, completely rewritten cheat engine that allows for much more flexible cheats than currently.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-10</h2>
					<p>
					David Haywood fixed Final Star Force from crashing.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-09</h2>
					<p>
					Nicola Salmoria added Hero in the Castle of Doom to the Donkey Kong driver, and Stephane Humbert fixed the DIP switch settings in it. Phil Stroffolino fixed yet another crash in the Namco System 1 driver. Brian A. Troha submitted an addition of the World version of Nebulas Ray to the Namco NB-1 driver. Kale submitted an improvement to the Block Gal colors, and Nicola Salmoria fixed them completely.
					</p>
					<div class="wippix">
						<img src="wippics/0204/hero_1.png" alt="Hero in the Castle of Doom (c) 1984 Seatongrove" width="224" height="256" />
						<img src="wippics/0204/hero_2.png" alt="The gameplay of Hero in the Castle of Doom" width="224" height="256" />
						<img src="wippics/0204/hero_3.png" alt="The gameplay of Hero in the Castle of Doom" width="224" height="256" />
						<img src="wippics/0204/hero_4.png" alt="The gameplay of Hero in the Castle of Doom" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-08</h2>
					<p>
					Nicola Salmoria added The Masters of Kin to the Track &amp; Field driver.
					</p>
					<div class="wippix">
						<img src="wippics/0204/kin_1.png" alt="The Masters of Kin (c) 1988 Du Tech" width="256" height="224" />
						<img src="wippics/0204/kin_2.png" alt="The intro of The Masters of Kin" width="256" height="224" />
						<img src="wippics/0204/kin_3.png" alt="The gameplay of The Masters of Kin" width="256" height="224" />
						<img src="wippics/0204/kin_4.png" alt="The gameplay of The Masters of Kin" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-07</h2>
					<p>
					Paul Priest added support for sprite zooming in the Psikyo SH-2 games' driver. Phil Stroffolino fixed the Namco System 1 driver to support a newly added feature in the tilemap system, which removes clutter from the driver itself.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-06</h2>
					<p>
					Phil Stroffolino sent in an update to the various Namco drivers, further abstracting the support of different emulated custom chips.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-05</h2>
					<p>
					Aaron Giles fixed a lot of invalid memory accesses in various drivers that caused crashes in 0.59. Zsolt Vasvari added support for scaling graphics to allow higher resolution for artwork.
					</p>
				</div>

				<div class="row">
					<h2>2002-04-04</h2>
					<p>
					Ron Fries added a little better support for joysticks with start and select buttons. Jarek Burczynski sent in a driver for Tank Busters, but it might have imperfect colors. Brian A. Troha re-submitted some clones to the Namco NA1/2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0204/tank_1.png" alt="Tank Busters (c) 1985 Valadon Automation" width="240" height="320" />
						<img src="wippics/0204/tank_2.png" alt="The gameplay of Tank Busters" width="240" height="320" />
						<img src="wippics/0204/tank_3.png" alt="The gameplay of Tank Busters" width="240" height="320" />
						<img src="wippics/0204/tank_4.png" alt="The gameplay of Tank Busters" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-03</h2>
					<p>
					Aaron Giles fixed a potential crash bug in the ES550x sound chip emulators, but this doesn't fix anything else. Paul Priest added region support to the Psikyo SH-2 games driver and improved the background graphics in for example Strikers 1945 II. Kale fixed the Block Gal bootleg video emulation, but background colors are still wrong.
					</p>
					<div class="wippix">
						<img src="wippics/0204/s194_1.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0204/s194_2.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0204/s194_3.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
						<img src="wippics/0204/s194_4.png" alt="The gameplay of Strikers 1945 II" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-04-02</h2>
					<p>
					Stephane Humbert re-added Cobra Command to the Gottlieb driver, but it still misses the laserdisc backgrounds. Aaron Giles removed a ROM length limitation from the ROM loading system, to better support floppy disk images. Smitdogg Jones added a bootleg of Knuckle Joe called Bone Crusher.
					</p>
				</div>

				<div class="rowlast">
					<h2>2002-04-01</h2>
					<p>
					Stephane Humbert fixed the DIP switch settings and input ports in various drivers. Nicola Salmoria added Tactician to the Locomotion driver, and Chack'n and Stephane Humbert fixed the inputs in it. Acho A. Tang fixed a few bugs in the Kiki Kaikai driver.
					</p>
					<div class="wippix">
						<img src="wippics/0204/tact_1.png" alt="Tactician (c) 1982 Sega" width="224" height="288" />
						<img src="wippics/0204/tact_2.png" alt="The intro of Tactician" width="224" height="288" />
						<img src="wippics/0204/tact_3.png" alt="The gameplay of Tactician" width="224" height="288" />
						<img src="wippics/0204/tact_4.png" alt="The gameplay of Tactician" width="224" height="288" />
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
