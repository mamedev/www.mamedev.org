<?php
$title = 'MAME | Targ (Exidy, 1980)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Targ (Exidy, 1980)</h1>

	<p>
	Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
	holding company Xidy, Inc., the original ROM images for <b>Targ</b> have been made
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
			<h4><a href="targ.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Targ ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p><b>Targ</b> is a one or two player shooter game released by Exidy in 1980.
	Your town is invaded by Targ riders, you must maneuver the heroic vehicle Whummel
	to destroy them. From time to time, a Spectar comes into screen, and can be
	destroyed for extra bonus.</p>

	<p>Action takes place into a 9×9 grid, “Crystal City”, where the player’s vehicle
	must avoid and chase down 10 enemy wedge-shaped vehicles. When all enemies are destroyed,
	you are awarded an extra bonus and can access the following level.
	Two players can alternate in the game. You use a 4 way joystick to control the Whummel,
	and a pushbutton to fire at enemies. Progressing in the game causes the Targs to become
	faster and smarter, for fast and furious gameplay.</p>

	<p>A small trivia on the game and characters name: apparently, Targ stands for Target, Spectar
	stands for Special Target.</p>

	<p>While in that period many western companies licensed games from Japanese developers
	(Exidy itself licensed Nintendo’s Sheriff as Bandido), Targ is one of the few western games
	that made it in the opposite way, being licensed by Sega for Japanese distribution.</p>

	<p>This game had a sequel, <a href="../spectar">Spectar</a>, released in 1980.</p>

	<div>
		<h2>Screenshots</h2>
		<img src="0000.png" width="320" height="240" alt="Exidy Targ Screenshot" />
		<img src="0002.png" width="320" height="240" alt="Exidy Targ Screenshot" />
		<img src="0001.png" width="320" height="240" alt="Exidy Targ Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="targ-cabinet.png" width="222" height="320" alt="Exidy Targ cabinet" />
	<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=1815">
		<img src="targ-flyer.png" width="222" height="287" alt="Exidy Targ flyer" />
	</a>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
