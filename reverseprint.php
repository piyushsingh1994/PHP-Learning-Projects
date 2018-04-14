<!-- Program to enter a number and print its reverse -->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>Reverse</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the number<center> &nbsp;&nbsp;
     <input type="number" name="num" />
     <input type="submit" name="submit" />
  </form>
  <?php

    # code...
    $num=$_POST['num'];
    $reverse=0;
     while ($num!=0) {
       # code...
       $reverse=$reverse*10+$num%10;
       $num=(int)($num/10);
     }
        echo "reverse=".$reverse;




   ?>
</body>
</html>
