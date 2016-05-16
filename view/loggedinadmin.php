<?php
require('../controller/loggedinadmin.php'); 
?>

<!DOCTYPE html>
<html>
<head>
<title>PolyRestaurant</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=ISO8859-15" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="icon" type="image/png" href="../images/imageedit_1_6160319305.gif" sizes="32x32">
<link href="../css/index.css" rel="stylesheet" type="text/css" >
<!-- Latest compiled and minified JavaScript -->


</head>

<body>


<nav class="navbar navbar-transparent">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
<a href="./loggedinadmin.php">
<img src="../images/imageedit_1_6160319305.gif" alt="..." style="height:60px;width:130px">
<?php echo "Bienvenue $prenom";?></a>
</div>
<ul class="nav navbar-nav navbar-right">
 <form action="../controller/loggedinadmin.php" method="post">
 <button class="btn btn-primary btn-lg" type="submit" name="logout" value="logout" >Deconnecter</button>
 </form>
 
 </ul>
</div>
</nav>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Commandes En Cours" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Commandes En Cours</a></li>
 </ul>

  <div class="tab-content">
    <div id="Commandes En Cours" class="tab-pane fade in active">
     <table class="table" style="background-color: white;width: 1200px;height: 400px;margin: 0 auto;font-size: 20px;border-radius: 0px;overflow: hidden;margin-bottom:100px" >
    <thead>
      <tr>
        <th>Date Reservation</th>
        <th>Nom Client</th>
        <th>Adresse</th>
		<th>Nom plat</th>
		<th>Telephone</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<form action="loggedinadmin.php" method="post">
	 <?php include("../controller/affichecommandeencours.php"); ?>
   </form>
    </tbody>
  </table>
    </div>
</div>						


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="./js/bootstrap.min.js" ></script>
</body>
</html> 