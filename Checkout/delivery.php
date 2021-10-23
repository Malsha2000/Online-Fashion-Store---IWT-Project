<?php
     
     include_once 'config.php';

session_start();
   $ids=$_SESSION['id'];
    $name =$_POST["fname"];
    $address =$_POST["addressd"];
	$phone =$_POST["cnum"];
    $emaild =$_POST["emaild"];
    $upostal =$_POST["cpostal"];
	
    $sql = "insert into delivery(id,Cus_id ,fname_d,address_d,phone_d,email_d,postal_code)values('','$ids','$name','$address','$phone','$emaild','$upostal')";

   if (mysqli_query($conn,$sql)){

   echo "<br>"."Success";
   echo"<script>location.href='../home.php'</script>";
   }
   else{
   echo "failes";
   }

    mysqli_close($conn);

?>
