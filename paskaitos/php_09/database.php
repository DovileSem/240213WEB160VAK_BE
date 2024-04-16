<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "24_db_design";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: 3307" . $conn->connect_error);
    }

    // echo "Connected successfully";

?>