<!-- Program to print sum of all even numbers between 1 to n -->



<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>Sum of even number</h1></center></head>
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


    for ($i=2; $i <=$num ; $i+=2) {
      $sum+=$i;

    }

     echo $sum;
    ?>
</body>
</html>
