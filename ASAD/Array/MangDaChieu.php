<?php
$student =array(
    "SV001"=> array("name"=>"Tun",
                    "sex"=> 1,
                    "score"=>array(4,5,6)),
    "SV002"=> array("name"=>"sen",
                    "sex"=> 0,
                    "score"=>array(5,5,8)),
    "SV003"=> array("name"=>"uyen",
                    "sex"=> 0,
                    "score"=>array(8,5,9))

);

echo "<pre>";
print_r($student);
echo"</pre>";
/* //ten cua sv002:
echo $student["SV002"]["name"]."<br/>";

//diem mon thu2 cuar SV003

echo $student["SV003"]["score"][1]."<br/>";

//doi ten SV003
echo $student["SV003"]["name"]="Tunne";
echo "<pre>";
print_r($student);
echo"</pre>";

//thay doi diem SV003
echo $student["SV003"]["score"][1]=10;
echo "<pre>";
print_r($student);
echo"</pre>"; */


//xuat ra ten + tong diem cua Tun
if (!empty($student)) {
foreach ($student as $key => $value) {
    # code...
    $name=$value["name"];
    $gt=($value["sex"]==1)?"Boy":"girl";
    $score=$value["score"];
    $sum=0;
    for ($i=0; $i < count($score); $i++) { 
        # code...
        $sum+=$score[$i];
        }
        echo "name:".$name ."-"."gioi tinh:".$gt."-"."diem:".$sum . "<br/>";
}
}



?>