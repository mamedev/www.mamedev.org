<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>May 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-05-31</h2>
					<p>
					Carl-Henrik Sk&aring;rstedt and Darren Olafson fixed Outzone graphics priority (helps after the second level). Tatsuyuki Satoh fixed Great Swordsman, and the sound works now. Aaron Giles sent in an update to the ADPCM core, to support better the newer Atari games. 'Elestir' added the two missing sound channels to Nemesis etc, speech to Salamander and some other things to the driver. Nicola added Spelunker to the M62 driver, and fixed Spelunker 2 romset. Paul Leaman added some Leland games to the driver and Alley Master is the first playable Leland game in the driver, but it still needs polishing before it can be released. Mark McDougall sent in some screenshots of Seibu's Street Fight, but the driver is not yet sent to the team. Zsolt Vasvari made the Galaxian/Scramble hardware games multi-session friendly, and fixed the star field in Strategy X.
					</p>
					<div class="wippix">
						<img src="wippics/9905/spel_1.png" alt="Spelunker (c) 1985 IREM" width="384" height="256" />
						<img src="wippics/9905/spel_2.png" alt="The gameplay of Spelunker" width="384" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/alle_1.png" alt="Alley Master (c) 198? Cinematronics" width="240" height="320" />
						<img src="wippics/9905/alle_2.png" alt="The gameplay of Alley Master" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/stfi_1.png" alt="Street Fight (c) 1986 Seibu" width="256" height="224" />
						<img src="wippics/9905/stfi_2.png" alt="The gameplay of Street Fight" width="256" height="224" />
						<img src="wippics/9905/stfi_3.png" alt="The gameplay of Street Fight" width="256" height="224" />
						<img src="wippics/9905/stfi_4.png" alt="The gameplay of Street Fight" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-30</h2>
					<p>
					Mike Coates fixed a Xenophobe scroll bug. Paul Leaman sent another Leland driver update, but none of the games are yet playable. Nicola has begun working on Shanghai, but it contains a strange graphics chip so the progress will probably be very slow.
					</p>
				</div>

				<div class="row">
					<h2>1999-05-29</h2>
					<p>
					Darren Olafson has made some cleanup on the Toaplan driver and also included a work-in-progress driver for Demon's World. Nicola added Quiz Sangokushi to the Pang driver.
					</p>
					<div class="wippix">
						<img src="wippics/9905/qsan_1.png" alt="Quiz Sangokushi (c) 1991 Capcom" width="384" height="240" />
						<img src="wippics/9905/qsan_2.png" alt="The intro of Quiz Sangokushi" width="384" height="240" />
						<img src="wippics/9905/qsan_3.png" alt="The gameplay of Quiz Sangokushi" width="384" height="240" />
						<img src="wippics/9905/qsan_4.png" alt="The gameplay of Quiz Sangokushi" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-28</h2>
					<p>
					Mike Coates fixed some interrupt bugs of the asm 68k core, and now Spinmaster, Sengoku 2 and Riding Hero work on it. Zsolt Vasvari added Mars, New Sinbad 7 and the original Devil Fish to the Artic games driver. Phil Stroffolino sent in a new Legend of Kage driver with working backgrounds. He also sent a much improved Munch Mobile driver. Andrew Prime added cycle skipping to the most recent Neo Geo games, and Nicola partly fixed a small graphics glitch in Thrash Rally.
					</p>
					<div class="wippix">
						<img src="wippics/9905/lkag_1.png" alt="Legend of Kage (c) 1984 Taito" width="240" height="224" />
						<img src="wippics/9905/lkag_2.png" alt="The gameplay of Legend of Kage" width="240" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/mars_1.png" alt="Mars (c) 1981 Artic" width="224" height="256" />
						<img src="wippics/9905/mars_2.png" alt="The gameplay of Mars" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/news_1.png" alt="New Sinbad 7 (c) 1983 ATW USA" width="224" height="256" />
						<img src="wippics/9905/news_2.png" alt="The gameplay of New Sinbad 7" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-27</h2>
					<p>
					Marco Cassili has been cleaning up the dips of the SNK driver. Aaron Giles sent in a small Atari update with user-friendly messages about the quirks of the games shown at the startup. Tatsuyuki Satoh sent in a driver for Appoooh, but colors are wrong.
					</p>
					<div class="wippix">
						<img src="wippics/9905/appo_1.png" alt="Appoooh (c) 1984 Sega" width="256" height="240" />
						<img src="wippics/9905/appo_2.png" alt="The intro of Appoooh" width="256" height="240" />
						<img src="wippics/9905/appo_3.png" alt="The intro of Appoooh" width="256" height="240" />
						<img src="wippics/9905/appo_4.png" alt="The gameplay of Appoooh" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-26</h2>
					<p>
					Zsolt Vasvari moved Wanted to run on the Marine Boy driver. Nicola fixed the colors of Eggs, since it had a different PROM than Scrambled Egg. Mike Coates added support for previous PC to the asm 68k core. Nicola added Saturn to the Blue Print driver.
					</p>
					<div class="wippix">
						<img src="wippics/9905/satu_1.png" alt="Saturn (c) 1983 Jaleco" width="224" height="256" />
						<img src="wippics/9905/satu_2.png" alt="The gameplay of Saturn" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-25</h2>
					<p>
					Tatsuyuki Satoh sent in a preliminary Chack'n Pop driver, but it doesn't really work since the MCU (68705) rom image is missing. Marco Cassili fixed some dips from the Exidy driver.
					</p>
					<div class="wippix">
						<img src="wippics/9905/chak_1.png" alt="Chack'n Pop (c) 1983 Taito" width="256" height="224" />
						<img src="wippics/9905/chak_2.png" alt="The gameplay of Chack'n Pop" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-24</h2>
					<p>
					Phil Stroffolino finally figured out the sprite format of Munch Mobile, but the driver is still far from complete. Zsolt Vasvari fixed Devil Fish colors.
					</p>
					<div class="wippix">
						<img src="wippics/9905/mnch_1.png" alt="Munch Mobile (c) 1983 SNK" width="256" height="320" />
						<img src="wippics/9905/mnch_2.png" alt="The gameplay of Munch Mobile" width="256" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-23</h2>
					<p>
					Mirko Buffoni sent in a pretty much complete Champion Skill driver, which only lacks music.
					</p>
					<div class="wippix">
						<img src="wippics/9905/cska_1.png" alt="Champion Skill (c) 1993 IGS" width="512" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-22</h2>
					<p>
					Zsolt Vasvari sent in a new Orca driver with Funky Bee and Sky Lancer, and another update with Hoccer. Nicola sent in a driver for Extermination and fixed the Orca logo in Funky Bee. Phil Stroffolino sent in a work-in-progress Munch Mobile driver, but it lacks sprites and some other stuff. Aaron Giles sent in a driver for Badlands.
					</p>
					<div class="wippix">
						<img src="wippics/9905/funk_1.png" alt="Funky Bee (c) 1982 Orca" width="224" height="232" />
						<img src="wippics/9905/funk_2.png" alt="The gameplay of Funky Bee" width="224" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/skyl_1.png" alt="Sky Lancer (c) 1983 Orca" width="224" height="232" />
						<img src="wippics/9905/skyl_2.png" alt="The gameplay of Sky Lancer" width="224" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/hocc_1.png" alt="Hoccer (c) 1983 Eastern Micro Electronics" width="224" height="256" />
						<img src="wippics/9905/hocc_2.png" alt="The gameplay of Hoccer" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/extr_1.png" alt="Extermination (c) 1987 Taito" width="224" height="256" />
						<img src="wippics/9905/extr_2.png" alt="The gameplay of Extermination" width="224" height="256" />
						<img src="wippics/9905/extr_3.png" alt="The gameplay of Extermination" width="224" height="256" />
						<img src="wippics/9905/extr_4.png" alt="The gameplay of Extermination" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/badl_1.png" alt="Badlands (c) 1989 Atari" width="336" height="240" />
						<img src="wippics/9905/badl_2.png" alt="The gameplay of Badlands" width="336" height="240" />
						<img src="wippics/9905/badl_3.png" alt="The race ending screen of Badlands" width="336" height="240" />
						<img src="wippics/9905/badl_4.png" alt="The gameplay of Badlands" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-21</h2>
					<p>
					Zsolt Vasvari sent in a new Orca driver with Marine Boy, Changes and Springer. Tatsuyuki Satoh sent in small modifications to the Namco System 1 driver, nothing breathtaking. Phil Stroffolino sent in a driver for very old SNK games, but of the bunch only Marvin's Maze is mostly playable. Roberto Fresca added high score saving support for Sichuan 2 and Wanted.
					</p>
					<div class="wippix">
						<img src="wippics/9905/mari_1.png" alt="Marine Boy (c) 1982 Orca" width="256" height="224" />
						<img src="wippics/9905/mari_2.png" alt="The gameplay of Marine Boy" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/chan_1.png" alt="Changes (c) 1982 Orca" width="256" height="224" />
						<img src="wippics/9905/chan_2.png" alt="The gameplay of Changes" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/spri_1.png" alt="Springer (c) 1982 Orca" width="224" height="256" />
						<img src="wippics/9905/spri_2.png" alt="The gameplay of Springer" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/marv_1.png" alt="Marvin's Maze (c) 1983 SNK" width="224" height="288" />
						<img src="wippics/9905/marv_2.png" alt="The intro of Marvin's Maze" width="224" height="288" />
						<img src="wippics/9905/marv_3.png" alt="The gameplay of Marvin's Maze" width="224" height="288" />
						<img src="wippics/9905/marv_4.png" alt="The gameplay of Marvin's Maze" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-20</h2>
					<p>
					Nicola did a good improvement on the Namco System 86 driver and Return of Ishtar now works. Roberto Fresca has added high score saving functions to Air Buster. Darren Olafson sent some pictures from a work-in-progress Demon's World driver. Nicola also fixed all the problems from Xain'd Sleena and added the original romset. Aaron Giles did another big Atari games update with a Skull &amp; Crossbones driver, better graphics priorities handling for Xybots and System 2 games and other little things.
					</p>
					<div class="wippix">
						<img src="wippics/9905/roish_1.png" alt="Return of Ishtar (c) 1986 Namco" width="288" height="224" />
						<img src="wippics/9905/roish_2.png" alt="The intro of Return of Ishtar" width="288" height="224" />
						<img src="wippics/9905/roish_3.png" alt="The gameplay of Return of Ishtar" width="288" height="224" />
						<img src="wippics/9905/roish_4.png" alt="The gameplay of Return of Ishtar" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/devil_1.png" alt="Demon's World (c) 1989 Toaplan" width="320" height="240" />
						<img src="wippics/9905/devil_2.png" alt="The gameplay of Demon's World" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/skul_1.png" alt="Skull &amp; Crossbones (c) 1989 Atari" width="336" height="240" />
						<img src="wippics/9905/skul_2.png" alt="The intro of Skull &amp; Crossbones" width="336" height="240" />
						<img src="wippics/9905/skul_3.png" alt="The gameplay of Skull &amp; Crossbones" width="336" height="240" />
						<img src="wippics/9905/skul_4.png" alt="Gridle's ALT tags are the reasons of these school shootings" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-19</h2>
					<p>
					Nicola added two new Namco System 86 games, Genpei ToumaDen works nicely but Return of Ishtar has major problems. Paul Leaman did a bit of cleanup on the YM-2413 code. Roberto Fresca added high score support to Mutant Night.
					</p>
					<div class="wippix">
						<img src="wippics/9905/genp_1.png" alt="Genpei ToumaDen (c) 1986 Namco" width="288" height="224" />
						<img src="wippics/9905/genp_2.png" alt="The intro of Genpei ToumaDen" width="288" height="224" />
						<img src="wippics/9905/genp_3.png" alt="The intro of Genpei ToumaDen" width="288" height="224" />
						<img src="wippics/9905/genp_4.png" alt="The gameplay of Genpei ToumaDen" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-18</h2>
					<p>
					Mike Coates added the background to No Man's Land. Zsolt Vasvari added Dogfight and Moguchan to the Zodiack driver.
					</p>
					<div class="wippix">
						<img src="wippics/9905/nomn_1.png" alt="No Man's Land (c) 1980 Universal" width="192" height="256" />
						<img src="wippics/9905/nomn_2.png" alt="The gameplay of No Man's Land" width="192" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/dogf_1.png" alt="Dogfight (c) 1983 Thunderbolt" width="224" height="256" />
						<img src="wippics/9905/dogf_2.png" alt="The gameplay of Dogfight" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/mogu_1.png" alt="Moguchan (c) 1982 Orca" width="224" height="256" />
						<img src="wippics/9905/mogu_2.png" alt="The gameplay of Moguchan" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-17</h2>
					<p>
					Zsolt Vasvari sent in a driver for Zodiack. Phil Stroffolino sent in a tilemap update which should eventually help the Namco System 1 driver speedwise. Paul Leaman fixed Hatena and Quiz Tonosama no Yabou, the roms aren't actually bad.
					</p>
					<div class="wippix">
						<img src="wippics/9905/zodi_1.png" alt="Zodiack (c) 1983 Orca" width="224" height="256" />
						<img src="wippics/9905/zodi_2.png" alt="The intro of Zodiack" width="224" height="256" />
						<img src="wippics/9905/zodi_3.png" alt="The gameplay of Zodiack" width="224" height="256" />
						<img src="wippics/9905/zodi_4.png" alt="The gameplay of Zodiack" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/hatena_1.png" alt="Hatena no Dai-Bouken (c) 1990 Capcom" width="384" height="240" />
						<img src="wippics/9905/hatena_2.png" alt="The gameplay of Hatena no Dai-Bouken" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-16</h2>
					<p>
					Mike Coates sent in a No Man's Land driver. Marco Cassili fixed the dips of Outzone and Tatsujin / Truxton.
					</p>
				</div>

				<div class="row">
					<h2>1999-05-15</h2>
					<p>
					Darren Olafson sent in the Toaplan driver with Outzone and Tatsujin / Truxton support.
					</p>
					<div class="wippix">
						<img src="wippics/9905/outzon_1.png" alt="Outzone (c) 1990 Toaplan" width="240" height="320" />
						<img src="wippics/9905/outzon_2.png" alt="The gameplay of Outzone" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-14</h2>
					<p>
					Valerio Verrando added Galaga '84 to the Galaga driver. Mathis Rosenhauer modified the PNG snapshot code again to work better. Nicola modified the palette manager to get rid of some flickering when the palette is compressed.
					</p>
				</div>

				<div class="row">
					<h2>1999-05-13</h2>
					<p>
					Manuel Abadia sent in a complete Phozon driver. Nicola added another Ninja Kid 2 rom set.
					</p>
					<div class="wippix">
						<img src="wippics/9905/phozon_1.png" alt="Phozon (c) 1983 Namco" width="224" height="288" />
						<img src="wippics/9905/phozon_2.png" alt="The intro of Phozon" width="224" height="288" />
						<img src="wippics/9905/phozon_3.png" alt="The intro of Phozon" width="224" height="288" />
						<img src="wippics/9905/phozon_4.png" alt="The gameplay of Phozon" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-12</h2>
					<p>
					Phil Stroffolino sent in preliminary Marvin's Maze and Munch Mobile drivers. Marvin's Maze works somewhat, but Munch Mobile doesn't work at all yet. Nicola added Hatena no Dai-Bouken to the Pang driver. Mike Coates finally fixed the Power Spikes 2 and F1 Dream bugs in both asm and C 68k cores.
					</p>
				</div>

				<div class="row">
					<h2>1999-05-11</h2>
					<p>
					J&uuml;rgen made the uPD7759 sound a little better and fixed some other things.
					</p>
				</div>

				<div class="row">
					<h2>1999-05-10</h2>
					<p>
					J&uuml;rgen fixed a TMS9900 debugger bug. Aaron Giles sent in a nice Atari update with two new drivers: Rampart and Shuuz, and correct graphics priority system for "Escape from the Planet of Robot Monsters". Tatsuyuki Satoh sent in a MUCH better version of the VLM5030 software emulator, but it is not yet quite as good as the samples, though better than the older one.
					</p>
					<div class="wippix">
						<img src="wippics/9905/ramp_1.png" alt="Rampart (c) 1991 Atari" width="336" height="240" />
						<img src="wippics/9905/ramp_2.png" alt="The intro of Rampart" width="336" height="240" />
						<img src="wippics/9905/ramp_3.png" alt="The intro of Rampart" width="336" height="240" />
						<img src="wippics/9905/ramp_4.png" alt="The gameplay of Rampart" width="336" height="240" />
						<img src="wippics/9905/ramp_5.png" alt="The gameplay of Rampart" width="336" height="240" />
						<img src="wippics/9905/ramp_6.png" alt="The gameplay of Rampart" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/shuuz_1.png" alt="Shuuz (c) 1990 Atari" width="336" height="240" />
						<img src="wippics/9905/shuuz_2.png" alt="The intro of Shuuz" width="336" height="240" />
						<img src="wippics/9905/shuuz_3.png" alt="The intro of Shuuz" width="336" height="240" />
						<img src="wippics/9905/shuuz_4.png" alt="The gameplay of Shuuz" width="336" height="240" />
						<img src="wippics/9905/shuuz_5.png" alt="The gameplay of Shuuz" width="336" height="240" />
						<img src="wippics/9905/shuuz_6.png" alt="The gameplay of Shuuz" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-09</h2>
					<p>
					Olivier Galibert converted Xain'd Sleena to tilemaps. Zsolt Vasvari fixed Minkey Monkey colors. J&uuml;rgen Buchm&uuml;ller fixed a Z80 bug involving interrupt flipflops. Gerald Vanderick added the original Crush Roller by Kural. Manuel Abadia sent in a Grobda driver.
					</p>
					<div class="wippix">
						<img src="wippics/9905/grob_1.png" alt="Grobda (c) 1984 Namco" width="224" height="288" />
						<img src="wippics/9905/grob_2.png" alt="The intro of Grobda" width="224" height="288" />
						<img src="wippics/9905/grob_3.png" alt="The gameplay of Grobda" width="224" height="288" />
						<img src="wippics/9905/grob_4.png" alt="The gameplay of Grobda" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-08</h2>
					<p>
					Mike Haaland updated some parts of the network code. Darren Olafson sent some pictures of a work-in-progress Tatsujin / Truxton driver.
					</p>
					<div class="wippix">
						<img src="wippics/9905/truxt_1.png" alt="Truxton (c) 1988 Taito" width="240" height="320" />
						<img src="wippics/9905/truxt_2.png" alt="The attract mode of Truxton" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-07</h2>
					<p>
					No significant news for today!? Impossible.
					</p>
				</div>

				<div class="row">
					<h2>1999-05-06</h2>
					<p>
					Zsolt Vasvari added a Quantum prototype romset. Bryan McPhail sent some pictures of a work-in-progress Raiden driver with also Oliver Bergmann and Randy Mongenel as its authors (Don't expect this driver to appear in the next MAME though)..
					</p>
					<div class="wippix">
						<img src="wippics/9905/raid_1.png" alt="Raiden (c) 1990 Seibu" width="224" height="256" />
						<img src="wippics/9905/raid_2.png" alt="The attract mode of Raiden" width="224" height="256" />
						<img src="wippics/9905/raid_3.png" alt="The attract mode of Raiden" width="224" height="256" />
						<img src="wippics/9905/raid_4.png" alt="The attract mode of Raiden" width="224" height="256" />
						<img src="wippics/9905/raid_5.png" alt="The attract mode of Raiden" width="224" height="256" />
						<img src="wippics/9905/raid_6.png" alt="The attract mode of Raiden" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-05</h2>
					<p>
					Mike Coates fixed the F1 Dream / Power Spikes 2 bug in the x86 assembler and probably also C cores. Marco Cassili fixed some dips in the System 16 drivers.
					</p>
				</div>

				<div class="row">
					<h2>1999-05-04</h2>
					<p>
					Gerald Vanderick added another Pac Man clone, and an Arabian clone. Mathis Rosenhauer modified the Lunar Lander artwork functions to support a new control panel by Nathan Strum. Jarek Parchanski sent in an updated SNK games driver with sound for all games except tdfever, and also Rad Action is added to the Ninja Kid 2 driver. Andrew Prime fixed Salamander graphics priorities at the end of level 3. Zsolt Vasvari sent in a driver for Minkey Monkey, and also improved World Tennis sound. Luca Elia fixed name entering in the Air Buster high score screen.
					</p>
					<div class="wippix">
						<img src="wippics/9905/rdact_1.png" alt="Rad Action (c) 1987 UPL" width="256" height="192" />
						<img src="wippics/9905/rdact_2.png" alt="The intro of Rad Action" width="256" height="192" />
						<img src="wippics/9905/rdact_3.png" alt="The gameplay of Rad Action" width="256" height="192" />
						<img src="wippics/9905/rdact_4.png" alt="The gameplay of Rad Action" width="256" height="192" />
					</div>
					<div class="wippix">
						<img src="wippics/9905/mmon_1.png" alt="Minkey Monkey (c) 1982 Technos" width="240" height="256" />
						<img src="wippics/9905/mmon_2.png" alt="The intro of Minkey Monkey" width="240" height="256" />
						<img src="wippics/9905/mmon_3.png" alt="The gameplay of Minkey Monkey" width="240" height="256" />
						<img src="wippics/9905/mmon_4.png" alt="The gameplay of Minkey Monkey" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-03</h2>
					<p>
					Olivier Galibert fixed Street Fighter 1 from crashing. Aaron Giles sent in a HUGE Atari games update with much cleaner drivers, better color tracking to keep palette remapping to a minimum, sound cpu speedups, Cyberball 2072 (2 player) driver, Klax with proper playfield/sprite priorities, Vindicators 1 and 2 shadow effects and better playfield/sprite priorities in Xybots.
					</p>
					<div class="wippix">
						<img src="wippics/9905/cyber_1.png" alt="Cyberball 2072 (2 player) (c) 1989 Atari" width="336" height="240" />
						<img src="wippics/9905/cyber_2.png" alt="The gameplay of Cyberball 2072" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-05-02</h2>
					<p>
					Ernesto Corvi sent in a very preliminary Thundercade driver (just to fix some quirks in the debugger). Valerio Verrando resent the Mouse Trap driver with two clones added. Phil Stroffolino finally got the correct colors for ASO, TNK3 and Athena. J&uuml;rgen Buchm&uuml;ller modified Major Havoc music speed to be more correct.
					</p>
				</div>

				<div class="rowlast">
					<h2>1999-05-01</h2>
					<p>
					Zsolt Vasvari sent in a driver for the game Wanted. It lacks correct colors though.
					</p>
					<div class="wippix">
						<img src="wippics/9905/want_1.png" alt="Wanted (c) 1984 Sigma" width="224" height="256" />
						<img src="wippics/9905/want_2.png" alt="The gameplay of Wanted" width="224" height="256" />
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
