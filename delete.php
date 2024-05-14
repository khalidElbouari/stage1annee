<?php 
include 'connect.php';
$id=$_GET['deleteid'];
$sql="delete from courrier where id=$id";
if(mysqli_query($con,$sql)){
    header("location:CDE_update.php");
}else{
    echo "wtf";
}

?>