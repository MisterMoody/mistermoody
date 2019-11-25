<?php
$pageTitle = "Mister Moodys PORTFOLIO";
include ("../inc/header.php");
?>
<!-- ******************************************************* -->
<!-- ***************** << PORTFOLIO >>  ******************** -->

  <!-- CURRICULUM "TOPICS"  -->
  <article class="">
    <section>
      <h2>[ <b><em>PORTFOLIO</em></b> ]</h2>
      <p>The contents of this portfolio are designed to provide tangible evidence of my knowledge and skillset related to developing web applications and providing TEFL instruction.</p>
      <p>A work in progress for sure, anticipate a swell collection no later than January 2020!</p>
    </section>
  </article>

  <article class="cur__TopicGrid">
    <section class="cur__TopicStyle">
      <div class="language">
        <h1>ESL Teaching</h1>
        <div id="overlayLangArts">
          <div id="textLangArts">
            <i class="fa fa-times" onclick="clickOffLangArts()"></i>
            <p>
              Communication, regardless of language, is simply the act of exchanging information, and one’s ability to articulate their ideas in a fashion that is readily comprehensible will prove them to be an effective communicator. Speaking patiently, avoiding the use of jargon and taking into account cultural differences are significant means by which a speaker can convey their message. Listeners can strive for full comprehension of a speaker’s message by listening intently, remaining open-minded about the subject and being courteous to the speaker by not interrupting them during oration. It comes as no surprise that when people ignore these best practices, issues in communication arise. "C'est la vie~ 4 da win on dat reelnegusish!"
            </p>
            <p>
              As an autodidact, I have studied five foreign languages in a formal academic setting and taught myself four programming languages through independent study. Moreover, I have provided more than 10,000 hours of language instruction to learners of English as a Second Language, facilitating courses to individuals of varying age and fluency levels. This course is intended for learners of all ages who strive to speak proper English, emphasizing vocabulary, encoding, coherence, non-verbal cues and connections, and gauging your audience.
            </p>
            <p><a href="portfolio/TEFL" class="btn">TEFL Teaching</a></p>
          </div>
        </div>  
      </div>
      <button class="modalBTN" onclick="clickOnLangArts()">Learn More</button>
    </section>
    <section class="cur__TopicStyle">
      <div class="code">
        <h1>Web Implementations</h1>
        <div id="overlayWebDev">
          <div id="textWebDev">
            <i class="fa fa-times" onclick="clickOffWebDev()"></i>
            <p>
              The internet allows people to communicate with others and acquire knowledge on demand. There are literally thousands of web apps that people can use to interact, learn and share information. All apps require user permission to access a device and research indicates that users rarely read those permissions, granting the developing company access to certain data stored on that device. More often than not, data is compromised by a third-party, and depending on the data received, that data could be used for nefarious pursuits. 
            </p>
            <p>
              Advancements in technology will only enhance means by which we are able communicate. For instance, brain controlled technology: the idea that a human can use their mind to control virtual and real objects, is no longer an idea –it’s an actual product. Thus, it is more important than ever for youth to learn best practices which produce positive and self-fulfilling experiences, enabling the learners to move forward with an understanding of the important role that technology plays in our everyday lives. 
            </p>
            <div class="tags">
              <div>HTML5</div>
              <div>CSS3</div>
              <div>JavaScript</div>
              <div>Github</div>
              <div>XAMPP</div>
              <div>Filezilla</div>
            </div>
            <p><a href="portfolio/webdesign" class="btn">Web Design</a></p>
          </div>
        </div>  
      </div>
      <button class="modalBTN" onclick="clickOnWebDev()">Learn More</button>
    </section>
  </article>
    <!--<section>
      <p>
        I put together a table of useful <a class="resourceText" href="webdesign" alt="Link to Resources" target="_blank" title="Online Resources">Online Resources</a> that help me build websites, which is a supplement to this <a class="resourceText" href="https://mistermoody.github.io/" alt="Link to Blog" target="_blank" title="Blog of Knowledge">DIY Guide</a> for creating a website.
      </p>
      <p>
        Self-taught web implementation specialist able to proficiently design, develop and deploy a web application to specification. As a designer, I can adapt a low-fidelity prototype into a viable website using HTML, CSS, JavaScript, content management tools and digital media. As a developer, I utilize the PHP scripting language that incorporates object-oriented programming practices to integrate server-side functionality into a web application. Vital components of this process entails auscultating user-experience; amalgamating accessibility, performance requirements and other technical considerations; HTTP server installation; database configuration; and using the SSH protocol in conjunction with version control to provide secure remote access to mitigate maintenance concerns. To this end, I am currently exploring opportunities by which I can leverage my skillset to pursue a position in the tech industry.
      </p>
    </section>-->
<!-- ******************************************************* -->
<!-- ******************************************************* -->
<?php
include ("../inc/footer.php"); 
?>