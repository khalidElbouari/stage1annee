<?php
session_start();
if(!$_SESSION['username']){
    header("location:cde.php"); 
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
    <style>
 .botona{

            background: #0d6efd;
            width:80px;
            border:none;
            padding:4px;
            border-radius:12px 7px;
            

        }
.botona a,.botona1 a{
color:white;

}

        .botona1{
            border-radius:12px 7px;
background: #dc3545;
width:80px;
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
                <li><a href="CDE_update.php">Courrier</a></li>
                <li><a href="CDE_pdfarchives.php">Archives</a></li>
                <li><a href="logout.php">déconnexion</a></li>

            </ul>
        </div>


    <table class="tableau">
    <thead>   
    <tr>
            <th>id</th>
            <th>filename</th>
            <th>pdf</th>
            <th>statut</th>
            <th>description</th>
            <th>Action</th>

        </tr>
        </thead> 
        <tbody>
        <?php while($rows=mysqli_fetch_assoc($rs)) {?>
        <tr>
            <th><?php echo($rows['id']) ?></th>
            <th><?php echo($rows['Nom_courrier']) ?></th>
            <th><a href="pdf/<?php echo($rows['pdf']) ?>">download</a></th>
            <th><?php echo($rows['statut']) ?></th>
            <th><?php echo($rows['description']) ?></th>
            <th><button class="botona" ><a href="update.php? updateid=<?php echo($rows['id']) ?>">Update</a></button>
                <button class="botona1" ><a href="delete.php? deleteid=<?php echo($rows['id']) ?>">Delete</a></button></th>
             
            </tr>
        
        <?php }?>
        
        </tbody>
    </table>
 
    
</body>
</html>