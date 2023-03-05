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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Form Elements</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>This chapter describes the different attributes for the HTML <code class="w3-codespan">&lt;form&gt;</code> element.
                    <hr>

                    <h3 id="The HTML &lt;form&gt; Elements" class="heading-anchor">The HTML &lt;form&gt; Elements</h3>
                    The HTML <code class="w3-codespan">&lt;form&gt;</code> element can contain one or more of the following form elements:<br>
                    <ul>
                        <li> <code class="w3-codespan">&lt;input&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;label&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;select&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;textarea&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;button&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;fieldset&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;legend&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;datalist&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;output&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;option&gt;</code></li>
                        <li> <code class="w3-codespan">&lt;optgroup&gt;</code></li>
                    </ul>
                    <hr>


                    <h3 id="The &lt;select&gt; Element" class="heading-anchor">The &lt;select&gt; Element</h3>
                    The <code class="w3-codespan">&lt;select&gt;</code> element defines a drop-down list:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;label for=&quot;cars&quot;&gt;Choose a car:&lt;/label&gt;<br>&lt;select id=&quot;cars&quot; name=&quot;cars&quot;&gt;<br>&nbsp; &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;<br>
                            &nbsp;
                            &lt;option value=&quot;saab&quot;&gt;Saab&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;<br>
                            &nbsp;
                            &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;<br>&lt;/select&gt;
                        </div>
                    </div><br>
                    The <code class="w3-codespan">&lt;option&gt;</code> elements defines an option that can be
                    selected.<br>
                    By default, the first item in the drop-down list is selected.<br>
                    To define a pre-selected option, add the <code class="w3-codespan">selected</code> attribute
                    to the option: <br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;option value=&quot;fiat&quot; selected&gt;Fiat&lt;/option&gt;
                        </div>
                    </div>
                    <h4>Visible Values:</h4>
                    Use the <code class="w3-codespan">size</code> attribute to specify the number of visible values:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;label for=&quot;cars&quot;&gt;Choose a car:&lt;/label&gt;<br>&lt;select id=&quot;cars&quot; name=&quot;cars&quot; size=&quot;3&quot;&gt;<br>&nbsp; &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;<br>
                            &nbsp;
                            &lt;option value=&quot;saab&quot;&gt;Saab&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;<br>
                            &nbsp;
                            &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;<br>&lt;/select&gt;
                        </div>
                    </div>
                    <h4>Allow Multiple Selections:</h4>
                    Use the <code class="w3-codespan">multiple</code> attribute to allow the user to select more than one value:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;label for=&quot;cars&quot;&gt;Choose a car:&lt;/label&gt;<br>&lt;select id=&quot;cars&quot; name=&quot;cars&quot; size=&quot;4&quot;<strong> </strong>multiple&gt;<br>&nbsp; &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;<br>
                            &nbsp;
                            &lt;option value=&quot;saab&quot;&gt;Saab&lt;/option&gt;<br>&nbsp; &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;<br>
                            &nbsp;
                            &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;<br>&lt;/select&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The &lt;textarea&gt; Element" class="heading-anchor">The &lt;textarea&gt; Element</h3>
                    The <code class="w3-codespan">&lt;textarea&gt;</code> element defines a multi-line input field (a text area):<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;textarea name=&quot;message&quot; rows=&quot;10&quot; cols=&quot;30&quot;&gt;<br>The cat was playing in the garden.<br>&lt;/textarea&gt;
                        </div>
                    </div><br>
                    The <code class="w3-codespan">rows</code> attribute specifies the visible number of lines in
                    a text area.<br>
                    The <code class="w3-codespan">cols</code> attribute specifies the visible width of a text
                    area.<br>
                    This is how the HTML code above will be displayed in a browser:<br>
                    <textarea rows="10" cols="30" style="border:0.5px solid #000000">
The cat was playing in the garden.
</textarea>
                    <hr>

                    <h3 id="The &lt;button&gt; Element" class="heading-anchor">The &lt;button&gt; Element</h3>
                    The <code class="w3-codespan">&lt;button&gt;</code> element defines a clickable
                    button:<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;button type=&quot;button&quot;
                            onclick=&quot;alert('Hello World!')&quot;&gt;Click Me!&lt;/button&gt;
                        </div>
                    </div><br>
                    This is how the HTML code above will be displayed in a browser:<br>
                    <button type="button" style="border:0.3px solid black;" onclick="alert('Hello World!')">Click Me!</button>
                    <br><br>
                    <div class="notes">
                        <strong>Note:</strong> Always specify the <code class="w3-codespan">type</code> attribute for the button element. Different browsers may use different default types for the button element.
                    </div>
                    <hr>

                    <h3 id="The &lt;fieldset&gt; and &lt;legend&gt; Elements" class="heading-anchor">The &lt;fieldset&gt; and &lt;legend&gt; Elements</h3>
                    The <code class="w3-codespan">&lt;fieldset&gt;</code> element is used to group related data in a form.<br>
                    The <code class="w3-codespan">&lt;legend&gt;</code> element defines a caption for the <code class="w3-codespan">
                        &lt;fieldset&gt;</code>
                    element.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;fieldset&gt;<br>&nbsp;&nbsp;&nbsp;
                            &lt;legend&gt;Personalia:&lt;/legend&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;&lt;br&gt;<br>&nbsp;&nbsp;&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;
                            value=&quot;John&quot;&gt;&lt;br&gt;<br>&nbsp;&nbsp;&nbsp; &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;&lt;br&gt;<br>&nbsp;&nbsp;&nbsp;
                            &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot; value=&quot;Doe&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;&nbsp;&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp; &lt;/fieldset&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    This is how the HTML code above will be displayed in a browser:</p>
                    <form action="/action_page.php" target="_blank">
                        <fieldset style="border:0.3px solid black;">
                            <legend>Personalia:</legend>
                            First name:<br>
                            <input type="text" name="firstname" value="John"><br>
                            Last name:<br>
                            <input type="text" name="lastname" value="Doe"><br><br>
                            <input type="submit" value="Submit">
                        </fieldset>
                    </form>
                    <hr>

                    <h3 id="The &lt;datalist&gt; Element" class="heading-anchor">The &lt;datalist&gt; Element</h3>
                    The <code class="w3-codespan">&lt;datalist&gt;</code> element specifies a list of pre-defined options for an <code class="w3-codespan">&lt;input&gt;</code> element.<br>
                    Users will see a drop-down list of the pre-defined options as they input data.<br>
                    The <code class="w3-codespan">list</code> attribute of the <code class="w3-codespan">&lt;input&gt;</code> element, must refer to the
                    <code class="w3-codespan">id</code> attribute of the <code class="w3-codespan">&lt;datalist&gt;</code> element.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;input list=&quot;browsers&quot;&gt;<br>
                            &nbsp;
                            &lt;datalist id=&quot;browsers&quot;&gt;<br>
                            &nbsp;&nbsp;&nbsp; &lt;option value=&quot;Internet Explorer&quot;&gt;<br>
                            &nbsp;
                            &nbsp; &lt;option value=&quot;Firefox&quot;&gt;<br>
                            &nbsp;&nbsp;&nbsp; &lt;option value=&quot;Chrome&quot;&gt;<br>
                            &nbsp;
                            &nbsp; &lt;option value=&quot;Opera&quot;&gt;<br>
                            &nbsp;&nbsp;&nbsp; &lt;option value=&quot;Safari&quot;&gt;<br>
                            &nbsp;
                            &lt;/datalist&gt; <br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The &lt;output&gt; Element" class="heading-anchor">The &lt;output&gt; Element</h3>
                    The <code class="w3-codespan">&lt;output&gt;</code> element represents the result of a calculation (like one
                    performed by a script).<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Perform a calculation and show the result in an <code class="w3-codespan">&lt;output&gt;</code> element:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;<br>&nbsp; oninput=&quot;x.value=parseInt(a.value)+parseInt(b.value)&quot;&gt;<br>&nbsp; 0<br>
                            &nbsp;
                            &lt;input type=&quot;range&quot;&nbsp; id=&quot;a&quot; name=&quot;a&quot; value=&quot;50&quot;&gt;<br>&nbsp; 100 +<br>
                            &nbsp;
                            &lt;input type=&quot;number&quot; id=&quot;b&quot; name=&quot;b&quot; value=&quot;50&quot;&gt;<br>&nbsp; =<br>
                            &nbsp;
                            &lt;output name=&quot;x&quot; for=&quot;a b&quot;&gt;&lt;/output&gt;<br>&nbsp; &lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3>HTML Form Elements</h3>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th>Tag</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_form.asp">&lt;form&gt;</a></td>
                            <td> Defines an HTML form for user input</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_input.asp">&lt;input&gt;</a></td>
                            <td>Defines an input control</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_textarea.asp">&lt;textarea&gt;</a></td>
                            <td>Defines a multiline input control (text area)</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_label.asp">&lt;label&gt;</a></td>
                            <td>Defines a label for an &lt;input&gt; element</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_fieldset.asp">&lt;fieldset&gt;</a></td>
                            <td>Groups related elements in a form</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_legend.asp">&lt;legend&gt;</a></td>
                            <td>Defines a caption for a &lt;fieldset&gt; element</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_select.asp">&lt;select&gt;</a></td>
                            <td>Defines a drop-down list</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_optgroup.asp">&lt;optgroup&gt;</a></td>
                            <td>Defines a group of related options in a drop-down list</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_option.asp">&lt;option&gt;</a></td>
                            <td>Defines an option in a drop-down list</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_button.asp">&lt;button&gt;</a></td>
                            <td>Defines a clickable button</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_datalist.asp">&lt;datalist&gt;</a></td>
                            <td>Specifies a list of pre-defined options for input controls</td>
                        </tr>
                        <tr>
                            <td><a href="/tags/tag_output.asp">&lt;output&gt;</a></td>
                            <td>Defines the result of a calculation</td>
                        </tr>
                    </table>

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