<?php
 session_start();
 
 
  if(isset($_SESSION['username'])){
	  
	  
	 
  }
	else{
	
		echo"<script>location.href='../login/login.php'</script>";
	}
?>
<?php
include_once('../config.php');
$id=$_SESSION['id'];
$data="SELECT user_name,Email FROM details WHERE user_id='$id'";
$result=$conn->query($data) or die(mysqli_error());
if ($result-> num_rows>0){
	while($row=$result->fetch_assoc()){
		
		$names=$row['user_name'];
		$emails=$row['Email'];
		
	}
	
}


?>
<?php

if(isset($_POST['edit'])){
	$id=$_SESSION['id'];
	$name=$_POST['username'];
	$email=$_POST['usermail'];
$change="UPDATE details SET Email='$email'  WHERE user_id='$id'";
if($conn->query($change)==TRUE){
  echo "Record updated successfully";
  echo"<script>location.href='../profile/profile.php'</script>";
} else {
  echo "Error updating record: " . $conn->error;
}
}
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRENDZ|Store</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="../js/myscripts.js"></script> 

	
</head>
<body>
   <header>
        <div class="logo">
            <img src="images/logo.png" alt="logo image">
        </div>

        <div class="stuff">
            <div class="search">

                <input class="searchInput"type="text" name="" placeholder="Search">
                <button class="searchButton" href="#">
                    <i class="material-icons">
                        search
                    </i>
                </button>
            </div>
            <div class="stuff1">
                
            </div>
        </div>

   </header>
    
   <nav>
        <a href="../home.php">HOME </a>|
        <a href="../Category/Cat.html">CATEGORIES </a>|
        <a href="../login/login.php">LOGIN </a>|
        <a href="../create/createacc.html">SIGN IN </a>|
        <a href="profile.php">MY PROFILE</a>|
        <a href="../ShoppingCart/ShoppingCart.php"><i class="fa fa-shopping-cart" style="font-size:24px; color:white"></i></a>
        
   </nav>
<hr>
   <main>
  <div class="trendzbox">
			<div class="clip">
				<h1 style="font-size:24px; font-family: 'Quicksand', sans-serif;">My Profile</h1>
			</div>
	<div class="pro-left">
		<div class="favorite">
					<div class="liness">
						<div class="line"></div>
						<h2>Favorite</h2>
						<div class="line"></div>
					</div>
			<div class="f-con">
		
					<div class="f-image"> 
						<img src="images/a.jpg">
					<button id="btn1" class="button view" onclick="loadData('btn1')">View Item</button>
					</div>

					<div class="f-image">
						<img src="images/t2.jpg">
					  <button id="btn2" class="button view" onclick="loadData('btn2')">View Item</button>
					</div>
					<div class="f-image">
						<img src="images/b.jpg">
						 <button id="btn3" class="button view" onclick="loadData('btn3')">View Item</button>
					</div>
			</div>
	
		<div class="favorite">
			<div class="liness">
				<div class="line"></div>
				<h2>Oders</h2>
				<div class="line"></div>
			  </div>
			<div class="f-con">
    
				<div class="f-image"> 
					<img src="images/b1.jpg">
					<button id="btn4" class="button view" onclick="loadData('btn4')">View Item</button>
				</div>

				<div class="f-image">
					<img src="images/1.jpg">
					<button id="btn5" class="button view" onclick="loadData('btn5')">View Item</button>
				</div>
				<div class="f-image">
					<img src="images/t1.jpg">
					<button id="btn6" class="button view" onclick="loadData('btn6')">View Item</button>
				</div>
				</div>
			</div>
		</div>


	</div>




		<div class="pro-middle">
					<div class="oder-check">
						<center><h1>Ongoing Oders</h1> </center><hr>
						<center><input class="orders" type="text" placeholder="Enter Order ID" name="oders" required></center>
						<center><input class="bill" type="text" placeholder="Bill No" name="bill" required></center> 
						<center><input class="oemail" type="text" placeholder="Email" name="oemail" required></center>
						<center><input class="ocontactnum" type="text" placeholder="Contact Number" name="ocontactnum" required></center> 
						<center><a href=""><button>Track Order</button></a></center>  
					</div>

		</div>
	<div class="pro-right">

			<div class="edit">


						 <form method="post" action="profile.php">
							<p><i class="fa fa-users"></i> Name</p>
							
							<input class="editname" type="text" name="username" value=<?php echo $names?>>
						  
							<p> <i class="fa fa-envelope"></i>  Email</p>
							
							<input class="editemail" type="text" name="usermail" placeholder="" value=<?php echo $emails?>>

						<button type="submit" name="edit">Edit</button>
						</form>
							<form method="post" action="logout.php">
								<button type="submit"  >logout</button></a>	
							</form>
			</div>
		<div class="edit-address">


				<form method="post" action="comments.php">

					<p>Comment Area</p>
					<p>Name</p>
					 <input class="editname" type="text" placeholder="" name="ucomment" required>
					 <p>your comment </p>
					<input class="editname"  type="text" placeholder="" name="comments" required>
					<br>
					<button type="submit" >Done</button>

					</form>

					
				</form>
				<form method="post" action="../admin/logout.php">
					<button type="submit"  >logout</button></a>
					
				</form>
		</div>

	</div>
         <div class="item">
					<div class="itemimage">
						<img id="image123" src="images/1.jpg" alt="">
					</div>

                <div class="itemdes">
											<div class="itemname">
												<h1></h1>
											</div>

							<div class="itembox">
										
											<div class="ibox4">
													<div class="ides">
														<div class="pp">
														<p>ITEM DESCRIPTION</p>
													</div>
														<p>
															Take the impeccable cut of a shirt and the natural elegance of a ruffled corolla skirt and combine the two for this sensational midaxi dress. It updates the classic floral print dress with an on-trend arty print.
														</p>
													</div>
												<div class="isize">
														<div class="circle1"><a href="#">S</a></div>
													
														<div class="circle1"><a href="#">M</a></div>
													
														<div class="circle1"><a href="#">L</a></div>
												</div>

											

									<div class="price">
												<div class="boxx">
													<p>
														Price 
													</p>
												</div>

												<div class="boxx2">
													<div class="line">
														<hr>
													</div>
												</div>
					
												<div class="boxx">
													<p>1600.00 LKR</p>
												</div>
									</div>

										<div class="cartb">

													<div class="buy">
														<a href="profile.php"><button class="button buy">BACK</button></a>
													</div>
												
										</div>
                                    </div>
                                </div>
							</div>
                        </div>
  </div>    
</main>
<div class="hr">
    <hr>
</div>
<footer>

    <div class="main">
        <div class="quick">
            <h1>QUICK LINKS</h1>
            <p> <a href="../Aboutus/About.html">About us</a>  <br> <br>
            <a href="../privacypolicy/PrivacyPolicy.html">Privacy Policy</a>  <br> <br>
            <a href="../contactus/contactus.php">Contact Us</a> </p>
        </div>
            
        <div class="get">
            <h1>GET IN TOUCH</h1>
            <p>Call us at <br> <br>
            <a href="#">(+94)11 2345678</a>  <br> <br>
            <a href="#">trendz.lk@gmail.com</a>
            </p>
        </div>
    </div>

    <div class="links">
        <div class="empty"></div>
        <div class="location">
            <br>
            <br>
            <a href="https://www.google.lk/maps/place/One+Galle+Face+Mall/@6.9273279,79.8428999,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bcfdee7764d:0xdf97fbb66912b0c5!8m2!3d6.9273279!4d79.8450886"><i 
                class="material-icons" style="font-size:24px;">location_on</i></a>
            <div class="line">
            <hr>
            <div class="morelinks">
                <a href="#"><i class="material-icons" style="font-size:24px;">facebook</i></a>
                <a href="#"><i class="fa fa-twitter" style="font-size:24px;"></i></a>
                <a href="#"><i class="fa fa-instagram" style="font-size:24px;"></i></a>
                <a href="#"><i class="fa fa-google-plus" style="font-size:24px;"></i></a>
            </div>
            </div>
        </div>
    </div>
    <div class="btmlogo">
        <div class="empty2">
            <img src="images/bottom logo.jpg-1.png" alt="">
        </div>

        <div class="credit">
         <div class="cards">
            <i class="fa fa-cc-visa" style="font-size:24px; color:#d1d7e0 ;"></i>
            <i class="fa fa-cc-amex" style="font-size:24px;color:#d1d7e0"></i>
            <i class="fa fa-cc-paypal" style="font-size:24px;color:#d1d7e0"></i>
            <i class="fa fa-cc-discover" style="font-size:24px;color:#d1d7e0"></i>
         </div>   
        </div>
    </div>
</footer>


</body>
</html>