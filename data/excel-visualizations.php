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
    <h1>Excel Visualizations</h1>
    <p>
      The cases outlined below provides an outline of how I process data.
    </p>
  </section>
  
  <section>
    <h4 class="title">Case: Total Sales (Sum Values)</h4>
    <p>
      The examples above demonstrate how to quickly create a visualization. The following use cases demonstrate how I think through a problem when creating a picture for my story. Personal Note: it is at this point in the story that I learn about the <i>Quick Analysis Tool</i>: a nifty shortcut <code>CTRL-Q</code> to utilize a built-in feature that provides recommendations for how to analyze and chart selected data.
    </p>
    <p>
      For this case, I have a small dataset related to <i>Total Product Sales</i> for a retail chain with three franchises in a mid-size city: the goal is to present this data in a variety of ways to illustrate different happenings. The data outlines all products, products sold at each franchise and total product sales by month. Recognizing data is in good order, I abbreviated month names and adjusted column width for aesthetic purposes. 
    </p>
    <figure>
      <img class="chartEx" alt=" Chart Example" src="img/data/dap/datasetCase1.png">
      <figcaption>Dataset for Retail Chain</figcaption>
    </figure>
    <p>
      Based on the data structure, I chose to perform calculations to generate <i>total sum</i> figures that can simplify the analysis process. The steps that I took involved finding the (a) total yearly sales for each franchise including the grand total for the chain, (b) total monthly sales for each franchise including monthly grand totals and (c) total yearly sales for individual products. I considered calculating total monthly sales for individual products as well, but that might be overkill. The calculations produced the following results:
    </p>
      
    <p>
      To find the yearly sales for each franchise, I invoked the =SUM() function and used all values for that franchise only. The function, <code>=Sum&#40;</code><span>B2:M5</span><code>&#41;</code>, targets values of cells between columns B - M and rows 2 - 5. I repeated the process for other franchises then tallied total sales for the entire chain. I checked the results by performing the same calculation using values from all locations. 
    </p>
    <figure>
      <img class="chartEx" alt=" Chart Example" src="img/data/dap/tysFranchiseDataCase1.png">
      <figcaption>Sales Data for Downtown Franchise / Chain</figcaption>
    </figure>   
      
    <p>
      Calculating monthly sales for each franchise took some time, but was completed by adding monthly sales for a franchise then dragging that formula across cells to fill in values for each month. I then used the function and added franchise values for each month to return the monthly sales for the chain as a whole. Here, <code>=Sum&#40;</code><span>B2:B5</span><code>&#41;</code> targets all row values within the JAN column. I avoided repeating this process for every month as I remember that I could drag the formula across the row to populate values based on the column it resides. Finally, I tallied total sales for individual products for the year. I was able to run the aforementioned check to ascertain the grand total. 
    </p>
    <figure>
      <img class="chartEx" alt=" Chart Example" src="img/data/dap/tmsFranchisetysProductDataCase1.png">
      <figcaption>Monthly Sales by Franchise / Yearly Sales by Product</figcaption>
    </figure>
    
    <p>
      With the fun part out of the way, I begin my assessment of the data that I have and determine how to visualize it. With so much data, I expect there will be a need for a few charts, but which ones!?!
    </p>
    <p>
      I used a PIE chart to illustrate total yearly sales by franchise and sales share as a percentage of the overall retail sales. It is a simple chart that indicates that the Downtown franchise is the most profitable: that was obvious. I used a COLUMN chart to expound on the total monthly sales by franchise: it tells a story of how sales fared month-over-month by franchise, but even with a data-table and trend lines, not much is discoverable here. So I added a LINE chart to clarify: no new perspectives here. At last, I found confidence in the 100% STACKED AREA chart with a data-table: it shows total monthly sales and the proportional share of each franchise among chain retailers.
    </p>
    <div class="multiChartEx">
      <figure>
        <img class="chartEx" alt=" Chart Example" src="img/data/dap/Case1_PieChart.png">
        <figcaption>Yearly Sales - Pie Chart</figcaption>
      </figure>
      <figure>
        <img class="chartEx" alt=" Chart Example" src="img/data/dap/Case1_ColumnChart.png">
        <figcaption>Montly Sales - Column Chart</figcaption>
      </figure>
      <figure>
        <img class="chartEx" alt=" Chart Example" src="img/data/dap/Case1_LineChart.png">
        <figcaption>Monthly Sales - Line Chart</figcaption>
      </figure>
      <figure>
        <img class="chartEx" alt=" Chart Example" src="img/data/dap/Case1_AreaChart.png">
        <figcaption>Monthly Sales - Area Chart</figcaption>
      </figure>      
    </div>
    <p>
      After a short break, I returned to review these charts and felt like something was missing: month-over-month details. The math behind this evaluation is quite basic: I used total monthly sales to compare month-over-month changes in overall sales, then I subtracted FEB total sales from JAN total sales to return a $ value for revenue profit or loss by month. The integer values are informative, indicating a perspective that is better understood with percentages. Subtracting FEB sales from JAN, multiplied by 100 then divided by JAN sales provides a percentage value and makes it easier to comprehend data spread variance. The negative values causes pause when adding a chart: my preference in this situation is to use conditional formatting.
    </p>
    <figure>
      <img class="chartEx" alt="Conditional Format Example" src="img/data/dap/Case1_monthovermonthFormat.png">
      <figcaption>Month-over-Month Sales Change $ and %</figcaption>
    </figure>
    <p>
       I explored including color scales and icon sets, but settled on highlighting values based on where that value fell in a range of 0 to 100. Months in which sales produced profits greater than 33% are colored green: yellow marked minor sales decline with cell values between -5% - 32% and red marked months the chain experienced revenue loss. With this formatting, I can explore seasonality changes and investigate ways to improve sales.   
    </p>
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
    <h5>~more cases to come...</h5>
  </section>
  
</article>
<!-- .....CONTENT-ENDS// --> 
<!-- ************************************************** -->
<!-- ************************************************** -->
<?php
include ("../inc/footer.php"); 
?>