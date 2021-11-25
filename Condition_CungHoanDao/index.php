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

    $day="";
    $month="";
    ?>
<div class="content">
    <h1>Lấy chòm sao</h1>
    <form action="#" method="post" name="main-form">
        <div class="row">
             <span>Ngày sinh</span>
             <input type="text" name="number1"value ="<?php echo $day;?>" />
        </div>
        <div class="row">
             <span>Tháng sinh</span>
             <input type="text" name="caculate"value ="<?php echo $month;?>"/>
        </div>
        </div>
        <div class="row">
             <input type="submit" name="submit" value="Lấy chòm sao" />
        </div>
    </form>
    <div class="result">

    
    </div>
    
</body>
</html>