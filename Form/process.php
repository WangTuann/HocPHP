<?php 
$userName= $_POST['email'];
$passWord=$_POST['password'];

if ($userName=="ICT"&&$passWord=="12345"){
    echo "Dang nhap thanh cong";
}
else{
    echo "Dang nhap that bai";
}
?>