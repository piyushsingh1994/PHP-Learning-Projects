<!--Program to check whether a number is odd or even -->

<!DOCTYPE html>
<html>
<title>Odd Even</title>
<head><center><h1>To check a number whether it is odd or even</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter a number<center> &nbsp;&nbsp;
     <input type="number" name="number" />
     <input type="submit" name="submit" />
  </form>
  <?php
  $number=$_POST['number'];
  if ($number%2==0)
  {
    echo  "is even";
  }
  else {
    echo "is odd";
  }
   ?>

</body>

</html>
