<?php

  // establish connection to the database
  $host = "localhost";
  $username = "root"; 
  $password = ""; 
  $dbname = "moodmix";

  $conn = new mysqli($host, $username, $password, $dbname);

  // check connection
  if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }

?>