<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>October 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-10-31</h2>
					<p>
					Gerardo Oporto fixed some Sega C2 dipswitch settings.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-30</h2>
					<p>
					Nicola Salmoria added Naname de Magic to the Oh My God! driver.
					</p>
					<div class="wippix">
						<img src="wippics/0010/nana_1.png" alt="Naname de Magic (c) 1994 Atlus" width="320" height="240" />
						<img src="wippics/0010/nana_2.png" alt="The intro of Naname de Magic" width="320" height="240" />
						<img src="wippics/0010/nana_3.png" alt="The intro of Naname de Magic" width="320" height="240" />
						<img src="wippics/0010/nana_4.png" alt="The gameplay of Naname de Magic" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-29</h2>
					<p>
					Aaron Giles cleaned up the Sega C2 driver, added sound to all games and fixed some graphics and palette problems.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-28</h2>
					<p>
					Nicola Salmoria improved the functionality of romcmp.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-27</h2>
					<p>
					Nicola Salmoria and Takahiro Nogi further fixed some Fairyland Story sprite problems.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-26</h2>
					<p>
					Ernesto Corvi added another romset to the Playchoice10 driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-25</h2>
					<p>
					Jarek Burczynski fixed some bugs in the Rainbow Islands driver and added another romset. David Graves added another romset to the Cadash driver and fixed text colors in Yes/No Sinri Tokimeki Chart.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-24</h2>
					<p>
					Takahiro Nogi fixed some sprite bugs in Fairyland Story.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-23</h2>
					<p>
					Takahiro Nogi added bank switching function for M6295 samples and tweaked playback frequency in the Toaplan2 driver. Aaron Giles sent in the huge memory system update and also rewrote the ROM loading system for more flexibility.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-22</h2>
					<p>
					David Haywood submitted yet another Sega C2 driver update with another romset of Ichidant-R added.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-21</h2>
					<p>
					Shingo Suzuki fixed the Darwin 4078 speed and volume balance. MungJing fixed the Libble Rabble CPU speed.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-20</h2>
					<p>
					Gareth Hall added the correct MCU dump to the Fairyland Story driver, which is now playable.
					</p>
					<div class="wippix">
						<img src="wippics/0010/flst_1.png" alt="Fairyland Story (c) 1985 Taito" width="256" height="224" />
						<img src="wippics/0010/flst_2.png" alt="The gameplay of Fairyland Story" width="256" height="224" />
						<img src="wippics/0010/flst_3.png" alt="The gameplay of Fairyland Story" width="256" height="224" />
						<img src="wippics/0010/flst_4.png" alt="The gameplay of Fairyland Story" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-19</h2>
					<p>
					Craig Aker submitted an MCR2 driver update with support for Two Tigers dedicated romset. Gerardo Oporto fixed dipswitches in Strahl and Bio Ship Paladin.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-18</h2>
					<p>
					David Haywood added some more dipswitches to the Sega C2 driver. Mirko Buffoni added Saboten Bombers to the Bombjack Twin driver.
					</p>
					<div class="wippix">
						<img src="wippics/0010/sabo_1.png" alt="Saboten Bombers (c) 1992 NMK" width="384" height="224" />
						<img src="wippics/0010/sabo_2.png" alt="The intro of Saboten Bombers" width="384" height="224" />
						<img src="wippics/0010/sabo_3.png" alt="The gameplay of Saboten Bombers" width="384" height="224" />
						<img src="wippics/0010/sabo_4.png" alt="The gameplay of Saboten Bombers" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-17</h2>
					<p>
					Aaron Giles updated the C 68k core to support 32-bit bus width in 68020 emulation. Mike Coates added some drawgfx functions to cope with the upcoming CVS drivers.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-16</h2>
					<p>
					David Graves sent in a preliminary Taito multiscreen driver with Darius 2, Ninja Warriors and Warrior Blade, however the extra wide background tilemaps are not emulated. Tatsuyuki Satoh updated the Namco System 1 driver to work correctly with Aaron's latest changes. Bryan McPhail fixed the last two levels' glitches in Act Fancer and added another romset of Street Smart.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-15</h2>
					<p>
					Aaron Giles has done major changes to the memory system while breaking a few drivers, though the changes are not yet finalized. Mathis Rosenhauer fixed 8bpp overlays with an alpha channel.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-14</h2>
					<p>
					Yochizo fixed some graphics problems in Shippu Mahou Daisakusen and Armed Police Batrider, added sound to Armed Police Batrider and sped up the driver a little.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-13</h2>
					<p>
					David Graves further improved the new Taito drivers' groundwork and fixed sprite / tile priorities in the Asuka &amp; Asuka driver games. Luca Elia sent in a driver for Scud Hammer. Phil Stroffolino added Sega PCM emulation to After Burner and After Burner II.
					</p>
					<div class="wippix">
						<img src="wippics/0010/scud_1.png" alt="Scud Hammer (c) 1994 Jaleco" width="224" height="256" />
						<img src="wippics/0010/scud_2.png" alt="The intro of Scud Hammer" width="224" height="256" />
						<img src="wippics/0010/scud_3.png" alt="The gameplay of Scud Hammer" width="224" height="256" />
						<img src="wippics/0010/scud_4.png" alt="The gameplay of Scud Hammer" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-12</h2>
					<p>
					David Graves fixed some missing sounds in Earth Joker. Bryan McPhail fixed Bionic Commando sprite colors.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-11</h2>
					<p>
					smf submitted some MAME debugger fixes.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-10</h2>
					<p>
					Phil Stroffolino sent in a Sega System16 update and added After Burner and After Burner II support thanks to <a href="http://www.finalburn.com/">Dave</a>.
					</p>
					<div class="wippix">
						<img src="wippics/0010/abur_1.png" alt="After Burner 2 (c) 1987 Sega" width="320" height="224" />
						<img src="wippics/0010/abur_2.png" alt="The intro of After Burner 2" width="320" height="224" />
						<img src="wippics/0010/abur_3.png" alt="The intro of After Burner 2" width="320" height="224" />
						<img src="wippics/0010/abur_4.png" alt="The gameplay of After Burner 2" width="320" height="224" />
						<img src="wippics/0010/abur_5.png" alt="The gameplay of After Burner 2" width="320" height="224" />
						<img src="wippics/0010/abur_6.png" alt="The gameplay of After Burner 2" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-09</h2>
					<p>
					Yochizo re-applied the Toaplan2 driver updates, and fixed the YM2151 interface to be 16-bit.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-08</h2>
					<p>
					David Graves sent in yet another Taito update with a working driver for Cadash.
					</p>
					<div class="wippix">
						<img src="wippics/0010/cada_1.png" alt="Cadash (c) 1989 Taito" width="320" height="240" />
						<img src="wippics/0010/cada_2.png" alt="The intro of Cadash" width="320" height="240" />
						<img src="wippics/0010/cada_3.png" alt="The gameplay of Cadash" width="320" height="240" />
						<img src="wippics/0010/cada_4.png" alt="The gameplay of Cadash" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-07</h2>
					<p>
					Jarek Burczynski sent in an update for the Taito sound system, improving several Taito Z games' sound. David Graves added Kokontouzai Eto Monogatari to the Asuka &amp; Asuka driver.
					</p>
					<div class="wippix">
						<img src="wippics/0010/eto_1.png" alt="Kokontouzai Eto Monogatari (c) 1994 Visco" width="320" height="240" />
						<img src="wippics/0010/eto_2.png" alt="The intro of Kokontouzai Eto Monogatari" width="320" height="240" />
						<img src="wippics/0010/eto_3.png" alt="The intro of Kokontouzai Eto Monogatari" width="320" height="240" />
						<img src="wippics/0010/eto_4.png" alt="The gameplay of Kokontouzai Eto Monogatari" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-06</h2>
					<p>
					David Graves sent in a bit improved Taito Z driver with no playable games, but he also sent a driver for another Taito system supporting the following games: Asuka &amp; Asuka, Maze of Flott, Galmedes, U.N. Defense Force: Earth Joker.
					</p>
					<div class="wippix">
						<img src="wippics/0010/asuk_1.png" alt="Asuka &amp; Asuka (c) 1988 Taito" width="240" height="320" />
						<img src="wippics/0010/asuk_2.png" alt="The intro of Asuka &amp; Asuka" width="240" height="320" />
						<img src="wippics/0010/asuk_3.png" alt="The gameplay of Asuka &amp; Asuka" width="240" height="320" />
						<img src="wippics/0010/asuk_4.png" alt="The gameplay of Asuka &amp; Asuka" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/moff_1.png" alt="Maze of Flott (c) 1989 Taito" width="240" height="320" />
						<img src="wippics/0010/moff_2.png" alt="The intro of Maze of Flott" width="240" height="320" />
						<img src="wippics/0010/moff_3.png" alt="The intro of Maze of Flott" width="240" height="320" />
						<img src="wippics/0010/moff_4.png" alt="The gameplay of Maze of Flott" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/galm_1.png" alt="Galmedes (c) 1992 Visco" width="240" height="320" />
						<img src="wippics/0010/galm_2.png" alt="The intro of Galmedes" width="240" height="320" />
						<img src="wippics/0010/galm_3.png" alt="The gameplay of Galmedes" width="240" height="320" />
						<img src="wippics/0010/galm_4.png" alt="The gameplay of Galmedes" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/eart_1.png" alt="U.N. Defense Force: Earth Joker (c) 1993 Visco" width="240" height="320" />
						<img src="wippics/0010/eart_2.png" alt="The intro of U.N. Defense Force: Earth Joker" width="240" height="320" />
						<img src="wippics/0010/eart_3.png" alt="The intro of U.N. Defense Force: Earth Joker" width="240" height="320" />
						<img src="wippics/0010/eart_4.png" alt="The gameplay of U.N. Defense Force: Earth Joker" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-05</h2>
					<p>
					Bryan McPhail added the Japanese romset of Bomberman World and fixed the input ports for players 3 and 4. Paul Swan submitted a driver for Cavelon.
					</p>
					<div class="wippix">
						<img src="wippics/0010/cave_1.png" alt="Cavelon (c) 1983 Jetsoft" width="224" height="256" />
						<img src="wippics/0010/cave_2.png" alt="The intro of Cavelon" width="224" height="256" />
						<img src="wippics/0010/cave_3.png" alt="The intro of Cavelon" width="224" height="256" />
						<img src="wippics/0010/cave_4.png" alt="The gameplay of Cavelon" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-04</h2>
					<p>
					Luca Elia improved the sound in the Seta driver and added Thunder &amp; Lightning, Rezon, Athena no Hatena, Oishii Puzzle wa Irimasenka, Eight Forces, Pro Mahjong Kiwame and Krazy Bowl. Phil Stroffolino fixed a tilemap bug which made it crash in pure DOS. Aaron Giles fixed the buggy graphics in the Williams 34010 drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0010/thun_1.png" alt="Thunder &amp; Lightning (c) 1990 Seta" width="240" height="384" />
						<img src="wippics/0010/thun_2.png" alt="The intro of Thunder &amp; Lightning" width="240" height="384" />
						<img src="wippics/0010/thun_3.png" alt="The intro of Thunder &amp; Lightning" width="240" height="384" />
						<img src="wippics/0010/thun_4.png" alt="The gameplay of Thunder &amp; Lightning" width="240" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/eigh_1.png" alt="Eight Forces (c) 1994 Tecmo" width="224" height="384" />
						<img src="wippics/0010/eigh_2.png" alt="The intro of Eight Forces" width="224" height="384" />
						<img src="wippics/0010/eigh_3.png" alt="The gameplay of Eight Forces" width="224" height="384" />
						<img src="wippics/0010/eigh_4.png" alt="The gameplay of Eight Forces" width="224" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/krzy_1.png" alt="Krazy Bowl (c) 1994 Sammy" width="224" height="304" />
						<img src="wippics/0010/krzy_2.png" alt="The intro of Krazy Bowl" width="224" height="304" />
						<img src="wippics/0010/krzy_3.png" alt="The gameplay of Krazy Bowl" width="224" height="304" />
						<img src="wippics/0010/krzy_4.png" alt="The gameplay of Krazy Bowl" width="224" height="304" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/rezo_1.png" alt="Rezon (c) 1991 Allumer" width="384" height="240" />
						<img src="wippics/0010/rezo_2.png" alt="The intro of Rezon" width="384" height="240" />
						<img src="wippics/0010/rezo_3.png" alt="The gameplay of Rezon" width="384" height="240" />
						<img src="wippics/0010/rezo_4.png" alt="The gameplay of Rezon" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/ateh_1.png" alt="Athena no Hatena (c) 1993 Allumer" width="384" height="240" />
						<img src="wippics/0010/ateh_2.png" alt="The intro of Athena no Hatena" width="384" height="240" />
						<img src="wippics/0010/ateh_3.png" alt="The intro of Athena no Hatena" width="384" height="240" />
						<img src="wippics/0010/ateh_4.png" alt="The gameplay of Athena no Hatena" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/oisi_1.png" alt="Oishii Puzzle wa Irimasenka (c) 1993 Sunsoft" width="320" height="224" />
						<img src="wippics/0010/oisi_2.png" alt="The intro of Oishii Puzzle wa Irimasenka" width="320" height="224" />
						<img src="wippics/0010/oisi_3.png" alt="The intro of Oishii Puzzle wa Irimasenka" width="320" height="224" />
						<img src="wippics/0010/oisi_4.png" alt="The gameplay of Oishii Puzzle wa Irimasenka" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0010/kiwa_1.png" alt="Pro Mahjong Kiwame (c) 1991 East Technology" width="448" height="240" />
						<img src="wippics/0010/kiwa_2.png" alt="The intro of Pro Mahjong Kiwame" width="448" height="240" />
						<img src="wippics/0010/kiwa_3.png" alt="The intro of Pro Mahjong Kiwame" width="448" height="240" />
						<img src="wippics/0010/kiwa_4.png" alt="The gameplay of Pro Mahjong Kiwame" width="448" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-10-03</h2>
					<p>
					Nicola Salmoria fixed Arabian graphics.
					</p>
				</div>

				<div class="row">
					<h2>2000-10-02</h2>
					<p>
					Jarek Burczynski added Selfeena to the Taito B driver. David Haywood started adding dipswitches to the Sega C2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0010/self_1.png" alt="Selfeena (c) 1991 East Technology" width="320" height="224" />
						<img src="wippics/0010/self_2.png" alt="The intro of Selfeena" width="320" height="224" />
						<img src="wippics/0010/self_3.png" alt="The gameplay of Selfeena" width="320" height="224" />
						<img src="wippics/0010/self_4.png" alt="The gameplay of Selfeena" width="320" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2000-10-01</h2>
					<p>
					Bryan McPhail added flipscreen support to Karnov and Stadium Hero drivers.
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
