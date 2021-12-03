<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thao tac voi ngay thang</title>
    <link rel="stylesheet" media="screen" href="style.css">
</head>
<body>
<?php
    $arrDate=range(1,31);
    $arrMonth=range(1,12);

    function createSelectBox($arrData,$name){
        $strDays="";
        if (!empty($arrData)) {
            # code...
            $strDays='<select name="'.$name.'">';
            for ($i=0; $i < count($arrData); $i++) { 
                 # code...
                 $strDays.='<option value="'.$i.'">'.$arrData[$i].'</option>';
            }
            $strDays.='</select>';
        }
        return $strDays;
    }
    $strDays=creataSelectBox($arrDate,"days-select");
    
?>
    <div class="content">
    <h1>Thao tác với ngày tháng</h1>
        <form action="#" method="post" id="mainForm" name="mainForm">
            <div class="row">
                <span>Ngay</span>
                <select name="days-select">
                    <?php
                        echo $strDays;
                    ?>
                </select>
            </div>
            <div class="row">
                <span>Ngay</span>
                <select name="months-select">
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                </select>
            </div>
            <div class="row">
                <span>Ngay</span>
                <select name="years-select">
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                    <option value="0">1</option>
                </select>
            </div>
            <div class="row">
                <input type="submit" value="check date">
            </div>
        </form>
    </div>
</body>
</html>