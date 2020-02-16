<?php 
  include('functions.php');
  include('add_modal.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="209261.png">

    <title> MAYMAY | WELCOME </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">

    <!-- Custom CSS Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>MAYMAY <img src="209261.png" style="height: 35px;width: 40px;padding-bottom: 8px; "></span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="#" data-toggle="modal" data-target="#aboutModal"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
              <li><a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-camera"></span> Gallery<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">African Styles</a></li>
                  <li><a href="#">Asian Gown</a></li>
                  <li><a href="#">European Wears</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Much More</li>
                  <li><a href="#">Artistary Make Up</a></li>
                  <li><a href="#">Other Coutures</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="" data-toggle="modal" data-target="#addnew">Join Us <span class="glyphicon glyphicon-user"></span></a></li>             
              <li><a href="" data-toggle="modal" data-target="#loginModal">Login <span class="glyphicon glyphicon-lock"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        <!-- BODY CONTENTS -->
        
         <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/elle-ss18-trend-report-2a-1508859946.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="font-family: 'Easy November';color: plum;">MAYMAY TAILORING CENTRE</h1>
              <p style="color: purple;"><i>...we give you that identity that makes you stand out of the crowd.</i></p>
              <p><a class="btn btn-lg btn-danger" href="" data-toggle="modal" data-target="#addnew" role="button">Join Us Today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/fashion-designing-courses3.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color: purple">We sew it with Style</h1>
              <p style="color: plum"><strong>Fashion</strong> is what you buy and <strong>Style</strong> is what we do with it.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/hawaii_islands_waterfall-wide.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->       
        
               
      <!--LOGIN MODAL BEGINS-->
      <style type="text/css">
    body {
    font-family: 'Varela Round', sans-serif;
  }
  .modal-login {    
    color: #636363;
    width: 350px;
  }
  .modal-login .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
  }
  .modal-login .modal-header {
    border-bottom: none;   
        position: relative;
        justify-content: center;
  }
  .modal-login h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -15px;
  }
  .modal-login .form-control:focus {
    border-color: #70c5c0;
  }
  .modal-login .form-control, .modal-login .btn {
    min-height: 40px;
    border-radius: 3px; 
  }
  .modal-login .close {
        position: absolute;
    top: -5px;
    right: -5px;
  } 
  .modal-login .modal-footer {
    background: #ecf0f1;
    border-color: #dee4e7;
    text-align: center;
        justify-content: center;
    margin: 0 -20px -20px;
    border-radius: 5px;
    font-size: 13px;
  }
  .modal-login .modal-footer a {
    color: #999;
  }   
  .modal-login .avatar {
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #60c7c1;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }
  .modal-login .avatar img {
    width: 100%;
  }
  .modal-login.modal-dialog {
    margin-top: 80px;
  }
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
    background: #60c7c1;
    text-decoration: none;
    transition: all 0.4s;
        line-height: normal;
        border: none;
    }
  .modal-login .btn:hover, .modal-login .btn:focus {
    background: #45aba6;
    outline: none;
  }
  .trigger-btn {
    display: inline-block;
    margin: 100px auto;
  }
  .modal-login a {
    color: #fff;
    text-decoration: underline;
  }
  .modal-login a:hover {
    text-decoration: none;
  }
  .modal-login a {
    color: #19aa8d;
    text-decoration: none;
  } 
  .modal-login a:hover {
    text-decoration: underline;
  }
</style>

<!-- Modal HTML -->
<div id="loginModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="209261.png" alt="Avatar">
        </div>        
        <h4 class="modal-title" style="font-size: 22px; ">Maymay Tailoring Centre</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
      
        <form action="" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">   
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="login_btn"><span class="glyphicon glyphicon-lock"> Login</span></button><br />
            <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>     
			<!--LOGIN MODAL ENDS-->
        
            <!--CONTACT US MODAL ONE-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;size: 50px;color: crimson;"><b style="size: 48px;"> New Message</b></h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
        <div><strong style="color: purple;text-align: center;"><i>You can also reach us on: 0803-333-1515</i> <span class="glyphicon glyphicon-phone-alt"></span></strong></div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
    <!--CONTACT US MODAL ONE ENDS-->

    <!--ABOUT MODAL BEGINS-->
		<!-- Modal -->
		<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle" style="size: 42px;color: crimson;text-align: center;">ABOUT MAYMAY TAILORING CENTRE</h5>
		      </div>
		      <div class="modal-body" style="text-align: justify-all;color: purple;">
		        <i><em>MAYMAY TAILROING CENTRE</em> is a women designer from luxury brands accross the world including Gucci, Saint Lauren, Chloe, Valentino etc. It's where the street style is gauranteed to suprise and delight. We take maximalist approach to style; maximizing Neon prints and oversize streetwear with rainbow striped hair and gaint platform</i>
		      </div>
		      <div class="modal-footer" style="color: crimson;"><i>
		      ...we give you that identity that makes you stand out of the crowd.</i>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Close</span></button>
		      </div>
		    </div>
		  </div>
		</div>
	<!--ABOUT MODAL ENDS-->
    <footer id="footer">
      <p>&copy; <?php echo date('Y');?> <i>Maymay Tailoring Center</i></p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
