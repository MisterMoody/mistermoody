<?php
$pageTitle = "Setting Up a Developers Workstation by Ray Moody";
$page = "Workstation";
include ("../../inc/header.php");
?>
<!-- ************************************************** -->
<!-- ************** <<SETUP WORKSTATION>> ************* -->


<!-- // CONTENT-BEGINS ////////////////////////// -->
<article>
  <!-- // Introduction -->
  <section>
    <h1>Workstation</h1>
    <figure>
      <img class="mainImage" src="img/workstation.png"/>
      <figcaption>A Simple Workstation</figcaption>
    </figure>
    <p>
      Learning to build a website is an arduous process that requires a sprinkle of intelligence, a splash of determination and a tall order of patience. This article explores technical aspects required in the facilitation of this process. Topics covered:
    </p>
    <ol>
      <li>Install an IDE Text Editor</li>
      <li>Set up a Local Host-Server</li>
      <li>Set up a Version Control System</li>
    </ol> 
  </section>
  <!-- ************************************************** -->
  <!-- Part 1: Install an IDE -->
  <section>
    <h2 class="title">&nbsp;Install an IDE Text-Editor</h2>
    <p>
      An <i>Integrated Development Environment</i> (IDE) is a software application suite that combines tools required to write and test software, and is typically composed of a source code editor, build automation tools (i.e. compiler, interpreter), and a debugger. 
    </p>
    <figure>
      <img class="mainImage" src="img/ide.jpg" alt="Example of Brackets Text Editor" />
      <figcaption>The Brackets IDE</figcaption>
    </figure>
    <p>
      IDE's are designed to maximize programmer productivity by providing components within a single program of which all development is done. IDE's typically provide features for authoring, modifying, compiling, deploying and debugging software, which helps developers quickly execute actions without switching to other applications. 
    </p>
    <p>
      Using an IDE reduces the configuration necessary to piece together multiple development utilities, instead providing the same set of capabilities as a cohesive unit. Reducing that setup time can increase developer productivity, in cases where learning to use the IDE is faster than manually integrating all the individual tools. Without an IDE, a developer must select, deploy, integrate and manage all of these tools separately.
    </p>
    <p>
      <a href="http://brackets.io/" target="_blank">Brackets</a> is an open-source IDE software that primarily focuses on web development. It includes a variety of built-in features such as inline editing, live code preview, split pane views, an extensions manager and multiple file format support: comprehends 38 languages! Learn more about <a href="https://github.com/adobe/brackets/wiki/How-to-Use-Brackets" target="_blank">using Brackets</a>.
    </p>
    <p>
      These days a developer can code a site using a <a href="https://repl.it/" target="_blank">cloud-based IDE</a> to build and collaborate on projects. 
    </p>
  </section>
  <!-- ************************************************** -->
  <!-- Part 2: Set up a Local Host-Server -->
  <section>
    <h2 class="title">&nbsp;Set up a Local Host-Server</h2>
    <p>
      A <i>Localhost Server</i> is a computer networking configuration that creates an online-like environment for developers to test applications without the need for internet access.
    </p>
    <figure>
      <img class="mainImage" src="img/xampp.jpg" alt="Example of XAMPP Localhost Server" />
      <figcaption>The XAMPP Localhost Server</figcaption>
    </figure>
    <p>
      Specifically, <i>localhost</i> is the default host name that means <em>this computer</em> and uses the IP address <code>127.0.0.1</code>, which is a universal address reserved for localhost. Locate the IP address by selecting the operating systems'(OS) <code>start</code>, then type <code>cmd</code> into the search box. When the command prompt is displayed, type <code>ipconfig /all</code> and scroll the list until you find <code>IPv4 Address</code>. In sum, this is a loopback mechanism, which may be used to run a network service on a host without requiring a physical network interface, or without making the service accessible from the networks the computer may be connected to.  
    </p>
    <p>
      <i><a href="https://www.apachefriends.org/index.html" target="_blank">Apache Friends</a></i> offer an open source cross-platform web server-stack with compatible options for desiners and developers alike. One example is the popular <i>xampp</i> stack, which combines MySQL and PHP services with Windows OS in order to facilitate a server, store data, and run PHP scripts that can interact with a database. 
    </p>
    <p>
      <small><em>Note: A localhost should not be confused with a web host, which is a service required in order to publish a website online. A web host stores and makes files available to computers connected to the Internet.</em></small>
    </p>
    <p>
      Installation can be problematic, but this <a href="https://www.youtube.com/watch?v=ouBh1xdk5GY">tutorial</a> can help mitigate issues. Once installed, start APACHE from the XAMPP Control panel and type <code>http://localhost/</code> or <code>http://127.0.0.1/</code> into the Browser.  This will open at the directory <code>:root</code>, which is the place where all projects reside: <code>C:\xampp\htdocs\</code>.
    </p>
    <p>
      With the local server setup, use the <i>Console</i> to manage files in unison with a version control system. The console is a text-based interface for your pc, which allows you to interface with files, folders and programs using text commands instead of windows, buttons and menus. Devs use this tool to interact directly with servers over a remote connection using SSH protocol. Running commands from the console allows devs to see how options and arguments can be used to specify the behavior of the command specified. <i>Traverse</i> a directory using <code>cd..</code> or <code>cd &#60;folder name&#62;</code> to, respectively, move down or up the directory.
    </p>
  </section>
  <!-- ************************************************** -->
  <!-- ************************************************** -->
  <!-- Part 3: Install a Version Control System -->
  <section>
    <h2 class="title">&nbsp;Install a Version Control System</h2>
    <p>
      A <i>Version Control System</i> (VCS) is a software configuration, or <i>source code manager</i>, that records changes to a file or set of files over time. It is a categorization of processes and tools designed to keep track of different versions of software, content, documents, and websites in development. It is in effect a remote server that allows use of SSH to encrypt traffic to another server.
    </p>
    <figure>
      <img class="mainImage" src="img/vcs.JPG" alt="Example of the Github Version Control System"/>
      <figcaption>The Github Version Control System</figcaption>
    </figure>
    <p>
      For all intents and purposes, a VCS is an online storage repository for your code, enabling developers with the ability to manage source-code, track all file versions and coordinate a non-linear workflow in a team environment. Version control allows servers in multiple locations to run different versions on different sites, even while those versions are being updated simultaneously by a number of different developers. The importance of this feature cannot be understated as this system allows developers to compare revised files, identify differences, and merge changes prior to committing any code. <i><a href="https://github.com" target="_blank">Github</a></i> is a well-documented VCS with many integration capabilities. Use the <a href="https://guides.github.com/introduction/git-handbook/" target="_blank">handbook</a> to learn at your own pace.
    </p>
    <h3 class="title">&nbsp;Deployment</h3>
    <p>
      One of the unique features Git offers is the ability to implement continuous integration by using <i>Ssh Protocol</i> to securely authenticate remote servers. Git does this by providing <code>keys</code> to an <code>agent</code> in order to upload project files directly to the internet. The agent is a <i>Ftp/Sftp</i> client (server) that, if configured properly, provides Git universal remote access to its servers. Thus, devs are able to simultaneously manage and ship code. Using an FTP client can be simple process: <a href="http://filezilla-project.org" target="_blank">FileZilla</a> and <a href="http://cyberduck.ch" target="_blank">CyberDuck</a> are suitable.
    </p>
    <p>
      The amalgamation process begins with <a href="https://git-scm.com/book/en/v2/Git-on-the-Server-Generating-Your-SSH-Public-Key" target="_blank">generating</a> SSH Keys in order to <a href="https://help.github.com/en/github/authenticating-to-github/connecting-to-github-with-ssh" target="_blank">connect</a> with Github. Next, <a href="https://git-scm.com/book/en/v2/Git-on-the-Server-Getting-Git-on-a-Server#_git_on_the_server" target="_blank">get</a> git on and <a href="https://git-scm.com/book/en/v2/Git-on-the-Server-Setting-Up-the-Server" target="_blank">set up</a> the server. There are <a href="https://git-scm.com/book/en/v2/Git-on-the-Server-Third-Party-Hosted-Options" target="_blank">3rd party</a> options for <a href="https://git.wiki.kernel.org/index.php/GitHosting" target="_blank">hosting</a> Git projects on a dedicated site
    </p>
    <p>
      Using Github is no cinche, which is why I wrote an <a href="webdev/git-control" target="_blank">article</a> on the matter, but be sure to <a href="https://github.github.com/training-kit/downloads/github-git-cheat-sheet/">double check</a>.
    </p>
  </section>
  <!-- ************************************************** -->
  <!--          ********** PAGINATION **********          -->
  <?php include ("../../inc/pagination.php"); ?>
  <!-- ************************************************** -->

</article>
<!-- .....CONTENT-ENDS ////////////////////////// --> 


<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../../inc/footer.php"); 
?>