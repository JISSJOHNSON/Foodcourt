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
				<li class="nav-item active"><a class="nav-link" href="#">Administration Panel<span class="sr-only">(current)</span></a></li>
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
                <a class="nav-link active" href="./adminhome.php">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./orders.php">
                  <span data-feather="shopping-cart"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./reports.php">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Food Management</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="activity"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="./addfood.php">
                  <span data-feather="plus"></span>
                  Add Food
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./editfood.php">
                  <span data-feather="edit"></span>
                  Edit Food
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./deletefood.php">
                  <span data-feather="delete"></span>
                  Delete Food
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./viewfood.php">
                  <span data-feather="list"></span>
                  View Food
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>User Management</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="user"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="./adduser.php">
                  <span data-feather="user-plus"></span>
                  Add User
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./edituser.php">
                  <span data-feather="edit-2"></span>
                  Edit User
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./deleteuser.php">
                  <span data-feather="user-x"></span>
                  Delete User
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./viewuser.php">
                  <span data-feather="list"></span>
                  View User
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- //////////////////////////////////////////////// -->
        

        <?php
          include '../connection.php';
          $count=0;
          $result="select * from todaysfood";
          $res1=mysqli_query($link,$result);
          $count=mysqli_num_rows($res1);
        ?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Today's Food Menu</h2>
          <div class="table-responsive" style="max-width: 1000px; margin-top: -00px;">
              <table class="table table-hover table-condensed table-bordered table-sm">
                
                <thead class="text-center" style="text-align: center;">
                  <tr>
                    <th>FID</th>
                    <th>Name</th>
                    <th>Rate</th>
                    <th>Quantity</th>
                    <th>Available Quantity</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                    while($row = mysqli_fetch_assoc($res1)){
                      ?>
                      <form method="POST" action="./adminhomephp.php">
                    <div class="form-group row">
                      <td class="text-center" style="width: 50px;"><?php echo $row['TFID']; ?></td>
                      <td class="text-center" style="width: 150px; margin-left: 200px;">
                        <input class="form-control text-center" type="text" name="F_Name<?php echo $row['TFID'];?>" value="<?php echo $row['F_Name']; ?>">
                      </td>
                      <td style="width: 150px;">
                        <div class="col-xs-4">
                          <input class="form-control text-center" type="text" name="F_Rate<?php echo $row['TFID'];?>" value="<?php echo $row['F_Rate']; ?>">
                        </div>
                      </td>
                      <td style="width: 150px;">
                        <div class="col-xs-4">
                          <input class="form-control text-center" type="text" name="F_Qty<?php echo $row['TFID'];?>" value="<?php echo $row['F_Qty']; ?>">
                        </div>
                      </td>
                      <td style="width: 150px;">
                        <div class="col-xs-4">
                          <input class="form-control text-center" type="text" name="FA_Qty<?php echo $row['TFID'];?>" value="<?php echo $row['Avail_Qty']; ?>">
                        </div>
                      </td>
                      <td style="width: 200px;">
                        <button class="btn btn-md btn-info" name="E_BTN" value="<?php echo $row['TFID'];?>">Update <span data-feather="edit"></span></button>
                        
                        <button class="btn btn-md btn-danger" name="D_BTN" value="<?php echo $row['TFID'];?>">Delete <span data-feather="trash-2"></span></button>
                        
                      </td>
                      <tr></tr>
                    </div>
                      <?php
                    }
                  ?>
                </tr>
                <tr>
                  <td>
                    <div class="col-xs-4">
                        <input class="form-control text-center" type="text" name="FID">
                      </div>
                  </td>
                  <td>
                    <div class="col-xs-4">
                        <input class="form-control text-center" type="text" name="F_Name">
                      </div>
                  </td>
                  <td>
                    <div class="col-xs-4">
                        <input class="form-control text-center" type="text" name="F_Rate">
                      </div>
                  </td>
                  <td>
                    <div class="col-xs-4">
                        <input class="form-control text-center" type="text" name="F_Qty">
                      </div>
                  </td>
                  <td>
                    <div class="col-xs-4">
                        <input class="form-control text-center" type="text" name="FA_Qty">
                      </div>
                  </td>
                  <td>
                    <button class="btn btn-md btn-success" style="width: 200px;" name="A_BTN" value="addfood">Add <span data-feather="plus"></span></button>
                  </td>
                </tr>
                </form>
                </tbody>
              </table>
          </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Sales Report</h1>
            <!-- <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div> -->
          </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        </main>
      </div>
    </div>

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

    <!-- Graph Data -->
    <?php
      $fdata="SELECT * from foodchart";
      $result2=mysqli_query($link,$fdata);
      // while($res2=mysqli_fetch_assoc($result2)){
      //   $fname=$res2['F_Name'];
      //   $ffname='"'.$fname.'",';
      //   $fsales=$res2['F_Sales'];
      //   $ffsales='"'.$fsales.'",';
      //   echo $ffname;
      // }
    ?>
    <!-- Graphs -->
    <script src="../js/chart.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [<?php while($res2=mysqli_fetch_assoc($result2)){
        $fname=$res2['F_Name'];
        $fsales=$res2['F_Sales'];
        $ffsales=$fsales.',';
        $ffname='"'.$fname.$fsales.'",';
        echo $ffname;
      } ?> ""],
          datasets: [{
            data: [<?php while($res3=mysqli_fetch_assoc($result2)){
        $fname=$res2['F_Name'];
        $fsales=$res2['F_Sales'];
        $ffsales=$fsales.',';
        $ffname='"'.$fname.$fsales.'",';
        echo $ffname;
      } ?>

            <?php echo $ffsales; ?> 125, 150, 140, 75, 175, 145, 185],
            // data: [50, 125, 150, 140, 75, 175, 145, 185],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
</body>
</html>