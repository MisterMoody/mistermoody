<?php
$pageTitle = "Official Homepage of Mister Moody";
include ("inc/homepage.php"); 
//Contains 'metadata' and '<navigation> element'
?>
<!-- ************************************************** -->
<!-- ******************** <<HOMEPAGE>>  *************** -->

<!-- ** // Start of CONTENT *** -->

  <!--  ** MOVED to 'about/resume.php' ***  -->
  <!--<section class="intro">
    <p>
      <img class="imgL" src="img/workVanilla.jpg">Non-traditional educator with a plethora of experiences delivering language acquisition services for private and public institutions of education in China, Japan, South Korea and the United States.
    </p>
    <p>
      Course facilitation practices that I promote amalgamates 21<sup>st</sup> Century Learning and Literacy Skills that encourage youth to be diligent learners in the classroom and on the internet. Core compenticies include critical processing of information, communicative etiquette and mutually beneficial collaboration with peers.
    </p>
    <h3><a href="about/" class="btn">Learn More</a></h3>
    <p></p>
  </section>-->
  <!--  **********************************  -->
<article class="homepage">
  <section>
    <img class="mainImage" src="img/me.jpg" />
    <h4>
      <a href="about/">About</a> &nbsp;&nbsp; &#124; &nbsp;&nbsp;
      <a href="portfolio/">Portfolio</a> &nbsp;&nbsp; &#124; &nbsp;&nbsp; 
      <a href="contact">Contact</a>
    </h4>
    <!-- #Contact + Social Media -->
    <ul class="social">
      <li>
        <a class="github" href="https://github.com/MisterMoody" target="_blank" title="Check Out My Github Portfolio">
          <i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></a>
        </li>
      <li>
        <a class="twitter" href="https://twitter.com/Mister_Moody" target="_blank" title="Follow Me on Twitter">
          <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
        </li>
      <li>
        <a class="phone" href="tel:+15025589240" title="Call Me">
          <i class="fa fa-mobile fa-2x" aria-hidden="true"></i></a>
        </li>
      <li>
        <a class="email" href="mailto:principal@mistermoody.com" title="Email Me">
          <i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
        </li>
    </ul>
  </section>
</article>
<!-- ** // End of CONTENT ***** --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("inc/footer.php"); //Contains '<footer>' element'
?>