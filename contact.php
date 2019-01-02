<?php

$pageTitle = "Contact Mister Moody";

include ("inc/header.php");
?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

  <section class="contactForm">
    <h3>Have an idea?</h3>
    <h3>Shoot your shot?</h3>
    <!-- PHP -->
    <?php
    if(isset($_POST["submit"])) {
            $sender=$_POST["sender"];
            $senderEmail=$_POST["senderEmail"];
            $message=$_POST["message"];

            $recipient="raymoody10@gmail.com";
            $subject="Mister Moody Alert: EMAILS from Prospective Clients";
            $mailBody="Name: $sender\nEmail$senderEmail\n\n$message";

           if ( mail($recipient, $subject, $mailBody, "From: $sender<$senderEmail>")) {
             header('Location: index.php');/*Redirect Page*/
           }        
          }
    ?>
    <!-- 'FORM'-->
    <form method="post" action="contact.php" name="contactForm">
      <div class="form" id="contact_form" href="thankyou.html">
        <!-- Name -->
        <div class="formName">
          <label for="name"></label>
          <input type="text" id="name" name="sender" placeholder=" Name" title="Please provide your name." size="33vw" pattern="^([- \w\d\u00c0-\u024f]+)$" required aria-required="true" aria-describedby="prospective" class="form-control">
        </div>
        <!-- Email -->
        <div class="formEmail">
          <label for="email" id="prospectiveEmail"></label>
          <input type="email" id="email"  placeholder=" Email Address" value="" name="senderEmail" size="33vw" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required aria-required="true" aria-describedby="prospectiveEmail" title="Please provide your email.">
        </div>
        <!-- Message -->
        <div class="formMSG">
          <label for="message" id="prospectiveMSG"></label>
          <textarea type="text" id="message" name="message" placeholder="Share your thoughts..." cols="35" rows="7" maxlength="5000" required aria-required="true" aria-describedby="prospectiveMSG" title="Please write a detailed message describing your project, scope, timetable and any immediate concerns that you have."></textarea>
        </div>
        <!-- Submit >> Modal Trigger -->
        <div class="formSubmit">
          <input type="submit" name="submit" value="Submit" id="submit_button">
        </div>
        <!---->
      </div>
    </form>
    <!-- END of FORM -->
  </section>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->       
<?php
include ("inc/footer.php"); 
?>