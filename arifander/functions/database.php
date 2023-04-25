<<<<<<< HEAD
$servername     = "localhost";
    $username       = "root";
    $password       = "";
    $dbname         = "Sacode_abed";
=======
<?php
    $servername     = "localhost";
    $username       = "root";
    $password       = "";
    $dbname         = "sacode_arifander";
>>>>>>> 2a1f632fc5324832f6d2d9ffd8f7a2cc99a475df

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
<<<<<<< HEAD
=======

>>>>>>> 2a1f632fc5324832f6d2d9ffd8f7a2cc99a475df
