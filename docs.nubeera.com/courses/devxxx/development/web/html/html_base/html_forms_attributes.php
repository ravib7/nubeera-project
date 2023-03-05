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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Form Attributes</h2>
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

          <h3 id="The Action Attribute" class="heading-anchor">The Action Attribute</h3>
          The <code class="w3-codespan">action</code> attribute defines the action to be performed when the form is submitted.<br>
          Usually, the form data is sent to a file on the server when the user clicks on the submit button.<br>
          In the example below, the form data is sent to a file called &quot;action_page.php&quot;.
          This file contains a server-side script that handles the form data:<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            On submit, send form data to &quot;action_page.php&quot;:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;form action="/action_page.php"&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
              name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;
              value=&quot;John&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;&lt;br&gt;<br>&nbsp;
              &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot; value=&quot;Doe&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
              &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
            </div>
          </div><br>
          <div class="notes">
            <strong>Tip:</strong> If the <code class="w3-codespan">action</code> attribute is omitted, the action is set to the current page.
          </div>
          <hr>


          <h3 id="The Target Attribute" class="heading-anchor">The Target Attribute</h3>
          The <code class="w3-codespan">target</code> attribute specifies where to
          display the response that is received after submitting the form.<br>
          The <code class="w3-codespan">target</code> attribute can have one of the
          following values:
          text input.<br>
          <table class="ws-table-all notranslate">
            <tr>
              <th style="width:20%">Value</th>
              <th>Description</th>
            </tr>
            <tr>
              <td>_blank</td>
              <td>The response is displayed in a new window or tab</td>
            </tr>
            <tr>
              <td>_self</td>
              <td>The response is displayed in the current window</td>
            </tr>
            <tr>
              <td>_parent</td>
              <td>The response is displayed in the parent frame</td>
            </tr>
            <tr>
              <td>_top</td>
              <td>The response is displayed in the full body of the window</td>
            </tr>
            <tr>
              <td><i>framename</i></td>
              <td>The response is displayed in a named iframe</td>
            </tr>
          </table><br>
          The default value is <code class="w3-codespan">_self</code> which means that
          the response will open in the current window.<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            Here, the submitted result will open in a new browser tab:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;form action="/action_page.php" target="_blank&quot;&gt;
            </div>
          </div>
          <hr>

          <h3 id="The Method Attribute" class="heading-anchor">The Method Attribute</h3>
          The <code class="w3-codespan">method</code> attribute specifies the HTTP
          method to be used when submitting the form data.<br>
          The form-data can be sent as URL variables (with <code class="w3-codespan">method=&quot;get&quot;</code>)
          or as HTTP post transaction (with <code class="w3-codespan">method=&quot;post&quot;</code>).<br>
          The default HTTP method when submitting form data is GET.&nbsp;<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            This example uses the GET method when submitting the form data:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;form action="/action_page.php" method="get&quot;&gt;
            </div>
          </div><br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            This example uses the POST method when submitting the form data:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;form action="/action_page.php" method="post&quot;&gt;
            </div>
          </div><br>
          <b>Notes on GET:</b><br>
          <ul>
            <li>Appends the form data to the URL, in name/value pairs</li>
            <li>NEVER use GET to send sensitive data! (the submitted form data is visible in the URL!)</li>
            <li>The length of a URL is limited (2048 characters)</li>
            <li>Useful for form submissions where a user wants to bookmark the result</li>
            <li>GET is good for non-secure data, like query strings in Google</li>
          </ul>
          <b>Notes on POST:</b> <br>
          <ul>
            <li>Appends the form data inside the body of the HTTP request (the submitted
              form data is not shown in the URL)</li>
            <li>POST has no size limitations, and can be used to send large amounts of data.</li>
            <li>Form submissions with POST cannot be bookmarked</li>
          </ul>
          <div class="notes">
            <strong>Tip:</strong> Always use POST if the form data contains sensitive or personal information!
          </div>
          <hr>

          <h3 id="The Autocomplete Attribute" class="heading-anchor">The Autocomplete Attribute</h3>
          The <code class="w3-codespan">autocomplete</code> attribute specifies whether
          a form should have autocomplete on or off.<br>
          When autocomplete is on, the browser automatically complete values based on values that the user has entered before.<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            A form with autocomplete on:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;form action=&quot;/action_page.php&quot; autocomplete=&quot;on&quot;&gt;
            </div>
          </div>
          <hr>

          <h3 id="The Novalidate Attribute" class="heading-anchor">The Novalidate Attribute</h3>
          The <code class="w3-codespan">novalidate</code> attribute is a boolean attribute.<br>
          When present, it specifies that the form-data (input) should not be validated when submitted.<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            A form with a novalidate attribute:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;form action=&quot;/action_page.php&quot; novalidate&gt;
            </div>
          </div>
          <hr>

          <h3>List of All &lt;form&gt; Attributes</h3>
          <div class="w3-responsive">
            <table class="ws-table-all">
              <tr>
                <th>Attribute</th>
                <th>Description</th>
              </tr>
              <tr>
                <td><a href="/tags/att_form_accept_charset.asp">accept-charset</a></td>
                <td>Specifies the character encodings used for form submission</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_action.asp">action</a></td>
                <td>Specifies where to send the form-data when a form is submitted</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_autocomplete.asp">autocomplete</a></td>
                <td>Specifies whether a form should have autocomplete on or off</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_enctype.asp">enctype</a></td>
                <td>Specifies how the form-data should be encoded when submitting it to the
                  server (only for method=&quot;post&quot;)</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_method.asp">method</a></td>
                <td>Specifies the HTTP method to use when sending form-data</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_name.asp">name</a></td>
                <td>Specifies the name of the form</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_novalidate.asp">novalidate</a></td>
                <td>Specifies that the form should not be validated when submitted</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_rel.asp">rel</a></td>
                <td>Specifies the relationship between a linked resource and the current
                  document</td>
              </tr>
              <tr>
                <td><a href="/tags/att_form_target.asp">target</a></td>
                <td>Specifies where to display the response that is received after submitting
                  the form</td>
              </tr>
            </table>
          </div>

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