<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>International Noodles - Contact Us</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    </head>
    
    <body>
        <?php include '../resources/navbar.php'; ?>
        <section class="meat">
        
          <section class="login_button">
              <a class="login_link" href="login_page.html">Login</a>
          </section>
            
          <?php include '../resources/header.php'; ?>
            
          <h1>Contact Us</h1>
       
          <form method="post" id="contact_form">
            <fieldset>
              <div class="container">
                <div class="row">
                  <div class="col-25">
                  <label for="fname">First Name</label>
                  </div>
                  <div class="col-75">
                  <input type="text" id="fname" name="firstname" placeholder="Your first name..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                  <label for="lname">Last Name</label>
                  </div>
                  <div class="col-75">
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                  <label for="email">Email</label>
                  </div>
                  <div class="col-75">
                  <input type="email" id="email" name="email" placeholder="Your email address...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                  <label for="subject">Comment</label>
                  </div>
                  <div class="col-75">
                  <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>
                  </div>
                </div>
                <div class="row">
                  <input type="button" value="Submit">
                </div>
              </div>
            </fieldset>
          </form>
        </section>

        <?php include '../resources/footer.php'; ?>
    </body>
</html>