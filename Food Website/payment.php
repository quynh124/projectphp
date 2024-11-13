<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
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
  
    <div class="payment">
      <h2>Billing Information</h2>
      <form>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone">

        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea>

        <label for="card">Card:</label>
        <input type="text" id="card" name="card">

        <label for="additionalnotes">Additional notes</label>
        <input type="text" id="additionalnotes" name="additionalnotes">
        <button type="submit"><a href="index.php">Payment</a></button>
      </form>
    </div>

  </body>
</php>
</html>