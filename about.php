<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Take2 - About</title>
    <meta charset="utf-8" />
	
	<!-- Title bar icon -->
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Wrapper -->
  	<div id="wrapper" class="container-fluid">

  		<!-- Header and Navigation bar -->
      <?php include('header.php'); ?>

  		<!-- Main Content -->
		<main class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">

		<div class="major-title">
			About Us
		</div>

		<div class="about_photo">
			<img id="team-photo" src="img/about/group.jpg" alt="Group Photo" onclick="imageChange()">
		</div>
		
		<div id="flock-intro">
			Segal Au - Jenny Ly - Jeff Choy - Andrew Le - Felix Lin
			<br>
			<br>
			<i>
			"There was an idea, called the <b>Flock</b> Initiative. The idea was to bring together a group of remarkable people, to see if they could become something more, see if they can work together when we needed them to, and overcome challenges too great for one person."
			</i>
		</div>

		<div class="major-title">
			<i class="fa fa-male"></i><i class="fa fa-female"></i> The Flock <i class="fa fa-male"></i><i class="fa fa-male"></i><i class="fa fa-male"></i>
		</div>

		<p id="flock-bio">
		&emsp;&emsp;The Flock is made up of level one students in BCIT's Computer System Technology program.
		</p>
		
		<br>
		
		<!-- 30s pitch easter egg -->
		<div class="vid-title-container">
			<div class="major-title">
				<i class="fa fa-hourglass"></i> 30 Second Pitch <i class="fa fa-hourglass-o"></i>
			</div>
			
			<h4>Oh! You're still here after 30 seconds. Please check out our 30 second video pitch!</h4><br>
			
			<div class="vid-container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Q-hQLBQn9Lw" frameborder="0" allowfullscreen></iframe>
			</div>
			<br>
		</div>
		
	</main>

	<!-- Footer -->
    <?php include('footer.php'); ?>

	</div> <!-- Wrapper -->
</body>
</html>
