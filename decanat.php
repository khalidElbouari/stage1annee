<?php 
 session_start(); 
?>

      <?php
             # LOG IN
            
error_reporting(0);
require_once "connect.php";

$EM=$_POST['email'];
$Pass =$_POST['psw'];
$butt=$_POST['buttona'];
$two=2;
if (isset($butt)){
  $sql="select * from employee where Email='".$EM."' and Password='".md5($Pass)."' and Num_dept=".$two."  limit 1 ; ";
$res = mysqli_query($con,$sql);
$ligne = mysqli_fetch_array($res);
$_SESSION["username"]=$ligne["Nom_complet"];
$_SESSION['code']=$ligne["code"];
if(mysqli_num_rows($res)===1){ 
header("location:decanatmain.php");
}else {
  echo "<script>alert('E-mail Ou Mot-de-Passe invalid !!!')</script>";

}
} 

  ?>
 
      <?php 
    # INSCRIPTION 
    error_reporting(0);
      require_once "connect.php";
       
      
$sexe= $_POST['S'];
$fn= $_POST['nc'];
$em= $_POST['ema'];
$ps= $_POST['psw'];
$bcp= $_POST['bcp2'];
$sbm= $_POST['subm'];
$two=2;
if(isset($sbm)){
    $ver="select * from employee where Email='".$em."' limit 1;";
if(mysqli_num_rows(mysqli_query($con,$ver))===0){   
  $sql="insert into employee(Nom_complet,Email,Password,Back_up_code,sexe,Num_dept) values('".$fn."','".$em."','".md5($ps)."','".$bcp."','".$sexe."',".$two.");";
if(mysqli_query($con,$sql)){
header('location:decanat.php');}
else{
    echo "<script>alert('Failed to Added')</script>";
}
}else{
    echo "<script>alert('E-mail Déja Utilisé')</script>";
}
}
      
      ?>

 

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ESPACE decanat</title>
      <link rel="stylesheet" href="style4.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript">
function show(){
  document.getElementById('cont').style="Display:Block;"
}
function closeIt(){
  document.getElementById('cont').style="Display:None;"
}
   </script>
   </head>
   

   <body>
    <div style="width:100%;
    background-image: linear-gradient(to left, rgb(58, 58, 162),rgb(234, 234, 234));              "
    class="navbar">
      <img class="uit"src="IMAGE/uit.png">
      <ul>
      <li><a href="index.html">Accueil</a></li>
          <li ><a style=" color:rgb(10, 10, 10);" href="#">Decanat</a></li>
          <li ><a href="cde.php">CED</a></li>
           
         
      </ul>
  </div>
      <div class="center">
    
    
      <span>

        <h1 style="display:inline-bloc; position:relative; margin-top:-10px;">Bienvenu a votre ecpace decanat</h1>       
              <center>
                <div><H1 style="display:inline-bloc; position:relative; margin-top:50px;" >Welcome Back!</H1></div>
           
              <div><hr class="hr0"></div>
               <center>
               <form Method="POST" action="#">
                <div class="input-container">
                  <i class="fa fa-envelope icon"></i>
                  <input class="input-field" type="text" placeholder="Email" name="email">
                </div>
                
                <div class="input-container">
                  <i class="fa fa-key icon"></i>
                  <input class="input-field" type="password" placeholder="Password" name="psw">
                </div>
              
               
                <div><a href="recup_mdps_dec.php" class="mo">   Mot de passe oublié</a></div>
        
                 <div> <button type="submit" name="buttona" width="25% "class="btn1">Connexion</button></div>
                <p id="mot-email"></p> 
                </form>
          
                   <div><hr class="hr1" > <p><sub> <b>OR</b> </sub> </p><HR class="hr2"></div>
       <button class="show-btn" onclick="show()">S'inscrire</button>
           
         
      
      </span>
        
       
       
         <div class="container" id="cont">
         
 <label for="show" class="close-btn fas fa-times" onclick="closeIt()"  title="close"></label>
<img src="IMAGE/head.png" alt="logo admin" class="image">
 <H1>Formulaire</H1>
  <a class="active" href="#"><font color="Purple" size="3" > Espace Decanat</font></a>
  <hr class="hr0">
<form method="POST" action="#">
<table>

<!-- sexe -->
<tr>
<td><label class="sx"for="">Sexe:</label> </td>
</tr>
<tr>
<td> <label for="">HOMME</label> <input method="POST" type="radio" Name="S" value="Homme"></td>
<td> <label for="">FEMME</label>  <input method="POST" name="S" type="radio" value="Femme"> </td>
</tr>
<!-- Nom et prénom -->
<tr>
  <td><label for="" class="label1">Nom Complet:</label></td>
  <td><input type="text" name="nc"  class="input1" placeholder="Entrer Votre Nom et Prenom" required></td>
</tr>

<!-- Email -->
<tr>
<td><label class="label2" fo r="">Email:</label></td>
 <td><input type="Email" class="input1" name="ema"  placeholder="X@gmail.com" required></td>
</tr>
<!-- Mot de Passe -->
<tr>
 <td><label class="label1"  for="">Password:</label></td>
  <td><input type="password" class="input1"  name="psw" placeholder="Enter your password here" required> </td>
</tr> 
  <!-- Back up Code -->
  <tr>
    <td><label for=""><b>Back-up Code :</b></label></td>
    <td>  <input required name="bcp2" type="text" readonly  class="rnd" title="THis is your back up code" value="<?php
      $res=rand(10000000,99999999); 
    echo "$res"; ?>">
      </td>
  </tr>

</table>
  <button type="submit" method="POST"  name="subm" class="btn2">S'inscrire</button>
   </form>
      </div>
      
    
  


   </body>
</html>