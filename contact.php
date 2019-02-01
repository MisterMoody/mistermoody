<?php
$pageTitle = "Contact Mister Moody";
include ("inc/header.php");
?>
<!-- ******************************************************* -->
<!-- ****************** <<CONTACT FORM>>  ****************** -->


<!-- //CONTENT-BEGINS..... -->
<main>
  <section>
    <h3>Share Your Thoughts!</h3>
    <p>Have a question? I've got an answer. And if I don't, I have a particular set of skills that will allow me to help you unearth a suitable outcome. </p>
    <!-- PHP -->
    <?php
    if(isset($_POST["submit"])) {
            $sender=$_POST["sender"];
            $senderEmail=$_POST["senderEmail"];
            $message=$_POST["message"];

            $recipient="principal@mistermoody.com";
            $subject="Mister Moody Alert: Prospective Client Email";
            $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

           if ( mail($recipient, $subject, $mailBody, "From: $sender<$senderEmail>")) {
             header('Location: portfolio.php');/*Redirect Page*/
           }        
          }
    ?>
    <!-- 'FORM'-->
    <form class="contactForm" method="post" action="contact.php" name="contactForm">
      <div href="thankyou.html">
        <!-- Name -->
        <div>
          <label class="lineInput" for="name"></label>
          <input type="text" id="name" name="sender" placeholder=" Name" title="Please provide your name." size="33vw" pattern="^([- \w\d\u00c0-\u024f]+)$" required aria-required="true" aria-describedby="prospective" class="form-control">
        </div>
        <!-- Email -->
        <div>
          <label class="lineInput" for="email" id="prospectiveEmail"></label>
          <input type="email" id="email"  placeholder=" Email Address" value="" name="senderEmail" size="33vw" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required aria-required="true" aria-describedby="prospectiveEmail" title="Please provide your email.">
        </div>
        <!-- Message -->
        <div>
          <label for="message" id="prospectiveMSG"></label>
          <textarea type="text" id="message" name="message" placeholder="Share your thoughts..." cols="4" rows="4" maxlength="5000" required aria-required="true" aria-describedby="prospectiveMSG" title="Please write a detailed message describing your project, scope, timetable and any immediate concerns that you have."></textarea>
        </div>
        <!-- Submit >> Modal Trigger -->
        <div>
          <input type="submit" name="submit" value="Submit" id="submit_button">
        </div>
        <!---->
      </div>
    </form>
  </section>
</main>
<!-- .....CONTENT-ENDS// --> 


<!-- ******************************************************* -->
<!-- ******************************************************* -->
<?php
include ("inc/footer.php"); 
?>