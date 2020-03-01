<?php
$title = 'MAME | Previous Releases';

function release_mirror_file($version, $filename, $githubrepo = 'mame')
{
	if (true)
		echo '<a href="https://github.com/mamedev/' . htmlspecialchars($githubrepo) . '/releases/download/mame0' . htmlspecialchars($version) . '/' . htmlspecialchars($filename) . '">' . htmlspecialchars($filename) . '</a>';
	else
		echo '<a href="https://sourceforge.net/projects/mame/files/mame/0.' . htmlspecialchars($version) . '/' . htmlspecialchars($filename) . '">' . htmlspecialchars($filename) . '</a>';
}

function ancient_mirror_file($version, $filename, $psdir)
{
	if (true)
		echo '<a href="http://www.progettosnaps.net/MAME/' . htmlspecialchars($psdir) . '/' . htmlspecialchars($filename) . '">' . htmlspecialchars($filename) . '</a>';
	else
		echo '<a href="https://sourceforge.net/projects/mame/files/mame/0.' . htmlspecialchars($version) . '/' . htmlspecialchars($filename) . '">' . htmlspecialchars($filename) . '</a>';
}

function release_mirror_directory($version, $githubrepo = 'mame')
{
	if (true)
		echo '<a href="https://github.com/mamedev/' . htmlspecialchars($githubrepo) . '/releases/tag/mame0' . htmlspecialchars($version) . '">0.' . htmlspecialchars($version) . '</a>';
	else
		echo '<a href="https://sourceforge.net/projects/mame/files/mame/0.' . htmlspecialchars($version) . '/">0.' . htmlspecialchars($version) . '</a>';
}

function ancient_mirror_directory($version)
{
	echo '<a href="https://sourceforge.net/projects/mame/files/mame/0.' . htmlspecialchars($version) . '/">0.' . htmlspecialchars($version) . '</a>';
}

?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- Page Content -->
    <div class="container">

		<h1 class="page-header" style="text-align: center;">Previous MAME Releases</h1>

		<p>The latest official MAME release is available on the
		<a href="release.html">Latest Release</a> page.  Below is a collection of
		older MAME releases, dating back to the first official release from February, 1997.<br>
		MESS only releases (prior to version 0.148) are available and are kindly hosted by AntoPISA
		at the <a href="http://www.progettosnaps.net/mess/repository/">MESS Repository</a>.  MAME
		releases are available at <a href="https://github.com/mamedev/mame/releases">GitHub</a> and
		<a href="https://sourceforge.net/projects/mame/files/mame/">SourceForge</a>.</p>

		<div class="panel panel-primary">
		  <div class="panel-heading">2020 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('218'); ?></td>
				<td class="date">2 Feb 2020</td>
				<td class="link"><?php release_mirror_file('218', 'mame0218s.exe'); ?></td>
				<td class="link"><?php release_mirror_file('218', 'mame0218b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0218.txt">whatsnew_0218.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>


		<div class="panel panel-primary">
		  <div class="panel-heading">2019 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('217'); ?></td>
				<td class="date">25 Dec 2019</td>
				<td class="link"><?php release_mirror_file('217', 'mame0217s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('217', 'mame0217b_32bit.exe'); ?><br/><?php release_mirror_file('217', 'mame0217b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0217.txt">whatsnew_0217.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('216'); ?></td>
				<td class="date">27 Nov 2019</td>
				<td class="link"><?php release_mirror_file('216', 'mame0216s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('216', 'mame0216b_32bit.exe'); ?><br/><?php release_mirror_file('216', 'mame0216b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0216.txt">whatsnew_0216.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('215'); ?></td>
				<td class="date">30 Oct 2019</td>
				<td class="link"><?php release_mirror_file('215', 'mame0215s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('215', 'mame0215b_32bit.exe'); ?><br/><?php release_mirror_file('215', 'mame0215b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0215.txt">whatsnew_0215.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('214'); ?></td>
				<td class="date">25 Sep 2019</td>
				<td class="link"><?php release_mirror_file('214', 'mame0214s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('214', 'mame0214b_32bit.exe'); ?><br/><?php release_mirror_file('214', 'mame0214b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0214.txt">whatsnew_0214.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('213'); ?></td>
				<td class="date">4 Sep 2019</td>
				<td class="link"><?php release_mirror_file('213', 'mame0213s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('213', 'mame0213b_32bit.exe'); ?><br/><?php release_mirror_file('213', 'mame0213b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0213.txt">whatsnew_0213.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('212'); ?></td>
				<td class="date">3 Aug 2019</td>
				<td class="link"><?php release_mirror_file('212', 'mame0212s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('212', 'mame0212b_32bit.exe'); ?><br/><?php release_mirror_file('212', 'mame0212b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0212.txt">whatsnew_0212.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('211'); ?></td>
				<td class="date">26 Jun 2019</td>
				<td class="link"><?php release_mirror_file('211', 'mame0211s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('211', 'mame0211b_32bit.exe'); ?><br/><?php release_mirror_file('211', 'mame0211b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0211.txt">whatsnew_0211.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('210'); ?></td>
				<td class="date">30 May 2019</td>
				<td class="link"><?php release_mirror_file('210', 'mame0210s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('210', 'mame0210b_32bit.exe'); ?><br/><?php release_mirror_file('210', 'mame0210b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0210.txt">whatsnew_0210.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('209'); ?></td>
				<td class="date">24 Apr 2019</td>
				<td class="link"><?php release_mirror_file('209', 'mame0209s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('209', 'mame0209b_32bit.exe'); ?><br/><?php release_mirror_file('209', 'mame0209b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0209.txt">whatsnew_0209.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('208'); ?></td>
				<td class="date">27 Mar 2019</td>
				<td class="link"><?php release_mirror_file('208', 'mame0208s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('208', 'mame0208b_32bit.exe'); ?><br/><?php release_mirror_file('208', 'mame0208b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0208.txt">whatsnew_0208.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('207'); ?></td>
				<td class="date">27 Feb 2019</td>
				<td class="link"><?php release_mirror_file('207', 'mame0207s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('207', 'mame0207b_32bit.exe'); ?><br/><?php release_mirror_file('207', 'mame0207b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0207.txt">whatsnew_0207.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('206'); ?></td>
				<td class="date">30 Jan 2019</td>
				<td class="link"><?php release_mirror_file('206', 'mame0206s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('206', 'mame0206b_32bit.exe'); ?><br/><?php release_mirror_file('206', 'mame0206b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0206.txt">whatsnew_0206.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>


		<div class="panel panel-primary">
		  <div class="panel-heading">2018 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('205'); ?></td>
				<td class="date">26 Dec 2018</td>
				<td class="link"><?php release_mirror_file('205', 'mame0205s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('205', 'mame0205b_32bit.exe'); ?><br/><?php release_mirror_file('205', 'mame0205b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0205.txt">whatsnew_0205.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('204'); ?></td>
				<td class="date">28 Nov 2018</td>
				<td class="link"><?php release_mirror_file('204', 'mame0204s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('204', 'mame0204b_32bit.exe'); ?><br/><?php release_mirror_file('204', 'mame0204b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0204.txt">whatsnew_0204.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('203'); ?></td>
				<td class="date">31 Oct 2018</td>
				<td class="link"><?php release_mirror_file('203', 'mame0203s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('203', 'mame0203b_32bit.exe'); ?><br/><?php release_mirror_file('203', 'mame0203b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0203.txt">whatsnew_0203.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('202'); ?></td>
				<td class="date">26 Sep 2018</td>
				<td class="link"><?php release_mirror_file('202', 'mame0202s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('202', 'mame0202b_32bit.exe'); ?><br/><?php release_mirror_file('202', 'mame0202b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0202.txt">whatsnew_0202.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('201'); ?></td>
				<td class="date">29 Aug 2018</td>
				<td class="link"><?php release_mirror_file('201', 'mame0201s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('201', 'mame0201b_32bit.exe'); ?><br/><?php release_mirror_file('201', 'mame0201b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0201.txt">whatsnew_0201.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('200'); ?></td>
				<td class="date">25 Jul 2018</td>
				<td class="link"><?php release_mirror_file('200', 'mame0200s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('200', 'mame0200b_32bit.exe'); ?><br/><?php release_mirror_file('200', 'mame0200b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0200.txt">whatsnew_0200.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('199'); ?></td>
				<td class="date">27 Jun 2018</td>
				<td class="link"><?php release_mirror_file('199', 'mame0199s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('199', 'mame0199b_32bit.exe'); ?><br/><?php release_mirror_file('199', 'mame0199b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0199.txt">whatsnew_0199.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('198'); ?></td>
				<td class="date">30 May 2018</td>
				<td class="link"><?php release_mirror_file('198', 'mame0198s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('198', 'mame0198b_32bit.exe'); ?><br/><?php release_mirror_file('198', 'mame0198b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0198.txt">whatsnew_0198.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('197'); ?></td>
				<td class="date">25 Apr 2018</td>
				<td class="link"><?php release_mirror_file('197', 'mame0197s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('197', 'mame0197b_32bit.exe'); ?><br/><?php release_mirror_file('197', 'mame0197b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0197.txt">whatsnew_0197.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('196'); ?></td>
				<td class="date">28 Mar 2018</td>
				<td class="link"><?php release_mirror_file('196', 'mame0196s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('196', 'mame0196b_32bit.exe'); ?><br/><?php release_mirror_file('196', 'mame0196b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0196.txt">whatsnew_0196.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('195'); ?></td>
				<td class="date">28 Feb 2018</td>
				<td class="link"><?php release_mirror_file('195', 'mame0195s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('195', 'mame0195b_32bit.exe'); ?><br/><?php release_mirror_file('195', 'mame0195b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0195.txt">whatsnew_0195.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('194'); ?></td>
				<td class="date">31 Jan 2018</td>
				<td class="link"><?php release_mirror_file('194', 'mame0194s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('194', 'mame0194b_32bit.exe'); ?><br/><?php release_mirror_file('194', 'mame0194b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0194.txt">whatsnew_0194.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>


		<div class="panel panel-primary">
		  <div class="panel-heading">2017 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('193'); ?></td>
				<td class="date">27 Dec 2017</td>
				<td class="link"><?php release_mirror_file('193', 'mame0193s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('193', 'mame0193b_32bit.exe'); ?><br/><?php release_mirror_file('193', 'mame0193b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0193.txt">whatsnew_0193.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('192'); ?></td>
				<td class="date">29 Nov 2017</td>
				<td class="link"><?php release_mirror_file('192', 'mame0192s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('192', 'mame0192b_32bit.exe'); ?><br/><?php release_mirror_file('192', 'mame0192b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0192.txt">whatsnew_0192.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('191'); ?></td>
				<td class="date">25 Oct 2017</td>
				<td class="link"><?php release_mirror_file('191', 'mame0191s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('191', 'mame0191b_32bit.exe'); ?><br/><?php release_mirror_file('191', 'mame0191b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0191.txt">whatsnew_0191.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('190'); ?></td>
				<td class="date">27 Sep 2017</td>
				<td class="link"><?php release_mirror_file('190', 'mame0190s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('190', 'mame0190b_32bit.exe'); ?><br/><?php release_mirror_file('190', 'mame0190b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0190.txt">whatsnew_0190.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('189'); ?></td>
				<td class="date">30 Aug 2017</td>
				<td class="link"><?php release_mirror_file('189', 'mame0189s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('189', 'mame0189b_32bit.exe'); ?><br/><?php release_mirror_file('189', 'mame0189b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0189.txt">whatsnew_0189.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('188'); ?></td>
				<td class="date">26 Jul 2017</td>
				<td class="link"><?php release_mirror_file('188', 'mame0188s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('188', 'mame0188b_32bit.exe'); ?><br/><?php release_mirror_file('188', 'mame0188b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0188.txt">whatsnew_0188.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('187'); ?></td>
				<td class="date">28 Jun 2017</td>
				<td class="link"><?php release_mirror_file('187', 'mame0187s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('187', 'mame0187b_32bit.exe'); ?><br/><?php release_mirror_file('187', 'mame0187b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0187.txt">whatsnew_0187.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('186'); ?></td>
				<td class="date">31 May 2017</td>
				<td class="link"><?php release_mirror_file('186', 'mame0186s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('186', 'mame0186b_32bit.exe'); ?><br/><?php release_mirror_file('186', 'mame0186b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0186.txt">whatsnew_0186.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('185'); ?></td>
				<td class="date">26 Apr 2017</td>
				<td class="link"><?php release_mirror_file('185', 'mame0185s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('185', 'mame0185b_32bit.exe'); ?><br/><?php release_mirror_file('185', 'mame0185b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0185.txt">whatsnew_0185.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('184'); ?></td>
				<td class="date">29 Mar 2017</td>
				<td class="link"><?php release_mirror_file('184', 'mame0184s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('184', 'mame0184b_32bit.exe'); ?><br/><?php release_mirror_file('184', 'mame0184b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0184.txt">whatsnew_0184.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('183'); ?></td>
				<td class="date">22 Feb 2017</td>
				<td class="link"><?php release_mirror_file('183', 'mame0183s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('183', 'mame0183b_32bit.exe'); ?><br/><?php release_mirror_file('183', 'mame0183b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0183.txt">whatsnew_0183.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('182'); ?></td>
				<td class="date">25 Jan 2017</td>
				<td class="link"><?php release_mirror_file('182', 'mame0182s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('182', 'mame0182b_32bit.exe'); ?><br/><?php release_mirror_file('182', 'mame0182b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0182.txt">whatsnew_0182.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>


		<div class="panel panel-primary">
		  <div class="panel-heading">2016 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('181'); ?></td>
				<td class="date">28 Dec 2016</td>
				<td class="link"><?php release_mirror_file('181', 'mame0181s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('181', 'mame0181b_32bit.exe'); ?><br/><?php release_mirror_file('181', 'mame0181b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0181.txt">whatsnew_0181.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('180'); ?></td>
				<td class="date">30 Nov 2016</td>
				<td class="link"><?php release_mirror_file('180', 'mame0180s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('180', 'mame0180b_32bit.exe'); ?><br/><?php release_mirror_file('180', 'mame0180b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0180.txt">whatsnew_0180.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('179'); ?></td>
				<td class="date">26 Oct 2016</td>
				<td class="link"><?php release_mirror_file('179', 'mame0179s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('179', 'mame0179b_32bit.exe'); ?><br/><?php release_mirror_file('179', 'mame0179b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0179.txt">whatsnew_0179.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('178'); ?></td>
				<td class="date">28 Sep 2016</td>
				<td class="link"><?php release_mirror_file('178', 'mame0178s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('178', 'mame0178b.exe'); ?><br/><?php release_mirror_file('178', 'mame0178b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0178.txt">whatsnew_0178.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('177'); ?></td>
				<td class="date">31 Aug 2016</td>
				<td class="link"><?php release_mirror_file('177', 'mame0177s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('177', 'mame0177b.exe'); ?><br/><?php release_mirror_file('177', 'mame0177b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0177.txt">whatsnew_0177.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('176'); ?></td>
				<td class="date">27 Jul 2016</td>
				<td class="link"><?php release_mirror_file('176', 'mame0176s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('176', 'mame0176b.exe'); ?><br/><?php release_mirror_file('176', 'mame0176b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0176.txt">whatsnew_0176.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('175'); ?></td>
				<td class="date">29 Jun 2016</td>
				<td class="link"><?php release_mirror_file('175', 'mame0175s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('175', 'mame0175b.exe'); ?><br/><?php release_mirror_file('175', 'mame0175b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0175.txt">whatsnew_0175.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('174'); ?></td>
				<td class="date">25 May 2016</td>
				<td class="link"><?php release_mirror_file('174', 'mame0174s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('174', 'mame0174b.exe'); ?><br/><?php release_mirror_file('174', 'mame0174b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0174.txt">whatsnew_0174.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('173'); ?></td>
				<td class="date">27 Apr 2016</td>
				<td class="link"><?php release_mirror_file('173', 'mame0173s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('173', 'mame0173b.exe'); ?><br/><?php release_mirror_file('173', 'mame0173b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0173.txt">whatsnew_0173.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('172'); ?></td>
				<td class="date">30 Mar 2016</td>
				<td class="link"><?php release_mirror_file('172', 'mame0172s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('172', 'mame0172b.exe'); ?><br/><?php release_mirror_file('172', 'mame0172b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0172.txt">whatsnew_0172.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('171'); ?></td>
				<td class="date">24 Feb 2016</td>
				<td class="link"><?php release_mirror_file('171', 'mame0171s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('171', 'mame0171b.exe'); ?><br/><?php release_mirror_file('171', 'mame0171b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0171.txt">whatsnew_0171.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('170'); ?></td>
				<td class="date">27 Jan 2016</td>
				<td class="link"><?php release_mirror_file('170', 'mame0170s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('170', 'mame0170b.exe'); ?><br/><?php release_mirror_file('170', 'mame0170b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0170.txt">whatsnew_0170.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>


		<div class="panel panel-primary">
		  <div class="panel-heading">2015 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('169'); ?></td>
				<td class="date">30 Dec 2015</td>
				<td class="link"><?php release_mirror_file('169', 'mame0169s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('169', 'mame0169b.exe'); ?><br/><?php release_mirror_file('169', 'mame0169b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0169.txt">whatsnew_0169.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('168'); ?></td>
				<td class="date">25 Nov 2015</td>
				<td class="link"><?php release_mirror_file('168', 'mame0168s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('168', 'mame0168b.exe'); ?><br/><?php release_mirror_file('168', 'mame0168b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0168.txt">whatsnew_0168.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('167'); ?></td>
				<td class="date">28 Oct 2015</td>
				<td class="link"><?php release_mirror_file('167', 'mame0167s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('167', 'mame0167b.exe'); ?><br/><?php release_mirror_file('167', 'mame0167b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0167.txt">whatsnew_0167.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('166'); ?></td>
				<td class="date">30 Sep 2015</td>
				<td class="link"><?php release_mirror_file('166', 'mame0166s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('166', 'mame0166b.exe'); ?><br/><?php release_mirror_file('166', 'mame0166b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0166.txt">whatsnew_0166.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('165'); ?></td>
				<td class="date">26 Aug 2015</td>
				<td class="link"><?php release_mirror_file('165', 'mame0165s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('165', 'mame0165b.exe'); ?><br/><?php release_mirror_file('165', 'mame0165b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0165.txt">whatsnew_0165.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('164'); ?></td>
				<td class="date">29 Jul 2015</td>
				<td class="link"><?php release_mirror_file('164', 'mame0164s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('164', 'mame0164b.exe'); ?><br/><?php release_mirror_file('164', 'mame0164b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0164.txt">whatsnew_0164.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('163'); ?></td>
				<td class="date">24 Jun 2015</td>
				<td class="link"><?php release_mirror_file('163', 'mame0163s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('163', 'mame0163b.exe'); ?><br/><?php release_mirror_file('163', 'mame0163b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0163.txt">whatsnew_0163.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('162'); ?></td>
				<td class="date">27 May 2015</td>
				<td class="link"><?php release_mirror_file('162', 'mame0162s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('162', 'mame0162b.exe'); ?><br/><?php release_mirror_file('162', 'mame0162b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0162.txt">whatsnew_0162.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('161'); ?></td>
				<td class="date">29 Apr 2015</td>
				<td class="link"><?php release_mirror_file('161', 'mame0161s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('161', 'mame0161b.exe'); ?><br/><?php release_mirror_file('161', 'mame0161b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0161.txt">whatsnew_0161.txt</a><br/><a href="releases/messnew_0161.txt">messnew_0161.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('160'); ?></td>
				<td class="date">25 Mar 2015</td>
				<td class="link"><?php release_mirror_file('160', 'mame0160s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('160', 'mame0160b.exe'); ?><br/><?php release_mirror_file('160', 'mame0160b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0160.txt">whatsnew_0160.txt</a><br/><a href="releases/messnew_0160.txt">messnew_0160.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('159'); ?></td>
				<td class="date">25 Feb 2015</td>
				<td class="link"><?php release_mirror_file('159', 'mame0159s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('159', 'mame0159b.exe'); ?><br/><?php release_mirror_file('159', 'mame0159b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0159.txt">whatsnew_0159.txt</a><br/><a href="releases/messnew_0159.txt">messnew_0159.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('158'); ?></td>
				<td class="date">28 Jan 2015</td>
				<td class="link"><?php release_mirror_file('158', 'mame0158s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('158', 'mame0158b.exe'); ?><br/><?php release_mirror_file('158', 'mame0158b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0158.txt">whatsnew_0158.txt</a><br/><a href="releases/messnew_0158.txt">messnew_0158.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2014 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('157'); ?></td>
				<td class="date">31 Dec 2014</td>
				<td class="link"><?php release_mirror_file('157', 'mame0157s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('157', 'mame0157b.exe'); ?><br/><?php release_mirror_file('157', 'mame0157b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0157.txt">whatsnew_0157.txt</a><br/><a href="releases/messnew_0157.txt">messnew_0157.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('156'); ?></td>
				<td class="date">26 Nov 2014</td>
				<td class="link"><?php release_mirror_file('156', 'mame0156s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('156', 'mame0156b.exe'); ?><br/><?php release_mirror_file('156', 'mame0156b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0156.txt">whatsnew_0156.txt</a><br/><a href="releases/messnew_0156.txt">messnew_0156.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('155'); ?></td>
				<td class="date">15 Oct 2014</td>
				<td class="link"><?php release_mirror_file('155', 'mame0155s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('155', 'mame0155b.exe'); ?><br/><?php release_mirror_file('155', 'mame0155b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0155.txt">whatsnew_0155.txt</a><br/><a href="releases/messnew_0155.txt">messnew_0155.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('154'); ?></td>
				<td class="date">23 Jul 2014</td>
				<td class="link"><?php release_mirror_file('154', 'mame0154s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('154', 'mame0154b.exe'); ?><br/><?php release_mirror_file('154', 'mame0154b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0154.txt">whatsnew_0154.txt</a><br/><a href="releases/messnew_0154.txt">messnew_0154.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('153'); ?></td>
				<td class="date">07 Apr 2014</td>
				<td class="link"><?php release_mirror_file('153', 'mame0153s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('153', 'mame0153b.exe'); ?><br/><?php release_mirror_file('153', 'mame0153b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0153.txt">whatsnew_0153.txt</a><br/><a href="releases/messnew_0153.txt">messnew_0153.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2013 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('152'); ?></td>
				<td class="date">24 Dec 2013</td>
				<td class="link"><?php release_mirror_file('152', 'mame0152s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('152', 'mame0152b.exe'); ?><br/><?php release_mirror_file('152', 'mame0152b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0152.txt">whatsnew_0152.txt</a><br/><a href="releases/messnew_0152.txt">messnew_0152.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('151'); ?></td>
				<td class="date">05 Nov 2013</td>
				<td class="link"><?php release_mirror_file('151', 'mame0151s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('151', 'mame0151b.exe'); ?><br/><?php release_mirror_file('151', 'mame0151b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0151.txt">whatsnew_0151.txt</a><br/><a href="releases/messnew_0151.txt">messnew_0151.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('150'); ?></td>
				<td class="date">17 Sep 2013</td>
				<td class="link"><?php release_mirror_file('150', 'mame0150s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('150', 'mame0150b.exe'); ?><br/><?php release_mirror_file('150', 'mame0150b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0150.txt">whatsnew_0150.txt</a><br/><a href="releases/messnew_0150.txt">messnew_0150.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('149'); ?></td>
				<td class="date">11 Jun 2013</td>
				<td class="link"><?php release_mirror_file('149', 'mame0149s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('149', 'mame0149b.exe'); ?><br/><?php release_mirror_file('149', 'mame0149b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0149.txt">whatsnew_0149.txt</a><br/><a href="releases/messnew_0149.txt">messnew_0149.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('148'); ?></td>
				<td class="date">11 Jan 2013</td>
				<td class="link"><?php release_mirror_file('148', 'mame0148s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('148', 'mame0148b.exe'); ?><br/><?php release_mirror_file('148', 'mame0148b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0148.txt">whatsnew_0148.txt</a><br/><a href="releases/messnew_0148.txt">messnew_0148.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2012 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('147'); ?></td>
				<td class="date">17 Sep 2012</td>
				<td class="link"><?php release_mirror_file('147', 'mame0147s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('147', 'mame0147b.exe'); ?><br/><?php release_mirror_file('147', 'mame0147b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0147.txt">whatsnew_0147.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('146'); ?></td>
				<td class="date">21 May 2012</td>
				<td class="link"><?php release_mirror_file('146', 'mame0146s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('146', 'mame0146b.exe'); ?><br/><?php release_mirror_file('146', 'mame0146b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0146.txt">whatsnew_0146.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('145'); ?></td>
				<td class="date">05 Feb 2012</td>
				<td class="link"><?php release_mirror_file('145', 'mame0145s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('145', 'mame0145b.exe'); ?><br/><?php release_mirror_file('145', 'mame0145b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0145.txt">whatsnew_0145.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2011 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('144'); ?></td>
				<td class="date">13 Nov 2011</td>
				<td class="link"><?php release_mirror_file('144', 'mame0144s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('144', 'mame0144b.exe'); ?><br/><?php release_mirror_file('144', 'mame0144b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0144.txt">whatsnew_0144.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('143'); ?></td>
				<td class="date">28 Jun 2011</td>
				<td class="link"><?php release_mirror_file('143', 'mame0143s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('143', 'mame0143b.exe'); ?><br/><?php release_mirror_file('143', 'mame0143b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0143.txt">whatsnew_0143.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('142'); ?></td>
				<td class="date">03 Apr 2011</td>
				<td class="link"><?php release_mirror_file('142', 'mame0142s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('142', 'mame0142b.exe'); ?><br/><?php release_mirror_file('142', 'mame0142b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0142.txt">whatsnew_0142.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>


		<div class="panel panel-primary">
		  <div class="panel-heading">2010 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('141'); ?></td>
				<td class="date">31 Dec 2010</td>
				<td class="link"><?php release_mirror_file('141', 'mame0141s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('141', 'mame0141b.exe'); ?><br/><?php release_mirror_file('141', 'mame0141b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0141.txt">whatsnew_0141.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('140'); ?></td>
				<td class="date">21 Oct 2010</td>
				<td class="link"><?php release_mirror_file('140', 'mame0140s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('140', 'mame0140b.exe'); ?><br/><?php release_mirror_file('140', 'mame0140b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0140.txt">whatsnew_0140.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('139'); ?></td>
				<td class="date">11 Aug 2010</td>
				<td class="link"><?php release_mirror_file('139', 'mame0139s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('139', 'mame0139b.exe'); ?><br/><?php release_mirror_file('139', 'mame0139b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0139.txt">whatsnew_0139.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('138'); ?></td>
				<td class="date">15 May 2010</td>
				<td class="link"><?php release_mirror_file('138', 'mame0138s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('138', 'mame0138b.exe'); ?><br/><?php release_mirror_file('138', 'mame0138b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0138.txt">whatsnew_0138.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('137'); ?></td>
				<td class="date">11 Mar 2010</td>
				<td class="link"><?php release_mirror_file('137', 'mame0137s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('137', 'mame0137b.exe'); ?><br/><?php release_mirror_file('137', 'mame0137b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0137.txt">whatsnew_0137.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2009 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('136'); ?></td>
				<td class="date">31 Dec 2009</td>
				<td class="link"><?php release_mirror_file('136', 'mame0136s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('136', 'mame0136b.exe'); ?><br/><?php release_mirror_file('136', 'mame0136b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0136.txt">whatsnew_0136.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('135'); ?></td>
				<td class="date">31 Oct 2009</td>
				<td class="link"><?php release_mirror_file('135', 'mame0135s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('135', 'mame0135b.exe'); ?><br/><?php release_mirror_file('135', 'mame0135b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0135.txt">whatsnew_0135.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('134'); ?></td>
				<td class="date">10 Sep 2009</td>
				<td class="link"><?php release_mirror_file('134', 'mame0134s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('134', 'mame0134b.exe'); ?><br/><?php release_mirror_file('134', 'mame0134b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0134.txt">whatsnew_0134.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('133'); ?></td>
				<td class="date">20 Jul 2009</td>
				<td class="link"><?php release_mirror_file('133', 'mame0133s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('133', 'mame0133b.exe'); ?><br/><?php release_mirror_file('133', 'mame0133b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0133.txt">whatsnew_0133.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('132'); ?></td>
				<td class="date">08 Jun 2009</td>
				<td class="link"><?php release_mirror_file('132', 'mame0132s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('132', 'mame0132b.exe'); ?><br/><?php release_mirror_file('132', 'mame0132b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0132.txt">whatsnew_0132.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('131'); ?></td>
				<td class="date">23 April 2009</td>
				<td class="link"><?php release_mirror_file('131', 'mame0131s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('131', 'mame0131b.exe'); ?><br/><?php release_mirror_file('131', 'mame0131b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0131.txt">whatsnew_0131.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('130'); ?></td>
				<td class="date">09 Mar 2009</td>
				<td class="link"><?php release_mirror_file('130', 'mame0130s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('130', 'mame0130b.exe'); ?><br/><?php release_mirror_file('130', 'mame0130b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0130.txt">whatsnew_0130.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('129'); ?></td>
				<td class="date">04 Jan 2009</td>
				<td class="link"><?php release_mirror_file('129', 'mame0129s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('129', 'mame0129b.exe'); ?><br/><?php release_mirror_file('129', 'mame0129b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0129.txt">whatsnew_0129.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2008 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('128'); ?></td>
				<td class="date">16 Oct 2008</td>
				<td class="link"><?php release_mirror_file('128', 'mame0128s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('128', 'mame0128b.exe'); ?><br/><?php release_mirror_file('128', 'mame0128b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0128.txt">whatsnew_0128.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('127'); ?></td>
				<td class="date">19 Aug 2008</td>
				<td class="link"><?php release_mirror_file('127', 'mame0127s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('127', 'mame0127b.exe'); ?><br/><?php release_mirror_file('127', 'mame0127b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0127.txt">whatsnew_0127.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('126'); ?></td>
				<td class="date">06 Jul 2008</td>
				<td class="link"><?php release_mirror_file('126', 'mame0126s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('126', 'mame0126b.exe'); ?><br/><?php release_mirror_file('126', 'mame0126b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0126.txt">whatsnew_0126.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('125'); ?></td>
				<td class="date">05 May 2008</td>
				<td class="link"><?php release_mirror_file('125', 'mame0125s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('125', 'mame0125b.exe'); ?><br/><?php release_mirror_file('125', 'mame0125b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0125.txt">whatsnew_0125.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('124'); ?></td>
				<td class="date">23 Mar 2008</td>
				<td class="link"><?php release_mirror_file('124', 'mame0124s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('124', 'mame0124b.exe'); ?><br/><?php release_mirror_file('124', 'mame0124b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0124.txt">whatsnew_0124.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('123'); ?></td>
				<td class="date">05 Feb 2008</td>
				<td class="link"><?php release_mirror_file('123', 'mame0123s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('123', 'mame0123b.exe'); ?><br/><?php release_mirror_file('123', 'mame0123b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0123.txt">whatsnew_0123.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2007 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('122'); ?></td>
				<td class="date">18 Dec 2007</td>
				<td class="link"><?php release_mirror_file('122', 'mame0122s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('122', 'mame0122b.exe'); ?><br/><?php release_mirror_file('122', 'mame0122b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0122.txt">whatsnew_0122.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('121'); ?></td>
				<td class="date">18 Nov 2007</td>
				<td class="link"><?php release_mirror_file('121', 'mame0121s.zip'); ?></td>
				<td class="link"><?php release_mirror_file('121', 'mame0121b.exe'); ?><br/><?php release_mirror_file('121', 'mame0121b_64bit.exe'); ?></td>
				<td class="link"><a href="releases/whatsnew_0121.txt">whatsnew_0121.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('120', 'historic-mame'); ?></td>
				<td class="date">15 Oct 2007</td>
				<td class="link"><?php release_mirror_file('120', 'mame0120s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('120', 'mame0120b.exe', 'historic-mame'); ?><br/><?php release_mirror_file('120', 'mame0120b_64bit.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0120.txt">whatsnew_0120.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('119', 'historic-mame'); ?></td>
				<td class="date">13 Sep 2007</td>
				<td class="link"><?php release_mirror_file('119', 'mame0119s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('119', 'mame0119b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0119.txt">whatsnew_0119.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('118', 'historic-mame'); ?></td>
				<td class="date">5 Aug 2007</td>
				<td class="link"><?php release_mirror_file('118', 'mame0118s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('118', 'mame0118b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0118.txt">whatsnew_0118.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('117', 'historic-mame'); ?></td>
				<td class="date">10 Jul 2007</td>
				<td class="link"><?php release_mirror_file('117', 'mame0117s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('117', 'mame0117b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0117.txt">whatsnew_0117.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('116', 'historic-mame'); ?></td>
				<td class="date">10 Jun 2007</td>
				<td class="link"><?php release_mirror_file('116', 'mame0116s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('116', 'mame0116b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0116.txt">whatsnew_0116.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('115', 'historic-mame'); ?></td>
				<td class="date">06 May 2007</td>
				<td class="link"><?php release_mirror_file('115', 'mame0115s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('115', 'mame0115b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0115.txt">whatsnew_0115.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('114', 'historic-mame'); ?></td>
				<td class="date">02 Apr 2007</td>
				<td class="link"><?php release_mirror_file('114', 'mame0114s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('114', 'mame0114b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0114.txt">whatsnew_0114.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('113', 'historic-mame'); ?></td>
				<td class="date">05 Mar 2007</td>
				<td class="link"><?php release_mirror_file('113', 'mame0113s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('113', 'mame0113b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0113.txt">whatsnew_0113.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('112', 'historic-mame'); ?></td>
				<td class="date">05 Feb 2007</td>
				<td class="link"><?php release_mirror_file('112', 'mame0112s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('112', 'mame0112b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0112.txt">whatsnew_0112.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2006 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('111', 'historic-mame'); ?></td>
				<td class="date">10 Dec 2006</td>
				<td class="link"><?php release_mirror_file('111', 'mame0111s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('111', 'mame0111b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0111.txt">whatsnew_0111.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('110', 'historic-mame'); ?></td>
				<td class="date">05 Nov 2006</td>
				<td class="link"><?php release_mirror_file('110', 'mame0110s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('110', 'mame0110b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0110.txt">whatsnew_0110.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('109', 'historic-mame'); ?></td>
				<td class="date">26 Sep 2006</td>
				<td class="link"><?php release_mirror_file('109', 'mame0109s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('109', 'mame0109b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0109.txt">whatsnew_0109.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('108', 'historic-mame'); ?></td>
				<td class="date">20 Aug 2006</td>
				<td class="link"><?php release_mirror_file('108', 'mame0108s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('108', 'mame0108b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0108.txt">whatsnew_0108.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('107', 'historic-mame'); ?></td>
				<td class="date">23 Jul 2006</td>
				<td class="link"><?php release_mirror_file('107', 'mame0107s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('107', 'mame0107b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0107.txt">whatsnew_0107.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('106', 'historic-mame'); ?></td>
				<td class="date">13 May 2006</td>
				<td class="link"><?php release_mirror_file('106', 'mame0106s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('106', 'mame0106b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0106.txt">whatsnew_0106.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('105', 'historic-mame'); ?></td>
				<td class="date">04 Apr 2006</td>
				<td class="link"><?php release_mirror_file('105', 'mame0105s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('105', 'mame0105b.exe', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0105.txt">whatsnew_0105.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('104', 'historic-mame'); ?></td>
				<td class="date">05 Feb 2006</td>
				<td class="link"><?php release_mirror_file('104', 'mame0104s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('104', 'mame0104b.zip', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0104.txt">whatsnew_0104.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2005 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('103', 'historic-mame'); ?></td>
				<td class="date">30 Dec 2005</td>
				<td class="link"><?php release_mirror_file('103', 'mame0103s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('103', 'mame0103b.zip', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0103.txt">whatsnew_0103.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('102', 'historic-mame'); ?></td>
				<td class="date">14 Nov 2005</td>
				<td class="link"><?php release_mirror_file('102', 'mame0102s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('102', 'mame0102b.zip', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0102.txt">whatsnew_0102.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('101', 'historic-mame'); ?></td>
				<td class="date">09 Oct 2005</td>
				<td class="link"><?php release_mirror_file('101', 'mame0101s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('101', 'mame0101b.zip', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0101.txt">whatsnew_0101.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php release_mirror_directory('100', 'historic-mame'); ?></td>
				<td class="date">14 Sep 2005</td>
				<td class="link"><?php release_mirror_file('100', 'mame0100s.zip', 'historic-mame'); ?></td>
				<td class="link"><?php release_mirror_file('100', 'mame0100b.zip', 'historic-mame'); ?></td>
				<td class="link"><a href="releases/whatsnew_0100.txt">whatsnew_0100.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('99'); ?></td>
				<td class="date">06 Aug 2005</td>
				<td class="link"><?php ancient_mirror_file('99', 'mame099s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('99', 'mame099b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_099.txt">whatsnew_099.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('98'); ?></td>
				<td class="date">10 Jul 2005</td>
				<td class="link"><?php ancient_mirror_file('98', 'mame098s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('98', 'mame098b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_098.txt">whatsnew_098.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('97'); ?></td>
				<td class="date">02 Jun 2005</td>
				<td class="link"><?php ancient_mirror_file('97', 'mame097s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('97', 'mame097b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_097.txt">whatsnew_097.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('96'); ?></td>
				<td class="date">03 May 2005</td>
				<td class="link"><?php ancient_mirror_file('96', 'mame096s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('96', 'mame096b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_096.txt">whatsnew_096.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('95'); ?></td>
				<td class="date">27 Mar 2005</td>
				<td class="link"><?php ancient_mirror_file('95', 'mame095s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('95', 'mame095b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_095.txt">whatsnew_095.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('94'); ?></td>
				<td class="date">06 Mar 2005</td>
				<td class="link"><?php ancient_mirror_file('94', 'mame094s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('94', 'mame094b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_094.txt">whatsnew_094.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('93'); ?></td>
				<td class="date">27 Feb 2005</td>
				<td class="link"><?php ancient_mirror_file('93', 'mame093s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('93', 'mame093b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_093.txt">whatsnew_093.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('92'); ?></td>
				<td class="date">13 Feb 2005</td>
				<td class="link"><?php ancient_mirror_file('92', 'mame092s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('92', 'mame092b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_092.txt">whatsnew_092.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('91'); ?></td>
				<td class="date">29 Jan 2005</td>
				<td class="link"><?php ancient_mirror_file('91', 'mame091s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('91', 'mame091b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_091.txt">whatsnew_091.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('90'); ?></td>
				<td class="date">04 Jan 2005</td>
				<td class="link"><?php ancient_mirror_file('90', 'mame090s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('90', 'mame090b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_090.txt">whatsnew_090.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2004 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('89'); ?></td>
				<td class="date">24 Nov 2004</td>
				<td class="link"><?php ancient_mirror_file('89', 'mame089s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('89', 'mame089b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_089.txt">whatsnew_089.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('88'); ?></td>
				<td class="date">24 Oct 2004</td>
				<td class="link"><?php ancient_mirror_file('88', 'mame088s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('88', 'mame088b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_088.txt">whatsnew_088.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('87'); ?></td>
				<td class="date">21 Sep 2004</td>
				<td class="link"><?php ancient_mirror_file('87', 'mame087s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('87', 'mame087b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_087.txt">whatsnew_087.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('86'); ?></td>
				<td class="date">22 Aug 2004</td>
				<td class="link"><?php ancient_mirror_file('86', 'mame086s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('86', 'mame086b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_086.txt">whatsnew_086.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('85'); ?></td>
				<td class="date">07 Aug 2004</td>
				<td class="link"><?php ancient_mirror_file('85', 'mame085s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('85', 'mame085b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_085.txt">whatsnew_085.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('84'); ?></td>
				<td class="date">02 Jul 2004</td>
				<td class="link"><?php ancient_mirror_file('84', 'mame084s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('84', 'mame084b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_084.txt">whatsnew_084.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('83'); ?></td>
				<td class="date">05 Jun 2004</td>
				<td class="link"><?php ancient_mirror_file('83', 'mame083s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('83', 'mame083b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_083.txt">whatsnew_083.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('82'); ?></td>
				<td class="date">06 May 2004</td>
				<td class="link"><?php ancient_mirror_file('82', 'mame082s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('82', 'mame082b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_082.txt">whatsnew_082.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('81'); ?></td>
				<td class="date">01 Apr 2004</td>
				<td class="link"><?php ancient_mirror_file('81', 'mame081s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('81', 'mame081b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_081.txt">whatsnew_081.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('80'); ?></td>
				<td class="date">06 Mar 2004</td>
				<td class="link"><?php ancient_mirror_file('80', 'mame080s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('80', 'mame080b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_080.txt">whatsnew_080.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('79'); ?></td>
				<td class="date">28 Jan 2004</td>
				<td class="link"><?php ancient_mirror_file('79', 'mame079s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('79', 'mame079b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_079.txt">whatsnew_079.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2003 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('78'); ?></td>
				<td class="date">25 Dec 2003</td>
				<td class="link"><?php ancient_mirror_file('78', 'mame078s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('78', 'mame078b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_078.txt">whatsnew_078.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('77'); ?></td>
				<td class="date">11 Nov 2003</td>
				<td class="link"><?php ancient_mirror_file('77', 'mame077s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('77', 'mame077b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_077.txt">whatsnew_077.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('76'); ?></td>
				<td class="date">19 Oct 2003</td>
				<td class="link"><?php ancient_mirror_file('76', 'mame076s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('76', 'mame076b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_076.txt">whatsnew_076.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('75'); ?></td>
				<td class="date">12 Oct 2003</td>
				<td class="link"><?php ancient_mirror_file('75', 'mame075s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('75', 'mame075b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_075.txt">whatsnew_075.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('74'); ?></td>
				<td class="date">14 Sep 2003</td>
				<td class="link"><?php ancient_mirror_file('74', 'mame074s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('74', 'mame074b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_074.txt">whatsnew_074.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('73'); ?></td>
				<td class="date">03 Sep 2003</td>
				<td class="link"><?php ancient_mirror_file('73', 'mame073s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('73', 'mame073b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_073.txt">whatsnew_073.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('72'); ?></td>
				<td class="date">09 Aug 2003</td>
				<td class="link"><?php ancient_mirror_file('72', 'mame072s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('72', 'mame072b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_072.txt">whatsnew_072.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('71'); ?></td>
				<td class="date">04 Jul 2003</td>
				<td class="link"><?php ancient_mirror_file('71', 'mame071s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('71', 'mame071b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_071.txt">whatsnew_071.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('70'); ?></td>
				<td class="date">11 Jun 2003</td>
				<td class="link"><?php ancient_mirror_file('70', 'mame070s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('70', 'mame070b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_070.txt">whatsnew_070.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('69'); ?></td>
				<td class="date">23 May 2003</td>
				<td class="link"><?php ancient_mirror_file('69', 'mame069s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('69', 'mame069b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_069.txt">whatsnew_069.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('68'); ?></td>
				<td class="date">15 May 2003</td>
				<td class="link"><?php ancient_mirror_file('68', 'mame068s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('68', 'mame068b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_068.txt">whatsnew_068.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('67'); ?></td>
				<td class="date">06 Apr 2003</td>
				<td class="link"><?php ancient_mirror_file('67', 'mame067s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('67', 'mame067b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_067.txt">whatsnew_067.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('66'); ?></td>
				<td class="date">10 Mar 2003</td>
				<td class="link"><?php ancient_mirror_file('66', 'mame066s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('66', 'mame066b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_066.txt">whatsnew_066.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('65'); ?></td>
				<td class="date">10 Feb 2003</td>
				<td class="link"><?php ancient_mirror_file('65', 'mame065s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('65', 'mame065b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_065.txt">whatsnew_065.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('64'); ?></td>
				<td class="date">26 Jan 2003</td>
				<td class="link"><?php ancient_mirror_file('64', 'mame064s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('64', 'mame064b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_064.txt">whatsnew_064.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('63'); ?></td>
				<td class="date">12 Jan 2003</td>
				<td class="link"><?php ancient_mirror_file('63', 'mame063s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('63', 'mame063b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_063.txt">whatsnew_063.txt</a></td>
			</tr>
			  </table>
			  <div class="panel-footer">
				<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2002 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('62'); ?></td>
				<td class="date">12 Nov 2002</td>
				<td class="link"><?php ancient_mirror_file('62', 'mame062s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('62', 'mame062b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_062.txt">whatsnew_062.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('61'); ?></td>
				<td class="date">04 Jul 2002</td>
				<td class="link"><?php ancient_mirror_file('61', 'mame061s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('61', 'mame061b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_061.txt">whatsnew_061.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('60'); ?></td>
				<td class="date">01 May 2002</td>
				<td class="link"><?php ancient_mirror_file('60', 'mame060s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('60', 'mame060b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_060.txt">whatsnew_060.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('59'); ?></td>
				<td class="date">22 Mar 2002</td>
				<td class="link"><?php ancient_mirror_file('59', 'mame059s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('59', 'mame059b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_059.txt">whatsnew_059.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('58'); ?></td>
				<td class="date">05 Feb 2002</td>
				<td class="link"><?php ancient_mirror_file('58', 'mame058s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('58', 'mame058b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_058.txt">whatsnew_058.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('57'); ?></td>
				<td class="date">01 Jan 2002</td>
				<td class="link"><?php ancient_mirror_file('57', 'mame057s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('57', 'mame057b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_057.txt">whatsnew_057.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2001 MAME Releases</div>
		  <table class="table">
			<tr>
				<th width="16%">Version</th>
				<th width="15%">Date</th>
				<th width="23%">Source</th>
				<th width="23%">Binary (Windows)</th>
				<th width="23%">Whatsnew</th>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('56'); ?></td>
				<td class="date">01 Nov 2001</td>
				<td class="link"><?php ancient_mirror_file('56', 'mame056s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('56', 'mame056b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_056.txt">whatsnew_056.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('55'); ?></td>
				<td class="date">17 Sep 2001</td>
				<td class="link"><?php ancient_mirror_file('55', 'mame055s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('55', 'mame055b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_055.txt">whatsnew_055.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('54'); ?></td>
				<td class="date">24 Aug 2001</td>
				<td class="link"><?php ancient_mirror_file('54', 'mame054s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('54', 'mame054b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_054.txt">whatsnew_054.txt</a></td>
			</tr>
			<tr>
				<td class="date"><?php ancient_mirror_directory('53'); ?></td>
				<td class="date">12 Aug 2001</td>
				<td class="link"><?php ancient_mirror_file('53', 'mame053s.zip', 'src'); ?></td>
				<td class="link"><?php ancient_mirror_file('53', 'mame053b.zip', 'bin'); ?></td>
				<td class="link"><a href="releases/whatsnew_053.txt">whatsnew_053.txt</a></td>
			</tr>
			<tr>
				<td class="date">0.37b16 (0.52)</td>
				<td class="date">02 Jul 2001</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b16/m37b16s.zip">m37b16s.zip</a></td>-->
				<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b16s.zip">m37b16s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b16/m37b16b.zip">m37b16b.zip</a></td>-->
				<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b16b.zip">m37b16b.zip</a></td>
				<td class="link"><a href="releases/whatsnew_037b16.txt">whatsnew_037b16.txt</a></td>
			</tr>
			<tr>
				<td class="date">0.37b15 (0.51)</td>
				<td class="date">24 May 2001</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b15/m37b15s.zip">m37b15s.zip</a></td>-->
				<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b15s.zip">m37b15s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b15/m37b15b.zip">m37b15b.zip</a></td>-->
				<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b15b.zip">m37b15b.zip</a></td>
				<td class="link"><a href="releases/whatsnew_037b15.txt">whatsnew_037b15.txt</a></td>
			</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2001 DOS MAME Releases</div>
		  <table class="table">
		<tr>
			<th width="16%">Version</th>
			<th width="15%">Date</th>
			<th width="23%">Source</th>
			<th width="23%">Binary (DOS)</th>
			<th width="23%">Whatsnew</th>
		</tr>
		<tr>
			<td class="date">0.37b14 (0.50)</td>
			<td class="date">07 Apr 2001</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b14/m37b14s.zip">m37b14s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b14s.zip">m37b14s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b14/m37b14b.zip">m37b14b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b14b.zip">m37b14b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b14.txt">whatsnew_037b14.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b13 (0.49)</td>
			<td class="date">10 Mar 2001</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b13/m37b13s.zip">m37b13s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b13s.zip">m37b13s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b13/m37b13b.zip">m37b13b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b13b.zip">m37b13b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b13.txt">whatsnew_037b13.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b12 fixed</td>
			<td class="date">17 Feb 2001</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b12p1/m37b12fix.zip">m37b12fix.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b12fix.zip">m37b12fix.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b12p1/m37b12b_fix.zip">m37b12b_fix.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b12b_fix.zip">m37b12b_fix.zip</a></td>
			<td class="date">(n/a)</td>
		</tr>
		<tr>
			<td class="date">0.37b12 (0.48)</td>
			<td class="date">15 Feb 2001</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b12/m37b12s.zip">m37b12s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b12s.zip">m37b12s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b12/m37b12b.zip">m37b12b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b12b.zip">m37b12b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b12.txt">whatsnew_037b12.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b11 (0.47)</td>
			<td class="date">17 Jan 2001</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b11/m37b11s.zip">m37b11s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b11s.zip">m37b11s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b11/m37b11b.zip">m37b11b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b11b.zip">m37b11b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b11.txt">whatsnew_037b11.txt</a></td>
		</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">2000 MAME Releases</div>
		  <table class="table">
		<tr>
			<th width="16%">Version</th>
			<th width="15%">Date</th>
			<th width="23%">Source</th>
			<th width="23%">Binary (DOS)</th>
			<th width="23%">Whatsnew</th>
		</tr>
		<tr>
			<td class="date">0.37b10 (0.46)</td>
			<td class="date">05 Dec 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b10/m37b10s.zip">m37b10s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b10s.zip">m37b10s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b10/m37b10b.zip">m37b10b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b10b.zip">m37b10b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b10.txt">whatsnew_037b10.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b9 (0.45)</td>
			<td class="date">06 Nov 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b9/m37b9s.zip">m37b9s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b9s.zip">m37b9s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b9/m37b9b.zip">m37b9b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b9b.zip">m37b9b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b9.txt">whatsnew_037b9.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b8 (0.44)</td>
			<td class="date">02 Oct 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b8/m37b8s.zip">m37b8s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b8s.zip">m37b8s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b8/m37b8b.zip">m37b8b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b8b.zip">m37b8b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b8.txt">whatsnew_037b8.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b7 (0.43)</td>
			<td class="date">05 Sep 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b7/m37b7s.zip">m37b7s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b7s.zip">m37b7s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b7/m37b7b.zip">m37b7b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b7b.zip">m37b7b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b7.txt">whatsnew_037b7.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b6 (0.42)</td>
			<td class="date">20 Aug 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b6/m37b6s.zip">m37b6s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b6s.zip">m37b6s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b6/m37b6b.zip">m37b6b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b6b.zip">m37b6b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b6.txt">whatsnew_037b6.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b5 (0.41)</td>
			<td class="date">27 Jul 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b5/m37b5s.zip">m37b5s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b5s.zip">m37b5s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b5/m37b5b.zip">m37b5b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b5b.zip">m37b5b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b5.txt">whatsnew_037b5.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b4 (0.40)</td>
			<td class="date">16 Jun 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b4/m37b4s.zip">m37b4s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b4s.zip">m37b4s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b4/m37b4b.zip">m37b4b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b4b.zip">m37b4b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b4.txt">whatsnew_037b4.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b3 (0.39)</td>
			<td class="date">27 May 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b3/m37b3s.zip">m37b3s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b3s.zip">m37b3s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b3/m37b3b.zip">m37b3b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b3b.zip">m37b3b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b3.txt">whatsnew_037b3.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b2 (0.38)</td>
			<td class="date">06 May 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b2/m37b2s.zip">m37b2s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b2s.zip">m37b2s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b2/m37b2b.zip">m37b2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b2b.zip">m37b2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b2.txt">whatsnew_037b2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.37b1 (0.37)</td>
			<td class="date">06 Apr 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b1/m37b1s.zip">m37b1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m37b1s.zip">m37b1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037b1/m37b1b.zip">m37b1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m37b1b.zip">m37b1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_037b1.txt">whatsnew_037b1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36</td>
			<td class="date">21 Mar 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036/mame036s.zip">mame036s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame036s.zip">mame036s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036/mame036b.zip">mame036b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame036b.zip">mame036b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036.txt">whatsnew_036.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36rc2</td>
			<td class="date">13 Mar 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037r2/m36rc2s.zip">m36rc2s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36rc2s.zip">m36rc2s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037r2/m36rc2b.zip">m36rc2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36rc2b.zip">m36rc2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036rc2.txt">whatsnew_036rc2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36rc1</td>
			<td class="date">26 Feb 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037r1/m36rc1s.zip">m36rc1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36rc1s.zip">m36rc1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame037r1/m36rc1b.zip">m36rc1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36rc1b.zip">m36rc1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036rc1.txt">whatsnew_036rc1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b16</td>
			<td class="date">03 Feb 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b16/m36b16s.zip">m36b16s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b16s.zip">m36b16s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b16/m36b16b.zip">m36b16b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b16b.zip">m36b16b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b16.txt">whatsnew_036b16.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b15</td>
			<td class="date">21 Jan 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b15/m36b15s.zip">m36b15s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b15s.zip">m36b15s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b15/m36b15b.zip">m36b15b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b15b.zip">m36b15b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b15.txt">whatsnew_036b15.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b14</td>
			<td class="date">10 Jan 2000</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b14/m36b14s.zip">m36b14s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b14s.zip">m36b14s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b14/m36b14b.zip">m36b14b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b14b.zip">m36b14b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b14.txt">whatsnew_036b14.txt</a></td>
		</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">1999 MAME Releases</div>
		  <table class="table">
		<tr>
			<th width="16%">Version</th>
			<th width="15%">Date</th>
			<th width="23%">Source</th>
			<th width="23%">Binary (DOS)</th>
			<th width="23%">Whatsnew</th>
		</tr>
		<tr>
			<td class="date">0.36b13</td>
			<td class="date">30 Dec 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b13/m36b13s.zip">m36b13s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b13su.zip">m36b13su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b13/m36b13b.zip">m36b13b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b13b.zip">m36b13b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b13.txt">whatsnew_036b13.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b12</td>
			<td class="date">18 Dec 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b12/m36b12s.zip">m36b12s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b12s.zip">m36b12s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b12/m36b12b.zip">m36b12b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b12b.zip">m36b12b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b12.txt">whatsnew_036b12.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b11</td>
			<td class="date">05 Dec 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b11/m36b11s.zip">m36b11s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b11s.zip">m36b11s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b11/m36b11b.zip">m36b11b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b11b.zip">m36b11b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b11.txt">whatsnew_036b11.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b10</td>
			<td class="date">20 Nov 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b10/m36b10s.zip">m36b10s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b10s.zip">m36b10s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b10/m36b10b.zip">m36b10b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b10b.zip">m36b10b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b10.txt">whatsnew_036b10.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b9.1</td>
			<td class="date">14 Nov 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b9p1/m36b91su.zip">m36b91su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b91su.zip">m36b91su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b9p1/m36b91b.zip">m36b91b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b91b.zip">m36b91b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b91.txt">whatsnew_036b91.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b9</td>
			<td class="date">13 Nov 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b9/m36b9s.zip">m36b9s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b9s.zip">m36b9s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b9/m36b9b.zip">m36b9b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b9b.zip">m36b9b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b9.txt">whatsnew_036b9.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b8</td>
			<td class="date">30 Oct 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b8/m36b8su.zip">m36b8su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b8su.zip">m36b8su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b8/m36b8b.zip">m36b8b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b8b.zip">m36b8b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b8.txt">whatsnew_036b8.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b7</td>
			<td class="date">17 Oct 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b7/m36b7s.zip">m36b7s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b7s.zip">m36b7s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b7/m36b7b.zip">m36b7b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b7b.zip">m36b7b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b7.txt">whatsnew_036b7.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b6</td>
			<td class="date">29 Sep 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b6/m36b6s.zip">m36b6s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b6s.zip">m36b6s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b6/m36b6b.zip">m36b6b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b6b.zip">m36b6b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b6.txt">whatsnew_036b6.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b5</td>
			<td class="date">18 Sep 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b5/m36b5su.zip">m36b5su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b5su.zip">m36b5su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b5/m36b5b.zip">m36b5b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b5b.zip">m36b5b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b5.txt">whatsnew_036b5.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b4</td>
			<td class="date">04 Sep 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b4/m36b4s.zip">m36b4s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b4s.zip">m36b4s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b4/m36b4b.zip">m36b4b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b4b.zip">m36b4b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b4.txt">whatsnew_036b4.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b3</td>
			<td class="date">22 Aug 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b3/m36b3s.zip">m36b3s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b3s.zip">m36b3s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b3/m36b3b.zip">m36b3b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b3b.zip">m36b3b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b3.txt">whatsnew_036b3.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b2</td>
			<td class="date">08 Aug 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b2/m36b2s.zip">m36b2s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b2s.zip">m36b2s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b2/m36b2b.zip">m36b2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b2b.zip">m36b2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b2.txt">whatsnew_036b2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.36b1</td>
			<td class="date">19 Jul 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b1/m36b1s.zip">m36b1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m36b1s.zip">m36b1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame036b1/m36b1b.zip">m36b1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m36b1b.zip">m36b1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_036b1.txt">whatsnew_036b1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35 fixed</td>
			<td class="date">05 Jul 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035p1/mame035s_fix.zip">mame035s_fix.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame035s_fix.zip">mame035s_fix.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035p1/mame035b_fix.zip">mame035b_fix.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame035b_fix.zip">mame035b_fix.zip</a></td>
			<td class="date">(n/a)</td>
		</tr>
		<tr>
			<td class="date">0.35</td>
			<td class="date">04 Jul 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035/mame035s.zip">mame035s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame035s.zip">mame035s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035/mame035b.zip">mame035b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame035b.zip">mame035b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035.txt">whatsnew_035.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35rc2</td>
			<td class="date">24 Jun 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035r2/m35rc2su.zip">m35rc2su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35rc2su.zip">m35rc2su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035r2/m35rc2b.zip">m35rc2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35rc2b.zip">m35rc2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035rc2.txt">whatsnew_035rc2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35rc1</td>
			<td class="date">13 Jun 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035r1/m35rc1s.zip">m35rc1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35rc1s.zip">m35rc1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035r1/m35rc1b.zip">m35rc1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35rc1b.zip">m35rc1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035rc1.txt">whatsnew_035rc1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b13</td>
			<td class="date">24 May 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b13/m35b13s.zip">m35b13s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b13s.zip">m35b13s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b13/m35b13b.zip">m35b13b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b13b.zip">m35b13b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b13.txt">whatsnew_035b13.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b12</td>
			<td class="date">01 May 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b12/m35b12su.zip">m35b12su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b12su.zip">m35b12su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b12/m35b12b.zip">m35b12b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b12b.zip">m35b12b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b12.txt">whatsnew_035b12.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b11</td>
			<td class="date">22 Apr 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b11/m35b11s.zip">m35b11s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b11s.zip">m35b11s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b11/m35b11b.zip">m35b11b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b11b.zip">m35b11b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b11.txt">whatsnew_035b11.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b10</td>
			<td class="date">08 Apr 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b10/m35b10s.zip">m35b10s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b10s.zip">m35b10s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b10/m35b10b.zip">m35b10b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b10b.zip">m35b10b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b10.txt">whatsnew_035b10.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b9</td>
			<td class="date">30 Mar 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b9/m35b9s.zip">m35b9s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b9s.zip">m35b9s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b9/m35b9b.zip">m35b9b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b9b.zip">m35b9b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b9.txt">whatsnew_035b9.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b8</td>
			<td class="date">24 Mar 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b8/m35b8s.zip">m35b8s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b8s.zip">m35b8s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b8/m35b8b.zip">m35b8b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b8b.zip">m35b8b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b8.txt">whatsnew_035b8.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b7</td>
			<td class="date">18 Mar 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b7/m35b7s.zip">m35b7s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b7s.zip">m35b7s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b7/m35b7b.zip">m35b7b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b7b.zip">m35b7b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b7.txt">whatsnew_035b7.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b6</td>
			<td class="date">15 Mar 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b6/m35b6s.zip">m35b6s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b6s.zip">m35b6s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b6/m35b6b.zip">m35b6b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b6b.zip">m35b6b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b6.txt">whatsnew_035b6.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b5</td>
			<td class="date">07 Mar 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b5/m35b5su.zip">m35b5su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b5su.zip">m35b5su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b5/m35b5b.zip">m35b5b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b5b.zip">m35b5b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b5.txt">whatsnew_035b5.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b4</td>
			<td class="date">01 Mar 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b4/m35b4su.zip">m35b4su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b4su.zip">m35b4su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b4/m35b4b.zip">m35b4b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b4b.zip">m35b4b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b4.txt">whatsnew_035b4.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b3</td>
			<td class="date">15 Feb 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b3/m35b3s.zip">m35b3s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b3s.zip">m35b3s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b3/m35b3b.zip">m35b3b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b3b.zip">m35b3b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b3.txt">whatsnew_035b3.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b2</td>
			<td class="date">24 Jan 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b2/m35b2s.zip">m35b2s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b2s.zip">m35b2s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b2/m35b2b.zip">m35b2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b2b.zip">m35b2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b2.txt">whatsnew_035b2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.35b1</td>
			<td class="date">07 Jan 1999</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b1/m35b1s.zip">m35b1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m35b1s.zip">m35b1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame035b1/m35b1b.zip">m35b1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m35b1b.zip">m35b1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_035b1.txt">whatsnew_035b1.txt</a></td>
		</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">1998 MAME Releases</div>
		  <table class="table">
		<tr>
			<th width="16%">Version</th>
			<th width="15%">Date</th>
			<th width="23%">Source</th>
			<th width="23%">Binary (DOS)</th>
			<th width="23%">Whatsnew</th>
		</tr>
		<tr>
			<td class="date">0.34</td>
			<td class="date">31 Dec 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034/mame034s.zip">mame034s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame034s.zip">mame034s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034/mame034b.zip">mame034b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame034b.zip">mame034b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034.txt">whatsnew_034.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34rc2</td>
			<td class="date">21 Dec 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034r2/m34rc2su.zip">m34rc2su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34rc2su.zip">m34rc2su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034r2/m34rc2b.zip">m34rc2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34rc2b.zip">m34rc2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034rc2.txt">whatsnew_034rc2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34rc1</td>
			<td class="date">14 Dec 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034r1/m34rc1s.zip">m34rc1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34rc1s.zip">m34rc1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034r1/m34rc1b.zip">m34rc1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34rc1b.zip">m34rc1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034rc1.txt">whatsnew_034rc1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b8</td>
			<td class="date">29 Nov 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b8/m34b8s.zip">m34b8s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b8s.zip">m34b8s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b8/m34b8b.zip">m34b8b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b8b.zip">m34b8b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b8.txt">whatsnew_034b8.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b7</td>
			<td class="date">10 Nov 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b7/m34b7s.zip">m34b7s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b7s.zip">m34b7s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b7/m34b7b.zip">m34b7b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b7b.zip">m34b7b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b7.txt">whatsnew_034b7.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b6</td>
			<td class="date">28 Oct 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b6/m34b6su.zip">m34b6su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b6su.zip">m34b6su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b6/m34b6b.zip">m34b6b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b6b.zip">m34b6b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b6.txt">whatsnew_034b6.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b5</td>
			<td class="date">16 Oct 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b5/m34b5su.zip">m34b5su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b5su.zip">m34b5su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b5/m34b5b.zip">m34b5b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b5b.zip">m34b5b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b5.txt">whatsnew_034b5.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b4</td>
			<td class="date">04 Oct 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b4/m34b4s.zip">m34b4s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b4s.zip">m34b4s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b4/m34b4b.zip">m34b4b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b4b.zip">m34b4b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b4.txt">whatsnew_034b4.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b3</td>
			<td class="date">17 Sep 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b3/m34b3su.zip">m34b3su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b3su.zip">m34b3su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b3/m34b3b.zip">m34b3b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b3b.zip">m34b3b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b3.txt">whatsnew_034b3.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b2</td>
			<td class="date">30 Aug 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b2/m34b2su.zip">m34b2su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b2su.zip">m34b2su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b2/m34b2b.zip">m34b2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b2b.zip">m34b2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b2.txt">whatsnew_034b2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.34b1</td>
			<td class="date">16 Aug 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b1/m34b1s.zip">m34b1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m34b1s.zip">m34b1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame034b1/m34b1b.zip">m34b1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m34b1b.zip">m34b1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_034b1.txt">whatsnew_034b1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33</td>
			<td class="date">09 Aug 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033/mame033s.zip">mame033s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame033s.zip">mame033s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033/mame033b.zip">mame033b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame033b.zip">mame033b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033.txt">whatsnew_033.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33rc1</td>
			<td class="date">29 Jul 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033r1/m33rc1su.zip">m33rc1su.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33rc1su.zip">m33rc1su.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033r1/m33rc1b.zip">m33rc1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33rc1b.zip">m33rc1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033rc1.txt">whatsnew_033rc1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33b7</td>
			<td class="date">21 Jul 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b7/m33b7s.zip">m33b7s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33b7s.zip">m33b7s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b7/m33b7b.zip">m33b7b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33b7b.zip">m33b7b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033b7.txt">whatsnew_033b7.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33b6</td>
			<td class="date">16 Jun 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b6/m33b6s.zip">m33b6s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33b6s.zip">m33b6s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b6/m33b6b.zip">m33b6b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33b6b.zip">m33b6b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033b6.txt">whatsnew_033b6.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33b5</td>
			<td class="date">10 Jun 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b5/m33b5s.zip">m33b5s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33b5s.zip">m33b5s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b5/m33b5b.zip">m33b5b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33b5b.zip">m33b5b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033b5.txt">whatsnew_033b5.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33b4</td>
			<td class="date">31 May 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b4/m33b4s.zip">m33b4s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33b4s.zip">m33b4s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b4/m33b4b.zip">m33b4b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33b4b.zip">m33b4b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033b4.txt">whatsnew_033b4.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33b3</td>
			<td class="date">17 May 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b3/m33b3s.zip">m33b3s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33b3s.zip">m33b3s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b3/m33b3b.zip">m33b3b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33b3b.zip">m33b3b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033b3.txt">whatsnew_033b3.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33b2</td>
			<td class="date">08 May 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b2/m33b2s.zip">m33b2s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33b2s.zip">m33b2s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b2/m33b2b.zip">m33b2b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33b2b.zip">m33b2b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033b2.txt">whatsnew_033b2.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.33b1</td>
			<td class="date">03 May 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b1/m33b1s.zip">m33b1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/m33b1s.zip">m33b1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame033b1/m33b1b.zip">m33b1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/m33b1b.zip">m33b1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_033b1.txt">whatsnew_033b1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.31</td>
			<td class="date">25 Apr 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame031/mame031s.zip">mame031s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame031s.zip">mame031s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame031/mame031b.zip">mame031b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame031b.zip">mame031b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_031.txt">whatsnew_031.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.30</td>
			<td class="date">08 Jan 1998</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame030/mame030s.zip">mame030s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame030s.zip">mame030s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame030/mame030b.zip">mame030b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame030b.zip">mame030b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_030.txt">whatsnew_030.txt</a></td>
		</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">1997 MAME Releases</div>
		  <table class="table">
		<tr>
			<th width="16%">Version</th>
			<th width="15%">Date</th>
			<th width="23%">Source</th>
			<th width="23%">Binary (DOS)</th>
			<th width="23%">Whatsnew</th>
		</tr>
		<tr>
			<td class="date">0.29</td>
			<td class="date">20 Oct 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame029/mame029s.zip">mame029s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame029s.zip">mame029s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame029/mame029b.zip">mame029b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame029b.zip">mame029b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_029.txt">whatsnew_029.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.28</td>
			<td class="date">07 Sep 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame028/mame028s.zip">mame028s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame028s.zip">mame028s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame028/mame028b.zip">mame028b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame028b.zip">mame028b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_028.txt">whatsnew_028.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.27</td>
			<td class="date">10 Aug 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame027/mame027s.zip">mame027s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame027s.zip">mame027s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame027/mame027b.zip">mame027b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame027b.zip">mame027b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_027.txt">whatsnew_027.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.26.1</td>
			<td class="date">18 Jul 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame026p1/mame261s.zip">mame261s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame261s.zip">mame261s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame026p1/mame261b.zip">mame261b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame261b.zip">mame261b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_261.txt">whatsnew_261.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.26</td>
			<td class="date">14 Jul 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame026/mame026s.zip">mame026s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame026s.zip">mame026s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame026/mame026b.zip">mame026b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame026b.zip">mame026b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_026.txt">whatsnew_026.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.25</td>
			<td class="date">28 Jun 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame025/mame025s.zip">mame025s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame025s.zip">mame025s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame025/mame025b.zip">mame025b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame025b.zip">mame025b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_025.txt">whatsnew_025.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.24</td>
			<td class="date">13 Jun 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame024/mame024s.zip">mame024s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame024s.zip">mame024s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame024/mame024b.zip">mame024b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame024b.zip">mame024b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_024.txt">whatsnew_024.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.23.1</td>
			<td class="date">03 Jun 1997</td>
			<td class="date">(n/a)</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame023/mame231b.zip">mame231b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame231b.zip">mame231b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_231.txt">whatsnew_231.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.23</td>
			<td class="date">02 Jun 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame023/mame023s.zip">mame023s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame023s.zip">mame023s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame023/mame023b.zip">mame023b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame023b.zip">mame023b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_023.txt">whatsnew_023.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.22</td>
			<td class="date">25 May 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame022/mame022s.zip">mame022s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame022s.zip">mame022s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame022/mame022b.zip">mame022b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame022b.zip">mame022b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_022.txt">whatsnew_022.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.21.5</td>
			<td class="date">16 May 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame021p5/mame215s.zip">mame215s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame215s.zip">mame215s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame021p5/mame215b.zip">mame215b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame215b.zip">mame215b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_215.txt">whatsnew_215.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.21</td>
			<td class="date">12 May 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame021/mame021s.zip">mame021s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame021s.zip">mame021s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame021/mame021b.zip">mame021b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame021b.zip">mame021b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_021.txt">whatsnew_021.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.20</td>
			<td class="date">05 May 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame020/mame020s.zip">mame020s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame020s.zip">mame020s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame020/mame020b.zip">mame020b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame020b.zip">mame020b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_020.txt">whatsnew_020.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.19</td>
			<td class="date">26 Apr 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame019/mame019s.zip">mame019s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame019s.zip">mame019s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame019/mame019b.zip">mame019b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame019b.zip">mame019b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_019.txt">whatsnew_019.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.18</td>
			<td class="date">20 Apr 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame018/mame018s.zip">mame018s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame018s.zip">mame018s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame018/mame018b.zip">mame018b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame018b.zip">mame018b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_018.txt">whatsnew_018.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.17</td>
			<td class="date">14 Apr 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame017/mame017s.zip">mame017s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame017s.zip">mame017s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame017/mame017b.zip">mame017b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame017b.zip">mame017b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_017.txt">whatsnew_017.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.16</td>
			<td class="date">13 Apr 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame016/mame016s.zip">mame016s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame016s.zip">mame016s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame016/mame016b.zip">mame016b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame016b.zip">mame016b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_016.txt">whatsnew_016.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.15</td>
			<td class="date">06 Apr 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame015/mame015s.zip">mame015s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame015s.zip">mame015s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame015/mame015b.zip">mame015b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame015b.zip">mame015b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_015.txt">whatsnew_015.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.14</td>
			<td class="date">02 Apr 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame014/mame014s.zip">mame014s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame014s.zip">mame014s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame014/mame014b.zip">mame014b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame014b.zip">mame014b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_014.txt">whatsnew_014.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.13</td>
			<td class="date">26 Mar 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame013/mame013s.zip">mame013s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame013s.zip">mame013s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame013/mame013b.zip">mame013b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame013b.zip">mame013b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_013.txt">whatsnew_013.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.12</td>
			<td class="date">23 Mar 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame012/mame012s.zip">mame012s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame012s.zip">mame012s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame012/mame012b.zip">mame012b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame012b.zip">mame012b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_012.txt">whatsnew_012.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.11</td>
			<td class="date">16 Mar 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame011/mame011s.zip">mame011s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame011s.zip">mame011s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame011/mame011b.zip">mame011b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame011b.zip">mame011b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_011.txt">whatsnew_011.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.10</td>
			<td class="date">13 Mar 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame010/mame010s.zip">mame010s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame010s.zip">mame010s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame010/mame010b.zip">mame010b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame010b.zip">mame010b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_010.txt">whatsnew_010.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.9.1</td>
			<td class="date">09 Mar 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame09p1/mame09_1s.zip">mame09_1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame09_1s.zip">mame09_1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame09p1/mame09_1b.zip">mame09_1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame09_1b.zip">mame09_1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_09_1.txt">whatsnew_09_1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.9</td>
			<td class="date">09 Mar 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame09/mame09s.zip">mame09s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame09s.zip">mame09s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame09/mame09b.zip">mame09b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame09b.zip">mame09b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_09.txt">whatsnew_09.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.8.1</td>
			<td class="date">04 Mar 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame08p1/mame08_1s.zip">mame08_1s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame08_1s.zip">mame08_1s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame08p1/mame08_1b.zip">mame08_1b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame08_1b.zip">mame08_1b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_08_1.txt">whatsnew_08_1.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.8</td>
			<td class="date">04 Mar 1997</td>
			<td class="date">(n/a)</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame08p1/mame08b.zip">mame08b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame08b.zip">mame08b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_08.txt">whatsnew_08.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.7</td>
			<td class="date">27 Feb 1997</td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame07/mame07s.zip">mame07s.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/src/mame07s.zip">mame07s.zip</a></td>
<!--			<td class="link"><a href="https://github.com/mamedev/historic-mame/releases/download/mame07/mame07b.zip">mame07b.zip</a></td>-->
			<td class="link"><a href="http://www.progettosnaps.net/MAME/bin/mame07b.zip">mame07b.zip</a></td>
			<td class="link"><a href="releases/whatsnew_07.txt">whatsnew_07.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.6</td>
			<td class="date">23 Feb 1997</td>
<!--			<td class="link" colspan="2"><a href="https://github.com/mamedev/historic-mame/releases/download/mame06/mame06.zip">mame06.zip</a></td>-->
			<td class="link" colspan="2" align="center"><a href="http://www.progettosnaps.net/MAME/bin/mame06.zip">mame06.zip</a></td>
			<td class="link"><a href="releases/whatsnew_06.txt">whatsnew_06.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.5</td>
			<td class="date">20 Feb 1997</td>
<!--			<td class="link" colspan="2"><a href="https://github.com/mamedev/historic-mame/releases/download/mame05/mame05.zip">mame05.zip</a></td>-->
			<td class="link" colspan="2" align="center"><a href="http://www.progettosnaps.net/MAME/bin/mame05.zip">mame05.zip</a></td>
			<td class="link"><a href="releases/whatsnew_05.txt">whatsnew_05.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.4</td>
			<td class="date">16 Feb 1997</td>
<!--			<td class="link" colspan="2"><a href="https://github.com/mamedev/historic-mame/releases/mame04/releases/mame04.zip">mame04.zip</a></td>-->
			<td class="link" colspan="2" align="center"><a href="http://www.progettosnaps.net/MAME/bin/mame04.zip">mame04.zip</a></td>
			<td class="link"><a href="releases/whatsnew_04.txt">whatsnew_04.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.3</td>
			<td class="date">13 Feb 1997</td>
<!--			<td class="link" colspan="2"><a href="https://github.com/mamedev/historic-mame/releases/mame03/releases/mame03.zip">mame03.zip</a></td>-->
			<td class="link" colspan="2" align="center"><a href="http://www.progettosnaps.net/MAME/bin/mame03.zip">mame03.zip</a></td>
			<td class="link"><a href="releases/whatsnew_03.txt">whatsnew_03.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.2</td>
			<td class="date">09 Feb 1997</td>
<!--			<td class="link" colspan="2"><a href="https://github.com/mamedev/historic-mame/releases/download/mame02/mame02.zip">mame02.zip</a></td>-->
			<td class="link" colspan="2" align="center"><a href="http://www.progettosnaps.net/MAME/bin/mame02.zip">mame02.zip</a></td>
			<td class="link"><a href="releases/readme_02.txt">readme_02.txt</a></td>
		</tr>
		<tr>
			<td class="date">0.1</td>
			<td class="date">05 Feb 1997</td>
<!--			<td class="link" colspan="2"><a href="https://github.com/mamedev/historic-mame/releases/download/mame01/mame01.zip">mame01.zip</a></td>-->
			<td class="link" colspan="2" align="center"><a href="http://www.progettosnaps.net/MAME/bin/mame01.zip">mame01.zip</a></td>
			<td class="link"><a href="releases/readme_01.txt">readme_01.txt</a></td>
		</tr>
		  </table>
		  <div class="panel-footer">
			<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
		  </div>
		</div>

        <!-- content end -->
    </div>
    <!-- /.container -->
	<br/><br/><br/>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
