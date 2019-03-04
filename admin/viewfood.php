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
                <a class="nav-link" href="./adminhome.php">
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
                <a class="nav-link active" href="./viewfood.php">
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
        <!-- ////////////////////////////////////////////////////////// -->
        <?php
          include '../connection.php';
          $result="select * from foodmenu";
          $res1=mysqli_query($link,$result);
        ?>
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>View Food Menu</h2>
          <div class="table-responsive" style="max-width: 1000px;">
            <table class="table table-hover table-condensed table-sm">
              <thead>
                <tr>
                  <th>FID</th>
                  <th>Name</th>
                  <th>Rate</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                <?php
                while($row = mysqli_fetch_assoc($res1)){
                  ?><td><?php  
                      echo $row['FID'];
                    ?>
                  </td>
                  <td>
                    <?php  
                      echo $row['Name'];
                    ?>
                  </td>
                  <td>
                    <?php  
                      echo $row['Rate'];
                    ?>
                  </td>
                  <td>
                    <?php  
                      echo $row['Quantity'];
                    ?>
                  </td>
                  <tr></tr>
                  <?php
                }
                ?>
              </tr>
              </tbody>
            </table>
          </div>
        </main>
        <!-- ////////////////////////////////////////////////////////// -->
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