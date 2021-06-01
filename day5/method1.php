<?php
// numarical array
// method 1 basic
    $a[0]=10;
    $a[1]=20;
    $a[2]=30;
    $a[3]="c";
    $a[4]="c++";
    $a[5]=10.05;
    
   
  //method 2// dynamic method
   
   $a[]=10;
   $a[]=20;
   $a[]=20.50;
   $a[]="c";
   $a[]="c++";
   
   
   //method 3
   $a=array(10,20,30,"c","c++",10.50);
   // print value
   echo $a[3];
   
   for($i=0;$i<count($a);$i++){
       echo $a[$i];
       echo "<br>";
   }
   $i=0;
   while($i<count($a))
   {
       echo $a[$i];
       $i++;
   }
   // inbuild function
   echo"<pre>";
   print_r($a);
   echo"<pre>";
   var_dump($a);
   echo"<pre>";
   

   