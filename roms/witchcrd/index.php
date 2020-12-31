<?php
$title = 'MAME | Witch Card (Video Klein, 1991)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Witch Card (Video Klein, 1991)</h1>

	<p>
	Thanks to the kind generosity of Wolfgang Nottebaum, managing director of Video Klein
	Automatenbau GmbH, the original ROM images for <b>Witch Card</b> have been made available for
	free, non-commercial use.
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
			<h4><a href="witchcrde.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Witch Card ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<p>
	Coins (5 key by default) may not be accepted the first time you run the game.  Use notes (6 key by
	default) to play a game, and exit MAME, allowing the contents of non-volatile RAM to be saved.  Coins
	will be accepted the next time you run the game.
	</p>

	<h2>Description</h2>

	<p>
	<b>Witch Card</b> is a video draw poker game with a high/low double-or-nothing bonus game and
	witch-themed graphics.
	</p>

	<div>
		<h2>Screenshots</h2>
		<img src="0000.png" width="320" height="240" alt="Video Klein Witch Card Screenshot" />
		<img src="0001.png" width="320" height="240" alt="Video Klein Witch Card Screenshot" />
		<img src="0002.png" width="320" height="240" alt="Video Klein Witch Card Screenshot" />
		<img src="0003.png" width="320" height="240" alt="Video Klein Witch Card Screenshot" />
	</div>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
