<?php
    $url="http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";

function getInfo03($url){
    $index=strripos($url,"/");
    $result=substr($url,$index+1);
    return $result;
    }
    $info= getInfo03($url);


    $result=array();

    $arrInfo=explode("_",$info);
    //id
    $result["id"]=$arrInfo["0"];
    
    //type
    $arrType=explode(".",$arrInfo[3]);
    $result["type"]=$arrType[1];

    //name,audio,singer
    $arrInfo[3]=$arrType[0];
 
    function format($str){
        $result = $str[0];
       for ($i = 1; $i < strlen($str); $i++){
            if(ctype_upper($str[$i])==true){
                $result .= " " . $str[$i];
            }else{
                $result .= $str[$i];
            }
        }
        return $result;
    }
    $result["singer"]=format($arrInfo[3]);
    $result["album"]=format($arrInfo[2]);
    $result["name"]=format($arrInfo[1]);

    echo "<pre>";
    print_r($result);
    echo"</pre>";

    
?>