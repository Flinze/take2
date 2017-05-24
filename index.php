<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Take2 - Home</title>

	<!-- Title bar icon -->
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	<!-- Facebook open graphic meta tags -->
	<meta property="og:url"  				  content="" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

</head>

<body>
	<!-- Wrapper -->
	<div id="wrapper" class="container-fluid" data-role="page">

		<!-- Header and Navigation Bar -->
		<?php include('header.php'); ?>

		<!-- Main Content -->
		<main class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">

			<!-- Ingredient header-->
			<div class="major-title">
				Ingredients <i class="fa fa-shopping-basket"></i>
			</div>

			<!-- Ingredient input -->
			<form data-role="none">
				<!-- First Ingredient input -->
				<div class="container">
					<select class='form-control' id='dropFirst' data-placeholder='Enter first ingredient' data-role="none" onchange="pullValues()">
						<option></option>
						<option id='Avocadof' value="avocado">Avocado</option>
						<option id='Bananasf'value="bananas">Bananas</option>
						<option id="Beeff" value="beef">Beef</option>
						<option id="Breadf" value="bread">Bread</option>
						<option id="Cheesef" value="cheese">Cheese</option>
						<option id="Chickenf" value="chicken">Chicken</option>
						<option id="Eggf" value="egg">Egg</option>
						<option id="Lettucef" value="lettuce">Lettuce</option>
						<option id="Potatoesf" value="potatoes">Potatoes</option>
						<option id="Tomatoesf" value="tomatoes">Tomatoes</option>
					</select>
				</div>

				<!-- Second Ingredient input -->
				<div class="container">
					<select class='form-control' id='dropSecond' data-placeholder='Enter second ingredient' data-role="none" onchange="pullValues()">
						<option></option>
						<option id='Avocado' value="avocado">Avocado</option>
						<option id='Bananas'value="bananas">Bananas</option>
						<option id="Beef" value="beef">Beef</option>
						<option id="Bread" value="bread">Bread</option>
						<option id="Cheese" value="cheese">Cheese</option>
						<option id="Chicken" value="chicken">Chicken</option>
						<option id="Egg" value="egg">Egg</option>
						<option id="Lettuce" value="lettuce">Lettuce</option>
						<option id="Potatoes" value="potatoes">Potatoes</option>
						<option id="Tomatoes" value="tomatoes">Tomatoes</option>
				  </select>
				</div>

			</form>

			<!-- How to use collapse box-->
			<div id='container'>
				<div class="panel panel-default">

					<!-- How to use header -->
					<div class="panel-heading">
						<h4 class="panel-title">
							<a for='collapseOne' id="how-to-use-toggle" data-toggle="collapse" href="#how-to-use-box">How To Use Take2</a>
						</h4>
					</div>

					 <!-- How to inner box -->
					<div id="how-to-use-box" class="panel-collapse collapse in container">
						<div id="how-to-use-inner" class="">
							<ol>
								<li>Enter two different ingredients in the form above</li>
								<li>Browse the list of dishes below</li>
								<li>More details are provided for each dish by clicking on their respective name</li>
								<li>Users may also browse all dishes <a href="recipes.php">here</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>

			<!-- Dishes Header -->
			<div class="major-title">
			Dishes <i class="fa fa-cutlery"></i>
			</div>
			<div class="container" id="dishes">
			</div>



		</main>

		<!-- Footer -->
		<?php include('footer.php'); ?>

	</div> <!-- Wrapper -->
    <!-- Recipe Modal -->
    <div id="recipe-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Dish Name</h4>
                </div>
								<div class="modal-header">
                    <div id='ratingModalAverage'></div>
										<div id='ratingModalCaption'></div>

										<!-- Twitter sharing widget -->
										<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a>
										<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

										<!-- Google Plus sharing widget -->
										<!-- Place this tag in your head or just before your close body tag. -->
										<script src="https://apis.google.com/js/platform.js" async defer></script>

										<!-- Place this tag where you want the share button to render. -->
										<div class="g-plus" data-action="share" style="width:100px;"></div>
								</div>

                <div class="modal-body">
                    <!--<main class="col-xs-12 col-lg-8 col-lg-offset-2">-->

                        <!-- Recipe Picture -->
                        <div class="about_photo">
                            <img src="" alt="Recipe Photo" class="img-responsive">
                        </div>
								</div>

								<!-- Modal Rating User -->
								<div class="modal-header">
                    <div id='ratingModalUser'></div>
										<div id='ratingModalUserCaption'></div>
                </div>
				<div class = 'modal-body'>

                        <!-- Prep Time -->
                        <div class="minor-title-recipe">
                            <div class="row">
                                <div class="col-xs-6">
                                    Prep. Time <span class="glyphicon glyphicon-time"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="prep-time">
                                </div>
                            </div>
                        </div>

                        <!-- Ingredients -->
                        <div class="minor-title-recipe">
                            <div class="row">
                                <div class="col-xs-4">
                                    Ingredients
                                </div>
                            </div>
                        </div>

                        <!-- Ingredient List -->
                        <div class="row">
                            <div class="col-xs-11">
                                <div class="recipe-ingredient-list">
                                </div>
                            </div>
                        </div>

                        <!-- Direction Title -->
                        <div class="minor-title-recipe">
                            <div class="row">
                                <div class="col-xs-4">
                                    Directions
                                </div>
                            </div>
                        </div>

                        <!-- Directions -->
                        <div class="row">
                            <div class="col-xs-10">
                                <div class="recipe-directions-list">
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="source">
                                <br>
                                <a>Source</a>
                            </div>
                        </div>
                    </div>
                    <!--</main>-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default center-block" data-dismiss="modal" onclick="cleanURL()">Close</button>
                </div>
            </div>

        </div>
    </div><!-- Recipe Modal -->

    <script src="assets/js/directLink.js"></script> <!-- Javascript for index page ONLY.  Links coming from social media will redirect to the modal with the corresponding recipe. -->
		<script src="assets/js/socialMediaSharing.js"></script> <!-- JS for facebook sharing -->
</body>
</html>
