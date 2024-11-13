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
                <li><a href="feedback.php">Feed Back</a></li>
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
  <form method="POST" action="">
  <br style="clear: both">
  <div class="login" id="Login">
    <div class="tumlum">
            <h2>Login</h2>
            <form action="login.php" method="post">
            <label for="name">User Name:</label>
            <input type="text" id="name" name="getusername" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="getpass" required>
          
            <input type="submit" value="Login" name="sub">
            <a href="forgotpassword.php">Forgot password</a>
          </form>
    </div>
          <?php
          if(isset($_POST['sub'])){
           require '_dbcon.php'; 
           
           $getusername=$_POST['getusername'];
           $getpassword=$_POST['getpass'];

           $sql1="select * from signup where user_name = '$getusername' and password='$getpassword';";
           $sqlres=mysqli_query($connect, $sql1);
           $countrows=mysqli_num_rows($sqlres);

           if($countrows == 0){
               echo "account not available. Please <a href='index.php'>Home.</a>";
           }else{
               session_start();
               $_SESSION['loggedin']=true;
               $_SESSION['sendusername']=$getusername;
               header("location: index.php");  
           }
          }
        ?>
        
    </body>
</html>