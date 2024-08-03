<?php

class suma{

    public $name;
    function __construct($a)
    {
        $name=$a;
        echo "hello ".$name;
    }

    function __destruct()
    {
        echo "object destroyed";
    }

    function add($a,$b)
    {   
        $c=$a+$b;
        echo "the added value is ".$c;
    }
}

$s=new suma("suma");
echo "<br/>";
$s->add(10,20);

?>