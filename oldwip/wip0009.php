<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
			<!--#include virtual="/_include/html/sidebar.txt" -->
            
            <!-- content start -->         
            <div id="content">
            		
            	<h1>September 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-09-30</h2>
					<p>
					Aaron Giles added the two Mortal Kombat 2 hacks to the T-Unit driver. Darren Olafson sent in an updated ASM 68k core with support for the two Psikyo 68020 games, and fixed a bug that prevented sf2accp2 from working.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-29</h2>
					<p>
					Nicola Salmoria improved the Sunset Riders protection workaround.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-28</h2>
					<p>
					Aaron Giles fixed a bug in the memory interface and sent in an Atari games update with working speech in Gauntlet attract mode and transparent graphics in Atari System 1 games.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-27</h2>
					<p>
					Mathis Rosenhauer fixed Aztarac protection patching and cleaned up the Beezer driver a bit. Luca Elia added stereo sound support to Jaleco Mega System 1 games, and fixed Cisco Heat's speed. David Haywood sent in another Sega C2 driver update with Thunder Force AC bootleg working.
					</p>
					<div class="wippix">
						<img src="wippics/0009/tfrc_1.png" alt="Thunder Force AC (c) 1990 Sega" width="320" height="224" />
						<img src="wippics/0009/tfrc_2.png" alt="The gameplay of Thunder Force AC" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-26</h2>
					<p>
					Aaron Giles modified the 6821 PIA emulation to work properly with the new memory interface, and he sent in another graphics drawing core function which supports Atari games better.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-25</h2>
					<p>
					Aaron Giles fixed some internal TMS34010 bugs. David Haywood submitted a few fixes to the Sega C2 driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-24</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller updated several drivers to use the normal core functions for coin counters.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-23</h2>
					<p>
					Nicola Salmoria modified some core functions to behave as normal functions instead of being memory handlers.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-22</h2>
					<p>
					David Haywood added sprite flipping to the Sega C2 driver, and Tant-R bootleg now works. Nicola Salmoria fixed some bugs related to the new memory interface.
					</p>
					<div class="wippix">
						<img src="wippics/0009/tant_1.png" alt="Tant-R (c) 1992 Sega" width="320" height="224" />
						<img src="wippics/0009/tant_2.png" alt="The gameplay of Tant-R" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-21</h2>
					<p>
					Jarek Burczynski fixed some sprite / background priority issues in Mag Max. Tatsuyuki Satoh fixed some YM3812 bugs which affected Mahjong Club 90's. Mathis Rosenhauer sent in a driver for Beezer. Nicola Salmoria integrated the memory interface changes to the main source tree, breaking hundreds of drivers but he also fixed quite a few bugs on the way. Aaron Giles fixed some broken 16-bit palette handlers and added automatic memory bank assigning to the memory interface. Gerardo Oporto fixed several dipswitch settings in various games.
					</p>
					<div class="wippix">
						<img src="wippics/0009/beez_1.png" alt="Beezer (c) 1982 Tong" width="256" height="288" />
						<img src="wippics/0009/beez_2.png" alt="The intro of Beezer" width="256" height="288" />
						<img src="wippics/0009/beez_3.png" alt="The intro of Beezer" width="256" height="288" />
						<img src="wippics/0009/beez_4.png" alt="The gameplay of Beezer" width="256" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-20</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller sent in some bugfixes to the Z180 core and for the memory interface.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-19</h2>
					<p>
					Phil Stroffolino sent in a tilemap system update with a totally new API.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-18</h2>
					<p>
					Luca Elia added Donpachi to the Cave driver. Jarek Burczynski optimized the Mag Max graphics rendering.
					</p>
					<div class="wippix">
						<img src="wippics/0009/donp_1.png" alt="Donpachi (c) 1995 Cave" width="240" height="320" />
						<img src="wippics/0009/donp_2.png" alt="The intro of Donpachi" width="240" height="320" />
						<img src="wippics/0009/donp_3.png" alt="The gameplay of Donpachi" width="240" height="320" />
						<img src="wippics/0009/donp_4.png" alt="The gameplay of Donpachi" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-17</h2>
					<p>
					David Graves fixed some bugs in the Taito sound interface. Bryan McPhail fixed some bugs in Raiden (for example the alternate set works now), and he fixed sprite lag in Tiger Heli and Getstar. David Haywood fixed some bugs in the Sega C2 driver so that Bloxeed, Borench, Poto Poto, Stack Columns and Zunzunkyou no Yabou now work. Zsolt Vasvari fixed a problem in Phoenix hiscore loading.
					</p>
					<div class="wippix">
						<img src="wippics/0009/blox_1.png" alt="Bloxeed (c) 1989 Sega" width="320" height="224" />
						<img src="wippics/0009/blox_2.png" alt="The gameplay of Bloxeed" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/bore_1.png" alt="Borench (c) 1990 Sega" width="320" height="224" />
						<img src="wippics/0009/bore_2.png" alt="The gameplay of Borench" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/poto_1.png" alt="Poto Poto (c) 1994 Sega" width="320" height="224" />
						<img src="wippics/0009/poto_2.png" alt="The gameplay of Poto Poto" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/stkc_1.png" alt="Stack Columns (c) 1994 Sega" width="320" height="224" />
						<img src="wippics/0009/stkc_2.png" alt="The gameplay of Stack Columns" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/zunk_1.png" alt="Zunzunkyou No Yabou (c) 1994 Sega" width="320" height="224" />
						<img src="wippics/0009/zunk_2.png" alt="The gameplay of Zunzunkyou No Yabou" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-16</h2>
					<p>
					David Graves abstracted the Taito YM2610 sound interface. J&uuml;rgen Buchm&uuml;ller sent in a preliminary Z180 emulation core. Yochizo added Balloon Brothers, Gigandes and Daisenpu to the Superman a.k.a. Taito X driver. Takahiro Nogi sent in a huge batch of Mahjong drivers, with support for the following games: Apparel Night, Bijokko Gakuen, Bijokko Yume Monogatari, City Love, Crystal Gal 2, Gionbana, Hana to Ojisan [BET], Iemoto, Mahjong Banana Dream [BET], Mahjong CLUB 90's, Mahjong Camera Kozou, Mahjong Chinmoku no Hentai, Mahjong Focus, Mahjong Focus [BET], Mahjong G-MEN'89, Mahjong Gal no Kaika, Mahjong Gal no Kokuhaku, Mahjong Hana no Momoko gumi, Mahjong Jikken Love Story, Mahjong Kaguyahime [BET], Mahjong Nanpa Story, Mahjong Nerae! Top Star, Mahjong Panic Stadium, Mahjong Satsujin Jiken, Mahjong Sikaku, Mahjong THE LADY HUNTER, Mahjong Triple Wars, Mahjong Triple Wars 2, Mahjong Vanilla Syndrome, Maikobana, Miss Mahjong Contest, Nozokimeguri Mahjong Peep Show, Ojousan, Otona no Mahjong, Quiz-Mahjong Hayaku Yatteyo!, Scandal Mahjong, Scandal Mahjong [BET], Second Love, Seiha, Seiha [BET], Taisen Quiz HYHOO, Taisen Quiz HYHOO 2, Telephone Mahjong, Tokimeki Bishoujo [BET], Tokyo Gal Zukan. Phil Stroffolino sent in an improved Namco NA-1/2 driver, adding support for Exbania, Nettou! Gekitou! Quiztou!!, Super World Court, F/A (Cosmo Gang the Puzzle, Tinkle Pit and Emeraldia were added back in June).
					</p>
					<div class="wippix">
						<img src="wippics/0009/dais_1.png" alt="Daisenpu (c) 1989 Taito" width="224" height="384" />
						<img src="wippics/0009/dais_2.png" alt="The intro of Daisenpu" width="224" height="384" />
						<img src="wippics/0009/dais_3.png" alt="The gameplay of Daisenpu" width="224" height="384" />
						<img src="wippics/0009/dais_4.png" alt="The gameplay of Daisenpu" width="224" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/giga_1.png" alt="Gigandes (c) 1989 East Technology" width="384" height="240" />
						<img src="wippics/0009/giga_2.png" alt="The intro of Gigandes" width="384" height="240" />
						<img src="wippics/0009/giga_3.png" alt="The gameplay of Gigandes" width="384" height="240" />
						<img src="wippics/0009/giga_4.png" alt="The gameplay of Gigandes" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/ball_1.png" alt="Balloon Brothers (c) 1992 East Technology" width="384" height="240" />
						<img src="wippics/0009/ball_2.png" alt="The intro of Balloon Brothers" width="384" height="240" />
						<img src="wippics/0009/ball_3.png" alt="The gameplay of Balloon Brothers" width="384" height="240" />
						<img src="wippics/0009/ball_4.png" alt="The gameplay of Balloon Brothers" width="384" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/apparel.png"  alt="Apparel Night (c) 1988 Central" width="512" height="448" />
						<img src="wippics/0009/bijokkog.png" alt="Bijokko Gakuen (c) 1988 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/bijokkoy.png" alt="Bijokko Yume Monogatari (c) 1987 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/citylove.png" alt="City Love (c) 1986 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/crystal2.png" alt="Crystal Gal 2 (c) 1986 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/gionbana.png" alt="Gionbana (c) 1989 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/hanaoji.png"  alt="Hana to Ojis (c) 1991 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/iemoto.png"   alt="Iemoto (c) 1987 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/bananadr.png" alt="Mahjong Banana Dream [BET] (c) 1989 DIGITAL" width="512" height="480" />
						<img src="wippics/0009/club90s.png"  alt="Mahjong CLUB 90's (c) 1990 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/mjcamera.png" alt="Mahjong Camera Kozou (c) 1988 MIKI" width="512" height="448" />
						<img src="wippics/0009/chinmoku.png" alt="Mahjong Chinmoku no Hentai (c) 1990 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/mjfocus.png"  alt="Mahjong Focus (c) 1989 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/mjfocusm.png" alt="Mahjong Focus [BET] (c) 1989 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/mgmen89.png"  alt="Mahjong G-MEN'89 (c) 1989 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/galkaika.png" alt="Mahjong Gal no Kaika (c) 1989 Nichibutsu/T.R.TEC" width="640" height="480" />
						<img src="wippics/0009/galkoku.png"  alt="Mahjong Gal no Kokuhaku (c) 1989 Nichibutsu/T.R.TEC" width="640" height="480" />
						<img src="wippics/0009/hanamomo.png" alt="Mahjong Hana no Momoko gumi (c) 1988 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/mjlstory.png" alt="Mahjong Jikken Love Story (c) 1991 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/kaguya.png"   alt="Mahjong Kaguyahime [BET] (c) 1988 MIKI" width="512" height="448" />
						<img src="wippics/0009/mjnanpas.png" alt="Mahjong Nanpa Story (c) 1989 BROOKS" width="512" height="480" />
						<img src="wippics/0009/ntopstar.png" alt="Mahjong Nerae! Top Star (c) 1990 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/pstadium.png" alt="Mahjong Panic Stadium (c) 1990 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/msjiken.png"  alt="Mahjong Satsujin Jiken (c) 1988 Nichibutsu" width="448" height="512" />
						<img src="wippics/0009/mjsikaku.png" alt="Mahjong Sikaku (c) 1988 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/mladyhtr.png" alt="Mahjong THE LADY HUNTER (c) 1990 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/triplew1.png" alt="Mahjong Triple Wars (c) 1989 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/triplew2.png" alt="Mahjong Triple Wars 2 (c) 1990 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/vanilla.png"  alt="Mahjong Vanilla Syndrome (c) 1991 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/maiko.png"    alt="Maikobana (c) 1990 Nichibutsu" width="512" height="480" />
						<img src="wippics/0009/mcontest.png" alt="Miss Mahjong Contest (c) 1989 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/peepshow.png" alt="Nozokimeguri Mahjong Peep Show (c) 1989 AC" width="512" height="480" />
						<img src="wippics/0009/ojousan.png"  alt="Ojousan (c) 1987 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/otonano.png"  alt="Otona no Mahjong (c) 1988 Apple" width="512" height="448" />
						<img src="wippics/0009/qmhayaku.png" alt="Quiz-Mahjong Hayaku Yatteyo! (c) 1991 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/scandal.png"  alt="Scandal Mahjong (c) 1989 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/scandalm.png" alt="Scandal Mahjong [BET] (c) 1989 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/secolove.png" alt="Second Love (c) 1986 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/seiha.png"    alt="Seiha (c) 1987 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/seiham.png"   alt="Seiha [BET] (c) 1987 Nichibutsu" width="512" height="448" />
						<img src="wippics/0009/hyhoo.png"    alt="Taisen Quiz HYHOO (c) 1987 Nichibutsu" width="448" height="512" />
						<img src="wippics/0009/hyhoo2.png"   alt="Taisen Quiz HYHOO 2 (c) 1987 Nichibutsu" width="448" height="512" />
						<img src="wippics/0009/telmahjn.png" alt="Telephone Mahjong (c) 1988 Nichibutsu" width="480" height="512" />
						<img src="wippics/0009/tokimbsj.png" alt="Tokimeki Bishoujo [BET] (c) 1989 Nichibutsu" width="640" height="480" />
						<img src="wippics/0009/tokyogal.png" alt="Tokyo Gal Zukan (c) 1989 Nichibutsu" width="640" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-15</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller added a German romset of Indiana Jones and a Mortal Kombat bootleg romset, though neither of them works. David Haywood submitted a very preliminary Sega C2 driver, currently supporting only Puyo Puyo, Columns and Columns II.
					</p>
					<div class="wippix">
						<img src="wippics/0009/puyo_1.png" alt="Puyo Puyo (c) 1992 Sega" width="320" height="224" />
						<img src="wippics/0009/puyo_2.png" alt="The intro of Puyo Puyo" width="320" height="224" />
						<img src="wippics/0009/puyo_3.png" alt="The intro of Puyo Puyo" width="320" height="224" />
						<img src="wippics/0009/puyo_4.png" alt="The gameplay of Puyo Puyo" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/col1_1.png" alt="Columns (c) 1990 Sega" width="320" height="224" />
						<img src="wippics/0009/col1_2.png" alt="The intro of Columns" width="320" height="224" />
						<img src="wippics/0009/col1_3.png" alt="The gameplay of Columns" width="320" height="224" />
						<img src="wippics/0009/col1_4.png" alt="The gameplay of Columns" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/col2_1.png" alt="Columns II (c) 1990 Sega" width="320" height="224" />
						<img src="wippics/0009/col2_2.png" alt="The intro of Columns II" width="320" height="224" />
						<img src="wippics/0009/col2_3.png" alt="The intro of Columns II" width="320" height="224" />
						<img src="wippics/0009/col2_4.png" alt="The gameplay of Columns II" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-14</h2>
					<p>
					Bryan McPhail added Bio-ship Paladin and Strahl to the Bombjack Twin driver. J&uuml;rgen Buchm&uuml;ller improved the core memory handling. David Graves sent in a preliminary Taito Z driver, but none of the games work acceptably yet. Nicola Salmoria perfected the Super Dodgeball driver started by Paul Hampson.
					</p>
					<div class="wippix">
						<img src="wippics/0009/spdo_1.png" alt="Super Dodgeball (c) 1987 Technos" width="240" height="240" />
						<img src="wippics/0009/spdo_2.png" alt="The intro of Super Dodgeball" width="240" height="240" />
						<img src="wippics/0009/spdo_3.png" alt="The gameplay of Super Dodgeball" width="240" height="240" />
						<img src="wippics/0009/spdo_4.png" alt="The gameplay of Super Dodgeball" width="240" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/bios_1.png" alt="Bio-ship Paladin (c) 1991 UPL" width="256" height="224" />
						<img src="wippics/0009/bios_2.png" alt="The intro of Bio-ship Paladin" width="256" height="224" />
						<img src="wippics/0009/bios_3.png" alt="The gameplay of Bio-ship Paladin" width="256" height="224" />
						<img src="wippics/0009/bios_4.png" alt="The gameplay of Bio-ship Paladin" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/stra_1.png" alt="Strahl (c) 1992 UPL" width="256" height="224" />
						<img src="wippics/0009/stra_2.png" alt="The intro of Strahl" width="256" height="224" />
						<img src="wippics/0009/stra_3.png" alt="The intro of Strahl" width="256" height="224" />
						<img src="wippics/0009/stra_4.png" alt="The gameplay of Strahl" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-13</h2>
					<p>
					Nicola Salmoria added Macross II to the Bombjack Twin driver. J&uuml;rgen Buchm&uuml;ller fixed some bugs in the new NES sound core.
					</p>
					<div class="wippix">
						<img src="wippics/0009/mac2_1.png" alt="Macross II (c) 1993 Banpresto" width="384" height="224" />
						<img src="wippics/0009/mac2_2.png" alt="The intro of Macross II" width="384" height="224" />
						<img src="wippics/0009/mac2_3.png" alt="The gameplay of Macross II" width="384" height="224" />
						<img src="wippics/0009/mac2_4.png" alt="The gameplay of Macross II" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-12</h2>
					<p>
					Nicola Salmoria fixed the missing Macross background and merged it with the Bombjack Twin driver. Luca Elia added Blaze On to the Kaneko16 driver. Matt Conte submitted a NES sound core update, and it definitely sounds better now.
					</p>
					<div class="wippix">
						<img src="wippics/0009/macr_1.png" alt="Macross (c) 1992 Banpresto" width="224" height="256" />
						<img src="wippics/0009/macr_2.png" alt="The intro of Macross" width="224" height="256" />
						<img src="wippics/0009/macr_3.png" alt="The gameplay of Macross" width="224" height="256" />
						<img src="wippics/0009/macr_4.png" alt="The gameplay of Macross" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/blaz_1.png" alt="Blaze On (c) 1992 Atlus" width="320" height="232" />
						<img src="wippics/0009/blaz_2.png" alt="The intro of Blaze On" width="320" height="232" />
						<img src="wippics/0009/blaz_3.png" alt="The gameplay of Blaze On" width="320" height="232" />
						<img src="wippics/0009/blaz_4.png" alt="The gameplay of Blaze On" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-11</h2>
					<p>
					Bryan McPhail sent in a huge Irem games update with a rewritten NEC core, fixing many bugs. R-Type Leo title screen was fixed as well as preliminary Irem GA20 custom sample player support was added. Also Bomberman / Dynablaster and Bomberman World / Atomic Punk were decrypted and added by Bryan. Nicola Salmoria fixed Gauntlet and some other Atari games from crashing, and he also added sound emulation to Bomberman World. Gerardo Oporto fixed yet more dipswitch settings.
					</p>
					<div class="wippix">
						<img src="wippics/0009/bomb_1.png" alt="Bomberman (c) 1991 Irem" width="320" height="240" />
						<img src="wippics/0009/bomb_2.png" alt="The intro of Bomberman" width="320" height="240" />
						<img src="wippics/0009/bomb_3.png" alt="The intro of Bomberman" width="320" height="240" />
						<img src="wippics/0009/bomb_4.png" alt="The gameplay of Bomberman" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/bbma_1.png" alt="Bomberman World (c) 1992 Irem" width="320" height="240" />
						<img src="wippics/0009/bbma_2.png" alt="The intro of Bomberman World" width="320" height="240" />
						<img src="wippics/0009/bbma_3.png" alt="The intro of Bomberman World" width="320" height="240" />
						<img src="wippics/0009/bbma_4.png" alt="The gameplay of Bomberman World" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-10</h2>
					<p>
					Bryan McPhail added the original Sky Adventure romset to the Alpha68k driver, and he sent a driver for Pushman. Nicola Salmoria added Nouryoku Koujou Iinkai to the Bombjack Twin driver.
					</p>
					<div class="wippix">
						<img src="wippics/0009/push_1.png" alt="Pushman (c) 1990 Comad" width="256" height="224" />
						<img src="wippics/0009/push_2.png" alt="The intro of Pushman" width="256" height="224" />
						<img src="wippics/0009/push_3.png" alt="The intro of Pushman" width="256" height="224" />
						<img src="wippics/0009/push_4.png" alt="The gameplay of Pushman" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0009/nour_1.png" alt="Nouryoku Koujou Iinkai (c) 1995 Tecmo" width="384" height="224" />
						<img src="wippics/0009/nour_2.png" alt="The intro of Nouryoku Koujou Iinkai" width="384" height="224" />
						<img src="wippics/0009/nour_3.png" alt="The intro of Nouryoku Koujou Iinkai" width="384" height="224" />
						<img src="wippics/0009/nour_4.png" alt="The gameplay of Nouryoku Koujou Iinkai" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-09</h2>
					<p>
					Yochizo added Armed Police Batrider to the Toaplan2 driver, but sound is missing.
					</p>
					<div class="wippix">
						<img src="wippics/0009/batr_1.png" alt="Armed Police Batrider (c) 1998 Raizing" width="240" height="320" />
						<img src="wippics/0009/batr_2.png" alt="The intro of Armed Police Batrider" width="240" height="320" />
						<img src="wippics/0009/batr_3.png" alt="The intro of Armed Police Batrider" width="240" height="320" />
						<img src="wippics/0009/batr_4.png" alt="The gameplay of Armed Police Batrider" width="240" height="320" />
						<img src="wippics/0009/batr_5.png" alt="The gameplay of Armed Police Batrider" width="240" height="320" />
						<img src="wippics/0009/batr_6.png" alt="The gameplay of Armed Police Batrider" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-08</h2>
					<p>
					Mike Haaland added an alternative mazes version of NATO Defense. Aaron Giles sent in a new TMS34010 core with a few bugfixes, and finally officially sent the Hard Drivin' / S.T.U.N. Runner driver. The latter is perfect, while the former suffers from no sound and a nasty bug causing the car physics go out of control after a crash. Also included was a preliminary Race Drivin' driver, which unfortunately goes weird as soon as the simulation begins. Aaron also added a new debugger feature to compare CPU core timings. Nicola Salmoria fixed the Return of Invaders driver to use the 68705 emulation correctly instead of relying on a protection hack.
					</p>
					<div class="wippix">
						<img src="wippics/0009/race_1.png" alt="Race Drivin' (c) 1990 Atari" width="512" height="288" />
						<img src="wippics/0009/race_2.png" alt="The attract mode of Race Drivin'" width="512" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-07</h2>
					<p>
					Stephane Humbert added dip switches to the PlayChoice 10 driver. Phil Stroffolino sent in the Namco NA-1 driver, still supporting Cosmo Gang the Puzzle, Tinkle Pit and Emeraldia. Andrea Mazzoleni fixed a memory trashing bug in the cheat system.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-06</h2>
					<p>
					Brad Oliver fixed a small bug in the CCPU core. J&uuml;rgen Buchm&uuml;ller wrote a helpful tool for adding new CPU cores.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-05</h2>
					<p>
					Manuel Abadia fixed some of the priority problems in Big Karnak. Ernesto Corvi and Nicola Salmoria wrote a driver for Buggy Challenge, though a lot of it is still preliminary. Mike Greve added two new revisions of Mortal Kombat 2 to the T-Unit driver.
					</p>
					<div class="wippix">
						<img src="wippics/0009/bugg_1.png" alt="Buggy Challenge (c) 1984 Taito" width="224" height="256" />
						<img src="wippics/0009/bugg_2.png" alt="The intro of Buggy Challenge" width="224" height="256" />
						<img src="wippics/0009/bugg_3.png" alt="The gameplay of Buggy Challenge" width="224" height="256" />
						<img src="wippics/0009/bugg_4.png" alt="The gameplay of Buggy Challenge" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-09-04</h2>
					<p>
					Nicola Salmoria fixed a bug in the C 68k core which affected Zwackery.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-03</h2>
					<p>
					Brad Oliver sent in yet another dirty functions' update. Bryan McPhail fixed an internal timer bug in the Hu6280 core.
					</p>
				</div>

				<div class="row">
					<h2>2000-09-02</h2>
					<p>
					Nicola Salmoria fixed a 6309 bug which affected Fast Lane and Double Dragon. Brad Oliver abstracted the dirty handling from Centipede and sped up Atari Tetris.
					</p>
				</div>

				<div class="rowlast">
					<h2>2000-09-01</h2>
					<p>
					Mathis Rosenhauer further implemented the integration of backdrop functions to the artwork functionality. Phil Stroffolino sent in a tilemap update with largely reworked internals, so not many games work with it yet. J&uuml;rgen Buchm&uuml;ller sent in a huge CPU core update with a lot of new CPU cores included.
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
