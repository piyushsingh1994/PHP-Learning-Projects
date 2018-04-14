<!-- Program to enter a number and print its reverse -->

<!DOCTYPE html>
<html>
<title></title>
<head><center><h1>Table</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the number<center> &nbsp;&nbsp;
     <input type="number" name="num" />
     <input type="submit" name="submit" />
  </form>
  <?php

    # code...
    $num=$_POST['num'];

    for ($i=1; $i <=10 ; $i++) {
      $mul=$num*$i;

    echo "<br>$num*$i=$mul";
    }




   ?>
</body>
</html>
