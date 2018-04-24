<!-- Program to find power of a number using for loop -->


<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>EXPONENT OF A NUMBER</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the base<center> &nbsp;&nbsp;
     <input type="number" name="base" /><br>
     <center>Enter the exponent<center> &nbsp;&nbsp;
       <input type="number" name="exponent" />
     <input type="submit" name="submit" />
  </form>
  <?php
  $base=$_POST['base'];
  $exponent=$_POST['exponent'];
  $power=1;

  for ($i = 1; $i <=$exponent; $i++){
    $power=$power*$base;

  }
  echo $power;
   ?>

</body>
</html>
