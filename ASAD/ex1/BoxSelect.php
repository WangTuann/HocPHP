<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        .content {
            width: 500px;
            padding: 10px;
            border: 2px solid #ddd;
            height: auto;
            margin: 10px auto;
        }
    </style>
</head>

<body>
    <div class="content">
        <?php
        $group = array("1" => "Admin", "2" => "Manager", "3" => "Member", "4" => "Guest");
        $city=array("ld"=>"Lam Dong","hcm"=>"Ho Chi Minh","dn"=>"Da Nang");

        function creataSelectBox($name, $attribute,$array,$keySelect){
            $xhtml = "";
            if (!empty($array)) {
                # code...
                $xhtml .= '<select name="group" id="group" style="width:200px">';
                foreach ($array as $key => $value) {
                    # code...
                    if ($key == $keySelect) {
                        # code...
                        $xhtml .= '<option value="' . $key . '"selected="selected">' . $value . '</option>';
                    } else {
                        # code...
                        $xhtml .= '<option value="' . $key . '">' . $value . '</option>';
    
                    }
                }
                $xhtml .= '</select>';
            }
            return $xhtml;
        }


        $groupSelect=creataSelectBox("group","width: 200px",$group,4);

        $groupSelect_1=creataSelectBox("group","width: 400px",$city,1);
        echo $groupSelect;
        echo $groupSelect_1;
        ?>
        </select>
    </div>
</body>

</html>