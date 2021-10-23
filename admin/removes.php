
<?php
include_once 'config.php'; 

$id=$_GET['id'];

$result = mysqli_query($conn, "DELETE FROM details WHERE user_id=$id");

header("Location:admin.php");
?>