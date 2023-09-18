<?php  


  session_start();

if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];
  
  
  $sql="SELECT * FROM user WHERE Email='$Email'";
  $query=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($query);
  $Name=$row['Name'];
  $Moblie_Number=$row['Moblie_Number'];
  $Profile_pic=$row['Profile_pic'];
  $Thana_Name=$row['Thana_Name'];
  $Unit_Name=$row['Unit_Name'];
  $Bp_Number=$row['Bp_Number'];
  $Email=$row['Email'];
  $Districts_Name=$row['Districts_Name'];
  $Range_Name=$row['Range_Name'];
  $Rank=$row['Rank'];
  $id=$row['ID'];
  $Rol=$row['Rol'];
}else{
  header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      
      <!--bootserap cdn link-->
     <!--Bootstrap cdn setup-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--css link setup-->
    <style>
      .nav-item .nav-link{
    color: rgb(27, 16, 21);
    font-size: 20px;
    font-weight: bold;
  } /*navar work*/

/*main container end*/
#menu{
              border: 1px solid black;
              text-align: center;
              width: 300px;
              height:280px;
              margin: 10px;
               border-radius: 10px;
               background-color: rgb(58, 40, 40);
               box-shadow: 1px 1px 4px black;
               padding: 3px;
               text-align: center;
               
}
/*imge work start*/
 #imge1 {
              width: 120px;
              height: 100px;

}
/*imge work start*/

#frist-btn1 div button{
                    margin-top: 10px;
                    border-radius: 5px;
                    background-color: rgb(4, 68, 206);
                    color: #fcf9f9;
                    padding: 5px;
                    box-shadow: 1px 1px 1px black;
                    margin-bottom: 10px;
                   
                    
}
#frist-btn1 div a{
                   
                    color: #fcf9f9;
                    padding: 5px;
                    text-decoration: none;
                    margin-bottom: 10px;}

    </style>
</head>
<body>
<section>
    <nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img style="width: 30px; height:30px;" class=" rounded " src="imge/admin-510x593.jpg" alt="" srcset=""> Admin Deshbord</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start text-bg-sucesss" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <?php  echo "<img src='$Profile_pic' alt='' style='width: 50px; height: 50px; '> " ?>
        
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> <?php echo $Name;  ?>  </h5><br>
       
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div><hr>
   
       
       
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our Servies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sin.php">Add user</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">privacy</a>
          </li>
        
         
      </div>
    </div>
  </div>
</nav><br>
</section>

 

<section>
    <div class="container mt-5" id="frist-btn1" >
    <div class=" row justify-content-center" >

     

    <div class="mt-5 col-6 col-lg-3 col-sm-12 col-md-3 col-xl-4 col-xxl-4 p-5" id="menu">
    <img class="rounded mx-auto d-block mt-3 " id="imge1" src="imge/images.png" alt="Friends.jpg" srcset="">
     <button class="btn" ><a href="adview.php">Friends-Edite Delate</a></button>
      
      
      
    
    </div>
    
    
  </div>
  </div>
</section>


<!--Bootstrap cdn setup-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

?>

