<!-- Program to check whether a number is perfect number or not -->
<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>To check whether a number is perfect number or not</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter a number<center> &nbsp;&nbsp;
     <input type="number" name="num" />

   <input type="submit" name="submit" /><br>
</form>
<?php
$num=$_POST['num'];
$sum=0;
for ($i=1; $i <=$num/2; $i++) {
  if ($num%$i==0) {
  $sum+=$i;
  }
}
if ($sum==$num) {
  echo ".$num is a perfect number";
}
else {
    echo "$num is not a perfect number";
}


?>
</body>
</html>
