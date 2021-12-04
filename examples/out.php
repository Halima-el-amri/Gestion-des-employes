

 
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
 
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_POST['Log out']))
                { 
                   if($_POST['Log out']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
             
            ?>
            
        </div>
    </body>
</html>