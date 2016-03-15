<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>April 2004 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2004-04-30</h2>
					<p>
					Stefan Jokisch fixed the STX (abs) cycle count in the M6502 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-29</h2>
					<p>
					Angelo Salese did some debug reorganization in the ST-V VDP2 emulation and fixed a bug in the graphics window mode. smf fixed Star Gladiator and Street Fighter EX in the ZN driver so they work fully now (apart from random lockups).
					</p>
					<div class="wippix">
						<img src="wippics/0404/starglad_1.png" alt="Star Gladiator (c) 1996 Capcom" width="512" height="480" />
						<img src="wippics/0404/starglad_2.png" alt="The intro of Star Gladiator" width="512" height="480" />
						<img src="wippics/0404/starglad_3.png" alt="The gameplay of Star Gladiator" width="512" height="480" />
						<img src="wippics/0404/starglad_4.png" alt="The gameplay of Star Gladiator" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/sfex_1.png" alt="Street Fighter EX (c) 1996 Capcom" width="512" height="480" />
						<img src="wippics/0404/sfex_2.png" alt="The intro of Street Fighter EX" width="512" height="480" />
						<img src="wippics/0404/sfex_3.png" alt="The gameplay of Street Fighter EX" width="512" height="480" />
						<img src="wippics/0404/sfex_4.png" alt="The gameplay of Street Fighter EX" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-28</h2>
					<p>
					David Haywood sent in a preliminary driver for One &amp; Two, it works but is somewhat messed up. Chack'n fixed file names in the VSNES driver. smf fixed Strider 2 in the ZN driver so that it is playable, though it sometimes locks up at level bosses. ElSemi submitted a SCSP update, fixing envelope rates and adding key rate scaling support and ringbuffer support. Stefan Jokisch added color emulation to Moon Base.
					</p>
					<div class="wippix">
						<img src="wippics/0404/onetwo_1.png" alt="One &amp; Two (c) 1997 Barko" width="512" height="512" />
						<img src="wippics/0404/onetwo_2.png" alt="The intro of One &amp; Two" width="512" height="512" />
						<img src="wippics/0404/onetwo_3.png" alt="The gameplay of One &amp; Two" width="512" height="512" />
						<img src="wippics/0404/onetwo_4.png" alt="The gameplay of One &amp; Two" width="512" height="512" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/strider2_1.png" alt="Strider 2 (c) 1999 Capcom" width="512" height="480" />
						<img src="wippics/0404/strider2_2.png" alt="The intro of Strider 2" width="512" height="480" />
						<img src="wippics/0404/strider2_3.png" alt="The intro of Strider 2" width="512" height="480" />
						<img src="wippics/0404/strider2_4.png" alt="The intro of Strider 2" width="512" height="480" />
						<img src="wippics/0404/strider2_5.png" alt="The gameplay of Strider 2" width="320" height="240" />
						<img src="wippics/0404/strider2_6.png" alt="The gameplay of Strider 2" width="320" height="240" />
						<img src="wippics/0404/strider2_7.png" alt="The gameplay of Strider 2" width="320" height="240" />
						<img src="wippics/0404/strider2_8.png" alt="The gameplay of Strider 2" width="320" height="240" />
						<img src="wippics/0404/strider2_9.png" alt="The gameplay of Strider 2" width="320" height="240" />
						<img src="wippics/0404/strider2_10.png" alt="The gameplay of Strider 2" width="320" height="240" />
						<img src="wippics/0404/strider2_11.png" alt="The gameplay of Strider 2" width="320" height="240" />
						<img src="wippics/0404/strider2_12.png" alt="The gameplay of Strider 2" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-27</h2>
					<p>
					Brian A. Troha fixed DIP switch settings in Gold Medalist, Break Through, Got-Ya, American Horseshoes and Plotting. Phil Stroffolino sent in an update to the Namco System 22 driver with more accurate emulation of the various custom DSPs. Nathan Woods sent in a small patch to fileio.c fixing some MESS functionality. Andrea Mazzoleni added a one character back buffer to mame_ungetc(), improving dat file reading performance somewhat. Brian A. Troha added the Time Warner version of Area 51 to the Cojag driver. Olivier Galibert fixed a bunch of compile warnings in the i960 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-26</h2>
					<p>
					Ville Linde fixed the pitch in the YMF271 sound core, greatly improving music in Brave Blade. Nathan Woods sent in some i386 improvements, including better support for illegal instructions, implemented LOCK and RETF and fixed a bug in LMSW. smf sent in an update to the PSX hardware improving the SIO ports, and he added a preliminary Namco System 10 driver that doesn't do anything at this stage. ClawGrip added Inca (a clone of Maya) to the Dynax driver.
					</p>
					<div class="wippix">
						<img src="wippics/0404/inca_1.png" alt="Inca (c) 199? &lt;unknown&gt;" width="512" height="480" />
						<img src="wippics/0404/inca_2.png" alt="The intro of Inca" width="512" height="480" />
						<img src="wippics/0404/inca_3.png" alt="The gameplay of Inca" width="512" height="480" />
						<img src="wippics/0404/inca_4.png" alt="The gameplay of Inca" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-25</h2>
					<p>
					R. Belmont improved the RAM/ROM switching in the Namco System FL driver and added default NVRAM images to it but the games still don't work at all. Pierpaolo Prazzoli added Space Raider to the Lady Bug driver but it's far from complete. Ville Linde fixed a few graphics problems in Viper Phase 1 and fixed a bug in the REP opcode so that it doesn't break the SPI games. Stefan Jokisch sent in a driver for Atari's Mini Golf.
					</p>
					<div class="wippix">
						<img src="wippics/0404/sraider_1.png" alt="Space Raider (c) 1982 Universal" width="192" height="240" />
						<img src="wippics/0404/sraider_2.png" alt="The intro of Space Raider" width="192" height="240" />
						<img src="wippics/0404/sraider_3.png" alt="The gameplay of Space Raider" width="192" height="240" />
						<img src="wippics/0404/sraider_4.png" alt="The gameplay of Space Raider" width="192" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/mgolf_1.png" alt="Mini Golf (c) 1978 Atari" width="224" height="256" />
						<img src="wippics/0404/mgolf_2.png" alt="The gameplay of Mini Golf" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-24</h2>
					<p>
					R. Belmont sent in a i960 CPU core and disassembler written by him, Olivier Galibert and Farfetch'd, and a preliminary (not working) Namco System FL driver with thanks to information from ElSemi. David Haywood sent in a preliminary MACS driver which also does not work at all. Lawrence Gold sent in a small patch for romcmp.c compiling problems.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-23</h2>
					<p>
					Nathan Woods implemented segment limits and 16-bit interrupts in the i386 CPU core. David Haywood added a few new idle skips to the Seibu SPI driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-22</h2>
					<p>
					Ville Linde added another truckload of new opcodes to the i386 CPU core and fixed various bugs in it. smf changed the ROMs in Beastorizer to a probably more correct version and fixed the bootleg so that it works fully now.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-21</h2>
					<p>
					Nathan Woods implemented a bunch of new opcodes in the i386 disassembler and added a safety check for negative cycle counts in the CPU core execution.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-20</h2>
					<p>
					R. Belmont added support for looping samples and fixed a few other things in the ST-0016 sound chip emulation. Brian A. Troha fixed DIP switches in Karate Blazers, Turbo Force, Gal's Panic and clones and he added the R3000 CPU version of Area 51 to the Cojag driver. Pierpaolo Prazzoli added a Ninja clone to the Sega System 1 driver. Ville Linde sent in an update to the i386 CPU core and the Seibu SPI driver, fixing the missing keys in E-Jan High School, adding a layer enable register, preliminary Dallas RTC/CMOS emulation and he wrote a new i386 disassembler. David Haywood added the Asian version of Battle Balls to the Seibu SPI driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-19</h2>
					<p>
					R. Belmont added sound to the Seta ST-0016 driver and David Haywood fixed a slight bug in it. Lawrence Gold sent in a patch to fix some compile and link warnings. Malice submitted a NVRAM load/save fix for the Sega Model 1 driver. smf fixed a couple of issues when auditing hard disks without checksums.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-18</h2>
					<p>
					David Haywood added the Japanese version of Super Pang to the Mitchell driver but it doesn't work because of encryption. Olivier Galibert emulated the DSP in the SSV system, which is used by Drift Out '94 and Twin Eagle 2. David Haywood fixed the sprite placement in Twin Eagle 2. Brian A. Troha improved the Raiden 2 DIP switch settings yet again.
					</p>
					<div class="wippix">
						<img src="wippics/0404/twineagl_2_1.png" alt="Twin Eagle 2 (c) 1994 Seta" width="240" height="336" />
						<img src="wippics/0404/twineagl_2_2.png" alt="The intro of Twin Eagle 2" width="240" height="336" />
						<img src="wippics/0404/twineagl_2_3.png" alt="The gameplay of Twin Eagle 2" width="240" height="336" />
						<img src="wippics/0404/twineagl_2_4.png" alt="The gameplay of Twin Eagle 2" width="240" height="336" />
						<img src="wippics/0404/twineagl_2_5.png" alt="The gameplay of Twin Eagle 2" width="240" height="336" />
						<img src="wippics/0404/twineagl_2_6.png" alt="The gameplay of Twin Eagle 2" width="240" height="336" />
						<img src="wippics/0404/twineagl_2_7.png" alt="The gameplay of Twin Eagle 2" width="240" height="336" />
						<img src="wippics/0404/twineagl_2_8.png" alt="The gameplay of Twin Eagle 2" width="240" height="336" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-17</h2>
					<p>
					Ville Linde fixed another few bugs in the i386 CPU core which caused problems in the Battle Balls attract mode and game, E-Jan High School coining up and Viper Phase 1 (which is now playable except for the encrypted graphics). Malice submitted some DIP switch fixes to Raiden 2. Tomasz Slanina added Mayjinsen, Mayjinsen 2, Super Eagle Shot and Super Real Mahjong P5 to the Seta ST-0016 driver, but none of them work. David Haywood added some idle skips to the Seibu SPI driver. Brian A. Troha also improved the DIP switch settings in Raiden 2 and Raiden DX. Aaron Giles fixed the MIPS software interrupts again and fixed a few minor things in the Seattle driver. Pierpaolo Prazzoli fixed a few wrong opcodes in the Hyperstone CPU core and improved the preliminary Lord of Gun driver a little but it still doesn't work at all. R. Belmont cleaned up Shiriru's YMZ280B update which has a little more accurate sound generation, fixing a music looping bug in the Super Kaneko Nova System driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-16</h2>
					<p>
					Ville Linde fixed several bugs in the shift/rotate instructions in the i386 CPU core, correcting the bosses in Raiden Fighters. Tomasz Slanina submitted a driver for Seta ST-0016 system, supporting Neratte Chuu! and Renju Kizoku playably though without sound emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0404/nratechu_1.png" alt="Neratte Chuu! (c) 1996 Seta" width="320" height="240" />
						<img src="wippics/0404/nratechu_2.png" alt="The attract mode of Neratte Chuu!" width="320" height="240" />
						<img src="wippics/0404/nratechu_3.png" alt="The attract mode of Neratte Chuu!" width="320" height="240" />
						<img src="wippics/0404/nratechu_4.png" alt="The intro of Neratte Chuu!" width="320" height="240" />
						<img src="wippics/0404/nratechu_5.png" alt="The gameplay of Neratte Chuu!" width="320" height="240" />
						<img src="wippics/0404/nratechu_6.png" alt="The gameplay of Neratte Chuu!" width="320" height="240" />
						<img src="wippics/0404/nratechu_7.png" alt="The gameplay of Neratte Chuu!" width="320" height="240" />
						<img src="wippics/0404/nratechu_8.png" alt="The gameplay of Neratte Chuu!" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/renju_1.png" alt="Renju Kizoku (c) 1994 Visco" width="320" height="240" />
						<img src="wippics/0404/renju_2.png" alt="The attract mode of Renju Kizoku" width="320" height="240" />
						<img src="wippics/0404/renju_3.png" alt="The intro of Renju Kizoku" width="320" height="240" />
						<img src="wippics/0404/renju_4.png" alt="The intro of Renju Kizoku" width="320" height="240" />
						<img src="wippics/0404/renju_5.png" alt="The intro of Renju Kizoku" width="320" height="240" />
						<img src="wippics/0404/renju_6.png" alt="The gameplay of Renju Kizoku" width="320" height="240" />
						<img src="wippics/0404/renju_7.png" alt="The gameplay of Renju Kizoku" width="320" height="240" />
						<img src="wippics/0404/renju_8.png" alt="The gameplay of Renju Kizoku" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-15</h2>
					<p>
					Stefan Jokisch fixed the missing enemy sprites in Noboranka and the service mode switch in Leprechaun. Nathan Woods sent in an update to the i386 CPU core with a few new opcodes and added the MESS specific TMS7000 core to the list of CPU cores in cpuintrf.c. David Haywood added sprite flipping to the Seibu SPI driver. Ville Linde improved the sprites otherwise and corrected the palette banking of tilemaps in it. BouKiCHi submitted an idle skip update to Kaitei Daisensou. R. Belmont added full sound and music to the Sega Model 1 driver, but Star Wars Arcade is missing the sound ROMs. Mariusz Wojcieszek fixed a sprite rendering bug in the ST-V driver where some sprites got distorted to the wrong size, improving Othello Shiyouyo title screen, helicopter in Die Hard Arcade, attract modes in Cotton Boomerang and Hanagumi Taisen Columns and it also makes Super Major League almost playable. smf fixed the GPL12 opcode in the PSX GTE which caused problems with the ground graphics in Cool Boarders Arcade Jam.
					</p>
					<div class="wippix">
						<img src="wippics/0404/batlball_spritedecode1.png" alt="Sprite decoding improvements in Battle Balls" width="320" height="240" />
						<img src="wippics/0404/batlball_spritedecode2.png" alt="Sprite decoding improvements in Battle Balls" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/ejanhs_spritedecode1.png" alt="Sprite decoding improvements in E-Jan High School" width="320" height="240" />
						<img src="wippics/0404/ejanhs_spritedecode2.png" alt="Sprite decoding improvements in E-Jan High School" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/raidnfgt_spritedecode1.png" alt="Sprite decoding improvements in Raiden Fighters" width="240" height="320" />
						<img src="wippics/0404/raidnfgt_spritedecode2.png" alt="Sprite decoding improvements in Raiden Fighters" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/viperp1_spritedecode1.png" alt="Sprite decoding improvements in Viper Phase 1" width="240" height="320" />
						<img src="wippics/0404/viperp1_spritedecode2.png" alt="Sprite decoding improvements in Viper Phase 1" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/sleague_1.png" alt="Super Major League (c) 1995 Sega" width="704" height="448" />
						<img src="wippics/0404/sleague_2.png" alt="The attract mode of Super Major League" width="704" height="448" />
						<img src="wippics/0404/sleague_3.png" alt="The intro of Super Major League" width="704" height="448" />
						<img src="wippics/0404/sleague_4.png" alt="The gameplay of Super Major League" width="704" height="448" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-14</h2>
					<p>
					Aaron Giles sent in an update to the Atari Seattle driver, adding Vapor TRX (resets when trying to start a game) and fixing various other issues in the driver and in the Voodoo graphics emulation. Phil Stroffolino and Quench fixed another bug in the sblk opcode in the TMS32025 CPU core. David Haywood fixed Brave Blade in the ZN driver so that it is fully playable with correct graphics now, and smf improved the bankswitching in it further.
					</p>
					<div class="wippix">
						<img src="wippics/0404/vaportrx_1.png" alt="Vapor TRX (c) 1998 Atari" width="511" height="512" />
						<img src="wippics/0404/vaportrx_2.png" alt="The attract mode of Vapor TRX" width="511" height="512" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/brave_blade_1.png" alt="Brave Blade (c) 2000 Eighting/Raizing" width="240" height="320" />
						<img src="wippics/0404/brave_blade_2.png" alt="The intro of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_3.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_4.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_5.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_6.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_7.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_8.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_9.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_10.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_11.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_12.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_13.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_14.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_15.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_16.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_17.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_18.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_19.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_20.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_21.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_22.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_23.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_24.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_25.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brave_blade_26.png" alt="The gameplay of Brave Blade" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-13</h2>
					<p>
					Ville Linde improved sprite drawing in the Seibu SPI driver and sound emulation started working in the single-board version of Raiden Fighters 2 (US). Aaron Giles fixed a bug in the MIPS DRC core that happened when directly accessing 2-byte values in big endian mode, and he fixed the software interrupts bug in a better way. Quench fixed a bug in the TMS32025 CPU core in which internal RAM was being dynamically reallocated at every call to the reset handler. Curt Coder submitted further cleanups to the Nibbler / Rock-ola drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0404/raidf_spriteimp_1.png" alt="Raiden Fighters improved 1" width="240" height="320" />
						<img src="wippics/0404/raidf_spriteimp_2.png" alt="Raiden Fighters improved 2" width="240" height="320" />
						<img src="wippics/0404/raidf_spriteimp_3.png" alt="Raiden Fighters improved 3" width="240" height="320" />
						<img src="wippics/0404/raidf_spriteimp_4.png" alt="Raiden Fighters improved 4" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/battleballs_sprite_imp_1.png" alt="Battle Balls improved 1" width="320" height="240" />
						<img src="wippics/0404/battleballs_sprite_imp_2.png" alt="Battle Balls improved 2" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-12</h2>
					<p>
					Aaron Giles fixed a bug in the MIPS CPU core where software interrupts were masked by the global IE flag. Olivier Galibert improved Raiden 2 sprites a little further, though they're still not perfect (the game itself is not playable because of protection).
					</p>
					<div class="wippix">
						<img src="wippics/0404/raidn2_betterspritedecrypt_1.png" alt="Raiden 2 (c) 1993 Seibu Kaihatsu" width="240" height="304" />
						<img src="wippics/0404/raidn2_betterspritedecrypt_2.png" alt="The intro of Raiden 2" width="240" height="304" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-11</h2>
					<p>
					ElSemi sent in some lighting fixes to the Sega Model 1 driver. Ville Linde improved the tilemap emulation further in the Seibu SPI driver, added support for alternate video hardware in Viper Phase 1 and added the mahjong controller to E-Jan High School but it doesn't work yet. R. Belmont sent in some cleanups to the Konami System GX driver. David Haywood added sprite drawing to the Raiden 2 driver, but it's still not playable.
					</p>
					<div class="wippix">
						<img src="wippics/0404/_wingwar_sky_ftr950_1.png" alt="Wing War before" width="496" height="384" />
						<img src="wippics/0404/_wingwar_sky_ftr950_2.png" alt="Wing War after" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/batlball_new1.png" alt="Battle Balls (c) 1995 Seibu Kaihatsu" width="320" height="240" />
						<img src="wippics/0404/batlball_new2.png" alt="The attract mode of Battle Balls" width="320" height="240" />
						<img src="wippics/0404/batlball_new3.png" alt="The intro of Battle Balls" width="320" height="240" />
						<img src="wippics/0404/batlball_new4.png" alt="The gameplay of Battle Balls" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/ejanhs_new1.png" alt="E-Jan High School (c) 1996 Seibu Kaihatsu" width="320" height="240" />
						<img src="wippics/0404/ejanhs_new2.png" alt="If you squint, you can see tits!" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/raidnfgt_bgimprov1.png" alt="Raiden Fighters background improved 1" width="240" height="320" />
						<img src="wippics/0404/raidnfgt_bgimprov2.png" alt="Raiden Fighters background improved 2" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/viperp1_new1.png" alt="Viper Phase 1 (c) 1995 Seibu Kaihatsu" width="240" height="320" />
						<img src="wippics/0404/viperp1_new2.png" alt="The attract mode of Viper Phase 1" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/raidn2_sprites.png" alt="Raiden 2 sprites" width="240" height="304" />
						<img src="wippics/0404/raidndx_sprites.png" alt="Raiden DX sprites" width="240" height="304" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-10</h2>
					<p>
					Stefan Jokisch added an alternate version of Leprechaun and Pirate Treasure (Leprechaun with different graphics) to the Leprechaun driver. Aaron Giles added some HLE to the sample upload commands in the DCS2 system, speeding up the Seattle games somewhat.
					</p>
					<div class="wippix">
						<img src="wippics/0404/piratetr_1.png" alt="Pirate Treasure (c) 1982 Tong Electronic Inc." width="256" height="256" />
						<img src="wippics/0404/piratetr_2.png" alt="The intro of Pirate Treasure" width="256" height="256" />
						<img src="wippics/0404/piratetr_3.png" alt="The gameplay of Pirate Treasure" width="256" height="256" />
						<img src="wippics/0404/piratetr_4.png" alt="The gameplay of Pirate Treasure" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-09</h2>
					<p>
					Aaron Giles removed a logerror from the vblank callback in cpuexec.c and fixed the slow booting in the Seattle driver. Ville Linde sent in another update to the Seibu SPI driver with much better graphics emulation, though still with encrypted graphics. smf fixed Raystorm which now works completely.
					</p>
					<div class="wippix">
						<img src="wippics/0404/raidnfgt_new_1.png" alt="Raiden Fighters improved 1" width="240" height="320" />
						<img src="wippics/0404/raidnfgt_new_2.png" alt="Raiden Fighters improved 2" width="240" height="320" />
						<img src="wippics/0404/raidnfgt_new_3.png" alt="Raiden Fighters improved 3" width="240" height="320" />
						<img src="wippics/0404/raidnfgt_new_4.png" alt="Raiden Fighters improved 4" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/raystorm_1.png" alt="Raystorm (c) 1996 Taito" width="512" height="480" />
						<img src="wippics/0404/raystorm_2.png" alt="The intro of Raystorm" width="512" height="480" />
						<img src="wippics/0404/raystorm_3.png" alt="The intro of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_4.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_5.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_6.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_7.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_8.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_9.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_10.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_11.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_12.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_13.png" alt="The gameplay of Raystorm" width="320" height="240" />
						<img src="wippics/0404/raystorm_14.png" alt="The gameplay of Raystorm" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-08</h2>
					<p>
					David Haywood sent in a preliminary driver for the Taito JC system, and R. Belmont improved it slightly. Aaron Giles sent in a fix for the masking of addresses and data in the debugger, NO_EXECUTE support for the dynamically recompiled code, cleaned up the Lethal Justice / Egg Venture drivers and fixed flicker in Egg Venture, and fixed another MIPS DRC bug that caused bad sky graphics in several Killer Instinct 2 levels. smf sent in another update to the 24-bit MDEC support in the PSX driver. Mariusz Wojcieszek added support for scrolling in the RGB0 layer, improving background graphics in Guardian Force, Cotton Boomerang and making Othello Shiyouyo fully playable. David Haywood added a small hack to the ST-V driver which makes Danchi de Hanafuda work. Curt Coder sent in an update to the Nibbler driver, adding SN76477 sound for the bomb effect, fixing DIP switches and doing other cleanups too. Fabrice Arzeno added an alternate version of Snow Brothers. Pierpaolo Prazzoli sent in some fixes to the Hyperstone CPU core. Nathan Woods sent in another patch that adds osd_die() to a few more places and implements the in/out instructions in the i386 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0404/taitojc.png" alt="Taito JC system" width="512" height="512" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/grdforce_bg1.png" alt="Guardian Force (c) 1998 Success" width="320" height="224" />
						<img src="wippics/0404/grdforce_bg2.png" alt="The gameplay of Guardian Force" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/cottonbm_ground1.png" alt="Cotton Boomerang backgrounds 1" width="352" height="224" />
						<img src="wippics/0404/cottonbm_ground2.png" alt="Cotton Boomerang backgrounds 2" width="352" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/othellos_1.png" alt="Othello Shiyouyo (c) 1998 Success" width="320" height="224" />
						<img src="wippics/0404/othellos_2.png" alt="The intro of Othello Shiyouyo" width="320" height="224" />
						<img src="wippics/0404/othellos_3.png" alt="The intro of Othello Shiyouyo" width="320" height="224" />
						<img src="wippics/0404/othellos_4.png" alt="The gameplay of Othello Shiyouyo" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/danchih_1.png" alt="Danchi de Hanafuda (c) 1999 Altron" width="320" height="240" />
						<img src="wippics/0404/danchih_2.png" alt="The intro of Danchi de Hanafuda" width="320" height="240" />
						<img src="wippics/0404/danchih_3.png" alt="The intro of Danchi de Hanafuda" width="320" height="240" />
						<img src="wippics/0404/danchih_4.png" alt="The gameplay of Danchi de Hanafuda" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-07</h2>
					<p>
					David Haywood sent in a preliminary driver for Lord of Gun which doesn't work because of protection. Aaron Giles added some comments to the Super Rider driver. Phil Stroffolino fixed a bug in the ldpk opcode in the TMS32025 CPU core. smf added support for 24-bit MDEC in the PSX driver, which is required by the Judge Dredd videos.
					</p>
				</div>

				<div class="row">
					<h2>2004-04-06</h2>
					<p>
					Ville Linde sent in another update to the Seibu SPI driver where Raiden Fighters now runs correctly, but still has encrypted graphics. R. Belmont added the Z80 bankswitching in the Seibu SPI driver, adding sound to some games in that driver. Aaron Giles sent in a driver for Super Rider which works fully except some sound effects might not be emulated yet. Mariusz Wojcieszek sent in another update to the ST-V driver, fixing local coordinate handling in VDP1 which fixes Power Instinct 3 - Groove on Fight completely.
					</p>
					<div class="wippix">
						<img src="wippics/0404/suprridr_1.png" alt="Super Rider (c) 1983 Taito" width="224" height="256" />
						<img src="wippics/0404/suprridr_2.png" alt="The gameplay of Super Rider" width="224" height="256" />
						<img src="wippics/0404/suprridr_3.png" alt="The gameplay of Super Rider" width="224" height="256" />
						<img src="wippics/0404/suprridr_4.png" alt="The gameplay of Super Rider" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/groove_1.png" alt="Power Instinct 3 - Groove on Fight (c) 1997 Atlus" width="320" height="224" />
						<img src="wippics/0404/groove_2.png" alt="The attract mode of Power Instinct 3 - Groove on Fight" width="320" height="224" />
						<img src="wippics/0404/groove_3.png" alt="The intro of Power Instinct 3 - Groove on Fight" width="320" height="224" />
						<img src="wippics/0404/groove_4.png" alt="The gameplay of Power Instinct 3 - Groove on Fight" width="320" height="224" />
						<img src="wippics/0404/groove_5.png" alt="The gameplay of Power Instinct 3 - Groove on Fight" width="320" height="224" />
						<img src="wippics/0404/groove_6.png" alt="The gameplay of Power Instinct 3 - Groove on Fight" width="320" height="224" />
						<img src="wippics/0404/groove_7.png" alt="The gameplay of Power Instinct 3 - Groove on Fight" width="320" height="224" />
						<img src="wippics/0404/groove_8.png" alt="The gameplay of Power Instinct 3 - Groove on Fight" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-05</h2>
					<p>
					Olivier Galibert sent in PGM sound emulation and an ICS2115 sound core thanks to help from ElSemi. Ville Linde submitted another bunch of fixes to the i386 CPU core and the Seibu SPI driver, so E-Jan High School and Senkyu now work. smf added the CDP GTE opcode for Brave Blade and fixed the SIO1 interrupt generation for Cool Boarders Arcade Jam. Aaron Giles cleaned up the Killer Instinct drivers and fixed a few graphics glitches. Aaron Giles also fixed a bug in the MIPS DRC core which caused crashes in Killer Instinct. R. Belmont improved the CHD-CD support slightly, to support other track formats better. David Haywood added Ghostlop to the Neo Geo driver. smf added 24-bit display support to the PSX driver, as required by Judge Dredd. Pierpaolo Prazzoli added color PROMs and fixed the colors in Driving Force (Galaxian conversion) and added a bootleg set. Angelo Salese submitted an update to the Jaleco Mahjong driver supporting Mahjong Daireikai, Mahjong Channel Zoom In, Mahjong Kakumei and Mahjong Kakumei 2, where the latter two boot but none are playable. Nathan Woods sent in a small patch that adds some MESS-specific features.
					</p>
					<div class="wippix">
						<img src="wippics/0404/ghostlop_1.png" alt="Ghostlop (c) 1996 Data East" width="304" height="224" />
						<img src="wippics/0404/ghostlop_2.png" alt="The intro of Ghostlop" width="304" height="224" />
						<img src="wippics/0404/ghostlop_3.png" alt="The intro of Ghostlop" width="304" height="224" />
						<img src="wippics/0404/ghostlop_4.png" alt="The intro of Ghostlop" width="304" height="224" />
						<img src="wippics/0404/ghostlop_5.png" alt="The gameplay of Ghostlop" width="304" height="224" />
						<img src="wippics/0404/ghostlop_6.png" alt="The gameplay of Ghostlop" width="304" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/drivfrc_gal_1.png" alt="Driving Force (c) 1984 Shinkai" width="224" height="256" />
						<img src="wippics/0404/drivfrc_gal_2.png" alt="The gameplay of Driving Force" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/kakumei_1.png" alt="Mahjong Kakumei (c) 1990 Jaleco" width="320" height="232" />
						<img src="wippics/0404/kakumei_2.png" alt="The intro of Mahjong Kakumei" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/kakumei2_1.png" alt="Mahjong Kakumei 2 (c) 1992 Jaleco" width="320" height="232" />
						<img src="wippics/0404/kakumei2_2.png" alt="The intro of Mahjong Kakumei 2" width="320" height="232" />
						<img src="wippics/0404/kakumei2_3.png" alt="The intro of Mahjong Kakumei 2" width="320" height="232" />
						<img src="wippics/0404/kakumei2_4.png" alt="The gameplay of Mahjong Kakumei 2" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-04</h2>
					<p>
					Olivier Galibert fixed Brave Blade so that it boots and R. Belmont improved its emulation somewhat. Olivier Galibert also partially decrypted the text layer in the Seibu SPI system. Aaron Giles cleaned up the Centipeded driver to take advantage of TRANSPARENCY_PENS. R. Belmont got Judge Dredd (Acclaim) working, but light guns aren't emulated so it's not fully playable. Aaron Giles fixed a compiling error that happened without the x86 DRC core.
					</p>
					<div class="wippix">
						<img src="wippics/0404/brvblade_1.png" alt="Brave Blade (c) 2000 Eighting/Raizing" width="240" height="320" />
						<img src="wippics/0404/brvblade_2.png" alt="The attract mode of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brvblade_3.png" alt="The intro of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brvblade_4.png" alt="The intro of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brvblade_5.png" alt="The gameplay of Brave Blade" width="240" height="320" />
						<img src="wippics/0404/brvblade_6.png" alt="The gameplay of Brave Blade" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/jdredd_1.png" alt="Judge Dredd (c) 1996 Acclaim" width="320" height="240" />
						<img src="wippics/0404/jdredd_2.png" alt="The intro of Judge Dredd" width="320" height="240" />
						<img src="wippics/0404/jdredd_3.png" alt="The gameplay of Judge Dredd" width="320" height="240" />
						<img src="wippics/0404/jdredd_4.png" alt="The gameplay of Judge Dredd" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-03</h2>
					<p>
					Olivier Galibert fixed the ZN protection chip emulation so more games boot now. R. Belmont and smf updated the ZN driver, making Rival Schools, Street Fighter Ex 2, Shanghai Matekibuyuu and Cool Boarders Arcade Jam playable and Gallop Racer 2 works up to the title screen. Aaron Giles fixed the hard lockups that occurred in games that use scanline-based timers.
					</p>
					<div class="wippix">
						<img src="wippics/0404/rvschool_1.png" alt="Rival Schools (c) 1997 Capcom" width="512" height="480" />
						<img src="wippics/0404/rvschool_2.png" alt="The attract mode of Rival Schools" width="512" height="480" />
						<img src="wippics/0404/rvschool_3.png" alt="The attract mode of Rival Schools" width="512" height="480" />
						<img src="wippics/0404/rvschool_4.png" alt="The attract mode of Rival Schools" width="512" height="480" />
						<img src="wippics/0404/rvschool_5.png" alt="The intro of Rival Schools" width="512" height="480" />
						<img src="wippics/0404/rvschool_6.png" alt="The intro of Rival Schools" width="512" height="480" />
						<img src="wippics/0404/rvschool_7.png" alt="The gameplay of Rival Schools" width="512" height="480" />
						<img src="wippics/0404/rvschool_8.png" alt="The gameplay of Rival Schools" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/sfex2_1.png" alt="Street Fighter Ex 2 (c) 1998 Capcom" width="512" height="480" />
						<img src="wippics/0404/sfex2_2.png" alt="The intro of Street Fighter Ex 2" width="512" height="480" />
						<img src="wippics/0404/sfex2_3.png" alt="The intro of Street Fighter Ex 2" width="512" height="480" />
						<img src="wippics/0404/sfex2_4.png" alt="The intro of Street Fighter Ex 2" width="512" height="480" />
						<img src="wippics/0404/sfex2_5.png" alt="The gameplay of Street Fighter Ex 2" width="512" height="480" />
						<img src="wippics/0404/sfex2_6.png" alt="The gameplay of Street Fighter Ex 2" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/shngmtkb_1.png" alt="Shanghai Matekibuyuu (c) 1998 Sunsoft" width="320" height="240" />
						<img src="wippics/0404/shngmtkb_2.png" alt="The intro of Shanghai Matekibuyuu" width="320" height="240" />
						<img src="wippics/0404/shngmtkb_3.png" alt="The gameplay of Shanghai Matekibuyuu" width="512" height="480" />
						<img src="wippics/0404/shngmtkb_4.png" alt="The gameplay of Shanghai Matekibuyuu" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/cbaj_1.png" alt="Cool Boarders Arcade Jam (c) 1997 UEP" width="320" height="240" />
						<img src="wippics/0404/cbaj_2.png" alt="The intro of Cool Boarders Arcade Jam" width="320" height="240" />
						<img src="wippics/0404/cbaj_3.png" alt="The intro of Cool Boarders Arcade Jam" width="320" height="240" />
						<img src="wippics/0404/cbaj_4.png" alt="The gameplay of Cool Boarders Arcade Jam" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/glpracr2_title.png" alt="Gallop Racer 2 (c) 1997 Tecmo" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-04-02</h2>
					<p>
					Olivier Galibert submitted a very preliminary Sega Model 1 driver that supports Virtua Racing, Virtua Fighter, Star Wars Arcade and Wing War, though none of them are playable, none of them have sound emulation and they still have major graphics glitches. Raiden 2 sprites were partially decrypted and background emulation was improved but the game isn't playable due to protection and banking issues, and sets including New Zero Team were added to the driver but they don't do much.
					</p>
					<div class="wippix">
						<img src="wippics/0404/vr_1.png" alt="Virtua Racing (c) 1992 Sega" width="496" height="384" />
						<img src="wippics/0404/vr_2.png" alt="The attract mode of Virtua Racing" width="496" height="384" />
						<img src="wippics/0404/vr_3.png" alt="The attract mode of Virtua Racing" width="496" height="384" />
						<img src="wippics/0404/vr_4.png" alt="The intro of Virtua Racing" width="496" height="384" />
						<img src="wippics/0404/vr_5.png" alt="The intro of Virtua Racing" width="496" height="384" />
						<img src="wippics/0404/vr_6.png" alt="The gameplay of Virtua Racing" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/vf1_1.png" alt="Virtua Fighter (c) 1993 Sega" width="496" height="384" />
						<img src="wippics/0404/vf1_2.png" alt="The attract mode of Virtua Fighter" width="496" height="384" />
						<img src="wippics/0404/vf1_3.png" alt="The intro of Virtua Fighter" width="496" height="384" />
						<img src="wippics/0404/vf1_4.png" alt="The gameplay of Virtua Fighter" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/swa_1.png" alt="Star Wars Arcade (c) 1993 Sega" width="496" height="384" />
						<img src="wippics/0404/swa_2.png" alt="The intro of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_3.png" alt="The intro of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_4.png" alt="The intro of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_5.png" alt="It's a trap!" width="496" height="384" />
						<img src="wippics/0404/swa_6.png" alt="The intro of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_7.png" alt="The intro of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_8.png" alt="The gameplay of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_9.png" alt="The gameplay of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_10.png" alt="The attract mode of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_11.png" alt="The attract mode of Star Wars Arcade" width="496" height="384" />
						<img src="wippics/0404/swa_12.png" alt="The attract mode of Star Wars Arcade" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/wingwar_1.png" alt="Wing War (c) 1994 Sega" width="496" height="384" />
						<img src="wippics/0404/wingwar_2.png" alt="The intro of Wing War" width="496" height="384" />
						<img src="wippics/0404/wingwar_3.png" alt="The intro of Wing War" width="496" height="384" />
						<img src="wippics/0404/wingwar_4.png" alt="The gameplay of Wing War" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/r2_other1.png" alt="Raiden 2 (c) 1993 Seibu Kaihatsu" width="240" height="304" />
						<img src="wippics/0404/r2_other2.png" alt="The attract mode of Raiden 2" width="240" height="304" />
						<img src="wippics/0404/r2_decrypt1.png" alt="Raiden 2 sprites decrypted" width="240" height="304" />
						<img src="wippics/0404/r2_decrypt2.png" alt="Raiden 2 sprites decrypted" width="240" height="304" />
					</div>
					<div class="wippix">
						<img src="wippics/0404/nzerotea_1.png" alt="New Zero Team (c) 1997 Seibu Kaihatsu" width="304" height="240" />
						<img src="wippics/0404/nzerotea_2.png" alt="The attract mode of New Zero Team" width="304" height="240" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2004-04-01</h2>
					<p>
					Ville Linde sent in another update to the i386 CPU core and the Seibu SPI driver, with better 386/z80 communications (but still not correct) and some cleanup. R. Belmont sent in an update to the ZN driver with fully playable Beastorizer, and Primal Rage 2 also gets into the character selection (but not farther). smf fixed the character profiles in the high-score screen in Beastorizer. Pierpaolo Prazzoli sent in another small fix to the Hyperstone CPU core, fixing a bug where some instructions could have used a wrong value for the PC.
					</p>
					<div class="wippix">
						<img src="wippics/0404/beastrzr_1.png" alt="Beastorizer (c) 1997 Eighting/Raizing" width="320" height="240" />
						<img src="wippics/0404/beastrzr_2.png" alt="The intro of Beastorizer" width="320" height="240" />
						<img src="wippics/0404/beastrzr_3.png" alt="The intro of Beastorizer" width="320" height="240" />
						<img src="wippics/0404/beastrzr_4.png" alt="The gameplay of Beastorizer" width="320" height="240" />
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
