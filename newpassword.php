<?php
session_start();
if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];
$id=$_GET['id'];
require('conn.php');
if(isset($_POST['submit'])){
    
     
    $password=$_POST['password'];
    htmlspecialchars($password);
    $sql="UPDATE user SET password = '$password'
     WHERE user.ID = $id;";
    
    
    $query=mysqli_query($conn,$sql);
   if($query){
        header("location:user.php");
      
         
    }else{
         $No="Password dose not Match !";
    }
  }}else{
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
  <div class="card p-5 " style="background-color: coral;" >
    <h2>New Password </h2>
    <form action="" method="post" >
      

      <label for="password"> New password </label><br>
      <input class="form-control" style="border-radius: 10px; border: 1px solid green; " type="text" id="password" placeholder="Enter your New password" name="password" >
     
        
      <br>
      <button style="border: 1px solid black ; "  class="mt-3 w-25 btn btn btn-dark" type="submit" name="submit" >Submit</button>
    </form>
   
  </div>

</div>



