
<?php
session_start();

if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];

  
if(isset($_GET['Email'])){
  $email= $_GET['Email'];


require('conn.php');
if(isset($_POST['Edit'])){

    $Name=$_POST['Name'];
    htmlspecialchars($Name);

    $Moblie_Number=$_POST['PhonNumber'];
    htmlspecialchars($Moblie_Number);
   
    $Email=$_POST['Email'];
    htmlspecialchars($Email);
    
    $Unit_Name=$_POST['Unit_Name'];
    htmlspecialchars($Unit_Name);
    
    $Thana_Name=$_POST['Thana_Name'];
    htmlspecialchars($Thana_Name);
   
    $Districts_Name=$_POST['Districts_Name'];
    htmlspecialchars($Districts_Name);
   
    $Range_Name=$_POST['Range_Name'];
    htmlspecialchars($Range_Name);
    
    $Traning_Senter_Name=$_POST['Traning_Senter_Name'];
    htmlspecialchars($Traning_Senter_Name);
    $Rank=$_POST['Rank'];
    htmlspecialchars($Rank);
    
    
    
    $pro=$_FILES['Profile_pic'];
    
    $imgename=$pro['name'];
    $tmp_name=$pro['tmp_name'];
    $loc='imge/'.$imgename; 
    move_uploaded_file($tmp_name,$loc);
    
     $sql="UPDATE user SET Name = '$Name', Moblie_Number = '$Moblie_Number',
       Email = '$Email', 
      Unit_Name = '$Unit_Name', Thana_Name = '$Thana_Name', 
      Districts_Name = '$Districts_Name', Range_Name = '$Range_Name',
      Traning_Senter_Name = '$Traning_Senter_Name', Rank = '$Rank', Profile_pic = '$loc' 
     WHERE user.Email ='$email';";
     
     $query=mysqli_query($conn,$sql);;
    if($query){
      header('location:user.php');
    }

    
    }
    
    $sql="SELECT * FROM user WHERE Email='$email'";
    $query=mysqli_query($conn,$sql);
    
      while($row=mysqli_fetch_assoc($query)){

    $Name=$row['Name'];
    $Moblie_Number=$row['Moblie_Number'];
    $Profile_pic=$row['Profile_pic'];
    $Thana_Name=$row['Thana_Name'];
    $Unit_Name=$row['Unit_Name'];
   
    $Email=$row['Email'];
    $Districts_Name=$row['Districts_Name'];
    $Range_Name=$row['Range_Name'];
    $Rank=$row['Rank'];?>
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--Bootstrap link setup-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
     <!--Bootstrap link setup-->
</head>
<body>
<div>
	
	</div>
	<div class="container">
		<h2>Edit Form</h2>
	<form action="" method="post" enctype="multipart/form-data" >
		<div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" value="<?php echo $Name?>"  name="Name" required >
  </div>
  
  <div class="form-group">
    <label >Moblie_Number</label>
    <input type="number" class="form-control" value="<?php echo $Moblie_Number?>"   name="PhonNumber" required>
  </div>
  
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" value="<?php echo $Email?>"   name="Email" required>
  </div>
  <div class="form-group">
    <label >Unit_Name</label>
    <input type="text" class="form-control"  value="<?php echo $Unit_Name?>"  name="Unit_Name" required>
  </div>
  <div class="form-group">
    <label>Thana_Name</label>
    <input type="text" class="form-control" value="<?php echo $Thana_Name?>" name="Thana_Name" required>
  </div>
  <div class="form-group">
    <label >Districts_Name</label>
    <input type="text" class="form-control" value="<?php echo $Districts_Name?>" name="Districts_Name" required>
  </div>
  <div class="form-group">
    <label >Range_Name</label>
    <input type="text" class="form-control"value="<?php echo $Range_Name?>"  name="Range_Name" required>
  </div>
   <div class="form-group">
    <label >Rank</label>
    <input type="text" class="form-control" value="<?php echo  $Rank?>" name="Rank" required>
  </div>
  
  <div class="form-group">
    <label >Profile_pic</label>
    <input type="file" class="form-control"  name="Profile_pic" required>
  </div> <br>
  <button type="submit" class="btn btn-primary"  name="Edit">Edit</button>
</form>
</div>
</body>
</html>
<?php
}
   }
  }
  else{
    header("location:login.php");
  }


   
   
   
   ?>















