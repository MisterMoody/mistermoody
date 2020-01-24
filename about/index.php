<?php
$pageTitle = "Official Homepage of Mister Moody";
include ("../inc/header.php")
//Contains 'metadata' and '<navigation> element'
?>
<!-- ************************************************** -->
<!-- ******************** <<HOMEPAGE>>  *************** -->

<!-- ** // Start of CONTENT *** -->
<section class="hideMobile">
  <h1 style="height: 28vh; margin: 5em auto">Apologies for the inconvenince. If you would like to view this web page, use a mobile device. Thank you.</h1>
</section>
  <section class="hideDesktop">
    <article>
      <!-- Profile Card: Techie + Teacher -->
      <aside class="profile__card--Grid">
        <div class="profile__card">
          <div class="profile__info">
          <div class="rings">
            <div class="outer__ring"></div>
            <div class="inner__ring"></div>
            <img src="img/me.jpg">
          </div>
          <div class="profile__description">
            <h2>Ray Moody</h2>
            <div class="profile__can">
              <div>Age:</div>
              <div> 
                <?php $age = new DateTime('1.2.1979'); $today = new Datetime(date('m.d.y')); $diff = $today->diff($age); echo sprintf(' %d.%d ', $diff->y, ($diff->m/12)*100); ?>
              </div>
              <div>Height:</div>
              <div>182cm</div>
              <div>Hometown:</div>
              <div>Louisville, KY</div>
              <div>Vocation:</div>
              <div>Techie / Teacher</div>
              <div>Languages:</div>
              <div>English, 中文</div>
              <div>Status:</div>
              <div>Seeking Work</div>
            </div>
          </div>
        </div>
        </div>
        <p class="profile__card--Paragraph">
          I am currently a substitute teacher with <a href="http://jefferson.kyschools.us" target="_blank">J.C.P.S.</a> KY serving the needs of youth kindergarten through grade 12. Employed since <code>January 2018</code>, I have been awarded <code>100+</code> assignments at <code>42</code> schools where I have facilitated lessons to more than <code>2,700</code> students.
        </p>
        <p class="about__Intro-Paragraph">
          My career as an educator began while studying at the University of Louisville where I earned a degree in political science. It was here I gained leadership experience through a plethora of opportunities, but it was my role as supervisor serving at-risk youth for a <a href="https://www.cabbagepatch.org/" target="_blank">non-profit</a> that convinced me of my calling: I was 19. 
        </p>
      </aside>
      <!-- Social Proof: @ School -->
      <br>
      <aside class="imageGrid">
        <img src="img/westernMS.jpg">
        <img src="img/cnID.jpg" style="height: 100%;">
        <img src="img/yungn.jpg" style="height: 100%;">
        
        <img src="img/jpnstamp.jpg" style="height: 100%;">
        <img src="img/brandeisES.jpg">

        <img src="img/clES2.jpg">
        <img src="img/cleSTEMLab.png">
        <img src="img/coleridgeES.jpg">
        
        <img src="img/jdhs.jpg" style="height: 100%;">
        <img src="img/GH-Shyrock.jpg">
        <img src="img/jpnyahata.jpg" style="height: 100%;">
      </aside>
      <br>
      <!-- Career Experience --> 
      <p class="profile__card--Paragraph">
        Shortly after graduation, I embarked on a sojourn abroad to teach English as a second language. What was supposed to have been a gap year before enrolling in law school turned into a life altering foreign cultural immersive experience.
      </p>
      <p class="profile__card--Paragraph">
        Life as an emigrant was challenging, yet, as a life-learner having formally studied Francais, Espanol, Hangul, Nihongo and Putonghua, I empathize well with language acquisition struggles learners encounter. Some of the agencies that enabled me to practice my craft include Sogang University, Oxford Seminars, Joongdong High School, YBM Academy, Chien-Shiung Institute of Technology, Tongxiang Middle School, Shanghai Ocean University and Jiaxing College.
      </p>
      <!-- Social Proof: @ Asia -->
      <br>
      <aside class="imageGrid">
        <img src="img/oceanuniv.jpg">
        <img src="img/workVanilla.jpg" style="height: 100%;">
        <img src="img/KingsTable.jpg">
        
        <img src="img/knowledge.jpg" style="height: 100%;">
        <img src="img/tailorVanilla.jpg">

        <img src="img/jpnPlug.jpg" style="height: 100%;">
        <img src="img/jdhs.jpg">
        <img src="img/springfest17.jpg">
      </aside>
      <br>      
      <p class="profile__card--Paragraph">
        My interest in web technologies stems from my participation in  <a href="https://codelouisville.org" target="_blank">&#60;code&#62; Louisville</a>, a web dev platform introduces best practices and concepts related to front-end web development.  To this end, I can design, develop and deploy a website to specification. Currently doing my part to build the ecosystem, most recently aiding in the organization of a local startup event. Currently working on an <a href="webdesign/">e-book</a> for individuals interested in learning the craft.
      </p>
      <br>
      <figure><img class="mainImage" src="img/startupWKND.jpg"></figure>
      <!-- Call-to-Action BTN -->
      <aside>
        <button class="cta"><a href="portfolio/">Check out my Portfolio</a></button> 
      </aside>
    </article>
  </section>  
<!-- ** // End of CONTENT ***** --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); //Contains '<footer>' element'
?>