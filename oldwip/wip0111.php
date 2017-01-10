<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>November 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-11-30</h2>
					<p>
					Uki converted the Fairyland Story / Onna Sanshirou driver to tilemaps and fixed some palette and sound problems. Aaron Giles improved the handling of AY8910 and YM2203 simultaneously, and fixed the all-black palette in Break Thru.</p>
					</div>

				<div class="row">
					<h2>2001-11-29</h2>
					<p>
					Jarek Burczynski added the ADPCM chip emulation to Roller Jammer, but both it and Tube Panic still lack sprite graphics, adding of which may be impossible without a MCU ROM dump. Aaron Giles fixed a probable crash in some Atari games, the Paperboy sound sync issue and Alley Master / Power Play background graphics. Stephane Humbert fixed DIP switch settings and flipscreen support in a few drivers.</p>
					</div>

				<div class="row">
					<h2>2001-11-28</h2>
					<p>
					Aaron Giles sent in a driver for Battletoads.
					</p>
					<div class="wippix">
						<img src="wippics/0111/btoa_1.png" alt="Battletoads (c) 1994 Rare" width="512" height="448" />
						<img src="wippics/0111/btoa_2.png" alt="The intro of Battletoads" width="512" height="448" />
						<img src="wippics/0111/btoa_3.png" alt="The gameplay of Battletoads" width="512" height="448" />
						<img src="wippics/0111/btoa_4.png" alt="The gameplay of Battletoads" width="512" height="448" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-27</h2>
					<p>
					Stephane Humbert fixed DIP switch settings and input ports in Congo Bongo, Xevious and Zaxxon drivers. inside out boy submitted a driver for Super Cross II, which is playable but has a few small problems.
					</p>
					<div class="wippix">
						<img src="wippics/0111/sprc_1.png" alt="Super Cross II (c) 1986 GM Shoji" width="240" height="224" />
						<img src="wippics/0111/sprc_2.png" alt="The intro of Super Cross II" width="240" height="224" />
						<img src="wippics/0111/sprc_3.png" alt="The gameplay of Super Cross II" width="240" height="224" />
						<img src="wippics/0111/sprc_4.png" alt="The gameplay of Super Cross II" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-26</h2>
					<p>
					Julien Frelat submitted a bugfix for the (REP) OUTSB and OUTSW opcodes for the i86 CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-25</h2>
					<p>
					Phil Stroffolino added a patch to the Namco NA-1 driver for Numan Athletics, which is now playable but with graphics glitches. Bryan McPhail resent an old bug fix to the 68020 CPU core which fixes a crash in Under Fire.
					</p>
					<div class="wippix">
						<img src="wippics/0111/numa_1.png" alt="Numan Athletics (c) 1993 Namco" width="304" height="224" />
						<img src="wippics/0111/numa_2.png" alt="The intro of Numan Athletics" width="304" height="224" />
						<img src="wippics/0111/numa_3.png" alt="The gameplay of Numan Athletics" width="304" height="224" />
						<img src="wippics/0111/numa_4.png" alt="The gameplay of Numan Athletics" width="304" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-24</h2>
					<p>
					Bart T. submitted a small bugfix to the NEC disassembler. Stefan Jokisch resubmitted an improvement to the C-Chip emulation for Bonze Adventure.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-23</h2>
					<p>
					William Kucharski and Phil Stroffolino fixed the tilemap crashing, hopefully for good. David Haywood added the Japanese ROM set to the Block Out driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-22</h2>
					<p>
					Stefan Jokisch partially fixed another tilemap crash bug.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-21</h2>
					<p>
					Luca Elia added Air Gallet to the Cave driver.
					</p>
					<div class="wippix">
						<img src="wippics/0111/agal_1.png" alt="Air Gallet (c) 1996 Banpresto" width="240" height="320" />
						<img src="wippics/0111/agal_2.png" alt="The intro of Air Gallet" width="240" height="320" />
						<img src="wippics/0111/agal_3.png" alt="The gameplay of Air Gallet" width="240" height="320" />
						<img src="wippics/0111/agal_4.png" alt="The gameplay of Air Gallet" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-20</h2>
					<p>
					Uki added correct sound banking to Kirameki Star Road.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-19</h2>
					<p>
					Aaron Giles fixed a bug where the DUMP command in the debugger caused it to crash.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-18</h2>
					<p>
					David Graves did some minor changes on the Taito drivers and merged some improvements from older submissions. Frank Palazzolo reported some progress with Asteroid sound emulation - only one of the sound effects remains incorrect. William Kucharski submitted yet another modification to the Toki cocktail mode support. Aaron Giles sent in some TMS34020 CPU core changes and a driver for Revolution X.
					</p>
					<div class="wippix">
						<img src="wippics/0111/revx_1.png" alt="Revolution X (c) 1994 Midway" width="403" height="253" />
						<img src="wippics/0111/revx_2.png" alt="The intro of Revolution X" width="403" height="253" />
						<img src="wippics/0111/revx_3.png" alt="The gameplay of Revolution X" width="403" height="253" />
						<img src="wippics/0111/revx_4.png" alt="The gameplay of Revolution X" width="403" height="253" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-17</h2>
					<p>
					Bryan McPhail fixed several problems in the Taito F3 driver, especially graphics glitches when zooming, fixing the road in Riding Fight and pitch in the football games. Bryan McPhail also added sound bankswitching for the Taito F3 driver. Gerardo Oporto fixed DIP switch settings in the D-Con driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-16</h2>
					<p>
					Aaron Giles fixed the WWF Mania protection properly. Libble added palette switching support to the Toy Pop driver. Kale submitted a VSNES driver update with some small bugfixes and fixed colors.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-15</h2>
					<p>
					Aaron Giles adjusted the speed in Buck Rogers and Subroc-3D, fixed colors in Quantum, re-added the correct Exerion color PROM and added another version of Road Blasters that uses a different Slapstic chip. Stefan Jokisch fixed the Gameplan games which were broken in 0.56.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-14</h2>
					<p>
					Jarek Burczynski reported some progress on the road graphics emulation in Roller Jammer. Phil Stroffolino added an alternate set of Chinese Hero and Shanghai Kid, and sent in a Namco NB-2 driver with support for Outfoxies but it isn't much to look at since the graphics ROMs aren't dumped. Aaron Giles re-submitted some debugging features that haven't been included yet.
					</p>
					<div class="wippix">
						<img src="wippics/0111/rjam_1.png" alt="Roller Jammer (c) 1984 Nichibutsu" width="256" height="224" />
						<img src="wippics/0111/rjam_2.png" alt="The road of Roller Jammer" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-13</h2>
					<p>
					Bryan McPhail added Acrobat Mission to the Bombjack Twin driver. Aaron Giles fixed Subroc-3D from crashing. William Kucharski submitted another bug fix for the Toki cocktail mode.
					</p>
					<div class="wippix">
						<img src="wippics/0111/acro_1.png" alt="Acrobat Mission (c) 1991 Taito" width="224" height="256" />
						<img src="wippics/0111/acro_2.png" alt="The intro of Acrobat Mission" width="224" height="256" />
						<img src="wippics/0111/acro_3.png" alt="The intro of Acrobat Mission" width="224" height="256" />
						<img src="wippics/0111/acro_4.png" alt="The gameplay of Acrobat Mission" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-12</h2>
					<p>
					Stefan Jokisch sent in a driver for Destroyer, which lacks sound and has garbled graphics for the waves, but works otherwise. Aaron Giles cleaned up Frank Palazzolo's Buck Rogers and Subroc-3D drivers and merged them with the Turbo driver. Neither of them has sound yet, and Subroc-3D crashes at random.
					</p>
					<div class="wippix">
						<img src="wippics/0111/buck_1.png" alt="Buck Rogers: Planet of Zoom (c) 1982 Sega" width="312" height="224" />
						<img src="wippics/0111/buck_2.png" alt="The intro of Buck Rogers: Planet of Zoom" width="312" height="224" />
						<img src="wippics/0111/buck_3.png" alt="The gameplay of Buck Rogers: Planet of Zoom" width="312" height="224" />
						<img src="wippics/0111/buck_4.png" alt="The gameplay of Buck Rogers: Planet of Zoom" width="312" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0111/subr_1.png" alt="Subroc-3D (c) 1982 Sega" width="240" height="240" />
						<img src="wippics/0111/subr_2.png" alt="The intro of Subroc-3D" width="240" height="240" />
						<img src="wippics/0111/subr_3.png" alt="The gameplay of Subroc-3D" width="240" height="240" />
						<img src="wippics/0111/subr_4.png" alt="The gameplay of Subroc-3D" width="240" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0111/dest_1.png" alt="Destroyer (c) 1977 Atari" width="256" height="240" />
						<img src="wippics/0111/dest_2.png" alt="The intro of Destroyer" width="256" height="240" />
						<img src="wippics/0111/dest_3.png" alt="The gameplay of Destroyer" width="256" height="240" />
						<img src="wippics/0111/dest_4.png" alt="The gameplay of Destroyer" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-11</h2>
					<p>
					Uki added Onna Sanshirou to The Fairyland Story driver.
					</p>
					<div class="wippix">
						<img src="wippics/0111/onna_1.png" alt="Onna Sanshirou (c) 1985 Taito" width="256" height="224" />
						<img src="wippics/0111/onna_2.png" alt="The intro of Onna Sanshirou" width="256" height="224" />
						<img src="wippics/0111/onna_3.png" alt="The gameplay of Onna Sanshirou" width="256" height="224" />
						<img src="wippics/0111/onna_4.png" alt="The gameplay of Onna Sanshirou" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-10</h2>
					<p>
					Stephane Humbert fixed DIP switch settings and input ports in several drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-09</h2>
					<p>
					Bryan McPhail added SD Gundam Psycho Salamander no Kyoui to the D-Con driver.
					</p>
					<div class="wippix">
						<img src="wippics/0111/sdgn_1.png" alt="SD Gundam Psycho Salamander no Kyoui (c) 1991 Banpresto" width="320" height="224" />
						<img src="wippics/0111/sdgn_2.png" alt="The intro of SD Gundam Psycho Salamander no Kyoui" width="320" height="224" />
						<img src="wippics/0111/sdgn_3.png" alt="The gameplay of SD Gundam Psycho Salamander no Kyoui" width="320" height="224" />
						<img src="wippics/0111/sdgn_4.png" alt="The gameplay of SD Gundam Psycho Salamander no Kyoui" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-08</h2>
					<p>
					William Kucharski submitted fixes for Toki cocktail modes.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-07</h2>
					<p>
					Kale resubmitted some DIP switch and input port fixes.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-06</h2>
					<p>
					Pierpaolo Prazzoli submitted several fixes for input ports and DIP switch settings.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-05</h2>
					<p>
					Luca Elia added Quiz Kokology 2 to the Seta driver.
					</p>
					<div class="wippix">
						<img src="wippics/0111/qzkk_1.png" alt="Quiz Kokology 2 (c) 1993 Tecmo" width="384" height="240" />
						<img src="wippics/0111/qzkk_2.png" alt="The intro of Quiz Kokology 2" width="384" height="240" />
						<img src="wippics/0111/qzkk_3.png" alt="The intro of Quiz Kokology 2" width="384" height="240" />
						<img src="wippics/0111/qzkk_4.png" alt="The gameplay of Quiz Kokology 2" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-11-04</h2>
					<p>
					Stephane Humbert updated Jack the Giantkiller driver, fixing DIP switch settings and input ports.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-03</h2>
					<p>
					William Kucharski resubmitted a load of flip screen support and cocktail mode patches.
					</p>
				</div>

				<div class="row">
					<h2>2001-11-02</h2>
					<p>
					Olivier Galibert resubmitted the OS dependant keys and tilemap viewing support.
					</p>
				</div>

				<div class="rowlast">
					<h2>2001-11-01</h2>
					<p>
					Brad Oliver and Aaron Giles fixed several compile problems.
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
