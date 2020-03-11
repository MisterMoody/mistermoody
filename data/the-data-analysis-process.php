<?php
$pageTitle = "The Data Analysis Process by Ray Moody";
$page = "The Data Analysis Process";
include ("../inc/header.php");
?>
<!-- ************************************************** -->
<!-- ************* << WEB DEV 'TOOLKIT' >> ************ -->

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
              <a href="data/the-data-analysis-process">Add Data between Worksheeets</a>
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
    <h3>What is Data Analysis?</h3>
    <p>
      <i>Data Analysis</i> is a process of performing analytical methods (ie diagnostic, predictive) on data to create dashboards that illustrate patterns for the evaluation of past decisions and forecasting of future events. This enables business, health, science and professionals from all fields to confidently make well informed decisions by inspiring an awareness to potential benefits and consequences of their choices. Advancements in technology has allowed this craft to flourish in ways that meaningfully impact everyday life and it can become an ideal niche for a transitioning web developer interested in <a target="_blank" href="https://towardsdatascience.com">data science</a>. <code>#dataviz</code>

    </p>
    <p>
      There are multiple facets related to the analysis process as a whole: data is first collected then formatted. This involves confirming the accuracy of data by checking for anomalies, duplicate values or empty cells and ensuring column and row headers are titled. With data in clear view, outline strategic goals designed to produce a specific insight by defining questions that qualify potential solutions or results and quantify how to measure it. This seems like simple math: spread sheets offer functions that calculate data to confirm totals, identify relationships and generally answer initial questions.
    </p>
    <p>
       Probability and statistical analysis does much to further evaluate data (ie a/b testing, correlation, distribution) with the most common statistic methods involving mean, standard deviation, linear regression, variance, percentile and hypothesis testing. In business, Key Performance Indicators (KPIs) are used to evaluate business activity performance: it should be stressed that formulating a <a target="_blank" href="https://www.datapine.com/blog/data-analysis-questions/">list of questions</a> based on <a target="_blank" href="https://www.datapine.com/kpi-examples-and-templates/">KPIs</a> prior to analyzing data is a best practice! Other relevant analyses include cohort, ethnographic, narrative, univariate, bivariate, nominal, ordinal, hermeneutic, discourse and phenomenological.
    </p>
    <p>
      Once data has been thoroughly vetted and prepped for presentation, it should be charted to help users visually interpret the mapping of existing relationships between targeted variables. Chart-type selection should be taken serious as graphic choice plays a pivotal role in the effectiveness of how a story is told.  Thus, storytellers must strongly consider the analytical purpose of an inquiry when outlining an approach for how to present data in a meaningful way. With data, stories begin by allowing users to readily access data, in which case users should be able to filter and sort data to make comparisons based on conditions that determine. Providing options to ascertain anomalies, correlations or the range takes those charts to the next level. These are concepts that help create the stories that you want the data to tell! 
    </p>
  </section>
  
  <section>
    <h3>Collect and Organize Data</h3>
    <p>
      Data is obtained from spread sheets that can be modified using programs like Microsoft Excel. Data files obtained from external sources typically use the <code>.csv</code> file extension for downloads, but data saved in excel should use the <code>.xlsx</code> extension (be aware of <code>.xlsm</code> extension used solely with Excel 4.0 macro-enabled). In this regard, use a date format with version number to save work in chronological order like so: [<code>YYYYMMDDversion#</code>].
    </p>
    <p>
      While most analyst receive data directly from their employer, researchers must depend on external sources for data collection. Here are some open sourced datasets that can help the most novice of intellects brainstorm first-class solutions for mankinds most complex issues. 
    </p>    
    <aside class="resourceContainer">
      <h4 class="title">Resources</h4>
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
      <div><span> Data  >>  Get External Data  >>  Choose Source</span></div>
      <div><b>w/ Google</b></div>
      <div><span> File  >>  Import  >>  Upload  >>  Import Action  >>  Create New  >>  Import Data</span></div>
      </aside>
    <h4>Working with Data</h4>
    <p>
      The data stored in an individual sheet is called a <i>dataset</i>: a table of values (text or numeric) collectively referred to as a <i>data-series</i>. Datasets are separated using tabs located at the bottom of the sheet, and are especially useful for testing <i>scenarios</i> when <i>forecasting</i>. It is a best practice to use tabs to separate originally inputted data from and forcasted output assumptions. 
    </p>
    <p>
      Data is labeled by its column and/or row headers so one of the first things to do when organizing data is to <i>freeze the pane</i> to keep column headers visible. <i>Transpose</i> the headers to switch the placement of column and row lables and <i>convert values</i> before starting analysis. Leave <i>comments</i> to collaboratively exchange information and <i>notes</i> to define data within a cell to help analyst stay abreast of file changes. <i>Sort</i> data using specified criteria such as a quantity, price of an item, order of an item, etc. <i>Filter</i> a targeted dataset when dealing with several categories then sort specified columns within the filter module. Keep in mind that filtered data is temporarily hidden and must be restored before continuing analysis.
    </p>
    <aside class="declarations">
      <div><b>Freeze Panes</b></div>
      <div><span>View >> Freeze Panes</span></div>
      <div><b>Transpose</b></div>
      <div><span>Select Headers >> Edit >> Paste Special >> Transpose</span></div>
      <div><b>Convert Values</b></div>
      <div><span>Select <code>123</code> Button >> Choose Value</span></div>
      <div><b>Sort Data</b></div>
      <div><span>Select All Data >> Data >> Sort</span></div>
      <div><b>Filter Data</b></div>
      <div><span>Select Header Rows >> Data >> Filter >> Choose Categories to Ignore</span></div>
      <div><b>Restore Data</b></div>
      <div><span>Edit >> Select All</span></div>
    </aside>
    <p>
      There are many <a target="_blank" href="https://exceljet.net/keyboard-shortcuts ">keyboard shortcuts</a> that can be used to make organizing data less complicated as well.
    </p>
  </section>
  
  <section>
    <h3>Summarize Data to Test a Hypothesis</h3>
    <p>
      Spread sheets have features that make handling data a cinche. Most of the heavy lifting is conducted via formulas and functions. While a <i>formula</i> is a math expression made up of cell addresses and arithmetic operators, a <i>function</i> is a built-in formula that enables analysts to perform calculations using values based on a specified condition. Excel Easy offers high-quality <a target="_blank" href="https://www.excel-easy.com/examples.html">examples</a> to aid when using Microsoft Excel spread sheets. Before diving into what these tools can do, it is useful to know how to reference data and duplicate formulas for other calculations.
    </p>
    <p>
      Functions use all values from a single column: these values are known as a <i>range</i> / <i>variable</i> and can be applied to other functions to expound upon initial calculations. Although using mean is most accurate, using median produces more realistic numbers. When using a variable / range to measure something, it turns into a metric that can be used for additional calculations. <i>Metrics</i> are aggregated values stored in cells, thus, how they are referenced is vital to the integrity of data being analyzed. At its initial state, all cells are <i>relative</i>, identified by a column and row number. Individual cells can be referenced by separating such cells with commas; reference cell groups by separating the first and last cells with a colon. Cells can be referenced <i>absolutely</i> (terms defined) so that the value in that cell can be used to calculate the value in another cell: such data never updates and is useful when performing multiple calculations using the same dataset. In cases were an absolute reference is implemented, that range of data can be <i>duplicated</i> for usage in another cell to perform an entirely separate calculation. Keep an eye on absolutely referenced cells and how they are referenced as either the column, row or both can be referenced. In the event of either/or, data may be updated resulting in poor analysis.
    </p>
    <aside class="declarations">
      <div><b>Reference Cells</b></div>
      <div><span>CTRL-SHIFT-Arrows</span></div>
      <div><b>Absolute Reference</b></div>
      <div><span>Select Cell >> F4</span></div>
      <div><b>Duplicate a Formula</b></div>
      <div><span>Select <code>123</code> Button >> Choose Value</span></div>
      <div><b>Sort Data</b></div>
      <div><span>Select All Data >> Data >> Sort</span></div>
      <div><b>Filter Data</b></div>
      <div><span>Select Header Rows >> Data >> Filter >> Choose Categories to Ignore</span></div>
        <div><b>Restore Data</b></div>
      <div><span>Edit >> Select All</span></div>
    </aside>
    
    <h4>Using Functions</h4>
    <p>
      The aforementioned tactics are imperative for working with formulas and functions, which are the stimulus behind summarizing data. All functions begin with an equal sign (=) followed by its function name in all caps; parenthesis enclose the parameters which is the calculation to be performed on referenced cells. 
    </p>
    <blockquote>
      <code>=FUNCTION_Name&#40;</code>cell_reference, condition<code>&#41;</code>
    </blockquote>
    <p>
      There are a plethora of formulas and functions that can be used to modify, summarize and validate data depending on the problem at hand. Common functions analyst need to be comfotable with include: 
    </p>
    <aside class="miniBlock">
      <div class="asciiItem">
        <div class=""><code title="Returns Lowest Value">=MIN(Cell:Range)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Highest Value">=MAX(C1,C2,C3...)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="">=MAX-MIN</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Mean Value">=AVERAGE(Cell:Range)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Middle Value">=MEDIAN(Cell:Range)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Most Frequent Value">=MODE(Cell:Range)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Total Sum of Values">=SUM(Cell:Range)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Total Sum of Values based on Conditions">=SUMIF(range,criteria,sum_r)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Number of Selected Cells that have Numbers as Values">=COUNT(Cell:Range)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Count of Cells that Meet One or More Criteria">=COUNTIF(range1,criteria1)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns the Standard Deviation">=STDEV(xxx)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns the Normal Distribution Grade">=SKEW(xxx)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Add Column Data from one Worksheet to another">=VLOOKUP(xxx)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Add Row Data from one Worksheet to another">=HLOOKUP(xxx)</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns True if the value is text; false otherwise">ISTEXT()</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns True if the value is numeric; false otherwise">ISNUMBER()</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns a Rounded-down Integer (removes decimals)">INT()</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns a Number of Characters in a Text-String
*Split Text or Abbreviate Words
">=LEN()</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Combined Text from Different Cells">=CONCATENATE()</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Combined Text from Diff Cells">=TRIM()</code></div>
      </div>
      <div class="asciiItem">
        <div class=""><code title="Returns Prediction of a Future Value based on Existing Values">=FORECAST()</code></div>
      </div>
    </aside>
    <p>
      These functions work well with on another to produce an assorment of results. There are standard procedures analyst can perform in order to ascertain feedback quality.  
    </p>
    
    <h4>Adding Data between Worksheets</h4>
    <p>
      <i>Lookup()</i> functions provide a conditional search to get data from a column or row in one worksheet then adding it to the column or row in another worksheet using VLOOKUP() or HLOOKUP(), respectively. When using these functions it is important to delete empty rows or columns and check that the same data type is being used in the 1st column of the range.
    </p>
    <aside class="declarations">
      <div><b>Func</b></div>
      <div><span>Formulas >> Lookup &amp; Reference >> VLOOKUP >> Input Args</span></div>
    </aside>
    <p>
      This function takes four arguments: a lookup_value, a table_array, a column_index_number and a range_lookup value. The lookup_value is the cell of data to match.: it must be in the farthest left column. The table_array is the range of cells to search wherein the headers represent columns of data to retrieve: must absolutely reference cells to use entire column data!. The col_ind_num represents the header column number for the column of data to retrieve: the argument is always a number. The range_lookup is an optional value: use false to return an exact-match or true to return an approximate match. It is a best practice to use false when working with unique identifiers, and to sort data in ascending order otherwise.
    </p>    
    <blockquote>
      <code>=VLOOKUP&#40;</code><span>A2,'worksheet - dataset'!$A:$C, 3, false</span><code>&#41;</code>
    </blockquote>
    <p>
      In the example above, the cell <code>A2</code> is the lookup value that we want to match with data from <code>'worksheet - dataset'</code> and is absolutely referenced as so: <code>$A:$C</code>. This matches all data between the targeted columns in both input and output tabs where the <code>3</code> indicates the data targeted for retrieval, returning an exact match. The HLOOKUP() function must be implemented manually.
    </p>
    
    <h4>Identifying Patterns</h4>
    <p>
      Because data is not always distributed purposefully, it is important to know ways by which to measure the spread of data: the <i>Standard Deviation</i> is a function that can do ust that. 
    </p>
  </section>
  
  <section>
    <h3>Validate Data</h3>
    <p></p>
  </section>
  
  <section>
    <h3>Visualize Data</h3>
    <p></p>
  </section>
</article>
<!-- .....CONTENT-ENDS// --> 

<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>