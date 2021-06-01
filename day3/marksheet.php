<?php
$a=1;
$rollno1=1;
$rollno2=2;
$name1=1;
$name2=2;
$math1=40;
$math2=87;
$english1=35;
$english2=80;
$science1=23;
$science2=88;
$total1=$math1+$english1+$science1;
$total2=$math2+$english2+$science2;
$percentage1=$total1/300*100.0;
$percentage2=$total1/300*100.0;
        
switch ($a){
    case 1;
        Echo "student1 marks<br>";
        Echo "Roll no $rollno1 <br> name $name1 <br> math $math1<br> english $english1 <br> science $science1 <br> Total $total1 <br> presentage $percentage1<br>";
        if ($percentage1<40){
            echo "fail";
        }
        else {
            echo "pass";
        }
        break;
        
    case 2;
        Echo "student2 marks<br>";
        Echo "Roll no $rollno2 <br> name $name2 <br> math $math2<br> english $english2 <br> science $science2 <br> Total $total2 <br> presentage $percentage2<br>";    
        if ($percentage2<40){
            echo "fail";
        }
     else {
            echo "pass";
        }
      
      break;
}
