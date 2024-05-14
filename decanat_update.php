<?php
session_start();
if(!$_SESSION['username']){
    header("location:decanat.php"); 
  }
?>
<?php 
include('connect.php');
$sql="select * from courrier";
$rs=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>courrier</title>
    <link rel='stylesheet' href='style.css'>
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
            <li><a href="courrier.php">Courrier</a></li>
            <li><a href="decanat_update.php">Resultat</a></li>
            <li><a href="pdfarchives.php">Archives</a></li>
            <li><a href="logout.php">déconnexion</a></li>


        </ul>
    </div>
    

    <table class="tableau">
    <thead>   
    <tr>
            <th>id</th>
            <th>Sujet</th>
            <th>pdf</th>
            <th>statut</th>
            <th>description</th>

        </tr>
        </thead> 
        <tbody>
        <?php while($rows=mysqli_fetch_assoc($rs)) {?>
        <tr>
            <th><?php echo($rows['id']) ?></th>
            <th><?php echo($rows['Nom_courrier']) ?></th>
            <th><a href="pdf/<?php echo($rows['pdf']) ?>">download</a></th>
            <th><?php if ($rows['statut']=='') {
                echo 'en cour de traitement..';}else{
                    echo($rows['statut']); }?></th>
            <th><?php echo($rows['description']) ?></th>
            <?php 
          
            ?>
        </tr>
           
        <?php }?>
        </tbody>
    </table>
 
    
</body>
</html>