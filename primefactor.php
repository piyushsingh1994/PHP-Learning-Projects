<!--  Program to print prime factor of a number-->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>To print prime factor of a number</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter a number<center> &nbsp;&nbsp;
     <input type="number" name="num" />

   <input type="submit" name="submit" /><br>
</form>
<?php
$num=$_POST['num'];
$i=$j=0;
for ($i=2; $i <=$num/2 ; $i++) {
  if ($num%$i==0) {
  $isprime=1;
  for ($j=1; $j <=$i/2; $i++) {
    if ($i%$j==0) {
      $isprime++;
      break;
    }

  }
  if ($isprime==2) {
    echo $i."<br>";
  }
  }
}

?>
</body>
</html>
