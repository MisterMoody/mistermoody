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
      <!-- OLD 'about/' Intro Content -->
      <!--<p>For nearly 20 years, I have worked with public and private institutions of education in America, China, Japan and South Korea. My contributions as a non-traditional educator consist of providing TEFL teacher training services, developing curricula, analyzing learner assessments, and facilitating courses for learners of varying fluency levels. In the few years that I have practiced web development, I have become a proficient project manager capable of designing, developing and deploying an application to specification using HTML, CSS, JavaScript and PHP. The creative process in and of itself can be loads of fun, but it’s the peculiar challenges that arise when coding an interactive application that fuels my drive.
As a life-learner, I have always held a tremendous amount of respect for academics and the learning process as a whole. Learning was a value instilled in me by my mother who thought I was a cheeky youth, and instead of taking privileges away from me whenever I misbehaved, she would confine me to my bedroom and force me to read a book then summarize what I read. Talk about cruel and unusual punishment. Being a disciplined learner from a young age, I have an incessant thirst for knowledge, which undoubtedly led to my attendance at six universities in three countries. Of the multiple disciplines that I have studied, foreign language has invariably had the most profound impact on my life as it has allowed me to pursue career opportunities that I would otherwise not be privy to while affording me a unique perspective of the foreign cultures that I lived within.

      </p> -->
      <!-- Web Tech Skillset -->
      <!--
      <p>Acquiring in-depth knowledge of design, development, deployment and management, insofar as it relates to software engineering, are imperative aspects of becoming a Web Implementation Specialist. During the past few years, I have worked diligently utilizing open-source content to become a self-taught web developer. Along my journey, I have staggered, struggled and stumbled miserably, but I never stopped chasing the dream. 

Nowadays, I am quite comfortable adapting a low-fidelity prototype into a viable web product, which entails auscultating user-experience and browser compatibility while incorporating technical considerations such as accessibility, documentation, performance requirements, and what have you. Using HTML, CSS, JavaScript, content management tools and digital media, I can create structurally sound web pages using authentic content with detailed descriptions based on particular specification, such as the applications’ activities or its product features.

Wherein web design is all about being creative and having fun to produce a brilliantly curated presentation, integrating functionality into a web program is an arduous revolving pattern: Build. Test. Repeat. An unwavering mentality is required and mental stress will always reign as the inevitable byproduct of bringing an application to life! Admittedly, my design skills are superior to my developer skillset, but I know that I am able to mitigate a host of issues by keeping an open line of communication with team members and/or the leader of a project regarding prioritization of needs, developing content-criteria, resolving conflicts of interest and choosing solutions for problems in real-time. Object-Oriented Programming using the PHP scripting language is my coding-style of choice as its modularity makes managing an application simple by keeping different sections of code separated into components that can be reused independently.  

By the grace of <a href=””>ElePHPant</a>, I can competently develop application models and page templates that meet project goals and user needs while giving a critical eye to the code to ensure that it indeed fulfills all technical requirements. I cannot, however, proficiently develop a database that supports a web application, particularly when there is a plethora of data. There is no greater fear than producing an output that eerily resembles spaghetti code. I almost got the hang of it. Almost.

Deployment is my favorite part of this entire process if only because it is the less time consuming. Installing and configuring an HTTP server with associated an operating system, to encrypt the transference of all communications and data for the sites user, is not as difficult as it sounds. Establishing an appropriate server directory tree using suitable folder names and file extensions is important, but equally manageable. The magic takes place in the realm of security, that is: securing a project.  An FTP/SFTP client, is required to upload project files to the internet, however, depending on the number of files, it could literally take you hours to load an ‘updated’ version of a webpage. The more efficient way to ‘update’ a webpage would be to acquire SSH-keys from a version control system then add it to the SSH-agent, which is the FTP/SFTP client. Using the SSH protocol enables developers to securely authenticate servers and services remotely without providing a username or password. Ever.

A project is a project. When you are done, you are done. Working with web applications is a never ending hustle in that once you finish one project, it is time to move on to the next one. But there is always a chance of having to turn around to work on a previously built website. I think it is important to always look at the big picture and with that in mind, my preference would be to discuss the projects life cycle before drawing a prototype. 
With a solid idea of what updates would be required and a general estimate of how much time it would take to complete the objectives, it is always best to generate a schedule of procedures for future or on-going website revisions. 

Envision the following scenario: a developer is charged with ensuring the integrity of sourced content for every hyperlink embedded in a website and this site has in excess of 1,000 pages. This project could take anywhere from a day to a month to a year to maintain every single hyperlink to and from other websites to. 
With a solid idea of what updates would be required and a general estimate of how much time it would take to complete the objectives, it is always best to generate a schedule of procedures for future or on-going website revisions.
And then on to the next project.
I would like to conclude by stating that I am confident in my ability to demonstrate an advanced knowledge of the internet and associated tools utilized to produce web application. In general, the learning process, in and of itself, is personally gratifying and as a life-long learner, I set aside timely daily to stay abreast of current web technologies and programming practices.

      </p>
      -->
      <p id="read">
        <img class="imgR" src="img/knowledge.jpg">As a TEFL instructor, I have delivered language acquisition services for learners of varying age and fluency studying at private and public institutions of education in China, Japan, South Korea and the United States. 
      </p>
      <p>
        Opportunities afforded to me yielded a diverse career whereby I immersed my life in foreign culture as an emigrant, which cultivated a work ethic that allowed me to relate to struggles encountered by the learners I served. Sogang University, Oxford Seminars, Joongdong High School, Tongxiang Modern Experimental School, Jiaxing University and Jefferson County Public Schools (Kentucky) are agencies that have enabled me to conduct my craft in promoting 21st century literacy skills.
      </p>
      <p>Check out my <a href="about/resume">resume</a> to learn more about my skillset.</p>
    </article>
  </section>  
<!-- ** // End of CONTENT ***** --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); //Contains '<footer>' element'
?>