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
<title>Service</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background:url(model1.jpg); background-repeat:no-repeat;background-size:100% 100%">
      <div class="container">
	   <br />
	   <br />
	   <h2 align="center">Liste des services</h2>
	   <div class="form-group">
	       <form method="POST" action="service.php">
		     <table class="table table-bordered" id="dynamic field">
			 <tr>
			   <input type="hidden" name="Id" class="form-control">
			   <td><input type="text" name="Nom_Ser" class="form-control" placeholder="Entrer le nom"></td>
			   <td><button name="add" id="add">Ajouter</button></td>
			   </tr>
			 </table>
			 </form>
			 </div>
			 </div>
</body>

</html>