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
            echo '<div style="width: 200px; height: 300px; border: 1px solid #0DD;">';
            echo '<h1>Hàm trong PHP</h1>';
            echo '</div>';
        }
        createBox();
        createBox();
    ?>
    </div>
</body>
</html>