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

<body>

<div class="container">

        <h1>Inscription</h1>

        <form action="GestionE.php" method="POST">

           
    <div class="form-group">
    <label for="Name">  Nom:</label>
      <input type="Text" class="form-control"  placeholder="le nom  " name="Nom" >
    </div>
            <div class="form-group">

                <label for="name">Prenom:</label>

                <input type="Text" class="form-control" placeholder="le prenom " name="Prenom" />

            </div>





            <div class="form-group">

                <label for="Age">Age:</label>

                <input type="Text" class="form-control" placeholder="Age " name="Age"/>

            </div>





            <div class="form-group">

                <label for="Fonction"> Fonction:</label>

                <input type="Text" class="form-control" placeholder=" Fonction " name="Fonction"/>

            </div>





            <div class="form-group">

                <label for="CIN">CIN:</label>

                <input type="text" class="form-control" placeholder="code de carte nationle" name="CIN" />

            </div>

            <div class="form-group">

                <label for="Salaire">Salaire:</label>

                <input type="text" class="form-control" placeholder="salaire d'employe" name="Salaire" />

            </div>

           
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>

</html>