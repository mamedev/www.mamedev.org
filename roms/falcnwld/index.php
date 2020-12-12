<?php
$title = 'MAME | Falcons Wild - World Wide Poker (Video Klein, 1990)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Falcons Wild - World Wide Poker (Video Klein, 1990)</h1>

	<p>
	Thanks to the kind generosity of Wolfgang Nottebaum, Managing Director of Video Klein
	Automatenbau GmbH, the original ROM images for <b>Facons Wild - World Wide Poker</b> have been
	made available for free, non-commercial use.
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
			<h4><a href="falcnwlda.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Falcons Wild - World Wide Poker (set 1) ROM images</a></h4>
			<h4><a href="falcnwldb.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Falcons Wild - World Wide Poker (set 2) ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p>
	<b>Falcons Wild - World Wide Poker</b> is a “jokers wild” style video draw poker game.  The
	joker cards have falcon-themed graphics.
	</p>

	<div>
		<h2>Screenshots</h2>
		<img src="0000.png" width="320" height="240" alt="Video Klein Falcons Wild Screenshot" />
		<img src="0001.png" width="320" height="240" alt="Video Klein Falcons Wild Screenshot" />
		<img src="0002.png" width="320" height="240" alt="Video Klein Falcons Wild Screenshot" />
		<img src="0003.png" width="320" height="240" alt="Video Klein Falcons Wild Screenshot" />
	</div>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
