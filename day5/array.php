<?php
//associtive array
//key=value
//method 1
$a[0] = 10;
$a['c'] = "computer";
$a['php'] = "web devlopmet";
$a[10] = "ten";
$a[50] = 50.50;
// method 2
$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "webdevlopment",
    10 => "ten",
    50 => 50.50
);

//print vlaue
echo "c for " . $a['c'];

foreach ($a as $key => $value) {
    echo "<br>key is <b>.$key</b> value is <b>.$value</b>";
}
foreach ($a as $value) {
    echo "<br> vlaue is <b>$value</b>";
}
