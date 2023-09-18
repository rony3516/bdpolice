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
  
  $Email=$row['Email'];
  $Districts_Name=$row['Districts_Name'];
  $Range_Name=$row['Range_Name'];
  $Rank=$row['Rank'];
  $id=$row['ID'];
 
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
    <link rel="stylesheet" href="CSS/user.css">
</head>
<body>
<section>
    <nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">2K18 Frist Base Police</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start text-bg-success" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
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
            <a class="nav-link" href="#">privacy</a>
          </li>
            
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="profileupdad.php?Email=<?php echo $Email ?>">Profile Update</a></li>
              <li><a class="dropdown-item" href="passwordChange.php?id=<?php echo $id?>">Password change </a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav><br>
</section>

 

<section>
    
    <div class="container mt-5">
        <div class="text">
            <h1 style="text-align: center;" >Friend search list</h1><hr>
        </div>
         <div class=" row mt-5">
            
            <div class="col-12  "  >
                <form class="mx-5" action="" method="post">
                <input class="w-50 l mt-3" style="text-align: center;"  type="search" name="search" id="search" placeholder="search thana" >
                <input  class=" btn btn-success " type="submit" name="btn_search" value="Search" id="btn_search" > 
                </form>
              
            </div>
            
         </div>
    </div>
     
        
     </div>
     <div class="container">
    
  
     <div class="row justify-content-center">
        
     
     
      
<?php



$search="";
    require('conn.php');
    /*search php work start*/

  if(isset($_POST['btn_search'])){
  $search=  $_POST['search'];
  echo $search;


  }



  $sql="SELECT * FROM user WHERE Thana_Name LIKE '%$search%'";




   
    $qeury=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($qeury)){
    $Name=$row['Name'];
    $Moblie_Number=$row['Moblie_Number'];
    $Profile_pic=$row['Profile_pic'];
    $Thana_Name=$row['Thana_Name'];
    $Unit_Name=$row['Unit_Name'];
    $ID=$row['ID'];


    ?>
    <!-- card view work start-->
    <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4 col-xxl-4 mt-3">
    <div class="card " style="background-color:#d1bea8  ;" >
   <br>
 <?php echo "<img  style='width: 150px;  height: 150px; ' src=' $Profile_pic'class='card-img-top  rounded mx-auto d-block' alt=''Not support >";  ?>
    
   
    
   <div class="card-body" style="text-align: center;  " > 

    <h5  class="card-title"> <?php echo "<spen style='color: #002147; font-weight: bold; font-size: 15px;  ' >Name : </spen>  " .$Name;  ?> </h5>
    
    <p class="card-text"> <?php echo "<spen style='color: #002147; font-weight: bold; font-size: 15px;  ' >Thana_Name : </spen>  " .$Thana_Name ;  ?></p>
    <p class="card-text"> <?php echo "<spen style='color: #002147; font-weight: bold; font-size: 15px;  ' > Unit_Name : </spen>  "  .$Unit_Name ;  ?></p>
    <a href="see.php?ID=<?php  echo $ID ?>" class="btn btn-primary">See More</a>
    </div>
    </div>
    </div>
 <!-- card view work start-->
 <?php
  }?>
    
  </div>
  </div>
</section>



<!--Bootstrap cdn setup-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

?>

