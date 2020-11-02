<?php
$title = 'MAME | Teeter Torture (Exidy, 1982)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Teeter Torture (Exidy, 1982)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kaufmann, president of Xidy, the original ROM images for
						<b>Teeter Torture</b> have been made available for free, non-commercial use.
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
						<a href="teetert.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Teeter Torture ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							<label for="agree">I understand that these ROM images are for non-commercial use only</label>
						</form>
						</div>
						</center>
					<h2>Description</h2>

					<p>
					<b>Teeter Torture</b> is a game that has rather mysterious origins. Only a single cabinet has even
					been found for it. (Fortunately it has been making regular appearances at the
					<a href="http://www.caextreme.org" target="blank">California Extreme</a> show for a number of years.)
					For years there was even confusion as to whether it was an Exidy-produced prototype or some bootleg
					running on the Exidy hardware.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="0001.png" width="320" height="240" alt="Exidy Teeter Torture Screenshot" />
					<img src="0005.png" width="320" height="240" alt="Exidy Teeter Torture Screenshot" />
					<img src="0008.png" width="320" height="240" alt="Exidy Teeter Torture Screenshot" />
					<img src="0011.png" width="320" height="240" alt="Exidy Teeter Torture Screenshot" />
					<img src="0015.png" width="320" height="240" alt="Exidy Teeter Torture Screenshot" />
					<img src="0017.png" width="320" height="240" alt="Exidy Teeter Torture Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="teetertorture-cabinet.jpg" width="300" height="450" alt="Exidy Teeter Torture cabinet" />
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
