<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:url(model1.jpg); background-repeat:no-repeat;background-size:100% 100%">
<div class="container">
<h1 color="grey"><center>Liste des medecins</center></h1>
<table class="table table-bordered table-hover table-stripped">
<tr><th>Id</th><th>NOM</th><th>PRENOM</th><th>CIN</th><th>spécialité</th><th>TEL</th><th>Actions</th></tr>
<?php
//reception des informations
include("connexion.php");
$query = "SELECT * FROM medecin";
$result = $conn->query($query);
$data = $result->fetchAll();
for($i =0;$i<count($data);$i++)
{   
    $id=$data[$i]["ID"];
	$tnom=$data[$i]["Nom"];
	$tprenom=$data[$i]["Prenom"];
	$tcin=$data[$i]["Cin"];
	$spécialité=$data[$i]["spécialité"];
	$Tel=$data[$i]["tel"];
	echo "<tr><td>$id</td><td>$tnom</td><td>$tprenom</td><td>$tcin</td><td>$spécialité</td><td>$Tel</td><td><a href='update_M.php?id=$id' class='btn btn-warning'> Modifier</a></td>";
	echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
