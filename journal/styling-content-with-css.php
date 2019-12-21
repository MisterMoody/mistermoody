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
    <h1 class="title">Styling Content with CSS</h1>
      <figure>
        <img class="mainImage" src="img/designStyle.jpg"/>
        <figcaption>So Many Colors, So Many </figcaption>
      </figure>
    <p>
      CSS is an acronym for Cascading Stylesheet, which is a programming language that controls the presentation of <code>&#60;html&#62;</code> elements when displayed in the browser. This article is a follow-up to <a href="journal/semantic-markup">semantic markup</a> and explores fundamental usage of CSS best practices to follow when styling content for a web applications. Topics covered include:
    </p>
    <ol>
      <li>Create and Load a Stylesheet</li>
      <li>CSS Snytax</li>
      <li>Structuring a Stylesheet</li>
      <li>The Cascade, Inheritance and Specificity</li>
      <li>Debugging and Optimizing CSS</li>
      <li>General Styles</li>
    </ol> 
  </section>
  <hr>
  
  <!-- ++Create and Load a Stylesheet++ -->
  <section>
    <h4>Create and Load a Stylesheet</h4>
    <p>Implementing CSS in a web application begins by creating a file that ends with the <code>.css</code> file extension and placing it into a folder titled 'css.'</p>
    <p>Next, load the stylesheet into the <code>&lt;head&gt;</code> of the <code>html</code> document using the <code>&lt;link&gt;</code> tag. This tag requires three attributes: <code>href="val"</code>, <code>rel="val"</code> and the <code>type="val"</code> attributes.</p>
    <figure>
      <img alt="Strategy to Link a CSS File with an HTML Document" src="img/cssLinkStrategy.jpg">
      <figcaption>
        CSS &lt;Link&gt; Strategy
      </figcaption>
    </figure>
    <p>
      The <code>rel="..."</code> attribute specifies the relationship of the target object with the <code>&lt;link&gt;</code> to specify its relationship with the document. When implementing CSS, its value is always <code>"stylesheet"</code>. Although omitted here, the <code>type="..."</code> attribute specifies the <i>media type</i> being used as a resource. When implementing CSS, the values for these atributes should be <code>"stylesheet"</code> and <code>"text/css"</code>, respectively, to dictate that the referenced resource is in fact an external stylesheet. The former attribute is required only when its latter counterpart is set.
    </p>
    <p>
      The <code>href="val"</code> attribute specifies the location of an external resource whose location is referenced on the same server as the webpage that contains it. This attribute accepts a <i>URL</i> (Uniform Resource Locator) as its value to establish a connection with an <i>external stylsheet</i>. The examples above highlight use of a <i>relative</i> URL, which is an <i>implicit</i> reference to a resource located on the same server as the web page using a simple file path. Not all resources are located on the same server. Many web apps utilize resources that are stashed throughout the webiverse: these use <i>explicitly</i> specified web address are are called <i>absolute</i> URL. An absolute URL takes the following format:
    </p>
    <blockquote>
      <code>protocol://domain/path/resource</code>
    </blockquote>
    <p>
      Here, <i>protocol</i> specifies how the resource is to be accessed while the <i>domain</i> specifies the name of the computer (or website) where the resource is located. The <i>path</i> specifies the sequence of directories leading to the target while the <i>resource</i>, if included, is the target, typically the name of a file. The protocol identifier uses either <code>http://</code> or <code>https://</code> as a method for transferring data between computer networks whilethe domain is the server from which data is requested. 
    </p>
    <p>
      Before moving forward, keep in mind that it is good practice to separate code into multiple stylesheets in order to avoid writting <i>spaghetti code</i>, which occurs when  different layout styles or patterns are applied to elements spread throughout multiple pages.
    </p>
    <p>With that covered, lets focus on writing CSS!</p>
  </section>

  <!-- ++CSS Syntax++ -->
  <hr>
  <section>
    <h4>CSS Syntax</h4>
    <p>
      In life, there are rules: when you follow the rules, you are rewarded and when you break a rule, well, all hell breaks loose. Same analogy applies to CSS: there are rules for writing CSS to instruct a document to display a certain way. CSS is created by employing a <i>rule-set</i>, which is a block of code that consists of a <i>selector</i> and a <i>declaration</i>. 
    </p>
    <blockquote><code>selector &#123; property: keyword/value; &#125;</code></blockquote>
    <p>
      Selectors reference <code>html</code> elements targeted for styling. The aesthetic quality for a selector is embodied within its declaration, which begins and ends with curly braces and is composed of a <i>key/value</i> pair. The key refers to a <i>property</i> that identifies the aesthetic quality to modify while the <i>value</i> or <i>keyword</i> quantifies to what extent that property is modified. The property and value/keyword are succeeded by a colon and semi-colon, respectively, to separate the property from its value and to finalize a declaration.
    </p>
    <!-- Selector Types-->
    <h5>Selector Types</h5>
    <p>
      There are seven types of selectors:
    </p>
    <p>
      The <i>universal</i> selector is used to render a specific style to all elements of a website. The example below dictates that all <code>html</code> elements will have 'margins' all around at a value of half an em.
    </p>
    <blockquote>
      <code>* &#123; margin: 0.4em; &#125;</code>
    </blockquote>

    <p>
      The <i>element</i> selector applies consistent styles to a specific <code>html</code> element. The example below dictates that all <code>&lt;h1&gt;</code> headings are 'grey' and 'large.'
    </p>
    <blockquote>
      <code>h1 &#123; color: #838487; font-size: 10em; &#125;</code>
    </blockquote>

    <p>
      The <i>descendant</i> selector is used to apply styles for <i>nested</i> elements only in the event that there is an ancestral lineage between the two elements. The example below dictates that <code>&lt;li&gt;</code> within the <code>&lt;ul&gt;</code> are 'small.'
    </p>
    <blockquote>
      <code>ul li &#123; font-size: 0.848emm; &#125;</code>
    </blockquote>

    <p>
      The <i>child</i> selector is used to match all elements that are children of a specified element . The example below dictates that all <code>&lt;li&gt;</code> elements that are children of<code>&lt;ol&gt;</code> are 'periwinkle' in color.
    </p>
    <blockquote>
      <code>ol &#62; li &#123; color: #c3cde6; &#125;</code>
    </blockquote>

    <p>
      The <i>.class</i> selector targets elements with a specific class reference. A class can be added to any element. The example below dictates that a 'grid' is applied to the class.
    </p>
    <blockquote>
      <code>.class &#123; display: grid; &#125;</code>
    </blockquote>

    <p>
      The <i>attribute</i>selec tor applies styles to an <code>html</code> element that possesses a specific attribute. The example below dictates that <code>a</code> elements with the attribute of 'title' will be 'purple.'
    </p>
    <blockquote>
      <code>a &#91; title &#93;; &#123; color &#125;</code>
    </blockquote>

    <p>
      <i>&#58;Pseudo-class</i> selectors are actually keywords that are added to other selectors and provide a unique style during a particular instance of that selector. The examples below dictates how <code>a</code> elements can be modified based on a particular instance. The keywords 'active', 'hover' and 'visited' dictate that styles are applied in the instance that a user is on a current page, has hovered over an element or has already visited that page.
    </p>
    <blockquote>
      <code>a&#58;active &#123; ... &#125;</code><br>
      <code>a&#58;hover &#123; ... &#125;</code><br>
      <code>a&#58;visited &#123; ... &#125;</code>
    </blockquote>
    <p>
      Other useful pseudo-class selectors include <code><a href="https://css-tricks.com/useful-nth-child-recipies/" target="_blank">&#58;nth-child&#40;&#41;</a></code>, <code><a href="https://css-tricks.com/almanac/selectors/r/required/" target="_blank">&#58;required&#40;&#41;</a></code>, <code><a href="https://css-tricks.com/almanac/selectors/f/focus/" target="_blank">&#58;focus</a></code> and <code><a href="https://css-tricks.com/almanac/selectors/d/disabled/" target="_blank">&#58;disabled</a></code>.
    </p>

    <p>
      <i>&#58;&#58;Pseudo-element</i> selectors, on the other hand, are used to style a specific part of an element. The difference between the two is in the number of colons. Ther following focuses on four selectors that adds depth to elements that possess text.
    </p>
    <p>
      The <code>&#58;&#58;first-letter</code> and <code>&#58;&#58;first-line</code> pseudo-elements apply styles to the first letter or first line of text, respectively, but they can only be applied to <i>block-level</i> elements. The examples below dictates that the 'first letter' of 'every paragraph' with a class of 'intro' will display as 'red' and that the 'first line' of 'every paragraph' with a class of 'intro' will display 'bolder' than the text below it.
    </p>
    <blockquote>
      <code>p.intro&#58;&#58;first-letter &#123; color: #ff0000; &#125;</code>
      <code>p.intro&#58;&#58;first-line &#123; font-weight: 900; &#125;</code>
    </blockquote>

    <p>
      The <code>&#58;&#58;before</code> and <code>&#58;&#58;after</code> pseudo-elements are used to add content before or after an element. The key to these selectors is that they require the <code><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content" target="_blank">content&#58; &#34;&#34;&#59;</a></code> property in order to work. This is useful when you want to include an icon or background image. The example below dictates that a checkmark will be displayed <em>before</em> any list-item.
    </p>
    <blockquote>
      <code>li&#58;&#58;before &#123; content&#58; &#34;\2713&#34;&#59; &#125;</code>
    </blockquote>

    <p>
      The <u>#id</u> selector <em>should not be used in CSS</em> because it is a unique identifier that should be used exclusively as a 'hook' for <code>html</code> and <code>JavaScript</code> implementations.
    </p>

    <p>
      In general, it is best practice to employ <i>comments</i> extensively throughout a styesheet in an effort 
    </p>
  </section>

  <!-- Structuring a Stylesheet -->
  <section>
    <h4>Structuring a Stylesheet</h4>
    <p>
      Writing CSS requires a plan: no plan will result in spaghetti code. There are ways to avoid code purgatory and it all begins with using <i>comments</i> to <em>document points-of-emphasis for each rule-set</em>. This practice makes reading code easier and is especially important when collaborating on a team project. The example below is a single-line comment where the '...' references the comment.
    </p>
    <blockquote>
      <code>/* ... */</code>
    </blockquote>
    <p>
      Leaving comments is only one method of writing legible code: double-space tabs, lowercase text, meaningful class names, avoiding unnecessary type selectors (ie nesting to deep) and using shorthand properties will go a long way in formatting.
    </p>
  </section>

</article>

<!-- ++C.I.S.++ -->
<hr>
<div>
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
<div>
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
<div>
  <h2>General Styles</h2>
  <p></p>
</div>
<!-- ++ 'FONT' sub-section for 'General Styles'++ -->
<div>
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