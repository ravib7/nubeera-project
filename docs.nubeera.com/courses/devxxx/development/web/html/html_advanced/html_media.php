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
            <h1 class="py-2 px-5 mb-0 heading" style="background: #33A4FF; color: white;">HTML Multimedia</h2>
                <ol class="breadcrumb mx-5 mt-3 px-0">
                    <li class="breadcrumb-item"><a href="https://docs.nubeera.com/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="../../../../">Development</a></li>
                    <li class="breadcrumb-item"><a href="../../../">Web</a></li>
                    <li class="breadcrumb-item active">HTML Basics</li>
                </ol>
                <div class="px-5 pb-5 pt-0 body-text">
                    <!-- <content> -->
                    <hr>Multimedia on the web is sound, music, videos, movies, and animations.
                    <hr>

                    <h3 id="What is Multimedia?" class="heading-anchor">What is Multimedia?</h3>
                    Multimedia comes in many different formats. It can be almost anything you can
                    hear or see, like images, music,
                    sound, videos, records, films, animations, and more.<br>
                    Web pages often contain multimedia elements of different types and formats.
                    <hr>

                    <h3 id="Browser Support" class="heading-anchor">Browser Support</h3>
                    The first web browsers had support for text only, limited to a single font in a single color.<br>
                    Later came browsers with support for colors, fonts, images, and multimedia!<br>
                    <hr>

                    <h3 id="Multimedia Formats" class="heading-anchor">Multimedia Formats</h3>
                    Multimedia elements (like audio or video) are stored in media files. <br>
                    The most common way to discover the type of a file, is to look at the file
                    extension.<br>
                    Multimedia files have formats and different extensions
                    like: .wav, .mp3, .mp4, .mpg, .wmv, and .avi.<br>
                    <hr>

                    <h3 id="Common Video Formats" class="heading-anchor">Common Video Formats</h3>
                    <table>
                        <tr>
                            <td style="width:225px"><img alt="Videoformats" width="196" height="109" src="https://www.w3schools.com/html/pic_video.jpg"></td>
                            <td style="vertical-align:top">There are many video formats out there.<br>
                                <br>The MP4, WebM, and Ogg formats are supported by HTML.<br><br>The MP4 format
                                is recommended by YouTube.
                            </td>
                        </tr>
                    </table>
                    <br>

                    <table class="ws-table-all notranslate">
                        <tr>
                            <th>Format</th>
                            <th style="width:50px">File</th>
                            <th>Description</th>
                        </tr>

                        <tr>
                            <td>MPEG</td>
                            <td>.mpg<br>.mpeg</td>
                            <td>
                                MPEG.
                                Developed by
                                the Moving Pictures Expert Group. The first popular video format on
                                the web. Not supported anymore in HTML. </td>
                        </tr>



                        <tr>
                            <td>AVI</td>
                            <td>.avi</td>
                            <td>
                                AVI (Audio Video Interleave). Developed by Microsoft. Commonly used in video cameras and TV
                                hardware. Plays well on Windows computers, but not in web browsers.</td>
                        </tr>
                        <tr>
                            <td>WMV</td>
                            <td>.wmv</td>
                            <td>
                                WMV (Windows Media Video). Developed by Microsoft. Commonly used in
                                video cameras and TV hardware. Plays well on Windows computers, but not in
                                web browsers.</td>
                        </tr>
                        <tr>
                            <td>QuickTime</td>
                            <td>.mov</td>
                            <td>
                                QuickTime. Developed by Apple. Commonly used in video cameras and TV hardware.
                                Plays well on Apple computers, but not in web browsers.</td>
                        </tr>
                        <tr>
                            <td>RealVideo</td>
                            <td>.rm<br>.ram</td>
                            <td>
                                RealVideo. Developed by Real Media to allow video streaming with low
                                bandwidths. Does not play
                                in web browsers.</td>
                        </tr>
                        <tr>
                            <td>Flash</td>
                            <td>.swf<br>.flv</td>
                            <td>
                                Flash. Developed by Macromedia. Often requires an extra component (plug-in) to play in
                                web browsers.</td>
                        </tr>
                        <tr>
                            <td>Ogg</td>
                            <td>.ogg</td>
                            <td>
                                Theora Ogg. Developed by the Xiph.Org Foundation. Supported by HTML.</td>
                        </tr>
                        <tr>
                            <td>WebM</td>
                            <td>.webm</td>
                            <td>
                                WebM.
                                Developed by Mozilla, Opera, Adobe, and Google. Supported by
                                HTML.</td>
                        </tr>
                        <tr>
                            <td>MPEG-4<br>or MP4</td>
                            <td>.mp4</td>
                            <td>
                                MP4.
                                Developed by
                                the Moving Pictures Expert Group. Commonly used in video cameras and TV hardware.
                                Supported by all browsers and&nbsp; recommended by YouTube.&nbsp;
                            </td>
                        </tr>
                    </table><br>
                    <div class="notes">
                        <strong>Note:</strong> Only MP4, WebM, and Ogg video are supported by the HTML standard.
                    </div>
                    <hr>

                    <h3 id="Common Audio Formats" class="heading-anchor">Common Audio Formats</h3>
                    MP3 is the best format for compressed recorded music. The
                    term MP3 has become synonymous with digital music.<br>
                    If your website is about recorded music, MP3 is the choice.<br>
                    <table class="ws-table-all notranslate">
                        <tr>
                            <th>Format</th>
                            <th style="width:50px">File</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>MIDI</td>
                            <td>.mid<br>.midi</td>
                            <td>
                                MIDI (Musical Instrument Digital Interface).
                                Main format for all electronic
                                music devices like synthesizers and PC sound cards. MIDI files do not contain sound, but digital notes that can be played by electronics.
                                Plays well on all computers and music hardware, but not in web browsers.</td>
                        </tr>
                        <tr>
                            <td>RealAudio</td>
                            <td>.rm<br>.ram</td>
                            <td>
                                RealAudio.
                                Developed by Real Media
                                to allow streaming of audio with low
                                bandwidths. Does not play in web browsers.</td>
                        </tr>
                        <tr>
                            <td>WMA</td>
                            <td>.wma</td>
                            <td>
                                WMA (Windows Media Audio). Developed by Microsoft. Plays well on Windows computers, but not in
                                web browsers.</td>
                        </tr>
                        <tr>
                            <td>AAC</td>
                            <td>.aac</td>
                            <td>
                                AAC (Advanced Audio Coding).
                                Developed by Apple as the default format for
                                iTunes. Plays well on Apple computers, but not in web browsers.</td>
                        </tr>
                        <tr>
                            <td>WAV</td>
                            <td>.wav</td>
                            <td>
                                WAV.
                                Developed by IBM and Microsoft. Plays well on Windows, Macintosh, and Linux operating systems.
                                Supported by
                                HTML.</td>
                        </tr>
                        <tr>
                            <td>Ogg</td>
                            <td>.ogg</td>
                            <td>
                                Ogg.
                                Developed by the Xiph.Org Foundation. Supported by HTML.</td>
                        </tr>
                        <tr>
                            <td>MP3</td>
                            <td>.mp3</td>
                            <td>
                                MP3 files are actually the sound part of MPEG files.
                                MP3 is the most popular format for music players. Combines good
                                compression (small files) with high quality. Supported by all browsers.</td>
                        </tr>
                        <tr>
                            <td>MP4</td>
                            <td>.mp4</td>
                            <td>
                                MP4
                                is a video format, but can also be used for audio. Supported by all browsers.</td>
                        </tr>
                    </table><br>
                    <div class="notes">
                        <strong>Note:</strong> Only MP3, WAV, and Ogg audio are supported by the HTML standard.
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