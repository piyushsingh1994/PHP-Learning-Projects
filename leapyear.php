<!-- Program to check whether a year is leap or not-->

<!DOCTYPE html>
<html>
<title>Odd Even</title>
<head><center><h1>To check a year whether it is leap or not</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter a year<center> &nbsp;&nbsp;
     <input type="number" name="year" />
     <input type="submit" name="submit" />
  </form>
  <?php
  $year=$_POST['year'];
  if ((($year%4==0)&&($year%100!=0)) ||($year%400==0))
   {
    echo "is a leap year";
   }
  else
   {

  echo "is not a leap year";
  }
   ?>

</body>

</html>
