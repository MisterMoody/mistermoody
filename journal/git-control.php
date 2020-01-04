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
    <h1 class="title">Github Version Control</h1>
    <!--<figure>
      <img class="mainImage" src="img/......"/>
      <figcaption>Creating a Repo</figcaption>
    </figure>-->
    <p>
      Github is a distributed <i>Version Control System</i> that helps developers manage different versions of project files. In a distributed system, you can copy a complete repository (ie git, project) with its entire history to any machine making it easy to work remotely on projects from any physical location.
    </p>
		<p>
      Developers utilize Git via <i>commands</i> that are delivered via the console which grants access to a repository. You can edit your files, then run Git commands to store your changes. Each time you complete a change to a project file, Git records a <i>snapshot</i> of their current contents. These snapshots are known as <i>commits</i> which are pushed back to the repository and stored.
    </p>
    <ol>
      <li>GIT Commands Review</li>
      <li>Creating a Repository</li>
      <li>Staging Changes</li>
      <li>Managing Commited Files</li>
      <li>Working with Remote Repositories</li>
    </ol> 
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 1: List of Git Commands -->
  <section>
    <h2>&nbsp;List of Git Commands</h2>
    <br>
    <article class="commands">
      <div class="hideMobile"><b>Git Command</b></div>
      <div class="hideMobile"><b>Git Description</b></div>
      <div><span>git</span> <code>--help</code></div>
      <div><span>Displays a List of Git Commands</span></div>
      <div><span>git</span> <code>clone</code></div>
      <div><span>Setup a New Repository</span></div>		
      <div><span>git</span> <code>init</code></div>
      <div><span>Setup a New Repository</span></div>
      <div><span>git</span> <code>status</code></div>
      <div><span>Displays a List of File Status</span></div>	
      <div><span>git</span> <code>log </code>(<code>-p</code>)</div>
      <div><span>Displays a List of Old Commits</span></div>	
      <div></div>
      <div style="margin-top: -0.4em;"><span>(Show Lines Added to each File)</span></div>
      <div><span>git</span> <code>ls</code></div>
      <div><span>Displays a List of all Repo Files</span></div>
      <div><span>git</span> <code>add </code>(<code>.</code>) <code>filename.ext</code></div>
      <div><span>Stage a File (All Files)</span></div>		
      <div><span>git</span> <code>commit -m</code> (<code>-a</code>)</div>
      <div><span>Commit a File (All Files)</span></div>		
      <div><span>git</span> <code>push</code></div>
      <div><span>Synchronize Commits w/ Master Repo</span></div>		
      <div><span>git</span> <code>pull</code></div>
      <div><span>Synchronize Commits w/ Team Repo</span></div>
      <div><span>git</span> <code>mv</code></div>
      <div><span>Move Files Tracked by Git</span></div>
      <div><span>git</span> <code>rm</code></div>
      <div><span>Remove Files Tracked by Git</span></div>	
    </article>
		<p>
      Git Commands include <i>(Options)</i> that can be specified with a Single dash (<code>-</code>) or a Double dash (<code>--</code>) followed by a Letter or a Word, respectively.
    </p>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 2: Creating a Repository -->
  <section>
    <h2>&nbsp;Creating a Repository</h2>
    <p>
      There are two ways to create a repository: You can <i>Clone</i> a repo from another machine, or you can <i>Initialize</i> a brand new repo.
    </p>
    <article class="commands">
      <div><span>&#91;Step 1&#93; Initialize Repo</span></div>
      <div><span>git</span> <code>init</code></div>
      <div><span>&#91;Step 2&#93; Stage Files</span></div>
      <div><span>git</span> <code>add filename.ext</code></div>
      <div><span>&#91;Step 3&#93; Commit File</span></div>
      <div><span>git</span> <code>commit -m</code> &#43; <code>"Description"</code></div>
      <div><span>&#91;Step 4&#93; User Credentials</span></div>
      <div><span>git</span> <code>config --global</code> &#43; <code>user.email</code> &#43; <code>&#39;your@email.address&#39;</code></div>
      <div><span>(One-Time Process)</span></div>
      <div><span>git</span> <code>config --global</code> &#43; <code>user.name</code> &#43; <code>&#39;userName&#39;</code></div>
      <div><span>&#91;Step 5&#93; Retrieve Remote</span></div>
      <div><span>git</span> <code>remote add origin</code> &#43; <code>https://github.com/</code> &#43; <code>UserName/projectName.git</code></div>
    </article>
    <p>
      When writting commits, have fun including <i><a href="https://emoji.muan.co" target="_blank">Emojis</a></i>!
    </p>
		<p>
      Learn more about Github<i><a href="https://help.github.com/articles/connecting-to-github-with-ssh/t">AUTH</a></i> &amp; <i><a href="https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup">Configurations</a></i>.
    </p>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 3: Staging Changes -->
  <section>
		<h2>&nbsp;Staging Changes</h2>
    <p>
      At this point, you have a repository properly configured and you simply want to save your work. Before saving your work, you run &#91;Step 1&#93; to ascertain what files are ready to be versioned.
    </p>
    <article class="commands">
      <div><span>&#91;Step 1&#93; Check Repo Status</span></div>
      <div><span>git</span> <code>status</code></div>
      <div><span>&#91;Step 2&#93; Stage File</span></div>
      <div><span>git</span> <code>add filename.ext</code></div>
      <div><span>&#91;Step 3&#93; Commit Files</span></div>
      <div><span>git</span> <code>commit -m "Description"</code></div>
      <div><span>&#91;Step 4&#93; Push Files to Repo</span></div>
      <div><span>git</span> <code>push -u origin master</code></div>
    </article>
    <p>
      After performing these four steps, you will be promted to enter your credentials unless you use advanced features that allow you to configure your dev environment.
    </p>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 4: Managing Committed Files -->
  <section>
    <h2>&nbsp; Managing Committed Files</h2>
    <p>Below are commands that may prove useful only after becoming comfortable using the console.</p>
    <article class="commands">
      <div><span>View Comparisons</span></div>
      <div><span>git</span> <code>diff</code>(<code>--staged</code>)</div>
      <div><span>Remove a File</span></div> 
      <div><span>git</span> <code>rm filename.ext</code></div> 
      <div><span>Remove Multiple Files</span></div> 
      <div><span>git</span> <code>rm file1.ext file2.ext file3.ext</code></div> 
      <div><span>Rename a File</span></div> 
      <div><span>git</span> <code>mv "oldFilename.ext newFilname.ext"</code></div> 
      <div><span>Unstage a File</span></div> 
      <div><span>git</span> <code>reset HEAD&#94; <em>filename.ext</em></code></div> 
      <div><span>Discard Recent Changes</span></div> 
      <div><span>git</span> <code>--checkout <em>filename.ext</em></code></div> 
      <div><span>Undo Commited Changes</span></div> 
      <div><span>git</span> <code>log</code></div> 
      <div></div> 
      <div><span>git</span> <code>revert SHA ID#</code></div> 
      <div></div> 
      <div><span>(Copy &amp; Paste the SHA ID# >> The first 5 Numbers are Required!)</span></div> 
    </article>
    <p>
      When using the <code>git diff</code>(<code>--staged</code>) command, files that have been modified will display <code>&#45;</code> while files that have been removed will display <code>&#43;</code>. 
    </p>
    <p>
      The <code>git log</code> command produces a list of Commits along with their <i>Simple Hashing Algorithm</i> (SHM) identification number, which is <em>a checksum of all changes in that commit</em>. The <i>checksum</i> is the result of combining all the changes in the commit and feeding them to an algorithm that generates these 40-character strings. When you need to select a commit from your history, you can use these SHA-1 checksums, or "SHAs" for short, to identify which commit you want.
    </p>
    <p>
      Fixing errors or mistakes can be a pain in the arse so it benefits developers to explore further: perhaps understanding <code>resets</code> would be beneficial.
    </p>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 4: Working with Remote Repositories -->
  <section>
    <h2>&nbsp;Working with Remote Repos</h2>
    <p>
      Using github for independent projects is slightly different when working with others. For starters, a repository that you own is <i>Local</i> whilst a one owned by another developer is known as a <i>Remote</i>. Each repo is a full copy of its original, including version history.
    </p>
    <p>
      While developers can make commits to their own repo independent of others, a dev must always pull commits other developers have made from a remote to a local in order to maintain the most up-to-date version.
    </p>
    <article class="commands">
      <div><span>Clone a Repo</span></div>
      <div><span>git</span> <code>clone</code> &#43; <code>https://github.com/user/repo</code> &#43; <code>newlocalFolder</code></div>
      <div><span>Add Remote</span></div>
      <div><span>git</span> <code>remote add origin</code> &#43; <code>https://github.ProjectURL.git</code></div>
      <div><span>View Remote</span></div>
      <div><span>git</span> <code>remote</code> <span>(Default Remote Name is 'origin')</span></div>
      <div><span>Update Repo</span></div>
      <div><span>git</span> <code>pull origin</code> <span>(Add Updated Files to Directory)</span></div>
    </article>
    <p>
      Collaborators typically use a declared central repository and gain acces via cloning into their local machine. This allows developers to work on different components that can be added to the central repo by pushing commits. Simply add the repo by name to the folder on your local machine.
    </p>
  </section>
</article>


<!-- .....CONTENT-ENDS ////////////////////////// --> 


<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>