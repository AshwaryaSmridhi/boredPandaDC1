<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "boredPanda";
$insert_id = 108;
$insert_name = 'Samara';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (id, name, email, phone)
    VALUES ('$insert_id', '$insert_name', 'john@example.com', '87897890')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>