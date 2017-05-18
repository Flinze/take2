<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Take2 - Game</title>
    <meta charset="utf-8" />
</head>

<body>
    <!-- Wrapper -->
  	<div id="wrapper" class="container-fluid">

  		<!-- Header and Navigation bar -->
      <?php include('header.php'); ?>

  		<!-- Main Content -->
		<main class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">


		<div class="major-title">
			Secret Game
		</div>

    <div class="game" id="game">
      <div id="info"></div>
      <div class="counter" id= "counter">00s</div>
      <div class="score">
        00
      </div>

</div>
	</main>

	<!-- Footer -->
    <?php include('footer.php'); ?>

	</div> <!-- Wrapper -->
  <script src="assets/js/easteregg-game.js"></script>
</body>
</html>
