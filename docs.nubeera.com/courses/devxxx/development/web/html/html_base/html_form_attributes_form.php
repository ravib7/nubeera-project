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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Input Types</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>This chapter describes the different <code class="w3-codespan">form*</code> attributes for the HTML <code class="w3-codespan">&lt;input&gt;</code> element.
                    <hr>

                    <h3 id="The form Attribute" class="heading-anchor">The form Attribute</h3>
                    The input <code class="w3-codespan">form</code> attribute specifies the form
                    the <code class="w3-codespan">&lt;input&gt;</code> element belongs to.<br>
                    The value of this attribute must be equal to the id attribute of the &lt;form&gt;
                    element it belongs to.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        An input field located outside of the HTML form (but still a part of the form):
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot; id=&quot;form1&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;<br><br>&lt;label for=&quot;lname&quot;&gt;Last
                            name:&lt;/label&gt;<br>&lt;input type=&quot;text&quot; id=&quot;lname&quot;
                        </div>
                    </div>
                    <hr>


                    <h3 id="The formaction Attribute" class="heading-anchor">The formaction Attribute</h3>
                    The input <code class="w3-codespan">formaction</code> attribute specifies the URL of
                    the file that will process the input when the form is submitted.<br>
                    <strong>Note:</strong> This attribute overrides the <code class="w3-codespan">
                        action</code> attribute of the <code class="w3-codespan">&lt;form&gt;</code> element.<br>
                    The <code class="w3-codespan">formaction</code> attribute works with the
                    following input types: submit and image.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot;
                            name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; formaction=&quot;/action_page2.php&quot; value=&quot;Submit as Admin&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The formenctype Attribute" class="heading-anchor">The formenctype Attribute</h3>
                    The input <code class="w3-codespan">formenctype</code> attribute specifies how the form-data should be encoded when submitted (only for forms with method=&quot;post&quot;).<br>
                    <strong>Note:</strong> This attribute overrides the enctype attribute of the <code class="w3-codespan">&lt;form&gt;</code> element.<br>
                    The <code class="w3-codespan">formenctype</code> attribute works with the
                    following input types: submit and image.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A form with two submit buttons. The first sends the form-data with default encoding,
                        the second sends the form-data encoded as &quot;multipart/form-data&quot;:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page_binary.asp&quot; method=&quot;post&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;
                            formenctype=&quot;multipart/form-data&quot;<br>&nbsp; value=&quot;Submit as
                            Multipart/form-data&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The formmethod Attribute" class="heading-anchor">The formmethod Attribute</h3>
                    The input <code class="w3-codespan">formmethod</code> attribute defines the HTTP method for sending form-data to the action URL.<br>
                    <strong>Note:</strong> This attribute overrides the method attribute of the <code class="w3-codespan">&lt;form&gt;</code> element.<br>
                    The <code class="w3-codespan">formmethod</code> attribute works with the
                    following input types: submit and image.<br>
                    The form-data can be sent as URL variables (method=&quot;get&quot;) or as an HTTP post
                    transaction (method=&quot;post&quot;).<br>
                    <strong>Notes on the &quot;get&quot; method:</strong><br>
                    <ul>
                        <li>This method appends the form-data to the URL in name/value pairs</li>
                        <li>This method is useful for form submissions where a user want to bookmark
                            the result</li>
                        <li>There is a limit to how much data you can place in a URL (varies between
                            browsers), therefore, you cannot be sure that all of the form-data will be
                            correctly transferred</li>
                        <li>Never use the &quot;get&quot; method to pass sensitive information! (password or
                            other sensitive information will be visible in the browser's address bar)</li>
                    </ul>
                    <strong>Notes on the &quot;post&quot; method:</strong><br>
                    <ul>
                        <li>This method sends the form-data as an HTTP post transaction</li>
                        <li>Form submissions with the &quot;post&quot; method cannot be bookmarked</li>
                        <li>The &quot;post&quot; method is more robust and secure than &quot;get&quot;, and &quot;post&quot; does
                            not have size limitations</li>
                    </ul>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A form with two submit buttons. The first sends the form-data with
                        method=&quot;get&quot;. The second sends the form-data with method=&quot;post&quot;:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot; method=&quot;get&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot;
                            name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit using
                            GET&quot;&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; formmethod=&quot;post&quot; value=&quot;Submit using
                            POST&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The formtarget Attribute" class="heading-anchor">The formtarget Attribute</h3>
                    The input <code class="w3-codespan">formtarget</code> attribute specifies a name or a keyword that indicates where
                    to display the response that is received after submitting the form.<br>
                    <strong>Note:</strong> This attribute overrides the target attribute of the <code class="w3-codespan">&lt;form&gt;</code> element.<br>
                    The <code class="w3-codespan">formtarget</code> attribute works with the
                    following input types: submit and image.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A form with two submit buttons, with different target windows:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
                            name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;lname&quot;
                            name=&quot;lname&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; formtarget=&quot;_blank&quot; value=&quot;Submit to a new window/tab&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The formnovalidate Attribute" class="heading-anchor">The formnovalidate Attribute</h3>
                    The input <code class="w3-codespan">formnovalidate</code> attribute specifies
                    that an &lt;input&gt; element should not be validated when submitted.<br>
                    <strong>Note:</strong> This attribute overrides the novalidate attribute of the <code class="w3-codespan">&lt;form&gt;</code>
                    element.<br>
                    The <code class="w3-codespan">formnovalidate</code> attribute works with the
                    following input types: submit.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        A form with two submit buttons (with and without validation):
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; &lt;label for=&quot;email&quot;&gt;Enter your
                            email:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;email&quot; id=&quot;email&quot; name=&quot;email&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
                            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;
                            formnovalidate=&quot;formnovalidate&quot;<br>&nbsp; value=&quot;Submit without validation&quot;&gt;<br>
                            &lt;/form&gt;
                        </div>
                    </div>
                    <hr>

                    <h3 id="The novalidate Attribute" class="heading-anchor">The novalidate Attribute</h3>
                    The <code class="w3-codespan">novalidate</code> attribute is a <code class="w3-codespan">&lt;form&gt;</code> attribute.<br>
                    When present, novalidate specifies that all of the form-data should not be validated when submitted.<br>
                    <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
                        <h3>Example</h3>
                        Specify that no form-data should be validated on submit:
                        <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
                            &lt;form action=&quot;/action_page.php&quot; novalidate&gt;<br>&nbsp; &lt;label
                            for=&quot;email&quot;&gt;Enter your email:&lt;/label&gt;<br>&nbsp; &lt;input type=&quot;email&quot;
                            id=&quot;email&quot; name=&quot;email&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;
                            value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
                        </div>
                    </div>
                    <hr>

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