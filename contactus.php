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
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  </head>

  <body>

      <?php $active = "contactus";
      include 'nav.php'; ?>





    <div class="container" style="margin-top:70px;">

      <div class="page-header">
        <h1>SmartMenus Bootstrap Addon (Navbar fixed top)</h1>
        <p class="lead">Creating zero config advanced Bootstrap 3 navbars with SmartMenus jQuery and the SmartMenus jQuery Bootstrap Addon.</p>
      </div>
      <p>You basically just need to include the JS/CSS files on your Bootstrap 3 powered pages and everything should work automatically including full support for whatever Bootstrap theme you already use. And, of course, you still have the full power and flexibility of SmartMenus jQuery at hand should you need to tweak or customize anything.</p>

      <h2>Source Code</h2>

      <h3>CSS</h3>
      <p>In addition to Bootstrap's CSS just include the SmartMenus jQuery Bootstrap Addon CSS. It's just static CSS code you don't need to edit at all (and probably shouldn't try to).</p>
      <pre>&lt;!-- Bootstrap core CSS -->
&lt;link href="../libs/demo-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<span style="color:#419641;">&lt;!-- SmartMenus jQuery Bootstrap Addon CSS -->
&lt;link href="../addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet"></span></pre>

      <h3>HTML</h3>
      <p>A sample multi-level dropdown navbar with left and right aligned navs.</p>
      <pre>&lt;!-- Static navbar -->
&lt;div class="navbar navbar-default navbar-fixed-top" role="navigation">
  &lt;div class="navbar-header">
    &lt;button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      &lt;span class="sr-only">Toggle navigation&lt;/span>
      &lt;span class="icon-bar">&lt;/span>
      &lt;span class="icon-bar">&lt;/span>
      &lt;span class="icon-bar">&lt;/span>
    &lt;/button>
    &lt;a class="navbar-brand" href="#">Project name&lt;/a>
  &lt;/div>
  &lt;div class="navbar-collapse collapse">

    <span style="color:#419641;">&lt;!-- Left nav -->
    &lt;ul class="nav navbar-nav">
      &lt;li>&lt;a href="#">Link&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Link&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Link&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Dropdown&lt;/a>
        &lt;ul class="dropdown-menu">
          &lt;li>&lt;a href="#">Action&lt;/a>&lt;/li>
          &lt;li>&lt;a href="#">Another action&lt;/a>&lt;/li>
          &lt;li>&lt;a href="#">Something else here&lt;/a>&lt;/li>
          &lt;li class="divider">&lt;/li>
          &lt;li class="dropdown-header">Nav header&lt;/li>
          &lt;li>&lt;a href="#">Separated link&lt;/a>&lt;/li>
          &lt;li>&lt;a href="#">One more separated link&lt;/a>
            &lt;ul class="dropdown-menu">
              &lt;li>&lt;a href="#">Action&lt;/a>&lt;/li>
              &lt;li>&lt;a href="#">Another action&lt;/a>&lt;/li>
              &lt;li>&lt;a href="#">A long sub menu&lt;/a>
                &lt;ul class="dropdown-menu">
                  &lt;li>&lt;a href="#">Action&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Something else here&lt;/a>&lt;/li>
                  &lt;li class="disabled">&lt;a class="disabled" href="#">Disabled item&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">One more link&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 1&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 2&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 3&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 4&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 5&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 6&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 7&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 8&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 9&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 10&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 11&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 12&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 13&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 14&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 15&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 16&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 17&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 18&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 19&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 20&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 21&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 22&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 23&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 24&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 25&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 26&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 27&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 28&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 29&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 30&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 31&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 32&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 33&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 34&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 35&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 36&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 37&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 38&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 39&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 40&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 41&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 42&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 43&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 44&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 45&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 46&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 47&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 48&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 49&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 50&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 51&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 52&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 53&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 54&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 55&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 56&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 57&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 58&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 59&lt;/a>&lt;/li>
                  &lt;li>&lt;a href="#">Menu item 60&lt;/a>&lt;/li>
                &lt;/ul>
              &lt;/li>
              &lt;li>&lt;a href="#">Another link&lt;/a>&lt;/li>
              &lt;li>&lt;a href="#">One more link&lt;/a>&lt;/li>
            &lt;/ul>
          &lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul></span>

    <span style="color:#419641;">&lt;!-- Right nav -->
    &lt;ul class="nav navbar-nav navbar-right">
      &lt;li>&lt;a href="bootstrap-navbar.html">Default&lt;/a>&lt;/li>
      &lt;li>&lt;a href="bootstrap-navbar-static-top.html">Static top&lt;/a>&lt;/li>
      &lt;li class="active">&lt;a href="bootstrap-navbar-fixed-top.html">Fixed top&lt;/a>&lt;/li>
      &lt;li>&lt;a href="bootstrap-navbar-fixed-bottom.html">Fixed bottom&lt;/a>&lt;/li>
      &lt;li>&lt;a href="#">Dropdown&lt;/a>
        &lt;ul class="dropdown-menu">
          &lt;li>&lt;a href="#">Action&lt;/a>&lt;/li>
          &lt;li>&lt;a href="#">Another action&lt;/a>&lt;/li>
          &lt;li>&lt;a href="#">Something else here&lt;/a>&lt;/li>
          &lt;li class="divider">&lt;/li>
          &lt;li class="dropdown-header">Nav header&lt;/li>
          &lt;li>&lt;a href="#">A sub menu&lt;/a>
            &lt;ul class="dropdown-menu">
              &lt;li>&lt;a href="#">Action&lt;/a>&lt;/li>
              &lt;li>&lt;a href="#">Another action&lt;/a>&lt;/li>
              &lt;li>&lt;a href="#">Something else here&lt;/a>&lt;/li>
              &lt;li class="disabled">&lt;a class="disabled" href="#">Disabled item&lt;/a>&lt;/li>
              &lt;li>&lt;a href="#">One more link&lt;/a>&lt;/li>
            &lt;/ul>
          &lt;/li>
          &lt;li>&lt;a href="#">A separated link&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul></span>

  &lt;/div>&lt;!--/.nav-collapse -->
&lt;/div></pre>

      <h3>JavaScript</h3>
      <p>In addition to Bootstrap's JavaScript just include SmartMenus jQuery and the SmartMenus jQuery Bootstrap Addon. The default options used in <code>jquery.smartmenus.bootstrap.js</code> should work well for all. However, you can, of course, tweak them if you like.</p>
      <pre>&lt;!-- Bootstrap core JavaScript
================================================== -->
&lt;!-- Placed at the end of the document so the pages load faster -->
&lt;script src="https://code.jquery.com/jquery-1.10.2.min.js">&lt;/script>
&lt;script src="../libs/demo-assets/bootstrap/js/bootstrap.min.js">&lt;/script>

<span style="color:#419641;">&lt;!-- SmartMenus jQuery plugin -->
&lt;script type="text/javascript" src="../jquery.smartmenus.js">&lt;/script>

&lt;!-- SmartMenus jQuery Bootstrap Addon -->
&lt;script type="text/javascript" src="../addons/bootstrap/jquery.smartmenus.bootstrap.js">&lt;/script></span></pre>

      <hr />

      <ul class="pagination">
        <li><a href="index.html">&laquo; Back to main demo</a></li>
      </ul>

    </div> <!-- /container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>

    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>




  </body>
</html>