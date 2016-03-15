<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>September 1999 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>1999-09-30</h2>
					<p>
					Bryan McPhail fixed R-Type Leo from crashing at later levels. Paul Leaman sent in another update to Battlelane with CPU emulation almost fully working but graphics are still screwy.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-29</h2>
					<p>
					Aaron Giles sent in an MCR update with a working Zwackery driver. Michael Soderstrom fixed a Z80 bug affecting the usage of BIG_FLAGS_ARRAY. Bryan McPhail added Gun Hohki to the M92 driver, and sent a M107 driver with support for Fire Barrel (bad graphics) and Dream Soccer 94 (random crashes).
					</p>
					<div class="wippix">
						<img src="wippics/9909/fire_1.png" alt="Fire Barrel (c) 1993 Irem" width="240" height="320" />
						<img src="wippics/9909/fire_2.png" alt="The intro of Fire Barrel" width="240" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/9909/dsoc_1.png" alt="Dream Soccer '94 (c) 1994 Data East" width="320" height="240" />
						<img src="wippics/9909/dsoc_2.png" alt="The intro of Dream Soccer '94" width="320" height="240" />
						<img src="wippics/9909/dsoc_3.png" alt="The intro of Dream Soccer '94" width="320" height="240" />
						<img src="wippics/9909/dsoc_4.png" alt="The gameplay of Dream Soccer '94" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9909/gunh_1.png" alt="Gun Hohki (c) 1992 Irem" width="320" height="240" />
						<img src="wippics/9909/gunh_2.png" alt="The gameplay of Gun Hohki" width="320" height="240" />
						<img src="wippics/9909/gunh_3.png" alt="The gameplay of Gun Hohki" width="320" height="240" />
						<img src="wippics/9909/gunh_4.png" alt="The gameplay of Gun Hohki" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9909/zwac_1.png" alt="Zwackery (c) 1984 Midway" width="512" height="480" />
						<img src="wippics/9909/zwac_2.png" alt="The intro of Zwackery" width="512" height="480" />
						<img src="wippics/9909/zwac_3.png" alt="The gameplay of Zwackery" width="512" height="480" />
						<img src="wippics/9909/zwac_4.png" alt="The gameplay of Zwackery" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-28</h2>
					<p>
					Nicola sent in an M72 update with priorities fixed and Major Title added. John Butler fixed a bug affecting multiple sessions. Rapha&euml;l Nabet sent in another TMS9900 update.
					</p>
					<div class="wippix">
						<img src="wippics/9909/maj1_1.png" alt="Major Title (c) 1990 Irem" width="384" height="256" />
						<img src="wippics/9909/maj1_2.png" alt="The intro of Major Title" width="384" height="256" />
						<img src="wippics/9909/maj1_3.png" alt="The gameplay of Major Title" width="384" height="256" />
						<img src="wippics/9909/maj1_4.png" alt="The gameplay of Major Title" width="384" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-27</h2>
					<p>
					Takahiro Nogi fixed Ginga Ninkyouden and Genpei Toumaden sound, and Mr. Goemon sprite glitches. Phil Stroffolino sent in a Twin16 update with much better colors, and graphics are much better also, but sprites are still missing. Aaron Giles sent in a Bally/Sente driver update with Name That Tune and several Trivial Pursuit versions. Nicola modified the M92 video driver to implement the tile priorities in another way. Manuel Abadia sent in a Blades of Steel driver but it doesn't really work because of the protection.
					</p>
					<div class="wippix">
						<img src="wippics/9909/name_1.png" alt="Name That Tune (c) 1986 Bally/Sente" width="256" height="240" />
						<img src="wippics/9909/name_2.png" alt="Obviously pictures of this game aren't fun" width="256" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/9909/blad_1.png" alt="Blades of Steel (c) 1987 Konami" width="224" height="256" />
						<img src="wippics/9909/blad_2.png" alt="The intro of Blades of Steel" width="224" height="256" />
						<img src="wippics/9909/blad_3.png" alt="The gameplay of Blades of Steel" width="224" height="256" />
						<img src="wippics/9909/blad_4.png" alt="The gameplay of Blades of Steel" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-26</h2>
					<p>
					Nicola fixed Jackal character roms, and added the correct R-Type 2 romset (the older one was a fake).
					</p>
				</div>

				<div class="row">
					<h2>1999-09-25</h2>
					<p>
					Nicola added Gallop to the M72 driver, but the rest of the M72 games need their i8751 MCU emulated before they work. Manuel Abadia sent in a driver for Rock'n'Rage. Mike Coates added samples to Space Panic.
					</p>
					<div class="wippix">
						<img src="wippics/9909/gall_1.png" alt="Gallop (c) 1991 Irem" width="384" height="256" />
						<img src="wippics/9909/gall_2.png" alt="The intro of Gallop" width="384" height="256" />
						<img src="wippics/9909/gall_3.png" alt="The gameplay of Gallop" width="384" height="256" />
						<img src="wippics/9909/gall_4.png" alt="The gameplay of Gallop" width="384" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/9909/rock_1.png" alt="Rock'n'Rage (c) 1986 Konami" width="256" height="224" />
						<img src="wippics/9909/rock_2.png" alt="The intro of Rock'n'Rage" width="256" height="224" />
						<img src="wippics/9909/rock_3.png" alt="The gameplay of Rock'n'Rage" width="256" height="224" />
						<img src="wippics/9909/rock_4.png" alt="The gameplay of Rock'n'Rage" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-24</h2>
					<p>
					Oliver Bergmann sent in a NEC V20, V30, V33 cpu core, and Bryan McPhail submitted an Irem M92 driver with support for Blademaster, Gunforce, Lethal Thunder, Hook, Undercover Cops, R-type Leo, Major Title 2 and In The Hunt, but none of the games have sound because of an encrypted sound CPU. Keith Wilkins added yet some more Namco System 2 romsets. Phil Stroffolino sent in an update to the Twin16 driver with CPU emulation almost fully working, but graphics need to be sorted out.
					</p>
					<div class="wippix">
						<img src="wippics/9909/bmas_1.png" alt="Blade Master (c) 1991 Irem" width="320" height="240" />
						<img src="wippics/9909/gunf_1.png" alt="Gunforce (c) 1991 Irem" width="320" height="240" />
						<img src="wippics/9909/hook_1.png" alt="Hook (c) 1992 Irem" width="320" height="240" />
						<img src="wippics/9909/inth_1.png" alt="In The Hunt (c) 1993 Irem" width="320" height="240" />
						<img src="wippics/9909/majt_1.png" alt="Major Title 2 (c) 1992 Irem" width="320" height="240" />
						<img src="wippics/9909/rtle_1.png" alt="R-Type Leo (c) 1992 Irem" width="320" height="240" />
						<img src="wippics/9909/ucco_1.png" alt="Undercover Cops (c) 1992 Irem" width="320" height="240" />
						<img src="wippics/9909/leth_1.png" alt="Lethal Thunder (c) 1991 Irem" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-23</h2>
					<p>
					Takahiro Nogi has corrected sound frequency in Mikie and Shaolin's Road. John Butler fixed an ASR bug in m6809. Aaron Giles sent in an MCR update with support for Power Drive, Turbo Tag, Spy Hunter 2, Blasted, Arch Rivals, Tri-Sports and Pigskin 621AD and also tons of cleanup.
					</p>
					<div class="wippix">
						<img src="wippics/9909/arch_1.png" alt="Arch-Rivals (c) 1989 Midway" width="512" height="480" />
						<img src="wippics/9909/arch_2.png" alt="The intro of Arch-Rivals" width="512" height="480" />
						<img src="wippics/9909/arch_3.png" alt="The intro of Arch-Rivals" width="512" height="480" />
						<img src="wippics/9909/arch_4.png" alt="The gameplay of Arch-Rivals" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-22</h2>
					<p>
					Nicola Salmoria sent in a Kickle Cubicle driver. Sal Bugliarisi fixed a missing coin-up sound in Naughty Boy. Brad Oliver fixed Jaleco Mega System 1 from trashing memory so badly. Nicola added a correct transparency PROM to Xevious.
					</p>
					<div class="wippix">
						<img src="wippics/9909/kikc_1.png" alt="Kickle Cubicle (c) 1988 Irem" width="384" height="256" />
						<img src="wippics/9909/kikc_2.png" alt="The intro of Kickle Cubicle" width="384" height="256" />
						<img src="wippics/9909/kikc_3.png" alt="The intro of Kickle Cubicle" width="384" height="256" />
						<img src="wippics/9909/kikc_4.png" alt="The gameplay of Kickle Cubicle" width="384" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-21</h2>
					<p>
					Zsolt Vasvari did another TMS34010 update, and Hi Impact is now 1-2 fps faster. Tatsuyuki Satoh separated the opcode override function to each CPU. Michael Soderstrom fixed an ASR bug in m6809. Nicola sent in an M72 driver supporting R-Type, R-Type II and Hammerin' Harry. He also fixed colors, scroll and priorities in Pandora's Palace. Zsolt Vasvari sent in a vicdual update which supports samples for Pulsar and Invinco.
					</p>
					<div class="wippix">
						<img src="wippics/9909/rtyp_1.png" alt="R-Type (c) 1987 Irem" width="384" height="256" />
						<img src="wippics/9909/rtyp_2.png" alt="The gameplay of R-Type" width="384" height="256" />
						<img src="wippics/9909/rtyp_3.png" alt="The gameplay of R-Type" width="384" height="256" />
						<img src="wippics/9909/rtyp_4.png" alt="The gameplay of R-Type" width="384" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-20</h2>
					<p>
					Tatsuyuki Satoh added EEPROM support to the Namco System 1 driver and fixed some other bugs. Zsolt Vasvari sent in a minor TMS34010 core update, and he also hooked up the Terminator 2 gun properly. Phil Stroffolino sent in a minor Konami Twin16 driver update, and fixed enemy health in Renegade. Keith Wilkins added more hardware emulation to Namco System 2 driver and more romsets, but the games are still very far from playable.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-19</h2>
					<p>
					Manuel Abadia sent in a driver for Pandora's Palace.
					</p>
					<div class="wippix">
						<img src="wippics/9909/pand_1.png" alt="Pandora's Palace (c) 1984 Konami" width="224" height="256" />
						<img src="wippics/9909/pand_2.png" alt="The high score screen of Pandora's Palace" width="224" height="256" />
						<img src="wippics/9909/pand_3.png" alt="The gameplay of Pandora's Palace" width="224" height="256" />
						<img src="wippics/9909/pand_4.png" alt="The gameplay of Pandora's Palace" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-18</h2>
					<p>
					Zsolt Vasvari modified dynamically installed port handlers to have more priority. Phil Stroffolino sent in the Renegade driver with MCU simulation.
					</p>
					<div class="wippix">
						<img src="wippics/9909/rene_1.png" alt="Renegade (c) 1986 Technos" width="240" height="240" />
						<img src="wippics/9909/rene_2.png" alt="You want some?!" width="240" height="240" />
						<img src="wippics/9909/rene_3.png" alt="Krack, thunk" width="240" height="240" />
						<img src="wippics/9909/rene_4.png" alt="Ow, that's got to hurt!" width="240" height="240" />
						<img src="wippics/9909/rene_5.png" alt="Never argue with Gridle's fan club" width="240" height="240" />
						<img src="wippics/9909/rene_6.png" alt="Or you will face the end" width="240" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-17</h2>
					<p>
					Brian Lewis sent in another tweaked modes update.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-16</h2>
					<p>
					Phil Stroffolino has gotten Renegade playable, but there still exist some MCU problems, so he didn't send the driver.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-15</h2>
					<p>
					Zsolt Vasvari added Orbitron to the Galaxian driver.
					</p>
					<div class="wippix">
						<img src="wippics/9909/orbi_1.png" alt="Orbitron (c) 19?? Signatron USA" width="224" height="256" />
						<img src="wippics/9909/orbi_2.png" alt="The gameplay of Orbitron" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-14</h2>
					<p>
					Bryan McPhail sent in a general cleanup for some of his old drivers, added a few non-working clones and he also sent a new driver for Mad Motor (works fine) and Funky Jet (doesn't work, protection and graphics format problems). Mathis Rosenhauer fixed Speed Freak steering wheel and added a new overlay to Space Wars. Nicola fixed the bad sprites at the end of the saloon level in Sunset Riders, but the highlight effect is still missing.
					</p>
					<div class="wippix">
						<img src="wippics/9909/madm_1.png" alt="Mad Motor (c) 1989 Mitchell" width="256" height="240" />
						<img src="wippics/9909/madm_2.png" alt="The gameplay of Mad Motor" width="256" height="240" />
						<img src="wippics/9909/madm_3.png" alt="The gameplay of Mad Motor" width="256" height="240" />
						<img src="wippics/9909/madm_4.png" alt="The gameplay of Mad Motor" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-13</h2>
					<p>
					Manuel Abadia sent in a Battlantis driver, and Nicola fixed the sprites. Paul Leaman sent in a small update to the Battlelane driver, but the game still doesn't work.
					</p>
					<div class="wippix">
						<img src="wippics/9909/batt_1.png" alt="Battlantis (c) 1987 Konami" width="224" height="256" />
						<img src="wippics/9909/batt_2.png" alt="The gameplay of Battlantis" width="224" height="256" />
						<img src="wippics/9909/batt_3.png" alt="The gameplay of Battlantis" width="224" height="256" />
						<img src="wippics/9909/batt_4.png" alt="The gameplay of Battlantis" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-12</h2>
					<p>
					Aaron Giles sent in a fairly minor update to the Bally/Sente driver, with 8-bit sound fix. He also sent in a small Atari drivers update, with mainly just cleaning up.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-11</h2>
					<p>
					Nicola sent in a driver for Quarth (aka Block Hole), added a Japanese romset to the Combat School driver and he also added Mr. Goemon to Jailbreak driver.
					</p>
					<div class="wippix">
						<img src="wippics/9909/quar_1.png" alt="Quarth (c) 1989 Konami" width="288" height="224" />
						<img src="wippics/9909/quar_2.png" alt="The intro of Quarth" width="288" height="224" />
						<img src="wippics/9909/quar_3.png" alt="The intro of Quarth" width="288" height="224" />
						<img src="wippics/9909/quar_4.png" alt="The gameplay of Quarth" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/9909/mrgo_1.png" alt="Mr. Goemon (c) 1986 Konami" width="240" height="224" />
						<img src="wippics/9909/mrgo_2.png" alt="The gameplay of Mr. Goemon" width="240" height="224" />
						<img src="wippics/9909/mrgo_3.png" alt="The gameplay of Mr. Goemon" width="240" height="224" />
						<img src="wippics/9909/mrgo_4.png" alt="The gameplay of Mr. Goemon" width="240" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-10</h2>
					<p>
					Manuel Abadia sent in a driver for Gangbusters. Marco Cassili fixed its dipswitches and Nicola fixed the graphics. Tatsuyuki Satoh fixed Blazer build mask data. The Japanese version of Forgotten Worlds (Lost Worlds) was also added. Quench added another Trojan set.
					</p>
					<div class="wippix">
						<img src="wippics/9909/gbus_1.png" alt="Gangbusters (c) 1988 Konami" width="224" height="288" />
						<img src="wippics/9909/gbus_2.png" alt="The intro of Gangbusters" width="224" height="288" />
						<img src="wippics/9909/gbus_3.png" alt="The gameplay of Gangbusters" width="224" height="288" />
						<img src="wippics/9909/gbus_4.png" alt="The gameplay of Gangbusters" width="224" height="288" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-09</h2>
					<p>
					Nicola modified the selective refresh palette system in Namco System 1 games, it should be a bit better now. J&uuml;rgen Buchm&uuml;ller added the Nintendo 2A03 CPU to the 6502 core.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-08</h2>
					<p>
					Phil Stroffolino sent in a very preliminary Konami Twin16 driver (Vulcan Venture for example), but nothing works yet. Aaron Giles added better analog pedal support for APB and other Atari System 1/2 games. Valerio Verrando added a 240x320 tweaked mode. Somebody added a correct romset to Forgotten Worlds.
					</p>
					<div class="wippix">
						<img src="wippics/9909/forg_1.png" alt="Forgotten Worlds (c) 1988 Capcom" width="384" height="224" />
						<img src="wippics/9909/forg_2.png" alt="The intro of Forgotten Worlds" width="384" height="224" />
						<img src="wippics/9909/forg_3.png" alt="The intro of Forgotten Worlds" width="384" height="224" />
						<img src="wippics/9909/forg_4.png" alt="The gameplay of Forgotten Worlds" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-07</h2>
					<p>
					Nicola improved Vendetta collision detection. Aaron Giles made the Exidy 440 sound output much clearer.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-06</h2>
					<p>
					Aaron Giles sent in a huge Bally/Sente driver, with Chicken Shift, Gimme a Break, Goalie Hhost, Hat Trick, Mini Golf, Night Stocker, Off the Wall, Rescue Raider, Sente Diagnostics Cartridge, Snacks'n Jaxson, Stocker, Street Football, Toggle and Trivial Pursuit. There are still more games running on this hardware. Tatsuyuki Satoh added an experimental shadow sprite support to the Namco System 1 driver with 16-bit display.
					</p>
					<div class="wippix">
						<img src="wippics/9909/nsto_1.png" alt="Night Stocker (c) 1986 Bally/Sente" width="256" height="240" />
						<img src="wippics/9909/nsto_2.png" alt="The intro of Night Stocker" width="256" height="240" />
						<img src="wippics/9909/nsto_3.png" alt="The gameplay of Night Stocker" width="256" height="240" />
						<img src="wippics/9909/nsto_4.png" alt="The gameplay of Night Stocker" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>1999-09-05</h2>
					<p>
					Aaron Giles fixed a small 6809 cycle timing bug. Jim Hernandez fixed Contra PROMs. Gerald Vanderick added Sichuan (Rev A) romset.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-04</h2>
					<p>
					Nicola sent another Namco System 1 update and somebody added an alternate romset to Block.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-03</h2>
					<p>
					Zsolt Vasvari sent in a nice update to the Vicdual driver, for example Depth Charge now has samples. Tatsuyuki Satoh sent in another Namco System 1 driver update.
					</p>
				</div>

				<div class="row">
					<h2>1999-09-02</h2>
					<p>
					Brian Lewis updated the tweaked modes once again to be more compatible. Luca Elia sent in drivers for Wec Le Mans 24 and Hot Chase, but Wec Le Mans is still a bit quirky.
					</p>
				</div>

				<div class="rowlast">
					<h2>1999-09-01</h2>
					<p>
					Nicola added Crime Fighters Japanese romset, Block Gal bootleg and another Gardia romset, fixed Golfing Greats sound and sent in a driver for Surprise Attack. Rapha&euml;l Nabet sent in an update to the TMS9900 core.
					</p>
				</div>

            </div>
            <!-- content end --> 
		
		<!--#include virtual="/_include/html/footer.txt" -->
    
    </div>    
    </div>
    <!-- main end -->

</body>

</html>
