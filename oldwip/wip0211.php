<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>November 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-11-30</h2>
					<p>
					Tomasz Slanina added Kung-Fu Taikun to the Wiz driver, and Stephane Humbert fixed the DIP switches and inputs in it. Aaron Giles fixed a crash that sometimes occurred when creating a new hard disk difference file.
					</p>
					<div class="wippix">
						<img src="wippics/0211/kung_1.png" alt="Kung-Fu Taikun (c) 1984 Seibu" width="256" height="224" />
						<img src="wippics/0211/kung_2.png" alt="The intro of Kung-Fu Taikun" width="256" height="224" />
						<img src="wippics/0211/kung_3.png" alt="The gameplay of Kung-Fu Taikun" width="256" height="224" />
						<img src="wippics/0211/kung_4.png" alt="The gameplay of Kung-Fu Taikun" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-29</h2>
					<p>
					Zsolt Vasvari cleaned up the tree and water generation code in No Man's Land but it's still a little incorrect. smf fixed some memory leaks in the DOS version. David Haywood fixed the controls in Alien<sup>3</sup> in the Sega System 32 driver, and it's completely playable now although missing some background graphics.
					</p>
					<div class="wippix">
						<img src="wippics/0211/alie_1.png" alt="Alien 3 (c) 1993 Sega" width="320" height="224" />
						<img src="wippics/0211/alie_2.png" alt="The gameplay of Alien 3" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-28</h2>
					<p>
					Paul Priest added the correct graphics ROMs to Dragon Blaze (but it's still missing sound), and he fixed various things in Daraku Tenshi which is now fully playable too. Zsolt Vasvari added the grid graphics emulation to Devil Zone. David Haywood sent in another update to the Sega System 32 driver with protection fixes for Burning Rivals, Arabian Fight and Golden Axe 2 from R. Belmont, improved inputs from Stephane Humbert and various improvements to the graphics emulation, making Super Visual Football, Burning Rivals, Rad Mobile, Rad Rally and F1 Exhaust Note playable. smf added some extra error checks to the file I/O functions in the DOS version.
					</p>
					<div class="wippix">
						<img src="wippics/0211/drag_1.png" alt="Dragon Blaze (c) 2000 Psikyo" width="224" height="320" />
						<img src="wippics/0211/drag_2.png" alt="The intro of Dragon Blaze" width="224" height="320" />
						<img src="wippics/0211/drag_3.png" alt="The gameplay of Dragon Blaze" width="224" height="320" />
						<img src="wippics/0211/drag_4.png" alt="The gameplay of Dragon Blaze" width="224" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0211/svf_1.png" alt="Super Visual Football (c) 1994 Sega" width="320" height="224" />
						<img src="wippics/0211/svf_2.png" alt="The gameplay of Super Visual Football" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0211/briv_1.png" alt="Burning Rival (c) 1992 Sega" width="416" height="224" />
						<img src="wippics/0211/briv_2.png" alt="The gameplay of Burning Rival" width="416" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0211/radm_1.png" alt="Rad Mobile (c) 1990 Sega" width="320" height="224" />
						<img src="wippics/0211/radm_2.png" alt="The gameplay of Rad Mobile" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0211/radr_1.png" alt="Rad Rally (c) 1991 Sega" width="320" height="224" />
						<img src="wippics/0211/radr_2.png" alt="The gameplay of Rad Rally" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0211/f1en_1.png" alt="F1 Exhaust Note (c) 199? Sega" width="320" height="224" />
						<img src="wippics/0211/f1en_2.png" alt="The gameplay of F1 Exhaust Note" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-27</h2>
					<p>
					Nicola Salmoria further improved Tugboat. David Haywood sent in an updated Sega System 32 driver with improved palette handling thanks to R. Belmont. Aaron Giles fixed a bug in scanline timing that occurred if a game changed the visible area dynamically.
					</p>
					<div class="wippix">
						<img src="wippics/0211/tugb_3.png" alt="Tugboat (c) 1982 ETM" width="224" height="240" />
						<img src="wippics/0211/tugb_4.png" alt="The intro of Tugboat" width="224" height="240" />
						<img src="wippics/0211/tugb_5.png" alt="The gameplay of Tugboat" width="224" height="240" />
						<img src="wippics/0211/tugb_6.png" alt="The gameplay of Tugboat" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-26</h2>
					<p>
					Stephane Humbert fixed the DIP switches and inputs in Minkey Monkey bootleg on Super Cobra hardware. Phil Stroffolino sent in an updated Namco System 2 driver with improvements to Final Lap 2 and to Golly Ghost, which is now playable but still has some problems with the artwork emulation. Zsolt Vasvari added starfield emulation to Cosmic Alien, fixed tree and water placement in No Man's Land, added sprite y-flip to all games and cleaned up a bunch of other small things. David Haywood re-merged some Space Panic clone ROM sets with the aforementioned changes.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-25</h2>
					<p>
					Aaron Giles improved file read performance in the Windows version. Nicola Salmoria improved the Tugboat driver, but there are still many problems. SUZ fixed the Galaga init sound, a graphics bug in Demon's World and added another bootleg of Xevious.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-24</h2>
					<p>
					David Haywood fixed a small sprite placement bug in the Sega System 32 driver, and he fixed the background layer placement in Daioh. Paul Priest improved the per-line blending and sprite-background priority in the Psikyo SH-2 games' driver. David Graves sent in CrowTRobo's improvements to the Heated Barrel MCU simulation. An anonymous contributor fixed the DIP switches in Dragon Spirit. Stephane Humbert fixed the inputs in Space Fever. smf added ctrlr.ini support to the DOS version.
					</p>
					<div class="wippix">
						<img src="wippics/0211/psikyosh_lineblend_1.png" alt="Psikyo per-line blending" width="224" height="320" />
						<img src="wippics/0211/psikyosh_lineblend_2.png" alt="Psikyo per-line blending" width="224" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-23</h2>
					<p>
					David Haywood added preliminary sprite support to the Sega System 32 driver, making Holosseum fully playable. Bryan McPhail fixed a bug when switching between 68020 and 68000 in the debugger. Stefan Jokisch added support for the artwork LEDs in the Turbo / Subroc-3D / Buck Rogers driver. smf fixed the path handling also in the DOS version. Paul Priest added per-row/column blending support to the Psikyo SH-2 drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0211/holo_1.png" alt="Holosseum (c) 1992 Sega" width="320" height="224" />
						<img src="wippics/0211/holo_2.png" alt="The intro of Holosseum" width="320" height="224" />
						<img src="wippics/0211/holo_3.png" alt="The intro of Holosseum" width="320" height="224" />
						<img src="wippics/0211/holo_4.png" alt="The gameplay of Holosseum" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-22</h2>
					<p>
					Aaron Giles added Sharpshooter to the Police Trainer driver, fixed the security failure in Revolution X, added Cruis'n World version 2.0 to the Williams V-unit driver, cleaned up the Windows file I/O and path handling and fixed a palette management bug that affected Area 51.
					</p>
					<div class="wippix">
						<img src="wippics/0211/ssho_1.png" alt="Sharpshooter (c) 1998 P&amp;P Marketing" width="394" height="240" />
						<img src="wippics/0211/ssho_2.png" alt="The intro of Sharpshooter" width="394" height="240" />
						<img src="wippics/0211/ssho_3.png" alt="The gameplay of Sharpshooter" width="394" height="240" />
						<img src="wippics/0211/ssho_4.png" alt="The gameplay of Sharpshooter" width="394" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-21</h2>
					<p>
					Zsolt Vasvari added Mighty Monkey to the Scramble driver. Chris Kirmse fixed the ROM loading message displays for ports that include a GUI. Aaron Giles changed the file I/O to happen mostly in the core instead of the OS dependant part, and he modified the routines to automatically generate the snap, cfg, nvram etc. paths if they are missing.
					</p>
					<div class="wippix">
						<img src="wippics/0211/mimo_1.png" alt="Mighty Monkey (c) 198? ????" width="224" height="256" />
						<img src="wippics/0211/mimo_2.png" alt="The intro of Mighty Monkey" width="224" height="256" />
						<img src="wippics/0211/mimo_3.png" alt="The gameplay of Mighty Monkey" width="224" height="256" />
						<img src="wippics/0211/mimo_4.png" alt="The gameplay of Mighty Monkey" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-20</h2>
					<p>
					Aaron Giles improved the MD5 verification fix. Uki wrote a driver for Dr. Micro. Paul Priest separated Psikyo PS4 hardware emulation to its own driver since it didn't have much in common with the PS3, PS5 and PS5v2 hardware configurations. Paul Priest also merged the graphics emulation for Nostradamus and Magical Cat Adventure.
					</p>
					<div class="wippix">
						<img src="wippics/0211/drmi_1.png" alt="Dr. Micro (c) 1983 Sanritsu" width="224" height="256" />
						<img src="wippics/0211/drmi_2.png" alt="The gameplay of Dr. Micro" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-19</h2>
					<p>
					Yasuhiro Ogawa forwarded Norix's fixes for Metal Hawk sprites. smf updated his GCC 3.2 install instructions. Shiriru's updates containing fixed sprite masking in the CPS-2 driver and fixed sprite delay in Battle Bakraid were also forwarded. Stephane Humbert fixed inputs in Mechanized Attack and added a clone called Caterpillar to the Centipede driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-18</h2>
					<p>
					Aaron Giles sent in an alternate fix for the false-positive MD5 checksums and improved the hdcomp tool. Guru added the Korean version of Nostradamus. Olivier Galibert ported tilemap naming and pause brightness updates to 0.62. Nathan Woods added state save support for the TMS34010 CPU core. Jarek Burczynski sent in a massively improved YM2413 sound chip emulation. Rene Single fixed the bug in datafile routines that caused some missing information. Quench sent in a TMS32025 CPU core and a preliminary Taito AIR system driver, but graphics emulation is not complete so it does not work very well. MooglyGuy submitted a preliminary driver for Tugboat, it works somewhat but colors are wrong, scrolling doesn't work and the inputs aren't hooked up.
					</p>
					<div class="wippix">
						<img src="wippics/0211/tugb_1.png" alt="Tugboat (c) 198? Moppet Video" width="256" height="256" />
						<img src="wippics/0211/tugb_2.png" alt="The gameplay of Tugboat" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-17</h2>
					<p>
					Stefan Jokisch added support for sound samples in Subroc-3D. Olivier Galibert fixed the palette regeneration when reloading a saved state. Zsolt Vasvari and Nicola Salmoria added the correct color PROMs to Formation Z / Aeroboto. Zsolt Vasvari also added yet another Mr. Kougar ROM set to the Scramble driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-16</h2>
					<p>
					Stephane Humbert and David Haywood re-submitted some drivers and fixes that were omitted from 0.62. smf did a GCC 3.2 compiler package for DOS. Andrea Mazzoleni fixed -listinfo with MD5 checksums. Nicola Salmoria added preliminary sound CPU communication to the Macross Plus driver, but sound doesn't work yet due to an unemulated IRQ feature in the ES5506 sound core. S. Suzuki fixed priority problems in Darwin 4078. MooglyGuy wrote a driver for Super Triv II and merged it with the Status Trivia II driver.
					</p>
					<div class="wippix">
						<img src="wippics/0211/supe_1.png" alt="Super Triv II (c) 1986 Status Games" width="272" height="256" />
						<img src="wippics/0211/supe_2.png" alt="The gameplay of Super Triv II" width="272" height="256" />
						<img src="wippics/0211/supe_3.png" alt="The gameplay of Super Triv II" width="272" height="256" />
						<img src="wippics/0211/supe_4.png" alt="The gameplay of Super Triv II" width="272" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-15</h2>
					<p>
					Nicola Salmoria fixed the colors in Speed Spin. David Haywood sent in a newer Pirates driver, adding the tilemap layer but it is still not perfect since sprites and samples are encrypted. Aaron Giles put together a compiler package with MinGW 2.0 (GCC 3.2) to be used with MAME. Nicola Salmoria also did some related cleanups.
					</p>
					<div class="wippix">
						<img src="wippics/0211/spee_1.png" alt="Speed Spin (c) 1994 TCH" width="384" height="240" />
						<img src="wippics/0211/spee_2.png" alt="The intro of Speed Spin" width="384" height="240" />
						<img src="wippics/0211/spee_3.png" alt="The gameplay of Speed Spin" width="384" height="240" />
						<img src="wippics/0211/spee_4.png" alt="The gameplay of Speed Spin" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-14</h2>
					<p>
					HIGHWAYMAN added another version of Mr. Kougar to the Scramble driver. R. Belmont added inputs and sound emulation to the Sega System 32 driver, but it's still missing graphics emulation. smf fixed some compile problems that happened with GCC 3.2. Stephane Humbert re-added a small fix to the cheat engine. Tomasz Slanina added graphics zooming to the Flower driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-13</h2>
					<p>
					Aaron Giles prevented hard disk images being stored in ZIP files, and cleaned up various things in the source. An anonymous contributor partially decrypted Moon Shuttle, but only the attract mode works and the graphics emulation is not complete. Stephane Humbert fixed the inputs and DIP switches in Fancy World and in the Neo Geo driver. Nathan Woods re-submitted some old fixes and improved a few MESS-specific things.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-12</h2>
					<p>
					R. Belmont added sound emulation to Toffy and Super Toffy. David Haywood added several non-working Semicom games to the Hyper Pacman driver, they don't work because of unemulated protection.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-11</h2>
					<p>
					Zsolt Vasvari fixed the DIP switch settings in Megadon and Catapult. David Haywood added Fancy World to the Tumblepop driver. Nicola Salmoria fixed the banking in Don Den Mahjong and added Watashiwa Suzumechan to the Royal Mahjong driver, but they aren't playable due to lack of correct input ports.
					</p>
					<div class="wippix">
						<img src="wippics/0211/fncy_1.png" alt="Fancy World (c) 1996 Unico" width="320" height="240" />
						<img src="wippics/0211/fncy_2.png" alt="The intro of Fancy World" width="320" height="240" />
						<img src="wippics/0211/fncy_3.png" alt="The intro of Fancy World" width="320" height="240" />
						<img src="wippics/0211/fncy_4.png" alt="The gameplay of Fancy World" width="320" height="240" />
						<img src="wippics/0211/fncy_5.png" alt="The gameplay of Fancy World" width="320" height="240" />
						<img src="wippics/0211/fncy_6.png" alt="The gameplay of Fancy World" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-10</h2>
					<p>
					David Haywood added the Austria / Hong Kong version of Battle Garegga to the Toaplan2 driver. Kale submitted a fix for the collision detection bug in Mermaid level 2. Nicola Salmoria decrypted Cross Shooter and Air Raid, but didn't emulate them further.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-09</h2>
					<p>
					Aaron Giles fixed the sprite/background priorities in Relief Pitcher and Shuuz.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-08</h2>
					<p>
					Mike Haaland added Megadon and Catapult to the Epos driver, but only Megadon works. Phil Stroffolino sent in a preliminary driver for DJ Boy, but it doesn't work at all yet.
					</p>
					<div class="wippix">
						<img src="wippics/0211/mega_1.png" alt="Megadon (c) 1982 Epos" width="236" height="272" />
						<img src="wippics/0211/mega_2.png" alt="The intro of Megadon" width="236" height="272" />
						<img src="wippics/0211/mega_3.png" alt="The gameplay of Megadon" width="236" height="272" />
						<img src="wippics/0211/mega_4.png" alt="The gameplay of Megadon" width="236" height="272" />
					</div>
					<div class="wippix">
						<img src="wippics/0211/cata_1.png" alt="Catapult (c) 1982 Epos" width="236" height="272" />
						<img src="wippics/0211/cata_2.png" alt="The service mode of Catapult" width="236" height="272" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-07</h2>
					<p>
					David Haywood, MooglyGuy and Stephane Humbert wrote a driver for Status Trivia II, it's working with sound except colors are wrong.
					</p>
					<div class="wippix">
						<img src="wippics/0211/stat_1.png" alt="Status Trivia II (c) 1984 Status Games" width="272" height="256" />
						<img src="wippics/0211/stat_2.png" alt="The intro of Status Trivia II" width="272" height="256" />
						<img src="wippics/0211/stat_3.png" alt="The gameplay of Status Trivia II" width="272" height="256" />
						<img src="wippics/0211/stat_4.png" alt="The gameplay of Status Trivia II" width="272" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-06</h2>
					<p>
					Aaron Giles updated the ThunderJaws and Escape from the Planet of the Robot Monsters drivers to handle sprite/background priorities correctly.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-05</h2>
					<p>
					Stephane Humbert fixed the DIP switches and inputs in 4 En Raya. Paul Priest fixed the brightness in Lode Runner The Dig Fight. Tomasz Slanina added Cycle Shooting to the N.Y. Captor driver, but it's unplayable due to a missing MCU dump.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-04</h2>
					<p>
					Tomasz Slanina submitted a driver for 4 En Raya, sound is also emulated in it.
					</p>
					<div class="wippix">
						<img src="wippics/0211/4enr_1.png" alt="4 En Raya (c) 1990 Super Video IDSA" width="256" height="224" />
						<img src="wippics/0211/4enr_2.png" alt="The intro of 4 En Raya" width="256" height="224" />
						<img src="wippics/0211/4enr_3.png" alt="The gameplay of 4 En Raya" width="256" height="224" />
						<img src="wippics/0211/4enr_4.png" alt="The gameplay of 4 En Raya" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-11-03</h2>
					<p>
					The graphics in Strikers 1945 III were fixed by a redumped graphics ROM.
					</p>
				</div>

				<div class="row">
					<h2>2002-11-02</h2>
					<p>
					Paul Priest fixed the colors in the Taisen Hot Gimmick games and Quiz de Idol! Hot Debut. Strikers 1945 III was also added to the Psikyo SH-2 driver, although one graphics ROM seems to be bad.
					</p>
					<div class="wippix">
						<img src="wippics/0211/s19453_1.png" alt="Strikers 1945 III (c) 1999 Psikyo" width="224" height="320" />
						<img src="wippics/0211/s19453_2.png" alt="The intro of Strikers 1945 III" width="224" height="320" />
						<img src="wippics/0211/s19453_3.png" alt="The gameplay of Strikers 1945 III" width="224" height="320" />
						<img src="wippics/0211/s19453_4.png" alt="The gameplay of Strikers 1945 III" width="224" height="320" />
						<img src="wippics/0211/s19453_5.png" alt="The gameplay of Strikers 1945 III" width="224" height="320" />
						<img src="wippics/0211/s19453_6.png" alt="The gameplay of Strikers 1945 III" width="224" height="320" />
						<img src="wippics/0211/s19453_7.png" alt="The gameplay of Strikers 1945 III" width="224" height="320" />
						<img src="wippics/0211/s19453_8.png" alt="The gameplay of Strikers 1945 III" width="224" height="320" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2002-11-01</h2>
					<p>
					Phil Stroffolino improved the Gorf colors. Nathan Woods did some minor tweaks to allow compiling with the MinGW 2.0 distribution.
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
