<!DOCTYPE html>
<html lang="en">

<head>
  <title>NubeEra PySpark</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="NubeEra PySpark">

  <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

  <link id="theme-style" rel="stylesheet" href="../../../../../assets/css/theme.css">
  <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
  <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
  <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
  <link rel="stylesheet" href="../../../../../boto_topics.css">

  <style>
    table,
    td,
    th,
    tr {
      border: 1px solid black;
    }
  </style>
</head>

<body>

  <!-- Navigation Bar -->
  <?php require '../../../../../templates/navbar.php'; ?>

  <div id="modal-sidepanel">

    <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
      <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
      <div class="col-md-12 side-panel">
        <strong class="px-2" style="font-size: 1.125rem;">PySpark - SQL Functions</strong><br><br>
        <ul>
          <li><a href="index.php">PySpark – Aggregate Functions</a></li>
          <li><a href="pyspark-window-functions.php">PySpark – Window Functions</a></li>
          <li><a href="pyspark-sql-date-and-timestamp-functions.php">PySpark – Date and Timestamp Functions</a></li>
          <li><a href="pyspark-json-functions-with-examples.php">PySpark – JSON Functions</a></li>
        </ul>
      </div>
    </div>

  </div>
  <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

  <div class="content-box" id="content-box">
    <div class="body-content">
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">PySpark SQL Date and Timestamp Functions</h3>
        <ol class="breadcrumb mx-5 mt-3 px-0">
          <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
          <li class="breadcrumb-item"><a href="../../../../../">BigData</a></li>
          <li class="breadcrumb-item"><a href="../../../../">Spark</a></li>
          <li class="breadcrumb-item active">PySpark</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <div class="entry-content clr" itemprop="text">
            <strong>PySpark Date and Timestamp Functions</strong> are supported on DataFrame and SQL queries and they work similarly to traditional SQL, Date and Time are very important if you are using PySpark for ETL. Most of all these functions accept input as, Date type, Timestamp type, or String. If a String used, it should be in a default format that can be cast to date. <br>
            <ul>
              <li><code>DateType</code> default format is <code>yyyy-MM-dd</code> </li>
              <li><code>TimestampType</code> default format is <code>yyyy-MM-dd HH:mm:ss.SSSS</code></li>
              <li>Returns <code>null</code> if the input is a string that can not be cast to Date or Timestamp.</li>
            </ul>
            PySpark SQL provides several Date &amp; Timestamp functions hence keep an eye on and understand these. Always you should choose these functions instead of writing your own functions (UDF) as these functions are compile-time safe, handles null, and perform better when compared to PySpark UDF. If your PySpark application is critical on performance try to avoid using custom UDF at all costs as these are not guarantee performance.<br>
            For readable purposes, I&#8217;ve grouped these functions into the following groups.<br>
            <ul>
              <li><a href="#pyspark-sql-date-functions">Date Functions</a></li>
              <li><a href="#pyspark-sql-timestamp-functions">Timestamp Functions</a></li>
              <li><a href="#sql-date-time">Date and Timestamp Window Functions</a></li>
            </ul>
            Before you use any examples below, make sure you <a href="https://sparkbyexamples.com/pyspark/pyspark-what-is-sparksession/">Create PySpark Sparksession</a> and import SQL functions.<br>
            <code class="language-python">
              <pre>
from pyspark.sql.functions import *
</pre>
            </code>
            <h3 id="pyspark-sql-date-functions">PySpark SQL Date Functions</h3>
            Below are some of the PySpark SQL Date functions, these functions operate on the just Date. <br>
            The default format of the PySpark Date is <code>yyyy-MM-dd</code>.<br>
            <table id="tablepress-45" class="tablepress tablepress-id-45">
              <thead>
                <tr class="row-1 odd">
                  <th class="column-1" style="width:40%;">PySpark Date Function</th>
                  <th class="column-2" style="width:60%;">Date Function Description</th>
                </tr>
              </thead>
              <tbody>
                <tr class="row-2 even">
                  <td class="column-1"><a href="#current_date">current_date()</a></td>
                  <td class="column-2">Returns the current date as a date column.</td>
                </tr>
                <tr class="row-3 odd">
                  <td class="column-1"><a href="#date_format">date_format(dateExpr,format)</a></td>
                  <td class="column-2">Converts a date/timestamp/string to a value of string in the format specified by the date format given by the second argument.</td>
                </tr>
                <tr class="row-4 even">
                  <td class="column-1"><a href="#to_date">to_date()</a></td>
                  <td class="column-2">Converts the column into `DateType` by casting rules to `DateType`.</td>
                </tr>
                <tr class="row-5 odd">
                  <td class="column-1"><a href="#to_date">to_date(column, fmt)</a></td>
                  <td class="column-2">Converts the column into a `DateType` with a specified format</td>
                </tr>
                <tr class="row-6 even">
                  <td class="column-1"><a href="#add_months">add_months(Column, numMonths)</a></td>
                  <td class="column-2">Returns the date that is `numMonths` after `startDate`.</td>
                </tr>
                <tr class="row-7 odd">
                  <td class="column-1"><a href="#add_months">date_add(column, days)</a><br />
                    <a href="#add_months">date_sub(column, days)</a>
                  </td>
                  <td class="column-2">Returns the date that is `days` days after `start`</td>
                </tr>
                <tr class="row-8 even">
                  <td class="column-1"><a href="#datediff">datediff(end, start)</a></td>
                  <td class="column-2">Returns the number of days from `start` to `end`.</td>
                </tr>
                <tr class="row-9 odd">
                  <td class="column-1"><a href="#months_between">months_between(end, start)</a></td>
                  <td class="column-2">Returns number of months between dates `start` and `end`. A whole number is returned if both inputs have the same day of month or both are the last day of their respective months. Otherwise, the difference is calculated assuming 31 days per month.</td>
                </tr>
                <tr class="row-10 even">
                  <td class="column-1"><a href="#months_between">months_between(end, start, roundOff)</a></td>
                  <td class="column-2">Returns number of months between dates `end` and `start`. If `roundOff` is set to true, the result is rounded off to 8 digits; it is not rounded otherwise.</td>
                </tr>
                <tr class="row-11 odd">
                  <td class="column-1"><a href="#year">next_day(column, dayOfWeek)</a></td>
                  <td class="column-2">Returns the first date which is later than the value of the `date` column that is on the specified day of the week.<br />
                    For example, `next_day('2015-07-27', "Sunday")` returns 2015-08-02 because that is the first Sunday after 2015-07-27.</td>
                </tr>
                <tr class="row-12 even">
                  <td class="column-1"><a href="#trunc">trunc(column, format)</a></td>
                  <td class="column-2">Returns date truncated to the unit specified by the format.<br />
                    For example, `trunc("2018-11-19 12:01:19", "year")` returns 2018-01-01<br />
                    format: 'year', 'yyyy', 'yy' to truncate by year,<br />
                    'month', 'mon', 'mm' to truncate by month</td>
                </tr>
                <tr class="row-13 odd">
                  <td class="column-1"><a href="#trunc">date_trunc(format, timestamp)</a></td>
                  <td class="column-2">Returns timestamp truncated to the unit specified by the format.<br />
                    For example, `date_trunc("year", "2018-11-19 12:01:19")` returns 2018-01-01 00:00:00<br />
                    format: 'year', 'yyyy', 'yy' to truncate by year,<br />
                    'month', 'mon', 'mm' to truncate by month,<br />
                    'day', 'dd' to truncate by day,<br />
                    Other options are: 'second', 'minute', 'hour', 'week', 'month', 'quarter'</td>
                </tr>
                <tr class="row-14 even">
                  <td class="column-1"><a href="#year">year(column)</a></td>
                  <td class="column-2">Extracts the year as an integer from a given date/timestamp/string</td>
                </tr>
                <tr class="row-15 odd">
                  <td class="column-1"><a href="#year">quarter(column)</a></td>
                  <td class="column-2">Extracts the quarter as an integer from a given date/timestamp/string.</td>
                </tr>
                <tr class="row-16 even">
                  <td class="column-1"><a href="#year">month(column)</a></td>
                  <td class="column-2">Extracts the month as an integer from a given date/timestamp/string</td>
                </tr>
                <tr class="row-17 odd">
                  <td class="column-1"><a href="#year">dayofweek(column)</a></td>
                  <td class="column-2">Extracts the day of the week as an integer from a given date/timestamp/string. Ranges from 1 for a Sunday through to 7 for a Saturday</td>
                </tr>
                <tr class="row-18 even">
                  <td class="column-1"><a href="#year">dayofmonth(column)</a></td>
                  <td class="column-2">Extracts the day of the month as an integer from a given date/timestamp/string.</td>
                </tr>
                <tr class="row-19 odd">
                  <td class="column-1"><a href="#year">dayofyear(column)</a></td>
                  <td class="column-2">Extracts the day of the year as an integer from a given date/timestamp/string.</td>
                </tr>
                <tr class="row-20 even">
                  <td class="column-1"><a href="#year">weekofyear(column)</a></td>
                  <td class="column-2">Extracts the week number as an integer from a given date/timestamp/string. A week is considered to start on a Monday and week 1 is the first week with more than 3 days, as defined by ISO 8601</td>
                </tr>
                <tr class="row-21 odd">
                  <td class="column-1"><a href="#year">last_day(column)</a></td>
                  <td class="column-2">Returns the last day of the month which the given date belongs to. For example, input "2015-07-27" returns "2015-07-31" since July 31 is the last day of the month in July 2015.</td>
                </tr>
                <tr class="row-22 even">
                  <td class="column-1">from_unixtime(column)</td>
                  <td class="column-2">Converts the number of seconds from unix epoch (1970-01-01 00:00:00 UTC) to a string representing the timestamp of that moment in the current system time zone in the yyyy-MM-dd HH:mm:ss format.</td>
                </tr>
                <tr class="row-23 odd">
                  <td class="column-1">from_unixtime(column, f)</td>
                  <td class="column-2">Converts the number of seconds from unix epoch (1970-01-01 00:00:00 UTC) to a string representing the timestamp of that moment in the current system time zone in the given format.</td>
                </tr>
                <tr class="row-24 even">
                  <td class="column-1">unix_timestamp()</td>
                  <td class="column-2">Returns the current Unix timestamp (in seconds) as a long</td>
                </tr>
                <tr class="row-25 odd">
                  <td class="column-1">unix_timestamp(column)</td>
                  <td class="column-2">Converts time string in format yyyy-MM-dd HH:mm:ss to Unix timestamp (in seconds), using the default timezone and the default locale.</td>
                </tr>
                <tr class="row-26 even">
                  <td class="column-1">unix_timestamp(column, p)</td>
                  <td class="column-2">Converts time string with given pattern to Unix timestamp (in seconds).</td>
                </tr>
              </tbody>
            </table>

            <h3 id="pyspark-sql-timestamp-functions">PySpark SQL Timestamp Functions</h3>
            Below are some of the PySpark SQL Timestamp functions, these functions operate on both date and timestamp values.<br>
            The default format of the Spark Timestamp is <code>yyyy-MM-dd HH:mm:ss.SSSS</code><br>
            <table id="tablepress-46" class="tablepress tablepress-id-46">
              <thead>
                <tr class="row-1 odd">
                  <th class="column-1" style="width:40%;">PySpark Timestamp Function Signature</th>
                  <th class="column-2" style="width:60%;">Timestamp Function Description</th>
                </tr>
              </thead>
              <tbody>
                <tr class="row-2 even">
                  <td class="column-1"><a href="#current_timestamp">current_timestamp ()</a></td>
                  <td class="column-2">Returns the current timestamp as a timestamp column</td>
                </tr>
                <tr class="row-3 odd">
                  <td class="column-1"><a href="#hour-minute-second">hour(column)</a></td>
                  <td class="column-2">Extracts the hours as an integer from a given date/timestamp/string.</td>
                </tr>
                <tr class="row-4 even">
                  <td class="column-1"><a href="#hour-minute-second">minute(column)</a></td>
                  <td class="column-2">Extracts the minutes as an integer from a given date/timestamp/string.</td>
                </tr>
                <tr class="row-5 odd">
                  <td class="column-1"><a href="#hour-minute-second">second(column)</a></td>
                  <td class="column-2">Extracts the seconds as an integer from a given date/timestamp/string.</td>
                </tr>
                <tr class="row-6 even">
                  <td class="column-1"><a href="#to_timestamp">to_timestamp(column)</a></td>
                  <td class="column-2">Converts to a timestamp by casting rules to `TimestampType`.</td>
                </tr>
                <tr class="row-7 odd">
                  <td class="column-1"><a href="#to_timestamp">to_timestamp(column, fmt)</a> </td>
                  <td class="column-2">Converts time string with the given pattern to timestamp.</td>
                </tr>
              </tbody>
            </table>

            <h3 id="sql-date-time">Date and Timestamp Window Functions</h3>
            Below are PySpark Data and Timestamp window functions.<br>
            <table id="tablepress-47" class="tablepress tablepress-id-47">
              <thead>
                <tr class="row-1 odd">
                  <th class="column-1" style="width:40%;">Date &amp; Time Window Function Syntax</th>
                  <th class="column-2" style="width:60%;">Date &amp; Time Window Function Description</th>
                </tr>
              </thead>
              <tbody>
                <tr class="row-2 even">
                  <td class="column-1">window(timeColumn: Column, windowDuration: String,<br />
                    slideDuration: String, startTime: String): Column</td>
                  <td class="column-2">Bucketize rows into one or more time windows given a timestamp specifying column. Window starts are inclusive but the window ends are exclusive, e.g. 12:05 will be in the window [12:05,12:10) but not in [12:00,12:05). Windows can support microsecond precision. Windows in the order of months are not supported.</td>
                </tr>
                <tr class="row-3 odd">
                  <td class="column-1">window(timeColumn: Column, windowDuration: String, slideDuration: String): Column</td>
                  <td class="column-2">Bucketize rows into one or more time windows given a timestamp specifying column. Window starts are inclusive but the window ends are exclusive, e.g. 12:05 will be in the window [12:05,12:10) but not in [12:00,12:05). Windows can support microsecond precision. Windows in the order of months are not supported. The windows start beginning at 1970-01-01 00:00:00 UTC</td>
                </tr>
                <tr class="row-4 even">
                  <td class="column-1">window(timeColumn: Column, windowDuration: String): Column </td>
                  <td class="column-2">Generates tumbling time windows given a timestamp specifying column. Window starts are inclusive but the window ends are exclusive, e.g. 12:05 will be in the window [12:05,12:10) but not in [12:00,12:05). Windows can support microsecond precision. Windows in the order of months are not supported. The windows start beginning at 1970-01-01 00:00:00 UTC.</td>
                </tr>
              </tbody>
            </table>

            <h3>PySpark SQL Date and Timestamp Functions Examples</h3>
            Following are the most used <strong>PySpark S</strong>QL <strong>Date and Timestamp Functions</strong> with examples, you can use these on DataFrame and SQL expressions.<br>
            <code class="language-python">
              <pre>
from pyspark.sql import SparkSession
from pyspark.sql.functions import *

# Create SparkSession
spark = SparkSession.builder \
            .appName(&#039;SparkByExamples.com&#039;) \
            .getOrCreate()
data=[[&quot;1&quot;,&quot;2020-02-01&quot;],[&quot;2&quot;,&quot;2019-03-01&quot;],[&quot;3&quot;,&quot;2021-03-01&quot;]]
df=spark.createDataFrame(data,[&quot;id&quot;,&quot;input&quot;])
df.show()

#Result
+---+----------+
| id|input     |
+---+----------+
|  1|2020-02-01|
|  2|2019-03-01|
|  3|2021-03-01|
+---+----------+
</pre>
            </code>
            <h3 id="current_date">current_date()</h3>
            Use current_date() to get the current system date. By default, the data will be returned in <code>yyyy-dd-mm</code> format.<br>
            <code class="language-python">
              <pre>
#current_date()
df.select(current_date().alias(&quot;current_date&quot;)
  ).show(1)

#Result
+------------+
|current_date|
+------------+
|  2021-02-22|
+------------+
</pre>
            </code>
            <h3 id="date_format">date_format()</h3>
            The below example uses <code>date_format()</code> to parses the date and converts from <code>yyyy-dd-mm</code> to <code>MM-dd-yyyy</code> format.<br>
            <code class="language-python">
              <pre>
#date_format()
df.select(col(&quot;input&quot;), 
    date_format(col(&quot;input&quot;), &quot;MM-dd-yyyy&quot;).alias(&quot;date_format&quot;) 
  ).show()

#Result
+----------+-----------+
|input     |date_format|
+----------+-----------+
|2020-02-01| 02-01-2020|
|2019-03-01| 03-01-2019|
|2021-03-01| 03-01-2021|
+----------+-----------+
</pre>
            </code>
            <h3 id="to_date">to_date()</h3>
            Below example converts string in date format <code>yyyy-MM-dd</code> to a DateType <code>yyyy-MM-dd</code> using <code>to_date()</code>. You can also use this to convert into any specific format. PySpark supports all patterns supports on Java <a href="https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/time/format/DateTimeFormatter.html">DateTimeFormatter</a>.<br>
            <code class="language-python">
              <pre>
#to_date()
df.select(col(&quot;input&quot;), 
    to_date(col(&quot;input&quot;), &quot;yyy-MM-dd&quot;).alias(&quot;to_date&quot;) 
  ).show()

#Result
+----------+----------+
|     input|   to_date|
+----------+----------+
|2020-02-01|2020-02-01|
|2019-03-01|2019-03-01|
|2021-03-01|2021-03-01|
+----------+----------+
</pre>
            </code>
            <h3 id="datediff">datediff()</h3>
            The below example returns the difference between two dates using <code>datediff()</code>.<br>
            <code class="language-python">
              <pre>
#datediff()
df.select(col(&quot;input&quot;), 
    datediff(current_date(),col(&quot;input&quot;)).alias(&quot;datediff&quot;)  
  ).show()

#Result
+----------+--------+
|     input|datediff|
+----------+--------+
|2020-02-01|     387|
|2019-03-01|     724|
|2021-03-01|      -7|
+----------+--------+
</pre>
            </code>
            <h3 id="months_between">months_between()</h3>
            The below example returns the months between two dates using <code>months_between()</code>.<br>
            <code class="language-python">
              <pre>
#months_between()
df.select(col(&quot;input&quot;), 
    months_between(current_date(),col(&quot;input&quot;)).alias(&quot;months_between&quot;)  
  ).show()

#Result
+----------+--------------+
|     input|months_between|
+----------+--------------+
|2020-02-01|   12.67741935|
|2019-03-01|   23.67741935|
|2021-03-01|   -0.32258065|
+----------+--------------+
</pre>
            </code>
            <h3 id="trunc">trunc()</h3>
            The below example truncates the date at a specified unit using <code>trunc()</code>.<br>
            <code class="language-python">
              <pre>
#trunc()
df.select(col(&quot;input&quot;), 
    trunc(col(&quot;input&quot;),&quot;Month&quot;).alias(&quot;Month_Trunc&quot;), 
    trunc(col(&quot;input&quot;),&quot;Year&quot;).alias(&quot;Month_Year&quot;), 
    trunc(col(&quot;input&quot;),&quot;Month&quot;).alias(&quot;Month_Trunc&quot;)
   ).show()

#Result
+----------+-----------+----------+-----------+
|     input|Month_Trunc|Month_Year|Month_Trunc|
+----------+-----------+----------+-----------+
|2020-02-01| 2020-02-01|2020-01-01| 2020-02-01|
|2019-03-01| 2019-03-01|2019-01-01| 2019-03-01|
|2021-03-01| 2021-03-01|2021-01-01| 2021-03-01|
+----------+-----------+----------+-----------+
</pre>
            </code>
            <h3 id="add_months">add_months() , date_add(), date_sub()</h3>
            Here we are adding and subtracting date and month from a given input.<br>
            <code class="language-python">
              <pre>
#add_months() , date_add(), date_sub()
df.select(col(&quot;input&quot;), 
    add_months(col(&quot;input&quot;),3).alias(&quot;add_months&quot;), 
    add_months(col(&quot;input&quot;),-3).alias(&quot;sub_months&quot;), 
    date_add(col(&quot;input&quot;),4).alias(&quot;date_add&quot;), 
    date_sub(col(&quot;input&quot;),4).alias(&quot;date_sub&quot;) 
  ).show()

#Result
+----------+----------+----------+----------+----------+
|     input|add_months|sub_months|  date_add|  date_sub|
+----------+----------+----------+----------+----------+
|2020-02-01|2020-05-01|2019-11-01|2020-02-05|2020-01-28|
|2019-03-01|2019-06-01|2018-12-01|2019-03-05|2019-02-25|
|2021-03-01|2021-06-01|2020-12-01|2021-03-05|2021-02-25|
+----------+----------+----------+----------+----------+
</pre>
            </code>
            <h3 id="year">year(), month(), month(),next_day(), weekofyear() </h3>
            <code class="language-python">
              <pre>
df.select(col(&quot;input&quot;), 
     year(col(&quot;input&quot;)).alias(&quot;year&quot;), 
     month(col(&quot;input&quot;)).alias(&quot;month&quot;), 
     next_day(col(&quot;input&quot;),&quot;Sunday&quot;).alias(&quot;next_day&quot;), 
     weekofyear(col(&quot;input&quot;)).alias(&quot;weekofyear&quot;) 
  ).show()

#Result
+----------+----+-----+----------+----------+
|     input|year|month|  next_day|weekofyear|
+----------+----+-----+----------+----------+
|2020-02-01|2020|    2|2020-02-02|         5|
|2019-03-01|2019|    3|2019-03-03|         9|
|2021-03-01|2021|    3|2021-03-07|         9|
+----------+----+-----+----------+----------+
</pre>
            </code>
            <h3>dayofweek(), dayofmonth(), dayofyear()</h3>
            <code class="language-python">
              <pre>
df.select(col(&quot;input&quot;),  
     dayofweek(col(&quot;input&quot;)).alias(&quot;dayofweek&quot;), 
     dayofmonth(col(&quot;input&quot;)).alias(&quot;dayofmonth&quot;), 
     dayofyear(col(&quot;input&quot;)).alias(&quot;dayofyear&quot;), 
  ).show()

#Result
+----------+---------+----------+---------+
|     input|dayofweek|dayofmonth|dayofyear|
+----------+---------+----------+---------+
|2020-02-01|        7|         1|       32|
|2019-03-01|        6|         1|       60|
|2021-03-01|        2|         1|       60|
+----------+---------+----------+---------+
</pre>
            </code>
            <h3 id="current_timestamp">current_timestamp() </h3>
            Following are the Timestamp Functions that you can use on SQL and on DataFrame. Let&#8217;s learn these with examples.<br>
            Let&#8217;s create a test data.<br>
            <code class="language-python">
              <pre>
data=[[&quot;1&quot;,&quot;02-01-2020 11 01 19 06&quot;],[&quot;2&quot;,&quot;03-01-2019 12 01 19 406&quot;],[&quot;3&quot;,&quot;03-01-2021 12 01 19 406&quot;]]
df2=spark.createDataFrame(data,[&quot;id&quot;,&quot;input&quot;])
df2.show(truncate=False)

#Result
+---+-----------------------+
|id |input                  |
+---+-----------------------+
|1  |02-01-2020 11 01 19 06 |
|2  |03-01-2019 12 01 19 406|
|3  |03-01-2021 12 01 19 406|
+---+-----------------------+
</pre>
            </code>
            Below example returns the current timestamp in spark default format <strong>yyyy-MM-dd HH:mm:ss</strong><br>
            <code class="language-python">
              <pre>
#current_timestamp()
df2.select(current_timestamp().alias(&quot;current_timestamp&quot;)
  ).show(1,truncate=False)

#Result
+-----------------------+
|current_timestamp      |
+-----------------------+
|2021-02-22 20:13:29.673|
+-----------------------+
</pre>
            </code>
            <h3 id="to_timestamp">to_timestamp()</h3>
            Converts string timestamp to Timestamp type format.<br>
            <code class="language-python">
              <pre>
#to_timestamp()
df2.select(col(&quot;input&quot;), 
    to_timestamp(col(&quot;input&quot;), &quot;MM-dd-yyyy HH mm ss SSS&quot;).alias(&quot;to_timestamp&quot;) 
  ).show(truncate=False)

#Result
+-----------------------+-----------------------+
|input                  |to_timestamp           |
+-----------------------+-----------------------+
|02-01-2020 11 01 19 06 |2020-02-01 11:01:19.06 |
|03-01-2019 12 01 19 406|2019-03-01 12:01:19.406|
|03-01-2021 12 01 19 406|2021-03-01 12:01:19.406|
+-----------------------+-----------------------+
</pre>
            </code>
            <h3 id="hour-minute-second">hour(), Minute() and second()</h3>
            <code class="language-scala">
              <pre>
#hour, minute,second
data=[[&quot;1&quot;,&quot;2020-02-01 11:01:19.06&quot;],[&quot;2&quot;,&quot;2019-03-01 12:01:19.406&quot;],[&quot;3&quot;,&quot;2021-03-01 12:01:19.406&quot;]]
df3=spark.createDataFrame(data,[&quot;id&quot;,&quot;input&quot;])

df3.select(col(&quot;input&quot;), 
    hour(col(&quot;input&quot;)).alias(&quot;hour&quot;), 
    minute(col(&quot;input&quot;)).alias(&quot;minute&quot;),
    second(col(&quot;input&quot;)).alias(&quot;second&quot;) 
  ).show(truncate=False)

#Result
+-----------------------+----+------+------+
|input                  |hour|minute|second|
+-----------------------+----+------+------+
|2020-02-01 11:01:19.06 |11  |1     |19    |
|2019-03-01 12:01:19.406|12  |1     |19    |
|2021-03-01 12:01:19.406|12  |1     |19    |
+-----------------------+----+------+------+
</pre>
            </code>
            <h3>Conclusion:</h3>
            In this post, I&#8217;ve consolidated the complete list of Date and Timestamp Functions with a description and example of some commonly used.<br>

          </div>
        </div>
    </div>
    <?php require "../../../../../templates/footer_outer.php" ?>

  </div>

  <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
  <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script defer src="../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="https://www.nubeera.com/js/navmenu.js"></script>
  <script>
    function openNav() {
      var x = document.getElementById("side-panel-box");
      if (x.style.left == "0px") {
        x.style.left = "-25%";
        $('#side-panel-toggle').css("left", "101%");
        $('#content-box').css("marginRight", "12%");
        $('#content-box').css('marginLeft', '12%');
        $('#side-panel-toggle').html("<i class='fa fa-chevron-right' aria-hidden='true'></i>");
      } else {
        x.style.left = "0px";
        $('#side-panel-toggle').css("left", "80%");
        $('#content-box').css("marginRight", "");
        $('#content-box').css('marginLeft', '24%');
        $('#side-panel-toggle').html("<i class='fa fa-chevron-left' aria-hidden='true'></i>");
      }
    }
    var x = window.matchMedia("(max-width: 750px)");
    myFunction(x); // Call listener function at run time
    x.addListener(myFunction);

    function myFunction(x) {
      if (x.matches) { // If media query matches
        $('#modal-sidepanel').attr('class', 'modal');
      } else {
        $('#modal-sidepanel').attr('class', '');
      }
    }
  </script>
</body>

</html>