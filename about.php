<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Take2 - About</title>
    <meta charset="utf-8" />
		<style>
		.vid-title-container {
			display: none;
		}
		.vid-container {
    position: relative;
    padding-bottom: 50%;
    padding-top: 35px;
		height: 0;
		overflow: hidden;
		padding-left: 0px;
		padding-right: 0px;
}

.vid-container iframe,
.vid-container object,
.vid-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>
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
			<img id="team-photo" src="img/about/friends.jpg" alt="Group Photo" onclick="imageChange()">
		</div>

		<div class="major-title">
			<i class="fa fa-male"></i><i class="fa fa-male">The Flock Project
			</i><i class="fa fa-female"></i><i class="fa fa-male"></i><i class="fa fa-male"></i>
		</div>

		<p>
		One Two Three
		One Two Three
		One Two Three
		One Two Three
		One Two Three
		One Two Three
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
