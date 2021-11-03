<?php
  include_once 'config.php' ;

		 session_start();
		 			 
		if(isset($_SESSION['username'])){
				/*echo "<h1>welcome".$_SESSION['username']."</h1>";
				echo "<a href='profile.php'>Profile</a><br>";*/
				header ('Location:../home.php');
	
		}
				 
		else {
			if($_POST["login"]=="candidate"){
				   $name=$_POST['name'];
				   $password=$_POST['pwd'];	
				
				$query="SELECT user_id,user_name,Email FROM details WHERE user_name='$name' AND Password='$password'";
				$result = mysqli_query($conn,$query) or die(mysqli_error());
		
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)) {
						$_SESSION['id'] = $row["user_id"];
						$_SESSION['username'] = $row["user_name"];
						$_SESSION['email'] = $row["Email"];
					}
					echo "<script>location.href='welcome.php'</script>";
				}
				else{
					echo"<script>alert ('username or password incorrect!')</script>";	
					
					echo"<script>location.href='login.php'</script>";
				}
			}
			else if( $_POST["login"] == "employee"){
			
				$name=$_POST['name'];
				$password = $_POST['pwd'];
			
				$query="SELECT admin_id,admin_name FROM admindeatails WHERE admin_name='$name' AND admin_password='$password'";
				$result = mysqli_query($conn,$query) or die(mysqli_error());
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)) {
						$_SESSION['id'] = $row["admin_id"];
						$_SESSION['username'] = $row["admin_name"];
						
					}
					echo "<script>location.href='../admin/admin.php'</script>";
				}
				else{
					echo"<script>alert ('username or password incorrect!')</script>";	
					
					echo"<script>location.href='login.php'</script>";
				}
			
		}
		
		}

		
?>