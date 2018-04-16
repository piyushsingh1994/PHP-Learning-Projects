<!--  Program to check whether a number is palindrome or not -->

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="" method="POST">
 Enter the number: <br>
 <input type="number" name="num" />
 <input type="submit" name="submit" />

 <?php
   $num=$_POST['num'];
   $rev=0;
   $n=$num;
   while ($n!=0) {
     $rev=($rev*10)+($n%10);
     $n=(int)($n/10);
   }
   if ($rev==$num) {
     echo "The number is palindrom";
   }
   else {
     echo"The number is not palindrom";
   }

  ?>
</form>
</body>

</html>
