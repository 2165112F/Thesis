<?php

//make connection
mysql_connect('localhost', 'root', '');

//select db
mysql_select_db('finaldatabase') ;

$sql ="SELECT * FROM inventory";

$records=mysql_query($sql);

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>data extractor</title>
</head>
<body>
 <table>
  <tr>
   <th>id</th>
   <th>itemname</th>
   <th>category</th>
   <th>quantity</th>
   <th>unitofmeasurement</th>
  </tr>
 <?php

 while($finaldatabase=mysql_fetch_assoc($records)){

  echo "<tr>";
  echo "<td>".$finaldatabase['id']."</td>";
  echo "<td>".$finaldatabase['itemname']."</td>";
  echo "<td>".$finaldatabase['category']."</td>";
  echo "<td>".$finaldatabase['quantity']."</td>";
  echo "<td>".$finaldatabase['unitofmeasurement']."</td>";
 
  echo "</tr>";


   }//end while  
?>   
 </table>