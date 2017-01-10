<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>May 2004 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2004-05-31</h2>
					<p>
					Tomasz Slanina added the EEPROM to Bonk's Adventure, but the game still isn't playable because of protection. smf sent in more cleanups to the ZN driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-30</h2>
					<p>
					Tomasz Slanina and Pierpaolo Prazzoli finished the Greyhound Trivia driver. Tomasz Slanina also added text layer and palettes to the Tecmo System driver. David Haywood fixed the banking in Heaven's Gate so that it works fully now.
					</p>
					<div class="wippix">
						<img src="wippics/0405/hvnsgate_1.png" alt="Heaven's Gate (c) 1996 Atlus" width="368" height="240" />
						<img src="wippics/0405/hvnsgate_2.png" alt="The intro of Heaven's Gate" width="368" height="240" />
						<img src="wippics/0405/hvnsgate_3.png" alt="The gameplay of Heaven's Gate" width="368" height="240" />
						<img src="wippics/0405/hvnsgate_4.png" alt="The gameplay of Heaven's Gate" width="368" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-29</h2>
					<p>
					Pierpaolo Prazzoli sent in a preliminary driver for Greyhound Trivia (1.02b). David Haywood added Miss Puzzle to the Gumbo driver, though one ROM is badly dumped.
					</p>
					<div class="wippix">
						<img src="wippics/0405/mspuzzle_1.png" alt="Miss Puzzle (c) 1994 Min Corporation" width="224" height="320" />
						<img src="wippics/0405/mspuzzle_2.png" alt="The intro of Miss Puzzle" width="224" height="320" />
						<img src="wippics/0405/mspuzzle_3.png" alt="The gameplay of Miss Puzzle" width="224" height="320" />
						<img src="wippics/0405/mspuzzle_4.png" alt="The gameplay of Miss Puzzle" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-28</h2>
					<p>
					Nathan Woods sent in a small patch that changes input_port_allocate to use auto_malloc, removing the need for input_port_free. Mariusz Wojcieszek sent in another update to the ST-V graphics emulation, adding VDP2 layer disabling (fixing glitches in Shanghai The Great Wall title screen), adding VDP1 half transparency (improves sprites' alpha blending in Shanghai ingame) and adding VDP1 gouraud shading (for normal sprites only - adds highlighting for selected tiles in Shanghai). Curt Coder fixed the game names and years in the PlayChoice-10 and Mega-Tech drivers to match the title screens. Justin Szczap submitted an addition of SRAM/NVRAM support to Spiders and Pierpaolo Prazzoli cleaned it up. Chris Hardy fixed a graphics bug in Warlords when it's set into upright mode.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-27</h2>
					<p>
					smf fixed Street Fighter EX 2 Plus so that it works now. R. Belmont sent in a preliminary driver for Namco Super System 23 which doesn't do anything yet. Pierpaolo Prazzoli fixed Vs. Gumshoe which is fully working now.
					</p>
					<div class="wippix">
						<img src="wippics/0405/sfex2p_1.png" alt="Street Fighter EX 2 Plus (c) 1999 Arika" width="512" height="480" />
						<img src="wippics/0405/sfex2p_2.png" alt="The intro of Street Fighter EX 2 Plus" width="512" height="480" />
						<img src="wippics/0405/sfex2p_3.png" alt="The gameplay of Street Fighter EX 2 Plus" width="512" height="480" />
						<img src="wippics/0405/sfex2p_4.png" alt="The gameplay of Street Fighter EX 2 Plus" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/vsgshoe_1.png" alt="VS. Gumshoe (c) 1986 Nintendo" width="256" height="240" />
						<img src="wippics/0405/vsgshoe_2.png" alt="The intro of VS. Gumshoe" width="256" height="240" />
						<img src="wippics/0405/vsgshoe_3.png" alt="The intro of VS. Gumshoe" width="256" height="240" />
						<img src="wippics/0405/vsgshoe_4.png" alt="The gameplay of VS. Gumshoe" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-26</h2>
					<p>
					smf cleaned up the PSX hardware emulation, fixed rendering problems in Magical Date and fixed the Sonic Wings Limited attract mode lockup.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-25</h2>
					<p>
					David Haywood decoded the graphics in Pinball Champ '95 but the driver doesn't do anything else yet. David Haywood also added Jumping Pop to the Tumble Pop driver but half of the ROMs are missing so it doesn't work. Nathan Woods sent in a bunch of i386 CPU core fixes including fixes to the interrupt handling and the CALL absolute instruction in 16 bit mode.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-24</h2>
					<p>
					David Haywood added a hack to the ZN driver that allows Fighter's Impact Ace to boot and it's also quite playable. Hau fixed a bunch of opcodes in the uPD7810 CPU core and added sound support to the Metro driver.
					</p>
					<div class="wippix">
						<img src="wippics/0405/ftimpcta_1.png" alt="Fighter's Impact Ace (c) 1997 Taito" width="512" height="480" />
						<img src="wippics/0405/ftimpcta_2.png" alt="The intro of Fighter's Impact Ace" width="512" height="480" />
						<img src="wippics/0405/ftimpcta_3.png" alt="The gameplay of Fighter's Impact Ace" width="512" height="480" />
						<img src="wippics/0405/ftimpcta_4.png" alt="The gameplay of Fighter's Impact Ace" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-23</h2>
					<p>
					BUT fixed up Victorious Nine, it now works completely. GreyRogue submitted an addition of a memory read break to the debugger. MASH submitted an addition of a new Dingo ROM set. R. Belmont added G-Darius and G-Darius Ver.2 to the ZN driver and Monster Maulers (EAA) as the parent set in the Monster Maulers driver. Pierpaolo Prazzoli added the German version of Anteater, called Ameisenbaer, to the Super Cobra driver.
					</p>
					<div class="wippix">
						<img src="wippics/0405/victnine_1.png" alt="Victorious Nine (c) 1984 Taito" width="256" height="224" />
						<img src="wippics/0405/victnine_2.png" alt="The intro of Victorious Nine" width="256" height="224" />
						<img src="wippics/0405/victnine_3.png" alt="The gameplay of Victorious Nine" width="256" height="224" />
						<img src="wippics/0405/victnine_4.png" alt="The gameplay of Victorious Nine" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/gdarius_1.png" alt="G-Darius (c) 1997 Taito" width="640" height="480" />
						<img src="wippics/0405/gdarius_2.png" alt="The gameplay of G-Darius" width="320" height="240" />
						<img src="wippics/0405/gdarius_3.png" alt="The gameplay of G-Darius" width="320" height="240" />
						<img src="wippics/0405/gdarius_4.png" alt="The gameplay of G-Darius" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-22</h2>
					<p>
					Stefan Jokisch sent in a patch for the 6532 RIOT chip emulation which fixes a couple of Atari 2600 games, thanks to "judge". David Haywood added Argus (Gottlieb proto) to the Gottlieb driver.
					</p>
					<div class="wippix">
						<img src="wippics/0405/argusg_1.png" alt="Argus (c) 1984 Gottlieb" width="256" height="240" />
						<img src="wippics/0405/argusg_2.png" alt="The intro of Argus" width="256" height="240" />
						<img src="wippics/0405/argusg_3.png" alt="The gameplay of Argus" width="256" height="240" />
						<img src="wippics/0405/argusg_4.png" alt="The gameplay of Argus" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-21</h2>
					<p>
					R. Belmont sent in a ZN driver update where Magical Date - sotsugyou kokuhaku daisakusen works, and he added Heaven's Gate which doesn't work yet.
					</p>
					<div class="wippix">
						<img src="wippics/0405/mgcldtex_1.png" alt="Magical Date - sotsugyou kokuhaku daisakusen (c) 1997 Taito" width="320" height="240" />
						<img src="wippics/0405/mgcldtex_2.png" alt="The intro of Magical Date - sotsugyou kokuhaku daisakusen" width="320" height="240" />
						<img src="wippics/0405/mgcldtex_3.png" alt="The gameplay of Magical Date - sotsugyou kokuhaku daisakusen" width="320" height="240" />
						<img src="wippics/0405/mgcldtex_4.png" alt="The gameplay of Magical Date - sotsugyou kokuhaku daisakusen" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-20</h2>
					<p>
					Hau sent in drivers for Quiz Do Re Mi Fa Grand Prix and Quiz Do Re Mi Fa Grand Prix 2 - Shinkyoku Nyuukadayo.
					</p>
					<div class="wippix">
						<img src="wippics/0405/qdrmfgp_1.png" alt="Quiz Do Re Mi Fa Grand Prix (c) 1994 Konami" width="384" height="224" />
						<img src="wippics/0405/qdrmfgp_2.png" alt="The intro of Quiz Do Re Mi Fa Grand Prix" width="384" height="224" />
						<img src="wippics/0405/qdrmfgp_3.png" alt="The intro of Quiz Do Re Mi Fa Grand Prix" width="384" height="224" />
						<img src="wippics/0405/qdrmfgp_4.png" alt="The gameplay of Quiz Do Re Mi Fa Grand Prix" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/qdrmfgp2_1.png" alt="Quiz Do Re Mi Fa Grand Prix 2 (c) 1995 Konami" width="384" height="224" />
						<img src="wippics/0405/qdrmfgp2_2.png" alt="The intro of Quiz Do Re Mi Fa Grand Prix 2" width="384" height="224" />
						<img src="wippics/0405/qdrmfgp2_3.png" alt="The intro of Quiz Do Re Mi Fa Grand Prix 2" width="384" height="224" />
						<img src="wippics/0405/qdrmfgp2_4.png" alt="The gameplay of Quiz Do Re Mi Fa Grand Prix 2" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-19</h2>
					<p>
					David Haywood changed Street Fighter EX Plus to use Street Fighter EX's protection key and it works fully now.
					</p>
					<div class="wippix">
						<img src="wippics/0405/sfexp_1.png" alt="Street Fighter EX Plus (c) 1997 Arika" width="512" height="480" />
						<img src="wippics/0405/sfexp_2.png" alt="The intro of Street Fighter EX Plus" width="512" height="480" />
						<img src="wippics/0405/sfexp_3.png" alt="The gameplay of Street Fighter EX Plus" width="512" height="480" />
						<img src="wippics/0405/sfexp_4.png" alt="The gameplay of Street Fighter EX Plus" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-18</h2>
					<p>
					Brian A. Troha added Golden Par Golf to the itech8 driver. Aaron Giles added a speedup to the R3000 version of Area 51. Mariusz Wojcieszek fixed a few bugs in the ST-V graphics emulation, for example the RGB sprites' bad colors, incorrect sprite clipping, added color offset for RGB sprites, fixed horizontal scrolling of bitmaps (fixes mausuke ingame background). Aaron Giles sent in a big update to the Seattle driver and MIPS cores, fixing a lot of bugs and as a result San Francisco Rush and Vapor TRX work fully. smf fixed graphics problems in Dead or Alive++ and Tondemo Crisis which now work fine too. David Haywood added Wiz Warz to the Gottlieb driver.
					</p>
					<div class="wippix">
						<img src="wippics/0405/gpgolf_1.png" alt="Golden Par Golf (c) 1992 Strata" width="256" height="240" />
						<img src="wippics/0405/gpgolf_2.png" alt="The intro of Golden Par Golf" width="256" height="240" />
						<img src="wippics/0405/gpgolf_3.png" alt="The intro of Golden Par Golf" width="256" height="240" />
						<img src="wippics/0405/gpgolf_4.png" alt="The gameplay of Golden Par Golf" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/sfrush_1.png" alt="San Francisco Rush (c) 1996 Atari" width="511" height="384" />
						<img src="wippics/0405/sfrush_2.png" alt="The intro of San Francisco Rush" width="511" height="384" />
						<img src="wippics/0405/sfrush_3.png" alt="The intro of San Francisco Rush" width="511" height="384" />
						<img src="wippics/0405/sfrush_4.png" alt="The intro of San Francisco Rush" width="511" height="384" />
						<img src="wippics/0405/sfrush_5.png" alt="The gameplay of San Francisco Rush" width="511" height="384" />
						<img src="wippics/0405/sfrush_6.png" alt="The gameplay of San Francisco Rush" width="511" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/vaportrx_1.png" alt="Vapor TRX (c) 1998 Atari" width="511" height="512" />
						<img src="wippics/0405/vaportrx_2.png" alt="The intro of Vapor TRX" width="511" height="512" />
						<img src="wippics/0405/vaportrx_3.png" alt="The intro of Vapor TRX" width="511" height="512" />
						<img src="wippics/0405/vaportrx_4.png" alt="The gameplay of Vapor TRX" width="511" height="512" />
						<img src="wippics/0405/vaportrx_5.png" alt="The gameplay of Vapor TRX" width="511" height="512" />
						<img src="wippics/0405/vaportrx_6.png" alt="The gameplay of Vapor TRX" width="511" height="512" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/doapp_1.png" alt="Dead or Alive++ (c) 1998 Tecmo" width="512" height="480" />
						<img src="wippics/0405/doapp_2.png" alt="The intro of Dead or Alive++" width="512" height="480" />
						<img src="wippics/0405/doapp_3.png" alt="The gameplay of Dead or Alive++" width="512" height="480" />
						<img src="wippics/0405/doapp_4.png" alt="The gameplay of Dead or Alive++" width="512" height="480" />
						<img src="wippics/0405/doapp_5.png" alt="The gameplay of Dead or Alive++" width="512" height="480" />
						<img src="wippics/0405/doapp_6.png" alt="The gameplay of Dead or Alive++" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/tondemo_1.png" alt="Tondemo Crisis (c) 1999 Polygon Magic" width="320" height="240" />
						<img src="wippics/0405/tondemo_2.png" alt="The intro of Tondemo Crisis" width="320" height="240" />
						<img src="wippics/0405/tondemo_3.png" alt="The gameplay of Tondemo Crisis" width="512" height="480" />
						<img src="wippics/0405/tondemo_4.png" alt="The gameplay of Tondemo Crisis" width="512" height="480" />
						<img src="wippics/0405/tondemo_5.png" alt="The gameplay of Tondemo Crisis" width="512" height="480" />
						<img src="wippics/0405/tondemo_6.png" alt="The gameplay of Tondemo Crisis" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/wizwarz_1.png" alt="Wiz Warz (c) 1984 Mylstar" width="256" height="240" />
						<img src="wippics/0405/wizwarz_2.png" alt="The intro of Wiz Warz" width="256" height="240" />
						<img src="wippics/0405/wizwarz_3.png" alt="The intro of Wiz Warz" width="256" height="240" />
						<img src="wippics/0405/wizwarz_4.png" alt="The gameplay of Wiz Warz" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-17</h2>
					<p>
					Tomasz Slanina enabled multiple reads in the 93C46 EEPROM emulation, as needed by Deroon DeroDero. smf sent in a patch to the debugger so that traces can be printed to the console. Pierpaolo Prazzoli added Gal's Panic 2 Quiz version to the Gal's Panic 2 driver, but it's not working. David Haywood added Video Vince to the Gottlieb driver, it works fine except for some sprite glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0405/vidvince_1.png" alt="Video Vince (c) 1984 Mylstar" width="256" height="240" />
						<img src="wippics/0405/vidvince_2.png" alt="The intro of Video Vince" width="256" height="240" />
						<img src="wippics/0405/vidvince_3.png" alt="The gameplay of Video Vince" width="256" height="240" />
						<img src="wippics/0405/vidvince_4.png" alt="The gameplay of Video Vince" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-16</h2>
					<p>
					R. Belmont added Battle Arena Toshinden 2 to the ZN driver and fixed the Magical Date - sotsugyou kokuhaku daisakusen ROM order but it still doesn't work. Nathan Woods added some warnings to the debugger and fixed bugs in the RETF and CALL16 opcodes in the i386 CPU core. Curt Coder cleaned up the Arkanoid driver and corrected Turbo Out Run's year. Stefan Jokisch sent in a minor update to the Nintendo 8080 games, adding a few missing features to Helifire and correcting the starfield speed.
					</p>
					<div class="wippix">
						<img src="wippics/0405/ts2_1.png" alt="Battle Arena Toshinden 2 (c) 1995 Takara" width="512" height="480" />
						<img src="wippics/0405/ts2_2.png" alt="The intro of Battle Arena Toshinden 2" width="512" height="480" />
						<img src="wippics/0405/ts2_3.png" alt="The gameplay of Battle Arena Toshinden 2" width="512" height="480" />
						<img src="wippics/0405/ts2_4.png" alt="The gameplay of Battle Arena Toshinden 2" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-15</h2>
					<p>
					Paul Priest and R. Belmont added FX1a and KN banking to the ZN driver and fixed Psychic Force and Sonic Wings Limited so that they are now playable.
					</p>
					<div class="wippix">
						<img src="wippics/0405/psyforce_1.png" alt="Psychic Force (c) 1995 Taito" width="320" height="240" />
						<img src="wippics/0405/psyforce_2.png" alt="The intro of Psychic Force" width="320" height="240" />
						<img src="wippics/0405/psyforce_3.png" alt="The gameplay of Psychic Force" width="320" height="240" />
						<img src="wippics/0405/psyforce_4.png" alt="The gameplay of Psychic Force" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/sncwgltd_1.png" alt="Sonic Wings Limited (c) 1996 Video System Co" width="240" height="320" />
						<img src="wippics/0405/sncwgltd_2.png" alt="The intro of Sonic Wings Limited" width="240" height="320" />
						<img src="wippics/0405/sncwgltd_3.png" alt="The gameplay of Sonic Wings Limited" width="240" height="320" />
						<img src="wippics/0405/sncwgltd_4.png" alt="The gameplay of Sonic Wings Limited" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-14</h2>
					<p>
					Pierpaolo Prazzoli fixed a few glitches in the One &amp; Two title screen and fixed the clock speeds and visible area in Goal! '92.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-13</h2>
					<p>
					Brian A. Troha added Pachinko Gindama Shoubu DX to the Real Break driver but it doesn't work yet. Hau fixed the screen flip in the Tecmo16 driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-12</h2>
					<p>
					Hau fixed the sprite priorities in Hyper Duel. David Haywood added the Irem version of Head On to the Sky Chuter (Irem M10/M15 hardware) driver. David Haywood also added the non-nude set of Target Ball to the Paradise driver and corrected the clock speeds in it. R. Belmont added the EAE version of Konami's Open Golf Championship.
					</p>
					<div class="wippix">
						<img src="wippics/0405/headoni_1.png" alt="Head On (c) 1979? Irem" width="224" height="256" />
						<img src="wippics/0405/headoni_2.png" alt="The intro of Head On" width="224" height="256" />
						<img src="wippics/0405/headoni_3.png" alt="The gameplay of Head On" width="224" height="256" />
						<img src="wippics/0405/headoni_4.png" alt="The gameplay of Head On" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-11</h2>
					<p>
					Pierpaolo Prazzoli and David Haywood added Fire Hawk to the Afega driver, but it has the same protection problems as the other Afega games. Pierpaolo Prazzoli also fixed the sound and DIP switches in 1945k III.
					</p>
					<div class="wippix">
						<img src="wippics/0405/firehawk_1.png" alt="Fire Hawk (c) 2001 ESD" width="240" height="224" />
						<img src="wippics/0405/firehawk_2.png" alt="The intro of Fire Hawk" width="240" height="224" />
						<img src="wippics/0405/firehawk_3.png" alt="The gameplay of Fire Hawk" width="240" height="224" />
						<img src="wippics/0405/firehawk_4.png" alt="The gameplay of Fire Hawk" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-10</h2>
					<p>
					Brad Oliver sent in a fix for the Neo Geo blitter to support blitting to 32-bit target bitmaps. Mariusz Wojcieszek sent in another update to the ST-V graphics emulation, adding sprite priorities (corrects Shanghai The Great Wall in-game and Columns '97 title screen), improving sprites' alpha blending (Ejihon and Shienryu intro), adding framebuffer interlace (Elan Doree character selection screen), adding color offset for sprites and bitmaps and adding vertical scrolling for bitmaps, making Shanghai The Great Wall fully playable. Jan Tleskac submitted fixes to the input ports and DIP switches in TYLZ. smf fixed the SIO clock to be active low in the PSX hardware. Phil Stroffolino corrected the polygon layer scaling in Time Crisis. J&uuml;rgen Buchm&uuml;ller fixed the RETN/RETI cycle counts in the Z80 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0405/shanhigw_1.png" alt="Shanghai The Great Wall (c) 1995 Sunsoft / Activision" width="320" height="240" />
						<img src="wippics/0405/shanhigw_2.png" alt="The intro of Shanghai The Great Wall" width="320" height="240" />
						<img src="wippics/0405/shanhigw_3.png" alt="The gameplay of Shanghai The Great Wall" width="320" height="240" />
						<img src="wippics/0405/shanhigw_4.png" alt="The gameplay of Shanghai The Great Wall" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-09</h2>
					<p>
					Nathan Woods added memory handler install calls that can do mirroring like the AM_MIRROR macro.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-08</h2>
					<p>
					smf made the R3000 version of Area 51 its parent set and fixed PAL support in the PSX hardware emulation though it's not used in MAME.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-07</h2>
					<p>
					smf fixed the banking in Bloody Roar 2 so that it works fully now. Rene Single fixed the manufacturer fields of a few games.
					</p>
					<div class="wippix">
						<img src="wippics/0405/bldyror2_1.png" alt="Bloody Roar 2 (c) 1998 Eighting/Raizing/Hudson" width="512" height="480" />
						<img src="wippics/0405/bldyror2_2.png" alt="The intro of Bloody Roar 2" width="512" height="480" />
						<img src="wippics/0405/bldyror2_3.png" alt="The gameplay of Bloody Roar 2" width="512" height="480" />
						<img src="wippics/0405/bldyror2_4.png" alt="The gameplay of Bloody Roar 2" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-06</h2>
					<p>
					R. Belmont improved the ROZ graphics layer in Racin' Force and Soccer Superstars so that the graphics look fine in the tilemap viewer, but in-game graphics are still not properly emulated. Pierpaolo Prazzoli finished off the One &amp; Two driver. Phil Stroffolino got Time Crisis working in the Namco System 22 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0405/onetwo_5.png" alt="One &amp; Two (c) 1997 Barko" width="512" height="512" />
						<img src="wippics/0405/onetwo_6.png" alt="The intro of One &amp; Two" width="512" height="512" />
						<img src="wippics/0405/onetwo_7.png" alt="The gameplay of One &amp; Two" width="512" height="512" />
						<img src="wippics/0405/onetwo_8.png" alt="The gameplay of One &amp; Two" width="512" height="512" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/timecrsa_1.png" alt="Time Crisis (c) 1995 Namco" width="640" height="480" />
						<img src="wippics/0405/timecrsa_2.png" alt="The intro of Time Crisis" width="640" height="480" />
						<img src="wippics/0405/timecrsa_3.png" alt="The intro of Time Crisis" width="640" height="480" />
						<img src="wippics/0405/timecrsa_4.png" alt="The intro of Time Crisis" width="640" height="480" />
						<img src="wippics/0405/timecrsa_5.png" alt="The gameplay of Time Crisis" width="640" height="480" />
						<img src="wippics/0405/timecrsa_6.png" alt="The gameplay of Time Crisis" width="640" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-05</h2>
					<p>
					David Haywood added TYLZ (prototype) to the Gottlieb driver, as supplied by Frans van Egmond. El Condor submitted a change to the sample names in the Pacific Novelty games so that they aren't all the same. Brian A. Troha fixed the DIP switch settings in 1945k III and Meta Fox.
					</p>
					<div class="wippix">
						<img src="wippics/0405/tylz_1.png" alt="TYLZ (c) 1984 Mylstar" width="256" height="240" />
						<img src="wippics/0405/tylz_2.png" alt="The gameplay of TYLZ" width="256" height="240" />
						<img src="wippics/0405/tylz_3.png" alt="The gameplay of TYLZ" width="256" height="240" />
						<img src="wippics/0405/tylz_4.png" alt="The gameplay of TYLZ" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-04</h2>
					<p>
					Nathan Woods fixed the MEM_DUMP debug code in the memory system. Curt Coder added the MC68008 CPU core from MESS. David Haywood sent in a driver for 1945k III and a preliminary driver for Fire Hawk. smf sent in another few fixes to the PSX SIO support, to get controllers working in MESS.
					</p>
					<div class="wippix">
						<img src="wippics/0405/1945kiii_1.png" alt="1945k III (c) 2000 Oriental" width="224" height="320" />
						<img src="wippics/0405/1945kiii_2.png" alt="The intro of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_3.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_4.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_5.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_6.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_7.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_8.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_9.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_10.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_11.png" alt="The gameplay of 1945k III" width="224" height="320" />
						<img src="wippics/0405/1945kiii_12.png" alt="The gameplay of 1945k III" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2004-05-03</h2>
					<p>
					R. Belmont fixed a crash in the RAM/ROM test in Time Crisis. Nathan Woods sent in another bunch of i386 CPU core improvements, implementing the XLAT opcode, A20 lines, state save support and fixed the DAA opcode. Phil Stroffolino sent in some TMS32025 fixes.
					</p>
				</div>

				<div class="row">
					<h2>2004-05-02</h2>
					<p>
					Pierpaolo Prazzoli fixed the colors in 4 En Raya. Bryan McPhail sent in a small patch to fix compiling on VC. David Graves submitted a very preliminary Racing Beat driver.
					</p>
					<div class="wippix">
						<img src="wippics/0405/4enraya_1.png" alt="4 En Raya (c) 1990 IDSA" width="256" height="224" />
						<img src="wippics/0405/4enraya_2.png" alt="The intro of 4 En Raya" width="256" height="224" />
						<img src="wippics/0405/4enraya_3.png" alt="The gameplay of 4 En Raya" width="256" height="224" />
						<img src="wippics/0405/4enraya_4.png" alt="The gameplay of 4 En Raya" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/racingb_1.png" alt="Racing Beat (c) 1991 Taito" width="320" height="240" />
						<img src="wippics/0405/racingb_2.png" alt="The intro of Racing Beat" width="320" height="240" />
						<img src="wippics/0405/racingb_3.png" alt="The gameplay of Racing Beat" width="320" height="240" />
						<img src="wippics/0405/racingb_4.png" alt="The gameplay of Racing Beat" width="320" height="240" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2004-05-01</h2>
					<p>
					David Haywood added Dyna Gears to the SSV driver and Agress to the Block Out driver. Pierpaolo Prazzoli added cocktail mode to Flower and converted the text layer to tilemaps. Olivier Galibert added a bunch of floating point opcodes to the i960 CPU core. ClawGrip submitted a small change to Inca's and Maya's CPU clock frequency.
					</p>
					<div class="wippix">
						<img src="wippics/0405/dynagear_1.png" alt="Dyna Gears (c) 1993 Sammy" width="320" height="240" />
						<img src="wippics/0405/dynagear_2.png" alt="The intro of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_3.png" alt="The intro of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_4.png" alt="The intro of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_5.png" alt="The gameplay of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_6.png" alt="The gameplay of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_7.png" alt="The gameplay of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_8.png" alt="The gameplay of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_9.png" alt="The gameplay of Dyna Gears" width="320" height="240" />
						<img src="wippics/0405/dynagear_10.png" alt="The gameplay of Dyna Gears" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0405/agress_1.png" alt="Agress (c) 1991 Palco" width="320" height="240" />
						<img src="wippics/0405/agress_2.png" alt="The intro of Agress" width="320" height="240" />
						<img src="wippics/0405/agress_3.png" alt="The gameplay of Agress" width="320" height="240" />
						<img src="wippics/0405/agress_4.png" alt="The gameplay of Agress" width="320" height="240" />
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
