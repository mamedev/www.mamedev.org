<?php
// error_reporting(E_ALL);

$rootpath = $_SERVER['DOCUMENT_ROOT'] . '/';

$title = 'MAMEDEV.org | Home of The MAME Project';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="_include/img/logo-mame.png" alt="">
    </header>

    <!-- Page Content -->
    <div class="container">

<?php 
if ($post == "") 
{
?>

        <!-- Marketing Icons Section -->
        <div class="row">
            <center><h1 class="page-header">Welcome to The Official Site of the MAME Development Team</h1></center>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-check"></i> What is MAME</h4>
				</div>
				<div class="panel-body">
					<p>MAME originally stood for <b>M</b>ultiple <b>A</b>rcade <b>M</b>achine <b>E</b>mulator.</p>
					<p>MAME's purpose is to preserve decades of software history. As electronic technology continues to rush forward, MAME prevents this important "vintage" software from being lost and forgotten. This is achieved by documenting the hardware and how it functions. The source code to MAME serves as this documentation. The fact that the software is usable serves primarily to validate the accuracy of the documentation (how else can you prove that you have recreated the hardware faithfully?). Over time, MAME absorbed the sister-project MESS (Multi Emulator Super System), so MAME now documents a wide variety of (mostly vintage) computers, video game consoles and calculators, in addition to the arcade video games that were its initial focus.</p>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-check"></i> License</h4>
				</div>
				<div class="panel-body">
				The MAME project as a whole is distributed under the terms of the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License, 2</a> (GPL-2.0), since it contains code made available under multiple GPL-compatible licenses. 
				A great majority of files (over 90% including core files) are under the <a href="http://opensource.org/licenses/BSD-3-Clause">BSD-3-Clause License</a> and we would encourage new contributors to distribute files under this license.
<br/>
Please note that MAME is a registered trademark of Nicola Salmoria, and permission is required to use the "MAME" name, logo or wordmark.
				</div>
			</div>
        </div>
        <!-- /.row -->

        <!-- Supported Plaforms Section -->
        <div class="row">
            <div class="col-lg-12">
                <center><h2 class="page-header">Supported Platforms</h2></center>
            </div>
            <div class="col-md-4 col-sm-6">
                <center><i class="fa fa-windows fa-5x"></i><br/><br/><a href="release.php" class="btn btn-success"><h2>Download</h2></a></center>
            </div>
            <div class="col-md-4 col-sm-6">
				<center><i class="fa fa-apple fa-5x"></i><br/><br/><a href="http://wiki.mamedev.org/index.php/SDL_Supported_Platforms" class="btn btn-success"><h2>Download</h2></a></center>
            </div>
            <div class="col-md-4 col-sm-6">
                <center><i class="fa fa-linux fa-5x"></i><br/><br/><a href="http://wiki.mamedev.org/index.php/SDL_Supported_Platforms" class="btn btn-success"><h2>Download</h2></a></center>
            </div>
        </div>
        <!-- /.row -->
<?php 
}
?>

        <!-- Posts Section -->
        <div class="row">
            <div class="col-lg-12">
                <center><h2 class="page-header">News</h2></center>
            </div>
<?php 
	if (count($entries) == 0)
		echo("<p>No matching items found!</p>");

	for ($index = 0; $index < count($entries); $index++)
	{
		$entry = $entries[$index];
		$data = file($postpath . "/" . $entry);
		$title = trim(strip_tags($data[0]));
		$number = getpostnumber($entry);

		echo("\t\t\t\t\t<div id=\"post-" . $number . "\" class=\"col-md-8\">\n");
		echo("\t\t\t\t\t\t<h2><a title=\"Permanent Link to " . $title . "\" rel=\"bookmark\" href=\"/?p=" . $number . "\">" . $title . "</a></h2>\n");
		echo("\t\t\t\t\t\t<small>" . date("d M Y", getposttimestamp($entry)) . "</small>\n");
		echo("\t\t\t\t\t\t<div class=\"entry\">\n");
		for ($line = 1; $line < count($data); $line++)
			echo("\t\t\t\t\t\t\t" . $data[$line]);
		echo("\t\t\t\t\t\t</div>\n");
		echo("\t\t\t\t\t</div>\n");
	}
?>
		<!-- posts end -->
    </div>
	 
    <!-- navigation bar -->
    <div class="row">
	    <?php
        if ($prevurl != "")
	{
		echo("<div id=\"new-news-nav" . "\" class=\"col-md-2\">\n");
        	echo("\t<center><a title=\"&lt; Newer News" . "\" rel=\"prev\" href=\"/" . $prevurl . "\" class=\"btn btn-success btn-sm\"><h5>" . "&lt; Newer" . "</h5></a></center>\n");
        	echo("</div>\n");
	}
	else
		echo("<div class=\"col-md-2\"></div>\n";
	    ?>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
	    <?php
        echo("<div id=\"old-news-nav" . "\" class=\"col-md-2\">\n");
        echo("\t<center><a title=\"Older News &gt;" . "\" rel=\"next\" href=\"/" . $nexturl . "\" class=\"btn btn-success btn-sm\"><h5>" . "Older &gt;" . "</h5></a></center>\n");
        echo("</div>\n");
	    ?>
    <!-- /.row -->
    <!-- /.container -->
	<br/><br/><br/>
	<br/><br/><br/>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
