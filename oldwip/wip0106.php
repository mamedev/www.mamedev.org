<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>June 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-06-30</h2>
					<p>
					Bernd Wiebelt updated the documentation.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-29</h2>
					<p>
					Bernd Wiebelt fixed -playback command line parameter in the Win32 version.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-28</h2>
					<p>
					Olivier Galibert fixed the vector games' resolution override setting. Aaron Giles fixed the new blitters to handle single-pixel edge cases properly. Lawrence Gold fixed several GCC 3.0 warnings in the source code. Guru added several clone ROM sets to various Taito drivers. Phil Stroffolino updated the tilemap system, changing the set_transmask function to require specifying the front and back layer masks.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-27</h2>
					<p>
					Brian Troha added clone ROM sets for Knuckleheads and Lady Killer. Aaron Giles adjusted the auto resolution selection for the new blitters.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-26</h2>
					<p>
					Phil Stroffolino added internal support for 4 bpp tilemaps to the tilemap system. Nicola Salmoria fixed a small bug in the new tilemap system. Uki wrote a driver for Ikki and fixed crashes in Markham.
					</p>
					<div class="wippix">
						<img src="wippics/0106/ikki_1.png" alt="Ikki (c) 1985 Sun" width="240" height="224" />
						<img src="wippics/0106/ikki_2.png" alt="The intro of Ikki" width="240" height="224" />
						<img src="wippics/0106/ikki_3.png" alt="The gameplay of Ikki" width="240" height="224" />
						<img src="wippics/0106/ikki_4.png" alt="The gameplay of Ikki" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-25</h2>
					<p>
					Yasuhiro Ogawa added the Japanese version of Strength &amp; Skill to the driver. Yochizo updated the srmp2 driver, adding Mahjong Yuugi and Super Real Mahjong Part 3. Dave Haywood added another Emeraldia romset to the Namco NA-1 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0106/mjyu_1.png" alt="Mahjong Yuugi (c) 1990 Visco" width="384" height="240" />
						<img src="wippics/0106/mjyu_2.png" alt="The intro of Mahjong Yuugi" width="384" height="240" />
						<img src="wippics/0106/mjyu_3.png" alt="The gameplay of Mahjong Yuugi" width="384" height="240" />
						<img src="wippics/0106/mjyu_4.png" alt="The gameplay of Mahjong Yuugi" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/srmp_1.png" alt="Super Real Mahjong Part 3 (c) 1988 Seta" width="384" height="224" />
						<img src="wippics/0106/srmp_2.png" alt="The intro of Super Real Mahjong Part 3" width="384" height="224" />
						<img src="wippics/0106/srmp_3.png" alt="The gameplay of Super Real Mahjong Part 3" width="384" height="224" />
						<img src="wippics/0106/srmp_4.png" alt="The gameplay of Super Real Mahjong Part 3" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-24</h2>
					<p>
					Bernd Wiebelt sent in an update to the command line functions, cleaning up and fixing a few things. Dave Haywood added the English version of Bullfight. Uki fixed a few problems in the Pettan Pyu driver, but it still suffers from unemulated protection. Aaron Giles added RGB blitter effects to the Win32 version from AdvanceMAME. Stefan Jokisch fixed some protection related problems in Wiz. inside out boy added DIP switch settings and state saving to the Solomon's Key driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-23</h2>
					<p>
					Phil Stroffolino sent in a Namco NB-1 driver update, adding Nebulasray, Great Sluggers '94, Super World Stadium '96 and Super World Stadium '97. Nicola Salmoria added Pettan Pyu to the Strength &amp; Skill driver, but it isn't behaving correctly due to unemulated protection.
					</p>
					<div class="wippix">
						<img src="wippics/0106/nebu_1.png" alt="Nebulasray (c) 1994 Namco" width="224" height="288" />
						<img src="wippics/0106/nebu_2.png" alt="The gameplay of Nebulasray" width="224" height="288" />
						<img src="wippics/0106/nebu_3.png" alt="The gameplay of Nebulasray" width="224" height="288" />
						<img src="wippics/0106/nebu_4.png" alt="The gameplay of Nebulasray" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/gslg_1.png" alt="Great Sluggers '94 (c) 1994 Namco" width="288" height="224" />
						<img src="wippics/0106/gslg_2.png" alt="The intro of Great Sluggers '94" width="288" height="224" />
						<img src="wippics/0106/gslg_3.png" alt="The gameplay of Great Sluggers '94" width="288" height="224" />
						<img src="wippics/0106/gslg_4.png" alt="The gameplay of Great Sluggers '94" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/sws9_1.png" alt="Super World Stadium '96 (c) 1996 Namco" width="288" height="224" />
						<img src="wippics/0106/sws9_2.png" alt="Super World Stadium '97 (c) 1996 Namco" width="288" height="224" />
						<img src="wippics/0106/sws9_3.png" alt="The gameplay of Super World Stadium '96" width="288" height="224" />
						<img src="wippics/0106/sws9_4.png" alt="The gameplay of Super World Stadium '96" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/pett_1.png" alt="Pettan Pyu (c) 1984 Sun" width="240" height="224" />
						<img src="wippics/0106/pett_2.png" alt="The intro of Pettan Pyu" width="240" height="224" />
						<img src="wippics/0106/pett_3.png" alt="The gameplay of Pettan Pyu" width="240" height="224" />
						<img src="wippics/0106/pett_4.png" alt="The gameplay of Pettan Pyu" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-22</h2>
					<p>
					Aaron Giles added several MMX blitters and optimized the old ones too.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-21</h2>
					<p>
					Dave Haywood wrote a driver for WWF Wrestlefest.
					</p>
					<div class="wippix">
						<img src="wippics/0106/wwfw_1.png" alt="WWF Wrestlefest (c) 1991 Technos" width="320" height="256" />
						<img src="wippics/0106/wwfw_2.png" alt="The intro of WWF Wrestlefest" width="320" height="256" />
						<img src="wippics/0106/wwfw_3.png" alt="The gameplay of WWF Wrestlefest" width="320" height="256" />
						<img src="wippics/0106/wwfw_4.png" alt="The gameplay of WWF Wrestlefest" width="320" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-20</h2>
					<p>
					Aaron Giles optimized the new blitters a little. Uki wrote a driver for Strength &amp; Skill. Nicola Salmoria added partial sound to Cabal, but it lacks ADPCM samples. Luca Elia added generic support for the 93C46 which is the most commonly used EEPROM. Quench adjusted the way in which reading ports works in the i8035/39/48 CPU core, and he added sound chips into the China Gate driver but it still doesn't make any sound. David Graves converted the Cabal driver for tilemaps and fixed a few graphics problems.
					</p>
					<div class="wippix">
						<img src="wippics/0106/strn_1.png" alt="Strength &amp; Skill (c) 1984 Sun" width="240" height="224" />
						<img src="wippics/0106/strn_2.png" alt="The intro of Strength &amp; Skill" width="240" height="224" />
						<img src="wippics/0106/strn_3.png" alt="The gameplay of Strength &amp; Skill" width="240" height="224" />
						<img src="wippics/0106/strn_4.png" alt="The gameplay of Strength &amp; Skill" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-19</h2>
					<p>
					Ian Patterson fixed some cheat engine compilation problems. Aaron Giles added 25%, 50%, 75% scanlines thanks to the blitter effects support, and he added a new All American Football romset.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-18</h2>
					<p>
					Dave Haywood fixed an interrupt timing problem in the WWF Superstars driver. Uki wrote a driver for Markham.
					</p>
					<div class="wippix">
						<img src="wippics/0106/mark_1.png" alt="Markham (c) 1983 Sun" width="240" height="224" />
						<img src="wippics/0106/mark_2.png" alt="The intro of Markham" width="240" height="224" />
						<img src="wippics/0106/mark_3.png" alt="The gameplay of Markham" width="240" height="224" />
						<img src="wippics/0106/mark_4.png" alt="The gameplay of Markham" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-17</h2>
					<p>
					Nicola Salmoria decrypted the Seibu sound CPU, giving sound in Raiden (alt), Dynamite Duke and Toki (original). Dave Haywood added display disable support to the Sega System E driver to avoid garbled graphics in Hang-On Jr.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-16</h2>
					<p>
					David Graves and Bryan McPhail got the original Toki romsets working. Shiriru fixed sprite priority and added sprite transparency in the CPS-2 games. Ian Patterson updated the cheat engine, adding ROM area writes and support for more cheats. Phil Stroffolino sent in another Namco NB-1 driver update, adding gun controls but the support is not yet perfect. Aaron Giles rewrote the blitters in Win32 version, making it easier to add special effects. Aaron also updated the ASM 68020 core, making the itech32 games playable with it but others not yet.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-15</h2>
					<p>
					Dave Haywood wrote a driver for WWF Superstars. Gerardo Oporto added correct DIP switch settings to the Sega System E driver. Luca Elia wrote a driver for Afega games, including Sen Jin - Guardian Storm and Stagger I.
					</p>
					<div class="wippix">
						<img src="wippics/0106/wwfs_1.png" alt="WWF Superstars (c) 1989 Technos" width="256" height="256" />
						<img src="wippics/0106/wwfs_2.png" alt="The intro of WWF Superstars" width="256" height="256" />
						<img src="wippics/0106/wwfs_3.png" alt="The intro of WWF Superstars" width="256" height="256" />
						<img src="wippics/0106/wwfs_4.png" alt="The intro of WWF Superstars" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/grdn_1.png" alt="Sen Jin - Guardian Storm (c) 1998 Afega" width="224" height="256" />
						<img src="wippics/0106/grdn_2.png" alt="The intro of Sen Jin - Guardian Storm" width="224" height="256" />
						<img src="wippics/0106/grdn_3.png" alt="The gameplay of Sen Jin - Guardian Storm" width="224" height="256" />
						<img src="wippics/0106/grdn_4.png" alt="The gameplay of Sen Jin - Guardian Storm" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/stag_1.png" alt="Stagger I (c) 1998 Afega" width="224" height="256" />
						<img src="wippics/0106/stag_2.png" alt="The intro of Stagger I" width="224" height="256" />
						<img src="wippics/0106/stag_3.png" alt="The gameplay of Stagger I" width="224" height="256" />
						<img src="wippics/0106/stag_4.png" alt="The gameplay of Stagger I" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-14</h2>
					<p>
					Dave Haywood updated the Sega System E driver and Riddle of Pythagoras is now playable. Ian Patterson made Naname de Magic! work even without sound emulation being enabled. Luca Elia added Gundhara to the Seta driver.
					</p>
					<div class="wippix">
						<img src="wippics/0106/ridl_1.png" alt="Riddle of Pythagoras (c) 1986 Sega" width="192" height="256" />
						<img src="wippics/0106/ridl_2.png" alt="The gameplay of Riddle of Pythagoras" width="192" height="256" />
						<img src="wippics/0106/ridl_3.png" alt="The gameplay of Riddle of Pythagoras" width="192" height="256" />
						<img src="wippics/0106/ridl_4.png" alt="The gameplay of Riddle of Pythagoras" width="192" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/gund_1.png" alt="Gundhara (c) 1995 Banpresto" width="240" height="368" />
						<img src="wippics/0106/gund_2.png" alt="The intro of Gundhara" width="240" height="368" />
						<img src="wippics/0106/gund_3.png" alt="The intro of Gundhara" width="240" height="368" />
						<img src="wippics/0106/gund_4.png" alt="The gameplay of Gundhara" width="240" height="368" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-13</h2>
					<p>
					Bryan McPhail fixed several graphics problems in the Taito F3 driver. Phil Stroffolino sent in a preliminary Namco NB-1 driver which supports Gun Bullet, but controls aren't hooked up yet and graphics roms are corrupt. Frank Palazzolo optimized the discrete sound system a little.
					</p>
					<div class="wippix">
						<img src="wippics/0106/gunb_1.png" alt="Gun Bullet (c) 1994 Namco" width="288" height="224" />
						<img src="wippics/0106/gunb_2.png" alt="The intro of Gun Bullet" width="288" height="224" />
						<img src="wippics/0106/gunb_3.png" alt="The intro of Gun Bullet" width="288" height="224" />
						<img src="wippics/0106/gunb_4.png" alt="The gameplay of Gun Bullet" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-12</h2>
					<p>
					Dave Haywood wrote a Sega System E driver, Hang-On Jr. and Transformer are playable and also have sound. Uki fixed some problems in the Raiders 5 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0106/hang_1.png" alt="Hang-On Jr. (c) 1995 Sega" width="256" height="192" />
						<img src="wippics/0106/hang_2.png" alt="The intro of Hang-On Jr." width="256" height="192" />
						<img src="wippics/0106/hang_3.png" alt="The intro of Hang-On Jr." width="256" height="192" />
						<img src="wippics/0106/hang_4.png" alt="The gameplay of Hang-On Jr." width="256" height="192" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/tran_1.png" alt="Transformer (c) 1986 Sega" width="256" height="192" />
						<img src="wippics/0106/tran_2.png" alt="The gameplay of Transformer" width="256" height="192" />
						<img src="wippics/0106/tran_3.png" alt="The gameplay of Transformer" width="256" height="192" />
						<img src="wippics/0106/tran_4.png" alt="The gameplay of Transformer" width="256" height="192" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-11</h2>
					<p>
					Mark McDougall worked on adding Namco Classics Vol.2, but the driver isn't complete yet. Luca Elia added another version of Blomby Car ROM set.
					</p>
					<div class="wippix">
						<img src="wippics/0106/ncv2_1.png" alt="Namco Classics Vol.2 (c) 1996 Namco" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-10</h2>
					<p>
					Luca Elia wrote a driver for Multi Champ.
					</p>
					<div class="wippix">
						<img src="wippics/0106/mult_1.png" alt="Multi Champ (c) 1998 ESD" width="320" height="240" />
						<img src="wippics/0106/mult_2.png" alt="The intro of Multi Champ" width="320" height="240" />
						<img src="wippics/0106/mult_3.png" alt="The intro of Multi Champ" width="320" height="240" />
						<img src="wippics/0106/mult_4.png" alt="The gameplay of Multi Champ" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-09</h2>
					<p>
					Stefan Jokisch fixed some problems in the Volfied driver. Uki improved the UPL drivers a bit further.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-08</h2>
					<p>
					Uki wrote a driver for Raiders 5 and fixed the palette animation and other graphical problems in Ninja Kid. Mark McDougall sent in his Namco Classics Vol.1 driver, which lacks some graphical effects and sound. Jarek Burczynski, David Graves and Gerardo Oporto sent a new Taito B system driver, improving the graphics emulation for example in Ryu Jin.
					</p>
					<div class="wippix">
						<img src="wippics/0106/raid_1.png" alt="Raiders 5 (c) 1985 UPL" width="256" height="192" />
						<img src="wippics/0106/raid_2.png" alt="The intro of Raiders 5" width="256" height="192" />
						<img src="wippics/0106/raid_3.png" alt="The gameplay of Raiders 5" width="256" height="192" />
						<img src="wippics/0106/raid_4.png" alt="The gameplay of Raiders 5" width="256" height="192" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/ncv1_1.png" alt="Namco Classics Vol.1 (c) 1995 Namco" width="224" height="288" />
						<img src="wippics/0106/ncv1_2.png" alt="The intro of Namco Classics Vol.1" width="224" height="288" />
						<img src="wippics/0106/ncv1_3.png" alt="The gameplay of Namco Classics Vol.1" width="224" height="288" />
						<img src="wippics/0106/ncv1_4.png" alt="The gameplay of Namco Classics Vol.1" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-07</h2>
					<p>
					Nicola Salmoria added Premier Soccer but it has incomplete graphics emulation. Bryan McPhail and David Graves fixed and cleaned up the Toki driver. David Graves also added save states, coin lockouts and counters to the Superman driver.
					</p>
					<div class="wippix">
						<img src="wippics/0106/prmr_1.png" alt="Premier Soccer (c) 1993 Konami" width="288" height="224" />
						<img src="wippics/0106/prmr_2.png" alt="The intro of Premier Soccer" width="288" height="224" />
						<img src="wippics/0106/prmr_3.png" alt="The gameplay of Premier Soccer" width="288" height="224" />
						<img src="wippics/0106/prmr_4.png" alt="The gameplay of Premier Soccer" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-06</h2>
					<p>
					Luca Elia sent in a driver for Unico games, including Burglar X and Zero Point, and Nicola Salmoria fixed the light gun emulation in it. Aaron Giles fixed a debugger bug which caused the game window not to update properly. Zsolt Vasvari added Omega to the Galaxian driver thanks to the help of Phil Murray.
					</p>
					<div class="wippix">
						<img src="wippics/0106/burg_1.png" alt="Burglar X (c) 1997 Unico" width="384" height="224" />
						<img src="wippics/0106/burg_2.png" alt="The intro of Burglar X" width="384" height="224" />
						<img src="wippics/0106/burg_3.png" alt="The gameplay of Burglar X" width="384" height="224" />
						<img src="wippics/0106/burg_4.png" alt="The gameplay of Burglar X" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/zero_1.png" alt="Zero Point (c) 1998 Unico" width="384" height="224" />
						<img src="wippics/0106/zero_2.png" alt="The intro of Zero Point" width="384" height="224" />
						<img src="wippics/0106/zero_3.png" alt="The intro of Zero Point" width="384" height="224" />
						<img src="wippics/0106/zero_4.png" alt="The gameplay of Zero Point" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0106/omeg_1.png" alt="Omega (c) 19?? ?????" width="224" height="256" />
						<img src="wippics/0106/omeg_2.png" alt="The intro of Omega" width="224" height="256" />
						<img src="wippics/0106/omeg_3.png" alt="The gameplay of Omega" width="224" height="256" />
						<img src="wippics/0106/omeg_4.png" alt="The gameplay of Omega" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-05</h2>
					<p>
					Dave Haywood added some alternative versions of the DECO Cassette system games to the decocass driver. Aaron Giles cleaned up and fixed the Arabian driver. Stefan Jokisch sent in a driver for Volfied, which has incorrect sprite colors for enemy sprites due to the C-Chip protection, but the game is otherwise playable.
					</p>
					<div class="wippix">
						<img src="wippics/0106/volf_1.png" alt="Volfied (c) 1989 Taito" width="256" height="320" />
						<img src="wippics/0106/volf_2.png" alt="The intro of Volfied" width="256" height="320" />
						<img src="wippics/0106/volf_3.png" alt="The gameplay of Volfied" width="256" height="320" />
						<img src="wippics/0106/volf_4.png" alt="The gameplay of Volfied" width="256" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-04</h2>
					<p>
					Phil Stroffolino added sound to Avengers, while not perfect, it should at least play the correct sounds.
					</p>
				</div>

				<div class="row">
					<h2>2001-06-03</h2>
					<p>
					Phil Stroffolino added protection support to Avengers, so it is now playable. Ernesto Corvi sent in a driver for Time Limit, but sprite colors are wrong. Andrea Mazzoleni updated the -listinfo system, adding some extra information.
					</p>
					<div class="wippix">
						<img src="wippics/0106/time_1.png" alt="Time Limit (c) 1983 Chuo" width="224" height="256" />
						<img src="wippics/0106/time_2.png" alt="The intro of Time Limit" width="224" height="256" />
						<img src="wippics/0106/time_3.png" alt="The gameplay of Time Limit" width="224" height="256" />
						<img src="wippics/0106/time_4.png" alt="The gameplay of Time Limit" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-06-02</h2>
					<p>
					Aaron Giles added Slither to the Qix driver and fixed a multitude of problems in the other games. Bryan McPhail fixed yet another 68020 core bug which made Under Fire playable.
					</p>
					<div class="wippix">
						<img src="wippics/0106/slit_1.png" alt="Slither (c) 1982 Century" width="256" height="256" />
						<img src="wippics/0106/slit_2.png" alt="The gameplay of Slither" width="256" height="256" />
						<img src="wippics/0106/slit_3.png" alt="The gameplay of Slither" width="256" height="256" />
						<img src="wippics/0106/slit_4.png" alt="The gameplay of Slither" width="256" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2001-06-01</h2>
					<p>
					Mike Haaland added a Donkey Kong Jr. clone called Junior King. Nicola Salmoria fixed CPS-2 games from crashing when resetting them. Zsolt Vasvari fixed the Galaxian / Scramble starfield graphics emulation. Luca Elia added Extreme Downhill to the Seta driver.
					</p>
					<div class="wippix">
						<img src="wippics/0106/extd_1.png" alt="Extreme Downhill (c) 1995 Sammy" width="320" height="240" />
						<img src="wippics/0106/extd_2.png" alt="The intro of Extreme Downhill" width="320" height="240" />
						<img src="wippics/0106/extd_3.png" alt="The intro of Extreme Downhill" width="320" height="240" />
						<img src="wippics/0106/extd_4.png" alt="The gameplay of Extreme Downhill" width="320" height="240" />
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
