<?php

$itemname = $_POST['itemname'];
$category = $_POST['category'];
$unitofmeasurement = $_POST['unitofmeasurement'];
if (!empty($itemname) || !empty($category) || !empty($unitofmeasurement)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finaldatabase";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT itemname From inventory Where itemname = ? Limit 1";
     $INSERT = "INSERT Into inventory (itemname, category, unitofmeasurement) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $itemname);
     $stmt->execute();
     $stmt->bind_result($itemname);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $itemname, $category, $unitofmeasurement);
      $stmt->execute();
      header("Location: http://localhost/master/examples/Inventory.php");
exit();
     } else {
      echo "registered itemname";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>