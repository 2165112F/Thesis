<?php
$category_add = $_POST['category_add'];

if (!empty($category_add)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finaldatabase";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT category_add From categ Where category_add = ? Limit 1";
     $INSERT = "INSERT Into categ (category_add) values(?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $category_add);
     $stmt->execute();
     $stmt->bind_result($category_add);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("s", $category_add);
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