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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Tables</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>HTML tables allow web developers to arrange data into rows and columns.
          <hr>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
              <table id="customers">
                <tr>
                  <th>Company</th>
                  <th>Contact</th>
                  <th>Country</th>
                </tr>
                <tr>
                  <td>Alfreds Futterkiste</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                </tr>
                <tr>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                </tr>
                <tr>
                  <td>Ernst Handel</td>
                  <td>Roland Mendel</td>
                  <td>Austria</td>
                </tr>
                <tr>
                  <td>Island Trading</td>
                  <td>Helen Bennett</td>
                  <td>UK</td>
                </tr>
                <tr>
                  <td>Laughing Bacchus Winecellars</td>
                  <td>Yoshi Tannamuri</td>
                  <td>Canada</td>
                </tr>
                <tr>
                  <td>Magazzini Alimentari Riuniti</td>
                  <td>Giovanni Rovelli</td>
                  <td>Italy</td>
                </tr>
              </table>
            </div>
          </div>
          <hr>

          <h3 id="Define an HTML Table" class="heading-anchor">Define an HTML Table</h3>
          A table in HTML consists of table cells inside rows and columns<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
              &lt;table&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Company&lt;/th&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;th&gt;Contact&lt;/th&gt; <br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Country&lt;/th&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp; &nbsp; &lt;td&gt;Alfreds Futterkiste&lt;/td&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;td&gt;Maria
              Anders&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Germany&lt;/td&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&nbsp; &lt;tr&gt;<br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Centro
              comercial Moctezuma&lt;/td&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;td&gt;Francisco
              Chang&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Mexico&lt;/td&gt;<br>
              &nbsp; &lt;/tr&gt;<br>&lt;/table&gt;
            </div>
          </div>
          <hr>

          <h3 id="Table Cells" class="heading-anchor">Table Cells</h3>
          Each table cell is defined by a
          <code class="w3-codespan">&lt;td&gt;</code> and a <code class="w3-codespan">&lt;/td&gt;</code> tag.<br>
          <code class="w3-codespan">td</code>
          stands for table data.<br>
          Everything between <code class="w3-codespan">&lt;td&gt;</code> and <code class="w3-codespan">&lt;/td&gt;</code> are the content of the table cell.<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
              &lt;table&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp; &nbsp; &lt;td&gt;Emil&lt;/td&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;td&gt;Tobias&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Linus&lt;/td&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&lt;/table&gt;
            </div>
          </div>
          <hr>


          <h3 id="Table Rows" class="heading-anchor">Table Rows</h3>
          Each table row starts with a
          <code class="w3-codespan">&lt;tr&gt;</code> and end with a <code class="w3-codespan">&lt;/tr&gt;</code> tag.<br>
          <code class="w3-codespan">tr</code>
          stands for table row.<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
              &lt;table&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp; &nbsp; &lt;td&gt;Emil&lt;/td&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;td&gt;Tobias&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Linus&lt;/td&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp; &nbsp; &lt;td&gt;16&lt;/td&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;td&gt;14&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;10&lt;/td&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&lt;/table&gt;
            </div>
          </div>
          <br>You can have as many rows as you like in a table, just make sure that the number of cells are the same in each row.
          <hr>

          <h3 id="Table Headers" class="heading-anchor">Table Headers</h3>
          Sometimes you want your cells to be headers, in those cases use the
          <code class="w3-codespan">&lt;th&gt;</code> tag instead of the
          <code class="w3-codespan">&lt;td&gt;</code> tag:<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#e6e6e6;padding: 10px;">
              &lt;table&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp; &nbsp; &lt;th&gt;Person 1&lt;/th&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;th&gt;Person 2&lt;/th&gt; <br>&nbsp;&nbsp;&nbsp; &lt;th&gt;Person
              3&lt;/th&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp; &nbsp; &lt;td&gt;Emil&lt;/td&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;td&gt;Tobias&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;Linus&lt;/td&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&nbsp;
              &lt;tr&gt;<br>&nbsp; &nbsp; &lt;td&gt;16&lt;/td&gt;<br>
              &nbsp;&nbsp;&nbsp; &lt;td&gt;14&lt;/td&gt; <br>&nbsp;&nbsp;&nbsp; &lt;td&gt;10&lt;/td&gt;<br>
              &nbsp;
              &lt;/tr&gt;<br>&lt;/table&gt;
            </div>
          </div>
          <hr>

          <h2>HTML Table Tags</h2>
          <table class="ws-table-all notranslate">
            <tr>
              <th>Tag</th>
              <th>Description</th>
            </tr>
            <tr>
              <td><a href="/tags/tag_table.asp">&lt;table&gt;</a></td>
              <td>Defines a table</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_th.asp">&lt;th&gt;</a></td>
              <td>Defines a header cell in a table</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_tr.asp">&lt;tr&gt;</a></td>
              <td>Defines a row in a table</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_td.asp">&lt;td&gt;</a></td>
              <td>Defines a cell in a table</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_caption.asp">&lt;caption&gt;</a></td>
              <td>Defines a table caption</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_colgroup.asp">&lt;colgroup&gt;</a></td>
              <td>Specifies a group of one or more columns in a table for formatting</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_col.asp">&lt;col&gt;</a></td>
              <td>Specifies column properties for each column within a &lt;colgroup&gt; element</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_thead.asp">&lt;thead&gt;</a></td>
              <td>Groups the header content in a table</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_tbody.asp">&lt;tbody&gt;</a></td>
              <td>Groups the body content in a table</td>
            </tr>
            <tr>
              <td><a href="/tags/tag_tfoot.asp">&lt;tfoot&gt;</a></td>
              <td>Groups the footer content in a table</td>
            </tr>
          </table>
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