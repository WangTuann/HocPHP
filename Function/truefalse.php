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
                        
        function checkNumber($value){
                if ($value % 2==0) 
                {
                    return true;    
                        # code...
                }
                else {
                    # code...
                    return false;
                }
        }

        $result=checkNumber(23);
        if ($result==true) {
            # code...
            echo "so chan";
        }
        else {
            echo "so le";
        }
        ?>
    </div>
</body>
</html>