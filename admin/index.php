<?php 
  include('../functions.php');
  include('inventoryModals.php');

  // if(!isAdmin()) {
  //   $_SESSION['msg'] = "You must log in first";
  //   header('location: ../login.php');
  // }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><?php echo "Today is : " .date("F, d Y"); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $_SESSION['user']['fulname']; ?></a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard <small>Maymay Tailoring Centre</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Inventory
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addStaff">Add Staff</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addCustomer">Add Customer</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addOrder">Add Order</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addEmail">Send Email</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addSMS">Send SMS</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active" style="background-color: crimson;">
                <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard
              </a>
              <a href="staff.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Manage Staff <span class="badge"><?php  $sql="SELECT * FROM users"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></span></a>
              <a href="orders.php" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Manage Orders <span class="badge"><?php  $sql="SELECT * FROM orders"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></span></a>
              <a href="customers.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Manage Customers <span class="badge"><?php  $sql="SELECT * FROM customers"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></span></a>
              <a href="utilities.php" class="list-group-item"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Utilities <span class="badge">2</span></a>
              <a href="invoice.php" class="list-group-item"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Manage Invoice <span class="badge"> <?php  $sql="SELECT * FROM invoice"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></span></a>
              <a href="notifications.php" class="list-group-item"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> Notifications <span class="badge"><?php  $sql="SELECT * FROM notifications"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></span></a>
              <a href="reports.php" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Records & Reports <span class="badge"><?php  $sql="SELECT * FROM record"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></span></a>
              <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Settings <span class="badge"></span></a>

            </div>
            <!--
            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
            -->
          </div>

          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: crimson;color: white;border-color: purple;">
                <h3 class="panel-title">MAYMAY TAILORING CENTRE | Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php  $sql="SELECT * FROM users"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></h2>
                    <h4>Staff</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <?php  $sql="SELECT * FROM orders"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></h2>
                    <h4>Orders</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php  $sql="SELECT * FROM customers"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></h2>
                    <h4>Customers</h4>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></h2>
                    <h4>Utilities</h4>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <?php  $sql="SELECT * FROM invoice"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></h2>
                    <h4>Invoice</h4>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> <?php  $sql="SELECT * FROM notifications"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></h2>
                    <h4>Notifications</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <?php  $sql="SELECT * FROM record"; $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result); echo "$num_rows";?></h2>
                    <h4>Records</h4>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></h2>
                    <h4>Settings</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <!--
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                      </tr>
                      <tr>
                        <td>Jill Smith</td>
                        <td>jillsmith@gmail.com</td>
                        <td>Dec 12, 2016</td>
                      </tr>
                      <tr>
                        <td>Eve Jackson</td>
                        <td>ejackson@yahoo.com</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>Stephanie Landon</td>
                        <td>landon@yahoo.com</td>
                        <td>Dec 14, 2016</td>
                      </tr>
                      <tr>
                        <td>Mike Johnson</td>
                        <td>mjohnson@gmail.com</td>
                        <td>Dec 15, 2016</td>
                      </tr>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>-->
    </section>

    <footer id="footer">
      <p>&copy; <?php echo date('Y');?> <i>Maymay Tailoring Center</i></p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
  </body>
</html>
