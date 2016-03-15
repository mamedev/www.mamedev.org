<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>December 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-12-31</h2>
					<p>
					Erik Sipman submitted a modification to fill black borders with artwork without changing the resolution.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-30</h2>
					<p>
					Quench fixed the OKIM6295 sound chip banking in Diver Boy, fixed the sprites from being clipped at the right side of the screen and the horizontal resolution. Erik Sipman submitted a modification to pause MAME automatically when it loses focus.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-29</h2>
					<p>
					Aaron Giles added the ability for drivers to change the refresh rate during emulation. Quench fixed the OKIM6295 sounds in Aquarium. Pierpaolo Prazzoli added Wild Pilot to the Cisco Heat driver, but it has some graphics priority problems.
					</p>
					<div class="wippix">
						<img src="wippics/0312/wildplt_1.png" alt="Wild Pilot (c) 1992 Jaleco" width="256" height="224" />
						<img src="wippics/0312/wildplt_2.png" alt="The intro of Wild Pilot" width="256" height="224" />
						<img src="wippics/0312/wildplt_3.png" alt="The intro of Wild Pilot" width="256" height="224" />
						<img src="wippics/0312/wildplt_4.png" alt="The intro of Wild Pilot" width="256" height="224" />
						<img src="wippics/0312/wildplt_5.png" alt="The gameplay of Wild Pilot" width="256" height="224" />
						<img src="wippics/0312/wildplt_6.png" alt="The gameplay of Wild Pilot" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-28</h2>
					<p>
					Quench fixed the DIP switches and fixed the OKIM6295 banking in Funny Bubble, fixing some sounds. David Haywood fixed some graphics glitches in Funny Bubble. Bryan McPhail fixed Avengers in Galactic Storm so it's quite playable, though it still has some graphics glitches. Pierpaolo Prazzoli decoded the background graphics in Competition Golf, but the background tilemaps are not yet emulated. Nicola Salmoria sent in a Namco 8080 driver cleanup, fixing inputs and graphics glitches in all games.
					</p>
					<div class="wippix">
						<img src="wippics/0312/avengrgs_1.png" alt="Avengers in Galactic Storm (c) 1996 Data East" width="320" height="240" />
						<img src="wippics/0312/avengrgs_2.png" alt="The intro of Avengers in Galactic Storm" width="320" height="240" />
						<img src="wippics/0312/avengrgs_3.png" alt="The gameplay of Avengers in Galactic Storm" width="320" height="240" />
						<img src="wippics/0312/avengrgs_4.png" alt="The gameplay of Avengers in Galactic Storm" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-27</h2>
					<p>
					Fabrice Arzeno and Brian A. Troha added two new Run and Gun ROM sets. Brian A. Troha also added the correct object ROMs to Final Lap 2. Stefan Jokisch added the fixed Black Dragon (bootleg) ROMs to the Black Tiger driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-26</h2>
					<p>
					Luca Elia fixed Target Ball so it works now. Nicola Salmoria fixed the DIP switch settings in Lady Frog. Pierpaolo Prazzoli fixed the DIP switch settings and added sound to Cross Pang.
					</p>
					<div class="wippix">
						<img src="wippics/0312/tgtball_1.png" alt="Target Ball (c) 1995 Yun Sung" width="256" height="224" />
						<img src="wippics/0312/tgtball_2.png" alt="The intro of Target Ball" width="256" height="224" />
						<img src="wippics/0312/tgtball_3.png" alt="The gameplay of Target Ball" width="256" height="224" />
						<img src="wippics/0312/tgtball_4.png" alt="The gameplay of Target Ball" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-25</h2>
					<p>
					Tomasz Slanina added DAC sound to the Truco-Tron driver. Nathan Woods sent in another few miscellaneous patches to various files. Pierpaolo Prazzoli fixed a lot of the graphics glitches in Cross Pang. Stefan Jokisch added some unused PROMs to a few drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0312/crospang_5.png" alt="Cross Pang (c) 199? Oksan?" width="320" height="240" />
						<img src="wippics/0312/crospang_6.png" alt="The intro of Cross Pang" width="320" height="240" />
						<img src="wippics/0312/crospang_7.png" alt="The intro of Cross Pang" width="320" height="240" />
						<img src="wippics/0312/crospang_8.png" alt="The gameplay of Cross Pang" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-24</h2>
					<p>
					David Haywood added Borderline to the vicdual driver, but it's missing sound. David Haywood also added the EAB version of Premier Soccer to the TMNT driver, added Target Ball to the Paradise driver (doesn't work) and improved the Funny Bubble driver, though it still has a few glitches. Pierpaolo Prazzoli and David Haywood sent in a driver for Cross Pang, it mostly works but sound is not emulated and it has a few graphics glitches. smf and R. Belmont sent in a driver for Konami GQ system supporting Crypt Killer, and smf sent in a driver for Namco System 12, supporting Aquarush, Ehrgeiz, Fighting Layer, Mr. Driller and Tekken 3.
					</p>
					<div class="wippix">
						<img src="wippics/0312/brdrlinb_1.png" alt="Borderline (c) 1981 bootleg" width="224" height="256" />
						<img src="wippics/0312/brdrlinb_2.png" alt="The gameplay of Borderline" width="224" height="256" />
						<img src="wippics/0312/brdrlinb_3.png" alt="The gameplay of Borderline" width="224" height="256" />
						<img src="wippics/0312/brdrlinb_4.png" alt="The gameplay of Borderline" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/funybubl_1.png" alt="Funny Bubble (c) 1999 Comad" width="320" height="224" />
						<img src="wippics/0312/funybubl_2.png" alt="The intro of Funny Bubble" width="320" height="224" />
						<img src="wippics/0312/funybubl_3.png" alt="The gameplay of Funny Bubble" width="320" height="224" />
						<img src="wippics/0312/funybubl_4.png" alt="The gameplay of Funny Bubble" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/crospang_1.png" alt="Cross Pang (c) 199? Oksan?" width="320" height="240" />
						<img src="wippics/0312/crospang_2.png" alt="The intro of Cross Pang" width="320" height="240" />
						<img src="wippics/0312/crospang_3.png" alt="The intro of Cross Pang" width="320" height="240" />
						<img src="wippics/0312/crospang_4.png" alt="The gameplay of Cross Pang" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/cryptklr_1.png" alt="Crypt Killer (c) 1995 Konami" width="320" height="240" />
						<img src="wippics/0312/cryptklr_2.png" alt="The intro of Crypt Killer" width="320" height="240" />
						<img src="wippics/0312/cryptklr_3.png" alt="The gameplay of Crypt Killer" width="320" height="240" />
						<img src="wippics/0312/cryptklr_4.png" alt="The gameplay of Crypt Killer" width="320" height="240" />
						<img src="wippics/0312/cryptklr_5.png" alt="The gameplay of Crypt Killer" width="320" height="240" />
						<img src="wippics/0312/cryptklr_6.png" alt="The gameplay of Crypt Killer" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/aquarush_1.png" alt="Aqua Rush (c) 1999 Namco" width="640" height="480" />
						<img src="wippics/0312/aquarush_2.png" alt="The intro of Aqua Rush" width="640" height="480" />
						<img src="wippics/0312/aquarush_3.png" alt="The gameplay of Aqua Rush" width="640" height="480" />
						<img src="wippics/0312/aquarush_4.png" alt="The gameplay of Aqua Rush" width="640" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/ehrgeiz_1.png" alt="Ehrgeiz (c) 1998 Square/Namco" width="512" height="480" />
						<img src="wippics/0312/ehrgeiz_2.png" alt="The intro of Ehrgeiz" width="512" height="480" />
						<img src="wippics/0312/ehrgeiz_3.png" alt="The gameplay of Ehrgeiz" width="512" height="480" />
						<img src="wippics/0312/ehrgeiz_4.png" alt="The gameplay of Ehrgeiz" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/fgtlayer_1.png" alt="Fighting Layer (c) 1998 Arika/Namco" width="512" height="480" />
						<img src="wippics/0312/fgtlayer_2.png" alt="The intro of Fighting Layer" width="512" height="480" />
						<img src="wippics/0312/fgtlayer_3.png" alt="The gameplay of Fighting Layer" width="512" height="480" />
						<img src="wippics/0312/fgtlayer_4.png" alt="The gameplay of Fighting Layer" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/mrdrillr_1.png" alt="Mr. Driller (c) 1999 Namco" width="512" height="480" />
						<img src="wippics/0312/mrdrillr_2.png" alt="The intro of Mr. Driller" width="512" height="480" />
						<img src="wippics/0312/mrdrillr_3.png" alt="The intro of Mr. Driller" width="512" height="480" />
						<img src="wippics/0312/mrdrillr_4.png" alt="The gameplay of Mr. Driller" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/tekken3_1.png" alt="Tekken 3 (c) 1996 Namco" width="512" height="480" />
						<img src="wippics/0312/tekken3_2.png" alt="The intro of Tekken 3" width="512" height="480" />
						<img src="wippics/0312/tekken3_3.png" alt="The gameplay of Tekken 3" width="512" height="480" />
						<img src="wippics/0312/tekken3_4.png" alt="The gameplay of Tekken 3" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-23</h2>
					<p>
					David Haywood sent in a preliminary driver for Funny Bubble, it runs but graphics and colors are wrong, sound is not emulated and controls don't work. David Haywood also added Pairs v1.2 to the itech32 driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-22</h2>
					<p>
					Curt Coder converted the Prehistoric Isle, Psychic 5 and Tunnel Hunt drivers to use the tilemap system, adding flipscreen/cocktail mode in the first two. Stefan Jokisch added Delta Race (an Omega Race bootleg) to the Omega Race driver, and another ROM set to the Champion Baseball driver. Pierpaolo Prazzoli added an alternate RBI Baseball ROM set to the VSNES driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-21</h2>
					<p>
					Aaron Giles sent in an update to the Seattle driver, adding Biofreaks and fixing California Speed and other things. Martin Adrian submitted an update to the cheat system adding support for favourite cheats and not loading the cheat file until it is used. Stefan Jokisch added an older version of Chinese Hero to the Shanghai Kid driver.
					</p>
					<div class="wippix">
						<img src="wippics/0312/biofreak_1.png" alt="BioFreaks (c) 1997 Midway" width="511" height="400" />
						<img src="wippics/0312/biofreak_2.png" alt="The intro of BioFreaks" width="511" height="400" />
						<img src="wippics/0312/biofreak_3.png" alt="The intro of BioFreaks" width="511" height="400" />
						<img src="wippics/0312/biofreak_4.png" alt="The gameplay of BioFreaks" width="511" height="400" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/calspeed_1.png" alt="California Speed (c) 1998 Atari" width="511" height="384" />
						<img src="wippics/0312/calspeed_2.png" alt="The intro of California Speed" width="511" height="384" />
						<img src="wippics/0312/calspeed_3.png" alt="The intro of California Speed" width="511" height="384" />
						<img src="wippics/0312/calspeed_4.png" alt="The gameplay of California Speed" width="511" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-20</h2>
					<p>
					Tomasz Slanina added ADPCM sounds to the Pass driver and fixed jerky music in it. R. Belmont added MSM5205 sound emulation to the Ashita no Joe driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-19</h2>
					<p>
					Pierpaolo Prazzoli sent in a major update to the Ashita no Joe driver, making it almost finished except for the sound which is not emulated at all. Tomasz Slanina improved the sound in Jaleco Mega System 32, and fixed communication with the sound CPU in SD Gundam Psycho Salamander no Kyoui, adding sound effects (but not music). Fabrice Arzeno added the world version of Fighting Hawk to the Taito L system driver.
					</p>
					<div class="wippix">
						<img src="wippics/0312/ashnojoe_1.png" alt="Ashita no Joe (c) 1990 Taito" width="288" height="208" />
						<img src="wippics/0312/ashnojoe_2.png" alt="The intro of Ashita no Joe" width="288" height="208" />
						<img src="wippics/0312/ashnojoe_3.png" alt="The intro of Ashita no Joe" width="288" height="208" />
						<img src="wippics/0312/ashnojoe_4.png" alt="The gameplay of Ashita no Joe" width="288" height="208" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-18</h2>
					<p>
					Curt Coder fixed inputs in a few games in the Sega System 32 driver, in Relief Pitcher and in WEC Le Mans 24 / Hot Chase. Norbert Kehrer fixed another DIP switch bug in the Super Tank driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-17</h2>
					<p>
					David Haywood sent in a preliminary driver for Ashita no Joe, it mostly works but has bad graphics and no controls etc. Pierpaolo Prazzoli fixed the colors in Speed Attack. Guru added Ace Driver to the Namco System 22 driver, it works in attract mode but with messed up graphics.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-16</h2>
					<p>
					Aaron Giles sent in a small fix to the MIPS3 dynarec core that caused problems in Vegas hardware games. Pierpaolo Prazzoli fixed the DIP switches and added two unknown PROMs to the Super Tank driver. Luca Elia added Mahjong Campus Hunting, 7jigen no Youseitachi, Mahjong Yarunara, Mahjong Angels and Quiz TV Gassyuukoku to the Dynax driver.
					</p>
					<div class="wippix">
						<img src="wippics/0312/mcnpshnt_1.png" alt="Mahjong Campus Hunter (c) 1990 Dynax" width="512" height="480" />
						<img src="wippics/0312/mcnpshnt_2.png" alt="The gameplay of Mahjong Campus Hunter" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/7jigen_1.png" alt="7jigen no Youseitachi (c) 1990 Dynax" width="512" height="480" />
						<img src="wippics/0312/7jigen_2.png" alt="The gameplay of 7jigen no Youseitachi" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/yarunara_1.png" alt="Mahjong Yarunara (c) 1991 Dynax" width="336" height="239" />
						<img src="wippics/0312/yarunara_2.png" alt="The gameplay of Mahjong Yarunara" width="336" height="239" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/mjangels_1.png" alt="Mahjong Angels (c) 1991 Dynax" width="336" height="239" />
						<img src="wippics/0312/mjangels_2.png" alt="The gameplay of Mahjong Angels" width="336" height="239" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/quiztvqq_1.png" alt="Quiz TV Gassyuukoku (c) 1992 Dynax" width="336" height="239" />
						<img src="wippics/0312/quiztvqq_2.png" alt="The gameplay of Quiz TV Gassyuukoku" width="336" height="239" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-15</h2>
					<p>
					Olivier Galibert sent another update to the Sega System 24 driver fixing a bunch of things and adding Dynamic Country Club. Norbert Kehrer submitted a fully working driver for Super Tank. Pierpaolo Prazzoli fixed the music from cutting off in Quiz Panicuru Fantasy.
					</p>
					<div class="wippix">
						<img src="wippics/0312/dcclub_1.png" alt="Dynamic Country Club (c) 1991 Sega" width="496" height="384" />
						<img src="wippics/0312/dcclub_2.png" alt="The intro of Dynamic Country Club" width="496" height="384" />
						<img src="wippics/0312/dcclub_3.png" alt="The gameplay of Dynamic Country Club" width="496" height="384" />
						<img src="wippics/0312/dcclub_4.png" alt="The gameplay of Dynamic Country Club" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/supertnk_1.png" alt="Super Tank (c) 1981 Video Games GmbH" width="256" height="256" />
						<img src="wippics/0312/supertnk_2.png" alt="The intro of Super Tank" width="256" height="256" />
						<img src="wippics/0312/supertnk_3.png" alt="The gameplay of Super Tank" width="256" height="256" />
						<img src="wippics/0312/supertnk_4.png" alt="The gameplay of Super Tank" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-14</h2>
					<p>
					David Haywood fixed the ROM loading in Quiz Rouka Ni Tattenasai and Bonanza Bros, so that they both work more or less perfectly now. Bryan McPhail sent in an update to the lightgun support, adding support for dual lightguns and fixing other things. Pierpaolo Prazzoli added the English version of Lode Runner III to the IREM M-62 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0312/qrouka_1.png" alt="Quiz Rouka Ni Tattenasai (c) 1991 Sega" width="496" height="384" />
						<img src="wippics/0312/qrouka_2.png" alt="The intro of Quiz Rouka Ni Tattenasai" width="496" height="384" />
						<img src="wippics/0312/qrouka_3.png" alt="The intro of Quiz Rouka Ni Tattenasai" width="496" height="384" />
						<img src="wippics/0312/qrouka_4.png" alt="The gameplay of Quiz Rouka Ni Tattenasai" width="496" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0312/bnzabros_1.png" alt="Bonanza Bros (c) 1990 Sega" width="496" height="384" />
						<img src="wippics/0312/bnzabros_2.png" alt="The intro of Bonanza Bros" width="496" height="384" />
						<img src="wippics/0312/bnzabros_3.png" alt="The gameplay of Bonanza Bros" width="496" height="384" />
						<img src="wippics/0312/bnzabros_4.png" alt="The gameplay of Bonanza Bros" width="496" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-13</h2>
					<p>
					El Condor submitted another change to the sound chip frequency in Zero Point 2. Olivier Galibert sent in an update to the Sega System 24 driver, improving HotRod to near perfection and adding all the encrypted games (which naturally don't work). Tomasz Slanina fixed a few things in the Jaleco Mega System 32 driver so that it produces some sound now.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-12</h2>
					<p>
					Brian A. Troha added Sorcer Striker (Mahou Daisakusen clone) and Kingdom Grand Prix (Shippu Mahou Daisakusen clone) to the Toaplan2 driver. Nathan Woods sent an update to the Nintendo Super System driver with miscellaneous changes and improvements. R. Belmont sent in a YMF271 sound core and added it to the Jaleco Mega System 32 driver, but sound doesn't work in it yet.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-11</h2>
					<p>
					Mariusz Wojcieszek submitted an improvement to the SCU DSP emulation in the ST-V driver, but Virtua Fighter Remix still doesn't work properly.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-10</h2>
					<p>
					Pierpaolo Prazzoli added an alternate ROM set for Power Instinct, but sound doesn't work in it.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-09</h2>
					<p>
					Pierpaolo Prazzoli partly fixed the sound in Quiz Panicuru Fantasy, but it's still not perfect.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-08</h2>
					<p>
					Pierpaolo Prazzoli added an alternate ROM set to the Roller Aces driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-07</h2>
					<p>
					Aaron Giles added the ADSP2104 variant to the ADSP2100 CPU core, fixed several minor bugs in the Seattle driver that affected Biofreaks and California Speed (but they're still not fully working), added speedups to NFL Blitz and NFL Blitz 2000 and did various other bug fixes and cleanups in the Seattle driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-06</h2>
					<p>
					Pierpaolo Prazzoli fixed the sound properly in Gals Hustler and added correct video RAM mirroring to it.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-05</h2>
					<p>
					Nathan Woods cleaned up the UI string support, to help MESS functionality. David Haywood sent in a preliminary driver for Gals Hustler, it might have some graphics problems. Brad Oliver sent in a small change to align bitmap lines to 16-byte boundaries for vector optimizations. Brian A. Troha fixed the DIP switches and music/sound in Gals Hustler, and he added another version of Street Fighter The Movie to the itech32 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0312/galhustl_1.png" alt="Gals Hustler (c) 1997 Ace International" width="256" height="224" />
						<img src="wippics/0312/galhustl_2.png" alt="The intro of Gals Hustler" width="256" height="224" />
						<img src="wippics/0312/galhustl_3.png" alt="The gameplay of Gals Hustler" width="256" height="224" />
						<img src="wippics/0312/galhustl_4.png" alt="The gameplay of Gals Hustler" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-04</h2>
					<p>
					Jarek Burczynski fixed the ROM names and background data in U.S. Championship V'ball (Japan), and he fixed the ADPCM sound and Z80 clock in Violence Fight.
					</p>
					</div>

				<div class="row">
					<h2>2003-12-03</h2>
					<p>
					ElSemi added support for per-voice gain parameters in the SCSP sound core, improving the sound balance. David Haywood added the SHA1 checksums to the rest of the drivers. Brad Oliver fixed the inline PPC assembly in the TMS9900 CPU core. Olivier Galibert fixed the controls in HotRod and Bonanza Bros, and HotRod was made playable by the addition of a ROM mirror thanks to GreyRogue's findings. BUT sent in an update to the Namco WSG sound core with better sound generation.
					</p>
					<div class="wippix">
						<img src="wippics/0312/hotrod_1.png" alt="HotRod (c) 1988 Sega" width="496" height="384" />
						<img src="wippics/0312/hotrod_2.png" alt="The gameplay of HotRod" width="496" height="384" />
						<img src="wippics/0312/hotrod_3.png" alt="The gameplay of HotRod" width="496" height="384" />
						<img src="wippics/0312/hotrod_4.png" alt="The gameplay of HotRod" width="496" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-12-02</h2>
					<p>
					Stefan Jokisch modified the Liberator driver to use external PROMs. Angelo Salese emulated the background graphics in Miss Bubble 2.
					</p>
					<div class="wippix">
						<img src="wippics/0312/missb2_1.png" alt="Miss Bubble 2 (c) 1996 Alpha Co" width="256" height="224" />
						<img src="wippics/0312/missb2_2.png" alt="The intro of Miss Bubble 2" width="256" height="224" />
						<img src="wippics/0312/missb2_3.png" alt="The gameplay of Miss Bubble 2" width="256" height="224" />
						<img src="wippics/0312/missb2_4.png" alt="The gameplay of Miss Bubble 2" width="256" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-12-01</h2>
					<p>
					Lawrence Gold sent in a patch that fixes some code on Solaris. Luca Elia fixed Monkey Mole Panic in the Don Den Lover driver, so it's now fully playable. Nathan Woods fixed some small MESS-specific things in the code.
					</p>
					<div class="wippix">
						<img src="wippics/0312/mmpanic_1.png" alt="Monkey Mole Panic (c) 1992 Taito" width="336" height="240" />
						<img src="wippics/0312/mmpanic_2.png" alt="The intro of Monkey Mole Panic" width="336" height="240" />
						<img src="wippics/0312/mmpanic_3.png" alt="The intro of Monkey Mole Panic" width="336" height="240" />
						<img src="wippics/0312/mmpanic_4.png" alt="The gameplay of Monkey Mole Panic" width="336" height="240" />
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
