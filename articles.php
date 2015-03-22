<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="FEU, FEU Tech, FEU - East Asia College, FEU EAC, Insitute of Technolog, Far Eastern University, university, SADU," />
        <meta name="description" content="FEU Tech SACSO - SADU Official Website" />
        <?php include 'function/include.php' ?>
        <title>SADU Activities - fit.edu.ph</title>



    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  </head>

  <body>

      <?php $active = "articles";
      include 'nav.php'; ?>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <?php 
    include 'function/connect.php'; 
    $result = mysqli_query($mysql,"SELECT * FROM rso WHERE acronym = 'acm'" );
    $row = mysqli_fetch_array($result);
    echo $row[3];
    ?>

     <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
  </body>
</html>