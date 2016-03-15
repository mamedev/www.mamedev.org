<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>July 2004 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2004-07-31</h2>
					<p>
					Fabrice Arzeno added a World version of Columns II to the Sega System C2 driver. Brian A. Troha fixed an erroneous default string in the itech32 driver and header information about Dunk Mania in the Namco System 11 driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-30</h2>
					<p>
					Pierpaolo Prazzoli added another ROM set of Le Bagnard to the Bagman driver. El Condor submitted an update which removes the last remains of PORT_CHEAT from drivers. R. Belmont fixed the sprite vs. tilemap priority and positioning in the Namco System FL driver, fixing Final Lap R's intro and other things.
					</p>
					<div class="wippix">
						<img src="wippics/0407/finalapr_5.png" alt="Final Lap R (c) 1993 Namco" width="288" height="224" />
						<img src="wippics/0407/finalapr_6.png" alt="The intro of Final Lap R" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-29</h2>
					<p>
					Nathan Woods added a few MESS specific tweaks to the new input port code and updated a bunch of drivers to use the new default strings for input port definitions.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-28</h2>
					<p>
					El Condor submitted another few updates to various drivers and resubmitted old fixes updated to 0.84u5 code.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-27</h2>
					<p>
					El Condor submitted a bunch of updates to drivers removing the usage of the obsoleted PORT_CHEAT definition.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-26</h2>
					<p>
					Barry Rodewald sent in an update to the ZN driver fixing the ROM loading of the QSound sample ROMs, improving the music in Capcom ZN games.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-25</h2>
					<p>
					David Haywood sent in skeleton drivers for Virtual Bowling and Champion List II, added two new games to The Great Wall driver but they don't work yet, added another clone of China Dragon and he added Puzzle Star to the PGM driver but it also does not work because of protection. Aaron Giles changed the format of the .cfg files to use XML and revamped most of the input and input port system, adding much flexibility in for example the mapping of analog axes. Aaron Giles also added 32-bit port read handlers and other support for 32-bit ports.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-24</h2>
					<p>
					smf hooked up the NVRAM correctly in the Namco System 12 driver. David Haywood resubmitted Paul Priest's old Gal's Panic update with a different ROM set.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-23</h2>
					<p>
					f205v submitted an addition of another ROM set to Flashgal in the Kyugo driver. Ville Linde fixed some formatting issues with the disassembler in the i386 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-22</h2>
					<p>
					Nathan Woods added a MESS specific variable to inptport.h. Aaron Giles forwarded info about the correct framerate for Superman from MAMETesters. David Haywood sent in some code cleanups to the Rabbit driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-21</h2>
					<p>
					R. Belmont added a new set of Dunk Mania to the Namco System 11 driver and noted that it had started working at some point without anybody noticing. Lawrence Gold sent in a small patch removing an XMAME-specific #ifdef. Brian A. Troha added the newly dumped LA4 version of High Impact Football to the Midway Y-unit driver. Curt Coder fixed the disassembly in mirrored memory regions in the M6502 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0407/dunkmnia_1.png" alt="Dunk Mania (c) 1995 Namco" width="640" height="480" />
						<img src="wippics/0407/dunkmnia_2.png" alt="The intro of Dunk Mania" width="640" height="480" />
						<img src="wippics/0407/dunkmnia_3.png" alt="The intro of Dunk Mania" width="640" height="480" />
						<img src="wippics/0407/dunkmnia_4.png" alt="The intro of Dunk Mania" width="640" height="480" />
						<img src="wippics/0407/dunkmnia_5.png" alt="The intro of Dunk Mania" width="640" height="480" />
						<img src="wippics/0407/dunkmnia_6.png" alt="The gameplay of Dunk Mania" width="640" height="480" />
						<img src="wippics/0407/dunkmnia_7.png" alt="The gameplay of Dunk Mania" width="640" height="480" />
						<img src="wippics/0407/dunkmnia_8.png" alt="The gameplay of Dunk Mania" width="640" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-20</h2>
					<p>
					David Haywood fixed the background scrolling and priority in the Rabbit driver and added zooming to it. Tomasz Slanina fixed 4bpp/8bpp tilemaps in the ST-0016 driver and sent in a preliminary NEC V810 CPU core, making Mayjinsen and Mayjinsen 2 playable, though Mayjinsen has heavy graphics glitches. Lawrence Gold sent in a small patch for 0.84 fixing various compile/link warnings. Arthur Peale submitted a fix for the coin slots in the Williams driver. Brian A. Troha fixed the DIP switch settings in Super Eagle Shot Golf.
					</p>
					<div class="wippix">
						<img src="wippics/0407/rabbit_zooming1.png" alt="Rabbit (c) 1997 Electronic Arts" width="320" height="224" />
						<img src="wippics/0407/rabbit_zooming2.png" alt="The intro of Rabbit" width="320" height="224" />
						<img src="wippics/0407/rabbit_zooming3.png" alt="The gameplay of Rabbit" width="320" height="224" />
						<img src="wippics/0407/rabbit_zooming4.png" alt="The gameplay of Rabbit" width="320" height="224" />
						<img src="wippics/0407/rabbit_zooming5.png" alt="The gameplay of Rabbit" width="320" height="224" />
						<img src="wippics/0407/rabbit_zooming6.png" alt="The gameplay of Rabbit" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/mayjinsn_1.png" alt="Mayjinsen (c) 1994 Seta" width="256" height="224" />
						<img src="wippics/0407/mayjinsn_2.png" alt="The intro of Mayjinsen" width="256" height="224" />
						<img src="wippics/0407/mayjinsn_3.png" alt="The intro of Mayjinsen" width="256" height="224" />
						<img src="wippics/0407/mayjinsn_4.png" alt="The gameplay of Mayjinsen" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/mayjisn2_1.png" alt="Mayjinsen 2 (c) 1994 Seta" width="256" height="224" />
						<img src="wippics/0407/mayjisn2_2.png" alt="The intro of Mayjinsen 2" width="256" height="224" />
						<img src="wippics/0407/mayjisn2_3.png" alt="The gameplay of Mayjinsen 2" width="256" height="224" />
						<img src="wippics/0407/mayjisn2_4.png" alt="The gameplay of Mayjinsen 2" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-19</h2>
					<p>
					David Haywood added the background tilemaps to the Rabbit driver but they are not handled correctly yet. Jarek Burczynski added a new function to calculate resistor net outputs for more accurate color decoding and changed Strike Bowling to use it.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-18</h2>
					<p>
					Mamesick submitted a fix for the 8-wayness of the input ports in the Jaleco Mega System 1 driver. David Haywood made some more progress with the Rabbit driver, though a lot is still missing. David Haywood also added new Altered Beast and Jyuohki ROM sets though they don't work because of protection. Stefan Jokisch renamed the Centipede bootlegs and replaced one graphics ROM in Caterpillar with a fixed copy. Andrea Mazzoleni fixed an invalid graphics layout in Donkey Kong, removed an illegal free() in the TMS34010 CPU core, fixed mixer.c to allow osd_start_audio_stream() to terminate with an error, fixed a temporary buffer allocation in the Aeroboto driver, fixed the dirty palette map initialization and exports a new function called code_to_oscode() which can be used by the OSD implementation for internal input code conversion. Brian A. Troha fixed the DIP switch settings in the Midway Zeus hardware driver. R. Belmont sent in a bug fix for the H8/3002 CPU timers, improving the music tempo in the Namco System 12 games.
					</p>
					<div class="wippix">
						<img src="wippics/0407/rabbit_bad1.png" alt="Rabbit (c) 1997 Electronic Arts" width="320" height="224" />
						<img src="wippics/0407/rabbit_bad2.png" alt="The gameplay of Rabbit" width="320" height="224" />
						<img src="wippics/0407/rabbit_bad3.png" alt="The gameplay of Rabbit" width="320" height="224" />
						<img src="wippics/0407/rabbit_bad4.png" alt="The gameplay of Rabbit" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-17</h2>
					<p>
					Fabrice Arzeno added US versions of Bloxeed and Rad Mobile. David Haywood made some progress with the Rabbit driver and R. Belmont included some preliminary notes about its sound in the driver. R. Belmont also ported a few sound balance tweaks from MAME32FX/Plus, affecting various drivers.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-16</h2>
					<p>
					Aaron Giles fixed the POKEY sound core's ALLPOT behaviour when held in reset, fixing the error reported in Asteroids test mode. Pierpaolo Prazzoli added Harem to the Galaxian driver, but it's not playable because of encryption. Andrew Gardner sent in a save state fix for games that use the generic bitmap graphics functions. David Haywood added another ROM set to Great 1000 Miles Rally 2 and a German version of Last Fortress to the Metro driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-15</h2>
					<p>
					Andrea Mazzoleni fixed the generic_fopen() function in fileio.c to ensure that a CRC is present before using it. Aaron Giles cleaned up and reorganized the DCS sound core and added a feature to tweak a game's refresh rate if -cheat is enabled.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-14</h2>
					<p>
					Gunbarich, Vasara 2 and Monster Farm Jump were re-sent and included. Brian A. Troha added a version of Whizz called Twin Falcons to the Side Arms driver. Andrea Mazzoleni extended the meaning of the driver.status XML entry to give more information about a game's status to frontends. smf cleaned up the SIO timer functionality in the PSX hardware emulation. Ville Linde added support for external read/write handlers to the YMF271, hooked up the flash ROMs (though the flash ROM updating doesn't work correctly yet) and fixed various crash bugs in Raiden Fighters 2. R. Belmont added sprites to the Namco System FL driver, they partly work in Final Lap R but not at all in Speed Racer.
					</p>
					<div class="wippix">
						<img src="wippics/0407/gnbarich_1.png" alt="Gunbarich (c) 2001 Psikyo" width="224" height="320" />
						<img src="wippics/0407/gnbarich_2.png" alt="The intro of Gunbarich" width="224" height="320" />
						<img src="wippics/0407/gnbarich_3.png" alt="The intro of Gunbarich" width="224" height="320" />
						<img src="wippics/0407/gnbarich_4.png" alt="The intro of Gunbarich" width="224" height="320" />
						<img src="wippics/0407/gnbarich_5.png" alt="The gameplay of Gunbarich" width="224" height="320" />
						<img src="wippics/0407/gnbarich_6.png" alt="The gameplay of Gunbarich" width="224" height="320" />
						<img src="wippics/0407/gnbarich_7.png" alt="The gameplay of Gunbarich" width="224" height="320" />
						<img src="wippics/0407/gnbarich_8.png" alt="The gameplay of Gunbarich" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/vasara2_1.png" alt="Vasara 2 (c) 2001 Visco" width="240" height="336" />
						<img src="wippics/0407/vasara2_2.png" alt="The intro of Vasara 2" width="240" height="336" />
						<img src="wippics/0407/vasara2_3.png" alt="The intro of Vasara 2" width="240" height="336" />
						<img src="wippics/0407/vasara2_4.png" alt="The gameplay of Vasara 2" width="240" height="336" />
						<img src="wippics/0407/vasara2_5.png" alt="The gameplay of Vasara 2" width="240" height="336" />
						<img src="wippics/0407/vasara2_6.png" alt="The gameplay of Vasara 2" width="240" height="336" />
						<img src="wippics/0407/vasara2_7.png" alt="The gameplay of Vasara 2" width="240" height="336" />
						<img src="wippics/0407/vasara2_8.png" alt="The gameplay of Vasara 2" width="240" height="336" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/mfjump_1.png" alt="Monster Farm Jump (c) 2001 Tecmo" width="512" height="480" />
						<img src="wippics/0407/mfjump_2.png" alt="The intro of Monster Farm Jump" width="512" height="480" />
						<img src="wippics/0407/mfjump_3.png" alt="The intro of Monster Farm Jump" width="512" height="480" />
						<img src="wippics/0407/mfjump_4.png" alt="The intro of Monster Farm Jump" width="512" height="480" />
						<img src="wippics/0407/mfjump_5.png" alt="The gameplay of Monster Farm Jump" width="512" height="480" />
						<img src="wippics/0407/mfjump_6.png" alt="The gameplay of Monster Farm Jump" width="512" height="480" />
						<img src="wippics/0407/mfjump_7.png" alt="The gameplay of Monster Farm Jump" width="512" height="480" />
						<img src="wippics/0407/mfjump_8.png" alt="The gameplay of Monster Farm Jump" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-13</h2>
					<p>
					Pierpaolo Prazzoli sent in a driver for Trivia Genius, it's playable but missing colors and sound. Pierpaolo Prazzoli also sent in an update to the Portraits driver, fixing scrolling, screen resolution, service switches and coins, added NVRAM, a fake photo and he added missing ROMs and another ROM set. Andrew Gardner sent in a save state fix for the IREM M-62 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0407/trvgns_1.png" alt="Trivia Genius (c) 19?? &lt;unknown&gt;" width="256" height="224" />
						<img src="wippics/0407/trvgns_2.png" alt="The intro of Trivia Genius" width="256" height="224" />
						<img src="wippics/0407/trvgns_3.png" alt="The gameplay of Trivia Genius" width="256" height="224" />
						<img src="wippics/0407/trvgns_4.png" alt="The gameplay of Trivia Genius" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-12</h2>
					<p>
					Mike Coates added Digger to the CVS driver. Ville Linde sent in an update to the Seibu SPI driver removing all the remaining sound hacks, adding partial support for external memory access to the YMF271 and he added some missing opcodes to the i386 CPU core. David Haywood fixed the ROM loading in Popper (Hard Head bootleg), fixing the level progression. R. Belmont added a small kludge to the Namco System 12 custom DMA which makes Derby Quiz My Dream Horse playable, but it has corrupted graphics and crashes sometimes.
					</p>
					<div class="wippix">
						<img src="wippics/0407/digger_1.png" alt="Digger (c) 1980 Sega" width="224" height="256" />
						<img src="wippics/0407/digger_2.png" alt="The intro of Digger" width="224" height="256" />
						<img src="wippics/0407/digger_3.png" alt="The gameplay of Digger" width="224" height="256" />
						<img src="wippics/0407/digger_4.png" alt="The gameplay of Digger" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/mdhorse_1.png" alt="Derby Quiz My Dream Horse (c) 1998 Namco" width="512" height="480" />
						<img src="wippics/0407/mdhorse_2.png" alt="The intro of Derby Quiz My Dream Horse" width="512" height="480" />
						<img src="wippics/0407/mdhorse_3.png" alt="The intro of Derby Quiz My Dream Horse" width="512" height="480" />
						<img src="wippics/0407/mdhorse_4.png" alt="The intro of Derby Quiz My Dream Horse" width="512" height="480" />
						<img src="wippics/0407/mdhorse_5.png" alt="The intro of Derby Quiz My Dream Horse" width="512" height="480" />
						<img src="wippics/0407/mdhorse_6.png" alt="The gameplay of Derby Quiz My Dream Horse" width="512" height="480" />
						<img src="wippics/0407/mdhorse_7.png" alt="The gameplay of Derby Quiz My Dream Horse" width="512" height="480" />
						<img src="wippics/0407/mdhorse_8.png" alt="The gameplay of Derby Quiz My Dream Horse" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-11</h2>
					<p>
					David Haywood added Popper (Hard Head bootleg) to the SunA8 driver. Aaron Giles fixed a bug that prevented changes to the default controls from sticking, fixed various errors in the Voodoo emulation, added support for non-integral clock multipliers in the MIPS3 CPU core and added Hyperdrive to the Seattle driver. R. Belmont submitted an update to rules.mak for the new H8 CPU core. R. Belmont also updated the Namco System FL driver so that Final Lap R works in the attract mode except for the ROZ graphics layers. Andrea Mazzoleni sent in a patch that extends the meaning of the driver.status entry in the XML game info. Aaron Giles fixed a MIPS core bug that caused Killer Instinct 1 &amp; 2 and the preliminary Hyper Neogeo 64 driver to crash.
					</p>
					<div class="wippix">
						<img src="wippics/0407/pop_hh_1.png" alt="Popper (Hard Head bootleg) (c) 1988 bootleg" width="256" height="224" />
						<img src="wippics/0407/pop_hh_2.png" alt="The intro of Popper (Hard Head bootleg)" width="256" height="224" />
						<img src="wippics/0407/pop_hh_3.png" alt="The gameplay of Popper (Hard Head bootleg)" width="256" height="224" />
						<img src="wippics/0407/pop_hh_4.png" alt="The gameplay of Popper (Hard Head bootleg)" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/hyprdriv_1.png" alt="Hyperdrive (c) 1998 Midway" width="511" height="384" />
						<img src="wippics/0407/hyprdriv_2.png" alt="The intro of Hyperdrive" width="511" height="384" />
						<img src="wippics/0407/hyprdriv_3.png" alt="The intro of Hyperdrive" width="511" height="384" />
						<img src="wippics/0407/hyprdriv_4.png" alt="The gameplay of Hyperdrive" width="511" height="384" />
						<img src="wippics/0407/hyprdriv_5.png" alt="The gameplay of Hyperdrive" width="511" height="384" />
						<img src="wippics/0407/hyprdriv_6.png" alt="The gameplay of Hyperdrive" width="511" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/finalapr_1.png" alt="Final Lap R (c) 1993 Namco" width="288" height="224" />
						<img src="wippics/0407/finalapr_2.png" alt="The attract mode of Final Lap R" width="288" height="224" />
						<img src="wippics/0407/finalapr_3.png" alt="The attract mode of Final Lap R" width="288" height="224" />
						<img src="wippics/0407/finalapr_4.png" alt="The attract mode of Final Lap R" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-10</h2>
					<p>
					Andrew Gardner added save state support to the Namco System 1 driver. R. Belmont adapted the Hitachi H8/3002 MCU core and the Namco C352 PCM sound core from Zinc and updated the Namco System 12 driver to use them, making Super World Stadium '99 and Paca Paca Passion playable and Golgo 13 working but the gun input emulation is not working correctly yet.
					</p>
					<div class="wippix">
						<img src="wippics/0407/sws99_1.png" alt="Super World Stadium '99 (c) 1999 Namco" width="640" height="480" />
						<img src="wippics/0407/sws99_2.png" alt="The intro of Super World Stadium '99" width="640" height="480" />
						<img src="wippics/0407/sws99_3.png" alt="The intro of Super World Stadium '99" width="640" height="480" />
						<img src="wippics/0407/sws99_4.png" alt="The gameplay of Super World Stadium '99" width="640" height="480" />
						<img src="wippics/0407/sws99_5.png" alt="The gameplay of Super World Stadium '99" width="640" height="480" />
						<img src="wippics/0407/sws99_6.png" alt="The gameplay of Super World Stadium '99" width="640" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/pacapp_1.png" alt="Paca Paca Passion (c) 1998 Produce" width="640" height="480" />
						<img src="wippics/0407/pacapp_2.png" alt="The intro of Paca Paca Passion" width="640" height="480" />
						<img src="wippics/0407/pacapp_3.png" alt="The intro of Paca Paca Passion" width="640" height="480" />
						<img src="wippics/0407/pacapp_4.png" alt="The intro of Paca Paca Passion" width="640" height="480" />
						<img src="wippics/0407/pacapp_5.png" alt="The gameplay of Paca Paca Passion" width="640" height="480" />
						<img src="wippics/0407/pacapp_6.png" alt="The gameplay of Paca Paca Passion" width="640" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0407/golgo13_1.png" alt="Golgo 13 (c) 1999 Namco" width="512" height="480" />
						<img src="wippics/0407/golgo13_2.png" alt="The intro of Golgo 13" width="512" height="480" />
						<img src="wippics/0407/golgo13_3.png" alt="The intro of Golgo 13" width="512" height="480" />
						<img src="wippics/0407/golgo13_4.png" alt="The intro of Golgo 13" width="512" height="480" />
						<img src="wippics/0407/golgo13_5.png" alt="The gameplay of Golgo 13" width="512" height="480" />
						<img src="wippics/0407/golgo13_6.png" alt="The gameplay of Golgo 13" width="512" height="480" />
						<img src="wippics/0407/golgo13_7.png" alt="The gameplay of Golgo 13" width="512" height="480" />
						<img src="wippics/0407/golgo13_8.png" alt="The gameplay of Golgo 13" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-07-09</h2>
					<p>
					Fujix fixed a small bug in the -listxml additions.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-08</h2>
					<p>
					El Condor submitted a bunch of input port cleanups for various drivers.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-07</h2>
					<p>
					David Haywood fixed the background graphics scrolling in Mustang.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-06</h2>
					<p>
					Brian A. Troha fixed the ROM file names in the recent Crazy Kong additions.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-05</h2>
					<p>
					R. Belmont fixed bugs in the i960 CPU core, including PC and AC registers getting mixed up on return from interrupts, rewrote the frame cache mechanism and aligned reads and writes - allowing Final Lap R to almost reach the attract mode.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-04</h2>
					<p>
					David Haywood added another Nibbler ROM set to the Rock-Ola driver. Fujix submitted a change to -listxml for more detailed game status output. Aaron Giles changed all the drivers to use the new input port forms and removed support for older format .cfg files.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-03</h2>
					<p>
					Lee Taylor and Martin White added another (much harder) version of Crazy Kong with different level layouts. El Condor resubmitted the Lovely Cards input port fixes updated to 0.84. R. Belmont fixed bugs in various instructions in the i960 CPU core and improved its disassembler.
					</p>
				</div>

				<div class="row">
					<h2>2004-07-02</h2>
					<p>
					El Condor submitted some input port fixes to the Lovely Cards driver.
					</p>
				</div>

				<div class="rowlast">
					<h2>2004-07-01</h2>
					<p>
					David Haywood added an alternate protected version to the Super Qix driver. David Haywood also added Conquer to the Scramble driver but it doesn't work.
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
