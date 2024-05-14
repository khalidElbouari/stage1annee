<?php
session_start();
if(!$_SESSION['username']){
    header("location:decanat.php"); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <img src="6.png">

        <ul>
            <li><a href="decanat.php">Decanat</a></li>
            <li><a href="cde.php">CED</a></li>
        </ul>
    </div><hr>
    <div class="navbar1">
         <ul>
            <li><a href="#">Courrier</a></li>
            <li><a href="decanat_update.php">Resultat</a></li>
            <li><a href="pdfarchives.php">Archives</a></li>
            <li><a href="logout.php">déconnexion</a></li>


        </ul>
    </div><br>
    <form method="POST" action="add.php" enctype="multipart/form-data">

        <table class="tableau">
            <thead>   
            <tr>
                
                    <th>Sujet</th>
                    <th>pdf</th>
               
                </tr>
        </thead> 
                <tbody>
                    <tr>
                    <th><input type="text" name="filename" placeholder="filename" required></th>
                    <th><input type="file" name="pdf" placeholder="pdf" required></th>
                  
                    </tr>
          
                </tbody>
             

        </table><br>
        <input class="enregistrer" type="submit" name="addpdf" value="Enregistrer">



    </form><br>
    
</body>
</html>