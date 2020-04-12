<?php

$loggedin = true;

if ($loggedin) {
    echo 'logged';
} else {
    echo 'not logged';
}

echo '<hr>';

echo ($loggedin)? 'logged' : 'not logged';

echo '<hr>';
$age = 20;
$score = 9;

echo "score : " . ($score > 10 ? ($age > 10 ? 'a' : 'b'):
($age > 5 ? 'g' : h)); 

echo '<hr>';
?>


