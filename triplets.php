<?php

$handle = fopen ("php://stdin", "r");

fscanf($handle,"%d %d %d",$a0,$a1,$a2);

fscanf($handle,"%d %d %d",$b0,$b1,$b2);
$a=0;
$b=0;
if($a0>$b0){
$a += 1;
}elseif($b0>$a0){
$b += 1;
}
if($a1>$b1){
$a += 1;
}elseif($b1>$a1){
$b += 1;
}
if($a2>$b2){
$a += 1;
}elseif($b2>$a2){
$b += 1;
}
echo $a, " ", $b;
?>
