<?php
$pageTitle = "Journal de Mister Moody";
include ("../inc/journalHeader.php");
?>
<!-- ************************************************** -->
<!-- ************ <<WEB DESIGN KNOWLEDGE>> ************ -->


<!-- //CONTENT-BEGINS..... -->
<!-- ++Using CSS++ -->
<section class="intro">
  <h2> Using CSS</h2>
  <p>
    This page defines the Cascading stylesheet Language, better known as CSS, which is the programming language that controls the presentation of HTML elements used when creating a website. The list of topics that are covered include:
  </p>
  <ol>
    <li>What is CSS?</li>
    <li>CSS Snytax</li>
    <li>The Cascade, Inheritance and Specificity</li>
    <li>Debugging and Optimizing CSS</li>
    <li>Layout</li>
    <li>General Styles</li>
    <li>Advanced Styles</li>
  </ol> 
  <p>
    Examples will be provided throughout the page in the form of <u>contextual links</u> or <code class="reference"><a href="">&lt;code&gt;</a></code> references. Perhaps more valuable is the curated list of resources (coming soon). Now that we have a gameplan, lets look at how to write CSS.
  </p>
</section>
        
<!-- ++What is CSS?++ -->
<hr>
<hr>
<div class="intro" id="whatIsCSS">
  <h2>What is CSS?</h2>
  <p><u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">Cascading stylesheets</a></u> (CSS) is a stylesheet language used to describe the rendering of elements on an HTML document. In the same fashion that HTML has a standardized set of specifications, the <u><a href="https://www.w3.org/Style/CSS" target="_blank">W3C</a></u> group is also the leading authority of CSS best practices. <u><a href="https://developer.mozilla.org/en-US/Learn/CSS/Introduction_to_CSS" target="_blank">Mozilla</a></u> and <u><a href="https://www.w3schools.com/css/css_intro.asp" target="_blank">W3Schools</a></u>, however, are great sources of reference that offer a suite of articles, tutorials and tools for implementing CSS.</p>
  <p>The setup for <u><a href="https://www.w3schools.com/css/css_howto.asp" target="_blank">applying CSS</a></u> to a web page using CSS is quite simple and begins by creating a file with the extension .css then including that file in the <code>&lt;head&gt;</code> of the HTML document that you want to style as a <code>&lt;link&gt;</code>. The <code>&lt;link&gt;</code> tag requires three attributes to be effectively implemented with an HTML document. Those attributes include the <code>href="val"</code>, <code>rel="val"</code> and the <code>type="val"</code> attributes.</p>
  <figure>
    <img alt="Strategy to Link a CSS File with an HTML Document" src="img/cssLinkStrategy.JPG">
    <figcaption>
      CSS &lt;Link&gt; Strategy
    </figcaption>
  </figure>
  <p>The <code class="reference"><a href="https://www.w3schools.com/tags/att_link_href.asp" target="_blank">href="val"</a></code> attribute specifies the location of an external resource and that resource will always be an external stylesheet whose location is referenced on the same server as the webpage that contains it. This attribute accepts a <code class="reference"><a href="https://www.webopedia.com/TERM/U/URL.html" target="_blank">URL</a></code> as its value to establish a connection with an <code class="reference"><a href="https://www.techopedia.com/definition/25421/external-style-sheet" target="_blank">external stylesheet</a></code>. While an <code>external stylesheet</code> is the file that is linked to the HTML document, the precise value for this element is the stylesheets' <code>URL</code>, or Uniform Resource Locator, which is the web browser mechanism used to retrieve a unique resource located on the web.</p>
  <p>Authored stylesheets have a relative URL, which is an implicit reference to a resource located on the same server as the web page. However, some resources are located somewhere else in the webiverse and these have an <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Learn/Common_questions/What_is_a_URL" target="_blank">absolute</a></code> URL, which is an explicitly specified web address. Where a relative URL requires a simple file path to process a file, an absolute URL takes the following format: <code>protocol://domain/path/resource</code>.</p>
  <p>Here, <u><a href="https://docs.microsoft.com/en-us/sql/ado/guide/data/absolute-and-relative-urls?view=sql-server-2017" target="_blank">protocol</a></u> specifies how the resource is to be accessed while the domain specifies the name of the computer where the resource is located. The path specifies the sequence of directories leading to the target while the resource, if included, is the target, typically the name of a file. The <u><a href="https://www.webopedia.com/TERM/U/URL.html" target="_blank">protocol identifier</a></u> is either <code>http</code> or <code>https</code>, and is separated from the domain by a colon and two forward slashes. While the protocol is a method for exchanging or transferring data around a computer network, the domain is the server that is being requested. While it is clear that developers should use relative URLs to server style sheets, <u><a href="https://www.seoclarity.net/resources/knowledgebase/difference-relative-absolute-url-15325/" target="_blank">an argument can be made for using an absolute URL instead</a></u>. <u><a href="https://www.ietf.org/rfc/rfc1738.txt" target="_blank">Learn more about URLs</a></u> and how they formally came about via the <u><a href="https://www.rfc-editor.org/info/rfc1738" target="_blank">RFC 1738</a></u> pact.</p>
  <p>The <code class="reference"><a href="https://www.w3schools.com/tags/att_link_rel.asp" target="_blank">rel="val"</a></code> attribute specifies the relationship of the target object to the link object and can accept a dozen values to specify a particular relationship with the document, but when implementing CSS, its value is always <code>"stylesheet"</code>.</p>
  <p>The <code class="reference"><a href="https://www.w3schools.com/tags/att_link_type.asp" target="_blank">type="val"</a></code> attribute specifies the Internet media type of the linked resources; a value of <code>"text/css"</code> indicates that the referenced document is an external stylesheet. This attribute is required only when the <code>href="val"</code> attribute is set.</p>
  <p>As you can see, setting up a web project to handle CSS is simple, but as the project grows, it will become difficult to manage how styles are applied. A good practice here is to separate project styles from one another using multiple &lt;link&gt; tags in order to prevent <u><a href="https://www.computerhope.com/jargon/s/spaghett.htm" target="_blank">spaghetti code</a></u>. This occurs when you have different layout styles or patterns applied to various elements across multiple pages.</p>
  <p>With that covered, lets focus on writing CSS!</p>
</div>
<!-- ++CSS Syntax++ -->
<hr>
<div class="intro" id="cssSyntax">
  <h2>CSS Syntax</h2>
  <p>In life, there are rules: when you follow the rules, you are rewarded and when you break a rule, well, all hell breaks loose. Same analogy applies to CSS: there are rules for writing CSS to instruct a document to display a certain way. CSS is created by employing a <u><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/How_CSS_works" target="_blank">rule-set</a></u>, which is a rule for how the browser will interpret styling an HTML element. A rule-set is simply a block of code that consists of a selector, which references the HTML element that you want to apply styles to, and a declaration, which sets the property and value for the applied style. The terms rule-set, declaration and statement can be used interchangeably.</p>
  <p><u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax" target="_blank">Selectors</a></u> are used to select elements based on their name, class, id or attribute. <u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Syntax" target="_blank">Declarations</a></u> have beginning and ending curly braces and are composed of a property and corresponding value. A <u><a href="https://www.w3schools.com/css/css_syntax.asp" target="_blank">property</a></u> is an identifier for an HTML attribute that indicates which stylistic features to implement while its <u><a href="https://www.w3schools.com/css/css_syntax.asp" target="_blank">value</a></u> are specifications for how you want those stylistic features. A colon separates the property from its value while a semi-colon separates declarations from one another. With more than 300 <u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference" target="_blank">CSS properties</a></u>, the number of styling possibilities is endless!</p>
  <h5>Selector Types</h5>
  <p>There are seven types of selectors, all of which are used for a specific purpose. An explanation for how to use selectors appropriately can be found <u><a href="https://css-tricks.com/how-css-selectors-work/" target="_blank">here</a></u>, <u><a href="https://www.w3schools.com/cssref/css_selectors.asp" target="_blank">here</a></u> and <u><a href="https://www.tutorialspoint.com/css/css_syntax.htm" target="_blank">here</a></u>.</p>
  <p>The <u><em><a href="https://css-tricks.com/almanac/selectors/t/type/" target="_blank">element</a></em></u> selector <code>element &#123;prop: val;&#125;</code> will apply consistent styles to a specific HTML element. In the example below, all <code>&lt;h1&gt;</code> headings are modified to accept a 'grey' color and 'increased' size.</p>
  <figure>
    <img alt="Example of how to Style the #ID Selector" src="img/selectorTYPE.JPG">
    <figcaption>
      Example of an Element Selector
    </figcaption>
  </figure><br>
  <p>The <u><em><a href="https://css-tricks.com/almanac/selectors/d/descendant/" target="_blank">descendant</a></em></u> selector <code>element<sup>1</sup> element<sup>2</sup> &#123;prop: val;&#125;</code> is useful for applying styles to a <u><a href="https://www.webopedia.com/TERM/N/nesting.html" target="_blank">nested</a></u> element. In the example below, the <code>&lt;li&gt;</code> within the <code>&lt;ul&gt;</code> will accept a 'grey' color and 'decreased' size.</p>
  <figure>
    <img alt="Example of how to Style the Descendant Selector" src="img/selectorDESCENDANT.JPG">
    <figcaption>
      Example of a descendant Selector
    </figcaption>
  </figure><br>
  <p>The <u><em><a href="https://css-tricks.com/almanac/selectors/c/child/" target="_blank">child</a></em></u> selector <code>element<sup>1</sup> &#62; element<sup>2</sup> &#123;prop: val;&#125;</code> applies styles to an elements in the event that it is the direct child of that element. In the example below, the declaration renders all <code>&lt;li&gt;</code> elements within a <code>&lt;ol&gt;</code> as green.</p>
  <figure>
    <img alt="Example of how to Style the Child Selector" src="img/selectorCHILD.JPG">
    <figcaption>
      Example of a child Selector
    </figcaption>
  </figure><br>
  <p>The <u><em><a href="https://css-tricks.com/almanac/selectors/c/class/" target="_blank">.class</a></em></u> selector <code>&#46;class &#123;prop: val;&#125;</code> selects elements with a specific class, and can be applied to more than one element.</p>
  <figure>
    <img alt="Example of how to Style the .CLASS Selector" src="img/selectorClass.JPG">
    <figcaption>
      Example of a .CLASS Selector applied to HTML
    </figcaption>
  </figure>
  <p>The illustration above highlights the simplicity in applying a <code>&lt;.class&gt;</code> to an HTML element while the illustration below indicates the style change and how it is applied. In this example, the first declaration will render elements that contain a <code>.class</code> selector as 'red' whereas the second declaration will render <code>&lt;p&gt;</code> elements that contain a <code>.class</code> selector as 'yellow.'</p>
  <figure>
    <img alt="Example of how to Style the .CLASS Selector" src="img/selectorClass2.JPG">
    <figcaption>
      Examples of .CLASS Selectors applied in CSS
    </figcaption>
  </figure><br>
  <p>The <u><em><a href="https://css-tricks.com/almanac/selectors/i/id/" target="_blank">#id</a></em></u> selector <code>&#35;id &#123;prop: val;&#125;</code> is a unique CSS identifier that can only be used on one element. Whereas the element selector is the most commonly used for applying styles to the same element, the #id selector has the highest level of <u><a href="https://developer.mozilla.org/en/docs/Web/CSS/Specificity" target="_blank">specificity</a></u> among all selectors. It is very useful when referencing the location of a block of code, being the only purpose of which I employ this selector.</p>
  <figure>
    <img alt="Example of how to Style the #ID Selector" src="img/selectorID.JPG">
    <figcaption>
      Example of an #id Selector
    </figcaption>
  </figure>
  <p>In the example above, an #id selector is applied to the navigational links' <code>&lt;a href&#61;&#34;&#35;val&#34;&gt;</code> attribute that, when clicked, will transport the user to the <code>&lt;div&gt;</code> with the corresponding <code>id&#34;val&#34;</code>. Notice the placement of the hashtag &#40;&#35;&#41;; it is always placed in an <code>&lt;a&gt;</code> tag, but not with the targeted element.</p><br>
  <p>The <u><em><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Universal_selectors" target="_blank">universal</a></em></u> selector <code><b>&#42;</b> &#123;prop: val;&#125;</code> is used to render a specific style to all elements of a website. In the illustration below, all text elements will render 'blue.'</p>
  <figure>
    <img alt="Example of how to Style the Universal Selector" src="img/selectorUNIVERSAL.JPG">
    <figcaption>
      Example of an Universal Selector
    </figcaption>
  </figure>
  <p>One must be careful when using this selector for certain properties as it severly limits application of the same property applied to a different selector. For example, all <code>&lt;a href&#61;&#34;val&#34;&gt;</code> have a default style where <code>&lt;link&gt;</code> elements render 'blue' in color. The rule-set above would cause havoc as it would be difficult to differentiate normal text from an <code>&lt;a&gt;</code> element embedded within a block of text.</p><br>
  <p><u><em><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes" target="_blank">Pseudo-class</a></em></u> selector <code><b>&#58;pseudo-class</b> &#123;prop: val;&#125;</code> are actually keywords that are added to other selectors and provide a unique style during a particular instance of that selector. Knowing <u><a href="https://css-tricks.com/pseudo-class-selectors/" target="_blank">how to apply</a></u> a pseudo-class will seem difficult at first, but developers become familiar with these quickly as it provides additional styling capabilities. The illustration below highlights ways in which these selectors can be applied to navigational links.</p>
  <figure>
    <img alt="Example of how to Style a Pseudo-Class Selector" src="img/selectorPSEUDOclass.JPG">
    <figcaption>
      Example of a Pseudo-Class Selector
    </figcaption>
  </figure>
  <p>It would be wise to check out this handy <u><a href="https://css-tricks.com/almanac/selectors/" target="_blank">almanac</a></u> of pseudo-class selectors to better understand how these can be applied in a variety of situations, one of which is a pseudo-class based on <u><a href="https://css-tricks.com/pseudo-class-selectors/#article-header-id-2" target="_blank">position</a></u>, which is a good method for specifiying a location for blocks of code. In this regard, understanding how to <u><a href="https://css-tricks.com/how-nth-child-works/" target="_blank">use</a></u> and <u><a href="https://css-tricks.com/examples/nth-child-tester/" target="_blank">test</a></u> the <code class="reference"><a href="https://css-tricks.com/useful-nth-child-recipies/" target="_blank">&#58;nth-child&#40;&#41;</a></code>, which selects elements based on an algebraic expression, is imperative, but that should not stop one from exploring <code class="reference"><a href="https://css-tricks.com/almanac/selectors/r/required/" target="_blank">&#58;required&#40;&#41;</a></code>, <code class="reference"><a href="https://css-tricks.com/almanac/selectors/f/focus/" target="_blank">&#58;focus</a></code> and <code class="reference"><a href="https://css-tricks.com/almanac/selectors/d/disabled/" target="_blank">&#58;disabled</a></code> pseudo-class selectors that go far when styling <code>&lt;form&gt;</code>inputs.</p><br>
  <p>In contrast to pseudo-class selectors, <u><em><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements" target="_blank">pseudo-element</a></em></u> selector can be used to style a specific part of an element. There are many <u><a href="https://css-tricks.com/pseudo-element-roundup/" target="_blank">amazing ways</a></u> to use pseudo-elements, but the scope of this subject focuses on four selectors that adds depth to elements that possess text.</p>
  <p>The <code class="reference"><a href="https://css-tricks.com/almanac/selectors/f/first-letter/" target="_blank">&#58;first-letter</a></code> and <code class="reference"><a href="https://css-tricks.com/almanac/selectors/f/first-line/" target="_blank">&#58;first-line</a></code> pseudo-elements can be used to add style to the first letter or first line of text, respectively, but they can only be applied to <u><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Block-level_elements" target="_blank">block-level</a></u> elements. In the illustration below, the first declaration states that the 'first letter' of 'every paragraph' with a class of 'intro' will display as 'red.' The second declaration states that the 'first line' of 'every paragraph' with a class of 'intro' will display 'bolder' than the text below it.</p>
  <figure>
    <img alt="Example of how to Style a Pseudo-Element Selector" src="img/selectorPSEUDOelement.JPG">
    <figcaption>
      Example of a Pseudo-Element Selector
    </figcaption>
  </figure>
  <p>The <code class="reference"><a href="https://css-tricks.com/almanac/selectors/a/after-and-before/" target="_blank">&#58;&#58;before</a></code> and <code class="reference"><a href="https://www.w3schools.com/css/css_pseudo_elements.asp" target="_blank">&#58;&#58;after</a></code> pseudo-elements can be used to add content before or after an element, respectively. The key to these selectors is that they require the <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content" target="_blank">content&#58; &#34;&#34;&#59;</a></code> property in order to work. Add a symbol as a value for the property, or leave it empty and add the <code class="reference"><a href="https://developer.mozilla.org/en/docs/Web/CSS/background" target="_blank">background</a></code> shorthand property to the declaration with the resource (i.e. URL, image, string) that you want to display. In the illustration below, the value of the <code>content&#58; &#34;&#34;&#59;</code> property will display a checkmark before any list-item.</p>
  <figure>
    <img alt="Example of how to Style a Pseudo-Element Selector" src="img/selectorPSEUDOelement2.JPG">
    <figcaption>
      Example of a Pseudo-Element Selector
    </figcaption>
  </figure>
  <p>These selector types can do more than improve how text is displayed: they can even be used to create <u><a href="http://nicolasgallagher.com/multiple-backgrounds-and-borders-with-css2/" target="_blank">multiple backgrounds</a></u> and borders.</p><br>
  <p>The <u><em><a href="https://developer.mozilla.org/en/docs/Web/CSS/Attribute_selectors" target="_blank">attribute</a></em></u> selector <code>element&#91;<b>attribute</b> &#61; &#34;val&#34; &#123;prop: val;&#125;</code> is used to apply styles to an HTML element with a specific attribute, but what do I know: I never use this selector! If I did, I would probably use it to select all <code>&lt;p&gt;</code> elements with a <code>lang</code> attribute that has a value of <code>zh</code>, for the Mandarin language. But what would I use that for!?!</p>
  <figure>
    <img alt="Example of how to Style the Attribute Selector" src="img/selectorATTRIBUTE.JPG">
    <figcaption>
      Example of an Attribute Selector
    </figcaption>
  </figure>
  <p>Again, learning to use these selectors is a challenge every developer encounters. One thing to remember is that sometimes <u><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Combinators_and_multiple_selectors" target="_blank">combinator</a></u> selectors can be more efficient than creating separate styles for each targeted element. Equally important is to know how to hide styles when in production-mode. We implement <u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Comments" target="_blank">comments</a></u> by adding <code>&#47;&#42;</code> and <code>&#42;&#47;</code> to the beginning and end of any text; this will prevent any code from being rendered by the browser. Comments are also useful when collaborating on a project to ensure that all team members can readily comprehend its working status.</p>
</div>
<!-- ++C.I.S.++ -->
<hr>
<div class="intro" id="casInheritSpecify">
  <h2>The Cascade, Inheritance &amp; Specificity</h2>
  <p>The core of CSS is the <u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Cascade" target="_blank">Cascade</a></u>, an algorithm that defines how to combine property values that originate from different sources. Essentially, it defines that the order of CSS rules is important, and when not followed, could produce disastrous results. In accordance with the rules, developers should be wary of the descending order of importance for the cascade: origin, specificity and order.</p>
  <p>The <u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Cascade#Cascading_order" target="_blank">order</a></u> in which CSS declarations cascade depends on the origin of CSS declarations. Because style sheets come from different origins, they tend to overlap in scope, and this is when the algorithm defines the interaction. The browser uses a basic style sheet known as a <u><em><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Cascade#User-agent_stylesheets" target="_blank">user-agent</a></em></u> stylesheet that provides a default style to any document. A <u><em><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Cascade#User_stylesheets" target="_blank">user</a></em></u> stylesheet is created by individual users to customize and override styles that have been applied to the browser, regardless of origin. <u><em><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Cascade#Author_stylesheets" target="_blank">Authored</a></em></u> stylesheets are CSS files created by developers to define how a website will display. Respectively, these origins represent the order of priority in which they cascade, top-down, meaning that a user-agent stylesheet will take precedence over an authored stylesheet.</p>
  <p>In the event that multiple declarations target one specific element, <u><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Specificity" target="_blank">specificity</a></u> is invoked, which are actions taken by browsers to determine which CSS declaration should be applied. Generally, the last declaration made based on multiple declarations of equal specificity will be applied to the CSS. In the illustration below, the color of the class <code>.fav</code> will render 'black' because the source order determines which declaration to utilize.</p>
  <figure>
    <img alt="Specificity Exemplified" src="img/specificity.JPG">
    <figcaption>
      Example of Specifity at Work
    </figcaption>
  </figure>
  <p>The amount of specificity possessed by selectors can alter such measurement, which is why <u><a href="https://css-tricks.com/specifics-on-css-specificity/" target="_blank">calculating</a></u> specificity values can be challenging. The basic principle of specificity defines a rank-order of most to least significant selectors to use when writing CSS. <code>&#35;id</code> selectors have the highest rank followed by <code>&#46;class</code>, <code>&#91;attribute &#61; &#34;val&#34;&#93;</code>, <code>&#58;pseudo-class</code>, <code>&lt;element&gt;</code> then finally the <code>&#58;&#58;pseudo-element</code>.</p>
  <p>It should be mentioned that the universal selector <code>&#91; &#42; &#93;</code>, selector combinators <code>&#91; &#43;&#44; &gt;&#44; &#126;&#44; &#39;&#39;&#44; &#124;&#124; &#93;</code> and the negation pseudo-class <code>&#91; &#58;not&#40;&#41; &#93;</code>do not impair specificity. The <u><a href="https://css-tricks.com/when-using-important-is-the-right-choice/" target="_blank">!important</a></u> exemption <code>&#91; &#33; &#93;</code>, as well as an <u><a href="https://www.lifewire.com/what-is-css-inline-style-3466446" target="_blank">inline-style</a></u>, can be used to override any declaration, but it is considered bad practice due to the complications that can arise with debugging. There are <u><a href="https://www.w3schools.com/css/css_specificity.asp" target="_blank">plenty</a></u> <u><a href="https://specifishity.com/" target="_blank">of</a></u> <u><a href="https://cssspecificity.com" target="_blank">tools</a></u> readily available online to help developers better understand this concept.</p>
  <p>CSS styles are also controlled via <u><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Cascade_and_inheritance#Inheritance" target="_blank">inheritance</a></u>, which is the concept that some property values applied to an element will be inherited by its children, but some will not. A <u><a href="https://medium.com/@sayes2x/css-cascade-inheritance-and-specificity-9b18550b7637" target="_blank">good example</a></u> is a <code>&lt;p&gt;</code> tag nested in a <code>&lt;div&gt;</code>; setting the color property for the <code>&lt;div&gt;</code> will cause the <code>&lt;p&gt;</code> to be the same color. Setting the color property for the <code>&lt;p&gt;</code> will override the styles applied to the <code>&lt;div&gt;</code>. Developers should consult a CSS property <u><a href="" target="_blank">reference list</a></u> to ascertain which properties are natively inherited.</p>
</div>
<!-- ++Debugging CSS++ -->
<hr>
<div class="intro" id="debugCSS">
  <h2>Debugging CSS</h2>
  <p>There are times when developers write declarations that are not rendered in the browser, and a simple explanation would target a syntax error as the culprit. When this happens, the browser will simply ignore the rule. If this happens, developers will have to resolve the conflict independently, and this sometimes creates headaches. Luckily, there are plenty of resources available to help <u><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Introduction_to_CSS/Debugging_CSS" target="_blank">debug</a></u> CSS.</p>
  <p>Major internet browsers –Chrome, Firefox, Microsoft Edge and Safari, all offer <u><a href="https://www.sitepoint.com/css-debugging-and-optimization-browser-based-developer-tools/" target="_blank">dev tools</a></u> to help troubleshoot CSS issues. These toolkits employ an element inspector, a styles panel and a mode for responsive debugging that allows developers to understand where styling conflicts exist. When inspecting styles, it is important to note the declarations that are crossed out or have a warning icon, for example, have been overridden or are invalid. Thus, such elements should be the focus for trying to alleviate any style concerns. Learn more about <u><a href="https://developers.google.com/web/tools/chrome-devtools/" target="_blank">Chrome</a></u>, <u><a href="https://developer.mozilla.org/en-US/docs/Tools" target="_blank">Firefox</a></u>, <u><a href="https://docs.microsoft.com/en-us/microsoft-edge/devtools-guide" target="_blank">Microsoft Edge</a></u> and <u><a href="https://developer.apple.com/safari/tools/" target="_blank">Safari</a></u> dev tools.</p>
  <p>A simpler way to parse code for potential errors would be to use a <u><a href="https://www.sitepoint.com/css-debugging-and-optimization-code-quality-tools/" target="_blank">linter</a></u>, which searches for invalid declarations, specificity, and duplicate or unused selectors in an effort to sanitize code of any unnecessary elements. The W3C group has a quality online <u><a href="https://jigsaw.w3.org/css-validator/" target="_blank">validator</a></u>.</p>
  <p>There are additional methods that developers can take to optimize a web site and minifying files is a good first step. <u><a href="https://www.sitepoint.com/css-debugging-and-optimization-minification-csso/" target="_blank">Minification</a></u> is the process of removing unnecessary characters from the file in order to improve the files efficiency by decreasing the size of the file.</p>
  <p>Above all else, developers can best serve themselves by <u><a href="https://www.hongkiat.com/blog/code-optimization-series-refactoring-css/" target="_blank">refactoring</a></u> their code. Refactoring is the process of organizing code as most efficiently as possible; enhancing readability affords faster code execution, which is the ultimate goal here. When reorganizing code, it is a good practice to subscribe to a specific style guide with criteria that concentrates on declaration order, formatting rules and use of unit-values that you want to use. Employing a Block Element Modifier &#40;BEM&#41; naming convention would provide a more consistent code structure for code sharing in front-end development. Learn more about <u><a href="http://getbem.com" target="_blank">BEM</a></u>.</p>
</div>
<!-- -->
<!-- -->
<!-- ++General Styles++ -->
<hr>
<div class="intro" id="cssGenStyles">
  <h2>General Styles</h2>
  <p></p>
</div>
<!-- ++ 'FONT' sub-section for 'General Styles'++ -->
<div id="fonts">
  <h3>Font Properties</h3>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font" target="_blank">font</a></code> CSS <em>Property</em> allows developers to modify how text is displayed. This property can be used to set the elements font to the systems font or as a shorthand for setting multiple font-property <em>Values</em>. There are nearly a dozen distinctive font-property features that can be used for styling. I categorically understand such properties to either modify the style or spacing of text.</p>
  <h6>Font-Family</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font-family" target="_blank">font-family</a></code> CSS property is used to set system fonts by specifying a prioritized list of font-family names, which are separated by a comma, for the selected element. When the font name has two names, that font name must be enclosed with quotation marks. Moreover, adding a second parameter for this property is required; serif or sans-serif are your fallback options. The examples below illustrate how to plan your font-family:</p>
  <article class="tableEven">
    <div>
      <code>font-family: Georgia, serif;</code>
    </div>
    <div>
      <code>font-family: "Gill Sans", sans-serif;</code>
    </div>
  </article>
  <p>Sometimes, one font just wont do and in such cases I utilize these two <code class="reference"><a href="http://fontjoy.com/" target="_blank">Font</a></code>-<code class="reference"><a href="https://www.canva.com/font-combinations/" target="_blank">Pairing</a></code> tools to find a typographic combination that fits my needs. My favorite fonts to work with include Helvetica, Raleway and Roboto.</p>
  <h6>Font Shorthand</h6>
  <p>When using font as shorthand, values for font-size and font-family must be included; values for font-style, font-variant, font-weight and line-height (lh) are optional. There is also an order of precedence for how font properties can be used. For starters, font-style, -variant and -weight precede -size. When used, line-height is attached to font-size and font-family (fam) is always the last value specified.</p>
  <article class="tableEven">
    <div>
      -size / -fam
    </div>
    <div>
      <code>font: 1.2em "Fira Sans", sans-serif;</code>
    </div>
    <div>
      -weight / -style / -fam
    </div>
    <div>
      <code>font: bold italic serif</code>
    </div>
    <div>
      -variant / -weight / -size &amp; lh / -fam
    </div>
    <div>
      <code>font: small-caps bold 24px/1 serif;</code>
    </div>
  </article>
  <p>Again, when using all font properties, the shorthand order includes font-style, -variant, -weight, -size, line-height and font-family.</p>
  <h6>Font-Size</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font-size" target="_blank">font-size</a></code> CSS property specifies the size of the font using numerical Values. Possible value options include PX, EM, REM, VH and VW</p>
  <p><b>px</b> is an industry standard static value as it is used for pixel accuracy. The <b>em</b> value is a responsive type. Calculate the em equivalent for any px value by dividing the desired element px value by its parent element font-size in pixels. The <b>rem</b> value is an alternative to the em value in that it does not compound as it is relative to the root html element.</p>
  <p>I learned how to calculate font-size through trial-and-error and will readily admit that I am horrible at performing math calculations. Heck, I took College Algebra 101...to graduate! There are a lot of resources designed to make sizing a less-stressful experience. <code class="reference"><a href="https://www.chenhuijing.com/blog/math-and-front-end/" target="_blank">Chen Hui-Jing</a></code> and <code class="reference"><a href="https://www.zachleat.com/web/obnoxiously-readable/" target="_blank">Zach Leatherman</a></code> wrote some good articles on using math to calculate font-sizes and typography, respectively. <code class="reference"><a href="http://type-scale.com/" target="_blank">Type Scale</a></code> is a visual calculator that allows you to preview how different font-size and font-family values would be displayed. The <code class="reference"><a href="http://pxtoem.com/" target="_blank">px-em</a></code> and <code class="reference"><a href="https://khaledkzy.github.io/pixel-vh-vw-converter/" target="_blank">px-vh</a></code> conversion tools offer a quick and easy way to convert font-sizes based on the objective.</p>
  <h6>Font-Weight</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font-weight" target="_blank">font-weight</a></code> CSS property specifies the weight or boldness of the text. The font-family will determine how a font-weight is applied, if applied at all. Values for this property include font-weight: <code>normal</code> and <code>bold</code>. There is also a numerical scale between 100-900 that will increase font boldness with each increment (increments of 100).</p>
  <h6>Font-Variant</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant" target="_blank">font-variant</a></code> CSS property contextually modifies font. Useful values for this property include <code>normal</code> and <code>small-caps</code>. The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/text-transform" target="_blank">text-transform</a></code> CSS property works in the same fasion, using values such as <code>uppercase</code>, <code>lowercase</code> or <code>capitalize</code>.</p>
  <h6>Text Decorations</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/text-decoration" target="_blank">text-decoration</a></code> CSS property specifies the appearance of decorative lines used on text. Useful values that declare how a line is used include <code>none</code>, <code>underline</code>, <code>line-through</code> and <code>blink</code>. Line style options include <code>solid</code>, <code>dashed</code>, <code>dotted</code> and <code>wavy</code>.</p>
  <p>This property can also be used as a shorthand for setting multiple text-decoration values in a single declaration, which include text-decoration-line, text-decoration-color, and text-decoration-style with no particular order of precedence.</p>
  <h6>Text Shadows</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/text-shadow" target="_blank">text-shadow</a></code> CSS property adds shadows to text. It accepts a comma-separated list of shadows to be applied to the text and any of its decorations. Each shadow is described by some combination of X and Y offsets (required) from the element, and blur radius and color (optional).</p>
  <article class="tableEven">
    <div>
      offset-x | offset-y | blur-radius | color
    </div>
    <div>
      <code>text-shadow: 1px 1px 2px pink;</code>
    </div>
    <div>
      color | offset-x | offset-y | blur-radius
    </div>
    <div>
      <code>text-shadow: #FC0 1px 0 10px;</code>
    </div>
    <div>
      <small>-x | -y | blur-radius | color [x3 for 3 shadows]</small>
    </div>
    <div>
      <code>text-shadow: 1px 1px 2px red,</code>
    </div>
    <div></div>
    <div>
      <code>0 0 1em blue, 0 0 0.2em blue;</code>
    </div>
  </article>
  <h6>Line-Height</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/line-height" target="_blank">line-height</a></code> CSS property sets the height or amount of space placed between lines. This property uses a value that is a number, length or percentage. I enjoy what <code>150%</code> and values between <code>0.8 - 1.5</code>.</p>
  <p>Aside from styling font, it is equally important to know how to properly position text. An example of this is the <em>line-height</em> property used above in the font-shortand, which sets the height between sentences. Below are some of the properties I have found helpful to adjust text layout.</p>
  <h6>Text-Align</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/text-align" target="_blank">text-align</a></code> CSS property describes how inline content like text is aligned in its parent block element. This property accepts the values <code>left</code>, <code>right</code>, <code>center</code> or <code>justify</code> which aligns text to the left side, right side, center of box or left and right side.</p>
  <h6>Text-Indent</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/text-indent" target="_blank">text-indent</a></code> CSS property specifies the amount of indentation (empty space) that is put before lines of text in a block. By default, this controls the indentation of only the first formatted line of the block. Trusted values that will display a proper indention are <code>16px</code>, <code>8%</code> and <code>1em</code>.</p>
  <h6>Letter-Spacing</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/letter-spacing" target="_blank">letter-spacing</a></code> CSS property specifies the spacing behavior between individual letters. Depending on usage, <code>normal</code>, <code>0.2em</code> and <code>4px</code> are trusted values to use when applying this property.</p>
  <h6>Word-Spacing</h6>
  <p>The <code class="reference"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/word-spacing" target="_blank">word-spacing</a></code> CSS property specifies the spacing behavior between individual words. Idea values to use for such cases include <code>0.2em</code>, <code>2px</code> and <code>0.4ch</code>.</p>
  <h6>Icons</h6>
  <p>Using icons as font is another practice web developers should be familiar with. Outfits like <u><a href="https://fontawesome.com/v4.7.0/cheatsheet/">Font</a></u>-<u><a href="https://fontawesome.com/cheatsheet">Awesome</a></u> and <u><a href="https://material.io/tools/icons/?style=baseline">Material</a></u> <u><a href="http://zavoloklom.github.io/material-design-iconic-font/cheatsheet.html">Design</a></u> make including icon fonts into a web project simple.</p>
</div><!-- -->       
<!-- -->
<!-- .....CONTENT-ENDS// --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>