<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php include('control.inc.php'); ?>
<?php include('user-modal.php'); ?>

<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
   <title>Dashboard</title>


      <!-- Script -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/material-dashboard.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <!-- Script -->

  <!-- Angular Search -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<!-- Angular Search -->

  </head>
 


   
</head>

<!-- Body -->
    <body ng-controller="memberdata">
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
                      <a href="report-view.php">
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
        </div>
     </nav>

<!-- Dashboard Widget -->
<div class="content">
      <div class="container-fluid">
<div class="row">
  <div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Users</h4>
        </div>
      <div class="card-content table-responsive">
        <a id="add" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span> New Users </a>
          <div class="col-md-4 col-md-offset-8">
          <input type="text" ng-model="search" class="form-control" placeholder="Search">
        </div>
      </div>
      <div class="table-responsive">
    <table class="table table-bordered table-striped" style="margin-top:10px;">
      <tr>
                        <th ng-click="sort('id')">Name
                          <span class="pull-right">
                            <i class="fa fa-sort gray" ng-show="sortKey!='id'"></i>
                            <i class="fa fa-sort" ng-show="sortKey=='id'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                          </span>
                        </th>
                        <th ng-click="sort('email')">Username
                          <span class="pull-right">
                            <i class="fa fa-sort gray" ng-show="sortKey!='email'"></i>
                            <i class="fa fa-sort" ng-show="sortKey=='email'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                          </span>
                        </th>
                        <th ng-click="sort('username')">Email
                          <span class="pull-right">
                            <i class="fa fa-sort gray" ng-show="sortKey!='username'"></i>
                            <i class="fa fa-sort" ng-show="sortKey=='username'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                          </span>
                        </th>
                        </th>
                         <th ng-click="sort('level')">Role
                          <span class="pull-right">
                            <i class="fa fa-sort gray" ng-show="sortKey!='level'"></i>
                            <i class="fa fa-sort" ng-show="sortKey=='level'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                          </span>
                        </th>
                         <th>Action
                        </th>
                    </tr>
                </thead>
            <tbody>
          <tr ng-repeat="member in members|orderBy:sortKey:reverse|filter:search">
            <td>{{ member.name }}</td>
            <td>{{ member.username }}</td>
            <td>{{ member.email }}</td>
            <td>{{ member.level }}</td>
           
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
   <center><span id="alerttext"></span></center>

   <!-- Dashboard Widget -->


  <!--   Core JS Files   -->
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/material.min.js" type="text/javascript"></script>

  

  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>

  
  <!-- Material Dashboard javascript methods -->
  <script src="assets/js/material-dashboard.js"></script>

 <!-- User Script Add,Delete,Update -->
<script src="js/user.js"></script>

<!-- User Script Search Database -->
<script src="js/angular.js"></script>

</body>
</html>
      </div>