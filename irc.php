<?php
$title = 'MAMEdev.org | Chat on IRC';

require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html');
?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">MAME Community on IRC</h1></center>

	<h2>Purpose</h2>
	<p>
	The MAME development team have set up IRC channels on the
	Libera.Chat network where you can chat with other members of the
	MAME community, including users, contributors, and developers.  This
	is a good place to ask questions about MAME development, get help
	with issues, or just talk generally with the community.
	</p>

	<h2>Rules</h2>
	<p>
	The most important rule is <em>don't be an ass</em>.  If you’re on
	good behavior and treat others well, you’ll be treated well.  Also
	see LiberaChat’s <a href="https://libera.chat/policies">policies</a>
	and <a href="https://libera.chat/guidelines">guidelines</a>.
	</p>

	<h2>Where</h2>
	<p>
	MAME’s official IRC channels are on <a
	href="ircs://irc.libera.chat:6697/">irc.libera.chat</a>.  The syntax
	for specifying the connection details varies between IRC clients.
	Here are some examples:
	</p>

	<ul>
		<li>
		HexChat uses the format <tt>irc.libera.chat/+6697</tt> (note the
		plus sign to enable TLS)
		</li>
		<li>
		In WeeChat you can use the command
		<tt>/server add Libera irc.libera.chat/6697 -ssl</tt>
		<li>
		ircII uses the format <tt>SSLIRC/irc.libera.chat:6697</tt>
		</li>
		<li>
		ZNC uses a plus sign to enable TLS:<br/>
		<tt>/msg *status AddNetwork Libera<br/>
		/msg *status JumpNetwork Libera<br/>
		/msg *status AddServer irc.libera.chat +6697</tt>
		</li>
	</ul>

	<p>
	You can also connect with a <a
	href="https://web.libera.chat/#mame">web-based IRC client</a>.
	</p>

	<p>
	Channel <href="ircs://irc.libera.chat:6697/#mame">#mame</a> is used
	for user support and developer discussion.  General social chat is
	allowed, provided it doesn’t interfere with support and development
	discussions.  Anyone can join this channel, but you must register
	your nickname and log in to talk.  (See Libera.Chat’s guides on <a
	href="https://libera.chat/guides/registration">nickname
	registration</a> and <a href="https://libera.chat/guides/sasl">using
	SASL</a>.)
	</p>

	<p>
	Channel <a href="ircs://irc.libera.chat:6697/##mame">##mame</a>
	(note the double hash) is a largely unmoderated channel for general
	social chat and off-topic conversations.
	</p>

	<h2>More Information About Libera.Chat</h2>
	<ul>
		<li><a href="https://libera.chat/policies">Network policies</a></li>
		<li><a href="https://libera.chat/guidelines">Guidelines, recommendations and best practices</a></li>
		<li><a href="https://libera.chat/guides/clients">Choosing an IRC client</a></li>
		<li><a href="https://libera.chat/guides/connect">Connecting to Libera.Chat</a></li>
		<li><a href="https://libera.chat/guides/sasl">Using SASL</a></li>
		<li><a href="https://libera.chat/guides/channels">Using Channels</a></li>
		<li><a href="https://libera.chat/guides/registration">Nickname Registration</a></li>
		<li><a href="https://libera.chat/guides/sendpass">Resetting your Password</a></li>
	</ul>

</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
