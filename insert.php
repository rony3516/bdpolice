<?php

require('conn.php');
if(isset($_POST['create'])){
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
   
    
    $password=$_POST['password'];
    htmlspecialchars($password);
    
    $pro=$_FILES['Profile_pic'];
    
    $imgename=$pro['name'];
    $tmp_name=$pro['tmp_name'];
    $loc='imge/'.$imgename; 
    move_uploaded_file($tmp_name,$loc);


    $EamilCheck="SELECT * FROM user  WHERE Email='$Email'";
    $emailquery=mysqli_query($conn,$EamilCheck);
     $row= mysqli_num_rows($emailquery);
     if($row){
         echo "Email use Change Email ";
     }else{
        $sql="INSERT INTO user (ID, Name, Moblie_Number, Email, Unit_Name, Thana_Name, Districts_Name, Range_Name, Traning_Senter_Name, Rank, password, Profile_pic) 
                     VALUES (NULL, '$Name', '$Moblie_Number', '$Email', '$Unit_Name', '$Thana_Name', '$Districts_Name', '$Range_Name', '$Traning_Senter_Name', '$Rank', '$password', '$loc');";
   
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:login.php");
    }}
    }
    
    ?>
     


    




