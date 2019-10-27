<?php
$return_order = $_POST['return_order'];
$quantity_order = $_POST['quantity_order'];
$remarks = $_POST['remarks'];
if (!empty($return_order) || !empty($quantity_order) || !empty($remarks)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finaldatabase";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT return_order From returns Where return_order = ? Limit 1";
     $INSERT = "INSERT Into returns (return_order, quantity_order, remarks) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $return_order);
     $stmt->execute();
     $stmt->bind_result($return_order);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $return_order, $quantity_order, $remarks);
      $stmt->execute();
      header("Location: http://localhost/master/examples/returns.php");
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