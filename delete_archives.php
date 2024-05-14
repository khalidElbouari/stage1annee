<?php
session_start();
if(!$_SESSION['username']){
    header("location:decanat.php"); 
  }
?>
<?php 
include 'connect.php';
$id=$_GET['deleteid'];
$sql="delete from archive where Num_arch=$id";
if(mysqli_query($con,$sql)){
    header("location:pdfarchives.php");
}else{
    echo "wtf";
}

?>