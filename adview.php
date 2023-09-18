<?php
session_start();
if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2018k bd police</title>
     <!--icon  cdn setup-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <!--Bootstrap link setup-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap link setup-->
 <!--css link setup-->
 <style>
  .col{
    width: 300px;
    
  }
 </style>
    
</head>
<body>
    <div class="container">
        <div class="text">
            <h1 style="text-align: center;" >Admin  search list</h1><hr>
        </div>
         <div class=" row mt-5">
            
            <div class="col-12  "  >
                <form  action="" method="post">
                <input class="w-50" style="text-align: center;"  type="search" name="search" id="search" placeholder="search thana" >
                <input type="submit" name="btn_search" value="Search" id="btn_search" > 
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
    <a href="adsee.php?ID=<?php  echo $ID ?>" class="btn btn-primary">See More</a>
    </div>
    </div>
    </div>
 <!-- card view work start-->
 <?php
  } }
  else{
    header("location:login.php");
  }
 
 ?>
</div>
</div>
    
</body>
</html>