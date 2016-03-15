<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>August 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-08-31</h2>
					<p>
					Stefan Jokisch added support for up to 8 players and sent in a driver for Sprint 8, though it's missing sound emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0308/sprint8_1.png" alt="Sprint 8 (c) 1977 Atari" width="248" height="232" />
						<img src="wippics/0308/sprint8_2.png" alt="The gameplay of Sprint 8" width="248" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-30</h2>
					<p>
					Paul Priest fixed most of the DIP switch settings in Asura Blade and improved the raster effects in the Fuuki FG-2 driver, but they are not yet perfectly emulated.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-29</h2>
					<p>
					Tomasz Slanina fixed the interrupts and register layout in the V60 CPU core, making Ultra X Weapons run (with graphics glitches) along with Twin Eagle 2 (unplayable due to unemulated protection). Nathan Woods forwarded another patch for better intercompatibility with MESS.
					</p>
					<div class="wippix">
						<img src="wippics/0308/twineag2_1.png" alt="Twin Eagle 2 (c) 1994 Seta" width="240" height="336" />
						<img src="wippics/0308/twineag2_2.png" alt="The gameplay of Twin Eagle 2" width="240" height="336" />
					</div>
					<div class="wippix">
						<img src="wippics/0308/ultrax_1.png" alt="Ultra X Weapons (c) 1995 Banpresto" width="240" height="336" />
						<img src="wippics/0308/ultrax_2.png" alt="The gameplay of Ultra X Weapons" width="240" height="336" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-28</h2>
					<p>
					Mike Coates added a version of Lady Bug running on Galaxian hardware and Video Pool to the Galaxian driver.
					</p>
					<div class="wippix">
						<img src="wippics/0308/vpool_1.png" alt="Video Pool (c) ????" width="224" height="256" />
						<img src="wippics/0308/vpool_2.png" alt="The gameplay of Video Pool" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-27</h2>
					<p>
					Pierpaolo Prazzoli sent in a driver for Super Trivia Master, it's playable with wrong colors and imperfect sound.
					</p>
					<div class="wippix">
						<img src="wippics/0308/strvmstr_1.png" alt="Super Trivia Master (c) 1986 ETI" width="224" height="256" />
						<img src="wippics/0308/strvmstr_2.png" alt="The gameplay of Super Trivia Master" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-26</h2>
					<p>
					Jarek Burczynski and Acho A. Tang fixed the YM2203 clock frequency in Combat School.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-25</h2>
					<p>
					Paul Priest merged the Fuuki FG-2 and FG-3 video hardware emulation and fixed various graphics glitches in both of them. David Haywood added the correct sample ROM to Dragon Blaze, fixing the sound. Curt Coder submitted a patch adding cocktail mode to Bogey Manor and adding flipscreen support to Real Mahjong Haihai.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-24</h2>
					<p>
					Angelo Salese sent in more improvements to the Sega ST-V driver, adding extended modes to the dynamic resolution change and improving the graphics emulation a little.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-23</h2>
					<p>
					David Haywood fixed the colors in Mogura Desse.
					</p>
					<div class="wippix">
						<img src="wippics/0308/mogura_3.png" alt="Mogura Desse (c) 1991 Konami" width="320" height="256" />
						<img src="wippics/0308/mogura_4.png" alt="The gameplay of Mogura Desse" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-22</h2>
					<p>
					Nathan Woods added an optional facility to guard against ROM/RAM address range overflows, it is only enabled in debug builds.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-21</h2>
					<p>
					Pierpaolo Prazzoli and Angelo Salese submitted a driver for Speed Attack, it's got wrong colors and coin inputs are buggy but is otherwise working.
					</p>
					<div class="wippix">
						<img src="wippics/0308/speedatk_1.png" alt="Speed Attack (c) 1984 Seta" width="272" height="232" />
						<img src="wippics/0308/speedatk_2.png" alt="The gameplay of Speed Attack" width="272" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-20</h2>
					<p>
					Pierpaolo Prazzoli fixed World PK Soccer in the Irem M-107 driver so that it boots, but inputs are not emulated so it's not playable yet.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-19</h2>
					<p>
					Tomasz Slanina re-submitted some old i8085 CPU core bugfixes done originally by Krzysztof Strzecha.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-18</h2>
					<p>
					Acho A. Tang fixed the Violent Fight slowdown that happens when using the C 68k core and found the reason for the Japanese version of Hyper Duel not starting, though a fix is still being debated. Roman Scherzer submitted a small bug fix to the hdcomp program.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-17</h2>
					<p>
					Angelo Salese sent in an update to the Sega ST-V driver, improving IRQ support, VBLANK interrupts and basic DMA support.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-16</h2>
					<p>
					Tomasz Slanina fixed the continue option and speed in the Mustache Boy driver. Pierpaolo Prazzoli added a version of Super Bike on Donkey Kong hardware and did some fixes to the Hyperstone CPU core. David Haywood sent in a preliminary driver for Mogura Desse, colors are wrong in it and sound isn't emulated.
					</p>
					<div class="wippix">
						<img src="wippics/0308/mogura_1.png" alt="Mogura Desse (c) 1991 Konami" width="320" height="256" />
						<img src="wippics/0308/mogura_2.png" alt="The gameplay of Mogura Desse" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-15</h2>
					<p>
					Nathan Woods fixed the crash that happened when artwork was loaded on clone drivers. El Condor re-submitted some input port fixes. Pierpaolo Prazzoli added the correct color PROM to 8 Ball Action. Acho A. Tang fixed Viewpoint from crashing with the ASM 68k core too. Acho A. Tang submitted various improvements to TMNT2. Brad Oliver fixed the Zodiack video hardware emulation so that it is multi-session safe.
					</p>
					<div class="wippix">
						<img src="wippics/0308/8ballact_1.png" alt="8 Ball Action (c) 1984 Seatongrove" width="224" height="256" />
						<img src="wippics/0308/8ballact_2.png" alt="The gameplay of 8 Ball Action" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-14</h2>
					<p>
					Nathan Woods sent in another patch improving the MESS side of things, a better fix for the scanline display interfering with the registers in the debugger and a fix for pausing so that MAME doesn't busy loop. Paul Priest fixed the tilemaps and tilemap/sprite priorities in the Asura Blade driver. David Widel added Street Heat to the Donkey Kong driver. Pierpaolo Prazzoli added sound to Super Doubles Tennis, and he sent in a very preliminary Hyperstone CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0308/strtheat_1.png" alt="Street Heat (c) 1985 EPOS" width="224" height="256" />
						<img src="wippics/0308/strtheat_2.png" alt="The gameplay of Street Heat" width="224" height="256" />
						<img src="wippics/0308/strtheat_3.png" alt="The gameplay of Street Heat" width="224" height="256" />
						<img src="wippics/0308/strtheat_4.png" alt="The gameplay of Street Heat" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-13</h2>
					<p>
					Paul Priest and David Haywood sent in a driver for Asura Blade, it works fine except sound is not emulated because the sound chip is unknown.
					</p>
					<div class="wippix">
						<img src="wippics/0308/asura_1.png" alt="Asura Blade (c) 1998 Fuuki" width="320" height="240" />
						<img src="wippics/0308/asura_2.png" alt="The gameplay of Asura Blade" width="320" height="240" />
						<img src="wippics/0308/asura_3.png" alt="The gameplay of Asura Blade" width="320" height="240" />
						<img src="wippics/0308/asura_4.png" alt="The gameplay of Asura Blade" width="320" height="240" />
						<img src="wippics/0308/asura_5.png" alt="The gameplay of Asura Blade" width="320" height="240" />
						<img src="wippics/0308/asura_6.png" alt="The gameplay of Asura Blade" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-12</h2>
					<p>
					Acho A. Tang re-submitted a bunch of old fixes to various drivers, including Aeroboto starfield, B-Wings music, Equites music and zooming, Halley's Comet collision detection, proper flipping of the Sidearms starfield, some sprite glitches in Super Dodgeball, WEC Le Mans 24 sound banking and framework for sound effects in Scion and Stinger.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-11</h2>
					<p>
					smf fixed various compiling problems that happen with GCC 3.3. Acho A. Tang fixed the remaining protection-related problems in Sunset Riders and TMNT 2, graphics glitches and sprite lags in the other games in the TMNT driver, and he fixed the trackball sets of Combat School from crashing.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-10</h2>
					<p>
					Brad Oliver fixed a small compiling problem in 0.72. Paul Priest changed the user interface so that the DIP menu item is not displayed if the game does not use DIP switches. Nathan Woods resubmitted an old patch updated to the current source version.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-09</h2>
					<p>
					Brian A. Troha added an alternate version of Zero Point to the Unico driver. Paul Priest and David Haywood sent in a driver for Gaia Crusaders, it works fine except the sound cuts off sometimes.
					</p>
					<div class="wippix">
						<img src="wippics/0308/gaia_1.png" alt="Gaia Crusaders (c) 1999 Noise Factory" width="320" height="224" />
						<img src="wippics/0308/gaia_2.png" alt="The intro of Gaia Crusaders" width="320" height="224" />
						<img src="wippics/0308/gaia_3.png" alt="The intro of Gaia Crusaders" width="320" height="224" />
						<img src="wippics/0308/gaia_4.png" alt="The gameplay of Gaia Crusaders" width="320" height="224" />
						<img src="wippics/0308/gaia_5.png" alt="The gameplay of Gaia Crusaders" width="320" height="224" />
						<img src="wippics/0308/gaia_6.png" alt="The gameplay of Gaia Crusaders" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-08</h2>
					<p>
					Acho A. Tang fixed the music pitch and tempo in Combat School, and he cleaned up the Darius video hardware emulation. Martin Adrian fixed the behavior of the 6821 PIA when reading disconnected pins. Curt Coder converted another driver to tilemaps and fixed some cocktail mode problems in others. Rene Single submitted some corrections to manufacturer descriptions. Paul Priest fixed the protection in Genix, so it's now playable. Brian A. Troha fixed DIP switch settings in various drivers. Nathan Woods sent in another batch of minor changes and cleanups from the MESS world.
					</p>
					<div class="wippix">
						<img src="wippics/0308/genix_1.png" alt="Genix (c) 1994 NIX" width="288" height="224" />
						<img src="wippics/0308/genix_2.png" alt="The intro of Genix" width="288" height="224" />
						<img src="wippics/0308/genix_3.png" alt="The intro of Genix" width="288" height="224" />
						<img src="wippics/0308/genix_4.png" alt="The gameplay of Genix" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-07</h2>
					<p>
					Angelo Salese fixed the BCD conversion in the G65816 CPU core, fixing some timing and score bugs in Act Raiser.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-06</h2>
					<p>
					Brian A. Troha added another version of Shuffleshot to the itech32 driver and fixed some DIP switch settings in it.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-05</h2>
					<p>
					Curt Coder converted another driver to use tilemaps and fixed some cocktail mode problems. Acho A. Tang submitted a fix to Mad Crasher which was broken by yesterday's update, and he fixed the music in Gladiator 1984.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-04</h2>
					<p>
					smf fixed most of the problems in Star Sweep. Acho A. Tang submitted an improvement to the highlight calculation in the palette functions, fixed shadows and other graphics in many old SNK games and cleaned up those drivers. Nathan Woods fixed a bug in the debugger that occurred when editing CPU registers.
					</p>
					</div>

				<div class="row">
					<h2>2003-08-03</h2>
					<p>
					Tomasz Slanina and Pierpaolo Prazzoli wrote a driver for Pit &amp; Run, it works fine but some analog sound effects are not yet emulated.
					</p>
					<div class="wippix">
						<img src="wippics/0308/pitnrun_1.png" alt="Pit &amp; Run (c) 1984 Taito" width="224" height="256" />
						<img src="wippics/0308/pitnrun_2.png" alt="The intro of Pit &amp; Run" width="224" height="256" />
						<img src="wippics/0308/pitnrun_3.png" alt="The gameplay of Pit &amp; Run" width="224" height="256" />
						<img src="wippics/0308/pitnrun_4.png" alt="The gameplay of Pit &amp; Run" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-08-02</h2>
					<p>
					Brian A. Troha added another version of World Class Bowling to the itech32 driver.
					</p>
					</div>

				<div class="rowlast">
					<h2>2003-08-01</h2>
					<p>
					Nathan Woods sent in another patch fixing some MESS specific stuff, and adding state saving support to the i86 and i286 CPU cores.
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
