<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>November 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-11-30</h2>
					<p>
					Aaron Giles fixed Bally/Sente and Exidy440 drivers in 16bpp. Bryan McPhail added 051649 sound chip emulation to Haunted Castle, which now has fully emulated sound. Miguel Angel Horna submitted yet another Qsound driver, which sounds pretty good now. Zsolt Vasvari sent in a NSC8105 core and modified Seicross driver to use it.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-29</h2>
					<p>
					Zsolt Vasvari fixed 16bpp in sprint2 and cloud9, and he added another Centipede bootleg romset. Aaron Giles and Ernesto Corvi submitted a working Turbo driver. Mike Haaland added another Phoenix romset. Bryan McPhail added correct implementation of the 005289 sound chip to Nemesis.
					</p>
					<div class="wippix">
						<img src="wippics/9911/turb_1.png" alt="Turbo (c) 1981 Sega" width="280" height="248" />
						<img src="wippics/9911/turb_2.png" alt="The gameplay of Turbo" width="280" height="248" />
						<img src="wippics/9911/turb_3.png" alt="The gameplay of Turbo" width="280" height="248" />
						<img src="wippics/9911/turb_4.png" alt="The gameplay of Turbo" width="280" height="248" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-28</h2>
					<p>
					SUZ fixed some graphics problems in Toaplan drivers. Zsolt Vasvari fixed dotron in 16bpp. Miguel Angel Horna and Paul Leaman both submitted a Qsound driver, but neither of them are working correctly. Luca Elia fixed a crash in f1gpstar. Jim Hernandez fixed the sound in TNKIII. Bryan McPhail fixed the sound in Raiden and D-Con, added the sound to Blood Brothers, and he also fixed some graphics problems in Raiden. J&uuml;rgen Buchm&uuml;ller simplified color PROM conversion functions.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-27</h2>
					<p>
					Luca Elia sent in a driver for Cisco Heat and F1 GrandPrix Star. Zsolt Vasvari fixed bullet colors in The Percussor, and he added 16bpp support to z80bw.
					</p>
					<div class="wippix">
						<img src="wippics/9911/cisc_1.png" alt="Cisco Heat (c) 1990 Jaleco" width="256" height="216" />
						<img src="wippics/9911/cisc_2.png" alt="The intro of Cisco Heat" width="256" height="216" />
						<img src="wippics/9911/cisc_3.png" alt="The gameplay of Cisco Heat" width="256" height="216" />
						<img src="wippics/9911/cisc_4.png" alt="The gameplay of Cisco Heat" width="256" height="216" />
					</div>
					<div class="wippix">
						<img src="wippics/9911/f1gp_1.png" alt="F1 GrandPrix Star (c) 1991 Jaleco" width="256" height="224" />
						<img src="wippics/9911/f1gp_2.png" alt="The intro of F1 GrandPrix Star" width="256" height="224" />
						<img src="wippics/9911/f1gp_3.png" alt="The gameplay of F1 GrandPrix Star" width="256" height="224" />
						<img src="wippics/9911/f1gp_4.png" alt="The gameplay of F1 GrandPrix Star" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-26</h2>
					<p>
					Phil Stroffolino sent in a preliminary driver for Mole Attack, but it's still got serious problems. Brian Lewis updated the generic SVGA arcade monitor driver. Scott Kelley sent in a Pinbo driver which only lacks sound (and sprite colors). Zsolt Vasvari added The Percussor to the Zodiack driver, and he fixed the collision detection in Crazy Balloon and in the TaitoSJ games.
					</p>
					<div class="wippix">
						<img src="wippics/9911/pinb_1.png" alt="Pinbo (c) 1985 Strike" width="224" height="256" />
						<img src="wippics/9911/pinb_2.png" alt="The gameplay of Pinbo" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9911/perc_1.png" alt="The Percussor (c) 1981 Orca" width="224" height="256" />
						<img src="wippics/9911/perc_2.png" alt="The intro of The Percussor" width="224" height="256" />
						<img src="wippics/9911/perc_3.png" alt="The gameplay of The Percussor" width="224" height="256" />
						<img src="wippics/9911/perc_4.png" alt="The gameplay of The Percussor" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-25</h2>
					<p>
					Brad Oliver sent in a driver for Atari Soccer, but it's missing sound and a graphics ROM. Roberto Fresca added highscore saving to Kageki. Takahiro Nogi fixed some problems in the sample playing of Pole Position.
					</p>
					<div class="wippix">
						<img src="wippics/9911/socc_1.png" alt="Atari Soccer (c) 197? Atari" width="304" height="256" />
						<img src="wippics/9911/socc_2.png" alt="The gameplay of Atari Soccer" width="304" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-24</h2>
					<p>
					Roberto Fresca added highscore saving to Flak Attack. Tatsuyuki Satoh added more accurate noise sound to the Moon Cresta sound emulation. Ernesto Corvi hooked up the two missing samples to the Pole Position driver.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-23</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed some problems with the new Moon Cresta sound emulation. Keith Wilkins sent in a minor update to the Namco System 2 driver. Roberto Fresca added highscore saving to Baraduke and Metro-Cross. Takahiro Nogi added partial stereo sound to Pole Position. Manuel Abadia fixed Sky Kid and Dragon Buster colors.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-22</h2>
					<p>
					E. Watanabe fixed a wbmlju sprite problem. Keith Wilkins fixed quite a few bugs in the Namco System 2, most notably the problem with valkyrie. Tatsuyuki Satoh fixed a cpu interleaving problem in Elevator Action. J&uuml;rgen Buchm&uuml;ller modified the way in which mooncrst sound is generated. Aaron Giles, Ernesto Corvi and J&uuml;rgen have submitted a fully working Pole Position 1 / 2 driver, it only lacks explosion and screeching tires samples. Takahiro Nogi merged Kageki into TNZS driver. Nicola did some more abstraction of the ROM_REGION structure. Lee Taylor added a Galaxian clone called Swarm and four Space Invaders clones. Zsolt Vasvari fixed galpanic, senjyo, williams in 16bpp modes.
					</p>
					<div class="wippix">
						<img src="wippics/9911/pole_1.png" alt="Pole Position (c) 1982 Namco" width="256" height="224" />
						<img src="wippics/9911/pole_2.png" alt="The gameplay of Pole Position" width="256" height="224" />
						<img src="wippics/9911/pole_3.png" alt="Pole Position 2 (c) 1983 Namco" width="256" height="224" />
						<img src="wippics/9911/pole_4.png" alt="The gameplay of Pole Position 2" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-21</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller fixed -listinfo with samples and -verifysamples. Quench partially merged Kageki to the TNZS driver. Manuel Abadia fixed the resolution in Sky Kid, Dragon Buster, Metro Cross and Baraduke.
					</p>
					<div class="wippix">
						<img src="wippics/9911/skyk_1.png" alt="Sky Kid (c) 1985 Namco" width="288" height="224" />
						<img src="wippics/9911/skyk_2.png" alt="The intro of Sky Kid" width="288" height="224" />
						<img src="wippics/9911/skyk_3.png" alt="The gameplay of Sky Kid" width="288" height="224" />
						<img src="wippics/9911/skyk_4.png" alt="The gameplay of Sky Kid" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9911/drgn_1.png" alt="Dragon Buster (c) 1984 Namco" width="288" height="224" />
						<img src="wippics/9911/drgn_2.png" alt="The intro of Dragon Buster" width="288" height="224" />
						<img src="wippics/9911/drgn_3.png" alt="The gameplay of Dragon Buster" width="288" height="224" />
						<img src="wippics/9911/drgn_4.png" alt="The gameplay of Dragon Buster" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-20</h2>
					<p>
					Quench added Dr. Toppel's Adventure to the TNZS driver. Manuel Abadia sent in a driver for Sky Kid / Dragon Buster, but the colors aren't quite correct yet. Tatsuyuki Satoh added support for Delta-T ADPCM of Y8950, and he modified Ginga Ninkyouden driver to use it. Phil Stroffolino fixed the input ports in Double Dragon 3 and Combatribes.
					</p>
					<div class="wippix">
						<img src="wippics/9911/drto_1.png" alt="Dr. Toppel's Adventure (c) 1987 Taito" width="224" height="256" />
						<img src="wippics/9911/drto_2.png" alt="The intro of Dr. Toppel's Adventure" width="224" height="256" />
						<img src="wippics/9911/drto_3.png" alt="The gameplay of Dr. Toppel's Adventure" width="224" height="256" />
						<img src="wippics/9911/drto_4.png" alt="The gameplay of Dr. Toppel's Adventure" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-19</h2>
					<p>
					Zsolt Vasvari fixed arcadecl, blockout, exidy, superqix, missile. CAB fixed some sound related things in CPS-1 driver. Aaron Giles updated williams, cyberbal and vindictr drivers to not initialize pointers in MRA. Dan Boris submitted a different version of the I-Robot driver. Carlos A. Lozano Baides has made a preliminary driver for Super Volley Ball, but it's still got several problems. Roberto Fresca added highscore support for Kick and Run, Mexico 86 and Kiki Kaikai.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-18</h2>
					<p>
					Michael Soderstrom fixed a Hang-On crash bug. Zsolt Vasvari fixed 16-bit modes in the following drivers: popeye, qix, route16, m79amb, ccastle. Nicola Salmoria fixed the controls in Ikari 3 in the later levels, and he added Dr. Toppel to the TNZS driver, but it's not yet working correctly. CAB fixed bad noise in 8-bit emulation of C140.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-17</h2>
					<p>
					Manuel Abadia sent in drivers for Baraduke and Metrocross. Zsolt Vasvari fixed 16-bit modes in the following drivers: wow, system1, suprloco, spiders, zaxxon, nitedrvr, gameplan, circus, robotbwl, yard, warpwarp. He also fixed Extra Bases, which is now playable. Ernesto Corvi fixed sound in all the games using Namco sound system driven by a HD63701 (incl. Baraduke and Metrocross). Nicola added another Rock'n Rope romset. Takahiro Nogi fixed Samurai (Taito) colors, and he patched protection in Yuke Yuke Yamaguchi-kun, which is now working. Manuel Abadia added better sprite color marking to Flak Attack driver. Bryan McPhail sent in a driver for Dynamite Duke / Double Dynamite, and he fixed a palette bug in POW.
					</p>
					<div class="wippix">
						<img src="wippics/9911/metr_1.png" alt="Metro-Cross (c) 1985 Namco" width="256" height="224" />
						<img src="wippics/9911/metr_2.png" alt="The gameplay of Metro-Cross" width="256" height="224" />
						<img src="wippics/9911/metr_3.png" alt="The gameplay of Metro-Cross" width="256" height="224" />
						<img src="wippics/9911/metr_4.png" alt="The gameplay of Metro-Cross" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9911/bara_1.png" alt="Baraduke (c) 1985 Namco" width="256" height="224" />
						<img src="wippics/9911/bara_2.png" alt="The intro of Baraduke" width="256" height="224" />
						<img src="wippics/9911/bara_3.png" alt="The gameplay of Baraduke" width="256" height="224" />
						<img src="wippics/9911/bara_4.png" alt="The gameplay of Baraduke" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9911/dynd_1.png" alt="Dynamite Duke (c) 1989 Fabtek" width="256" height="224" />
						<img src="wippics/9911/dynd_2.png" alt="The intro of Dynamite Duke" width="256" height="224" />
						<img src="wippics/9911/dynd_3.png" alt="The gameplay of Dynamite Duke" width="256" height="224" />
						<img src="wippics/9911/dynd_4.png" alt="The gameplay of Dynamite Duke" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-16</h2>
					<p>
					Dan Boris finally sent in the I, Robot driver. Mathis Rosenhauer fixed Discs of Tron backdrop. Nicola Salmoria fixed a bug which made black colors become transparent. Bryan McPhail sent in a driver for D-Con.
					</p>
					<div class="wippix">
						<img src="wippics/9911/dcon_1.png" alt="D-Con (c) 1992 Success" width="320" height="224" />
						<img src="wippics/9911/dcon_2.png" alt="The intro of D-Con" width="320" height="224" />
						<img src="wippics/9911/dcon_3.png" alt="The gameplay of D-Con" width="320" height="224" />
						<img src="wippics/9911/dcon_4.png" alt="The gameplay of D-Con" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-15</h2>
					<p>
					Zsolt Vasvari fixed galaxian, galaga, gaplus, bosco, astrof and leprechn in 16-bit mode. Nicola Salmoria fixed the colors in Vicdual games. Bryan McPhail added Combatribes to the Double Dragon 3 driver. Aaron Giles fixed a small bug in memory.c.
					</p>
					<div class="wippix">
						<img src="wippics/9911/ctri_1.png" alt="Combatribes (c) 1990 Technos" width="320" height="232" />
						<img src="wippics/9911/ctri_2.png" alt="The intro of Combatribes" width="320" height="232" />
						<img src="wippics/9911/ctri_3.png" alt="The gameplay of Combatribes" width="320" height="232" />
						<img src="wippics/9911/ctri_4.png" alt="The gameplay of Combatribes" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-14</h2>
					<p>
					Aaron Giles fixed some TMS34010 graphics bugs. Tatsuyuki Satoh fixed LFO in YM-2151, and he modified Namco System 1 driver to use tilemaps. Bryan McPhail fixed Double Dragon 3. Mathis Rosenhauer added functionality for loading and saving gzipped cheat files. Ernesto Corvi fixed a small bug in the debugger.
					</p>
					<div class="wippix">
						<img src="wippics/9911/ddra_1.png" alt="Double Dragon 3 (c) 1990 Technos" width="320" height="232" />
						<img src="wippics/9911/ddra_2.png" alt="The gameplay of Double Dragon 3" width="320" height="232" />
						<img src="wippics/9911/ddra_3.png" alt="The gameplay of Double Dragon 3" width="320" height="232" />
						<img src="wippics/9911/ddra_4.png" alt="The gameplay of Double Dragon 3" width="320" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-13</h2>
					<p>
					Phil Stroffolino sent in WIP drivers for Thief, Shanghai Kid and Double Dragon 3, but none of them are working. Aaron Giles sent in a TMS34010 update with accurate timing, more functionality and he also sent in a Smash TV sound hardware speedup. Manuel Abadia sent in a driver for Flak Attack. Phil Stroffolino also did some sound fixes, 8-bit color and a new romset for Twin16 driver.
					</p>
					<div class="wippix">
						<img src="wippics/9911/flka_1.png" alt="Flak Attack (c) 1987 Konami" width="224" height="240" />
						<img src="wippics/9911/flka_2.png" alt="The intro of Flak Attack" width="224" height="240" />
						<img src="wippics/9911/flka_3.png" alt="The gameplay of Flak Attack" width="224" height="240" />
						<img src="wippics/9911/flka_4.png" alt="The gameplay of Flak Attack" width="224" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-12</h2>
					<p>
					Dan Boris and John Dickson have gotten I, Robot fully playable, but don't yet expect to see it in the next beta. CAB fixed some C140 and Namco System 2 sound related problems. Zsolt Vasvari fixed sound in Checkman. Bernd Wiebelt cleaned up Cinematronics artwork functions.
					</p>
					<div class="wippix">
						<img src="wippics/9911/irob_1.png" alt="I, Robot (c) 1983 Atari" width="256" height="256" />
						<img src="wippics/9911/irob_2.png" alt="The gameplay of I, Robot" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-11</h2>
					<p>
					Bernd Wiebelt removed one of the ugly Atari vector hacks in preparation for removing some color prom structures from MAME. Aaron Giles had a go at optimizing M72 raster interrupts, but there might be some problems. Somebody hinted about faster TMS34010 games. Manuel Abadia fixed several Ajax problems. Malcolm fixed some problems in lazercmd and medlanes. Takahiro Nogi added another Karate Champ romset. Zsolt Vasvari added Checkman to the Galaxian driver, but sound isn't yet working because of a bad rom. Bryan McPhail added sprite buffering to Karnov, Chelnov and Dec8 games, and he also speeded up R-Type Leo.
					</p>
					<div class="wippix">
						<img src="wippics/9911/chec_1.png" alt="Check Man (c) 1982 Jaleco" width="224" height="256" />
						<img src="wippics/9911/chec_2.png" alt="The gameplay of Check Man" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-10</h2>
					<p>
					With help from Nao, Bryan McPhail fixed NEC core problems and now Hook and Dream Soccer 94 are fully playable. Some miscellaneous Japanese romsets were added.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-09</h2>
					<p>
					Quench fixed some graphics problems in Chuka Taisen. Nicola added some clones to the Namco System 2 driver.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-08</h2>
					<p>
					Takahiro Nogi fixed some palette problems in Bogey Manor, but some still exist. Bernd Wiebelt fixed a bug in the FM routines which led to missing noise effects. Lax adjusted some more sound frequencies. Luca Elia added Kick Off to the Mega System 1 driver. Stefan Becker fixed a Namco System 2 crash with Sparc systems. Ernesto Corvi added proper emulation for Dragon Spirit, Dangerous Seed and Blazer key chips.
					</p>
					<div class="wippix">
						<img src="wippics/9911/kick_1.png" alt="Kick Off (c) 1988 Jaleco" width="256" height="224" />
						<img src="wippics/9911/kick_2.png" alt="The intro of Kick Off" width="256" height="224" />
						<img src="wippics/9911/kick_3.png" alt="The intro of Kick Off" width="256" height="224" />
						<img src="wippics/9911/kick_4.png" alt="The gameplay of Kick Off" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-07</h2>
					<p>
					Shingo Suzuki fixed the speed of Break Thru and some DIP settings. Nicola partially fixed KiKi KaiKai so that you can start a game, but it still hangs soon after. Bryan McPhail added Perfect Soldiers to the M92 driver.
					</p>
					<div class="wippix">
						<img src="wippics/9911/psol_1.png" alt="Perfect Soldiers (c) 1993 Irem" width="320" height="240" />
						<img src="wippics/9911/psol_2.png" alt="The intro of Perfect Soldiers" width="320" height="240" />
						<img src="wippics/9911/psol_3.png" alt="The gameplay of Perfect Soldiers" width="320" height="240" />
						<img src="wippics/9911/psol_4.png" alt="The gameplay of Perfect Soldiers" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-06</h2>
					<p>
					Takahiro Nogi sent in a driver for Kageki. Nicola Salmoria fixed a Swimmer graphics bug. Bryan McPhail fixed a small graphics bug in Alpha68k driver. Aaron Giles fixed a sound bug in some Atari games. Another romset was added to Fantasy. Bryan McPhail added Thunder Blaster (Japanese version of Lethal Thunder) to the M92 driver and added the sample rom to Tumble Pop.
					</p>
					<div class="wippix">
						<img src="wippics/9911/kage_1.png" alt="Kageki (c) 1986 Taito" width="224" height="256" />
						<img src="wippics/9911/kage_2.png" alt="The intro of Kageki" width="224" height="256" />
						<img src="wippics/9911/kage_3.png" alt="The gameplay of Kageki" width="224" height="256" />
						<img src="wippics/9911/kage_4.png" alt="The gameplay of Kageki" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-05</h2>
					<p>
					Paul Leaman did some more fixes to the Leland drivers. CAB fixed quite some C140 problems. Jarek Burczynski fixed a small bug in YM2151.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-04</h2>
					<p>
					Luca Elia added Big Striker to the Mega System 1 driver. Bryan McPhail fixed some graphics glitches in Raiden.
					</p>
					<div class="wippix">
						<img src="wippics/9911/bigs_1.png" alt="Big Striker (c) 1992 Jaleco" width="256" height="224" />
						<img src="wippics/9911/bigs_2.png" alt="The intro of Big Striker" width="256" height="224" />
						<img src="wippics/9911/bigs_3.png" alt="The intro of Big Striker" width="256" height="224" />
						<img src="wippics/9911/bigs_4.png" alt="The gameplay of Big Striker" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-11-03</h2>
					<p>
					Phil Stroffolino fixed Cuebrick sound. Roberto Fresca added highscore saving to Azurian Attack and Orbitron. Yasuhiro Ogawa added some new Japanese romsets. Keith Wilkins sent in a minor update to the Namco System 2 driver with proper pen marking and fixed problems with incorrect color blocks. John Dickson has made some progress with I, Robot, but don't expect to see anything soon.
					</p>
				</div>

				<div class="row">
					<h2>1999-11-02</h2>
					<p>
					Aaron Giles fixed an Exterminator graphics bug. Nicola added Kiki Kaikai to the Mexico 86 driver, but only attract mode works.
					</p>
					<div class="wippix">
						<img src="wippics/9911/kiki_1.png" alt="KiKi KaiKai (c) 1986 Taito" width="224" height="256" />
						<img src="wippics/9911/kiki_2.png" alt="The attract mode of KiKi KaiKai" width="224" height="256" />
					</div>
				</div>

				<div class="rowlast">
					<h2>1999-11-01</h2>
					<p>
					Nicola Salmoria and Ernesto Corvi have fixed Mexico 86 and Kick &amp; Run. Lax fixed many sound frequencies. Yasuhiro Ogawa added a correct Mega Zone romset.
					</p>
					<div class="wippix">
						<img src="wippics/9911/mexi_1.png" alt="Mexico 86 (c) 1987 Micro Research" width="256" height="224" />
						<img src="wippics/9911/mexi_2.png" alt="The intro of Mexico 86" width="256" height="224" />
						<img src="wippics/9911/mexi_3.png" alt="The intro of Mexico 86" width="256" height="224" />
						<img src="wippics/9911/mexi_4.png" alt="The gameplay of Mexico 86" width="256" height="224" />
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
