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
        My career as an educator began when I was an undergraduate employed as a supervisor for an at-risk youth community center. Shortly after graduating university, I embarked on a sojourn abroad to teach English as a second language. 
      </p>
      <p>
       What was supposed to have been a gap year turned into a life altering experience in which my life was immersed in foreign culture.  Being a pseudo-polyglot allowed me to empathize with language acquisition struggles learners encounter and I believe this helped me thrive in assisting learners from China, Japan, South Korea and the United States improve their language fluency. Some of the agencies that have enabled me to practice my craft include Sogang Uni., Oxford Seminars, Joongdong High School, YBM International Academy, Tongxiang Middle School, Jiaxing College and Jefferson County Public Schools (Kentucky). 
      </p>
      <p>Check out my <a href="about/resume">resume</a> to learn more about my skill set.</p>
    </article>
  </section>  
<!-- ** // End of CONTENT ***** --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); //Contains '<footer>' element'
?>