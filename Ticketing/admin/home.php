<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php include('control.inc.php'); ?>

<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Dashboard</title>

   <!-- Script -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/material-dashboard.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  </head>
    <!-- Script -->

<!-- Body -->
    <body>
  <div class="wrapper">

      <div class="sidebar" data-color="blue">
      <div class="logo">
        <a href="home.php" class="simple-text">

             Ticket Support
        </a>
      </div>

        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li class="">
                      <a href="home.php">
                        <i class="fa fa-home"></i>
                          <p>Home</p>
                      </a>
                  </li>
                   <li>
                    <a href="">
                          <i class="fa fa-ticket"></i>
                          <p>Tickets</p>
                      </a>
                  </li>
                   <li>
                    <a href="product-view.php">
                          <i class="fa fa-product-hunt"></i>
                          <p>Product</p>
                      </a>
                  </li>
           <li>
                      <a href="department-view.php">
                          <i class="fa fa-th-list"></i>
                          <p>Department</p>
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="fa fa-area-chart"></i>
                          <p>Reports</p>
                      </a>
                  </li>
                  <li>
                      <a href="user-view.php">
                          <i class="fa fa-users"></i>
                          <p>Users</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

       <div class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"><b>Support Ticket System</b></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Welcome, <?php echo  $_SESSION['name'] ?>
                  <i class="fa fa-user"></i>
                  
                </a>
                <ul class="dropdown-menu">
                  <li class="divider"></li>
                  <li><a href="">Configuration</a></li>
                  <li class="divider"></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
            <!--
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group  is-empty">
                <input type="text" class="form-control" placeholder="Search">
                <span class="material-input"></span>
              </div>
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="fa fa-search"></i><div class="ripple-container"></div>
              </button>
            </form>
            -->
            </div>
      </nav>

<!-- Dashboard Widget -->
 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="card-content">
                  <p class="category">Total Tickets</p>
                  <h3 class="title"></h3>
                </div>
                              
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                  <i class="fa fa-envelope"></i>
                                </div>
                                <div class="card-content">
                  <p class="category">New Tickets</p>
                  <h3 class="title"></h3>
                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                     <i class="fa fa-unlock"></i>
                                </div>
                                <div class="card-content">
                  <p class="category">Open Tickets</p>
                  <h3 class="title"></h3>
                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                     <i class="fa fa-reply"></i>
                                </div>
                                <div class="card-content">
                  <p class="category">Un-Solved Tickets</p>
                  <h3 class="title"></h3>
                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                     <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="card-content">
                  <p class="category">Solved Tickets</p>
                  <h3 class="title"></h3>
                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                  <i class="fa fa-lock"></i>
                                </div>
                               
                                <div class="card-content">
                  <p class="category">Closed Tickets</p>
                  <h3 class="title"></h3>
                </div>
                 <div class="card-footer">
                                    <div class="stats">
                                       
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
<!-- Dashboard Widget -->


                

</body></html>