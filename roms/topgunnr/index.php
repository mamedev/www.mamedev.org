<?php
$title = 'MAME | Top Gunner / Vertigo (Exidy, 1986)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Top Gunner / Vertigo (Exidy, 1986)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kaufmann, president of Xidy, the original ROM images for 
						<b>Top Gunner</b> have been made available for free, non-commercial use.
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
						<a href="topgunnr.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Top Gunner ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							I understand that these ROM images are for non-commercial use only
						</form>
						</a>
						</center>

					<h2>Description</h2>

					<p>
					<b>Top Gunner</b>, released in 1986, is said to be the last vector graphic
					game produced for the arcades.  Designed to run on Fifty 50&rsquo;s XCD-1
					Simulator System(TM) hardware, <b>Top Gunner</b> was played sitting down in a
					full cockpit-style motion cabinet.  The motion of the player&rsquo;s seat
					followed the action of the flight simulator-style gameplay, providing
					the player a unique, immersive arcade experience.  The player
					interacted with the machine via a dual-axis flight yoke, a throttle
					lever, and the standard coin slot, start, and fire buttons.
					</p>

					<p>
					Vic Tolomei was the primary software developer for <b>Vertigo</b> and <b>Top
					Gunner</b>, Howell Ivy was responsible for the hardware, and Pete Kaufmann
					and Ken Nicholson designed the graphics and audio respectively.
					</p>

					<p>
					The game <b>Vertigo</b>, produced roughly two years before <b>Top Gunner</b>,
					is thought to be its prototype.  <b>Vertigo</b> was shopped around but never
					picked up due to poor location test results and excessive hardware costs.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="topgunnr0000.png" width="640" height="480" alt="Exidy Top Gunner Screenshot" />
					<img src="topgunnr0001.png" width="640" height="480" alt="Exidy Top Gunner Screenshot" />
					<img src="topgunnr0002.png" width="640" height="480" alt="Exidy Top Gunner Screenshot" />
					<img src="topgunnr0003.png" width="640" height="480" alt="Exidy Top Gunner Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="vertigo-cabinet.jpg" width="400" height="245" alt="Exidy Vertigo Cabinet" />
					<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=2108">
					  <img src="vertigo-flyer.png" width="222" height="287" alt="Exidy Vertigo Flyer" />
					</a>
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
