<?php
$type="";
$type_analyse="";
$type_ech="";
$hospitalisation="";

if(isset($_GET["id"]))
{
	$id = $_GET["id"];
	
    if(!empty($id) && is_numeric( $id))
	 
     { 
	    include("connexion.php");
        $query = "SELECT * FROM demande WHERE `demande`.`id` = '$id'";
		$result = $conn->query($query);
		$data = $result->fetchAll();
		$type=$data[0]["type"];
		$type_analyse=$data[0]["type_analyse"];
		$hospitalisation=$data[0]["hospitalisation"];
		$type_ech=$data[0]["type_ech"];
		
	 }
}

if(isset($_POST["id"],$_POST["type"],$_POST["type_analyse"],$_POST["hospitalisation"],$_POST["type_ech"]))
{
	$id = $_POST["id"];
	$type = $_POST["type"];
	$type_analyse = $_POST["type_analyse"];
	$hospitalisation=$_POST["hospitalisation"];
	$type_ech = $_POST["type_ech"];	
	if(!empty($id) && !empty($type) && !empty($type_analyse)  && !empty($hospitalisation) && !empty($type_ech))
	{
		include("connexion.php");
		$query1 = "UPDATE `demande` SET `type`='$type', `type_analyse`='$type_analyse' ,`hospitalisation`='$hospitalisation',`type_ech`='$type_ech' WHERE `demande`.`id` = '$id'";
		$result1=$conn->query($query1);
		$data1=$result1->fetchAll();
		$type=$data1[0]["type"];
		$type_analyse=$data1[0]["type_analyse"];
		$hospitalisation=$data1[0]["hospitalisation"];
		$type_ech=$data1[0]["type_ech"];
		header ("Location:listedemande.php");
		
	}
}
?>

<html>
<head>
  <title>Modifier demande</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:url(model1.jpg); background-repeat:no-repeat;background-size:100% 100%">
<div class="container">
<h1> Modifier demande </h1>
<form method="post">
     <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="text" name="type" required pattern="[A-Za-z]{3,30}" class= "form-control" placeholder="type" value="<?php echo $type?>"><br />
    <input type="text" name="type_analyse" required pattern="[A-Za-z]{3,30}" class= "form-control" placeholder="type_analyse" value="<?php echo $type_analyse?>"><br />
   <input type="text" name="hospitalisation" class= "form-control" placeholder="hospitalisation" value="<?php echo $hospitalisation?>"><br />
   <input type="text" name="type_ech" class= "form-control" placeholder="type_ech" value="<?php echo $type_ech?>"><br />
	<input type="submit" name="submit" value = "Valider" class="btn btn-primary">
</form>
</div>
</body>
</html>