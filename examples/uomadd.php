<?php
$uom_add = $_POST['uom_add'];
if (!empty($uom_add)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finaldatabase";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT uom_add From adduom Where uom_add = ? Limit 1";
     $INSERT = "INSERT Into adduom (uom_add) values(?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $uom_add);
     $stmt->execute();
     $stmt->bind_result($uom_add);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("s", $uom_add);
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