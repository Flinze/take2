<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Take2 - Recipe List</title>
	<meta charset="utf-8">

	<!-- Title bar icon -->
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
	<!-- Wrapper -->
	<div id="wrapper" class="container-fluid">

		<!-- Header and navigation bar -->
		<?php include('header.php') ?>

		<!-- Scroll Bar -->
		<div id="scrollbar-container" class="col-1 col-offset-11">
			<div class="scrollbox"><a data-tile="1" href="#recipe-a">A</a></div>
			<div class="scrollbox"><a data-action="start" href="#recipe-b">B</a></div> <!-- The start of an Easter Egg -->
			<div class="scrollbox"><a data-tile="2" href="#recipe-c">C</a></div>
			<div class="scrollbox"><a data-tile="3" href="#recipe-d">D</a></div>
			<div class="scrollbox"><a data-tile="4" href="#recipe-e">E</a></div>
			<div class="scrollbox"><a data-tile="5" href="#recipe-f">F</a></div>
			<div class="scrollbox"><a data-tile="6" href="#recipe-g">G</a></div>
			<div class="scrollbox"><a data-tile="7" href="#recipe-h">H</a></div>
			<div class="scrollbox"><a data-tile="8" href="#recipe-i">I</a></div>
			<div class="scrollbox"><a data-tile="9" href="#recipe-j">J</a></div>
			<div class="scrollbox"><a data-tile="10" href="#recipe-k">K</a></div>
			<div class="scrollbox"><a data-tile="11" href="#recipe-l">L</a></div>
			<div class="scrollbox"><a data-tile="12" href="#recipe-m">M</a></div>
			<div class="scrollbox"><a data-tile="13" href="#recipe-n">N</a></div>
			<div class="scrollbox"><a data-tile="14" href="#recipe-o">O</a></div>
			<div class="scrollbox"><a data-tile="15" href="#recipe-p">P</a></div>
			<div class="scrollbox"><a data-tile="16" href="#recipe-q">Q</a></div>
			<div class="scrollbox"><a data-tile="17" href="#recipe-r">R</a></div>
			<div class="scrollbox"><a data-tile="18" href="#recipe-s">S</a></div>
			<div class="scrollbox"><a data-tile="19" href="#recipe-t">T</a></div>
			<div class="scrollbox"><a data-tile="20" href="#recipe-u">U</a></div>
			<div class="scrollbox"><a data-tile="21" href="#recipe-v">V</a></div>
			<div class="scrollbox"><a data-tile="22" href="#recipe-w">W</a></div>
			<div class="scrollbox"><a data-tile="23" href="#recipe-x">X</a></div>
			<div class="scrollbox"><a data-tile="24" href="#recipe-y">Y</a></div>
			<div class="scrollbox"><a data-tile="25" href="#recipe-z">Z</a></div>
		</div>

		<!-- Main Content -->
		<main class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">

			<div class="major-title" id="recipe-title">
				Recipes <i class="fa fa-spoon"></i>
			</div>

			<!-- Filters -->
            <div class="minor-title">
                <br>
                <button type="button" id="filter-button" class="btn btn-block btn-primary" data-toggle="collapse" data-target="#filtering">
                    Dietary Filters <span class="glyphicon glyphicon-filter"></span>
                </button>
                <br>
                <div id="filtering" class ="collapse text-center">
                    <div onclick="recipeFilter()" class="pretty o-info">
                        <input type="checkbox" name="gluten-free"/>
                        <label><i class="glyphicon glyphicon-ok"></i> Gluten-Free</label>
                    </div>
                    <div onclick="recipeFilter()" class="pretty o-info">
                        <input type="checkbox" name="vegetarian"/>
                        <label><i class="glyphicon glyphicon-ok"></i> Vegetarian</label>
                    </div>
                    <div onclick="recipeFilter()" class="pretty o-info">
                        <input type="checkbox" name="dairy-free"/>
                        <label><i class="glyphicon glyphicon-ok"></i> Dairy-Free</label>
                    </div>

                </div>
            </div>


			<div id="recipe-a" class="minor-title">
			A
                <div id="avocado-bananas2" class="recList gluten-free vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado and Banana Yogurt</h5></div>
                <div id="avocado-bananas1" class="recList vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Banana Pudding</h5></div>
                <div id="avocado-bananas4" class="recList gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Smoothie</h5></div>
			</div>
			<div id="recipe-b" class="minor-title">
			B
								<div id="lettuce-tomatoes3" class="recList nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Bacon, Lettuce, and Tomato Sandwich</h5></div>
								<div id="cheese-lettuce2" class="recList gluten-free vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Bacon, Lettuce, and Tomato Grill Cheese Sandwich</h5></div>
								<div id="avocado-beef3" class="recList gluten-free dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Baja Beef Avocado Bowls Recipe</h5></div>
								<div id="avocado-bread2" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Baked Avocado Fries</h5></div>
								<div id="egg-potatoes2" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Baked Cheddar Egg and Potatoes</h5></div>
								<div id="avocado-egg2" class="recList gluten-free vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Baked Eggs in Avocado </h5></div>
								<div id="egg-tomatoes3" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Baked Eggs in Tomato Cups</h5></div>
								<div id="bread-tomatoes3" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Baked Tomatoes with Crusty Bread</h5></div>
								<div id="bananas-beef3" class="recList gluten-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana and Beef Bar (Pets)</h5></div>
								<div id="bananas-bread3" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana and Cinnamon Toast</h5></div>
								<div id="bananas-chicken1" class="recList gluten-free dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana Chicken</h5></div>
								<div id="bananas-bread1" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana French Toast</h5></div>
								<div id="bananas-potatoes1" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Bananas Mashed Potatoes</h5></div>
								<div id="bananas-potatoes2" class="recList egetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana Potato Salad</h5></div>
								<div id="bananas-tomatoes3" class="recList gluten-free vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana Salsa</h5></div>
								<div id="bananas-tomatoes1" class="recList gluten-free vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana Tomato Salad</h5></div>
								<div id="beef-chicken1" class="recList gluten-free dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Beef and Chicken Fondue</h5></div>
								<div id="beef-chicken3" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Beef and Chicken Stirfry</h5></div>
								<div id="beef-lettuce3" class="recList dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Beef and Shredded Lettuce Fry Rice</h5></div>
								<div id="beef-egg3" class="recList nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Beef Breakfast Burrito</h5></div>
								<div id="beef-bread1" class="recList dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Beef Dip</h5></div>
								<div id="beef-egg2" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Beef Fried Rice</h5></div>
								<div id="beef-potatoes1" class="recList dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Beef and Mashed Potatoes</h5></div>
								<div id="bananas-tomatoes1" class="recList dairy-free " onclick="recipeListModal($(this).attr('id'))"><h5>Beef Tomato Stirfry</h5></div>
								<div id="bread-potatoes3" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Bread Cutlet</h5></div>
								<div id="bread-chicken3" class="recList dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Breaded Chicken Fingers</h5></div>
								<div id="bread-tomatoes2" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Bruschetta</h5></div>


			<div id="recipe-c" class="minor-title">
			C
			</div>
			<div id="recipe-d" class="minor-title">
			D
			</div>
			<div id="recipe-e" class="minor-title">
			E
			</div>
			<div id="recipe-f" class="minor-title">
			F
			</div>
			<div id="recipe-g" class="minor-title">
			G
			</div>
			<div id="recipe-h" class="minor-title">
			H
			</div>
			<div id="recipe-i" class="minor-title">
			I
			</div>
			<div id="recipe-j" class="minor-title">
			J
			</div>
			<div id="recipe-k" class="minor-title">
			K
			</div>
			<div id="recipe-l" class="minor-title">
			L
			</div>
			<div id="recipe-m" class="minor-title">
			M
			</div>
			<div id="recipe-n" class="minor-title">
			N
			</div>
			<div id="recipe-o" class="minor-title">
			O
			</div>
			<div id="recipe-p" class="minor-title">
			P
			</div>
			<div id="recipe-q" class="minor-title">
			Q
			</div>
			<div id="recipe-r" class="minor-title">
			R
			</div>
			<div id="recipe-s" class="minor-title">
			S
									<div id="beef-potatoes3" class="recList gluten-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Southwest Steak and Potato Soup</h5></div>
			</div>
			<div id="recipe-t" class="minor-title">
			T
			</div>
			<div id="recipe-u" class="minor-title">
			U
			</div>
			<div id="recipe-v" class="minor-title">
			V
			</div>
			<div id="recipe-w" class="minor-title">
			W
			</div>
			<div id="recipe-x" class="minor-title">
			X
			</div>
			<div id="recipe-y" class="minor-title">
			Y
			</div>
			<div id="recipe-z" class="minor-title">
			Z
			</div>

		</main>

		<!-- Footer -->
		<?php include('footer.php'); ?>

		<!-- Alpha Scrollbar Script -->
		<script src="assets/js/recipes.scrollbar.js"></script>

		<!-- Easter Egg Scriot -->
		<script src="assets/js/easterCombo.js"></script>

	</div> <!-- Wrapper -->

    <!-- Recipe Modal -->
    <div id="recipe-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Dish Name</h4>
                </div>
                <div class="modal-body">

                    <!-- Recipe Picture -->
                    <div class="about_photo">
                        <img src="" alt="Group Photo" class="img-responsive">
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
                            </div>
                        </div>
                    </div>
                    <!--</main>-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default center-block" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div><!-- Recipe Modal -->
</body>
</html>
