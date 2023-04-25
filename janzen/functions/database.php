<?php
    $servername     = "localhost";
    $username       = "root";
    $password       = "";
<<<<<<< HEAD
    $dbname         = "sacode_Janzen";
=======
    $dbname         = "sacode_janzen";
>>>>>>> 11e2fb4f98a7ea537b723f9a6dabf24643b4e30b

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
