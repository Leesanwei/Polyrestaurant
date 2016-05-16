<?php
require('../controller/info.php'); 
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
<link href="../css/index.css" rel="stylesheet" type="text/css" >
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
 <form action="../controller/info.php" method="post">
 <button class="btn btn-primary btn-lg"  type="submit" name="modifyinfo" value="modifyinfo" style="margin-right:50px;">Modifier Mes Infos</button>
    

  <button class="btn btn-primary btn-lg" type="submit" name="logout" value="logout" >Deconnecter</button>
 </form>
 </ul>
</div>
</nav>

<table class="table table-hover table-bordered" >
 <tbody>
    <tr>
      <th scope="row">Nom</th>
      <td><?php echo $nom; ?></td>
    </tr>
    <tr>
      <th scope="row">Prenom</th>
      <td><?php echo $prenom; ?></td>

    </tr>
    <tr>
      <th scope="row">Date de naissance</th>
      <td><?php echo $datenaissance; ?></td>
    </tr>
	<tr>
      <th scope="row">rue</th>
      <td><?php echo $rue; ?></td>
    </tr>
	<tr>
      <th scope="row">Code Postal</th>
      <td><?php echo $codepostal; ?></td>
    </tr>
	<tr>
      <th scope="row">Ville</th>
      <td><?php echo $ville; ?></td>
    </tr>
	<tr>
      <th scope="row">Email</th>
      <td><?php echo $mail; ?></td>
    </tr>
	<tr>
      <th scope="row">Telephone</th>
      <td><?php echo $telephone; ?></td>
    </tr>
  </tbody>
</table>

								



<!-- Latest compiled and minified JavaScript -->
<script src="./js/bootstrap.min.js" ></script>
</body>
</html> 