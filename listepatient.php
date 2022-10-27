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
<tr><th>Id</th><th>NOM</th><th>PRENOM</th><th>CIN</th><th>date_de_naissance</th><th>TEL</th></tr>
<?php
//reception des informations
include("connexion.php");
$query = "SELECT * FROM patient";
$result = $conn->query($query);
$data = $result->fetchAll();
for($i =0;$i<count($data);$i++)
{   
    $id=$data[$i]["id"];
	$nom=$data[$i]["nom"];
	$prenom=$data[$i]["prenom"];
	$cin=$data[$i]["cin"];
	$naissance=$data[$i]["naissance"];
	$tel=$data[$i]["tel"];
	echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td><td>$cin</td><td>$naissance</td><td>$tel</td>";
	echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
