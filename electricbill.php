<!--Program to calculate electric bill -->

<!DOCTYPE html>
<html>
<title>Electric bill</title>
<head><center><h1>To calculate Electric bill</h1></center></head>
<body>
  <form action="" method="POST">
   <center>Enter the Electric unit<center> &nbsp;&nbsp;
     <input type="number" name="unit" />
     <input type="submit" name="submit" />
  </form>
  <?php
  $unit=$_POST['unit'];
  if ($unit<=50) {
    $bill=$unit*0.50;
    $tax=$bill*0.2;
    $total=$bill+$tax;
    echo "Your electric bill is Rs".$total;
  }
  elseif ($unit<=150) {
    $bill=25+(($unit-50)*0.75);
    $tax=$bill*0.2;
    $total=$bill+$tax;
    echo "Your electric bill is Rs".$total;
  }
  elseif ($unit<=250) {
    $bill=100+(($unit-150)*1.20);
    $tax=$bill*0.2;
    $total=$bill+$tax;
    echo "Your electric bill is Rs".$total;
  }
  else {
    $bill=220+(($unit-250)*0.50);
    $tax=$bill*0.2;
    $total=$bill+$tax;
    echo "Your electric bill is Rs".$total;
  }

   ?>

</body>

</html>
