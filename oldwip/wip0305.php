<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>May 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-05-31</h2>
					<p>
					Tomasz Slanina added Space Cruiser to the Taito SJ driver. Nicola Salmoria completed the graphics decryption in Mustache Boy, making it fully playable (although with wrong colors still). Quench sent in various fixes to the PIC16C5x core and added sound to Big Twin. Aaron Giles fixed a problem in the V60 CPU core unearthed by the timer code updates. Chris Kirmse fixed a bug in the internal snprintf function that caused wrong output with some fractional numbers.
					</p>
					<div class="wippix">
						<img src="wippics/0305/spacecr_1.png" alt="Space Cruiser (c) 1981 Taito" width="224" height="256" />
						<img src="wippics/0305/spacecr_2.png" alt="The intro of Space Cruiser" width="224" height="256" />
						<img src="wippics/0305/spacecr_3.png" alt="The intro of Space Cruiser" width="224" height="256" />
						<img src="wippics/0305/spacecr_4.png" alt="The gameplay of Space Cruiser" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-30</h2>
					<p>
					Aaron Giles fixed the BIO pin handling in the TMS32010 CPU core, and sent in the new timer code that cleans up the core significantly and allows for perfect synchronization if needed. Paul Priest added EEPROM support to Head Panic. Leon van Rooij fixed the Direct3D problem that caused timing problems in various drivers due to worse floating point math precision.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-29</h2>
					<p>
					Aaron Giles did some minor tweaks and optimizations to the MIPS3 dynarec core. Jarek Burczynski improved the MCU simulation in Metal Soldier Isaac II to mimic the original hardware better.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-28</h2>
					<p>
					Olivier Galibert decrypted Photo Y2K and David Haywood added it to the PGM driver, thanks to Elsemi, but it's not playable because of additional protection. Paul Priest added the idle loop skipping to Guts'n that started working in 0.69 and he fixed a few other things in Sengeki Striker in the Super Kaneko Nova System driver. R. Belmont fixed Dragon Ball Z, so it's fully playable with sound now.
					</p>
					<div class="wippix">
						<img src="wippics/0305/dbz_1.png" alt="Dragon Ball Z (c) 1993 Banpresto" width="384" height="256" />
						<img src="wippics/0305/dbz_2.png" alt="The intro of Dragon Ball Z" width="384" height="256" />
						<img src="wippics/0305/dbz_3.png" alt="The gameplay of Dragon Ball Z" width="384" height="256" />
						<img src="wippics/0305/dbz_4.png" alt="The gameplay of Dragon Ball Z" width="384" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0305/gutsn_1.png" alt="Guts'n (c) 2000 Kaneko" width="320" height="240" />
						<img src="wippics/0305/gutsn_2.png" alt="The intro of Guts'n" width="320" height="240" />
						<img src="wippics/0305/gutsn_3.png" alt="The intro of Guts'n" width="320" height="240" />
						<img src="wippics/0305/gutsn_4.png" alt="The intro of Guts'n" width="320" height="240" />
						<img src="wippics/0305/gutsn_5.png" alt="The gameplay of Guts'n" width="320" height="240" />
						<img src="wippics/0305/gutsn_6.png" alt="The gameplay of Guts'n" width="320" height="240" />
						<img src="wippics/0305/gutsn_7.png" alt="The gameplay of Guts'n" width="320" height="240" />
						<img src="wippics/0305/gutsn_8.png" alt="The gameplay of Guts'n" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0305/y2k_1.png" alt="Photo Y2K (c) 1999 IGS" width="448" height="224" />
						<img src="wippics/0305/y2k_2.png" alt="The intro of Photo Y2K" width="448" height="224" />
						<img src="wippics/0305/y2k_3.png" alt="The intro of Photo Y2K" width="448" height="224" />
						<img src="wippics/0305/y2k_4.png" alt="The gameplay of Photo Y2K" width="448" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-27</h2>
					<p>
					Pierpaolo Prazzoli added Ozon I to the Galaxian driver. Aaron Giles updated the IDE controller emulation to support a couple more commands and added DMA bus mastering support that will be necessary for the Seattle games.
					</p>
					<div class="wippix">
						<img src="wippics/0305/ozon1_1.png" alt="Ozon I (c) 1983 Proma" width="224" height="256" />
						<img src="wippics/0305/ozon1_2.png" alt="The gameplay of Ozon I" width="224" height="256" />
						<img src="wippics/0305/ozon1_3.png" alt="The gameplay of Ozon I" width="224" height="256" />
						<img src="wippics/0305/ozon1_4.png" alt="The gameplay of Ozon I" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-26</h2>
					<p>
					David Haywood added Dragon Ball Z to the DBZ2 driver but it doesn't even boot because it fails the ROM tests. David Haywood also forwarded the 68k CPU core select and Neo Geo save states from MAME32 Plus!</p>
					</div>

				<div class="row">
					<h2>2003-05-25</h2>
					<p>
					Andrea Mazzoleni sent in the first version of a XML to standard -listinfo format converter.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-24</h2>
					<p>
					Jim Hernandez tuned the engine sound frequency in Drag Race. Peter Storey submitted a fix for the inputs and DIP switches in Atlantic City Action and Boardwalk Casino.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-23</h2>
					<p>
					Luca Elia fixed the colors in Clash Road. Phil Stroffolino fixed the graphics in Portraits, it's playable now but there are still some problems with the scrolling. Tomasz Slanina sent in a preliminary driver for Mustache Boy, it would be playable except the graphics are not fully decrypted yet.
					</p>
					<div class="wippix">
						<img src="wippics/0305/portrait_1.png" alt="Portraits (c) 1983 Olympia" width="320" height="384" />
						<img src="wippics/0305/portrait_2.png" alt="The intro of Portraits" width="320" height="384" />
						<img src="wippics/0305/portrait_3.png" alt="The gameplay of Portraits" width="320" height="384" />
						<img src="wippics/0305/portrait_4.png" alt="The gameplay of Portraits" width="320" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0305/mustache_1.png" alt="Mustache Boy (c) 1987 March" width="232" height="240" />
						<img src="wippics/0305/mustache_2.png" alt="The gameplay of Mustache Boy" width="232" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-22</h2>
					<p>
					Derrick Renaud sent in another update to the discrete sound system, fixing a few bugs and adding sounds to Drag Race, Night Driver and Orbit. Jarek Burczynski fixed a bug in the YM2610 sound chip emulator that caused problems in the Magician Lord intro for example. Pierpaolo Prazzoli sent in a preliminary driver for D-Day (Jaleco) and Top Roller, but neither of them work at all.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-21</h2>
					<p>
					Steve Ellenoff submitted a very preliminary driver for Portraits, it's not playable at all yet. David Haywood added Slipstream to the Sega System 32 driver but it doesn't work probably because of V60 CPU core problems. Andrea Mazzoleni fixed the "merge" element in the -listinfo output.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-20</h2>
					<p>
					Brian A. Troha sent some fixes to the game and ROM set names. Angelo Salese re-submitted some old submissions, updated to the current MAME version. Luca Elia sent in a driver for Paradise. Phil Stroffolino sent in a preliminary version of the new mixgfx graphics system, which allows some drivers to emulate their graphics priorities perfectly.
					</p>
					<div class="wippix">
						<img src="wippics/0305/paradise_1.png" alt="Paradise (c) 1994+ Yun Sung" width="224" height="256" />
						<img src="wippics/0305/paradise_2.png" alt="The intro of Paradise" width="224" height="256" />
						<img src="wippics/0305/paradise_3.png" alt="The gameplay of Paradise" width="224" height="256" />
						<img src="wippics/0305/paradise_4.png" alt="The gameplay of Paradise" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-19</h2>
					<p>
					Farfetch'd fixed a bug in the audit routines that caused erroneous reports about undumped ROMs. Guru fixed the DIP switches, volume balance, and CPU and sound chip frequencies in the Dragon Master driver. Aaron Giles fixed a bug in the Taito SJ driver that caused problems with the new timer code. Nathan Woods sent in another bunch of small changes, some needed for MESS. Paul Priest added support for choosing the BIOS in the Neo Geo driver without recompiling. Leon van Rooij sent in another update to the Direct3D video output, adding a few new options.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-18</h2>
					<p>
					Leon van Rooij fixed some small problems in the Direct3D video output. Uki fixed the colors in Progress and added the 3rd button. Satoshi Suzuki re-submitted the Darwin 4078 priority fix. Paul Priest fixed a small bug in -crconly that might have caused problems. David Haywood added support for the mahjong control panel in the Neo Geo driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-17</h2>
					<p>
					Bryan McPhail fixed a small bug in the PIC CPU core where it didn't return a value properly. Angelo Salese fixed a bug in the MCU simulation of Birdie King 3 and he fixed the middle tilemap scroll in One Shot One Kill. Yasuhiro Ogawa added Japanese versions of G.I. Joe and Metamorphic Force.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-16</h2>
					<p>
					Bryan McPhail sent in some fixes to compiling errors on non-C99 compilers. Leon van Rooij sent in a major update to the Direct3D output, adding RGB effects, scanlines, hardware accelerated -effect sharp and various other useful things. Andrea Mazzoleni sent a few patches to fix some compiling problems. Nathan Woods did some minor changes in the core to better accommodate MESS changes.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-15</h2>
					<p>
					Tomasz Slanina fixed some graphics glitches in Rock Climber. Yasuhiro Ogawa fixed the graphics glitches in Koi Koi Shimasho 2 with a new ROM dump. Aaron Giles added another prototype of Hydra to the Atari G1 driver. Chris Hardy added Millpac to the Centipede driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-14</h2>
					<p>
					Derrick Renaud changed the Atari sports games to use the discrete sound system, adding all sounds to them. BUT fixed Chack'n Pop using MCU data extracted from the original with a trojan, so it's fully playable now. Nathan Woods fixed a minor bug where entering the debugger didn't work sometimes.
					</p>
					<div class="wippix">
						<img src="wippics/0305/chaknpop_1.png" alt="Chack'n Pop (c) 1983 Taito" width="256" height="224" />
						<img src="wippics/0305/chaknpop_2.png" alt="The intro of Chack'n Pop" width="256" height="224" />
						<img src="wippics/0305/chaknpop_3.png" alt="The intro of Chack'n Pop" width="256" height="224" />
						<img src="wippics/0305/chaknpop_4.png" alt="The gameplay of Chack'n Pop" width="256" height="224" />
						<img src="wippics/0305/chaknpop_5.png" alt="The gameplay of Chack'n Pop" width="256" height="224" />
						<img src="wippics/0305/chaknpop_6.png" alt="The gameplay of Chack'n Pop" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-13</h2>
					<p>
					Brian A. Troha added the international version of Dodonpachi and the Korean version of Armed Police Batrider.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-12</h2>
					<p>
					Aaron Giles sent in an update to the timer system that moves the CPU scheduling from the timer system to the CPU execution engine, causing a lot of problems in different drivers so it'll need a bit more work before it gets included. Acho A. Tang improved the Mystic Warriors and Konami GX drivers again, fixing graphics priorities, shadows and blending in various games. Chris Hardy added Vautour to the Phoenix driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-11</h2>
					<p>
					Tomasz Slanina sent in a preliminary driver for Rock Climber, it runs but has several graphics problems and missing sound. David Haywood added another version of Pollux to the Dooyong driver. Satoshi Suzuki updated an old Sega System 1 update to 0.67 standards. Stefan Jokisch fixed all of the remaining glitches in Tournament Table.
					</p>
					<div class="wippix">
						<img src="wippics/0305/rock_1.png" alt="Rock Climber (c) 1981 Taito" width="256" height="224" />
						<img src="wippics/0305/rock_2.png" alt="The intro of Rock Climber" width="256" height="224" />
						<img src="wippics/0305/rock_3.png" alt="The intro of Rock Climber" width="256" height="224" />
						<img src="wippics/0305/rock_4.png" alt="The gameplay of Rock Climber" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-10</h2>
					<p>
					Pierpaolo Prazzoli mostly fixed Tricky Doc, it's fully playable with sound although the colors are wrong.
					</p>
					<div class="wippix">
						<img src="wippics/0305/trckydoc_1.png" alt="Tricky Doc (c) 1987 Tecfri" width="240" height="224" />
						<img src="wippics/0305/trckydoc_2.png" alt="The intro of Tricky Doc" width="240" height="224" />
						<img src="wippics/0305/trckydoc_3.png" alt="The intro of Tricky Doc" width="240" height="224" />
						<img src="wippics/0305/trckydoc_4.png" alt="The gameplay of Tricky Doc" width="240" height="224" />
						<img src="wippics/0305/trckydoc_5.png" alt="The gameplay of Tricky Doc" width="240" height="224" />
						<img src="wippics/0305/trckydoc_6.png" alt="The gameplay of Tricky Doc" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-09</h2>
					<p>
					Angelo Salese simulated the MCU in Birdie King 3 so it is fully working now.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-08</h2>
					<p>
					Derrick Renaud did some improvements in the discrete sound system, fixing a few sounds and making it faster. Jarek Burczynski fixed a bug in the YM2203 core that caused a stuck tone in Desert Assault. David Haywood made some progress adding Progress to the Time Limit driver, it works except the colors are wrong because the color PROMs haven't been dumped yet.
					</p>
					<div class="wippix">
						<img src="wippics/0305/progress_1.png" alt="Progress (c) 1984 Chuo" width="224" height="256" />
						<img src="wippics/0305/progress_2.png" alt="The intro of Progress" width="224" height="256" />
						<img src="wippics/0305/progress_3.png" alt="The gameplay of Progress" width="224" height="256" />
						<img src="wippics/0305/progress_4.png" alt="The gameplay of Progress" width="224" height="256" />
						<img src="wippics/0305/progress_5.png" alt="The gameplay of Progress" width="224" height="256" />
						<img src="wippics/0305/progress_6.png" alt="The gameplay of Progress" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-07</h2>
					<p>
					Acho A. Tang submitted a small sprite drawing speedup to the Sega System 32 driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-06</h2>
					<p>
					Guru fixed the DIP switch settings in Zero Point.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-05</h2>
					<p>
					David Haywood added the PROMs to Rapid Hero, though they are not used for anything yet. Acho A. Tang sent in some minor updates to the Konami GX driver, fixing a few newly introduced bugs.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-04</h2>
					<p>
					Satoshi Suzuki fixed a few graphics glitches in Salamander and adjusted the refresh rate in it. Acho A. Tang submitted a major improvement to the Konami GX driver, improving the graphics emulation and emulating the ESC protection in Salamander 2, Dragoon Might and Tokimeki Memorial Puzzle-dama, making them all playable. Lawrence Gold forwarded a few patches to add support for multiple mice button inputs and more joystick buttons. David Silva submitted a better fix for the DIP switch settings in Dragon Master. Angelo Salese submitted MCU simulations to The Legend of Kage and Metal Soldier Isaac II.
					</p>
					<div class="wippix">
						<img src="wippics/0305/sal2_1.png" alt="Salamander 2 (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0305/sal2_2.png" alt="The intro of Salamander 2" width="288" height="224" />
						<img src="wippics/0305/sal2_3.png" alt="The gameplay of Salamander 2" width="288" height="224" />
						<img src="wippics/0305/sal2_4.png" alt="The gameplay of Salamander 2" width="288" height="224" />
						<img src="wippics/0305/sal2_5.png" alt="The gameplay of Salamander 2" width="288" height="224" />
						<img src="wippics/0305/sal2_6.png" alt="The gameplay of Salamander 2" width="288" height="224" />
						<img src="wippics/0305/sal2_7.png" alt="The gameplay of Salamander 2" width="288" height="224" />
						<img src="wippics/0305/sal2_8.png" alt="The gameplay of Salamander 2" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0305/dragoon_1.png" alt="Dragoon Might (c) 1995 Konami" width="384" height="224" />
						<img src="wippics/0305/dragoon_2.png" alt="The intro of Dragoon Might" width="384" height="224" />
						<img src="wippics/0305/dragoon_3.png" alt="The intro of Dragoon Might" width="384" height="224" />
						<img src="wippics/0305/dragoon_4.png" alt="The gameplay of Dragoon Might" width="384" height="224" />
						<img src="wippics/0305/dragoon_5.png" alt="The gameplay of Dragoon Might" width="384" height="224" />
						<img src="wippics/0305/dragoon_6.png" alt="The gameplay of Dragoon Might" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0305/tkmm_1.png" alt="Tokimeki Memorial Puzzle-dama (c) 1995 Konami" width="288" height="224" />
						<img src="wippics/0305/tkmm_2.png" alt="The intro of Tokimeki Memorial Puzzle-dama" width="288" height="224" />
						<img src="wippics/0305/tkmm_3.png" alt="The intro of Tokimeki Memorial Puzzle-dama" width="288" height="224" />
						<img src="wippics/0305/tkmm_4.png" alt="The gameplay of Tokimeki Memorial Puzzle-dama" width="288" height="224" />
						<img src="wippics/0305/tkmm_5.png" alt="The gameplay of Tokimeki Memorial Puzzle-dama" width="288" height="224" />
						<img src="wippics/0305/tkmm_6.png" alt="The gameplay of Tokimeki Memorial Puzzle-dama" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-05-03</h2>
					<p>
					David Haywood added Tricky Doc to the Sauro driver, it boots but graphics emulation is incomplete and controls are not yet hooked up. David Haywood also added the USA version of Super Pinball Action. Leon van Rooij submitted a bugfix to the row-select offset in the Cave driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-05-02</h2>
					<p>
					David Haywood added another version of Violent Storm to the Mystic Warriors driver and a German version of Logic Pro called Croquis. Nathan Woods updated the 6821 PIA init function to support save states.
					</p>
					<div class="wippix">
						<img src="wippics/0305/croquis_1.png" alt="Croquis (c) 1996 Deniam" width="320" height="224" />
						<img src="wippics/0305/croquis_2.png" alt="The intro of Croquis" width="320" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-05-01</h2>
					<p>
					Angelo Salese simulated the MCU protection in the Tiger Heli driver, making the original ROM sets fully working. Leon van Rooij submitted basic Direct3D support, giving the ability to turn off bi-linear filtering when using hardware stretch.
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
