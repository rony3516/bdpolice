<?php

session_start();

if($_SESSION['Email']==true){
  require('conn.php');
  $Email=$_SESSION['Email'];
 require('conn.php');
  $id=$_GET['id'];
  if(isset($_POST['edit'])){
    $Edit=$_POST['Rol'];
    
  $edite="UPDATE user SET Rol ='$Edit' WHERE user.ID ='$id';";
  $query=mysqli_query($conn,$edite);
  if($query){
    header('location:adview.php');
   
  }
  }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <!--Bootstrap cdn setup-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Animation cdn setup-->

     <!--icon  cdn setup-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--css link setup-->
     
     <style type="text/css">
		.container{
			margin-top: 8%;
			width: 400px;
			border: ridge 1.5px white;
			padding: 20px;
		}
		body{
			background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
	</style>
</head>
<body  >
<div>
	
	</div>
	<div class="container">
		<h2>Category Change</h2>
	<form action="" method="post" enctype="multipart/form-data" >
		
 
  <div class="form-group ">
  <label >Category</label>
   <select class="form-control" name="Rol" id="">
   
    <option value="0">Ueser</option>
    <option value="1">Admin</option>
    
   </select>
<br>
  <button type="submit" class="btn btn-primary" name="edit">Edit</button>
</form>
</div>
</body>
</html><?php  }
else{
    header("location:login.php");
  }

  ?>