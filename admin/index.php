<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="FEU, FEU Tech, FEU - East Asia College, FEU EAC, Insitute of Technolog, Far Eastern University, university, SADU," />
        <meta name="description" content="FEU Tech SACSO - SADU Official Website" />
      
        <title>Student Activities and Development Unit - fit.edu.ph</title>
        <link rel="stylesheet" type="text/css" href="css/default.css">
        <link rel="stylesheet" href="css/styles.css">
           <script>
					  if(window.location.hash) {
					      var hash = window.location.hash.substring(1); 
					      alert (hash);
					     
					  } 
					</script>
</head>
<body>
		<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		echo $actual_link; ?>
		<div id="leftnav">
			  <div id="header"> SADU Admin Panel</div>
			  <section class="container">
			    <nav class="vnav">
			      <ul class="vnav-menu">
			        <li  class="active" >
			          <a href="index.php#home" class="vnav-item">
			          	<?php $nav = "home"; ?>
			            Home
			         
			          </a>
			        </li>
			         <li>
			          <a href="index.php#image-slider" class="vnav-item">
			           	  Image Slider
			          </a>
			        </li>
			        <li >
			          <a href="index.php#rso" class="vnav-item">
			          	Recognized Student Organization
			          </a>
			        </li>
			        <li >
			          <a href="index.php#events" class="vnav-item">
			            Events and Activities
			          </a>
			        </li>
			        <li>
			          <a href="index.php#articles" class="vnav-item">
			            Articles
			          </a>
			        </li>
			         <li>
			          <a href="index.php#contact-us" class="vnav-item">
			           	Contact Us
			          </a>
			        </li>
			         <li>
			          <a href="index.php#officers" class="vnav-item">
			           	 Officers
			          </a>
			        </li>
			        
			         <li>
			          <a href="index.php#logout" class="vnav-item">
			           	Logout
			          </a>
			        </li>
			      </ul>
			    </nav>
			  </section>

 		<div id="footer">
 			Powered by: ACM
 		</div>

		</div>
		<div id="maindiv">
			<iframe src="../index.php" frameborder="0" height = "100%" width = "100%"></iframe>
		</div>
</body>
</html>