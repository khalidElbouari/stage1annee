
    
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ESPACE decanat</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
      <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Times New Roman', Times, serif;

}
.uit{
    display:inline-block;
    width:230px;
    height:100px;
    position:relative;
   margin-TOP:5px;
}
ul{
  float:right;
  display: flex;
  list-style: none;
  margin-top: 40px;
}
.navbar{
  position:fixed;

}
.navbar ul a{
display:inline-block;
 font-size:20px;
 
  min-width:120px;
 
  justify-content:space-around;
  text-decoration: none;
color:white;
position: relative;
  }



.navbar ul a::after{
    content:'';
    position:absolute;
    background-color: black;
    height:3px;
    width:0%;
    bottom: -10px;
    right: 50%;
    transition: 0.5s;
    
}
.navbar ul a:hover::after{
    width:50%;
    left:0;
}
.holder{
position:absolute;
top:60%;
left:50%;
transform:translate(-50%,-50%);
padding:7px 8px;
min-width:300px;
min-height:300px;
box-shadow: 1px 30px 30px grey;
border-radius:8Px;
text-align:center;
color:white;
background-image: linear-gradient(to top,rgb(99, 121, 199),rgb(113, 112, 112));
}
input{
margin:7px;
padding:5px;
min-width:70%;
border-radius: 8px;
}
label{
  display:inline-block;
 margin-top:10px;
 color:white;
}
img{
  margin-top:-60px;
  width:100px;
  height:100px;
}
.btn{
width:60%;
padding:10px;
background-color:rgb(87, 201, 87);
border:none;
color:white;
}
.btn:hover{
  background-color:rgb(178, 239, 178);
}
      </style>
    </head>
   

   <body>
    <div style="width:100%;
    background-image: linear-gradient(to left, rgb(58, 58, 162),rgb(234, 234, 234));              "
    class="navbar">
      <img class="uit"src="IMAGE/uit.png">
      <ul>
          <li ><a href="decanat.php">Decanat</a></li>
          <li ><a style=" color:rgb(0, 0, 0);" href="cde.php">CED</a></li>
           
          
      </ul>
</div>

<div class="holder">
<img src="IMAGE/bluelock.png" alt="">
    <form  method="POST" action="#" >
      <h1>Récuperer Votre Mot de Passe</h1>
      <label for="">Entrer Votre Back-up-Code</label><br>
  <div><input type="number" name="back-c" placeholder="Entrer Le back_up code"></div> 
  <div><input type="password"   name="ps1"   placeholder="Entrer Un nouveau mot de passe"></div>
  <div><input type="password"  name="ps2" placeholder="Confirmer le  mot de passe"></div>
  <button type="submit" class="btn btn-success" name="botona"   >Modifier</button>
    </form>
 


</div>
<?php 
error_reporting(0);
    require_once "connect.php";
    $bcp= $_POST['back-c'];
    $pasw= $_POST['ps1'];
    $cfp= $_POST['ps2'];
    $bot= $_POST['botona'];
   
    if( isset($bot) ) {
      $sql2="select Back_up_code from employee where Back_up_code=".$bcp." limit 1 ;";
      $res=mysqli_query($con,$sql2);
    if(mysqli_num_rows($res)===1){
      if($pasw===$cfp){
      $sql="update employee set Password='".md5($cfp)."' where Back_up_code=".$bcp." ;";
      mysqli_query($con,$sql);
      echo "<script>alert('Votre Mot de passe est Modifié');</script>";
  }
       else{  echo "<script>alert('Passwords not matched');</script>"; }
      }else{
      echo "<script>alert('back-up-code not found!!');</script>";
    }
  }
      ?>
      

   </body>
</html>
