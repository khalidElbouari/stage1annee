
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
$one=1;
if (isset($butt)){
$sql="select * from employee where Email='".$EM."' and Password='".md5($Pass)."' and Num_dept=".$one."  limit 1 ; ";
$res = mysqli_query($con,$sql);
$ligne = mysqli_fetch_array($res);
$_SESSION['code']=$ligne["code"];
$_SESSION["username"]=$ligne["Nom_complet"];

if(mysqli_num_rows($res)===1){ 

header("location:CDEmain.php");
}else {
  echo "<script>alert('E-mail Ou Mot-de-Passe invalid !!!')</script>";

}
} 

  ?>