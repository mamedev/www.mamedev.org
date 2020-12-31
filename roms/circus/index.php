<?php
$title = 'MAME | Circus (Exidy, 1977)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<h1 class="page-header" style="text-align: center">Circus (Exidy, 1977)</h1>

	<p>
	Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
	holding company Xidy, Inc., the original ROM images for <b>Circus</b> have been made
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
			<h4><a href="circus.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Circus ROM images</a></h4>
			<h4><a href="circuso.zip" onclick="return isChecked();" title="Download now" class="btn-success">Download the Circus (older) ROM images</a></h4>
			<form name="agreeform" action="#">
				<input type="checkbox" name="agree" />
				<label for="agree">I understand that these ROM images are for non-commercial use only</label>
			</form>
		</div>
	</center>

	<h2>Description</h2>

	<p>
	<b>Circus</b> was one of the first games produced by Exidy that used a CPU (6502) to control the game
	logic instead of hand-crafted hard-coded logic circuits. It ran on a black and white monitor
	with a color overlay that gave each row of balloons at the top of the screen a different color.
	It was designed and programmed by Edward Valeau and Howell Ivey of Exidy in 1977.
	</p>

	<p>
	Circus came in an upright dedicated cabinet, and may have also been available in a cocktail
	configuration. Circus machines had white sides with red-painted side art of several balloons
	in flight. The front of the machine was decorated with a large, ornate monitor bezel that
	doubled as a marquee (or nameplate). This bezel showed several clowns in a circus scene and
	had the game title spelled out with multi-colored balloons. The control panel was unadorned,
	save for an analog spinner and a start button. The whole machine was finished off in black
	T-molding.
	</p>

	<p>
	At least 13,000 units, possibly as many as 20,000, were produced.
	</p>

	<table width="100%">
		<tr><th colspan="2">Circus Scoring</th></tr>
		<tr><td align="left">Successful jump</td><td>10 points</td></tr>
		<tr><td align="left">Popping Yellow Balloon</td><td>20 points</td></tr>
		<tr><td align="left">Popping Green Balloon</td><td>50 points</td></tr>
		<tr><td align="left">Popping Blue Balloon</td><td>100 points</td></tr>
		<tr><td align="left">Bonus for Clearing Yellow Row</td><td>200 points</td></tr>
		<tr><td align="left">Bonus for Clearing Green Row</td><td>500 points</td></tr>
		<tr><td align="left">Bonus for Clearing Blue Row</td><td>1,000 points plus free jump</td></tr>
	</table>

	<div>
		<h2>Screenshots</h2>
		<img src="0000.png" width="320" height="240" alt="Exidy Circus Screenshot" />
		<img src="0001.png" width="320" height="240" alt="Exidy Circus Screenshot" />
		<img src="0002.png" width="320" height="240" alt="Exidy Circus Screenshot" />
		<img src="0004.png" width="320" height="240" alt="Exidy Circus Screenshot" />
	</div>

	<h2>Additional Images</h2>
	<img src="circus-cabinet.jpg" width="300" height="547" alt="Exidy Circus cabinet" />
	<a href="http://www.arcadeflyers.com/?page=thumbs&db=videodb&id=1809">
		<img src="circus-flyer.png" width="231" height="298" alt="Exidy Circus flyer" />
	</a>

	<br/>
	<br/>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
