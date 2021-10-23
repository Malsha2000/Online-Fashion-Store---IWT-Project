<?php
include_once 'config.php' ;
?>
<?php
    $icode=$_POST['itemc'];
    $iname =$_POST["itemn"];
    $idescrip =$_POST["itemd"];
    $iprice =$_POST["itemp"];
	

    $sql = "insert into item(item_id,item_code,item_name,item_des,item_price)values('','$icode','$iname','$idescrip','$iprice')";
	
   if (mysqli_query($conn,$sql)){

   echo "<br>"."Success";
   echo"<script>location.href='admin.php'</script>";
   }
   else{
   echo "failes";
   }


?>