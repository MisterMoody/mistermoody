<?php
$pageTitle = "Version Control with Git by Ray Moody";
$page = "Optimization";
include ("../../inc/header.php");
?>
<!-- ************************************************** -->
<!-- ************** <<SETUP WORKSTATION>> ************* -->


<!-- // CONTENT-BEGINS ////////////////////////// -->
<article>
  <!-- // Introduction -->
  <section>
    <h1>Performance Optimization</h1>
    <p>
      In front-end web development, performance optimization is the modification of <i>html</i>, <i>css</i> and <i>javascript</i> to enhance page load times. There are multiple factors that can cause a website to react slowly: a large number of header requests from the client to the server, for example, may require one request to wait for another request to be completed before it can start. Thus, the downloading of large or multiple assets will make for poor latency.
    </p>
    <ol>
      <li>What is Optimization?</li>
      <li>Setting a Performance Budget</li>
      <li>Optimization and Asset Delivery</li>
      <li>Measuring Performance</li>
    </ol> 
  </section>
  <!-- ************************************************ -->
  <!-- ************************************************ -->
  <!-- Part 1: What is Optimization? -->
  <section>
    <h2 class="title">&nbsp;What is Optimization?</h2>
    <p>
      One of the main purposes of optimizing a site is the impact it has on user perception. People want to use websites that load quickly, and every second counts. Ideally, a website should have a first meaningful paint that quickly leads to a users first available interaction within with a website 2 seconds. If a site takes more than 3 seconds to load, you can lose 40% of your audience. Every additional second in page response can result in a 7% reduction in conversions. The total time it takes for users to perform an action will affect perception of a site, whether users return to the site and even the ranking in search engines. It is obvious that slow load times cause more than user frustration: it will result in losing potential customers! 
    </p>
  </section>
  <!-- ************************************************ -->
  <!-- ************************************************ -->
  <!-- Part 2: Setting a Performance Budget -->
  <section>
    <h2 class="title">&nbsp;Setting a Performance Budget</h2>
    <p>
      A <i>Performance Budget</i> is a plan that calculates the total weight for pages in a site to ascertain load times and what have you. Much of this planning targets that which is <i>Above the Fold</i>: anything that is within the <code>&#60;head&#62;...&#60;/head&#62;</code> and is imperative to the initial load of the site within the constraint of the first meaningful paint.
    </p>
  </section>
  <!-- ************************************************ -->
  <!-- ************************************************ -->
  <!-- Part 3:Optimization and Asset Delivery -->
  <section>
    <h2 class="title">&nbsp;Optimization and Asset Delivery</h2>
    <p>
      The largest performance issue with any site is how fast you can get content and assets to users. While most web hosts are pretty fast at delivering text, serving fonts and images from a single host can lead to performance issues. Above the fold assets are critical for every site so optimizing stylesheets would be a good first step. 
    </p>
    <h4 class="title">&nbsp;Content Delivery Networks</h4>
    <p>
      A <i>Content Delivery Network</i> is a distributed network of proxy servers set up in multiple data centers around the world. Using CDNs to deliver assets is an industry standard that reduces latency. This is ideal for loading images as well as stylesheets in the form of a <i>Redirect</i>. Using a CDN eliminates a developers ability to use <i>Lazy Loading</i> of images, which is another method that can be employed. These <a href="https://www.jsdelivr.com/" target="_blank">open</a> <a href="https://www.cloudflare.com/plans/" target="_blank">source</a> <a href="https://www.netlify.com/" target="_blank">apps</a> makes delivering assets a cinche.
    </p>
    <h4 class="title">&nbsp;Service Workers</h4>
    <p>
      A <i><a href="https://serviceworke.rs/" target="_blank">Service</a> <a href="https://developers.google.com/web/updates/2015/07/measuring-performance-in-a-service-worker" target="_blank">Worker</a></i> is a <code>&#60;script&#62;</code> that runs in the background to fetch and cache resources without requiring a user interaction. This will give a performance boost: requires <code>https://</code>, a <code>manifest.json</code> file and placed in the root of the directory.
    </p>
    <figure>
      <img class="mainImage" src="img/serviceWorker.png"/>
      <figcaption>Service Worker Script</figcaption>
    </figure>
    <h4 class="title">&nbsp;Preload</h4>
    <p>
      This method assigns informs a server that a particiular stylesheet should be loaded first: this is especially useful for mobile devices.
    </p>
    <blockquote>
      <span>&#60;link </span><code>rel="preload" </code><span>href="css/mobile.css"&#62;</span>
    </blockquote>
    <p>
     Moreover, in-lining essential CSS will improve load times and increase perceived performance: such CSS consists of global navigation, typography and footer styles. To do this, employ a <code>style="..."</code> attribute within the aforementioned section tags.
    </p>
    <h4 class="title">&nbsp;Minification</h4>
    <p>
      Optimizing critical CSS begins with well structured declarations, using a limited number of selectors, employing shorthands whenever possible and using media queries for progressive enhancement. After doing that,  <a href="https://github.com/jakubpawlowicz/clean-css" target="_blank">cleanup</a>, <a href="https://jigsaw.w3.org/css-validator/#validate_by_input" target="_blank">validate</a> and <a href="http://csscompressor.com/" target="_blank">minify</a> all stylesheets. Use an <a href="https://github.com/mrcoles/cssunminifier" target="_blank">unminify</a> tool to work with CSS that has already been minified.
    </p>
    <h4 class="title">&nbsp;Optimizing Images</h4>
    <p>
      Using images on websites is an imperative, but modifying images through stylesheets can lead to distortion. Load times are increased with the addition of any image so sizing images prior to usage is a must! The first action to take is to <a href="https://tinypng.com" target="_blank">compress</a> all images. Heck, you can <a href="https://www.npmjs.com/package/gulp-tinypng" target="_blank">automate</a> image compression! The <code>.jpg</code> file extension is the best file format not named <code>.webp</code>: try <a href="https://webp-converter.com/" target="_blank">converting</a> the files once all browsers <a href="http://www.stucox.com/blog/using-webp-with-modernizr/" target="_blank">support it</a>.
    </p>
  </section>
  <!-- ************************************************ -->
  <!-- ************************************************ -->
  <!-- Part 4: Measuring Performance -->
  <section>
    <h2 class="title">&nbsp;Measuring Performance</h2>
    <p>
      Understanding how a website performs requires a bit of work that begins with benchmarking current site speed and acquiring a good <i>Emulator</i> to replicate device conditions during testing. Having a <a href="https://www.smashingmagazine.com/2020/01/front-end-performance-checklist-2020-pdf-pages/" target="_blank">checklist</a> will help. The key is to obtain a good <i>Perpceptual Speed Index</i> (PSI) and mobile friendliness score. Use browser <a href="https://developers.google.com/web/tools/chrome-devtools/" target="_blank">dev</a> <a href="" target="_blank">tools</a> to quickly diagnose problems and the specific selector issues taking place.
    </p>
  </section>
  <!-- ************************************************ -->
  <!-- ************************************************ -->
  <!--          ******** PAGINATION **********          -->
  <?php include ("../../inc/pagination.php"); ?>
  <!-- ************************************************ -->
</article>
<!-- .....CONTENT-ENDS ////////////////////////// --> 
<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../../inc/footer.php"); 
?>