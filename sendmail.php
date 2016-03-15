<?php require($_SERVER['DOCUMENT_ROOT'] . '/email-validator.php'); ?>

<?php

	$recipient = $_POST['recipient'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$text = trim($_POST['comment']);
	$text .= "\r\n--\r\nSubmitted via form from mamedev.org";

	$targets = array(
		'legal' => 'legal@mamedev.org',
		'team' => 'mamedev@mamedev.org',
		'webmaster' => 'webmaster@mamedev.org'
	);

	$message = "";
	if (array_key_exists($recipient, $targets))
	{
		$validator = new EmailAddressValidator;
		if ($validator->check_email_address($email))
			mail($targets[$recipient], $subject, $text, "From: " . $email) or die ("Error mailing");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	
	<META HTTP-EQUIV="Refresh" CONTENT="1; URL=sent.html">

	<title>MAME | Sending mail</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link rel="stylesheet" href="/_include/css/core.css" type="text/css" media="screen" /> 
	<!--[if IE 6]><link rel="stylesheet" href="/_include/css/ie6.css"" type="text/css" media="screen" /><![endif]-->
	
	<link href="/_include/img/favicon.ico" rel="shortcut icon"/>
	
</head>

<body>
	
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.txt'); ?>
    
    <!-- main start -->
    <div id="main">
        <div class="clearfix width913">
             
			<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/sidebar.txt'); ?>
            
            <!-- content start -->         
            <div id="content">

				<h1>Sending Email</h1>

				<div class="rowlast">
					<p>
					Sending your mail. If nothing happens, please click <a href="sent.html">HERE</a>
					</p>
				</div>

            </div>
            <!-- content end --> 
		
		<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.txt'); ?>
    
    </div>    
    </div>
    <!-- main end -->

</body>

</html>
