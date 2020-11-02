<?php
$title = 'MAME | Robby Roto (Bally/Midway, 1981)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Robby Roto (Bally/Midway, 1981)</h1></center>
						<p>
						Thanks to the kind generosity of Jamie Fenton, the original ROM images for <b>Robby Roto</b>
						have been made available for free, non-commercial use.
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
						<a href="robby.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Robby Roto ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							<label for="agree">I understand that these ROM images are for non-commercial use only</label>
						</form>
						</div>
						</center>



					<h2>Description</h2>
					<p>
					<b>Robby Roto</b> is a game that Bally/Midway originally released on its Astrocade-based hardware
					back in 1981. Other games that ran on this hardware include <b>Gorf</b>, <b>Wizard of Wor</b>,
					and <b>Professor Pac-Man</b>. The author of <b>Robby Roto</b> is <a href="http://www.fentonia.com/bio/" target="blank">
					Jamie Fenton</a>, who acquired the rights to the game after it did not do well in the marketplace.
					</p>

					<p>
					Approximately 2,000 units were produced.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="robb0000.png" width="320" height="240" alt="Bally/Midway Robby Roto Screenshot" />
					<img src="robb0001.png" width="320" height="240" alt="Bally/Midway Robby Roto Screenshot" />
					<img src="robb0002.png" width="320" height="240" alt="Bally/Midway Robby Roto Screenshot" />
					<img src="robb0003.png" width="320" height="240" alt="Bally/Midway Robby Roto Screenshot" />
					<img src="robb0004.png" width="320" height="240" alt="Bally/Midway Robby Roto Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="robby-cabinet.jpg" width="300" height="615" alt="Bally/Midway Robby Roto Cabinet" />
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
