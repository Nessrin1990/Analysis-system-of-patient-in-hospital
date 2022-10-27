<?php
$tnom="";
$tprenom="";
$tcin="";
$spécialité="";
$Tel="";
if(isset($_POST["id"],$_POST["tnom"],$_POST["tprenom"],$_POST["tcin"], $_POST["spécialité"], $_POST["Tel"]))
{
	$id = $_POST["id"];
	$tnom = $_POST["tnom"];
	$tprenom = $_POST["tprenom"];
	$tcin = $_POST["tcin"];
	$spécialité=$_POST["spécialité"];
	$Tel = $_POST["Tel"];
	if(!empty($tnom) && !empty($tprenom)  && !empty($tcin) && !empty($spécialité) && !empty($Tel) )
	{
		include("connexion.php");
		$query = "insert into medecin values (NULL,'$tnom','$tprenom','$tcin','$spécialité','$Tel')";
		$conn->exec($query);
		header ("Location:listemed.php");
		
	}
}
?>

<html>
<head>
  <title>Ajout medecin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:url(model1.jpg); background-repeat:no-repeat;background-size:100% 100%">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
	integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<ul class="pager">
  <li class="previous"><a href="#">Previous</a></li>
  <li class="next"><a href="Authen.php">Next</a></li>
</ul>
<br>
<h1><center>Formulaire de Registration</center></h1>
<br>
<div class="container">
<div class="myform">
<form method="post" action="#">

   <input type="hidden" name="id" class= "form-control" value="<?php echo $id?>">
   <input type="text" placeholder="Nom" name="tnom" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $tnom?>"><br/ >
   <input type="text" placeholder="Prenom" name="tprenom" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $tprenom?>"><br/ >
   <input type="text" name="tcin" placeholder="CIN" class= "form-control" value="<?php echo $tcin?>"><br/ >
  <input type="text" name="spécialité" placeholder="spécialité" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $spécialité?>"><br/ >
<input type="text" name="Tel" placeholder="Tel" class= "form-control" value="<?php echo $Tel?>"><br/ >
	<input type="submit" name="submit" value="Submit" class="btn btn-success">

</form>
</div>	
</div>
</br>
</body>
</html>