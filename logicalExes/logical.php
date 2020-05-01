<?php

// Factorial of any number

$num = 4;
$fact = 1;
for ($i = 1 ;$i <= $num; ++$i) {
    $fact *= $i;
}
 //echo "factorial fo {$num} is {$fact}";

// Fibonacci series
function Fibonacci($number)
{
    if ($number == 0) {
        return 0;
    } elseif ($number == 1) {
        return 1;
    } else {
        return (Fibonacci($number - 1)+Fibonacci($number - 2));
    }
}

$number = 10;
for ($counter = 0; $counter<$number;$counter++) {
    // echo Fibonacci($counter).' ,';
}

//  Reverse of any number

function numRverse($num)
{
    $rev=0;
           
    while ($num>=1) {
        $re=$num%10;

        $rev=$rev*10+$re;
        
        $num=$num/10;
    }
    echo $rev;
}

//numRverse(1325);

// number is Prime or not.

function isPrime($num)
{
    $check=0;
    for ($i=2;$i<=($num/2);$i++) {
        if ($num%$i==0) {
            $check++;
            if ($check==1) {
                return $num . ' is not prime';
            }
        }
    }
    return $num . ' is prime';
}

//echo isPrime(7);
// LEAP year or not

function isLeapYear($year)
{
    if ($year%4==0) {
        echo $year. ' is a leap year';
    } else {
        echo $year. ' is not a leap year';
    }
}


//isLeapYear(2008);

$rows=10;
   for ($i=$rows;$i>=1;--$i) {
       for ($space=0;$space<$rows-$i;++$space) {
           echo "  ";
       }
       for ($j=$i;$j<=2*$i-1;++$j) {
           echo "* ";
       }
       for ($j=0;$j<$i-1;++$j) {
           echo "* ";
       }
       echo "\n";
   }
