<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>September 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-09-30</h2>
					<p>
					Tomasz Slanina sent in a driver for Moero Pro Yakyuu Homerun Kyousou, it is playable except that it has some graphics glitches and the sound emulation is not perfect. Olivier Galibert fixed another bug in the SegaPCM sound core. Mike O'Malley submitted an addition of Space Invaders and Galaxian test ROMs.
					</p>
					<div class="wippix">
						<img src="wippics/0309/homerun_1.png" alt="Moero Pro Yakyuu Homerun Kyousou (c) 1988 Jaleco" width="256" height="232" />
						<img src="wippics/0309/homerun_2.png" alt="The intro of Moero Pro Yakyuu Homerun Kyousou" width="256" height="232" />
						<img src="wippics/0309/homerun_3.png" alt="The gameplay of Moero Pro Yakyuu Homerun Kyousou" width="256" height="232" />
						<img src="wippics/0309/homerun_4.png" alt="The gameplay of Moero Pro Yakyuu Homerun Kyousou" width="256" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-29</h2>
					<p>
					Olivier Galibert fixed the interrupt stack, some floating point operations and added the NEGF opcode to the V60 CPU core, and he fixed the looping samples in the SegaPCM sound core. Tomasz Slanina sent in a driver for Jumping Cross, it's playable but has some graphics glitches.
					</p>
					<div class="wippix">
						<img src="wippics/0309/jcross_1.png" alt="Jumping Cross (c) 1984 SNK" width="224" height="288" />
						<img src="wippics/0309/jcross_2.png" alt="The intro of Jumping Cross" width="224" height="288" />
						<img src="wippics/0309/jcross_3.png" alt="The gameplay of Jumping Cross" width="224" height="288" />
						<img src="wippics/0309/jcross_4.png" alt="The gameplay of Jumping Cross" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-28</h2>
					<p>
					Pierpaolo Prazzoli added the original version of Mighty Monkey to the Super Cobra driver, Driving Force (Galaxian conversion) to the Galaxian driver and The Dealer to the Epos driver (doesn't work). Dang_Spot added the correct ROMs to Suzuka 8 Hours, making it work though with some graphics glitches. Tatsumaki fixed a small typo in the SegaPCM sound core that resulted in slightly wrong pitch of the samples. Bryan McPhail fixed the missing graphics on the continue screen in Act Fancer, and he fixed all the Dec8 games to correctly select the YM3812 or the YM3526 sound chip.
					</p>
					<div class="wippix">
						<img src="wippics/0309/suzuka8h_1.png" alt="Suzuka 8 Hours (c) 1992 Namco" width="288" height="224" />
						<img src="wippics/0309/suzuka8h_2.png" alt="The attract mode of Suzuka 8 Hours" width="288" height="224" />
						<img src="wippics/0309/suzuka8h_3.png" alt="The attract mode of Suzuka 8 Hours" width="288" height="224" />
						<img src="wippics/0309/suzuka8h_4.png" alt="The attract mode of Suzuka 8 Hours" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-27</h2>
					<p>
					Jason Lo fixed the graphics priorities in Bakuretsu Breaker. MASH added clones to Hit Me and Depth Charge. Brian A. Troha added the world version of Dynablaster to the Irem M-90 driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-26</h2>
					<p>
					Howard Casto submitted a bunch of drivers with old pedal hacks replaced with the new z axis and second pedal inputs. R. Belmont slightly improved the Bakuretsu Breaker music but it's still not perfect. Bryan Aldrich submitted an improvement to the compressed hard drive image functions to avoid storing duplicate blocks in the .chd file when creating it, making the file a little smaller if there was redundancy.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-25</h2>
					<p>
					R. Belmont sent in a patch for the sample playing in Bakuretsu Breaker but it doesn't improve the sound much. BUT fixed a bug where default key and mixer settings wouldn't get saved.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-24</h2>
					<p>
					David Haywood fixed the Time Pilot '84 graphics bug that appeared recently. David Haywood also fixed the backgrounds in Bakuretsu Breaker so it's playable, but sound is still not working and graphics priorities are wrong.
					</p>
					<div class="wippix">
						<img src="wippics/0309/bakubrkr_1.png" alt="Bakuretsu Breaker (c) 1992 Kaneko" width="224" height="256" />
						<img src="wippics/0309/bakubrkr_2.png" alt="The gameplay of Bakuretsu Breaker" width="224" height="256" />
						<img src="wippics/0309/bakubrkr_3.png" alt="The gameplay of Bakuretsu Breaker" width="224" height="256" />
						<img src="wippics/0309/bakubrkr_4.png" alt="The gameplay of Bakuretsu Breaker" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-23</h2>
					<p>
					Bryan McPhail fixed the sprites, colors and sound in Competition Golf Final Round, but the background tiles are still not decoded properly. Brian A. Troha added the USA version of Puzz Loop to the Super Kaneko Nova System driver. Nathan Woods forwarded a fix from MESS to the CMPSW instruction in the i86 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0309/compgolf_3.png" alt="Competition Golf Final Round (c) 1985 Data East" width="256" height="240" />
						<img src="wippics/0309/compgolf_4.png" alt="The gameplay of Competition Golf Final Round" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-22</h2>
					<p>
					Pierpaolo Prazzoli submitted an update to the Pac-Man driver, adding a few S2650 CPU based games such as Driving Force, Porky (decrypted by Peter Storey) and Eight Ball Action (conversion on Pac-Man hardware, decrypted by David Widel). Bryan McPhail sent in a patch to the light gun support code to fix shooting outside the screen.
					</p>
					<div class="wippix">
						<img src="wippics/0309/drivfrcp_1.png" alt="Driving Force (c) 1984 Shinkai Inc." width="224" height="256" />
						<img src="wippics/0309/drivfrcp_2.png" alt="The intro of Driving Force" width="224" height="256" />
						<img src="wippics/0309/drivfrcp_3.png" alt="The gameplay of Driving Force" width="224" height="256" />
						<img src="wippics/0309/drivfrcp_4.png" alt="The gameplay of Driving Force" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0309/porky_1.png" alt="Porky (c) 1985 Shinkai Inc." width="224" height="256" />
						<img src="wippics/0309/porky_2.png" alt="The gameplay of Porky" width="224" height="256" />
						<img src="wippics/0309/porky_3.png" alt="The gameplay of Porky" width="224" height="256" />
						<img src="wippics/0309/porky_4.png" alt="The gameplay of Porky" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0309/8bpm_1.png" alt="Eight Ball Action (c) 1985 Seatongrove Ltd" width="224" height="256" />
						<img src="wippics/0309/8bpm_2.png" alt="The gameplay of Eight Ball Action" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-21</h2>
					<p>
					Stefan Jokisch fixed the remaining problems in Embargo, so it's now playable.
					</p>
					<div class="wippix">
						<img src="wippics/0309/embargo_1.png" alt="Embargo (c) 1977 Cinematronics" width="256" height="240" />
						<img src="wippics/0309/embargo_2.png" alt="The gameplay of Embargo" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-20</h2>
					<p>
					Rene Single fixed the input port definitions in the PlayChoice-10 driver, to remove the light gun inputs from the non-gun games.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-19</h2>
					<p>
					Angelo Salese fixed a DMA problem in the ST-V driver that caused Princess Clara Daisakusen to crap out on some machines, but it's still not playable. Angelo Salese also submitted preliminary drivers written by him and Pierpaolo Prazzoli - Competition Golf Final Round (boots but isn't playable) and Yumefuda (doesn't even boot).
					</p>
					<div class="wippix">
						<img src="wippics/0309/compgolf_1.png" alt="Competition Golf Final Round (c) 1985 Data East" width="248" height="240" />
						<img src="wippics/0309/compgolf_2.png" alt="The gameplay of Competition Golf Final Round" width="248" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-18</h2>
					<p>
					Robin Merrill fixed Frogs to use a proper 3-way joystick instead of the previous incorrect setup that had a 2-way joystick with an extra button. Robin Merrill also fixed the default settings for the player 5-8 pedal2 input sequence.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-17</h2>
					<p>
					Bryan McPhail sent in some fixes to make MAME compile with pre-C99 compilers. MASH added Skelagon, the USA version of SF-X, to the Scramble driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-16</h2>
					<p>
					David Haywood added paddle support to Pop 'n Bounce thanks to information from Leon van Rooij.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-15</h2>
					<p>
					Justin Dawkins submitted a modification to the input ports in MK, MK2, MK3, UMK3 and wwfmania. Olivier Galibert sent in fixes to the SH2 CPU core to make it work in a dual setup, and he fixed the DMA1 interrupt vector in it. Olivier Galibert also sent in another fix to the SegaPCM sound chip emulation. Pierpaolo Prazzoli added Big Bucks to the Pac-Man driver.
					</p>
					<div class="wippix">
						<img src="wippics/0309/bigbucks_1.png" alt="Big Bucks (c) 1986 Dynasoft Inc." width="225" height="288" />
						<img src="wippics/0309/bigbucks_2.png" alt="The intro of Big Bucks" width="225" height="288" />
						<img src="wippics/0309/bigbucks_3.png" alt="The intro of Big Bucks" width="225" height="288" />
						<img src="wippics/0309/bigbucks_4.png" alt="The gameplay of Big Bucks" width="225" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-14</h2>
					<p>
					Stefan Jokisch added a little sanity check to the .cfg file loading, to prevent further problems with .cfg files that have been corrupted. R. Belmont added proper emulation of the serial ADC used for steering and gas controls in Racin' Force, and started implementing the ROZ layer support in it but nothing is visible yet.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-13</h2>
					<p>
					R. Belmont fixed the original version of Mustang from crashing.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-12</h2>
					<p>
					David Haywood added Super-X to the Dooyong driver.
					</p>
					<div class="wippix">
						<img src="wippics/0309/superx_1.png" alt="Super-X (c) 1994 N.T.C" width="240" height="384" />
						<img src="wippics/0309/superx_2.png" alt="The intro of Super-X" width="240" height="384" />
						<img src="wippics/0309/superx_3.png" alt="The gameplay of Super-X" width="240" height="384" />
						<img src="wippics/0309/superx_4.png" alt="The gameplay of Super-X" width="240" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-11</h2>
					<p>
					Angelo Salese submitted an update to the Chequered Flag driver, fixing enemy appearing, music tempo and steering.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-10</h2>
					<p>
					smf sent in an update to the Namco System 11 driver, making Kosodate Quiz My Angel 3 playable.
					</p>
					<div class="wippix">
						<img src="wippics/0309/myangel3_1.png" alt="Kosodate Quiz My Angel 3 (c) 1998 Namco" width="320" height="240" />
						<img src="wippics/0309/myangel3_2.png" alt="The intro of Kosodate Quiz My Angel 3" width="320" height="240" />
						<img src="wippics/0309/myangel3_3.png" alt="The gameplay of Kosodate Quiz My Angel 3" width="320" height="240" />
						<img src="wippics/0309/myangel3_4.png" alt="The gameplay of Kosodate Quiz My Angel 3" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-09</h2>
					<p>
					Howard Casto submitted the After Burner driver modified to use the newly implemented Z axis instead of the previous hack that used player 2 inputs for the throttle. Pierpaolo Prazzoli added Apocaljpse Now, a bootleg of Rescue, to the Super Cobra driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-08</h2>
					<p>
					smf sent in an update to the Namco System 11 driver, making Dancing Eyes playable with minor graphics glitches. Pierpaolo Prazzoli re-added Explorer (a Scramble bootleg) with sound. Olivier Galibert fixed the SegaPCM fix.
					</p>
					<div class="wippix">
						<img src="wippics/0309/danceyes_1.png" alt="Dancing Eyes (c) 1996 Namco" width="320" height="240" />
						<img src="wippics/0309/danceyes_2.png" alt="The intro of Dancing Eyes" width="320" height="240" />
						<img src="wippics/0309/danceyes_3.png" alt="The intro of Dancing Eyes" width="320" height="240" />
						<img src="wippics/0309/danceyes_4.png" alt="The gameplay of Dancing Eyes" width="320" height="240" />
						<img src="wippics/0309/danceyes_5.png" alt="The gameplay of Dancing Eyes" width="320" height="240" />
						<img src="wippics/0309/danceyes_6.png" alt="The gameplay of Dancing Eyes" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-07</h2>
					<p>
					Takahiro Nogi sent in a driver for Quiz &amp; Variety Sukusuku Inufuku, added Miyasu Nonki no Quiz 18-kin to the Welltris driver, added Ojanko Club to the ojankohs driver and fixed some problems in the aforementioned drivers. Manuel Abadia added another clone of Hangly-Man to the Pac-Man driver and the Japanese version of Bang! to the Gaelco2 driver. Olivier Galibert sent in a SegaPCM sound chip emulation cleanup with some fixes thrown in. Stefan Jokisch fixed a user interface bug that caused the selector to jump around when editing an input in the general input menu.
					</p>
					<div class="wippix">
						<img src="wippics/0309/inufuku_1.png" alt="Quiz &amp; Variety Sukusuku Inufuku (c) 1998 Video System Co" width="319" height="223" />
						<img src="wippics/0309/inufuku_2.png" alt="The intro of Quiz &amp; Variety Sukusuku Inufuku" width="319" height="223" />
						<img src="wippics/0309/inufuku_3.png" alt="The intro of Quiz &amp; Variety Sukusuku Inufuku" width="319" height="223" />
						<img src="wippics/0309/inufuku_4.png" alt="The intro of Quiz &amp; Variety Sukusuku Inufuku" width="319" height="223" />
						<img src="wippics/0309/inufuku_5.png" alt="The intro of Quiz &amp; Variety Sukusuku Inufuku" width="319" height="223" />
						<img src="wippics/0309/inufuku_6.png" alt="The gameplay of Quiz &amp; Variety Sukusuku Inufuku" width="319" height="223" />
					</div>
					<div class="wippix">
						<img src="wippics/0309/quiz18k_1.png" alt="Miyasu Nonki no Quiz 18-kin (c) 1992 EIM" width="320" height="224" />
						<img src="wippics/0309/quiz18k_2.png" alt="The intro of Miyasu Nonki no Quiz 18-kin" width="320" height="224" />
						<img src="wippics/0309/quiz18k_3.png" alt="The intro of Miyasu Nonki no Quiz 18-kin" width="320" height="224" />
						<img src="wippics/0309/quiz18k_4.png" alt="The gameplay of Miyasu Nonki no Quiz 18-kin" width="320" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0309/ojankoc_1.png" alt="Ojanko Club (c) 1986 V-System" width="256" height="240" />
						<img src="wippics/0309/ojankoc_2.png" alt="The intro of Ojanko Club" width="256" height="240" />
						<img src="wippics/0309/ojankoc_3.png" alt="The intro of Ojanko Club" width="256" height="240" />
						<img src="wippics/0309/ojankoc_4.png" alt="The gameplay of Ojanko Club" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-09-06</h2>
					<p>
					Nathan Woods sent in a patch that moves the .cfg file handling out of inptport.c into its own source file. Olivier Galibert added support for silence compression and fixed the end-of-sample garbage and 4x command length in the UPD7759 sound chip emulator.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-05</h2>
					<p>
					Robin Merrill further improved the 8 controller support. Tomasz Slanina sent in a quick and dirty fix for the LDPR opcode crash in the V60 CPU core.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-04</h2>
					<p>
					Nathan Woods sent some more MESS-specific fixes to the core and forwarded a small change to the interrupt handling in the PlayChoice-10 and VSNES from Brad Oliver. Stefan Jokisch fixed a bug that caused the volume settings get corrupted when loading old .cfg files. Robin Merrill submitted an improvement to the 8 player support, adding proper JOYCODEs for devices 5-8 and increasing the maximum number of mice and joysticks to 8.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-03</h2>
					<p>
					Stefan Jokisch improved the 8 player support and fixed a crash that happened when entering the general inputs menu. Brian A. Troha added Bakuretsu Breaker to the Kaneko16 driver but the background graphics are messed up in-game so it's not really playable.
					</p>
					</div>

				<div class="row">
					<h2>2003-09-02</h2>
					<p>
					R. Belmont sent in an update to the Konami System GX driver, adding Racin' Force and Konami's Open Golf Championship / Golfing Greats 2 (playable but the ROZ graphics layer is missing) and various other games that are not working due to unemulated protection.
					</p>
					<div class="wippix">
						<img src="wippics/0309/racinfrc_1.png" alt="Racin' Force (c) 1993 Konami" width="384" height="224" />
						<img src="wippics/0309/racinfrc_2.png" alt="The intro of Racin' Force" width="384" height="224" />
						<img src="wippics/0309/racinfrc_3.png" alt="The gameplay of Racin' Force" width="384" height="224" />
						<img src="wippics/0309/racinfrc_4.png" alt="The gameplay of Racin' Force" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0309/opengolf_1.png" alt="Konami's Open Golf Championship (c) 1994 Konami" width="384" height="224" />
						<img src="wippics/0309/opengolf_2.png" alt="The intro of Konami's Open Golf Championship" width="384" height="224" />
						<img src="wippics/0309/opengolf_3.png" alt="The intro of Konami's Open Golf Championship" width="384" height="224" />
						<img src="wippics/0309/opengolf_4.png" alt="The gameplay of Konami's Open Golf Championship" width="384" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-09-01</h2>
					<p>
					R. Belmont fixed a bug in the K056832 ROM readback, so the mask ROM tests work again in some of the Konami games. David Haywood and Angelo Salese submitted a major improvement to the Sega ST-V driver with Hanagumi Taisen Columns - Sakura Wars fully playable, except it's missing sound.
					</p>
					<div class="wippix">
						<img src="wippics/0309/hanagumi_1.png" alt="Hanagumi Taisen Columns - Sakura Wars (c) 1998 Sega" width="320" height="224" />
						<img src="wippics/0309/hanagumi_2.png" alt="The intro of Hanagumi Taisen Columns - Sakura Wars" width="320" height="224" />
						<img src="wippics/0309/hanagumi_3.png" alt="The intro of Hanagumi Taisen Columns - Sakura Wars" width="320" height="224" />
						<img src="wippics/0309/hanagumi_4.png" alt="The intro of Hanagumi Taisen Columns - Sakura Wars" width="320" height="224" />
						<img src="wippics/0309/hanagumi_5.png" alt="The intro of Hanagumi Taisen Columns - Sakura Wars" width="320" height="224" />
						<img src="wippics/0309/hanagumi_6.png" alt="The intro of Hanagumi Taisen Columns - Sakura Wars" width="320" height="224" />
						<img src="wippics/0309/hanagumi_7.png" alt="The gameplay of Hanagumi Taisen Columns - Sakura Wars" width="320" height="224" />
						<img src="wippics/0309/hanagumi_8.png" alt="The gameplay of Hanagumi Taisen Columns - Sakura Wars" width="320" height="224" />
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
