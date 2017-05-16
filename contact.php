<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Take2 - Contact</title>
    <meta charset="utf-8" />

    <style>
			div.error {
				display:block;
				border: 1px solid #F9B9B2;
				background-color: #FFDFDF;
			}
		</style>

    <script>

      function getElement(id){
        var element = document.getElementById(id);
        if ( element == null )
          alert ( 'Programmer error: ' + id + ' does not exist.' );
        return element;
      }

      // testing if first and last name contain one or more characters
    function testText(id) {
        return (!(getElement(id).value.match(/.+/)));
      }

      // test if email ends in .ca .com .org
      function testEmail(id) {
        return (!(getElement(id).value.match(/.ca$|.com$|.org$/i)));
      }


      function formValidation() {
        var result = true;



        if(!(getElement('firstname').value.match(/.+/))) {
          getElement('firstname-error').innerHTML = "Please enter a first name";
          result = false;
        }
        else {
          getElement('firstname-error').innerHTML = '';
          result = true;
        }


        if(testText('lastname')) {
          getElement('lastname-error').innerHTML = "Please enter a last name";
          result = result && false;
        }
        else {
          getElement('lastname-error').innerHTML = '';
          result = result && true;
        }

        if(testEmail('email')) {
          getElement('email-error').innerHTML = "Please enter an email";
          result = result && false;
        }
        else {
          getElement('email-error').innerHTML = '';
          result = result && true;
        }

      //validating message
      if(getElement('comment').value == '') {
        getElement('comment-error').innerHTML = "Please enter a message";
        result = result && false;
      }
      else {
        getElement('comment-error').innerHTML = '';
        result = result && true;
      }
      return result;
}
    </script>

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

	   <form method="post" onsubmit="return formValidation()" action="contact-submit.php">
       <fieldset>
         <div id="firstname-container">
          <label for="firstname">First Name:</label>
          <input type="text" name="firstname" class="text-field" id="firstname">
          <div id="firstname-error"></div>
        </div> <br>

        <div id="lastname-container">
          <label for="lastname">Last Name:</label>
          <input type="text" name="lastname" class="text-field" id="lastname">
          <div id="lastname-error"></div>
        </div> <br>

         <div id="email-container">
          <label for="email">Email:</label>
          <input type="text" name="email" class="text-field" id="email">
          <div id="email-error"></div>
        </div> <br>

        <div id="comment-container">
         <label for="comment">Comment:</label>
         <textarea name="comment" rows="5" class="text-field" id="comment"> </textarea>
         <div id="comment-error"></div>
       </div> <br>

         <input type="submit" value="Submit">
     </fieldset>
     </form>



	</main>


	<!-- Footer -->
    <?php include('footer.php'); ?>

	</div> <!-- Wrapper -->
</body>
</html>
