<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include("config.php");
  if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];

     $conn=mysqli_query($conn, "INSERT INTO user (fname,lname) VALUES ('$fname','$lname')");
  }
  ?>

<form method="POST" action="">

    <label for="fname">firstname</label>
    <input type="text" name="fname" placeholder="firstname" required></br></br>

    <label for="lname">lastname</label>
    <input type="text" name="lname" placeholder="lastname" required></br>
    <button type="submit" name="submit">submit</button>


</body>
</html>