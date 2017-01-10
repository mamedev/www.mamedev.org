<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>October 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-10-31</h2>
					<p>
					Pierpaolo Prazzoli added some DIP switch settings to Asterock. Jarek Burczynski emulated amplifiers and filters in Mag Max, giving more accurate sound. Aaron Giles sent in a bunch of fixes to the ADSP2100, MIPS3 and R3000 CPU cores.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-30</h2>
					<p>
					David Haywood added Gang Hunter, a Dead Angle clone, but it doesn't work because the controls are not emulated correctly. Jarek Burczynski sent in more fixes to the YM delta-t module, mostly needed for MSX emulators and such. R. Belmont added ADPCM sounds to Cabal and Dead Angle / Gang Hunter, with thanks to Jarek Burczynski for decrypting the sample ROMs. R. Belmont also added partial sound support for Grand Cross Pinball.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-29</h2>
					<p>
					Sebastien Volpe submitted a fix for aspect ratio computation with rotated games. Olivier Galibert added distorted sprite drawing to the ST-V driver, adding 3D graphics in a lot of games. David Haywood also added sprite zoom to the ST-V driver, and a few more games show some graphics now: Cotton 2, Cotton Boomerang, Columns 97, Die Hard, Ejihon Tantei Jimusyo, Virtua Fighter Kids, Virtua Fighter Remix, Funky Head Boxers, Othello Shiyouyo, Pro Mahjong Kiwame S, Winter Heat and Taisen Tanto-R Sashissu!! Tim Cottrill added sample support to Armor Attack and Sundance. Aaron Giles added a function for making desired read/write accesses take extra time, and sent an update to the Midway V-unit driver, making War Gods sound perfect and making the DCS2 output support stereo. Curt Coder submitted various fixes to the Konami Twin16 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0310/cotton2_1.png" alt="Cotton 2 (c) 1997 Success" width="352" height="224" />
						<img src="wippics/0310/cotton2_2.png" alt="The attract mode of Cotton 2" width="352" height="224" />
						<img src="wippics/0310/cotton2_3.png" alt="The attract mode of Cotton 2" width="352" height="224" />
						<img src="wippics/0310/cotton2_4.png" alt="The intro of Cotton 2" width="352" height="224" />
						<img src="wippics/0310/cotton2_5.png" alt="The gameplay of Cotton 2" width="352" height="224" />
						<img src="wippics/0310/cotton2_6.png" alt="The gameplay of Cotton 2" width="352" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/cottonbm_1.png" alt="Cotton Boomerang (c) 1998 Success" width="704" height="448" />
						<img src="wippics/0310/cottonbm_2.png" alt="The attract mode of Cotton Boomerang" width="704" height="448" />
						<img src="wippics/0310/cottonbm_3.png" alt="The attract mode of Cotton Boomerang" width="704" height="448" />
						<img src="wippics/0310/cottonbm_4.png" alt="The intro of Cotton Boomerang" width="704" height="448" />
						<img src="wippics/0310/cottonbm_5.png" alt="The gameplay of Cotton Boomerang" width="352" height="224" />
						<img src="wippics/0310/cottonbm_6.png" alt="The gameplay of Cotton Boomerang" width="352" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/colmns97_1.png" alt="Columns 97 (c) 1996 Sega" width="704" height="480" />
						<img src="wippics/0310/colmns97_2.png" alt="The gameplay of Columns 97" width="704" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/diehard_1.png" alt="Die Hard (c) 1996 Sega" width="704" height="480" />
						<img src="wippics/0310/diehard_2.png" alt="The intro of Die Hard" width="704" height="480" />
						<img src="wippics/0310/diehard_3.png" alt="The gameplay of Die Hard" width="704" height="480" />
						<img src="wippics/0310/diehard_4.png" alt="The gameplay of Die Hard" width="704" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/ejihon_1.png" alt="Ejihon Tantei Jimusyo (c) 1995 Sega" width="704" height="480" />
						<img src="wippics/0310/ejihon_2.png" alt="The intro of Ejihon Tantei Jimusyo" width="704" height="480" />
						<img src="wippics/0310/ejihon_3.png" alt="The intro of Ejihon Tantei Jimusyo" width="704" height="480" />
						<img src="wippics/0310/ejihon_4.png" alt="The gameplay of Ejihon Tantei Jimusyo" width="704" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/vfkids_1.png" alt="Virtua Fighter Kids (c) 1996 Sega" width="704" height="448" />
						<img src="wippics/0310/vfkids_2.png" alt="The gameplay of Virtua Fighter Kids" width="704" height="448" />
						<img src="wippics/0310/vfkids_3.png" alt="The gameplay of Virtua Fighter Kids" width="704" height="448" />
						<img src="wippics/0310/vfkids_4.png" alt="The gameplay of Virtua Fighter Kids" width="704" height="448" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/vfremix_1.png" alt="Virtua Fighter Remix (c) 1995 Sega" width="704" height="448" />
						<img src="wippics/0310/vfremix_2.png" alt="The attract mode of Virtua Fighter Remix" width="704" height="448" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/fhboxers_1.png" alt="Funky Head Boxers (c) 1995 Sega" width="352" height="240" />
						<img src="wippics/0310/fhboxers_2.png" alt="The attract mode of Funky Head Boxers" width="352" height="240" />
						<img src="wippics/0310/fhboxers_3.png" alt="The attract mode of Funky Head Boxers" width="352" height="240" />
						<img src="wippics/0310/fhboxers_4.png" alt="The intro of Funky Head Boxers" width="352" height="240" />
						<img src="wippics/0310/fhboxers_5.png" alt="The intro of Funky Head Boxers" width="352" height="240" />
						<img src="wippics/0310/fhboxers_6.png" alt="The gameplay of Funky Head Boxers" width="352" height="240" />
						<img src="wippics/0310/fhboxers_7.png" alt="The gameplay of Funky Head Boxers" width="352" height="240" />
						<img src="wippics/0310/fhboxers_8.png" alt="The gameplay of Funky Head Boxers" width="352" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/othellos_1.png" alt="Othello Shiyouyo (c) 1998 Success" width="320" height="224" />
						<img src="wippics/0310/othellos_2.png" alt="The attract mode of Othello Shiyouyo" width="320" height="224" />
						<img src="wippics/0310/othellos_3.png" alt="The attract mode of Othello Shiyouyo" width="320" height="224" />
						<img src="wippics/0310/othellos_4.png" alt="The intro of Othello Shiyouyo" width="320" height="224" />
						<img src="wippics/0310/othellos_5.png" alt="The intro of Othello Shiyouyo" width="320" height="224" />
						<img src="wippics/0310/othellos_6.png" alt="The gameplay of Othello Shiyouyo" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/kiwames_1.png" alt="Pro Mahjong Kiwame S (c) 1995 Athena" width="320" height="240" />
						<img src="wippics/0310/kiwames_2.png" alt="The intro of Pro Mahjong Kiwame S" width="320" height="240" />
						<img src="wippics/0310/kiwames_3.png" alt="The intro of Pro Mahjong Kiwame S" width="320" height="240" />
						<img src="wippics/0310/kiwames_4.png" alt="The gameplay of Pro Mahjong Kiwame S" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/winterht_1.png" alt="Winter Heat (c) 1997 Sega" width="704" height="480" />
						<img src="wippics/0310/winterht_2.png" alt="The intro of Winter Heat" width="704" height="480" />
						<img src="wippics/0310/winterht_3.png" alt="The attract mode of Winter Heat" width="704" height="480" />
						<img src="wippics/0310/winterht_4.png" alt="The attract mode of Winter Heat" width="704" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/sassisu_1.png" alt="Taisen Tanto-R Sashissu!! (c) 1998 Sega" width="352" height="240" />
						<img src="wippics/0310/sassisu_2.png" alt="The attract mode of Taisen Tanto-R Sashissu!!" width="352" height="240" />
						<img src="wippics/0310/sassisu_3.png" alt="The attract mode of Taisen Tanto-R Sashissu!!" width="352" height="240" />
						<img src="wippics/0310/sassisu_4.png" alt="The attract mode of Taisen Tanto-R Sashissu!!" width="352" height="240" />
						<img src="wippics/0310/sassisu_5.png" alt="The intro of Taisen Tanto-R Sashissu!!" width="352" height="240" />
						<img src="wippics/0310/sassisu_6.png" alt="The gameplay of Taisen Tanto-R Sashissu!!" width="352" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-28</h2>
					<p>
					smf fixed some random crashes in Soul Edge (VER.A only). David Haywood fixed the controls in the ST-V driver, making Mausuke no Ojama the World and Puyo Puyo Sun fully playable, but Puyo Puyo Sun is extremely slow.
					</p>
					<div class="wippix">
						<img src="wippics/0310/mausuke_1.png" alt="Mausuke no Ojama the World (c) 1996 Data East" width="320" height="240" />
						<img src="wippics/0310/mausuke_2.png" alt="The intro of Mausuke no Ojama the World" width="320" height="240" />
						<img src="wippics/0310/mausuke_3.png" alt="The gameplay of Mausuke no Ojama the World" width="320" height="240" />
						<img src="wippics/0310/mausuke_4.png" alt="The gameplay of Mausuke no Ojama the World" width="320" height="240" />
						<img src="wippics/0310/mausuke_5.png" alt="The gameplay of Mausuke no Ojama the World" width="320" height="240" />
						<img src="wippics/0310/mausuke_6.png" alt="The gameplay of Mausuke no Ojama the World" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/puyosun_1.png" alt="Puyo Puyo Sun (c) 1996 Compile" width="320" height="240" />
						<img src="wippics/0310/puyosun_2.png" alt="The intro of Puyo Puyo Sun" width="320" height="240" />
						<img src="wippics/0310/puyosun_3.png" alt="The intro of Puyo Puyo Sun" width="320" height="240" />
						<img src="wippics/0310/puyosun_4.png" alt="The intro of Puyo Puyo Sun" width="320" height="240" />
						<img src="wippics/0310/puyosun_5.png" alt="The intro of Puyo Puyo Sun" width="320" height="240" />
						<img src="wippics/0310/puyosun_6.png" alt="The gameplay of Puyo Puyo Sun" width="320" height="240" />
						<img src="wippics/0310/puyosun_7.png" alt="The gameplay of Puyo Puyo Sun" width="320" height="240" />
						<img src="wippics/0310/puyosun_8.png" alt="The gameplay of Puyo Puyo Sun" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-27</h2>
					<p>
					R. Belmont fixed the ST-V crash that happened with -nosound. Howard Casto submitted some more input port fixes to various drivers. Stefan Jokisch added Space Attack / Head On to the vicdual driver.
					</p>
					<div class="wippix">
						<img src="wippics/0310/sspacaho_1.png" alt="Space Attack / Head On (c) 1979 Sega" width="224" height="256" />
						<img src="wippics/0310/sspacaho_2.png" alt="The gameplay of Space Attack / Head On" width="224" height="256" />
						<img src="wippics/0310/sspacaho_3.png" alt="The gameplay of Space Attack / Head On" width="224" height="256" />
						<img src="wippics/0310/sspacaho_4.png" alt="The gameplay of Space Attack / Head On" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-26</h2>
					<p>
					Olivier Galibert rewrote the RF5C68 sound chip emulation. Nathan Woods sent another patch that integrates some MESS specific fileio functionality. David Haywood fixed Xain'd Sleena from locking up in the attract mode. Pierpaolo Prazzoli and MooglyGuy fixed some problems in the Hyperstone CPU core.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-25</h2>
					<p>
					Olivier Galibert fixed the pitch (again) in the SegaPCM sound core and fixed some bug that was triggered by Power Drift trying to play out-of-range samples. Stefan Jokisch sent in a driver for Super Speed Race. David Haywood fixed the sprite colors in Shienryu. R. Belmont added ElSemi's SCSP sound chip emulator to the ST-V driver, but the sound and music only works properly in Shienryu.
					</p>
					<div class="wippix">
						<img src="wippics/0310/sspeedr_1.png" alt="Super Speed Race (c) 1979 Midway" width="248" height="376" />
						<img src="wippics/0310/sspeedr_2.png" alt="The gameplay of Super Speed Race" width="248" height="376" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/shienryu_7.png" alt="Shienryu (c) 1997 Warashi" width="240" height="320" />
						<img src="wippics/0310/shienryu_8.png" alt="The intro of Shienryu" width="240" height="320" />
						<img src="wippics/0310/shienryu_9.png" alt="The gameplay of Shienryu" width="240" height="320" />
						<img src="wippics/0310/shienryu_10.png" alt="The gameplay of Shienryu" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-24</h2>
					<p>
					BUT submitted a preliminary driver for Thunder Ceptor II, it's working but background graphics aren't emulated. Aaron Giles added another two dozen new clones to miscellaneous Atari drivers and about 40 to the polygon games. Pierpaolo Prazzoli added Asterock, an Asteroids clone to the Asteroids driver. David Haywood sent in another ST-V update that improves graphics emulation and fixes the colors in Baku Baku Animal. Jarek Burczynski added Cosmo to the 8080bw driver and emulated the background/foreground graphics and DAC sound in Heli Fire.
					</p>
					<div class="wippix">
						<img src="wippics/0310/tceptor2_1.png" alt="Thunder Ceptor II (c) 1986 Namco" width="272" height="224" />
						<img src="wippics/0310/tceptor2_2.png" alt="The intro of Thunder Ceptor II" width="272" height="224" />
						<img src="wippics/0310/tceptor2_3.png" alt="The gameplay of Thunder Ceptor II" width="272" height="224" />
						<img src="wippics/0310/tceptor2_4.png" alt="The gameplay of Thunder Ceptor II" width="272" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/helifire_1.png" alt="Heli Fire (c) 1980 Nintendo" width="224" height="248" />
						<img src="wippics/0310/helifire_2.png" alt="The gameplay of Heli Fire" width="224" height="248" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-23</h2>
					<p>
					David Haywood sent in an update to the ST-V driver, making Baku Baku Animal playable. Leon van Rooij sent in an update to the Windows Direct3D code, fixing a bug that caused a black screen in rotated ST-V games. Aaron Giles sent in an Atari System 2 driver update with two dozen new clones. smf sent in a small update to the Namco System 11 driver cleaning up things. Curt Coder converted Zaxxon to use tilemaps in the foreground graphics layer, and corrected the CPU speed in it. Brian A. Troha added the proper initialization to the term2la1 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0310/bakubaku_1.png" alt="Baku Baku Animal (c) 1995 Sega" width="320" height="224" />
						<img src="wippics/0310/bakubaku_2.png" alt="The intro of Baku Baku Animal" width="320" height="224" />
						<img src="wippics/0310/bakubaku_3.png" alt="The gameplay of Baku Baku Animal" width="320" height="224" />
						<img src="wippics/0310/bakubaku_4.png" alt="The gameplay of Baku Baku Animal" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-22</h2>
					<p>
					smf sent in another update to the Namco System 11 driver, improving the MDEC decoding and enabling Soul Edge (Ver. A) since it seems to work fine.
					</p>
					<div class="wippix">
						<img src="wippics/0310/souledge_1.png" alt="Soul Edge (c) 1995 Namco" width="320" height="240" />
						<img src="wippics/0310/souledge_2.png" alt="The intro of Soul Edge" width="320" height="240" />
						<img src="wippics/0310/souledge_3.png" alt="The gameplay of Soul Edge" width="320" height="240" />
						<img src="wippics/0310/souledge_4.png" alt="The gameplay of Soul Edge" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-21</h2>
					<p>
					Aaron Giles sent in an updated Atari System 1 driver with many new clones and fixed multiplexed sprites in Road Runner. Chris Hardy added the US version of Perfect Soldiers called Superior Soldiers to the Irem M-92 driver. Pierpaolo Prazzoli added Sky Raiders, a bootleg of Uni War S, to the Galaxian driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-20</h2>
					<p>
					smf sent in a major update to the Namco System 11 driver, making Tekken, Tekken 2, Xevious 3D/G and Prime Goal EX work. Nathan Woods sent in another small patch that improves some MESS-specific functionality.
					</p>
					<div class="wippix">
						<img src="wippics/0310/tekken_1.png" alt="Tekken (c) 1994 Namco" width="512" height="480" />
						<img src="wippics/0310/tekken_2.png" alt="The intro of Tekken" width="512" height="480" />
						<img src="wippics/0310/tekken_3.png" alt="The gameplay of Tekken" width="512" height="480" />
						<img src="wippics/0310/tekken_4.png" alt="The gameplay of Tekken" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/tekken2_1.png" alt="Tekken 2 (c) 1995 Namco" width="512" height="480" />
						<img src="wippics/0310/tekken2_2.png" alt="The intro of Tekken 2" width="512" height="480" />
						<img src="wippics/0310/tekken2_3.png" alt="The gameplay of Tekken 2" width="512" height="480" />
						<img src="wippics/0310/tekken2_4.png" alt="The gameplay of Tekken 2" width="512" height="480" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/xevi3dg_1.png" alt="Xevious 3D/G (c) 1995 Namco" width="320" height="240" />
						<img src="wippics/0310/xevi3dg_2.png" alt="The intro of Xevious 3D/G" width="320" height="240" />
						<img src="wippics/0310/xevi3dg_3.png" alt="The intro of Xevious 3D/G" width="320" height="240" />
						<img src="wippics/0310/xevi3dg_4.png" alt="The gameplay of Xevious 3D/G" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/primglex_1.png" alt="Prime Goal EX (c) 1996 Namco" width="320" height="240" />
						<img src="wippics/0310/primglex_2.png" alt="The intro of Prime Goal EX" width="320" height="240" />
						<img src="wippics/0310/primglex_3.png" alt="The gameplay of Prime Goal EX" width="320" height="240" />
						<img src="wippics/0310/primglex_4.png" alt="The gameplay of Prime Goal EX" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-19</h2>
					<p>
					James Bright submitted a modification to the -listxml function to also list the memory maps of the driver. Olivier Galibert added LDTASK, STTASK and ABSF opcodes to the V60 CPU core.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-18</h2>
					<p>
					Milan Koci added the US version of Strider 2 to the ZN driver, but it's not working.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-17</h2>
					<p>
					Aaron Giles added a few new Gauntlet, Gauntlet 2 and Vindicators Part II ROM sets, and cleaned up the drivers. Barry Harris fixed some of the recently added Street Fighter 2 bootlegs so that they work now.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-16</h2>
					<p>
					R. Belmont sent in a driver for Bishi Bashi Champ Mini Game Senshuken, it's playable with sound but some graphics are wrong possibly due to a bad ROM. Pierpaolo Prazzoli fixed Vs. Super Xevious and Vs. Freedom Force in the VSNES driver. David Haywood fixed a DMA problem in the SH-2 CPU core that caused broken tile graphics in Shienryu, so Shienryu is now mostly playable although some sprite colors are off.
					</p>
					<div class="wippix">
						<img src="wippics/0310/bishi_1.png" alt="Bishi Bashi Champ Mini Game Senshuken (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0310/bishi_2.png" alt="The intro of Bishi Bashi Champ Mini Game Senshuken" width="288" height="224" />
						<img src="wippics/0310/bishi_3.png" alt="The intro of Bishi Bashi Champ Mini Game Senshuken" width="288" height="224" />
						<img src="wippics/0310/bishi_4.png" alt="The gameplay of Bishi Bashi Champ Mini Game Senshuken" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/supxevs_1.png" alt="Vs. Super Xevious (c) 1986 Namco" width="256" height="240" />
						<img src="wippics/0310/supxevs_2.png" alt="The gameplay of Vs. Super Xevious" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/vsfdf_1.png" alt="Vs. Freedom Force (c) 1988 Sunsoft" width="256" height="240" />
						<img src="wippics/0310/vsfdf_2.png" alt="The gameplay of Vs. Freedom Force" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/shienryu_1.png" alt="Shienryu (c) 1997 Warashi" width="240" height="320" />
						<img src="wippics/0310/shienryu_2.png" alt="The intro of Shienryu" width="240" height="320" />
						<img src="wippics/0310/shienryu_3.png" alt="The intro of Shienryu" width="240" height="320" />
						<img src="wippics/0310/shienryu_4.png" alt="The gameplay of Shienryu" width="240" height="320" />
						<img src="wippics/0310/shienryu_5.png" alt="The gameplay of Shienryu" width="240" height="320" />
						<img src="wippics/0310/shienryu_6.png" alt="The gameplay of Shienryu" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-15</h2>
					<p>
					Olivier Galibert fixed some bugs in the SH-2 DMA thanks to information from sthief.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-14</h2>
					<p>
					Peter Rittwage submitted an addition of Q*bert test ROMs. David Haywood added the correct ROMs to Gorkans.
					</p>
					<div class="wippix">
						<img src="wippics/0310/gorkans_1.png" alt="Gorkans (c) 1983 Techstar" width="224" height="288" />
						<img src="wippics/0310/gorkans_2.png" alt="The intro of Gorkans" width="224" height="288" />
						<img src="wippics/0310/gorkans_3.png" alt="The gameplay of Gorkans" width="224" height="288" />
						<img src="wippics/0310/gorkans_4.png" alt="The gameplay of Gorkans" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-13</h2>
					<p>
					Aaron Giles fixed the CPU speedup in Area 51 / Maximum Force Duo R3000 version, and fixed the timer problems for good (hopefully). Jarek Burczynski added sound to Mogura Desse. Pierpaolo Prazzoli sent in a preliminary driver for Pro Yakyuu Nyuudan Test Tryout, it's not working too well yet. Olivier Galibert added a hack to get correct music in Sol Divide.
					</p>
					<div class="wippix">
						<img src="wippics/0310/tryout_1.png" alt="Pro Yakyuu Nyuudan Test Tryout (c) 1985 Data East" width="256" height="256" />
						<img src="wippics/0310/tryout_2.png" alt="The gameplay of Pro Yakyuu Nyuudan Test Tryout" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-12</h2>
					<p>
					Tomasz Slanina sent in a driver for Gorkans, it's working except graphics are bad because graphics ROMs are missing. Tomasz Slanina also added sprites, tile banking, sound and colors to Main Event (SNK), and sent in a very preliminary driver for Whizz which only works up to the title screen. David Haywood added Route X, a Route 16 bootleg. Nathan Woods sent in another patch fixing some small things. Olivier Galibert and Aaron Giles fixed more bugs in the timer system and SH-2 CPU core. R. Belmont fixed the sample banking in Air Combat. El Condor submitted a fix for DIP switches in Dragonball Z.
					</p>
					<div class="wippix">
						<img src="wippics/0310/mainsnk_1.png" alt="Main Event (SNK) (c) 1984 SNK" width="272" height="216" />
						<img src="wippics/0310/mainsnk_2.png" alt="The intro of Main Event (SNK)" width="272" height="216" />
						<img src="wippics/0310/mainsnk_3.png" alt="The gameplay of Main Event (SNK)" width="272" height="216" />
						<img src="wippics/0310/mainsnk_4.png" alt="The gameplay of Main Event (SNK)" width="272" height="216" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/whizz_1.png" alt="Whizz (c) 1989 Philko" width="384" height="224" />
						<img src="wippics/0310/whizz_2.png" alt="The intro of Whizz" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-11</h2>
					<p>
					Pierpaolo Prazzoli and Mike Coates added Dodgem to the zac2650 driver. Phil Stroffolino sent in an update to the Namco System 22 driver, adding gouraud shading. David Haywood added various non-working Street Fighter 2 bootlegs to the CPS-1 driver. Brian A. Troha added the European BIOS to the ST-V driver. David Haywood updated insideoutboy's old Marine Date driver to compile, but it's not completely working yet. R. Belmont adjusted the Flower tempo.
					</p>
					<div class="wippix">
						<img src="wippics/0310/dodgem_1.png" alt="Dodgem (c) 1979 Zaccaria" width="360" height="384" />
						<img src="wippics/0310/dodgem_2.png" alt="The gameplay of Dodgem" width="360" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0310/marinedt_1.png" alt="Marine Date (c) 1981 Taito" width="224" height="288" />
						<img src="wippics/0310/marinedt_2.png" alt="The gameplay of Marine Date" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-10</h2>
					<p>
					Aaron Giles sent in another update to the timer system, fixing Exterminator and the Atari polygon games. Stefan Jokisch added controls to Sundance, making it playable. Tomasz Slanina sent in a driver for Lady Frog. Nathan Woods fixed the REP CMPSW instruction in the i86 CPU core and added the ability to customize disassemblies in the drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0310/ladyfrog_1.png" alt="Lady Frog (c) 1990 Mondial Games" width="200" height="256" />
						<img src="wippics/0310/ladyfrog_2.png" alt="The gameplay of Lady Frog" width="200" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-09</h2>
					<p>
					sedn fixed the Super Chase sample ROM loading. Stefan Jokisch sent in an update to the Canyon Bomber driver, fixing sprite positions and adding the language ROM.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-08</h2>
					<p>
					Nathan Woods fixed a screenshot handling bug that affected Space Invaders and moved some MESS specific code around. Tomasz Slanina fixed the screen orientation in Dorachan and added some tiny fixes to KO Punch and Cabaret, but they're still not working. Curt Coder submitted fixed inputs to Hanaroku and cocktail mode fixes to the Shoot Out driver. kobat fixed another bug that was in the V60 CPU core.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-07</h2>
					<p>
					Lawrence Gold sent in a patch that makes the usage of inline functions more consistent. Aaron Giles added another early version of Gravitar called Lunar Battle, a few international Cloak &amp; Dagger versions, a newer version of the Atari licensed Dig Dug and another set of Tempest. Aaron Giles also fixed the V60 CPU core that was causing problems in Outrunners and other games.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-06</h2>
					<p>
					Brian A. Troha updated various drivers with documentation and DIP switch fixes. Aaron Giles cleaned up the Food Fight driver and added a few clones to it. Stefan Jokisch added Sub Hunter, a clone of Depthcharge, to the vicdual driver. Roman Scherzer fixed a small crash bug in the harddisk writing functions.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-05</h2>
					<p>
					Smitdogg and Dave Widel added Touchdown Fever 2 to the SNK driver.
					</p>
					<div class="wippix">
						<img src="wippics/0310/tdfever2_1.png" alt="Touchdown Fever 2 (c) 1988 SNK" width="224" height="384" />
						<img src="wippics/0310/tdfever2_2.png" alt="The gameplay of Touchdown Fever 2" width="224" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-10-04</h2>
					<p>
					El Condor submitted some DIP switch fixes to various drivers.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-03</h2>
					<p>
					Tomasz Slanina added correct MCU emulation and MCU ROM to Tiger Heli.
					</p>
					</div>

				<div class="row">
					<h2>2003-10-02</h2>
					<p>
					Tomasz Slanina sent in a driver for Dorachan, it works but is missing sound emulation.
					</p>
					<div class="wippix">
						<img src="wippics/0310/dorachan_1.png" alt="Dorachan (c) 1980 Craul Denshi" width="240" height="240" />
						<img src="wippics/0310/dorachan_2.png" alt="The gameplay of Dorachan" width="240" height="240" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-10-01</h2>
					<p>
					Pierpaolo Prazzoli added Demoneye-X to the Red Alert driver (it's missing sound and has wrong colors), added cocktail mode to Red Alert, added Phantomas (a clone of Spectar) to the Exidy driver, and added Donkey Kong 3 bootleg to the dkong driver.
					</p>
					<div class="wippix">
						<img src="wippics/0310/demoneye_1.png" alt="Demoneye-X (c) 1981 Irem" width="240" height="256" />
						<img src="wippics/0310/demoneye_2.png" alt="The gameplay of Demoneye-X" width="240" height="256" />
						<img src="wippics/0310/demoneye_3.png" alt="The gameplay of Demoneye-X" width="240" height="256" />
						<img src="wippics/0310/demoneye_4.png" alt="The gameplay of Demoneye-X" width="240" height="256" />
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
