<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>February 2004 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2004-02-29</h2>
					<p>
					Aaron Giles sent in an update to the Gaelco 3D driver, fixing perspective correction, Z buffering and alpha blending. Nicola Salmoria sent in a massive update for Namco games from Pac-Land to System 86, fixing a lot of hardware details for overall better operation of the drivers. Nathan Woods sent in small fixes for the ABCD opcode in hd6309, small typo in the DMADAC interface etc. Andrea Mazzoleni updated the -listinfo output a little.
					</p>
					<div class="wippix">
						<img src="wippics/0402/radikalb_1.png" alt="Radikal Bikers (c) 1998 Gaelco" width="576" height="432" />
						<img src="wippics/0402/radikalb_2.png" alt="The intro of Radikal Bikers" width="576" height="432" />
						<img src="wippics/0402/radikalb_3.png" alt="The intro of Radikal Bikers" width="576" height="432" />
						<img src="wippics/0402/radikalb_4.png" alt="The intro of Radikal Bikers" width="576" height="432" />
						<img src="wippics/0402/radikalb_5.png" alt="The gameplay of Radikal Bikers" width="576" height="432" />
						<img src="wippics/0402/radikalb_6.png" alt="The gameplay of Radikal Bikers" width="576" height="432" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-28</h2>
					<p>
					R. Belmont added 8-bit access to the K054157 Konami chip and sent in a preliminary Lethal Enforcers driver which doesn't really work at all. Angelo Salese added RGB brightness control to VDP2 in the ST-V driver and kludged Power Instinct 3 so that it boots (it has missing sprites though). Pierpaolo Prazzoli sent in some fixes to the Hyperstone CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0402/groovef_1.png" alt="Power Instinct 3 - Groove on Fight (c) 1996 Atlus" width="320" height="224" />
						<img src="wippics/0402/groovef_2.png" alt="The intro of Power Instinct 3 - Groove on Fight" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-27</h2>
					<p>
					R. Belmont fixed the sound balance in Asterix, Detana Twinbee and Sunset Riders.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-26</h2>
					<p>
					Oliver Achten submitted a fix for the sound pitch in Asterix. Aaron Giles fixed a problem with resetting games that was caused by the integer timer system.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-25</h2>
					<p>
					Mike Coates sent in a driver for Quasar by him and Pierpaolo Prazzoli.
					</p>
					<div class="wippix">
						<img src="wippics/0402/quasar_1.png" alt="Quasar (c) 1980 Zelco Games" width="240" height="223" />
						<img src="wippics/0402/quasar_2.png" alt="The gameplay of Quasar" width="240" height="223" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-24</h2>
					<p>
					smf sent in some cleanups to the PSX hardware drivers. Aaron Giles removed some test code from the memory system and fixed a bug in the TMS32031 CPU core that caused wrong polygons in Radikal Bikers. Nathan Woods fixed taking screenshots with artwork and wrong colors that sometimes happened when changing to fullscreen mode.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-23</h2>
					<p>
					Nathan Woods added a few new commands to chdman and ported it to Macs.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-22</h2>
					<p>
					Pierpaolo Prazzoli added F-X (S.R.D. Mission bootleg) to the Kyugo driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-21</h2>
					<p>
					Tomasz Slanina sent in some fixes to the Enigma 2 driver, including sound, background starfield, fixed some bugs and colors. Norbert Kehrer submitted a driver for Mad Alien. Pierpaolo Prazzoli updated the Tailgunner samples update to current standards. Nathan Woods sent in another miscellaneous patch for I286 and M6502 CPU cores.
					</p>
					<div class="wippix">
						<img src="wippics/0402/enigma2_1.png" alt="Enigma 2 (c) 1981 Gameplan" width="224" height="240" />
						<img src="wippics/0402/enigma2_2.png" alt="The gameplay of Enigma 2" width="224" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0402/madalien_1.png" alt="Mad Alien (c) 1980 Data East" width="256" height="256" />
						<img src="wippics/0402/madalien_2.png" alt="The intro of Mad Alien" width="256" height="256" />
						<img src="wippics/0402/madalien_3.png" alt="The gameplay of Mad Alien" width="256" height="256" />
						<img src="wippics/0402/madalien_4.png" alt="The gameplay of Mad Alien" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-20</h2>
					<p>
					Aaron Giles converted the timer system to use integer values instead of floating point, increasing its accuracy significantly.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-19</h2>
					<p>
					Aaron Giles added support for a DMA-driven DAC sound device. smf added preliminary PSX SPU sound emulation and fixed the standalone MIPS disassembler. Curt Coder submitted cleanups to Blood Bros and Xor World. David Haywood sent in a skeleton driver for the Microprose 3D hardware.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-18</h2>
					<p>
					Leon van Rooij fixed some graphics glitches in Gunbird (attract mode) and Strikers 1945 (plane selection and level 7), and he fixed a disassembler bug in the 68k core. David Widel sent in the decryption of Robo Wrestle and Tomasz Slanina merged it with the Sega decryption functions. Pierpaolo Prazzoli added a version of Hunchback running on Galaxian hardware. R. Belmont fixed the Irem GA-20 sample player pitch calculation.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-17</h2>
					<p>
					Curt Coder sent in memory map conversions and DIP switch / input cleanups for various drivers. Nathan Woods sent in a patch to set the Z80 cycle tables to their defaults at startup. Lawrence Gold fixed a bunch of compiling problems on other platforms. Pierpaolo Prazzoli added Bongo to the Galaxian driver, cleaned up the memory map for Driving Force and fixed the colors in Pro Yakyuu Nyuudan Test Tryout. Brian A. Troha added an alternate version of Strikers 1945.
					</p>
					<div class="wippix">
						<img src="wippics/0402/bongo_1.png" alt="Bongo (c) 1983 Jetsoft" width="224" height="256" />
						<img src="wippics/0402/bongo_2.png" alt="The gameplay of Bongo" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0402/tryout_5.png" alt="Pro Yakyuu Nyuudan Test Tryout (c) 1985 Data East" width="240" height="248" />
						<img src="wippics/0402/tryout_6.png" alt="The intro of Pro Yakyuu Nyuudan Test Tryout" width="240" height="248" />
						<img src="wippics/0402/tryout_7.png" alt="The gameplay of Pro Yakyuu Nyuudan Test Tryout" width="240" height="248" />
						<img src="wippics/0402/tryout_8.png" alt="The gameplay of Pro Yakyuu Nyuudan Test Tryout" width="240" height="248" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-16</h2>
					<p>
					Aaron Giles added support for the IACK and IDLE commands in the TMS32031 CPU core, and sent in a preliminary version of the Gaelco 3D driver (Surf Planet and Radikal Bikers) which works somewhat but graphics rendering is not perfect.
					</p>
					<div class="wippix">
						<img src="wippics/0402/gaelco3d_1.png" alt="Gaelco 3D preliminary 1" width="576" height="432" />
						<img src="wippics/0402/gaelco3d_2.png" alt="Gaelco 3D preliminary 2" width="576" height="432" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-15</h2>
					<p>
					David Widel emulated the sound CPU encryption in Altered Beast (set 2), though it breaks all the other games. Nicola Salmoria sent in a driver for Ms.Pac-Man/Galaga - 20 Year Reunion and fixed some bugs in the Z180 CPU core. David Haywood added Botanic to the Bagman driver.
					</p>
					<div class="wippix">
						<img src="wippics/0402/20pacgal_1.png" alt="Ms.Pac-Man/Galaga - 20 Year Reunion (c) 2000 Namco" width="224" height="288" />
						<img src="wippics/0402/20pacgal_2.png" alt="Ms.Pac-Man/Galaga - 20 Year Reunion (c) 2000 Namco" width="224" height="288" />
						<img src="wippics/0402/20pacgal_3.png" alt="The gameplay of Ms.Pac-Man/Galaga - 20 Year Reunion" width="224" height="288" />
						<img src="wippics/0402/20pacgal_4.png" alt="The gameplay of Ms.Pac-Man/Galaga - 20 Year Reunion" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/0402/botanic_1.png" alt="Botanic (c) 1983 Valadon Automation" width="224" height="256" />
						<img src="wippics/0402/botanic_2.png" alt="The gameplay of Botanic" width="224" height="256" />
						<img src="wippics/0402/botanic_3.png" alt="The gameplay of Botanic" width="224" height="256" />
						<img src="wippics/0402/botanic_4.png" alt="The gameplay of Botanic" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-14</h2>
					<p>
					MooglyGuy added Quadro Quiz II to the Status Trivia driver, but inputs don't completely work in it. Quench updated the PIC16C5x CPU core to support internal memory maps, and he updated the relevant drivers to use the functionality as well.
					</p>
					<div class="wippix">
						<img src="wippics/0402/quaquiz2_1.png" alt="Quadro Quiz II (c) 1985 Status Games" width="272" height="256" />
						<img src="wippics/0402/quaquiz2_2.png" alt="The intro of Quadro Quiz II" width="272" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-13</h2>
					<p>
					Pierpaolo Prazzoli and Bryan McPhail finished the Pro Yakyuu Nyuudan Test Tryout driver. Aaron Giles fixed the support for CPU-specific internal memory maps in the memory system.
					</p>
					<div class="wippix">
						<img src="wippics/0402/tryout_1.png" alt="Pro Yakyuu Nyuudan Test Tryout (c) 1985 Data East" width="240" height="248" />
						<img src="wippics/0402/tryout_2.png" alt="The gameplay of Pro Yakyuu Nyuudan Test Tryout" width="240" height="248" />
						<img src="wippics/0402/tryout_3.png" alt="The gameplay of Pro Yakyuu Nyuudan Test Tryout" width="240" height="248" />
						<img src="wippics/0402/tryout_4.png" alt="The gameplay of Pro Yakyuu Nyuudan Test Tryout" width="240" height="248" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-12</h2>
					<p>
					Tomasz Slanina added Zoom 909 (a clone of Buck Rogers) to the Turbo driver.
					</p>
					<div class="wippix">
						<img src="wippics/0402/zoom909_1.png" alt="Zoom 909 (c) 1982 Sega" width="256" height="224" />
						<img src="wippics/0402/zoom909_2.png" alt="The gameplay of Zoom 909" width="256" height="224" />
						<img src="wippics/0402/zoom909_3.png" alt="The gameplay of Zoom 909" width="256" height="224" />
						<img src="wippics/0402/zoom909_4.png" alt="The gameplay of Zoom 909" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-11</h2>
					<p>
					Nathan Woods updated the MESS specific CPU cores (such as I286, M4510 and M6509) with latest changes. Erik Ruud submitted an addition of sound samples to Tailgunner. Tomasz Slanina sent in a preliminary driver for Kusayakyuu, it's playable but sound is not completely emulated and colors are wrong.
					</p>
					<div class="wippix">
						<img src="wippics/0402/ksayakyu_1.png" alt="Kusayakyuu (c) 1985 Taito" width="256" height="224" />
						<img src="wippics/0402/ksayakyu_2.png" alt="The intro of Kusayakyuu" width="256" height="224" />
						<img src="wippics/0402/ksayakyu_3.png" alt="The gameplay of Kusayakyuu" width="256" height="224" />
						<img src="wippics/0402/ksayakyu_4.png" alt="The gameplay of Kusayakyuu" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-10</h2>
					<p>
					Brian A. Troha cleaned up the itech32 driver and added a newer version of Area 51 to the Cojag driver. B. S. Ruggeri re-submitted the Fire Battle DIP switch fixes. El Condor submitted fixed DIP switch settings in the US Games driver.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-09</h2>
					<p>
					R. Belmont sent in a small *nix-related compiling fix for u1. Nathan Woods sent in miscellaneous fixes to the core, the NSS driver and the IDE controller emulation.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-08</h2>
					<p>
					R. Belmont reverted the RF5c68 sound emulation to an earlier version, to fix some tuning problems. Phil Stroffolino added Great Sluggers '93 to the Namco System NB1/2 driver and fixed a lot of graphics glitches in it. Nicola Salmoria sent in another Namco update, converting drivers to the tilemap system, fixing some graphics priority problems and adding the starfield to Tactician. Pierpaolo Prazzoli fixed the Liberation bootleg so that it works now, and he fixed the sprites in cocktail mode in it.
					</p>
					<div class="wippix">
						<img src="wippics/0402/gslugrsj_1.png" alt="Great Sluggers '93 (c) 1993 Namco" width="288" height="224" />
						<img src="wippics/0402/gslugrsj_2.png" alt="The intro of Great Sluggers '93" width="288" height="224" />
						<img src="wippics/0402/gslugrsj_3.png" alt="The gameplay of Great Sluggers '93" width="288" height="224" />
						<img src="wippics/0402/gslugrsj_4.png" alt="The gameplay of Great Sluggers '93" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-07</h2>
					<p>
					Pierpaolo Prazzoli added 3 alternate versions of Space Fever to the 8080bw driver and Bulls Eye Darts to the Centipede driver, but colors are not perfect in it.
					</p>
					<div class="wippix">
						<img src="wippics/0402/bullsdrt_1.png" alt="Bulls Eye Darts (c) 1985 Shinkai" width="240" height="256" />
						<img src="wippics/0402/bullsdrt_2.png" alt="The intro of Bulls Eye Darts" width="240" height="256" />
						<img src="wippics/0402/bullsdrt_3.png" alt="The gameplay of Bulls Eye Darts" width="240" height="256" />
						<img src="wippics/0402/bullsdrt_4.png" alt="The gameplay of Bulls Eye Darts" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-06</h2>
					<p>
					Aaron Giles fixed up Driver's Edge in the itech32 driver, it's fully playable now. Aaron Giles also added support for internal memory maps for CPUs and fixed the recently introduced errors in Hydra, Pit Fighter and Escape Kids.
					</p>
					<div class="wippix">
						<img src="wippics/0402/drivedge_1.png" alt="Driver's Edge (c) 1994 Incredible Technologies" width="384" height="240" />
						<img src="wippics/0402/drivedge_2.png" alt="The intro of Driver's Edge" width="384" height="240" />
						<img src="wippics/0402/drivedge_3.png" alt="The gameplay of Driver's Edge" width="384" height="240" />
						<img src="wippics/0402/drivedge_4.png" alt="The gameplay of Driver's Edge" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-05</h2>
					<p>
					Nicola Salmoria sent in another big Namco drivers update, fixing many bugs, improving the custom Namco sound chip emulation and converting drivers to the tilemap system.
					</p>
				</div>

				<div class="row">
					<h2>2004-02-04</h2>
					<p>
					B. S. Ruggeri submitted an input fix for player 2 and 3 controls in Pit Fighter. Luca Elia added Mahjong Neruton Haikujirada to the Dynax driver. Pierpaolo Prazzoli sent in a driver for Talbot which is otherwise complete but MCU simulation is not finished so it crashes when a game is started. David Haywood added Fever SOS, a clone of Dangun Feveron, to the Cave driver.
					</p>
					<div class="wippix">
						<img src="wippics/0402/neruton_1.png" alt="Mahjong Neruton Haikujirada (c) 1990 Dynax" width="512" height="480" />
						<img src="wippics/0402/neruton_2.png" alt="The gameplay of Mahjong Neruton Haikujirada" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0402/talbot_1.png" alt="Talbot (c) 1982 Volt Electronics" width="224" height="256" />
						<img src="wippics/0402/talbot_2.png" alt="The gameplay of Talbot" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-03</h2>
					<p>
					Curt Coder submitted an addition of MSM5205 sound to Indoor Soccer and DIP switch and input fixes to Guardians of the Hood, Heat Barrel, Shot Rider and Fire Battle. David Haywood added an alternate version of Kung-Fu Taikun to the Wiz driver, and he fixed a crash in the Super Slam driver. Fabrice Arzeno added Booby Kids, a bootleg of Kid no Hore Hore Daisakusen.
					</p>
					<div class="wippix">
						<img src="wippics/0402/boobykds_1.png" alt="Booby Kids (c) 1987 Nichibutsu" width="224" height="256" />
						<img src="wippics/0402/boobykds_2.png" alt="The gameplay of Booby Kids" width="224" height="256" />
						<img src="wippics/0402/boobykds_3.png" alt="The gameplay of Booby Kids" width="224" height="256" />
						<img src="wippics/0402/boobykds_4.png" alt="The gameplay of Booby Kids" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2004-02-02</h2>
					<p>
					Brian A. Troha moved Return of Lady Frog from the Dynax driver to the Splash driver, without any other changes. Luca Elia added an alternative version of Quiz 365 to the Don Den Lover driver. B. S. Ruggeri submitted DIP switch fixes to Fire Battle and player 3 input fixes to Guardians of the Hood. David Haywood sent in another update to Varia Metal, adding sprite emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0402/vmetal_1.png" alt="Varia Metal (c) 1995 New Ways Trading" width="224" height="320" />
						<img src="wippics/0402/vmetal_2.png" alt="The intro of Varia Metal" width="224" height="320" />
						<img src="wippics/0402/vmetal_3.png" alt="The gameplay of Varia Metal" width="224" height="320" />
						<img src="wippics/0402/vmetal_4.png" alt="The gameplay of Varia Metal" width="224" height="320" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2004-02-01</h2>
					<p>
					Quench simulated the sound CPU in Super Slam, but it's not perfect yet. David Haywood sent in a preliminary driver for Varia Metal and Olivier Galibert fixed the background graphics in it, but sprites are not yet emulated. Curt Coder converted Gun Smoke, 1943 and Jackal to tilemaps and fixed other stuff in them.
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
