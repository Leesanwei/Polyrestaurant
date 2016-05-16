
<!DOCTYPE html>
<html>
<head>
<title>PolyRestaurant</title>
<meta charset="ISO8859-15" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO8859-15" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="icon" type="image/png" href="../images/imageedit_1_6160319305.gif" sizes="32x32">
<link href="../css/index.css" rel="stylesheet" type="text/css" >
</head>

<body>


<nav class="navbar navbar-transparent">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
<a href="./index.php">
<img src="../images/imageedit_1_6160319305.gif" alt="..." style="height:60px;width:130px">
PolyRestaurant</a>
</div>
<ul class="nav navbar-nav navbar-right">
<a href="./consultercarte.php">
  <button type="button" class="btn btn-primary btn-lg" style="margin-right:50px;">Consulter la carte</button></a>
 <a href="./login.php">
  <button type="button" class="btn btn-primary btn-lg" style="margin-right:50px;">Se connecter</button></a>
    
       
  <a href="./signup.php">
  <button type="button" class="btn btn-primary btn-lg">Inscription</button></a>
 </ul>
</div>
</nav>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#entree" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Entree</a></li>
    <li><a data-toggle="tab" href="#plat" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Plat</a></li>
    <li><a data-toggle="tab" href="#dessert" style="color:black;font-size:20px;font-family:Lucida Handwriting;">Dessert</a></li>
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
 <?php include("../controller/afficheentree.php"); ?>
	
     
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
	 <?php include("../controller/afficheplat.php"); ?>
     
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
 <?php include("../controller/affichedessert.php"); ?>
     
    </tbody>
  </table>
  </div>
</div>
</div>							




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="../js/bootstrap.min.js" ></script>
</body>
</html> 
