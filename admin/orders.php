<?php
include "../functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Orders</title>
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
          <a class="navbar-brand" href="#"><?php echo "Today is : " .date("F, d Y"); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <!--<ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <li><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">Posts</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>-->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $_SESSION['user']['fulname']; ?></a></li>
            <li><a href="../login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Order Management <small>Maymay Tailoring Centre</small></h1>
          </div>
          <!-- <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                <li><a href="#">Add Post</a></li>
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div> -->
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
 -->          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: crimson;border-color: purple;color: white;">
                <h3 class="panel-title"><span class="glyphicon glyphicon-shopping-cart"></span> Orders Overview</h3>
              </div>
              <div class="panel-body">
                              <?php include('add_order.php') ?>
                              <?php include('edit_delete_order.php') ?>
                              <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New Order</a>
                              <a href="print_orders.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
                              <p />

                <table class="table table-striped table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Customer</th>
                      <th>Amount</th>
                      <th>Recieved</th>
                      <th>Due Date</th>
                      <th>Tailor</th>
                      <th>Comment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
              include_once('../functions.php');
              $sql = "SELECT * FROM orders";

              //use for MySQLi-OOP
              $query = $db->query($sql);
              while($row = $query->fetch_assoc()){
                echo 
                "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['CustomerName']."</td>
                  <td>".$row['NumberOfCloths']."</td>
                  <td>".$row['RecievedDate']."</td>
                  <td>".$row['DueDate']."</td>
                  <td>".$row['AssignedTailor']."</td>
                  <td>".$row['Comment']."</td>
                  <td>
                    <a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'> <span class='glyphicon glyphicon-edit'></span></a>
                    <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
                  </td>
                </tr>";
                include('edit_delete_order.php');
              }?>
            </table>
              </div>
              </div>

              <!-- Latest Users -->
             
          </div>
        </div>
      </div>
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
    <script>
$(document).ready(function(){
  //inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
      $('.alert').hide();
    })
});
</script>
  </body>
</html>
