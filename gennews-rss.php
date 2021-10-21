<?php
header("Content-Type: application/rss+xml");
echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"); 
?>
<rss version="2.0">
	<channel>
		<title><?php echo($pagetitle); ?></title>
		<link>https://mamedev.org/</link>
		<description>The Official Site of the MAME Development Team</description>
		<language>en-us</language>
		<pubDate><?php echo(date('r', getposttimestamp($postfiles[0]))); ?></pubDate>
		<lastBuildDate><?php echo(date('r')); ?></lastBuildDate>
		<docs>https://cyber.harvard.edu/rss/rss.html</docs>

		<?php
		for ($index = 0; $index < count($entries); $index++)
		{
			$data = file($postpath . "/" . $entries[$index]);

			echo("\t\t<item>\n");
			echo("\t\t\t<title>" . trim(strip_tags($data[0])) . "</title>\n");
			echo("\t\t\t<link>https://mamedev.org/?p=" . getpostnumber($entries[$index]) . "</link>\n");
			echo("\t\t\t<description><![CDATA[\n");
			for ($line = 1; $line < count($data); $line++)
			{
				if (!preg_match("/\A\s*<!--\s*more\s*-->\s*$(.*)/", $data[$line]))
				{
					echo("\t\t\t\t" . $data[$line]);
				}
				else
				{
					echo("\t\t\t\t<p><a href=\"https://mamedev.org/?p=" . getpostnumber($entries[$index]) . "#readmore\">Read the rest of this entry »</a></p>\n");
					break;
				}
			}
			echo("\t\t\t]]></description>\n");
			echo("\t\t\t<pubDate>" . date("r", getposttimestamp($entries[$index])) . "</pubDate>\n");
			echo("\t\t\t<guid>https://mamedev.org/?p=" . getpostnumber($entries[$index]) . "</guid>\n");
			echo("\t\t</item>\n");
		}
		?>
	</channel>
</rss>
