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
    <link rel="stylesheet" href="../../../../../../boto_topics.css">
</head>

<body>

    <!-- Navigation Bar -->
    <?php require '../../../../../../templates/navbar.php'; ?>

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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Forms</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>An HTML form is used to collect user input. The user input is most often sent to a server for processing.<br><br>


                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            <form action="action_page.php" target="_blank" method="post">
                                First name:
                                <input type="text" id="fname" name="fname" value="John"><br>
                                Last name:
                                <input type="text" id="lname" name="lname" value="Doe"><br>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <hr>

                    <h3 id="The &lt;form&gt; Element" class="heading-anchor">The &lt;form&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;form&gt;</code> element is used to create an HTML form for user input:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>
                            .<br>
                            <i>form elements</i><br>
                            .<br>
                            &lt;/form&gt;<br>
                        </div>
                    </div><br>
                    The <code class="w3-codespan">&lt;form&gt;</code> element is a container for different types of input elements,
                    such as: text fields, checkboxes, radio
                    buttons, submit buttons, etc.
                    <hr>

                    <h3 id="The &lt;input&gt; Element" class="heading-anchor">The &lt;input&gt; Element</h3>
                    The HTML <code class="w3-codespan">&lt;input&gt;</code> element is the most
                    used form element.<br>
                    An <code class="w3-codespan">&lt;input&gt;</code> element can be displayed in
                    many ways, depending on the <code class="w3-codespan">type</code>
                    attribute.<br>
                    Here are some examples:<br>
                    <table class="ws-table-all">
                        <tr>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>&lt;input type=&quot;text&quot;&gt;</td>
                            <td>Displays a single-line text input field</td>
                        </tr>
                        <tr>
                            <td>&lt;input type=&quot;radio&quot;&gt;</td>
                            <td>Displays a radio button (for selecting one of many choices)</td>
                        </tr>
                        <tr>
                            <td>&lt;input type=&quot;checkbox&quot;&gt;</td>
                            <td>Displays a checkbox (for selecting zero or more of many choices)</td>
                        </tr>
                        <tr>
                            <td>&lt;input type=&quot;submit&quot;&gt;</td>
                            <td>Displays a submit button (for submitting the form)</td>
                        </tr>
                        <tr>
                            <td>&lt;input type=&quot;button&quot;&gt;</td>
                            <td>Displays a clickable button</td>
                        </tr>
                    </table>
                    <hr>


                    <h3 id="Text Fields" class="heading-anchor">Text Fields</h3>
                    The <code class="w3-codespan">&lt;input type="text"&gt;</code> defines a single-line input field for
                    text input.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A form with input fields for text:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>
                            &nbsp; &lt;label for=&quot;fname&quot;&gt;First name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname"&gt;<br>&lt;/form&gt;
                        </div>
                    </div><br>
                    This is how the HTML code above will be displayed in a browser:<br>
                    <form>
                        First name:<br>
                        <input type="text" name="fname"><br>
                        Last name:<br>
                        <input type="text" name="lname">
                    </form>
                    <hr>

                    <h3 id="The &lt;label&gt; Element" class="heading-anchor">The &lt;label&gt; Element</h3>
                    Notice the use of the <code class="w3-codespan">&lt;label&gt;</code> element in the
                    example above.<br>
                    The <code class="w3-codespan">&lt;label&gt;</code> tag defines a label for many
                    form elements.<br>
                    The <code class="w3-codespan">&lt;label&gt;</code> element is useful for
                    screen-reader users, because the screen-reader will read out loud the label when
                    the user focus on the input element.<br>
                    The <code class="w3-codespan">&lt;label&gt;</code> element also help users who have
                    difficulty clicking on very small regions (such as radio buttons or checkboxes)
                    - because when the user clicks the text within the <code class="w3-codespan">&lt;label&gt;</code> element, it toggles
                    the radio button/checkbox.<br>
                    The <code class="w3-codespan">for</code> attribute of the <code class="w3-codespan">&lt;label&gt;</code> tag should
                    be equal to the <code class="w3-codespan">id</code> attribute of the <code class="w3-codespan">&lt;input&gt;</code>
                    element to bind them together.
                    <hr>

                    <h3 id="Radio Buttons" class="heading-anchor">Radio Buttons</h3>
                    The <code class="w3-codespan">&lt;input type="radio"&gt;</code> defines a radio button.<br>
                    Radio buttons let a user select ONE of a limited number of choices.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;p&gt;Choose your favorite Web language:&lt;/p&gt;<br><br>
                            &lt;form&gt;<br>&nbsp; &lt;input type=&quot;radio&quot; id=&quot;html&quot; name=&quot;fav_language&quot;
                            value=&quot;HTML&quot;&gt;<br>&nbsp; &lt;label for=&quot;html&quot;&gt;HTML&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;radio&quot; id=&quot;css&quot; name=&quot;fav_language&quot; value=&quot;CSS&quot;&gt;<br>&nbsp; &lt;label
                            for=&quot;css&quot;&gt;CSS&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;radio&quot; id=&quot;javascript&quot;
                            name=&quot;fav_language&quot; value=&quot;JavaScript&quot;&gt;<br>&nbsp; &lt;label for=&quot;javascript&quot;&gt;JavaScript&lt;/label&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    This is how the HTML code above will be displayed in a browser:<br>

                    Choose your favorite Web language:<br>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">HTML</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">CSS</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="javascript">JavaScript</label>
                    <hr>

                    <h3 id="Checkboxes" class="heading-anchor">Checkboxes</h3>
                    The <code class="w3-codespan">&lt;input type=&quot;checkbox&quot;&gt;</code> defines a <strong>checkbox</strong>.<br>
                    Checkboxes let a user select ZERO or MORE options of a limited number of choices.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A form with checkboxes:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form&gt;<br>&nbsp; &lt;input type=&quot;checkbox&quot; id=&quot;vehicle1&quot; name=&quot;vehicle1&quot; value=&quot;Bike&quot;&gt;<br>&nbsp;
                            &lt;label for=&quot;vehicle1&quot;&gt; I have a bike&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input
                            type=&quot;checkbox&quot; id=&quot;vehicle2&quot; name=&quot;vehicle2&quot; value=&quot;Car&quot;&gt;<br>&nbsp; &lt;label for=&quot;vehicle2&quot;&gt;
                            I have a car&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;checkbox&quot;
                            id=&quot;vehicle3&quot; name=&quot;vehicle3&quot;
                            value=&quot;Boat&quot;&gt;<br>&nbsp; &lt;label for=&quot;vehicle3&quot;&gt; I have a boat&lt;/label&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    This is how the HTML code above will be displayed in a browser:<br>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> I have a bike</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> I have a car</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> I have a boat</label>
                    <hr>

                    <h3 id="The Submit Button" class="heading-anchor">The Submit Button</h3>
                    The <code class="w3-codespan">&lt;input type="submit"&gt;</code> defines a button for submitting the form data to a form-handler.<br>
                    The form-handler is typically a file on the server with a script for processing
                    input data.<br>
                    The form-handler is specified in the form's <code class="w3-codespan">action</code>
                    attribute.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A form with a submit button:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action="/action_page.php"&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;
                            value=&quot;John&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot; value=&quot;Doe&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    This is how the HTML code above will be displayed in a browser:<br>
                    <form action="/action_page.php" target="_blank">
                        First name:<br>
                        <input type="text" name="firstname" value="John"><br>
                        Last name:<br>
                        <input type="text" name="lastname" value="Doe"><br><br>
                        <input type="submit" value="Submit">
                    </form>
                    <hr>

                    <h3>The Name Attribute for &lt;input&gt;</h3>
                    Notice that each input field must have a <code class="w3-codespan">name</code> attribute to be submitted.<br>
                    If the <code class="w3-codespan">name</code> attribute is omitted, the value of the input field will not be sent at all.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        This example will not submit the value of the &quot;First name&quot; input field:&nbsp;
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action="/action_page.php"&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; value=&quot;John&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                </div>
        </div>
        <?php require "../../../../../../templates/footer_outer.php" ?>

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