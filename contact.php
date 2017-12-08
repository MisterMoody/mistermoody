<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>Mister Moody | Sole-Proprietor</title>
    <meta name="author" content="Ray Moody" />
    <meta name='description' content='Mister Moody: Web Developer Based in Louisville Kentucky' />
    <meta name="keywords" content="Mister Moody, Web Developer, TEFL Consultant, ESL, Teacher, Copy Writer, Louisville, Kentucky" />
    <meta name="twitter:title" content="@Mister_Moody" />        
    <meta name="twitter:site" content="http://mistermoody.com" />
    <!-- Browser Tab Icon -->
    <link rel="shortcut icon" href="img/me.jpg" type="img/m" class="rounded">

    <!-- *********** CSS Implementations ************ -->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <!-- FontAwesome CSS Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- Custom Fonts -->   
	  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
  
    <!-- Custom CSS -->
    <link href="" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css" />
  
    <!-- Treehouse ReportCard by Riley Hilliard -->
    <link href="js/reportcard/css/badges.css" rel="stylesheet">
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="100"><!-- Apply 'p-x-0' to Body Tag to Hack Inconsistencies with Padding, especially for Modals-->
  
  <!-- ************* -->     
  <!-- ** NAVBAR *** -->
  <nav class="navbar sticky-top navbar-expand-md navbar-toggleable-sm navbar-light bg-white"> 
    <a class="navbar-brand"><span class="font-weight-bold navPhone pl-1">Mister Moody</span><img src="..." width="30" height="30" class="d-inline-block align-top" alt="">
    <!--<span class="font-weight-bold navPhone pl-1"><i class="fa fa-phone d-lg-inline-block"></i> +1.502.644.1805 </span>-->
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto"> <!-- Use "ml-auto" for Right Side Alignment-->
        <li class="nav-item active text-right">
          <a class="nav-link" href="#home"><i class="fa fa-home d-none d-lg-inline-block"></i></a>
        </li>
        <li class="nav-item text-right">
          <a class="nav-link" href="#whatido">What I Do</a>
        </li>
        <li class="nav-item text-right">
          <a class="nav-link" href="#whoiis">Who I Is</a>
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
  
  
  <!-- CONTACT FORM ******* -->
  <div class="container container-fluid bg-danger mb-2">
    <?php
      if(isset($_POST["submit"])) {
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];
        
        $recipient="principal@mistermoody.com";
        $subject="Mister Moody Alert: Prospective Client EMAILS";
        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
        
      if ( mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>")) {
         header('Location: thankyou.html');/*Redirect to 'Thank You' Page*/
      }        
    }
    ?>
    <div class="row">
      <div class="col-12">
      <!-- Form-->
      <form method="post" action="contact.php" name="contactForm"  id="need-validation">
        <div class="row my-4">
          <!-- Contact Form -->
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
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-light text-dark btn-lg mt-3">
          </div>
          <!-- Google Map -->
          <div class="col d-none d-md-block">
            <div id="map" style="width:100%; height:271px;"></div>
          </div>
        </div>
      </form>

      </div>
    </div>
  </div>
  <!-- ******************** -->
  
  
  <!-- ******************** -->
  <!-- FOOTER -->  
  <div class="container">
      <div class="row justify-content no-gutters clearfix">
        <!-- Copyright Mister Moody -->
        <div class="col-auto">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link disabled"><small>&#169;<span class="d-none d-sm-inline-block"><?php echo date('Y'); ?></span></small> <span class="d-none d-sm-inline-block"> Made with <i class="fa fa-heart"></i> by </span> Mister Moody.</a>
            </li>
          </ul>
        </div>
        <!-- Github & Twitter Links-->
        <div class="col-auto ml-auto">
          <a class="btn btn-outline-dark btn-sm" title="Send Me a Note" alt="Send Me a Note" data-toggle="modal" data-target="#register"><i class="fa fa-envelope-o fa-1x" aria-hidden="true"></i></a>
          <a class="btn btn-outline-dark btn-sm" href="https://github.com/MisterMoody" alt="Github" target="_blank" title="Check Out My Work on Github">
          <i class="fa fa-github-alt fa-1x" aria-hidden="true"></i></a>
          <a class="btn btn-outline-dark btn-sm" href="https://twitter.com/Mister_Moody" alt="Twitter" target="_blank" title="Follow Me on Twitter">
          <i class="fa fa-twitter fa-1x" aria-hidden="true"></i></a>
        </div>
     </div>
   </div>
  <!-- END of FOOTER --> 
  <!-- ******************** --> 
		
  
    <!-- ********************************************************************************* -->
    <!-- JAVASCRIPT ********************************************************************** -->
    <!-- *jQuery before BootstrapJS ALWAYS* -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- BS Popper CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Bootstrap CDN JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- ********************************************************************************* -->
    <!-- Bootstrap4 Form Validation JS *************************************************** -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var form = document.getElementById('needs-validation');
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      }, false);
    })();
    </script>
    <!-- ********************************************************************************* -->
    <!-- Google Map ********************************************************************** -->
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
    <!-- ********************************************************************************* -->
</body>
</html>
