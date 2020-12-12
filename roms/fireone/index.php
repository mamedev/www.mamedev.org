<?php
$title = 'MAME | Fire One (Exidy, 1979)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Fire One (Exidy, 1979)</h1>

	<p>
	Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
	holding company Xidy, Inc., the original ROM images for <b>Fire One</b> have been made
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
			<h4><a href="fireone.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Fire One ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p>
	<b>Fire One!</b> was a player-versus-player or player-versus-computer submarine showdown,
	designed and programmed by David Rolfe, Ted Michon, and Susan Ogg for Exidy in 1979.
	The cabinet was split into two halves, with each player controlling their first-person
	submarine perspective on their half of the screen.
	</p>

	<p>The primary objective of the game is to find and destroy the enemy's submarine, while
	avoiding the enemy's torpedoes. Through your virtual periscope you are free to launch one
	of your 8 torpedoes to take out any of the enemy's various ships for extra
	points. It takes some time to reload each torpedo tube, so you must be judicious in how you
	plan your attacks.
	</p>

	<p>
	In addition to being able to control the left/right rotation of your periscope, the game also
	features a submerge button which you can use to temporarily hide from the enemy. Holding this
	button down keeps you hidden but also keeps you out of the action, allowing the enemy free reign
	over the seas.
	</p>

	<div>
		<h2>Screenshots</h2>
		<img src="0003.png" width="320" height="240" alt="Exidy Fire One Screenshot" />
		<img src="0006.png" width="320" height="240" alt="Exidy Fire One Screenshot" />
		<img src="0021.png" width="320" height="240" alt="Exidy Fire One Screenshot" />
		<img src="0037.png" width="320" height="240" alt="Exidy Fire One Screenshot" />
		<img src="0048.png" width="320" height="240" alt="Exidy Fire One Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="fireone-cabinet.jpg" width="300" height="432" alt="Exidy Fire One Cabinet" />
	<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=1817">
		<img src="fireone-flyer.png" width="222" height="289" alt="Exidy Fire One flyer" />
	</a>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
