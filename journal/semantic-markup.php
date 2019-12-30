<?php
$pageTitle = "Semantic Markup by Ray Moody";
include ("../inc/journalHeader.php");
?>
<!-- ************************************************** -->
<!-- ************ <<WEB DESIGN KNOWLEDGE>> ************ -->

<!-- 
<code> Markup for IMAGES
    <figure>
      <img alt="Linking a CSS File with an HTML Document" src="img/cssLinkStrategy.jpg">
      <figcaption>
        CSS &lt;Link&gt; Strategy
      </figcaption>
    </figure>
-->
<!-- // CONTENT-BEGINS ////////////////////////// -->
<article>
  <!-- // Introduction -->
  <section>
    <h2 class="title">Semantic Markup</h2>
    <figure>
      <img class="mainImage" src="img/html.png"/>
      <figcaption>So Many Colors, So Many Style Possibilities</figcaption>
    </figure>
    <p>
      HTML is an acronym for Hypertext Markup Language which is the language used to structure the content of a webpage document. This article explores fundamental usage of best practices to follow when marking up content for a website. Topics covered include:
    </p>
    <ol>
      <li>What is HTML?</li>
      <ul>
        <li>Setup Project Files</li>
      </ul>
      <li>Required Document Elements</li>
      <ul>
        <li>a</li>
        <li>b</li>
      </ul>
      <li>3</li>
      <ul>
        <li>c</li>
        <li>d</li>
        <li>e</li>
      </ul>
      <li>4</li>
      <li>5</li>
    </ol> 
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 1: What is HTML? -->
  <section>
    <!-- Intro -->
    <article>
      <h3>Part 1: What is HTML?</h3>
      <p>
        <i>html</i> defines the hierarchical structure of the content on a webpage using <code>&lt;elements&gt;</code> (aka<code>&lt;tag&gt;</code>) that specify how content is displayed. Internet browsers use elements to parses the markup then displays content to the user. Elements usually have an opening <code>&lt;tag&gt;</code> and closing <code>&lt;&#47;tag&gt;</code> component, but there are some that are self-closing so keep an eye out for that.
      </p>
      <p>
        The content of an <code>&lt;element&gt;</code> can be modified or provided with a functionality through the use of an <i>attribute</i>, <em>an explicit value placed in the opening component of an element to adjust its behavior</em> in a manner that meets a specific criteria. 
        An attribute is created by using a keyword followed by a delimiter and a value that is surrounded by quotations, and when used, should always be placed in the opening tag. The example below illustrates a use case for both: this is a <code>&lt;main&gt;</code> tag with a <code>class</code> attribute that has a value of <code>"layout"</code>.
      </p>
      <blockquote>
        <code>&lt;main class="layout"&gt;... &lt;/main&gt;</code>
      </blockquote>
      <p>
        There are 100&#43; attributes that can be used to enhance an element, depending on the objective. For simplicity sake, attributes will be introduced where appropriate: that is, as suitable elements are introduced. 
      </p>
    </article>
    <!-- Set up HTML -->
    <article>
      <h4>Setup Project Files</h4>
      <p>
        Lets open the project directory and create a new file, naming this file <code>index.html</code>, which is the universal file name for all website homepages. Lets also create two folders: one named <code>css/</code> and the other named <code>img/</code> (these folders will be used later in the project to contain style sheets and images). Enter the CSS folder and create a new file, naming this file <code>styles.css</code>. Leave the images file empty for now. 
      </p>
    </article>
  </section>
  <hr>
  <!-- -->
  <!-- Part 2: Required Document Elements -->
  <section>
    <article>
      <h3>Part 2: Required Document Elements</h3>
      <p>There are several elements required to ensure a web broser can properly render documents.</p>
      <figure>
        <img src="img/requiredHTML.jpg" alt="an HTML Document" />
        <figcaption>Required structural elements for an HTML Documents</figcaption>
      </figure>
    </article>
    
    <!-- The Main Root -->
    <article>
      <h4>The Main Root</h4>
      <p>
        The <code>&lt;!DOCTYPE html&gt;</code> is the first line of a page and it declares that this document is indeed an HTML file by providing browsers with specifications that will ensure rendering.
      </p>
      <p>
        The <code>&lt;html&gt;</code> element is on the second and final line of a page and is the outermost container, acting as a wrapper for everything on the entire page. This element accepts one attribute: <code>lang="val"</code>, which notifies screen reading technology of what language to promulgate whereas the value is a two-character representation of a specific language.
      </p>
    </article>
    <!-- The Head -->
    <article>
      <h4>The Head</h4>
      <p>
       The <code>&lt;head&gt;</code> element is the first child descendant of the <code>&lt;html&gt;</code> element and represents the area that contains all meta information about a particular page, its title and instructions for the browser to locate style sheets while defining relationships that the document has to others in the web site.
      </p>
      <p>
        The <code>&lt;meta&gt;</code> tag is the first line in this area and it is used to provide meta data about a webpage, its author and pertinent information that enhances search engine optimization. Attributes that can be applied to this element are as follow:
      </p>
      <p>
        The <code>charset&#61;&#34;UTF&#45;8&#34;</code> attribute declares the character encoding of the page. The assigned value for this attribute stands for Universal Character Set and Transformation Format (8-bit).  This value is capable of encoding all possible characters in any language including Unicode.
      </p>
      <p>
        The <code>name&#61;&#34;viewport&#34;</code> attribute is used by the server for identifying device usage. The assigned value describes the visible area of the webpage.
      </p>
      <p>
        The <code>content&#61;&#34;val&#34;</code> attribute is associated with the <code>name&#61;&#34;val&#34;</code> attribute, controlling the size of the viewport as well as the zoom level upon initial page load. The assigned value for <code>content&#61;&#34;...&#34;</code> does several things that enables a mobile responsive platform while maintaining its structural and stylistic integrity. The <code>width</code> property controls the size of the viewport and when assigned the special value <code>device-width</code>, will scale the full-width of the screen. The <code>initial-scale</code> property controls the zoom level when the page is first loaded and simply controls how users are allowed to zoom the page in or out.
      </p>
      <p>
        The <code>&lt;title&gt;</code> tag is the second line in this area and is simply used to document the webpage in the browser. Whatever is placed here will be visible on the browser tab. Designers should be mindful that this element plays into search engine optimization
      </p>
      <p>
        The <code>&lt;link&gt;</code> tag is the third line in this area and it specifies the resources incorporated into a site. All links make use of an <code class="">href&#61;&#34;URL&#34;</code> attribute, which specifies the URL of a linked resource. For that matter, all resources must be referenced with the <code>rel&#61;&#34;val&#34;</code> attribute to establish a relationship between itself and the document. A value of <code>stylesheet</code> indicates that <em>the document is linked to a cascading style sheet</em>. The value of this attribute will function according to the linking-type applied. For example, a canonical value can be used to prevent duplicate content issues by specifying a preferred version of a page as an SEO measure. Other attributes to consider using here include the <code>type&#61;&#34;val&#34;</code> attribute, which helps clarify the content type and the <code>title&#61;&#34;val&#34;</code> attribute, which will create a visual cue for the resource known as a <code>tooltip</code> and is especially useful for embedded or linked resources. 
      </p>
    </article>
    <!-- The Body -->
    <article>
      <h4>The Body</h4>
      <p>
        Once <code>&lt;head&gt;</code> specifications are declared, content layout takes center stage. Web browsers use the combination of the aforementioned data to coordinate all resources required to make the website function as it was designed. Although absolutely none of the <code>&lt;head&gt;</code> information is visible to users, the exact opposite is true of the <code >&lt;body&gt;</code> tag. As the second child descendant of the <code>&lt;html&gt;</code> element, it represents the area of the document that contains all content that will be displayed on screen (or print media), such as headings, paragraphs, images, and so on. Lets explore!
      </p>
    </article>
  </section>
  <hr>
  <!-- -->
  <!-- -->
  <section>
    <article>
      <h3>Part 3</h3>
    </article>
  </section>
  <hr>
  <!-- -->
  <!-- -->
  <section>
    <article>
      <h3>Part 4</h3>
    </article>
  </section>
  <hr>
  <!-- -->
</article>

<!-- .....CONTENT-ENDS// --> 


<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>