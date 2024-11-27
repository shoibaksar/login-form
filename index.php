<?php
$servername = "localhost";
$username = "root";
$password = "shoib000";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo "connection is successful";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['mail'];
    $Password= $_POST['pass'];
    
    
    $sql = "INSERT INTO users (Email , Password) 
            VALUES ('$email', '$Password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>