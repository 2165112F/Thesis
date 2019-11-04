<?php
 $category_add = $_POST['category_add'];

 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finaldatabase";

// Create connection
$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM categ WHERE category_add = '$category_add' ";

if (mysqli_query($conn, $sql)) {
      header("Location: http://localhost/master/examples/Inventory.php");
} else {
    echo "Error deleting record: ". $conn->error;
}

mysqli_close($conn);
?>