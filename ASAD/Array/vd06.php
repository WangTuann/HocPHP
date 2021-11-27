<?php 
    $demo=array("a"=>"A","b"=>"B","c"=>"C","d"=>"D","e"=>"E");

    /* echo "<pre>";
        print_r($demo);
        echo"</pre>";

    $last= array_pop($demo);
    echo $last;

    $first=array_shift($demo);
    echo $first; */


    function removeItem(&$array,$type="first",$total=2){
        $result=array();

        if (!empty($array)) {
            # code...
            if ($type=="first") {
                # code...
                for ($i=1; $i <= $total; $i++) { 
                    # code...
                    $result[]= array_shift($array);
                }
            }else if ($type =="last") {
                # code...
                for ($i=1; $i <= $total; $i++) { 
                    # code...
                    $result[]= array_pop($array);
                }
            }
        }
        return $result;
    }


    echo "<pre>";
    print_r($demo);
    echo"</pre>";

    $arrItem=removeItem($demo,"last",2);
    echo "<pre>";
    print_r($arrItem);
    echo"</pre>";

 
?>