<!--Program to find factorial of a number -->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>Factorial of a number</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the number<center> &nbsp;&nbsp;
     <input type="number" name="num" />
   <input type="submit" name="submit" /><br>
</form>
<?php
$num=$_POST['num'];
$fact=1;
for ($i=1; $i <=$num ; $i++) {
$fact=$fact*$i;
}
echo "Factorial of the number is".$fact;
 ?>

</body>
</html>
