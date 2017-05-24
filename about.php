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
		
		<blockquote>
			Segal Au - Jenny Ly - Jeff Choy - Andrew Le - Felix Lin
			<br>
			<br>
			<i>"Must have fun"</i>
		</blockquote>

		<div class="major-title">
			<i class="fa fa-male"></i><i class="fa fa-female"></i>The Flock<i class="fa fa-male"></i><i class="fa fa-male"></i><i class="fa fa-male"></i>
		</div>

		<p>
		There was an idea, called the Flock Initiative. The idea was to bring together of remarkable people, see if they could become something more, see if they can work together when we needed them to. To fight the battles that we never could.
		</p>
		<div class="vid-title-container">
			<div class="major-title">
				30 Second Pitch
			</div>
			<p> Oh, you're still here! You must have a lot of spare time. Well then, take a look at our 30 second pitch.</p>
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
