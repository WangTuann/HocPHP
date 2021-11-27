<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
    <?php
                        
        function createBox () { //định nghĩa hàm
            $value='<div style="width: 200px; height: 300px; border: 1px solid #0DD;">';
            $value.='<h1>Hàm trong PHP</h1>';
            $value.='</div>';

            return $value;
        }

        $result = createBox();
        echo $result;
    
    ?>
    </div>
</body>
</html>