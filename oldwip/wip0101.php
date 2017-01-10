<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>January 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-01-31</h2>
					<p>
					Marco Cassili added the dip switch settings to the Roller Aces driver. insideoutboy added the target crosshair to Operation Thunderbolt. Gerardo Oporto fixed dip switch settings in the Taito L system driver. J&uuml;rgen Buchm&uuml;ller further fixed the i8x41 core and hooked some parts of the DECO cassette system to the Burger Time driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-01-30</h2>
					<p>
					David Widel wrote a Shoot the Bull driver. David Graves sent in an update to the Taito multiscreen games, fixing the graphics in the right side of Warrior Blade screen. Ernesto Corvi added Metroid to the PlayChoice 10 driver. Jim Hernandez adjusted the X-men sound frequency to be more correct. John Bennett added a fixed Strider sound ROM to the CPS-1 driver, which gets rid of repeating music in some stages.
					</p>
					<div class="wippix">
						<img src="wippics/0101/shoo_1.png" alt="Shoot the Bull (c) 1985 Bally Midway" width="224" height="288" />
						<img src="wippics/0101/shoo_2.png" alt="The gameplay of Shoot the Bull" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/pc_m_1.png" alt="PlayChoice-10: Metroid (c) 1986 Nintendo" width="256" height="480" />
						<img src="wippics/0101/pc_m_2.png" alt="The gameplay of PlayChoice-10: Metroid" width="256" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-29</h2>
					<p>
					Olivier Galibert wrote 054539 sound chip emulation (thanks to CAB), and now Xexex and X-men have sound. Phil Stroffolino sent in the playable Looping driver, with correct graphics and colors, but it lacks one of the nicest features of the game - speech and music. The COP420 microcontroller in fact helps with the CPU communication, so it is probably necessary for sound emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0101/loop_1.png" alt="Looping (c) 1982 Venture Line" width="224" height="256" />
						<img src="wippics/0101/loop_2.png" alt="The intro of Looping" width="224" height="256" />
						<img src="wippics/0101/loop_3.png" alt="The gameplay of Looping" width="224" height="256" />
						<img src="wippics/0101/loop_4.png" alt="The gameplay of Looping" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/skyb_1.png" alt="Sky Bumper (c) 1982 Venture Line" width="224" height="256" />
						<img src="wippics/0101/skyb_2.png" alt="The intro of Sky Bumper" width="224" height="256" />
						<img src="wippics/0101/skyb_3.png" alt="The gameplay of Sky Bumper" width="224" height="256" />
						<img src="wippics/0101/skyb_4.png" alt="The gameplay of Sky Bumper" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-28</h2>
					<p>
					Phil Stroffolino made a big step forward with the Looping driver. While the game is definitely not playable yet, at least the title screen shows up. Karl Stenerud sent in an update to the C 68k core, containing the beginnings of 68000/010 and 68020 separation. Nicola Salmoria fixed Xexex crashes on startup.
					</p>
					<div class="wippix">
						<img src="wippics/0101/looping.png" alt="Looping (c) 1982 Venture Line" width="256" height="250" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-27</h2>
					<p>
					Paul Leaman added Vampire: The Night Warriors to the CPS-2 driver, and like Vampire Savior, it will not work before some important 68k core changes are made. Bryan McPhail sent in a Taito F3 sound update, with the sound cutting out bug fixed and stereo sound implemented (it was mono before). Ville Laitinen submitted the Roller Aces driver with sound emulation, though the sound may not be perfect. David Graves fixed the input port settings in the Slap Shot driver and now the single player game works. Phil Stroffolino added VS Gong Fight to the Taito Samurai driver, but it may have some bad colors. Mike Coates separated the 68000/010 and 68020 cores so that the ASM 68k core can be used with the C 68020 core, giving a nice speed boost to all the 68k games. Aaron Giles added another ROM set to the Hard Drivin' driver but it still suffers from a few small quirks.
					</p>
					<div class="wippix">
						<img src="wippics/0101/vsgn_1.png" alt="VS Gong Fight (c) 1984 Kaneko" width="240" height="256" />
						<img src="wippics/0101/vsgn_2.png" alt="The intro of VS Gong Fight" width="240" height="256" />
						<img src="wippics/0101/vsgn_3.png" alt="The gameplay of VS Gong Fight" width="240" height="256" />
						<img src="wippics/0101/vsgn_4.png" alt="The gameplay of VS Gong Fight" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-26</h2>
					<p>
					Paul Leaman added Vampire Savior to the CPS-2 driver, but it needs some 68k core changes to get it working properly.
					</p>
				</div>

				<div class="row">
					<h2>2001-01-25</h2>
					<p>
					Takahiro Nogi sent in a huge update to the Nichibutsu Mahjong driver. Several bugs and graphical errors have been corrected, and the following games are added: Pastel Gal, Mahjong Nanpa Story (old version), Mahjong Final Bunny, Mahjong Hyouban Musume, Mahjong Uranai Densetsu, Mahjong Koi no Magic Potion, Mahjong Pachinko Monogatari, Medal Mahjong Janjan Baribari, Mahjong Bakuhatsu Junjouden, Mahjong Gal 10-renpatsu, Mahjong La Man, Mahjong Keibaou, Medal Mahjong Pachi-Slot Tengoku, Mahjong Sailor Wars, Mahjong Sailor Wars-R, Bishoujo Janshi Pretty Sailor 18-kin, Bishoujo Janshi Pretty Sailor 2, Disco Mahjong Otachidai no Okite, Nekketsu Grand-Prix Gal, Mahjong Gottsu ee-kanji, Mahjong Circuit no Mehyou, Medal Mahjong Circuit no Mehyou, Mahjong Koi Uranai, Mahjong Scout Man, Imekura Mahjong, Mahjong Erotica Golf and Niyanpai.
					</p>
					<div class="wippix">
						<img src="wippics/0101/pastelgl.png" alt="Pastel Gal (c) 1985 Nichibutsu" width="256" height="224" />
						<img src="wippics/0101/mjnanpaa.png" alt="Mahjong Nanpa Story (old version) (c) 1989 BROOKS" width="512" height="480" />
						<img src="wippics/0101/finalbny.png" alt="Mahjong Final Bunny (c) 1991 Nichibutsu" width="638" height="480" />
						<img src="wippics/0101/hyouban.png" alt="Mahjong Hyouban Musume (c) 1989 Nichibutsu/T.R.TEC" width="638" height="480" />
						<img src="wippics/0101/mjuraden.png" alt="Mahjong Uranai Densetsu (c) 1992 Nichibutsu/Yubis" width="640" height="480" />
						<img src="wippics/0101/koinomp.png" alt="Mahjong Koi no Magic Potion (c) 1992 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/patimono.png" alt="Mahjong Pachinko Monogatari (c) 1992 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/mjanbari.png" alt="Medal Mahjong Janjan Baribari (c) 1992 Nichibutsu/Yubis/AV JAPAN" width="640" height="480" />
						<img src="wippics/0101/gal10ren.png" alt="Mahjong Gal 10-renpatsu (c) 1993 FUJIC" width="640" height="480" />
						<img src="wippics/0101/mjlaman.png" alt="Mahjong La Man (c) 1993 Nichibutsu/AV JAPAN" width="640" height="480" />
						<img src="wippics/0101/mkeibaou.png" alt="Mahjong Keibaou (c) 1993 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/pachiten.png" alt="Medal Mahjong Pachi-Slot Tengoku (c) 1993 Nichibutsu/MIKI SYOUJI/AV JAPAN" width="640" height="480" />
						<img src="wippics/0101/sailorws.png" alt="Mahjong Sailor Wars (c) 1993 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/sailorwr.png" alt="Mahjong Sailor Wars-R (c) 1993 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/psailor1.png" alt="Bishoujo Janshi Pretty Sailor 18-kin (c) 1994 SPHINX" width="640" height="480" />
						<img src="wippics/0101/psailor2.png" alt="Bishoujo Janshi Pretty Sailor 2 (c) 1994 SPHINX" width="640" height="480" />
						<img src="wippics/0101/otatidai.png" alt="Disco Mahjong Otachidai no Okite (c) 1995 SPHINX" width="640" height="480" />
						<img src="wippics/0101/ngpgal.png" alt="Nekketsu Grand-Prix Gal (c) 1991 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/mjgottsu.png" alt="Mahjong Gottsu ee-kanji (c) 1991 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/bakuhatu.png" alt="Mahjong Bakuhatsu Junjouden (c) 1991 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/cmehyou.png" alt="Mahjong Circuit no Mehyou (c) 1992 Nichibutsu/Kawakusu" width="640" height="480" />
						<img src="wippics/0101/mmehyou.png" alt="Medal Mahjong Circuit no Mehyou (c) 1992 Nichibutsu/Kawakusu" width="640" height="480" />
						<img src="wippics/0101/mjkoiura.png" alt="Mahjong Koi Uranai (c) 1992 Nichibutsu" width="640" height="480" />
						<img src="wippics/0101/mscoutm.png" alt="Mahjong Scout Man (c) 1994 SPHINX/AV JAPAN" width="640" height="480" />
						<img src="wippics/0101/imekura.png" alt="Imekura Mahjong (c) 1994 SPHINX/AV JAPAN" width="640" height="480" />
						<img src="wippics/0101/mjegolf.png" alt="Mahjong Erotica Golf (c) 1994 FUJIC/AV JAPAN" width="640" height="480" />
						<img src="wippics/0101/niyanpai.png" alt="Niyanpai (c) 1996 Nichibutsu" width="640" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-24</h2>
					<p>
					Brad Oliver fixed some compilation bugs which affected the Mac port. Phil Stroffolino added Chinese Hero to the preliminary Shanghai Kid driver, but unlike Shanghai Kid, it doesn't have protection so it works perfectly.
					</p>
					<div class="wippix">
						<img src="wippics/0101/chin_1.png" alt="Chinese Hero (c) 1984 Taiyo" width="224" height="288" />
						<img src="wippics/0101/chin_2.png" alt="The intro of Chinese Hero" width="224" height="288" />
						<img src="wippics/0101/chin_3.png" alt="The gameplay of Chinese Hero" width="224" height="288" />
						<img src="wippics/0101/chin_4.png" alt="The gameplay of Chinese Hero" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-23</h2>
					<p>
					M.A.S.H. added clone romsets to Targ and Star Fire drivers, added Battle Cruiser M12 to the Marine Boy driver and he added Alpha Fighter / Head On to the VIC Dual driver.
					</p>
					<div class="wippix">
						<img src="wippics/0101/bcru_1.png" alt="Battle Cruiser M12 (c) 1983 Sigma" width="224" height="256" />
						<img src="wippics/0101/bcru_2.png" alt="The gameplay of Battle Cruiser" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/alph_1.png" alt="Alpha Fighter / Head On (c) 19?? Data East" width="224" height="256" />
						<img src="wippics/0101/alph_2.png" alt="The gameplay of Alpha Fighter / Head On" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-22</h2>
					<p>
					Bryan McPhail added preliminary linescroll / raster effect support to the Taito F2 video system, but it's still not entirely correct.
					</p>
					<div class="wippix">
						<img src="wippics/0101/meta_1.png" alt="Wobbly Taito logo" width="320" height="224" />
						<img src="wippics/0101/meta_2.png" alt="Wobbly Metal Black title screen" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-21</h2>
					<p>
					Nicola Salmoria added accurate sprite multiplexing emulation to Time Pilot and Gyruss.
					</p>
				</div>

				<div class="row">
					<h2>2001-01-20</h2>
					<p>
					Stig Remnes and Valerio Cannone fixed -listinfo to list the PC10 and CVS resources. Ville Laitinen has been working on a Roller Aces driver and here's a glimpse of it. It lacks sound though and colors may not be perfect. David Haywood added yet another Western Express clone romset.
					</p>
					<div class="wippix">
						<img src="wippics/0101/roll_1.png" alt="Roller Aces (c) 1983 Williams" width="225" height="249" />
						<img src="wippics/0101/roll_2.png" alt="The intro of Roller Aces" width="225" height="249" />
						<img src="wippics/0101/roll_3.png" alt="The gameplay of Roller Aces" width="225" height="249" />
						<img src="wippics/0101/roll_4.png" alt="The gameplay of Roller Aces" width="225" height="249" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-19</h2>
					<p>
					David Haywood updated the Cave driver, adding default EEPROM support so that the games are pre-set to factory default settings. Phil Stroffolino re-submitted the Grand Champion driver, working almost perfect, and Namco NA1/2 drivers, with Emeralda, Tinkle Pit and Cosmo Gang the Puzzle as completely playable games. The rest run through the attract mode but suffer from unmapped input ports.
					</p>
				</div>

				<div class="row">
					<h2>2001-01-18</h2>
					<p>
					lax fixed the Ninja Kid sound frequency. David Graves added proper sprite flipping support to Top Speed, fixing the round tunnel entrance graphics, and he added NVRAM emulation to Slap Shot. David Haywood re-submitted the Western Express clone romset support. Guru re-submitted the Wolf Unit driver with NBA Hangtime added. Nicola Salmoria fixed the colors in Funny Mouse.
					</p>
				</div>

				<div class="row">
					<h2>2001-01-17</h2>
					<p>
					Luca Elia sent in an update to the Metro driver, adding The Karate Tournament, Poitto!, Toride II Adauchi Gaiden and Pururun. Bernd Wiebelt fixed a bug causing static in the discrete sound functions. Nicola Salmoria fully fixed Wiz colors.
					</p>
					<div class="wippix">
						<img src="wippics/0101/kara_1.png" alt="The Karate Tournament (c) 1992 Mitchell" width="320" height="240" />
						<img src="wippics/0101/kara_2.png" alt="The intro of The Karate Tournament" width="320" height="240" />
						<img src="wippics/0101/kara_3.png" alt="The gameplay of The Karate Tournament" width="320" height="240" />
						<img src="wippics/0101/kara_4.png" alt="The gameplay of The Karate Tournament" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/poit_1.png" alt="Poitto! (c) 1993 Metro" width="360" height="224" />
						<img src="wippics/0101/poit_2.png" alt="The intro of Poitto!" width="360" height="224" />
						<img src="wippics/0101/poit_3.png" alt="The gameplay of Poitto!" width="360" height="224" />
						<img src="wippics/0101/poit_4.png" alt="The gameplay of Poitto!" width="360" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/tori_1.png" alt="Toride II Adauchi Gaiden (c) 1994 Metro" width="320" height="224" />
						<img src="wippics/0101/tori_2.png" alt="The intro of Toride II Adauchi Gaiden" width="320" height="224" />
						<img src="wippics/0101/tori_3.png" alt="The intro of Toride II Adauchi Gaiden" width="320" height="224" />
						<img src="wippics/0101/tori_4.png" alt="The gameplay of Toride II Adauchi Gaiden" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/puru_1.png" alt="Pururun (c) 1995 Metro" width="320" height="224" />
						<img src="wippics/0101/puru_2.png" alt="The intro of Pururun" width="320" height="224" />
						<img src="wippics/0101/puru_3.png" alt="The gameplay of Pururun" width="320" height="224" />
						<img src="wippics/0101/puru_4.png" alt="The gameplay of Pururun" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-16</h2>
					<p>
					Aaron Giles fixed a small interpolation bug in the ES5505 core. Nicola Salmoria improved the colors in Wiz. Bryan McPhail fixed some memory corrupting bugs in the Taito F3 driver and added Dan-Ku-Ga. Bryan McPhail also fixed the sprite graphics decoding in Slap Shot. Howie Cohen sent in an update to the VSNES driver, adding Platoon. Aaron Giles fixed some crashes in the Taito F3 driver and Nicola Salmoria fixed crashes in the Slap Shot driver.
					</p>
					<div class="wippix">
						<img src="wippics/0101/plat_1.png" alt="Platoon (c) 1987 Ocean" width="256" height="240" />
						<img src="wippics/0101/plat_2.png" alt="The gameplay of Platoon" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/dank_1.png" alt="Dan-Ku-Ga (c) 1994 Taito" width="320" height="232" />
						<img src="wippics/0101/dank_2.png" alt="The intro of Dan-Ku-Ga" width="320" height="232" />
						<img src="wippics/0101/dank_3.png" alt="The intro of Dan-Ku-Ga" width="320" height="232" />
						<img src="wippics/0101/dank_4.png" alt="The gameplay of Dan-Ku-Ga" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/scfi_1.png" alt="Super Cup Finals (c) 1993 Taito" width="320" height="232" />
						<img src="wippics/0101/ht93_1.png" alt="Hat Trick Hero '93 (c) 1992 Taito" width="320" height="232" />
						<img src="wippics/0101/scfi_2.png" alt="The intro of Super Cup Finals" width="320" height="232" />
						<img src="wippics/0101/scfi_3.png" alt="The gameplay of Super Cup Finals" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-15</h2>
					<p>
					Bryan McPhail finally submitted his Taito F3 driver, which is not graphically perfect and crashes hard sometimes but has complete ES5505 sound emulation thanks to Aaron Giles, Ian Schmidt and R. Belmont. Not all games are working due to 68020 core bugs, but these are: Ring Rage, Arabian Magic, Riding Fight, Grid Seeker: Project Stormhammer, Gunlock / Rayforce, Super Cup Finals / Hat Trick Hero '93, Top Ranking Stars, Lightbringer, Kaiser Knuckle / Global Champion, Bubble Bobble 2 / Bubble Symphony, Space Invaders DX, Power Goal / Hat Trick Hero '95, Quiz Theater - 3tsu no Monogatari, Akkanvader, Moriguchi Hiroko no Quiz de Hyuuhyuu, Puzzle Bobble 2 / Bust-A-Move Again, Puzzle Bobble 2X, Kyukyoku Tiger 2, Bubble Memories, Cleopatra Fortune, Puzzle Bobble 3, Arkanoid Returns, Kirameki Star Road, Puchi Carat and Pop 'N Pop.
					</p>
					<div class="wippix">
						<img src="wippics/0101/ring_1.png" alt="Ring Rage (c) 1992 Taito" width="320" height="232" />
						<img src="wippics/0101/ring_2.png" alt="The intro of Ring Rage" width="320" height="232" />
						<img src="wippics/0101/ring_3.png" alt="The intro of Ring Rage" width="320" height="232" />
						<img src="wippics/0101/ring_4.png" alt="The gameplay of Ring Rage" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/arab_1.png" alt="Arabian Magic (c) 1992 Taito" width="320" height="232" />
						<img src="wippics/0101/arab_2.png" alt="The intro of Arabian Magic" width="320" height="232" />
						<img src="wippics/0101/arab_3.png" alt="The gameplay of Arabian Magic" width="320" height="232" />
						<img src="wippics/0101/arab_4.png" alt="The gameplay of Arabian Magic" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/ridi_1.png" alt="Riding Fight (c) 1992 Taito" width="320" height="232" />
						<img src="wippics/0101/ridi_2.png" alt="The intro of Riding Fight" width="320" height="232" />
						<img src="wippics/0101/ridi_3.png" alt="The gameplay of Riding Fight" width="320" height="232" />
						<img src="wippics/0101/ridi_4.png" alt="The gameplay of Riding Fight" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/gsee_1.png" alt="Grid Seeker: Project Stormhammer (c) 1992 Taito" width="232" height="320" />
						<img src="wippics/0101/gsee_2.png" alt="The intro of Grid Seeker: Project Stormhammer" width="232" height="320" />
						<img src="wippics/0101/gsee_3.png" alt="The intro of Grid Seeker: Project Stormhammer" width="232" height="320" />
						<img src="wippics/0101/gsee_4.png" alt="The gameplay of Grid Seeker: Project Stormhammer" width="232" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/gunl_1.png" alt="Gunlock (c) 1993 Taito" width="232" height="320" />
						<img src="wippics/0101/rayf_1.png" alt="Rayforce (c) 1993 Taito" width="232" height="320" />
						<img src="wippics/0101/gunl_2.png" alt="The gameplay of Gunlock" width="232" height="320" />
						<img src="wippics/0101/gunl_3.png" alt="The gameplay of Gunlock" width="232" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/trst_1.png" alt="Top Ranking Stars (c) 1993 Taito" width="320" height="232" />
						<img src="wippics/0101/trst_2.png" alt="The intro of Top Ranking Stars" width="320" height="232" />
						<img src="wippics/0101/trst_3.png" alt="The intro of Top Ranking Stars" width="320" height="232" />
						<img src="wippics/0101/trst_4.png" alt="The gameplay of Top Ranking Stars" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/ligh_1.png" alt="Lightbringer (c) 1993 Taito" width="320" height="232" />
						<img src="wippics/0101/ligh_2.png" alt="The intro of Lightbringer" width="320" height="232" />
						<img src="wippics/0101/ligh_3.png" alt="The gameplay of Lightbringer" width="320" height="232" />
						<img src="wippics/0101/ligh_4.png" alt="The gameplay of Lightbringer" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/kais_1.png" alt="Kaiser Knuckle (c) 1994 Taito" width="320" height="232" />
						<img src="wippics/0101/kais_2.png" alt="The intro of Kaiser Knuckle" width="320" height="232" />
						<img src="wippics/0101/kais_3.png" alt="The gameplay of Kaiser Knuckle" width="320" height="232" />
						<img src="wippics/0101/kais_4.png" alt="The gameplay of Kaiser Knuckle" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/bubs_1.png" alt="Bubble Symphony (c) 1994 Taito" width="320" height="232" />
						<img src="wippics/0101/bubl_1.png" alt="Bubble Bobble 2 (c) 1994 Taito" width="320" height="232" />
						<img src="wippics/0101/bubs_2.png" alt="The gameplay of Bubble Symphony" width="320" height="232" />
						<img src="wippics/0101/bubs_3.png" alt="The gameplay of Bubble Symphony" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/spci_1.png" alt="Space Invaders DX (c) 1994 Taito" width="320" height="232" />
						<img src="wippics/0101/spci_2.png" alt="The intro of Space Invaders DX" width="320" height="232" />
						<img src="wippics/0101/spci_3.png" alt="The intro of Space Invaders DX" width="320" height="232" />
						<img src="wippics/0101/spci_4.png" alt="The gameplay of Space Invaders DX" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/pwrg_1.png" alt="Power Goal (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0101/hthe_1.png" alt="Hat Trick Hero '95 (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0101/pwrg_2.png" alt="The gameplay of Power Goal" width="320" height="232" />
						<img src="wippics/0101/pwrg_3.png" alt="The gameplay of Power Goal" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/qthe_1.png" alt="Quiz Theater - 3tsu no Monogatari (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0101/qthe_2.png" alt="The gameplay of Quiz Theater - 3tsu no Monogatari" width="320" height="232" />
						<img src="wippics/0101/qthe_3.png" alt="The gameplay of Quiz Theater - 3tsu no Monogatari" width="320" height="232" />
						<img src="wippics/0101/qthe_4.png" alt="The gameplay of Quiz Theater - 3tsu no Monogatari" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/akka_1.png" alt="Akkanvader (c) 1995 Taito" width="232" height="320" />
						<img src="wippics/0101/akka_2.png" alt="The intro of Akkanvader" width="232" height="320" />
						<img src="wippics/0101/akka_3.png" alt="The gameplay of Akkanvader" width="232" height="320" />
						<img src="wippics/0101/akka_4.png" alt="The gameplay of Akkanvader" width="232" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/quiz_1.png" alt="Moriguchi Hiroko no Quiz de Hyuuhyuu (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0101/quiz_2.png" alt="The intro of Moriguchi Hiroko no Quiz de Hyuuhyuu" width="320" height="232" />
						<img src="wippics/0101/quiz_3.png" alt="The intro of Moriguchi Hiroko no Quiz de Hyuuhyuu" width="320" height="232" />
						<img src="wippics/0101/quiz_4.png" alt="The gameplay of Moriguchi Hiroko no Quiz de Hyuuhyuu" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/pbo2_1.png" alt="Puzzle Bobble 2 (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0101/pb2x_1.png" alt="Puzzle Bobble 2X (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0101/pbo2_2.png" alt="The gameplay of Puzzle Bobble 2" width="320" height="232" />
						<img src="wippics/0101/pbo2_3.png" alt="The gameplay of Puzzle Bobble 2" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/ktig_1.png" alt="Kyukyoku Tiger 2 (c) 1995 Taito" width="232" height="320" />
						<img src="wippics/0101/ktig_2.png" alt="The intro of Kyukyoku Tiger 2" width="232" height="320" />
						<img src="wippics/0101/ktig_3.png" alt="The gameplay of Kyukyoku Tiger 2" width="232" height="320" />
						<img src="wippics/0101/ktig_4.png" alt="The gameplay of Kyukyoku Tiger 2" width="232" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/bubb_1.png" alt="Bubble Memories - The Story Of Bubble Bobble 3 (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0101/bubb_2.png" alt="The intro of Bubble Memories - The Story Of Bubble Bobble 3" width="320" height="232" />
						<img src="wippics/0101/bubb_3.png" alt="The intro of Bubble Memories - The Story Of Bubble Bobble 3" width="320" height="232" />
						<img src="wippics/0101/bubb_4.png" alt="The gameplay of Bubble Memories - The Story Of Bubble Bobble 3" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/cleo_1.png" alt="Cleopatra Fortune (c) 1996 Taito" width="320" height="232" />
						<img src="wippics/0101/cleo_2.png" alt="The intro of Cleopatra Fortune" width="320" height="232" />
						<img src="wippics/0101/cleo_3.png" alt="The gameplay of Cleopatra Fortune" width="320" height="232" />
						<img src="wippics/0101/cleo_4.png" alt="The gameplay of Cleopatra Fortune" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/pbob_1.png" alt="Puzzle Bobble 3 (c) 1996 Taito" width="320" height="232" />
						<img src="wippics/0101/pbob_2.png" alt="The intro of Puzzle Bobble 3" width="320" height="232" />
						<img src="wippics/0101/pbob_3.png" alt="The gameplay of Puzzle Bobble 3" width="320" height="232" />
						<img src="wippics/0101/pbob_4.png" alt="The gameplay of Puzzle Bobble 3" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/arkr_1.png" alt="Arkanoid Returns (c) 1997 Taito" width="320" height="232" />
						<img src="wippics/0101/arkr_2.png" alt="The intro of Arkanoid Returns" width="320" height="232" />
						<img src="wippics/0101/arkr_3.png" alt="The gameplay of Arkanoid Returns" width="320" height="232" />
						<img src="wippics/0101/arkr_4.png" alt="The gameplay of Arkanoid Returns" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/kira_1.png" alt="Kirameki Star Road (c) 1997 Taito" width="320" height="232" />
						<img src="wippics/0101/kira_2.png" alt="The intro of Kirameki Star Road" width="320" height="232" />
						<img src="wippics/0101/kira_3.png" alt="The intro of Kirameki Star Road" width="320" height="232" />
						<img src="wippics/0101/kira_4.png" alt="The gameplay of Kirameki Star Road" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/puch_1.png" alt="Puchi Carat (c) 1997 Taito" width="320" height="232" />
						<img src="wippics/0101/puch_2.png" alt="The intro of Puchi Carat" width="320" height="232" />
						<img src="wippics/0101/puch_3.png" alt="The intro of Puchi Carat" width="320" height="232" />
						<img src="wippics/0101/puch_4.png" alt="The gameplay of Puchi Carat" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/popn_1.png" alt="Pop 'N Pop (c) 1997 Taito" width="320" height="232" />
						<img src="wippics/0101/popn_2.png" alt="The intro of Pop 'N Pop" width="320" height="232" />
						<img src="wippics/0101/popn_3.png" alt="The gameplay of Pop 'N Pop" width="320" height="232" />
						<img src="wippics/0101/popn_4.png" alt="The gameplay of Pop 'N Pop" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-14</h2>
					<p>
					David Graves added double width tilemap support to the TC0480SCP chip emulation and wrote a Slap Shot driver but it has incomplete sprite graphics decoding so some graphical errors remain.
					</p>
					<div class="wippix">
						<img src="wippics/0101/slap_1.png" alt="Slap Shot (c) 1994 Taito" width="320" height="240" />
						<img src="wippics/0101/slap_2.png" alt="The intro of Slap Shot" width="320" height="240" />
						<img src="wippics/0101/slap_3.png" alt="The gameplay of Slap Shot" width="320" height="240" />
						<img src="wippics/0101/slap_4.png" alt="The gameplay of Slap Shot" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-13</h2>
					<p>
					Nicola Salmoria fixed the window border graphics in the Shanghai driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-01-12</h2>
					<p>
					E. Watanabe fixed a small bug in the Nyan Nyan Panic driver. Nicola Salmoria added window graphics emulation to the Shanghai driver and he added support for Shanghai II.
					</p>
					<div class="wippix">
						<img src="wippics/0101/shan_1.png" alt="Shanghai II (c) 1989 SunSoft" width="384" height="280" />
						<img src="wippics/0101/shan_2.png" alt="The gameplay of Shanghai II" width="384" height="280" />
						<img src="wippics/0101/shan_3.png" alt="The gameplay of Shanghai II" width="384" height="280" />
						<img src="wippics/0101/shan_4.png" alt="The gameplay of Shanghai II" width="384" height="280" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-11</h2>
					<p>
					E. Watanabe submitted an update to the Gradius / Nemesis driver, adding Nyan Nyan Panic and City Bomber.
					</p>
					<div class="wippix">
						<img src="wippics/0101/nyan_1.png" alt="Nyan Nyan Panic (c) 1988 Konami" width="256" height="224" />
						<img src="wippics/0101/nyan_2.png" alt="The gameplay of Nyan Nyan Panic" width="256" height="224" />
						<img src="wippics/0101/nyan_3.png" alt="The gameplay of Nyan Nyan Panic" width="256" height="224" />
						<img src="wippics/0101/nyan_4.png" alt="The gameplay of Nyan Nyan Panic" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/city_1.png" alt="City Bomber (c) 1987 Konami" width="224" height="256" />
						<img src="wippics/0101/city_2.png" alt="The intro of City Bomber" width="224" height="256" />
						<img src="wippics/0101/city_3.png" alt="The gameplay of City Bomber" width="224" height="256" />
						<img src="wippics/0101/city_4.png" alt="The gameplay of City Bomber" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-10</h2>
					<p>
					Aaron Giles sent in a small update to the ES5506 sound core, fixing some digital filter bugs. Gerardo Oporto several more dip switch problems in Taito F2 games. Paul Leaman added the necessary modifications to the CPS-1 driver to allow CPS-2 emulation, and he added support for Street Fighter Zero.
					</p>
					<div class="wippix">
						<img src="wippics/0101/sfzj_1.png" alt="Street Fighter Zero (c) 1995 Capcom" width="384" height="224" />
						<img src="wippics/0101/sfzj_2.png" alt="The intro of Street Fighter Zero" width="384" height="224" />
						<img src="wippics/0101/sfzj_3.png" alt="The intro of Street Fighter Zero" width="384" height="224" />
						<img src="wippics/0101/sfzj_4.png" alt="The gameplay of Street Fighter Zero" width="384" height="224" />
						<img src="wippics/0101/sfzj_5.png" alt="The gameplay of Street Fighter Zero" width="384" height="224" />
						<img src="wippics/0101/sfzj_6.png" alt="The gameplay of Street Fighter Zero" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-09</h2>
					<p>
					Guru added a new Mobile Suit Gundam romset to the Seta driver, and the game is very much playable. Howie Cohen got some assistance from Ben Parnell and VS Sky Kid is now playable. Gerardo Oporto fixed some more Taito games' dip switch settings.
					</p>
					<div class="wippix">
						<img src="wippics/0101/msgu_1.png" alt="Mobile Suit Gundam (c) 1993 Banpresto" width="384" height="240" />
						<img src="wippics/0101/msgu_2.png" alt="The intro of Mobile Suit Gundam" width="384" height="240" />
						<img src="wippics/0101/msgu_3.png" alt="The gameplay of Mobile Suit Gundam" width="384" height="240" />
						<img src="wippics/0101/msgu_4.png" alt="The gameplay of Mobile Suit Gundam" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vssk_1.png" alt="VS Sky Kid (c) 1986 Namco" width="256" height="240" />
						<img src="wippics/0101/vssk_2.png" alt="The gameplay of VS Sky Kid" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-08</h2>
					<p>
					Mathis Rosenhauer fixed Armor Attack from crashing if no backdrop is found. E. Watanabe added Black Panther to the Gradius / Nemesis driver. Aaron Giles finished the Strata / Incredible Technologies 32-bit driver, supporting Time Killers, Bloodstorm (pictures <a href="wip0012.html#itech32">here</a>) and Hard Yardage.
					</p>
					<div class="wippix">
						<img src="wippics/0101/blkp_1.png" alt="Black Panther (c) 1987 Konami" width="256" height="224" />
						<img src="wippics/0101/blkp_2.png" alt="The intro of Black Panther" width="256" height="224" />
						<img src="wippics/0101/blkp_3.png" alt="The gameplay of Black Panther" width="256" height="224" />
						<img src="wippics/0101/blkp_4.png" alt="The gameplay of Black Panther" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/hard_1.png" alt="Hard Yardage (c) 1993 Strata / Incredible Technologies" width="384" height="240" />
						<img src="wippics/0101/hard_2.png" alt="The intro of Hard Yardage" width="384" height="240" />
						<img src="wippics/0101/hard_3.png" alt="The intro of Hard Yardage" width="384" height="240" />
						<img src="wippics/0101/hard_4.png" alt="The gameplay of Hard Yardage" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-07</h2>
					<p>
					Howie Cohen added VS Tetris to the VSNES driver. Phil Stroffolino fixed several bugs in the Ninja Kid driver, including the vertical scrolling graphics. Takahiro Nogi fixed some more Ninja Kid graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0101/vstr_1.png" alt="VS Tetris (c) 1988 Atari" width="256" height="240" />
						<img src="wippics/0101/vstr_2.png" alt="The gameplay of VS Tetris" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-06</h2>
					<p>
					Howie Cohen fixed several bugs in the VSNES driver and added RBI Baseball, VS Baseball and VS Mahjong.
					</p>
					<div class="wippix">
						<img src="wippics/0101/rbib_1.png" alt="RBI Baseball (c) 1987 Atari" width="256" height="240" />
						<img src="wippics/0101/rbib_2.png" alt="The gameplay of RBI Baseball" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vsbb_1.png" alt="VS Baseball (c) 1984 Nintendo" width="512" height="240" />
						<img src="wippics/0101/vsbb_2.png" alt="The gameplay of VS Baseball" width="512" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/mahj_1.png" alt="VS Mahjong (c) 1984 Nintendo" width="512" height="240" />
						<img src="wippics/0101/mahj_2.png" alt="The gameplay of VS Mahjong" width="512" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-05</h2>
					<p>
					smf fixed encrypted opcodes handling in the C 68k core and subsequently fixed Enduro Racer again.
					</p>
				</div>

				<div class="row">
					<h2>2001-01-04</h2>
					<p>
					David Haywood and Phil Stroffolino have written an almost perfect Ninja Kid driver, though some graphical problems remain. Luca Elia added Block Carnival to the Seta driver. Gerardo Oporto fixed dip switches in the Top Speed driver.
					</p>
					<div class="wippix">
						<img src="wippics/0101/ninj_1.png" alt="Ninja Kid (c) 1984 Taito / UPL" width="256" height="192" />
						<img src="wippics/0101/ninj_2.png" alt="The intro of Ninja Kid" width="256" height="192" />
						<img src="wippics/0101/ninj_3.png" alt="The gameplay of Ninja Kid" width="256" height="192" />
						<img src="wippics/0101/ninj_4.png" alt="The gameplay of Ninja Kid" width="256" height="192" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/bloc_1.png" alt="Block Carnival (c) 1992 Visco" width="240" height="384" />
						<img src="wippics/0101/bloc_2.png" alt="The intro of Block Carnival" width="240" height="384" />
						<img src="wippics/0101/bloc_3.png" alt="The intro of Block Carnival" width="240" height="384" />
						<img src="wippics/0101/bloc_4.png" alt="The gameplay of Block Carnival" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-03</h2>
					<p>
					Luca Elia sent in a driver for Metro games, including Pang Poms, Sky Alert, Dharma, Last Fortress - Toride and Dai Toride with perfect graphics and colors but no sound, and Bal Cube with bad sprites and wrong colors. HobbesAtPlay fixed the ROM auditing function to work with natodefa.
					</p>
					<div class="wippix">
						<img src="wippics/0101/pang_1.png" alt="Pang Poms (c) 1992 Metro" width="360" height="224" />
						<img src="wippics/0101/pang_2.png" alt="The gameplay of Pang Poms" width="360" height="224" />
						<img src="wippics/0101/pang_3.png" alt="The gameplay of Pang Poms" width="360" height="224" />
						<img src="wippics/0101/pang_4.png" alt="The gameplay of Pang Poms" width="360" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/skya_1.png" alt="Sky Alert (c) 1992 Metro" width="224" height="360" />
						<img src="wippics/0101/skya_2.png" alt="The intro of Sky Alert" width="224" height="360" />
						<img src="wippics/0101/skya_3.png" alt="The gameplay of Sky Alert" width="224" height="360" />
						<img src="wippics/0101/skya_4.png" alt="The gameplay of Sky Alert" width="224" height="360" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/dhar_1.png" alt="Dharma (c) 1994 Metro" width="320" height="224" />
						<img src="wippics/0101/dhar_2.png" alt="The gameplay of Dharma" width="320" height="224" />
						<img src="wippics/0101/dhar_3.png" alt="The gameplay of Dharma" width="320" height="224" />
						<img src="wippics/0101/dhar_4.png" alt="The gameplay of Dharma" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/last_1.png" alt="Last Fortress - Toride (c) 1994 Metro" width="360" height="224" />
						<img src="wippics/0101/last_2.png" alt="The intro of Last Fortress - Toride" width="360" height="224" />
						<img src="wippics/0101/last_3.png" alt="The intro of Last Fortress - Toride" width="360" height="224" />
						<img src="wippics/0101/last_4.png" alt="The gameplay of Last Fortress - Toride" width="360" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/dait_1.png" alt="Dai Toride (c) 1995 Metro" width="320" height="224" />
						<img src="wippics/0101/dait_2.png" alt="The intro of Dai Toride" width="320" height="224" />
						<img src="wippics/0101/dait_3.png" alt="The intro of Dai Toride" width="320" height="224" />
						<img src="wippics/0101/dait_4.png" alt="The gameplay of Dai Toride" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/balc_1.png" alt="Bal Cube (c) 1996 Metro" width="320" height="224" />
						<img src="wippics/0101/balc_2.png" alt="The gameplay of Bal Cube" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-01-02</h2>
					<p>
					Jarek Burczynski optimized the ADSP2100 core a bit, resulting in a 7 % speed gain on some platforms.
					</p>
				</div>

				<div class="rowlast">
					<h2>2001-01-01</h2>
					<p>
					Howie Cohen finally submitted the long awaited VSNES driver, with most of the games having correct colors and sound.
					</p>
					<div class="wippix">
						<img src="wippics/0101/btle_1.png" alt="Battle City (c) 1985 Namco" width="256" height="240" />
						<img src="wippics/0101/btle_2.png" alt="The gameplay of Battle City" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/cluc_1.png" alt="Clu Clu Land (c) 1984 Nintendo" width="256" height="240" />
						<img src="wippics/0101/cluc_2.png" alt="The gameplay of Clu Clu Land" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/cstl_1.png" alt="VS Castlevania (c) 1987 Konami" width="256" height="240" />
						<img src="wippics/0101/cstl_2.png" alt="The gameplay of VS Castlevania" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/drma_1.png" alt="Dr. Mario (c) 1990 Nintendo" width="256" height="240" />
						<img src="wippics/0101/drma_2.png" alt="The gameplay of Dr. Mario" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/duck_1.png" alt="Duck Hunt (c) 1985 Nintendo" width="256" height="240" />
						<img src="wippics/0101/duck_2.png" alt="The gameplay of Duck Hunt" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/exci_1.png" alt="Excitebike (c) 1984 Nintendo" width="256" height="240" />
						<img src="wippics/0101/exci_2.png" alt="The gameplay of Excitebike" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/goon_1.png" alt="VS The Goonies (c) 1986 Konami" width="256" height="240" />
						<img src="wippics/0101/goon_2.png" alt="The gameplay of VS The Goonies" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/hoga_1.png" alt="Hogan's Alley (c) 1985 Nintendo" width="256" height="240" />
						<img src="wippics/0101/hoga_2.png" alt="The gameplay of Hogan's Alley" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/icec_1.png" alt="Ice Climber (c) 1984 Nintendo" width="256" height="240" />
						<img src="wippics/0101/icec_2.png" alt="The gameplay of Ice Climber" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/lady_1.png" alt="Lady Golf (c) 1984 Nintendo" width="256" height="240" />
						<img src="wippics/0101/lady_2.png" alt="The gameplay of Lady Golf" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/mach_1.png" alt="Mach Rider (c) 1985 Nintendo" width="256" height="240" />
						<img src="wippics/0101/mach_2.png" alt="The gameplay of Mach Rider" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/supr_1.png" alt="VS Super Mario Bros (c) 1986 Nintendo" width="256" height="240" />
						<img src="wippics/0101/supr_2.png" alt="The gameplay of VS Super Mario Bros" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/tkob_1.png" alt="VS TKO Boxing (c) 1987 Data East" width="256" height="240" />
						<img src="wippics/0101/tkob_2.png" alt="The gameplay of VS TKO Boxing" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vsgo_1.png" alt="VS Golf (c) 1984 Nintendo" width="256" height="240" />
						<img src="wippics/0101/vsgo_2.png" alt="The gameplay of VS Golf" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vsgr_1.png" alt="VS Gradius (c) 1987 Konami" width="256" height="240" />
						<img src="wippics/0101/vsgr_2.png" alt="The gameplay of VS Gradius" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vspi_1.png" alt="VS Pinball (c) 1984 Nintendo" width="256" height="240" />
						<img src="wippics/0101/vspi_2.png" alt="The gameplay of VS Pinball" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vssl_1.png" alt="VS Slalom (c) 1986 Nintendo" width="256" height="240" />
						<img src="wippics/0101/vssl_2.png" alt="The gameplay of VS Slalom" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vsso_1.png" alt="Unisystem Soccer (c) 1985 Nintendo" width="256" height="240" />
						<img src="wippics/0101/vsso_2.png" alt="The gameplay of Unisystem Soccer" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/balo_1.png" alt="VS Balloon Fight (c) 1984 Nintendo" width="512" height="240" />
						<img src="wippics/0101/balo_2.png" alt="The gameplay of VS Balloon Fight" width="512" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/vste_1.png" alt="VS Tennis (c) 1984 Nintendo" width="512" height="240" />
						<img src="wippics/0101/vste_2.png" alt="The gameplay of VS Tennis" width="512" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0101/wrec_1.png" alt="Wrecking Crew (c) 198? Nintendo" width="512" height="240" />
						<img src="wippics/0101/wrec_2.png" alt="The gameplay of Wrecking Crew" width="512" height="240" />
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
