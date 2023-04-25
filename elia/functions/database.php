<?php
    $servername     = "localhost";
    $username       = "root";
    $password       = "";
    $dbname         = "sacode_elia";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection itlay: " . $conn->connect_error);
    }