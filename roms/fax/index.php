<?php
$title = 'MAME | FAX (Exidy, 1983)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">FAX (Exidy, 1983)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kaufmann, president of Xidy, the original ROM images for
						<b>FAX</b> have been made available for free, non-commercial use.
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
						<a href="fax.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the FAX ROM images</h4></a>
						<a href="fax2.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the FAX 2 ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							<label for="agree">I understand that these ROM images are for non-commercial use only</label>
						</form>
						</div>
						</center>

					<h2>Description</h2>

					<p>
					<b>FAX</b> is a trivia game which asks questions about a number of topics, including:
					General Knowledge, Sports, History and Entertainment.  This was released by Exidy in 1983 and
					written by Vic Tolomei and Larry Hutcherson hopeful to play on the Trivial Pursuit craze as
					it was released over a year earlier than the registered Trivial Pursuit versions (produced by Bally/Sente).
					</p>

					<p>
					The game came in what was essentially a jukebox cabinet (complete with a woodgrain finish), which lent
					itself to possible markets outside of the typical arcade setting.  It had a 9-inch monitor mounted in
					the center, logo on the bezel itself and a row of buttons on each side of the screen to accommodate
					two player simultaneous play.  FAX used unique compression to hold nearly 3700 questions in as small
					of storage as possible.  Exidy also sold several EPROM replacement kits that provided new questions
					but they are nearly impossible to find today.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="fax0000.png" width="320" height="240" alt="Exidy FAX Screenshot" />
					<img src="fax0001.png" width="320" height="240" alt="Exidy FAX Screenshot" />
					<img src="fax0002.png" width="320" height="240" alt="Exidy FAX Screenshot" />
					<img src="fax0003.png" width="320" height="240" alt="Exidy FAX Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="fax-cabinet.jpg" width="400" height="417" alt="Exidy FAX Cabinet" />
					<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=1824">
					  <img src="fax-flyer.png" width="222" height="287" alt="Exidy FAX Flyer" />
					</a>
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
