<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Data Factory in Azure</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Data Factory in Azure">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="../../../../../../assets/css/theme.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>


    <div id="modal-sidepanel">
        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>

            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Data Factory</strong><br><br>
                <ul>
                    <li><a href="index.php">tutorial copy data tool</a></li>
                    <li><a href="introduction.php">Introduction</a></li>
                    <li><a href="tutorial_bulk_copy_portal.php">tutorial bulk copy portal</a></li>
                    <li><a href="what_are mapping_data_flows.php">what are mapping data flows</a></li>
                    <li><a href="build_expressions_in_mapping_data_flow.php">build expressions in mapping data flow</a></li>
                    <li><a href="mapping_data_flow_transformation_overview.php">mapping data flow transformation overview</a></li>
                    <li><a href="transform_data_using_mapping_data_flows.php">transform data using mapping data flows</a></li>
                </ul>
            </div>
        </div>
    </div>

    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">Azure Data Factory</h1>
            <ol class="breadcrumb mx-5 mt-3 px-0">
                <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="../../../../">Cloud</a></li>
                <li class="breadcrumb-item"><a href="../../../">Microsoft Azure</a></li>
                <li class="breadcrumb-item"><a href="../../">Contents</a></li>
                <li class="breadcrumb-item active">Data Factory</li>
            </ol>
            <div class="px-5 pb-5 pt-0 body-text">

                <h2 id="build-expressions-in-mapping-data-flow">Build expressions in mapping data flow</h2>
                <nav id="center-doc-outline" class="doc-outline is-hidden-desktop" data-bi-name="intopic toc" role="navigation" aria-label="Article Outline">
                    <h3>In this article</h3>
                    <ol>
                        <li><a href="#open-expression-builder">Open Expression Builder</a></li>
                        <li><a href="#expression-elements">Expression elements</a></li>
                        <li><a href="#preview-expression-results">Preview expression results</a></li>
                        <li><a href="#string-interpolation">String interpolation</a></li>
                        <li><a href="#commenting-expressions">Commenting expressions</a></li>
                        <li><a href="#regular-expressions">Regular expressions</a></li>
                        <li><a href="#keyboard-shortcuts">Keyboard shortcuts</a></li>
                        <li><a href="#commonly-used-expressions">Commonly used expressions</a></li>
                        <li><a href="#next-steps">Next steps</a></li>
                    </ol>
                </nav>



                <!-- <content> -->
                <strong>APPLIES TO:</strong>
                Azure Data Factory and
                Azure Synapse Analytics<br><br>
                In mapping data flow, many transformation properties are entered as expressions. These expressions are composed of column values, parameters, functions, operators, and literals that evaluate to a Spark data type at run time. Mapping data flows has a dedicated experience aimed to aid you in building these expressions called the <strong>Expression Builder</strong>. Utilizing IntelliSense code completion for highlighting, syntax checking, and autocompleting, the expression builder is designed to make building data flows easy. This article explains how to use the expression builder to effectively build your business logic.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/expresion-builder.png" alt="Expression Builder" data-linktype="relative-path"><br><br>
                </span>

                <h3 id="open-expression-builder" class="heading-anchor"><a class="anchor-link docon docon-link" href="#open-expression-builder" aria-labelledby="open-expression-builder"></a>Open Expression Builder</h3>
                There are multiple entry points to opening the expression builder. These are all dependent on the specific context of the data flow transformation. The most common use case is in transformations like derived column and aggregate where users create or update columns using the data flow expression language. The expression builder can be opened by selecting <strong>Open expression builder</strong> above the list of columns. You can also click on a column context and open the expression builder directly to that expression.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/open-expression-builder-derive.png" alt="Open Expression Builder derive" data-linktype="relative-path"><br><br>
                </span>

                In some transformations like filter, clicking on a blue expression text box will open the expression builder.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/expressionbox.png" alt="Blue expression box" data-linktype="relative-path"><br><br>
                </span>

                When you reference columns in a matching or group-by condition, an expression can extract values from columns. To create an expression, select <strong>Computed column</strong>.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/computedcolumn.png" alt="Computed column option" data-linktype="relative-path"><br><br>
                </span>

                In cases where an expression or a literal value are valid inputs, select <strong>Add dynamic content</strong> to build an expression that evaluates to a literal value.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/add-dynamic-content.png" alt="Add dynamic content option" data-linktype="relative-path"><br><br>
                </span>

                <h3 id="expression-elements" class="heading-anchor"><a class="anchor-link docon docon-link" href="#expression-elements" aria-labelledby="expression-elements"></a>Expression elements</h3>
                In mapping data flows, expressions can be composed of column values, parameters, functions, local variables, operators, and literals. These expressions must evaluate to a Spark data type such as string, boolean, or integer.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/expression-elements.png" alt="Expression elements" data-linktype="relative-path"><br><br>
                </span>

                <h3 id="functions" class="heading-anchor"><a class="anchor-link docon docon-link" href="#functions" aria-labelledby="functions"></a>Functions</h3>
                Mapping data flows has built-in functions and operators that can be used in expressions.
                <h4 id="address-array-indexes" class="heading-anchor"><a class="anchor-link docon docon-link" href="#address-array-indexes" aria-labelledby="address-array-indexes"></a>Address array indexes</h4>
                When dealing with columns or functions that return array types, use brackets ([]) to access a specific element. If the index doesn't exist, the expression evaluates into NULL.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/expression-array.png" alt="Expression Builder array" data-linktype="relative-path"><br><br>
                </span>

                <div class="alert is-primary">
                    <span class="docon docon-status-info-outline" aria-hidden="true"></span> Important
                    In mapping data flows, arrays are one-based meaning the first element is referenced by index one. For example, myArray[1] will access the first element of an array called 'myArray'.
                </div>
                <h3 id="input-schema" class="heading-anchor"><a class="anchor-link docon docon-link" href="#input-schema" aria-labelledby="input-schema"></a>Input schema</h3>
                If your data flow uses a defined schema in any of its sources, you can reference a column by name in many expressions. If you are utilizing schema drift, you can reference columns explicitly using the <code>byName()</code> or <code>byNames()</code> functions or match using column patterns.
                <h4 id="column-names-with-special-characters" class="heading-anchor"><a class="anchor-link docon docon-link" href="#column-names-with-special-characters" aria-labelledby="column-names-with-special-characters"></a>Column names with special characters</h4>
                When you have column names that include special characters or spaces, surround the name with curly braces to reference them in an expression.
                <code>{[dbo].this_is my complex name$$$}</code>
                <h3 id="parameters" class="heading-anchor"><a class="anchor-link docon docon-link" href="#parameters" aria-labelledby="parameters"></a>Parameters</h3>
                Parameters are values that are passed into a data flow at run time from a pipeline. To reference a parameter, either click on the parameter from the <strong>Expression elements</strong> view or reference it with a dollar sign in front of its name. For example, a parameter called parameter1 would be referenced by <code>$parameter1</code>.
                <h3 id="cached-lookup" class="heading-anchor"><a class="anchor-link docon docon-link" href="#cached-lookup" aria-labelledby="cached-lookup"></a>Cached lookup</h3>
                A cached lookup allows you to do an inline lookup of the output of a cached sink. There are two functions available to use on each sink, <code>lookup()</code> and <code>outputs()</code>. The syntax to reference these functions is <code>cacheSinkName#functionName()</code>.<br><br>
                <code>lookup()</code> takes in the matching columns in the current transformation as parameters and returns a complex column equal to the row matching the key columns in the cache sink. The complex column returned contains a subcolumn for each column mapped in the cache sink. For example, if you had an error code cache sink <code>errorCodeCache</code> that had a key column matching on the code and a column called <code>Message</code>. Calling <code>errorCodeCache#lookup(errorCode).Message</code> would return the message corresponding with the code passed in.<br><br>
                <code>outputs()</code> takes no parameters and returns the entire cache sink as an array of complex columns. This can't be called if key columns are specified in the sink and should only be used if there is a small number of rows in the cache sink. A common use case is appending the max value of an incrementing key. If a cached single aggregated row <code>CacheMaxKey</code> contains a column <code>MaxKey</code>, you can reference the first value by calling <code>CacheMaxKey#outputs()[1].MaxKey</code>.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/cached-lookup-example.png" alt="Cached lookup" data-linktype="relative-path"><br><br>
                </span>

                <h3 id="locals" class="heading-anchor"><a class="anchor-link docon docon-link" href="#locals" aria-labelledby="locals"></a>Locals</h3>
                If you are sharing logic across multiple columns or want to compartmentalize your logic, you can create a local variable. A local is a set of logic that doesn't get propagated downstream to the following transformation. Locals can be created within the expression builder by going to <strong>Expression elements</strong> and selecting <strong>Locals</strong>. Create a new one by selecting <strong>Create new</strong>.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/create-local.png" alt="Create local" data-linktype="relative-path"><br><br>
                </span>

                Locals can reference any expression element including functions, input schema, parameters, and other locals. When referencing other locals, order does matter as the referenced local needs to be "above" the current one.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/create-local-2.png" alt="Create local 2" data-linktype="relative-path"><br><br>
                </span>

                To reference a local in a transformation, either click on the local from the <strong>Expression elements</strong> view or reference it with a colon in front of its name. For example, a local called local1 would be referenced by <code>:local1</code>. To edit a local definition, hover over it in the expression elements view and click on the pencil icon.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/using-locals.png" alt="Using locals" data-linktype="relative-path"><br><br>
                </span>

                <h3 id="preview-expression-results" class="heading-anchor"><a class="anchor-link docon docon-link" href="#preview-expression-results" aria-labelledby="preview-expression-results"></a>Preview expression results</h3>
                If debug mode is switched on, you can interactively use the debug cluster to preview what your expression evaluates to. Select <strong>Refresh</strong> next to data preview to update the results of the data preview. You can see the output of each row given the input columns.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/preview-expression.png" alt="In-progress preview" data-linktype="relative-path"><br><br>
                </span>

                <h3 id="string-interpolation" class="heading-anchor"><a class="anchor-link docon docon-link" href="#string-interpolation" aria-labelledby="string-interpolation"></a>String interpolation</h3>
                When creating long strings that use expression elements, use string interpolation to easily build up complex string logic. String interpolation avoids extensive use of string concatenation when parameters are included in query strings. Use double quotation marks to enclose literal string text together with expressions. You can include expression functions, columns, and parameters. To use expression syntax, enclose it in curly braces,
                Some examples of string interpolation:
                <ul>
                    <li>
                        <code>"My favorite movie is {iif(instr(title,', The')&gt;0,"The {split(title,', The')[1]}",title)}"</code>
                    </li>
                    <li>
                        <code>"select * from {$tablename} where orderyear &gt; {$year}"</code>
                    </li>
                    <li>
                        <code>"Total cost with sales tax is {round(totalcost * 1.08,2)}"</code>
                    </li>
                    <li>
                        <code>"{:playerName} is a {:playerRating} player"</code>
                    </li>
                </ul>
                <div class="alert is-info">
                    <span class="docon docon-status-error-outline" aria-hidden="true"></span> Note:
                    When using string interpolation syntax in SQL source queries, the query string must be on one single line, without '/n'.
                </div>
                <h3 id="commenting-expressions" class="heading-anchor"><a class="anchor-link docon docon-link" href="#commenting-expressions" aria-labelledby="commenting-expressions"></a>Commenting expressions</h3>
                Add comments to your expressions by using single-line and multiline comment syntax.
                The following examples are valid comments:
                <ul>
                    <li>
                        <code>/* This is my comment */</code>
                    </li>
                    <li>
                        <code>/* This is a</code>
                    </li>
                    <li>
                        <code>multi-line comment */</code>
                    </li>
                </ul>
                If you put a comment at the top of your expression, it appears in the transformation text box to document your transformation expressions.
                <span class="mx-imgBorder">
                    <br><br><img src="https://docs.microsoft.com/en-in/azure/data-factory/media/data-flow/comment-expression.png" alt="Comment in the transformation text box" data-linktype="relative-path"><br><br>
                </span>

                <h3 id="regular-expressions" class="heading-anchor"><a class="anchor-link docon docon-link" href="#regular-expressions" aria-labelledby="regular-expressions"></a>Regular expressions</h3>
                Many expression language functions use regular expression syntax. When you use regular expression functions, Expression Builder tries to interpret a backslash (\) as an escape character sequence. When you use backslashes in your regular expression, either enclose the entire regex in backticks (`) or use a double backslash.
                An example that uses backticks:
                <pre tabindex="0" class="has-inner-focus"><blockquote data-author-content="regex_replace('100 and 200', `(\d+)`, 'digits')
">regex_replace('100 and 200', `(\d+)`, 'digits')
</blockquote></pre>
                An example that uses double slashes:
                <pre tabindex="0" class="has-inner-focus"><blockquote data-author-content="regex_replace('100 and 200', '(\\d+)', 'digits')
">regex_replace('100 and 200', '(\\d+)', 'digits')
</blockquote></pre>
                <h3 id="keyboard-shortcuts" class="heading-anchor"><a class="anchor-link docon docon-link" href="#keyboard-shortcuts" aria-labelledby="keyboard-shortcuts"></a>Keyboard shortcuts</h3>
                Below are a list of shortcuts available in the expression builder. Most intellisense shortcuts are available when creating expressions.
                <ul>
                    <li>Ctrl+K Ctrl+C: Comment entire line.</li>
                    <li>Ctrl+K Ctrl+U: Uncomment.</li>
                    <li>F1: Provide editor help commands.</li>
                    <li>Alt+Down arrow key: Move down current line.</li>
                    <li>Alt+Up arrow key: Move up current line.</li>
                    <li>Ctrl+Spacebar: Show context help.</li>
                </ul>
                <h3 id="commonly-used-expressions" class="heading-anchor"><a class="anchor-link docon docon-link" href="#commonly-used-expressions" aria-labelledby="commonly-used-expressions"></a>Commonly used expressions</h3>
                <h3 id="convert-to-dates-or-timestamps" class="heading-anchor"><a class="anchor-link docon docon-link" href="#convert-to-dates-or-timestamps" aria-labelledby="convert-to-dates-or-timestamps"></a>Convert to dates or timestamps</h3>
                To include string literals in your timestamp output, wrap your conversion in <code>toString()</code>.
                <code>toString(toTimestamp('12/31/2016T00:12:00', 'MM/dd/yyyy\'T\'HH:mm:ss'), 'MM/dd /yyyy\'T\'HH:mm:ss')</code>
                To convert milliseconds from epoch to a date or timestamp, use <code>toTimestamp(&lt;number of milliseconds&gt;)</code>. If time is coming in seconds, multiply by 1,000.
                <code>toTimestamp(1574127407*1000l)</code>
                The trailing "l" at the end of the previous expression signifies conversion to a long type as inline syntax.
                <h3 id="find-time-from-epoch-or-unix-time" class="heading-anchor"><a class="anchor-link docon docon-link" href="#find-time-from-epoch-or-unix-time" aria-labelledby="find-time-from-epoch-or-unix-time"></a>Find time from epoch or Unix Time</h3>
                toLong(
                currentTimestamp() -
                toTimestamp('1970-01-01 00:00:00.000', 'yyyy-MM-dd HH:mm:ss.SSS')
                ) * 1000l
                <h3 id="data-flow-time-evaluation" class="heading-anchor"><a class="anchor-link docon docon-link" href="#data-flow-time-evaluation" aria-labelledby="data-flow-time-evaluation"></a>Data flow time evaluation</h3>
                Dataflow processes till milliseconds. For <em>2018-07-31T20:00:00.2170000</em>, you will see <em>2018-07-31T20:00:00.217</em> in output.
                In the portal for the service, timestamp is being shown in the <strong>current browser setting</strong>, which can eliminate 217, but when you will run the data flow end to end, 217 (milliseconds part will be processed as well). You can use toString(myDateTimeColumn) as expression and see full precision data in preview. Process datetime as datetime rather than string for all practical purposes.

            </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php" ?>

    </div>

    <!-- <script type="text/javascript" src="lib/vanilla-tilt.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script defer src="../../../../../../assets/fontawesome/js/all.min.js"></script><!-- footer social icons -->
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