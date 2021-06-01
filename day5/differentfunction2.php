<?php
$name = " akash";
$subject = " php";
$arr = compact("name","subject");
print_r($arr)
?>
<?php
$arr = array("a" => "akash ", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>
<?php
$a=array("akash c","c ++"," php ","android");
$b=array("akash ","c"," php");
$diff =array_diff ($a, $b);
print_r($diff);
?>
<?php
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
?>
<?php
$arr =array ("i"=> "c","want" =>"c++", "learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>
<?php
$a=array("c","c++");
array_push($a,"java"." php");
print_r($a);
?>
<?php
$a = array("c", "c++", "Java", "PHP", "asp");
array_pop($a ); 
print_r($a);
array_pop($a );
print_r($a);
?>
<?php
$arr =array("i","love","php","language");
$mystring = implode (" ", $arr);
echo $mystring;
?>
