<?php
$title = 'MAME | Work-in-Progress';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">
            	<h1>March 2002 Work-in-Progress</h1>
            	<h2></h2>

				<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/wipheader.html'); ?>
            	
				<div class="row">
					<h2>2002-03-31</h2>
					<p>
					Aaron Giles fixed the shadows in Mortal Kombat 2 and 3. Takahiro Nogi fixed the Final Romance driver that was broken in 0.59. Stefan Jokisch submitted a driver for Drag Race. Lawrence Gold fixed some compile problems which occurred with a newer GCC.
					</p>
					<div class="wippix">
						<img src="wippics/0203/drag_1.png" alt="Drag Race (c) 1977 Atari" width="256" height="240" />
						<img src="wippics/0203/drag_2.png" alt="The intro of Drag Race" width="256" height="240" />
						<img src="wippics/0203/drag_3.png" alt="The gameplay of Drag Race" width="256" height="240" />
						<img src="wippics/0203/drag_4.png" alt="The gameplay of Drag Race" width="256" height="240" />
					</div>
				</div>

				<div class="row">
					<h2>2002-03-30</h2>
					<p>
					Phil Stroffolino sent in a cleanup to the Namco NA1/2 driver that fixes most of the reported bugs. Brian A. Troha submitted the additions of a Japanese version of Outfoxies to the Namco NB-2 driver and Space Invaders '95 to the Taito F3 driver. Smitdogg Jones re-submitted the Phoenix driver with Falcon added to it.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-29</h2>
					<p>
					Zsolt Vasvari added the color overlay to Bandito. Stephane Humbert updated some more DIP switch settings in the VSNES driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-28</h2>
					<p>
					Aaron Giles added a feature to the memory system that returns a pre-specified value from unmapped memory addresses, and added the Judge Dredd prototype to the Williams T-unit driver.
					</p>
					<div class="wippix">
						<img src="wippics/0203/jdre_1.png" alt="Judge Dredd (c) 1993 Midway" width="395" height="254" />
						<img src="wippics/0203/jdre_2.png" alt="The intro of Judge Dredd" width="395" height="254" />
						<img src="wippics/0203/jdre_3.png" alt="The gameplay of Judge Dredd" width="395" height="254" />
						<img src="wippics/0203/jdre_4.png" alt="The gameplay of Judge Dredd" width="395" height="254" />
						<img src="wippics/0203/jdre_5.png" alt="The gameplay of Judge Dredd" width="395" height="254" />
						<img src="wippics/0203/jdre_6.png" alt="The gameplay of Judge Dredd" width="395" height="254" />
						<img src="wippics/0203/jdre_7.png" alt="The gameplay of Judge Dredd" width="395" height="254" />
						<img src="wippics/0203/jdre_8.png" alt="The gameplay of Judge Dredd" width="395" height="254" />
					</div>
				</div>

				<div class="row">
					<h2>2002-03-27</h2>
					<p>
					Aaron Giles fixed the problem in auditing samples and artwork in the Windows version.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-26</h2>
					<p>
					Jarek Burczynski did a major improvement on the YM3812 sound chip emulation, making it much more accurate than before by comparing its output with the real chip. Matthew Neja added the correct color PROM for Crush Roller and fixed the DIP switch settings in the VSNES driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-25</h2>
					<p>
					Ron Fries finished adding the support for adding controller-specific mapping using .ini files.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-24</h2>
					<p>
					Brian A. Troha re-submitted the addition of a world version of Gunbird to the Psikyo driver. Paul Priest re-submitted the improvements to the hotrod/hotrodse presets. Phil Stroffolino started abstracting some of the newer Namco graphics chips for a more general level of support for them.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-23</h2>
					<p>
					David Haywood fixed the Psikyo SH-2 games from crashing. Aaron Giles fixed the corrupt vertical lines in the tilemap graphics in several games.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-22</h2>
					<p>
					Stephane Humbert added an older Japanese version of Haunted Castle and fixed a few other minor things in that driver. Chack'n submitted some ROM filename fixes and fixed voice playback in Pistol Daimyo no Bouken. Aaron Giles fixed a small bug in Atari drivers' memory allocation.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-21</h2>
					<p>
					Ron Fries started adding support for re-mapping inputs using standard .ini files. Olivier Galibert found the correct shift register operations for noise generators for both SN76489 (with thanks to John Kortink for information) and YM3812. Aaron Giles fixed a crash in the tilemap system.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-20</h2>
					<p>
					Aaron Giles re-added Andrea Mazzoleni's MMX optimizations to the latest tilemap changes. Pekka Salmia and Brian A. Troha submitted an addition of the European ROM set to the Cowboys of Moo Mesa driver. Peter Trauner submitted an update to the NEC uPD7810 CPU core, fixing a lot of bugs.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-19</h2>
					<p>
					Brian A. Troha corrected the Gunbird addition which is actually a world version. R. Belmont submitted yet another update to the Cowboys of Moo Mesa driver fixing a few small things. Aaron Giles improved the idle timeslice releasing by using more accurate timers. Stephane Humbert fixed a small bug in the Galaxian driver. Pekka Salmia and Brian A. Troha submitted an addition of the European version of Bubble Symphony to the Taito F3 driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-18</h2>
					<p>
					Acho A. Tang submitted a massive update for the Alpha68k driver, fixing a few graphics problems in Sky Adventure and Time Soldiers, and making Paddle Mania, Super Stingray and Kyros playable. Brian A. Troha added the World version of Magical Crystals to the Kaneko16 driver. Pekka Salmia submitted an addition of the USA version of Gunbird to the Psikyo driver.
					</p>
					<div class="wippix">
						<img src="wippics/0203/padd_1.png" alt="Paddle Mania (c) 1988 SNK" width="224" height="256" />
						<img src="wippics/0203/padd_2.png" alt="The gameplay of Paddle Mania" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0203/ssti_1.png" alt="Super Stingray (c) 1986 Alpha Denshi Co" width="224" height="256" />
						<img src="wippics/0203/ssti_2.png" alt="The gameplay of Super Stingray" width="224" height="256" />
					</div>
					<div class="wippix">
						<img src="wippics/0203/kyro_1.png" alt="Kyros (c) 1987 World Games Inc" width="224" height="256" />
						<img src="wippics/0203/kyro_2.png" alt="The gameplay of Kyros" width="224" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-03-17</h2>
					<p>
					Aaron Giles added support for idle timeslice releasing, which will avoid using 100% of the processing power with the less demanding games.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-16</h2>
					<p>
					Stefan Jokisch fixed the waves in the Destroyer driver and added some other minor improvements. Mike Coates added the Subelectro version of Pisces to the Galaxian driver, it appears to have better colors than the current version.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-15</h2>
					<p>
					Aaron Giles did a minor update on the tilemap system, adding some minor speedups.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-14</h2>
					<p>
					chack'n added the Japanese version of Captain America, a World version of Gradius 3 and fixed quite a few ROM file names.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-13</h2>
					<p>
					Uki fixed the clock frequencies and DIP switch settings in Sports Match. Ernesto Corvi fixed a few bugs in the M6805 CPU core, but fortunately the bugs didn't affect anything.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-12</h2>
					<p>
					R. Belmont submitted a driver for Wild West C.O.W.boys of Moo Mesa and Bucky O'Hare, with thanks to ElSemi and Olivier Galibert for information on the protection.
					</p>
					<div class="wippix">
						<img src="wippics/0203/moo_1.png" alt="Wild West C.O.W.boys of Moo Mesa (c) 1992 Konami" width="380" height="224" />
						<img src="wippics/0203/moo_2.png" alt="The intro of Wild West C.O.W.boys of Moo Mesa" width="380" height="224" />
						<img src="wippics/0203/moo_3.png" alt="The intro of Wild West C.O.W.boys of Moo Mesa" width="380" height="224" />
						<img src="wippics/0203/moo_4.png" alt="The intro of Wild West C.O.W.boys of Moo Mesa" width="380" height="224" />
						<img src="wippics/0203/moo_5.png" alt="The gameplay of Wild West C.O.W.boys of Moo Mesa" width="380" height="224" />
						<img src="wippics/0203/moo_6.png" alt="The gameplay of Wild West C.O.W.boys of Moo Mesa" width="380" height="224" />
						<img src="wippics/0203/moo_7.png" alt="The gameplay of Wild West C.O.W.boys of Moo Mesa" width="380" height="224" />
						<img src="wippics/0203/moo_8.png" alt="The gameplay of Wild West C.O.W.boys of Moo Mesa" width="380" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0203/buck_1.png" alt="Bucky O'Hare (c) 1992 Konami" width="384" height="224" />
						<img src="wippics/0203/buck_2.png" alt="The intro of Bucky O'Hare" width="384" height="224" />
						<img src="wippics/0203/buck_3.png" alt="The intro of Bucky O'Hare" width="384" height="224" />
						<img src="wippics/0203/buck_4.png" alt="The gameplay of Bucky O'Hare" width="384" height="224" />
						<img src="wippics/0203/buck_5.png" alt="The gameplay of Bucky O'Hare" width="384" height="224" />
						<img src="wippics/0203/buck_6.png" alt="The gameplay of Bucky O'Hare" width="384" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-03-11</h2>
					<p>
					Bryan McPhail fixed a bug in the Robocop 2 driver which caused crashes. Stefan Jokisch fixed Vulgus from crashing. Aaron Giles fixed a bug in the tilemap routines which caused problems with asymmetric tilemaps and rotation.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-10</h2>
					<p>
					R. Belmont reported some more progress with the Konami GX system driver. Alpha blending is working fine and the priorities are sorted out.
					</p>
					<div class="wippix">
						<img src="wippics/0203/goku_1.png" alt="Gokujou Parodius (c) 1994 Konami" width="288" height="224" />
						<img src="wippics/0203/goku_2.png" alt="The intro of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0203/goku_3.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0203/goku_4.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0203/goku_5.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0203/goku_6.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0203/goku_7.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
						<img src="wippics/0203/goku_8.png" alt="The gameplay of Gokujou Parodius" width="288" height="224" />
					</div>
					<div class="wippix">
						<img src="wippics/0203/sexy_1.png" alt="Sexy Parodius (c) 1996 Konami" width="288" height="224" />
						<img src="wippics/0203/sexy_2.png" alt="The intro of Sexy Parodius" width="288" height="224" />
						<img src="wippics/0203/sexy_3.png" alt="The intro of Sexy Parodius" width="288" height="224" />
						<img src="wippics/0203/sexy_4.png" alt="The gameplay of Sexy Parodius" width="288" height="224" />
					</div>
				</div>

				<div class="row">
					<h2>2002-03-09</h2>
					<p>
					Stefan Jokisch sent in a driver for Super Bug.
					</p>
					<div class="wippix">
						<img src="wippics/0203/supe_1.png" alt="Super Bug (c) 1977 Atari" width="240" height="256" />
						<img src="wippics/0203/supe_2.png" alt="The gameplay of Super Bug" width="240" height="256" />
						<img src="wippics/0203/supe_3.png" alt="The gameplay of Super Bug" width="240" height="256" />
						<img src="wippics/0203/supe_4.png" alt="The gameplay of Super Bug" width="240" height="256" />
					</div>
				</div>

				<div class="row">
					<h2>2002-03-08</h2>
					<p>
					Aaron Giles added hard disk support and emulation for a standard IDE controller.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-07</h2>
					<p>
					Stephane Humbert fixed the input ports in the TMNT driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-06</h2>
					<p>
					Kale submitted a bug fix the wrong graphics alignment in Arm Wrestling. Phil Stroffolino sent in a preliminary driver for Change Lanes which has problems with the interrupt system and therefore doesn't work at all.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-05</h2>
					<p>
					Stephane Humbert fixed DIP switches and inputs in various drivers. J&uuml;rgen Buchm&uuml;ller added the undocumented opcodes to the 8085a CPU core.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-04</h2>
					<p>
					David Haywood improved the backgrounds in Space Bomber and Gunbird 2, but they still aren't perfect and Strikers 1945 II isn't improved at all. Kale submitted a fix for Thunder Cross 2 which was broken in 0.58.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-03</h2>
					<p>
					Aaron Giles fixed a bug in the swl/swr instructions in the R3000 CPU core. Olivier Galibert fixed the negc instruction in the SH-2 CPU core. Guru added an alternative version of Moon Cresta to the Galaxians driver.
					</p>
				</div>

				<div class="row">
					<h2>2002-03-02</h2>
					<p>
					Bryan McPhail added sprite flicker to the Captain America driver, and Stephane Humbert fixed the input ports in it. Olivier Galibert fixed a few bugs in the SH-2 CPU core which also fix Daraku Tenshi - The Fallen Angels.
					</p>
					<div class="wippix">
						<img src="wippics/0203/dara_1.png" alt="Daraku Tenshi (c) 1998 Psikyo" width="320" height="224" />
						<img src="wippics/0203/dara_2.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0203/dara_3.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0203/dara_4.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0203/dara_5.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0203/dara_6.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0203/dara_7.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
						<img src="wippics/0203/dara_8.png" alt="The gameplay of Daraku Tenshi" width="320" height="224" />
					</div>
				</div>

				<div class="rowlast">
					<h2>2002-03-01</h2>
					<p>
					R. Belmont fixed a bug in the SH-2 CPU core which fixes the missing background graphics in Strikers 1945 II, although they still aren't perfect due to other unemulated features.
					</p>
					<div class="wippix">
						<img src="wippics/0203/s194_1.png" alt="The attract mode of Strikers 1945 II" width="224" height="320" />
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
