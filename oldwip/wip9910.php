<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>October 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-10-31</h2>
					<p>
					Phil Stroffolino sent in tilemap functions with 16bpp support (helps Namco System 2), and he added a new Missing in Action romset to the Twin16 driver. Bernd Wiebelt fixed the slowness of -verifyroms.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-30</h2>
					<p>
					Karl Stenerud fixed a 68k disassembler bug. Tatsuyuki Satoh fixed Shadow Land.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-29</h2>
					<p>
					Phil Stroffolino fixed some problems in the Twin16 driver, and Nicola fixed rom merging.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-28</h2>
					<p>
					Manuel Abadia sent in a driver for The Hustler, and Nicola fixed some graphics bugs. Luca Elia added correct sound to Peek-a-Boo!
					</p>
					<div class="wippix">
						<img src="wippics/9910/theh_1.png" alt="The Hustler (c) 1987 Konami" width="224" height="256" />
						<img src="wippics/9910/theh_2.png" alt="The intro of The Hustler" width="224" height="256" />
						<img src="wippics/9910/theh_3.png" alt="The gameplay of The Hustler" width="224" height="256" />
						<img src="wippics/9910/theh_4.png" alt="The gameplay of The Hustler" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-27</h2>
					<p>
					Takahiro Nogi fixed UPD7759 problems in Vulcan Venture. Quench fixed a sound crash in TNZS, and added another Outzone romset to the Toaplan driver. J&uuml;rgen Buchm&uuml;ller fixed some things in DOS fileio.c. E. Watanabe fixed yet some more Nemesis graphics bugs.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-26</h2>
					<p>
					Tatsuyuki Satoh fixed Galaga '88. Keith Wilkins did some minor fixes to the Namco System 2 driver. Phil Stroffolino got collision detection working in Vulcan Venture with help from Dave Spicer and Nao. Luca Elia did a small fix to Wec Le Mans graphics, but colors aren't yet right. Takahiro Nogi fixed Bogey Manor sprite and background colors.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-25</h2>
					<p>
					J&uuml;rgen fixed some m6809 bugs and made new ones. Keith Wilkins got Rolling Thunder 2 working by patching the protection. Another Gradius 2 romset was added. E. Watanabe fixed priority problems in Namco System 86 games. Takahiro Nogi fixed some Bogey Manor graphics bugs. Mike Coates fixed some ASM 68k core bugs. Chackn fixed the dipswitches in Trigon and added another The End romset.
					</p>
					<div class="wippix">
						<img src="wippics/9910/rthu_1.png" alt="Rolling Thunder 2 (c) 1990 Namco" width="288" height="224" />
						<img src="wippics/9910/rthu_2.png" alt="The intro of Rolling Thunder 2" width="288" height="224" />
						<img src="wippics/9910/rthu_3.png" alt="The gameplay of Rolling Thunder 2" width="288" height="224" />
						<img src="wippics/9910/rthu_4.png" alt="The gameplay of Rolling Thunder 2" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-24</h2>
					<p>
					Satoshi Suzuki fixed some Toaplan graphics bugs. Luca Elia fixed Rodland graphics and Nicola Salmoria fixed Peek-a-Boo! priority control. Bryan McPhail added an original Tumblepop romset (with correct YM2151 sounds) to the driver. Keith Wilkins sent in another huge Namco System 2 update with more speed and graphics fixes.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-23</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller did some Konami CPU fixes. Dan Boris and Aaron Giles added the digital CVSD sound to Mousetrap.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-22</h2>
					<p>
					E. Watanabe fixed some Nemesis graphics problems. Bryan McPhail sent in a driver for Trio the Punch. Keith Wilkins finally added the C140 sound core (done by Phil Stroffolino with help from CAB) to the Namco System 2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/9910/trio_1.png" alt="Trio the Punch (c) 1989 Data East" width="256" height="240" />
						<img src="wippics/9910/trio_2.png" alt="The intro of Trio the Punch" width="256" height="240" />
						<img src="wippics/9910/trio_3.png" alt="The gameplay of Trio the Punch" width="256" height="240" />
						<img src="wippics/9910/trio_4.png" alt="The gameplay of Trio the Punch" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-21</h2>
					<p>
					Roberto Fresca added high score saving to Levers. Phil Stroffolino sent in a Twin16 update, with Hard Puncher / Final Round being completely playable, but Vulcan Venture is still missing the collisions. Zsolt Vasvari added the original Fly Boy romset to the driver, and he also fixed Rally X sprites and added coin cointer / lockout. Bryan McPhail sent in a driver for Bogey Manor, and Nicola fixed some of the colors.
					</p>
					<div class="wippix">
						<img src="wippics/9910/boge_1.png" alt="Bogey Manor (c) 1984 Technos" width="256" height="240" />
						<img src="wippics/9910/boge_2.png" alt="The intro of Bogey Manor" width="256" height="240" />
						<img src="wippics/9910/boge_3.png" alt="The gameplay of Bogey Manor" width="256" height="240" />
						<img src="wippics/9910/boge_4.png" alt="The gameplay of Bogey Manor" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-20</h2>
					<p>
					Roberto Fresca sent in high score saving to all Orca games and Extermination. Quench added Chuka Taisen and another Arkanoid 2 romset to the TNZS driver.
					</p>
					<div class="wippix">
						<img src="wippics/9910/chuk_1.png" alt="Chuka Taisen (c) 1988 Taito" width="256" height="224" />
						<img src="wippics/9910/chuk_2.png" alt="The gameplay of Chuka Taisen" width="256" height="224" />
						<img src="wippics/9910/chuk_3.png" alt="The gameplay of Chuka Taisen" width="256" height="224" />
						<img src="wippics/9910/chuk_4.png" alt="The gameplay of Chuka Taisen" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-19</h2>
					<p>
					Bryan McPhail fixed some problems in Raiden (except sound). Keith Wilkins sent in another Namco System 2 update with small fixes.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-18</h2>
					<p>
					Tatsuyuki Satoh sent in updated Namco System 1 driver using the new timer system, and it's a little faster now. Bryan McPhail sent in a general sprite lag fix, helping CPS-1 games at least. Mike Coates fixed some bugs in the ASM 68k core.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-17</h2>
					<p>
					Tatsuyuki Satoh fixed the Namco System 1 problems, and sent in a timer system update which should help some games after they're converted to use it.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-16</h2>
					<p>
					Aaron Giles sent in a TMS34010 update with a few structural changes and bugfixes.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-15</h2>
					<p>
					Aaron Giles sent in a small update to memory.c. Tatsuyuki Satoh sent in a Namco System 1 update with a correct romset for Blazer, DAC sound fixes and some other fixes to m6800. Shingo Suzuki adjusted Iron Horse sound speeds.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-14</h2>
					<p>
					Nicola fixed the colors in Changes, Marine Boy and Hopper Robo. Satoshi Suzuki submitted a Toaplan update with a few graphics fixes.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-13</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller sent in another Z80 update. Aaron Giles sent in drivers for two Atari prototype games: Arcade Classics and Sparkz. He also fixed a few Namco System 2 problems on the Mac side.
					</p>
					<div class="wippix">
						<img src="wippics/9910/arca_1.png" alt="Arcade Classics (c) 1992 Atari" width="336" height="240" />
						<img src="wippics/9910/arca_2.png" alt="The intro of Arcade Classics" width="336" height="240" />
						<img src="wippics/9910/arca_3.png" alt="The gameplay of Super Centipede" width="336" height="240" />
						<img src="wippics/9910/arca_4.png" alt="The gameplay of Missile Command 2" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9910/spar_1.png" alt="Sparkz (c) 1992 Atari" width="336" height="240" />
						<img src="wippics/9910/spar_2.png" alt="The gameplay of Sparkz" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-12</h2>
					<p>
					Keith Wilkins sent in another Namco System 2 update with controls working in most games, and also fixed a lot of the graphics bugs. The playable games are now Assault, Ordyne, Mirai Ninja, Phelios, Legend of Walkyrie, Finest Hour, Burning Force, Marvel Land, Dragon Saber and Cosmo Gang the Video. Zsolt Vasvari fixed Wanted colors with new PROMs. Andrew Prime sent in a small System16 update with a few bug fixes and a new Tough Turf romset. Yasuhiro Ogawa fixed Assault input ports.
					</p>
					<div class="wippix">
						<img src="wippics/9910/phel_1.png" alt="Phelios (c) 1988 Namco" width="224" height="288" />
						<img src="wippics/9910/phel_2.png" alt="The intro of Phelios" width="224" height="288" />
						<img src="wippics/9910/phel_3.png" alt="The intro of Phelios" width="224" height="288" />
						<img src="wippics/9910/phel_4.png" alt="The gameplay of Phelios" width="224" height="288" />
						<img src="wippics/9910/phel_5.png" alt="The gameplay of Phelios" width="224" height="288" />
						<img src="wippics/9910/phel_6.png" alt="The gameplay of Phelios" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-11</h2>
					<p>
					Jarek Burczynski sent in an update to his YM2151 emulator, and fixed a dip switch in Bionic Commando. Aaron Giles sent in a CVSD/HC55516 rewrite, which sounds a little better, and he also fixed sound in Blasted and Max RPM.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-10</h2>
					<p>
					Nicola fixed some crashing bugs in the Mega System 1 driver. Keith Wilkins sent in another Namco System 2 driver with a lot of optimization and Cosmo Gang is now playable.
					</p>
					<div class="wippix">
						<img src="wippics/9910/cosm_1.png" alt="Cosmo Gang The Video (c) 1991 Namco" width="224" height="288" />
						<img src="wippics/9910/cosm_2.png" alt="The gameplay of Cosmo Gang The Video" width="224" height="288" />
						<img src="wippics/9910/cosm_3.png" alt="The gameplay of Cosmo Gang The Video" width="224" height="288" />
						<img src="wippics/9910/cosm_4.png" alt="The gameplay of Cosmo Gang The Video" width="224" height="288" />
						<img src="wippics/9910/cosm_5.png" alt="The gameplay of Cosmo Gang The Video" width="224" height="288" />
						<img src="wippics/9910/cosm_6.png" alt="The gameplay of Cosmo Gang The Video" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-09</h2>
					<p>
					Aaron Giles added rotation support to Bally/Sente and Exidy 440 drivers. Tatsuyuki Satoh fixed Shadow Land. Bryan McPhail added Mystic Riders to the M92 driver (Gun Hohki World version). J&uuml;rgen Buchm&uuml;ller sent in an Intel 8x41 core. Phil Stroffolino sent in a Twin16 update with working sprites in Vulcan Venture (but collisions are missing), and Final Round is also playable now.
					</p>
					<div class="wippix">
						<img src="wippics/9910/vulc_1.png" alt="Vulcan Venture (c) 1988 Konami" width="320" height="240" />
						<img src="wippics/9910/vulc_2.png" alt="The intro of Vulcan Venture" width="320" height="240" />
						<img src="wippics/9910/vulc_3.png" alt="The gameplay of Vulcan Venture" width="320" height="240" />
						<img src="wippics/9910/vulc_4.png" alt="The gameplay of Vulcan Venture" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-08</h2>
					<p>
					Luca Elia fixed sound in Hot Chase, and sent in a huge Mega System 1 update with many fixes and new drivers for Chimera Beast, Iga Ninjyutsuden, Plus Alpha and Peek-a-Boo! Manuel Abadia added multiple 051316 graphics chip support. Keith Wilkins fixed a small drawgfx bug affecting rotated bitmaps.
					</p>
					<div class="wippix">
						<img src="wippics/9910/chim_1.png" alt="Chimera Beast (c) 1993 Jaleco" width="256" height="224" />
						<img src="wippics/9910/igan_1.png" alt="Iga Ninjyutsuden (c) 1988 Jaleco" width="256" height="224" />
						<img src="wippics/9910/peek_1.png" alt="Peek-a-Boo! (c) 1993 Jaleco" width="256" height="224" />
						<img src="wippics/9910/plus_1.png" alt="Plus Alpha (c) 1989 Jaleco" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-07</h2>
					<p>
					Keith Wilkins finally got palette added to the Namco System 2 driver, but only Assault is almost working, and even that one needs controls sorted out. And a lot of optimizations are needed too. Roberto Fresca added highscore support to Kickle Cubicle. Tatsuyuki Satoh added DAC sounds to Namco System 1 driver. Phil Stroffolino sent in another Twin16 update with preliminary sprites. Aaron Giles added Mayday to the Williams driver. Mike Coates added a few more samples to the Space Panic driver.
					</p>
					<div class="wippix">
						<img src="wippics/9910/assa_1.png" alt="Assault (c) 1988 Namco" width="224" height="288" />
						<img src="wippics/9910/assa_2.png" alt="The gameplay of Assault" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/9910/mayd_1.png" alt="Mayday (c) 1980 Williams" width="292" height="240" />
						<img src="wippics/9910/mayd_2.png" alt="The gameplay of Mayday" width="292" height="240" />
						<img src="wippics/9910/mayd_3.png" alt="The gameplay of Mayday" width="292" height="240" />
						<img src="wippics/9910/mayd_4.png" alt="The gameplay of Mayday" width="292" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-06</h2>
					<p>
					Nicola fixed a few graphics problems in Crazy Climber 2.
					</p>
				</div>

				<div class="row">
					<h2>1999-10-05</h2>
					<p>
					Takahiro Nogi sent in drivers for Crazy Climber 2 and Syusse Oozumou. J&uuml;rgen Buchm&uuml;ller sent in another Z80 update with better emulation of the undocumented opcodes.
					</p>
					<div class="wippix">
						<img src="wippics/9910/ssoz_1.png" alt="Syusse Oozumou (c) 1984 Technos" width="240" height="256" />
						<img src="wippics/9910/ssoz_2.png" alt="The intro of Syusse Oozumou" width="240" height="256" />
						<img src="wippics/9910/ssoz_3.png" alt="The gameplay of Syusse Oozumou" width="240" height="256" />
						<img src="wippics/9910/ssoz_4.png" alt="The gameplay of Syusse Oozumou" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9910/ccli_1.png" alt="Crazy Climber 2 (c) 1988 Nichibutsu" width="304" height="240" />
						<img src="wippics/9910/ccli_2.png" alt="The gameplay of Crazy Climber 2" width="304" height="240" />
						<img src="wippics/9910/ccli_3.png" alt="The gameplay of Crazy Climber 2" width="304" height="240" />
						<img src="wippics/9910/ccli_4.png" alt="The gameplay of Crazy Climber 2" width="304" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-04</h2>
					<p>
					Tatsuyuki Satoh sent in an update to his FM core with still incomplete LFO support (intro of Rock 'n Rage needs this) and some other bugfixes. Aaron Giles fixed a CPU synchronization issue in Exidy 440 driver, and added Spiker to the Bally/Sente driver. Nicola sent in a driver for Finalizer.
					</p>
					<div class="wippix">
						<img src="wippics/9910/spik_1.png" alt="Spiker (c) 1986 Bally Sente" width="256" height="240" />
						<img src="wippics/9910/spik_2.png" alt="The gameplay of Spiker" width="256" height="240" />
						<img src="wippics/9910/spik_3.png" alt="The gameplay of Spiker" width="256" height="240" />
						<img src="wippics/9910/spik_4.png" alt="The gameplay of Spiker" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9910/fina_1.png" alt="Finalizer (c) 1985 Konami" width="224" height="272" />
						<img src="wippics/9910/fina_2.png" alt="The intro of Finalizer" width="224" height="272" />
						<img src="wippics/9910/fina_3.png" alt="The gameplay of Finalizer" width="224" height="272" />
						<img src="wippics/9910/fina_4.png" alt="The gameplay of Finalizer" width="224" height="272" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-03</h2>
					<p>
					Paul Leaman sent in a Battlelane driver with fixed sprites / intro sequence. Nicola fixed Street Fighter 1 from crashing. J&uuml;rgen Buchm&uuml;ller sent in a new version of the Z80 core with more undocumented opcodes added. Mike Coates added Herbie at the Olympics to the Donkey Kong driver.
					</p>
					<div class="wippix">
						<img src="wippics/9910/herb_1.png" alt="Herbie at the Olympics (c) 1984 CVS" width="224" height="256" />
						<img src="wippics/9910/herb_2.png" alt="The gameplay of Herbie at the Olympics" width="224" height="256" />
						<img src="wippics/9910/herb_3.png" alt="The gameplay of Herbie at the Olympics" width="224" height="256" />
						<img src="wippics/9910/herb_4.png" alt="The gameplay of Herbie at the Olympics" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-10-02</h2>
					<p>
					Keith Wilkins fixed a few small graphics bugs in the Namco System 2 driver. Bryan McPhail fixed robocopb from crashing.
					</p>
				</div>

				<div class="rowlast">
					<h2>1999-10-01</h2>
					<p>
					Phil Stroffolino sent in a Twin16 update with correct background graphics for all games, but sprites aren't yet implemented. Aaron Giles added 16-bit interfaces to the DAC routines. Keith Wilkins sent in a big Namco System 2 update with almost correct graphics (Zoom / Rotate graphics layers are working, but with wrong colors and some mirroring problems). Of the System 2 games, Assault is fully working except for graphics and controls problems.
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
