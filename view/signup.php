


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
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="../images/imageedit_1_6160319305.gif" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signup" method="post" action="../controller/signup.php">
			           <?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
echo "Username taken, please try another username";
}
else{
	echo "Veuillez remplir tous les champs.";
}
?>
      
				
                <input type="text" pattern=".{6,}"   required title="6 characters minimum" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" pattern=".{6,}"   required title="6 characters minimum" id="password" name="password" class="form-control" placeholder="Password" style="margin-top:10px" required>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" style="margin-top:10px" required>
				<input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prenom" style="margin-top:10px" required>
				<input type="date" id="datenaissance" name="datenaissance" class="form-control" placeholder="Date Naissance" style="margin-top:10px" required>
				<input type="text" id="rue" name="rue" class="form-control" placeholder="Rue" style="margin-top:10px" style="margin-top:10px" required >
				<input type="number" max="99999" id="codepostal"  name="codepostal" class="form-control" placeholder="Code Postal" style="margin-top:10px" required >
                <input type="text" id="ville" name="ville" class="form-control" placeholder="Ville" style="margin-top:10px" required>
				<input type="email" id="mail"  name="mail" class="form-control" placeholder="Email"style="margin-top:10px"  required>
				<input type="number" max="9999999999" id="telephone" name="telephone" class="form-control" placeholder="Telephone" style="margin-top:10px" required>
				<button class="btn btn-lg btn-primary btn-block btn-signup" type="submit" style="margin-top:10px" name="signup" value="signup">Sign up</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->


								


<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>
</body>
</html> 