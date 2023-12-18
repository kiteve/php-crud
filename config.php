<?php

$hostname='localhost';
$username='root';
$password='';
$database='maua';

  $conn=mysqli_connect($hostname,$username,$password,$database);
    
      if(!$conn)
         {
           die("connection failed:").$mysqli_connect_error();
           }

            // else {
               // echo "connection is successful";
            // }

