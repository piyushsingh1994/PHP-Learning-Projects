<!--Program to calculate gross salary of an employee -->

<!DOCTYPE html>
<html>
<title>Gross salary</title>
<head><center><h1>To check Gross salary of an employee</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the salary<center> &nbsp;&nbsp;
     <input type="number" name="salary" />
     <input type="submit" name="submit" />
  </form>
  <?php
  $salary=$_POST['salary'];
  if ($salary<=10000)
  {
    $HRA=$salary*0.2;
    $DA=$salary*0.8;
    $gross=$salary+$HRA+$DA;
    echo  "The gross salary is".$gross;
  }
  elseif ($salary<=20000)
  {
    $HRA=$salary*0.25;
    $DA=$salary*0.90;
    $gross=$salary+$HRA+$DA;
    echo  "The gross salary is".$gross;
  }
  else {
    $HRA=$salary*0.30;
    $DA=$salary*0.95;
    $gross=$salary+$HRA+$DA;
    echo  "The gross salary is".$gross;
  }
   ?>

</body>

</html>
