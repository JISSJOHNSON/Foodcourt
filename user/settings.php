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
                <a class="nav-link" href="./cancelorder.php">
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
                <a class="nav-link active" href="./settings">
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
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="text-center" style="width: 400px; margin-top: 100px; margin-left: 300px;">
              <form class="form-signin" action="./settingsphp.php" method="POST">
                <h1 class="h3 mb-3 font-weight-normal">Change Password</h1>
                <div class="mt-5"></div>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
                <label for="inputPassword2" class="sr-only">Confirm Password</label>
                <input type="password" name="pwd2" id="inputPassword2" class="form-control" placeholder="Confirm Password" required>
                <div class="mt-3"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Change</button>
              </form>
            </div>
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