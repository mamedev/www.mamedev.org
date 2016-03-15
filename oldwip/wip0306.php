<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>June 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-06-30</h2>
					<p>
					R. Belmont sent in an update to the MultiPCM sound chip emulator, adding a new banking mode used by Stadium Cross, though the sound in that game is still not perfect. Jarek Burczynski and Olivier Galibert fixed the AY-3-8910 noise generator. Curt Coder submitted a few more drivers converted to the tilemap system. Stefan Jokisch sent in a driver for Boxer.
					</p>
					<div class="wippix">
						<img src="wippics/0306/boxer_1.png" alt="Boxer (c) 1978 Atari" width="240" height="240" />
						<img src="wippics/0306/boxer_2.png" alt="The gameplay of Boxer" width="240" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-06-29</h2>
					<p>
					Nathan Woods cleaned up the screen snapshot system to be more logical. Bryan McPhail changed Steel Gunner to use a fixed object ROM.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-28</h2>
					<p>
					David Haywood simulated enough of the protection in Raiga - Strato Fighter for the game to be fully playable, but it's lacking some graphics effects.
					</p>
					<div class="wippix">
						<img src="wippics/0306/raiga_1.png" alt="Raiga - Strato Fighter (c) 1991 Tecmo" width="256" height="224" />
						<img src="wippics/0306/raiga_2.png" alt="The gameplay of Raiga - Strato Fighter" width="256" height="224" />
						<img src="wippics/0306/raiga_3.png" alt="The gameplay of Raiga - Strato Fighter" width="256" height="224" />
						<img src="wippics/0306/raiga_4.png" alt="The gameplay of Raiga - Strato Fighter" width="256" height="224" />
						<img src="wippics/0306/raiga_5.png" alt="The gameplay of Raiga - Strato Fighter" width="256" height="224" />
						<img src="wippics/0306/raiga_6.png" alt="The gameplay of Raiga - Strato Fighter" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-06-27</h2>
					<p>
					Barry Rodewald changed all drivers needing random numbers to use MAME's own random number generation.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-26</h2>
					<p>
					Curt Coder submitted another bunch of drivers converted to the tilemap system.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-25</h2>
					<p>
					Angelo Salese sent in a small update to the ST-V driver, adding color RAM emulation but it's not improved otherwise.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-24</h2>
					<p>
					Curt Coder submitted a bunch of drivers converted to the tilemap system.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-23</h2>
					<p>
					Phil Stroffolino fixed another graphics glitch in the Namco System 2 driver that caused extra garbage lines in some sprites in Burning Force and Valkyrie no Densetsu. Nathan Woods fixed another few compiling problems and a potential crash in the Jaguar hardware emulation. Acho A. Tang sent in some fixes to the sprites in The Simpsons.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-22</h2>
					<p>
					Nathan Woods fixed some slight problems with Direct3D fullscreen usage and Windows menus. Jason Lo fixed Stadium Cross in the Sega System Multi 32 driver, it is now fully playable though it has some sound problems. Phil Stroffolino fixed some graphics glitches in Namco System 2 drivers caused by the earlier updates to Namco driving games.
					</p>
					<div class="wippix">
						<img src="wippics/0306/scross_1.png" alt="Stadium Cross (c) 1992 Sega" width="320" height="224" />
						<img src="wippics/0306/scross_2.png" alt="The intro of Stadium Cross" width="320" height="224" />
						<img src="wippics/0306/scross_3.png" alt="The gameplay of Stadium Cross" width="320" height="224" />
						<img src="wippics/0306/scross_4.png" alt="The gameplay of Stadium Cross" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-06-21</h2>
					<p>
					Brian A. Troha corrected the DIP switch settings in Silent Dragon. Brian A. Troha also added some documentation to the Deco32 driver. Pierpaolo Prazzoli sent in a preliminary driver for R2D Tank. Phil Stroffolino sent in a major update to the Namco driving games, improving the road graphics emulation and fixing some sprite glitches in Point Blank. Newly supported are Final Lap, Suzuka 8 Hours 2 and Four Trax.
					</p>
					<div class="wippix">
						<img src="wippics/0306/finallap_1.png" alt="Final Lap (c) 1987 Namco" width="288" height="224" />
						<img src="wippics/0306/finallap_2.png" alt="The intro of Final Lap" width="288" height="224" />
						<img src="wippics/0306/finallap_3.png" alt="The gameplay of Final Lap" width="288" height="224" />
						<img src="wippics/0306/finallap_4.png" alt="The gameplay of Final Lap" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0306/suzuk8h2_1.png" alt="Suzuka 8 Hours 2 (c) 1993 Namco" width="288" height="224" />
						<img src="wippics/0306/suzuk8h2_2.png" alt="The intro of Suzuka 8 Hours 2" width="288" height="224" />
						<img src="wippics/0306/suzuk8h2_3.png" alt="The gameplay of Suzuka 8 Hours 2" width="288" height="224" />
						<img src="wippics/0306/suzuk8h2_4.png" alt="The gameplay of Suzuka 8 Hours 2" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0306/fourtrax_1.png" alt="Four Trax (c) 1989 Namco" width="288" height="224" />
						<img src="wippics/0306/fourtrax_2.png" alt="The intro of Four Trax" width="288" height="224" />
						<img src="wippics/0306/fourtrax_3.png" alt="The intro of Four Trax" width="288" height="224" />
						<img src="wippics/0306/fourtrax_4.png" alt="The gameplay of Four Trax" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-06-20</h2>
					<p>
					Leon van Rooij added a little message box that is displayed if the executable is double-clicked. Tomasz Slanina fixed the colors in Mustache Boy and cleaned it up a little. Tomasz Slanina also fixed the inputs and clock frequency in the Enigma 2 driver, and added fake colors to it. In addition, Tomasz Slanina added trackball and buttons emulation to Country Club, and he added Battlecry to the Homedata driver, though it has some graphics glitches. David Haywood added the correct color PROMs to Tricky Doc. Guru added Dock Man, a clone of Port Man, to The Pit driver.
					</p>
					<div class="wippix">
						<img src="wippics/0306/mustache_1.png" alt="Mustache Boy (c) 1987 March" width="232" height="240" />
						<img src="wippics/0306/mustache_2.png" alt="The intro of Mustache Boy" width="232" height="240" />
						<img src="wippics/0306/mustache_3.png" alt="The gameplay of Mustache Boy" width="232" height="240" />
						<img src="wippics/0306/mustache_4.png" alt="The gameplay of Mustache Boy" width="232" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0306/battlcry_1.png" alt="Battlecry (c) 1991 Home Data" width="256" height="224" />
						<img src="wippics/0306/battlcry_2.png" alt="The intro of Battlecry" width="256" height="224" />
						<img src="wippics/0306/battlcry_3.png" alt="The intro of Battlecry" width="256" height="224" />
						<img src="wippics/0306/battlcry_4.png" alt="The gameplay of Battlecry" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0306/enigma2_1.png" alt="Enigma 2 (c) 1981 Gameplan" width="224" height="256" />
						<img src="wippics/0306/enigma2_2.png" alt="The gameplay of Enigma 2" width="224" height="256" />
						<img src="wippics/0306/enigma2_3.png" alt="The gameplay of Enigma 2" width="224" height="256" />
						<img src="wippics/0306/enigma2_4.png" alt="The gameplay of Enigma 2" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0306/trckydoc_1.png" alt="Tricky Doc (c) 1987 Tecfri" width="240" height="224" />
						<img src="wippics/0306/trckydoc_2.png" alt="The intro of Tricky Doc" width="240" height="224" />
						<img src="wippics/0306/trckydoc_3.png" alt="The gameplay of Tricky Doc" width="240" height="224" />
						<img src="wippics/0306/trckydoc_4.png" alt="The gameplay of Tricky Doc" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-06-19</h2>
					<p>
					Nathan Woods sent in a patch to better support optional ROMs in the audit functions. David Haywood added a region DIP switch to the Banpresto drivers.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-18</h2>
					<p>
					Pierpaolo Prazzoli sent in a driver for Enigma 2 written by him and Tomasz Slanina.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-17</h2>
					<p>
					Nathan Woods sent a small patch to the Windows file I/O functions, changing the file read mode to support reading files opened by MAME in other programs too. Gerald Coy fixed the ROM names in Green Beret. Angelo Salese added preliminary MCU simulation to Paddle 2, but it still has some issues.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-16</h2>
					<p>
					Jarek Burczynski improved various things in the FM core, including support of the ymdeltat module, x1bit/x8bit DRAM usage for ADPCM samples, memory read/write via deltat and ADPCM synthesis in slave mode. Curt Coder fixed some inputs and DIP switches in various drivers. El Condor also fixed some inputs and DIP switches.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-15</h2>
					<p>
					Colin Howell, Nathan Woods and Bryan McPhail fixed the DAA opcode in the i86 CPU core. smf fixed some slight errors in I/O port definitions in various testdrivers, unearthed by the recent ports sanity check addition.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-14</h2>
					<p>
					Stefan Jokisch fixed a glitch in Wolf Pack that showed up after a few minutes of playing.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-13</h2>
					<p>
					Acho A. Tang updated Bucky O'Hare and Moo Mesa to use the K056832 graphics chip emulation which is far more complete than what the driver previously used, fixing various graphics effects and fixing the hang after the stage 2 boss.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-12</h2>
					<p>
					Chris Kirmse fixed an incorrect number of ROMs being passed to the OSD side when optional BIOS ROMs were used. Tomasz Slanina fixed program ROM decryption and emulated protection in Grand Tour, so it's now playable. Paul Priest further fixed the problem in the optional BIOS ROM loading. Stefan Jokisch rewrote the Wolf Pack driver based on schematics, and it works much better now.
					</p>
					<div class="wippix">
						<img src="wippics/0306/grndtour_1.png" alt="Grand Tour (c) 1993 IGS" width="512" height="480" />
						<img src="wippics/0306/grndtour_2.png" alt="The intro of Grand Tour" width="512" height="480" />
						<img src="wippics/0306/grndtour_3.png" alt="The gameplay of Grand Tour" width="512" height="480" />
						<img src="wippics/0306/grndtour_4.png" alt="The gameplay of Grand Tour" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2003-06-11</h2>
					<p>
					Leon van Rooij fixed various bugs and crashes in the Direct3D video output. Brian A. Troha fixed the DIP switches in Night Stocker. smf fixed the data size parameter of the DUMP command in the debugger, and he fixed the SAVE command that only used to work on 8-bit CPUs. Nathan Woods sent in a patch for MESS-specific stuff in the core. Bryan McPhail sent in some fixes for warnings with other compilers.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-10</h2>
					<p>
					Paul Priest changed the default BIOS selection behaviour, the default BIOS is now always the first one listed.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-09</h2>
					<p>
					Pierpaolo Prazzoli added inputs and DIP switches to Embargo.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-08</h2>
					<p>
					Acho A. Tang did another small improvement on the K053250 graphics emulation.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-07</h2>
					<p>
					Lawrence Gold sent in some fixes to compiler warnings and some xmame-specific patches. Olivier Galibert completed the Oriental Legend protection emulation, removing the patches.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-06</h2>
					<p>
					R. Belmont updated the documentation in the KonamiIC emulation. Acho A. Tang fixed some minor graphics glitches in the Konami GX driver and cleaned up the KonamiIC emulation. Paul Priest improved the BIOS switching, making the different BIOS ROMs recognizable by names instead of numbers. Phil Stroffolino sent in some improvements to DJ Boy but it's still not playable because of unemulated protection. Quench fixed the player 3 and 4 buttons in Snow Bros 2, and changed Battle Bakraid to the unlimited version. SirPoonga re-submitted the artwork filling edges support.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-05</h2>
					<p>
					Paul Priest fixed a memory leaking bug in the .ini file reading functions. BUT and nono added Korosuke Roller to the Pacman driver and corrected MCU data in the Chack'n Pop driver. R. Belmont fixed the scratchy reverb effect that was apparent in some songs in Gokujou Parodius and Sexy Parodius, and he corrected the sound chip internal timer frequency. Curt Coder submitted some drivers converted to the tilemap system. Acho A. Tang fixed various graphics, sound and gameplay glitchers in the Xexex driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-04</h2>
					<p>
					Luca Elia decrypted Spark Man and added it to the Suna8 driver but it doesn't work because of unemulated protection. R. Belmont forwarded a OpenMSX guys' fix for the loop addressing in the YMF278B sound chip emulation, improving some parts of Strikers 1945 music. Tomasz Slanina added Field Day, the world version of Undoukai, to the Forty-Love driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-03</h2>
					<p>
					Andrea Mazzoleni fixed some problems in the makefile with the xml2info program. Erik Abair submitted a fix for U.S. Classic crashing immediately. Tomasz Slanina fixed an interrupt problem in the Tugboat driver that caused problems with controls in the second level.
					</p>
					</div>

				<div class="row">
					<h2>2003-06-02</h2>
					<p>
					David Haywood added Tri-Pool to the Jack the Giantkiller driver. Aaron Giles fixed a bug in the YM2610 timers. Curt Coder submitted some drivers converted to tilemap and with cocktail mode support added.
					</p>
					<div class="wippix">
						<img src="wippics/0306/tripool_1.png" alt="Tri-Pool (c) 1981 Noma" width="224" height="256" />
						<img src="wippics/0306/tripool_2.png" alt="The intro of Tri-Pool" width="224" height="256" />
						<img src="wippics/0306/tripool_3.png" alt="The gameplay of Tri-Pool" width="224" height="256" />
						<img src="wippics/0306/tripool_4.png" alt="The gameplay of Tri-Pool" width="224" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-06-01</h2>
					<p>
					Tomasz Slanina added Evil Stone to Taito L system driver. R. Belmont fixed the K054539 sound chip emulation to ignore writes to an active voice's position register, fixing the vocals in Kyukyoku Sentai Dadandarn. Pierpaolo Prazzoli added a debug sanity check for I/O ports. Manuel Abadia sent in a driver for Glass, but it's unplayable due to Dallas MCU protection.
					</p>
					<div class="wippix">
						<img src="wippics/0306/evilston_1.png" alt="Evil Stone (c) 1990 Spacy" width="224" height="320" />
						<img src="wippics/0306/evilston_2.png" alt="The intro of Evil Stone" width="224" height="320" />
						<img src="wippics/0306/evilston_3.png" alt="The gameplay of Evil Stone" width="224" height="320" />
						<img src="wippics/0306/evilston_4.png" alt="The gameplay of Evil Stone" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0306/glass_1.png" alt="Glass (c) 1993 Gaelco" width="368" height="240" />
						<img src="wippics/0306/glass_2.png" alt="The intro of Glass" width="368" height="240" />
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
