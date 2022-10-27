<?php
$nom="";
$prenom="";
$cin="";
$naissance="";
$tel="";
if(isset($_POST["id"], $_POST["nom"], $_POST["prenom"], $_POST["cin"], $_POST["naissance"], $_POST["tel"]))
{
	$id = $_POST["id"];
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$cin = $_POST["cin"];
	$naissance =$_POST["naissance"];
	$tel = $_POST["tel"];
	if(!empty($id) && !empty($nom)&& !empty($prenom)&& !empty($cin) && !empty($naissance) && !empty($tel))
	{
		include("connexion.php");
		$query = "insert into patient values (NULL,'$nom','$prenom','$cin','$naissance','$tel')";
		$conn->exec($query);
		header ("Location:listepatient.php");
	}
}

?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Formulaire</title>
  </head>
<body style="background:url(model1.jpg); background-repeat:no-repeat;background-size:100% 100%">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
	integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<div class="body_content">
<div class="module">

<br>
<h1>Formulaire de Registration</h1>
<br>
<div class="container">
<div class="myform">
<form method="post" action="#">
   <div class="row">
   <div class="form-group col-6">
   <input type="hidden" name="id" class= "form-control" value="<?php echo $id?>">
   </div>
   </div>
   <div class="row">
   <div class="form-group col-6">
   <input type="text" placeholder="Nom" name="nom" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $nom?>"><br/ >
   </div>
   </div>
   <div class="row">
   <div class="form-group col-6">
   <input type="text" placeholder="prenom" name="prenom" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $prenom?>"><br/ >
   </div>
   </div>
   <div class="row">
   <div class="form-group col-6">
   <input type="text" name="cin" placeholder="cin" class= "form-control" value="<?php echo $cin?>"><br/ >
   </div>
   </div>
   <div class="row">
        <div class="form-group col-6">
        <input type="date" name="naissance" placeholder="Birthday" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $naissance?>"><br/ >
		</div>
		</div>
   <div class="row">
         <div class="form-group col-6">
         <input type="text" name="tel" placeholder="Tel" class= "form-control" value="<?php echo $tel?>"><br/ >
		 </div>
		 </div>
		 
	  <div class="row">
	 <div class="form-group">
	<input type="submit" name="submit" value="Submit" class="btn btn-success">
	</div>
	</div>
</form>

</body>
</html>




