<!DOCTYPE html>
<html lang="en">
    <head>
</head>

<Form  action ="DeleteUser2.php?Id=<?php echo  $_REQUEST['Id']  ?>" method="post"> 
<?php

$conn=mysqli_connect('localhost','root','','halima')or die (mysqli_error());

$query="delete from gestion where Id=".$_REQUEST['Id']." ";

 $query_run=mysqli_query($conn,$query);



header("Location: http://localhost/d1_c1/halima/examples/GestionE.php");
exit();
?>
</form>
</body>
</html>

