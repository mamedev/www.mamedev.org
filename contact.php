<?php
$title = 'MAME | Contact the Team';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

	<!-- Page Content -->
	<div class="container">

		<h1 class="page-header"><center>Contacting the MAME Team</center></h1>
		
				<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				function checkForm(form)
				{
					var curvalue = "";
					for (var i = 0; i < form.radiobut.length; i++)
						if (form.radiobut[i].checked) curvalue = form.radiobut[i].value;

					if (curvalue == "faq") form.action = "https://wiki.mamedev.org/index.php?title=Frequently_Asked_Questions";
					else if (curvalue == "roms") form.action = "/links.php#link";
					else if (curvalue == "bug") form.action = "https://mametesters.org";
					else if (curvalue == "legal") form.action = "/contact2.php?=legal";
					else if (curvalue == "submit") form.action = "https://wiki.mamedev.org/index.php?title=Submitting_Source_Code";
					else if (curvalue == "none") form.action = "/contact2.php?=team";
					else
					{
						alert("Please select one of the options below and press the Next button. (" + curvalue + ")");
						return false;
					}
					return true;
				}
				//]]>
				</script>

					<p>
					What do you wish to contact us regarding?
					</p>

					<form onsubmit="return checkForm(this)" name="email" method="post" action="#">
						<p>
						<input type="radio" name="radiobut" value="faq">
						I can't figure out how to use the software!
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="roms">
						Where can I get ROMs to run in MAME?
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="bug">
						I think I found a bug in MAME and I'd like to report it.
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="legal">
						I have a legal question or wish to report abuse of MAME.
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="submit">
						I have a new ROM dump that I would like to submit.
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="submit">
						I've made some changes to the source code and would like to submit them.
						</input>
						</p>

						<p>
						<input type="radio" name="radiobut" value="none">
						None of the above.
						</input>
						</p>

						<input type="submit" name="submit" value="&nbsp;Next &gt;&nbsp;" class="btn btn-primary"/>
					</form>
		<br/><br/>
	</div>
	<!-- /.container -->

	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
