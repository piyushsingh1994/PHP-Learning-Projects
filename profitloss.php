<!-- Program to calculate profit or loss -->

<!DOCTYPE html>
<html>
<title>Profit Loss</title>
<head><center><h1>To check a number whether it is odd or even</h1></center></head>
<body>
  <form action="" method="POST">
   Enter cp
     <input type="number" name="cp" /><br>
     Enter sp
      <input type="number" name="sp" /> <br>
     <input type="submit" name="submit" />
  </form>
  <?php
  $cp=$_POST['cp'];
    $sp=$_POST['sp'];
     if ($cp>$sp)
     {
       $loss=$cp-$sp;
       echo "Loss=".$loss;
     }
     elseif ($sp>$cp)
     {
       $profit=$sp-$cp;
       echo "Profit=".$profit;
     }


   ?>

</body>

</html>
