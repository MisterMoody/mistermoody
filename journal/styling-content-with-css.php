<?php
$pageTitle = "Journal de Mister Moody";
include ("../inc/journalHeader.php");
?>
<!-- ************************************************** -->
<!-- ************ <<WEB DESIGN KNOWLEDGE>> ************ -->


<!-- // CONTENT-BEGINS ////////////////////////// -->
<article>
  <!-- // Introduction -->
  <section>
    <h3 class="title">Styling Content with CSS</h3>
      <figure>
        <img class="mainImage" src="img/designStyle.jpg"/>
        <figcaption>So Many Colors, So Many Style Possibilities</figcaption>
      </figure>
    <p>
      CSS is an acronym for Cascading Style Sheets, a style sheet language that controls the presentation of <code>&#60;html&#62;</code> elements when displayed in the browser. This article is a follow-up to <a href="journal/semantic-markup">semantic markup</a> and explores fundamental usage of CSS best practices to follow when styling content for a web applications. Topics covered include:
    </p>
    <ol>
      <li>Create and Load a Stylesheet</li>
      <li>Understanding CSS Snytax</li>
      <ul>
        <li>Selector Types</li>
        <li>Declarations</li>
      </ul>
      <li>Style Sheet Format and Structure</li>
      <li>Declaration Examples</li>
      <!--<li>Debugging and Optimizing CSS</li>-->
    </ol> 
  </section>
  <hr>
  <!-- ++Create and Load a Stylesheet++ -->
  <section>
    <h4>Part 1: Create and Load a Stylesheet</h4>
    <p>Implementing CSS begins by creating a file that ends with the <code>.css</code> file extension and placing it into a folder titled 'css.'</p>
    <p>
      Next, load the stylesheet into the <code>&lt;head&gt;</code> of the <code>&#60;html&#62;</code> document using the <code>&lt;link&gt;</code> tag, which requires three attributes: <code>rel="keyword"</code>, <code>href="URL"</code>, and the <code>type="keyword"</code> attributes.
    </p>
    <figure>
      <img alt="Strategy to Link a CSS File with an HTML Document" src="img/cssLinkStrategy.jpg">
      <figcaption>
        CSS &lt;Link&gt; Strategy
      </figcaption>
    </figure>
    <p>
      The <code>rel="..."</code> attribute specifies the relationship of the target object with the <code>&lt;link&gt;</code> to specify its relationship with the document. Although omitted here, the <code>type="..."</code> attribute specifies the <i>media type</i> being used as a resource. The keywords <code>"stylesheet"</code> and <code>"text/css"</code>, respectively, are utilized to notify the document that this is an external stylesheet. 
    </p>
    <p>
      The <code>href="URL"</code> attribute specifies the location of an external resource via its <i>url</i> (Uniform Resource Locator) by establishing a connection between the document and an <i>external stylsheet</i>. The examples above highlight use of <i>relative</i> URLs, which is an <i>implicit</i> reference to a resource located on the same server as the web page using a simple file path. Not all resources are located on the same server. Many web apps utilize resources that are stashed throughout the webiverse: these use <i>explicitly</i> specified web address and are called <i>absolute</i> URLs. An absolute URL takes the following format:
    </p>
    <blockquote>
      <code>protocol://domain/path/</code>
    </blockquote>
    <p>
      Here, <i>protocol</i> specifies how the resource is to be accessed: the protocol identifier uses either <code>http://</code> or <code>https://</code> as a method for transferring data between computer networks while the domain is the server from which data is requested, specifying the name of the computer (or website) where the resource is located. The <i>path</i> specifies the sequence of directories leading to the target. 
    </p>
    <p>
      Moving forward, keep in mind that it is good practice to separate code into multiple style sheets in order to avoid writting <i>spaghetti code</i>, which occurs when different layout styles or patterns are inconsistently applied to elements throughout a style sheet.With that covered, lets focus on writing CSS!
    </p>
  </section>
  <hr>
  
  <!-- ++CSS Syntax++ -->
  <section>
    <h4>Part 2: CSS Syntax</h4>
    <p>
      In life, there are rules: when you follow the rules, you are rewarded and when you break a rule, well, all hell breaks loose. Same analogy applies to CSS: there are rules for writing CSS to instruct a document how to display content. CSS is created by employing a <i>rule-set</i>, which is a block of code that consists of a selector and a declaration. 
    </p>
    <blockquote><code>selector &#123; property: keyword/value; &#125;</code></blockquote>
    <p>
      <i>selectors</i> <em>reference <code>&#60;html&#62;</code> elements</em> targeted for styling. The aesthetic quality for a selector is embodied within its <i>declaration</i>, which is composed of a property/value pair and enclosed with curly brackets. The <i>property</i> identifies which feature to modify while the <i>value</i> quantifies to what extent the property is modified. 
    </p>
    
    <!-- Selector Types-->
    <h5>Selector Types</h5>
    <p>
      All <code>&#60;html&#62;</code> elements can be used as a selector, but other things can be used as a selector as well. 
    </p>
    <p>
      The <i>universal</i> selector is the most powerful selector of all as it is  used to <em>render styles to all elements</em> in a document. The <i>element</i> selector <em>renders styles to that type of element</em>. The <i>.class</i> selector <em>renders styles on elements that possess a specific class attribute</em>. The <i>#id</i> selector <em>should not be used in CSS</em> because it is a unique identifier that <em>should be used exclusively</em> as a 'hook' for <code>&#60;html&#62;</code> and <code>JavaScript</code> implementations.
    </p>
    <aside class="declarations">
      <div><code>* &#123; prop: val; &#125;</code></div>
      <div><span>// Selects ALL Elements</span></div>
      <div><code>&#60;element&#62; &#123; prop: val; &#125;</code></div>
      <div><span>// " Elements of Type</span></div>
      <div><code>.class &#123; prop: val; &#125;</code></div>
      <div><span>// " Elements w/ Class Attr.</span></div>
      <div><code>#id &#123; prop: val; &#125;</code></div>
      <div><span>// Avoid Usage</span></div>
    </aside>
    <br>
    <p>
      The power of selectors can be amplified by using a <i>combinator</i>: syntax that <em>unifies the relationship between any of the selectors</em> used above that targets and applies styles to <code>&#60;html&#62;</code> elements based on a specific criteria. The <i>descendant</i> selector <em>targets elements that descend from a specific element</em>. The <i>child</i> selector <em>targets children of a specific element</em>. The <i>adjacent sibling</i> selector <em>targets immmediate siblings of a specific element</em>. The <i>general sibling</i> selector <em>targets all siblings of a specific element</em>. Selectors can also be grouped allowing <em>application of a consistent style theme</em> to grouped elements.
    </p>
    <aside class="declarations">
      <div><code>Descendant Combo</code></div>
      <div><span>A  B &nbsp; = Targets B Nested in A</span></div>
      <div><code>Child Combo</code></div>
      <div><span>A > B = Targets B Direct Children of A</span></div>
      <div><code>Adjacent Sibling</code></div>
      <div><span>A + B = Targets Immediate B Sibling</span></div>
      <div><code>General Sibling</code></div>
      <div><span>A ~ B = Targets All B Siblings</span></div>
      <div><code>Selector Group</code></div>
      <div><span>A, B&nbsp; = All A &amp; B Elements Targeted</span></div>
    </aside>
    <br>   
     <p>
      There are also <i>attribute</i> selectors that can be utilized to target particular features within an <code>&#60;html&#62;</code> element, such as those used with the <code>&#60;form&#62;</code> element. 
    </p>
    <aside class="declarations">
      <div><code>Attribute</code></div>
      <div><span>A[attribute] = Targts Attribute</span></div>
      <div><code>Attribute</code></div>
      <div><span>A[attribute="fee"] = Targts Attr. &amp; Value</span></div>
      <div><code>Attribute</code></div>
      <div><span>A[attr~="fee"] = Targts Attr. &amp; Specific Value</span></div>
      <div><code>Match Attribute</code></div>
      <div><span>A[attribute<sup>*</sup>="fee"] = Targts  ALL"fee"</span></div> 
    </aside>
    <br>    
    <p>
      There are also selectors that have selectors! <i>&#58;pseudo-class</i> selectors are <em>keywords added to selectors to invoke a special 'state' during a particular instance</em>. The examples below dictates how <code>&#60;a&#62;</code> elements can be modified based on a particular instance. The keywords below are grouped categorically to highlight usage cases. 
    </p>
    <p>These kind of selectors are useful for <code>&#60;form&#62;</code> and <code>&#60;link&#62;</code> elements:</p>
    <aside class="declarations">
      <div><code>&#58;active &#123;...&#125;</code></div>
      <div><span>// Currently on Page</span></div> 
      <div><code>&#58;checked &#123;...&#125;</code></div>
      <div><span>// Selects Checked Checkboxes</span></div> 
      <div><code>&#58;enabled &#123;...&#125;</code></div>
      <div><span>// Selects <code>&#60;input&#62;</code> Ready to Use</span></div> 
      <div><code>&#58;focus &#123;...&#125;</code></div>
      <div><span>// Accessible 'hover'</span></div> 
      <div><code>&#58;hover &#123;...&#125;</code></div>
      <div><span>// Hovered over Element</span></div> 
      <div><code>&#58;optional &#123;...&#125;</code></div>
      <div><span>// Selects <code>&#60;input&#62;</code> w/o <code>:required</code> Attribute</span></div> 
      <div><code>&#58;required &#123;...&#125;</code></div>
      <div><span>// Selects <code>&#60;input&#62;</code> w/ <code>:required</code> Attribute</span></div> 
      <div><code>&#58;visited &#123;...&#125;</code></div>
      <div><span>// Already Visited Page</span></div> 
    </aside>
    <br>
    <p>
      A number of pseudo-class selectors are based on an elements position and will often <em>select an element based on a particular instance</em>.
    </p>
    <aside class="declarations">
      <div><code>&#58;first-child &#123;...&#125;</code></div>
      <div><span>// First Element in Parent</span></div> 
      <div><code>&#58;first-of-type &#123;...&#125;</code></div>
      <div><span>// First Element of Type in Parent</span></div>  
      <div><code>&#58;last-child &#123;...&#125;</code></div>
      <div><span>// Last Element in Parent </span></div> 
      <div><code>&#58;last-of-type &#123;...&#125;</code></div>
      <div><span>// Last Element of Type in Parent</span></div> 
      <div><code>&#58;not() &#123;...&#125;</code></div>
      <div><span>// Removes Matching Elements</span></div> 
      <div><code>&#58;nth-child() &#123;...&#125;</code></div>
      <div><span>// #Specified Element</span></div> 
      <div><code>&#58;nth-of-type &#123;...&#125;</code></div>
      <div><span>// #Specified Element of Diff Type</span></div> 
      <div><code>&#58;root &#123;...&#125;</code></div>
      <div><span>// Matches <code>:root</code> Element</span></div>
      <div><code>&#58;valid &#123;...&#125;</code></div>
      <div><span>// Indicates <code>&#60;input&#62;</code> Validation</span></div> 
    </aside>
    <br>
    <p>
      <i>&#58;&#58;pseudo-element</i> selectors, on the other hand, <em>are used to style a specific part of a selected element</em>. The difference between the two is in the number of colons. Ther following selectors add depth to elements that possess text.
    </p>
    <p>
      The <code>&#58;&#58;first-letter</code> and <code>&#58;&#58;first-line</code> pseudo-elements apply styles to the first letter or first line of text, respectively, but they can only be applied to <i>block-level</i> elements.
    </p>
    <p>
      The <code>&#58;&#58;before</code> and <code>&#58;&#58;after</code> pseudo-elements are used to add content before or after an element. The key to these selectors is that they require the <code>content&#58; &#34;&#34;&#59;</code> property in order to work. This is useful when you want to include an icon or background image: something tangible. <i>&#58;&#58;cue</i> can be used to style media captions or  <i>&#58;&#58;placeholder</i> Represent <code>&#60;input&#62;</code> Placeholder Text, respectively.
    </p>
    <aside class="declarations">    
      <div><code>&#58;&#58;after &#123;...&#125;</code></div>
      <div><span>// Adds Content After Element</span></div>   
      <div><code>&#58;&#58;before &#123;...&#125;</code></div>
      <div><span>// Adds Content Before Element</span></div> 
      <div><code>&#58;&#58;cue &#123;...&#125;</code></div>
      <div><span>// Style WebVTT Captions</span></div>   
      <div><code>&#58;&#58;first-letter &#123;...&#125;</code></div>
      <div><span>// Selects First Letter of Text</span></div> 
      <div><code>&#58;&#58;first-line &#123;...&#125;</code></div>
      <div><span>// Selects First Line of Text</span></div> 
      <div><code>&#58;&#58;lang &#123;...&#125;</code></div>
      <div><span>// Selects Element w/ <code>:lang</code> Attribute</span></div>
      <div><code>&#58;&#58;placeholder &#123;...&#125;</code></div>
      <div><span>// Represent <code>&#60;input&#62;</code> Placeholder Text</span></div> 
    </aside>
  </section>

  <hr>
  
  <!-- Declaration Examples -->
  <section>
    <h4>Part 3: Making Declarations</h4>
    <p>There are a lot of properties available for modifying <code>&#60;html&#62;</code> elements: no project regardless of size will utilize all of them. The list provided below denotes a usage case using the most basic of properties based on visual layout, text and fonts, background and borders, colors, content and list-style <small>??add Animation, Transition + Transform??</small>. </p>
    
    <h5>Visual Layout</h5>
    <p>
      The <i>display</i> property <em>manages precisely how an element behaves</em> insofar as its layout is concerned. Available keywords for this prop are based on the elements function. The keyword <code>inline</code> is the default value for elements <em>that wraps text along the horizontal axis</em>, such as <code>&#60;span&#62;</code>. The keyword <code>block</code> is the default value for elements <em>that act as containers</em>: the <code>&#60;div&#62;</code> and <code>&#60;ul&#62;</code> elements are abvious examples, but the <code>&#60;p&#62;</code> and <code>&#60;h1&#62;</code> elements are also considered a block. This prop can also be used to <em>hide elements</em> using the keyword <code>none</code>.
    </p>
    <aside class="declarations">
      <div><code>{display: ;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: inline;}</code></div>
      <div><span>// Horizontal Line Alignment</span></div>
      <div><code>{&nbsp;: block;}</code></div>
      <div><span>// Vertical Block Alignment</span></div>
      <div><code>{&nbsp;: none;}</code></div>
      <div><span>// Hides Element</span></div>
    </aside>
    <br>
    <p>
      The <code>flex</code> keyword is used to <em>create a container that allows its direct children to be flexible</em>. The children are called items and their layout structure is defined by a set of sub-properties that work only when the display has been set to work. The <i>flex-direction</i> sub-prop <em>assigns if items will flow in a column or row</em>. Because all items will try to fit onto the same line, the <i>flex-wrap</i> prop can be used to <em>wrap items to the next line</em>. Apply margin and padding to create gutters.
    </p>
    <aside class="declarations">
      <div><code>{display: flex;}</code></div>
      <div><span>// Flexible Element Layout</span></div>
      <div><code>{flex-direction: row/column;}</code></div>
      <div><span>// Cross-Axis Alignment</span></div>
      <div><code>{flex-wrap: nowrap/wrap;}</code></div>
      <div><span>// Single-Line/Multi-Line</span></div>
    </aside>
    <br>
    <p>
      The <i>justify-content</i> sub-prop <em>manages item alignment along the main horizontal axis</em>.
    </p>
    <aside class="declarations">
      <div><code>{justify-content: ;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: flex-start;}</code></div>
      <div><span>// Default Value (Left)</span></div>
      <div><code>{&nbsp;: flex-end;}</code></div>
      <div><span>// Aligns Items to Right</span></div>
      <div><code>{&nbsp;: center;}</code></div>
      <div><span>// Center Aligns Items</span></div>
      <div><code>{&nbsp;: space-between;}</code></div>
      <div><span>// Equal Space Between Items</span></div>
      <div><code>{&nbsp;: space-evenly;}</code></div>
      <div><span>// Equal Space Around Items</span></div>
    </aside>
    <br>
    <p>
      The <i>align-items</i> sub-prop <em>manages item alignment along the cross vertical axis</em>.
    </p>
    <aside class="declarations">
      <div><code>{align-items: ;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: flex-start;}</code></div>
      <div><span>// Default Value (Top)</span></div>
      <div><code>{&nbsp;: flex-end;}</code></div>
      <div><span>// Aligns Items to Bottom</span></div>
      <div><code>{&nbsp;: center;}</code></div>
      <div><span>// Center Aligns Items</span></div>
      <div><code>{&nbsp;: stretch;}</code></div>
      <div><span>// Fills Container</span></div>
    </aside>
    <br>
    <p>
      The <code>grid</code> keyword acts like flexbox, but is more powerful in <em>creating a grid container</em>. Grid is similar to flexbox in that it justifies content and aligns items. The <i>align-items</i> sub-prop <em>manages item alignment along the cross vertical axis</em>.
    </p>
    <aside class="declarations">
      <div><code>{display: Grid; }</code></div>
      <div><span><b>// Grid Structured Layout</b></span></div>
    </aside>
    <br>
    <p>
      The <i>justify-items</i> sub-prop <em>aligns grid items horizontally</em>.
    </p>
    <aside class="declarations">
      <div><code>{justify-items: &nbsp;&nbsp;; }</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: stretch; }</code></div>
      <div><span>// Default - Fills Width of Cell</span></div>
      <div><code>{&nbsp;: start; }</code></div>
      <div><span>// Aligns Items to Left</span></div>
      <div><code>{&nbsp;: end; }</code></div>
      <div><span>// Aligns Items to Right</span></div>
      <div><code>{&nbsp;: center; }</code></div>
      <div><span>// Center Aligns Items</span></div>
    </aside>
    <br>
    <p>
      The <i>align-items</i> sub-prop <em>aligns grid items vertically</em>.
    </p>
    <aside class="declarations">
      <div><code>{align-items: &nbsp;&nbsp;&nbsp;&nbsp;; }</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: stretch; }</code></div>
      <div><span>// Default - Fills Width of Cell</span></div>
      <div><code>{&nbsp;: start; }</code></div>
      <div><span>// Aligns Items to Left</span></div>
      <div><code>{&nbsp;: end; }</code></div>
      <div><span>// Aligns Items to Right</span></div>
      <div><code>{&nbsp;: center; }</code></div>
      <div><span>// Center Aligns Items</span></div>
    </aside>
    <br>
    <p>
      Use the <i>justify-content</i> and <i>align-content</i> sub-props <em>whenever the total size of the grid/item is less than the size of its container</em> to set the alignment of the grid/item within the container.
    </p>
    <aside class="declarations">
      <div><code>{justify-content: ;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: start;}</code></div>
      <div><span>// Default Value (Left)</span></div>
      <div><code>{&nbsp;: end; }</code></div>
      <div><span>// Aligns Items to Right</span></div>
      <div><code>{&nbsp;: center;}</code></div>
      <div><span>// Center Aligns Items</span></div>
      <div><code>{&nbsp;: space-between;}</code></div>
      <div><span>// Equal Space Between Items</span></div>
      <div><code>{&nbsp;: space-around;}</code></div>
      <div><span>// Equal Space Around Items</span></div>
    </aside>
    <br>
    <p>
      The <i>grid-template-columns</i> and <i>grid-template-rows</i> sub-props <em>outlines grid container columns and rows</em>, respectively. Add margins between the columns and rows by using the  <i>grid-column-gap</i> and <i>grid-row-gap</i> sub-props: <i>grid-gap</i> is the shorthand.
    </p>
    <aside class="declarations">
      <div><code>{g-t-c: unit/value;}</code></div>
      <div><span>// Vertical Container</span></div>
      <div><code>{g-t-r: unit/value;}</code></div>
      <div><span>// Horizontal Container</span></div>
      <div><code>{g-c-g: unit/value;}</code></div>
      <div><span>// Vertical Gutter</span></div>
      <div><code>{g-r-g: unit/value;}</code></div>
      <div><span>// Horizontal Gutter</span></div>
      <div><code>{grid-gap: unit/value;}</code></div>
      <div><span>// Gutters</span></div>
    </aside>
    <br>
    <p>
      The documentation on flexbox and grid is extensive. There is much more that can be done to control the layout of elements using these keywords with the display property. Useful units and length values:
    </p>
    <aside class="declarations">
      <div><code>{&nbsp;: repeat(3, 1fr);}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: minmax(200px, 1fr);}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: auto-fit / auto-fill;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: repeat(auto-fill, minmax(x,y));}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: 25% 100px auto;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: min-content/max-content;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: 25% 100px auto;}</code></div>
      <div><span></span></div>
      <div><code>{grid: 100px 300px / auto-flow 200px;}</code></div>
      <div></div>
      <div><code>{grid: auto-flow dense 100px / 1fr 2fr;}</code></div>
    </aside>
    <br>
    <p>
      The <i>position</i> property can be used to re-position an element from its initial position. <i>positional properties</i> are used <em>in conjunction with</em> the position property to <em>set the precise placement</em> of an element when its position is either relative or absolute.
    </p>
    <aside class="declarations">
      <div><code>{position: &nbsp;;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: static;}</code></div>
      <div><span>// Default Setting</span></div>
      <div><code>{&nbsp;: relative;}</code></div>
      <div><span>// Implements Positional Properties</span></div>
      <div><code>{&nbsp;: absolute;}</code></div>
      <div><span>// Ignores Children + Implements PP</span></div>
      <div><code>{&nbsp;: fixed;}</code></div>
      <div><span>// Element Does not Scroll</span></div>
      <div><code>{&nbsp;: sticky;}</code></div>
      <div><span>// Scroll to a Fixed Position</span></div>
    </aside>
    <p style="margin: 1em;"></p>
    <aside class="declarations">
      <div><code>{top / right / bottom / right: value;}</code></div>
    </aside>
    <br>
    <p>
      The <i>z-index</i> property controls the <em>vertical stacking order of elements that overlap</em>. This property impacts elements only if it has a non-static position. 
    </p>
    <aside class="declarations">
      <div><code>{z-index: 100;}</code></div>
      <div><span>// Stacked Above Elements</span></div>
    </aside>
    <br>
    <p>
      The <i>height</i> property is used to <em>specify content height and width</em> of boxes. The <i>min/max-height</i> properties can be added to an element that has a height of <code>100%</code> to create a minimum and maximum element container height.
    </p>
    <aside class="declarations">
      <div><code> {height: value;}</code></div>
      <div><span>// Specify Content Height</span></div>
      <div><code> {min-height: value;}</code></div>
      <div><span>// Specify Minimum Content Height</span></div>
      <div><code> {max-height: value;}</code></div>
      <div><span>// Specify Maximum Content Height</span></div>
    </aside>
    <br>
    <p>
      The <i>width</i> property is used to <em>specify content width</em> of boxes. <i>min/max-width</i> properties can be applied in the same fashion as that of the height property. The <code>fit-content</code> and <code>min-content</code> keywords can be used to center child elements.
    </p>
    <aside class="declarations">
      <div><code> {width: value;}</code></div>
      <div><span>// Specify Content Width</span></div>
      <div><code> {min-width: value;}</code></div>
      <div><span>// Specify Min Content Width</span></div>
      <div><code> {max-width: value;}</code></div>
      <div><span>// Specify Max Content Width</span></div>
      <div><code> {fit-content: value;}</code></div>
      <div><span>// Center Content Horizontally</span></div>
    </aside>
    <br>
    <p>
      The <i>object-fit</i> prop <em>approximates how embedded media elements react to the height or width of its parent</em>. It works well with the <i>object-position</i> prop to <em>position a media element along a X/Y axis within its parent</em>.
    </p>
    <aside class="declarations">
      <div><code>{object-fit: &nbsp;;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: fill;}</code></div>
      <div><span>// Stretches Media to Fit</span></div>
      <div><code>{&nbsp;: cover;}</code></div>
      <div><span>// Media Crop</span></div>
      <div><code>{&nbsp;: contain;}</code></div>
      <div><span>// Sizes Media to Fill</span></div>
      <div><code>{&nbsp;: scale-down;}</code></div>
      <div><span>// Resize to Smallest Size</span></div>
    </aside>
    <br>
    <p>
      The <i>float</i> property is used to <em>wrap text around images</em> while the <i>clear</i> property is amended to the adjacent element to <em>clear ambiguities</em>. To this end, the <i>overflow</i> property can be implemented as a 'clearfix hack' <em>to control what happens to content that breaks outside of its boundaries</em>.
    </p>
    <aside class="declarations">
      <div><code>{float: &nbsp;&nbsp;&nbsp;&nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: none;}</code></div>
      <div><span>// Default Value (No Float)</span></div>
      <div><code>{&nbsp;: left;}</code></div>
      <div><span>// Floats Left</span></div>
      <div><code>{&nbsp;: right;}</code></div>
      <div><span>// Floats Right</span></div>
      <div><code>{clear: &nbsp;&nbsp;&nbsp;&nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: both;}</code></div>
      <div><span>// Clears X+Y-axis Floats</span></div>
      <div><code>{&nbsp;: auto;}</code></div>
      <div><span>// Clears Float</span></div>
      <div><code>{overflow: &nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: auto; }</code></div>
      <div><span>// Hidden Scroll(s) unless Overflow</span></div>
      <div><code>{&nbsp;: visible;}</code></div>
      <div><span>// Default Value</span></div>
      <div><code>{&nbsp;: hidden;}</code></div>
      <div><span>// Hides Overflow</span></div>
      <div><code>{&nbsp;: scroll;}</code></div>
      <div><span>// Scroll(s) for Overflow</span></div>
    </aside>
    <br>
    <p>
      The <i>Margin</i> property <em>specifies the outside borders of an element</em>. The <i>Padding</i> property <em>specifies the inside borders of an element</em>. Both props accept a single value as a shorthand for top, right, bottom or left sides.
    </p>
    <aside class="declarations">
      <div><code>{margin: 4vw; }</code></div>
      <div><span></span></div>
      <div><code>{padding: 8px; }</code></div>
      <div><span></span></div>
    </aside>
    <br>
    <p>
      Eliminate concerns about spacing by adding the <i>box-sizing</i> property with a universal selector to act as a container for a webpage. This prop can also be used to cast a shadow on an element. The values represent the horizontal/vertical offset, blur radius, spread radius and color assigned to the offset. All but the spread radius are required: <code>* { box-sizing: border-box; }</code>
    </p>
    <aside class="declarations">
      <div><code>{box-sizing: &nbsp;&nbsp;&nbsp;&nbsp;; }</code></div>
      <div><span><b>// Offset </b></span></div>
      <div><code>{&nbsp;: 1px 1px 2px  rgba(0, 0, 0, 0.4); }</code></div>
      <div><span>// Outer</span></div>
      <div><code>{&nbsp;: 1px 1px 2px  rgba(0, 0, 0, 0.4); }</code></div>
      <div><span>// Inner</span></div>
      <div><code>{&nbsp;: 0 8px 6px -6px red; }</code></div>
      <div><span>// Bottom</span></div>
      <div><code>{&nbsp;: inset 5px 5px 10px #000; }</code></div>
      <div><span>// Multiple</span></div>
    </aside>
    <p style="margin: 2em;"></p>
    
    <h5>Colors</h5>
    <p>
      The <i>color</i> property accepts any color value to <em>set the color of text</em> and is combined with other properties to color backgrounds, borders and what have you.
    </p>
    <aside class="declarations">
      <div><code>{color: &nbsp;&nbsp;&nbsp;&nbsp;; }</code></div>
      <div><span><b>// Value Description</b></span></div>
      <div><code>{&nbsp;: #00FFFF; }</code></div>
      <div><span>// Hexidecimal</span></div>
      <div><code>{&nbsp;: #0FF; }</code></div>
      <div><span>// Hexidecimal</span></div>
      <div><code>{&nbsp;: red; }</code></div>
      <div><span>// Named</span></div>
      <div><code>{&nbsp;: rgba(0, 255, 255, .5); }</code></div>
      <div><span>// RGBa</span></div>
      <div><code>{&nbsp;: hsla(180, 100%, 5%, .5); }</code></div>
      <div><span>// HSLa</span></div>
    </aside>
    <br>
    <aside class="declarations">
      <div><code>{opacity: # between 0.0 - 1; }</code></div>
      <div><span>// Defines Transparency</span></div>
    </aside>
    <p style="margin: 2em;"></p>
    
    <h5>Backgrounds + Borders</h5>
    <p>
      The <i>background</i> property is used to <em>layer an image underneath content</em>. As a shorthand, it accepts sub-props that include image, position, size, repeat, attachment, origin, clip and color.
    </p>
    <aside class="declarations">
      <div><code>{background: url(xyz.jpg); }</code></div>
      <div><span></span></div>
      <div><code>{background-position: top center; }</code></div>
      <div><span></span></div>
      <div><code>{background-size: cover; }</code></div>
      <div><span></span></div>      
      <div><code>{background-repeat: no-repeat; }</code></div>
      <div><span></span></div>
      <div><code>{background-attachment: fixed; }</code></div>
      <div><span></span></div>
      <div><code>{background-origin: border-box; }</code></div>
      <div><span></span></div>
      <div><code>{background-clip: content-box; }</code></div>
      <div><span></span></div>
      <div><code>{background-color: #3ab1fd; }</code></div>
      <div><span></span></div>
    </aside>
    <br>
    <p>
      <i>border</i> is a property that <em>applies a border around and element</em>. As a shorthand, it accepts keywords and values for its width, style and color.
    </p>
    <aside class="declarations">
      <div><code>{border: &nbsp;&nbsp;&nbsp;&nbsp;; }</code></div>
      <div><span><b>// Keyword/Value Description</b></span></div>
      <div><code>{border-width: thin; }</code></div>
      <div><span></span></div>
      <div><code>{border-style: &nbsp;&nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: none / solid; }</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: dashed / dotted; }</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: groove / ridge; &nbsp;}</code></div>
      <div><span></span></div>
      <div><code>{border-color: #hex; }</code></div>
      <div><span></span></div>
    </aside>
    <br>
    <p>
      The <i>border-radius</i> property <em>applies rounded corners</em> on elements, accepting 1, 2 or 3 values.
    </p>
    <aside class="declarations">
      <div><code>{border-radius: 4px&nbsp;&nbsp;;}</code></div>
      <div><span>// Soft Round Corners</span></div>
    </aside>
    <p style="margin: 2em;"></p>
    
    <h5>Font + Text</h5>
    <p>
      <i>font</i> is a property that is used to <em>set the style of text</em>. The shorthand form consists of font-style, font-variant, font-weight, font-size, line-height and font-family: when used, these properties must be included in this order (line-height is optional). 
    </p>
    <aside class="declarations">
      <div><code>{font: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;}</code></div>
      <div><span><b>// Keyword/Value Description</b></span></div>
    </aside>
    <br>
    <p>
      The <i>-style</i> <em>is used to italicize text</em>, but is commonly only used within the shorthand.
    </p>
    <aside class="declarations">
      <div><code>{font-style: normal; &nbsp;&nbsp;&nbsp;}</code></div>
      <div><span>// Not Italicized</span></div>
    </aside>
    <br>
    <p>The <i>-variant</i> <em>makes all text uppercase</em>.</p>
    <aside class="declarations">
      <div><code>{font-variant: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: normal; }</code></div>
      <div><span>// Normal Letters</span></div>
      <div><code>{&nbsp;: small-caps; }</code></div>
      <div><span>// Small Caplital Letters</span></div>
      <div><code>{&nbsp;: petite-caps; }</code></div>
      <div><span>// Thin Capital Letters</span></div>
    </aside>
    <br>
    <p> 
      The <i>-weight</i> <em>sets font thickness or width</em>, but its font-family will determine how the weight is applied, if applied at all. Values for this property use an incremental numerical scale from a lot point of 100 to its peak of 900 (increments of 100).
    </p>
    <aside class="declarations">
      <div><code>{font-weight: 600-900; &nbsp;}</code></div>
      <div><span>// Font Thickness</span></div>
    </aside>
    <br>
    <p>
      The <i>-size</i> <em>specifies the size of the font using numerical values (ie em, rem + px)</em>. The <code>px</code> value is an industry standard static value as it is used for pixel accuracy. The <code>em</code> unit is a responsive type. Calculate the em equivalent for any px value by dividing the desired element px value by its parent element font-size in pixels. The rem value is an alternative to the em unit in that it does not compound as it is relative to the root html element. Its counterpart, the <i>line-height</i>, <em>sets the space above and below inline elements</em>. 
    </p>
    <aside class="declarations">
      <div><code>{font-size: unit/value;&nbsp;}</code></div>
      <div><span>// Font Height</span></div>
      <div><code>{line-height: % value; &nbsp;}</code></div>
      <div><span>// Line Height</span></div>
    </aside>
    <br>
    <p>
      The <i>font-family</i> prop <em>defines the font applied to the text</em>. Font names are separated by a comma; names that have two or more words should be enclosed in quotation marks. Including a generic name as a fallback is a requirement. Some web-safe fonts include <code>Arial</code>, <code>Garamond</code>, <code>Tahoma</code>, <code>"Lucida Sans"</code>, <code>Georgia</code>, <code>"Palatino Linotype"</code> and <code>Verdana</code>.
    </p>
    <aside class="declarations">
      <div><code>{font-family: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: Arial, sans-serif;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: "Times New Roman", serif;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: monospace;}</code></div>
      <div><span>// Computer Code</span></div>
      <div><code>{&nbsp;: cursive;}</code></div>
      <div><span>// Script</span></div>
      <div><code>{&nbsp;: small-caption;}</code></div>
      <div><span>// All Words Smll Caps</span></div>
    </aside>
    <br>
    <p>
      Although the most convenient method of adding a font to a website would be via a <code>&#60;link&#62;</code> CDN in the <code>&#60;html&#62;</code> markup, it is important to be mindful of measurement units to create responsive typography. Any relative length unit can be used: employ <code>em</code> and <code>pm</code> for the greatest control as they are dependent on parent elements and viewport dimensions. For this reason, it is a good practice to set the <code>html {font-size: 100%;}</code> to ensure the base font-size is set in the browser and to use relative units on all other elements. Other important notes include: use the <code>rem</code> unit on nested elements, avoid using <code>vh/vw</code> units on font-size and use the <code>calc()</code> function to perform math calculations.
    </p>
    <aside class="declarations">
      <div><code>{font-size:  16px / 1.248em / 2rem / 100%;}</code></div>
      <div><span></span></div>
      <div><code>{font-size: calc( 16px + (28 - 16) );}</code></div>
      <div><span></span></div>
    </aside>
    <br>
    <p>The <i>letter-spacing</i> and <i>word-spacing</i> properties <em>manages the amount of space between letters and words</em>, respectively.</p>
    <aside class="declarations">
      <div><code>{letter-spacing: value;}</code></div>
      <div><span>// Space between Letters</span></div>
      <div><code>{word-spacing: keyword;}</code></div>
      <div><span>// Space between Words</span></div>
      <div><code>{text-align: center/justify;}</code></div>
      <div><span>// Aligns Text</span></div>
    </aside>
    <br>
    <p>
      The <i>text-decoration</i> property <em>sets a line style on text</em> and can be written in shorthand form to <em>define the line, its style and color</em> (in that order). The <i>text-decoration-style</i> prop will accept values of <code>solid</code>, <code>double</code>, <code>dotted</code>, <code>dashed</code> and <code>wavy</code>.
    </p>
    <aside class="declarations">
      <div><code>{text-decoration: &nbsp;; }</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: underline red; }</code></div>
      <div><span>// Underline</span></div>
      <div><code>{&nbsp;: line-through; }</code></div>
      <div><span>// Line Through Text</span></div>
    </aside>
    <br>
    <p>
      The <i>text-transform</i> property <em>sets the text case and capitalization</em>.
    </p>
    <aside class="declarations">
      <div><code>{text-transform: &nbsp;&nbsp;; }</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: uppercase; }</code></div>
      <div><span>// Capitalizes All Letters</span></div>
      <div><code>{&nbsp;: capitalize; }</code></div>
      <div><span>// Capitalizes 1st Letters</span></div>
    </aside>
    <br>
    <p>
      The <i>writing-mode</i> property <em>sets the vertical and horizontal alignment of text</em>. It is useful when working with Asian languages: when doing so, be sure to implement the <i>word-break</i> property to ensure text words are not broken.
    </p>
    <aside class="declarations">
      <div><code>{writing-mode: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: horizontal-tb;}</code></div>
      <div><span>// English Style</span></div>
      <div><code>{&nbsp;: vertical-rl;}</code></div>
      <div><span>// Japanese Style</span></div>
      <div><code>{word-break: keep-all;}</code></div>
      <div><span>// Characters Stay Together</span></div>
    </aside>
    
    <p style="margin: 2em;"></p>
    <h5>List-style</h5>
    <p>
      <i>list-style</i> is a shorthand property that defines a type, position and image. The <i>list-style-type</i> prop <em>sets what type of bullet to use</em>. The <i>list-style-position</i> prop <em>sets the bullet inside or outside of the margin</em>. The <i>list-style-image</i> prop <em>uses a url to set the bullet as an image</em>.
    </p>
    <aside class="declarations">
      <div><code>{list-style-type: &nbsp;&nbsp;&nbsp;&nbsp;;}</code></div>
      <div><span><b>// Keyword Description</b></span></div>
      <div><code>{&nbsp;: none; }</code></div>
      <div><span>// No Bullets</span></div>
      <div><code>{&nbsp;: circle; }</code></div>
      <div><span>// Transparent Circle</span></div>
      <div><code>{&nbsp;: disc; }</code></div>
      <div><span>// Black Circle</span></div>
      <div><code>{&nbsp;: square; }</code></div>
      <div><span>// Black Square</span></div>
      <div><code>{&nbsp;: decimal; }</code></div>
      <div><span>// Alpha Numbers</span></div>
      <div><code>{&nbsp;: upper-roman; }</code></div>
      <div><span>// Roman Numbers</span></div>
      <div><code>{list-style-position:&nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: inside; }</code></div>
      <div><span>// Inside of Margin</span></div>
      <div><code>{&nbsp;: outside; }</code></div>
      <div><span>// Outside of Margin</span></div>
      <div><code>{list-style-image: &nbsp;&nbsp;&nbsp;;}</code></div>
      <div><span></span></div>
      <div><code>{&nbsp;: url(img/smile.png);}</code></div>
      <div><span>// URL to Image</span></div>
    </aside>
  </section>
  
  <hr>
  
  <!-- Structuring a Stylesheet -->
  <section>
    <h4>Part 4: Style Sheet Format and Structure</h4>
    <p>
      Writing CSS requires a plan: no plan will result in spaghetti code. There are ways to avoid code purgatory and it all begins with using <i>comments</i> to <em>document points-of-emphasis for each rule-set</em>. This practice makes reading code easier and is especially important when collaborating on a team project. The example below is a single-line comment where the '...' references the comment.
    </p>
    <blockquote>
      <code>/* ... */</code>
    </blockquote>
    <p>
      Leaving comments is only one method of writing legible code: double-space indention, lowercase text, meaningful class names, avoiding unnecessary type selectors (ie nesting to deep) and using shorthand properties will go a long way in formatting code so that anyone can read it. Don't be afraid to use lines of space, commented or not, to separate significant chunks of code.
    </p>
    <p>
      As a dev, it is imperative to comprehend the cascade, inheritance and specificity when structuring a style sheet as these factors hold the key to how styles are applied or if they are applied at all. At the core of CSS is its rule-defining algorithm that defines the order by which CSS rules cascade.
    </p>
    <p>
      Because style sheets come from different origins, they tend to overlap in scope. For example, browsers use a <i>user-agent</i> style sheet that provides a default style to all documents while devs create  <i>authored</i> style sheets. The algorithm defines the interaction between these files by prioritizing their order. Whereas user-agent style sheets are applied by default, an authored style sheet will follow. In the event that multiple declarations of equal value are made in both files, the rule-sheet of the latter style sheet will be prioritized. This is <i>specificity</i>.
    </p>
    <p>
      The same is true of such an instance taking place within the same style sheet. The example below dictates that the color of the <code>.class</code> will render 'black' because of the source order determination (ie specificity) on which declaration to utilize.
    </p>
    <figure>
      <img alt="Specificity Exemplified" src="img/specificity.jpg">
      <figcaption>
        Specificity Exemplified
      </figcaption>
    </figure>
    <p>
      Selectors have an applicable specificity rank-order as well where rule-sets are prioritized based on their importance. Selector rank-order (highest-to-lowest) is as follow:
    </p>
    <blockquote>
      <code>&#35;id</code><br> 
      <code>&#46;class</code><br> 
      <code>&#91;attribute &#61; &#34;val&#34;&#93;</code><br> 
      <code>&#58;pseudo-class</code><br> 
      <code>&lt;element&gt;</code><br> 
      <code>&#58;&#58;pseudo-element</code>
    </blockquote>
    <p>
      Selector combinators, the negation :pseudo-class <code>&#91; &#58;not&#40;&#41; &#93;</code> and the universal selector do not impair specificity. The <i>!important exemption</i> <code>&#91; &#33; &#93;</code> and <i>inline-style</i> can be used to override any declaration. However, the exception should be used sparingly, if at all, and it is considered bad practice to write inline-styles. 
    </p>
    <p>
      CSS styles are also controlled via <i>inheritance</i>: the concept that some property values applied to an element will be inherited by its children, but some will not. An example of this is a <code>&lt;p&gt;</code> tag nested in a <code>&lt;div&gt;</code>: setting the color property for the <code>&lt;div&gt;</code> will cause the <code>&lt;p&gt;</code> to be the same color. Setting the color property for the <code>&lt;p&gt;</code> will override the styles applied to the <code>&lt;div&gt;</code>. Always consult a CSS property reference list to ascertain which properties are natively inherited.
    </p>
    <p>
      In a nutshell: write styles that are broadly applied and have low specificity at the start of a style sheet so that they can be overridden (if necessary) by styles of a higher specificity written beneath them. Thus, include box-sizing, font, preprocessors, and variable definitions at the top of the style sheet followed by default style settings and ending with class-based selectors, components, defined patterns and utilities.
    </p>
    <p>
      Lastly, employing a <i>naming convention</i> is a beneficial technique that establishes a clear relationship among CSS selectors. The <i>block-element-modifier</i> (BEM) namespace is a method that encapsulates a <code>.class</code> as a block of code bound to an element that can be modified with precision.
    </p>
    <blockquote>
      <code>.block__element--modifier</code>
    </blockquote>
    <p>
      Pre-selectors can be used to indicate the purpose of a rule-set. Very useful for distinguishing blocks of code.
    </p>
    <blockquote>
      <code>.c-block &#123; ... &#125; = an HTML component</code><br>
      <code>.js-block &#123; ... &#125; = bout to JavaScript</code><br>
      <code>.u-block &#123; ... &#125; = Q+A Automate Tests</code>
    </blockquote>
  </section>
  <p style="margin: 2em;"></p>
</article>   
    


<!-- ++Debugging CSS++ 
<div>
  <h4>Debugging CSS</h4>
  <p>There are times when developers write declarations that are not rendered in the browser, and a simple explanation would target a syntax error as the culprit. When this happens, the browser will simply ignore the rule. If this happens, developers will have to resolve the conflict independently, and this sometimes creates headaches. Luckily, there are plenty of resources available to help <u><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Debugging_CSS" target="_blank">debug</a></u> CSS.</p>
  <p>Major internet browsers –Chrome, Firefox, Microsoft Edge and Safari, all offer <u><a href="https://www.sitepoint.com/css-debugging-and-optimization-browser-based-developer-tools/" target="_blank">dev tools</a></u> to help troubleshoot CSS issues. These toolkits employ an element inspector, a styles panel and a mode for responsive debugging that allows developers to understand where styling conflicts exist. When inspecting styles, it is important to note the declarations that are crossed out or have a warning icon, for example, have been overridden or are invalid. Thus, such elements should be the focus for trying to alleviate any style concerns. Learn more about <u><a href="https://developers.google.com/web/tools/chrome-devtools/" target="_blank">Chrome</a></u>, <u><a href="https://developer.mozilla.org/en-US/docs/Tools" target="_blank">Firefox</a></u>, <u><a href="https://docs.microsoft.com/en-us/microsoft-edge/devtools-guide" target="_blank">Microsoft Edge</a></u> and <u><a href="https://developer.apple.com/safari/tools/" target="_blank">Safari</a></u> dev tools.</p>
  <p>A simpler way to parse code for potential errors would be to use a <u><a href="https://www.sitepoint.com/css-debugging-and-optimization-code-quality-tools/" target="_blank">linter</a></u>, which searches for invalid declarations, specificity, and duplicate or unused selectors in an effort to sanitize code of any unnecessary elements. The W3C group has a quality online <u><a href="https://jigsaw.w3.org/css-validator/" target="_blank">validator</a></u>.</p>
  <p>There are additional methods that developers can take to optimize a web site and minifying files is a good first step. <u><a href="https://www.sitepoint.com/css-debugging-and-optimization-minification-csso/" target="_blank">Minification</a></u> is the process of removing unnecessary characters from the file in order to improve the files efficiency by decreasing the size of the file.</p>
  <p>Above all else, developers can best serve themselves by <u><a href="https://www.hongkiat.com/blog/code-optimization-series-refactoring-css/" target="_blank">refactoring</a></u> their code. Refactoring is the process of organizing code as most efficiently as possible; enhancing readability affords faster code execution, which is the ultimate goal here. When reorganizing code, it is a good practice to subscribe to a specific style guide with criteria that concentrates on declaration order, formatting rules and use of unit-values that you want to use. Employing a Block Element Modifier &#40;BEM&#41; naming convention would provide a more consistent code structure for code sharing in front-end development. Learn more about <u><a href="http://getbem.com" target="_blank">BEM</a></u>.</p>
</div>-->
<!-- -->
<!-- .....CONTENT-ENDS// --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>