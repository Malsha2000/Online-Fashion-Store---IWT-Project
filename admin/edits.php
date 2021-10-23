
<?php


include_once 'config.php'; 

if(isset($_POST['dupdate']))
{

$id = $_POST['id'];
$names =$_POST['name'];
$emails =$_POST['email'];
$passwords=$_POST['password'];

$result= mysqli_query($conn,"UPDATE details SET user_name='$names',Email='$emails',Password='$passwords' WHERE user_id=$id");

header("Location:admin.php");

}

?>

<?php


$id=$_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM details WHERE user_id=$id");

while($row = mysqli_fetch_array($result)){


$name = $row['user_name'];
$email = $row['Email'];
$password = $row['Password'];

}
?>

<form method="POST" action="edits.php" >
<p>Name</p>
<input type="text" name="name"value=<?php echo $name;?>>

<p>Email</p>
<input type="text" name="email" value=<?php echo $email;?>>

<p>Password</p>
<input type="text" name="password"  value=<?php echo $password;?>>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<button name="dupdate" type="submit" >Upload</button>
</form>

