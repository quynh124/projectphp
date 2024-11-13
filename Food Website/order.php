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
    <div class="order" id="Order">
        <h1><span>Order</span>Now</h1>

        <div class="order_main">

            <div class="order_image">
                <img src="image/order_image.png">
            </div>

            <form action="#">
                
                <div class="input">
                    <p>Name</p>
                    <input type="text" placeholder="you name">
                </div>

                <div class="input">
                    <p>Email</p>
                    <input type="email" placeholder="you email">
                </div>

                <div class="input">
                    <p>Number</p>
                    <input placeholder="you number">
                </div>

                <div class="input">
                    <p>How Much</p>
                    <input type="number" placeholder="how many order">
                </div>

                <div class="input">
                    <p>You Order</p>
                    <input placeholder="food name">
                </div>

                <div class="input">
                    <p>Address</p>
                    <input placeholder="you Address">
                </div>

                <a href="#" class="order_btn">Order Now</a>
            </div>
            </form>
    
        </div>
    </div>

</body>
</html>