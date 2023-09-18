<?php

session_start();

if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];
 
  $id=$_GET['id'];
  $delate="DELETE FROM user WHERE user.ID = '$id';";
  $query=mysqli_query($conn,$delate);
  if($query){
    header('location:adview.php');
   
  }

}?>
