<!-- Program to find LCM of two numbers -->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>HCF of two numbers</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter first number<center> &nbsp;&nbsp;
     <input type="number" name="num1" />
     <center>Enter second number<center> &nbsp;&nbsp;
       <input type="number" name="num2" />
   <input type="submit" name="submit" /><br>
</form>
<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$lcm=1;
$max=$num1>$num2 ? $num1:$num2;
$i=$max;
while (1) {
if ($i%$num1==0 && $i%$num2==0) {
$lcm=$i;
break;
}
$i+=$max;
}
echo $lcm;
?>
</body>
</html>
