<?php

$pageTitle = "Official Homepage of Mister Moody";

include ("inc/header.php");
?>

<section class="subGrid">
    <div>
      <p class="introduction">Hello. <b>My name is Ray.</b> <br>I am a certified TEFL instructor and self-taught web developer.</p> 
    </div>
    <div>
      <img src="img/tailorVanilla.jpg" class="intro" alt="I am Mister Moody"/>
      
    <a href="#services" class="arrow"></a>
    </div>
</section>

<section id="services">
  <h2>Services</h2>
  <p>Affordable virtual assistance for entrepreneurs and students.</p>
  <div class="servicesGrid">
    <div class="develop servicesCard">
      <i class="fa fa-laptop fa-2x" aria-hidden="true"></i> <span class="scTitle">Web Dev</span>
      <p class="serviceIntro">Retrofit your legacy website or re-brand your online presence from scratch.</p>
    </div>
    <div class="edit servicesCard">
      <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> <span class="scTitle">Writing</span>
      <p class="serviceIntro">Creative writing style and logical investigative tactics suitable for any composition.</p>
    </div>
    <div class="esl servicesCard">
      <i class="fa fa-language fa-2x" aria-hidden="true"></i> <span class="scTitle">ESL/TEFL</span>
      <p class="serviceIntro">Motivational facilitator with an uncanny ability to inspire the most stubborn learner.</p>
    </div>
  </div>
  <ul class="social">
    <li>
      <a class="github" href="https://github.com/MisterMoody" alt="Github" target="_blank" title="Check Out My Work on Github">
      <i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></a>
    </li>
    <li>
      <a class="twitter" href="https://twitter.com/Mister_Moody" alt="Twitter" target="_blank" title="Follow Me on Twitter">
      <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
    </li>
    <li>
      <a class="download" src="moodyCV.docx" href="moodyCV.docx" title="Download My Resume"  alt="Download My Resume">
      <i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i></a>
    </li>
    <li>
      <a class="phone" href="tel:+15025589240" alt="Call Me" title="Call Me">
      <i class="fa fa-mobile fa-2x" aria-hidden="true"></i></a>
    </li>
    <li>
      <a class="email" href="mailto:raymoody10@gmail.com" alt="Email Me" title="Email Me">
      <i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
    </li>
  </ul>
</section>
<!-- 'Learn More' <a> Link to Another Section/Page -->
<!--<a href="about.php"><br><span class="read hide">Learn More</span></a>-->
<?php
include ("inc/footer.php"); 
?>