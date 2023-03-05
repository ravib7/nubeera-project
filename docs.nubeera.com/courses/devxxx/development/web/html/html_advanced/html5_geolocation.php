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
        <strong class="px-2" style="font-size: 1.125rem;">Advanced HTML</strong><br><br>
        <ul>
          <li><a href="index.php">HTML Canvas Graphics</a></li>
          <li><a href="html5_svg.php">HTML SVG Graphics</a></li>
          <li><a href="html_media.php">HTML Multimedia</a></li>
          <li><a href="html5_video.php">HTML Video</a></li>
          <li><a href="html5_audio.php">HTML Audio</a></li>
          <li><a href="html_object.php">HTML Plug-ins</a></li>
          <li><a href="html_youtube.php">HTML YouTube</a></li>
          <li><a href="html5_geolocation.php">HTML Geolocation API</a></li>
          <li><a href="html5_draganddrop.php">HTML Drag and Drop API</a></li>
          <li><a href="html5_webstorage.php">HTML Web Storage API</a></li>
          <li><a href="html5_webworkers.php">HTML Web Workers API</a></li>
          <li><a href="html5_serversentevents.php">HTML SSE API</a></li>
        </ul>
      </div>
    </div>

  </div>
  <span class="p-3" id="top-nav"><button id="sm-side-panel-toggle" data-toggle="modal" data-target="" data-backdrop="false"><i class="fas fa-ellipsis-h"></i></button></span>

  <div class="content-box" id="content-box">
    <div class="body-content">
      <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Geolocation API</h2>
      <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
        <div class="px-5 pb-5 pt-0 body-text">
          <!-- <content> -->
          <hr>The HTML Geolocation API is used to locate a user's position.
          <hr>

          <h3 id="Locate the User's Position" class="heading-anchor">Locate the User's Position</h3>
          The HTML Geolocation API is used to get the geographical position of a user.<br>

          Since this can compromise privacy, the position is not available unless the user approves it.<br>
          <button class="w3-btn w3-blue w3-round" onclick="getLocation()">Try It</button><br>
          <div id="mapholder"></div>
          <script src="https://maps.google.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU"></script>
          <script>
            var x = document.getElementById("demo");

            function getLocation() {
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
              } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
              }
            }

            function showPosition(position) {
              var lat = position.coords.latitude;
              var lon = position.coords.longitude;
              var latlon = new google.maps.LatLng(lat, lon)
              var mapholder = document.getElementById('mapholder')
              mapholder.style.height = '250px';
              mapholder.style.width = '100%';

              var myOptions = {
                center: latlon,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                navigationControlOptions: {
                  style: google.maps.NavigationControlStyle.SMALL
                }
              };
              var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
              var marker = new google.maps.Marker({
                position: latlon,
                map: map,
                title: "You are here!"
              });
            }

            function showError(error) {
              switch (error.code) {
                case error.PERMISSION_DENIED:
                  x.innerHTML = "User denied the request for Geolocation."
                  break;
                case error.POSITION_UNAVAILABLE:
                  x.innerHTML = "Location information is unavailable."
                  break;
                case error.TIMEOUT:
                  x.innerHTML = "The request to get user location timed out."
                  break;
                case error.UNKNOWN_ERROR:
                  x.innerHTML = "An unknown error occurred."
                  break;
              }
            }
          </script><br>
          <div class="notes">
            <strong>Note:</strong><b> </b>Geolocation is most accurate for devices with GPS, like smartphones.
          </div>
          <hr>

          <h3 id="Using HTML Geolocation" class="heading-anchor">Using HTML Geolocation</h3>
          The <code class="w3-codespan">getCurrentPosition()</code> method is used to return the user's position.<br>
          The example below returns the latitude and longitude of the user's position:<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;script&gt;<br>var x = document.getElementById(&quot;demo&quot;);<br>function getLocation() {<br>&nbsp;&nbsp;if (navigator.geolocation) {<br>
              &nbsp;&nbsp;&nbsp; navigator.geolocation.getCurrentPosition(showPosition);<br>&nbsp;&nbsp;} else {<br>
              &nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Geolocation is not supported by this browser.&quot;;<br>
              &nbsp;&nbsp;}<br>}<br><br>
              function showPosition(position) {<br>&nbsp; x.innerHTML = &quot;Latitude: &quot; + position.coords.latitude + <br>&nbsp;&nbsp;&quot;&lt;br&gt;Longitude: &quot; + position.coords.longitude; <br>
              }<br>&lt;/script&gt;
            </div>
          </div><br>
          Example explained:<br>
          <ul>
            <li>Check if Geolocation is supported</li>
            <li>If supported, run the getCurrentPosition() method. If not, display a message to the user</li>
            <li>If the getCurrentPosition() method is successful, it returns a coordinates object to the function specified in the parameter (showPosition)</li>
            <li>The showPosition() function outputs the Latitude and Longitude</li>
          </ul>
          The example above is a very basic Geolocation script, with no error handling.
          <hr>

          <h3 id="Handling Errors and Rejections" class="heading-anchor">Handling Errors and Rejections</h3>
          The second parameter of the <code class="w3-codespan">getCurrentPosition()</code> method is used to handle
          errors. It specifies a function to run if it fails to get the user's location:<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              function showError(error) {<br>&nbsp;&nbsp;switch(error.code) {<br>&nbsp;&nbsp;&nbsp; case error.PERMISSION_DENIED:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x.innerHTML = &quot;User denied the request for Geolocation.&quot;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;<br>&nbsp;&nbsp;&nbsp;&nbsp;case error.POSITION_UNAVAILABLE:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Location information is unavailable.&quot;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;<br>&nbsp;&nbsp;&nbsp;&nbsp;case error.TIMEOUT:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x.innerHTML = &quot;The request to get user location timed out.&quot;<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;<br>&nbsp;&nbsp;&nbsp; case error.UNKNOWN_ERROR:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x.innerHTML = &quot;An unknown error occurred.&quot;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
              &nbsp;&nbsp;}<br>
              }
            </div>
          </div>
          <hr>

          <h3 id="Location-specific Information" class="heading-anchor">Location-specific Information</h3>
          This page has demonstrated how to show a user's position on a map.<br>

          Geolocation is also very useful for location-specific information, like:<br>
          <ul>
            <li>Up-to-date local information</li>
            <li>Showing Points-of-interest near the user</li>
            <li>Turn-by-turn navigation (GPS)</li>
          </ul>
          <hr>

          <h3 id="The getCurrentPosition() Method - Return Data" class="heading-anchor">The getCurrentPosition() Method - Return Data</h3>
          The <code class="w3-codespan">getCurrentPosition()</code> method returns an object on success. The latitude,
          longitude and accuracy properties are always returned. The other properties are returned
          if available:<br>
          <table class="ws-table-all notranslate">
            <tr>
              <th style="width:150px">Property</th>
              <th>Returns</th>
            </tr>
            <tr>
              <td>coords.latitude</td>
              <td>The latitude as a decimal number (always returned)</td>
            </tr>
            <tr>
              <td>coords.longitude</td>
              <td>The longitude as a decimal number (always returned)</td>
            </tr>
            <tr>
              <td>coords.accuracy</td>
              <td>The accuracy of position (always returned)</td>
            </tr>
            <tr>
              <td>coords.altitude</td>
              <td>The altitude in meters above the mean sea level (returned if available)</td>
            </tr>
            <tr>
              <td>coords.altitudeAccuracy</td>
              <td>The altitude accuracy of position (returned if available)</td>
            </tr>
            <tr>
              <td>coords.heading</td>
              <td>The heading as degrees clockwise from North (returned if available)</td>
            </tr>
            <tr>
              <td>coords.speed</td>
              <td>The speed in meters per second (returned if available)</td>
            </tr>
            <tr>
              <td>timestamp</td>
              <td>The date/time of the response (returned if available)</td>
            </tr>
          </table>
          <hr>

          <h3 id="Geolocation Object - Other interesting Methods" class="heading-anchor">Geolocation Object - Other interesting Methods</h3>
          The Geolocation object also has other interesting methods:<br>
          <ul>
            <li><code class="w3-codespan">watchPosition()</code> - Returns the current position of the user and continues to
              return updated position as the user moves (like the GPS in a car).</li>
            <li><code class="w3-codespan">clearWatch()</code> - Stops the <code class="w3-codespan">watchPosition()</code> method.</li>
          </ul>
          The example below shows the <code class="w3-codespan">watchPosition()</code> method. You need an accurate GPS device to test this (like
          smartphone):<br>
          <div class="w3-example" style="border:2px;background-color:#D6EEEE;border-radius: 25px;padding: 10px;">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh" style="border:2px;background-color:#ffffff;padding: 10px;">
              &lt;script&gt;<br>var x = document.getElementById(&quot;demo&quot;);<br>function getLocation() {<br>
              &nbsp; if (navigator.geolocation) {<br>&nbsp;&nbsp;&nbsp; navigator.geolocation.watchPosition(showPosition);<br>&nbsp;&nbsp;} else {<br>
              &nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Geolocation is not supported by this browser.&quot;;<br>
              &nbsp;&nbsp;}<br>}<br>
              function showPosition(position) {<br>&nbsp; x.innerHTML = &quot;Latitude: &quot; + position.coords.latitude + <br>&nbsp;&nbsp;&quot;&lt;br&gt;Longitude: &quot; + position.coords.longitude; <br>
              }<br>&lt;/script&gt;
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