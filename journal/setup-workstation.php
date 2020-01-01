<?php
$pageTitle = "Semantic Markup by Ray Moody";
include ("../inc/journalHeader.php");
?>
<!-- ************************************************** -->
<!-- ************** <<SETUP WORKSTATION>> ************* -->


<!-- // CONTENT-BEGINS ////////////////////////// -->
<article>
  <!-- // Introduction -->
  <section>
    <h2 class="title">Setup a Workstation</h2>
    <figure>
      <img class="mainImage" src="img/workstation.png"/>
      <figcaption>A Simple WorkStation</figcaption>
    </figure>
    <p>
      Learning to build website is an arduous process that requires a sprinkle of intelligence, a splash of determination and a whole lot of patience. This page provides an overview of technical aspects pertinent in being able to facilitate this process. As a project, be minduful that it not only highlights my knowledge as a web developer, but is designed to be an organic tool for my future self. Topics included herein:
    </p>
    <ol>
      <li>What Tools does a Workstation Require?</li>
      <!--<ul>
        <li>...</li>
      </ul>-->
      <li>Install an IDE Text Editor</li>
      <li>Setup a Local Host-Server</li>
      <li>Install a Version Control System</li>
    </ol> 
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 1: Install an IDE -->
  <section>
    <h3>&nbsp;Install an IDE Text-Editor</h3>
    <p>
      An <i>Integrated Development Environment</i> (IDE) is a software application suite that combines tools required to write and test software, and is typically composed of a source code editor, build automation tools (i.e. compiler, interpreter), and a debugger. 
    </p>
    <figure>
      <img src="img/ide.jpg" alt="Example of Brackets Text Editor" />
      <figcaption>The Brackets IDE</figcaption>
    </figure>
    <p>
      IDE's are designed to maximize programmer productivity by providing versatile components within a single program of which all development is done. IDE's typically provide features for authoring, modifying, compiling, deploying and debugging software, which helps developers quickly execute actions without switching to other applications. 
    </p>
    <p>
      One aim of the IDE is to reduce the configuration necessary to piece together multiple development utilities, instead providing the same set of capabilities as a cohesive unit. Reducing that setup time can increase developer productivity, in cases where learning to use the IDE is faster than manually integrating all of the individual tools. Tighter integration of all development tasks has the potential to improve overall productivity beyond just helping with setup tasks. Without an IDE, a developer must select, deploy, integrate and manage all of these tools separately.
    </p>
    <p>
      My IDE of choice is <a href="http://brackets.io/" target="_blank">Brackets</a>, an open-source, cross-platform software that primarily focuses on web development. Some of the reasons that I am partial to this particular IDE revolve around its various built-in features, including, but not limited to: inline editing of CSS and JavaScript elements; live preview of code in a browser; split pane views to work on two files simultaneously; and multiple file format support to write code using one of thrity-eight languages. As well, extensions can be imported via the built-in extension manager; for that matter, developers can create their own extension, a venture I have yet to attempt. Learn more about <a href="https://github.com/adobe/brackets/wiki/How-to-Use-Brackets" target="_blank">How to Use</a> Brackets and explore the <a href="https://onextrapixel.com/best-brackets-extensions/" target="_blank">various</a>-<a href="https://www.designbombs.com/best-free-brackets-extensions/" target="_blank">extensions</a> available for use.
    </p>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 2: Setup a Local Host-Server -->
  <section>
    <h3>&nbsp;Setup a Local Host-Server</h3>
    <p>
      A <i>Localhost Server</i> is a computer networking configuration that creates an online-like environment for developers to test applications without the need for internet access.
    </p>
    <figure>
      <img src="img/xampp.jpg" alt="Example of XAMPP Localhost Server" />
      <figcaption>The XAMPP Localhost Server</figcaption>
    </figure>
    <p>
      Specifically, <i>localhost</i> is the default host name that means this computer and uses the IP address 127.0.0.1 to act as a loopback mechanism, which may be used to run a network service on a host without requiring a physical network interface, or without making the service accessible from the networks the computer may be connected to. The 127.0.0.1 is a universal address reserved for localhost; you can locate your computer IP address by selecting 'start' and typing 'cmd' into the search box. A command prompt will display, then you type 'ipconfig /all' and scroll the list until you find 'IPv4 Address.'
    </p>
    <p>
      Those good folks at <i><a href="https://www.apachefriends.org/index.html" target="_blank">Apache Friends</a></i> offer an open source cross-platform web server-stack with compatible options for users regardless of computer operating system. My localhost of choice is XAMMP, which is compatible with my Windows OS. It incorporates Apache, MySQL and PHP services in order to facilitate a server, store data, and run PHP scripts that can interact with a database.
    </p>
    <p>
      <small><em>Note: Before downloading this program, research alternatives that are best suited for you. Moreover, although outside of the scope of this content, it should be noted that a localhost should not be confused with a Web host, which is a service required in order to publish a website online. The Web host stores and makes files available to computers connected to the Internet website pages.</em></small>
    </p>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 3: Install a Version Control System -->
  <section>
    <h3>&nbsp;Install a Version Control System</h3>
     <p>
       A <i>Version Control System</i> (VCS) is a software configuration, or source sode manager, that records changes to a file or set of files over time; it is a categorization of processes and tools designed to keep track of different versions of software, content, documents, and websites in development.
    </p>
    <figure>
      <img src="img/vcs.JPG" alt="Example of the Github Version Control System"/>
      <figcaption>The Github Version Control System</figcaption>
    </figure>
    <p>
      For all intents and purposes, a VCS is an online storage repository for your code, enabling developers with the ability to manage source-code, track all file versions and coordinate a non-linear workflow in a team environment. Version control allows servers in multiple locations to run different versions on different sites, even while those versions are being updated simultaneously by a number of different developers. The importance of this feature cannot be understated as this system allows developers to compare revised files, identify differences, and merge changes prior to committing any code.
    </p>
    <p>
      My VCS of choice is <u><a href="https://github.com" target="_blank">Github</a></u> due to its integration capabilities. This VCS is well-documented, provides options for using an extension as opposed to the console, and requires authentication when checking-in or out of a repository. Featured tenants of the Github VCS that I enjoy include files never being lost and that those files are always accessible from any location in the world. Moreover, with some tinkering, security features can be implemented using the SSH protocol to synchronously connect with a file server, enabling near instantaneous deployment online. Learn more about <u><a href="https://git-scm.com/book/en/v2/Getting-Started-About-Version-Control" target="_blank">How to Use</a></u> Github and be sure to read the list of <u><a href="management.html">Git Commands</a></u> that I am familiar with and regularly use.
    </p>
  </section>

</article>
<!-- .....CONTENT-ENDS ////////////////////////// --> 


<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>