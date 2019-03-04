<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Foodcourt</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/adminhome.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<!-- /////////////////// Navbar ///////////////////////////////////// -->
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Foodcourt</a>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto " style="margin-left: 50px;">
        <li class="nav-item active"><a class="nav-link" href="#">Welcome To Foodcourt<span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </nav>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../logout.php">Sign out</a>
        </li>
      </ul>
    </nav>
<!-- ////////////////////////////////////////////////////////////// -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar fixed">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <h2 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Dashboard</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="command"></span>
              </a>
              </h2>
              <li class="nav-item">
                <a class="nav-link" href="./userhome.php">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./viewfood.php">
                  <span data-feather="layers"></span>
                  View Food
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./orderfood.php">
                  <span data-feather="shopping-cart"></span>
                  Order Food
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./vieworder.php">
                  <span data-feather="list"></span>
                  View Order
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./cancelorder.php">
                  <span data-feather="x-square"></span>
                  Cancel Order
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Profile Management</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="sliders"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="./viewprofile">
                  <span data-feather="user"></span>
                  View Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./settings">
                  <span data-feather="settings"></span>
                  Settings
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./deleteaccount.php">
                  <span data-feather="trash-2"></span>
                  Delete Account
                </a>
              </li>
            </ul>
          </div>
        </nav>
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
         <?php
          include '../connection.php';

          $user_name = $_SESSION["username"];
          $selectquery="SELECT * from users WHERE users.Username='$user_name'";
          $result=mysqli_query($link,$selectquery);
          $res=mysqli_fetch_assoc($result);
          
          $user_id=$res['UID'];

          $selectquery2="SELECT * FROM orders WHERE orders.UID=$user_id";
          $result2=mysqli_query($link,$selectquery2);

        ?>
       
<!-- ///////////////////////////////////////////////////////////////////////////// -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>My Food Orders</h2>
          <div class="table-responsive" style="max-width: 1000px;">
          <?php
          while($row = mysqli_fetch_assoc($result2)){
          ?>
          <!-- /////////////////////////////////////////////////// -->
          <?php
            $O_id=$row['Order_Id'];
            $status=$row['Order_Status'];
            $selectquery3="SELECT * FROM foodorders WHERE foodorders.Order_Id=$O_id";
            $result4=mysqli_query($link,$selectquery3);
          ?>
          <!-- /////////////////////////////////////////////////// -->
            <b>Order ID : <?php echo $row['Order_Id']; ?></b>&emsp; | &emsp; 
            <b>Status : <?php echo $status ?></b>
            <table class="table table-hover table-condensed table-sm">
              <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Food</th>
                  <th>Rate</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $g_total=0;
                  $q_total=0;
                  while($row3 = mysqli_fetch_assoc($result4)){
                ?>
                <!-- //////////////////////////////////////////////////// -->
                <?php
                  $F_id=$row3['FID'];
                  $selectquery4="SELECT * FROM todaysfood WHERE todaysfood.TFID='$F_id'";
                  $result5=mysqli_query($link,$selectquery4);
                  $row4 = mysqli_fetch_assoc($result5);
                  $F_name=$row4['F_Name'];
                  $F_rate=$row4['F_Rate'];

                ?>
                <!-- //////////////////////////////////////////////////// -->
                <tr>
                  <td><?php echo $row3['Foodorder_Id']; ?></td>
                  <td><?php echo $F_name; ?></td>
                  <td><?php echo $F_rate; ?></td>
                  <td>
                    <?php
                     echo $row3['Qty'];
                     $q_total=$q_total + $row3['Qty'];
                    ?>
                    </td>
                  <td>
                    <?php
                      $total = $F_rate * $row3['Qty'];
                     echo $total;
                     $g_total = $g_total + $total;
                    ?>
                    
                  </td>
                </tr>
                <?php
                  }
                ?>
                <tr>
                  <td></td>
                  <td>Grand Total</td>
                  <td></td>
                  <td><?php echo $q_total; ?></td>
                  <td><?php echo $g_total; ?></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td style="width: 200px;">
                      
                        <?php
                          if($status == "Active"){
                            ?>
                            <form action="./cancelorderphp.php" method="POST">
                             <button class="btn btn-md btn-danger" name="C_BTN" value="<?php echo $row['Order_Id'];?>">Cancel <span data-feather="x-square"></span></button>
                            </form>
                          <?php
                          }
                          else{
                            ?>
                            <button class="btn btn-md btn-default disabled" name="C_BTN" value="<?php echo $row['Order_Id'];?>">Cancel <span data-feather="x-square"></span></button>
                          <?php
                          }
                        ?>
                    </td>
                </tr>
              </tbody>
            </table>
            =======================================================================================================<br>
          <?php
            }
          ?>
          </div>
<!-- ///////////////////////////////////////////////////////////////////////////// -->
        </main>

<!-- //////////////////////////////////////////////////////////////////////////////// -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>

    <!-- Icons -->
    <script src="../js/icons.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>