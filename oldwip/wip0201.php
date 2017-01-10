<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>January 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-01-31</h2>
					<p>
					Aaron Giles added a prototype of Mortal Kombat and Mortal Kombat II v2.1 to the Williams Y-unit and T-unit drivers, the kit version of Blaster to the Williams driver, and he converted a few more drivers for the partial update support. David Haywood added Noboranka (bootleg) to the Sega System 1 driver, and Stephane Humbert made it fully playable. Nicola Salmoria decrypted another Buck Rogers ROM set and added it to the Turbo driver.
					</p>
					<div class="wippix">
						<img src="wippics/0201/nobo_1.png" alt="Noboranka (c) 1986 bootleg" width="224" height="240" />
						<img src="wippics/0201/nobo_2.png" alt="The intro of Noboranka" width="224" height="240" />
						<img src="wippics/0201/nobo_3.png" alt="The gameplay of Noboranka" width="224" height="240" />
						<img src="wippics/0201/nobo_4.png" alt="The gameplay of Noboranka" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-30</h2>
					<p>
					Aaron Giles added partial screen updating to the core, and converted a few drivers to support it. Aaron Giles also fixed a crash with the artwork functions, and added better vector sparkle effect emulation as used in Major Havoc and Tempest. Zsolt Vasvari made the artwork functions a bit faster, added the blue overlay for Phantom II and re-added the yellow overlay for Gunfight and the backdrop for Boot Hill.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-29</h2>
					<p>
					Phil Stroffolino added proper rotation and zooming into the Namco NB-2 driver, making Outfoxies look much better and it is now also playable.
					</p>
					<div class="wippix">
						<img src="wippics/0201/ofox_1.png" alt="Outfoxies (c) 1994 Namco" width="288" height="224" />
						<img src="wippics/0201/ofox_2.png" alt="The intro of Outfoxies" width="288" height="224" />
						<img src="wippics/0201/ofox_3.png" alt="The intro of Outfoxies" width="288" height="224" />
						<img src="wippics/0201/ofox_4.png" alt="The gameplay of Outfoxies" width="288" height="224" />
						<img src="wippics/0201/ofox_5.png" alt="The gameplay of Outfoxies" width="288" height="224" />
						<img src="wippics/0201/ofox_6.png" alt="The gameplay of Outfoxies" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-28</h2>
					<p>
					Brian A. Troha added Super World Stadium '95 to the Namco NB-1 driver. David Graves fixed a few more problems in the Taito drivers that occurred with the latest core changes. Aaron Giles also fixed a crash that happened with the core changes and resetting 68k CPUs.
					</p>
					<div class="wippix">
						<img src="wippics/0201/sws9_1.png" alt="Super World Stadium '95 (c) 1995 Namco" width="288" height="224" />
						<img src="wippics/0201/sws9_2.png" alt="The gameplay of Super World Stadium '95" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-27</h2>
					<p>
					David Graves fixed a few more problems in the various Taito drivers that occurred with the core changes, and added Enforce to the Taito Z system driver, however it's unplayable due to the lack of proper controls. David Haywood fixed a few graphics bugs in Angel Kids.
					</p>
					<div class="wippix">
						<img src="wippics/0201/enfo_1.png" alt="Enforce (c) 1988 Taito" width="320" height="232" />
						<img src="wippics/0201/enfo_2.png" alt="The intro of Enforce" width="320" height="232" />
						<img src="wippics/0201/enfo_3.png" alt="The gameplay of Enforce" width="320" height="232" />
						<img src="wippics/0201/enfo_4.png" alt="The gameplay of Enforce" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-26</h2>
					<p>
					David Haywood fixed the sprites and sound in Angel Kids, and Stephane Humbert fixed the controls and DIP switch settings so the game is now fully playable. David Graves fixed a few problems with some Taito games that occurred with the core changes. Tatsuyuki Satoh fixed the speech in Rock 'n Rage. Aaron Giles added the "sharpness" filter effect, and he fixed a tilemap clipping bug in the Taito F3 driver. Zsolt Vasvari added scrolling to the cloud background and fixed the cloud colors in Phantom II. David Haywood also added Battle Bakraid to the Toaplan2 driver, but it lacks sound and has a few graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0201/kids_5.png" alt="The gameplay of Angel Kids" width="240" height="256" />
						<img src="wippics/0201/kids_6.png" alt="The gameplay of Angel Kids" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0201/bakr_1.png" alt="Battle Bakraid (c) 1999 Raizing" width="240" height="320" />
						<img src="wippics/0201/bakr_2.png" alt="The intro of Battle Bakraid" width="240" height="320" />
						<img src="wippics/0201/bakr_3.png" alt="The gameplay of Battle Bakraid" width="240" height="320" />
						<img src="wippics/0201/bakr_4.png" alt="The gameplay of Battle Bakraid" width="240" height="320" />
						<img src="wippics/0201/bakr_5.png" alt="The gameplay of Battle Bakraid" width="240" height="320" />
						<img src="wippics/0201/bakr_6.png" alt="The gameplay of Battle Bakraid" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-25</h2>
					<p>
					M.A.S.H. provided information on how to add Pirate Pete to the Jungle King driver. Aaron Giles fixed some problems with the 74123 emulator that appeared with the timer changes. Aaron Giles also sent in a driver for Alpha One, a single-CPU prototype version of Major Havoc. Chris Hardy added Geostorm, the Japanese version of Gunforce 2, to the IREM M-92 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0201/pira_1.png" alt="Pirate Pete (c) 1982 Taito" width="256" height="224" />
						<img src="wippics/0201/pira_2.png" alt="The intro of Pirate Pete" width="256" height="224" />
						<img src="wippics/0201/pira_3.png" alt="The gameplay of Pirate Pete" width="256" height="224" />
						<img src="wippics/0201/pira_4.png" alt="The gameplay of Pirate Pete" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0201/alph_1.png" alt="Alpha One (c) 1983 Atari" width="512" height="384" />
						<img src="wippics/0201/alph_2.png" alt="The gameplay of Alpha One" width="512" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-24</h2>
					<p>
					David Haywood sent some pictures of a very preliminary, work-in-progress driver for Angel Kids. However, it is missing sprites and sound and is also unplayable.
					</p>
					<div class="wippix">
						<img src="wippics/0201/kids_1.png" alt="Angel Kids (c) 1988 Sega" width="240" height="256" />
						<img src="wippics/0201/kids_2.png" alt="The gameplay of Angel Kids" width="240" height="256" />
						<img src="wippics/0201/kids_3.png" alt="The gameplay of Angel Kids" width="240" height="256" />
						<img src="wippics/0201/kids_4.png" alt="The gameplay of Angel Kids" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-23</h2>
					<p>
					Tatsuyuki Satoh added the 4800/9600bps parameter support to the VLM5030 sound chip emulation, fixing some speech in Jailbreak. Barry Rodewald submitted a fix for vertical scrolling in Jailbreak, as used by the end credits. Smitdogg submitted a fix for the Mad Crasher DIP switch settings. Zsolt Vasvari updated the 8080bw driver to use the new core features.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-22</h2>
					<p>
					Tatsuyuki Satoh fixed the noise generator in the VLM5030 sound chip emulation, completely removing the need for samples. Bryan McPhail re-added Gunforce 2 to the IREM M-92 driver with some speedups. David Haywood sent in a preliminary Tecmo Bowl driver, which is unplayable, missing sprites and sound is not completely emulated.
					</p>
					<div class="wippix">
						<img src="wippics/0201/tbow_1.png" alt="Tecmo Bowl (c) 1987 Tecmo" width="512" height="224" />
						<img src="wippics/0201/tbow_2.png" alt="The attract mode of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0201/tbow_3.png" alt="The attract mode of Tecmo Bowl" width="512" height="224" />
						<img src="wippics/0201/tbow_4.png" alt="The attract mode of Tecmo Bowl" width="512" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-21</h2>
					<p>
					Aaron Giles fixed a sound problem in the Williams T-unit driver that occurred with the newest core changes. Tatsuyuki Satoh submitted a new, much improved version of the VLM5030 sound chip emulation, used for speech in (Super) Punch-Out and a few other drivers. It is now more than 90% accurate to the original, and only a few small problems remain. Jarek Burczynski fixed a long-standing (almost five years) color PROM decoding bug, which resulted in a slightly too low blue component of the color in about 60 drivers.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-20</h2>
					<p>
					Manuel Abadia submitted the Thunder Hoop 2 driver, but it isn't playable because of unemulated protection.
					</p>
					<div class="wippix">
						<img src="wippics/0201/thoo_1.png" alt="Thunder Hoop 2: Strikes Back (c) 1994 Gaelco" width="320" height="240" />
						<img src="wippics/0201/thoo_2.png" alt="The intro of Thunder Hoop 2: Strikes Back" width="320" height="240" />
						<img src="wippics/0201/thoo_3.png" alt="The intro of Thunder Hoop 2: Strikes Back" width="320" height="240" />
						<img src="wippics/0201/thoo_4.png" alt="The gameplay of Thunder Hoop 2: Strikes Back" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-19</h2>
					<p>
					Phil Stroffolino sent in a new version of the Namco NB-2 driver, adding preliminary graphics emulation. However, it is nowhere near perfect, there is no sound and controls are not yet working due to an unemulated MCU.
					</p>
					<div class="wippix">
						<img src="wippics/0201/outf_1.png" alt="Outfoxies (c) 1994 Namco" width="288" height="224" />
						<img src="wippics/0201/outf_2.png" alt="The intro of Outfoxies" width="288" height="224" />
						<img src="wippics/0201/outf_3.png" alt="The gameplay of Outfoxies" width="288" height="224" />
						<img src="wippics/0201/outf_4.png" alt="The gameplay of Outfoxies" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-18</h2>
					<p>
					Stefan Jokisch did a tiny clean-up on the ASM 68k core to make it compile with Visual C. Brad Oliver fixed several driver problems that occurred on MacMAME.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-17</h2>
					<p>
					Bryan McPhail fixed some of the Win32 port files to make them compile with Visual C.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-16</h2>
					<p>
					David Haywood re-submitted several drivers and clones to work with the newest core changes. Quench corrected the internal behaviour of interrupt handling in the i8039 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-15</h2>
					<p>
					Aaron Giles sent in the major core rework, adding much more macroization, adding automatic resource management for bitmaps and timers, obsoleting the old interrupt system and adding generic NVRAM handlers. Aaron Giles also added a preliminary Bradley Trainer driver, however the controls and colors are not correct.
					</p>
					<div class="wippix">
						<img src="wippics/0201/brad_1.png" alt="Bradley Trainer (c) 1980 Atari" width="512" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-14</h2>
					<p>
					Stephane Humbert submitted a patch to make Tee'd Off playable.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-13</h2>
					<p>
					David Haywood fixed DIP switch settings and added sound emulation to the Welltris driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-12</h2>
					<p>
					Chris Hardy added sound emulation to Gunforce 2.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-11</h2>
					<p>
					Acho A. Tang submitted a modification to the IREM GA20 sound chip emulation, which partially fixes some sample pitch problems in the IREM M-92 driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-10</h2>
					<p>
					Aaron Giles reported some progress on a major core rework, changing machine drivers to a macro system and automatizing timer and video drivers resource management.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-09</h2>
					<p>
					Uki fixed a few graphics glitches in The Fairyland Story, and submitted a driver for Quiz DNA no Hanran and Quiz Gakuen Paradise.
					</p>
					<div class="wippix">
						<img src="wippics/0201/quiz_1.png" alt="Quiz DNA no Hanran (c) 1992 Face" width="384" height="224" />
						<img src="wippics/0201/quiz_2.png" alt="The intro of Quiz DNA no Hanran" width="384" height="224" />
						<img src="wippics/0201/quiz_3.png" alt="The intro of Quiz DNA no Hanran" width="384" height="224" />
						<img src="wippics/0201/quiz_4.png" alt="The gameplay of Quiz DNA no Hanran" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0201/gaku_1.png" alt="Quiz Gakuen Paradise (c) 1991 NMK" width="384" height="224" />
						<img src="wippics/0201/gaku_2.png" alt="The intro of Quiz Gakuen Paradise" width="384" height="224" />
						<img src="wippics/0201/gaku_3.png" alt="The intro of Quiz Gakuen Paradise" width="384" height="224" />
						<img src="wippics/0201/gaku_4.png" alt="The gameplay of Quiz Gakuen Paradise" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-08</h2>
					<p>
					Zsolt Vasvari and Jim Hernandez added sound sample support to the Buck Rogers driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-07</h2>
					<p>
					Lawrence Gold forwarded some minor compilation fixes to the source. Paul Priest added preliminary protection emulation to the Tokio driver, but it is not yet perfect.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-06</h2>
					<p>
					David Haywood added a newer version ROM set to the Mysterious Stones driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-05</h2>
					<p>
					David Haywood added Gunforce 2 to the IREM M-92 driver, but it lacks sound and has a few minor graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0201/gunf_1.png" alt="Gunforce 2 (c) 1994 IREM" width="320" height="240" />
						<img src="wippics/0201/gunf_2.png" alt="The intro of Gunforce 2" width="320" height="240" />
						<img src="wippics/0201/gunf_3.png" alt="The gameplay of Gunforce 2" width="320" height="240" />
						<img src="wippics/0201/gunf_4.png" alt="The gameplay of Gunforce 2" width="320" height="240" />
						<img src="wippics/0201/gunf_5.png" alt="The gameplay of Gunforce 2" width="320" height="240" />
						<img src="wippics/0201/gunf_6.png" alt="The gameplay of Gunforce 2" width="320" height="240" />
						<img src="wippics/0201/gunf_7.png" alt="The gameplay of Gunforce 2" width="320" height="240" />
						<img src="wippics/0201/gunf_8.png" alt="The gameplay of Gunforce 2" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-01-04</h2>
					<p>
					Andrea Mazzoleni partially fixed a bug in compiling the Z80 CPU core with GCC 3.0.x.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-03</h2>
					<p>
					William Kucharski re-submitted a lot of cocktail mode support and other small fixes for various drivers.
					</p>
				</div>

				<div class="row">
					<h2>2002-01-02</h2>
					<p>
					Phil Stroffolino provided a quick and dirty fix for the Namco NA1/2 games. David Haywood fixed the bad sprites in Gunnail.
					</p>
				</div>

				<div class="rowlast">
					<h2>2002-01-01</h2>
					<p>
					Brad Oliver fixed a few compilation problems in MAME 0.57.
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
