<?php

use Fundamentals\ArrayTest;

require("../src/Fundamentals/ArrayTest.php");

$array = new ArrayTest();

$satu = $array->singleRequest("");
foreach ($satu as $v) {
    echo $v . "<br>";
}


echo "<hr>";
$dua = $array->multipleRequest([]);
foreach ($dua as $v) {
    echo "Name : " . $v['name'] . "<br>";
    echo "Email : " . $v['email'] . "<br><br>";
}
