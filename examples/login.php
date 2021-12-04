

<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">

        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

   
 
</head>
</body> 

<div id="container">
            <!-- zone de connexion -->       
            <form method="POST">


  
                <h1>Connexion</h1>
                
                <label><b>email d'utilisateur</b></label>
                <input type="text" placeholder="Entrer l'email d'utilisateur" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="Password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_POST['erreur'])){
                    $err = $_POST['erreur'];
                    if($err==1 ){
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            }
                ?>
            </form>

 </div>
 <?php


if(isset($_POST['email']) && isset($_POST['Password']))
{


    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name = 'halima';
    $db_host = 'localhost';
    
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');





           $email=mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
           $Password=mysqli_real_escape_string($db,htmlspecialchars($_POST['Password']));

    if($email!== "" && $Password!== "")
    {
        
        $requete = "SELECT * FROM  users where email = '".$email."' and  Password= '".$Password."' ";
        $exec_requete= mysqli_query($db,$requete);
        $reponse= mysqli_fetch_array($exec_requete);
       
       if($reponse!=0) // email d'utilisateur et mot de passe correctes
        {
           $_SESSION['email']=$email;
           header('Location:ac.php');
        }
        
        else
        {
           header('Location: login.php'); // utilisateur ou mot de passe incorrect

        }
      
    }
 
}
    


?>
  
    
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>

    
    </body>
</html>