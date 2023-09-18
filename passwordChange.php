<?php
session_start();

if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];



$id=$_GET['id'];



require('conn.php');
if(isset($_POST['submit'])){
  //php emali and password submit work start
 
  
   
  $password=$_POST['password'];
  htmlspecialchars($password);

 //php emali and password submit work end
  $No="";
  
  $sql="SELECT * FROM user WHERE password='$password'";
  $query=mysqli_query($conn,$sql);

  $row= mysqli_num_rows($query);
  
 
  if($row){
      header("location:newpassword.php?id=$id");
      
       
  }else{
       $No="Password dose not Match !";
  }
}}
else{
   header("location:login.php");
}
?>



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
    
<!--Login page work-->
<div class="container mt-5">
  <div class="card p-5 " style="background-color: darksalmon;" >
    <h2>Password change</h2>
    <form action="" method="post" >
      

      <label for="password"> Old password </label><br>
      <input class="form-control" style="border-radius: 10px; border: 1px solid green; " type="text" id="password" placeholder="Enter your old password" name="password" >
       <?php if(isset($No)){
        echo "<p style=' color: chocolate;'>$No</p>";
       }
         ?>
      <br>
      <button style="border: 1px solid black ;  "  class="mt-3 w-25 btn btn-success" type="submit" name="submit" >Submit</button>
    </form>
   
  </div>

</div>
</body>
</html>