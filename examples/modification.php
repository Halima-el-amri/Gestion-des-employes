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

<?php


$conn=mysqli_connect('localhost','root','','halima')or die (mysqli_error());



     $sql="select * From users  where Id=" . $_REQUEST['Id'] . " ";

     $result=mysqli_query($conn,$sql) or die ("bad query");
     while($row = mysqli_fetch_array($result)){
     
     $name= $row['Username']  ;
     $Phone=  $row['Phone_number']  ;
     $email=  $row['email']   ;
     $Password= $row['Password']   ;



}


?>

<Form  action ="ModifierUser.php?Id=<?php  echo  $_REQUEST['Id']  ?>" method="post"> 


<div class="container">
  <h2> Modification </p></h2>
 
    <div class="form-group">
    <label for="Name">  Nom:</label>
      <input type="Text" class="form-control"  placeholder="tap your name " name="Username" value =<?php echo $name; ?>  >
    </div>

    <div class="form-group">
    <label for="Phone_number">  Téléphone:</label>
      <input type="Text" class="form-control"  placeholder="tap your number " name="Phone_number"value="<?php echo $Phone; ?>">
    </div>



    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="tap your email" name="email"  value  ="<?php echo $email; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Mot de passe:</label>
      <input type="password" class="form-control"  placeholder="tap your password" name="Password"  value  ="<?php echo $Password; ?>">
    </div>
    
</div>



<input  type="submit" class="btn btn-primary" href="Utilisateur.php" name="update" value=" Modifie" >


</form>

    </body>
    
</html>