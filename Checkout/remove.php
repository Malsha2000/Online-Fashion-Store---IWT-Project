
<?php
include_once 'config.php'; 

$id=$_GET['id'];

$result = mysqli_query($conn, "DELETE FROM cartr WHERE cart_id=$id");

header("Location:Checkout.php");
?>