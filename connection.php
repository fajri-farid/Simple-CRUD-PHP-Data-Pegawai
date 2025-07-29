<?php
    
try {
    $connection = mysqli_connect("localhost", "root", "", "kepegawaian");
    // echo "Connected successfully";
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}