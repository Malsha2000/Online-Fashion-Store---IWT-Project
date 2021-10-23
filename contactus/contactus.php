
<?php
include_once 'config.php';
?>
<?php
if(isset($_POST['submit'])){
	
	$cusname=$_POST["names"];
	$cusemails=$_POST["emails"];
	$message=$_POST["messages"];
	
	$newz="INSERT INTO messages(message_id,cus_name,cus_email,message)VALUES('','$cusname','$cusemails','$message')";
	
	  if (mysqli_query($conn,$newz)){

   echo "<br>"."Success";
   echo"<script>location.href='../home.php'</script>";
   }
   else{
   echo "failes";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
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
        <a href="../profile/profile.php">MY PROFILE</a>|
        <a href="../ShoppingCart/ShoppingCart.php"><i class="fa fa-shopping-cart" style="font-size:24px; color:white"></i></a>
   </nav>
<hr>
   <main>
    <div class="clip">
        <h2 style="color: white; opacity: 0.7;margin-top: 10px; font-family: 'Quicksand', sans-serif;font-size: 20px;">Contact<br> us</h2>
    </div>
    <div class="con-left">
        <div class="con-add">
                    <div class="loc">
                        <a href="#"><i class="material-icons" style="font-size:50px; margin-top: 50px;">location_on</i></a>
                    </div>
          
           <div class="loc-p">
               <p>
                Address<br>
                Rosmad street,colombo 7
               </p>
                          </div>
        </div>
  
        <div class="con-contact">
            <div class="loc">
                <a href="#"><i class="fa fa-phone-square" style="font-size:50px; margin-top: 50px;"></i></a>
            </div>
  
   <div class="loc-p">
       <p>
        contact<br>
        (+94)11 2345678
       </p>
                  </div>
            
        </div>
        <div class="con-email">
            <div class="loc">
                <a href="#"><i class="fa fa-envelope" style="font-size:50px; margin-top: 50px;"></i></a>
            </div>
  
   <div class="loc-p">
       <p>
        Email<br>
        trendz.lk@gmail.com
       </p>
</div>
      
    </div>
</div>
    <div class="con-right">

        <div class="right">
<form action="contactus.php" method="POST">
       <p style="margin-top: 50px;">Full name</p>
       <input class="usern" type="text"  name="names" required>
       <p>Email</p>
       <input class="usere" type="text"  name="emails" required>
       <p>message</p>
       <input class="userm" type="text"  name="messages" required>
       <center><button type="submit" name="submit">Submit</button></center>  
</form>
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
            <a href="../privacyPolicy/PrivacyPolicy.html">Privacy Policy</a>  <br> <br>
            <a href="contactus.html">Contact Us</a> </p>
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