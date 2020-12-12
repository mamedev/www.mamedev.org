<?php
$title = 'MAME | Spectar (Exidy, 1980)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Spectar (Exidy, 1980)</h1>

	<p>
	Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
	holding company Xidy, Inc., the original ROM images for <b>Spectar</b> have been made
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
			<h4><a href="spectar.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Spectar ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p><b>Spectar</b>, released by Exidy in 1980, is the follow-up to <a href="../targ/">Targ</a>.
	Gameplay is apparently unchanged, you control a vehicle called Whummel into a 9×9 grid maze,
	chasing down, and being chased by, the alien invaders. Targs have evolved into the more dangerous
	Rammers, and Spectars appears more often, shooting at player's ship.</p>

	<p>You use a 4 way joystick to guide your vehicle in the maze, and a pushbutton to shoot at
	enemies. Up to two players can alternate in gameplay.</p>

	<p>The most noticeable difference from his predecessor is that to complete a level you must now
	collect all the gems in the maze, in a Pacman-like game. Rammers and Spectars continue to appear
	from flashing pods, so you cannot rest and plan your course easily, or you will be overwhelmed by
	the alien force.</p>

	<p>Graphics are highly improved compared to the predecessor: the maze now has barricades that must
	be avoided or can be used as a shielding against the enemies, and has ten environment settings,
	changing from the “square-block town” of Targ to a city, a forest, a lunar landscape and many more.
	The enemies too are smarter and faster, and the fact that they go on spawning from the pods makes the game
	an even more frenetic challenge.</p>

	<div>
		<h2>Screenshots</h2>
		<img src="0000.png" width="320" height="240" alt="Exidy Spectar Screenshot" />
		<img src="0001.png" width="320" height="240" alt="Exidy Spectar Screenshot" />
		<img src="0002.png" width="320" height="240" alt="Exidy Spectar Screenshot" />
		<img src="0004.png" width="320" height="240" alt="Exidy Spectar Screenshot" />
		<img src="0003.png" width="320" height="240" alt="Exidy Spectar Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="spectar-cabinet.png" width="222" height="320" alt="Exidy Spectar cabinet" />
	<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=2104">
		<img src="spectar-flyer.png" width="222" height="298" alt="Exidy Spectar flyer" />
	</a>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
