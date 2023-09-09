<?php 
require '_dbconnect.php';

$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);


?>