<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>December 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-12-31</h2>
					<p>
					Phil Stroffolino sent in some SNK driver fixes, for example to the input ports and sound emulation.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-30</h2>
					<p>
					Aaron Giles fixed some compilation bugs and removed a minor Z80-related kludge from Tapper and Timber. Gerald added another Triple Punch romset and another Changes romset.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-29</h2>
					<p>
					Vernon C. Brooks got Tank Force (Namco System 1) partially working but it has wrong colors. Manuel Abadia fixed a graphics bug in Blades of Steel.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-28</h2>
					<p>
					Manuel Abadia sent in a Konami update with K051733 working fully in Devastators and Blades of Steel. Paul Leaman removed another kludge from the CPS-1 video driver, and Nicola Salmoria fixed the colors in kodb.
					</p>
					<div class="wippix">
						<img src="wippics/9912/devs_1.png" alt="Devastators (c) 1988 Konami" width="224" height="304" />
						<img src="wippics/9912/devs_2.png" alt="The intro of Devastators" width="224" height="304" />
						<img src="wippics/9912/devs_3.png" alt="The intro of Devastators" width="224" height="304" />
						<img src="wippics/9912/devs_4.png" alt="The gameplay of Devastators" width="224" height="304" />
					</div>
				</div>

				<div class="row">
					<h2>1999-12-27</h2>
					<p>
					Tatsuyuki Satoh sent in another FM system update with miscellaneous bugfixes. Paul Leaman fixed Gunsmoke from rebooting at the end of level 3, added protection work-around to Slam Masters and did some other CPS1 fixes. Manuel Abadia added the K051733 protection hacks to Blades of Steel and the game works a little bit better. He also added the color lookup tables and fixed a small sprite bug in Rock'n'Rage. Paul Leaman sent in a small Qsound update to the alternate Qsound player.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-26</h2>
					<p>
					Zsolt Vasvari fixed Combatribes graphics bugs and Bryan McPhail fixed its input ports. wwtk@mail.com and Matthew Conte contributed a new NES sound driver, and also some fixes to SNK games' sound. Manuel Abadia sent in a driver for Fast Lane, but it isn't playable because of the K051733 protection.
					</p>
					<div class="wippix">
						<img src="wippics/9912/fast_1.png" alt="Fast Lane (c) 1987 Konami" width="224" height="256" />
						<img src="wippics/9912/fast_2.png" alt="The gameplay of Fast Lane" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-12-25</h2>
					<p>
					Takahiro Nogi fixed crashes in Dottori Kun and Minivader. Zsolt Vasvari fixed Bump'n'Jump priority problems and a Rygar sprite clipping problem. Nicola Salmoria merged the Ninja Emaki driver with the Galivan driver. Bryan McPhail sent in a big update to Data East games with fully correct sound frequencies and with a few Hu6280 fixes.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-24</h2>
					<p>
					Manuel Abadia sent in a driver for Splash! and partial sound was added to it. J&uuml;rgen Buchm&uuml;ller made the Z80 cycle counting even more exact, but it still isn't perfect. Together with his another fix to some other Z80 problems they seem to fix Tehkan World Cup from losing its sound. Nicola Salmoria added some missing grid graphics to Radarscope.
					</p>
					<div class="wippix">
						<img src="wippics/9912/spla_1.png" alt="Splash! (c) 1992 Gaelco" width="376" height="240" />
						<img src="wippics/9912/spla_2.png" alt="The intro of Splash!" width="376" height="240" />
						<img src="wippics/9912/spla_3.png" alt="The intro of Splash!" width="376" height="240" />
						<img src="wippics/9912/spla_4.png" alt="The gameplay of Splash!" width="376" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-12-23</h2>
					<p>
					Zsolt Vasvari added another Mr. Viking romset and another Nova 2001 romset. Marco Cassili added another Dark Seal romset. Vernon C. Brooks fixed some crashing problems with Namco System 1. Takahiro Nogi sent in a driver for Minivader (a test board for Taito's cabinets), and he sent in a driver for Ninja Emaki / Youma Ninpou Chou. Mathis Rosenhauer added 16bpp support for the vector games.
					</p>
					<div class="wippix">
						<img src="wippics/9912/youm_1.png" alt="Youma Ninpou Chou (c) 1986 Nichibutsu" width="224" height="256" />
						<img src="wippics/9912/youm_2.png" alt="The intro of Youma Ninpou Chou" width="224" height="256" />
						<img src="wippics/9912/youm_3.png" alt="The gameplay of Youma Ninpou Chou" width="224" height="256" />
						<img src="wippics/9912/youm_4.png" alt="The gameplay of Youma Ninpou Chou" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9912/mini_1.png" alt="Minivader (c) 1990 Taito" width="256" height="240" />
						<img src="wippics/9912/mini_2.png" alt="The gameplay of Minivader" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-12-22</h2>
					<p>
					Nicola Salmoria fixed some graphics problems in Jackal, and he fixed title screens and sprite priorities in Gradius 3. Zsolt Vasvari added another Jungle King romset.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-21</h2>
					<p>
					Nicola Salmoria sent in a driver for Gradius 3. J&uuml;rgen Buchm&uuml;ller fixed games using pokey from crashing when run without sound, and he fixed some problems in helifire. Brian Lewis added user-configurable tweak modes to the GUI. Andrea Mazzoleni added more functionality for combining keystrokes.
					</p>
					<div class="wippix">
						<img src="wippics/9912/grad_1.png" alt="Gradius 3 (c) 1989 Konami" width="304" height="224" />
						<img src="wippics/9912/grad_2.png" alt="The intro of Gradius 3" width="304" height="224" />
						<img src="wippics/9912/grad_3.png" alt="The gameplay of Gradius 3" width="304" height="224" />
						<img src="wippics/9912/grad_4.png" alt="The gameplay of Gradius 3" width="304" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-12-20</h2>
					<p>
					Zsolt Vasvari fixed zaccaria from crashing with sound enabled.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-19</h2>
					<p>
					Marco Cassili fixed Paint Roller dipswitches. Nicola Salmoria sent in a driver for Thunder Cross 2, and then quickly fixed its sound too.
					</p>
					<div class="wippix">
						<img src="wippics/9912/thnd_1.png" alt="Thunder Cross 2 (c) 1991 Konami" width="288" height="224" />
						<img src="wippics/9912/thnd_2.png" alt="The intro of Thunder Cross 2" width="288" height="224" />
						<img src="wippics/9912/thnd_3.png" alt="The intro of Thunder Cross 2" width="288" height="224" />
						<img src="wippics/9912/thnd_4.png" alt="The gameplay of Thunder Cross 2" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-12-18</h2>
					<p>
					Aaron Giles fixed Pole Position II dipswitches. Takahiro Nogi sent in a driver for Dottori Kun (a test board for Sega's cabinets).
					</p>
					<div class="wippix">
						<img src="wippics/9912/dotr_1.png" alt="Dottori Kun (c) 1990 Sega" width="128" height="96" />
						<img src="wippics/9912/dotr_2.png" alt="The gameplay of Dottori Kun" width="128" height="96" />
					</div>
				</div>

				<div class="row">
					<h2>1999-12-17</h2>
					<p>
					Nicola Salmoria wrote 16bpp direct palette lookup functions. Bryan McPhail fixed Raiden's inconsistent coin input. J&uuml;rgen Buchm&uuml;ller added CPU speed adjustment to the GUI too, and he fixed the Pokey POT emulation.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-16</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed a 6502 interrupt bug, and he added support for adjusting CPU speeds in the drivers. Andrea Mazzoleni added support for multiple key or joystick sequences. Nicola Salmoria modified some parts of Raiden sound system to be like the M-72.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-15</h2>
					<p>
					Manuel Abadia fixed the graphics priorities in Baraduke. J&uuml;rgen Buchm&uuml;ller hopefully fixed the Tempest reset bug, and he added support for loading artwork from gamename.zip.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-14</h2>
					<p>
					Vernon C. Brooks added highscore saving to ssi/majest12. Nicola Salmoria added support for shadow / hilight graphics and modified the Namco System 1 driver to use the new functions.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-13</h2>
					<p>
					Nicola Salmoria added preliminary DAC sound to Finalizer, and he added palettized 16-bit support to the core and added DOS functions for it. Zsolt Vasvari fixed some problems with palette_recalc(). Tatsuyuki Satoh enabled bright and gamma adjustment in 16-bit modes.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-12</h2>
					<p>
					Quench fixed Galaxian and clones from crashing when run without sound. Marco Cassili fixed dip switches in Hunchback etc.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-11</h2>
					<p>
					Christian Groessler fixed some FM sound related problems on Alphas.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-10</h2>
					<p>
					Takahiro Nogi sent in a very preliminary driver for Mahjong Club 90's, but it's missing all graphics. Aaron Giles fixed the speed of I, Robot's mathbox. Vernon C. Brooks fixed a Xevious drawgfx bug.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-09</h2>
					<p>
					Zsolt Vasvari fixed KonamiIC in 16bpp. E. Watanabe and Takahiro Nogi fixed Return of Ishtar's hang at gameover. J&uuml;rgen Buchm&uuml;ller wrote a function to add memory regions on the fly. Aaron Giles sent in yet another I, Robot optimization, and he added another Arch Rivals romset to the driver.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-08</h2>
					<p>
					Zsolt Vasvari fixed a protection related bug in Exerion. Phil Stroffolino sent in a preliminary HAL21 driver, with wrong colors.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-07</h2>
					<p>
					Tatsuyuki Satoh sent in a FM update with some bugfixes. Shingo Suzuki fixed some problems in Dai Ressya Goutou. Aaron Giles sent in a nice optimization to the I, Robot driver. CAB and Bryan McPhail fixed some problems with 005289/051649 sound chip emulators.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-06</h2>
					<p>
					Jarek Burczynski rebalanced the YM2151 core. Aaron Giles did a major update to the timer system, and he also sent in a preliminary ADSP-2100 core. Manuel Abadia fixed a bug in m68k disassembler and another small bug in Grobda. J&uuml;rgen Buchm&uuml;ller fixed a -listsamples bug. Zsolt Vasvari fixed Kangaroo in 16bpp.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-05</h2>
					<p>
					Brad Oliver fixed the colors in Atari Soccer. SUZ and Quench fixed some toaplan1 problems. Paul Leaman merged his and Miguel's Qsound cores. Aaron Giles fixed the older Williams games in 16bpp, and he fixed a fast stack code problem in the TMS34010 core.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-04</h2>
					<p>
					Roberto Fresca added highscore saving to The Percussor, Pinbo, Samurai Nihon-Ichi, Nunchakun, Go Go Mr. Yamaguchi and Turbo. Quench added another Vimana romset to the toaplan1 driver and fixed some other problems. Miguel Angel Horna sent in yet another Qsound update.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-03</h2>
					<p>
					Bryan McPhail sent in a M92 update with a few fixes to Gunforce and some speedups.
					</p>
				</div>

				<div class="row">
					<h2>1999-12-02</h2>
					<p>
					Aaron Giles fixed a few fillbitmap() problems. Zsolt Vasvari fixed sound in Super Basketball. Bernd Wiebelt fixed some things in I, Robot and added 16bpp support.
					</p>
				</div>

				<div class="rowlast">
					<h2>1999-12-01</h2>
					<p>
					Quench added correct MCU roms to Flying Shark and Wardner. Manuel Abadia added another Blades of Steel romset.
					</p>
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

