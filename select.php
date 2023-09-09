<?php
// Connection to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_us";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection was successful <br>"; 

    $sql = "SELECT * FROM `contacts`";
    $stmt = mysqli_query($conn, $sql);

    echo mysqli_num_rows($stmt);
    
    // Close the database connection when you're done with it
    mysqli_close($conn);
}
?>
