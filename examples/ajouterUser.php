
<!DOCTYPE html>

<html lang="en">
<head>
  <title>formlaire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 
  <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">




<Form  action="Utilisateur.php" method="post"> 

<div class="container" >
  <h1>  Nouveau administrateur </p></h1>

    <div class="form-group">
    <label for="Name">Nom et Prénom:</label>
      <input type="Text" class="form-control"  placeholder="Nom et Prenom" name="Username">
    </div>

    <div class="form-group">
    <label for="Phone_number">téléphone:</label>
      <input type="Text" class="form-control"  placeholder=" Numero de téléphone" name="Phone_number">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Mot de passe:</label>
      <input type="password" class="form-control"  placeholder="mot de passe" name="Password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
</div>

<button type="submit" class="btn btn-primary"> Enregistrer</button>
    </body>
    </form>
</html>
   
