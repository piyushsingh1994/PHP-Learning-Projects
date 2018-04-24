<!--  Program to find all factors of a number -->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>Factor of a number</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the number<center> &nbsp;&nbsp;
     <input type="number" name="num" />
   <input type="submit" name="submit" /><br>
</form>
<?php
$num=$_POST['num'];
for ($i=1; $i <=$num ; $i++) {
  
  if ($num % $i==0) {
   echo ",".$i;

  }

}
 ?>
</body>
</html>
