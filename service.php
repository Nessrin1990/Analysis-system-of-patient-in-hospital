<?php

$Id = $_POST['Id'];
$Nom_Ser = $_POST['Nom_Ser'];
$db = new PDO("mysql:host=localhost;dbname=hopital", "root", "");
//preparer la requete d insertion
$req=$db->prepare('INSERT INTO service VALUES (NULL, :Nom_Ser)');
//on 
$req->bindValue(":Nom_Ser",$_POST["Nom_Ser"], PDO::PARAM_STR);
//execution de le requete prèparèe
$res=$req->execute();
if($res)
{
	$message='Ajout avec succès';
}
else
{
	$message='Echec';
}

?>

<html>
<head>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
<body>
<p><?php echo $message;?></p>
</body>
</html>