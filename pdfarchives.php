<?php
session_start();
if(!$_SESSION['username']){
    header("location:decanat.php"); 
  }
?>
<?php 
include 'connect.php';
$sql="select * from archive";
$rs=mysqli_query($con,$sql);



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>pdfarchives</title>
        <link rel="stylesheet" href="style.css">
<style>
    .botona a,.botona1 a{
color:white;

}

.botona1{
    border-radius:12px 7px;
background: #dc3545;
width:100px;
padding:4px;
border:none;

}
</style>
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
        <form action="" method="GET">
        <table class="tableau">
    <thead>   
    <tr>
            <th>Sujet</th>
            <th>pdf</th>
            <th>uploaded time</th>
            <th>action</th>

        </tr>
        </thead> 
        <tbody>
        <?php while($rows=mysqli_fetch_assoc($rs)) {?>
        <tr>
            <th><?php echo($rows['nom_courrier_archiver']) ?></th>
            <th><a href="pdf/<?php echo($rows['pdf_Arch']) ?>">download</a></th>
            <th><?php echo($rows['date_archivage']) ?></th>
          <th><button class="botona1"><a href="delete_archives.php? deleteid=<?php echo($rows['Num_arch']) ?>">Delete</a></button></th>
        </tr>
           
        <?php }?>
        </tbody>
    </table>

        </form>

    </body>
</html>
