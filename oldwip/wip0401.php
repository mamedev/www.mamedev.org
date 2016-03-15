<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>January 2004 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2004-01-31</h2>
					<p>
					Luca Elia and yong added Mahjong Electron Base to the Dynax driver. B. S. Ruggeri submitted a DIP switch update for Scramble Spirits. Kevin Eshbach submitted an addition of a new Atari Tetris bootleg. R. Belmont added a new USA version of Martial Champion to the Mystic Warriors driver. Aaron Giles fixed the collision detection in Mortal Kombat that had become broken with the memory system changes.
					</p>
					<div class="wippix">
						<img src="wippics/0401/mjelct3_1.png" alt="Mahjong Electron Base (c) 1990 Dynax" width="512" height="480" />
						<img src="wippics/0401/mjelct3_2.png" alt="The gameplay of Mahjong Electron Base" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-30</h2>
					<p>
					smf fixed a few more problems in the PSX driver uncovered by the memory system changes. Aaron Giles cleaned up the Hard Drivin' driver and fixed Steel Talons and Hard Drivin's Airborne after the recent changes, and he cleaned up another bunch of Atari drivers. Curt Coder submitted a fix for flipscreen and flashlight effect in Pac-Land. Malice submitted a fix for the DIP switches in Scramble Spirits. Roger Sanders emulated the protection in Sonic Arcade in the Sega System 32 driver. Nathan Woods sent in minor timing enhancements to the 6309 CPU core and the K051649 sound core. Brian A. Troha added an older Austria / Hong Kong version of Battle Garegga to the Toaplan2 driver. Olivier Galibert fixed a slight compiling problem in the Vendetta driver.
					</p>
					<div class="wippix">
						<img src="wippics/0401/sonic_1.png" alt="Sonic Arcade (c) 1992 Sega" width="320" height="224" />
						<img src="wippics/0401/sonic_2.png" alt="The intro of Sonic Arcade" width="320" height="224" />
						<img src="wippics/0401/sonic_3.png" alt="The intro of Sonic Arcade" width="320" height="224" />
						<img src="wippics/0401/sonic_4.png" alt="The gameplay of Sonic Arcade" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-29</h2>
					<p>
					Aaron Giles fixed a bug in the memory system involving shared RAM with a single memory map. Pierpaolo Prazzoli sent in a very preliminary Double Cheese driver, it only decodes the graphics.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-28</h2>
					<p>
					Nathan Woods fixed a bug when running multiple sessions. R. Belmont updated the ST-V sound update to 0.78u8. Aaron Giles fixed Star Wars and the PSX driver, both broken by the memory system. smf fixed compiling the Dynax driver in VCMAME and memory.c in DJGPP. Stefan Jokisch fixed Dream Shopper. David Haywood added Pairs Love to the Seta driver.
					</p>
					<div class="wippix">
						<img src="wippics/0401/pairlove_1.png" alt="Pairs Love (c) 1991 Athena" width="240" height="384" />
						<img src="wippics/0401/pairlove_2.png" alt="The intro of Pairs Love" width="240" height="384" />
						<img src="wippics/0401/pairlove_3.png" alt="The intro of Pairs Love" width="240" height="384" />
						<img src="wippics/0401/pairlove_4.png" alt="The gameplay of Pairs Love" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-27</h2>
					<p>
					Brian A. Troha added Plasma Sword (the USA version of Star Gladiator 2) to the ZN driver, but it doesn't work. smf fixed a compiling problem in VCMAME. David Haywood emulated the protection in More More Plus so it's now fully working. Aaron Giles fixed a bunch of drivers that were broken by the memory system changes. Pierpaolo Prazzoli added a clone of Liberation called Dual Assault. Stefan Jokisch fixed the screenshot function from crashing in some vector games.
					</p>
					<div class="wippix">
						<img src="wippics/0401/moremorp_1.png" alt="More More Plus (c) 1999 Semicom" width="256" height="224" />
						<img src="wippics/0401/moremorp_2.png" alt="The intro of More More Plus" width="256" height="224" />
						<img src="wippics/0401/moremorp_3.png" alt="The gameplay of More More Plus" width="256" height="224" />
						<img src="wippics/0401/moremorp_4.png" alt="The gameplay of More More Plus" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-26</h2>
					<p>
					Aaron Giles fixed a bug in the memory system that allowed programs to write to ROM, and he fixed Cavelon and Gottlieb games. Pierpaolo Prazzoli fixed the sprite colors in Winning Spike. Nicola Salmoria fixed Leprechaun that was broken by the 6522 VIA update. Stefan Jokisch added mirrors to the memory map in Pool Shark and fixed the watchdog reset in it.
					</p>
					<div class="wippix">
						<img src="wippics/0401/winspike_1.png" alt="Winning Spike (c) 1997 Konami" width="384" height="224" />
						<img src="wippics/0401/winspike_2.png" alt="The intro of Winning Spike" width="384" height="224" />
						<img src="wippics/0401/winspike_3.png" alt="The gameplay of Winning Spike" width="384" height="224" />
						<img src="wippics/0401/winspike_4.png" alt="The gameplay of Winning Spike" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-25</h2>
					<p>
					Aaron Giles fixed Senjyo, which was broken by the memory system changes. Stefan Jokisch fixed Choplifter. David Haywood sent in a preliminary driver for Varia Metal, it works somewhat but graphics are not emulated well yet. Pierpaolo Prazzoli added sound and fixed some DIP switch settings in Whizz, and he added Vs. Tennis (Japan) to the VSNES driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-24</h2>
					<p>
					R. Belmont added Winning Spike to the Konami GX driver, but it has wrong sprite colors and some other graphics problems. Stefan Jokisch added an alternate version of Changes to the Marine Boy driver. David Haywood fixed the Scramble Spirits disk image and all the corrupt graphics seem to be gone. Aaron Giles fixed the CVS driver and wc90b that were broken because of the memory system changes. Brian A. Troha added Super Hang On Limited Edition and another version of Super Hang On to the Outrun driver, but neither of them work. David Haywood also fixed Whizz so that it works now.
					</p>
					<div class="wippix">
						<img src="wippics/0401/sspirits_1.png" alt="Scramble Spirits (c) 1988 Sega" width="384" height="496" />
						<img src="wippics/0401/sspirits_2.png" alt="The intro of Scramble Spirits" width="384" height="496" />
						<img src="wippics/0401/sspirits_3.png" alt="The intro of Scramble Spirits" width="384" height="496" />
						<img src="wippics/0401/sspirits_4.png" alt="The gameplay of Scramble Spirits" width="384" height="496" />
					</div>
					<div class="wippix">
						<img src="wippics/0401/whizz_1.png" alt="Whizz (c) 1989 Philko" width="384" height="224" />
						<img src="wippics/0401/whizz_2.png" alt="The intro of Whizz" width="384" height="224" />
						<img src="wippics/0401/whizz_3.png" alt="The gameplay of Whizz" width="384" height="224" />
						<img src="wippics/0401/whizz_4.png" alt="The gameplay of Whizz" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-23</h2>
					<p>
					Olivier Galibert fixed the memory system to remove useless memory allocations, and he fixed compile warnings in various files. Aaron Giles cleaned up the Midway Y/Z/X/T/W/V-unit drivers, fixed small bugs in the memory system, fixed Pushman and cleaned up a bunch of Atari drivers. Pierpaolo Prazzoli added Triv Four and Super Triv III to the Status Trivia driver.
					</p>
					<div class="wippix">
						<img src="wippics/0401/statriv4_1.png" alt="Triv Four (c) 1985 Status Games" width="272" height="256" />
						<img src="wippics/0401/statriv4_2.png" alt="The gameplay of Triv Four" width="272" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0401/supertr3_1.png" alt="Super Triv III (c) 1988 Status Games" width="272" height="256" />
						<img src="wippics/0401/supertr3_2.png" alt="The gameplay of Super Triv III" width="272" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-22</h2>
					<p>
					Aaron Giles fixed problems in Red Baron, Asylum and Tiger Heli, caused by the memory system changes. Stefan Jokisch fixed the 8080bw driver. Olivier Galibert did some minor fixes on the Sega System 24 driver and Scramble Spirits started working, although with graphics problems because the disk image is corrupt. Brian A. Troha added the World version of Fantasy to the Rock-ola driver. Pierpaolo Prazzoli added the color PROM to Fantazia.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-21</h2>
					<p>
					Olivier Galibert merged the ST-V driver memory maps and Aaron Giles fixed a problem in it. BUT fixed the ASM 68k core to compile with 0.78u6. Aaron Giles also fixed problems in Sega System 1 and CVS drivers caused by the memory system changes. Brian A. Troha added Hang On Limited Edition to the Outrun driver, but it doesn't work.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-20</h2>
					<p>
					R. Belmont fixed many things in the ST-V sound system and as a result many more games have working sound in that driver. Chris Hardy added an Atari version of Time Pilot. Aaron Giles sent in another big memory system change, adding support for merged read/write memory maps and mirroring.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-19</h2>
					<p>
					R. Belmont fixed Asura Blade sound clipping. SUZ fixed various graphics glitches in the Seta driver. Olivier Galibert fixed some problems in the SH2 CPU core and added 64 bit datatype support to the save state functions.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-18</h2>
					<p>
					Brian A. Troha fixed DIP switch settings in Borderline and Indoor Soccer. Pierpaolo Prazzoli added unused ROMs to Ali Baba and Strafe Bomb (a Scramble bootleg) to the Scramble driver. Stefan Jokisch fixed DIPs in both Seicross and Radical Radial. David Haywood added Outrun (Deluxe version) to the Outrun driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-17</h2>
					<p>
					Derrick Renaud added discrete sound emulation to the Pool Shark driver. Pierpaolo Prazzoli added Dogou Souken (joystick bootleg) to the SNK driver. Stefan Jokisch fixed Green Beret from crashing. R. Belmont fixed MX5000 / Flak Attack.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-16</h2>
					<p>
					Mariusz Wojcieszek improved the ST-V driver sprite color calculation, fixing problems with Shienryu sprite colors and Winter Heat character selection screen. Luca Elia fixed the Hard Head 2 driver. smf added support for loading a save state from the command line, and fixed keyboard LED change on USB keyboards. Pierpaolo Prazzoli fixed the graphics in the later levels in Space Thunderbird and he fixed the CVS and zac2650 games that were broken because of the memory system changes.
					</p>
					<div class="wippix">
						<img src="wippics/0401/hardhea2_1.png" alt="Hard Head 2 (c) 1991 SunA" width="256" height="224" />
						<img src="wippics/0401/hardhea2_2.png" alt="The intro of Hard Head 2" width="256" height="224" />
						<img src="wippics/0401/hardhea2_3.png" alt="The gameplay of Hard Head 2" width="256" height="224" />
						<img src="wippics/0401/hardhea2_4.png" alt="The gameplay of Hard Head 2" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-15</h2>
					<p>
					Pierpaolo Prazzoli added another version of Xevious. R. Belmont fixed the discrete sound system from crashing with -nosound.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-14</h2>
					<p>
					Olivier Galibert changed the CHD file name handling to be more consistent, and he fixed a typo in the memory system error logging. Phil Stroffolino sent in a Namco System 21 driver update, improving CyberSled a lot and fixing some graphics problems. Pierpaolo Prazzoli fixed a crash in the VSNES driver caused by the memory system changes. Nicola Salmoria rewrote the Gameplan driver using already existing 6522 VIA and 6532 RIOT chip emulations, fixing some graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0401/cybsled_1.png" alt="Cyber Sled (c) 1993 Namco" width="496" height="480" />
						<img src="wippics/0401/cybsled_2.png" alt="The gameplay of Cyber Sled" width="496" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-13</h2>
					<p>
					Nicola Salmoria sent in a big Namco drivers update, converting them to tilemaps and merging a lot of the drivers, and documenting the easter eggs. Mariusz Wojcieszek added preliminary support for alpha blending in the ST-V driver. Aaron Giles sent in phase 2 of the memory system update, adding proper support for Harvard architecture CPUs (separate program and data memory), improving support for CPUs with an implicit address shift (TMS34010 and TMS32031), improving the memory allocation scheme and other things.
					</p>
					<div class="wippix">
						<img src="wippics/0401/shienryu_alpha_1.png" alt="Shienryu alpha blending" width="240" height="320" />
						<img src="wippics/0401/shienryu_alpha_2.png" alt="Shienryu alpha blending" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0401/ejihon_alpha.png" alt="Ejihon alpha blending" width="704" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-12</h2>
					<p>
					Pierpaolo Prazzoli fixed the sprites in Birdie Try, and he fixed a DIP switch setting in Cross Pang. Derrick Renaud re-submitted the Sky Diver discrete sound for 0.78u3. Quench added sound to Miss Bubble 2 and the Power Instinct alternate bootleg. Carlos Santillan submitted a few speedups to the SH-2 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-11</h2>
					<p>
					Pierpaolo Prazzoli added Space Thunderbird (an alternate version of Moon Cresta) to the Galaxian driver, fixed a sound bug in Cross Pang and he fixed the background data in Competition Golf.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-10</h2>
					<p>
					Brian A. Troha updated the itech8 driver change to 0.78u2. Aaron Giles sent in fixes for Namco System 1, 2, 21, Moon Patrol and ASM 68k CPU core that broke with his earlier changes. Stefan Jokisch updated the Yosaku to Donbei driver change to 0.78u2.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-09</h2>
					<p>
					Luca Elia sent in an update to the Dynax driver, supporting two blitter, fixing the title screen in mjdialq2 and mjangels, and adding Jong Tou Ki. Pierpaolo Prazzoli updated the Competition Golf driver to 0.78u2.
					</p>
					<div class="wippix">
						<img src="wippics/0401/jantouki_1.png" alt="Jong Tou Ki (c) 1990 Dynax" width="512" height="480" />
						<img src="wippics/0401/jantouki_2.png" alt="The gameplay of Jong Tou Ki" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-08</h2>
					<p>
					Aaron Giles sent in the first batch of massive memory system overhaul, adding support for separate address spaces (program, data, I/O) and unifying read/write handlers of different address bus widths. smf sent in a small fix for compiling cpuintrf.c in DJGPP.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-07</h2>
					<p>
					David Haywood added Miss Mister World 96 Nude to the Gal's Panic driver.
					</p>
					<div class="wippix">
						<img src="wippics/0401/missmw96_1.png" alt="Miss Mister World 96 Nude (c) 1996 Comad" width="256" height="224" />
						<img src="wippics/0401/missmw96_2.png" alt="The intro of Miss Mister World 96 Nude" width="256" height="224" />
						<img src="wippics/0401/missmw96_3.png" alt="The gameplay of Miss Mister World 96 Nude" width="256" height="224" />
						<img src="wippics/0401/missmw96_4.png" alt="The gameplay of Miss Mister World 96 Nude" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-06</h2>
					<p>
					Pierpaolo Prazzoli finished the Competition Golf driver. Brian A. Troha added Golden Tee Golf (trackball version) to the itech8 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0401/compgolf_1.png" alt="Competition Golf (c) 1986 Data East" width="248" height="240" />
						<img src="wippics/0401/compgolf_2.png" alt="The gameplay of Competition Golf" width="248" height="240" />
						<img src="wippics/0401/compgolf_3.png" alt="The gameplay of Competition Golf" width="248" height="240" />
						<img src="wippics/0401/compgolf_4.png" alt="The gameplay of Competition Golf" width="248" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-01-05</h2>
					<p>
					Derrick Renaud added discrete sound emulation to the Sky Diver driver. Pierpaolo Prazzoli fixed some typos in the MS Gundam EX Revue driver, and he fixed the DIP switch settings in Hatch Catch and Borderline. Curt Coder submitted fixes to the Psychic 5 and Moon Patrol drivers.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-04</h2>
					<p>
					R. Belmont added full sound and music emulation to Asura Blade. Chris Hardy added sound support to Space Firebird with samples and fixed the background color changes. Stefan Jokisch added another ROM set of Yosaku to Donbei and fixed a small inputs bug in it. Tomasz Slanina cleaned up the Super Speed Race Jr driver and fixed the orientation in it.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-03</h2>
					<p>
					Pierpaolo Prazzoli fixed Main Event (SNK) so that it starts again. Guru added Time Crisis Ver.B to the Namco Super System 22 driver, but it doesn't work. Brian A. Troha added some information to the Cross Pang driver and fixed one ROM in Moon Patrol. Tomasz Slanina added language selection switch and EEPROM emulation to the MS Gundam EX Revue driver. Derrick Renaud added discrete sound emulation to Video Pinball.
					</p>
				</div>

				<div class="row">
					<h2>2004-01-02</h2>
					<p>
					Pierpaolo Prazzoli fixed a lot of graphics glitches in MS Gundam EX Revue. Quench fixed the sounds in Bakuretsu Breaker. Tomasz Slanina fixed a few more things in MS Gundam EX Revue.
					</p>
				</div>

				<div class="rowlast">
					<h2>2004-01-01</h2>
					<p>
					Stefan Jokisch added PROMs and converted Moon Patrol to the tilemap system, and added PROMs to Rally X. Mariusz Wojcieszek fixed the sprite color calculation in Winter Heat and Virtua Fighter Kids, and he fixed Princess Clara Daisakusen so that it is playable now.
					</p>
					<div class="wippix">
						<img src="wippics/0401/winterht_1.png" alt="Colors in Winter Heat" width="704" height="480" />
						<img src="wippics/0401/winterht_2.png" alt="Colors in Winter Heat" width="704" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0401/vfkids_1.png" alt="Colors in Virtua Fighter Kids" width="704" height="448" />
						<img src="wippics/0401/vfkids_2.png" alt="Colors in Virtua Fighter Kids" width="704" height="448" />
					</div>
					<div class="wippix">
						<img src="wippics/0401/prikura_1.png" alt="Princess Clara Daisakusen (c) 1996 Atlus" width="320" height="224" />
						<img src="wippics/0401/prikura_2.png" alt="The intro of Princess Clara Daisakusen" width="320" height="224" />
						<img src="wippics/0401/prikura_3.png" alt="The intro of Princess Clara Daisakusen" width="320" height="224" />
						<img src="wippics/0401/prikura_4.png" alt="The gameplay of Princess Clara Daisakusen" width="320" height="224" />
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
