<?php

$courses=array("a","b","c");


/* if (!empty($courses)){
    # code..
for ($i=0; $i < count($courses); $i++) { 
    # code...
    echo $courses[$i]."</br>";
}
}
 */
echo "<pre>";
print_r($courses);
echo "</pre>";

if (!empty($courses)) {
    # code...
foreach ($courses as $key => $value) {
    # code...
    echo $value."</br>";
}
}



?>