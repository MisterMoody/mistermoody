<?php
$pageTitle = "Contact Mister Moody";
include ("inc/header.php");
?>
<!-- ******************************************************* -->
<!-- ****************** <<CONTACT FORM>>  ****************** -->


<!-- //CONTENT-BEGINS..... -->
<section>
  <article>
    <h1>Get In Touch!</h1>
    <!--<p>Thank you for taking the time to review my portfolio. If you have a question about anything that you read or are interested in collaborating on a project, let me know. </p>-->
    <p>Taking on new students for after school and weekend assistance. Get in touch with me now to assess your learning needs and how I may be of assistance to you.</p>
    
    <?php
    if(isset($_POST["submit"])) {
            $sender=$_POST["sender"];
            $senderEmail=$_POST["senderEmail"];
            $message=$_POST["message"];

            $recipient="principal@mistermoody.com";
            $subject="MisterMoody.com: Prospective Client Email";
            $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

           if ( mail($recipient, $subject, $mailBody, "From: $sender<$senderEmail>")) {
             header('Location: about/');/*Redirect Page*/
           }        
          }
    ?>
    
    <form class="contactForm" method="post" action="contact.php" name="contactForm">
      <div class="contactGrid">
        
        <div>
          <label for="name"></label>
          <input type="text" id="name" name="sender" placeholder="Name" title="Please provide your name." size="33vw" pattern="^([- \w\d\u00c0-\u024f]+)$" required aria-required="true" aria-describedby="prospective" class="form-control">
        </div>
        
        <div>
          <label for="email" id="prospectiveEmail"></label>
          <input type="email" id="email" name="senderEmail" placeholder=" Email Address" size="33vw" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required aria-required="true" aria-describedby="prospectiveEmail" title="Please provide your email." class="form-control">
        </div>
        
        <div>
          <label for="message" id="prospectiveMSG"></label>
          <textarea type="text" id="message" name="message" placeholder="Share your thoughts..." cols="4" rows="4" maxlength="5000" required aria-required="true" aria-describedby="prospectiveMSG" title="Please write a detailed message describing your project, scope, timetable and any immediate concerns that you have." class="form-control"></textarea>
        </div>
        
        <div>
          <input type="submit" name="submit" value="Submit" id="submit_button">
        </div>
        
      </div>
    </form>
  </article>
  
</section>
<!-- .....CONTENT-ENDS// --> 


<!-- ******************************************************* -->
<!-- ******************************************************* -->
<?php
include ("inc/footer.php"); 
?>