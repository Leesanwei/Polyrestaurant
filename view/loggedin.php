<?php 
require('../controller/loggedin.php'); 
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
<a href="./loggedin.php">
<img src="../images/imageedit_1_6160319305.gif" alt="..." style="height:60px;width:130px">
<?php echo "Bienvenue $prenom";?></a>
</div>
<ul class="nav navbar-nav navbar-right">
 <form action="../controller/loggedin.php" method="post">
 <button class="btn btn-primary btn-lg"  type="submit" name="info" value="info" style="margin-right:50px;">Info Personelle</button>
    

  <button class="btn btn-primary btn-lg" type="submit" name="logout" value="logout" >Deconnecter</button>
 </form>
 
 </ul>
</div>
</nav>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#entree" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Entree</a></li>
    <li><a data-toggle="tab" href="#plat" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Plat</a></li>
    <li><a data-toggle="tab" href="#dessert" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Dessert</a></li>
	<li><a data-toggle="tab" href="#commandes" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Mon Panier</a></li>
	<li><a data-toggle="tab" href="#historique" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Mes derniers commandes</a></li>

 </ul>

  <div class="tab-content">
    <div id="entree" class="tab-pane fade in active">
     <table class="table" style="background-color: white;width: 1200px;height: 600px;margin: 0 auto;font-size: 20px;border-radius: 0px;overflow: hidden;margin-bottom:100px" >
    <thead>
      <tr>
        <th></th>
        <th>Nom</th>
        <th>Description</th>
		<th>Prix</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<form action="../controller/loggedin.php" method="post">
	 <?php include("../controller/afficheentreeloggedin.php"); ?>
   </form>
    </tbody>
  </table>
    </div>
    <div id="plat" class="tab-pane fade">
      <table class="table" style="background-color: white;width: 1200px;height: 600px;margin: 0 auto;font-size: 20px;border-radius: 0px;overflow: hidden;margin-bottom:100px" >
    <thead>
      <tr>
        <th></th>
        <th>Nom</th>
        <th>Description</th>
		<th>Prix</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<form action="../controller/loggedin.php" method="post">
	<?php include("../controller/afficheplatloggedin.php"); ?>
     </form>
    </tbody>
  </table>
    </div>
    <div id="dessert" class="tab-pane fade">
     <table class="table" style="background-color: white;width: 1200px;height: 600px;margin: 0 auto;font-size: 20px;border-radius: 0px;overflow: hidden;margin-bottom:100px" >
    <thead>
      <tr>
        <th></th>
        <th>Nom</th>
        <th>Description</th>
		<th>Prix</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<form action="../controller/loggedin.php" method="post">
<?php include("../controller/affichedessertloggedin.php"); ?>
     </form>
    </tbody>
  </table>
  </div>
  <div id="commandes" class="tab-pane fade">
     <table class="table" style="background-color: white;width: 1200px;height: 600px;margin: 0 auto;font-size: 20px;border-radius: 0px;overflow: hidden;margin-bottom:100px" >
    <thead>
      <tr>
        <th></th>
        <th>Nom</th>
        <th>Prix</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
	<form action="../controller/loggedin.php" method="post">
<?php include("../controller/affichecommande.php"); ?>
	<tr><td></td><td><p>Prix Total : </p></td>
	<td><?php echo $prixtotal; ?></td>
     <td><button class="btn btn-primary btn-lg" type="submit" name="valider" value="valider">Valider!</button></td>
    </form>
	</tbody>
  </table>
  </div>
  <div id="historique" class="tab-pane fade">
     <table class="table" style="background-color: white;width: 1200px;height: 400px;margin: 0 auto;font-size: 20px;border-radius: 0px;overflow: hidden;margin-bottom:100px" >
    <thead>
      <tr>
        <th></th>
        <th>Nom</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
	<?php include("../controller/affichehistorique.php"); ?>
	</tbody>
  </table>
  </div>
</div>
</div>	
</div>					


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="../js/bootstrap.min.js" ></script></body>
</html> 