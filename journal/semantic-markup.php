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
        <li>The Root</li>
        <li>The Head</li>
        <li>The Body</li>
      </ul>
      <li>Sectioning Content</li>
      <ul>
        <li>Header &amp; Navigation</li>
        <li>Primary Sections</li>
        <li>Footer</li>
      </ul>
      <li>Defining Content</li>
      <ul>
        <li>Lists</li>
        <li>Headings &amp; Paragraphs</li>
        <li>Inline Text Semantics</li>
        <li>Unicode</li>
        <li>Images</li>
        <li>Forms</li>
        <li>Interactive Elements</li>
      </ul>
      <li>Accessibility</li>
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
      <blockquote>
        <code>&lt;element attr="key"&gt;</code><i>content</i><code>&lt;/element&gt;</code>
      </blockquote>
      <p>
        In the markup above, the <i>element</i> is targeted by an attribute whose value modifies the content. The <i>attribute</i> is an explicit value placed in the opening component of an <code>&lt;element&gt;</code> to <em>adjust its behavior or provide a functionality</em> that meets certain criteria. Most attributes invoke a <code>key(word)</code> surrounded in quotes being separated by a delimiter, however, there are some important attributes that do not. 
      </p>
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
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
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
        The <code>content&#61;&#34;val&#34;</code> attribute is associated with the <code>name&#61;&#34;val&#34;</code> attribute, controlling the size of the viewport as well as the zoom level upon initial page load. The assigned value for <code>content&#61;&#34;...&#34;</code> does several things that enables a mobile responsive platform while maintaining its structural and stylistic integrity. The <code>width</code> property controls the size of the viewport and when assigned the special value <code>device-width</code>, will scale the full-width of the screen. The value <code>initial-scale</code> controls the zoom level when the page is first loaded and simply controls how users are allowed to zoom the page in or out.
      </p>
      <p>
        Although omitted, the <code>&lt;base&gt;</code> tag specifies the base URL to use for all relative URLs in a document.
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
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 3: Sectioning Content -->
  <section>
    <article>
      <h3>Part 3: Sectioning Content</h3>
      <p>
        HTML uses 'sections' to define the structure of a document and all sections are defined explicitly or implicitly. Explicitly defined sections lay the foundation for overall presentation while implicitly defined sections organizes content throughout their parent containers. When defining page sections, focus on using the Header, Nav, Article, Section, Main, Aside, Div and Footer elements to get started.
      </p>
      <figure>
        <img src="img/section.jpg" alt="Method for Defining Page Sections" />
        <figcaption>a Simple Template</figcaption>
      </figure>
    </article>
    <!-- Header and Navigation -->
    <article>
      <h4>Header and Navigation</h4>
      <p>
        The <code>&lt;header&gt;</code> element is the first section users encounter and contains introductory information related to the website such as a logo or navigational aids. The <code>&lt;nav&gt;</code> element is used to create a navigation system for users to browse a website, providing links within the current document or to an external source. This element can be used within a <code>&lt;header&gt;</code> or independently, and should be reserved for global navigation, a table of contents, previous&#47;next links, etc.
      </p>
    </article>
    <!-- Primary Section Areas -->
    <article>
      <h4>Primary Section Areas</h4>
      <p>
        The <code>&lt;main&gt;</code> element should not be used to section content as it represents content that is directly related to the central topic of a document. This element is essentially the main container within the <code>&#60;body&#62;</code> element, possessing all information outside of content that is repeated across a set of documents or document sections such as sidebars, navigation links, copyright information, site logos or search forms.
      </p>
      <p>
        The <code>&lt;article&gt;</code> element represents a self-contained composition in a document that is intended to be distributable such as a forum post, a newspaper article, or a blog entry. This is 1 of 4 elements that I use to section main areas of content. The <code>&lt;section&gt;</code> element represents a standalone section contained within an HTML document. It can be nested inside of the <code>&lt;article&gt;</code> element to create distinguishable sections.
      </p>
      <p>
        The <code>aside</code> element is used for content that is indirectly related to the documents main content such as sidebars, inserts, or brief explanations. These elements are frequently presented as sidebars or call-out boxes. This element can be nested within other section elements and act as an identifier container for content related to that specific section. The <code>div</code>> element is a generic block-level container used to identify large groupings and the flow of content.
      </p>
    </article>
    <!-- Footer -->
    <article>
      <h5>Footer</h5>
      <p>
        The <code>footer</code> element typically contains information about the author of the section, copyright data or links to related documents. It is placed at the bottom of the section root or used at the bottom of any sectioning elements.
      </p>
    </article>
    <!-- 
      <h5>Glossary</h5>
      <article class="declarations">
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
      </article>
    -->
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 4: Defining Content -->
  <section>
    <article>
      <h3>Part 4: Defining Content</h3>
      <p>
        Content elements are used to organize sections of content and are nested within primary section areas. There are dozens of elements that can be used to markup content depending on whether you want to use a sectional heading, add text, create a form, include some sort of multimedia or script, add interactivity and much more. L
      </p> 
    </article>
    <!-- Lists -->
    <article>
      <h4>Build a Navigation System with Lists</h4>
      <p>
        Lets make a list: not a shopping list, but a list nonetheless. In HTML, list are used to group a set of related items in no particular order or in a specific order. The list type determines how its list-items will be displayed. 
      </p>
      <aside class="declarations">
        <div><code>&lt;ul&gt;</code></div>
        <div><span>Unordered List (non-sequential)</span></div>
        <div><code>&lt;ol&gt;</code></div>
        <div><span>Ordered List (sequential)</span></div>
        <div><code>&lt;li&gt;</code></div>
        <div><span>List Item (Individual List Content Container)</span></div>
      </aside>
      <br>
      <p>
        List are used for a lot of things: the <code>&lt;ul&gt;</code> element can be used to create a list that designers can modify to build an efficient navigation system that will allow users to seamlessly traverse the site. Two more elements are required to make this idea reality: the <code>&#60;nav&#62;</code> and <code>&#60;a&#62;</code> elements.
      </p>
      <figure>
        <img src="img/navigation.JPG" alt="a standard navigation unit" />
        <figcaption>a Simple Navigation System</figcaption>
      </figure>
      <p>
        The example above outlines the structure of a simple navigation system. The <code>&lt;nav&gt;</code> tag is used as the parent container that <i>nests</i> the <i>unordered list</i> and its <i>list-items</i>, which typically render as a bulleted list. <i>anchor</i> (<code>&lt;a&gt;</code>) tags use the <code>href&#61;&#34;link&#34;</code> attribute to <em>establish a hyperlink with some kind of resource</em>. The <code>&#34;link&#34;</code> represents the resource: in this case, they consist of internal files specifying pages associated with this site users can visit.
      </p>
      <p>
        The <code>&#34;link&#34;</code> resource can also send users to a location within the same page, allow a user to download a file or accept any other URL browser supported <i>protocol handler</i>.  One attribute that is helpful when dealing with external resources is <code>target&#61;&#34;&#95;blank&#34;</code>: this pairing <em>opens a browser tab</em> for the resource without closing the current page.
      </p>
      <details>
        <summary>The <code>&lt;ol&gt;</code> Element</summary>
        Another kind of list, although not suitable for building a navigation system, is the <code>&lt;ol&gt;</code> tag. Its <code>&lt;li&gt;</code> can be manipulated through use of the <code>start&#61;&#34;val&#34;</code> or <code>type&#61;&#34;val&#34;</code> attributes. The <code>start&#61;&#34;val&#34;</code> integer attribute specifies the start value for numbering individual list items. <code>&lt;ol <b>start&#61;&#34;4&#34;</b>&gt;</code>, for example, would <em>start numbering elements from the &#35;4</em> and this would mark the first <code>&#60;li&#62;</code> as such. The <code>type&#61;&#34;val&#34;</code> attribute indicates the numbering type with 'a', 'A', 'i', 'I' and '1' representing lowercase and uppercase letters, lowercase and uppercase Roman numerals; and numbers, respectively.
      </details>
      <details>
        <summary>The <code>&lt;dl&gt;</code> Element</summary>
        The <code>&lt;dl&gt;</code> can be used to group terms, using <code>&lt;dt&gt;</code> tags, along with a description, using <code>&lt;dd&gt;</code> tags.
      </details>
      <p>With navigation setup, focus can shift to laying out content.</p>
    </article>
    <!-- -->
    <article>
      <h4>Layout Content with Headings &amp; Paragraphs</h4>
    </article>
    <!-- -->
    <article>
      <h4>Use Inline Text Semantics to Let Content Shine</h4>
    </article>
    <!-- -->
    <article>
      <h4>Lights, Camera, Action: using Media Elements</h4>
    </article>
    <!-- -->
    <article>
      <h4>Will that complete your order? Service Forms</h4>
    </article>
    <!-- -->
    <article>
      <h4>Futuristic Interactive Elements Now</h4>
    </article>
    <!-- -->
      <h5>Glossary</h5>
      <aside class="declarations">
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
        <div><code></code></div>
        <div><span></span></div>
      </aside>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 5: Accessibility -->
  <section>
    <article>
      <h3>Part 5: Making a Page Accessible</h3>
      <p>
        In web design, accessibility refers to the practice of designing digital content and applications that can be used by people with vision impairments, mobility problems or cognitive issues. Besides making a site more accessible for users with limitations, research proves that doing so improves SEO, increases download speeds and has better usability. 
      </p>
      <p>
        The <i>World Wide Web Consortium</i> (W3C), which is the international authority regarding internet standards, provides an outline for how to make web content accessible. Moreover, you may find that their <i>accessible rich internet applications suite</i> meets your needs in this area providing tools to make web applications and the technologies that power them more accessible. <i>A11Y Project</i> is a major advocate for web accessibility and provide guidelines and patterns for designers to help make their applications accessible.
      </p>
      <p>
        Here is a short list of Accesibility Criteria that every application should include:
      </p>
      <ol>
        <li>Add Contrasting Color</li>
        <li>Design usable :Focus States</li>
        <li>Use Lables with Form Fields &amp; Inputs</li>
        <li>Write Alternative Text for Images</li>
        <li>Use Proper Markup for Content</li>
        <li>Support Keyboard Navigation</li>
      </ol>
      <p>
        The <i>Color-Contrast Ration</i> between text and its background should have a ratio of at least 3/4.5 to 1 depending on the font boldness. The <i>WebAIM</i> group offers a <i>color contrast checker</i> that allows designers to calculate the score for <i>conformance levels</i> in real time. When using color as an indicator, be sure to pair it with an icon, a label or pattern. Charts and graphs are often difficult to read so using shapes and varying sizes can help enhance monochromatic vision. You can use the <i>color oracle</i> to simulate what vision impaired folk see in real-time.
      </p>
      <p>
        Adding a visual cue such as an underline text style will help an element stand out. Focus Indicators help people know which element has the keyboard focus and helps with navigating a website. Elements that should be focusable are links, form fields, widgets, buttons and menu items. Be sure to create a state that is highly visible, with good contrast.
      </p>
      <p>
        People who use screen readers navigate forms using the tab key and the <code>&lt;label&gt;</code> element is equipped to handle this action. Never use placeholder text for accessibility because it will be passed over during tabbing. There are plenty of resources for creating accessible forms.
      </p>
      <p>
        Vision impaired users rely on screen readers to 'hear' what is being displayed and the <code>&lt;alt=""&gt;</code> attribute is used to convert text to speech. Simply describe the action.
      </p>
      <p>
        Navigation is accessible only when the <code>&lt;nav&gt;</code> element is properly marked; this makes it easy to navigate a page through interactive elements that include links, buttons and input fields. Add a <code>:focus</code> state to add a visual indicator. Navigation should be intuitive, minimal and flow from left to right, top to bottom. Use the <code>tab</code> key to test.
      </p>
      <p>
        When you think your code is up to par, download an <i>accessibility engine</i> web browser extension to check a websites accessibility.
      </p>
    </article>
  </section>
  <!-- -->
</article>

<!-- .....CONTENT-ENDS// --> 


<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>