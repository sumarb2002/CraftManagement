<?php
//indexed array
$b=array(1,2,3,4,5);
echo "<pre>";
print_r($b);
echo "<br/>";

$a=array('aaa','bbb','ccc','ddd');
echo $a[2];
echo "<br/>";
echo "<pre>";

var_dump($a);
echo "<br/>";
echo "<pre>";
print_r($a);


echo "<br/>";
//associative array
$s=array("name"=>"Suma","age"=>21,"place"=>"Kundapura","quali"=>"BCA");
echo "<pre>";
print_r($s);
echo "<br/>";
echo $s['place'];

echo "<br/>";
echo "<br/>";

foreach($s as $key=>$value)
{
    echo $value;
    echo "<br/>";
}

//multidimensional array
echo "<br/>";
$m=array("name"=>"Suma",
$sub=array("maths"=>20,"science"=>40,"social"=>50),
"age"=>21);

echo $sub['maths'];
echo "<br/>";
print_r($m);

echo "<br/>";
$m=array("name"=>"Suma",
"marks"=>array("maths"=>20,"science"=>40,"social"=>50),
"age"=>21);

echo $sub['maths'];
echo "<br/>";
print_r($m);
echo "<br/>";

echo $m['marks']['maths'];

echo "<br/>";
print_r($s);
echo "<br/>";
ksort($s);
print_r($s);

?>