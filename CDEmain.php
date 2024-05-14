
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>index</title>
        <link rel="stylesheet" href="style2.css">
<style>
    h1{
            color:black;    
        font-family:Times;
        font-size:40px;
        margin-top:30px;
    }
    .div1{
        display:inline;
        width:100px;
        padding:7px;
        background:rgb(80, 80, 162);
        color:white;
        border-radius:4px;
        
    }
    .imog{
      width:10px;
    }
    .hr{
        border-left:2px black  solid;
        padding-left:8px;
    }
</style>
    </head>
    <body>
        <div class="navbar">
        <img class="uit"src="IMAGE/uit.png">

            <ul>
                <li><a href="decanat.PHP">Decanat</a></li>
                <li><a href="cde.php">CDE</a></li>
                <li><a class="hr" href="logout.php">Déconnexion</a></li>
            </ul>
        </div><hr>
<div>
      
   <div><center><h1>Bienvenue <?php 
   require_once "connect.php";
if($_SESSION['username']){
    $one=1;
   $sql="select * from employee where Nom_complet='".$_SESSION["username"] ."'and Num_dept=".$one.";";
   $res= mysqli_query($con,$sql);
   $case=mysqli_fetch_array($res);
   
   if($case['sexe']==="Homme"){
    echo 'Mr <div class="div1">'.$case["Nom_complet"].'</div> ';
   }else{
    echo 'Mme <div class="div1">'.$case["Nom_complet"].'</div> ';
   }
}else{
    header("location:cde.php");
}
    ?>
    </h1></center></div>
    </div>

      <div class="grids">
            <div class="grid1">
               <span class="hover">
                <a href="CDE_update.php"><img class="ced" src="IMAGE/dossier.png" alt=""></a>

               </span> 
                <button class="button"><a href="CDE_update.php">Courrier</a></button>
              </div>
          <div class="grid2">
            <span class="hover">
                 <a href="CDE_pdfarchives.php"><img class="dec"  src="IMAGE/archive.png" alt=" "></a>
                </span>
                  <button class="button" ><a for="dec" href="CDE_pdfarchives.php">Archive</a></button>
          </div>
        </div>

        
    </body>
</html>
