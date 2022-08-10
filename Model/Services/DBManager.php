<?php
function connectToDB()
{
    $conn = new mysqli("localhost", "root", "","ads");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
