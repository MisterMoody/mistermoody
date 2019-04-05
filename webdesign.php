<?php
$pageTitle = "Portfolio Item: Web Design";
include ("inc/header.php");
?>
<!-- ************************************************** -->
<!-- ************ <<WEB DESIGN KNOWLEDGE>> ************ -->

<main>
<!-- //CONTENT-BEGINS..... -->
  <section>
    <p style="text-align: center;">A curated list of useful front-end web design resources that illustrates my understanding in amalgamating technologies to create websites.</p>
  </section>
  <!-- HTML -->
  <section>
    <h3>HTML</h3>
    <p>
      Hypertext Markup Language is the standard markup language for creating semantic layouts for websites. HTML uses elements (i.e. tags) that allows designers to organize the content of a web page. Although there are dozens of elements that can be used, all elements are either semantic or not. Semantic elements clearly defines content for the browser and is used to provide structure for the overall layout for the content of a web page. Such elements always begin on a new line on a web page, extending the full-width of the horizontal space of its parent element (i.e. container).
    </p>
    <p>
      Inline-level elements, on the other hand, reside within semantic elements, only takes up as much space as is required by its content and cannot start on a new line. Such elements are helpful in that they emphasize how content will be displayed, particularly when CSS is applied to them.
    </p>
    <p>
      HTML5 no longer defines elements as <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Block-level_elements" target="_blank" class="resourceText">block</a> or <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Inline_elements" target="_blank" class="resourceText">inline</a> and suggests that designers use <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Content_categories" target="_blank" class="resourceText">content categories</a> when marking up a web page. The resources presented below reference HTML elements (i.e. tags) as well as attributes that can be used to properly structure content while providing accessibility which makes websites more inclusive.
    </p>
    <h3>CSS</h3>
    <p>
      A Cascading Style Sheet is a document with instructions that are called <em>statements</em>, which defines the visual design of HTML elements. All statements begin with a <em>selector</em> and is followed by a set of curly braces; these target specific and/or groups of elements. Within the statement are <em>property-value pairs</em>, which declares a specific styling, hence its name: declaration. 
    </p>
    <p>
      A major tenet of writing CSS is to keep the syntax DRY: that is, do not repeat yourself. This can be accomplished by following design principles that conform to web standards such as outlining a grid layout for responsiveness; building an interactively-accessible form; or properly designating colors, fonts, images, icons and navigation links.
      Learn more about <a class="resourceText" target="_blank" href="https://mistermoody.github.io/usingCSS.html">CSS</a>, which is the standard programming language used to make websites pretty.
    </p>
    <!--<h3>Project Management</h3>
    <h4>*Coming Soon*</h4>
    <p>These resources are useful for managing projects insofar as the front-end is concerned. Learn more about ways to <a class="resourceText" target="_blank" href="https://mistermoody.github.io/management.html">manage a project</a>.</p>-->
    <!-- -->
    <div>
      <h4>Online Resources</h4>
    </div>
    <div class="subGrid">
      <div>
        <h5>Syntax</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="https://html5boilerplate.com/">HTML Boilerplate</a></span>
          <span>[Elements]</span>
          
          <span><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">HTML Elements</a></span>
          <span>[Elements]</span>
          
          <span><a target="_blank" href="https://www.w3schools.com/html/html_attributes.asp">HTML Attributes</a></span>
          <span>[Attributes]</span>
          
          <span><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Selectors">CSS Selector</a></span>
          <span>[Declarations]</span>
          
          <span><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">CSS Property</a></span>
          <span>[Declarations]</span>
          
          <span><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Values_and_units">CSS Values</a></span>
          <span>[Declarations]</span>

          <span><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_animated_properties">Animatable Properties</a></span>
          <span>[Declarations]</span>

          <span><a target="_blank" href="https://css-tricks.com/almanac/">CSS-Tricks Almanac</a></span>
          <span>[Declarations]</span>

          <span><a target="_blank" href="http://getbem.com/naming/">BEM Methodology </a></span>
          <span>[Declaration]</span>

          <span><a target="_blank" href="http://dev.w3.org/html5/html-author/charref">HTML ASCII Chart</a></span>
          <span>[Text]</span>

          <span><a target="_blank" href="https://dillinger.io/">README Markdown</a></span>
          <span>[Technical]</span>
          <span><a target="_blank" href="https://a11yproject.com/">A11Y</a></span>
          <span>[Accessibility]</span>
          
          <span><a target="_blank" href="https://a11y-style-guide.com/style-guide/">A11Y Style Guide</a></span>
          <span>[Accessibility]</span>

          <span><a target="_blank" href="https://moritzgiessmann.de/accessibility-cheatsheet/">A11Y Cheat Sheet</a></span>
          <span>[Accessibility]</span>
        </div>
      </div>
      <div>
        <h5>Content</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="https://loremipsum.io/">Text Placeholder</a></span>
          <span>[Text]</span>

          <span><a target="_blank" href="https://placeholder.com/">Image Placeholder</a></span>
          <span>[Image]</span>
          
          <span><a target="_blank" href="https://tinypng.com/">Image Compression</a></span>
          <span>[Image]</span>

          <span><a target="_blank" href="https://www.tineye.com/">Image Search</a></span>
          <span>[Image]</span>

          <span><a target="_blank" href="e.com/v4.7.0/cheatsheet/">FontAwesome Icons</a></span>
          <span>[Icons]</span>

          <span><a target="_blank" href="materializecss">Materialize Icons</a></span>
          <span>[Icons]</span>
          
          <span><a target="_blank" href="https://htmlreference.io/forms/">Interactive Forms</a></span>
          <span>[Forms]</span>
          
          <span><a target="_blank" href="">Input-type Validator</a></span>
          <span>[Forms]</span>
          
          <span><a target="_blank" href="https://mailtolink.me/">Mail-to-Link</a></span>
          <span>[Forms]</span>
          
          <span><a target="_blank" href="https://html5sec.org/">Form Security</a></span>
          <span>[Forms]</span>
        </div>
      </div>
      <!-- -->
      <div>
        <h5>Layout</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="https://gridbyexample.com/">Grid by Example</a></span>
          <span>[Grid]</span>

          <span><a target="_blank" href="https://cssgr.id/">Grid Generator</a></span>
          <span>[Grid]</span>

          <span><a target="_blank" href="http://grid.malven.co/">Visual Grid</a></span>
          <span>[Grid]</span>

          <span><a target="_blank" href="https://learncssgrid.com/">Learn Grid</a></span>
          <span>[Grid]</span>

          <span><a target="_blank" href="https://medium.com/@js_tut/flexbox-the-animated-tutorial-8075cbe4c1b2">Flexbox Tutorial</a></span>
          <span>[Flexbox]</span>

          <span><a target="_blank" href="https://www.sketchingwithcss.com/samplechapter/cheatsheet.html">Flexbox Cheat Sheet</a></span>
          <span>[Flexbox]</span>
        </div>
      </div>
      <div>
        <h5>Styles</h5>
        <div class="resourceLink">          
          <span><a target="_blank" href="https://htmlcolorcodes.com/">Color Codes</a></span>
          <span>[Color]</span>

          <span><a target="_blank" href="http://paletton.com/">Color Palette</a></span>
          <span>[Color]</span>

          <span><a target="_blank" href="https://webgradients.com/">Gradients</a></span>
          <span>[Color]</span>

          <span><a target="_blank" href="https://trianglify.io/">Pattern Generator</a></span>
          <span>[Color]</span>
          
          <span><a target="_blank" href="https://contrastchecker.com/">Contrast Checker</a></span>
          <span>[Color]</span>

          <span><a target="_blank" href="https://type-scale.com/">Font-Scale</a></span>
          <span>[Font]</span>

          <span><a target="_blank" href="http://pxtoem.com/">Convert PX-to-EM</a></span>
          <span>[Font]</span>

          <span><a target="_blank" href="https://khaledkzy.github.io/pixel-vh-vw-converter/">Convert PX-to-VH</a></span>
          <span>[Font]</span>
          <span><a target="_blank" href="https://codepen.io/collection/nMpBQm/">Animation DIY</a></span>
          <span>[Declarations]</span>

          <span><a target="_blank" href="http://animista.net/">Animista Animations</a></span>
          <span>[Declarations]</span>
          
          <span><a target="_blank" href="https://bl.ocks.org/">Bl.ocks Infographics</a></span>
          <span>[Graphics]</span>

          <span><a target="_blank" href="https://www.easel.ly/home">Easel.ly Infographics</a></span>
          <span>[Graphics]</span>
        </div>
      </div>
      <div>
        <h5>Snippets</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="https://css-tricks.com/snippets/css/">CSS-Tricks</a></span>
          <span>[Snippets]</span>

          <span><a target="_blank" href="https://www.w3schools.com/howto/	">W3Schools</a></span>
          <span>[Snippets]</span>

          <span><a target="_blank" href="https://30-seconds.github.io/30-seconds-of-css/">30secs of CSS</a></span>
          <span>[Snippets]</span>

          <span><a target="_blank" href="https://codemyui.com/">Code My UI</a></span>
          <span>[Snippets]</span>

          <span><a target="_blank" href="http://ui-patterns.com/patterns">UI Patterns</a></span>
          <span>[UI Kit]</span>
          
          <span><a target="_blank" href="https://www.invisionapp.com/inside-design/design-resources/">InvisionAPP</a></span>
          <span>[UI Kit]</span>

          <span><a target="_blank" href="https://www.uigoodies.com/">UI Goodies</a></span>
          <span>[UI Kit]</span>

          <span><a target="_blank" href="https://www.webcomponents.org/introduction">Web Components</a></span>
          <span>[UI Kit]</span>

          <span><a target="_blank" href="https://vaadin.com/components">Open Source Components</a></span>
          <span>[UI Kit]</span>

          <span><a target="_blank" href="https://developers.google.com/web/fundamentals/web-components/customelements">G+ Web Components</a></span>
          <span>[UI Kit]</span>
        </div>
      </div>
      <div>
        <h5>Help</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="https://developer.mozilla.org/ ">Mozilla</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://stackoverflow.com/">StackOverflow</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://css-tricks.com ">CSS-Tricks</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://W3schools.com">W3Schools</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://w3.org">W3.org</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://teamtreehouse">Treehouse</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://learn.shayhowe.com/advanced-html-css/">Learn w/ ShayHowe</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://devdocs.io">DevDocs</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="http://www.tutorialspoint.com">TutorialsPoint</a></span>
          <span>[Learn]</span>

          <span><a target="_blank" href="https://html-css-js.com/">HTML-CSS-JS</a></span>
          <span>[Learn]</span>
        </div>
      </div>
      <div>
        <h5>Manage</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="https://frontendchecklist.io/">Front-End Checklist</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="">Performance Optimization</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="https://www.gloomaps.com/">Visual Sitemap</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="https://www.freeprivacypolicy.com">Privacy Policy</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="http://opendatacommons.org/licenses/">Licenses</a></span>
          <span>[Technical]</span>
          
          <span><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cache-Control">Cache-Control</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="https://bitly.com/">URL Shortner</a></span>
          <span>[Technical]</span>
        </div>
      </div>
      <div>
        <h5>Tools</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="http://www.dirtymarkup.com/ ">Code Formatter</a></span>
          <span>[Technical]</span>
          
          <span><a target="_blank" href="https://validator.w3.org/#validate_by_input">HTML Validator</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="https://www.willpeavy.com/minifier/">HTML Minifier</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="https://jigsaw.w3.org/css-validator/#validate_by_input">CSS Validator</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="http://csscompressor.com/">CSS Compressor</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="https://javascript-compressor.com/">JavaScript Validator</a></span>
          <span>[Technical]</span>

          <span><a target="_blank" href="http://jsonlint.com/">JSON Linter</a></span>
          <span>[Technical]</span>
          
          <span><a target="_blank" href="http://app.xrespond.com/">Mobile Testing</a></span>
          <span>[Technical]</span>
          
          <span><a target="_blank" href="https://github.com/">Github VCS</a></span>
          <span>[VCS]</span>

          <span><a target="_blank" href="https://gist.github.com/BolajiAyodeji/d5393b90650c49ba9ef81493bfca9cda">Git Cheat Sheet</a></span>
          <span>[VCS]</span>
        </div>
      </div>
    </div>
  </section>  
  <br>
  <section>
      <!-- 
      <div>
        <h5>xxx</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="">x</a></span>
          <span>[Link]</span>

          <span><a target="_blank" href="">x</a></span>
          <span>[Link]</span>

          <span><a target="_blank" href="">x</a></span>
          <span>[Link]</span>

          <span><a target="_blank" href="">x</a></span>
          <span>[Link]</span>
        </div>
      </div>
      <div>
        <h5>xxx</h5>
        <div class="resourceLink">
          <span><a target="_blank" href="">x</a></span>
          <span>[Link]</span>

          <span><a target="_blank" href="">x</a></span>
          <span>[Link]</span>

          <span><a target="_blank" href="">x</a></span>
          <span>[Link]</span>
        </div>
      </div>
       --></section>
<!-- .....CONTENT-ENDS// --> 
</main>

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("inc/footer.php"); 
?>