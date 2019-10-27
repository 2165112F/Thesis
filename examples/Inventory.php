<!DOCTYPE html>
<html>
<head>
<title>Inventory</title>
</head>
<body>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Cancel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class = "active">
            <a href="./Inventory.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Inventory</p>
            </a>
          </li>
          <li>
            <a href="./menu.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Menu</p>
            </a>
          </li>
          <li>
            <a href="./spoilage.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Spoilage</p>
            </a>
          </li>
          <li>
            <a href="./returns.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Returns</p>
            </a>
          </li>
          <li>
            <a href="./cancels.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Cancel</p>
            </a>
          </li>
          </li>
          <li>
            <a href="./notifications.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Paper Dashboard 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Inventory</h4>
              </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button class="btn btn-primary btn-round" onclick="openForm()">Add New Item</button>
                <button class="btn btn-primary btn-round" onclick="openForms()">Add Quantity</button>
                <div class="addNewItem" id="myForm" >
                      <form action="insert.php" method="POST">
                             <table>
                              <h3>Add Item<h3>
                <tr>
                  <td> 
                    Item Name :
                  </td>
                  <td>
                    <input type ="text" name="itemname" required>
                  </td> 
                </tr>
                <tr>
                  <td>
                    Category :
                  </td>
                  <td>
                    <select name = "category">
                    <option value = "" disabled selected>Select Category</option>
                    <option value="wet goods" required>Wet Goods
                    <option value="dry goods" required>Dry Goods
                    <option value="groceries" required>Groceries
                    <option value="can goods" required>Can Goods
                  </select>
                  <a href = ""><img src = "../image/plus.png" style = "width: 22px"></a>
                  <a href=""><img src="../image/garbage.png" style="width: 22px"></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    Unit of Measurement :
                  </td>
                  <td>
                  <?php
                    $mysqli = NEW MYSQLi('localhost', 'root','','finaldatabase');
                    $resultSet = $mysqli->query("SELECT uom_add from adduom"); 
                    ?>
                    <select name = "unitofmeasurement" onmousedown = "if(this.options.length>5){this.size=5;}" onchange = "this.blur()" onblur="this.size=0;">
                    <option value = "" disabled selected>Select UOM</option>
                    <?php
                    while($rows = $resultSet->fetch_assoc()){
                      $uom_add = $rows['uom_add'];
                      echo "<option value ='$uom_add'>$uom_add</option>";
                    } 
                    ?>
                  </select>
                  <a href = "adduom.php"><img src = "../image/plus.png" style = "width: 22px"></a>
                  <a href="deleteuom.php"><img src="../image/garbage.png" style="width: 22px"></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    
          <button type="submit" class="btn btn-primary btn-round">Save</button>
                    <a href = "Inventory.php"><button type="button" class="btn btn-primary btn-round">Cancel</button></a>
                            </td>
          </tr>
              </form>
      </table>
                </div>
                  <script>
                    function openForm() {
                      document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                      document.getElementById("myForm").style.display = "none";
                    }
                  </script>
              </div>
               <div class="addNewItem" id="myForms" >
                  <form action="addq.php" method="POST">
                             <table>
                              <tr>
                              <td>
                  Category:
                  </td>
                  <td>
                    <select name = "category">
                    <option value="wet goods" required>Wet Goods
                    <option value="dry goods" required>Dry Goods
                    <option value="groceries" required>Groceries
                    <option value="can goods" required>Can Goods
                  </select>
                  </td>
                </tr>
                <tr>
                  <td> 
                    Item Name:
                  </td>
                  <td>
                    <input type ="text" name="itemname" required>
                  </td> 
                </tr>
                <tr>
                  <td>
                    Quantity:
                  </td>
                  <td>
                    <input type = "text" name="quantity" required>
                  </td>
                </tr>
                  <td>
                    
                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                    <a href = "Inventory.php"><button type="button" class="btn btn-primary btn-round">Cancel</button></a>
                            </td>
          </tr>
              </form>
      </table>

                  <script>
                    function openForms() {
                      document.getElementById("myForms").style.display = "block";
                    }

                    function closeForms() {
                      document.getElementById("myForms").style.display = "none";
                    }
                  </script>
              </div>
            </div>
                <label>Show per page</label>
                 <div class="col-md-3 px-1">
                <select id = "page" class="form-control" placeholder="Number" value=" ">
                  <option value = "1">5</option>
                  <option value = "2">10</option>
                  <option value = "3">15</option>
                  <option value = "4">20</option>
                </select>
              </div>
              <div class="card-body">
            <div class="table-responsive">
                  <table class="table">

               
                      <th>
                        ID
                      </th>
                      <th>
                        Item Name
                      </th>
                      <th>
                        Category
                      </th>
                      <th>
                        Quantity
                      </th>
                      <th>
                        Unit of Measurement
                      </th>
                            <tbody>
    <?php
    $conn = mysqli_connect("localhost","root", "", "finaldatabase");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, itemname, category, quantity, unitofmeasurement from inventory";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["itemname"] . "</td><td>"
    . $row["category"]. "</td><td>" . $row["quantity"]. "</td><td>" . $row["unitofmeasurement"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
  </tbody>
                  </table>
            </div>
              </div>
            </div>
          </div>
          
      </div>
    </div>
  </div>
  

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>

              

                
</body>

</html>
