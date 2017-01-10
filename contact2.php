<?php
$title = 'MAME | Contact the Team';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

		<center><h1 class="page-header">Contacting the MAME Team</h1></center>
		
				<p>
					If you need to contact the MAME development team for any reason, please fill out the form below. Make
					sure you select the appropriate person or group to send it to.
					</p>
				
					<p>
					If you think you have found a bug in MAME, or are having trouble using the software, go back to the
					<a href="http://mamedev.org/contact.html">main contact page</a> and select the appropriate option.
					Email sent to this address regarding bugs or user support will be ignored completely.
					</p>

				<script language="JavaScript" type="text/javascript">
				//<![CDATA[
				function setupMenu(form)
				{
					var defSelection = location.href.split("?")[1];
					if (defSelection != null)
					{
						var i;
						for (i = 0; i < form.recipient.length; i++)
							if (form.recipient.options[i].value == defSelection)
								form.recipient.selectedIndex = i;
					}
				}

				function checkForm(form)
				{
					if (form.recipient.value == "dummy" || form.recipient.value == "-")
					{
						alert("Please select a recipient from the popup list.");
						return false;
					}
					if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value)))
					{
						alert("Please enter a valid email address.")
						return false;
					}
					form.action="sendmail.php";
					return true;
				}
				//]]>
				</script>

					<form onsubmit="return checkForm(this)" name="email" method="post" action="#">
							<input type="hidden" name="success" value="sent.html" />

							<div class="input-group">	
								<span class="input-group-addon">Send To:</span>
								<select name="recipient" class="form-control">
									<option selected="selected" value="dummy">Select a recipient...</option>
									<option value="-">---</option>
									<option value="webmaster">MAMEDev.org Webmaster</option>
									<option value="legal">MAME License/Trademark Questions</option>
									<option value="-">---</option>
									<option value="team">MAME Team (general)</option>
								</select>
							</div>
							<br/>
							<div class="input-group">	
								<span class="input-group-addon">From:</span>
								<input type="text" size="50" name="email" class="form-control" />
							</div>
							<br/>
							<div class="input-group">	
								<span class="input-group-addon">Subject:</span>
								<input type="text" size="50" name="subject" class="form-control"/>
							</div>
							<br/>
							<div class="input-group">	
								<span class="input-group-addon">Message:</span>
								<textarea name="comment" cols="75" rows="10"class="form-control"></textarea>
							</div>
							<br/>
							<div class="input-group">	
								<input type="submit" name="submit" value="Send" class="btn btn-success"/>
								<input type="reset" name="reset" value="Reset" class="btn btn-warning"/>
							</div>
					</form>
		
	</div>
    <!-- /.container -->
	<br/><br/><br/>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
