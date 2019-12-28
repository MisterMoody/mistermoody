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
    <h2 class="title">Styling Content with CSS</h2>
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
  <!-- Part 1:  Create and Load a Stylesheet++ -->
  <section>
    <h3>Part 1: Create and Load a Stylesheet</h3>
    <p>Implementing CSS begins by creating a file that ends with the <code>.css</code> file extension and placing it into a folder titled 'css' in the project folder.Next, load the stylesheet into the <code>&lt;head&gt;</code> of the <code>&#60;html&#62;</code> document using the <code>&lt;link&gt;</code> tag. This element requires three attributes for valid implementation: <code>rel="keyword"</code>, <code>type="keyword"</code> and the <code>href="URL"</code>.
    </p>
    <figure>
      <img alt="Linking a CSS File with an HTML Document" src="img/cssLinkStrategy.jpg">
      <figcaption>
        CSS &lt;Link&gt; Strategy
      </figcaption>
    </figure>
    <p>
      The <code>rel="..."</code> attribute specifies the relationship of the target object with the <code>&lt;link&gt;</code> to specify its relationship with the document. The <code>type="..."</code> attribute (omitted) specifies the <i>media type</i> being used as a resource. The keywords <code>"stylesheet"</code> and <code>"text/css"</code>, respectively, are used to notify the browser that this is a cascading style sheet. The <code>href="URL"</code> attribute specifies the location of an external resource via its <i>url</i> (Uniform Resource Locator) by establishing a connection between the document and an <i>external stylsheet</i>. The examples above highlight use of <i>relative</i> URLs, which is an <i>implicit</i> reference to a resource located on the same server as the web page using a simple file path.
    </p>
    <p>
      Not all resources are located on the same server. Many web apps utilize resources that are stashed throughout the webiverse: these use <i>explicitly</i> specified web address and are called <i>absolute</i> URLs. An absolute URL takes the following format:
    </p>
    <blockquote>
      <code>protocol://domain/path/</code>
    </blockquote>
    <p>
      Here, <i>protocol</i> specifies how the resource is to be accessed: the protocol identifier uses either <code>http://</code> or <code>https://</code> as a method for transferring data between computer networks while the domain is the (website) server from which data is requested. The <i>path</i> specifies the sequence of directories leading to the target. That's covered. Now, lets focus on writing CSS!
    </p>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 2: Understanding CSS Syntax++ -->
  <section>
    
    <!-- Selector/Declaration Overview -->
    <article>
      <h3>Part 2: Understanding CSS Syntax</h3>
      <p>
        In life, there are rules: when you follow the rules, you are rewarded and when you break a rule, well, all hell breaks loose. Same analogy applies to CSS: there are rules for writing CSS to instruct a document how to display content. CSS is created by employing a <i>rule-set</i>, which is a block of code that consists of a selector and a declaration. 
      </p>
      <p>
        This section is designed to explain syntax rules by dissecting a rule-set and its features. It begins with an explanation of how <code>&#60;html&#62;</code> elements are used as selectors and the means by which they can be manipulated. Next, measurement units are explored in an effort to understand how elements move or are shaped, creating the perfect segway into the next section highlighting use case declarations.
      </p>
      <h4>The Rule-Set</h4>
      <p>
        <i>selectors</i> <em>reference <code>&#60;html&#62;</code> elements</em> targeted for styling. Its <i>declaration</i> is made of a property and a value: the <i>property</i> identifies which element feature to modify while the <i>value</i> quantifies to what extent the property is modified. 
      </p>
      <blockquote><code>selector &#123; property: keyword/value; &#125;</code></blockquote>
      <p>
        It is important to understand how to amalgamate selector with declarations: this can be achieved by being aware of selector types, proper measurement units and the properties that ultimately define the targeted selector or selectors!
      </p>
    </article>
    
    <!-- Selector Types-->
    <article>
        <h4>Selector Types</h4>
        <p>
          All <code>&#60;html&#62;</code> elements can be used as a selector, but other things can be used as a selector as well. This first group of selectors are targeted most frequently.
        </p>

        <h5>Simple Selectors</h5>
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

        <h5>Combinators</h5>
        <p>
          The power of selectors can be amplified by using a <i>combinator</i>: syntax that <em>unifies the relationship between any of the selectors</em> used above that targets and applies styles to <code>&#60;html&#62;</code> elements based on a specific criteria. The <i>descendant</i> selector <em>targets elements that descend from a specific element</em>. The <i>child</i> selector <em>targets children of a specific element</em>. The <i>adjacent sibling</i> selector <em>targets immmediate siblings of a specific element</em>. The <i>general sibling</i> selector <em>targets all siblings of a specific element</em>. Selectors can also be grouped allowing <em>application of a consistent style theme</em> to grouped elements.
        </p>
        <aside class="declarations">
            <div><code>Descendant</code></div>
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

        <h5>Attribute Selector</h5>
        <p>
            There are also <i>attribute</i> selectors that can be utilized to target particular features within an <code>&#60;html&#62;</code> element, such as those used with the <code>&#60;form&#62;</code> element. 
          </p>
        <aside class="declarations">
            <div><code>[attribute]</code></div>
            <div><span>Targts Attribute</span></div>
            <div><code>[attribute="fee"]</code></div>
            <div><span>Targts Attr. &amp; Value</span></div>
            <div><code>[attr~="fee"]</code></div>
            <div><span>Targts Attr. &amp; Specific Value</span></div>
            <div><code>[attribute<sup>*</sup>="fee"]</code></div>
            <div><span>Targts ALL"fee"</span></div> 
          </aside>        

        <br>  

        <h5>:Pseudo-Class</h5>  
        <p>
            There are also selectors that have selectors! <i>&#58;pseudo-class</i> selectors are <em>keywords added to selectors to invoke a special 'state' during a particular instance</em>. The examples below dictates how <code>&#60;a&#62;</code> elements can be modified based on a particular instance. The keywords below are grouped categorically to highlight usage cases. This first group of selectors are useful for <code>&#60;form&#62;</code> and <code>&#60;link&#62;</code> elements:
          </p>
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

        <h5>:Pseudo-Elements</h5>
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
      </article>
    <br>  
    <!-- Value Measurement Units -->
    <article>
        <h4>Value Measurement Units</h4>  
        <p>
          Values provide properties with a measurement unit that quantifies the expected aesthetic quality. All properties have values and most of the time that value is a keyword which has a precise meaning for how an element should behave. Often, a numeric value is required, and in such an instance, such value will be one of three data types: dimension, integer/number or a percentage. Learning keywords for the several hundred properties will take some time, but quickly grasping length units is imperative for outputting the simplest of style declarations.
        </p>

        <h5>Absolute vs. Relative Units</h5>
        <p>
          Length units are either absolute or relative in nature: <i>absolute</i> units are fixed and appear as the declared size regardless of browser/device screen size while <i>relative</i> units represents a length with the ability to scale relative to other elements on the page. With respect to responsive web design, it is obvious that relative units are a preferred choice. The <i>pixel</i> (<code>px</code>) unit is an anomoly in that it has an immutable absolute value, yet, is relative to screen resolution. Another common value is the <i>percentage</i> (<code>%</code>) relative unit: use of this is risky in that that element becomes relative to its parent. One suggestion for avoiding any risk is to add the rule-set below to the top of the style sheet then never use again, laying the foundation for a responsive design: 
        </p>
        <blockquote>
          <code>html &#123; font-size: 100%; &#125;</code>
        </blockquote>
        <p>
          Relative units that build responsiveness include em, rem, vh, vw, vmin, vmax and calc(). Both <code>em</code> and <code>rem</code> units focus on styling font-size with the exception being that the former is relative to its parent while the latter is relative to the root element. Viewport units are relative measurements that provide percentage-based calculations for responsive design, making these the idea choice when working with images and layouts. The viewport height <code>(vh)</code> and viewport width <code>(vw)</code> units reflect an equal percentage of their respective viewport dimensions. Use the <code>vh</code> units on the height property to create full-screen sections. The <code>vmin</code> and <code>vmax</code> unit represents the percentage of viewport height or width, for whichever is smaller or larger. When <code>vmin</code> is used on an elements height and width, all aspects of that element will be viewable within the viewport. Viewport units are particularly helpful for designing responsive layouts! The <code>calc()</code> function provides a calculation that formulates responsiveness on the element of which it is applied, allowing font-size to scale depending on the device screen size. A <code>vw</code> can be added to this function to implement fluid typography.
        </p>
        <aside class="declarations">
          <div><code>{prop: &nbsp;&nbsp;&nbsp;&nbsp;;}</code></div>
          <div><span><b>// Value Purpose</b></span></div>
          <div><code>{prop: #px;}</code></div> 
          <div><span>// Precisness</span></div>
          <div><code>{prop: #%;}</code></div>
          <div><span>// Base</span></div>
          <div><code>{prop: #em;}</code></div>
          <div><span>// Font</span></div>
          <div><code>{prop: #rem;}</code></div>
          <div><span>// Font</span></div>
          <div><code>{prop: #vh;}</code></div>
          <div><span>// Layout</span></div>
          <div><code>{prop: #vw;}</code></div>
          <div><span>// Layout | Font</span></div>
          <div><code>{prop: #vmin;}</code></div>
          <div><span>// Layout | Sizing</span></div>
          <div><code>{prop: #vmax;}</code></div>
          <div><span>// Layout | Sizing</span></div>
          <div><code>{prop: calc(#);}</code></div>
          <div><span>// Calculator</span></div>
        </aside>
        <br>  

        <h5>Dimensional and Time Units</h5> 
        <p>
          Not all values are created equal so when designing animations out from the abyss of time and space, it is helpful to be aware of dimensional and time measurement units. Time units are easy to remember: <i>seconds</i> <cdoe>(s)</cdoe> and <i>milliseconds</i> <code>(ms)</code>. Working with dimensions can be tricky. The <code>rotate()</code> function is used to calculate a transformation on a specified element. This function helps ascertain movement using the <i>degree</i> <code>(deg)</code> and <i>turns</i> <code>(turn)</code> units, which are used to rotate or turn an object with the only distinction being that one turn reflects a full 360 degree whereas one degree equals just that.
        </p>
        <aside class="declarations">
          <div><code>&#123;transition-duration: 4400ms;&#125;</code></div> 
          <div><span>// 4.4 seconds</span></div>
          <div><code>{transform: rotate&#40;720deg&#41;;}</code></div>
          <div><span>// 2 Rotations</span></div>
          <div><code>{transform: rotate&#40;1turn&#41;;}</code></div>
          <div><span>// 1 Rotation</span></div>
        </aside>
        <br>
        <p>
          Although outside of the scope, there are other math functions that are used when designing animations.
        </p>
        <aside class="declarations">
          <div><code>{transform: perspective();}</code></div> 
          <div><span>// 3-Dimensional</span></div>
          <div><code>{transform: matrix&#40;#&#41;;}</code></div>
          <div><span>// 2-Dimensional</span></div>
          <div><code>{transform: scale&#40;#&#41;;}</code></div>
          <div><span>// Scales Element</span></div>
          <div><code>{transform: skew&#40;#&#41;;}</code></div>
          <div><span>// Skews Element</span></div>
          <div><code>{transform: translate&#40;x, y&#41;;}</code></div>
          <div><span>// Translates Element</span></div>
        </aside>
        <br>  
        <p>
          That was a good bit on numeric values all of which will be utilized throughout a typical style sheet. With a solid foundation of how values work, designers can focus on developing their property memory bank, and the best properties to jumpstart this initiative focus on layout.
        </p>

      </article>
    
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 3: Making Declarations -->
  <section>
    <!-- Project Plan/Intro -->
    <article>
      <h4>Part 3: Making Declarations</h4>
      <p>
        There are a lot of properties available for styling a document: no project regardless of size will utilize all of them. Using the <code>&#60;html&#62;</code> document from the <a href="">HTML Markup</a> lesson, lets begin making declarations using common scenarios a designer could expect to encounter when designing an aesthetically pleasing, yet, fully responsive website for a restaurant. This project features a flexible-grid layout, a manageable global navigation system, images and lists to illustrate and explain food products, respectively, combined with a call-to-action that would pursue a user to make a purchase.
      </p>
      <!-- ??add Animation, Transition + Transform??-->
    </article>
    
    <!-- Layout Structure -->
    <article>
      <h5>Visual Layout</h5>
      <p>
        When structuring a layout, it is a best practice to invoke <code>{box-sizing: border-box;}</code> at the top of a style sheet. This declaration <em>eliminates spacing concerns</em> by setting a foundation for layout and positional properties used thereafter. From there, the first property designers reach for is that of <i>display</i>, which <em>determines how an element is displayed</em>. The main goal of this property emphasizes horizontal and vertical element alignment. 
      </p>
      <blockquote><code>{display: inline / block / none;}</code></blockquote>
      <p>
        These keywords are old hat in that they were used from the start to emphasize horizontal and vertical layout, but their value has waned over time.
        The keyword <code>inline</code> is the default value for elements <em>that wrap text along the horizontal axis</em>, such as <code>&#60;span&#62;</code>. The keyword <code>block</code> is the default value for elements <em>that act as containers</em>: the <code>&#60;div&#62;</code> and <code>&#60;ul&#62;</code> elements are abvious examples, but the <code>&#60;p&#62;</code> and <code>&#60;h1&#62;</code> elements are also considered a block. Use the <code>none</code> keyword to <em>hide elements</em>.
      </p>
      <p>
        It can be a cumbersome task to use the aforementioned keywords to style a large website, but designers did it this way for eons basing elements as either a row or column. Nowadays, layout techniques are implemented using the keywords flex and grid, and although nearly the same, both are used in distinct ways. <code>flex</code> is one-dimensional and is best used to arrange individual items in a single row or column whereas <code>grid</code> is two-dimensional and is best used to establish containers by arranging items in multiple rows or columns. Thus, what distinguishes these keywords is that grid defines a parent element while flexbox defines child elements.  With that in mind, lets first focus on structuring a container. 
      </p>
      
      <h6>The Grid</h6>
      <!-- Grid -->
      <p>
        The <code>{display: grid; }</code> declaration sets up a layout pattern that allows elements to be placed in fixed or flexible positions along the cross-axis of perpendicular lines. This property has various sub-props that can be used to manipulate the layout according to specifications.
      </p>
      <aside class="declarations">
        <div><code>{display: grid; }</code></div>
        <div><span>// Implements Layout</span></div>
        <div><code>{grid-template-column: value;}</code></div>
        <div><span>// Explicit Column</span></div>
        <div><code>{grid-template-row: value;}</code></div>
        <div><span>// Explicit Row</span></div>
        <div><code>{grid-template-area keyword;}</code></div>
        <div><span>// Explicit Layout</span></div>
        <div><code>{grid-auto-flow: keyword;}</code></div>
        <div><span>// Implicit Layout</span></div>
        <div><code>{grid-gap: px / em;}</code></div>
        <div><span>// Gutters</span></div>
      </aside>
      <br>
      <p>
        The sub-props <code>{g-t-c: val;}</code> and <code>{g-t-r: val;}</code> are used to <em>explicitly specify column and row track sizes</em>. The <code>{g-t-a: key;}</code> sub-prop is an elaborate method to accomplish this same feat, yet, is outside of the project scope. To <em>implicitly layout columns and rows</em>, invoke the auto-placement algorithm using <code>{g-a-f: key;}</code>: flow direction is determined using the keywords <code>column</code> or <code>row</code>. Additionally, the keyword <code>dense</code> can be added to the declaration in order to remove dead space between items of varying size, forcing columns or rows to flow in a natural order. In any case, use <code>{grid-gap: value;}</code> to add gutters between both columns and rows.
      </p>
      <p>
        The length units previously learned can be applied to sub-properties here for customization, but the true power of <code>grid</code> is the use of a unique set of keywords, math functions and fractional units. The latter is easiest to comprehend so lets start there and work it into the other methods. 
      </p>
      <p>
        A <i>fractional unit</i> <code>#fr</code> specifies that <em>an element take up a fraction of space where an allotment is available</em>: <code>1fr</code> uses one fraction of space; <code>2fr</code> uses two, so on and so forth. Fractional units consistently size elements and work well with math functions.
      </p>
      <aside class="declarations">
        <div><code>{g-t-c: 1fr;}</code></div>
        <div><span>// All Columns are of Equal Width</span></div>
        <div><code>{g-t-c: 2fr 1fr;}</code></div>
        <div><span>// Col 1 is Twice the Size of Col 2</span></div>
        <div><code>{g-t-r: 1fr;}</code></div>
        <div><span>// All Rows are of Equal Height</span></div>
      </aside>
      <br>
      <p>
        The <code>minmax(x, y)</code> function simplifies calculating a formula for distributing space among elements by <em>establishing a range between a minimum <code>(x)</code> and maximum <code>(y)</code> value to explicitly set columns or rows</em>. The <code>auto</code> keyword used in the examples below <em>sets the the value at minimum or maximum.</em>
      </p>
      <aside class="declarations">
        <div><code>{g-t-c: minmax(200px, auto);}</code></div>
        <div><span>// Set MIN Value</span></div>
        <div><code>{g-t-r: minmax(auto, 50%);}</code></div>
        <div><span>// Set MAX Value</span></div>
        <div><code>{g-t-c: minmax(150px, auto);}</code></div>
        <div><span>// At least 150px Wide</span></div>
        <div><code>{g-t-r: minmax(auto, 88px);}</code></div>
        <div><span>// No Taller than 88px</span></div>
        <div><code>{g-t-c: minmax(200px, 1fr);}</code></div>
        <div><span></span></div>
      </aside>
      <br>
      <p>The <code>repeat(x, y)</code> function <em>allows the declaration to be applied repeatedly</em>.</p>
      <aside class="declarations">
        <div><code>{g-t-c: repeat(3, 1fr);}</code></div>
        <div><span>// 3 Columns 1 Fraction in Width</span></div>
      </aside>
      <br>
      <p>
        The essential <code>grid</code> keywords designers need to know: <code>auto-fill</code>, <code>auto-fit</code>, <code>min-content</code> and <code>max-content</code>. 
      </p>
      <p>
        Both <code>auto-fill</code> and <code>auto-fit</code> are used to <em>automatically size columns</em> <mark><small>(cannot be used to size rows)</small></mark>. Both add as many columns to the row as possible, but the difference is that the former <code>fills</code> the row with as many items as possible, while the latter will <code>fit</code> items before collapsing onto the next row. <code>min-content</code> and <code>max-content</code> represent the <em>minimum and maximum <b>width</b> allotted for content in a grid item</em>.
      </p>
      
      <aside class="declarations">
        <div><code>{g-t-c: repeat(auto-fill, minmax(x, y));}</code></div>
        <div><span></span></div>
        <div><code>{g-t-c: auto-fit / auto-fill;}</code></div>
        <div><span></span></div>
        <div><code>{g-t-c: minmax(auto, 1fr);}</code></div>
        <div><span></span></div>
        <div><code>{g-t-c: minmax(auto, max-content);}</code></div>
        <div><span></span></div>
        <div><code>{g-t-c: min-content / max-content;}</code></div>
        <div><span></span></div>
        <!--<div><code>{g-t-c: auto-flow dense 100px / 1fr 2fr;}</code></div>
        <div><span></span></div>
        <div><code>{g-a-f: column;}</code></div>
        <div><span></span></div>
        <div><code>{g-a-f: row dense;}</code></div>
        <div><span></span></div>
        <div><code>{grid: 100px 300px / auto-flow 200px;}</code></div>
        <div></div>
        <div><code>{grid: auto-flow dense 100px / 1fr 2fr;}</code></div>-->
      </aside>
      <br>
      <p>Typical Row-Grid</p>
      <aside class="declarations">
        <div><code>{display: grid;}</code></div>
        <div><span></span></div>
        <div><code>{grid-template-rows: repeat(auto-fill, minmax(140px, 200px));}</code></div>
        <div><span></span></div>
        <div><code>{grid-auto-flow: column (or row);}</code></div>
        <div><span></span></div>
        <div><code>{height: 100%;}</code></div>
        <div><span></span></div>
      </aside>
      <br>
      <!-- Transition to grid-items then FLEXbox -->
      <p>
        There are also properties used with <code>grid</code> that targets layout structure for grid-items. The <code>justify-items</code> and <code>align-items</code> properties <em>provide horizontal and vertical alignment of grid items</em>.
      </p>
      <aside class="declarations">
        <div><code>{justify-items: &nbsp;;}</code></div>
        <div><span><b>// Horizontal Alignment</b></span></div>
        <div><code>{align-items: &nbsp;&nbsp;&nbsp;;}</code></div>
        <div><span><b>// Vertical Alignment</b></span></div>
        <div><code>{&nbsp;: stretch; }</code></div>
        <div><span>// Default - Fills Width of Cell</span></div>
        <div><code>{&nbsp;: start; }</code></div>
        <div><span>// Aligns Items to Left / Top</span></div>
        <div><code>{&nbsp;: end; }</code></div>
        <div><span>// Aligns Items to Right / Bottom</span></div>
        <div><code>{&nbsp;: center; }</code></div>
        <div><span>// Center Aligns Items</span></div>
      </aside>
      <br>
      <p>
        The <code>justify-content</code> and <code>align-content</code> properties to <em>align grid-items horizontally or vertically</em> within its parent container.
      </p>
      <aside class="declarations">
        <div><code>{justify-content: ;}</code></div>
        <div><span><b>// Horizontal Alignment</b></span></div>
        <div><code>{align-content: ;}</code></div>
        <div><span><b>// Vertical Alignment</b></span></div>
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
      <!--<h6>Flexbox</h6>
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
      <br>-->
    </article>
    
    <!-- Size and Placement -->
    <article>
      <h5>Sizing and Placement</h5>
      <p>Lorem ipsum...</p>
      <!-- -->
      <h6>Sizing and Shaping Elements</h6>
      <!-- Height + Width -->
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
      <!-- Margin + Padding -->
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
      <!-- Position + top/right/bottom/right + Z-Index -->
      <h6>Positional Placement</h6>
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
      <br><br>
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
      <!-- Float + Clear + Overflow -->
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
      <!-- Object-Fit -->
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
    </article>
    <br>
    <!-- Colors -->
    <article>
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
      <br><br>
      <aside class="declarations">
        <div><code>{opacity: # between 0.0 - 1; }</code></div>
        <div><span>// Defines Transparency</span></div>
      </aside>
      <br>
      <p>
        Besides eliminating sizing concerns, the <i>box-sizing</i> property can also be used to cast a shadow on an element. The values represent the horizontal/vertical offset, blur radius, spread radius and color assigned to the offset. All but the spread radius are required: <code>* { box-sizing: border-box; }</code>
      </p>
      <aside class="declarations">
        <div><code>{&nbsp;: 1px 1px 2px  rgba(0, 0, 0, 0.4); }</code></div>
        <div><span>// Outer</span></div>
        <div><code>{&nbsp;: 1px 1px 2px  rgba(0, 0, 0, 0.4); }</code></div>
        <div><span>// Inner</span></div>
        <div><code>{&nbsp;: 0 8px 6px -6px red; }</code></div>
        <div><span>// Bottom</span></div>
        <div><code>{&nbsp;: inset 5px 5px 10px #000; }</code></div>
        <div><span>// Multiple</span></div>
      </aside>
    </article>
    <br>
    <!-- Backgrounds + Borders -->
    <article>
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
    </article>
     <br> 
    <!-- Font + Text -->
    <article>
      <h5>Font + Text</h5>
      <p>Build fuild typography using <a href="https://www.modularscale.com/">modular scale</a>: check out the <a href="https://www.codementor.io/@ricardozea/100-responsive-typography-system-using-a-modular-scale-s5rhft58g ">tutorial</a>.</p>
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
    </article>
  </section>
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
  <!-- Part 4: Structuring a Stylesheet -->
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
  <!-- ************************************************** -->
  <hr>
  <!-- ************************************************** -->
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