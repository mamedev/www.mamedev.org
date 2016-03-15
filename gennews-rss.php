<?php
header("Content-Type: application/rss+xml");
echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"); 
?>
<rss version="2.0">
	<channel>
		<title><?php echo($pagetitle); ?></title>
		<link>http://mamedev.org/</link>
		<description>The Official Site of the MAME Development Team</description>
		<language>en-us</language>
		<pubDate><?php echo(date('r', getposttimestamp($postfiles[0]))); ?></pubDate>
		<lastBuildDate><?php echo(date('r')); ?></lastBuildDate>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>

		<?php
		for ($index = 0; $index < count($entries); $index++)
		{
			$data = file($postpath . "/" . $entries[$index]);

			echo("\t\t<item>\n");
			echo("\t\t\t<title>" . trim(strip_tags($data[0])) . "</title>\n");
			echo("\t\t\t<link>http://mamedev.org/?p=" . getpostnumber($entries[$index]) . "</link>\n");
			echo("\t\t\t<description><![CDATA[\n");
			for ($line = 1; $line < count($data); $line++)
				echo("\t\t\t\t" . $data[$line]);
			echo("\t\t\t]]></description>\n");
			echo("\t\t\t<pubDate>" . date("r", getposttimestamp($entries[$index])) . "</pubDate>\n");
			echo("\t\t\t<guid>http://mamedev.org/?p=" . getpostnumber($entries[$index]) . "</guid>\n");
			echo("\t\t</item>\n");
		}
		?>
	</channel>
</rss>
