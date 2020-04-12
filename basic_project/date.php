<?php

echo date('d . m . Y - l') . "<br>";
echo date('h : i : s  a') . "<br>";
// echo date_default_timezone_SET('Israel/haifa') . "<br>";
$timeStamp = mktime(10, 14, 54, 9, 10, 1978); echo '<br> ';
echo  $timeStamp . '-';
echo date('m / d / Y  h:i:sa', $timeStamp) . "<br>";
$timeStamp2 = strtotime('7:00 pm june 9 1978');
$timeStamp3 = strtotime('next Sunday');
$timeStamp4 = strtotime('+5 Days');
echo $timeStamp2. "<br>";
echo date('m / d / Y  h:i:sa', $timeStamp2). "<br>";
echo date('m / d / Y  h:i:sa', $timeStamp3). "<br>";
echo date('m / d / Y  h:i:sa', $timeStamp4). "<br>";
