<?php
$mysqli = new mysqli("localhost", "root", "", "foodorder");

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối MySQLi lỗi: " . $mysqli->connect_error;
    exit();
}
?>
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
    <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>
        <?php
        $sql_lietke_sanpham = "SELECT * from tbl_danhmuc,tbl_sanpham where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc   ORDER BY id_sanpham DESC";

        $query_lietke_sanpham = mysqli_query($mysqli, $sql_lietke_sanpham);
        ?>
        <div class="menu_box">
            <?php
            $i = 0;
            while (
                $row = mysqli_fetch_array($query_lietke_sanpham)
            ) {
                $i++;
            ?>
                <div class="menu_card">

                    <div class="menu_image">
                        <img src="/admin/modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>">
                    </div>

                    <div class="small_card">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <div class="menu_info">

                        <h2><?php echo $row['tensanpham'] ?></h2>
                        <p>
                            <?php echo $row['noidung'] ?>
                        </p>
                        <h3><?php echo $row['giasanpham'] ?></h3>
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Order Now">
                            <input type="hidden" name="tensp" value="<?php echo $row['tensanpham'] ?>">
                            <input type="hidden" name="gia" value="<?php echo $row['giasanpham'] ?>">
                            <input type="hidden" name="hinh" value="/admin/modules/quanlysanpham/upload/<?php echo $row['hinhanh'] ?>">

                        </form>
                    </div>

                </div>


            <?php
            }
            ?>
        </div>

    </div>


</body>

</html>