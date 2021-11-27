<?php
       $demo=array("a"=>"A","b"=>"B","c"=>"C");
        echo "<pre>";
        print_r($demo);
        echo"</pre>";
    if (!empty($demo)) {
        # code...
        foreach ($demo as $key => $value) {
            # code...
            echo $key.":".$value ."</br>";
        }
    }

?>