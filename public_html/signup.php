<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Sign Up Form</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	</head>

	<body>
		<?php include '../resources/navbar.php'; ?>
        <section class="meat">
        
          <?php include '../resources/header.php'; ?>
            
          <header>
            <img class="earth_png" src="img/non_food/in_logo.png" alt="IN Logo"/>
            <h1 class="main_name">International Noodles</h1>
          </header>
        
          <h1>Sign Up</h1>
          <form action="index.html">
            <fieldset>
              <div class="container">
                <div class="row">
                  <div class="col-25">
                  <label for="fname">First Name</label>
                  </div>
                  <div class="col-75">
                  <input type="text" id="fname" name="firstname" placeholder="Your first name...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                  <label for="lname">Last Name</label>
                  </div>
                  <div class="col-75">
                  <input type="text" id="lname" name="lastname" placeholder="Your last name...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label>Email</label>
                  </div>
                  <div class="col-75">
                    <input type="radio" name="gender" value="male" checked>Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                  </div>
                </div>
                <div class="row">
                  <input type="button" value="Sign Up">
                </div>
              </div>
            </fieldset>
          </form>
        </section>
		<?php include '../resources/footer.php'; ?>
	</body>
</html>