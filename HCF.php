<!-- Program to find HCF of two numbers -->

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
$hcf=1;
$min=$num1<$num2 ?$num1:$num2;
for ($i=1; $i <=$min ; $i++) {
    if ($num1%$i==0 && $num2%$i==0) {
    $hcf=$i;
    }
}
 echo $hcf;


 ?>

</body>
</html>
