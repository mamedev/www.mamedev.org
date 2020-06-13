<?php
$title = 'MAME | Victory (Exidy, 1982)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Victory (Exidy, 1982)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kauffman, founder of Exidy and later president of the
						holding company Xidy, Inc., the original ROM images for <b>Victory</b> have been made
                                                available for free, non-commercial use.
						</p>

						<p>
						Before downloading, you must acknowledge that you understand these images are to be used only for
						non-commercial purposes. Do this by checking the box below the download button.
						</p>

						<script language="JavaScript" type="text/javascript">
						function isChecked()
						{
							if (document.agreeform.agree.checked == false)
							{
								alert("Before downloading, you must acknowledge that you understand these images are to be used only for non-commercial purposes. Do this by checking the box below the download button.");
								return false;
							}
							return true;
						}
						</script>

						<center>
						<div class="btn btn-success">
						<a href="victory.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Victory ROM images</h4></a>
						<a href="victorba.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Victor Banana ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							<label for="agree">I understand that these ROM images are for non-commercial use only</label>
						</form>
						</div>
						</center>

					<h2>Description</h2>

					<p>
					<b>Victory</b> is a game which you control your Battlestar to destroy an alien
					force which has overrun your planet.  This force has installed radar and quark
					silos on your planet and use their deadly armada to drop paratroopers to the
					surface to release the quarks.  All is not lost however as your Battlestar is
					equipped capable lasers and shields as well as the &ldquo;Doomsday Device&rdquo;.
					This game was released by Exidy in 1982 and programmed by Vic Tolomei.
					Your controls are a spinner and 4 lighted buttons (Thrust, Fire, Shield and Doomsday).
					</p>

					<p>
					The hardware for this game is impressive for its time, containing multiple
					processors and speech/audio chips which add very much to the game experience.
					Later, there was an upgrade kit that was sold to convert Victory games to a
					game called &ldquo;Victor Banana&rdquo;, changing the in-game graphics to a more
					comical theme.
					</p>

				<div>
					<h2>Screenshots</h2>
					<img src="vict0000.png" width="320" height="240" alt="Exidy Victory Screenshot" />
					<img src="vict0001.png" width="320" height="240" alt="Exidy Victory Screenshot" />
					<img src="vict0002.png" width="320" height="240" alt="Exidy Victory Screenshot" />
					<img src="vict0003.png" width="320" height="240" alt="Exidy Victory Screenshot" />
					<img src="vict0004.png" width="320" height="240" alt="Exidy Victory Screenshot" />
				</div>

				<h2>Additional Images</h2>
				<img src="victory-cabinet.jpg" width="300" height="614" alt="Exidy Victory Cabinet" />

	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
