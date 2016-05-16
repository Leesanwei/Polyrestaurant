
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
            <form class="form-signin" method="post" action="../controller/login.php">
                <?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
echo "Wrong Username / Password";
}
else{
	echo "Veuillez vous connecter pour commander.";
}
?>
			
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
               
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login" value="login">Sign in</button>
            </form><!-- /form -->
           
        </div><!-- /card-container -->
    </div><!-- /container -->
								


<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>
</body>
</html> 