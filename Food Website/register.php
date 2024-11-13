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
    <div class="tumlum">
            <h2>Register</h2>
            <form method="POST" action="register.php">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="getname" required>
          
            <label for="name">User Name:</label>
            <input type="text" id="name" name="getusername" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="getpass" required>
          
            <label for="password">Confirm Password:</label>
            <input type="password" id="password" name="conpass" required>

            <input type="submit" value="Register" name="sub">
          </form>
    </div>
          <?php
           if(isset($_POST['sub'])){
            require '_dbcon.php';
            $getname=$_POST['getname'];
            $getusername=$_POST['getusername'];
            $getpass=$_POST['getpass'];
            $conpass=$_POST['conpass'];

            $sql="select user_name from signup where user_name = '$getusername'";
            $sqlres=mysqli_query($connect, $sql);
            $rowcount=mysqli_num_rows($sqlres);

            if($rowcount !=0){
                echo "User name is not available. Try another one";
            }
            if($getpass != $conpass){
                echo "Confirm password properly";
            }
            if(($rowcount ==0) && ($getpass == $conpass)){
                echo "You have successfully signed up.";
                $gotologin = "<a href='login.php'>Log in.</a>";
                echo $gotologin;

                $sql="insert into signup (full_name, user_name, password) values ('$getname','$getusername','$getpass')";
                $sqlres=mysqli_query($connect, $sql);
            }
           }
         ?>
    
</body>
</html>
