<?php
// error_reporting(E_ALL);

$rootpath = $_SERVER['DOCUMENT_ROOT'] . '/';
$releasespath = 'releases/';

function safe_filesize($size)
{
	if ($size!=0)
		return round($size / 1024);
	else
		return 0;
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
$source_exe = $tag_name . 's.exe';
$source_exe_dc = 0;
$source_zip = $tag_name . 's.zip';
$source_zip_dc = 0;
$binary = $tag_name . 'b.exe';
$binary_dc = 0;
$binary_64bit = $tag_name . 'b_64bit.exe';
$binary_64bit_dc = 0;
$binary_debug = $tag_name . 'b_debug.exe';
$binary_debug_dc = 0;

foreach ($response->assets as $asset) {
	
	switch ($asset->name) {	
		case $whatsnew :
				$whatsnew_size = safe_filesize($asset->size);
				$whatsnew_dc = $asset->download_count;
				break;
		case $source_exe:
				$source_exe_size = safe_filesize($asset->size);
				$source_exe_dc = $asset->download_count;
				break;
		case $source_zip:
				$source_zip_size = safe_filesize($asset->size);
				$source_zip_dc = $asset->download_count;
				break;
		case $binary:
				$binary_size = safe_filesize($asset->size);
				$binary_dc = $asset->download_count;
				break;
		case $binary_64bit:
				$binary_64bit_size = safe_filesize($asset->size);
				$binary_64bit_dc = $asset->download_count;
				break;
		case $binary_debug:
				$binary_debug_size = safe_filesize($asset->size);
				$binary_debug_dc = $asset->download_count;
				break;				
	}
}

$title = 'MAME | Latest MAME Release';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

					<center><h1 class="page-header">Latest MAME Release</h1></center>
                 
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
							<th width="65%">Description</th>
							<th>Downloads</th>
						</tr>
						<tr>
							<td class="link">
							<a href="https://github.com/mamedev/mame/releases/download/<?php  echo 'mame0' . $version ?>/<?php echo $binary ?>">
							<?php echo $binary ?>
							</a></td>
							<td class="number"><?php echo $binary_size ?> KB</td>
							<td>MAME 0.<?php echo $version ?> Windows command-line binaries.</td>
							<td align="right"><span class="badge"><?php echo $binary_dc ?></td>
						</tr>
						<tr>
							<td class="link">
							<a href="https://github.com/mamedev/mame/releases/download/<?php  echo 'mame0' . $version ?>/<?php echo $binary_64bit ?>">
							<?php echo $binary_64bit ?>
							</a></td>
							<td class="number"><?php echo $binary_64bit_size ?> KB</td>
							<td>MAME 0.<?php echo $version ?> 64-bit Windows command-line binaries.</td>
							<td align="right"><span class="badge"><?php echo $binary_64bit_dc ?></span></td>
						</tr>
						<tr>
							<td class="link">
							<a href="https://github.com/mamedev/mame/releases/download/<?php  echo 'mame0' . $version ?>/<?php echo $binary_debug ?>">
							<?php echo $binary_debug ?>
							</a></td>
							<td class="number"><?php echo $binary_debug_size ?> KB</td>
							<td>MAME 0.<?php echo $version ?> Windows command-line binaries (debug build).</td>
							<td align="right"><span class="badge"><?php echo $binary_debug_dc ?></span></td>
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
					The table below provides links to the official source packages. Larger files are hosted on external 
					mirrors, selected at random, which may require a temporary redirect to the mirror site in order to
					download the file.
					</p>
					
					<div class="panel panel-primary">
					  <div class="panel-heading">MAME 0.<?php echo $version ?> Source Code</div>
					  <table class="table">
						<tr>
							<th width="23%">File</th>
							<th width="12%">Size</th>
							<th width="65%">Description</th>
							<th>Downloads</th>
						</tr>

						<tr>
							<td class="link">
							<a href="<?php echo $releasespath . $whatsnew ?>">
							<?php echo $whatsnew ?>
							</a></td>
							<td class="number"><?php echo $whatsnew_size ?> KB</td>
							<td>List of what is new in this MAME release</td>
							<td align="right">&nbsp;</td>
						</tr>						
						<tr>
							<td class="link">
							<a href="https://github.com/mamedev/mame/releases/download/<?php  echo 'mame0' . $version ?>/<?php echo $source_exe ?>">
							<?php echo $source_exe ?>
							</a></td>
							<td class="number"><?php echo $source_exe_size ?> KB</td>
							<td>MAME 0.<?php echo $version ?> sources in self-extracting 7zip format (Windows only)</td>
							<td align="right"><span class="badge"><?php echo $source_exe_dc ?></span></td>
						</tr>
						<tr>
							<td class="link">
							<a href="https://github.com/mamedev/mame/releases/download/<?php  echo 'mame0' . $version ?>/<?php echo $source_zip ?>">
							<?php echo $source_zip ?>
							</a></td>
							<td class="number"><?php echo $source_zip_size ?> KB</td>
							<td>MAME 0.<?php echo $version ?> sources in ZIP format (all platforms)</td>
							<td align="right"><span class="badge"><?php echo $source_zip_dc ?></span></td>
						</tr>
					  </table>
					  <div class="panel-footer">
						<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
					  </div>
					</div>					

					<br/>

					<p>
					MAME source releases in now packaged in one of two ways. If you are running a Windows system, you 
					can download the smaller <a href="http://www.7-zip.org/" target="blank">7-zip</a> self-extracting archive. If you are
					on a non-Windows system, you can download the sources as a standard ZIP file. Note that this ZIP file is 
					packaged as a "double ZIP" file, meaning that when you extract the file that you download, it will produce a 
					second large ZIP file which must also be extracted to give you the final sources. This is done to produce 
					what is effectively a "solid" archive and improves the compression ratio of the MAME and MESS sources.
					</p>
				
            <!-- content end --> 
    </div>
    <!-- /.container -->
	<br/><br/><br/>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
