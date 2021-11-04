<?php
     
     include_once 'config.php';


    $payt =$_POST["pay"];
    $card =$_POST["cardp"];
    $namepa=$_POST["namepay"];
	$date=$_POST["datep"];
    $cvc =$_POST["cvcp"];
   
	


    $sql = "insert into payment(payment_id,card_hname,card_num,exp_date,cvc,card_type)values('','$namepa','$card','$date','$cvc','$payt')";

   if (mysqli_query($conn,$sql)){

   echo "<br>"."Success";
   echo"<script>location.href='../home.php'</script>";
   }
   else{
   echo "failes";
   }

    mysqli_close($conn);

?>
