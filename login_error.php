<!DOCTYPE html>
<?php 
include('db_con.php'); 
// include('admin_session_login.php'); 

?>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="image/logo.png" >

    <title>HRMS</title>

    <!-- Bootstrap core CSS -->
    <link href="admin2/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin2/css/bootstrap.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="admin2/css/blog.css" rel="stylesheet">
    <link href="admin_route/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin_route/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Panels and Wells -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="admin_toute/css/sb-admin.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color: #8499bc">

   
	



 	    <div class="blog-masthead ">
      <div class="container">
	  <CENTER>
	  
	 <div class="info_ban"> 
	 <div class="pull-left">

	 <!--<img src="image/13.jpg" height="150px;" width="150p;" style="border-radius:100px;position:relative; top:-10px; right:-100px; ">-->
	 </div> 
	  		<h1><strong style="position:relative; top:5px;">CHANGOI TEA</strong></br><strong style="position:relative; top:20px;">HUMAN RESOURCE MANAGEMENT SYSTEM</strong><h1>
     </div>
	 
	 <!--     <nav class="blog-nav">
		<h1>
	
        <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="About.php">About</a>
          <a class="blog-nav-item" href="contact.php">Contact</a>
<h1>
        </nav> --> 
		</center>
      </div>
    </div>
      <div class="blog-header" style="margin-top:-30px;">

<center>
<strong style="font-size:50px;">
		
	
		</strong>
		<center>

	
        <p class="lead blog-description"></p>
      </div>
<br><br><br>
      <div class="row" style="margin-top:0px; position:relative;">

        <div class="col-sm-12">


		  
		   <div style="border:0px solid #e5e5e5;border-radius:5px;">
      
			  
     		    <div class="col-sm-4"> 
				</div>
				<div class="col-sm-4">
      <div style="padding:10px;" class="alert alert-dismissable alert-success" style="height:230px;">
	  <form action="login.php" method="post">
            <h4>Log in</h4>
            <p><em>Username:</em>  <input class="form-control" name="user" id="focusedInput" type="text" value="" placeholder="username" style="height:40px;" required ></em> </p>
            <p><em>Password:</em>  <input class="form-control" name="pass"id="focusedInput" type="password" value="" placeholder="Password" style="height:40px;" required ></em> </p>
           <button type="submit" class="btn btn-primary  pull-right" name="save" value="Save">Login</button>
			</form> 
		</br>
		</br>
		</br>
		 </div>
		       <div  class="alert alert-dismissable alert-warning">
			   Sorry Your Usename or Password is in correct!
		 </div>
		 </div>
			 
     
		  </div><!-- /.blog-post -->



        </div><!-- /.blog-main -->
		
		

        <div class="col-sm-3 blog-sidebar">

		 
		  
		 
          <div class="sidebar-module">
   
          </div>
			
     
        </div><!-- /.blog-sidebar -->
	
      </div><!-- /.row -->

 	 </br> </br>
 	 </br> </br>
 	    <div class="blog-masthead ">
      <div class="container">
        <nav class="blog-nav">
		
		
   <p><strong style="color:#fff;"><center> &copy;2017 CHEMUKOIMA. All rights reserved.</center><strong></p>

        </nav>
      </div>
    </div>
	
    </div><!-- /.container -->

 

  </body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


	  <script src="admin_route/js/jquery-1.10.2.js"></script>
    <script src="admin_route/js/bootstrap.min.js"></script>
    <script src="admin_route/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Panels and Wells -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="admin_route/js/sb-admin.js"></script>
	<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});	
		window.prettyPrint && prettyPrint()
	});	
	</script>

</html>
