<!-- Program to check whether a number is prime or not-->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>To check whether a number is prime or not</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter a number<center> &nbsp;&nbsp;
     <input type="number" name="num" />

   <input type="submit" name="submit" /><br>
</form>
<?php
$num=$_POST['num'];
$isprime=1;
for ($i=2; $i <=$num/2 ; $i++) {
  if ($num%$i==0) {
    $isprime=0;
    break;
  }
}
if ($isprime==1) {
  echo "The number is prime";
}
else {
  echo "the number is composite";
}

?>
</body>
</html>
