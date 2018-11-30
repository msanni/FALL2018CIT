<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>IUPUI CIT313 Final Project</h1>
  </div>


    <img src="<?php echo BASE_URL?>views/img/tech.jpg" alt="img" width="1500"/>


	<div style="float: left; width: 60%;">
		<h2>Sanni's Final Project</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra, sapien sed lacinia pharetra, nibh orci congue felis, sit amet bibendum dolor tellus eget mi. Nullam sit amet ligula at quam dignissim tempus at at neque. Cras id massa orci. Nulla congue velit eget pulvinar molestie. Vivamus ullamcorper rutrum dolor sit amet congue. In fermentum enim laoreet pharetra sagittis. Ut vestibulum eget ligula et sollicitudin. Vestibulum sed arcu dapibus, porta turpis sit amet, venenatis felis. Cras et facilisis turpis. Integer quis interdum nulla.

		</p>
	</div>
		<div style="float: right; width: 20%;"">
				<?php if(!$result) {
				 ?>



							<h1>Weather</h1>

				<form method="post" action="<?php echo BASE_URL?>home/getresults">
					<label for "zip">Enter Your Zip Code</label>
					<input type="text" name="zip" id="zip" required="zip" />
					<br/>
					<button type="submit" class="btn">Load Results</button>
				</form>

				<?php
				}

				else {



				?>


						<h1>Weather for <?php echo $weather->request->query;?></h1>
						<h4>Today's High: <?php echo $weather->weather->maxtempF;?></h4>
						<h4>Today's Low: <?php echo $weather->weather->mintempF;?></h4>


				</div>

				<?php } ?>


</div>
<?php include('views/elements/footer.php');?>
