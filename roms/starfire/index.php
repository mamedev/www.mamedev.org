<?php
$title = 'MAME | Star Fire (Exidy, 1979)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Star Fire (Exidy, 1979)</h1>

	<p>
	Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
	holding company Xidy, Inc., the original ROM images for <b>Star Fire</b> have been made
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
			<h4><a href="starfire.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Star Fire (set 1) ROM images</a></h4>
			<h4><a href="starfirea.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Star Fire (set 2) ROM images</a></h4>
			<h4><a href="starfir2.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Star Fire 2 ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p>
	Star Fire is an early color game programmed by David Rolfe with graphics designed by Ted Michon and Susan Ogg.
	It was released by Exidy in 1979. Star Fire is a first-person space shooter where your mission is to seek out
	and destroy enemy spacecraft while avoiding incoming missiles.
	</p>

	<p>
	If a number of elements of Star Fire seem similar to Star Wars, your eyes are not deceiving you. Star Fire was
	originally designed as a Star Wars game, with the eventual hope that either a license would be purchased or
	that they would change enough of the elements to avoid any legal entanglements. Originally, the authors had
	hoped that Midway would pick up the game for distribution, but they passed and instead Exidy purchased the
	game and released it.
	</p>

	<p>
	Star Fire was the first game to come in an environmental cabinet, designed by Michael Cooper-Hart. Even more
	importantly from a historical perspective, Star Fire was the first game to keep a high score list where the
	player could enter his or her initials. Prior games had tracked the concept of a high score, but Star Fire
	was the first to let you personalize the high score entry and display a top ten list with your initials next
	to your high score.
	</p>

	<p>
	An update to Star Fire, simply called “Star Fire II”, was intended to go into the last run of Star Fire
	units. It features a more refined high score display and easier high score input.
	</p>

	<div>
		<h2>Screenshots</h2>
			<img src="0002.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0003.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0004.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0009.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0012.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0013.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0015.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0021.png" width="320" height="240" alt="Exidy Star Fire Screenshot" />
			<img src="0000.png" width="320" height="240" alt="Exidy Star Fire II Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="starfire-cabinet.jpg" width="300" height="394" alt="Exidy Star Fire Cabinet" />

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
