<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>February 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-02-28</h2>
					<p>
					Eric Hustvedt added another Mouse Trap clone, and Nicola fixed Zoo Keepers from crashing on the first bonus life stage.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-27</h2>
					<p>
					Aaron Giles has added some rounding to the timer system and fixed other bugs in it. He also sent in new Exidy 440 drivers with support for Chiller, Hit 'N Miss and Top Secret in addition to the old ones. J&uuml;rgen has made the z80 code faster with memory accesses.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-26</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller has fixed the Exidy 440 driver lock-ups for some machines, Phil Stroffolino has updated the tilemaps to support rotation and updated the SNK driver a bit, Zsolt Vasvari has added several clones (for Smash TV, Galaxian, Rampage, Satan's Hollow, Bosconian), and J&uuml;rgen has also fixed some timer system problems and worked on 6809 code.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-25</h2>
					<p>
					Brad Oliver and Nicola Salmoria have squished several bugs from the Zero Wing driver, Tatsuyuki Satoh has updated the FM engine yet again, and Aaron Giles fixed a timer system bug.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-24</h2>
					<p>
					Michael Adcock has sent in a new version of MAMEnet, the network version of MAME. This doesn't yet have a working interface so everything has to be configured from the command line. Analog input is still screwed in the network games. Luca Elia has added Legend of Makaj and P-47 USA to the Jaleco Mega System 1 driver, and Zsolt Vasvari added another Crush Roller set to the pacman driver.
					</p>
					<div class="wippix">
						<img src="wippics/9902/loma_1.png" alt="Legend of Makaj (c) 1988 Jaleco" width="256" height="240" />
						<img src="wippics/9902/loma_2.png" alt="The gameplay of Legend of Makaj" width="256" height="240" />
						<img src="wippics/9902/loma_3.png" alt="The gameplay of Legend of Makaj" width="256" height="240" />
						<img src="wippics/9902/loma_4.png" alt="The gameplay of Legend of Makaj" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-23</h2>
					<p>
					The CPS1 driver should now have mostly correct row scrollings and priorities. Tatsuyuki Satoh has updated the FM sound engine, mainly speeding up YM-2610 and fixing things. Darren Olafson has added Hellfire to the Zero Wing driver. Mathis Rosenhauer has updated the PNG routines yet again. Aaron Giles has fixed several things on the Exidy 440 driver, and Nicola has made dynamic palette system faster with games which have palette fades with a large number of colors.
					</p>
					<div class="wippix">
						<img src="wippics/9902/hell_1.png" alt="Hellfire (c) 1989 Toaplan" width="312" height="240" />
						<img src="wippics/9902/hell_2.png" alt="The intro of Hellfire" width="312" height="240" />
						<img src="wippics/9902/hell_3.png" alt="The gameplay of Hellfire" width="312" height="240" />
						<img src="wippics/9902/hell_4.png" alt="The gameplay of Hellfire" width="312" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-22</h2>
					<p>
					Bernd Wiebelt and Nicola Salmoria have made the quadra video modes faster, and Valerio Verrando added a 384x224 tweaked mode.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-21</h2>
					<p>
					Darren Olafson has made Zero Wing faster, and fixed the colors. John Butler fixed Road Blasters black screen, and Karl Stenerud has sent in a newer C m68k core. Zsolt Vasvari has worked on Berzerk, cleaning up and making it a bit faster. Nicola has added Power Spikes, which runs on the same hardware as Aero Fighters and Turbo Force.
					</p>
					<div class="wippix">
						<img src="wippics/9902/pspik_1.png" alt="Power Spikes (c) 1991 Video System Co." width="336" height="224" />
						<img src="wippics/9902/pspik_2.png" alt="The intro of Power Spikes" width="336" height="224" />
						<img src="wippics/9902/pspik_3.png" alt="The gameplay of Power Spikes" width="336" height="224" />
						<img src="wippics/9902/pspik_4.png" alt="Shoot the referee" width="336" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9902/zeron_1.png" alt="Zero Wing (c) 1989 Toaplan" width="312" height="240" />
						<img src="wippics/9902/zeron_2.png" alt="The intro of Zero Wing" width="312" height="240" />
						<img src="wippics/9902/zeron_3.png" alt="The gameplay of Zero Wing" width="312" height="240" />
						<img src="wippics/9902/zeron_4.png" alt="The gameplay of Zero Wing" width="312" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-20</h2>
					<p>
					Aaron Giles has submitted the Exidy 440 driver (with Cheyenne, Clay Pigeon, Combat, Crossbow, Showdown and Whodunit). Marek Olejnik has made an ASM version of the quadra routines, and it's about 2 times faster than before. Also, Mike Balfour has optimized the tilemap routines.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-19</h2>
					<p>
					Zsolt Vasvari has optimized the TMS34010 core, resulting in a 5% improvement in speed. The Namco System 2 games are a bit better - Cosmo Gang now runs its attract mode but the rest of it and Rolling Thunder 2 and Phelios are still broken, because of MCU issues. Phil Stroffolino has "finished" the Gaiden graphics driver. Nicola has added Digger, which runs on vicdual hardware. Luca Elia has made a Jaleco Mega System 1 driver, but currently only P-47 (Jap) and 64th Street are supported.
					</p>
					<div class="wippix">
						<img src="wippics/9902/digger_1.png" alt="Digger (c) 1980 ?????" width="256" height="256" />
						<img src="wippics/9902/digger_2.png" alt="The gameplay of Digger" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9902/p47_1.png" alt="P-47 (c) 1988 Jaleco" width="256" height="240" />
						<img src="wippics/9902/p47_2.png" alt="The intro of P-47" width="256" height="240" />
						<img src="wippics/9902/p47_3.png" alt="The gameplay of P-47" width="256" height="240" />
						<img src="wippics/9902/p47_4.png" alt="The gameplay of P-47" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-18</h2>
					<p>
					Marek Olejnik has contributed a quadra video mode. This means that the image is enlarged to fit the whole screen (not just doubled). And here are two screenshots from the preliminary Zero Wing driver by Darren Olafson.
					</p>
					<div class="wippix">
						<img src="wippics/9902/zero_1.png" alt="Zero Wing (c) 1989 Toaplan" width="320" height="240" />
						<img src="wippics/9902/zero_2.png" alt="The gameplay of Zero Wing" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-17</h2>
					<p>
					John Butler has improved the PNG (backdrop) support to cope with programs which always put 256 palette entries into the file. Fabrice Martinez has emulated the memory card and the calendar in the NeoGeo driver. Bryan fixed some tiny palette bugs in the dec8 driver.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-16</h2>
					<p>
					Bryan McPhail has emulated the Sly Spy protection (instead of patching it) and added this strange game which runs on the same hardware. Sound is coming soon too.
					</p>
					<div class="wippix">
						<img src="wippics/9902/bdash_1.png" alt="Boulder Dash (c) 1990 Data East" width="256" height="240" />
						<img src="wippics/9902/bdash_2.png" alt="The intro of Boulder Dash" width="256" height="240" />
						<img src="wippics/9902/bdash_3.png" alt="The gameplay of Boulder Dash" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-16</h2>
					<p>
					Phil Stroffolino has yet updated the tilemap code to be more usable, and Roberto Fresca has added high score support for all dec8 games (gondomania etc.).
					</p>
				</div>

				<div class="row">
					<h2>1999-02-16</h2>
					<p>
					Marco Cassili has made many dips and input ports fixes to the 8080bw games. Lee Taylor has made a driver for Sky Chuter, but without sound at this moment.
					</p>
					<div class="wippix">
						<img src="wippics/9902/skychu_1.png" alt="Sky Chuter (c) 1980 IREM" width="224" height="232" />
						<img src="wippics/9902/skychu_2.png" alt="The gameplay of Sky Chuter" width="224" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-15</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller has gone crazy finding new bugs from the beta 3 release (Surely he also fixed all of which he found). Also, Darren Olafson has made a preliminary Zero Wing driver (Nothing works with it yet though)..
					</p>
				</div>

				<div class="row">
					<h2>1999-02-13</h2>
					<p>
					More progress on the CPS1 driver. Some of the later CPS1 games utilizing the Q-sound system are now working (such as Cadillacs &amp; Dinosaurs, Punisher and Warriors of Fate), and a few minor bugs have been fixed. No sound though, because the Q-sound roms are encrypted. Information about 'Kabuki' encryption system is very welcome. Gondomania and Mekyo Sensi now accept coins (Did you notice the lack of it with those pictures down there ;-) thanks to Bryan again, and the tilemap stuff is even more cleaned up by Nicola.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-12</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller has made the ASM Z80 core even better. Speed improvements range from 25% (Galaga) to 45% (Tapper). It's still far from complete, and daisy-chaining doesn't work.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-12</h2>
					<p>
					A massive Dec8 games update from Bryan McPhail. New games include Gondomania, Mekyo Sensi, Last Mission (2 versions), Shackled, Breywood and Captain Silver. Also Super Real Darwin is now fully working, sprite/playfield priority is added to Oscar and its game speed is fixed (was half speed before). Ghostbusters kludge removed (runs without internal hacks).
					</p>
					<div class="wippix">
						<img src="wippics/9902/gondo_1.png" alt="Gondomania (c) 1987 Data East" width="240" height="256" />
						<img src="wippics/9902/mekyo_1.png" alt="Mekyo Sensi (c) 1987 Data East" width="240" height="256" />
						<img src="wippics/9902/gondo_2.png" alt="The gameplay of Gondomania" width="240" height="256" />
						<img src="wippics/9902/gondo_3.png" alt="The gameplay of Gondomania" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9902/csilv_1.png" alt="Captain Silver (c) 1987 Data East" width="256" height="240" />
						<img src="wippics/9902/csilv_2.png" alt="The intro of Captain Silver" width="256" height="240" />
						<img src="wippics/9902/csilv_3.png" alt="The gameplay of Captain Silver" width="256" height="240" />
						<img src="wippics/9902/csilv_4.png" alt="The gameplay of Captain Silver" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9902/lastms_1.png" alt="Last Mission (c) 1986 Data East" width="240" height="256" />
						<img src="wippics/9902/lastms_2.png" alt="The gameplay of Last Mission" width="240" height="256" />
						<img src="wippics/9902/lastms_3.png" alt="Sinistar? ;-)" width="240" height="256" />
						<img src="wippics/9902/lastms_4.png" alt="Raid on the Bungeling Bay? ;-)" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9902/brey_1.png" alt="Breywood (c) 1986 Data East" width="256" height="240" />
						<img src="wippics/9902/brey_2.png" alt="The gameplay of Breywood" width="256" height="240" />
						<img src="wippics/9902/shac_1.png" alt="Shackled (c) 1986 Data East" width="256" height="240" />
						<img src="wippics/9902/shac_2.png" alt="The gameplay of Shackled" width="256" height="240" />
						<img src="wippics/9902/shac_3.png" alt="The gameplay of Shackled" width="256" height="240" />
						<img src="wippics/9902/shac_4.png" alt="The gameplay of Shackled" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9902/srdarw_1.png" alt="Super Real Darwin (c) 1987 Data East" width="240" height="240" />
						<img src="wippics/9902/srdarw_2.png" alt="The gameplay of Super Real Darwin" width="240" height="240" />
						<img src="wippics/9902/srdarw_3.png" alt="The gameplay of Super Real Darwin" width="240" height="240" />
						<img src="wippics/9902/srdarw_4.png" alt="The gameplay of Super Real Darwin" width="240" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-12</h2>
					<p>
					Russell Nash has added these CPS1 games: Cadillacs &amp; Dinosaurs, Warriors of Fate and Muscle Bomber Duo. Also, Nicola has fixed some graphics problems. He added YM2151 support for Street Fighter 1, but samples are still missing. Phil Stroffolino has made the tilemap stuff a bit faster, and pen management (= colors) should be perfect.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-11</h2>
					<p>
					Aaron Giles has made preliminary support for Crossbow. This is the first true shooter game for MAME (Terminator 2 doesn't have freely movable guns), so Aaron has also added support for crosshairs (controlled by mouse). There still isn't sound and dipswitches are incorrect.
					</p>
					<div class="wippix">
						<img src="wippics/9902/crossbow1.png" alt="Crossbow (c) 1983 Exidy" width="320" height="240" />
						<img src="wippics/9902/crossbow2.png" alt="Highscore screen of Crossbow" width="320" height="240" />
						<img src="wippics/9902/crossbow3.png" alt="The gameplay of Crossbow" width="320" height="240" />
						<img src="wippics/9902/crossbow4.png" alt="The gameplay of Crossbow" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-11</h2>
					<p>
					Mirko Buffoni has made the interpolation stuff even better. Exed Exes example is about doubling with 50% transparent scanlines (left side), and Mr. Do! example is about doubling with linear interpolation (both sides) and 50% transparent scanlines (left side). All these things are of course off by default :-)
					</p>
					<div class="wippix">
						<img src="wippics/9902/newmrdo.png" alt="Mr. Do! example, left side 50% transparent scanlines and linear interpolation, right side with only linear interpolation" width="384" height="496" />
						<img src="wippics/9902/newexed.png" alt="Exed Exes example, left side 50% transparent scanlines, right side normal" width="448" height="512" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-10</h2>
					<p>
					Phil Stroffolino has worked a little bit more on the tilemap code, and Ninja Gaiden now draws all sprite sizes correctly (helps also with later sections of Tecmo Knight). Zsolt Vasvari changed Birdie King 2 to use a better romset.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-09</h2>
					<p>
					Here is a (real) story what true emulator freaks can do to help preserving old arcade games, and to document the arcade games' history. The fellow who dumped the roms of Fire One had to drive 5 hours (each way) to get the board from a leaky garage which had been used by cats as a litter box. Half of the eproms had corroded pins and the smell was probably very disgusting (Maybe he should mail the board to <a target="_top" href="http://www.idsa.org/">IDSA</a>! *evil grin*). He got the roms dumped, and then the newest addition to MAME team, Olivier Galibert, started furiously working on the game. As a nice side effect, Star Fire also works much better (with trails though). Still no sound in either of these games, and it seems very unlikely that the samples could be extracted from that non-functioning board..
					</p>
					<div class="wippix">
						<img src="wippics/9902/fire_1.png" alt="Fire One (c) 1979 Exidy" width="256" height="256" />
						<img src="wippics/9902/fire_2.png" alt="The gameplay of Fire One" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9902/star_1.png" alt="Star Fire (c) 1978 Exidy" width="256" height="256" />
						<img src="wippics/9902/star_2.png" alt="Is this a Star Wars ripoff?" width="256" height="256" />
						<img src="wippics/9902/star_3.png" alt="The gameplay of Star Fire" width="256" height="256" />
						<img src="wippics/9902/star_4.png" alt="I nailed one of those imperial bastards" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-09</h2>
					<p>
					Nicola Salmoria got Birdie King 2's sound working and the crow sprites are also fixed.
					</p>
					<div class="wippix">
						<img src="wippics/9902/bking2_1.png" alt="Birdie King 2 (c) 1983 Taito" width="224" height="256" />
						<img src="wippics/9902/bking2_2.png" alt="The gameplay of Birdie King 2" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-08</h2>
					<p>
					Mike Balfour added Canyon Bomber prototype. Bryan McPhail made the ADPCM code support two OKI 6295 chips with samples in different memory regions. Phil Stroffolino made Trojan use the new tilemap system. Quench fixed KyuKyoku Tiger and Zsolt Vasvari got Birdie King 2 playable (without sound though).
					</p>
				</div>

				<div class="row">
					<h2>1999-02-07</h2>
					<p>
					Steve S. has added two new CPS1 games, Capcom World 2 and Quiz And Dragons. Nicola fixed Street Fighter 2 Turbo title graphics.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-06</h2>
					<p>
					J&uuml;rgen Buchm&uuml;ller has made a preliminary x86 assembler Z80 core for MAME. Currently not many games work, but it shows an enhancement of about 20% in the speed.
					</p>
				</div>

				<div class="row">
					<h2>1999-02-06</h2>
					<p>
					Mirko Buffoni has made interpolation routines for MAME. You'll need a powerful machine for this: (it's like ZSNES)
					</p>
					<div class="wippix">
						<img src="wippics/9902/new1943.png" alt="An example of interpolation with scanlines" width="448" height="512" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-06</h2>
					<p>
					Phil Stroffolino had sent in a preliminary Tropical Angel driver, and Nicola now finished it.
					</p>
					<div class="wippix">
						<img src="wippics/9902/tropic_1.png" alt="Tropical Angel (c) 1983 IREM" width="240" height="240" />
						<img src="wippics/9902/tropic_2.png" alt="The gameplay of Tropical Angel" width="240" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-02-06</h2>
					<p>
					Howie Cohen has gone mad with highscores again. For example, Lot Lot and Lode Runners 2 and 3 now save their highscores. Jim Hernandez fixed Tac/Scan input ports, making extra ships work.
					</p>
				</div>

				<div class="rowlast">
					<h2>1999-02-06</h2>
					<p>
					Some jewels already. You probably all know of Street Fighter already (Olivier Galibert),
					</p>
					<div class="wippix">
						<img src="wippics/9902/sf1_1.png" alt="Street Fighter (c) 1987 Capcom" width="384" height="224" />
						<img src="wippics/9902/sf1_2.png" alt="The gameplay of Street Fighter" width="384" height="224" />
					</div>

					<p>
					and maybe even Bubble Bobble emulation being correct (Nicola Salmoria), (Addendum: this MCU code turned out to be from a bootleg and thus imperfect)
					</p>
					<div class="wippix">
						<img src="wippics/9902/bubble_1.png" alt="Wizards throw rocks" width="256" height="224" />
						<img src="wippics/9902/bubble_2.png" alt="Monster movement is correct" width="256" height="224" />
					</div>

					<p>
					but how about a preliminary screenshot from TMNT 2: Turtles in Time? (Oliver Stabel)
					</p>
					<div class="wippix">
						<img src="wippics/9902/tmnttime.png" alt="TMNT 2 (c) 1991 Konami" width="288" height="256" />
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
