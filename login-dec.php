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