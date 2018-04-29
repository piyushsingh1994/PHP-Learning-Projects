<!-- Program To print all prime no between 1 to n-->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>To print all prime no between 1 to n</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter a number<center> &nbsp;&nbsp;
     <input type="number" name="num" />

   <input type="submit" name="submit" /><br>
</form>
<?php
$num=$_POST['num'];
$i=$j=0;

for ($i=1; $i <=$num ; $i++) {
$isprime=0;
for ($j=1; $j <=$i ; $j++) {
if ($i%$j==0) {
  $isprime++;

}

}
if ($isprime==2) {
echo  $i."<br>";
}
}

?>
</body>
</html>
