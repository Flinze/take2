<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Take2 - Home</title>
        <meta charset="utf-8" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

        <!-- Cute Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/style/base.css" />
    </head>

    <body>

		<!-- Wrapper -->
		<div id="wrapper" class="container">

      <!-- Header and Navigation Bar -->
      <?php include('header.php'); ?>

			<!-- Main Content -->
			<main class="col-xs-10 col-lg-8 col-xs-offset-1 col-lg-offset-2">

				<!-- Ingredient header-->
				<div class="major-title">
					Ingredients<i class="fa fa-cutlery">
				</div>

					<!-- Ingredient input -->
					<form>
						<div class="ingredient-input form-group">
							<input id="ingredient1" type="text" class="form-control" placeholder="Enter Ingredient 1">
						</div>

						<div class="ingredient-input form-group">
							<input id="ingredient2" type="text" class="form-control" placeholder="Enter Ingredient 2">

						</div>
					</form>

					<!-- How to use collapse box-->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#howtouse">(can collapse, need to pretty it up) >How to use</a>
							</h4>
						</div>
						<div id="howtouse" class="panel-collapse collapse in">
							PICTURE INFO READMORE LINK
						</div>
					</div>

				<!-- Dishes Header -->
				<div class="major-title">
					Dishes <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
				</div>

			</main>

			<!-- Footer -->
      <?php include('footer.php'); ?>

		</div>

    </body>
</html>
