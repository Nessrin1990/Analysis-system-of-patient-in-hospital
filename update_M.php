<?php
$tnom="";
$tprenom="";
$tcin="";
$Tel="";

if(isset($_GET["id"]))
{
	$id = $_GET["id"];
	
    if(!empty($id) && is_numeric( $id))
	 
     { 
	    include("connexion.php");
        $query = "SELECT * FROM medecin WHERE `medecin`.`ID` = '$id'";
		$result = $conn->query($query);
		$data = $result->fetchAll();
		$tnom=$data[0]["Nom"];
		$tprenom=$data[0]["Prenom"];
		$tcin=$data[0]["Cin"];
		$Tel=$data[0]["tel"];
	 }
}
if(isset($_POST["id"],$_POST["tnom"],$_POST["tprenom"],$_POST["tcin"],$_POST["Tel"]))
{
	$id = $_POST["id"];
	$tnom = $_POST["tnom"];
	$tprenom = $_POST["tprenom"];
	$tcin = $_POST["tcin"];
	$Tel = $_POST["Tel"];
if(!empty($id) && !empty($tnom) && !empty($tprenom)  && !empty($tcin) && !empty($Tel) )
	{   
		include("connexion.php");
		$query1 = "UPDATE `medecin` SET `Cin` = '$tcin', `Nom` = '$tnom',`Prenom` = '$tprenom',  `tel` = '$Tel' WHERE `medecin`.`ID` = '$id'";
		$result1=$conn->query($query1);
		$data1=$result1->fetchAll();
		$tnom=$data1[0]["Nom"];
		$tprenom=$data1[0]["Prenom"];
		$tcin=$data1[0]["Cin"];
		$Tel=$data1[0]["tel"];
		header ("Location:listemed.php");
	}
}
?>

<html>
<head>
  <title>Modifier medecin</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:url(model1.jpg); background-repeat:no-repeat;background-size:100% 100%">
<div class="container">
<h1> Modifier Medecin </h1>
<form method="post">
        <input type="hidden" name="id" value="<?php echo $id?>">
    Nom: <input type="text" name="tnom" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $tnom?>">
    Prenom: <input type="text" name="tprenom" required pattern="[A-Za-z]{3,30}" class= "form-control" value="<?php echo $tprenom?>">
    Cin:  <input type="text" name="tcin" class= "form-control" value="<?php echo $tcin?>">
    tel: <input type="text" name="Tel" class= "form-control" value="<?php echo $Tel?>">
         <input type="submit" name="submit" value = "ok "class="btn btn-primary">
</form>
</div>
</body>
</html>