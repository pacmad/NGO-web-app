<?php
    $servername = "localhost";
    $username = "flocand_patejios";
    $password = "+Xb61+f=G4YI";
    $db_name = "flocand_zaa";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>