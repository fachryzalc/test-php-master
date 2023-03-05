<?php
require("../src/Fundamentals/RegexTest.php");

use Fundamentals\RegexTest;

$regex = new RegexTest();

echo "08123456789 : ";
echo $regex->run("08123456789") . "<br>";

echo "+628123456789 : ";
echo $regex->run("+628123456789") . "<br>";

echo "628123456789 : ";
echo $regex->run("628123456789") . "<br>";

echo "(+62) 8123456789 : ";
echo $regex->run("(+62) 8123456789") . "<br>";
