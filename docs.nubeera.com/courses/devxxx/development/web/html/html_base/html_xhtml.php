<!DOCTYPE html>
<html lang="en">

<head>
    <title>NubeEra Basic HTML</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NubeEra Basic HTML">

    <link rel="icon" type="image/png" href="https://nubeera.com/img/logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap CSS -->

    <link id="theme-style" rel="stylesheet" href="htmlcss.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.processed.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.footer.css">
    <link rel="stylesheet" href="https://www.nubeera.com/styles/style.nav1.css">
    <link rel="stylesheet" href="../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../templates/navbar.php'; ?>

    <div id="modal-sidepanel">

        <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
            <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
            <div class="col-md-12 side-panel">
                <strong class="px-2" style="font-size: 1.125rem;">Basic HTML</strong><br><br>
                <ul>
                    <li><a href="index.php">HTML Introduction</a></li>
                    <li><a href="html_editors.php">HTML Editors</a></li>
                    <li><a href="html_basic.php">HTML Basic Examples</a></li>
                    <li><a href="html_elements.php">HTML Elements</a></li>
                    <li><a href="html_attributes.php">HTML Attributes</a></li>
                    <li><a href="html_headings.php">HTML Headings</a></li>
                    <li><a href="html_paragraphs.php">HTML Paragraphs</a></li>
                    <li><a href="html_styles.php">HTML Styles</a></li>
                    <li><a href="html_formatting.php">HTML Text Formatting</a></li>
                    <li><a href="html_quotation_elements.php">HTML Quotation and Citation Elements</a></li>
                    <li><a href="html_comments.php">HTML Comments</a></li>
                    <li><a href="html_links.php">HTML Links</a></li>
                    <li><a href="html_images.php">HTML Images</a></li>
                    <li><a href="html_favicon.php">HTML Favicon</a></li>
                    <li><a href="html_tables.php">HTML Tables</a></li>
                    <li><a href="html_lists.php">HTML Lists</a></li>
                    <li><a href="html_blocks.php">HTML Block and Inline Elements</a></li>
                    <li><a href="html_classes.php">HTML Classes</a></li>
                    <li><a href="html_id.php">HTML id Attribute</a></li>
                    <li><a href="html_iframe.php">HTML Iframes</a></li>
                    <li><a href="html_filepaths.php">HTML File Paths</a></li>
                    <li><a href="html_head.php">HTML Head</a></li>
                    <li><a href="html_layout.php">HTML Layout</a></li>
                    <li><a href="html_computercode_elements.php">HTML Computer Code Elements</a></li>
                    <li><a href="html5_semantic_elements.php">HTML Semantic Elements</a></li>
                    <li><a href="html_xhtml.php">HTML Versus XHTML</a></li>
                    <li><a href="html_forms.php">HTML Forms</a></li>
                    <li><a href="html_forms_attributes.php">HTML Form Attributes</a></li>
                    <li><a href="html_form_elements.php">HTML Form Elements</a></li>
                    <li><a href="html_form_input_types.php">HTML Input Types</a></li>
                    <li><a href="html_form_attributes.php">HTML Input Attributes</a></li>
                    <li><a href="html_form_attributes_form..php">HTML Input form Attributes</a></li>
                </ul>
            </div>
        </div>

    </div>
    <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

    <div class="content-box" id="content-box">
        <div class="body-content">
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Versus XHTML</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>XHTML is a stricter, more XML-based version of HTML.
                    <hr>

                    <h3 id="What is XHTML?" class="heading-anchor">What is XHTML?</h3>
                    <ul>
                        <li>XHTML stands for E<strong>X</strong>tensible <strong>H</strong>yper<strong>T</strong>ext
                            <strong>M</strong>arkup <strong>L</strong>anguage
                        </li>
                        <li>XHTML is a stricter, more XML-based version of HTML</li>
                        <li>XHTML is HTML defined as an XML application</li>
                        <li>XHTML is supported by all major browsers</li>
                    </ul>
                    <hr>
                    <h3 id="Why XHTML?" class="heading-anchor">Why XHTML?</h3>
                    XML is a markup language where all documents must be marked up correctly (be &quot;well-formed&quot;).<br>
                    XHTML was developed to make HTML more extensible and flexible to work with
                    other data formats (such as XML). In addition, browsers ignore errors in HTML
                    pages, and try to display the website even if it has some errors in the markup.
                    So XHTML comes with a much stricter error handling.
                    <hr>


                    <h3 id="The Most Important Differences from HTML" class="heading-anchor">The Most Important Differences from HTML</h3>
                    <ul>
                        <li>&lt;!DOCTYPE&gt; is <strong>mandatory</strong></li>
                        <li>The xmlns attribute in &lt;html&gt; is <strong>mandatory</strong></li>
                        <li>&lt;html&gt;, &lt;head&gt;, &lt;title&gt;, and &lt;body&gt; are <strong>mandatory</strong></li>
                        <li>Elements must always be <b> properly nested</b></li>
                        <li>Elements must always be <b>closed</b></li>
                        <li>Elements must always be in <b>lowercase</b></li>
                        <li>Attribute names must always be in <b>lowercase</b></li>
                        <li>Attribute values must always be <b>quoted</b></li>
                        <li>Attribute minimization is <b>forbidden</b></li>
                    </ul>
                    <hr>

                    <h3 id="XHTML - &lt;!DOCTYPE ....&gt; Is Mandatory" class="heading-anchor">XHTML - &lt;!DOCTYPE ....&gt; Is Mandatory</h3>
                    An XHTML document must have an XHTML &lt;!DOCTYPE&gt; declaration.<br>
                    The &lt;html&gt;, &lt;head&gt;, &lt;title&gt;, and &lt;body&gt; elements must also be present, and the xmlns attribute in &lt;html&gt;
                    must specify the xml namespace for the document.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Here is an XHTML document with a minimum of required tags:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.1//EN&quot;<br>
                            &quot;http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd&quot;&gt;<br>&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;<br>
                            &lt;head&gt;<br>
                            &nbsp;
                            &lt;title&gt;Title of document&lt;/title&gt;<br>
                            &lt;/head&gt;<br>
                            &lt;body&gt;<br><br>&nbsp; <em>some content here...</em> <br>
                            <br>&lt;/body&gt;<br>
                            &lt;/html&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="XHTML Elements Must be Properly Nested" class="heading-anchor">XHTML Elements Must be Properly Nested</h3>
                    In XHTML, elements must always be properly nested within each other, like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Correct</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;b&gt;&lt;i&gt;Some
                            text&lt;/i&gt;&lt;/b&gt;
                        </div>
                        <h3>Wrong</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;b&gt;&lt;i&gt;Some
                            text&lt;/b&gt;&lt;/i&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="XHTML Elements Must Always be Closed" class="heading-anchor">XHTML Elements Must Always be Closed</h3>
                    In XHTML, elements must always be closed, like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Correct</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;This is a paragraph&lt;/p&gt;<br>
                            &lt;p&gt;This is another paragraph&lt;/p&gt;
                        </div>
                        <h3>Wrong</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;p&gt;This is a paragraph<br>
                            &lt;p&gt;This is another paragraph
                        </div>
                    </div>
                    <hr>

                    <h3 id="XHTML Empty Elements Must Always be Closed" class="heading-anchor">XHTML Empty Elements Must Always be Closed</h3>
                    In XHTML, empty elements must always be closed, like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Correct</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            A break: &lt;br /&gt;<br>
                            A horizontal rule: &lt;hr /&gt;<br>
                            An image: &lt;img src=&quot;happy.gif&quot; alt=&quot;Happy face&quot; /&gt;
                        </div>
                        <h3>Wrong</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            A break: &lt;br&gt;<br>
                            A horizontal rule: &lt;hr&gt;<br>
                            An image: &lt;img src=&quot;happy.gif&quot; alt=&quot;Happy face&quot;&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="XHTML Elements Must be in Lowercase" class="heading-anchor">XHTML Elements Must be in Lowercase</h3>
                    In XHTML, element names must always be in lowercase, like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Correct</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;body&gt;<br>
                            &lt;p&gt;This is a paragraph&lt;/p&gt;<br>
                            &lt;/body&gt;
                        </div>
                        <h3>Wrong</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;BODY&gt;<br>
                            &lt;P&gt;This is a paragraph&lt;/P&gt;<br>
                            &lt;/BODY&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="XHTML Attribute Names Must be in Lowercase" class="heading-anchor">XHTML Attribute Names Must be in Lowercase</h3>
                    In XHTML, attribute names must always be in lowercase, like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Correct</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;https://www.w3schools.com/html/&quot;&gt;Visit our HTML tutorial&lt;/a&gt;
                        </div>
                        <h3>Wrong</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a HREF=&quot;https://www.w3schools.com/html/&quot;&gt;Visit our HTML tutorial&lt;/a&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="XHTML Attribute Values Must be Quoted" class="heading-anchor">XHTML Attribute Values Must be Quoted</h3>
                    In XHTML, attribute values must always be quoted, like this:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Correct</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=&quot;https://www.w3schools.com/html/&quot;&gt;Visit our HTML tutorial&lt;/a&gt;
                        </div>
                        <h3>Wrong</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;a href=https://www.w3schools.com/html/&gt;Visit our HTML tutorial&lt;/a&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="XHTML Attribute Minimization is Forbidden" class="heading-anchor">XHTML Attribute Minimization is Forbidden</h3>
                    In XHTML, attribute minimization is forbidden:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Correct</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;input type=&quot;checkbox&quot; name=&quot;vehicle&quot; value=&quot;car&quot; checked=&quot;checked&quot; /&gt;<br>&lt;input type=&quot;text&quot; name=&quot;lastname&quot; disabled=&quot;disabled&quot; /&gt;
                        </div>
                        <h3>Wrong</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
                            &lt;input type=&quot;checkbox&quot; name=&quot;vehicle&quot; value=&quot;car&quot; checked /&gt;<br>&lt;input type=&quot;text&quot; name=&quot;lastname&quot; disabled /&gt;
                        </div>
                    </div>
                    <hr>

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