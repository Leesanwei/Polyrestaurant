<?php
require('../controller/modifyinfo.php'); 
?>
	 
<!DOCTYPE html>
<html>
<head>
<title>PolyRestaurant</title>
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="icon" type="image/png" href="../images/imageedit_1_6160319305.gif" sizes="32x32">
<link href="../css/index.css" rel="stylesheet" type="text/css" />
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
 <form action="modifyinfo.php" method="post">
    

  <button class="btn btn-primary btn-lg" type="submit" name="logout" value="logout" >Deconnecter</button>
 </form>
 </ul>
</div>
</nav>

<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="../images/imageedit_1_6160319305.gif" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signup" method="post" action="modifyinfo.php">      
				
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" style="margin-top:10px" autofocus >
				<input type="text" id="rue" name="rue" class="form-control" placeholder="Rue" style="margin-top:10px" style="margin-top:10px"  >
				<input type="number" max="99999" id="codepostal"  name="codepostal" class="form-control" placeholder="Code Postal" style="margin-top:10px"  >
                <input type="text" id="ville" name="ville" class="form-control" placeholder="Ville" style="margin-top:10px" >
				<input type="email" id="mail"  name="mail" class="form-control" placeholder="Email"style="margin-top:10px"  >
				<input type="number" max="9999999999" id="telephone" name="telephone" class="form-control" placeholder="Telephone" style="margin-top:10px" >
				<button class="btn btn-lg btn-primary btn-block btn-signup" type="submit" style="margin-top:10px" name="modifier" value="modifier">Modifier!</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->


								




<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>
</body>
</html> 