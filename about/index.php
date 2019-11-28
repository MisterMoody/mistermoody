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
      <h2>Hi. I'm Ray.</h2>
      <img class="mainImage" src="img/workVanilla.jpg">
      <h4>I build web applications and teach language art skills.</h4>
      <!-- Update .aboutIntro{} IF Delete 'scroll' -->
      <a class="scroll bounce" href="about/#read" title="Scroll Down">
          <i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a>
    </aside>
    <article>
      <p id="read">
        <img class="imgR" src="img/knowledge.jpg">As a TEFL instructor, I have delivered language acquisition services for learners of varying age and fluency studying at private and public institutions of education in China, Japan, South Korea and the United States. 
      </p>
      <p>
        Opportunities afforded to me yielded a diverse career whereby I immersed my life in foreign culture as an emigrant, which cultivated a work ethic that allowed me to relate to struggles encountered by the learners I served. Sogang University, Oxford Seminars, Joongdong High School, Tongxiang Modern Experimental School, Jiaxing University and Jefferson County Public Schools (Kentucky) are agencies that have enabled me to conduct my craft in promoting 21st century literacy skills.
      </p>
      <p>Check out my <a href="about/resume">resume</a> to learn more about my skillset.</p>
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