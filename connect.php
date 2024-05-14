<?php
    $con = mysqli_connect("localhost","root","","gestCourr");
    if (mysqli_connect_errno()){
        echo "erreur 404 " . mysqli_connect_error();
    }
?>