

<?php
 include 'connect.php';
if(isset($_GET['updateid'])){
    $idpdf=$_GET['updateid'];
    $query="select * from courrier where id=$idpdf";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)> 0 ){
        $archives=mysqli_fetch_array($result);
    }else{
       echo"NO  ";
    }
}

if(isset($_POST['update'])){
$idpdf=$_GET['updateid'];
$create_datetime = date("Y-m-d/H:i:s");
    $statut=mysqli_real_escape_string($con,$_POST['statut']);
    $description=mysqli_real_escape_string($con,$_POST['description']);
    $sql="update courrier set   statut='$statut' ,  description='$description' where id=$idpdf ";
 $create_datetime=date("Y-m-d/H:i:s");
 $Np=$archives['Nom_courrier'];
 $pdf=$archives['pdf'];
    $req="insert into archive(nom_courrier_archiver,date_archivage,pdf_Arch) values('".$Np."','".$create_datetime."','".$pdf."');" ;
    mysqli_query($con,$req);
    /*$rs01=
 
    $ligne=mysqli_fetch_array($rs01);
    $code=$ligne['Num_Arch'];
    $req2="insert into courrier(Num_arch) values(".$code.") ;";
    mysqli_query($con,$req2);*/

 
   if(mysqli_query($con ,$sql)){
    header("location:CDE_update.php");
}else{
    echo "wtf";
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
            <img src="6.png">

            <ul>
                <li><a href="decanat.html">Decanat</a></li>
                <li><a href="CDE.html">CED</a></li>
            </ul>
        </div><hr>
        <div class="navbar1">
             <ul>
                <li><a href="CDE_update.php">Courrier</a></li>
                <li><a href="CDE_pdfarchives.php">Archives</a></li>
                <li><a href="logout.php">déconnexion</a></li>

            </ul>
        </div>

    <form method="POST"enctype="multipart/form-data">

        <table class="tableau">
            <thead>   
            <tr>
                
                    <th>filename</th>
                    <th>pdf</th>
                    <th>statut</th>
                    <th>description</th>
                </tr>
        </thead> 
                <tbody>
     
                    <tr>
                    <th><input type="text" name="filename" placeholder="filename" value="<?php echo($archives['Nom_courrier']) ?>" readonly></th>
                    <th><a name="pdf" href="pdf/<?php echo($archives['pdf']) ?> ">Telecharger</a></th>
                    <th><input type="statut" name="statut" placeholder="statue" value="<?php echo($archives['statut']) ?>  "></th>
                    <th><input type="text" name="description" placeholder="description" value="<?php echo($archives['description']) ?>"></th>
                    </tr>

                </tbody>
             

        </table><br>
        <button class= "enregistrer" type="submit"name="update" >update</button>



    </form><br>
    
</body>
</html>