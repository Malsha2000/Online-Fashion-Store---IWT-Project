<?php
     
     include_once 'config.php';
?>
<?php


    $name =$_POST["uname"];
    $email =$_POST["uemail"];
    $password =$_POST["upassword"];
	

    $sql = "insert into details(user_id,user_name,Email,Password)values('','$name','$email','$password')";

   if (mysqli_query($conn,$sql)){

   echo "<br>"."Success";
   echo"<script>location.href='../login/login.php'</script>";
   }
   else{
   echo "failes";
   }

    mysqli_close($conn);

?>
