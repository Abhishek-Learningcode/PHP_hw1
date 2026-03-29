<?php
// a. single & double quotes
$str1 = 'This is Toyota';
$str2 = "This is Ford";

echo $str1 . "<br>";
echo $str2 . "<br>";

// b. concatenation
$model = "Tesla";
$price = 50000;
echo "Car: " . $model . " Price: " . $price . "<br>";

// c. strpos
$text = "This is a Tesla car";
echo strpos($text, "Tesla") . "<br>";

// d. str_replace
echo str_replace("Tesla", "BMW", $text) . "<br>";

// e. string functions
echo strlen($text) . "<br>";
echo strtolower($text) . "<br>";
echo strtoupper($text) . "<br>";
echo trim("  Hello  ") . "<br>";
echo substr($text, 0, 10) . "<br>";
?>