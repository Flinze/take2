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
                    <div onclick="recipeFilter()" class="pretty o-info">
                        <input type="checkbox" name="nut-free"/>
                        <label><i class="glyphicon glyphicon-ok"></i> Peanut-Free</label>
                    </div>

                </div>
            </div>


			<div id="recipe-a" class="minor-title">
			A
                <div id="beef-lettuce2" class="recList gluten-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Asian Crispy Beef</h5></div>
                <div id="cheese-potatoes3" class="recList vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Au Gratin Potato</h5></div>
                <div id="avocado-beef2" class="recList dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado and Beef Fajitas</h5></div>
                <div id="avocado-cheese2" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado and Cheese Dip</h5></div>
                <div id="avocado-potatoes3" class="recList vegetarian gluten-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado and Potato Salad</h5></div>
                <div id="avocado-bananas3" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Banana Bread</h5></div>
                <div id="avocado-bananas1" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Banana Pudding</h5></div>
                <div id="avocado-bananas2" class="recList gluten-free vegetarian nut-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Banana Yogurt</h5></div>
                <div id="avocado-cheese1" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Cheese Toast</h5></div>
                <div id="avocado-lettuce3" class="recList dairy-free nut-free gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Chicken Lettuce Wrap</h5></div>
                <div id="avocado-lettuce1" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado, Lettuce and Tomato Pita</h5></div>
                <div id="avocado-potatoes2" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Mashed Potatoes</h5></div>
                <div id="avocado-lettuce2" class="recList vegetarian gluten-free dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Salad</h5></div>
                <div id="avocado-chicken2" class="recList gluten-free dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Stuffed Chicken Breast Rolls</h5></div>
                <div id="avocado-bananas4" class="recList gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Smoothie</h5></div>
                <div id="avocado-bread1" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Toast</h5></div>

			</div>
			<div id="recipe-b" class="minor-title">
			B
			</div>
			<div id="recipe-c" class="minor-title">
			C
                <div id="cheese-tomatoes3" class="recList vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Cheese and Tomato Quesadilla</h5></div>
                <div id="lettuce-tomatoes2" class="recList vegetarian gluten-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Classic TLC Salad</h5></div>
			</div>
			<div id="recipe-d" class="minor-title">
			D
			</div>
			<div id="recipe-e" class="minor-title">
			E

								<div id="bread-lettuce2" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Egg and Lettuce Roll</h5></div>
								<div id="egg-lettuce3" class="recList vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Egg and Lettuce Sandwich</h5></div>
								<div id="egg-potatoes3" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Egg and Potato Breakfast Scramble</h5></div>
								<div id="bread-egg1" class="recList vegetarian nut-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Egg Salad Sandwich</h5></div>
								<div id="egg-lettuce2" class="recList gluten-free vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Egg Salad Wrap</h5></div>
								<div id="bread-egg3" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Egg-in-a-hole</h5></div>
			</div>
			<div id="recipe-f" class="minor-title">
			F
								<div id="bananas-cheese1" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Fig Banana Cheese Frittata</h5></div>
								<div id="bananas-egg2" class="recList gluten-free vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Flourless Egg and Banana Cupcake</h5></div>
								<div id="bananas-egg1" class="recList gluten-free vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Flourless Egg and Banana Pancakes</h5></div>
								<div id="bread-egg2" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>French Toast</h5></div>
			<div id="recipe-g" class="minor-title">
			G
								<div id="bread-chicken2" class="recList nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Garlic Cheddar Chicken</h5></div>
								<div id="chicken-potatoes2" class="recList gluten-free dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Garlic Chicken with Potatoes</h5></div>
								<div id="bread-cheese1" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Grilled Cheese</h5></div>
								<div id="cheese-egg3" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Grilled Cheese Eggsplosion</h5></div>
								<div id="cheese-tomatoes1" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Grilled Cheese Tomato Sandwich</h5></div>
								<div id="chicken-tomatoes2" class="recList gluten-free nut-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Grilled Chicken with Tomato Salad</h5></div>
								<div id="cheese-chicken1" class="recList gluten-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Grilled Stuffed Chicken Breast</h5></div>
								<div id="beef-bread1" class="recList nut-free	" onclick="recipeListModal($(this).attr('id'))"><h5>Ground Beef Mummy Bread</h5></div>
								<div id="avocado-potatoes1" class="recList gluten-free vegetarian dairy-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Guacamole Potato Salad</h5></div>
			</div>
			<div id="recipe-h" class="minor-title">
			H
								<div id="bananas-egg3" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Honey and Banana Omlette</h5></div>
			</div>
			<div id="recipe-i" class="minor-title">
			I
								<div id="cheese-lettuce3" class="recList gluten-free vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Iceberg Lettuce with Cheese</h5></div>
			</div>
			<div id="recipe-j" class="minor-title">
			J
			</div>
			<div id="recipe-k" class="minor-title">
			K
			</div>
			<div id="recipe-l" class="minor-title">
			L
								<div id="bananas-lettuce2" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Lettuce and Banana Smoothie</h5></div>
								<div id="bread-lettuce1" class="recList vegetarian nut-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Lettuce and Olive Oil Bread Salad</h5></div>
								<div id="bananas-lettuce1" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Lettuce Banana Salad</h5></div>
								<div id="beef-lettuce1" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Lettuce Wraps</h5></div>
								<div id="beef-cheese2" class="recList gluten-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Low Carb Beef Taco</h5></div>
								<div id="cheese-chicken2" class="recList gluten-free nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Low Carb Chicken Taco</h5></div>
			</div>
			<div id="recipe-m" class="minor-title">
			M
								<div id="beef-cheese1" class="recList nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Mac n Cheese + Beef</h5></div>
								<div id="egg-lettuce1" class="recList gluten-free vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Mixed Greens Salad with Eggs</h5></div>
								<div id="lettuce-potatoes1" class="recList gluten-free vegetarian nut-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Mixed Salad</h5></div>
			</div>
			<div id="recipe-n" class="minor-title">
			N
                <div id="bananas-beef2" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Ndizi na Nyama (Plantains with Meat)</h5></div>
			</div>
			<div id="recipe-o" class="minor-title">
			O
                <div id="avocado-bread3" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Open Faced Avocado Spread Sandwiches</h5></div>
			</div>
			<div id="recipe-p" class="minor-title">
			P
                <div id="bananas-bread2" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Peanut Butter Banana Toast</h5></div>
                <div id="avocado-egg1" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Poached Egg and Avocado Toast</h5></div>
                <div id="bread-potatoes1" class="recList vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Potato Bread</h5></div>
			</div>
			<div id="recipe-q" class="minor-title">
			Q
			</div>
			<div id="recipe-r" class="minor-title">
			R
                <div id="beef-potatoes2" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Roast Beef Hash</h5></div>
                <div id="potatoes-tomatoes1" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Roasted Potatoes and Tomatoes</h5></div>
                <div id="bread-lettuce3" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Romaine Lettuce and Knofi Bread</h5></div>
			</div>
			<div id="recipe-s" class="minor-title">
			S
                <div id="beef-tomatoes3" class="recList gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Sautéed Beef with Tomatoes</h5></div>
                <div id="cheese-egg2" class="recList vegetarian gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Scrambled Eggs with Cheese</h5></div>
                <div id="egg-potatoes1" class="recList vegetarian gluten-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Scrambled Eggs with Potatoes and Onions</h5></div>
                <div id="avocado-tomatoes2" class="recList vegetarian gluten-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Simple Avocado and Tomato Salad</h5></div>
                <div id="cheese-egg1" class="recList vegetarian gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Simple Cheese Omlette</h5></div>
                <div id="beef-chicken2" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Slow Cooker Beef and Chicken Stew With Vegetables</h5></div>
                <div id="avocado-beef1" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Spanish Beef and Rice Bowl</h5></div>
                <div id="avocado-chicken1" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Spicy Chicken and Avocado Wraps</h5></div>
                <div id="bread-chicken1" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Spinach and Chicken Strata</h5></div>
                <div id="beef-egg1" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Steak and Eggs Hash</h5></div>
                <div id="egg-tomatoes2" class="recList vegetarian gluten-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Stir-fried Egg and Tomato</h5></div>
                <div id="bread-potatoes2" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Stuffed Bread Rolls</h5></div>
                <div id="beef-bread2" class="recList dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Stuffed French Bread</h5></div>
                <div id="avocado-tomatoes1" class="recList vegetarian dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Tomato Avocado Sandwich</h5></div>
                <div id="bananas-tomatoes2" class="recList vegetarian gluten-free dairy-free" onclick="recipeListModal($(this).attr('id'))"><h5>Tomato and Banana Sambal</h5></div>
			</div>
			<div id="recipe-t" class="minor-title">
			T
                <div id="avocado-egg3" class="recList vegetarian nut-free" onclick="recipeListModal($(this).attr('id'))"><h5>Tomato, Cheese and Avocado Omelette</h5></div>
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
                <div class="modal-header">
                    <div id='ratingModalAverage'></div>
                    <div id='ratingModalCaption'></div>

                    <!-- Facebook sharing widget -->
                    <div class="fb-share-button" data-href="" data-layout="button" data-size="small" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" >Share</a></div>

                    <!-- Twitter sharing widget -->
                    <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                    <!-- Google+ button -->
                    <div class="g-plus" data-action="share" style="width:150px"></div>

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
</body>
</html>
