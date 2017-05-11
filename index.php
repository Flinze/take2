<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Take2 - Home</title>
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
        <div class="container">
          <select class='form-control' id='dropFirst' data-placeholder='Enter first ingredient' data-role="none" onchange="pullValues()">
            <option></option>
            <option id ='Avocadof' value="avocado">Avocado</option>
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
          <div class="panel-heading">
            <h4 class="panel-title">
              <a for='collapseOne' id="how-to-use-toggle" data-toggle="collapse" href="#how-to-use-box">How To Use Take2</a>
            </h4>
          </div>
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
</body>
</html>
