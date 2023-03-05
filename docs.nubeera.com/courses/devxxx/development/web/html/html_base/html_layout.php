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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Layout Elements and Techniques</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>Websites often display content in multiple columns (like a magazine or a newspaper).
          <hr>

          <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-white w3-padding notranslate" style="font-family: Arial, Helvetica, sans-serif;box-sizing: border-box;">
              <header class="header" style="background-color: #666;padding: 30px;text-align: center;font-size: 35px;color: white;">
                <h2>Cities</h2>
              </header>

              <section class="section" style="content:'';display: table;clear: both;">
                <nav class="nav" style="float:left;width: 30%;height: 300px;background: #ccc;padding: 20px;">
                  <ul>
                    <li><a href="javascript:void(0)">London</a></li>
                    <li><a href="javascript:void(0)">Paris</a></li>
                    <li><a href="javascript:void(0)">Tokyo</a></li>
                  </ul>
                </nav>

                <article class="article" style="float: left;padding: 20px;width: 70%;background-color: #f1f1f1;height: 300px;">
                  <h1>London</h1>
                  London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.<br>
                  Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.<br>
                </article>
              </section>

              <footer class="footer" style="background-color: #777;padding: 10px;text-align: center;color: white;">
                <p>Footer</p>
              </footer>
            </div>
          </div>
          <hr>


          <h3 id="HTML Layout Elements" class="heading-anchor">HTML Layout Elements</h3>
          HTML has several semantic elements that define the different parts of a web page:<br>
          <table style="width:100%;border:none" class="w3-hide-small">
            <tr>
              <td style="width:225px;vertical-align:top">
                <img alt="HTML5 Semantic Elements" src="https://www.w3schools.com/html/img_sem_elements.gif" width="219" height="258">
              </td>
              <td style="vertical-align:top">
                <ul>
                  <li> <code class="w3-codespan">&lt;header&gt;</code> - Defines a header for a document or a section</li>
                  <li> <code class="w3-codespan">&lt;nav&gt;</code> - Defines a set of navigation links</li>
                  <li> <code class="w3-codespan">&lt;section&gt;</code> - Defines a section in a document</li>
                  <li> <code class="w3-codespan">&lt;article&gt;</code> - Defines an independent, self-contained
                    content</li>
                  <li> <code class="w3-codespan">&lt;aside&gt;</code> - Defines content aside from the content (like a sidebar)</li>
                  <li> <code class="w3-codespan">&lt;footer&gt;</code> - Defines a footer for a document or a section</li>
                  <li> <code class="w3-codespan">&lt;details&gt;</code> - Defines additional details
                    that the user can open and close on demand</li>
                  <li> <code class="w3-codespan">&lt;summary&gt;</code> - Defines a heading for the <code class="w3-codespan">&lt;details&gt;</code> element</li>
                </ul>
              </td>
            </tr>
          </table>
          <hr>

          <h3 id="HTML Layout Techniques" class="heading-anchor">HTML Layout Techniques</h3>
          There are four different techniques to create multicolumn layouts. Each
          technique has its pros and cons:<br>
          <ul>
            <li>CSS framework</li>
            <li>CSS float property</li>
            <li>CSS flexbox</li>
            <li>CSS grid</li>
          </ul>
          <hr>

          <h3 id="CSS Float Layout" class="heading-anchor">CSS Float Layout</h3>
          It is common to do entire web layouts using the CSS <code class="w3-codespan">
            float</code> property. Float is easy to learn
          - you just need to remember how the <code class="w3-codespan">float</code> and <code class="w3-codespan">
            clear</code> properties work.
          <strong>Disadvantages:</strong> Floating elements are tied to the document flow, which may harm
          the flexibility.
          <hr>

          <h3>CSS Flexbox Layout</h3>
          Use of flexbox ensures that elements behave predictably when the page layout must accommodate different screen sizes and different display devices.
          <hr>

          <h3>CSS Grid Layout</h3>
          The CSS Grid Layout Module offers a grid-based layout system, with rows and columns, making it easier to design web pages without having to use floats and positioning.
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