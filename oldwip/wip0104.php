<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>April 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-04-30</h2>
					<p>
					Bernd Wiebelt updated the Win32 version's config routines. Aaron Giles sent in another Win32 version update with some cleanups and bugfixes. Dave Haywood and M.A.S.H. added another Galaxy Wars romset.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-29</h2>
					<p>
					Nathan Woods added state saving support for the 6821 PIA chip.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-28</h2>
					<p>
					Takahiro Nogi sent in preliminary drivers for Ojanko High School, Idol Mahjong Housoukyoku, Mahjong Natsu Monogatari, Mahjong Fun Club - Idle Saizensen, Mahjong Daiyogen, Nekketsu Mahjong Sengen! After 5, Idol Mahjong Final Romance, Taisen Mahjong Final Romance R and Taisen Idol Mahjong Final Romance 2, but they still have some problems.
					</p>
					<div class="wippix">
						<img src="wippics/0104/ojankohs.png" alt="Ojanko High School (c) 1988 Video System" width="288" height="224" />
						<img src="wippics/0104/idolmj.png" alt="Idol Mahjong Housoukyoku (c) 1988 Video System" width="352" height="240" />
						<img src="wippics/0104/mjnatsu.png" alt="Mahjong Natsu Monogatari (c) 1989 Video System" width="352" height="240" />
						<img src="wippics/0104/mfunclub.png" alt="Mahjong Fun Club - Idle Saizensen (c) 1989 Video System" width="352" height="240" />
						<img src="wippics/0104/daiyogen.png" alt="Mahjong Daiyogen (c) 1990 Video System" width="352" height="240" />
						<img src="wippics/0104/nmsengen.png" alt="Nekketsu Mahjong Sengen! After 5 (c) 1991 Video System" width="352" height="240" />
						<img src="wippics/0104/fromance.png" alt="Idol Mahjong Final Romance (c) 1991 Video System" width="352" height="240" />
						<img src="wippics/0104/fromancr.png" alt="Taisen Mahjong Final Romance R (c) 1995 Video System" width="704" height="240" />
						<img src="wippics/0104/fromanc2.png" alt="Taisen Idol Mahjong Final Romance 2 (c) 1995 Video System" width="704" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-27</h2>
					<p>
					Aaron Giles fixed yet more crashes on the Win32 version, and he fixed Atari JSA sound boards' CPU and sound chip frequency calculation. Mathis Rosenhauer added core functions for MNG (animated PNG) video capturing.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-26</h2>
					<p>
					Aaron Giles fixed several crashes that happened on the Win32 version, and he improved the new Win32 port as well. Dave Haywood also fixed Gunnail from crashing in the Win32 version and verified M.A.S.H's submissions to the 8080bw driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-25</h2>
					<p>
					Dave Haywood updated the Bombjack Twin driver and got Vandyke playable. Ian Patterson fixed the scrolling in topsecex. Aaron Giles re-ported MAME to Win32 console with freely available tools, features including hardware stretching if available. Aaron also fixed the palette problems in Cyberball, and cleaned up the Food Fight driver. Stephane Humbert submitted some dip switch fixes to several drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0104/vand_1.png" alt="Vandyke (c) 1990 UPL" width="224" height="256" />
						<img src="wippics/0104/vand_2.png" alt="The intro of Vandyke" width="224" height="256" />
						<img src="wippics/0104/vand_3.png" alt="The gameplay of Vandyke" width="224" height="256" />
						<img src="wippics/0104/vand_4.png" alt="The gameplay of Vandyke" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-24</h2>
					<p>
					Bryan McPhail fixed Dark Seal graphics, and he fixed a bug which caused Fighting Fantasy to freeze. David Graves did some minor improvements to the Taito Super Z system driver. Thierry Lescot added some new clone romsets.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-23</h2>
					<p>
					David Graves added state saving support to Top Speed and did some minor cleanups. Gerardo Oporto fixed dip switch settings in Exzisus.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-22</h2>
					<p>
					Bart Puype fixed Battle Lane Vol. 5 and Major Havoc from crashing in MAME32. Zsolt Vasvari fixed the colors in Dark Planet and added the spinner emulation.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-21</h2>
					<p>
					Phil Stroffolino further updated the Tunnel Hunt driver, but some small problems still remain. Marco Cassili fixed dip switch settings in it as well.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-20</h2>
					<p>
					Stefan Jokisch fixed a bug in the Arkanoid driver that caused instant deaths in the last level.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-19</h2>
					<p>
					Ian Patterson submitted an updated version of the cheat engine, including a lot of bugfixes and functionality enhancements. inside out boy sent a fix for playing back inp files on certain games. Dave Haywood added another ROM set of Takeda Shingen to the Mega System 1 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-18</h2>
					<p>
					Sean Young adjusted the Z80 core to work better with MSX emulation, and he fixed a frequency calculation bug in the K051649 (SCC) sound core. Aaron Giles added the correct Ninja Clowns sound ROM to the itech8 driver, and added controls emulation to Slick Shot, which is now somewhat playable. Ian Patterson submitted a fix for redraw problems in the exidy440 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-17</h2>
					<p>
					Stefan Jokisch merged his and Yochizo's drivers for Bonze's Adventure / Jigoku Meguri, improving the C-Chip emulation and making the final levels playable.
					</p>
					<div class="wippix">
						<img src="wippics/0104/bonz_1.png" alt="Bonze Adventure (c) 1988 Taito" width="320" height="240" />
						<img src="wippics/0104/bonz_2.png" alt="The intro of Bonze Adventure" width="320" height="240" />
						<img src="wippics/0104/bonz_3.png" alt="The intro of Bonze Adventure" width="320" height="240" />
						<img src="wippics/0104/bonz_4.png" alt="The gameplay of Bonze Adventure" width="320" height="240" />
						<img src="wippics/0104/bonz_5.png" alt="The gameplay of Bonze Adventure" width="320" height="240" />
						<img src="wippics/0104/bonz_6.png" alt="The gameplay of Bonze Adventure" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-16</h2>
					<p>
					Zsolt Vasvari fixed Centipede cocktail mode and Polaris cloud scroll speed. Mike Haaland fixed an ASM 68k CPU core compilation bug. Yochizo sent in drivers for Bonze's Adventure / Jigoku Meguri and Exzisus. Mathis Rosenhauer fixed another artwork system problem, and fixed Discs of Tron from crashing. Paul Hampson and Quench finished off the China Gate driver.
					</p>
					<div class="wippix">
						<img src="wippics/0104/exzi_1.png" alt="Exzisus (c) 1987 Taito" width="256" height="224" />
						<img src="wippics/0104/exzi_2.png" alt="The intro of Exzisus" width="256" height="224" />
						<img src="wippics/0104/exzi_3.png" alt="The gameplay of Exzisus" width="256" height="224" />
						<img src="wippics/0104/exzi_4.png" alt="The gameplay of Exzisus" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0104/chin_1.png" alt="China Gate (c) 1988 Taito" width="240" height="224" />
						<img src="wippics/0104/chin_2.png" alt="The intro of China Gate" width="240" height="224" />
						<img src="wippics/0104/chin_3.png" alt="The intro of China Gate" width="240" height="224" />
						<img src="wippics/0104/chin_4.png" alt="The gameplay of China Gate" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-15</h2>
					<p>
					Zsolt Vasvari fixed an i8085 CPU core bug which affected Meteoroids title screen. Nicola Salmoria fixed an i8086 CPU core bug which broke the high score screen in Q*Bert. Bart Puype submitted a fix for potential crashes in Atari System 1 games. Sean Young fixed some more undocumented flags in the Z80 CPU core. Brad Oliver fixed Thunder Dragon bootleg ROM descrambler, which was broken in MacMAME.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-14</h2>
					<p>
					Zsolt Vasvari added cloud graphics emulation to Polaris and fixed cocktail mode support in 8080bw driver. Mathis Rosenhauer fixed the Space Encounters overlay to display correctly. Leandro Dardini submitted a fix for the Mutant Night lagging sprites problem. Phil Stroffolino further improved the Tunnel Hunt driver with help from Owen Rubin, and he added the USA version of Cosmo Gang the Puzzle to the Namco NA1/2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0104/tunh_2.png" alt="Tunnel Hunt (c) 1981 Centuri" width="240" height="256" />
						<img src="wippics/0104/tunh_3.png" alt="The gameplay of Tunnel Hunt" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-13</h2>
					<p>
					Aaron Giles added Power Play to the Leland driver, added a few clones to the itech8 driver and resubmitted the fix for analog input sensitivity problems. Nicola Salmoria fixed colors in Polaris. inside out boy fixed the flip screen effect in Space Panic and its clones.
					</p>
					<div class="wippix">
						<img src="wippics/0104/powr_1.png" alt="Power Play (c) 1985 Cinematronics" width="320" height="240" />
						<img src="wippics/0104/powr_2.png" alt="The intro of Power Play" width="320" height="240" />
						<img src="wippics/0104/powr_3.png" alt="The gameplay of Power Play" width="320" height="240" />
						<img src="wippics/0104/powr_4.png" alt="The gameplay of Power Play" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-12</h2>
					<p>
					E. Watanabe fixed Hexion sound. Zsolt Vasvari resubmitted the addition of Jungle Hunt Brazil version. David Graves added the subwoofer emulation to darius2d and fixed a few other problems.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-11</h2>
					<p>
					Zsolt Vasvari added two bootleg clones to the Galaxian driver. Nicola Salmoria fixed some compilation problems.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-10</h2>
					<p>
					Marco Cassili fixed dip switch settings in suna8 and balsente drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-09</h2>
					<p>
					Ben Bruscella fixed some MAME32 compilation bugs. Zsolt Vasvari fixed the dip switch settings in Phoenix and Pleiads.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-08</h2>
					<p>
					Mike Coates changed the way in which interrupts are processed in the ASM 68k core, which should fix a few problems. Bart Puype submitted a few fixes to occasional MAME32 crashes. Luca Elia added Magic Bubble to the Shocking driver. Olivier Galibert fixed the state saving code to work in multisession environments.
					</p>
					<div class="wippix">
						<img src="wippics/0104/magi_1.png" alt="Magic Bubble (c) 19?? Yung Sung" width="320" height="224" />
						<img src="wippics/0104/magi_2.png" alt="The intro of Magic Bubble" width="320" height="224" />
						<img src="wippics/0104/magi_3.png" alt="The gameplay of Magic Bubble" width="320" height="224" />
						<img src="wippics/0104/magi_4.png" alt="The gameplay of Magic Bubble" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-07</h2>
					<p>
					Zsolt Vasvari sent in an EPOS driver for The Glob, Super Glob and IGMO. Guru fixed dip switch settings in Yie Ar Kung Fu. Bernd Wiebelt fixed some problems in the screen flip / rotate support in the vector routines.
					</p>
					<div class="wippix">
						<img src="wippics/0104/igmo_1.png" alt="IGMO (c) 1984 EPOS" width="236" height="272" />
						<img src="wippics/0104/igmo_2.png" alt="The intro of IGMO" width="236" height="272" />
						<img src="wippics/0104/igmo_3.png" alt="The gameplay of IGMO" width="236" height="272" />
						<img src="wippics/0104/igmo_4.png" alt="The gameplay of IGMO" width="236" height="272" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-06</h2>
					<p>
					Uki wrote a driver for XX Mission. Aaron Giles fixed a bug in Hydra and Pit Fighter, which caused crashes in MAME32. Jarek Burczynski sent in drivers for Tube Panic and Roller Jammers, but background graphics and sprites are missing.
					</p>
					<div class="wippix">
						<img src="wippics/0104/xxmi_1.png" alt="XX Mission (c) 1986 UPL" width="384" height="512" />
						<img src="wippics/0104/xxmi_2.png" alt="The intro of XX Mission" width="384" height="512" />
						<img src="wippics/0104/xxmi_3.png" alt="The gameplay of XX Mission" width="384" height="512" />
						<img src="wippics/0104/xxmi_4.png" alt="The gameplay of XX Mission" width="384" height="512" />
					</div>
					<div class="wippix">
						<img src="wippics/0104/tube_1.png" alt="Tube Panic (c) 1984 Nichibutsu" width="256" height="224" />
						<img src="wippics/0104/tube_2.png" alt="The gameplay of Tube Panic" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0104/rjam_1.png" alt="Roller Jammer (c) 1984 Nichibutsu" width="256" height="224" />
						<img src="wippics/0104/rjam_2.png" alt="The gameplay of Roller Jammer" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-05</h2>
					<p>
					Luca Elia sent in a driver for Gyakuten!! Puzzle Bancho. Nicola Salmoria fixed Tempest and Quantum screen orientation and added screen flip / rotate support to the vector routines, but the changes are not yet complete.
					</p>
					<div class="wippix">
						<img src="wippics/0104/pban_1.png" alt="Gyakuten!! Puzzle Bancho (c) 1996 Fuuki" width="320" height="240" />
						<img src="wippics/0104/pban_2.png" alt="The intro of Gyakuten!! Puzzle Bancho" width="320" height="240" />
						<img src="wippics/0104/pban_3.png" alt="The intro of Gyakuten!! Puzzle Bancho" width="320" height="240" />
						<img src="wippics/0104/pban_4.png" alt="The gameplay of Gyakuten!! Puzzle Bancho" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-04</h2>
					<p>
					Quench fixed a graphics scrolling bug in Green Beret bootleg. Phil Stroffolino sent in a preliminary Tunnel Hunt driver, but a lot of work still needs to be done. M.A.S.H. resubmitted an addition of some unemulated games.
					</p>
					<div class="wippix">
						<img src="wippics/0104/tunh_1.png" alt="Tunnel Hunt (c) 1981 Centuri" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-04-03</h2>
					<p>
					Jarek Burczynski added state saving support to the YM2151 sound core. Aaron Giles fixed several compilation problems.
					</p>
				</div>

				<div class="row">
					<h2>2001-04-02</h2>
					<p>
					David Haywood added Thunder Dragon 2 to the Bombjack Twin driver. Olivier Galibert fixed a bug in the tilemap system which caused crashes under certain conditions. Jarek Burczynski added state saving support to ADPCM and OKIM6295 sound emulation cores. Nicola Salmoria fixed Lady Killer from crashing and improved performance in Mouja.
					</p>
					<div class="wippix">
						<img src="wippics/0104/tdra_1.png" alt="Thunder Dragon 2 (c) 1993 NMK" width="224" height="384" />
						<img src="wippics/0104/tdra_2.png" alt="The gameplay of Thunder Dragon 2" width="224" height="384" />
						<img src="wippics/0104/tdra_3.png" alt="The gameplay of Thunder Dragon 2" width="224" height="384" />
						<img src="wippics/0104/tdra_4.png" alt="The gameplay of Thunder Dragon 2" width="224" height="384" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2001-04-01</h2>
					<p>
					Luca Elia decrypted Hard Head 2, Star Fighter and Brick Zone, but none of the games are working due to other problems. Quench fixed a problem with the Flying Shark driver that caused the user interface to stay on the screen. Zsolt Vasvari added Survival to the Phoenix driver, but that game isn't working either due to unemulated protection.
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
