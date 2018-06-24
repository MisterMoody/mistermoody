<?php

$pageTitle = "About Mister Moody";

include ("inc/header.php");
?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<section id="about">
  <p class="slideL"><img src="img/yungn.JPG" class="imgR" alt="Mister Moody"/>For nearly 20 years, I have worked with public and private institutions of education in America, China, Japan and South Korea. My contributions as a non-traditional educator consist of providing TEFL teacher training services, developing curricula, analyzing learner assessments, and facilitating courses for learners of varying fluency levels.</p>
  <p class="slideR"><img src="img/workVanilla.jpg" class="imgL" alt="Mister Moody"/>Still in the infancy of my web dev career, I have become rather adept at designing, developing and deploying  applications to spec using HTML, CSS, JavaScript and PHP. As a  developer, the creative process of application design can be loads of fun, but it’s the peculiar challenges that arise when coding an interactive application that fuels my drive.</p>
  <br>
  <hr style="margin: 0 auto;">
  <br>
  <div class="subGrid">
    <div class="card">
      <div class="training">
        <h3>Training</h3>
        <div>
          <table>
            <tr>
              <td class="date">2015</td>
              <td class="train">Web Dev Training</td>
            </tr>
            <tr>
              <td class="place">USA</td>
              <td class="institution">Treehouse</td>
            </tr>
            <tr>
              <td class="date">2011</td>
              <td class="train">Manadarin Language</td>
            </tr>
            <tr>
              <td class="place">China</td>
              <td class="institution">Shanghai Ocean University</td>
            </tr>
            <tr>
              <td class="date">2010</td>
              <td class="train">MOS Training</td>
            </tr>
            <tr>
              <td class="place">USA</td>
              <td class="institution">Microsoft</td>
            </tr>
            <tr>
              <td class="date">2007</td>
              <td class="train">TEFL Teacher Training</td>
            </tr>
            <tr>
              <td class="place">Thailand</td>
              <td class="institution">ITTT, Inc.</td>
            </tr>
            <tr>
              <td class="date">2003</td>
              <td class="train">B.A. Political Science</td>
            </tr>
            <tr>
              <td class="place">USA</td>
              <td class="institution">University of Louisville</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="skills">
        <h3 style="margin-bottom: 15px;">Skills</h3>
        <div class="SkillBar">
          <div id="Skill-Design">
            <span class="Skill-Area">Design</span> <span class="PercentText">75%</span>
          </div>
        </div>
        <p class="skillSpecs">HTML | CSS | Accessibility | Systems</p>
        <div class="SkillBar">
          <div id="Skill-Develop">
            <span class="Skill-Area">Develop</span> <span class="PercentText">64%</span>
          </div>
        </div>
        <p class="skillSpecs">PHP | Composer | JavaScript | npm</p>
        <div class="SkillBar">
          <div id="Skill-Deploy">
            <span class="Skill-Area">Deploy</span> <span class="PercentText">81%</span>
          </div>
        </div>
        <p class="skillSpecs">Host | Version Control | SFTP</p>
        <div class="SkillBar">
          <div id="Skill-Copy">
            <span class="Skill-Area">Writing &amp; Editing</span> <span class="PercentText">95%</span>
          </div>
        </div>
        <p class="skillSpecs">Creative | AP &amp; MLA Style | Research</p>
        <div class="SkillBar">
          <div id="Skill-Interpersonal">
            <span class="Skill-Area">Interpersonal</span> <span class="PercentText">88%</span>
          </div>
        </div>
        <p class="skillSpecs">Ethical | Organized | Problem Solver</p>
      </div>
    </div>
  </div>
  <div class="report-card treehouse"></div>
  <p class="downloadCV btn"><a class="dCV" src="moodyCV.docx" href="moodyCV.docx" title="View My Work History"  alt="View My Work History">Download CV <i class="fa fa-cloud-download" aria-hidden="true"></i></a></p> 
</section>

  <br>
  <hr style="margin: 0 auto;">
  <br>

<section id="services">
  <h2>Services</h2>
  <p>Affordable virtual assistance for entrepreneurs and students.</p>
  <div class="servicesGrid">
    <div class="develop servicesCard slideR">
      <i class="fa fa-laptop fa-2x" aria-hidden="true"></i> <span class="scTitle">Web Design</span>
      <p class="serviceIntro">Retrofit your legacy website or re-brand your online presence from scratch.</p>
    </div>
    <div class="edit servicesCard slideL">
      <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> <span class="scTitle">Writing</span>
      <p class="serviceIntro">Creative writing style and logical investigative tactics suitable for any composition.</p>
    </div>
    <div class="esl servicesCard slideR">
      <i class="fa fa-language fa-2x" aria-hidden="true"></i> <span class="scTitle">ESL/TEFL</span>
      <p class="serviceIntro">Motivational facilitator with an uncanny ability to inspire the most stubborn learner.</p>
    </div>
  </div>

</section>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->       
<?php
include ("inc/footer.php"); 
?>