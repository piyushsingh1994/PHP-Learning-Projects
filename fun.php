<?php
function sum($parameter1, $parameter2)
{
  $sum=$parameter1+$parameter2;
  echo "sum is ". $sum;
  return;
}
$numbers= array(5, 7);

sum($numbers[0], $numbers[1]);

 ?>
