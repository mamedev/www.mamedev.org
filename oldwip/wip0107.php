<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>July 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-07-31</h2>
					<p>
					Aaron Giles fixed the Windows 95 problem again. Luca Elia added Magical Crystals and Sand Scorpion to the Kaneko16 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0107/mgcr_1.png" alt="Magical Crystals (c) 1991 Kaneko" width="256" height="224" />
						<img src="wippics/0107/mgcr_2.png" alt="The intro of Magical Crystals" width="256" height="224" />
						<img src="wippics/0107/mgcr_3.png" alt="The intro of Magical Crystals" width="256" height="224" />
						<img src="wippics/0107/mgcr_4.png" alt="The gameplay of Magical Crystals" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0107/sand_1.png" alt="Sand Scorpion (c) 1992 Face" width="224" height="256" />
						<img src="wippics/0107/sand_2.png" alt="The gameplay of Sand Scorpion" width="224" height="256" />
						<img src="wippics/0107/sand_3.png" alt="The gameplay of Sand Scorpion" width="224" height="256" />
						<img src="wippics/0107/sand_4.png" alt="The gameplay of Sand Scorpion" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-30</h2>
					<p>
					Zsolt Vasvari fixed Amidar from erroneously drawing a starfield. Mike Haaland and Dave Haywood added another version of Space Stranger. Bernd Wiebelt fixed directory names with spaces in mame.ini, though you still need to wrap the directory with quotation marks. Aaron Giles finally ironed out the last Slapstic bugs, fixing Pit Fighter and Rampart for good.
					</p>
					<div class="wippix">
						<img src="wippics/0107/pitf_1.png" alt="The gameplay of Pit Fighter" width="336" height="240" />
						<img src="wippics/0107/pitf_2.png" alt="The gameplay of Pit Fighter" width="336" height="240" />
						<img src="wippics/0107/pitf_3.png" alt="The gameplay of Pit Fighter" width="336" height="240" />
						<img src="wippics/0107/pitf_4.png" alt="The gameplay of Pit Fighter" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-29</h2>
					<p>
					Nicola Salmoria merged the IREM M-90 and M-97 drivers, and partially decrypted Quiz F-1 but it's not yet playable. Bernd Wiebelt integrated Paul Priest's steadykey config option and fixed a few other command line interface bugs. Stefan Jokisch fixed some NEC CPU core bugs.
					</p>
					<div class="wippix">
						<img src="wippics/0107/quiz_1.png" alt="Quiz F-1 (c) 1992 IREM" width="384" height="240" />
						<img src="wippics/0107/quiz_2.png" alt="The intro of Quiz F-1" width="384" height="240" />
						<img src="wippics/0107/quiz_3.png" alt="The intro of Quiz F-1" width="384" height="240" />
						<img src="wippics/0107/quiz_4.png" alt="The gameplay of Quiz F-1" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-28</h2>
					<p>
					Luca Elia added the USA ROM set to Great 1000 Miles Rally.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-27</h2>
					<p>
					Nicola Salmoria decrypted the sound CPU in In the Hunt, Major Title 2 and Perfect Soldiers. He also fixed the colors in Major Title 2 and added nibble compare to romcmp.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-26</h2>
					<p>
					Gerardo Oporto updated the Sega System E driver, fixing DIP switch settings in Hang-On Jr. Nicola Salmoria fixed a NEC CPU core bug which caused sporadic tempo in the IREM games' sound, and he also fixed the M-72 driver which was broken. Aaron Giles added support for automatically freeing pointers. Bryan McPhail cracked the protection in all the original Robocop ROM sets.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-25</h2>
					<p>
					Guru added another version of Swimmer. Nicola Salmoria improved the IREM sound CPU emulation, which allows R-Type Leo to work without kludges, and he decrypted Hook and Mystic Riders. Marco Cassili fixed DIP switch settings in many M-92 games. Ian Patterson updated the cheat engine with a few new features.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-24</h2>
					<p>
					Nicola Salmoria yet improved the IREM CPU decryption tables, and got sound working in Undercover Cops and R-Type Leo. Luca Elia added Big Run to the Cisco Heat driver.
					</p>
					<div class="wippix">
						<img src="wippics/0107/bigr_1.png" alt="Big Run (c) 1989 Jaleco" width="256" height="224" />
						<img src="wippics/0107/bigr_2.png" alt="The intro of Big Run" width="256" height="224" />
						<img src="wippics/0107/bigr_3.png" alt="The gameplay of Big Run" width="256" height="224" />
						<img src="wippics/0107/bigr_4.png" alt="The gameplay of Big Run" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-23</h2>
					<p>
					Nicola Salmoria added general support for shadows and highlights and used it for some Konami games, and he fixed a 68k disassembler bug. Dave Haywood added shadows support to the SNK driver, and he resubmitted some DECO Cassette System additions. Tatsuyuki Satoh adjusted the speed parameter in the VLM5030 emulation. Aaron Giles added global brightness control to Toobin' and Time Killers. Bryan McPhail added cocktail mode support to the Deco16 driver, added another Robocop clone ROM set to it and he fixed a bug in the NEC disassembler.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-22</h2>
					<p>
					Phil Stroffolino added rotation and zoom support to the tilemap system and sent in some work-in-progress drivers including Namco System 21, which is coming along nicely minus the 3D graphics. David Graves added some Taito F2 clone ROM sets and fixed other things in the Taito F2 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-21</h2>
					<p>
					Aaron Giles reworked the Williams Y-unit video driver not to use too many colors. Nicola Salmoria fixed the graphics priority problems in Hasamu and a few other graphics glitches in Bomberman World.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-20</h2>
					<p>
					Aaron Giles hopefully fixed the Windows 95 problem for good, and cleaned up the Win32 code. Nicola Salmoria decrypted Hasamu and it runs fine.
					</p>
					<div class="wippix">
						<img src="wippics/0107/hasa_1.png" alt="Hasamu (c) 1991 Irem" width="384" height="240" />
						<img src="wippics/0107/hasa_2.png" alt="The intro of Hasamu" width="384" height="240" />
						<img src="wippics/0107/hasa_3.png" alt="The gameplay of Hasamu" width="384" height="240" />
						<img src="wippics/0107/hasa_4.png" alt="The gameplay of Hasamu" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-19</h2>
					<p>
					Nicola Salmoria decrypted the sound CPU in Blade Master and Lethal Thunder. Phil Stroffolino updated the Nemesis graphics emulation, converting it to tilemaps. Mathis Rosenhauer fixed screenshots of games that use less than 256 colors. Tatsuyuki Satoh improved the filter parameter in VLM5030 emulation but it is still not perfect.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-18</h2>
					<p>
					Nicola Salmoria fixed several NEC CPU core bugs and errors in the IREM CPU decryption tables, and got sound working in Gunforce. Bryan McPhail added World and Japanese ROM sets for Robocop 2.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-17</h2>
					<p>
					Marco Cassili fixed DIP switch settings in Oh My God. Mathis Rosenhauer removed 8bpp artwork support and cleaned up the artwork code. Nicola Salmoria improved the YM2610 ADPCM algorithm. Bryan McPhail has had some success with Rohga but it still suffers from unemulated protection.
					</p>
					<div class="wippix">
						<img src="wippics/0107/rohg_1.png" alt="Rohga (c) 1991 Data East" width="320" height="240" />
						<img src="wippics/0107/rohg_2.png" alt="The attract mode of Rohga" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-16</h2>
					<p>
					Nicola Salmoria fixed Return of the Jedi from crashing. Luca Elia added Mahjong Doukyuusei and Mahjong Doukyuusei Special to the Metro driver, and fixed some graphics problems in the other games in the driver. Zsolt Vasvari fixed several drivers that didn't handle full refresh screen updates properly. Mark McDougall optimized the Namco ND-1 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0107/doky_1.png" alt="Mahjong Doukyuusei (c) 1995 Make Software" width="320" height="224" />
						<img src="wippics/0107/doky_2.png" alt="The intro of Mahjong Doukyuusei" width="320" height="224" />
						<img src="wippics/0107/doky_3.png" alt="The intro of Mahjong Doukyuusei" width="320" height="224" />
						<img src="wippics/0107/doky_4.png" alt="The gameplay of Mahjong Doukyuusei" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0107/doks_1.png" alt="Mahjong Doukyuusei Special (c) 1995 Make Software" width="384" height="224" />
						<img src="wippics/0107/doks_2.png" alt="The intro of Mahjong Doukyuusei Special" width="384" height="224" />
						<img src="wippics/0107/doks_3.png" alt="The intro of Mahjong Doukyuusei Special" width="384" height="224" />
						<img src="wippics/0107/doks_4.png" alt="The gameplay of Mahjong Doukyuusei Special" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-15</h2>
					<p>
					Brad Oliver fixed some compilation problems. Nicola Salmoria decrypted the graphics in the original version of Tumble Pop. Bryan McPhail submitted a working Funky Jet driver with graphics from the bootleg ROM set, and Nicola went on to decrypt its original ROM set too. The same decryption also works for Sotsugyo Shousho.
					</p>
					<div class="wippix">
						<img src="wippics/0107/funk_1.png" alt="Funky Jet (c) 1992 Mitchell" width="320" height="240" />
						<img src="wippics/0107/funk_2.png" alt="The gameplay of Funky Jet" width="320" height="240" />
						<img src="wippics/0107/funk_3.png" alt="The gameplay of Funky Jet" width="320" height="240" />
						<img src="wippics/0107/funk_4.png" alt="The gameplay of Funky Jet" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0107/sots_1.png" alt="Sotsugyo Shousho (c) 1995 Mitchell" width="320" height="240" />
						<img src="wippics/0107/sots_2.png" alt="The intro of Sotsugyo Shousho" width="320" height="240" />
						<img src="wippics/0107/sots_3.png" alt="The intro of Sotsugyo Shousho" width="320" height="240" />
						<img src="wippics/0107/sots_4.png" alt="The gameplay of Sotsugyo Shousho" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-14</h2>
					<p>
					Uki fixed DIP switch settings in the Nemesis / Gradius driver. Nicola Salmoria converted the CPS video hardware for tilemap system.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-13</h2>
					<p>
					Nicola Salmoria completely removed 8bpp modes and updated a lot of files. Uki fixed the Nemesis / Gradius driver, improving the voices in Twinbee a little. Dave Haywood added a default EEPROM for Mazinger Z.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-12</h2>
					<p>
					Luca Elia sent in an update to the Cave driver, adding Mazinger Z and Pretty Soldier Sailor Moon. Nicola Salmoria decrypted the sprite graphics in both, so they are now fully playable. Zsolt Vasvari sent in an update for the Galaxian hardware drivers, fixing a lot of issues.
					</p>
					<div class="wippix">
						<img src="wippics/0107/sail_1.png" alt="Pretty Soldier Sailor Moon (c) 1995 Banpresto" width="320" height="240" />
						<img src="wippics/0107/sail_2.png" alt="The gameplay of Pretty Soldier Sailor Moon" width="320" height="240" />
						<img src="wippics/0107/sail_3.png" alt="The gameplay of Pretty Soldier Sailor Moon" width="320" height="240" />
						<img src="wippics/0107/sail_4.png" alt="The gameplay of Pretty Soldier Sailor Moon" width="320" height="240" />
						<img src="wippics/0107/sail_5.png" alt="The gameplay of Pretty Soldier Sailor Moon" width="320" height="240" />
						<img src="wippics/0107/sail_6.png" alt="The gameplay of Pretty Soldier Sailor Moon" width="320" height="240" />
						<img src="wippics/0107/sail_7.png" alt="The gameplay of Pretty Soldier Sailor Moon" width="320" height="240" />
						<img src="wippics/0107/sail_8.png" alt="The gameplay of Pretty Soldier Sailor Moon" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0107/mazi_1.png" alt="Mazinger Z (C) 1994 Banpresto" width="240" height="384" />
						<img src="wippics/0107/mazi_2.png" alt="The intro of Mazinger Z" width="240" height="384" />
						<img src="wippics/0107/mazi_3.png" alt="The gameplay of Mazinger Z" width="240" height="384" />
						<img src="wippics/0107/mazi_4.png" alt="The gameplay of Mazinger Z" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-11</h2>
					<p>
					Tatsuyuki Satoh fixed a long-standing bug in the tilemap system and converted Appooh to the tilemap system. Luca Elia fixed OKI m6295 emulation from crashing with sound disabled. Phil Stroffolino sent in another tilemap system update.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-10</h2>
					<p>
					Bernd Wiebelt fixed a command line bug with the -log parameter. Bryan McPhail finished the Wrestlefest driver, fixing all the known bugs.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-09</h2>
					<p>
					Kevin Eshbach submitted an update for the Double Dragon and Double Dragon II drivers, fixing some DIP switch settings and sound frequency. Nicola Salmoria improved the graphics handling in the Taito B system driver, fixing a lot of graphics bugs.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-08</h2>
					<p>
					Pretty damn quiet.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-07</h2>
					<p>
					No news today either.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-06</h2>
					<p>
					No significant news.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-05</h2>
					<p>
					Uki updated the Ikki driver, fixing some graphics priority problems.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-04</h2>
					<p>
					Olivier Galibert simplified color mapping in 16bpp modes to make it easier to add shadow handling, and he fixed a compilation problem in jrcrypt.c. Mark McDougall added Namco Classics Vol.2 to the ncv1 driver, but it doesn't quite work because of missing rotation / zoom emulation.
					</p>
				</div>

				<div class="row">
					<h2>2001-07-03</h2>
					<p>
					Olivier Galibert fixed a Win32 version bug with direct color modes. Luca Elia added Sokonuke Taisen Game to the Seta driver. Nicola Salmoria decrypted Astro Flash.
					</p>
					<div class="wippix">
						<img src="wippics/0107/soko_1.png" alt="Sokonuke Taisen Game (c) 1995 Sammy" width="320" height="240" />
						<img src="wippics/0107/soko_2.png" alt="The intro of Sokonuke Taisen Game" width="320" height="240" />
						<img src="wippics/0107/soko_3.png" alt="The intro of Sokonuke Taisen Game" width="320" height="240" />
						<img src="wippics/0107/soko_4.png" alt="The gameplay of Sokonuke Taisen Game" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-07-02</h2>
					<p>
					Bart Puype fixed Gunbird from crashing sometimes. SUZ updated the Xevious driver, adding two new samples and adjusting clock frequencies. lax fixed the sound frequency in Pettan Pyuu, Strength &amp; Skill and Ikki.
					</p>
				</div>

				<div class="rowlast">
					<h2>2001-07-01</h2>
					<p>
					Aaron Giles fixed bad colors in Toobin' in 8bpp modes, and he added a few new vertical scanlines and RGB blitters designed by Paul Priest. Luca Elia added Mahjong Gakuensai 1 and 2 to the Metro driver.
					</p>
					<div class="wippix">
						<img src="wippics/0107/gak1_1.png" alt="Mahjong Gakuensai 1 (c) 1997 Makesoft" width="320" height="240" />
						<img src="wippics/0107/gak1_2.png" alt="The intro of Mahjong Gakuensai 1" width="320" height="240" />
						<img src="wippics/0107/gak1_3.png" alt="The intro of Mahjong Gakuensai 1" width="320" height="240" />
						<img src="wippics/0107/gak1_4.png" alt="The intro of Mahjong Gakuensai 1" width="320" height="240" />
						<img src="wippics/0107/gak1_5.png" alt="The intro of Mahjong Gakuensai 1" width="320" height="240" />
						<img src="wippics/0107/gak1_6.png" alt="The gameplay of Mahjong Gakuensai 1" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0107/gak2_1.png" alt="Mahjong Gakuensai 2 (c) 1998 Makesoft" width="320" height="240" />
						<img src="wippics/0107/gak2_2.png" alt="The intro of Mahjong Gakuensai 2" width="320" height="240" />
						<img src="wippics/0107/gak2_3.png" alt="The intro of Mahjong Gakuensai 2" width="320" height="240" />
						<img src="wippics/0107/gak2_4.png" alt="The intro of Mahjong Gakuensai 2" width="320" height="240" />
						<img src="wippics/0107/gak2_5.png" alt="The intro of Mahjong Gakuensai 2" width="320" height="240" />
						<img src="wippics/0107/gak2_6.png" alt="The gameplay of Mahjong Gakuensai 2" width="320" height="240" />
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
