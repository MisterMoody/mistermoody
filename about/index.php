<?php
$pageTitle = "Official Homepage of Mister Moody";
include ("../inc/header.php")
//Contains 'metadata' and '<navigation> element'
?>
<!-- ************************************************** -->
<!-- ******************** <<HOMEPAGE>>  *************** -->

<!-- ** // Start of CONTENT *** -->
  <section>
    <aside class="aboutIntro">
      <h2>Hi. I'm Mister Moody.</h2>
      <img class="mainImage" src="img/workVanilla.jpg">
      <h4>I build web applications and teach language art skills.</h4>
      <!-- Update .aboutIntro{} IF Delete 'scroll' -->
      <a class="scroll bounce" href="about/#read" title="Scroll Down">
          <i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a>
    </aside>
    <article>
      <p id="read">
        As a TEFL instructor, I have accumulated a plethora of experiences delivering language acquisition services for learners studying at private and public institutions of education in China, Japan, South Korea and the United States. The opportunities that were afforded to me yielded a diverse experience by which I was enabled to work with individuals of varying age, fluency and cultural awareness. 
      </p>
      <p>
        <img class="imgR" src="img/knowledge.jpg">Sogang University, Oxford Seminars, Joogdong High School, YBM International Academy, Tongxiang Modern Experimental School,  Jiaxing University and Jefferson County Public Schools (Kentucky) are a few agencies that enabled me to hone my craft in promoting 21st century digital learning and literacy skills.
      </p>
      <p>Check out my <a href="about/resume">resume</a> to learn more.</p>
      </article>
    <!--<article>
      <img src="img/code.png">
    </article>-->
  </section>  
  <!-- HIDDEN PARALAX BKGRD 
  <section>
    <aside class="parallaxGrid">
      <div class="bgImg1"></div>
      <div class="bgImg2"></div>
      <div class="bgImg3"></div>
      <div class="bgImg4"></div>
      <div class="bgImg7"></div>
    </aside>
  </section> -->
<!-- ** // End of CONTENT ***** --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); //Contains '<footer>' element'
?>