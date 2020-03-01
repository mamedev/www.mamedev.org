<?php
// error_reporting(E_ALL);

$rootpath = $_SERVER['DOCUMENT_ROOT'] . '/';
$releasespath = 'releases/';

function safe_filesize($size)
{
	if ($size >= 1048576)
		return round($size / 1048576) . ' MiB';
	else if ($size >= 1024)
		return round($size / 1024) . ' KiB';
	else if ($size != 0)
		return $size . ' B';
	else
		return '0 B';
}
// And you're ready to go!
$filename = "latest";
$myfile = fopen($filename, "r");
$contents = fread($myfile, filesize($filename));
fclose($myfile);
$response = json_decode($contents);

$tag_name = $response->tag_name;
$version = str_replace("mame0","",$tag_name);
$whatsnew = 'whatsnew_0' . $version . '.txt';
$whatsnew_dc = 0;
$listxml = $tag_name . 'lx.zip';
$listxml_dc = 0;
$source_exe = $tag_name . 's.exe';
$source_exe_dc = 0;
$source_zip = $tag_name . 's.zip';
$source_zip_dc = 0;
$binary_64bit = $tag_name . 'b_64bit.exe';
$binary_64bit_dc = 0;

foreach ($response->assets as $asset) {

	switch ($asset->name) {
		case $whatsnew:
				$whatsnew_size = safe_filesize($asset->size);
				$whatsnew_dc = $asset->download_count;
				break;
		case $listxml:
				$listxml_size = safe_filesize($asset->size);
				$listxml_dc = $asset->download_count;
				break;
		case $source_exe:
				$source_exe_size = safe_filesize($asset->size);
				$source_exe_dc = $asset->download_count;
				break;
		case $binary_64bit:
				$binary_64bit_size = safe_filesize($asset->size);
				$binary_64bit_dc = $asset->download_count;
				break;
	}
}

function release_mirror_file($filename)
{
	global $version;
	if (true)
		echo '<a href="https://github.com/mamedev/mame/releases/download/mame0' . htmlspecialchars($version) . '/' . htmlspecialchars($filename) . '">' . htmlspecialchars($filename) . '</a>';
	else
		echo '<a href="https://sourceforge.net/projects/mame/files/mame/0.' . htmlspecialchars($version) . '/' . htmlspecialchars($filename) . '">' . htmlspecialchars($filename) . '</a>';
}

$title = 'MAME | Latest MAME Release';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

		<h1 class="page-header" style="text-align: center;">Latest MAME Release</h1>

		<p>
		Latest official MAME release at <a href="https://github.com/mamedev/mame/releases/<?php  echo 'mame0' . $version ?>/"
		target="_blank">GitHub</a> or <a href="https://sourceforge.net/projects/mame/files/<?php  echo 'mame/0.' . $version ?>/"
		target="_blank">SourceForge</a>
		</p>

		<h2>Official Windows Binary Packages</h2>

		<p>
		The table below provides links to the official Windows command-line binaries. Larger files are hosted on external
		mirrors, selected at random, which may require a temporary redirect to the mirror site in order to
		download the file.
		</p>
		<p><b>Statistics are updated each 5 minutes</b></p>

		<div class="panel panel-primary">
		  <div class="panel-heading">MAME 0.<?php echo $version ?> Official Binaries</div>
		  <table class="table">
			<tr>
				<th width="23%">File</th>
				<th width="12%">Size</th>
				<th width="53%">Description</th>
				<th width="12%">Downloads</th>
			</tr>
			<tr>
				<td class="link"><?php release_mirror_file($binary_64bit); ?></td>
				<td class="number"><?php echo $binary_64bit_size ?></td>
				<td>MAME 0.<?php echo $version ?> 64-bit Windows command-line binaries.</td>
				<td align="right"><span class="badge"><?php echo $binary_64bit_dc ?></span></td>
			</tr>
			<tr>
				<td class="link"><?php release_mirror_file($listxml); ?></td>
				<td class="number"><?php echo $listxml_size ?></td>
				<td>MAME 0.<?php echo $version ?> full driver information in XML format.</td>
				<td align="right"><span class="badge"><?php echo $listxml_dc ?></span></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<br/>

		<hr/>

		<h2>Official Source Code Packages</h2>

		<p>
		The latest official MAME release is version 0.<?php echo $version ?>. The table below provides links to the source code.
		</p>

		<p>
		We recommend cloning source code from our <a href="https://github.com/mamedev/mame/" target="_blank">official
		git repository on GitHub</a>.  You can also clone tagged releases from our mirrors at <a
		href="https://gitlab.com/mamedev/mame" target="_blank">GitLab</a> and <a href="https://sourceforge.net/p/mame/code/"
		target="_blank">SourceForge</a>.  You can clone the MAME 0.<?php echo $version ?> source code without
		fetching the entire revision history with this command:<br/>
		<tt>git clone -b mame0<?php echo $version ?> --depth 1 https://github.com/mamedev/mame.git mame0<?php echo $version ?></tt>
		</p>

		<p>
		The table below provides links to packaged source archives. Larger files are hosted on external
		mirrors, selected at random, which may require a temporary redirect to the mirror site in order to
		download the file.
		</p>

		<div class="panel panel-primary">
		  <div class="panel-heading">MAME 0.<?php echo $version ?> Source Code</div>
		  <table class="table">
			<tr>
				<th width="23%">File</th>
				<th width="12%">Size</th>
				<th width="53%">Description</th>
				<th width="12%">Downloads</th>
			</tr>

			<tr>
				<td class="link">
				<a href="<?php echo $releasespath . $whatsnew ?>">
				<?php echo $whatsnew ?>
				</a></td>
				<td class="number"><?php echo $whatsnew_size ?></td>
				<td>List of what is new in this MAME release</td>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td class="link"><?php release_mirror_file($source_exe); ?></td>
				<td class="number"><?php echo $source_exe_size ?></td>
				<td>MAME 0.<?php echo $version ?> sources in self-extracting 7-Zip format (self-extracting on Windows, can be extracted with P7ZIP on other operating systems)</td>
				<td align="right"><span class="badge"><?php echo $source_exe_dc ?></span></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<br/>

		<p>
		If you are running Windows, and/or have <a href="http://www.7-zip.org/" target="_blank">7-Zip</a> or
		<a href="http://p7zip.sourceforge.net/" target="_blank">P7ZIP</a> installed, you can download the
		self-extracting 7-Zip self-extracting archive.
		</p>

		<!-- content end -->
    </div>
    <!-- /.container -->
	<br/><br/><br/>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
