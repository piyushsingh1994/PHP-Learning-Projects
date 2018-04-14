<!--  Program to print sum of all natural numbers between 1 to n -->



<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>Sum of natural number</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the number<center> &nbsp;&nbsp;
     <input type="number" name="num" />
     <input type="submit" name="submit" />
  </form>
  <?php

    # code...
    $num=$_POST['num'];
    $sum=0;

    for ($i=1; $i <=$num ; $i++) {
      $sum+=$i;


    }

     echo $sum;


   ?>
</body>
</html>
