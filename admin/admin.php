
<!DOCTYPE html>


<html lang="en">
<head>
 <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="../styles/header.css">
</head>


<body>
   <header>
        <div class="logo">
            <img src="images/logo.png" alt="logo image">
        </div>

        <div class="stuff">
          
            <div class="stuff1">
                
            </div>
        </div>

   </header>

<br>
<hr>
<br>
<div class="size-max">
<div class="sizeing">
				<div  class="item" >
				  <p style="font-size:24px">ADDING ITEMS</P>
					<form method="POST" action="additem.php" >
					<input class="" type="text" placeholder="item id" name="itemc" required>
					<input class="" type="text" placeholder="item Name" name="itemn" required>
					<input class="" type="text" placeholder="item description" name="itemd" required>
					<input class="" type="text" placeholder="Price" name="itemp" required>
					 <button type="submit" name="upload">upload</button>
					</form>
				</div>
</div>
<div class="zoom">
<div class="zoom-text">
<p>On Going Delivery</p>
<?php

 include_once 'config.php' ;


	$query="SELECT COUNT(id) AS total FROM delivery";	
    $result=mysqli_query($conn,$query);
	$values=mysqli_fetch_assoc($result);
	$num_rows= $values['total'];
 

   echo "<p1>$num_rows</p1>";
   

						$sql="SELECT * FROM delivery ";
						$result =mysqli_query($conn,$sql);
						
						if($result ->num_rows>0){
							while($row =$result->fetch_assoc()){
						
							
							echo "<td>"."<p>".$row['fname_d']."  |  ".$row['address_d']."  |  ".$row['email_d']."  |  "."</p>";
							echo "<a href='remove.php?id=$row[id]'>Remove</a>"." | "."<a href='edit.php?id=$row[id]'>Edit</a>";
							
						}
						}

?>
</div>
</div>



<div class="zoom">
<div class="zoom-text">
<p>Users</p>
<?php

 include_once 'config.php' ;


	$query="SELECT COUNT(user_id) AS total FROM details";	
    $result=mysqli_query($conn,$query);
	$values=mysqli_fetch_assoc($result);
	$num_rows= $values['total'];
 

   echo "<p1>$num_rows</p1>";
   

						$sql="SELECT * FROM details ";
						$result =mysqli_query($conn,$sql);
						
						if($result ->num_rows>0){
							while($row =$result->fetch_assoc()){
						
							
							echo "<td>"."<p>".$row['user_name']."  |  ".$row['Email']."  |  ".$row['Password']."  |  "."</p>";
							echo "<a href='removes.php?id=$row[user_id]'>Remove</a>"." | "."<a href='edits.php?id=$row[user_id]'>Edit</a>";
							
						}
						}

?>
</div>
</div>
<div class="zoom">
<div class="zoom-text">
<p>Comments</p>
<?php

 include_once 'config.php' ;


	$query="SELECT COUNT(cmt_id) AS total FROM comment";	
    $result=mysqli_query($conn,$query);
	$values=mysqli_fetch_assoc($result);
	$num_rows= $values['total'];
 

   echo "<p1>$num_rows</p1>";
   

						$sql="SELECT * FROM comment";
						$result =mysqli_query($conn,$sql);
						
						if($result ->num_rows>0){
							while($row =$result->fetch_assoc()){
						
							
							echo "<td>"."<p>".$row['name']."  |  ".$row['comments']."  |  "."</p>";
							
							
						}
						}

?>
</div>
</div>
</form>
<div class="zoom2">
<form method="post" action="logout.php">
    <button type="submit"  >logout</button></a>
	</div>
	</form>
	</div>
</body>
</html>
