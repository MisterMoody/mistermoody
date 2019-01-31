<?php
$pageTitle = "Portfolio Gallery for Mister Moody";
include ("inc/header.php");
?>
<!-- ******************************************************* -->
<!-- *************** <<PORTFOLIO GALLERY>>  **************** -->

<main>
<!-- //CONTENT-BEGINS..... -->
<section>
  <!--<div class="cat__title">
    <code class="cat__code">
      .malfunction {
      <br>&nbsp;&nbsp;in-progress: &nbsp;&nbsp;nearly-finished;
      <br>}</code>
  </div>-->
  <div class="cat__title">    
    <code class="cat__code">
      <div class="rowOne">.malfunction {</div>
      <div class="rowTwo">in-progress: </div>
      <div class="rowThree">nearly-finished;</div>
      <div class="rowFour">}</div>
    </code>
  </div>
</section>
<!-- -->
<section class="category">
  <div class="cat__container"><!-- LEFT -->
    <img src="https://via.placeholder.com/350x255/000000/FFFFFF.png?text=Web Design" 
					 alt="img" class="cat__image">
    <div class="overlay overlayLeft">
      <div class="cat__text">
        <p class=".cat__pTtext">Learn <a>Web Design</a> using HTML and CSS</p>
        <a class="btn" href="https://mistermoody.github.io/" alt="Link to Portfolio" target="_blank" title="Check Out My Work on Github">Learn More</a>
      </div>
    </div>
  </div>

	<div class="cat__container"><!-- RIGHT -->
		<img src="https://via.placeholder.com/350x255/000000/FFFFFF.png?text=Lesson Plans" 
					 alt="img" class="cat__image">
    <div class="cat__image"></div>
		<div class="overlay overlayTop">
			<div class="cat__text">
        <p>Bespoke <a>Curriculum Materials</a> for Learners</p>
        <a class="btn" href="bhm.php" alt="Link to Portfolio" target="_blank" title="">Learn More</a>
      </div>
		</div>
	</div>

	<div class="cat__container"><!-- TOP -->
		<img src="https://via.placeholder.com/350x255/000000/FFFFFF.png?text=Mandarin" 
					 alt="img" class="cat__image">
		<div class="overlay overlayBottom">
			<div class="cat__text">
        <p>Learn <a>Mandarin</a> from an Experienced Traveler</p>
        <a class="btn" href="" alt="Link to Portfolio" target="_blank" title="">Coming Soon</a>
      </div>
		</div>
	</div>

	<div class="cat__container">
		<img src="https://via.placeholder.com/350x225/000000/FFFFFF.png?text=Aborigine" 
					 alt="img" class="cat__image">
		<div class="overlay overlayLeft">
			<div class="cat__text">
        <p>a Self-Discovery project to Understand my Ancestry</p>
        <a class="btn" href="" alt="Link to Portfolio" target="_blank" title="">Coming Soon</a>
      </div>
		</div>
	</div>
</section>
<!-- .....CONTENT-ENDS// --> 
</main>

<!-- ******************************************************* -->
<!-- ******************************************************* -->
<?php
include ("inc/footer.php"); 
?>