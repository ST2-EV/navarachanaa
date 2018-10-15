<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["fname"]==""||$_POST["fone"]==""||$_POST["subj"]==""||$_POST["email"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo alert("Invalid Sender's Email");
}
else{
$subject = $_POST['subj'];
$message = $_POST['fname'];
$message .= $_POST['message'];
$message .= $_POST['fone']
$headers = 'From:'. $email . "rn"; // Sender's Email
$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
// type your email here
mail("abcd@gmail.com", $subject, $message, $headers);
echo alert("Your mail has been sent successfuly ! Thank you for your feedback");
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Navarachanaa 2018 | SVVV</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/newFav.png" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- Navbar -->
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#home" class="brand-logo"><img src="img/logo-navarachanaa.png" alt="Navarachanaa 2018 | SVVV"</a></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#prizes">Prizes</a></li>
        <li><a href="themes.html">Themes</a></li>
        <li><a href="sponsors.html#">Sponsors</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="gallery.html#">Gallery</a></li>
        <li><a href="#">Registration</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#prizes">Prizes</a></li>
        <li><a href="themes.html">Themes</a></li>
        <li><a href="sponsors.html#">Sponsors</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="gallery.html#">Gallery</a></li>
        <li><a href="#">Registration</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- /Navbar -->
  <div id="home">
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-2">Navarachanaa</h1>
          <div class="row center">
            <h5 class="header col s12 light">A National Project Competition by SVVV</h5>
          </div>
          <br>
          <br>
      </div>
    </div>
    <div class="parallax"><img src="img/02-1.jpg" alt="Unsplashed background img 1"></div>
  </div>
  </div>

  <!-- About -->
  <div id="about">

    <div class="container">
      <div class="section">

        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>About</h4>
            <p class="left-align light">Bring the innovative minds spread all across the country under a single canopy, where they can showcase their talent, share the knowledge and inspire millions more to explore the possible dimensions of their respective field. This event would also be a phenomenal opportunity for the students to showcase their ideas and/or implementations as a cherishing outcome in the contribution to the Nation's Dream of all current government programs like Digital India, Make in India, Skill India, Smart City, Swachh Bharat Abhiyan.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- /About -->


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/prize.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <!-- Prizes -->
  <div id="prizes">

    <div class="container">
      <div class="section">

        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Prizes</h4>
            <!-- <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum   sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p> -->

            <div id="prizeSpan">
            	<span >

            		<span id="headerPrize">PRIZES WORTH Rs. 5,00,000</span>
            		<br>
              		Eklavya Awards for winning team & Dronacharya Award for mentor.
            		<br><br>
            		<b>
          				1st prize worth: Rs. 51,000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						2nd prize worth: Rs. 31,000
    						</b>

                <br>
            		(For each category)

            	</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- /Prizes -->


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/Special-Awards-Slider.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <!-- Contact -->
  <div id="contact">

    <div class="container">
      <div class="section">

        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Get in Touch</h4>
            <p>Have any query? Feel free to contact us.</p>
            <p class="left-align light"></p>
            
            <div class="row">
              <form class="col s12" method="post" name="form">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="fname" id="icon_prefix" type="text" class="validate"   required>
                    <label for="icon_prefix">Your Name</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input name="fone" id="icon_telephone" type="tel" class="validate" required>
                    <label for="icon_telephone">Telephone</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input name="email" id="icon_email" type="email" class="validate" required>
                    <label for="icon_email">E-mail</label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">subject</i>
                    <input name="subj"id="icon_subject" type="tel" class="validate" required>
                    <label for="icon_subject">Subject</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">message</i>
                    <input name="message" id="icon_message" type="tel" class="validate" required>
                    <label for="icon_message">Message</label>
                  </div>

                  <button name="submit" class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>

                
                </div>
              </form>
            </div>
            _____________________________________
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h5>Contact Details</h5><br>

            <div class="row">
              <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                  <div class="hvr-float">
                    <div class="card-content white-text">
                      <span class="card-title">ADDRESS</span>
                      <p>Indore – Ujjain Road<br>
                      Indore – 453111</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                  <div class="hvr-float">
                    <div class="card-content white-text">
                      <span class="card-title">PHONE</span>
                      <p>
                        +91 7225996655 <br>
                        +91 7581019480
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                  <div class="hvr-float">
                    <div class="card-content white-text">
                      <a id="mail" href="mailto: navarachanaa@svvv.edu.in">
                        <span class="card-title">MAIL</span>
                        <p><br>navarachanaa@svvv.edu.in</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="waves-effect waves-light btn" target="_blank" href="https://www.google.co.in/maps/place/Shri+Vaishnav+Vidyapeeth+Vishwavidyalaya/@22.824693,75.8474383,17z/data=!3m1!4b1!4m5!3m4!1s0x3963039c587a8091:0x206d00d7a5e4afb3!8m2!3d22.824693!4d75.849627?hl=en&authuser=0"><i class="material-icons right">location_on</i>Get Directions</a>

            <!-- Soicial buttons -->
            <div class="row">
              <br><br>
              <a class="waves-effect waves-light btn-floating social facebook" href="https://www.facebook.com/navarachanaa/">
              <i class="fa fa-facebook"></i></a>&emsp;

              <a class="waves-effect waves-light btn-floating social twitter" href="https://twitter.com/navarachanaa16">
              <i class="fa fa-twitter"></i></a>&emsp;

              <a class="waves-effect waves-light btn-floating social pinterest" href="https://www.youtube.com/channel/UCg5T8YbK7VpDuSKAtkCUIPg">
              <i class="fa fa-youtube"></i></a>&emsp;

              <a class="waves-effect waves-light btn-floating social linkedin" href="https://www.linkedin.com/in/navarachanaa2016">
              <i class="fa fa-linkedin"></i></a>&emsp;

              <a class="waves-effect waves-light btn-floating social instagram" href="https://www.instagram.com/navarachanaa2016/">
              <i class="fa fa-instagram"></i></a>&emsp;

              <a class="waves-effect waves-light btn-floating social pinterest" href="https://in.pinterest.com/navarachanaa16/">
              <i class="fa fa-pinterest"></i></a>

            </div>
            <!-- /Soicial buttons -->

          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- /Contact -->


  <footer class="page-footer teal">

    <div class="footer-copyright" align="center">
      <div class="container">
      <a class="brown-text text-lighten-3" href="#">Team Navarachanaa</a>
      <span> | </span>
      <a class="brown-text text-lighten-3" href="http://www.digitalprojekt.co/">Digital Projekt</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
