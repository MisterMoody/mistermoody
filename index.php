<?php
$pageTitle = "Official Homepage of Mister Moody";
include ("inc/header.php"); 
//Contains 'metadata' and '<navigation> element'
?>
<!-- ************************************************** -->
<!-- ******************** <<HOMEPAGE>>  *************** -->

<!-- ** // Start of CONTENT *** -->
<section class="hideMobile">
  <h1 style="height: 28vh; margin: 5em auto">Apologies for the inconvenince. If you would like to view this web page, use a mobile device. Thank you.</h1>
</section>
<!--  **********************************  -->
<section class="hideDesktop">
  <article class="homepage fadeIn">
    <picture>
      <img class="homepage__Image" src="img/guttermuthES.jpg" />
    </picture>
    <!-- -->
    <h2 style="font-weight: 700;">Hi. I'm Ray.</h2>
    <!-- -->
    <h4>I build web apps and teach language art skills.</h4>
    <!-- Quick Nav -->
    <div>
      <a href="about/">About</a> &nbsp;&nbsp; &#124; &nbsp;&nbsp;
      <a href="portfolio/">Portfolio</a> &nbsp;&nbsp; &#124; &nbsp;&nbsp; 
      <a href="contact">Contact</a>
    </div>
    <!-- #Contact + Social Media -->
    <ul class="social">
      <li>
        <a class="github" href="https://github.com/MisterMoody" target="_blank" title="Check Out My Github Portfolio">
          <i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>
        </a>
        </li>
      <li>
        <a class="twitter" href="https://twitter.com/Mister_Moody" target="_blank" title="Follow Me on Twitter">
          <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
        </a>
        </li>
      <li>
        <a class="phone" href="tel:+15025589240" title="Call Me">
          <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
        </a>
        </li>
      <li>
        <a class="email" href="mailto:principal@mistermoody.com" title="Email Me">
          <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
        </a>
        </li>
      </ul>
  </article>
</section>
<!-- ** // End of CONTENT ***** --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("inc/footer.php"); //Contains '<footer>' element'
?>