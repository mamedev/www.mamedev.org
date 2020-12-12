<?php
$title = 'MAME | Witch Strike (Video Klein, 1992)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Witch Strike (Video Klein, 1992)</h1>

	<p>
	Thanks to the kind generosity of Wolfgang Nottebaum, Managing Director of Video Klein
	Automatenbau GmbH, the original ROM images for <b>Witch Strike</b> have been made available for
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
			<h4><a href="wstrike.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Witch Strike (Export, 6T/12T ver 1.01A) ROM images</a></h4>
			<h4><a href="wstrikea.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Witch Strike (Export, 6T/12T ver 1.01B) ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<p>
	The first time this game is run, it will display an error message (ACHTUNG FEHLER IM BLOCK).  Press
	the hold 1 button (HALTEN1, Z key by default or click the button on the screen) to select BLOCK NEU
	INSTALLIEREN.  Insert coins or notes (5 or 6 key by default), and exit MAME, allowing the contents
	of non-volatile RAM to be saved.  The next time you start the game, it will display a power
	power failure error message (STROMAUSFALL O. NETZTEIL DEFEKT) for a few seconds, then start normally.
	</p>

	<h2>Description</h2>

	<p>
	<b>Witch Strike</b> is a “jokers wild” style video draw poker game with a high/low double-or-nothing
	bonus game and witch-themed graphics.  This is an example of a game that avoids using playing card
	graphics and gambling terminology to comply with overly specific laws banning video poker games.
	Cards are replaced with numbered bowling pins, and the on-screen credits, bet and winnings display
	has no descriptive text.
	</p>

	<div>
		<h2>Screenshots</h2>
		<img src="0000.png" width="320" height="240" alt="Video Klein Witch Strike Screenshot" />
		<img src="0001.png" width="320" height="240" alt="Video Klein Witch Strike Screenshot" />
		<img src="0002.png" width="320" height="240" alt="Video Klein Witch Strike Screenshot" />
		<img src="0003.png" width="320" height="240" alt="Video Klein Witch Strike Screenshot" />
	</div>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
