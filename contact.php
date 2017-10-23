<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mister Moody | Web Developer</title>
    <meta name="author" content="Ray Moody">
    <meta name="description" content="Mister Moody: Web Developer Based in Louisville Kentucky">
    <meta name="keywords" content="Mister Moody, Web Developer, TEFL Consultant, ESL, Teacher, Copy Writer, Louisville, Kentucky">
    <meta name="twitter:title" keywords="Mister_Moody">         <!-- Link to Twitter -->
    <link rel="shortcut icon" href="img/me.jpg" type="img/m" class="rounded"> <!-- Browser Tab Icon -->
    
    <!-- *********** CSS Implementations ************ -->
    <!-- BOOTSTRAP *CDN* Compiled & Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="custom.css">         
    <!-- Font Awesome Icons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>

    <!-- ************* -->     
    <!-- ** NAVBAR *** -->
    <nav class="navbar sticky-top navbar-expand-md navbar-toggleable-sm navbar-light"> 
      <a class="navbar-brand" href="index.html"><img src="..." width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="font-weight-bold navPhone pl-1">Mister Moody </span>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto"> <!-- Use "ml-auto" for Right Side Alignment-->
          <li class="nav-item active text-right">
            <a class="nav-link" href="index.html"><i class="fa fa-home d-none d-lg-inline-block"></i></a>
          </li>
          <li class="nav-item text-right">
            <a class="nav-link" href="#whatido">What I Do</a>
          </li>
          <li class="nav-item text-right">
            <a class="nav-link" src="moodyCV.docx" href="moodyCV.docx" alt="Download My Resume">Download CV</a>
          </li>
          <li class="nav-item text-right">
            <a class="nav-link" href="zh.html">中文</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="about.html">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">502WEST</a>
              <a class="dropdown-item" href="#">CLIL</a>
            </div>
          </li>
          --> <!-- HIDDEN Nav Items -->
        </ul>
      </div>
     </nav>
    <!-- END of NAVBAR -->
    <!-- ************* -->
    
    
    <!-- ***************************************** -->
    <!-- ** CONTENT CONTAINER ******************** -->
    <div class="container">
      
            
      
      <!-- CONTACT FORM -->
      <!-- PHP -->
      <?php
      if(isset($_POST["submit"])) {
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];
        
        $recipient="raymoody10@gmail.com";
        $subject="Mister Moody Alert: EMAILS from Prospective Clients";
        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
        
       if ( mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>")) {
         header('Location: thankyou.html');/*Redirect to 'Thank You' Page*/
       }        
      }

      ?>
      <!-- END of PHP -->
      <!-- Form-->
      <form method="post" action="contact.php" name="contactForm"  id="need-validation">
        <!-- Call-to-Action: Get In Touch -->
        <div class="row">
        <div class="col-12">
          <div class="alert alert-dark text-center text-uppercase h2">Get In Touch</div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-6 col-xs-12" href="thankyou.html">
            <!-- Name -->
            <div class="input-group">
              <label for="name" class="form-control-label"></label>
              <span class="input-group-addon" id="prospective">
                <i class="fa fa-user fa-1x" aria-hidden="true" title="Prospective"></i>
              </span>
              <input type="text" value="" name="sender" size="20" pattern="^([- \w\d\u00c0-\u024f]+)$" required aria-required="true" aria-describedby="prospective" class="form-control" id="name" placeholder="Name" title="Please provide your name.">
              
            </div><br>
            <!-- Email -->
            <div class="input-group">
              <label for="email" class="form-control-label"></label>
              <span class="input-group-addon" id="prospectiveEmail">
                <i class="fa fa-envelope fa-1x" aria-hidden="true" title="Prospective Email Address"></i>
              </span>
              <input type="email" value="" name="senderEmail" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required aria-required="true" aria-describedby="prospectiveEmail" class="form-control" id="email" title="Please provide your email." placeholder="Email Address">
              <div class="invalid-feedback">Please provide a valid email.</div>
            </div><br>
            <!-- Type of Inquiry -->
            <!--<div class="form-group">
              <select class="custom-select">
                <option selected>Type of Inquiry</option>
                <option value="1">Web Dev Project</option>
                <option value="2">Proofreading</option>
                <option value="3">Copy Writing</option>
                <option value="4">General Inquiry</option>
              </select>
            </div>-->
            <!-- Enquirer Status -->
            <!--<fieldset class="form-check form-check-inline">
              <span class="text-muted">Select One</span><br>
              <label class="custom-control custom-radio">
                <input id="radio1" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Entrepreneur</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio2" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description"><span class="d-none d-md-inline-block">Micro-</span>Enterprise</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Student</span>
              </label>
            </fieldset>-->
            <!-- Text Area -->
            <div class="input-group">
              <span class="input-group-addon" id="prospectiveMSG">
                <i class="fa fa-commenting fa-1x" aria-hidden="true" title="Prospective Message"></i>
              </span>
              <textarea name="message" type="text" value="" required aria-required="true"  class="form-control" rows="4" maxlength="5000" aria-describedby="prospectiveMSG" title="Please write a detailed message describing your project, scope, timetable and any immediate concerns that you have. " placeholder="Type your Message Here"></textarea>
            </div>
            
            <!-- Submit >> Modal Trigger -->
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-dark btn-lg mt-3">
          </div>
          <!-- Google Map -->
          <div class="col d-none d-md-block">
            <div id="map" style="width:100%; height:271px;"></div>
          </div>
        </div>
      </form>



    <!-- ***************************************** -->
    <!-- ***************************************** -->
    <!-- ***************************************** --> 
      
    </div>
    <!-- ***************************************** -->

    
    <!-- ************ -->
    <!-- ** FOOTER ** -->
    <footer class="footer">
      
    <div class="container">
      <div class="row justify-content no-gutters clearfix">
        <!-- Copyright Mister Moody -->
        <div class="col-auto mr-auto">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link disabled"><small>&#169;2017</small> Mister Moody.</a>
            </li>
          </ul>
        </div>
        <!-- Github & Twitter Links-->
        <div class="col-auto">
          <a class="btn btn-outline-dark btn-sm" href="https://github.com/MisterMoody" alt="Github" target="_blank">
                <i class="fa fa-github-alt fa-1x" aria-hidden="true" title="Github"></i>
              </a>
          <a class="btn btn-outline-dark btn-sm" href="https://twitter.com/Mister_Moody" alt="Twitter" target="_blank">
                <i class="fa fa-twitter fa-1x" aria-hidden="true" title="Twitter"></i>
              </a>
        </div>
     </div>
   </div>
    </footer>
    <!-- END of FOOTER --> 
    <!-- ************ -->
    
    
    
    <!-- ** jQuery, Popper & BOOTSTRAP *CDN* Compiled and Minified JavaScript ************ -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- ********************************************************************************* -->
    <!-- Google Map -->
    <script>
      function myMap() {
        var mapCanvas = document.getElementById("map");
        var myCenter = new google.maps.LatLng(38.2527,-85.785); 
        var mapOptions = {
          center: myCenter, 
          zoom: 5
        };
        var map = new google.maps.Map(mapCanvas,mapOptions);
        var marker = new google.maps.Marker({
          position: myCenter,
          animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map);
      }
      </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm3j_zGfqLR_5OzOsdQBGcRfciLKboWxo&callback=myMap"></script>
    <!-- Google Maps API AIzaSyBm3j_zGfqLR_5OzOsdQBGcRfciLKboWxo -->
    
    <!-- Contact Form JS -->
    <script src="contact.js"></script>
    
  </body>
</html>
