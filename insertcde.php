<?php 
    # INSCRIPTION 
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
