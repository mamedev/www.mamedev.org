<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>June 2004 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2004-06-30</h2>
					<p>
					David Haywood added Double Point to the Gumbo driver. T2DU improved the YMF271C sound quality, improving for example Brave Blade and Tetris Plus.
					</p>
					<div class="wippix">
						<img src="wippics/0406/dblpoint_1.png" alt="Double Point (c) 1995 Dong Bang Electron" width="320" height="224" />
						<img src="wippics/0406/dblpoint_2.png" alt="The intro of Double Point" width="320" height="224" />
						<img src="wippics/0406/dblpoint_3.png" alt="The gameplay of Double Point" width="320" height="224" />
						<img src="wippics/0406/dblpoint_4.png" alt="The gameplay of Double Point" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-29</h2>
					<p>
					Nathan Woods fixed some .cfg saving bugs that were introduced with the input port changes and he added a sanity check for drivers' year fields. Aaron Giles added a few opcode variants to the ADSP2181 CPU core. Carlos Santillan submitted some performance improvements to the Super Kaneko Nova System driver. smf added repeat mode to PSX root counter emulation, fixing some sound effects in some Taito games.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-28</h2>
					<p>
					David Haywood fixed the Joe &amp; Mac Returns (set 2) ROM size, fixed the ROM loading in Jackie Chan and added another Street Fight ROM set. David Haywood also added two non-working Tornado ROM sets. Brian A. Troha fixed the monitor sync and coin slot DIP switches in Rim Rockin' Basketball. Aaron Giles fixed a xml2info problem with ampersands in filenames. smf fixed various endianness problems in the PSX emulation and added Psychic Force EX. MASH added another Fantasy Land ROM set. Sebastien Volpe added sprite emulation to Gal's Panic 3 so the RAM test can be seen now, but nothing else work yet due to missing MCU simulation. Sebastien Volpe also fixed the controls in Jackie Chan so that the test mode can be navigated now.
					</p>
					<div class="wippix">
						<img src="wippics/0406/psyfrcex_1.png" alt="Psychic Force EX (c) 1996 Taito" width="320" height="240" />
						<img src="wippics/0406/psyfrcex_2.png" alt="The attract mode of Psychic Force EX" width="320" height="240" />
						<img src="wippics/0406/psyfrcex_3.png" alt="The intro of Psychic Force EX" width="320" height="240" />
						<img src="wippics/0406/psyfrcex_4.png" alt="The gameplay of Psychic Force EX" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-27</h2>
					<p>
					Blip submitted a fix for a save state crash in the YM2610 sound core. Carlos Santillan submitted some performance improvements to the Neo Geo driver. Sebastien Volpe added some preliminary MCU emulation to Jackie Chan - Kung Fu Master and improved its graphics emulation enough that it works as far as the attract mode, but the game itself doesn't work yet. David Haywood sent in a very preliminary driver for Gal's Panic 3 which just loads the ROMs and doesn't do much else. smf sent in an update to PSX sound hardware emulation, including added PIO SPU RAM writes, fixed status register read/write, save all registers in save states and other improvements. smf also added -wavwrite that saves sound output to a WAV file. R. Belmont fixed big-endian problems in the Konami GV/GQ drivers, making them work on a Mac. Brian A. Troha fixed the DIP switch settings in LSA Squad, Whizz, Chase H.Q. and SCI. David Haywood added another ROM set to Saboten Bombers and three Mega Zone clones. Aaron Giles added the ADSP2181 variant to the ADSP21xx CPU core and support for more instruction forms in the x86 DRC.
					</p>
					<div class="wippix">
						<img src="wippics/0406/jchan_1.png" alt="Jackie Chan - Kung Fu Master (c) 1995 Kaneko" width="320" height="240" />
						<img src="wippics/0406/jchan_2.png" alt="The attract mode of Jackie Chan - Kung Fu Master" width="320" height="240" />
						<img src="wippics/0406/jchan_3.png" alt="The attract mode of Jackie Chan - Kung Fu Master" width="320" height="240" />
						<img src="wippics/0406/jchan_4.png" alt="The attract mode of Jackie Chan - Kung Fu Master" width="320" height="240" />
						<img src="wippics/0406/jchan_5.png" alt="The attract mode of Jackie Chan - Kung Fu Master" width="320" height="240" />
						<img src="wippics/0406/jchan_6.png" alt="The gameplay of Jackie Chan - Kung Fu Master" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-26</h2>
					<p>
					smf added the trackball emulation to Simpsons Bowling and fixed the flash load/save, making it fully playable. Phil Stroffolino sent in his current progress with Namco System 22 which is unfortunately stuck until the DSPs can be dumped or the sound/IO CPUs can be emulated.
					</p>
					<div class="wippix">
						<img src="wippics/0406/simpbowl_working_1.png" alt="Simpsons Bowling (c) 2000 Konami" width="512" height="480" />
						<img src="wippics/0406/simpbowl_working_2.png" alt="The gameplay of Simpsons Bowling" width="512" height="480" />
						<img src="wippics/0406/simpbowl_working_3.png" alt="The gameplay of Simpsons Bowling" width="512" height="480" />
						<img src="wippics/0406/simpbowl_working_4.png" alt="The gameplay of Simpsons Bowling" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-25</h2>
					<p>
					Pierpaolo Prazzoli added Mahjong Block Jongbou to the Alpha 68k driver, and he added cocktail support to Super Stingray and Kyros, coin counters to The Next Space and he added an alternate version of Gold Medalist.
					</p>
					<div class="wippix">
						<img src="wippics/0406/jongbou_1.png" alt="Mahjong Block Jongbou (c) 1987 SNK" width="224" height="256" />
						<img src="wippics/0406/jongbou_2.png" alt="The gameplay of Mahjong Block Jongbou" width="224" height="256" />
						<img src="wippics/0406/jongbou_3.png" alt="The gameplay of Mahjong Block Jongbou" width="224" height="256" />
						<img src="wippics/0406/jongbou_4.png" alt="The gameplay of Mahjong Block Jongbou" width="224" height="256" />
						<img src="wippics/0406/jongbou_5.png" alt="The gameplay of Mahjong Block Jongbou" width="224" height="256" />
						<img src="wippics/0406/jongbou_6.png" alt="The gameplay of Mahjong Block Jongbou" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-24</h2>
					<p>
					smf sent in a better fix to the PSX SPU bug and he fixed the manufacturer name in tgmj.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-23</h2>
					<p>
					Andrea Mazzoleni fixed an invalid memcpy call in the Sega System C2 driver, fixing bugs that occurred in MegaPlay games in some circumstances. David Haywood added the US version of Final Blow to the Taito F2 driver and the US version of Empire City to the Street Fight driver, and he sent in a preliminary driver for Meijinsen which doesn't work at all yet.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-22</h2>
					<p>
					David Haywood sent in a very preliminary driver for BMC Bowling, it doesn't work at all yet.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-21</h2>
					<p>
					Pierpaolo Prazzoli fixed the lives DIP switch in Super Pacman.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-20</h2>
					<p>
					Logiqx submitted SHA1 checksum additions to various drivers that were still missing them.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-19</h2>
					<p>
					El Condor submitted a sound frequency correction to Zero Point 1.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-18</h2>
					<p>
					Logiqx fixed \x strings in xml2info and added BIOS set support to it, making its output perfect, thus obsoleting -listinfo.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-17</h2>
					<p>
					darkcoder fixed a small but significant bug in the PSX SPU sound emulation, improving the sound quality immensely. Pierpaolo Prazzoli added another dozen Greyhound Trivia games. R. Belmont fixed the SPU/CDDA volume balance in the Konami GV system driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-16</h2>
					<p>
					Aaron Giles added Vapor TRX prototype to the Seattle driver, Street Drivin' (prototype) to the Hard Drivin' driver and he fixed a bug in Rim Rockin' Basketball where the game was started automatically when coins were inserted. Pierpaolo Prazzoli added Knightmare (prototype) to the Gottlieb driver.
					</p>
					<div class="wippix">
						<img src="wippics/0406/strtdriv_1.png" alt="Street Drivin' (c) 1990 Atari" width="512" height="288" />
						<img src="wippics/0406/strtdriv_2.png" alt="The intro of Street Drivin'" width="512" height="288" />
						<img src="wippics/0406/strtdriv_3.png" alt="The intro of Street Drivin'" width="512" height="288" />
						<img src="wippics/0406/strtdriv_4.png" alt="The gameplay of Street Drivin'" width="512" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/0406/kngtmare_1.png" alt="Knightmare (c) 1983 Gottlieb" width="256" height="240" />
						<img src="wippics/0406/kngtmare_2.png" alt="The intro of Knightmare" width="256" height="240" />
						<img src="wippics/0406/kngtmare_3.png" alt="The gameplay of Knightmare" width="256" height="240" />
						<img src="wippics/0406/kngtmare_4.png" alt="The gameplay of Knightmare" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-15</h2>
					<p>
					ddp2k4 submitted a correction to the volume levels in Capcom Bowling. Nathan Woods sent in another update to the new input port code, adding PORT_TOGGLE and INPUT_PORT_EXTERN declarations and some usrintrf.c reorganization. David Haywood sent in placeholder drivers for various encrypted Data East games.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-14</h2>
					<p>
					Nathan Woods fixed the IPF_REVERSE input port flag which had become broken with the previous changes. Pierpaolo Prazzoli added Squash and Thunder Hoop to the Gaelco driver but neither of them work because of encrypted video RAM and missing DS5002FP code.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-13</h2>
					<p>
					David Haywood added the English language version of Dragon World 2 to the PGM driver, added Killing Blade (not working due to protection/encryption) and cleaned up the driver otherwise.
					</p>
					<div class="wippix">
						<img src="wippics/0406/drgw2_1.png" alt="Dragon World 2 (c) 1997 IGS" width="448" height="224" />
						<img src="wippics/0406/drgw2_2.png" alt="The intro of Dragon World 2" width="448" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-12</h2>
					<p>
					smf sent in another PSX update with correct names for Magical Date, fixed the parent/clone relationship of Super Football Champ, fixed the Taito FX-1 watchdog, fixed System 11 NVRAM, added a kludge to start Sonic Wings Limited in the attract mode, fixes to the vertical and horizontal (which we control) display start/end registers and QSound fixes. Pierpaolo Prazzoli added sprite flip to Dragon Bowl as it's needed later in the game. Nathan Woods fixed a bug in the new input port code which had broken the DIP switch menu.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-11</h2>
					<p>
					Nathan Woods sent in further changes to the input port code, with better initialization of the InputPort structure and being able to tag input ports with names. MASH fixed Red Robin which was broken with the previous Fly Boy changes. Pierpaolo Prazzoli added Idol Janshi Su-Chi-Pi Special to the Jaleco Mahjong driver, but it's not working because of unemulated protection.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-10</h2>
					<p>
					Pierpaolo Prazzoli and David Haywood added Dragon Bowl to the Ninja Gaiden driver, but it's missing a sprite ROM causing bad colored sprites, and the sound is not correct. Nathan Woods sent in a bunch of input port changes, including the elimination of the InputPortTiny structure, improved the layout of the InputPort structure and removing obsolete MAME_NET code.
					</p>
					<div class="wippix">
						<img src="wippics/0406/dragbowl_1.png" alt="Dragon Bowl (c) 1982 NICS" width="256" height="224" />
						<img src="wippics/0406/dragbowl_2.png" alt="The intro of Dragon Bowl" width="256" height="224" />
						<img src="wippics/0406/dragbowl_3.png" alt="The intro of Dragon Bowl" width="256" height="224" />
						<img src="wippics/0406/dragbowl_4.png" alt="The intro of Dragon Bowl" width="256" height="224" />
						<img src="wippics/0406/dragbowl_5.png" alt="The gameplay of Dragon Bowl" width="256" height="224" />
						<img src="wippics/0406/dragbowl_6.png" alt="The gameplay of Dragon Bowl" width="256" height="224" />
						<img src="wippics/0406/dragbowl_7.png" alt="The gameplay of Dragon Bowl" width="256" height="224" />
						<img src="wippics/0406/dragbowl_8.png" alt="The gameplay of Dragon Bowl" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-09</h2>
					<p>
					Pierpaolo Prazzoli added Hangman to the Status Trivia driver. Brian A. Troha added the World version of Puchi Carat to the Taito F3 driver. smf renamed the .chd file names of both Quiz Do Re Mi Fa Grand Prix games to 8.3 style.
					</p>
					<div class="wippix">
						<img src="wippics/0406/hangman_1.png" alt="Hangman (c) 1984 Status Games" width="272" height="256" />
						<img src="wippics/0406/hangman_2.png" alt="The intro of Hangman" width="272" height="256" />
						<img src="wippics/0406/hangman_3.png" alt="The intro of Hangman" width="272" height="256" />
						<img src="wippics/0406/hangman_4.png" alt="The gameplay of Hangman" width="272" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-08</h2>
					<p>
					Gareth Hall fixed some graphics glitches in Crazy Kong with a new set of ROMs.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-07</h2>
					<p>
					Aaron Giles removed a bunch of old backwards compatibility macros.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-06</h2>
					<p>
					Nathan Woods sent in some miscellaneous cleanups to the input ports code. R. Belmont fixed the recently broken intro in Gaiapolis.
					</p>
				</div>

				<div class="row">
					<h2>2004-06-05</h2>
					<p>
					Hau fixed the missing/wrong sounds in Mouja. Guru corrected the clock frequency in Head On (Irem).
					</p>
				</div>

				<div class="row">
					<h2>2004-06-04</h2>
					<p>
					smf sent in another update to the PSX hardware emulation and ZN driver, fixing graphics problems in Heaven's Gate, corrected ROM loading for Super Football Champ and horizontal start/end of video signal. Meanwhile, Plasma Sword / Star Gladiator 2, Tech Romancer / Kikaioh and Tetris The Grand Master have become playable.
					</p>
					<div class="wippix">
						<img src="wippics/0406/plsmaswd_1.png" alt="Plasma Sword (c) 1998 Capcom" width="512" height="480" />
						<img src="wippics/0406/plsmaswd_2.png" alt="The intro of Plasma Sword" width="512" height="480" />
						<img src="wippics/0406/plsmaswd_3.png" alt="The gameplay of Plasma Sword" width="512" height="480" />
						<img src="wippics/0406/plsmaswd_4.png" alt="The gameplay of Plasma Sword" width="512" height="480" />
						<img src="wippics/0406/plsmaswd_5.png" alt="The gameplay of Plasma Sword" width="512" height="480" />
						<img src="wippics/0406/plsmaswd_6.png" alt="The gameplay of Plasma Sword" width="512" height="480" />
						<img src="wippics/0406/plsmaswd_7.png" alt="The gameplay of Plasma Sword" width="512" height="480" />
						<img src="wippics/0406/plsmaswd_8.png" alt="The gameplay of Plasma Sword" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0406/techromn_1.png" alt="Tech Romancer (c) 1998 Capcom" width="512" height="480" />
						<img src="wippics/0406/techromn_2.png" alt="The intro of Tech Romancer" width="512" height="480" />
						<img src="wippics/0406/techromn_3.png" alt="The intro of Tech Romancer" width="512" height="480" />
						<img src="wippics/0406/techromn_4.png" alt="The gameplay of Tech Romancer" width="512" height="480" />
						<img src="wippics/0406/techromn_5.png" alt="The gameplay of Tech Romancer" width="512" height="480" />
						<img src="wippics/0406/techromn_6.png" alt="The gameplay of Tech Romancer" width="512" height="480" />
						<img src="wippics/0406/techromn_7.png" alt="The gameplay of Tech Romancer" width="512" height="480" />
						<img src="wippics/0406/techromn_8.png" alt="The gameplay of Tech Romancer" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0406/tgmj_1.png" alt="Tetris The Grand Master (c) 1998 Arika" width="320" height="240" />
						<img src="wippics/0406/tgmj_2.png" alt="The gameplay of Tetris The Grand Master" width="320" height="240" />
						<img src="wippics/0406/tgmj_3.png" alt="The gameplay of Tetris The Grand Master" width="320" height="240" />
						<img src="wippics/0406/tgmj_4.png" alt="The gameplay of Tetris The Grand Master" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-03</h2>
					<p>
					Olivier Galibert fixed a save state crash that occurred in some games that use the TMS34010 CPU. Stefan Jokisch sent in a driver for Cannonball (Atari, prototype), but it's missing a graphics ROM, causing some graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0406/cball_1.png" alt="Cannonball (c) 1976 Atari" width="256" height="224" />
						<img src="wippics/0406/cball_2.png" alt="The gameplay of Cannonball" width="256" height="224" />
						<img src="wippics/0406/cball_3.png" alt="The gameplay of Cannonball" width="256" height="224" />
						<img src="wippics/0406/cball_4.png" alt="The gameplay of Cannonball" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-06-02</h2>
					<p>
					Chris Hardy added 3 more Greyhound Trivia games.
					</p>
				</div>

				<div class="rowlast">
					<h2>2004-06-01</h2>
					<p>
					Nathan Woods fixed a bug that prevented the assignment of controller buttons as activation keys. Phil Stroffolino reported some progress on the Namco System 22 games' 3D graphics.
					</p>
					<div class="wippix">
						<img src="wippics/0406/s22_acedrvrw.png" alt="Namco System 22: Ace Driver Victory Lap" width="640" height="480" />
						<img src="wippics/0406/s22_airco22b.png" alt="Namco System 22: Air Combat 22" width="640" height="480" />
						<img src="wippics/0406/s22_alpinerd.png" alt="Namco System 22: Alpine Racer" width="640" height="480" />
						<img src="wippics/0406/s22_cybrcomm.png" alt="Namco System 22: Cyber Commando" width="640" height="480" />
					</div>
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
