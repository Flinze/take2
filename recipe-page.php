<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Take2 - Recipe</title>
    <meta charset="utf-8" />

    <!-- Remove these style sheets and this comment once this page is turned into .php -->
    <link rel="stylesheet" href="assets/style/base.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Remove up to here -->
	
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
  		<main class="col-xs-12 col-lg-8 col-lg-offset-2">

        <!-- Dish Name -->
  			<div class="major-title">
  				DISH NAME
  			</div>

        <!-- Recipe Picture -->
  			<div class="about_photo">
  				<img src="img/placeholder/friedchicken.jpg" alt="Group Photo">
  			</div>

        <!-- Ingredients and Prep Time -->
        <div class="minor-title-recipe">
          <div class="row">
            <div class="col-xs-4">
              Ingredients
            </div>
    				<div class="col-xs-offset-4 col-xs-4">
              Prep. Time
            </div>
          </div>
    		 </div>

        <!-- Ingredient List -->
        <div class="row">
          <div class="recipe-ingredient-list">
            <ul>
              <li>
                Ingredient 1
              </li>
              <li>
                Ingredient 2
              </li>
              <li>
                Ingredient 3
              </li>
            </ul>
          </div>
        </div>

        <!-- Ingredients and Prep Time -->
        <div class="minor-title-recipe">
          <div class="row">
            <div class="col-xs-4">
              Directions
            </div>
          </div>
    		 </div>

        <!-- Directions -->
        <div class="row">
          <div class="col-xs-offset-1 col-xs-10">
            <div class="recipe-directions-list">
              <ul>
                <li>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </li>
                <li>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </li>
                <li>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </li>
              </ul>
            </div>
          </div>
        </div>
  		</main>

		<!-- Footer -->
		<?php include('footer.php'); ?>

	</div> <!-- Wrapper -->
</body>
</html>