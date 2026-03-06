<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    // Techori Billing System - Database Connection
    $host = "sql106.infinityfree.com"; //
    $user = "if0_41262552";              //
    $password = "Kingraj2101";           // Your updated password
    $dbname = "if0_41262552_unnati_wires"; //
    
    date_default_timezone_set("Asia/Kolkata");
    
    // Establishing connection
    $conn = new mysqli($host, $user, $password, $dbname);

    // Connection Error Handling
    if ($conn->connect_error) {
        die("Critical Error: Database connection failed. " . $conn->connect_error);
    }

    // Optional: Connection Success Check (for debugging)
    // echo "Connected Successfully"; 
?>