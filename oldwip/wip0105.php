<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>May 2001 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2001-05-31</h2>
					<p>
					Tatsuyuki Satoh added state saving support to the FM sound core. Aaron Giles (hopefully) fixed the Windows NT sound crash in the Win32 version.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-30</h2>
					<p>
					Shiriru added state saving support to the Cave driver and did many other fixes.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-29</h2>
					<p>
					David Graves streamlined the I/O handling in most of the Taito 68k based games, cleaned up several things and added default gun calibration values for Space Gun, Operation Thunderbolt and Under Fire. Guru added a newer version of Battle Garegga to the toaplan2 driver. Brian A. Troha submitted the correct DIP switch settings for Macross and Macross 2. Phil Stroffolino wrote a preliminary driver for Amazon, but it isn't playable because of protection. Bart Puype submitted a fix for itech8 games crashing when resetting them. Dave Haywood added Amatelass to the Amazon driver, but it doesn't work any better.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-28</h2>
					<p>
					Tatsuyuki Satoh fixed the bad sound frequency in games which use the Yamaha sound chips. Mathis Rosenhauer added Crazy Rally to the Hole Land driver, but sprite graphics are scrambled. Victor Trucco and Phil Stroffolino wrote a driver for Mighty Guy, but sound is not hooked up and some graphics priority problems remain.
					</p>
					<div class="wippix">
						<img src="wippics/0105/migh_1.png" alt="Mighty Guy (c) 1986 Nichibutsu" width="224" height="256" />
						<img src="wippics/0105/migh_2.png" alt="The intro of Mighty Guy" width="224" height="256" />
						<img src="wippics/0105/migh_3.png" alt="The gameplay of Mighty Guy" width="224" height="256" />
						<img src="wippics/0105/migh_4.png" alt="The gameplay of Mighty Guy" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-27</h2>
					<p>
					Dave Haywood fixed Boulder Dash from crashing, and he fixed Double Dragon 3 from skipping through the cut scenes. Uki fixed Dommy colors. Zsolt Vasvari rewrote the drivers based on Galaxian PCB, with many improvements.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-26</h2>
					<p>
					Uki added Main Stadium to the Bottom of the 9th driver, and fixed Dommy's screen size. Aaron Giles added support for more analog axes and POV hats in the Win32 version, and he fixed the ghost GUI problem in scanline modes. Dave Haywood added several clones to 8080bw and other drivers.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-25</h2>
					<p>
					Dave Haywood re-submitted a fix to Gunnail crash. Aaron Giles fixed the Turbo aspect ratio, and sent a driver for Gridlee.
					</p>
					<div class="wippix">
						<img src="wippics/0105/grid_1.png" alt="Gridlee (c) 1983 Videa" width="256" height="240" />
						<img src="wippics/0105/grid_2.png" alt="The intro of Gridlee" width="256" height="240" />
						<img src="wippics/0105/grid_3.png" alt="The intro of Gridlee" width="256" height="240" />
						<img src="wippics/0105/grid_4.png" alt="The gameplay of Gridlee" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-24</h2>
					<p>
					Guru fixed the ringkin2 machine definition for it to work properly. Jarek Burczynski re-submitted an update to the FM sound core.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-23</h2>
					<p>
					David Graves added state saving support to the Asuka driver. Luca Elia sent in a driver for Clash Road, but it lacks correct colors and sound.
					</p>
					<div class="wippix">
						<img src="wippics/0105/clsh_1.png" alt="Clash Road (c) 1986 Woodplace" width="288" height="224" />
						<img src="wippics/0105/clsh_2.png" alt="The intro of Clash Road" width="288" height="224" />
						<img src="wippics/0105/clsh_3.png" alt="The intro of Clash Road" width="288" height="224" />
						<img src="wippics/0105/clsh_4.png" alt="The gameplay of Clash Road" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-22</h2>
					<p>
					Luca Elia added Jitsuryoku!! Pro Yakyuu to the Mega System 1 driver. Aaron Giles cleaned up the Return of the Jedi driver.
					</p>
					<div class="wippix">
						<img src="wippics/0105/jits_1.png" alt="Jitsuryoku!! Pro Yakyuu (c) 1989 Jaleco" width="256" height="224" />
						<img src="wippics/0105/jits_2.png" alt="The intro of Jitsuryoku!! Pro Yakyuu" width="256" height="224" />
						<img src="wippics/0105/jits_3.png" alt="The intro of Jitsuryoku!! Pro Yakyuu" width="256" height="224" />
						<img src="wippics/0105/jits_4.png" alt="The gameplay of Jitsuryoku!! Pro Yakyuu" width="256" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-21</h2>
					<p>
					Phil Stroffolino sent in a working Ultra Tank driver, but it lacks sound. Dave Haywood added Space Stranger to the 8080bw driver. David Graves added state saving support to World Grand Prix and fixed some graphics problems.
					</p>
					<div class="wippix">
						<img src="wippics/0105/ultr_1.png" alt="Ultra Tank (c) 1979 Kee Games" width="256" height="224" />
						<img src="wippics/0105/ultr_2.png" alt="The intro of Ultra Tank" width="256" height="224" />
						<img src="wippics/0105/ultr_3.png" alt="The intro of Ultra Tank" width="256" height="224" />
						<img src="wippics/0105/ultr_4.png" alt="The gameplay of Ultra Tank" width="256" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0105/sstr_1.png" alt="Space Stranger (c) 1978 Hoei" width="224" height="256" />
						<img src="wippics/0105/sstr_2.png" alt="The gameplay of Space Stranger" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-20</h2>
					<p>
					Guru added the World version to the Double Dragon 2 driver.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-19</h2>
					<p>
					Aaron Giles re-added another Street Fighter: The Movie ROM set to the itech32 driver, and fixed the DIP switch settings in Shuffleshot.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-18</h2>
					<p>
					Bryan McPhail fixed the black spots in the background graphics of Puzzle Bobble 2 and 3.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-17</h2>
					<p>
					Luca Elia added Bang Bang Ball to the Metro driver.
					</p>
					<div class="wippix">
						<img src="wippics/0105/bang_1.png" alt="Bang Bang Ball (c) 1996 Banpresto" width="320" height="224" />
						<img src="wippics/0105/bang_2.png" alt="The intro of Bang Bang Ball" width="320" height="224" />
						<img src="wippics/0105/bang_3.png" alt="The intro of Bang Bang Ball" width="320" height="224" />
						<img src="wippics/0105/bang_4.png" alt="The gameplay of Bang Bang Ball" width="320" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-16</h2>
					<p>
					Aaron Giles fixed a small bug in the C 68k core, and added Shuffleshot to the itech32 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0105/shuf_1.png" alt="Shuffleshot (c) 1995 Incredible Technologies" width="384" height="255" />
						<img src="wippics/0105/shuf_2.png" alt="The intro of Shuffleshot" width="384" height="255" />
						<img src="wippics/0105/shuf_3.png" alt="The gameplay of Shuffleshot" width="384" height="255" />
						<img src="wippics/0105/shuf_4.png" alt="The gameplay of Shuffleshot" width="384" height="255" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-15</h2>
					<p>
					Dave Haywood added Ixion to the Zaxxon driver.
					</p>
					<div class="wippix">
						<img src="wippics/0105/ixio_1.png" alt="Ixion (c) 1983 Sega" width="224" height="256" />
						<img src="wippics/0105/ixio_2.png" alt="The intro of Ixion" width="224" height="256" />
						<img src="wippics/0105/ixio_3.png" alt="The intro of Ixion" width="224" height="256" />
						<img src="wippics/0105/ixio_4.png" alt="The gameplay of Ixion" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-14</h2>
					<p>
					Stefan Jokisch fixed the sound in Atari Basketball.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-13</h2>
					<p>
					Bryan McPhail finally fixed the V20 / V30 cycle count bug which affected the speed in Raiden, R-Type and more.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-12</h2>
					<p>
					Luca Elia added Go! Go! Mile Smile to the Puzzle Bancho driver.
					</p>
					<div class="wippix">
						<img src="wippics/0105/gogo_1.png" alt="Go! Go! Mile Smile (c) 1995 Fuuki" width="320" height="240" />
						<img src="wippics/0105/gogo_2.png" alt="The intro of Go! Go! Mile Smile" width="320" height="240" />
						<img src="wippics/0105/gogo_3.png" alt="The intro of Go! Go! Mile Smile" width="320" height="240" />
						<img src="wippics/0105/gogo_4.png" alt="The gameplay of Go! Go! Mile Smile" width="320" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-11</h2>
					<p>
					Aaron Giles added an easier way to set names for buttons, and added Neck &amp; Neck to the itech8 driver.
					</p>
					<div class="wippix">
						<img src="wippics/0105/neck_1.png" alt="Neck &amp; Neck (c) 1992 Incredible Technologies" width="368" height="240" />
						<img src="wippics/0105/neck_2.png" alt="The intro of Neck &amp; Neck" width="368" height="240" />
						<img src="wippics/0105/neck_3.png" alt="The gameplay of Neck &amp; Neck" width="368" height="240" />
						<img src="wippics/0105/neck_4.png" alt="The gameplay of Neck &amp; Neck" width="368" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-10</h2>
					<p>
					Stephane Humbert submitted a few dip switch settings fixes.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-09</h2>
					<p>
					Aaron Giles fixed a few more problems in the Win32 version.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-08</h2>
					<p>
					Aaron Giles added another Slick Shot romset, and he fixed some graphics problems with the Win32 version. Dave Haywood added Dommy to the Scrambled Egg driver.
					</p>
					<div class="wippix">
						<img src="wippics/0105/domm_1.png" alt="Dommy (c) 198? Technos" width="240" height="240" />
						<img src="wippics/0105/domm_2.png" alt="The intro of Dommy" width="240" height="240" />
						<img src="wippics/0105/domm_3.png" alt="The gameplay of Dommy" width="240" height="240" />
						<img src="wippics/0105/domm_4.png" alt="The gameplay of Dommy" width="240" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-07</h2>
					<p>
					Chack'n cleaned up the CPS-1 driver romset definitions a little. Bryan McPhail added pixel layer color emulation to the Taito F3 driver, fixing a few color problems. Aaron Giles sent in yet another Win32 version update, and he added another Vindicators romset.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-06</h2>
					<p>
					David Graves added Top Landing to the Taito Air system driver, but like Air Inferno, it doesn't have the 3D graphics.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-05</h2>
					<p>
					David Graves added state saving support to the Taito H system driver, and he sent in a preliminary Air Inferno driver that lacks 3D graphics emulation and therefore doesn't show much. Aaron Giles updated the Win32 version yet again, fixing a lot of things. Luca Elia sent in a driver for J. J. Squawkers.
					</p>
					<div class="wippix">
						<img src="wippics/0105/jjsq_1.png" alt="J. J. Squawkers (c) 1993 Athena / Able" width="384" height="240" />
						<img src="wippics/0105/jjsq_2.png" alt="The intro of J. J. Squawkers" width="384" height="240" />
						<img src="wippics/0105/jjsq_3.png" alt="The gameplay of J. J. Squawkers" width="384" height="240" />
						<img src="wippics/0105/jjsq_4.png" alt="The gameplay of J. J. Squawkers" width="384" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2001-05-04</h2>
					<p>
					Dave Haywood cleaned up the 8080bw driver a bit and added two clones.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-03</h2>
					<p>
					Aaron Giles updated the memory system, re-organizing a bit.
					</p>
				</div>

				<div class="row">
					<h2>2001-05-02</h2>
					<p>
					Dave Haywood added another Street Fighter 2 bootleg romset. Lee Taylor added another Space Invaders clone. Aaron Giles added a newer Marble Madness romset. Zsolt Vasvari updated the Scramble / Super Cobra / Amidar drivers with many bugfixes and cleanups.
					</p>
				</div>

				<div class="rowlast">
					<h2>2001-05-01</h2>
					<p>
					Bryan McPhail fixed a 68020 core bug which caused a lot of problems with the Taito F3 driver, namely a Puzzle Bobble 2 intro background graphics problem and some Bubble Memories bugs. In addition, the bugfix makes the following games fully playable: Elevator Action Returns, Darius Gaiden, Puzzle Bobble 4, Landmaker, Twin Qix and Gekirindan. Aaron Giles fixed a small interface bug in the Win32 version, and added better support for non-standard aspect ratios. Aaron also added overlay support for Avalance. Yochizo and Takahiro Nogi wrote a driver for Super Real Mahjong P2, but sound frequency might be a bit off.
					</p>
					<div class="wippix">
						<img src="wippics/0105/elva_1.png" alt="Elevator Action Returns (c) 1994 Taito" width="320" height="232" />
						<img src="wippics/0105/elva_2.png" alt="The intro of Elevator Action Returns" width="320" height="232" />
						<img src="wippics/0105/elva_3.png" alt="The intrp of Elevator Action Returns" width="320" height="232" />
						<img src="wippics/0105/elva_4.png" alt="The gameplay of Elevator Action Returns" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0105/dari_1.png" alt="Darius Gaiden (c) 1994 Taito" width="320" height="232" />
						<img src="wippics/0105/dari_2.png" alt="The intro of Darius Gaiden" width="320" height="232" />
						<img src="wippics/0105/dari_3.png" alt="The gameplay of Darius Gaiden" width="320" height="232" />
						<img src="wippics/0105/dari_4.png" alt="The gameplay of Darius Gaiden" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0105/pbob_1.png" alt="Puzzle Bobble 4 (c) 1997 Taito" width="320" height="232" />
						<img src="wippics/0105/pbob_2.png" alt="The intro of Puzzle Bobble 4" width="320" height="232" />
						<img src="wippics/0105/pbob_3.png" alt="The intro of Puzzle Bobble 4" width="320" height="232" />
						<img src="wippics/0105/pbob_4.png" alt="The gameplay of Puzzle Bobble 4" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0105/land_1.png" alt="Landmaker (c) 1998 Taito" width="320" height="232" />
						<img src="wippics/0105/land_2.png" alt="The intro of Landmaker" width="320" height="232" />
						<img src="wippics/0105/land_3.png" alt="The gameplay of Landmaker" width="320" height="232" />
						<img src="wippics/0105/land_4.png" alt="The gameplay of Landmaker" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0105/twin_1.png" alt="Twin Qix (c) 1995 Taito" width="320" height="232" />
						<img src="wippics/0105/twin_2.png" alt="The intro of Twin Qix" width="320" height="232" />
						<img src="wippics/0105/twin_3.png" alt="The intro of Twin Qix" width="320" height="232" />
						<img src="wippics/0105/twin_4.png" alt="The gameplay of Twin Qix" width="320" height="232" />
					</div>
					<div class="wippix">
						<img src="wippics/0105/geki_1.png" alt="Gekirindan (c) 1995 Taito" width="232" height="320" />
						<img src="wippics/0105/geki_2.png" alt="The intro of Gekirindan" width="232" height="320" />
						<img src="wippics/0105/geki_3.png" alt="The gameplay of Gekirindan" width="232" height="320" />
						<img src="wippics/0105/geki_4.png" alt="The gameplay of Gekirindan" width="232" height="320" />
					</div>
					<div class="wippix">
						<img src="wippics/0105/srmp_1.png" alt="Super Real Mahjong P2 (c) 1987 Seta" width="448" height="224" />
						<img src="wippics/0105/srmp_2.png" alt="The intro of Super Real Mahjong P2" width="448" height="224" />
						<img src="wippics/0105/srmp_3.png" alt="The intro of Super Real Mahjong P2" width="448" height="224" />
						<img src="wippics/0105/srmp_4.png" alt="The gameplay of Super Real Mahjong P2" width="448" height="224" />
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
