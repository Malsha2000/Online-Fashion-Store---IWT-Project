
<?php


include_once 'config.php'; 

if(isset($_POST['dupdate']))
{

$id = $_POST['id'];
$name =$_POST['name'];
$phone =$_POST['phone'];
$address=$_POST['address'];

$result= mysqli_query($conn,"UPDATE delivery SET fname_d='$name',phone_d='$phone',address_d='$address' WHERE id=$id");

header("Location:admin.php");

}

?>

<?php


$id=$_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM delivery WHERE id=$id");

while($row = mysqli_fetch_array($result)){


$name = $row['fname_d'];
$address = $row['address_d'];
$phone = $row['phone_d'];

}
?>

<form method="POST" action="edit.php" >
<p>name</p>
<input type="text" name="name"value=<?php echo $name;?>>

<p>Address</p>
<input type="text" name="address" value=<?php echo $address;?>>

<p>phone</p>
<input type="text" name="phone"  value=<?php echo $phone;?>>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<button name="dupdate" type="submit" >Upload</button>
</form>

