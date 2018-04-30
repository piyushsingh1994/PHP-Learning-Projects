<!--  Program to print all Amstrong number between 1 to n-->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>To print all Amstrong number between 1 to n</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter a number<center> &nbsp;&nbsp;
     <input type="number" name="end" />

   <input type="submit" name="submit" /><br>
</form>
<?php
$end=$_POST['end'];
for ($i=1; $i <=$end; $i++) {
$sum=0;
$num=$i;
$digits=(int)log10($num)+1;
while ($num>0) {
  $lastdigit=$num/10;
  $sum=$sum+pow($lastdigit,$digits);
  $num=$num/10;
}
if ($i==$sum) {
  echo $i."<br>";
}
}



?>
</body>
</html>
