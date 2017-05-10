<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Take2 - Home</title>
</head>

<body>
  <!-- Wrapper -->
  <div id="wrapper" class="container-fluid">

    <!-- Header and Navigation Bar -->
    <?php include('header.php'); ?>

    <!-- Main Content -->
    <main class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">

      <!-- Ingredient header-->
      <div class="major-title">
        Ingredients <i class="fa fa-shopping-basket"></i>
      </div>

      <!-- Ingredient input -->
      <form>
        <div class="container">
          <select class='form-control' id='dropFirst' data-placeholder='Enter first ingredient'>
            <option></option>
            <option id = 'Avocadof' value = "Avocado">Avocado</option>
            <option id = 'Bananasf'value = "Bananas">Bananas</option>
            <option id = "Beeff" value = "Beef">Beef</option>
            <option id = "Breadf" value = "Bread">Bread</option>
            <option id = "Cheesef" value = "Cheese">Cheese</option>
            <option id = "Chickenf" value = "Chicken">Chicken</option>
            <option id = "Eggf" value = "Egg">Egg</option>
            <option id = "Lettucef" value = "Lettuce">Lettuce</option>
            <option id = "Potatoesf" value = "Potatoes">Potatoes</option>
            <option id = "Tomatoesf" value = "Tomatoes">Tomatoes</option>
          </select>
        </div>
        <div class="container">
          <select class='form-control' id='dropSecond' data-placeholder='Enter second ingredient'>
            <option></option>
            <option id = 'Avocado' value = "Avocado">Avocado</option>
            <option id = 'Bananas'value = "Bananas">Bananas</option>
            <option id = "Beef" value = "Beef">Beef</option>
            <option id = "Bread" value = "Bread">Bread</option>
            <option id = "Cheese" value = "Cheese">Cheese</option>
            <option id = "Chicken" value = "Chicken">Chicken</option>
            <option id = "Egg" value = "Egg">Egg</option>
            <option id = "Lettuce" value = "Lettuce">Lettuce</option>
            <option id = "Potatoes" value = "Potatoes">Potatoes</option>
            <option id = "Tomatoes" value = "Tomatoes">Tomatoes</option>
          </select>
        </div>

      </form>

      <!-- How to use collapse box-->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a id="how-to-use-toggle" data-toggle="collapse" href="#how-to-use-box">How To Use Take2</a>
          </h4>
        </div>
        <div id="how-to-use-box" class="panel-collapse collapse in container">
			<div id="how-to-use-inner" class="">
				<ol>
					<li>Enter two different ingredients in the form above</li>
					<li>View the list of dishes below</li>
					<li>Each dish can be further expanded by clicking</li>
				</ol>
			</div>
        </div>
      </div>

      <!-- Dishes Header -->
      <div class="major-title">
        Dishes <i class="fa fa-cutlery"></i>
      </div>

    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </div>
</body>
</html>
