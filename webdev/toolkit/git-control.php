<?php
$pageTitle = "Version Control with Git by Ray Moody";
$page = "Git Control";
include ("../../inc/header.php");
?>
<!-- ************************************************** -->
<!-- ************** <<SETUP WORKSTATION>> ************* -->


<!-- // CONTENT-BEGINS ////////////////////////// -->
<article>
  <!-- // Introduction -->
  <section>
    <h1>Github Version Control</h1>
    <p>
      Github is a distributed <i>Version Control System</i> that helps developers manage different versions of project files. In a distributed system, you can copy a complete repository (ie git, project) with its entire history to any machine making it easy to work remotely on projects from any physical location. Learn <a href="https://git-scm.com/book/en/v2/Getting-Started-About-Version-Control" target="_blank">how to use</a> Github and check out this <a href="https://github.github.com/training-kit/downloads/github-git-cheat-sheet/">cheat sheet</a>.
    </p>
		<p>
      Developers utilize Git via <i>declarations</i> that are delivered via the console which grants access to a repository. You can edit your files, then run Git declarations to store your changes. Each time you complete a change to a project file, Git records a <i>snapshot</i> of their current contents. These snapshots are known as <i>commits</i> which are pushed back to the repository and stored.
    </p>
    <ol>
      <li>Creating a Repository</li>
      <li>Staging Changes</li>
      <li>Managing Commited Files</li>
      <li>Working with Remote Repositories</li>
    </ol> 
  </section>
  <!-- ************************************************** -->
  <!-- Part 2: Creating a Repository -->
  <section>
    <h2 class="title">&nbsp;Creating a Repository</h2>
    <p>
      There are two ways to create a repository: You can <i>Clone</i> a repo from another machine, or you can <i>Initialize</i> a brand new repo. The process begins in the local host root directory.
    </p>
    <p>Cloning an existing machine is really simple using the command line:</p>
    <article class="declarations">
      <div><code>git clone &#60;https://name-of-the-repository-link&#62;</code></div>
    </article>
    <p>Initializing a repo is a more delicate process, but the demonstration below will suffice.</p>
    <article class="declarations">
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
      Learn more about Github<i><a href="https://help.github.com/articles/connecting-to-github-with-ssh/t">AUTH</a></i> &amp; <i><a href="https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup">Configurations</a></i>.
    </p>
  </section>
  <!-- ************************************************** -->
  <!-- Part 3: Staging Changes -->
  <section>
		<h2 class="title">&nbsp;Staging Changes</h2>
    <p>
      At this point, you have a repository properly configured and you simply want to save your work. Before saving your work, you run &#91;Step 1&#93; to ascertain what files are ready to be versioned.
    </p>
    <article class="declarations">
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
      Include <i><a href="https://emoji.muan.co" target="_blank">emojis</a></i> when writing commits!
    </p>
    <p>
      After performing these four steps, you will be promted to enter your credentials unless you use advanced features that allow you to configure your dev environment.
    </p>
  </section>
  <!-- ************************************************** -->
  <!-- Part 4: Managing Committed Files -->
  <section>
    <h2 class="title">&nbsp; Managing Committed Files</h2>
    <p>Below are declarations that may prove useful only after becoming comfortable using the console.</p>
    <article class="declarations">
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
      <div><span>git</span> <code>log</code> &#43; <span>git</span> <code>revert SHA ID#</code></div> 
      <div></div> 
      <div><span>(Copy &amp; Paste the SHA ID# >> The first 5 Numbers are Required!)</span></div> 
    </article>
    <p>
      When using the <code>git diff</code>(<code>--staged</code>) command, files that have been modified will display <code>&#45;</code> while files that have been removed will display <code>&#43;</code>. 
    </p>
    <p>
      The <code>git log</code> command produces a list of Commits along with their <i>Simple Hashing Algorithm</i> (SHA) identification number, which is <em>a checksum of all changes in that commit</em>. The <i>checksum</i> is the result of combining all the changes in the commit and feeding them to an algorithm that generates these 40-character strings. When you need to select a commit from your history, you can use these SHA-1 checksums, or "SHAs" for short, to identify which commit you want.
    </p>
    <p>
      Fixing errors or mistakes can be a pain in the arse so it benefits developers to explore further: perhaps understanding <code>resets</code> would be beneficial.
    </p>
  </section>
  <!-- ************************************************** -->
  <!-- Part 5: Working with Remote Repositories -->
  <section>
    <h2 class="title">&nbsp;Working with Remote Repos</h2>
    <p>
      Using github for independent projects is slightly different when working with others. For starters, a repository that you own is <i>Local</i> whilst a one owned by another developer is known as a <i>Remote</i>.  Each repo is a full copy of its original, including version history.
    </p>
    <p>
      While developers can make commits to their own repo independent of others, a dev must always pull commits other developers have made from a remote to a local in order to maintain the most up-to-date version.
    </p>
    <article class="declarations">
      <div><span>Clone a Repo</span></div>
      <div><span>git</span> <code>clone</code> &#43; <code>https://github.com/user/repo</code> &#43; <code>newlocalFolder</code></div>
      <div><span>Add Remote</span></div>
      <div><span>git</span> <code>remote add origin</code> &#43; <code>https://github.ProjectURL.git</code></div>
      <div><span>View Remote</span></div>
      <div><span>git</span> <code>remote</code> <span>(Default Remote Name is 'origin')</span></div>
      <div><span>Update Repo</span></div>
      <div><span>git</span> <code>pull origin</code> <span>(Add Updated Files to Directory)</span></div>
    </article>
  </section>
  <!-- ************************************************** -->
  <!-- Part 6: Branching -->
  <section>
    <h2 class="title">&nbsp;Branching</h2>
    <p>
      Collaborators typically use a declared central repository and gain access via cloning into their local machine. This allows developers to work on different components that can be added to the central repo by pushing commits. Simply add the repo by name to the folder on your local machine. In this regard, it is a best practice to conduct work outside of the master branch: enter, branching. This is the act of creating a temporary branch when creating a new web app feature. Then adding that feature to the master branch only after the code has been vetted. Keep in mind
    </p>
    <p>
      Branches, for all intents and purposes, are like alternate timelines. You will know what branch you are on by looking for the branch with the 'star' next to it: this is the branch that is checked-out. Temporary branches are stored locally, not in the repository: in fact, commit history is totally separate. Thus, when refactoring or making a substantial change to a project, there are not disruptions. When edits are complete and the code gets the OK, it will be merged into the master branch for deployment.
    </p>
    <article class="declarations">
      <div><span>View All Branches</span></div>
      <div><span>git</span> <code>branch (--list)</code></div>
      <div><span>Create a Branch</span></div>
      <div><span>git</span> <code>branch</code> &#43; <code>branch_feature</code></div>
      <div><span>Push to Remote Repo</span></div>
      <div><span>git</span> <code>push -u</code> &#43; <code>remote</code> &#43; <code>branch_feature</code></div>
      <div><span>Switch to Feature Branch</span></div>
      <div><span>git</span> <code>checkout</code> &#43; <code>branch_feature</code></div>
      <div><span>Switch to Master Branch</span></div>
      <div><span>git</span> <code>checkout</code> &#43; <code>master</code></div>
      <div><span>Update Master Branch</span></div>
      <div><span>git</span> <code>fetch (origin)</code></div>
      <div><span>Merge Feature Branch</span></div>
      <div><span>git</span> <code>merge</code> &#43; <code>branch_feature</code></div>
      <div><span>Resolve Merge Conflicts</span></div>
      <div><span>git</span> <code>merge</code> &#43; <code>-abort</code></div>
      <div><span>Delete Feature Branch</span></div>
      <div><span>git</span> <code>branch -d</code> &#43; <code>branch_feature</code></div>
    </article>
    <p>
      Sometimes the process of merging file contents doesn't go so smoothly. When you change the same part of the file in both branches you're trying to merge together, Git won't be able to merge the changes automatically due to a conflict that must be manually corrected. Remember, head is a marker that points to your currently checked out commit. So the head section is the code from the branch that you're merging into. This line of equal signs divides the changes from the two branches. And the ending conflict resolution marker will be labeled with the name of the branch you're merging in.
    </p>
    <p>
      The illustrations below highlights (a) master branch before adding branches; (b)new branch pointed toward same commit as master branch; and (c) new branch that has been committed and pointed toward the commit.
    </p>
    <figure>
      <img class="mainImage" src="img/masBranch.png"/>
      <figcaption>Master Branch</figcaption>
    </figure>
    <figure>
      <img class="mainImage" src="img/featBranch.png"/>
      <figcaption>Feature Branch</figcaption>
    </figure>
    <figure>
      <img class="mainImage" src="img/featBranchCommit.png"/>
      <figcaption>Committed Feature Branch</figcaption>
    </figure>
    <p>
      A <i>Remote Branch</i> is like a local branch, but it points to the commit that a branch in a remote repo is at. You can update a local branch with commits from a remote repository by merging a remote branch into a local branch. The process can get complicated quickly: using a <a href="http://nvie.com/posts/a-successful-git-branching-model/" target="_blank">Git</a> <a href="https://github.com/nvie/gitflow" target="_blank"> Flow</a> would be wise! Learn more about git <a href="https://learngitbranching.js.org/" target="_blank">branching</a> with this interactive tool.
    </p>
    <p>
      Git has the ability to <i>Tag</i> specific points in history as being important and developers typically use this functionality to mark release points. A <i>Lightweight Tag</i> is a branch that doesn't change as it points to a specific commit, but <i>Annotated Tags</i> are stored as full objects in the Git database.
    </p>
    <article class="declarations">
      <div><span>Create Lightweight Tag</span></div>
      <div><span>git</span> <code>tag</code></div>
      <div><span>Create Annotated Tag</span></div>
      <div><span>git</span> <code>tag</code>  &#43; <code>-a -m</code> &#43; <code>"msg"</code></div>
      <div><span>Share Tag</span></div>
      <div><span>git</span> <code>push </code> &#43; <code>origin</code> &#43;  <code>tag</code></div>
      <div><span>Share Multiple Tags</span></div>
      <div><span>git</span> <code>push</code> &#43; <code>origin</code> &#43; <code>--tags</code></div>
      <div><span>Checkout Tags</span></div>
      <div><span>git</span> <code>checkout -b</code> &#43; <code>branch</code> &#43; <code>tag</code></div>
    </article>
    <p>
      A <i>Tracking Branch</i> is a local branch with a direct relationship to a remote branch.
    </p>
    <article class="declarations">
      <div><span>View List of Branches</span></div>
      <div><span>git</span> <code>branch -a</code></div>
      <div><span>Create Track Branch</span></div>
      <div><span>git</span> <code>checkout -b</code>  &#43; <code>local-branch</code> &#43; <code>origin</code> &#43; <code>tracking-branch</code></div>
      <div><span>Specifiy Branch to Track</span></div>
      <div><span>git</span> <code>chekout --track </code> &#43; <code>origin</code> &#43; <code>tracking-branch</code></div>
      <div><span></span></div>
    </article>
    <p>
      The advantage to establishing an association between a local tracking branch with a remote branch is that we can use a simple command when that tracking branch is checked out. This process is similar to fetch and merge commits from a remote repo. Just keep in mind that <code>git pull</code> should be used for commits when working independently, but <code>git fetch</code> and <code>git merge</code> should be used when working on remote repositories or merging different remote branches into your local branch. Use this interactive tool to <a href="https://learngitbranching.js.org/" target="_blank">learn git branching</a>.
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