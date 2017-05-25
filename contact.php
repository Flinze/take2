<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Take2 - Contact</title>
    <meta charset="utf-8" />
	
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
		<main class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">


		<div class="major-title">
			Contact Us
		</div>

    <!-- form -->
	   <form method="post" onsubmit="return formValidation()" action="contact-submit.php">
       <fieldset>

           <div id="firstname-container">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" class="text-field" id="firstname">
            <div id="firstname-error" class="error"></div>
          </div> <br>

          <div id="lastname-container">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" class="text-field" id="lastname">
            <div id="lastname-error" class="error"></div>
          </div> <br>

           <div id="email-container">
            <label for="email">Email:</label>
            <input type="text" name="email" class="text-field" id="email">
            <div id="email-error" class="error"></div>
          </div> <br>

        <div id="comment-container">
         <label for="comment">Comment:</label>
         <textarea name="comment" rows="5" class="form-control" class="text-field" id="comment"> </textarea>
         <div id="comment-error" class="error"o></div>
       </div> <br>

         <input type="submit" value="Submit" class="btn btn-primary">
     </fieldset>
     </form>

     <!-- form validation -->
     <script src="assets/js/contact.js"></script>
	</main>


	<!-- Footer -->
    <?php include('footer.php'); ?>

	</div> <!-- Wrapper -->
</body>
</html>
