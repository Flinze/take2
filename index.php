<!DOCTYPE html>
<meta charset="utf-8">
<title>Take2 - Home</title>

    <body>

		<!-- Wrapper -->
		<div id="wrapper" class="container">

      <!-- Header and Navigation Bar -->
      <?php include('header.php'); ?>

			<!-- Main Content -->
			<main class="col-xs-10 col-lg-8 col-xs-offset-1 col-lg-offset-2">

				<!-- Ingredient header-->
				<div class="major-title">
					Ingredients
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
					Dishes
				</div>

			</main>

			<!-- Footer -->
      <?php include('footer.php'); ?>

		</div>

    </body>
</html>
