<!DOCTYPE html>
<html>
<head>
<title>PolyRestaurant</title>
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class="slide">
  <img class="mySlides animate-top" src="../images/food1.jpg" style="width:100%;height:100%;background-size:100%;">
  <img class="mySlides animate-top" src="../images/food2.jpg" style="width:100%;height:100%;background-size:100%;">
  <img class="mySlides animate-top" src="../images/food3.jpg" style="width:100%;height:100%;background-size:100%;">
  <img class="mySlides animate-top" src="../images/food4.JPG" style="width:100%;height:100%;background-size:100%;">
</div>

								
<div class="row" style="margin-left:300px">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
	<h3>A propos de nous</h3>
      <img src="../images/thumbnailstudents.jpg" alt="...">
      <div class="caption" style="color:white">
        
        <p>Polyrestaurant est un restaurant familial de cuisine traditionnelle asiatique situé en plein centre de Montpellier.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
	   <h3>Nos Services</h3>
      <img src="../images/livraison.jpg" alt="...">
      <div class="caption" style="color:white">
     
        <p>Livraison :<br>Lundi - Samedi : 10h - 22h<br>Dimanche : Fermé</p>
      </div>
    </div>
  </div>
</div>



<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


</script>
<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html> 
