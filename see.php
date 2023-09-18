<?php
session_start();

if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];
require('conn.php');
$id=$_GET['ID'];

$sql="SELECT * FROM user WHERE ID=$id";
$qeury=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($qeury);

$Name=$row['Name'];
$Moblie_Number=$row['Moblie_Number'];
$Profile_pic=$row['Profile_pic'];
$Thana_Name=$row['Thana_Name'];
$Unit_Name=$row['Unit_Name'];

$Email=$row['Email'];
$Districts_Name=$row['Districts_Name'];
$Range_Name=$row['Range_Name'];
$Rank=$row['Rank'];
$Traning_Senter_Name=$row['Traning_Senter_Name'];
}
else{
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>see all</title>
    <!--bootstrap cdn link set up-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="view.css">


  </head>
<body>
 <div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-12 ">
    <div class="card" style="background-color: burlywood;">
  <br>
 <?php echo "<img src=' $Profile_pic'class='card-img-top w-25 h-25 rounded mx-auto d-block' alt=''...>";  ?>
  <br>
  <div class="card-body mx-1 " style="background-color: aliceblue;" >
    <h5 class="card-header" ><?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 20px;  ' >Name : </spen> ".$Name  ;?></h5>
    <p class="card-text"> <?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 15px;  ' >Thana_Name : </spen>  " .$Thana_Name ;  ?></p>
    <p class="card-text"> <?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 15px;  ' > Unit_Name : </spen>  "  .$Unit_Name ;  ?></p>
    <p class="card-text"> <?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 15px;  ' > Moblie_Name : </spen>  "  .$Moblie_Number;  ?></p>
    

    <p class="card-text"> <?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 15px;  ' > Thana_Name : </spen>  "  .$Thana_Name ;  ?></p>
    <p class="card-text"> <?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 15px;  ' > Districts_Name : </spen>  "  .$Districts_Name ;  ?></p>
    <p class="card-text"> <?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 15px;  ' > Range_Name : </spen>  "  .$Range_Name ;  ?></p>
    <p class="card-text"> <?php echo "<spen style='color: darkorange; font-weight: bold; font-size: 15px;  ' > Rank : </spen>  "  .$Rank ;  ?></p>
    
  </div>
</div>
 </div>
    </div>
  </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--bootstrap cdn link set up-->
</body>
</html>