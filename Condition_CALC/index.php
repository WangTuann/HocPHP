<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php

$n1="";
$n2="";
$caculate=""; 
if (isset($_POST["number1"])&&isset($_POST["number2"])&&isset($_POST["caculate"])) {
     $n1= $_POST["number1"];
     $n2= $_POST["number2"];
     $caculate= $_POST["caculate"]; 
     $flag=true;
     if (is_numeric($n1)&& is_numeric($n2)) {         
     switch ($caculate) {
          case '+':
               $result=$n1+$n2; 
               break;
          case '-':
               $result=$n1-$n2;
               break;
          case 'x':
          case '*':
               $result=$n1*$n2;
               break;
          case ':':
          case '/':
               $result=$n1/$n2;
               break;
          case '%':
               $result=$n1%$n2;
               break;
          default:
               $caculate="+";
               $result=$n1+$n2; 
               break;
     }
}
else{
     $result="Khong thuc hien duoc";
     $flag=false;
}    
}              
?>
<div class="content">
    <h1>Mô phỏng máy tính điện tử</h1>
    <form action="#" method="post" name="main-form">
        <div class="row">
             <span>Số thứ nhất</span>
             <input type="text" name="number1"value ="<?php echo $n1;?>" />
        </div>
        <div class="row">
             <span>Phép toán</span>
             <input type="text" name="caculate"value ="<?php echo $caculate;?>"/>
        </div>
        <div class="row">
             <span>Số thứ hai</span>
             <input type="text" name="number2" value ="<?php echo $n2;?>"/>
        </div>
        <div class="row">
             <input type="submit" name="submit" value="Xem kết quả" />
        </div>
    </form>
        <div class="row">
             <p>Kết quả 
                  <?php 
                  if ($flag==true) {
                    echo $n1 . " " . $caculate . " " . $n2 ."=" . $result; 
                  } else
                  {
                       echo $result;
                  }
                  ?> </p>
        </div>
</body>
</html>