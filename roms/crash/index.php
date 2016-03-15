<?php
$title = 'MAME | Crash (Exidy, 1979)';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Crash (Exidy, 1979)</h1></center>
						<p>
						Thanks to the kind generosity of H.R. Kaufmann, president of Xidy, the original ROM images for 
						<b>Crash</b> have been made available for free, non-commercial use.
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
						<a href="crash.zip" onclick="return isChecked();" title="Download now"  class="btn-success"><h4>Download the Crash ROM images</h4></a>
						<form name="agreeform" action="#">
							<input type="checkbox" name="agree" />
							I understand that these ROM images are for non-commercial use only
						</form>
						</a>
						</center>
						
					<h2>Description</h2>

					<p>
					<b>Crash</b> is a two-dimensional maze racing game designed and programmed by Edward Valeau of
					Exidy in 1979. You "control" a car with no brakes which moves at either slow or fast speed
					through a maze containing dots. At the same time, one or more computer controlled cars run
					through the same maze in the opposite direction with the intention of ramming you. At each of
					four junctions in the maze, you have the option of changing lanes to avoid the oncoming cars.
					The objective is to pick up all the dots before the computer takes you out.
					</p>

					Tips &amp; Tricks:
					<ul>
					<li>
					Always be aware of where the Jam Car(s) is/are located. They can make up to two lane 
					changes at a time, and that lane change may be into your lane.
					</li>
					
					<li>
					The faster you go, the fewer lanes you can cross. At full acceleration, you will only be able 
					to change one lane at a time. Decelerate (take your finger off the accelerate button) to go 
					across multiple lanes.
					</li>

					<li>
					The Jam Car(s) always travel in a clockwise motion while you travel in a counterclockwise 
					motion. Remember that so that you don't get confused when there are multiple cars in the 
					maze.
					</li>
					
					<li>
					Don't try to get all the dots on one of the lanes. You need to anticipate where your next move 
					is well before you enter the lane change area since you cannot change lanes at any other time. 
					Sometimes, on the earlier levels, it is best to do a staggered type dot pickup where you do 
					lane one, change to lane two, to lane three, lane four, lane five, then back to lane one. If 
					you time it right, the Jam Car or Cars will still be in the maze.
					</li>
					
					<li>
					Don't let the speed of the Jam Car(s) throw you. Just plan to be out of your lane and in the 
					lane change area before them. If both cars enter at the same time, you run a big risk of a 
					collision.
					</li>
					</ul>

				<div>
					<h2>Screenshots</h2>
					<img src="0000.png" width="320" height="240" alt="Exidy Crash Screenshot" />
					<img src="0001.png" width="320" height="240" alt="Exidy Crash Screenshot" />
					<img src="0003.png" width="320" height="240" alt="Exidy Crash Screenshot" />
					<img src="0004.png" width="320" height="240" alt="Exidy Crash Screenshot" />
				</div>

					<h2>Additional Images</h2>
					<img src="crash-cabinet.jpg" width="300" height="622" alt="Exidy Crash cabinet" />
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>