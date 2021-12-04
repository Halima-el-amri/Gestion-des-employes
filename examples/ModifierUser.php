


<?php
$conn=mysqli_connect('localhost','root','','halima')or die (mysqli_error());




	
if(isset($_POST['update'])){

  


$query="UPDATE users SET Username='".$_POST['Username']."',Phone_number='".$_POST['Phone_number']."',email='".$_POST['email']."' , Password='".$_POST['Password']."' where Id=".$_REQUEST['Id']."  ";


$query_run=mysqli_query($conn,$query);

header("Location: http://localhost/d1_c1/halima/examples/Utilisateur.php");
exit();


if($query_run){

    echo '<script type ="text/javascript">alert(DATA UPDATE)</script>';
}
else{
    echo '<script type ="text/javascript">alert(DATA not UPDATE)</script>';
}
}






?>


