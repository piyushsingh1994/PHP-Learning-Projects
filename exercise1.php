
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form method="POST" >
    <h2>Please input your Name:</h2><br><br>
    <input type="text"  name="name" >
    <input type="submit" name="Submit Name" value="Submit Name">
    </form>
    <?php
    $name=$_POST["name"];
    echo "<h3> Hello $name </h3>";
     ?>

</body>
</html>
