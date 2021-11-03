<?php
include_once('../config.php');

if(isset($_POST['cart'])){
	
	$sql="SELECT * FROM item WHERE item_id=20";
	$result=$conn->query($sql) or die(mysqli_error());
	if ($result-> num_rows>0){
	while($row=$result->fetch_assoc()){
 	  	$items=$row['item_id'];
		$itemcode=$row['item_code'];
		$name=$row['item_name'];
		$description=$row['item_des'];
		$price=$row['item_price'];
	}
	
		}
 session_start();

$ids=$_SESSION['id'];
$usern=$_SESSION['username'];
$dev="insert into cartr (cart_id,id,item_id,item_des,user_name,item_name,item_price)values('','$ids','$items','$description','$usern','$name','$price')";
$conn->query($dev);

echo"<script>location.href='../ShoppingCart/ShoppingCart.php'</script>";
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
            <img   src="images/logo.png" alt="logo image">
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

        <div class="trendzbox">
                <div class="clip">
                    <h1>CLOTHES</h1>
            </div>
            <div class="item">
                <div class="itemimage">
                    <img id="image123" src="dresses/b.jpg" alt="">
                </div>

                <div class="itemdes">
                    <div class="itemname">
                        <h1>M & M| KC002</h1>
                    </div>

                    <div class="itembox">
                        <div class="ibox3">

                        </div>

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
                                    <div class="c2">
                                    <div class="circle1"><a
                                        
                                        
                                        href="#">M</a></div>
                                    </div>
                                    <div class="circle1"><a href="#">L</a></div>
                                </div>

                                <div class="icolour">
                                <div class="clr1">
                                    <div class="circle1">
                                        <a href="">Black</a>
                                    </div>
                                </div>
                                <div class="clr2">
                                    <div class="circle1">
                                        <a href="">White</a>
                                    </div>
                                </div>
                                    <div class="clr3">
                                    <div class="circle1">
                                        <a href="">Yellow</a>
                                    </div>
                                </div>
                                    <div class="clr4">
                                    <div class="circle1">
                                        <a href="">Green</a>
                                    </div>
                                </div>
                                    <div class="clr5">
                                    <div class="circle1">
                                        <a href="">Brown</a>
                                    </div>
                                </div>
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
											
											 <form action="item2.php" method="post">
											 
											  <div class="buy">
											  
                                        <button type="submit" name="cart" class="button buy" >ADD TO CART <i class="fa fa-shopping-bag"></i></button></a>
										
										  </div>
										  
									   </form>
                                  

                                    <div class="addtocart">
                                       <a href="../Checkout/Checkout.php"> <button class="button buy" >checkout <i class="fa fa-shopping-cart"></i></button></a>
                                    </div>
                                </div>

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