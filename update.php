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

    <title> MAYMAY | UPDATE RECORD </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">

    <!--MY CSS FILE-->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
              <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
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
              <li class="active"><a href="update.php">Update <span class="glyphicon glyphicon-edit"></span></a></li>
              <li><a href="registration.php">Register <span class="glyphicon glyphicon-save"></span></a></li>
              <li><a href="login.php">Login <span class="glyphicon glyphicon-lock"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


               
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
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"><span class="glyphicon glyphicon-lock"> Login</span></button><br />
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
        



        <!--APPLICATION MODAL-->
        <div class="container">
  <div class="row">
    
                        <!-- Signin & Signup 
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target=".login-register-form">
                           Login - Registration Modal
                        </a>

                        <!-- Login / Register Modal-->
                        <div class="modal fade login-register-form" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                                            <li><a data-toggle="tab" href="#registration-form"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div id="login-form" class="tab-pane fade in active">
                                                <form action="/">
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pwd">Password:</label>
                                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Login</button>
                                                </form>
                                            </div>
                                            <div id="registration-form" class="tab-pane fade">
                                                <form action="/">
                                                    <div class="form-group">
                                                        <label for="name">Your Name:</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newemail">Email:</label>
                                                        <input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="newemail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newpwd">Password:</label>
                                                        <input type="password" class="form-control" id="newpwd" placeholder="New password" name="newpwd">
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Register</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
<!--                                    <div class="modal-footer">-->
<!--                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
  </div>
</div><!--APPLICATION MODAL /-->
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
