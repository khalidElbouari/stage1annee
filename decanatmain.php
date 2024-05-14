<?php 
session_start();
if(!$_SESSION['username']){
header("location:decanat.php"); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>index</title>
        <link rel="stylesheet" href="style2.css">
        <style>
    h1{

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
    .grids{
   
   display:flex;
   position:absolute;
   margin: 5% 15% ;
   justify-content:space-between;
 
 
}
</style>
    </head>
    <body>
        <div class="navbar">
        <img class="uit"src="IMAGE/uit.png">

            <ul>
                <li><a href="decanat.php">Decanat</a></li>
                <li><a href="cde.php">CED</a></li>
                <li><a class="hr" href="logout_dec.php">Déconnexion</a></li>
            </ul>
        </div><hr>
        
        <div>
<center><h1>Bienvenue <?php 
   require_once "connect.php";

    $two=2;
    $sql="select * from employee where Nom_complet='".$_SESSION["username"] ."'and Num_dept=".$two.";";
   $res= mysqli_query($con,$sql);
   $case=mysqli_fetch_array($res);
   
   if($case['sexe']==="Homme"){
    echo 'Mr <div class="div1">'.$case["Nom_complet"].'</div> ';
   }else{
    echo 'Mme <div class="div1">'.$case["Nom_complet"].'</div> ';
   }

    ?></h1></center></div>

<div class="grids">
            <div class="grid1">
               <span class="hover">
                <a href="courrier.php"><img class="ced" src="IMAGE/dossier.png" alt=""></a>

               </span> 
                <button class="button"><a href="courrier.php">Courrier</a></button>
              </div>
          <div class="grid2">
            <span class="hover">
                 <a href="pdfarchives.php"><img class="dec"  src="IMAGE/archive.png" alt=" "></a>
                </span>
                  <button class="button" ><a for="dec" href="pdfarchives.php">Archive</a></button>
          </div>
          <div class="grid3">
            <span class="hover">
                 <a href="decanat_update.php""><img class="dec"  src="IMAGE/result-icon.jpg" alt=" "></a>
                </span>
                  <button class="button" ><a for="dec" href="decanat_update.php">Resultat</a></button>
          </div>

        </div>

    </body>
</html>
