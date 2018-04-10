<!DOCTYPE html>
<html>
<head>
</head>
<body>


  <form action="" method="POST">
    Enter 1st number
    <input type="text" name="number1" /> <br>
    Enter 2nd number
    <input type="text" name="number2" /> <br>
    <input type="submit" name="submit"  value="submit" />


  </form>
  <?php
  if (isset($_POST['submit']))
  {
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $value=$number1+$number2;


     echo ("the result is:") . $value;
  }
   ?>


</body>

</html>
