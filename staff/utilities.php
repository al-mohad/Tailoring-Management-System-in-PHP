<?php
include '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Utilities</title>
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
            <h1><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard <small>Maymay Tailoring Centre</small></h1>
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

            <!-- <div class="well">
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
            </div> -->
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: crimson;border-color: purple;color: white;">
                <h3 class="panel-title" style="text-align: left;"><strong>Calender & Calculator <i style="text-align: right;"><?php echo "Today is : " .date("F, d Y"); ?></i></strong></h3>
              </div>
              <div class="panel-body">
                      <?php
                      $month= date ("m");
                      $year=date("Y");
                      $day=date("d");
                      $endDate=date("t",mktime(0,0,0,$month,$day,$year));
                      echo '<font face="arial" size="2">';
                      echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
                      //echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
                      echo '</td></tr></table>';
                      echo '<table align="right" border="0" cellpadding=1 cellspacing=1 style="border:1px solid #CCCCCC">
                      <tr bgcolor="#EFEFEF">
                      <td align=center><font color=red> Monday </font></td>
                      <td align=center> Sunday </td>
                      <td align=center> Tuesday </td>
                      <td align=center> Wednesday </td>
                      <td align=center> Thursday </td>
                      <td align=center> Friday </td>
                      <td align=center> Saturday </td>
                      </tr>';
                      $s=date ("w", mktime (0,0,0,$month,1,$year));
                      for ($ds=1;$ds<=$s;$ds++) {
                      echo "<td style=\"font-family:arial;color:#B3D9FF\"  bgcolor=\"#FFFFFF\">
                      </td>";}
                      for ($d=1;$d<=$endDate;$d++) {
                      if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
                      $fontColor="#000000";
                      if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
                      echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
                      if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
                      echo '</table>'; 
                      //echo "<p style=\"text-align:center;color:#555;\">Maymay Tailoring Centre | Calendar</p>";?>


<?php

ini_set('display_errors',0);

if( isset( $_REQUEST['calculate'] ))

{

$operator=$_REQUEST['operator'];

if($operator=="+")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1+$add2;

}

if($operator=="-")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1-$add2;

}

if($operator=="*")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res =$add1*$add2;

}

if($operator=="/")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1/$add2;

}

if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter values.\");</script>";

}

else if($_REQUEST['fvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";

}

else if($_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";

}

}

?>

<form>

<table style="border:groove #00FF99;text-align: center;">

            <tr>

                <td >Amount</td>

                <td colspan="1">

               

                    <input name="fvalue" type="text" style="color:red"/ placeholder="Input First Amount"></td>

            <tr>

                <td >Operator</td>

                <td>

                    <select name="operator" style="width: 63px">

<option>+</option>

<option>-</option>

<option>*</option>

<option>/</option>

</select></td>

               </tr>

            <tr>

                <td >Amount</td>

                <td class="auto-style5">

                    <input name="lvalue" type="text"  style="color:red" placeholder="Input Second Amount" /></td>

               

            </tr>

            <tr>

                <td></td>

                <td><input type="submit" name="calculate" value="Calculate" /></td>

               

            </tr>

            <tr>

                <td >Output = </td>

                <td style="color:purple;"><?php echo $res;?></td>

               

            </tr>

       </table>

 </form>
          </div>
        </div>
              </div>
              </div>

              <!-- Latest Users 
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title" style="text-align: center;font-weight: bolder;align-content: center;">Calculator</h3>
                </div>
                <div class="panel-body">
                      <?php

ini_set('display_errors',0);

if( isset( $_REQUEST['calculate'] ))

{

$operator=$_REQUEST['operator'];

if($operator=="+")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1+$add2;

}

if($operator=="-")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1-$add2;

}

if($operator=="*")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res =$add1*$add2;

}

if($operator=="/")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1/$add2;

}

if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter values.\");</script>";

}

else if($_REQUEST['fvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";

}

else if($_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";

}

}

?>

<form>

<table style="border:groove #00FF99;text-align: center;">

            <tr>

                <td >Enter First Number</td>

                <td colspan="1"><br />

               

                    <input name="fvalue" type="text" style="color:red"/></td>

            <tr>

                <td >Select Operator</td>

                <td>

                    <select name="operator" style="width: 63px"><br />

<option>+</option>

<option>-</option>

<option>*</option>

<option>/</option>

</select></td>

               </tr>

            <tr>

                <td >Enter Second Number</td>

                <td class="auto-style5"><br />

                    <input name="lvalue" type="text"  style="color:red"/></td>

               

            </tr>

            <tr>

                <td></td><br />

                <td><input type="submit" name="calculate" value="Calculate" /></td>

               

            </tr>

            <tr><br />

                <td >Output = </td>

                <td style="color:purple;"><?php echo $res;?></td>

               

            </tr>

       </table>

 </form>
          </div>
        </div>
      </div>
    </section>
-->
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
  </body>
</html>
