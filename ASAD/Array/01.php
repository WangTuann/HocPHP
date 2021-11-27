<?php

$courses=array();
$courses[]="PHP";
$courses[]="Zend";
$courses[]="abc";

$lenght =count($courses);
echo $lenght; 


//tra mang rong
if (!empty($course)) {
    # code...
    echo "khong la mang rong";
}
else {
    # code...
    echo "mangrong ";
}

echo "<pre>";
print_r($courses);
echo "</pre>";


?>