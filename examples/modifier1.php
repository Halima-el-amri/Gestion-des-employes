<!DOCTYPE html>



<html lang="en">

<head>

    <title>la liste des employes</title>

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



    <?php





    $conn = mysqli_connect('localhost', 'root', '', 'halima') or die(mysqli_error());







    $sql = "select * From gestion  where Id=" . $_REQUEST['Id'] . " ";



    $result = mysqli_query($conn, $sql) or die("bad query");

    while ($row = mysqli_fetch_array($result)) {

        $lname = $row['Nom'];

        $fname =  $row['Prenom'];

        $age =  $row['Age'];

        $fonction = $row['Fonction'];

        $cin = $row['CIN'];

        $salaire = $row['Salaire'];
    }





    ?>



    <form action="modification2.php?Id=<?php echo  $_REQUEST['Id']; ?>" method="post">





        <div class="container">

            <h2>Modification</h2>

            <div class="form-group">

                <label for="Name"> Nom:</label>

                <input type="Text" class="form-control" placeholder="le nom  " name="Nom" value=<?php echo $lname; ?> />

            </div>

            <div class="form-group">

                <label for="Name"> Prenom:</label>

                <input type="Text" class="form-control" placeholder="le prenom " name="Prenom" value=<?php echo $fname; ?> />

            </div>

            <div class="form-group">

                <label for="Phone_number"> Age:</label>

                <input type="Text" class="form-control" placeholder="Age " name="Age" value="<?php echo $age; ?>" />

            </div>

            <div class="form-group">

                <label for="Phone_number"> Fonction:</label>

                <input type="Text" class="form-control" placeholder=" Fonction " name="Fonction" value="<?php echo $fonction; ?>" />

            </div>

            <div class="form-group">

                <label for="email">CIN:</label>

                <input type="text" class="form-control" id="email" placeholder="code de carte nationle" name="CIN" value="<?php echo $cin; ?>" />

            </div>

            <div class="form-group">

                <label for="pwd">Salaire:</label>

                <input type="text" class="form-control" placeholder="salaire d'employe" name="Salaire" value="<?php echo $salaire; ?>" />

            </div>

          

        </div>

        <input type="submit" class="btn btn-primary" name="update" value="UPDATE DATA" />

    </form>

</body>



</html>