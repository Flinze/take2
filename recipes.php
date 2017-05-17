<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Take2 - Recipe List</title>
	<meta charset="utf-8">
    <script>
        function recipeListModal(x){
            var ingArr = x.split("-");
            var id = x.slice(x.length - 1, x.length);
            ingArr[1] = ingArr[1].substr(0, (ingArr[1].length - 1));

            populateRecipeModal(ingArr[0], ingArr[1], id);
            $('#recipe-modal').modal('show');
        }

        function filter(restriction){
            restriction = restriction.toLowerCase();
            $('.recList').hide();
            $(("." +restriction)).show();
        }

        function recipeFilter(){
            var restr = $(":checked");
            var sift = ""
            for (var i = 0; i < restr.length; i++){
                sift += "." + restr[i].name;
            }
            console.log(sift);
            $('.recList').hide();
            $('.recList').filter(sift).show();

        }
    </script>
    <style>
        .recList {
            border: 3px solid black;
            text-align: center;
            width: 85%;
            margin: auto;
            margin-top: 5px;
            margin-bottom: 5px;
            border-radius: 8px;

        }
    </style>
</head>

<body>
	<!-- Wrapper -->
	<div id="wrapper" class="container-fluid">

		<!-- Header and navigation bar -->
		<?php include('header.php') ?>

		<!-- Scroll Bar -->
		<div id="scrollbar-container" class="col-1 col-offset-11">
			<div id="scollbar-list">
				<div><a href="#recipe-a">A</a></div>
				<div><a href="#recipe-b">B</a></div>
				<div><a href="#recipe-c">C</a></div>
				<div><a href="#recipe-d">D</a></div>
				<div><a href="#recipe-e">E</a></div>
				<div><a href="#recipe-f">F</a></div>
				<div><a href="#recipe-g">G</a></div>
				<div><a href="#recipe-h">H</a></div>
				<div><a href="#recipe-i">I</a></div>
				<div><a href="#recipe-j">J</a></div>
				<div><a href="#recipe-k">K</a></div>
				<div><a href="#recipe-l">L</a></div>
				<div><a href="#recipe-m">M</a></div>
				<div><a href="#recipe-n">N</a></div>
				<div><a href="#recipe-o">O</a></div>
				<div><a href="#recipe-p">P</a></div>
				<div><a href="#recipe-q">Q</a></div>
				<div><a href="#recipe-r">R</a></div>
				<div><a href="#recipe-s">S</a></div>
				<div><a href="#recipe-t">T</a></div>
				<div><a href="#recipe-u">U</a></div>
				<div><a href="#recipe-v">V</a></div>
				<div><a href="#recipe-w">W</a></div>
				<div><a href="#recipe-x">X</a></div>
				<div><a href="#recipe-y">Y</a></div>
				<div><a href="#recipe-z">Z</a></div>
			</div>
		</div>

		<!-- Main Content -->
		<main class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">

			<div class="major-title" id="recipe-title">
				Recipes <i class="fa fa-spoon"></i>
			</div>
            <div>
                <h4>Filter</h4>
                <div class="btn-group btn-group-justified" onclick="recipeFilter()">
<!--                    <a onclick="filter($(this).text())" class="btn btn-primary">Gluten-Free</a>-->
<!--                    <a onclick="filter($(this).text())" class="btn btn-primary">Vegetarian</a>-->
<!--                    <a onclick="filter($(this).text())" class="btn btn-primary">Recipe Restriction #3</a>-->
                    <label class="btn btn-default">
                        <input type="checkbox" name="gluten-free" value="">
                        <h5>Gluten-Free</h5>
                    </label>
                    <label class="btn btn-default">
                        <input type="checkbox" name="vegetarian" value="">
                        <h5>Vegetarian</h5>
                    </label>
                    <label class="btn btn-default">
                        <input type="checkbox" name="lactose" value="">
                        <h5>Lactose Intolerant</h5>
                    </label>
                </div>
                <hr>
            </div>

			<div id="recipe-a" class="minor-title">
			A
                <div id="avocado-bananas2" class="recList gluten-free vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado and Banana Yogurt</h5></div>
                <div id="avocado-bananas1" class="recList vegetarian" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Banana Pudding</h5></div>
                <div id="avocado-bananas4" class="recList gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Avocado Smoothie</h5></div>


			</div>
			<div id="recipe-b" class="minor-title">
			B
                <div id="avocado-bananas3" class="recList gluten-free" onclick="recipeListModal($(this).attr('id'))"><h5>Banana Avocado Bread</h5></div>
			</div>
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
                    <!--<main class="col-xs-12 col-lg-8 col-lg-offset-2">-->

                    <!-- Recipe Picture -->
                    <div class="about_photo">
                        <img src="img/placeholder/friedchicken.jpg" alt="Group Photo" class="img-responsive">
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