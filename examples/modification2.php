<?php
session_start();
?>


<?php
$conn=mysqli_connect('localhost','root','','halima')or die (mysqli_error());




	
if(isset($_POST['update'])){

  


$query="UPDATE gestion SET Nom='".$_POST['Nom']."',Prenom='".$_POST['Prenom']."',Age='".$_POST['Age']."',Fonction='".$_POST['Fonction']."',CIN='".$_POST['CIN']."',Salaire='".$_POST['Salaire']."'where Id=".$_REQUEST['Id']." " ;


$query_run=mysqli_query($conn,$query);

header("Location: http://localhost/d1_c1/halima/examples/GestionE.php");
exit();


if($query_run){

    echo '<script type ="text/javascript">alert(DATA UPDATE)</script>';
}
else{
    echo '<script type ="text/javascript">alert(DATA not UPDATE)</script>';
}
}






?>


