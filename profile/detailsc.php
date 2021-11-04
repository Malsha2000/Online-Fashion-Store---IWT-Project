	<?php
     
     include_once 'config.php';
?>
	<?php
	$nid =$_POST["id"];
	$address =$_POST["eaddress"];
	$phone =$_POST["ephone"];
	$usern  =$_POST["euser"];
	
	$dal ="insert into adress(cus_id,address,phone,name)values('$nid','$address','$phone','$usern')";

	  if (mysqli_query($conn,$dal)){

   echo "<br>"."Success";
   }
   else{
   echo "failes";
   }

    mysqli_close($conn);
?>
