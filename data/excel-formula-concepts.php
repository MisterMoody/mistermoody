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
    <h1>Excel Formula Concepts</h1>
    <p>
      This page is an extension of the <a target="_blank" href="data/the-data-analysis-process#implement-function">section</a> related to implementing a function when summarizing data <i>the-data-analysis-process</i>. Remember that functions are used to <em>modify, summarize and validate data</em>: that the values from cells create a range (or variable) by which data can be converted, duplicated, filtered, referenced, restored and sorted.
    </p>
    
    <h4 class="title">Common Functions</h4>
    <p>
      Formulas use functions to perform calculations on values based on a specified relationship between values or a range of values. They then return values in a cell of choice, which helps create mini-datasets based the original datasets: these formulas can be copied and pasted into cells for reuse. Excel has a <i>Formulas</i> tab with built-in function features that can be readily applied by selecting <i>Insert Function</i>. 
    </p>
    <p>
      There are a lot of *<a target="_blank" href="https://exceljet.net/formulas"><i>Formulas</i></a>* and <a target="_blank" href="https://www.excel-easy.com/functions.html">functions</a> to learn that analyst should be familiar with. All functions can be categorized and used to perform basic calculations, evaluate data based on financial, logical, statistical or text principles, used to reference data or for another purpose. These are the functions that I am focused on learning: 
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
        <div class=""><code title="Returns the Number of Payments Required to fulfill an Obligation (i.e. Loan)">=NPER(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Payment Amount Required to fulfill an Obligation">=PMT(<small>rate,nper,pv,[fv]</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Calculate Interest Rate when Rate is the Only Unknown Variable">=RATE(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Prediction of a Future Value based on Existing Values">=FORECAST(<small>x-val,y_vals,x_vals</small>)</code></div>
      </div> 
      <div class="excel__func">
        <div class=""><code title="Returns the Present Value on a Sum of Money">=PV(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Future Value on a Sum of Money">=FV(<small>Cell:Range</small>)</code></div>
      </div> 
      
      <div class="excel__func">
        <div class=""><code title="Returns True if all Conditions are True; False otherwise">=AND(<small>Condition, Condition</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns True if any Conditions are True; False otherwise">=OR(<small>Condition, Condition</small>)</code></div>
      </div>
      
      <div class="excel__func">
        <div class=""><code title="Returns Lowest Value">=MIN(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Highest Value">=MAX(<small>C1,C2,C3...</small>)</code></div>
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
        <div class=""><code title="Returns Most Frequent Value">=MODE(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Standard Deviation to Ascertain Data Spread">=STDEV(<small>range,condition</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns a Rounded-down Integer (removes decimals)">=CORRELL(<small>Column-A, Column-B</small>)</code></div>
      </div>
      
      <div class="excel__func">
        <div class=""><code title="Returns True if the value is numeric; false otherwise">ISNUMBER(<small>Cell</small>)</code></div>
      </div>     
      <div class="excel__func">
        <div class=""><code title="Returns True if the value is text; false otherwise">ISTEXT(<small>Cell</small>)</code></div>
      </div>     
 
      <div class="excel__func">
        <div class=""><code title="Returns Combined Text from Different Cells">=CONCATENATE(<small>Cell,"text",Cell</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Replace Text with a new Text-String">=SUBSTITUTE(<small>Cell,"old","new"</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Cell Position of a Specified Value from a Range of Values">=MATCH(<small>Cell,Cell:Range,Position</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns a Value from a List of Values Based on Cell Position">=CHOOSE(<small>Position,Search Cond</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Add Column Data from one Worksheet to another">=VLOOKUP(<small>Extensive</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Add Row Data from one Worksheet to Another">=HLOOKUP(<small>Extensive</small>)</code></div>
      </div>
    </aside>
    <h5>~not enough time in the day: return next week to catch up.</h5>
    
    <!--
    <aside class="block hedge">
      <div>
        <p>
          The <i> Chart</i> highlights the <em>xxx</em> of volunteers while raising awareness about youth homelessness. Before inserting a chart, I .... Recognizing that .... 
        </p>
      </div>
      <figure>
        <img class="chartEx" alt=" Chart Example" src="img/data/dap/barEx.png">
        <figcaption> Chart Example</figcaption>
      </figure>
    </aside>-->
  </section>
  
</article>
<!-- .....CONTENT-ENDS// --> 
<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>