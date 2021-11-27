<?php
 $student =array(
    "SV001"=> array("name"=>"Tun",
                    "sex"=> 1,
                    "score"=>array(4,5,6)),
    "SV002"=> array("name"=>"sen",
                    "sex"=> 0,
                    "score"=>array(5,5,8)),
    "SV003"=> array("name"=>"uyen",
                    "sex"=> 0,
                    "score"=>array(8,5,9))
 );

 echo"<pre>";
 print_r($student);
 echo "</pre>";

 $new_array=array_keys($student);
 echo"<pre>";
 print_r($new_array);
 echo "</pre>";
?>