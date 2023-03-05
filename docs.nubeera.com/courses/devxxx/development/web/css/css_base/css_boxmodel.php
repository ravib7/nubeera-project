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
    .w3-boxmodel {
      font-family: "Lato", sans-serif;
    }

    .w3-boxmodel {
      margin: 30px 0;
    }

    .w3-boxmodel .margin {
      background: #f1f1f1;
      padding: 45px;
      width: 100%;
      height: 100%;
      position: relative;
      border: 2px dashed #bbb;
      transition: all .25s ease-in-out;
    }

    .w3-boxmodel .margin:before {
      content: "Margin";
      font-size: 1.4em;
      position: absolute;
      left: 0;
      top: 1.8%;
      width: 100%;
      text-align: center;
    }

    .w3-boxmodel .border {
      padding: 45px;
      width: 100%;
      height: 100%;
      position: relative;
    }

    .w3-boxmodel .border:before {
      content: "Border";
      font-size: 1.4em;
      color: black;
      position: absolute;
      left: 0;
      top: 2.5%;
      width: 100%;
      text-align: center;
    }

    .w3-boxmodel .padding {
      color: black;
      padding: 45px;
      width: 100%;
      height: 100%;
      position: relative;
      background: #f1f1f1;
    }

    .w3-boxmodel .padding:before {
      content: "Padding";
      font-size: 1.4em;
      position: absolute;
      left: 0.5%;
      top: 3.7%;
      width: 100%;
      text-align: center;
    }

    .w3-boxmodel .content {
      padding: 20px;
      width: 100%;
      height: 100%;
      position: relative;
      background: white;
      border: 2px dashed #bbb;
    }

    .w3-boxmodel .content:before {
      content: "Content";
      font-size: 1.4em;
      display: block;
      text-align: center;
      line-height: 3.5;
    }

    @media screen and (max-width: 450px) {
      .w3-boxmodel .margin {
        padding: 35px;
      }

      .w3-boxmodel .margin:before {
        font-size: 1em;
        left: 0;
        top: 2.5%;
      }

      .w3-boxmodel .border {
        padding: 35px;
      }

      .w3-boxmodel .border:before {
        font-size: 1em;
        left: 0;
        top: 3.2%;
      }

      .w3-boxmodel .padding {
        padding: 35px;
      }

      .w3-boxmodel .padding:before {
        font-size: 1em;
        left: 0.5%;
        top: 4.5%;
      }

      .w3-boxmodel .content {
        padding: 20px;
      }

      .w3-boxmodel .content:before {
        font-size: 1em;
      }
    }

    @media screen and (max-width: 360px) {
      .w3-boxmodel .margin {
        padding: 25px;
      }

      .w3-boxmodel .margin:before {
        font-size: 0.9em;
        left: 0;
        top: 1.5%;
      }

      .w3-boxmodel .border {
        padding: 25px;
      }

      .w3-boxmodel .border:before {
        font-size: 0.9em;
        left: 0;
        top: 2.2%;
      }

      .w3-boxmodel .padding {
        padding: 25px;
      }

      .w3-boxmodel .padding:before {
        font-size: 0.9em;
        left: 0.5%;
        top: 2.5%;
      }

      .w3-boxmodel .content {
        padding: 15px;
      }

      .w3-boxmodel .content:before {
        font-size: 0.9em;
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
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">CSS Box Model</h2>
        <ol class="breadcrumb mx-5 mt-3 px-0">
        <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">CSS Basics</li>
        </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>All HTML elements can be considered as boxes.
          <hr>

          <h2>The CSS Box Model</h2>
          In CSS, the term "box model" is used when talking about design and layout.<br>
          The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content. The image below illustrates the box model:<br>
          <div class="w3-boxmodel">
            <div class="margin">
              <div class="border w3-theme" style="background-color:green">
                <div class="padding">
                  <div class="content"></div>
                </div>
              </div>
            </div>
          </div><br>
          Explanation of the different parts:<br>
          <ul>
            <li><b>Content</b> - The content of the box, where text and images appear</li>
            <li><b>Padding</b> - Clears an area around the content. The padding is transparent</li>
            <li><b>Border</b> - A border that goes around the padding and content</li>
            <li><b>Margin</b> - Clears an area outside the border. The margin is
              transparent</li>
          </ul>
          The box model allows us to add a border around elements, and to define space
          between elements.&nbsp;<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            Demonstration of the box model:
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              div {<br>&nbsp;&nbsp;width: 300px;<br>&nbsp;&nbsp;border: 15px solid
              green;<br>&nbsp;
              padding: 50px;<br>&nbsp;
              margin: 20px;<br>}
            </div>
          </div>
          <hr>


          <h2>Width and Height of an Element</h2>
          In order to set the width and height of an element correctly in all browsers, you need to know how the box model works.<br><br>
          <div class="notes">
            <b>Important:</b> When you set the width and height properties of an
            element with CSS, you just set the width and height of the <b>content area</b>. To
            calculate the full size of an element, you must also add padding, borders and margins.
          </div><br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            This &lt;div&gt; element will have a total width of 350px:&nbsp;
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              div {<br>&nbsp;
              width: 320px;<br>
              &nbsp;
              padding: 10px;<br>
              &nbsp;
              border: 5px solid gray;<br>
              &nbsp;
              margin: 0;
              <br>}
            </div>
          </div><br>
          Here is the calculation:<br>
          <div style="border:5px solid green;padding:10px;border-style:none none none solid">
            320px (width)<br>
            + 20px (left + right padding)<br>
            + 10px (left + right border)<br>
            + 0px (left + right margin)<br>
            <strong>= 350px
            </strong>
          </div><br>
          The total width of an element should be calculated like this:<br>
          Total element width = width + left padding + right padding + left border + right border + left margin + right margin<br>
          The total height of an element should be calculated like this:<br>
          Total element height = height + top padding + bottom padding + top border + bottom border + top margin + bottom margin
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