<?php
    $url="http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";

    //c1

    function getInfo01($url){
        $info=explode("/",$url);
        $result=$info[count($info)-1];
        echo $result; 
    }
    //c2
    function getInfo02($url){

    $arrUrl=parse_url($url);   
    $info=explode("/",$arrUrl['path']);
    $result=$info[count($info)-1];
    echo $result;   
    }

    //c3
    function getInfo03($url){
    $index=strripos($url,"/");
    echo $result=substr($url,$index+1);
    }
    getInfo03($url);
    
?>