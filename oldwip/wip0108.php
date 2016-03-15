<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>August 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-08-31</h2>
					<p>
					David Graves sent in a preliminary driver for Legionnaire, but one tilemap layer is wrong and it suffers from protection so it is not yet playable.
					</p>
					<div class="wippix">
						<img src="wippics/0108/legi_1.png" alt="Legionnaire (c) 1992 TAD" width="256" height="240" />
						<img src="wippics/0108/legi_2.png" alt="The intro of Legionnaire" width="256" height="240" />
						<img src="wippics/0108/legi_3.png" alt="The intro of Legionnaire" width="256" height="240" />
						<img src="wippics/0108/legi_4.png" alt="The gameplay of Legionnaire" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-30</h2>
					<p>
					Nicola Salmoria improved Zero Hour. Robin Merrill submitted a change to Top Speed to use an eight level acceleration and brake. Phil Stroffolino and Aaron Giles added preliminary polygon support to the Namco System 21 driver, but the transformation matrix and projection parameters are not yet correct.
					</p>
					<div class="wippix">
						<img src="wippics/0108/airc_1.png" alt="Air Combat (c) 1992 Namco" width="496" height="480" />
						<img src="wippics/0108/airc_2.png" alt="The attract mode of Air Combat" width="496" height="480" />
						<img src="wippics/0108/airc_3.png" alt="The attract mode of Air Combat" width="496" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0108/cybs_1.png" alt="Cyber Sled (c) 1993 Namco" width="496" height="480" />
						<img src="wippics/0108/cybs_2.png" alt="The attract mode of Cyber Sled" width="496" height="480" />
						<img src="wippics/0108/cybs_3.png" alt="The attract mode of Cyber Sled" width="496" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-29</h2>
					<p>
					Jarek Burczysnki improved the YM2151 LFO emulation, and added an older version of Space Invaders DX to the Taito B driver. lax fixed some M6295 sound chip frequencies. Aaron Giles sent another CPU interface cleanup update, removing redundant code and improving the interface. David Haywood re-added two clone ROM sets.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-28</h2>
					<p>
					David Graves updated the Taito Z driver fixing crashes in Night Striker, and he also added Sky Smasher to the Blood Bros driver. Robin Merrill submitted a hack to improve the handling of analog pedals.
					</p>
					<div class="wippix">
						<img src="wippics/0108/skys_1.png" alt="Sky Smasher (c) 1990 Nihon System" width="224" height="256" />
						<img src="wippics/0108/skys_2.png" alt="The gameplay of Sky Smasher" width="224" height="256" />
						<img src="wippics/0108/skys_3.png" alt="The gameplay of Sky Smasher" width="224" height="256" />
						<img src="wippics/0108/skys_4.png" alt="The gameplay of Sky Smasher" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-27</h2>
					<p>
					Tatsuyuki Satoh added support for using AY8910 and YM2203 at the same time, making it possible to add correct sound in City Connection. David Haywood added Zero Hour to the Red Clash driver, but it has some graphical issues.
					</p>
					<div class="wippix">
						<img src="wippics/0108/zero_1.png" alt="Zero Hour (c) 1980 Universal" width="192" height="240" />
						<img src="wippics/0108/zero_2.png" alt="The intro of Zero Hour" width="192" height="240" />
						<img src="wippics/0108/zero_3.png" alt="The gameplay of Zero Hour" width="192" height="240" />
						<img src="wippics/0108/zero_4.png" alt="The gameplay of Zero Hour" width="192" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-26</h2>
					<p>
					Luca Elia wrote a driver for Sports Match. Bryan McPhail improved the IREM M-92 driver, making Ninja Baseball Batman work, and he also added the Japanese version of Dream Soccer '94. Aaron Giles fixed the non-working Konami games.
					</p>
					<div class="wippix">
						<img src="wippics/0108/sprt_1.png" alt="Sports Match (c) 1989 Dynax" width="256" height="240" />
						<img src="wippics/0108/sprt_2.png" alt="The intro of Sports Match" width="256" height="240" />
						<img src="wippics/0108/sprt_3.png" alt="The gameplay of Sports Match" width="256" height="240" />
						<img src="wippics/0108/sprt_4.png" alt="The gameplay of Sports Match" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0108/nbba_1.png" alt="Ninja Baseball Batman (c) 1993 IREM" width="320" height="240" />
						<img src="wippics/0108/nbba_2.png" alt="The intro of Ninja Baseball Batman" width="320" height="240" />
						<img src="wippics/0108/nbba_3.png" alt="The gameplay of Ninja Baseball Batman" width="320" height="240" />
						<img src="wippics/0108/nbba_4.png" alt="The gameplay of Ninja Baseball Batman" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-25</h2>
					<p>
					Mathis Rosenhauer fixed yet some more issues in the artwork functions. Aaron Giles fixed a decryption problem which caused CPS-2 not to work.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-24</h2>
					<p>
					HIGHWAYMAN submitted a clone of Defender called Defense.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-23</h2>
					<p>
					Mathis Rosenhauer fixed a crash bug in the artwork functions.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-22</h2>
					<p>
					Aaron Giles started cleaning up the CPU interface and fixing obscure bugs in it. SUZ did a temporary fix to make sprites visible in the Toaplan1 driver. Takahiro Nogi corrected the DIP switch settings in the Final Romance driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-21</h2>
					<p>
					Frank Palazzolo added Minesweeper to the Blockade driver. Mathis Rosenhauer added software alpha blending support to the artwork functions.
					</p>
					<div class="wippix">
						<img src="wippics/0108/mine_1.png" alt="Minesweeper (c) 1977 Amutech" width="256" height="224" />
						<img src="wippics/0108/mine_2.png" alt="The gameplay of Minesweeper" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-20</h2>
					<p>
					Nicola Salmoria added Youjyuden to the IREM M-62 driver and Gulf Storm and a version of Primella called Gun Dealer '94 to the Dooyong driver. Peter Trauner fixed a compile problem. Jarek Burczynski further improved the accuracy of the YM2151 LFO emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0108/youj_1.png" alt="Youjyuden (c) 1986 IREM" width="256" height="256" />
						<img src="wippics/0108/youj_2.png" alt="The intro of Youjyuden" width="256" height="256" />
						<img src="wippics/0108/youj_3.png" alt="The gameplay of Youjyuden" width="256" height="256" />
						<img src="wippics/0108/youj_4.png" alt="The gameplay of Youjyuden" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0108/gulf_1.png" alt="Gulf Storm (c) 1991 Dooyong" width="240" height="384" />
						<img src="wippics/0108/gulf_2.png" alt="The intro of Gulf Storm" width="240" height="384" />
						<img src="wippics/0108/gulf_3.png" alt="The gameplay of Gulf Storm" width="240" height="384" />
						<img src="wippics/0108/gulf_4.png" alt="The gameplay of Gulf Storm" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-19</h2>
					<p>
					Olivier Galibert fixed bugs in the tilemap and drawgfx routines which affected Xexex graphics.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-18</h2>
					<p>
					Zsolt Vasvari updated the 6502 CPU core so that another hack could be removed from the Burger Time decryption. David Graves cleaned up the Top Speed road color emulation. Nicola Salmoria adjusted the Discs of Tron driver for new artwork.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-17</h2>
					<p>
					Bryan McPhail added the Japanese version of Last Mission. Nicola Salmoria added sound to Clash Road and attempted to add Fire Battle but it has problems. R. Belmont sent in some pictures of a work-in-progress Konami System GX driver that he estimates being ready in the year 2012. The sound is fully emulated but there are some graphics problems in the 3 games that are working (Gokujou Parodius, Twinbee Yahoo! and Sexy Parodius) and the rest of the games suffer from unemulated protection.
					</p>
					<div class="wippix">
						<img src="wippics/0108/goku_1.png" alt="Gokujou Parodius (c) 1994 Konami" width="288" height="224" />
						<img src="wippics/0108/goku_2.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0108/goku_3.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0108/goku_4.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0108/tbya_1.png" alt="Twinbee Yahoo! (c) 1995 Konami" width="288" height="224" />
						<img src="wippics/0108/tbya_2.png" alt="The intro of Twinbee Yahoo!" width="288" height="224" />
						<img src="wippics/0108/tbya_3.png" alt="The intro of Twinbee Yahoo!" width="288" height="224" />
						<img src="wippics/0108/tbya_4.png" alt="The gameplay of Twinbee Yahoo!" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0108/sexy_1.png" alt="Sexy Parodius (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0108/sexy_2.png" alt="The intro of Sexy Parodius" width="288" height="224" />
						<img src="wippics/0108/sexy_3.png" alt="The gameplay of Sexy Parodius" width="288" height="224" />
						<img src="wippics/0108/sexy_4.png" alt="The gameplay of Sexy Parodius" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-16</h2>
					<p>
					Aaron Giles fixed the crashes in the T-Unit games, and he removed a nasty hack from the Namco System 1 driver. Zsolt Vasvari added an earlier version of Meteoroids called Space Force, and he fixed AY8910's behaviour with Lock'n'Chase. inside out boy added Space Echo to the Route 16 driver. David Graves yet improved the road colors in Top Speed.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-15</h2>
					<p>
					Zsolt Vasvari merged Sky Base with the Moon Cresta driver. MNU fixed Time Pilot '84 sprites.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-14</h2>
					<p>
					Jarek Burczynski greatly improved the accuracy of the various FM sound chip emulators. Nicola Salmoria decrypted the sound CPU of Dream Soccer '94, but like the rest of the IREM games, it suffers from sample pitch problems. Olivier Galibert fixed a bug with 16-bit samples in the K054539 sound chip emulation. Uki fixed the sound problems in Twin Qix. inside out boy added Sky Base to the Galaxian driver.
					</p>
					<div class="wippix">
						<img src="wippics/0108/skyb_1.png" alt="Sky Base (c) 1982 Omori" width="224" height="256" />
						<img src="wippics/0108/skyb_2.png" alt="The intro of Sky Base" width="224" height="256" />
						<img src="wippics/0108/skyb_3.png" alt="The gameplay of Sky Base" width="224" height="256" />
						<img src="wippics/0108/skyb_4.png" alt="The gameplay of Sky Base" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-13</h2>
					<p>
					David Graves added preliminary support for color raster effects in Top Speed, but it isn't perfect yet. Nicola Salmoria attempted to add sound to Fire Barrel, but it doesn't work yet due to main CPU problems.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-12</h2>
					<p>
					Nicola Salmoria fixed the sprites in Fire Barrel making it more or less playable (tilemap scrolling problems remain) and also in M-72 games fixing for example the Game Over text in R-Type.
					</p>
					<div class="wippix">
						<img src="wippics/0108/fire_1.png" alt="Fire Barrel (c) 1993 IREM" width="240" height="320" />
						<img src="wippics/0108/fire_2.png" alt="The intro of Fire Barrel" width="240" height="320" />
						<img src="wippics/0108/fire_3.png" alt="The gameplay of Fire Barrel" width="240" height="320" />
						<img src="wippics/0108/fire_4.png" alt="The gameplay of Fire Barrel" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2001-08-11</h2>
					<p>
					David Graves fixed Taito TC0480SCP and TC0080VCO chips' emulation to work with the new tilemap system. Nicola Salmoria fixed a bug in the debugger. Phil Stroffolino did initial optimizations to the new tilemap system and cleaned up some obsolete definitions.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-10</h2>
					<p>
					Nicola Salmoria cleaned up and fixed graphics bugs in the Mighty Guy driver. David Graves added color raster effects to the World Grand Prix driver, and he fixed other graphics bugs in World Grand Prix 2 so it is now playable.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-09</h2>
					<p>
					Aaron Giles fixed a bug in scanline drawing. David Graves made the default light gun values centered to overcome problems with some input devices.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-08</h2>
					<p>
					Aaron Giles merged the Final Romance and Pipe Dream drivers and fixed a few bugs in Final Romance. Takahiro Nogi also fixed a few graphics glitches in Final Romance. Bryan McPhail updated the Taito F3 driver to work with the new tilemap system.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-07</h2>
					<p>
					Aaron Giles converted Pipe Dream and Tetris to the tilemap system. Nicola Salmoria adjusted the tilemap system to work better with Chequered Flag.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-06</h2>
					<p>
					Aaron Giles cleaned up the Tetris driver and worked around a few bugs in Pipe Dream. Phil Stroffolino sent in an update to the tilemap system, adding support for larger tile sizes and improving the rotation and zooming support.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-05</h2>
					<p>
					Brian A. Troha added another version of Demon's World to the Toaplan driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-04</h2>
					<p>
					Zsolt Vasvari converted D-Day to tilemap system and added shadow support to it. Aaron Giles fixed the ES-550x sound bug which caused scratchy sound.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-03</h2>
					<p>
					Aaron Giles added the bootleg ROM set to the Pit Fighter driver, and he added two Klax prototype ROM sets to the Escape from the Planet of the Robot Monsters driver. Mathis Rosenhauer fixed the Aztarac radar graphics problems.
					</p>
				</div>

				<div class="row">
					<h2>2001-08-02</h2>
					<p>
					Nicola Salmoria decrypted the background graphics in Berlin Wall. Bryan McPhail added a newer revision of Super Real Darwin to the dec8 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0108/berl_1.png" alt="Berlin Wall (c) 1991 Kaneko" width="256" height="224" />
						<img src="wippics/0108/berl_2.png" alt="The intro of Berlin Wall" width="256" height="224" />
						<img src="wippics/0108/berl_3.png" alt="The gameplay of Berlin Wall" width="256" height="224" />
						<img src="wippics/0108/berl_4.png" alt="The gameplay of Berlin Wall" width="256" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2001-08-01</h2>
					<p>
					Nicola Salmoria finally decrypted the original version of Popeye. Olivier Galibert reported some progress with the System 16 driver rewrite but warned that completion is not guaranteed until the year 2006.
					</p>
					<div class="wippix">
						<img src="wippics/0108/tbla_1.png" alt="The road in Thunderblade" width="320" height="224" />
						<img src="wippics/0108/pdri_1.png" alt="The rotation in Power Drift" width="320" height="224" />
						<img src="wippics/0108/pdri_2.png" alt="The rotation in Power Drift" width="320" height="224" />
						<img src="wippics/0108/pdri_3.png" alt="The rotation in Power Drift" width="320" height="224" />
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
