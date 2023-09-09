<?php
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
}

$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$num = mysqli_num_rows($result);
echo $num . " Records found in Database <br>";

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
    echo "<br>";
}

// Close the database connection when you're done with it
mysqli_close($conn);
?>
