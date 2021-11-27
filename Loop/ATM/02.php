
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ATM</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="content">
  <?php
    $money = 0;
    if(isset($_GET['money'])) {
    $money = filter_var($_GET['money'], FILTER_SANITIZE_NUMBER_INT); }
  ?>
    <div class="info">

      <img src="atm.png" alt="atm">
      <h1>Mô phỏng máy ATM</h1>
      <form action="#" method="get">
        <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
        <input type="text" name="money" value="<?php echo number_format($money); ?>">
        <input type="submit" value="Rút tiền">
      </form>
    </div>
    <div class="clr"></div>
    <div class="result">
      <div class="normal">
        <p class="col1">Mệnh giá</p>
        <p class="col2">Số lượng</p>
        <p class="col3">Thành tiền</p>
      </div>
      <div class="clr"></div>
      <?php
        define("FIVE_0", 50000);
        define("ONE_00", 100000);
        define("TWO_00", 200000);
        define("FIVE_00", 500000);

        $five00 = 0;
        $two00 = 0;
        $one00 = 0;
        $five0 = 0;

        $flagShow = false;
        if(is_numeric($money) && $money > 50000) {
          $flagShow = true;
          while ($money >= FIVE_00) { $five00++; $money = $money - FIVE_00; }
          while ($money >= TWO_00) { $two00++; $money = $money - TWO_00; }
          while ($money >= ONE_00) { $one00++; $money = $money - ONE_00; }
          while ($money >= FIVE_0) { $five0++; $money = $money - FIVE_0; }

          $total = FIVE_00*$five00 + TWO_00*$two00 + ONE_00*$one00 + FIVE_0*$five0;
        }
      ?>
      <?php
        if($five00 > 0) {
          echo '<div class="normal">
              <p class="col1">' . number_format(FIVE_00) . '</p>
              <p class="col2">' . $five00 . '</p>
              <p class="col3">' . number_format($five00 * FIVE_00) . '</p>
            </div>';
        }

        if($two00 > 0) {
          echo '<div class="normal">
              <p class="col1">' . number_format(TWO_00) . '</p>
              <p class="col2">' . $two00 . '</p>
              <p class="col3">' . number_format($two00 * TWO_00) . '</p>
            </div>';
        }

        if($one00 > 0) {
          echo '<div class="normal">
              <p class="col1">' . number_format(ONE_00) . '</p>
              <p class="col2">' . $one00 . '</p>
              <p class="col3">' . number_format($one00 * ONE_00) . '</p>
            </div>';
        }

        if($five0 > 0) {
          echo '<div class="normal">
              <p class="col1">' . number_format(FIVE_0) . '</p>
              <p class="col2">' . $five0 . '</p>
              <p class="col3">' . number_format($five0 * FIVE_0) . '</p>
            </div>';
        }
        echo '<hr>';
        if ($flagShow) {
          echo '<p class="total">Tổng tiền: ' . number_format($total) . '</p>';
        }
      ?>
    </div><!-- .result -->
  </div>
</body>

</html>