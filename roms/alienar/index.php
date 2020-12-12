<?php
$title = 'MAME | Alien Arena (Duncan Brown, 1985)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Alien Arena (Duncan Brown, 1985)</h1>

	<p>
	Thanks to the kind generosity of Duncan Brown, the original ROM images for <b>Alien Arena</b>
	have been made available for free, non-commercial use.
	</p>

	<p>
	Before downloading, you must acknowledge that you understand these images are to be used only for
	non-commercial purposes. Do this by checking the box below the download button.
	</p>

	<script language="JavaScript" type="text/javascript">
		function isChecked()
		{
			if (document.agreeform.agree.checked == false)
			{
				alert("Before downloading, you must acknowledge that you understand these images are to be used only for non-commercial purposes. Do this by checking the box below the download button.");
				return false;
			}
			return true;
		}
	</script>

	<center>
		<div class="btn btn-success">
			<h4><a href="alienar.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Alien Arena ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p>
	<b>Alien Arena</b> was developed by Duncan Brown in 1984 to run on the classic Williams
	hardware. It is a "capture the flag" style game with a number of interesting twists. It
	was even put on location, but, well, Duncan explains all this in his readme. Here's an
	excerpt of the history:
	</p>

	<div class="bs-callout bs-callout-info">
		<p>
		By 1984, I had reverse-engineered the hardware used in Williams' games
		to the point where I had essentially created a "programmer's guide"
		for it.  Destiny called, I had to write a new game from scratch for
		this great hardware!  My original intent was to end up with a
		conversion kit that was more user-friendly than most (remember this was
		back when conversions were just starting to come into existence, long
		before JAMMA, and most of them were a complete mess to install).  A new
		marquee, new side stickers, new control panel, and 12 EPROMs, and away
		you go!  No messy wiring, board modifications, etc.  My production
		costs would be low, my sale price could be high.
		</p>

		<p>
		Well, that was the plan anyway...
		</p>

		<p>
		Over the course of a year, I wrote "Alien Arena".  It was written in
		6809 assembly language using a cross-compiler on an Apple II+.  Using
		custom-designed and handbuilt emulator hardware (*24* 2Kx8 static RAMs
		on a board connected to the Apple with a custom bus interface!) I could
		test out my code without the slowdown of programming and erasing a
		bunch of EPROMs all the time.
		</p>

		<p>
		When I was done, I assembled it into an ex-Stargate cabinet, and put it
		out in the arcade I owned at the time.  I made a few modifications
		(mostly to the computer-player AI) based on feedback from customers.  I
		cannot say it was an immense hit.  Most people thought it sucked,
		frankly.  You decide for yourself.  I know my wife and I had a blast
		playing it while I was designing it (probably added 6 months to the
		time to finish it, heh heh heh...).
		</p>
	</div>

	<p>
	A full history of the game is available in the <a href="aareadme.txt">readme</a>
	file, along with instructions on how to put the game onto real hardware. Duncan
	has also provided a PDF file containing <a href="alien_arena_stuff.pdf">a few
	bits and pieces of history</a> concerning the game.
	</p>

	<div>
		<img src="alie0007.png" width="320" height="240" alt="Alien Arena Screenshot" />
		<img src="alie0008.png" width="320" height="240" alt="Alien Arena Screenshot" />
		<img src="alie0016.png" width="320" height="240" alt="Alien Arena Screenshot" />
		<img src="alie0021.png" width="320" height="240" alt="Alien Arena Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="alienarena-cabinet.jpg" width="300" height="671" alt="Alien Arena cabinet" />

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
