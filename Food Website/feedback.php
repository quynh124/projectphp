<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="review.php">Review</a></li>              
                <li><a href="contact.php">Feed Back</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>

            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
                <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </nav>
        
        <div class="main">

            <div class="men_text">
                <h1>Food<span>Brings</span><br>You Joy</h1>
            </div>

            <div class="main_image">
                <img src="image/main_img.png">
            </div>

        </div>

        <p>
            When coming to our website. We want to give our customers the best experience. If there is a mistake, the customer can give us suggestions.
        </p>

       
    </section>
</div>


</div>
</nav>
<br>
<div1>
<div class="container" >
<div class="col-md-5" style="float: none; margin: 0 auto;">
<div class="form-area">
  <form method="post" action="save_feedback.php">
  <br style="clear: both">
  <div class="contact" id="Contact">
    <h1>Feed Back<span>From</span></h1>
    <div class="linh_tinh">
    <div class="form-group">
      <input type="text" for="name" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
    </div>


    <div class="form-group">
      <input type="email" for="email"class="form-control" id="email" name="email" placeholder="Email" required>
    </div>    


    <div class="form-group">
      <input type="Number"for="mobile" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
    </div>


    <div class="form-group">
      <input type="text" for="subject" class="form-control" id="subject" name="subject" placeholder="Subject" required>
    </div>


    <div class="form-group">
     <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
     <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
    </div>
    <input type="submit" value="Sumit" name="sub" style="
    width:205px;
    height:39px;">
</div>
  </div>   
  
  </form>
</div>
</div>
</div>
<footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>USA</p>
                <p>India</p>
                <p>Japan</p>
                <p>Italy</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>Menu</p>
                <p>Team</p>
                <p>Review</p>
                <p>Contact</p>
                <p>Login</p>
                <p>Register</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+84 292 373 1071</p>
                <p>+84 328 720 265</p>
                <p>nguyenquynh4319@gmail.com</p>
                <p>cusc@ctu.edu.vn</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>
    </footer>

</body>
</html>

