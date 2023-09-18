

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2018kBd police</title>
    
    
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
		<h2>Registration Form</h2>
	<form action="insert.php" method="post" enctype="multipart/form-data" >
		<div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  name="Name" required >
  </div>
  
  <div class="form-group">
    <label >Moblie_Number</label>
    <input type="number" class="form-control"name="PhonNumber" required>
  </div>
  
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control"   name="Email" required>
  </div>
  <div class="form-group">
    <label >Unit_Name</label>
    <input type="text" class="form-control"   name="Unit_Name" required>
  </div>
  <div class="form-group">
    <label>Thana_Name</label>
    <input type="text" class="form-control" name="Thana_Name" required>
  </div>
  <div class="form-group">
    <label >Districts_Name</label>
    <input type="text" class="form-control" name="Districts_Name" required>
  </div>
  <div class="form-group">
    <label >Range_Name</label>
    <input type="text" class="form-control" name="Range_Name" required>
  </div>
 
  <div class="form-group">
    <label >Traning_Center_Name</label>
    <input type="text" class="form-control" name="Traning_Senter_Name" required>
  </div>
  <div class="form-group">
    <label >Rank</label>
    <input type="text" class="form-control" name="Rank" required>
  </div>
  
  <div class="form-group">
    <label for="Password">password</label>
    <input type="password" class="form-control"  name="password" required>
  </div>
  <div class="form-group">
    <label >Profile_pic</label>
    <input type="file" class="form-control" name="Profile_pic" required>
  </div> <br>
  <button type="submit" class="btn btn-primary" name="create">Sign up</button>
</form>
</div>
</body>
</html



