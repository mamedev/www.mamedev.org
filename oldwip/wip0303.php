<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>March 2003 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2003-03-31</h2>
					<p>
					Luca Elia sent in a driver for Maya. Paul Priest integrated the drawgfx updates and Acho's shadows/highlights updates. Brad Oliver fixed several minor bugs that affected big-endian systems.
					</p>
					<div class="wippix">
						<img src="wippics/0303/maya_1.png" alt="Maya (c) 1994 Promat" width="512" height="480" />
						<img src="wippics/0303/maya_2.png" alt="The gameplay of Maya" width="512" height="480" />
						<img src="wippics/0303/maya_3.png" alt="The gameplay of Maya" width="512" height="480" />
						<img src="wippics/0303/maya_4.png" alt="The gameplay of Maya" width="512" height="480" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-30</h2>
					<p>
					R. Belmont enabled the shadows in Konami System GX driver and tilemap alpha blending in the Mystic Warriors driver. David Haywood fixed flickering sprites in Metamorphic Force, graphics layer offsets in several games in both the Mystic Warriors and Konami System GX drivers. Acho A. Tang added the infrastructure support for 3 independent colored shadows/highlights as required by the Konami games, and he cracked the protection in Violent Storm. The improvements also allow Twinbee Yahhoo to be fully playable now. Phil Stroffolino sent in a beta version of drawgfx with z-buffer support.
					</p>
					<div class="wippix">
						<img src="wippics/0303/metamrph_alpha_1.png" alt="Metamorphic Force alpha blending" width="288" height="224" />
						<img src="wippics/0303/metamrph_alpha_2.png" alt="Metamorphic Force alpha blending" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/viostorm_1.png" alt="Violent Storm (c) 1993 Konami" width="384" height="224" />
						<img src="wippics/0303/viostorm_2.png" alt="The attract(ive) mode of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_3.png" alt="The gameplay of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_4.png" alt="The gameplay of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_5.png" alt="The gameplay of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_6.png" alt="The gameplay of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_7.png" alt="The gameplay of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_8.png" alt="The gameplay of Violent Storm" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/tbyahhoo_1.png" alt="Twinbee Yahhoo (c) 1995 Konami" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_2.png" alt="The intro of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_3.png" alt="The intro of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_4.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_5.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_6.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_7.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_8.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_9.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_10.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_11.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_12.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_13.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
						<img src="wippics/0303/tbyahhoo_14.png" alt="The gameplay of Twinbee Yahhoo" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-29</h2>
					<p>
					Aaron Giles added MIPS 4 (R5000) support to the MIPS 3 (R4600) CPU core and he added dynamic recompiling to both of them.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-28</h2>
					<p>
					Nathan Woods further fixed the bug fix for switching between windowed and fullscreen modes and he enhanced the Win32 blitter to use SSE instructions if available. Bryan McPhail sent in a driver for Dead Angle and David Haywood fixed one of the graphics planes in it.
					</p>
					<div class="wippix">
						<img src="wippics/0303/deadang_1.png" alt="Dead Angle (c) 1988 Seibu Kaihatsu" width="256" height="224" />
						<img src="wippics/0303/deadang_2.png" alt="The intro of Dead Angle" width="256" height="224" />
						<img src="wippics/0303/deadang_3.png" alt="The intro of Dead Angle" width="256" height="224" />
						<img src="wippics/0303/deadang_4.png" alt="The intro of Dead Angle" width="256" height="224" />
						<img src="wippics/0303/deadang_5.png" alt="The gameplay of Dead Angle" width="256" height="224" />
						<img src="wippics/0303/deadang_6.png" alt="The gameplay of Dead Angle" width="256" height="224" />
						<img src="wippics/0303/deadang_7.png" alt="The gameplay of Dead Angle" width="256" height="224" />
						<img src="wippics/0303/deadang_8.png" alt="The gameplay of Dead Angle" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-27</h2>
					<p>
					Luca Elia added Puckman Pockimon to the Sega C2 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0303/puckpoki_1.png" alt="Puckman Pockimon (c) 2000 Genie" width="312" height="224" />
						<img src="wippics/0303/puckpoki_2.png" alt="The gameplay of Puckman Pockimon" width="312" height="224" />
						<img src="wippics/0303/puckpoki_3.png" alt="The gameplay of Puckman Pockimon" width="312" height="224" />
						<img src="wippics/0303/puckpoki_4.png" alt="The gameplay of Puckman Pockimon" width="312" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-26</h2>
					<p>
					David Haywood resubmitted the alternate BIOS support for Neo Geo, this time using a compile time switch. Brian A. Troha improved the screen size in Krazy Bowl.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-25</h2>
					<p>
					Stefan Jokisch sent in further updates to the old Capcom drivers, fixing minor graphics glitches in Son Son and Higemaru. David Haywood fixed the sounds in Tattoo Assassins and he fixed the incorrect graphics in Namco Classics Vol.2 but it still crashes when trying to start a game. Barry Rodewald fixed Rotary Fighter so that it is now playable. Jarek Burczynski sent in a preliminary Shougi driver that isn't playable because of a custom MCU. Bryan McPhail fixed the sound board reset in Tattoo Assassins. Acho A. Tang added support for 32bpp shadows and highlights in the core, improving the quality of some graphical effects in Mystic Warriors.
					</p>
					<div class="wippix">
						<img src="wippics/0303/ncv2_1.png" alt="Namco Classics Vol.2 (c) 1996 Namco" width="224" height="288" />
						<img src="wippics/0303/ncv2_2.png" alt="The attract mode of Namco Classics Vol.2" width="224" height="288" />
						<img src="wippics/0303/ncv2_3.png" alt="The attract mode of Namco Classics Vol.2" width="224" height="288" />
						<img src="wippics/0303/ncv2_4.png" alt="The attract mode of Namco Classics Vol.2" width="224" height="288" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/rotaryf_1.png" alt="Rotary Fighter (c) 19?? ????" width="256" height="256" />
						<img src="wippics/0303/rotaryf_2.png" alt="The gameplay of Rotary Fighter" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/shougi_1.png" alt="Shougi (c) 198? Alpha Denshi" width="256" height="256" />
						<img src="wippics/0303/shougi_2.png" alt="The gameplay of Shougi" width="256" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/shougi2_1.png" alt="Shougi 2 (c) 198? Alpha Denshi" width="256" height="256" />
						<img src="wippics/0303/shougi2_2.png" alt="The gameplay of Shougi 2" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-24</h2>
					<p>
					Bryan McPhail sent in a major update to the Deco32 driver, making Dragon Gun playable, Locked 'n Loaded almost playable and Tattoo Assassins fully playable with graphics, thanks to Stiletto for tracking down a working boardset of this ultra rare game. Acho A. Tang resubmitted some old fixes.
					</p>
					<div class="wippix">
						<img src="wippics/0303/tatass_1.png" alt="Tattoo Assassins (c) 1994 Data East" width="320" height="240" />
						<img src="wippics/0303/tatass_2.png" alt="The attract mode of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_3.png" alt="The attract mode of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_4.png" alt="The attract mode of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_5.png" alt="The attract mode of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_6.png" alt="The attract mode of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_7.png" alt="The attract mode of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_8.png" alt="The attract mode of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_9.png" alt="The gameplay of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_10.png" alt="The gameplay of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_11.png" alt="The gameplay of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_12.png" alt="The gameplay of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_13.png" alt="The gameplay of Tattoo Assassins" width="320" height="240" />
						<img src="wippics/0303/tatass_14.png" alt="The gameplay of Tattoo Assassins" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/dragngun_1.png" alt="Dragon Gun (c) 1992 Data East" width="320" height="240" />
						<img src="wippics/0303/dragngun_2.png" alt="The intro of Dragon Gun" width="320" height="240" />
						<img src="wippics/0303/dragngun_3.png" alt="The gameplay of Dragon Gun" width="320" height="240" />
						<img src="wippics/0303/dragngun_4.png" alt="The gameplay of Dragon Gun" width="320" height="240" />
						<img src="wippics/0303/dragngun_5.png" alt="The gameplay of Dragon Gun" width="320" height="240" />
						<img src="wippics/0303/dragngun_6.png" alt="The gameplay of Dragon Gun" width="320" height="240" />
						<img src="wippics/0303/dragngun_7.png" alt="The gameplay of Dragon Gun" width="320" height="240" />
						<img src="wippics/0303/dragngun_8.png" alt="The gameplay of Dragon Gun" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/lockload_1.png" alt="Locked 'n Loaded (c) 1994 Data East" width="320" height="240" />
						<img src="wippics/0303/lockload_2.png" alt="The attract mode of Locked 'n Loaded" width="320" height="240" />
						<img src="wippics/0303/lockload_3.png" alt="The attract mode of Locked 'n Loaded" width="320" height="240" />
						<img src="wippics/0303/lockload_4.png" alt="The attract mode of Locked 'n Loaded" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-23</h2>
					<p>
					Acho A. Tang further improved the sprite/tilemap priorities in Kyukyoku Sentai Dadandarn and Gaiapolis, fixed the missing background layers, visible area and alignment in Kyukyoku Sentai Dadandarn. R. Belmont fixed the DIP switches in all the working games in the recent Konami driver and started fixing the internal ROM tests.
					</p>
					<div class="wippix">
						<img src="wippics/0303/dadandrn_new_1.png" alt="Kyukyoku Sentai Dadandarn (c) 1993 Konami" width="286" height="224" />
						<img src="wippics/0303/dadandrn_new_2.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="286" height="224" />
						<img src="wippics/0303/dadandrn_new_3.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="286" height="224" />
						<img src="wippics/0303/dadandrn_new_4.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="286" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-22</h2>
					<p>
					Phil Stroffolino added J-League Soccer V-Shoot to the Namco NB1 driver. Bryan McPhail added Steel Gunner and Steel Gunner 2 (Japan) to the Namco System 2 driver. Nicola Salmoria fixed the ROZ layer placement, orientation, clipping and enable in the Mystic Warriors driver. Acho A. Tang also fixed the sprite brightness and improved the priorities in it.
					</p>
					<div class="wippix">
						<img src="wippics/0303/vshoot_1.png" alt="J-League Soccer V-Shoot (c) 1994 Namco" width="288" height="224" />
						<img src="wippics/0303/vshoot_2.png" alt="The intro of J-League Soccer V-Shoot" width="288" height="224" />
						<img src="wippics/0303/vshoot_3.png" alt="The gameplay of J-League Soccer V-Shoot" width="288" height="224" />
						<img src="wippics/0303/vshoot_4.png" alt="The gameplay of J-League Soccer V-Shoot" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/sgunner_1.png" alt="Steel Gunner (c) 1990 Namco" width="288" height="224" />
						<img src="wippics/0303/sgunner_2.png" alt="The intro of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_3.png" alt="The intro of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_4.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_5.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_6.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_7.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_8.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_9.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_10.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_11.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
						<img src="wippics/0303/sgunner_12.png" alt="The gameplay of Steel Gunner" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-21</h2>
					<p>
					Acho A. Tang fixed various graphics glitches in Mystic Warriors, Kyukyoku Sentai Dadandarn, Metamorphic Force and Gaiapolis. Brad Oliver fixed a problem in the ADSP-210x CPU core that occurred in MacMAME. R. Belmont also improved the graphics in the aforementioned drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0303/dadandrn_1.png" alt="Kyukyoku Sentai Dadandarn (c) 1993 Konami" width="286" height="224" />
						<img src="wippics/0303/dadandrn_2.png" alt="The intro of Kyukyoku Sentai Dadandarn" width="286" height="224" />
						<img src="wippics/0303/dadandrn_3.png" alt="The intro of Kyukyoku Sentai Dadandarn" width="286" height="224" />
						<img src="wippics/0303/dadandrn_4.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="286" height="224" />
						<img src="wippics/0303/dadandrn_5.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="286" height="224" />
						<img src="wippics/0303/dadandrn_6.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="286" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-20</h2>
					<p>
					Phil Stroffolino fixed the gun handling in Point Blank / Gun Bullet and hooked up the inputs in Mach Breaker, so it's now playable, though with some graphics glitches. Nathan Woods fixed a bug that caused wrong colors when switching between windowed and full screen modes sometimes.
					</p>
					<div class="wippix">
						<img src="wippics/0303/machbrkr_1.png" alt="Mach Breakers (c) 1994 Namco" width="288" height="224" />
						<img src="wippics/0303/machbrkr_2.png" alt="The intro of Mach Breakers" width="288" height="224" />
						<img src="wippics/0303/machbrkr_3.png" alt="The intro of Mach Breakers" width="288" height="224" />
						<img src="wippics/0303/machbrkr_4.png" alt="The intro of Mach Breakers" width="288" height="224" />
						<img src="wippics/0303/machbrkr_5.png" alt="The gameplay of Mach Breakers" width="288" height="224" />
						<img src="wippics/0303/machbrkr_6.png" alt="The gameplay of Mach Breakers" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-19</h2>
					<p>
					Bryan McPhail emulated the protection well enough in Nitro Ball to make it fully playable. Brian A. Troha added the USA version of Operation Wolf 3 and a newer version of Police Trainer. Yorik submitted various small improvements to some old Capcom drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0303/nitroball_1.png" alt="Nitro Ball (c) 1992 Data East" width="240" height="320" />
						<img src="wippics/0303/nitroball_2.png" alt="The intro of Nitro Ball" width="240" height="320" />
						<img src="wippics/0303/nitroball_3.png" alt="The gameplay of Nitro Ball" width="240" height="320" />
						<img src="wippics/0303/nitroball_4.png" alt="The gameplay of Nitro Ball" width="240" height="320" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-18</h2>
					<p>
					Luca Elia added Guardians / Denjin Makai II to the Seta2 driver. BUT fixed a bug that happened when using -skip_gameinfo with -nojoy. Aaron Giles fixed a bug where suspended CPUs didn't update their cycle count correctly. Smitdogg submitted a bunch of fixes to input ports and DIP switches in various drivers.
					</p>
					<div class="wippix">
						<img src="wippics/0303/guardians_1.png" alt="Guardians / Denjin Makai II (c) 1995 Banpresto" width="304" height="232" />
						<img src="wippics/0303/guardians_2.png" alt="The gameplay of Guardians / Denjin Makai II" width="304" height="232" />
						<img src="wippics/0303/guardians_3.png" alt="The gameplay of Guardians / Denjin Makai II" width="304" height="232" />
						<img src="wippics/0303/guardians_4.png" alt="The gameplay of Guardians / Denjin Makai II" width="304" height="232" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-17</h2>
					<p>
					R. Belmont added the rotation and zoom graphics layer emulation to Gaiapolis and Kyukyoku Sentai Dadandarn thanks to Olivier Galibert. Nicola Salmoria also improved the ROZ layer emulation in them. Nathan Woods fixed possible crashes when reading certain INI files.
					</p>
					<div class="wippix">
						<img src="wippics/0303/gaiapols_roz.png" alt="Gaiapolis ROZ layer" width="224" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-16</h2>
					<p>
					Acho A. Tang fixed the uPD7759 crashes in Puyo Puyo 2. R. Belmont fixed the intro screen graphics glitches in Sexy Parodius and Gokujou Parodius. Pierpaolo Prazzoli and Tomasz Slanina added Birdie King 3 to the Birdie King 2 driver but it suffers from unemulated protection.
					</p>
					<div class="wippix">
						<img src="wippics/0303/gx_1.png" alt="Sexy Parodius intro" width="288" height="224" />
						<img src="wippics/0303/gx_2.png" alt="Gokujou Parodius intro" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/bking3_1.png" alt="Birdie King 3 (c) 1984 Taito" width="224" height="256" />
						<img src="wippics/0303/bking3_2.png" alt="The intro of Birdie King 3" width="224" height="256" />
						<img src="wippics/0303/bking3_3.png" alt="The gameplay of Birdie King 3" width="224" height="256" />
						<img src="wippics/0303/bking3_4.png" alt="The gameplay of Birdie King 3" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-15</h2>
					<p>
					Bryan McPhail added the gun emulation to Operation Wolf 3, it's now fully playable. smf added the sound CPU emulation to the PGM driver thanks to information from Elsemi, but the sound itself is not yet emulated. Brad Oliver fixed a few compiling bugs that affected MacMAME.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-14</h2>
					<p>
					David Graves sent in a driver for Operation Wolf 3, it works fine except it's missing the gun controls so it's not playable.
					</p>
					<div class="wippix">
						<img src="wippics/0303/opwolf3_1.png" alt="Operation Wolf 3 (c) 1994 Taito" width="320" height="224" />
						<img src="wippics/0303/opwolf3_2.png" alt="The intro of Operation Wolf 3" width="320" height="224" />
						<img src="wippics/0303/opwolf3_3.png" alt="The gameplay of Operation Wolf 3" width="320" height="224" />
						<img src="wippics/0303/opwolf3_4.png" alt="The gameplay of Operation Wolf 3" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-13</h2>
					<p>
					Paul Priest and MooglyGuy fixed the sound ROM loading in Puzzle Bobble 3, Puzzle Bobble 4 and Puchi Carat. Acho A. Tang added better collision detection to the Halley's Comet driver.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-12</h2>
					<p>
					Luca Elia added Blood Warrior to the Kaneko16 driver but it's not playable due to an unemulated MCU. Satoshi Suzuki re-submitted Genpei Toumaden and Darwin 4078 graphics fixes. David Haywood forwarded BUT's preliminary Chack'n Pop driver, which is playable up to level 5. R. Belmont sent in an update to the Mystic Warriors driver, making Metamorphic Force playable with some graphics glitches, and making Violent Storm work somewhat but it still suffers from unemulated protection. Additionally, Kyukyoku Sentai Dadandarn worked already in yesterday's update but has major graphics glitches. Brian A. Troha and Guru fixed some ROM names in the Mystic Warriors driver. Paul Priest sent in a patch to add auto-rotate for rotating monitors. Jarek Burczynski added Cannon Ball to the Crazy Climber driver.
					</p>
					<div class="wippix">
						<img src="wippics/0303/chaknpop_1.png" alt="Chack'n Pop (c) 1983 Taito" width="256" height="224" />
						<img src="wippics/0303/chaknpop_2.png" alt="The intro of Chack'n Pop" width="256" height="224" />
						<img src="wippics/0303/chaknpop_3.png" alt="The gameplay of Chack'n Pop" width="256" height="224" />
						<img src="wippics/0303/chaknpop_4.png" alt="The gameplay of Chack'n Pop" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/metamrph_1.png" alt="Metamorphic Force (c) 1993 Konami" width="288" height="224" />
						<img src="wippics/0303/metamrph_2.png" alt="The intro of Metamorphic Force" width="288" height="224" />
						<img src="wippics/0303/metamrph_3.png" alt="The gameplay of Metamorphic Force" width="288" height="224" />
						<img src="wippics/0303/metamrph_4.png" alt="The gameplay of Metamorphic Force" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/viostorm_1.png" alt="Violent Storm (c) 1993 Konami" width="384" height="224" />
						<img src="wippics/0303/viostorm_2.png" alt="The intro of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_3.png" alt="The gameplay of Violent Storm" width="384" height="224" />
						<img src="wippics/0303/viostorm_4.png" alt="The gameplay of Violent Storm" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/ultbttlr_1.png" alt="Kyukyoku Sentai Dadandarn (c) 1993 Konami" width="320" height="256" />
						<img src="wippics/0303/ultbttlr_2.png" alt="The intro of Kyukyoku Sentai Dadandarn" width="320" height="256" />
						<img src="wippics/0303/ultbttlr_3.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="320" height="256" />
						<img src="wippics/0303/ultbttlr_4.png" alt="The gameplay of Kyukyoku Sentai Dadandarn" width="320" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/cannonb_1.png" alt="Cannon Ball (c) 1985 ????" width="224" height="256" />
						<img src="wippics/0303/cannonb_2.png" alt="The intro of Cannon Ball" width="224" height="256" />
						<img src="wippics/0303/cannonb_3.png" alt="The gameplay of Cannon Ball" width="224" height="256" />
						<img src="wippics/0303/cannonb_4.png" alt="The gameplay of Cannon Ball" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-11</h2>
					<p>
					R. Belmont fixed a small typo in the RF5C68 sound core, sent in a major update to the Konami IC emulation by him and Phil Stroffolino and he sent in a driver for Mystic Warriors hardware games supporting Mystic Warriors and Gaiapolis and a Konami System GX driver supporting Lethal Enforcers 2, Gokujou Parodius, Taisen Puzzle-Dama, Sexy Parodius, Daisu-Kiss and Taisen Tokkae-Dama.
					</p>
					<div class="wippix">
						<img src="wippics/0303/myst_1.png" alt="Mystic Warriors (c) 1993 Konami" width="288" height="224" />
						<img src="wippics/0303/myst_2.png" alt="The intro of Mystic Warriors" width="288" height="224" />
						<img src="wippics/0303/myst_3.png" alt="The gameplay of Mystic Warriors" width="288" height="224" />
						<img src="wippics/0303/myst_4.png" alt="The gameplay of Mystic Warriors" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/gaia_1.png" alt="Gaiapolis (c) 1993 Konami" width="224" height="384" />
						<img src="wippics/0303/gaia_2.png" alt="The intro of Gaiapolis" width="224" height="384" />
						<img src="wippics/0303/gaia_3.png" alt="The gameplay of Gaiapolis" width="224" height="384" />
						<img src="wippics/0303/gaia_4.png" alt="The gameplay of Gaiapolis" width="224" height="384" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/le2_1.png" alt="Lethal Enforcers 2 (c) 1994 Konami" width="288" height="224" />
						<img src="wippics/0303/le2_2.png" alt="The gameplay of Lethal Enforcers 2" width="288" height="224" />
						<img src="wippics/0303/le2_3.png" alt="The gameplay of Lethal Enforcers 2" width="288" height="224" />
						<img src="wippics/0303/le2_4.png" alt="The gameplay of Lethal Enforcers 2" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/goku_1.png" alt="Gokujou Parodius (c) 1994 Konami" width="288" height="224" />
						<img src="wippics/0303/goku_2.png" alt="The intro of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0303/goku_3.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0303/goku_4.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/puzl_1.png" alt="Taisen Puzzle-Dama (c) 1994 Konami" width="296" height="224" />
						<img src="wippics/0303/puzl_2.png" alt="The intro of Taisen Puzzle-Dama" width="296" height="224" />
						<img src="wippics/0303/puzl_3.png" alt="The intro of Taisen Puzzle-Dama" width="296" height="224" />
						<img src="wippics/0303/puzl_4.png" alt="The gameplay of Taisen Puzzle-Dama" width="296" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/sexy_1.png" alt="Sexy Parodius (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0303/sexy_2.png" alt="The intro of Sexy Parodius" width="288" height="224" />
						<img src="wippics/0303/sexy_3.png" alt="The gameplay of Sexy Parodius" width="288" height="224" />
						<img src="wippics/0303/sexy_4.png" alt="The gameplay of Sexy Parodius" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/dais_1.png" alt="Daisu-Kiss (c) 1996 Konami" width="296" height="224" />
						<img src="wippics/0303/dais_2.png" alt="The intro of Daisu-Kiss" width="296" height="224" />
						<img src="wippics/0303/dais_3.png" alt="The intro of Daisu-Kiss" width="296" height="224" />
						<img src="wippics/0303/dais_4.png" alt="The gameplay of Daisu-Kiss" width="296" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/tokk_1.png" alt="Taisen Tokkae-Dama (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0303/tokk_2.png" alt="The intro of Taisen Tokkae-Dama" width="288" height="224" />
						<img src="wippics/0303/tokk_3.png" alt="The intro of Taisen Tokkae-Dama" width="288" height="224" />
						<img src="wippics/0303/tokk_4.png" alt="The gameplay of Taisen Tokkae-Dama" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-10</h2>
					<p>
					Toby Broyad sent in an update fixing most of the game names, years etc. Mike Haaland fixed a small compiling problem on VC. David Haywood re-submitted various additions and fixed the .inp record / playback in the Namco System 2 driver. Paul Priest fixed the sound ROM loading in Puzzle Bobble 4.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-09</h2>
					<p>
					David Haywood fixed the .inp problems in the Super Kaneko Nova System driver by using the new random number generator. Acho A. Tang submitted major improvements to the Halley's Comet and Ben Bero Beh driver, they are almost perfect now. Derrick Renaud submitted an improvement to Asteroids explosion sounds. Brian A. Troha added Cosmic Cop, the World version of Gallop, to the IREM M-72 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0303/hall_1.png" alt="Halley's Comet (c) 1986 Taito" width="240" height="256" />
						<img src="wippics/0303/hall_2.png" alt="The intro of Halley's Comet" width="240" height="256" />
						<img src="wippics/0303/hall_3.png" alt="The gameplay of Halley's Comet" width="240" height="256" />
						<img src="wippics/0303/hall_4.png" alt="The gameplay of Halley's Comet" width="240" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/benb_1.png" alt="Ben Bero Beh (c) 1984 Taito" width="256" height="240" />
						<img src="wippics/0303/benb_2.png" alt="The intro of Ben Bero Beh" width="256" height="240" />
						<img src="wippics/0303/benb_3.png" alt="The gameplay of Ben Bero Beh" width="256" height="240" />
						<img src="wippics/0303/benb_4.png" alt="The gameplay of Ben Bero Beh" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-08</h2>
					<p>
					Tomasz Slanina sent in a driver for Sega SG-1000 based arcade hardware, supporting Champion Boxing and Champion Pro Wrestling. Luca Elia added Ultra Toukon Densetsu and Mad Shark to the Seta driver.
					</p>
					<div class="wippix">
						<img src="wippics/0303/chb_1.png" alt="Champion Boxing (c) 1984 Sega" width="280" height="210" />
						<img src="wippics/0303/chb_2.png" alt="The gameplay of Champion Boxing" width="280" height="210" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/chw_1.png" alt="Champion Pro Wrestling (c) 1985 Sega" width="280" height="210" />
						<img src="wippics/0303/chw_2.png" alt="The gameplay of Champion Pro Wrestling" width="280" height="210" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/utoukond_1.png" alt="Ultra Toukon Densetsu (c) 1993 Banpresto" width="384" height="224" />
						<img src="wippics/0303/utoukond_2.png" alt="The intro of Ultra Toukon Densetsu" width="384" height="224" />
						<img src="wippics/0303/utoukond_3.png" alt="The intro of Ultra Toukon Densetsu" width="384" height="224" />
						<img src="wippics/0303/utoukond_4.png" alt="The gameplay of Ultra Toukon Densetsu" width="384" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/madshark_1.png" alt="Mad Shark (c) 1993 Allumer" width="224" height="384" />
						<img src="wippics/0303/madshark_2.png" alt="The intro of Mad Shark" width="224" height="384" />
						<img src="wippics/0303/madshark_3.png" alt="The gameplay of Mad Shark" width="224" height="384" />
						<img src="wippics/0303/madshark_4.png" alt="The gameplay of Mad Shark" width="224" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-07</h2>
					<p>
					Luca Elia sent in a driver for Fantasy Land. David Haywood added sound to IQ Block and he added Rapid Hero to the NMK16 driver, it's playable but sound is not emulated due to a custom sound CPU.
					</p>
					<div class="wippix">
						<img src="wippics/0303/fantland_1.png" alt="Fantasy Land (c) 19?? Electronic Devices" width="352" height="256" />
						<img src="wippics/0303/fantland_2.png" alt="The intro of Fantasy Land" width="352" height="256" />
						<img src="wippics/0303/fantland_3.png" alt="The intro of Fantasy Land" width="352" height="256" />
						<img src="wippics/0303/fantland_4.png" alt="The gameplay of Fantasy Land" width="352" height="256" />
						<img src="wippics/0303/fantland_5.png" alt="The gameplay of Fantasy Land" width="352" height="256" />
						<img src="wippics/0303/fantland_6.png" alt="The gameplay of Fantasy Land" width="352" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/rapidhero_1.png" alt="Rapid Hero (c) 1994 Media Trading Corporation" width="224" height="384" />
						<img src="wippics/0303/rapidhero_2.png" alt="The intro of Rapid Hero" width="224" height="384" />
						<img src="wippics/0303/rapidhero_3.png" alt="The intro of Rapid Hero" width="224" height="384" />
						<img src="wippics/0303/rapidhero_4.png" alt="The gameplay of Rapid Hero" width="224" height="384" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-06</h2>
					<p>
					An anonymous contributor fixed the remaining graphics glitches in Head Panic. Acho A. Tang fixed the wrong UPD7759 samples being played in the Twin16 driver, and he fixed a bug in the UPD7759 emulation that caused problems with playing the last sample. Tomasz Slanina sent in a driver for Prebillian and Hot Smash, but Hot Smash is not playable due to protection. David Haywood mostly fixed the priorities in Dragon Master and fixed the red/blue color channels in Steel Force.
					</p>
					<div class="wippix">
						<img src="wippics/0303/pbillian_1.png" alt="Prebillian (c) 1986 Taito" width="256" height="224" />
						<img src="wippics/0303/pbillian_2.png" alt="The gameplay of Prebillian" width="256" height="224" />
						<img src="wippics/0303/pbillian_3.png" alt="The gameplay of Prebillian" width="256" height="224" />
						<img src="wippics/0303/pbillian_4.png" alt="The gameplay of Prebillian" width="256" height="224" />
						<img src="wippics/0303/pbillian_5.png" alt="The gameplay of Prebillian" width="256" height="224" />
						<img src="wippics/0303/pbillian_6.png" alt="The gameplay of Prebillian" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/hotsmash_1.png" alt="Hot Smash (c) 1987 Taito" width="224" height="256" />
						<img src="wippics/0303/hotsmash_2.png" alt="The attract mode of Hot Smash" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/dragonmaster_fixed_1.png" alt="Dragon Master (c) 1994 Unico" width="384" height="224" />
						<img src="wippics/0303/dragonmaster_fixed_2.png" alt="The intro of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/dragonmaster_fixed_3.png" alt="The intro of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/dragonmaster_fixed_4.png" alt="The gameplay of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/dragonmaster_fixed_5.png" alt="The gameplay of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/dragonmaster_fixed_6.png" alt="The gameplay of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/dragonmaster_fixed_7.png" alt="The gameplay of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/dragonmaster_fixed_8.png" alt="The gameplay of Dragon Master" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2003-03-05</h2>
					<p>
					Nathan Woods fixed the function prototypes to use mame_file instead of void pointers in state.c/h.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-04</h2>
					<p>
					David Haywood converted the Super Qix driver to the tilemap system.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-03</h2>
					<p>
					Jim Hernandez and Steve Ellenoff fixed the drum sounds in Exterminator. Aaron Giles fixed a subtle bug in the timer functions that could cause a one-shot timer to get re-fired sometimes. Jarek Burczynski sent in an update to the YM3812 sound core, fixing the same copy &amp; paste bug that haunted the YM2413 core and another problem that occurred if the Y8950 support wasn't compiled in. Jarek Burczynski also submitted the first version of the YMF262 emulator and Tecmo System driver with a debug function that was used to test it.
					</p>
					</div>

				<div class="row">
					<h2>2003-03-02</h2>
					<p>
					Luca Elia sent in a driver for Metal Clash. Bryan McPhail fixed a crash in the tilemap viewer. David Haywood fixed the background layer and scrolling in Dragon Master, the only remaining problem is the priorities. Lawrence Gold fixed a slight ANSI/POSIX incompliance in datafile.c. Phil Stroffolino sent in an update to the Namco NA-1/2 driver, fixing crash bugs in Tinkle Pit and Nettou! Gekitou! Quiztou!! and sprite glitches in Numan Athletics.
					</p>
					<div class="wippix">
						<img src="wippics/0303/metlclsh_1.png" alt="Metal Clash (c) 1985 Data East" width="256" height="232" />
						<img src="wippics/0303/metlclsh_2.png" alt="The intro of Metal Clash" width="256" height="232" />
						<img src="wippics/0303/metlclsh_3.png" alt="The intro of Metal Clash" width="256" height="232" />
						<img src="wippics/0303/metlclsh_4.png" alt="The gameplay of Metal Clash" width="256" height="232" />
						<img src="wippics/0303/metlclsh_5.png" alt="The gameplay of Metal Clash" width="256" height="232" />
						<img src="wippics/0303/metlclsh_6.png" alt="The gameplay of Metal Clash" width="256" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/drgnmst_new_1.png" alt="Dragon Master (c) 1994 Unico" width="384" height="224" />
						<img src="wippics/0303/drgnmst_new_2.png" alt="The intro of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/drgnmst_new_3.png" alt="The intro of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/drgnmst_new_4.png" alt="The gameplay of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/drgnmst_new_5.png" alt="The gameplay of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/drgnmst_new_6.png" alt="The gameplay of Dragon Master" width="384" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2003-03-01</h2>
					<p>
					Keith Wilkins and Derrick Renaud submitted a large update to the discrete sound system, adding discrete sound to Canyon Bomber, Polaris, Sprint, Sprint 2, Ultra Tank and samples to Circus, Clowns and Sea Wolf. Carlos Irigaray submitted another fix for light guns and frame skipping. Nicola Salmoria sent in another update to the Don Den Lover / Rong Rong driver, fixing the graphics glitches and adding Quiz Channel Question which works fine except for some palette issues. David Haywood sent in a driver for Dragon Master, it's fully playable except the background layers and scrolling are incorrect. ttmithee submitted a small fix to the DIP switches in Mouja.
					</p>
					<div class="wippix">
						<img src="wippics/0303/ddenlovr_new_1.png" alt="Don Den Lover (c) 1996 Dynax" width="336" height="240" />
						<img src="wippics/0303/ddenlovr_new_2.png" alt="The intro of Don Den Lover" width="336" height="240" />
						<img src="wippics/0303/ddenlovr_new_3.png" alt="The intro of Don Den Lover" width="336" height="240" />
						<img src="wippics/0303/ddenlovr_new_4.png" alt="The gameplay of Don Den Lover" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/rongrong_1.png" alt="Rong Rong (c) 1994 Nakanihon" width="336" height="240" />
						<img src="wippics/0303/rongrong_2.png" alt="The intro of Rong Rong" width="336" height="240" />
						<img src="wippics/0303/rongrong_3.png" alt="The intro of Rong Rong" width="336" height="240" />
						<img src="wippics/0303/rongrong_4.png" alt="The gameplay of Rong Rong" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/quizchq_1.png" alt="Quiz Channel Question (c) 1993 Laxan" width="336" height="240" />
						<img src="wippics/0303/quizchq_2.png" alt="The intro of Quiz Channel Question" width="336" height="240" />
						<img src="wippics/0303/quizchq_3.png" alt="The intro of Quiz Channel Question" width="336" height="240" />
						<img src="wippics/0303/quizchq_4.png" alt="The gameplay of Quiz Channel Question" width="336" height="240" />
						<img src="wippics/0303/quizchq_5.png" alt="The gameplay of Quiz Channel Question" width="336" height="240" />
						<img src="wippics/0303/quizchq_6.png" alt="The gameplay of Quiz Channel Question" width="336" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0303/drgnmst_1.png" alt="Dragon Master (c) 1994 Unico" width="384" height="224" />
						<img src="wippics/0303/drgnmst_2.png" alt="The intro of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/drgnmst_3.png" alt="The gameplay of Dragon Master" width="384" height="224" />
						<img src="wippics/0303/drgnmst_4.png" alt="The gameplay of Dragon Master" width="384" height="224" />
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
