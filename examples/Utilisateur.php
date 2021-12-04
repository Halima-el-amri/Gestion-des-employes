


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   page d'Utilisateur
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
 
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    
<form method="post" action="modification.php">
  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         la liste des utilisateurs</a>

</div>


  <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="ac.php">
              <i class="material-icons">ACCUEIL</i>
            
            </a>
          </li>

    </div>

 
  





<?php
 
    if (isset($_REQUEST['Id']) && !empty($_REQUEST['Id'])){
       
      $name = htmlspecialchars($_REQUEST['Id'] );
         echo $name;
    }


  $conn=mysqli_connect('localhost','root','','halima')or die (mysqli_error());

  if(isset($_POST['Password'])){
    $Name=$_POST["Username"];
    $Phone=$_POST["Phone_number"];
    $Mail=$_POST["email"];
    $Password=$_POST["Password"];
  $req="INSERT INTO users (Username,Phone_number,email,Password)values('$Name','$Phone','$Mail','$Password') ";
	$res=mysqli_query($conn,$req);	
   
  }
    ?>             
                     
<?php

$sql="select * from users";

$result=mysqli_query($conn,$sql);
  ?>
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tableau </h4>
                  <p class="card-category">Des informations</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
<table class="table table-sm table-purple">
	
<tr>
<th>Nom</th>
<th>Téléphone</th>
<th>Email</th>
<th>Mot de passe</th>
<th>Modification</th>
<th> Supprission</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	?>

 <tr>
	<?php
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Phone_number'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
?>
   <td> 

    <a class="nav-link" href="modification.php?Id=<?php echo $row['Id']; ?>">Modifier</a>
</td>
<td>

<a class="nav-link" href="DeleteUser.php?Id=<?php echo $row['Id']; ?>">Supprimer</a>
</td>


<?php

}

 
 echo "</table>";

 ?>  
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</form>
      
</body>

</html>
