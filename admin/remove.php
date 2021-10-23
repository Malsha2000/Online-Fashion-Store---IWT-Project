
<?php
include_once 'config.php'; 

$id=$_GET['id'];

$result = mysqli_query($conn, "DELETE FROM delivery WHERE id=$id");

header("Location:admin.php");
?>
