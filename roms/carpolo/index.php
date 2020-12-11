<?php
$title = 'MAME | Car Polo (Exidy, 1977)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Car Polo (Exidy, 1977)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
						holding company Xidy, Inc., the original ROM images for <b>Car Polo</b> have been made
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
						<a href="carpolo.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Car Polo ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							<label for="agree">I understand that these ROM images are for non-commercial use only</label>
						</form>
						</div>
						</center>



					<h2>Description</h2>

					<p>
					<b>Car Polo</b> is an up-to-four player full color video game that combines the skills of driving with
					the intense player interaction of team sports. The object is to score by bumping or pushing the ball with
					a car into your team's goal. Teamwork revolves around passing and blocking strategy. Play becomes fast
					and furious, and excitement is enhanced by car motor noises, crash sounds, controlled grass skids and
					bouncing ball motions.
					</p>

					<p>
					Car Polo was designed and programmed by Howell Ivey for Exidy, and is one of the first games to use the
					combination of a microprocessor for running the game logic plus a color display.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="0014.png" width="320" height="240" alt="Exidy Car Polo Screenshot" />
					<img src="0003.png" width="320" height="240" alt="Exidy Car Polo Screenshot" />
					<img src="0004.png" width="320" height="240" alt="Exidy Car Polo Screenshot" />
					<img src="0007.png" width="320" height="240" alt="Exidy Car Polo Screenshot" />
					<img src="0008.png" width="320" height="240" alt="Exidy Car Polo Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="carpolo-cabinet.jpg" width="300" height="446" alt="Exidy Car Polo cabinet" />
                    <a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=1808">
					  <img src="carpolo-flyer.png" width="222" height="287" alt="Exidy Car Polo flyer" />
                    </a>
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
