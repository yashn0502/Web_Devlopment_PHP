<?php

$x = 20;
$y = 40;

$temp = $x;
$x = $y;
$y = $temp;

echo "After Swipe values," . "<br>" . "x :=" . $x . "<br>" . "y :=" . $y;

?>