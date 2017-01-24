<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>March 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-03-31</h2>
					<p>
					Mike Coates changed the steady key code to be dependant of an option in MAME.CFG.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-30</h2>
					<p>
					David Graves and Jarek Burczynski fixed a few bugs and added state saving support to Rainbow Islands, Rastan and Operation Wolf. Aaron Giles fixed some compiling bugs.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-29</h2>
					<p>
					Nicola Salmoria fixed a few graphical bugs in the Namco System 2 driver, and added another Super World Stadium '92 ROM set. Aaron Giles added another Rim Rockin' Basketball ROM set to the itech8 driver. Tatsuyuki Satoh improved the VLM5030 emulator a little, but further progress will be very difficult without the exact decoding algorithm. Gerardo Oporto fixed yet more dip switch settings in the Taito L driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-28</h2>
					<p>
					Nicola Salmoria fixed a drawgfx.c bug that caused missing sprites in CVS games. Lawrence Gold changed some function definitions in the screenshot routines. Panther fixed a bug with the handling of -romdir switch.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-27</h2>
					<p>
					Mathis Rosenhauer adjusted the CPU speeds in Looping. Olivier Galibert fixed multi-z80 games that were broken because of a bug in the save state routines. Guru added new ROM sets for The Final Round, Galaga 3 and World Cup '90. Gerardo Oporto fixed some dip switch settings in the Taito F2 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-26</h2>
					<p>
					Olivier Galibert changed the keys that are used for state saving. Jarek Burczynski added Ryujin to the Taito B driver.
					</p>
					<div class="wippix">
						<img src="wippics/0103/ryuj_1.png" alt="Ryujin (c) 1993 Taito" width="224" height="320" />
						<img src="wippics/0103/ryuj_2.png" alt="The intro of Ryujin" width="224" height="320" />
						<img src="wippics/0103/ryuj_3.png" alt="The gameplay of Ryujin" width="224" height="320" />
						<img src="wippics/0103/ryuj_4.png" alt="The gameplay of Ryujin" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-25</h2>
					<p>
					Phil Stroffolino fixed an input port bug in the Namco NA1/2 driver. David Graves added state saving support to the Operation Thunderbolt driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-24</h2>
					<p>
					Bryan McPhail added another version of Fighting Fantasy to the Dec0 driver. Mathis Rosenhauer added fire and balloon sounds to Looping, so there should be no more missing sounds.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-23</h2>
					<p>
					Phil Stroffolino submitted another update to the Namco NA1/2 driver, and it is now in pretty good shape.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-22</h2>
					<p>
					David Graves fixed some bugs in the Taito F2 drivers and added state saving support to Taito F2 and Darius drivers, but it still needs some work.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-21</h2>
					<p>
					Mike Coates fixed the Incredible Technologies 32-bit games' slowness with the ASM 68k core for good. Nicola Salmoria hooked up the Yie Ar Kung-Fu sound correctly. Bryan McPhail added sprite buffering to Cadash and faked enough MCU accesses in Wonder Planet so it works pretty well.
					</p>
					<div class="wippix">
						<img src="wippics/0103/wndr_1.png" alt="Wonder Planet (c) 1987 Data East" width="240" height="256" />
						<img src="wippics/0103/wndr_2.png" alt="The intro of Wonder Planet" width="240" height="256" />
						<img src="wippics/0103/wndr_3.png" alt="The gameplay of Wonder Planet" width="240" height="256" />
						<img src="wippics/0103/wndr_4.png" alt="The gameplay of Wonder Planet" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-20</h2>
					<p>
					Phil Stroffolino sent in a huge update to the Namco NA1/2 driver, fixing graphics blitter bugs, adding proper scroll registers emulation and a lot more. Marco Cassili fixed some more dip switch settings. Takahiro Nogi fixed the 9th and 10th buttons in Hana Awase, and he adjusted the sound of VS Gong Fight. Nicola Salmoria improved the sound in Pandora's Palace. Mathis Rosenhauer added preliminary sound to Looping, but some sound effects are still missing.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-19</h2>
					<p>
					Aaron Giles did a quick and dirty fix for Incredible Technologies 32-bit games' slowness with the ASM 68k core. Marco Cassili fixed dip switch settings in a few drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-18</h2>
					<p>
					M.A.S.H. submitted an adjustable vector flicker added to the on screen display. Uki added screen flip and fixed some dip switch settings in Momoko 120%.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-17</h2>
					<p>
					Uki and Nicola Salmoria added Quiz Gakumon no Susume to the TMNT2 driver. Brad Oliver fixed Toaplan2 sprite decoding to work properly on other platforms.
					</p>
					<div class="wippix">
						<img src="wippics/0103/qgak_1.png" alt="Quiz Gakumon no Susume (c) 1993 Konami" width="304" height="224" />
						<img src="wippics/0103/qgak_2.png" alt="The intro of Quiz Gakumon no Susume" width="304" height="224" />
						<img src="wippics/0103/qgak_3.png" alt="The intro of Quiz Gakumon no Susume" width="304" height="224" />
						<img src="wippics/0103/qgak_4.png" alt="The gameplay of Quiz Gakumon no Susume" width="304" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-16</h2>
					<p>
					Brad Oliver fixed some crash-causing bugs in the Gunnail driver. Phil Stroffolino sent in an update to the Shanghai Kid driver, using the correct protection module ROMs and with other fixes. Nicola Salmoria added Mouja to the Metro driver. Marco Cassili fixed dip switch settings in Gunnail, Mouja and Momoko 120%.
					</p>
					<div class="wippix">
						<img src="wippics/0103/mouj_1.png" alt="Mouja (c) 1996 Etona" width="320" height="224" />
						<img src="wippics/0103/mouj_2.png" alt="The intro of Mouja" width="320" height="224" />
						<img src="wippics/0103/mouj_3.png" alt="The intro of Mouja" width="320" height="224" />
						<img src="wippics/0103/mouj_4.png" alt="The gameplay of Mouja" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-15</h2>
					<p>
					Phil Stroffolino sent in another update to the SunA 8-bit driver, adding some graphics emulation and fixing bugs.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-14</h2>
					<p>
					Mike Coates renamed some variable names to be consistent between the ASM and C 68k cores. Luca Elia sent in his own driver for Hard Head and Rough Ranger, only some graphics are messed. Nicola Salmoria fixed the color palette in Luca's SunA 8-bit driver. Nicola also changed Tumblepop to use better graphics ROMs, however one of the new ROMs is encrypted.
					</p>
					<div class="wippix">
						<img src="wippics/0103/rran_1.png" alt="Rough Ranger (c) 1988 SunA" width="256" height="224" />
						<img src="wippics/0103/rran_2.png" alt="The intro of Rough Ranger" width="256" height="224" />
						<img src="wippics/0103/rran_3.png" alt="The gameplay of Rough Ranger" width="256" height="224" />
						<img src="wippics/0103/rran_4.png" alt="The gameplay of Rough Ranger" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-13</h2>
					<p>
					Olivier Galibert fixed some bugs in the EEPROM emulation code. Phil Stroffolino sent in a preliminary driver for Hard Head, but it lacks correct graphics and is barely playable. Nicola Salmoria added sound emulation to Hexion, but colors are still missing. Bryan McPhail added correct color palette emulation to Hard Head.
					</p>
					<div class="wippix">
						<img src="wippics/0103/hard_1.png" alt="Hard Head (c) 1988 SunA" width="256" height="224" />
						<img src="wippics/0103/hard_2.png" alt="The intro of Hard Head" width="256" height="224" />
						<img src="wippics/0103/hard_3.png" alt="The gameplay of Hard Head" width="256" height="224" />
						<img src="wippics/0103/hard_4.png" alt="The gameplay of Hard Head" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-12</h2>
					<p>
					Olivier Galibert fixed a small save state bug which occurred with drivers using multiple identical CPUs. Brad Oliver fixed the state save routines to be proper ANSI C code. Nicola Salmoria sent in a preliminary driver for Hexion, but it lacks correct colors and sound at the moment.
					</p>
					<div class="wippix">
						<img src="wippics/0103/hexi_1.png" alt="Hexion (c) 1992 Konami" width="512" height="512" />
						<img src="wippics/0103/hexi_2.png" alt="The intro of Hexion" width="512" height="512" />
						<img src="wippics/0103/hexi_3.png" alt="The gameplay of Hexion" width="512" height="512" />
						<img src="wippics/0103/hexi_4.png" alt="The gameplay of Hexion" width="512" height="512" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-11</h2>
					<p>
					Olivier Galibert re-submitted a lost GI Joe update. J&uuml;rgen Buchm&uuml;ller fixed some compilation problems in the NEC uPD7810 CPU core. Marco Cassili fixed some dip switches in the Seta games. Nicola Salmoria fixed a drawgfx bug that caused missing sprites in Asterix.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-10</h2>
					<p>
					Uki submitted a Momoko 120% driver.
					</p>
					<div class="wippix">
						<img src="wippics/0103/momo_1.png" alt="Momoko 120% (c) 1986 Jaleco" width="240" height="216" />
						<img src="wippics/0103/momo_2.png" alt="The intro of Momoko 120%" width="240" height="216" />
						<img src="wippics/0103/momo_3.png" alt="The gameplay of Momoko 120%" width="240" height="216" />
						<img src="wippics/0103/momo_4.png" alt="The gameplay of Momoko 120%" width="240" height="216" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-09</h2>
					<p>
					Nicola Salmoria added 4bpp packed graphics support to the core. Mike Coates improved the ASM 68k core's save state support.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-08</h2>
					<p>
					David Graves adjusted the Darius 2 and Ninja Warriors drivers to include support for the low pass filter. Ernesto Corvi and Nicola Salmoria added support for dual K053260 sound chips, fixing sound in Over Drive. Nicola Salmoria also fixed bad sound in Asterix. Phil Stroffolino sent in a driver for Gladiator. Marco Cassili fixed some dip switch settings in Rolling Thunder and Konami Twin16 games.
					</p>
					<div class="wippix">
						<img src="wippics/0103/sgla_1.png" alt="Gladiator (c) 1984 SNK" width="256" height="216" />
						<img src="wippics/0103/sgla_2.png" alt="The intro of Gladiator" width="256" height="216" />
						<img src="wippics/0103/sgla_3.png" alt="The gameplay of Gladiator" width="256" height="216" />
						<img src="wippics/0103/sgla_4.png" alt="The gameplay of Gladiator" width="256" height="216" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-07</h2>
					<p>
					Andrea Mazzoleni improved the mixer system to include an adjustable low pass filter, which will be used with the Darius 2 driver. Jarek Burczynski added MB87078 (an electronic volume control) emulation to the Taito B driver. Nicola Salmoria sent in a driver for Over Drive, but it lacks road graphics and sound effects, though music works. Mike Coates fixed the ASM 68k core to compile properly again.
					</p>
					<div class="wippix">
						<img src="wippics/0103/over_1.png" alt="Over Drive (c) 1990 Konami" width="256" height="304" />
						<img src="wippics/0103/over_2.png" alt="The intro of Over Drive" width="256" height="304" />
						<img src="wippics/0103/over_3.png" alt="The gameplay of Over Drive" width="256" height="304" />
						<img src="wippics/0103/over_4.png" alt="The gameplay of Over Drive" width="256" height="304" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-06</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed some bugs in the state saving functions, added support for them to the DECO Cassette system driver and updated the NEC uPD7810 CPU core again.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-05</h2>
					<p>
					David Haywood added state saving to the Sega C2 driver, fixed some small bugs in it and also added state saving to Ninja Kid. Olivier Galibert fixed a bug in the 6502 core which was introduced by the saved states support, and some Taito games that were broken because of some bugs in the state saving code. J&uuml;rgen Buchm&uuml;ller sent in another NEC uPD7810 CPU core update with some bugfixes. Nicola Salmoria added K053936 graphics chip emulation to Blazing Tornado, and improved the K054157 emulation a bit.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-04</h2>
					<p>
					Nicola Salmoria improved the C 68k core so that it can use separate memory handlers for different width data, and he fixed it from crashing in many Neo Geo games. Keith Wilkins added discrete sound support to Fire Truck and fixed a few other bugs in the discrete sound engine. Bryan McPhail and David Haywood added some more NMK games to the Bombjack Twin driver but they all suffer from unemulated protection and don't work very well. Warlock submitted an update to the input port routines, fixing some bugs and improving wheel and pedal support. Bryan McPhail fixed Super Chase input ports and cleaned up the driver a little. J&uuml;rgen Buchm&uuml;ller added some more functionality to the NEC uPD7810 CPU core. Olivier Galibert added linescroll support to the Konami K054157 emulation, used by Xexex, GI Joe and Asterix. Mike Coates fixed several bugs in the ASM 68k core.
					</p>
				</div>

				<div class="row">
					<h2>2001-03-03</h2>
					<p>
					David Haywood added Thunder Dragon to the Bombjack Twin driver. Marco Cassili partly fixed dip switch settings in Thunder Dragon. Olivier Galibert sped up Asterix graphics emulation. Nicola Salmoria added Blazing Tornado to the Metro driver, and fixed 8bpp tile support so that Bal Cube now works properly as well. Blazing Tornado however lacks background graphics. David Graves added the correct PROMs to the Darius driver. J&uuml;rgen Buchm&uuml;ller fixed a few bugs in the NEC uPD7810 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0103/tdra_1.png" alt="Thunder Dragon (c) 1991 NMK" width="224" height="256" />
						<img src="wippics/0103/tdra_2.png" alt="The gameplay of Thunder Dragon" width="224" height="256" />
						<img src="wippics/0103/tdra_3.png" alt="The gameplay of Thunder Dragon" width="224" height="256" />
						<img src="wippics/0103/tdra_4.png" alt="The gameplay of Thunder Dragon" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0103/blzn_1.png" alt="Blazing Tornado (c) 1994 Human" width="320" height="224" />
						<img src="wippics/0103/blzn_2.png" alt="The intro of Blazing Tornado" width="320" height="224" />
						<img src="wippics/0103/blzn_3.png" alt="The gameplay of Blazing Tornado" width="320" height="224" />
						<img src="wippics/0103/blzn_4.png" alt="The gameplay of Blazing Tornado" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-03-02</h2>
					<p>
					Mike Coates fixed the ASM 68k core to compile on *nix. Olivier Galibert sent in a driver for Asterix, however it lacks linescroll, used in the race stage. Nicola Salmoria added another revision of Asterix to the driver.
					</p>
					<div class="wippix">
						<img src="wippics/0103/aste_1.png" alt="Asterix (c) 1992 Konami" width="288" height="224" />
						<img src="wippics/0103/aste_2.png" alt="The intro of Asterix" width="288" height="224" />
						<img src="wippics/0103/aste_3.png" alt="The intro of Asterix" width="288" height="224" />
						<img src="wippics/0103/aste_4.png" alt="The gameplay of Asterix" width="288" height="224" />
						<img src="wippics/0103/aste_5.png" alt="The gameplay of Asterix" width="288" height="224" />
						<img src="wippics/0103/aste_6.png" alt="The gameplay of Asterix" width="288" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2001-03-01</h2>
					<p>
					Luca Elia sent in a driver for Tetris Plus 2. J&uuml;rgen Buchm&uuml;ller wrote a CPU core for NEC uPD7810, but it still lacks some features. David Haywood and Nicola Salmoria added Gunnail to the Bombjack Twin driver. Olivier Galibert fixed the second road in Outrun. Mathis Rosenhauer fixed screenshots in the direct color modes.
					</p>
					<div class="wippix">
						<img src="wippics/0103/tepl_1.png" alt="Tetris Plus 2 (c) 1997 Jaleco" width="320" height="224" />
						<img src="wippics/0103/tepl_2.png" alt="The intro of Tetris Plus 2" width="320" height="224" />
						<img src="wippics/0103/tepl_3.png" alt="The gameplay of Tetris Plus 2" width="320" height="224" />
						<img src="wippics/0103/tepl_4.png" alt="The gameplay of Tetris Plus 2" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0103/gunn_1.png" alt="Gunnail (c) 1993 NMK" width="224" height="384" />
						<img src="wippics/0103/gunn_2.png" alt="The intro of Gunnail" width="224" height="384" />
						<img src="wippics/0103/gunn_3.png" alt="The gameplay of Gunnail" width="224" height="384" />
						<img src="wippics/0103/gunn_4.png" alt="The gameplay of Gunnail" width="224" height="384" />
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
