<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ve Tam giac</title>
    <link rel="stylesheet" type="text/css" href="style01.css">
</head>
<body>
<div class="content1">
    <h1>Vẽ tam giác</h1>
    <div class="tam-giac"><a href="?type=1"><img src="picture/01.png" alt=""></a></div>
    <div class="tam-giac"><a href="?type=2"><img src="picture/02.png" alt=""></a></div>
    <div class="tam-giac"><a href="?type=3"><img src="picture/03.png" alt=""></a></div>
    <div class="result">

        <?php 
        $result="";
            if(isset($_GET["type"])){
                    $type=$_GET["type"];
                    switch ($type) {
                        case 1:
                            # code...
                            $i=1;
                            while($i<=6){
                                $result .=str_repeat("*",$i)."<br/>";
                                $i++;
                            }
                            break;
                        case 2:
                            $i=6;
                            while($i>=1){
                                $result .=str_repeat("*",$i)."<br/>";
                                $i--;
                            }
                            break;
                        case 3:
                            $i=1;
                            $n=6;
                            while ($i <= $n) {
                                # code...
                                $space=str_repeat("&nbsp;&nbsp", $n-$i); 
                                $character=str_repeat("*", 2*$i-1);
                                $result.= $space.$character."<br/>";
                                $i++;
                            }
                            break;
                    }
            }
            echo $result;
        ?>
        </div>
</div>
</body>
</html>