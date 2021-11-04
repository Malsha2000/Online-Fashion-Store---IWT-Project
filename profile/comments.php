<?php 
 include_once 'config.php' ;
 ?>
 <?php 

 session_start();
  
   
    $id=$_SESSION['id'];
    $cname =$_POST['ucomment'];
    $cmt =$_POST['comments'];
	

    $sql1= "insert into comment(cmt_id,user_id,name,comments)values('','$id','$cname','$cmt')";


   if (mysqli_query($conn,$sql1)){

   echo "<br>"."Success";
   echo"<script>location.href='profile.php'</script>";
   }
   else{
   echo "failes";
      
   }

    mysqli_close($conn);

?>



