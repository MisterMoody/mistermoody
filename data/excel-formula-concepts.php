<?php
$pageTitle = "Excel Formula Concepts by Ray Moody";
$page = "Excel Formula Concepts";
include ("../inc/header.php");
?>
<!-- ************************************************** -->
<!-- ************************************************** -->

<!-- //CONTENT-BEGINS..... -->
<article class="dataAnalysis__Styles">
  <section>
    <h2 class="title">Excel Formula Concepts</h2>
    <p>
      This page is an extension of the <a target="_blank" href="data/the-data-analysis-process#implement-function">section</a> related to implementing a function when summarizing data <i>the-data-analysis-process</i>. Remember that functions are used to <em>modify, summarize and validate data</em>: that the values from cells create a range (or variable) by which data can be converted, duplicated, filtered, referenced, restored and sorted.
    </p>
    <blockquote>
      <code>=FUNCTION_Name&#40;</code>cell_reference, condition<code>&#41;</code>
    </blockquote>
    
    <h4 class="title">Elementary Functions</h4>
    <p>
      Formulas use functions to perform calculations on values based on a specified relationship between values or a range of values. They then return values in a cell of choice, which helps create mini-datasets based the original datasets: these formulas can be copied and pasted into cells for reuse. Excel has a Formulas tab with built-in function features that can be readily applied by selecting Insert Function. Exceljet has an excellent <a target="_blank" hreff="https://exceljet.net/excel-formulas-and-functions">article</a> covering this subject for which I find solace knowing that my ability to articulate the difference between formulas and functions hangs on the ideal that they are one and the same: whereas a formula is a math calculation, a function is the defined built-in feature that essentially guides the formula. I make no excuse for this inefficiency; I am certain I will gain a better grasp of this topic, operator precedence and more in the coming months.  
    </p>
    <p>
      There are a lot of <a target="_blank" href="https://exceljet.net/excel-functions">functions</a> with plenty of <a target="_blank" href="https://exceljet.net/101-excel-functions ">examples</a> available to learn how to use them. All functions can be categorized and used to perform <a target="_blank" href="https://www.excel-easy.com/functions/count-sum-functions.html">basic calculations</a>, evaluate data based on <a target="_blank" href="https://www.excel-easy.com/functions/financial-functions.html">financial</a>, <a target="_blank" href="https://www.excel-easy.com/functions/logical-functions.html">logical</a>, <a target="_blank" href="https://www.excel-easy.com/functions/statistical-functions.html">statistical</a> or <a target="_blank" href="https://www.excel-easy.com/functions/text-functions.html">text</a> principles, used to <a target="_blank" href="https://www.excel-easy.com/functions/lookup-reference-functions.html">reference</a> data or for <a target="_blank" href="https://www.excel-easy.com/functions/date-time-functions.html ">another purpose</a>. These are the functions that I am focused on learning: with COVID19 in the air, I am using the time off –unpaid, of course, to learn how to use these functions to provide better analysis. 
    </p>
    <aside class="func__block">
      <div class="excel__func">
        <div class=""><code title="Returns Number of Cells that Contain Numbers">=COUNT(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Number of Cells that Contain Numbers Based on Criteria">=COUNTIFS(<small>range1,criteria1,...</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Total Sum of a Range of Values">=SUM(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Total Sum of a Range of Values Based on Criteria">=SUMIF(<small>range,criteria,sum_range</small>)</code></div>
      </div>
      
      <div class="excel__func">
        <div class=""><code title="Returns the Number of Payments Required to fulfill an Obligation (i.e. Loan)">=NPER(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Payment Amount Required to fulfill an Obligation">=PMT(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Calculate Interest Rate when Rate is the Only Unknown Variable">=RATE(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Present Value on a Sum of Money">=PV(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Future Value on a Sum of Money">=FV(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Prediction of a Future Value based on Existing Values">=FORECAST(<small>x-val,y_vals,x_vals</small>)</code></div>
      </div>  
      <div class="excel__func">
        <div class=""><code title="Returns True or False depending on a Checked Condition">=IF(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns True if all Conditions are True; False otherwise">=AND(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns True if any Conditions are True; False otherwise">=OR(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      
      <div class="excel__func">
        <div class=""><code title="Returns Mean Value">=AVERAGE(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Mean Value">=AVERAGEIFS(<small>Cell:Range</small>)</code>
      </div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Middle Value">=MEDIAN(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Lowest Value">=MIN(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Highest Value">=MAX(<small>C1,C2,C3...</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Most Frequent Value">=MODE(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Standard Deviation to Ascertain Data Spread">=STDEV(<small>range,condition</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Normal Distribution Grade">=SKEW(xxx)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns a Rounded-down Integer (removes decimals)">=CORRELL(<small>Column-A, Column-B</small>)</code></div>
      </div>
      
           
      <div class="excel__func">
        <div class=""><code title="Returns True if the value is text; false otherwise">ISTEXT(<small>Cell#</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns True if the value is numeric; false otherwise">ISNUMBER(<small>Cell#</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Combined Text from Different Cells">=CONCATENATE(<small>Cell#,"text",Cell#</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Replace Text with a new Text-String">=SUBSTITUTE(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Truncates a Number to a Specified Number of Decimal Places">=TRUNC(<small>Cell#, [digits]</small>)</code></div>
      </div>
      
      
      <div class="excel__func">
        <div class=""><code title="Add Column Data from one Worksheet to another">=VLOOKUP(xxx)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Add Row Data from one Worksheet to Another">=HLOOKUP(xxx)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns ">=INDEX(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Cell Position of a Specified Value from a Range of Values">=MATCH(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns a Value from a List of Values Based on Cell Position">=CHOOSE(<!-- <small>Cell:Range</small> -->)</code></div>
      </div>
 
      <div class="excel__func">
        <div class=""><code title="Returns the Year, Month or Day of a Date">=YEAR/MONTH/DAY(<small>...</small>)</code></div>
      </div>
    </aside>
    <p>
      These functions work well with one another to produce an assortment of results. There are standard procedures analyst can perform in order to ascertain feedback quality. Check out these <a target="_blank" hreff="data/excel-formula-concepts">concepts</a> for best practices using formulas and functions.
    </p>
  </section>
  
</article>
<!-- .....CONTENT-ENDS// --> 
<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>