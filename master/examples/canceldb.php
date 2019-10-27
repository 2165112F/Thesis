<?php
$cancel_order = $_POST['cancel_order'];
$status = $_POST['status'];
if (!empty($cancel_order) || !empty($status)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finaldatabase";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT cancel_order From cancel Where cancel_order = ? Limit 1";
     $INSERT = "INSERT Into cancel (cancel_order, status) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $cancel_order);
     $stmt->execute();
     $stmt->bind_result($cancel_order);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $cancel_order, $status);
      $stmt->execute();
      header("Location: http://localhost/master/examples/cancels.php");
exit();
     } else {
      echo "Item Cancelled";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "Fill all blanks";
 die();
}
?>