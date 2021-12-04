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
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
<Form  action ="Utilisateur.php" method="post"> 

<div class="container">
  <h2>User Profil</p></h2>
  <form action="/action_page.php">
    <div class="form-group">
    <label for="Name">  Name:</label>
      <input type="Text" class="form-control"  placeholder="tap your name" name="Username">
    </div>

    <div class="form-group">
    <label for="Phone_number">  Phone_number:</label>
      <input type="Text" class="form-control"  placeholder="tap your number " name="Phone_number">
    </div>






    <div class="form-group">
      <label for="email">Mail:</label>
      <input type="email" class="form-control" id="email" placeholder="tap your mail" name="Mail">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  placeholder="tap your password" name="Password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
</div>

<button type="submit" class="btn btn-primary">FINSH</button>
    </body>
    </form>
</html>