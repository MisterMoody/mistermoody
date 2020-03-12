<?php
$pageTitle = "The Data Analysis Process by Ray Moody";
$page = "The Data Analysis Process";
include ("../inc/header.php");
?>
<!-- ************************************************** -->
<!-- ************* << WEB DEV 'TOOLKIT' <b>&#62;&#62;</b> ************ -->

<!-- //CONTENT-BEGINS..... -->
<article class="dataAnalysis__Styles">
  <section>
    <h1>The Data Analysis Process</h1>
    <p>
      At the start of 2020, I took stock of my web developer career and made a hard pivot. Data analysis: it was a topic that I had heard a lot about the past year and so I decided to explore~ Because <a href="https://twitter.com/treehouse" target="_blank">@treehouse</a> tutorials reign supreme, I began this adventure by taking lessons offered by <a href="https://twitter.com/bendeitch" target="_blank">@bendeitch</a> and <a href="https://twitter.com/sfgergasi" target="_blank">@sfgergasi</a> that covered the basics of using spread sheets to analyze, summarize and visually present data in a meaningful way. Naturally, I queried a few search engines to learn more and stumbled upon a plethora of resources outfitted for my study. The information below demonstrates knowledge gained thus far and will serve as the foundation for my journey into the world of data analytics.
    </p>
    <!-- Table of Contents -->
    <aside class="toc">
      <ul>
        <li>
          <a class="toc__Title" href="data/the-data-analysis-process">What is Data Analysis?</a>
          <ul>
            <li>
              <a href="data/the-data-analysis-process">Data Analysis Defined</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">The Process</a>
            </li>
          </ul>
        </li>
        <br>
        <li>
          <a class="toc__Title" href="data/the-data-analysis-process">Collect and Organize Data</a>
          <ul>
            <li>
              <a href="data/the-data-analysis-process">Import Data from External Sources</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Freeze Pane / Transpose Headers</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Sort and Filter</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Information Architecture</a>
            </li>
          </ul>
        </li>
        <br>
        <li>
          <a class="toc__Title" href="data/the-data-analysis-process">Summarize Data to Test a Hypothesis</a>
          <ul>
            <li>
              <a href="data/the-data-analysis-process">Implement a Function</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Add Data between Worksheets</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Identify Patterns in Data Spread</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Cell Reference / Duplicate Formulas</a>
            </li>
          </ul>
        </li>
        <br>
        <li>
          <a class="toc__Title" href="data/the-data-analysis-processstyling-markup-with-css">Validate Data</a>
          <ul>
            <li>
              <a href="data/the-data-analysis-process">Prevent Errors</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Checking for Errors</a>
            </li>
          </ul>
        </li>
        <br>
        <li>
          <a class="toc__Title" href="data/the-data-analysis-processoptimization">Visualize Data</a>
          <ul>
            <li>
              <a href="data/the-data-analysis-process">Chart Types and Selection</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Identify Correlations</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Using Pivot Tables</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Formatting Charts</a>
            </li>
            <li>
              <a href="data/the-data-analysis-process">Conditional Formatting</a>
            </li>
          </ul>
        </li>
      </ul>
    </aside>
  </section>
  
  <section>
    <h2 class="title">What is Data Analysis?</h2>
    <p>
      <i>Data Analysis</i> is a process of aggregating data by performing conditional and statistical evaluation of data to help professionals from all walks of like make well informed decisions and improve business and organizational efficiency. Advancements in technology has allowed this craft to flourish in ways that meaningfully impact everyday life and it can become an ideal niche for a transitioning web developer interested in <a target="_blank" href="https://towardsdatascience.com">data science</a>! <code>#dataviz</code>

    </p>
    <p>
      There are multiple facets related to the analysis process as a whole: data is first collected then formatted. This involves confirming the accuracy of data by checking for anomalies, duplicate values or empty cells and ensuring column and row headers are titled. With data in clear view, outline strategic goals designed to produce a specific insight by defining questions that qualify potential solutions or results and quantify how to measure it. This seems like simple math: spread sheets offer functions that calculate data to confirm totals, identify relationships and generally answer initial questions.
    </p>
    <p>
       Probability and statistical analysis does much to further evaluate data (i.e. a/b testing, correlation, distribution) with the most common statistic methods involving mean, standard deviation, linear regression, variance, percentile and hypothesis testing. In business, Key Performance Indicators (KPIs) are used to evaluate business activity performance: it should be stressed that formulating a <a target="_blank" href="https://www.datapine.com/blog/data-analysis-questions/">list of questions</a> based on <a target="_blank" href="https://www.datapine.com/kpi-examples-and-templates/">KPIs</a> prior to analyzing data is a best practice! Other relevant analyses include cohort, ethnographic, narrative, univariate, bivariate, nominal, ordinal, hermeneutic, discourse and phenomenological.
    </p>
    <p>
      Once data has been thoroughly vetted and prepped for presentation, it should be charted to help users visually interpret the mapping of existing relationships between targeted variables. Chart-type selection should be taken serious as graphic choice plays a pivotal role in the effectiveness of how a story is told.  Thus, storytellers must strongly consider the analytical purpose of an inquiry when outlining an approach for how to present data in a meaningful way. With data, stories begin by allowing users to readily access data, in which case users should be able to filter and sort data to make comparisons based on conditions that determine. Providing options to ascertain anomalies, correlations or the range takes those charts to the next level. These are concepts that help create the stories that you want the data to tell! 
    </p>
  </section>
  
  <section>
    <h2 class="title">Collect and Organize Data</h2>
    <p>
      Data is obtained from spread sheets that can be modified using programs like Microsoft Excel. Data files obtained from external sources typically use the <code>.csv</code> file extension for downloads, but data saved in excel should use the <code>.xlsx</code> extension (be aware of <code>.xlsm</code> extension used solely with Excel 4.0 macro-enabled). In this regard, use a date format with version number to save work in chronological order like so: [<code>YYYYMMDDversion#</code>].
    </p>
    <p>
      While most analyst receive data directly from their employer, researchers must depend on external sources for data collection. Regardless of how the data was procurred, data is considered either structured or unstructured. Whereas structured data is properly organized as a defined <i>data model</i> and resides in a relational database, unstructured data does not.   Here are some open sourced datasets that can help the most novice of intellects brainstorm first-class solutions for mankind's most complex issues. 
    </p>    
      
    <h4 class="title">Dataset Resources</h4>
    <aside class="resourceContainer">
        <aside class="resourceGrid">
          <span><a target="_blank" href="https://www.bls.gov/data" title="US Bureau of Labor Statistics">Labor Statistics</a></span>

          <span><a target="_blank" href="https://www.bea.gov/" title="US Bureau of Economic Statistics">Economic Statistics</a></span>

          <span><a target="_blank" href="https://data.louisvilleky.gov/" title="Louisville Metro Datasets">Louisville Metro</a></span>

          <span><a target="_blank" href="https://data.lojic.org/" title="Louisville Geospatial Datasets">Louisville Geospatial</a></span>

          <span><a target="_blank" href="https://datasetsearch.research.google.com/" title="25 Million Google Datasets">Google Datasets</a></span>

          <span><a target="_blank" href="https://docs.google.com/spreadsheets/u/0/d/1wZhPLMCHKJvwOkP4juclhjFgqIY8fQFMemwKL2c64vk/htmlview" title="Data is Plural Data Archive">Data is Plural</a></span>

          <span><a target="_blank" href="https://data.gov" title="US Government Datasets">US Government </a></span>
        </aside> 
    </aside>
    <p>The process of using spread sheets to import data is quite simple:</p>
    <aside class="declarations">
      <div><b>w/ Excel</b></div>
      <div><span> Data  <b>&#62;&#62;</b>  Get External Data  <b>&#62;&#62;</b>  Choose Source</span></div>
      <div><b>w/ Google</b></div>
      <div><span> File  <b>&#62;&#62;</b>  Import  <b>&#62;&#62;</b>  Upload  <b>&#62;&#62;</b>  Import Action  <b>&#62;&#62;</b>  Create New  <b>&#62;&#62;</b>  Import Data</span></div>
      </aside>
    
    <h4 class="title">Working with Data</h4>
    <p>
      The data stored in an individual sheet is called a <i>dataset</i>: the values (text or numeric) stored in rows or columns are referred to as <i>data-series</i>. Datasets are separated using tabs located at the bottom of the sheet, and are especially useful for testing <i>scenarios</i> when <i>forecasting</i>. It is a best practice to use tabs to separate originally inputted data from forecasted output assumptions. 
    </p>
    <p>
      Data is labeled by its column and/or row headers so one of the first things to do when organizing data is to <i>freeze the pane</i> to keep column headers visible. <i>Transpose</i> the headers to switch the placement of column and row labels and <i>convert values</i> before starting analysis. Leave <i>comments</i> to collaboratively exchange information and <i>notes</i> to define data within a cell to help analyst stay abreast of file changes. <i>Sort</i> data using specified criteria such as a quantity, price of an item, order of an item, etc. <i>Filter</i> a targeted dataset when dealing with several categories then sort specified columns within the filter module. Keep in mind that filtered data is temporarily hidden and must be restored before continuing analysis.
    </p>
    <aside class="declarations">
      <div><b>Freeze Panes</b></div>
      <div><span>View <b>&#62;&#62;</b> Freeze Panes</span></div>
      <div><b>Transpose</b></div>
      <div><span>Select Headers <b>&#62;&#62;</b> Edit <b>&#62;&#62;</b> Paste Special <b>&#62;&#62;</b> Transpose</span></div>
      <div><b>Convert Values</b></div>
      <div><span>Select <code>123</code> Button <b>&#62;&#62;</b> Choose Value</span></div>
      <div><b>Sort Data</b></div>
      <div><span>Select All Data <b>&#62;&#62;</b> Data <b>&#62;&#62;</b> Sort</span></div>
      <div><b>Filter Data</b></div>
      <div><span>Select Header Rows <b>&#62;&#62;</b> Data <b>&#62;&#62;</b> Filter <b>&#62;&#62;</b> Choose Categories to Ignore</span></div>
      <div><b>Restore Data</b></div>
      <div><span>Edit <b>&#62;&#62;</b> Select All</span></div>
    </aside>
    <p>
      There are many <a target="_blank" href="https://exceljet.net/keyboard-shortcuts ">keyboard shortcuts</a> that can be used to make organizing data less complicated as well.
    </p>
  </section>
  
  <section>
    <h2 class="title">Summarize Data to Test a Hypothesis</h2>
    <p>
      Spread sheets have features that make handling data a cinch. Most of the heavy lifting is conducted via formulas and functions. While a <i>formula</i> is a math expression made up of cell addresses and arithmetic operators, a <i>function</i> is a built-in formula that enables analysts to perform calculations using values based on a specified condition. Excel Easy offers high-quality <a target="_blank" href="https://www.excel-easy.com/examples.html">examples</a> to aid when using Microsoft Excel spread sheets. Before diving into what these tools can do, it is useful to know how to reference data and duplicate formulas for other calculations.
    </p>
    <p>
      Functions use all values from a single column: these values are known as a <i>range</i> / <i>variable</i> and can be applied to other functions to expound upon initial calculations. Although using mean is most accurate, using median produces more realistic numbers. When using a variable / range to measure something, it turns into a metric that can be used for additional calculations. <i>Metrics</i> are aggregated values stored in cells, thus, how they are referenced is vital to the integrity of data being analyzed. At its initial state, all cells are <i>relative</i>, identified by a column and row number. Individual cells can be referenced by separating such cells with commas; reference cell groups by separating the first and last cells with a colon. Cells can be referenced <i>absolutely</i> (terms defined) so that the value in that cell can be used to calculate the value in another cell: such data never updates and is useful when performing multiple calculations using the same dataset. In cases were an absolute reference is implemented, that range of data can be <i>duplicated</i> for usage in another cell to perform an entirely separate calculation. Keep an eye on absolutely referenced cells and how they are referenced as either the column, row or both can be referenced. In the event of either/or, data may be updated resulting in poor analysis.
    </p>
    <aside class="declarations">
      <div><b>Reference Cells</b></div>
      <div><span>CTRL-SHIFT-Arrows</span></div>
      <div><b>Absolute Reference</b></div>
      <div><span>Select Cell <b>&#62;&#62;</b> F4</span></div>
      <div><b>Convert a Value</b></div>
      <div><span>Select <code>123</code> Button <b>&#62;&#62;</b> Choose Value</span></div>
      <div><b>Sort Data</b></div>
      <div><span>Select All Data <b>&#62;&#62;</b> Data <b>&#62;&#62;</b> Sort</span></div>
      <div><b>Filter Data</b></div>
      <div><span>Select Header Rows <b>&#62;&#62;</b> Data <b>&#62;&#62;</b> Filter <b>&#62;&#62;</b> Choose Categories to Ignore</span></div>
      <div><b>Restore Data</b></div>
      <div><span>Edit <b>&#62;&#62;</b> Select All</span></div>
      <div><b>Duplicate a Formula</b></div>
      <div><span>Dbl-click/Drag Fill-Handle</span></div>
      <div><b>Add Intervals</b></div>
      <div><span>Cell1: Base # <b>&#62;&#62;</b> Cell2: Base + # <b>&#62;&#62;</b> Drag Cells</span></div>
    </aside>
    
    <h4 class="title">Using Functions</h4>
    <p>
      The aforementioned tactics are imperative for working with formulas and functions, which are the stimulus behind summarizing data. All functions begin with an equal sign (=) followed by its function name in all caps; parenthesis enclose the parameters which is the calculation to be performed on referenced cells. 
    </p>
    <blockquote>
      <code>=FUNCTION_Name&#40;</code>cell_reference, condition<code>&#41;</code>
    </blockquote>
    <p>
      There are a plethora of formulas and functions that can be used to modify, summarize and validate data depending on the problem at hand. Common functions analyst need to be comfortable with include: 
    </p>
    <aside class="func__block">
      <div class="excel__func">
        <div class=""><code title="Returns Lowest Value">=MIN(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Highest Value">=MAX(<small>C1,C2,C3...</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code>=MAX-MIN</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Mean Value">=AVERAGE(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Middle Value">=MEDIAN(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Most Frequent Value">=MODE(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Total Sum of Values">=SUM(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Total Sum of Values based on Conditions">=SUMIF(<small>range,criteria,sum_range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Number of Selected Cells that have Numbers as Values">=COUNT(<small>Cell:Range</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Count of Cells that Meet One or More Criteria">=COUNTIF(<small>range1,criteria1,...</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Standard Deviation">=STDEV(<small>range,condition</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns the Normal Distribution Grade">=SKEW(xxx)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Add Column Data from one Worksheet to another">=VLOOKUP(xxx)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Add Row Data from one Worksheet to another">=HLOOKUP(xxx)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns True if the value is text; false otherwise">ISTEXT(<small>Cell#</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns True if the value is numeric; false otherwise">ISNUMBER(<small>Cell#</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns a Rounded-down Integer (removes decimals)">INT(<small>Cell#</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns a Number of Characters in a Text-String *Split Text or Abbreviate Words">=LEN(<small>Text-String</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Combined Text from Different Cells">=CONCATENATE(<small>Cell#,"text",Cell#</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Truncates a Number to a Specified Number of Decimal Places.">=TRUNC(<small>Cell#, [digits]</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Combined Text from Diff Cells">=TRIM(<small>Cell #</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns Prediction of a Future Value based on Existing Values">=FORECAST(<small>x-val,y_vals,x_vals</small>)</code></div>
      </div>
      <div class="excel__func">
        <div class=""><code title="Returns a Rounded-down Integer (removes decimals)">=CORRELL(<small>Column-A, Column-B</small>)</code></div>
      </div>
    </aside>
    <p>
      These functions work well with one another to produce an assortment of results. There are standard procedures analyst can perform in order to ascertain feedback quality.  
    </p>
    
    <h4 class="title">Adding Data between Worksheets</h4>
    <p>
      <i>Lookup()</i> functions provide a conditional search to get data from a column or row in one worksheet then adding it to the column or row in another worksheet using VLOOKUP() or HLOOKUP(), respectively. When using these functions it is important to delete empty rows or columns and check that the same data type is being used in the 1st column of the range.
    </p>
    <aside class="declarations">
      <div><b>Process to Implement VLOOKUP() Function</b></div>
      <div><span></span></div>
      <div><span>Formulas <b>&#62;&#62;</b> Lookup &amp; Reference <b>&#62;&#62;</b> VLOOKUP <b>&#62;&#62;</b> Input Args</span></div>
    </aside>
    <p>
      This function takes four arguments: a lookup_value, a table_array, a column_index_number and a range_lookup value. The <b>lookup_value</b> is the cell of data to match: it must be in the farthest left column. The <b>table_array</b> is the range of cells to search wherein the headers represent columns of data to retrieve: must absolutely reference cells to use entire column data!. The <b>col_ind_num</b> represents the header column number for the column of data to retrieve: the argument is always a number. The <b>range_lookup</b> is an optional value: use false to return an exact-match or true to return an approximate match. It is a best practice to use false when working with unique identifiers, and to sort data in ascending order otherwise.
    </p>    
    <blockquote>
      <code>=VLOOKUP&#40;</code><span>A2,'worksheet - dataset'!$A:$C, 3, false</span><code>&#41;</code>
    </blockquote>
    <p>
      In the example above, the cell <code>A2</code> is the lookup value that we want to match with data from <code>'worksheet - dataset'!</code> and is absolutely referenced as so: <code>$A:$C</code>. This matches all data between the targeted columns in both input and output tabs where the <code>3</code> indicates the data targeted for retrieval, returning an exact match. The HLOOKUP() function must be implemented manually.
    </p>
    
    <h4 class="title">Identifying Patterns</h4>
    <p>
      Because data is not always distributed purposefully, it is important to know ways by which to measure the spread of data: the <i>Standard Deviation</i> (&sigma;) is a function that can do just that. 
    </p>
    <blockquote>
      <code>=STDEV&#40;</code><span>range, [condition]</span><code>&#41;</code>
    </blockquote>
    <p>
      This function easily calculates the distance between values and the mean value. For example, a group of numbers that are the same would have no deviation. To calculate the standard deviation by hand:
    </p>
    <ol>
      <li>Subtract All Values by the Average</li>
      <li>Square All Values, then Add Total Sum</li>
      <li>Divide the Total Sum by # of Values <br>(This result is the Variance)</li>
      <li>Apply Square Root to Variance</li>
    </ol>
    <p>
      When combining data of different sample sizes, the returned metrics may have skewed results. Data is considered to have <i>Normal Distribution</i> whenever it does not skew. One property of normal distribution is how often values occur within a given standard deviation, where distribution is graded.
    </p>
    <aside class="characterGrid">
      <div class="asciiItem">
        <div>&#60;&#61;68%</div>
        <div><small><b>Grade-1</b></small></div>
      </div>
      <div class="asciiItem">
        <div>&#60;&#61;95%</div>
        <div><small><b>Grade-2</b></small></div>
      </div>
      <div class="asciiItem">
        <div>&#62;&#61;99.7%</div>
        <div><small><b>Grade-3</b></small></div>
      </div>
    </aside>
    <p>
      There are two functions that can be used to ascertain how data is distributed, <i>Skew()</i> and <i>Countifs()</i>:
    </p>
    <blockquote>
      <code>=SKEW&#40;</code><small>'Range'</small><code>&#41;</code>
      <br>
      <code>=COUNTIFS&#40;</code><small>'Range', "&#62;"&amp;Cell2-Cell3, 'Range', "&#60;"&amp;Cell2+Cell3)/Cell1</small><code>&#41;</code>
    </blockquote>
    <p>
      The first condition checks if the value is greater than the mean minus one standard deviation. The second condition checks if the value is less than the mean plus one standard deviation. The function is then divided by the total sum of values to determine the distribution. In the example below, the first condition checks if the range <code>'2017'!S2:S50</code> is <code>&#62;</code> the mean <b>minus</b> one standard deviation <code>&amp;B6-B10</code> and the second condition checks if the range is <code>&#60;</code>  the mean <b>plus</b> one standard deviation. This is then divided by the total sum of values <code>B1</code>.
    </p>
    <blockquote>
      <code>=COUNTIFS&#40;</code><small>'2017'!S2:S50, "&#62;"&amp;B6-B10, '2017'!S2:S50, "&#60;"&amp;B6+B10)/B1</small><code>&#41;</code>
    </blockquote>
    <p>
      Ascertain distribution at grade-2 or -3 by absolutely referencing the range and multiplying the standard deviation by 2 or 3, respectively.
    </p>
    <blockquote>
      <code>=COUNTIFS&#40;</code><small>'2017'!<b>$</b>S<b>$</b>2:<b>$</b>S<b>$</b>50, "&#62;"&amp;B6-B10<b>&#215;2</b>, '2017'!<b>$</b>S<b>$</b>2:<b>$</b>S<b>$</b>50, "&#60;"&amp;B6+B10<b>&#215;2</b>)/B1</small><code>&#41;</code>
      <br>
      
      <code>=COUNTIFS&#40;</code><small>'2017'!<b>$</b>S<b>$</b>2:<b>$</b>S<b>$</b>50, "&#62;"&amp;B6-B10<b>&#215;3</b>, '2017'!<b>$</b>S<b>$</b>2:<b>$</b>S<b>$</b>50, "&#60;"&amp;B6+B10<b>&#215;3</b>)/B1</small><code>&#41;</code>
    </blockquote>
    <p>
      The COUNTIFS() function can also be used to calculate the number of values within a specified interval, which can be useful when charting large datasets. In the example below <code>A1</code> represents the base number interval and <code>A2</code> is the interval baseline.
    </p>
    <blockquote>
      <code>=COUNTIFS&#40;</code><small>'2017'!<b>$</b>S<b>$</b>2:<b>$</b>S<b>$</b>50, "&#62;"&amp;A1, '2017'!<b>$</b>S<b>$</b>2:<b>$</b>S<b>$</b>50, "&#60;"&amp;A2</small><code>&#41;</code>
    </blockquote>
  </section>
  
  <section>
    <h2 class="title">Validate Data</h2>
    <p>
      Errors occur with input, output, logic or in a formula itself. When data is missing or inputted incorrectly and/or a formula is misspelled, uses wrong order, bad math, etc. problems occur! During analysis and even before charting data, it is imperative to be weary of flawed data that could impair <i>statistical significance</i>, which consists of qualitative measures that ascertain meaningfulness of the analysis. <i>Hypothesis testing</i> is important to validate results of such measurements. A good hypothesis statement should include (a) an “if” and “then”, (b) both the independent and dependent variables, (c) be testable by experiment, survey or other scientifically sound technique, (d) be based on info in prior research (either yours or someone else’s), and (e) have design criteria (for engineering or programming projects). Aside from a hypothesis test, analysts can use built-in features to check for errors as well as implement measures that prevent users from making errors.
    </p>
    <h4 class="title">Prevent Errors using Data Validation</h4>
    <p>
      Data validation is a good tool to use to lessen the likelihood of human input errors: an example is a company forecasting revenue by which all store managers input data into a shared file.  Validation controls how data is entered while providing users w/ instructions to avoid errors; any error will produce a message notifying user why input is being denied. Here are a few commands that help:
    </p>
    <aside class="declarations">
      <div><b>Validate Function</b></div>
      <div><span>Select Data <b>&#62;&#62;</b> Data Validation (x2) <b>&#62;&#62;</b> Settings <b>&#62;&#62;</b> Allow (whole #s) <b>&#62;&#62;</b> Data Dropdown <b>&#62;&#62;</b> Between <b>&#62;&#62;</b> Set min / max</span></div>
      <div><b>Circle Invalid</b></div>
      <div><span>Select Data <b>&#62;&#62;</b> Data Validation <b>&#62;&#62;</b> Select Circle Invalid Data</span></div>
      <div><b>Clear Invalid</b></div>
      <div><span>Select Data <b>&#62;&#62;</b> Data Validation (x2) <b>&#62;&#62;</b> Error Message <b>&#62;&#62;</b> Clear </span></div>
      <div><b>Configure Error MSG</b></div>
      <div><span>Select Data <b>&#62;&#62;</b> Data Validation (x2) <b>&#62;&#62;</b> Error (Default setting 'Stop' prevents data input; 'Warning' gives user option to enter input or not)</span></div>
      <div><b>Configure Input MSG</b></div>
      <div><span>Select Data <b>&#62;&#62;</b> Data Validation (x2) <b>&#62;&#62;</b> Input Message</span></div>
    </aside>
    <h4 class="title">Checking for Errors</h4>
    <p>
      There are also commands that assist with checking for errors that are blind to the naked eye:
    </p>
    <aside class="declarations">
      <div><b>Check Sum Values</b></div>
      <div><span><em>Add all Values for a product then compare the two sets of totals.</em></span></div>
      <div><b>Highlight Formulas</b></div>
      <div><span>Home <b>&#62;&#62;</b> Find &amp; Select <b>&#62;&#62;</b> Go to Special <b>&#62;&#62;</b> Formulas</span></div>
      <div><b>Display Formulas</b></div>
      <div><span>Select Formulas <b>&#62;&#62;</b> Select Show Formulas (<em>Click again to Remove</em>)</span></div>
      <div><b>Evaluate Formulas</b></div>
      <div><span>Select Formulas <b>&#62;&#62;</b> Select Evaluate Formula <b>&#62;&#62;</b> Select (<em>Helps solve order-of-operation errors.</em>)</span></div>
      <div><b>Find and Replace</b></div>
      <div><span>Select Column <b>&#62;&#62;</b> CTRL-F <b>&#62;&#62;</b> Enter Find What + Replace With</span></div>
      <div><b>Trace Error Origin</b></div>
      <div><span>Select Formulas <b>&#62;&#62;</b> Select Error Checking <b>&#62;&#62;</b> Select Trace Error</span></div>
      <div><b>Trace Dependence</b></div>
      <div><span>Select Formulas > Select Trace Precedents / Dependence (<em>Cells that contain a formula can be traced to cells with originating values. Must have pointer on the cell with the formula. Useful when working with large file with multiple tabs.</em>)</span></div>
    </aside>
  </section>
  
  <section>
    <h2 class="title">Visualize Data</h2>
    <p>
      How data is collected and summarized determines the quality by which that data can be articulated. Using charts helps articulate data in a manner that the audience can visually imagine. 
    </p>
    <h4 class="title">Chart Types</h4>
    <p>
      There are many ways that data can be charted, but all of which depend on a given situation or <i>scenario</i> in relation to how you want that data presented.
    </p>
    <p>
      <i>Column</i> and <i>Bar</i> charts commonly used to <em>compare different values among items and across multiple categories</em> <b>or</b> <em>to show changes in data over a period of time</em>. These charts work well to highlight differences between a limited number of data-series. 
    </p>
    <p>
      <i>Pie</i> charts are used to <em>quantify the proportional value of an item to the sum total of all items</em>. Often displayed as a percentage, this chart focuses on an individual data-series and works well to highlight market share, a snapshot allocation or wealth management.
    </p>
    <p>
      <i>Line</i> charts are used to <em>compare different values of similar data over a continuous period of time</em>. This chart works well to illustrate trends 
Great to illustrate trends in data at equally specified time intervals such as months, quarters or years; particularly useful to understand seasonality or cannibalization in business. 
    </p>
    <p>
      <i>100% Stacked Area</i> charts are used similarly as line charts: to compare values over a continuous period of time. Great to demonstrate trends and to understand seasonality in business. Use a 100% Stacked Area chart to illustrate trends as a percentage. 
    </p>
    <p>
      <i>Scatter</i> charts are used to <em>identify correlations between two sets of scientific data</em>, specifically, to ascertain if a relationship exists between two variables. Such charts are used to compare numeric values and/or perform statistical analysis only: to determine relationships that help make future predictions. A linear line demonstrates a correlation, which is the measurement of the interdependence of variable quantities expressed in a range between -1 (negative), 0 (none), 0.5 (low) and 1 (positive). The <i>Correll</i> function is used in unison with this chart to <em>calculate correlations between two data-series</em>.
    </p>
    <p>
      <i>Combo </i> charts can be created using the aforementioned chart types and the line chart works well in this regard. There are strategies that can be implemented to create a range of charts: use a <a target="_blank" href=""><i>Speedometer</i></a> to capture a value of one data-series within a range, show progress with a <a target="_blank" href="https://www.excel-easy.com/examples/thermometer-chart.html"><i>Thermometer</i></a>, track schedule efficiency with a <a target="_blank" href="https://www.excel-easy.com/examples/gantt-chart.html"><i>Gantt</i></a> chart or use the <a target="_blank" href="https://www.excel-easy.com/examples/pareto-chart.html"><i>Pareto</i></a> method to describe how 80% of an events effects derive from 20% of the causes. More elaborate schemes can be used to create <i>Maps</i>, reflect <i>Stock</i> prices or qualify values using a <i>Radar</i>.
    </p>
    <p>
      With a clear idea of how to visualize a problem, analyst can be confident in their chart selection and proceed to implement. Creating charts is a relatively simple process: view chart <a target="_blank" href="https://exceljet.net/chart-types">types</a> and usage <a target="_blank" href="https://exceljet.net/chart-examples">cases</a> to learn more.
    </p>
    <aside class="declarations">
      <div><b>Create a Chart</b></div>
      <div><span>Select Data (CTRL-SHIFT + ArrowKeys) <b>+</b> Insert <b>&#62;&#62;</b> Choose Chart <i>--or--</i></span></div>
      <div></div>
      <div><span>Shortcuts: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Pie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scatter</span></div>
      <div></div>
      <div><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; ALT-N-N &nbsp;&nbsp;&nbsp;-N-Q&nbsp;&nbsp;&nbsp;&nbsp;-N-D</span></div>
      <div><b>Convert Chart</b></div>
      <div><span>F11  --OR--  Right-click <b>&#62;&#62;</b> Move <b>&#62;&#62;</b> Rename <b>&#62;&#62;</b> Ok</span></div>
      <div><b>Save Template</b></div>
      <div><span>Right-Click Chart <b>&#62;&#62;</b> Save as Template</span></div>
      <div><b>Use Template</b></div>
      <div><span>	Select Data <b>&#62;&#62;</b> Add a Chart/Change Chart <b>&#62;&#62;</b> Select Template</span></div>
      <div><b>Change Type</b></div>
      <div><span>Right-click <b>&#62;&#62;</b> Change Chart Type</span></div>
    </aside>
    
    <h4 class="title">PivotTable</h4>
    <p>
      A <i>PivotTable</i> offers analysts a quick synopsis of data: it is a means to format data prior that can be filtered within a <i>PivotChart</i>. Data used to create pivottables should be separated in order to add new data later (be sure to refresh when adding data and tinker with output values). 
    </p>
    <aside class="declarations">
      <div><b>Create PivotTable</b></div>
      <div><span>Select Insert <b>&#62;&#62;</b> Select Table <b>&#62;&#62;</b> Name Table <b>+</b> Insert <b>&#62;&#62;</b> Pivot Table <b>&#62;&#62;</b> Choose New</span></div>
      <div><b>Change Calculation</b></div>
      <div><span>Analyze <b>&#62;&#62;</b> Field Settings <b>&#62;&#62;</b> Choose</span></div>
    </aside>
    <p>
      This process will open a new sheet with a PivotTable Field, which will reveal <i>fields</i> of which accept categorical data. Because the order that data is added will affect how it is displayed, target larger categories first, using this order: <small><b>[ Rows > Columns > Values > Filters ]</b></small> where row and columns serve as headers, values reflect dollar figures and filter represents a drop-down list of categorized data.
    </p>
    
    <h4 class="title">Format Charts</h4>
    <p>
      Once a chart has been made, it can be formatted to include and modify various chart components. Both the chart and individual data-series can be formatted to add an aesthetic flare that contributes to the overall story being told. 
    </p>
    <aside class="declarations">
      <div><b>Edit Chart </b></div>
      <div><span>Format <b>&#62;&#62;</b> Choose Style</span></div>
      <div><b></b></div>
      <div><span>Design <b>&#62;&#62;</b> Add Chart Element <b>&#62;&#62;</b> Choose Option</span></div>
      <div><b></b></div>
      <div><span>Right-click <b>&#62;&#62;</b> Format Chart Area <b>&#62;&#62;</b> Choose Option</span></div>
      <div><b>Add Sparklines</b></div>
      <div><span>Select Empty Cells <b>&#62;&#62;</b> Insert <b>&#62;&#62;</b> Sparklines</span></div>
    </aside>
    <p>
      The first method to edit a chart targets text styles and enables analyst to 'shape' data-series. The latter two methods are used to apply components to a chart: a brief description of key elements follows. Note: not all charts will accept all components.
    </p>
    <p>
      Aside from the the actual chart title, <i>Axis Titles</i> can be used to <em>define values</em>. <i>Data Lables</i> can be used to <em>display exact values</em> on a chart, but a <i>Data Table</i> can be used to <em>display the dataset</em> from which the chart was created. <i>Legends</i> are used to <em>define the relationship of a data-series with the data being graphed</em> while <i>Trend lines</i> are used to <em>forecast</em>.
    </p>
    <p>
      The <i>Right-Click</i> method provides options to target data-series and text using fill, glow, outline, shadow, size and 3d properties. Use this method to <em>add</em> <i>Line Markers</i> <em>to a data-series</em>.
    </p>
    <p>
      Another formatting feature is the <i>Sparkline</i>, which is a mini-graph of sorts that is displayed in a cell.
    </p>
    
    <h4 class="title">Conditional Formatting</h4>
    <p>
      Analyst format charts to 'arrange' data in a meaningful way, but we can use <i>Conditional Formatting</i> for presentation purposes to help the audience 'make sense' of the data. When telling the story, it is imperative to <em>introduce a problem, share how you formulated a hypothesis and steps taken to test results before finally sharing conclusions</em>. Conditional formatting instills confidence when sharing conclusions as these features highlight differences based on specified conditions being met to help visualize data trends or variances to better analyze data more efficiently. 
    </p>
    <aside class="declarations">
      <div><b>Add Condition</b></div>
      <div><span>Select Data <b>&#62;&#62;</b> Home <b>&#62;&#62;</b> Conditional Formatting</span></div>
    </aside>
    <p>
      The best part about <b>CF</b> is that it adds color to life, literally: all properties of this feature implements a standard <span style="color: green;">Green</span>-<span style="color: yellow; background: black;">Yellow</span>-<span style="color: red;">Red</span> color scheme to distinguish high/low, positive/negative values from one another. Choose the <i>Highlight Cell Rules</i> feature to invoke <em>greater/less than, equal to or between x and y conditions; or to check for duplicate values</em>. The <i>Top/Bottom Rules</i>  feature can be used to <em>highlight values above/below average as well as the top or bottom 10(%)</em>. <i>Data Bars</i> can be used to <em>compare and highlight the value of a cell relative to other values within that data-series</em>. 
    </p>
    <p>
      The <i>Color Scales</i> feature is awesome: use it to make a <a target="_blank" href="https://www.excel-easy.com/examples/heat-map.html">Heat Map</a> as it is used to <em>distinguish values along a color spectrum.</em> To this end, <i>Icon Sets</i> are similar to color scales with additional context in the form of arrows, shapes and ratings to clearly demonstrate fixed points along that data-series values' spectrum. All of these features are formatting <i>rules</i>: analyst have the ability to manage these rules, reset all data rules and create rules for a specific purpose. For example, the spectrum uses a default ration of <span style="color: green;">&#62;68</span>-<span style="color: yellow; background: black;">&#60;67</span>-<span style="color: red;">&#60;33</span>, but these numbers can be modified to fit the needs of a scenario.
    </p>
  </section>
</article>
<!-- .....CONTENT-ENDS// --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>