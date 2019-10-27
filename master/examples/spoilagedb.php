<?php
$spoilage_date = $_POST['spoilage_date'];
$category = $_POST['category'];
if (!empty($spoilage_date) || !empty($category)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finaldatabase";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT spoilage_date From spoilage Where spoilage_date = ? Limit 1";
     $INSERT = "INSERT Into spoilage (spoilage_date, category) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $spoilage_date);
     $stmt->execute();
     $stmt->bind_result($spoilage_date);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $spoilage_date, $category);
      $stmt->execute();
      header("Location: http://localhost/master/examples/spoilage.php");
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