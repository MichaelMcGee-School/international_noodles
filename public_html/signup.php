<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Sign Up Form</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	</head>

	<body>
		<nav>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="interactive_map_page.html">Interactive Map</a>
                </li>
                <li>
                    <a href="rankings_page.html">Rankings</a>
                </li>
                <li>
                    <a href="recipes_page.html">Recipes</a>
                </li>
                <li>
                    <a href="fun_facts_page.html">Fun Facts</a>
                </li>
                <li>
                    <a href="about_page.html">About Page</a>
                </li>
                <li>
                	<a href="contact_page.html">Contact Us</a>
                </li>
                <li>
					<a href="signup.html">Sign Up</a>
				</li>
            </ul>
        </nav>
        <section class="meat">
        
          <section class="login_button">
              <a class="login_link" href="login_page.html">Login</a>
          </section>
            
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
		<footer>
          <hr>
          <p>&copy;International Noodles</p>
          <p>Contact us at internationalnoodles&commat;gmail&period;com</p>
        </footer>
	</body>
</html>