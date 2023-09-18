<?php
session_start();



require('conn.php');
if(isset($_POST['submit'])){
  //php emali and password submit work start
 
  $Email=$_POST['Email'];
   htmlspecialchars($Email);
   
  $password=$_POST['password'];
  htmlspecialchars($password);

 //php emali and password submit work end
  $No="";
  
  $sql="SELECT * FROM user WHERE Email='$Email' And password='$password'";
  $query=mysqli_query($conn,$sql);

  $row= mysqli_num_rows($query);
 
 
  if($row){
      header("location:user.php");
      $_SESSION['Email']=$Email;
       
  }else{
       $No="Password dose not Match !";
  }
}
  





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2018k bd police</title>
    <!--css link setup-->
    <link rel="stylesheet" href="css/login.css">
    <!--Bootstrap cdn setup-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Animation cdn setup-->

     <!--icon  cdn setup-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     

</head>
<body style=" background-image: url(imge/bg11.jpg);" >

<!--Login page work-->
<div class="container">
  <div class="card">
    <h2>2018k BD Police</h2>
    <form action="" method="post" >
      <label for="username">Email :</label>
      <input type="email" id="username" placeholder="Enter your Email" name="Email" required >

      <label for="password">Password :</label>
      <input type="password" id="password" placeholder="Enter your password" name="password" required >
       <?php if(isset($No)){
        echo "<p style=' color: chocolate;'>$No</p>";
       }
         ?>
      <br>
      <button   type="submit" name="submit" >Login</button>
    </form>
    <span style="color: orange;" >Create A <a style="color: black;" href="sin.php">Account</a></span>
  </div>
 
</div>
<!--login page end--->
 
</body>
</html>