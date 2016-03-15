<?php
$title = 'MAME | Gridlee (Videa, 1982)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Gridlee (Videa, 1982)</h1></center>
						<p>
						Thanks to the kind generosity of the three co-founders of Videa&mdash;Howard Delman, Ed
						Rotberg, and Roger Hector&mdash;the original ROM images from the only existing <b>Gridlee</b> 
						machine have been made available for free, non-commercial use.
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
						<a href="gridlee.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Gridlee ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							I understand that these ROM images are for non-commercial use only
						</form>
						</a>
						</center>

					<h2>Description</h2>

					<p>
					<b>Gridlee</b> is a game that was never released. It was developed by Videa, Inc. in 1982, on
					hardware designed by <a href="http://www.blueneptune.com/~delman/" target="_blank">Howard Delman</a>.
					Videa was eventually acquired by Pizza Time Theater and formed the core of their new
					Sente Technologies division. The hardware that  <b>Gridlee</b> ran on evolved into the 
					Bally/Sente SAC I system, which provided a cartridge-based arcade gaming platform that
					supported such games as <b>Snake Pit</b>, <b>Stocker</b>, and <b>Hat Trick</b>.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="gridlee1.png" width="320" height="240" alt="Videa Gridlee Screenshot" />
					<img src="gridlee2.png" width="320" height="240" alt="Videa Gridlee Screenshot" />
					<img src="gridlee3.png" width="320" height="240" alt="Videa Gridlee Screenshot" />
					<img src="gridlee4.png" width="320" height="240" alt="Videa Gridlee Screenshot" />
					<img src="gridlee5.png" width="320" height="240" alt="Videa Gridlee Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="gridlee-cabinet.jpg" width="300" height="422" alt="Videa Gridlee Cabinet" />
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>