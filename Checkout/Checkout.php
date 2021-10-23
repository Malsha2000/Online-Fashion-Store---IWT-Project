<?php
include_once('config.php');

?>
<?php
 session_start();
 
 
  if(isset($_SESSION['username'])){
	  
	  
	 
  }
	else{
	
		echo"<script>location.href='../login/login.php'</script>";
	}
?>


<?php
 
$ids=$_SESSION['id'];
$query1="SELECT fname_d,address_d,phone_d,email_d,postal_code FROM delivery WHERE Cus_id ='$ids'";
$result=$conn->query($query1) or die(mysqli_error());
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
$name=$row['fname_d'];
$address=$row['address_d'];
$phone=$row['phone_d'];
$email=$row['email_d'];
$postal=$row['postal_code'];
}

}
else{
	$name='';
	$address='';
	$phone='';
	$email='';
	$postal='';
	
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    
   <nav>
    <a href="../home.php">HOME </a>|
        <a href="../Category/Cat.html">CATEGORIES </a>|
        <a href="../login/login.php">LOGIN </a>|
        <a href="../create/createacc.html">SIGN IN </a>|
        <a href="../profile/profile.php">MY PROFILE</a>
        
   </nav>
<hr>
   <main>
<form method ="POST" action="Delivery.php">
        <div class="trendzbox">
                <div class="clip">
                    <h1>Checkout</h1>
                </div>
            
            <div class="b1">
                <h3>Shipping Details</h3>
								<hr>
								<div class="a1">
									   <div class="aa">
									
										<p> Name</p>
										
										<p></p>
									   </div>
									<br>
									   <div class="aa">
									   <input type="test" name ="fname" value="<?php echo($name);?>"/>
										   
										</div>
								</div>
								<br>
								<br>
									  <div class="a2">
											<div class="aa">
												<p>Email</p>
											</div>
											<br>
											<input type="test"  name ="emaild" value="<?php echo($email);?>"/>
									   </div>
								  <br>
								  <br>
										 <div class="a3">
												  <div class="aa">
													<p>Address</p>
												  </div>
										  <br>
											  <input type="test" name="addressd" value="<?php echo($address);?>"/>
										</div>
									<br>	
									  <div class="a4">
												<div class="aa">
													<p>Contact</p>
													<p>Zip/Postal  Code</p>
													<p></p>
												   </div>
												   <div class="aa">
														<input type="test" name="cnum" value="<?php echo($phone);?>"/>
													   <input type="text" name="cpostal" value="<?php echo($postal);?>"/>
												</div>
									</div>
							 
								<div class="button">
                                    <button type="submit" name="delivery">Submit</button>
                                </div>
								</form>
                  
            </div>
              
            <div class="b2">
               <div class="itemz">
					<?php
                        
						
					 $ids=$_SESSION['id'];
					 
					$mal = "SELECT cart_id,item_id,item_name,item_price,item_des FROM cartr WHERE id='$ids'";
					$result=$conn->query($mal) or die(mysqli_error());
					if ($result-> num_rows>0){
						while($row=$result->fetch_assoc()){
							$cart=$row['cart_id'];
							echo "<p>".$row['item_name']."</p>";
							echo "<p>".$row['item_price']."</p>";
							echo "<p>".$row['item_des']."</p>";
							echo "<center>"."<button>"."<a href='remove.php?id=$cart'>Remove</a>"."</button>"."</center>";
						}
						
					}	
					 

					?>
					</div>
                  
                <br>
                <br> 
            

                    <div class="po">
                                <div class="button">
                                    <a href="../Payment/Payment.html"><Button type="button">Proceed To Checkout <i class="fa fa-shopping-bag"></i> </Button>
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
    <div class="footermain">
        <div class="main">
            <div class="quick">
                <h1>QUICK LINKS</h1>
                <p> <a href="#">About us</a>  <br> <br>
                <a href="#">Privacy Policy</a>  <br> <br>
                <a href="">Contact Us</a> </p>
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
                <a href="#"><i 
                    class="material-icons" style="font-size:24px;">location_on</i></a>
                <div class="line">
                <hr>
                <div class="morelinks">
                    <a href="#"><i 
                        class="material-icons" style="font-size:24px;">facebook</i></a>
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
    </div>
   </footer>

</body>
</html>