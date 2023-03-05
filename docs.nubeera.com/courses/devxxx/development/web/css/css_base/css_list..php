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

    #ex4,
    #ex5 {
      .ol {
        background: #ff9999;
        padding: 20px;
      }

      ul {
        background: #3399ff;
        padding: 20px;
      }

      ol li {
        background: #ffe5e5;
        padding: 5px;
        margin-left: 35px;
      }

      ul li {
        background: #cce5ff;
        margin: 5px;
      }
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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Lists</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
          <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
          <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
          <li class="breadcrumb-item"><a href="../../../">Web</a></li>
          <li class="breadcrumb-item active">CSS Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>
          <div class="w3-row">
            <div class="w3-half w3-container" style="float:left">
              <h2>Unordered Lists:</h2>
              <ul style="list-style:circle">
                <li>Coffee</li>
                <li>Tea</li>
                <li>Coca Cola</li>
              </ul>
              <ul style="list-style:square">
                <li>Coffee</li>
                <li>Tea</li>
                <li>Coca Cola</li>
              </ul>
            </div>
            <div class="w3-half w3-container" style="float:left;margin-left:150px;">
              <h2>Ordered Lists:</h2>
              <ol style="list-style:decimal">
                <li>Coffee</li>
                <li>Tea</li>
                <li>Coca Cola</li>
              </ol>
              <ol style="list-style:upper-roman">
                <li>Coffee</li>
                <li>Tea</li>
                <li>Coca Cola</li>
              </ol>
            </div>
          </div>
          <div style="clear:both"></div>
          <hr>

          <h2>HTML Lists and CSS List Properties</h2>
          <p>In HTML, there are two main types of lists:</p>
          <ul>
            <li>unordered lists (&lt;ul&gt;) - the list items are marked with bullets</li>
            <li>ordered lists (&lt;ol&gt;) - the list items are marked with numbers or letters</li>
          </ul>
          <p>The CSS list properties allow you to:</p>
          <ul>
            <li>Set different list item markers for ordered lists</li>
            <li>Set different list item markers for unordered lists</li>
            <li>Set an image as the list item marker</li>
            <li>Add background colors to lists and list items</li>
          </ul>
          <hr>

          <h2>Different List Item Markers</h2>
          <p>The <code class="w3-codespan">list-style-type</code> property specifies the type of list item
            marker.</p>
          <p>The following example shows some of the available list item markers: </p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              ul.a {<br>&nbsp;&nbsp;list-style-type: circle;<br>}<br>
              <br>ul.b {<br>&nbsp; list-style-type: square;<br>}<br>
              <br>
              ol.c {<br>&nbsp; list-style-type: upper-roman;<br>}<br>
              <br>ol.d {<br>&nbsp; list-style-type: lower-alpha;<br>}
            </div>
          </div>
          <hr>

          <h2>An Image as The List Item Marker</h2>
          <p>The <code class="w3-codespan">list-style-image</code> property specifies an image as the list
            item marker:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              ul
              {<br>
              &nbsp; list-style-image: url('sqpurple.gif');<br>
              }
            </div>
          </div><br>
          <hr>

          <h2>Position The List Item Markers</h2>
          <p>The <code class="w3-codespan">list-style-position</code> property specifies the position of the list-item markers
            (bullet points).</p>
          <p>&quot;list-style-position: outside;&quot; means that the bullet points will be outside
            the list item. The start of each line of a list item will be aligned vertically.
            This is default:</p>
          <ul style="list-style-position:outside;width:25%;">
            <li style="border:1px solid #000000;">Coffee -
              <span style="display: inline !important; float: none; background-color: transparent; color: rgb(0, 0, 0); font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; list-style-position: inside; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
                A brewed drink prepared from roasted coffee beans...</span>
            </li>
            <li style="border:1px solid #000000;border-top:0;">Tea</li>
            <li style="border:1px solid #000000;border-top:0;">Coca-cola</li>
          </ul>
          <p>&quot;list-style-position: inside;&quot; means that the bullet points will be inside
            the list item. As it is part of the list item, it will be part of the text and
            push the text at the start:</p>
          <ul style="list-style-position:inside;width:25%;">
            <li style="border:1px solid #000000;">Coffee -
              <span style="display: inline !important; float: none; background-color: transparent; color: rgb(0, 0, 0); font-family: Times New Roman; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; list-style-position: inside; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
                A brewed drink prepared from roasted coffee beans...</span>
            </li>
            <li style="border:1px solid #000000;border-top:0;">Tea</li>
            <li style="border:1px solid #000000;border-top:0;">Coca-cola</li>
          </ul>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              ul.a {<br>&nbsp; list-style-position: outside;<br>}<br><br>ul.b {<br>&nbsp;&nbsp;list-style-position: inside;<br>}
            </div>
          </div>
          <hr>

          <h2>Remove Default Settings</h2>
          <p>The <code class="w3-codespan">list-style-type:none</code> property can also be
            used to remove the markers/bullets. Note that the list also has default margin
            and padding. To remove this, add <code class="w3-codespan">margin:0</code> and <code class="w3-codespan">padding:0</code> to &lt;ul&gt; or &lt;ol&gt;:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              ul
              {<br>
              &nbsp;
              list-style-type: none;<br>&nbsp; margin: 0;<br>&nbsp;
              padding: 0;<br>
              }
            </div>
          </div><br>
          <hr>

          <h2>List - Shorthand property</h2>
          <p>The <code class="w3-codespan">list-style</code> property is a shorthand property. It is used to set all the
            list properties in one declaration:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              ul
              {<br>
              &nbsp;
              list-style: square inside url(&quot;sqpurple.gif&quot;);<br>
              }
            </div>
          </div><br>
          <p>When using the shorthand property, the order of the property values are:</p>
          <ul>
            <li><code class="w3-codespan">list-style-type</code> (if a list-style-image is specified,
              the value of this property will be displayed if the image for some reason
              cannot be displayed)</li>
            <li><code class="w3-codespan">list-style-position</code> (specifies whether the list-item markers should appear inside or outside the content flow)</li>
            <li><code class="w3-codespan">list-style-image</code> (specifies an image as the list item
              marker)</li>
          </ul>
          <p>If one of the property values above are missing, the default value for the
            missing property will be inserted, if any.</p>
          <hr>

          <h2>Styling List With Colors</h2>
          <p>We can also style lists with colors, to make them look a little more
            interesting.</p>
          <p>Anything added to the &lt;ol&gt; or &lt;ul&gt; tag, affects the entire list, while
            properties added to the &lt;li&gt; tag will affect the individual list items:</p>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              ol {<br>&nbsp; background: #ff9999;<br>&nbsp;
              padding: 20px;<br>}<br><br>ul {<br>&nbsp; background: #3399ff;<br>&nbsp;
              padding: 20px;<br>}<br><br>ol li {<br>&nbsp; background:
              #ffe5e5;<br>&nbsp; padding: 5px;<br>&nbsp;
              margin-left: 35px;<br>}<br><br>ul li {<br>&nbsp; background:
              #cce5ff;<br>&nbsp; margin: 5px;<br>}
            </div><br>
            Result:<br>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              <ol id="ex4">
                <li>Coffee</li>
                <li>Tea</li>
                <li>Coca Cola</li>
              </ol>
              <ul id="ex5">
                <li>Coffee</li>
                <li>Tea</li>
                <li>Coca Cola</li>
              </ul>
            </div>
          </div><br>
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