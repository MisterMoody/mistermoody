<?php
$pageTitle = "Contact Mister Moody";
include ("inc/header.php");
?>
<!-- ******************************************************* -->
<!-- ****************** <<CONTACT FORM>>  ****************** -->


<!-- //CONTENT-BEGINS..... -->
<main>
  <section>
    <h4>Share Your Thoughts!</h4>
    <p>Are you an employer with a specific opportunity that you would like to share? A small business seeking an overhaul of your legacy website? An entrepreneur in need of a digital presence?  A student seeking mentorship? No matter your situation, give me the opportunity to help!</p>
    
    <?php
    if(isset($_POST["submit"])) {
            $sender=$_POST["sender"];
            $senderEmail=$_POST["senderEmail"];
            $message=$_POST["message"];

            $recipient="principal@mistermoody.com";
            $subject="MisterMoody.com: Prospective Client Email";
            $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

           if ( mail($recipient, $subject, $mailBody, "From: $sender<$senderEmail>")) {
             header('Location: about.php');/*Redirect Page*/
           }        
          }
    ?>
    
    <form class="contactForm" method="post" action="contact.php" name="contactForm">
      <div>
        
        <div>
          <label class="lineInput" for="name"></label>
          <input type="text" id="name" name="sender" placeholder=" Name" title="Please provide your name." size="33vw" pattern="^([- \w\d\u00c0-\u024f]+)$" required aria-required="true" aria-describedby="prospective" class="form-control">
        </div>
        
        <div>
          <label class="lineInput" for="email" id="prospectiveEmail"></label>
          <input type="email" id="email"  placeholder=" Email Address" value="" name="senderEmail" size="33vw" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required aria-required="true" aria-describedby="prospectiveEmail" title="Please provide your email.">
        </div>
        
        <div>
          <label for="message" id="prospectiveMSG"></label>
          <textarea type="text" id="message" name="message" placeholder="Share your thoughts..." cols="4" rows="4" maxlength="5000" required aria-required="true" aria-describedby="prospectiveMSG" title="Please write a detailed message describing your project, scope, timetable and any immediate concerns that you have."></textarea>
        </div>
        
        <div>
          <input type="submit" name="submit" value="Submit" id="submit_button">
        </div>
        
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