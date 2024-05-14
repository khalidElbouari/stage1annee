<?php
session_start();
include 'connect.php';

if(isset($_POST['addpdf'])){
    $filename=$_POST['filename'];
    $pdf=$_FILES['pdf']['name'];
    $file_tmp_name=$_FILES['pdf']['tmp_name'];
    move_uploaded_file($file_tmp_name,"pdf/$pdf");
    /*$statut=$_POST['statut'];
    $description=$_POST['description'];*/
    $create_datetime = date("Y-m-d/H:i:s");
   $code=$_SESSION['code'];
    $sql="insert into courrier(Nom_courrier,pdf,uploadtime,code) values('$filename','$pdf','$create_datetime',$code)";
   if( mysqli_query($con,$sql)){
    header("location:courrier.php");
   }
}
?>