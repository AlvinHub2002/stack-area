<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "inventory _management _system";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if(!$conn) {
        die("Failed". mysqli_connect_error());
    }
    
    echo "Connection Success!!";
?>