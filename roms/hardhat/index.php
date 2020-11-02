<?php
$title = 'MAME | Hard Hat (Exidy, 1982)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Hard Hat (Exidy, 1982)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kaufmann, president of Xidy, the original ROM images for
						<b>Hard Hat</b> have been made available for free, non-commercial use.
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
						<a href="hardhat.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Hard Hat ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							<label for="agree">I understand that these ROM images are for non-commercial use only</label>
						</form>
						</div>
						</center>

					<h2>Description</h2>

					<b>Hard Hat</b> is a unique logic game with an educational puzzle to solve.  It
					was designed and programmed for Exidy by Larry W. Hutcherson Sr. and released in 1982.
					Touted as the &ldquo;First Educational Coin-Op Game&rdquo;, you play a busy carpenter
					that is constantly being chased by hammers and whirlwinds throughout a grid of
					scaffolding while manipulating letters to spell &ldquo;E-X-I-D-Y&rdquo; or
					&ldquo;H-A-R-D-H-A-T&rdquo;.  Controls consist of a simple 4-direction joystick,
					both players alternating use during a two player game.
					</p>

					<p>
					The hardware is identical to another Exidy game, <b>Pepper II</b>.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="hardhat0000.png" width="320" height="240" alt="Exidy Hard Hat Screenshot" />
					<img src="hardhat0001.png" width="320" height="240" alt="Exidy Hard Hat Screenshot" />
					<img src="hardhat0002.png" width="320" height="240" alt="Exidy Hard Hat Screenshot" />
					<img src="hardhat0003.png" width="320" height="240" alt="Exidy Hard Hat Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="hardhat-cabinet.jpg" width="300" height="432" alt="Exidy Hard Hat Cabinet" />
					<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=2440">
					  <img src="hardhat-flyer.png" width="222" height="291" alt="Exidy Hard Hat Flyer" />
					</a>
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
