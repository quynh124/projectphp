<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
  array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
  $hinh = $_POST['hinh'];
  $tensp = $_POST['tensp'];
  $gia = $_POST['gia'];
  $soluong = $_POST['soluong'];
  $fl = 0;
  for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {

    if ($_SESSION['giohang'][$i][1] == $tensp) {
      $fl = 1;
      $soluongnew = $soluong + $_SESSION['giohang'][$i]['3'];
      $_SESSION['giohang'][$i]['3'] = $soluongnew;
      break;
    }
  }

  if ($fl == 0) {

    $sp = [$hinh, $tensp, $gia, $soluong];
    $_SESSION['giohang'][] = $sp;
  }

  // var_dump($_SESSION['giohang']);
}

function showgiohang()
{
  if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
    if(sizeof($_SESSION['giohang'])>0){
      $cart = $_SESSION['giohang'];
      $tong = 0;
      foreach ($cart as $index => $item) {
        $quantity = (int) $item['2']; // Convert the quantity to an integer
        $price = (int) $item['3']; // Convert the price to an integer
        
        $tt = $quantity * $price;
        $tong += $tt;
          
          echo '<tr>
                  <td>'.($index + 1).'</td>
                  <td><img src="images/'.$item[0].'" alt=""></td>
                  <td>'.$item['1'].'</td>
                  <td>'.$item['2'].'</td>
                  <td>'.$item['3'].'</td>
                  <td>
                      <div>'.$tt.'</div>
                  </td>
                  <td>
                      <a href="cart.php?delid='.$index.'">Delete</a>
                  </td>
                </tr>';
      }
      
      echo '<tr>
              <th colspan="5">Total order</th>
              <th>
                  <div>'.$tong.'</div>
              </th>
            </tr>';
   
    }
  } else {
    echo "Empty cart!";
  }
}




?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Cart</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  </div>

  <div class="cart">
    <h2>Your cart</h2>
    <table>
      <thead>
        <tr>
          <th>Numerical order</th>
          <th>Image</th>
          <th>Product's name</th>
          <th>Unit price</th>
          <th>Quantity</th>
          <th>To Money ($)</th>
          <th>Delete</th>
        </tr>
        <?php showgiohang(); ?>

        <!--
          <tr>
            <td>Buger</td>
            <td>20$</td>
            <td>2</td>
            <td>40$</td>
          </tr>
          <tr>
            <td>Pizza</td>
            <td>20$</td>
            <td>1</td>
            <td>20$</td>
          </tr>
        
        <p>Total <span>60$</span></p>-->
      </thead>
    </table>

    <div class="row mb">
      <a href="payment.php"><input type="submit" value="ORDER" name="dongydathang"></a>
      <a href="cart.php?delcart=1"><input type="button" value="CLEAR CART"></a>
      <a href="menu.php"><input type="button" value="CONTINUE ORDERING"></a>
    </div>
  </div>

</body>

</html>