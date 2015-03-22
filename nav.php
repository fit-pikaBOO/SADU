<div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">SADU</a>
          </div>
          <div class="navbar-collapse collapse">
          
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li <?php if($active=="home"){?> class="active" <?php } ?>><a href="index.php">Home</a></li>
              <li <?php if($active=="events"){?> class="active" <?php } ?>><a href="events.php">Events</a></li>
              <li <?php if($active=="articles"){?> class="active" <?php } ?>><a href="articles.php">Articles</a></li>
              <li <?php if($active=="studentorg"){?> class="active" <?php } ?>><a href="student.php">Student Organizations</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Student Coordinating Council</a></li>
                  <li><a href="#">The Innovator</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Academic Organization</a>
                   <ul class="dropdown-menu">
                      <li><a href="#">ACM</a></li>
                      <li><a href="#">CpEO</a></li>
                      <li><a href="#">ECESS</a></li>
                      <li><a href="#">ITSO</a></li>
                      <li><a href="#">English Guild</a></li>
                      <li><a href="#">HSS</a></li>
                      <li><a href="#">CSNC</a></li>
                      <li><a href="#">JPCS</a></li>
                      <li><a href="#">SYMPHONY</a></li>
                      <li><a href="#">MSO</a></li>
                      <li><a href="#">iTAM BAYANI</a></li> 
                      <li><a href="#">PHYSO</a></li>
                   </ul>
                 </li>
                  <li><a href="#">Non-Academic Organization</a>
                   <ul class="dropdown-menu">
                      <li><a href="#">Artist Connection</a>
                        <ul class="dropdown-menu">
                             <li><a href="#">AC-  Exude Dancer</a></li>
                             <li><a href="#">AC - Music Synergy</a></li>
                             <li><a href="#">AC - Theater Guild</a></li>
                             <li><a href="#">AC - TechSquad</a></li>
                        </ul>
                        </li>
                      <li><a href="#">YFC</a></li>
                      <li><a href="#">RAC</a></li>
                   </ul>
                 </li>
                </ul>
              </li>
            </ul>
          
            <!-- Right nav -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">SADU Portal</a></li>
              <li<?php if($active=="resources"){?> class="active" <?php } ?>><a href="resources.php">Resources</a></li>
              <li<?php if($active=="contactus"){?> class="active" <?php } ?>><a href="contactus.php">Contact Us</a></li>
            </ul>
          
          </div>
        </div>
      </div>