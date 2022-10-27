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
<h1 color="grey"><center>Liste des demandes</center></h1>
<table class="table table-bordered table-hover table-stripped">
<tr><th>Id</th><th>type</th><th>type_analyse</th><th>hospitalisation</th><th>type_ech</th><th>Action1</th><th>Action2</th></tr>
<?php
//reception des informations
include("connexion.php");
$query = "SELECT * FROM demande";
$result = $conn->query($query);
$data = $result->fetchAll();
for($i =0;$i<count($data);$i++)
{   
    $id=$data[$i]["id"];
	$type=$data[$i]["type"];
	$type_analyse=$data[$i]["type_analyse"];
	$hospitalisation=$data[$i]["hospitalisation"];
	$type_ech=$data[$i]["type_ech"];
	echo "<tr><td>$id</td><td>$type</td><td>$type_analyse</td><td>$hospitalisation</td><td>$type_ech</td><td><a href='demandeup.php?id=$id' class='btn btn-warning'> Modifier</a></td><td><a href='suppdemande.php?id=$id' class='btn btn-danger'> Supprimer</a></td>";
	echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
