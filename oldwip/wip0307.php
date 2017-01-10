<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>July 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-07-31</h2>
					<p>
					Barry Rodewald submitted another bunch of random improvements to the Sega Mega-Tech driver. Angelo Salese improved the decryption in Risky Challenge / Gussun Oyoyo, but it still doesn't work perfectly. Pierpaolo Prazzoli sent in an update to the Donkey Kong driver, adding Eight Ball Action (with wrong colors), Shooting Gallery (not working) and Street Heat (not working, encrypted).
					</p>
					<div class="wippix">
						<img src="wippics/0307/8ballact_1.png" alt="Eight Ball Action (c) 1984 Seatongrove" width="224" height="256" />
						<img src="wippics/0307/8ballact_2.png" alt="The gameplay of Eight Ball Action" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-30</h2>
					<p>
					Stefan Jokisch sent in a driver for Sprint 4, which is lacking sound emulation but is otherwise playable.
					</p>
					<div class="wippix">
						<img src="wippics/0307/sprint4_1.png" alt="Sprint 4 (c) 1977 Atari" width="256" height="224" />
						<img src="wippics/0307/sprint4_2.png" alt="The gameplay of Sprint 4" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-29</h2>
					<p>
					Brian A. Troha fixed the DIP switch settings in Power Instinct. Angelo Salese fixed the graphics in Tecmo World Cup '90 trackball version.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-28</h2>
					<p>
					Barry Rodewald submitted various improvements to the Sega Mega-Tech driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-27</h2>
					<p>
					Olivier Galibert fixed a bug in the jump addressing in the i8035 CPU core, and sent in support for SP0250 sound chip and Sega G80 speech board, adding emulated speech to Astro Blaster, Space Fury, Star Trek and Zektor. Angelo Salese and Pierpaolo Prazzoli submitted a driver for Sengoku Mahjong, it's working but has some graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0307/sengokmj_1.png" alt="Sengoku Mahjong (c) 1991 Sigma" width="320" height="240" />
						<img src="wippics/0307/sengokmj_2.png" alt="The intro of Sengoku Mahjong" width="320" height="240" />
						<img src="wippics/0307/sengokmj_3.png" alt="The intro of Sengoku Mahjong" width="320" height="240" />
						<img src="wippics/0307/sengokmj_4.png" alt="The gameplay of Sengoku Mahjong" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-26</h2>
					<p>
					Olivier Galibert fixed a slight bug in the drawgfx functions, caused by some recent optimization.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-25</h2>
					<p>
					Brian A. Troha added new versions of Dog-Fight and Parodius DA! to the respective drivers. Jarek Burczynski and Martin Adrian fixed a compiling bug in the FM core that happened with some chip configurations. Angelo Salese converted the text layer of Act Fancer to tilemaps, fixed a MCU bug in Tiger Heli that caused wrong background positioning, and fixed some things in the ST-V driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-24</h2>
					<p>
					Frank Palazzolo sent in yet another fix for the positioning in some vector games. Nathan Woods sent in a patch that verifies hash strings to make sure they're valid.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-23</h2>
					<p>
					Brian A. Troha fixed some ROM names in the Namco System 11 driver. Frank Palazzolo fixed some positioning and clipping bugs that occurred in some vector games after the cleanups and fixes. Martin Adrian submitted a bug fix for the EXG and TFR opcodes in the M6809 CPU core, and a bug fix for loading ROMs to non-existent CPU regions. Curt Coder converted another driver to tilemaps.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-22</h2>
					<p>
					Brad Oliver fixed some compiling bugs. Stefan Jokisch re-wrote and merged the Sprint 1/2 and Dominos drivers, fixing sprites in Sprint 1/2 and fixing sound in Dominos.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-21</h2>
					<p>
					Shiriru fixed the graphics in Power Instinct 2.
					</p>
					<div class="wippix">
						<img src="wippics/0307/pwrinst2_1.png" alt="Power Instinct 2 (c) 1994 Atlus" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_2.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_3.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_4.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_5.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_6.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_7.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_8.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_9.png" alt="The intro of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_10.png" alt="The gameplay of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_11.png" alt="The gameplay of Power Instinct 2" width="320" height="240" />
						<img src="wippics/0307/pwrinst2_12.png" alt="The gameplay of Power Instinct 2" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-20</h2>
					<p>
					Frank Palazzolo cleaned up the vector graphics emulation and added capability to use an external vector renderer (for example a real vector monitor).
					</p>
					</div>

				<div class="row">
					<h2>2003-07-19</h2>
					<p>
					Pierpaolo Prazzoli added Imago to the Fast Freddie driver and fixed some bad graphics in Rougien. Pierpaolo Prazzoli also added Special Forces and Special Forces 2 to the Donkey Kong driver. Curt Coder submitted some cocktail mode additions and other fixes to various drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0307/imago_1.png" alt="Imago (c) 1983 Acom" width="224" height="256" />
						<img src="wippics/0307/imago_2.png" alt="The intro of Imago" width="224" height="256" />
						<img src="wippics/0307/imago_3.png" alt="The gameplay of Imago" width="224" height="256" />
						<img src="wippics/0307/imago_4.png" alt="The gameplay of Imago" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0307/spclforc_1.png" alt="Special Forces (c) 1985 Senko Industries" width="224" height="256" />
						<img src="wippics/0307/spcfrcii_1.png" alt="Special Forces 2 (c) 1985 Senko Industries" width="224" height="256" />
						<img src="wippics/0307/spclforc_2.png" alt="The intro of Special Forces" width="224" height="256" />
						<img src="wippics/0307/spclforc_3.png" alt="The gameplay of Special Forces" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-18</h2>
					<p>
					Nathan Woods added some callbacks to the artwork system to improve some MESS specific functionality.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-17</h2>
					<p>
					Aaron Giles added a Japanese version of Pit Fighter.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-16</h2>
					<p>
					Aaron Giles added information about European slapstics to the slapstic emulation.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-15</h2>
					<p>
					R. Belmont added a bootleg of Sunset Riders to the TMNT driver, but it's not working perfectly.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-14</h2>
					<p>
					Olivier Galibert decrypted the sprites in Power Instinct 2 and David Haywood fixed the corrupt tiles in it, but priorities and palettes are not working yet. Nathan Woods improved the snapshot saving cleanup patch.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-13</h2>
					<p>
					Tomasz Slanina fixed a crash in Atomic Robo-Kid.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-12</h2>
					<p>
					Jarek Burczynski sent in some fixes to the sound in LSA Squad. Tomasz Slanina and Jarek Burczynski sent in a driver for Big Event Golf. Manuel Abadia sent in a driver for Xor World. Nathan Woods sent in another patch cleaning up the snapshot saving system. Tomasz Slanina also submitted a driver for Super Speed Race Jr. Phil Stroffolino sent in a major improvement to the Namco Super System 22 driver, fixing a lot of the graphics in Prop Cycle.
					</p>
					<div class="wippix">
						<img src="wippics/0307/bigevglf_1.png" alt="Big Event Golf (c) 1986 Taito" width="224" height="256" />
						<img src="wippics/0307/bigevglf_2.png" alt="The intro of Big Event Golf" width="224" height="256" />
						<img src="wippics/0307/bigevglf_3.png" alt="The gameplay of Big Event Golf" width="224" height="256" />
						<img src="wippics/0307/bigevglf_4.png" alt="The gameplay of Big Event Golf" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0307/xorworld_1.png" alt="Xor World (c) 1990 Gaelco" width="256" height="224" />
						<img src="wippics/0307/xorworld_2.png" alt="The intro of Xor World" width="256" height="224" />
						<img src="wippics/0307/xorworld_3.png" alt="The intro of Xor World" width="256" height="224" />
						<img src="wippics/0307/xorworld_4.png" alt="The gameplay of Xor World" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0307/ssrj_1.png" alt="Super Speed Race Jr. (c) 1985 Taito" width="224" height="232" />
						<img src="wippics/0307/ssrj_2.png" alt="The intro of Super Speed Race Jr." width="224" height="232" />
						<img src="wippics/0307/ssrj_3.png" alt="The gameplay of Super Speed Race Jr." width="224" height="232" />
						<img src="wippics/0307/ssrj_4.png" alt="The gameplay of Super Speed Race Jr." width="224" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-11</h2>
					<p>
					R. Belmont cleaned up the Konami GX type 3 and 4 ROM loading. Jarek Burczynski added another graphics mode to the Mazer Blazer and Great Guns driver, making Great Guns playable although with some graphics glitches, but Mazer Blazer is not very playable because of missing collision detection. Curt Coder converted another few drivers to the tilemap system.
					</p>
					<div class="wippix">
						<img src="wippics/0307/greatgun_1.png" alt="Great Guns (c) 1983 Stern" width="256" height="256" />
						<img src="wippics/0307/greatgun_2.png" alt="The intro of Great Guns" width="256" height="256" />
						<img src="wippics/0307/greatgun_3.png" alt="The gameplay of Great Guns" width="256" height="256" />
						<img src="wippics/0307/greatgun_4.png" alt="The gameplay of Great Guns" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0307/mazerbla_1.png" alt="Mazer Blazer (c) 1983 Stern" width="256" height="256" />
						<img src="wippics/0307/mazerbla_2.png" alt="The intro of Mazer Blazer" width="256" height="256" />
						<img src="wippics/0307/mazerbla_3.png" alt="The gameplay of Mazer Blazer" width="256" height="256" />
						<img src="wippics/0307/mazerbla_4.png" alt="The gameplay of Mazer Blazer" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-10</h2>
					<p>
					R. Belmont added a bootleg version of Moo Mesa to the driver, but there are no sprites due to missing ROMs. Aaron Giles fixed the timer bugs that caused the Art &amp; Magic and exidy440 games to fail, and the Seibu sound system is also fixed now. Jarek Burczynski fixed the OKIM6295 bankswitching in the Moo Mesa bootleg. Nathan Woods sent in a few small MESS-specific patches and added save state support to the Cojag driver. Tomasz Slanina and Jarek Burczynski sent in a driver for Strike Bowling, it's playable but it's missing analog sound.
					</p>
					<div class="wippix">
						<img src="wippics/0307/sbowling_1.png" alt="Strike Bowling (c) 1982 Taito" width="224" height="240" />
						<img src="wippics/0307/sbowling_2.png" alt="The intro of Strike Bowling" width="224" height="240" />
						<img src="wippics/0307/sbowling_3.png" alt="The gameplay of Strike Bowling" width="224" height="240" />
						<img src="wippics/0307/sbowling_4.png" alt="The gameplay of Strike Bowling" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-09</h2>
					<p>
					Pierpaolo Prazzoli added Pest Place, a bootleg of Mario Bros, to the Donkey Kong driver. David Haywood added Genix to the Pirates driver, but the graphics ROMs are missing. Brian A. Troha added the R3000 version of Area 51 / Maximum Force Duo. R. Belmont sent in a driver for the Japanese version of Cue Brick which runs on different hardware than the world version. David Haywood fixed the text layer colors in it. David Haywood also added Taisen Hot Gimmick 3 Digital Surfing to the Psikyo4 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0307/hotgmck3_1.png" alt="Taisen Hot Gimmick 3 Digital Surfing (c) 1999 Psikyo" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_2.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_3.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_4.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_5.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_6.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_7.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_8.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_9.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_10.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_11.png" alt="The intro of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
						<img src="wippics/0307/hotgmck3_12.png" alt="The gameplay of Taisen Hot Gimmick 3 Digital Surfing" width="640" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-08</h2>
					<p>
					Bryan McPhail added the Landmaker prototype to the Taito F3 driver, but it's missing some sprites. Curt Coder converted another few drivers to the tilemap system. David Haywood re-added the Nintendo Super System driver based on the MESS SNES driver, but it's still not working very well.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-07</h2>
					<p>
					David Haywood sent in another update to the Mega-Tech / Mega-Play drivers, but nothing is still working too well. David Haywood also added a row select graphics effect to the Toaplan2 driver, as needed by Battle Bakraid. Acho A. Tang fixed Run and Gun.
					</p>
					<div class="wippix">
						<img src="wippics/0307/rungun_1.png" alt="Run and Gun (c) 1993 Konami" width="384" height="224" />
						<img src="wippics/0307/rungun_2.png" alt="The intro Run and Gun" width="384" height="224" />
						<img src="wippics/0307/rungun_3.png" alt="The intro Run and Gun" width="384" height="224" />
						<img src="wippics/0307/rungun_4.png" alt="The gameplay Run and Gun" width="384" height="224" />
						<img src="wippics/0307/rungun_5.png" alt="The gameplay Run and Gun" width="384" height="224" />
						<img src="wippics/0307/rungun_6.png" alt="The gameplay Run and Gun" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-06</h2>
					<p>
					David Haywood added some basic support for Mega-Tech / Mega-Play games in the Sega C2 driver, but the BIOS / menu system isn't emulated yet. David Haywood also sent in a preliminary driver for Little Casino and Little Casino 2, but neither of them really work. Acho A. Tang sent in a major improvement to the G.I. Joe driver, fixing priorities, shadows and various other things. Stefan Jokisch fixed a bug in hard drive handling between clones of a driver. Bryan McPhail fixed another compiling error on other compilers.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-05</h2>
					<p>
					smf cleaned up the Namco System 11 driver and updated the documentation in it. Brad Oliver fixed a small compiling bug.
					</p>
					</div>

				<div class="row">
					<h2>2003-07-04</h2>
					<p>
					Brian A. Troha added another version of Maximum Force, Asia version of Sengeki Striker, US and Japan versions of Under Fire and original European version of Space Invasion to the relevant drivers. smf and MooglyGuy sent in a Namco System 11 driver that supports Star Sweep.
					</p>
					<div class="wippix">
						<img src="wippics/0307/starswep_1.png" alt="Star Sweep (c) 1997 Axela" width="320" height="240" />
						<img src="wippics/0307/starswep_2.png" alt="The intro of Star Sweep" width="320" height="240" />
						<img src="wippics/0307/starswep_3.png" alt="The intro of Star Sweep" width="320" height="240" />
						<img src="wippics/0307/starswep_4.png" alt="The intro of Star Sweep" width="320" height="240" />
						<img src="wippics/0307/starswep_5.png" alt="The gameplay of Star Sweep" width="320" height="240" />
						<img src="wippics/0307/starswep_6.png" alt="The gameplay of Star Sweep" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-03</h2>
					<p>
					Leon van Rooij fixed most of the blending effects in Raiga - Strato Fighter.
					</p>
					<div class="wippix">
						<img src="wippics/0307/raiga_blend1.png" alt="Raiga blending 1" width="256" height="224" />
						<img src="wippics/0307/raiga_blend2.png" alt="Raiga blending 2" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-07-02</h2>
					<p>
					Pierpaolo Prazzoli added Magical Spot to the Cosmic driver.
					</p>
					<div class="wippix">
						<img src="wippics/0307/magspot_1.png" alt="Magical Spot (c) 1980 Universal" width="192" height="256" />
						<img src="wippics/0307/magspot_2.png" alt="The gameplay of Magical Spot" width="192" height="256" />
						<img src="wippics/0307/magspot_3.png" alt="The gameplay of Magical Spot" width="192" height="256" />
						<img src="wippics/0307/magspot_4.png" alt="The gameplay of Magical Spot" width="192" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-07-01</h2>
					<p>
					Stefan Jokisch fixed the LEDs in both Boxer and Wolf Pack.
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
