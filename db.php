
<?php
$servername = "localhost";
$username = "krishnapackers_krishnapack";
$password = "Krishnapackers@123";

try {
    $conn = new PDO("mysql:host=$servername;dbname=krishnapackers_krishna", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>