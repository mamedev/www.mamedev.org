<?php
$title = 'MAME | Side Trak (Exidy, 1979)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Side Trak (Exidy, 1979)</h1>

	<p>
	Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
	holding company Xidy, Inc., the original ROM images for <b>Side Trax</b> have been made
	available for free, non-commercial use.
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
			<h4><a href="sidetrac.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Side Trak ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p>
	<b>Side Trak</b> is a black and white man-versus-machine game where the goal is to pick up all of
	the waiting passengers with your train while avoiding the computer-driver “killer engine” which aims
	to take you out in a head-on collision. You can control your train via the “fast” button which allows
	you to temporarily increase your speed on the tracks. You can also use the joystick to switch between
	several tracks at various junction points.
	</p>

	<p>
	Each time you make a complete circuit around the track and pass the start marker on the outside track,
	another car is added to your train. Passengers picked up from the outermost track are worth 10 points.
	Passengers picked up from each successive inner track are worth an additional 10 points. On top of
	that, passengers picked up when you have additional cars in tow add another 10 points per car.
	</p>

	<p>
	Side Trak is the first of several games that were developed on a common Exidy platform which would
	eventually become host to their most popular games. Early revisions of the platform &mdash; Side Trak
	included &mdash; had custom sound generators tailored for each game, along with a primitive tone
	generator that could play one of two very short preprogrammed sequences of notes. (Later games
	eventually included a common sound system.)
	</p>

	<div>
		<h2>Screenshots</h2>
		<img src="0003.png" width="320" height="240" alt="Exidy Side Trak Screenshot" />
		<img src="0004.png" width="320" height="240" alt="Exidy Side Trak Screenshot" />
		<img src="0005.png" width="320" height="240" alt="Exidy Side Trak Screenshot" />
		<img src="0006.png" width="320" height="240" alt="Exidy Side Trak Screenshot" />
		<img src="0007.png" width="320" height="240" alt="Exidy Side Trak Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="sidetrac-cabinet.jpg" width="300" height="376" alt="Exidy Side Trak Cabinet" />

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
