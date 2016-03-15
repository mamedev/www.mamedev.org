<?php
$title = 'MAME | Interview with Looping developer';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">An Interview With the Developer of Looping.</h1></center>


				The following is an interview with Giorgio Ugozzoli, the man behind "Looping (1982) (Video Games Gmbh)".<br>
				<br>
				Conducted March, 2011 by Corrado "Kold666" Tomaselli.  Translation by Antonio "f205v" Gerli.<br>
				Original Italian version <a href="./looping-intervista.html">here</a>.
				<br>
				<br>
				Thanks to the kind generosity of Reinhard Stompe, founder of Video Games GmbH, the original ROM images for 
				Looping have been made available <a href="./index.html">here</a> for free, non-commercial use. 
				<br>
				<br>
				<b>1) Tell me something about yourself, where and when you were born, your studies, your hobbies, etc.</b><br><br>
				I was born in Parma in 1946, then I immigrated to Argentina in 1950 where I grew up and where I studied, graduating in 
				engineering with a specialization in “Digital Techniques;” mainly hardware. In the meantime I played basketball in the Bahia Blanca 
				selection, winning the Argentinean Championship 2 times, in 1969 and 1970. Let's say that my 2 meters height helped me in the sport, 
				and consequently in the study ($$). I came back in Italy in 1976, where I started my professional career. I'm a fan of flying, I've 
				got a license both for gliding and for engine aircraft which I got in the same period I was "nursing" Looping.<br>
				<br>
				<b>2) Was Looping your first commercial game?</b><br><br>
				Looping was my first commercial video-game, but I had already built one of the first pinball machine with electronic 
				display instead of mechanical score reels; the pinball was “Timothy T” like the famous trotter horse in the '70. Then, 
				considering commercial products, I had already designed and engineered a number of electronic toys based on single chip 
				microcomputer TMS1000.  They were manufactured and marketed by Reel from Modena which at that time (1978-1982), together 
				with Clementoni, was one of the biggest producer of electronic toys before being swept away by the Chinese wave of toys.<br>
				<br>
				<b>3) Why did you choose Video Games Gmbh and not an Italian company to publish your game?</b><br><br>
				As a matter of fact, they choose me. At that time I was equipped to develop on Texas Instruments (TI) components; I was one of 
				the few in Europe to work in the consumer sector with the TMS1000, a 4 bit single chip microcomputer. It was TI
				who suggested my name when Video Games were looking for developers on the TMS9980 (8 bit) which they used in their first game 
				(Super Tank in 1981); they were looking for ideas and developers for a new game. I do not think that, at that time, there was 
				any Italian company with the skills to market a totally new game. It was the time when Italy was known for “clone”s, not for 
				original games.<br>
				<br>
				<b>4) Did you develop Looping alone? Did you design the hardware as well?</b><br><br>
				Differently from other game manufacturers, we adopted a rack system, a frame with 3 boards (CPU, I/O and power supply switching!), 
				a huge difference from single board manufacturers. I was born as a hardware engineer. The concept, the graphic and the CPU board 
				where designed by me (including the printed circuit layout), while the video board and the power supply were the same Video Games 
				had already used in Super Tank.<br>
				<br>
				<b>5) Which development tools did you use? (Hardware and software)</b><br><br>
				I invested all of my savings in a development kit: TI990/4 which was a microcomputer based on the TMS9900 processor (native 16 bit) 
				with an ICE (In Circuit Emulator) for the TMS1000, and Texas Instruments gave me as a gift an ICE for the TMS9900 just in case (it was not a very 
				popular system). It came with an OS, a compiler, and a powerful debugger.<br>
				Market was dominated by 8080 and 6800, the idea of working on a native 16 bit was thrilling, the game I had in my mind required a lot 
				of CPU.  Clocks where not going up, so 16 bit was the only solution. I had already attempted a first trial with an 8086 which was considered 
				faster (> 4 MHz Vs. 3.3 MHz), but it was an “hacked” 16 bit, not a native one like the 9900 and not so effective. With the 8086 I was not 
				able to have a scrolling background and such a high number of flying sprites as I needed.<br>
				The software was developed by 3 people who had just graduated from the University of Parma. One of them realized what we called the "Pascalator”", 
				a sort of translator from PASCAL to assembler, half of it automatically, half with some manual intervention. All of the game play 
				logic has been developed in this way, while the plane flight and the shots were programmed directly in assembler. Thanks to the rack layout, 
				the development was rather quick. We connected the ICE to the rack BUS, using the existing video board, so the software development could 
				precede parallel to the hardware development. Emulation of the 9900 made by the ICE was perfect, even in the most critical loops, so when we 
				finished the CPU board it was sufficient to burn the EPROM’s and it worked straight away.<br>
				<br>
				<b>6) How did you code the vocal synthesis on the TMS5220 and which software did you use?</b><br><br>
				Thanks to my good connections with TI the vocal synthesis was completely made in their plant in Nice, where I had already completed 
				other speech for toys and pinballs. For the speech, my sponsor was Giorgio Morosi, who later became CEO of Texas Instruments Europe.  
				He was the one sponsoring me into the microchip application world, which was just born at that time, and with him I had 
				a privileged relation.<br>
				<br>
				<b>7) Was it very expensive to program the words?</b><br><br>
				Yes, programming the speech was extremely expensive, for the video-games we used to choose single words or small phrases (game over) 
				from a pre-programmed library made by TI itself. Using words from the library was not so expensive compared to the custom recording 
				in Italian language.<br>
				I remember that they hosted me for a week in Nice. You have to consider that for Reel’s toys alone I gave them an order for 100.000 
				pieces; it was a remote controlled speaking robot called Charley whose testimonial for the marketing campaign was… Giles Villeneuve! 
				Those numbers were a dream for such complex devices.<br>
				<br>
				<b>8) How much time did it take to complete Looping?</b><br><br>
				Eight months.<br>
				<br>
				<b>9) How much did it cost the hardware development of Looping?</b><br><br>
				It was not a costly project.  Only the CPU board was required; and even if I had not designed any 16 bit board before we had no problems, 
				thanks to the support from Texas Instruments which supplied compatible chips. The most critical point for the 9900 was the external RAM, 
				which had to be rather quick. I would say that the main cost were the programmers: 3 people for 8 months (underpaid ;) )<br>
				<br>
				<b>10) How many copies were made?</b><br><br>
				I do not remember. Manufacturing for the boards and the cabinet was in Germany, in their plant. I think that at that time the 
				break-even point was 500 copies.<br>
				<br>
				<b>11) Any special memories about Looping you can tell us?</b><br><br>
				The most discussed point was about how the joystick should have worked. Should it be as in the real planes or as it is most natural and 
				intuitive with the UP moving the plane up and the DOWN moving the plane down. In the real planes it is the other way round. I lost my 
				point so I programmed an Easter Egg where a Morse code using the FIRE button inverted the joystick control, so I could play it the 
				way I liked.<br>
				<br>
				<b>12) Are there any other Easter Eggs?</b><br><br>
				One is described above, the other one is to make our names scroll, unfortunately I do not remember the codes, and they were not intuitive.<br>
				<br>
				<b>13) How many revisions did you program and which bug were they targeting?</b><br><br>
				Only one major revision when the final stage was introduced, it was not there in the first release. We used it to correct a number of 
				minor bugs, no critical bug was there.<br>
				<br>
				<b>14) Do you still have some hardware or software used to program Looping, or other memorabilia from that time (prototypes, programmer’s notes, schematics, source code)?</b><br><br>
				I should go down and look into my cellar, for sure I should still have notes and floppies.  Regarding hardware I did not keep the 
				boards, but I still have the chips. The big white 9900 dominating the jar was made of ceramic!! (I think it 
				had something like 8000 transistors).<br>
				<br>
				<img src="./chipJar.jpg" alt="Chip Jar" align="middle">
				<br>
				<b>15) Who are Alma, Marco, Pietro, Silvio, Mario and Luigi (High Scorers listed in the Video Games Gmbh version)?</b><br><br>
				The name list makes me think that the rack you got from Mr. Stompe comes from a not for sale version, because they were the people 
				working with me used to play it during lunch time:<br>
				Alma = female worker at the assembling plant.<br>
				Marco, Pietro and Silvio = the three coders, graduated engineers<br>
				Mario = sound effect specialist, all sounds in Looping come from him<br>
				Luigi = quality control and testing in the production line<br>
				<b>(Mr. Stompe gave permission for free use of Looping, but he did not supply the software, which has been dumped from a standard PCB found 
				on the market.)</b><br>
				I do not think he had the source code, only the object ready to be burned onto EPROMs. The license was not including the source.<br>
				<br>
				<b>16) Then, do you think it was a prototype version? In the two Looping revisions with copyright “Videogames Gmbh (license Venture Line)” for the American market, the names on the High Score table only have 3 letters.</b><br><br>
				It is very likely that it's a prototype for an exhibition; one of the firsts out of the line, and fully assembled in Italy. The German 
				production line only came to work after the initial exhibition presentation, in London, Frankfurt, Paris and Rome, which were the most 
				important in Europe.<br>
				<br>
				<b>17) Where in Italy did you manufacture PCBs and cabinets?</b><br><br>
				A company was formed specifically to assemble video-games and pinballs, it was called AMTEC Srl(Amusement TEChnology 1980) and it 
				was in Parma. I was shareholder, together with Video Games Gmbh.<br>
				<br>
				<b>18) Did you take care of Looping conversion for ColecoVision and of the sequel, Sky Bumper (from Venture Line)?</b><br><br>
				No, I was not involved, everything was done by the Germans directly.<br>
				<br>
				<b>19) Did you designe / code other video-games or software?</b><br><br>
				Video-games not; I worked on pinball hardware (Space Shuttle by Williams, one of them I still own in my house). I designed and 
				engineered a “universal” board for pinballs based on the 9980, which was manufactured in huge numbers and was used to refurnish 
				electromechanical machines. That board did not need to be programmed to work, but simply configured for the new game. An enormous 
				three-dimensional matrix cause-effect-point was burned on an EPROM, and the game was ready - a little genius idea made in Italy. 
				That was possible because electromechanical machines had rather simple game layouts. I still have a copy of these boards. It is 
				worth mentioning that a single board carried the CPU with ancillary chips, the EPROMs and 24 TRIACs (!) to control the solenoids with 
				peaks up to 10Amp, regardless to electromagnetic disturbances.<br>
				<br>
				<b>20) Did you receive many inquiries for that board from the various operators?</b><br><br>
				The retrofit board was a very good idea, one of that ideas that can change your life; at that time it was sold at 100,000 ITL (*) and there 
				were lots of warehouses full of old electromechanical pinballs perfectly working, but discarded because of the new electronic machines. 
				It was in the mid-80s when I started negotiation to sell the project to one of the main pinball manufacturers in Italy. The negotiation 
				was long and complex, and due to its exclusive nature I could not negotiate with other parties. The long waiting was fatal, the company 
				closed in 1986 and for me it was too late to open alternative roads.<br>
				<br>
				<b>21) Do you know MAME? What do you think of it?</b><br><br>
				No, I only learn about it now that you mention it.<br>
				<br>
				<b>22) What are you doing now?</b><br><br>
				I'm working as a consultant, mainly in the field of services for mobile phones, and I also project some strange 
				things: [The link appears to no longer work: http://epigonion.mzone.it/Laser.html]<br>
				<br>
				<br>
				(*) Translator note: 100,000 ITL in 1984 are equivalent to 130.00 EUR today<br>
				<br>
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>