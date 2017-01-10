<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>November 2000 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2000-11-30</h2>
					<p>
					Ernesto Corvi fixed a bug in the 2105 interrupt model. Shiriru submitted a huge Cave driver update with fixed zooming effect and sprite decoding of Esprade.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-29</h2>
					<p>
					Olivier Galibert sent in a huge Xexex driver update with a lot better graphics emulation, some sound-related and other fixes, however alpha blending layers are still not emulated. Yochizo fixed the Syvalion emulation speed.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-28</h2>
					<p>
					Phil Stroffolino sent in Mr. Flea driver again synced against the current source tree. Keith Wilkins sent in a discrete sound system update, fixing some sounds in Asteroids.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-27</h2>
					<p>
					Stefan Jokisch submitted a fix for Rainbow Islands secret room bug caused by incomplete C-chip simulation.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-26</h2>
					<p>
					Peter Trauner fixed several issues in the i86 CPU core and sent in a preliminary version of runtime driver loading support, allowing drivers and CPU and sound cores to be loaded separately from the executable when needed. Guru added a hacked romset to the 1942 driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-25</h2>
					<p>
					Jarek Burczynski implemented source bitmap scanline duplication in the tilemap system, and added Sonic Blast Man to the Taito B driver. Peter Trauner fixed some problems in the M6502 CPU core.
					</p>
					<div class="wippix">
						<img src="wippics/0011/sbm_1.png" alt="Sonic Blast Man (c) 1990 Taito" width="320" height="224" />
						<img src="wippics/0011/sbm_2.png" alt="The intro of Sonic Blast Man" width="320" height="224" />
						<img src="wippics/0011/sbm_3.png" alt="The intro of Sonic Blast Man" width="320" height="224" />
						<img src="wippics/0011/sbm_4.png" alt="The gameplay of Sonic Blast Man" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-24</h2>
					<p>
					Yochizo sent in a driver for Argus and Valtric, but Argus is not working properly yet.
					</p>
					<div class="wippix">
						<img src="wippics/0011/valt_1.png" alt="Valtric (c) 1986 Jaleco" width="224" height="256" />
						<img src="wippics/0011/valt_2.png" alt="The intro of Valtric" width="224" height="256" />
						<img src="wippics/0011/valt_3.png" alt="The gameplay of Valtric" width="224" height="256" />
						<img src="wippics/0011/valt_4.png" alt="The gameplay of Valtric" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-23</h2>
					<p>
					Bernd Wiebelt and Aaron Giles fixed several problems in the YMZ280B sound core.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-22</h2>
					<p>
					Yochizo fixed some graphics problems in Dynamite League.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-21</h2>
					<p>
					Takahiro Nogi fixed TT Mahjong input ports. Aaron Giles fixed another bug in the ASM 68k core. Yochizo fixed some graphics bugs in the Omega Fighter / Atomic Robokid driver. Gerardo Oporto fixed Senjyo dip switch settings.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-20</h2>
					<p>
					Aaron Giles fixed vertical flip and graphics priority problems in Rabbit Punch, cleaned up the Leland driver a bit and added Stompin' to the Bally/Sente driver. Gerardo Oporto fixed Twinbee dip switch settings. Keith Wilkins sent in an update to the discrete sound system, fixing some sound problems in Asteroids and Lunar Lander.
					</p>
					<div class="wippix">
						<img src="wippics/0011/stom_1.png" alt="Stompin' (c) 1986 Bally/Sente" width="256" height="240" />
						<img src="wippics/0011/stom_2.png" alt="The gameplay of Stompin'" width="256" height="240" />
						<img src="wippics/0011/stom_3.png" alt="The gameplay of Stompin'" width="256" height="240" />
						<img src="wippics/0011/stom_4.png" alt="The gameplay of Stompin'" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-19</h2>
					<p>
					Aaron Giles fixed some more ASM 68k core bugs, added two new graphics drawing functions for scanline exact video emulation and converted a huge amount of drivers to use the new functionality.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-18</h2>
					<p>
					Aaron Giles updated the MCR drivers' video routines to use pixel plotting functions instead of direct bitmap drawing, and he fixed some graphics priority problems in Pac 'n Pal. Yochizo sent in a driver for Taito H system, supporting Syvalion, Record Breaker and Dynamite League. Nicola Salmoria fixed a stupid bug in Mr. Do! color PROM decoding, and he fixed music tempo and colors in Wiping.
					</p>
					<div class="wippix">
						<img src="wippics/0011/syva_1.png" alt="Syvalion (c) 1988 Taito" width="512" height="400" />
						<img src="wippics/0011/syva_2.png" alt="The intro of Syvalion" width="512" height="400" />
						<img src="wippics/0011/syva_3.png" alt="The gameplay of Syvalion" width="512" height="400" />
						<img src="wippics/0011/syva_4.png" alt="The gameplay of Syvalion" width="512" height="400" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/dlea_1.png" alt="Dynamite League (c) 1990 Taito" width="320" height="240" />
						<img src="wippics/0011/dlea_2.png" alt="The intro of Dynamite League" width="320" height="240" />
						<img src="wippics/0011/dlea_3.png" alt="The gameplay of Dynamite League" width="320" height="240" />
						<img src="wippics/0011/dlea_4.png" alt="The gameplay of Dynamite League" width="320" height="240" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/reco_1.png" alt="Record Breaker (c) 1988 Taito" width="320" height="240" />
						<img src="wippics/0011/reco_2.png" alt="The intro of Record Breaker" width="320" height="240" />
						<img src="wippics/0011/reco_3.png" alt="The intro of Record Breaker" width="320" height="240" />
						<img src="wippics/0011/reco_4.png" alt="The gameplay of Record Breaker" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-17</h2>
					<p>
					Gerardo Oporto fixed dipswitches in Punchout. Aaron Giles fixed some color problems in Atari System 1 driver, combined the Toy Pop and Libble Rabble drivers and added flip screen support, fixed graphics priority problems in Shuuz and sent in a driver for an Atari prototype game called BeatHead.
					</p>
					<div class="wippix">
						<img src="wippics/0011/beat_1.png" alt="BeatHead (c) 1993 Atari" width="336" height="240" />
						<img src="wippics/0011/beat_2.png" alt="The intro of BeatHead" width="336" height="240" />
						<img src="wippics/0011/beat_3.png" alt="The gameplay of BeatHead" width="336" height="240" />
						<img src="wippics/0011/beat_4.png" alt="The gameplay of BeatHead" width="336" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-16</h2>
					<p>
					Mike Coates fixed some bugs in the CVS driver, added Heart Attack to it and fixed the broken Hunchback clones on different hardware. Aaron Giles fixed some opcode bugs in the ASM 68k core, and he cleaned up the Sega C2 driver. Keith Wilkins updated the discrete sound system again and added support for Asteroids and Asteroids Deluxe.
					</p>
					<div class="wippix">
						<img src="wippics/0011/hear_1.png" alt="Heart Attack (c) 1983 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/hear_2.png" alt="The gameplay of Heart Attack" width="248" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-15</h2>
					<p>
					David Graves sent in a driver for World Grand Prix.
					</p>
					<div class="wippix">
						<img src="wippics/0011/wgp_1.png" alt="World Grand Prix (c) 1989 Taito" width="320" height="240" />
						<img src="wippics/0011/wgp_2.png" alt="The intro of World Grand Prix" width="320" height="240" />
						<img src="wippics/0011/wgp_3.png" alt="The gameplay of World Grand Prix" width="320" height="240" />
						<img src="wippics/0011/wgp_4.png" alt="The gameplay of World Grand Prix" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-14</h2>
					<p>
					Mike Coates submitted the Century Video System driver written by him and Malcolm Lear, supporting Hunchback, Hero, Hunchback Olympic, Cosmos, Dark Warrior, Video Eight Ball, Logger, Dazzler, Wall Street, Radar Zone, Gold Bug and Superbike. Gerardo Oporto fixed dip switches in the Toaplan2 driver. Aaron Giles fixed a bug in CPU interface that caused suspended CPUs to never get released, and he fixed a small bug in the -listinfo command. Bryan McPhail fixed K051649 sound problems in Haunted Castle, and he fixed a bug in the NEC CPU core which affected scoring in Bomberman World. Sean Young submitted some bug fixes for Z80's undocumented opcodes.
					</p>
					<div class="wippix">
						<img src="wippics/0011/hunc_1.png" alt="Hunchback (c) 1983 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/hunc_2.png" alt="The gameplay of Hunchback" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/hero_1.png" alt="Hero (c) 1983 Seatongrove" width="248" height="256" />
						<img src="wippics/0011/hero_2.png" alt="The gameplay of Hero" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/holy_1.png" alt="Hunchback Olympic (c) 1984 Seatongrove" width="248" height="256" />
						<img src="wippics/0011/holy_2.png" alt="The gameplay of Hunchback Olympic" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/cosm_1.png" alt="Cosmos (c) 1981 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/cosm_2.png" alt="The gameplay of Cosmos" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/dark_1.png" alt="Dark Warrior (c) 1981 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/dark_2.png" alt="The gameplay of Dark Warrior" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/8bal_1.png" alt="Video Eight Ball (c) 1982 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/8bal_2.png" alt="The gameplay of Video Eight Ball" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/logg_1.png" alt="Logger (c) 1982 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/logg_2.png" alt="The gameplay of Logger" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/dazz_1.png" alt="Dazzler (c) 1982 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/dazz_2.png" alt="The gameplay of Dazzler" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/wall_1.png" alt="Wall Street (c) 1982 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/wall_2.png" alt="The gameplay of Wall Street" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/rada_1.png" alt="Radar Zone (c) 1982 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/rada_2.png" alt="The gameplay of Radar Zone" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/gold_1.png" alt="Gold Bug (c) 1982 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/gold_2.png" alt="The gameplay of Gold Bug" width="248" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/supe_1.png" alt="Superbike (c) 1983 Century Electronics" width="248" height="256" />
						<img src="wippics/0011/supe_2.png" alt="The gameplay of Superbike" width="248" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-13</h2>
					<p>
					John and Philip Bennett improved the World Cup '90 sounds, but it still lacks drum samples. Aaron Giles fixed some problems in the ASM 68k core.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-12</h2>
					<p>
					Paul Hampson submitted an almost perfect US Championship V'Ball driver, only some sound problems remain.
					</p>
					<div class="wippix">
						<img src="wippics/0011/vbal_1.png" alt="US Championship V'Ball (c) 1988 Technos" width="256" height="256" />
						<img src="wippics/0011/vbal_2.png" alt="The intro of US Championship V'Ball" width="256" height="256" />
						<img src="wippics/0011/vbal_3.png" alt="The intro of US Championship V'Ball" width="256" height="256" />
						<img src="wippics/0011/vbal_4.png" alt="The gameplay of US Championship V'Ball" width="256" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-11</h2>
					<p>
					David Graves sent in preliminary Operation Wolf / Operation Thunderbolt drivers, however only Operation Thunderbolt works. Keith Wilkins updated the discrete sound system emulation to support Lunar Lander.
					</p>
					<div class="wippix">
						<img src="wippics/0011/othu_1.png" alt="Operation Thunderbolt (c) 1988 Taito" width="320" height="240" />
						<img src="wippics/0011/othu_2.png" alt="The intro of Operation Thunderbolt" width="320" height="240" />
						<img src="wippics/0011/othu_3.png" alt="The intro of Operation Thunderbolt" width="320" height="240" />
						<img src="wippics/0011/othu_4.png" alt="The gameplay of Operation Thunderbolt" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-10</h2>
					<p>
					Tatsuyuki Satoh fixed a bug in the Namco System 1 driver which affected World Stadium '90. Aaron Giles removed useless input ports from Mortal Kombat II, added a few new romsets and fixed the main set. Gerardo Oporto fixed the dipswitch settings in the M72 driver.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-09</h2>
					<p>
					Nicola Salmoria fixed the Outrun road graphics bugs. Luca Elia sent in a driver for American Speedway. Quench sent an updated Toaplan2 driver with text-layer scroll effect that fixes the ending scene in Armed Police Batrider.
					</p>
					<div class="wippix">
						<img src="wippics/0011/amsp_1.png" alt="American Speedway (c) 1987 Enerdyne Technologies" width="256" height="224" />
						<img src="wippics/0011/amsp_2.png" alt="The intro of American Speedway" width="256" height="224" />
						<img src="wippics/0011/amsp_3.png" alt="The gameplay of American Speedway" width="256" height="224" />
						<img src="wippics/0011/amsp_4.png" alt="The gameplay of American Speedway" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-08</h2>
					<p>
					Yochizo sent in a driver for Omega Fighter and Atomic Robokid. Aaron Giles fixed the ASM 68k core to work with the new memory system.
					</p>
					<div class="wippix">
						<img src="wippics/0011/omeg_1.png" alt="Omega Fighter (c) 1989 UPL" width="192" height="256" />
						<img src="wippics/0011/omeg_2.png" alt="The intro of Omega Fighter" width="192" height="256" />
						<img src="wippics/0011/omeg_3.png" alt="The gameplay of Omega Fighter" width="192" height="256" />
						<img src="wippics/0011/omeg_4.png" alt="The gameplay of Omega Fighter" width="192" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0011/robo_1.png" alt="Atomic Robokid (c) 1988 UPL" width="256" height="192" />
						<img src="wippics/0011/robo_2.png" alt="The intro of Atomic Robokid" width="256" height="192" />
						<img src="wippics/0011/robo_3.png" alt="The gameplay of Atomic Robokid" width="256" height="192" />
						<img src="wippics/0011/robo_4.png" alt="The gameplay of Atomic Robokid" width="256" height="192" />
					</div>
				</div>

				<div class="row">
					<h2>2000-11-07</h2>
					<p>
					Keith Wilkins sent in a preliminary version of discrete sound system emulation, not supporting any game yet. Mathis Rosenhauer re-submitted the Hole Land driver with a few graphical glitches fixed.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-06</h2>
					<p>
					Aaron Giles fixed the Sega C2 driver to have correct CPU and audio frequencies. Andrea Mazzoleni fixed a bug in the joystick calibration routines.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-05</h2>
					<p>
					Phil Stroffolino updated Shoot Out to work without the sprite manager.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-04</h2>
					<p>
					Gerardo Oporto fixed Terra Cresta dip switches.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-03</h2>
					<p>
					Yochizo fixed road color and music tempo in Daisenpu.
					</p>
				</div>

				<div class="row">
					<h2>2000-11-02</h2>
					<p>
					Guru added a few new Mortal Kombat romsets to the T-Unit and Y-Unit drivers. Aaron Giles cleaned up the Sega C2 driver and fixed some of the remaining problems.
					</p>
				</div>

				<div class="rowlast">
					<h2>2000-11-01</h2>
					<p>
					Aaron Giles fixed some scrolling effects in the Sega C2 driver. Luca Elia added Battle K-Road to the Psikyo driver. Phil Stroffolino started on a Looping driver, it runs I/O CPU code fine now but main CPU code does not seem to be valid and the microcontroller isn't emulated, so nothing works.
					</p>
					<div class="wippix">
						<img src="wippics/0011/btlk_1.png" alt="Battle K-Road (c) 1994 Psikyo" width="320" height="224" />
						<img src="wippics/0011/btlk_2.png" alt="The intro of Battle K-Road" width="320" height="224" />
						<img src="wippics/0011/btlk_3.png" alt="The intro of Battle K-Road" width="320" height="224" />
						<img src="wippics/0011/btlk_4.png" alt="The gameplay of Battle K-Road" width="320" height="224" />
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
