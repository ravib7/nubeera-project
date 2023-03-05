<!DOCTYPE html>
<html lang="en">

<head>
  <title>NubeEra Basic CSS</title>

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

  <style>
    .btn {
      display: inline-block;
      background-color: #f44336;
      color: #FFFFFF;
      padding: 14px 25px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin-left: 20px;
      opacity: 0.9;
    }

    .btn:hover {
      color: white;
      background-color: red;
      opacity: 1;
    }

    .button {
      background-color: white;
      color: black;
      border: 2px solid #04AA6D;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-left: 20px;
    }

    .button:hover {
      background-color: #059862;
      color: white;
    }

    .txtlink {
      color: green;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
    }

    .txtlink:hover {
      text-decoration: underline;
    }

    .txtlink2:hover {
      color: #059862;
    }

    @media only screen and (max-width: 547px) {
      .btn {
        margin: 0 !important;
      }
    }

    @media only screen and (max-width: 381px) {
      .button {
        margin: 0 !important;
      }
    }

    @media only screen and (max-width: 337px) {
      .button {
        margin: 10px 0 !important;
      }
    }

    p {
      text-align: left;
    }

    table#customers {
      font-size: 16px;
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      text-align: left;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2
    }

    #customers th {
      padding-top: 11px;
      padding-bottom: 11px;
      background-color: #33a4ef;
      color: white;
    }

    .tabletest {
      margin-top: 20px;
      margin-bottom: 40px;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
    }

    .tabletest,
    .tabletest th,
    .tabletest td {
      padding: 8px;
      text-align: left;
    }

    .tabletest2 {
      font-size: 15px;
      margin-top: 20px;
      margin-bottom: 40px;
      border-collapse: collapse;
      width: 100%;
    }

    .tabletest2,
    .tabletest2 th,
    .tabletest2 td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .tabletest3 {
      border: 1px solid #ddd;
      margin-top: 20px;
      margin-bottom: 40px;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
    }

    .tabletest3,
    .tabletest3 th,
    .tabletest3 td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .tabletest4 {
      margin-top: 20px;
      margin-bottom: 40px;
      border-collapse: collapse;
      width: 100%;
    }

    .tabletest4,
    .tabletest4 th,
    .tabletest4 td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .tabletest4 tr:hover {
      background-color: #f5f5f5
    }

    .tabler2 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
      margin-top: 20px;
      margin-bottom: 40px;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
    }

    .tabler2,
    .tabler2 th,
    .tabler2 td {
      border: none;
      text-align: left;
      padding: 8px;
    }

    .tabler2 tbody tr:nth-child(even) {
      background-color: #f2f2f2
    }

    .tabler {
      margin-top: 20px;
      margin-bottom: 40px;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
    }

    .tabler,
    .tabler th,
    .tabler td {
      border: none;
      text-align: left;
      padding: 8px;
    }

    .tabler tbody tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>

</head>

<body>

  <!-- Navigation Bar -->
  <?php require '../../../../../../templates/navbar.php'; ?>

  <div id="modal-sidepanel">

    <div class="row side-panel-box" id="side-panel-box" style="left: 0px;">
      <button onclick="openNav()" id="side-panel-toggle"><i class='fa fa-chevron-left' aria-hidden='true'></i></button>
      <div class="col-md-12 side-panel">
        <strong class="px-2" style="font-size: 1.125rem;">Basic CSS</strong><br><br>
        <ul>
          <li><a href="index.php">Introduction</a></li>
          <li><a href="css_syntax.php">Syntax</a></li>
          <li><a href="css_selectors.php">Selectors</a></li>
          <li><a href="css_howto.php">How to</a></li>
          <li><a href="css_comments.php">Comments</a></li>
          <li><a href="css_colors.php">Colors</a></li>
          <li><a href="css_background.php">Background</a></li>
          <li><a href="css_background_attachment.php">Background attachment </a></li>
          <li><a href="css_background_image.php">Background image </a></li>
          <li><a href="css_border.php">Border</a></li>
          <li><a href="css_margin.php">Margin</a></li>
          <li><a href="css_padding.php">Padding</a></li>
          <li><a href="css_dimension.php">Hight&Width</a></li>
          <li><a href="css_boxmodel.php">Boxmodel</a></li>
          <li><a href="css_outline.php">Outline</a></li>
          <li><a href="css_text.php">Text</a></li>
          <li><a href="css_font.php">Font</a></li>
          <li><a href="css_icons.php">Icons</a></li>
          <li><a href="css_link.php">Link</a></li>
          <li><a href="css_list.php">List</a></li>
          <li><a href="css_table.php">Table</a></li>
          <li><a href="css_display_visibility.php">Display visibility</a></li>
          <li><a href="css_max-width.php">Max-Width</a></li>
          <li><a href="css_positioning.php">Positioning</a></li>
          <li><a href="css_z-index.php">Z-index</a></li>
          <li><a href="css_overflow.php">Overflow</a></li>
          <li><a href="css_float.php">Float</a></li>
          <li><a href="css_inline-block.php">Inline-block</a></li>

        </ul>
      </div>
    </div>

  </div>
  <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

  <div class="content-box" id="content-box">
    <div class="body-content">
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Tables</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
          <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
          <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
          <li class="breadcrumb-item"><a href="../../../">Web</a></li>
          <li class="breadcrumb-item active">CSS Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>
          <p class="intro">The look of an HTML table can be greatly improved with CSS:</p><br>
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
            <tr class="alt">
              <td>Berglunds snabbköp</td>
              <td>Christina Berglund</td>
              <td>Sweden</td>
            </tr>
            <tr>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
            </tr>
            <tr class="alt">
              <td>Ernst Handel</td>
              <td>Roland Mendel</td>
              <td>Austria</td>
            </tr>
            <tr>
              <td>Island Trading</td>
              <td>Helen Bennett</td>
              <td>UK</td>
            </tr>
            <tr class="alt">
              <td>Königlich Essen</td>
              <td>Philip Cramer</td>
              <td>Germany</td>
            </tr>
            <tr>
              <td>Laughing Bacchus Winecellars</td>
              <td>Yoshi Tannamuri</td>
              <td>Canada</td>
            </tr>
            <tr class="alt">
              <td>Magazzini Alimentari Riuniti</td>
              <td>Giovanni Rovelli</td>
              <td>Italy</td>
            </tr>
          </table>
          <br>
          <hr>

          <h2>Table Borders</h2>
          <p>To specify table borders in CSS, use the <code class="w3-codespan">border</code> property.</p>
          <p>The example below specifies a black border for &lt;table&gt;, &lt;th&gt;, and &lt;td&gt; elements:</p>
          <br>
          <table style="border: 1px solid black">
            <tr>
              <th style="border: 1px solid black">Firstname</th>
              <th style="border: 1px solid black">Lastname</th>
            </tr>
            <tr style="background-color:white">
              <td style="border: 1px solid black">Peter</td>
              <td style="border: 1px solid black">Griffin</td>
            </tr>
            <tr>
              <td style="border: 1px solid black">Lois</td>
              <td style="border: 1px solid black">Griffin</td>
            </tr>
          </table>
          <br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              table, th, td {<br>
              &nbsp;&nbsp;border: 1px solid black;<br>
              }
            </div>
          </div>
          <hr>

          <h2>Full-Width Table</h2>
          <p>The table above might seem small in some cases. If you need a table that should span the entire screen (full-width), add <code class="w3-codespan">width: 100%</code> to the
            &lt;table&gt; element:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              table {<br>
              &nbsp;&nbsp;width: 100%;<br>
              }
            </div>
          </div>
          <hr>

          <h2>Collapse Table Borders</h2>
          <p>The <code class="w3-codespan">border-collapse</code> property sets whether the table borders
            should be collapsed into a single border:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              table
              {<br>
              &nbsp;&nbsp;border-collapse: collapse;<br>
              }
            </div>
          </div>
          <p style="margin-top:25px;">If you only want a border around the table, only specify the <code class="w3-codespan">border</code> property for
            &lt;table&gt;:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              table
              {<br>&nbsp; border: 1px solid black;<br>
              }
            </div>
          </div>
          <hr>

          <h2>Table Width and Height</h2>
          <p>The width and height of a table are defined by the <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> properties.</p>
          <p>The example below sets the width of the table to 100%, and the height of the
            &lt;th&gt; elements to 70px:</p>
          <iframe src="trycss_table_width_iframe.htm" style="border:none;width:100%;height:167px;"></iframe>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              table
              {<br>
              &nbsp;&nbsp;width: 100%;<br>
              }<br><br>
              th
              {<br>
              &nbsp;&nbsp;height: 70px;<br>
              }
            </div>
          </div>
          <p>To create a table that should only span half the page, use <code class="w3-codespan">width: 50%</code>:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              table
              {<br>
              &nbsp;&nbsp;width: 50%;<br>
              }
            </div>
          </div>
          <hr>

          <h2>Table Alignment</h2>
          <p>The <code class="w3-codespan">text-align</code> property sets the horizontal alignment (like left, right, or center)
            of the content in &lt;th&gt; or &lt;td&gt;.</p>
          <p>By default, the content of &lt;th&gt; elements are center-aligned and the
            content of &lt;td&gt; elements are left-aligned.</p>

          <p>To center-align the content of&nbsp; &lt;td&gt; elements as well, use <code class="w3-codespan">text-align: center</code>:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              td
              {<br>
              &nbsp;
              text-align: center;<br>
              }
            </div>
          </div>
          <p>The <code class="w3-codespan">vertical-align</code> property sets the vertical alignment (like top, bottom, or middle)
            of the content in &lt;th&gt; or &lt;td&gt;.</p>
          <p>By default, the vertical alignment of the content in a table is middle (for both &lt;th&gt;
            and &lt;td&gt; elements).</p>
          <p>The following example sets the vertical text alignment to bottom for &lt;td&gt; elements:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              td
              {<br>
              &nbsp;
              height: 50px;<br>
              &nbsp;
              vertical-align: bottom;<br>
              }
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