<?php
$title = 'MAME | Rip Cord (Exidy, 1979)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Rip Cord (Exidy, 1979)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
						holding company Xidy, Inc., the original ROM images for <b>Rip Cord</b> have been made
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
						<a href="ripcord.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Rip Cord ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							<label for="agree">I understand that these ROM images are for non-commercial use only</label>
						</form>
						</div>
						</center>

					<h2>Description</h2>

					<p>
					<b>Rip Cord</b> was another black &amp; white game released by Exidy in 1979. It was designed
					and programmed by Arlan Granger. The goal of the game is to jump out of the plane and land safely
					on one of the many targets down below. The challenge is to avoid the numerous enemy helicopters
					that occupy the sky in between your plane and the ground.
					</p>

					<p>
					You control the timing of your jump with the Jump button, at which point your parachutist begins
					hurtling toward the ground out of control. Pressing the D-Ring button shortly afterwards releases
					the chute and slows your descent. More importantly, it allows you at this point to control your
					left/right position via the paddle control to help you avoid the enemies.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="0001.png" width="320" height="240" alt="Exidy Rip Cord Screenshot" />
					<img src="0002.png" width="320" height="240" alt="Exidy Rip Cord Screenshot" />
					<img src="0006.png" width="320" height="240" alt="Exidy Rip Cord Screenshot" />
					<img src="0012.png" width="320" height="240" alt="Exidy Rip Cord Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="ripcord-cabinet.jpg" width="300" height="577" alt="Exidy Rip Cord Cabinet" />
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
