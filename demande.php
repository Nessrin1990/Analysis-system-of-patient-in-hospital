<?php
$type="";
$type_analyse="";
$hospitalisation="";
$type_ech="";
if(isset($_POST["id"],$_POST["type"],$_POST["type_analyse"],$_POST["hospitalisation"],$_POST["type_ech"]))
{
	$id = $_POST["id"];
	$type = $_POST["type"];
	$type_analyse = $_POST["type_analyse"];
	$hospitalisation=$_POST["hospitalisation"];
	$type_ech = $_POST["type_ech"];
	if(!empty($type) && !empty($type_analyse) && !empty($hospitalisation)&& !empty($type_ech))
	{
		include("connexion.php");
		$query = "insert into demande values (NULL,'$type','$type_analyse','$hospitalisation','$type_ech')";
		$conn->exec($query);
		echo $query;
		header ("Location:listedemande.php");
		
	}
}
?>

<html>
<head>
  <title>Demandes</title>
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

<h1><center>Demande</center></h1>
<br>
<div class="container">
<div class="myform">
<form method="post" action="#">

   <input type="hidden" name="id" class= "form-control" value="<?php echo $id?>">
   <input type="text" placeholder="type" name="type" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $type?>"><br/ >
   <input type="text" placeholder="type_analyse" name="type_analyse" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $type_analyse?>"><br/ >
  <input type="text" name="hospitalisation" placeholder="hospitalisation" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $hospitalisation?>"><br/ >
	 <input type="text" name="type_ech" placeholder="type_ech" class= "form-control" value="<?php echo $type_ech?>"><br/ >
	<input type="submit" name="submit" value="Enregistrer" class="btn btn-success">

</form>
</div>	
</div>
</br>
</body>
</html>