<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>March 2004 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2004-03-31</h2>
					<p>
					smf fixed a bug in the PSX graphics rendering that caused weird graphics in the javelin event in Hyper Athlete. R. Belmont got Primal Rage 2 to boot and show the intro movie, but it's still far from playable. smf also improved Primal Rage 2 a little. Lawrence Gold fixed a few compiling and link warnings in 0.80u3. Mariusz Wojcieszek sent in an update to the ST-V driver, adding support for the end code feature in VDP1 which improved sprites in Columns '97, Ejihon Tantei Jimusyo, Shienryu and fixing some bugs in the SCU DSP emulation. Pierpaolo Prazzoli fixed the display of branch addresses in the Hyperstone CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0403/primrag2.png" alt="Primal Rage 2 (c) 1996 Atari" width="640" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0403/col97_improved1.png" alt="Columns '97 sprites improved" width="704" height="480" />
						<img src="wippics/0403/col97_improved2.png" alt="Columns '97 sprites improved" width="704" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-30</h2>
					<p>
					Olivier Galibert fixed a slight bug in the V60 CPU core where it didn't have I/O address space. Tomasz Slanina fixed a unnecessary write in the bit test opcode in the i386 CPU core. Pierpaolo Prazzoli sent in a preliminary driver for D-Day (Jaleco), but it also suffers from unemulated protection and crashes in the gameplay.
					</p>
					<div class="wippix">
						<img src="wippics/0403/ddayjlc_1.png" alt="D-Day (Jaleco) (c) 1984 Jaleco" width="256" height="256" />
						<img src="wippics/0403/ddayjlc_2.png" alt="The gameplay of D-Day (Jaleco)" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-29</h2>
					<p>
					Sebastien Volpe submitted cycle counting fixes for both the ASM and C 68k cores. smf sent in an update to the ZN driver in which Gallop Racer now works. MooglyGuy fixed the immediate and const values in the Hyperstone CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0403/glpracr_1.png" alt="Gallop Racer (c) 1996 Tecmo" width="320" height="240" />
						<img src="wippics/0403/glpracr_2.png" alt="The attract mode of Gallop Racer" width="320" height="240" />
						<img src="wippics/0403/glpracr_3.png" alt="The intro of Gallop Racer" width="320" height="240" />
						<img src="wippics/0403/glpracr_4.png" alt="The gameplay of Gallop Racer" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-28</h2>
					<p>
					Ville Linde submitted an i386 CPU core and a Seibu SPI system driver supporting Senkyu / Battle Balls, Viper Phase 1, E-Jan High School, Raiden Fighters and Raiden Fighters 2 which would be playable but the graphics are encrypted, and the sound is also not emulated.
					</p>
					<div class="wippix">
						<img src="wippics/0403/rf2_2k_1.png" alt="Raiden Fighters 2 - 2000 (c) 2000 Seibu Kaihatsu" width="240" height="320" />
						<img src="wippics/0403/rf2_2k_2.png" alt="The gameplay of Raiden Fighters 2 - 2000" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-27</h2>
					<p>
					Charles MacDonald did various improvements on the Sega System 16 drivers, fixing Hang-On road layer and a bunch of graphics glitches in other games, and adding sound support to Tough Turf and Flash Point bootlegs. R. Belmont sent in CD-ROM support for the CHD files and Konami GV System driver written by him and smf, supporting Powerful Baseball '96, Hyper Athlete, Susume! Taisen Puzzle-Dama, Wedding Rhapsody (bad sound) and Simpsons Bowling (no controls).
					</p>
					<div class="wippix">
						<img src="wippics/0403/pbball96_1.png" alt="Powerful Baseball '96 (c) 1996 Konami" width="320" height="240" />
						<img src="wippics/0403/pbball96_2.png" alt="The intro of Powerful Baseball '96" width="320" height="240" />
						<img src="wippics/0403/pbball96_3.png" alt="The intro of Powerful Baseball '96" width="320" height="240" />
						<img src="wippics/0403/pbball96_4.png" alt="The gameplay of Powerful Baseball '96" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0403/hyperath_1.png" alt="Hyper Athlete (c) 1996 Konami" width="512" height="480" />
						<img src="wippics/0403/hyperath_2.png" alt="The intro of Hyper Athlete" width="512" height="480" />
						<img src="wippics/0403/hyperath_3.png" alt="The gameplay of Hyper Athlete" width="512" height="480" />
						<img src="wippics/0403/hyperath_4.png" alt="The gameplay of Hyper Athlete" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0403/susume_1.png" alt="Susume! Taisen Puzzle-Dama (c) 1996 Konami" width="320" height="240" />
						<img src="wippics/0403/susume_2.png" alt="The intro of Susume! Taisen Puzzle-Dama" width="320" height="240" />
						<img src="wippics/0403/susume_3.png" alt="The intro of Susume! Taisen Puzzle-Dama" width="320" height="240" />
						<img src="wippics/0403/susume_4.png" alt="The gameplay of Susume! Taisen Puzzle-Dama" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0403/weddingr_1.png" alt="Wedding Rhapsody (c) 1997 Konami" width="320" height="240" />
						<img src="wippics/0403/weddingr_2.png" alt="The intro of Wedding Rhapsody" width="320" height="240" />
						<img src="wippics/0403/weddingr_3.png" alt="The intro of Wedding Rhapsody" width="320" height="240" />
						<img src="wippics/0403/weddingr_4.png" alt="The gameplay of Wedding Rhapsody" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0403/simpbowl_1.png" alt="Simpsons Bowling (c) 2000 Konami" width="512" height="480" />
						<img src="wippics/0403/simpbowl_2.png" alt="The intro of Simpsons Bowling" width="512" height="480" />
						<img src="wippics/0403/simpbowl_3.png" alt="The attract mode of Simpsons Bowling" width="512" height="480" />
						<img src="wippics/0403/simpbowl_4.png" alt="The attract mode of Simpsons Bowling" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-26</h2>
					<p>
					Tomasz Slanina sent in drivers for Dynamic Dice (works), Swinging Singles (doesn't work), Parallel Turn (doesn't work, protection), Taiwan Chess Legend (only partially decrypted) and a few fixes for Task Force Harrier (still not playable though).
					</p>
					<div class="wippix">
						<img src="wippics/0403/dynadice_1.png" alt="Dynamic Dice (c) 19?? ????" width="200" height="272" />
						<img src="wippics/0403/dynadice_2.png" alt="The gameplay of Dynamic Dice" width="200" height="272" />
					</div>
					<div class="wippix">
						<img src="wippics/0403/tharrier_1.png" alt="Task Force Harrier (c) 1989 American Sammy" width="224" height="256" />
						<img src="wippics/0403/tharrier_2.png" alt="The attract mode of Task Force Harrier" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0403/pturn.png" alt="Parallel Turn (c) 1984 Jaleco" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-25</h2>
					<p>
					Pierpaolo Prazzoli and David Haywood wrote a driver for Scooter Shooter, it works fully but has wrong colors after the first two levels.
					</p>
					<div class="wippix">
						<img src="wippics/0403/scotrsht_1.png" alt="Scooter Shooter (c) 1985 Konami" width="224" height="256" />
						<img src="wippics/0403/scotrsht_2.png" alt="The intro of Scooter Shooter" width="224" height="256" />
						<img src="wippics/0403/scotrsht_3.png" alt="The intro of Scooter Shooter" width="224" height="256" />
						<img src="wippics/0403/scotrsht_4.png" alt="The gameplay of Scooter Shooter" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-24</h2>
					<p>
					Nathan Woods sent in a few changes to the save state system, adding support for validating state files and loading arbitrarily named files.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-23</h2>
					<p>
					Aaron Giles fixed the crash on reset problem in Capcom Bowling and added Beer Frame Bowling which unfortunately doesn't work because of a missing ROM. Jarek Burczynski sent in an update to the Change Lanes driver, but controls don't quite work and not all graphics are emulated yet.
					</p>
					<div class="wippix">
						<img src="wippics/0403/changela_1.png" alt="Change Lanes (c) 1983 Taito America" width="256" height="256" />
						<img src="wippics/0403/changela_2.png" alt="The gameplay of Change Lanes" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-22</h2>
					<p>
					R. Belmont fixed the channel status readback for the Irem GA-20 sample player chip, fixing some missing sounds in R-Type Leo.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-21</h2>
					<p>
					Stefan Jokisch removed the fake color PROM from Sheriff and added it to the driver separately.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-20</h2>
					<p>
					Pierpaolo Prazzoli added MTV Rock-n-Roll Trivia to the Pacman driver.
					</p>
					<div class="wippix">
						<img src="wippics/0403/rocktrv2_1.png" alt="MTV Rock-n-Roll Trivia (c) 1986 Triumph Software Inc." width="224" height="288" />
						<img src="wippics/0403/rocktrv2_2.png" alt="The intro of MTV Rock-n-Roll Trivia" width="224" height="288" />
						<img src="wippics/0403/rocktrv2_3.png" alt="The intro of MTV Rock-n-Roll Trivia" width="224" height="288" />
						<img src="wippics/0403/rocktrv2_4.png" alt="The gameplay of MTV Rock-n-Roll Trivia" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-19</h2>
					<p>
					Derrick Renaud sent in another big update to the discrete sound system, adding new modules and cleaning up the code.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-18</h2>
					<p>
					Aaron Giles fixed a potentially problematic timer bug pointed out by Raphael Nabet.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-17</h2>
					<p>
					Bryan McPhail fixed a hard crash that occurred when trying to debug HuC6280 code, and another state saving related crash that happened in YM2610 games that don't use external sample ROM memory, for example Gun Frontier.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-16</h2>
					<p>
					Quench sent in another update to the TMS32010 CPU core, fixing the invalid instruction cycle. Aaron Giles fixed Hard Drivin' which broke with the latest changes.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-15</h2>
					<p>
					Pierpaolo Prazzoli added Griffon, a Phoenix clone, and an alternate set of Spiders called Spinner. Nathan Woods changed some file I/O functions for MESS. Aaron Giles fixed a interrupt queueing problem that started happening with the new interrupt/timer system. El Condor updated Uki's old Lovely Cards driver to current standards for inclusion. f205v added the Crux licensed version of Gyrodine to the Kyugo driver.
					</p>
					<div class="wippix">
						<img src="wippics/0403/lvcards_1.png" alt="Lovely Cards (c) 1985 Tehkan" width="256" height="224" />
						<img src="wippics/0403/lvcards_2.png" alt="The gameplay of Lovely Cards" width="256" height="224" />
						<img src="wippics/0403/lvcards_3.png" alt="The gameplay of Lovely Cards" width="256" height="224" />
						<img src="wippics/0403/lvcards_4.png" alt="The gameplay of Lovely Cards" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-14</h2>
					<p>
					Aaron Giles and Derrick Renaud sent in a discrete sound update with major internal cleanup, added saving of the adjustment values to a configuration file and fixed a bug that caused whiny noise in Hit Me. Sebastien Volpe submitted a bugfix for the debugger when switching window backwards.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-13</h2>
					<p>
					Stefan Jokisch sent in an update to the early Nintendo 8080 games driver, fixing a lot of bugs and graphics glitches in the individual games.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-12</h2>
					<p>
					David Haywood improved the Hyper Neogeo 64 driver a little further.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-11</h2>
					<p>
					Mariusz Wojcieszek fixed the slave CPU resetting and improved scaling tilemap backgrounds in the ST-V driver, improving the backgrounds in Virtua Fighter Kids, Columns '97 and Virtua Fighter Remix.
					</p>
					<div class="wippix">
						<img src="wippics/0403/scaling_1.png" alt="ST-V backgrounds scaling 1" width="704" height="448" />
						<img src="wippics/0403/scaling_2.png" alt="ST-V backgrounds scaling 2" width="704" height="448" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-10</h2>
					<p>
					Pierpaolo Prazzoli cleaned up the register get/set functions in the Hyperstone CPU core. Lawrence Gold sent in a few small patches for C89 compilers. Aaron Giles added a new node type to the discrete sound system and added sound to Hit Me with it. David Haywood added a skeleton driver for Hyper Neogeo 64 and R. Belmont improved it a little, but it's far from working. Bryan McPhail fixed the opcode view in the integrated debugger which sometimes displayed too many bytes on 32-bit CPUs.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-09</h2>
					<p>
					Lawrence Gold sent in a small correction for the makefile for non-x86 systems. David Haywood fixed some of the DIP switches in Varia Metal and Quench added sound emulation to it, but the music looping is not perfect. Nathan Woods did minor changes to the input system to accommodate MESS's mouse device emulation.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-08</h2>
					<p>
					Pierpaolo Prazzoli added Invasion to the 8080bw driver. Luis Faria submitted some improvements to the Fit of Fighting driver, fixing some graphics glitches and cleaned up the driver.
					</p>
					<div class="wippix">
						<img src="wippics/0403/invasion_1.png" alt="Invasion (c) 19?? Sidam" width="224" height="240" />
						<img src="wippics/0403/invasion_2.png" alt="The gameplay of Invasion" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-07</h2>
					<p>
					David Haywood added Air Rescue to the Sega System 32 driver, but it doesn't work beyond the title screen because of incomplete hardware emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0403/arescue.png" alt="Air Rescue (c) 1992 Sega" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-06</h2>
					<p>
					David Haywood added an early 30-wave version of Blaster to the Williams driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-05</h2>
					<p>
					Derrick Renaud improved the discrete sound system, adding new components and converting old drivers to use them.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-04</h2>
					<p>
					Nathan Woods improved the window handling for MESS and added cpu_getscanline functions that return mame_time. David Haywood added Wiggie Waggie to the Seta driver.
					</p>
					<div class="wippix">
						<img src="wippics/0403/wiggie_1.png" alt="Wiggie Waggie (c) 1994 Promat" width="240" height="384" />
						<img src="wippics/0403/wiggie_2.png" alt="The gameplay of Wiggie Waggie" width="240" height="384" />
						<img src="wippics/0403/wiggie_3.png" alt="The gameplay of Wiggie Waggie" width="240" height="384" />
						<img src="wippics/0403/wiggie_4.png" alt="The gameplay of Wiggie Waggie" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2004-03-03</h2>
					<p>
					Lawrence Gold fixed a bunch of compiling errors with GCC 3.3.3. smf did a bit of re-organizing and cleanup on the ZN driver. Curt Coder cleaned up the Green Beret driver and fixed cocktail mode in it.
					</p>
				</div>

				<div class="row">
					<h2>2004-03-02</h2>
					<p>
					Aaron Giles fixed a bug in the TMS32031 CPU core which caused bad geometry in Surf Planet, and he fixed other rendering bugs in the Gaelco 3D driver so that it works better. Quench added internal data memory map to the TMS32010 CPU core and fixed overflow in the ADDH instruction, and adjusted the Twin Cobra / Wardner, Toaplan1 and Hard Drivin' drivers accordingly. Alex Eddy fixed a vector clipping bug in the core vector functions. Oliver Achten fixed the NES APU sound core, especially the broken DPCM audio channel.
					</p>
					<div class="wippix">
						<img src="wippics/0403/surfplnt_1.png" alt="Surf Planet (c) 1997 Gaelco" width="576" height="432" />
						<img src="wippics/0403/surfplnt_2.png" alt="The intro of Surf Planet" width="576" height="432" />
						<img src="wippics/0403/surfplnt_3.png" alt="The intro of Surf Planet" width="576" height="432" />
						<img src="wippics/0403/surfplnt_4.png" alt="The intro of Surf Planet" width="576" height="432" />
						<img src="wippics/0403/surfplnt_5.png" alt="The gameplay of Surf Planet" width="576" height="432" />
						<img src="wippics/0403/surfplnt_6.png" alt="The gameplay of Surf Planet" width="576" height="432" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2004-03-01</h2>
					<p>
					Brian A. Troha fixed ROM loading for a few games in the ZN driver. Oliver Achten fixed the PPCM decoding in the K053260 sound chip emulation, improving samples in Asterix, The Simpsons, TMNT 2 and others. Carlos Santillan submitted some speedups to the PSX hardware drivers. Aaron Giles turned on bilinear filtering by default in the Gaelco 3D driver. smf also sent some updates to the ZN driver.
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
