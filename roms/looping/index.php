<?php
$title = 'MAME | Looping (Video Games GmbH, 1982)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Looping (Video Games GmbH, 1982)</h1>

	<p>
	Thanks to the kind generosity of Reinhard Stompe, founder of Video Games GmbH, the original ROM images for
	<b>Looping</b> have been made available for free, non-commercial use.
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
			<h4><a href="looping.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Looping ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p>
	In <b>Looping</b>, a single player flies his/her airplane into
	Adventure-Land, battling hot air balloons, rockets, and other
	high-flying objects in the quest to reach &ldquo;The End.&rdquo;  An acceleration
	button, fire button, and a 2-dimensional (up-down) joystick are all
	you have as you fly your plane over cities, through pipes, and
	eventually into &ldquo;The End&rdquo; itself.  Death-defying looping maneuvers
	can be executed with ease as you attempt to destroy strange flying
	obstacles and ground targets.
	</p>

	<p>
	The <b>Looping</b> arcade machine contains a series of relatively rare Texas
	Instruments CPUs and a dedicated DAC (Digital To Analog Converter)
	sound chip, capable of speaking audible commands to the player
	throughout his/her mission.  The Texas Instruments CPUs are reportedly
	difficult to find if they need to be replaced, and original hardware
	is becoming scarce as the years go on.
	</p>

	<p>
	Released in 1982, <b>Looping</b> was one of the two original titled produced
	by the German company Video Games GmbH.  It is said to have been
	developed in Parma, Italy by Giorgio Ugozoli.  It was licensed to
	Venture Line for US manufacture and distribution, and has seen home
	release on the Colecovision.
	</p>

	<p>
	An interview with the developer of Looping, Giorgio Ugozzoli, is available
	<a href="./looping-interview.html">here in English</a>, and
	<a href="./looping-intervista.html">here in original Italian</a>!
	</p>

	<div>
		<h2>Screenshots</h2>
		<img src="looping0000.png" width="240" height="320" alt="Video Games GmbH Looping Screenshot" />
		<img src="looping0001.png" width="240" height="320" alt="Video Games GmbH Looping Screenshot" />
		<img src="looping0002.png" width="240" height="320" alt="Video Games GmbH Looping Screenshot" />
		<img src="looping0003.png" width="240" height="320" alt="Video Games GmbH Looping Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="looping-cabinet.jpg" width="300" height="400" alt="Video Games GmbH Looping Cabinet" />
	<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=612">
		<img src="looping-flyer.png" width="222" height="293" alt="Video Games GmbH Looping Flyer" />
	</a>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
