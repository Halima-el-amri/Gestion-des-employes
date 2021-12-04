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
    

  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         la liste des employés</a>

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
	
if(isset($_POST ['Age'])){
$Nom=$_POST["Nom"];
$Prenom=$_POST["Prenom"];
$Age=$_POST["Age"];
$Fonction=$_POST["Fonction"];
$CIN=$_POST["CIN"];
$Salaire =$_POST["Salaire"];
$req="INSERT INTO gestion(Nom,Prenom,Age,Fonction,CIN,Salaire) values('$Nom','$Prenom','$Age','$Fonction','$CIN','$Salaire')";
$res=mysqli_query($conn,$req);

}
  

$sql="select * from gestion";
$resu=mysqli_query($conn,$sql);	

?>
<div class="content">
     <div class="container-fluid"> 
       <div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header card-header-primary">
               <h4 class="card-title ">Gestion des employes  </h4>
               <p class="card-category">de notre entreprise</p>
             </div>
             <div class="card-body">
               <div class="table-responsive">
<table class="table table-sm table-purple">
 
<tr>     
<th>Nom</th>
<th>Prenom</th>
<th>Age</th>
<th>Fonction</th>
<th>CIN</th>
<th>Salaire</th>
<th>Modification</th>
<th> suppression</th>
</tr>
<?php

while($row=mysqli_fetch_array($resu))
{
	?>

 <tr>
	<?php

echo "<td>" . $row['Nom'] . "</td>";
echo "<td>" . $row['Prenom'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['Fonction'] . "</td>";
echo "<td>" . $row['CIN'] . "</td>";
echo "<td>" . $row['Salaire'] . "</td>";
?>
<td> 

 <a class="nav-link" href="modifier1.php?Id=<?php echo $row['Id']; ?>">modifier</a>
</td>
<td>

<a class="nav-link" href="DeleteUser2.php?Id=<?php echo $row['Id']; ?>">Supprimer</a>
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

</body>
</html>


