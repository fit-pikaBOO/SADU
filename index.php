<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="FEU, FEU Tech, FEU - East Asia College, FEU EAC, Insitute of Technolog, Far Eastern University, university, SADU," />
        <meta name="description" content="FEU Tech SACSO - SADU Official Website" />
        <?php include 'function/include.php' ?>
        <title>Student Activities and Development Unit - fit.edu.ph</title>



    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/smooth_slider.css">
    <link href="css/default.css" rel="stylesheet">
  <script src="js/jquery-slider.js"></script>
  <script>
    $(function() {
      $('#resume').on('click', function(){ // set up resume button behavior
        $("#pan_area").smoothslider("resume") // resume playing of this slideshow. Pass in "pause" to pause it instead
        $(this).hide() // hide resume button
      })
      $("#pan_area").smoothslider("install", {
        "playlist_url":"playlist.json", // get the playlist and some config from the server

        // this function gets called whenever there's an image change
        "on_image_change":function(caption, image_url) { 
            var area= $("#img_msg_area").find("span");
            area.animate({"opacity": 0}, 500, "swing", function() {
              area.text(caption);
              area.animate({"opacity": 1}, 500); // fade in & out take 500ms each
            });
          },
        "throbber":$("#throbber"), // an image to show when waiting for images to load
        on_pause:function(){
          $('#resume').show()
        }

      });
    });
  </script>
  </head>
  
  <body>

      <?php $active = "home";
      include 'nav.php'; ?>

      



  <div class="slideshowwrapper">
  <div id="throbber"><img src="img/other/1.jpg"></div>
  <div id="resume" style="display:none">Replay</div>
  <div id="pan_area"></div>
  <div id="img_msg_area"><span></span></div>
</div>
<div id="itamlogo">
<img src = "img/logo/itam.png" heigth = "250px" width = "250px">
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
  </body>
</html>