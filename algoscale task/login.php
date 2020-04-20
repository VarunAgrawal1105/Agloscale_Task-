<!DOCTYPE html>
<html lang="">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title></title>
				<link rel="stylesheet" href="bootstrap-grid.min" type="text/css">
				
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
	*{
		padding: 0;
		margin: 0;
	}
	
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height:90vh;
  }

	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<!--<h1 style="text-align: center;color:green;text-transform: capitalize;"> Welcome vivek</h1>-->
				
			
<!--							Bootstap start									-->

<!--<h1 class="text-center bg-primary text-capitalize font-weight:bold;">hello world</h1>-->


<!--nav bar using bootstrap-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Algoscale Task</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
<li class="nav-item">
<!-- <a class="nav-link btn btn-outline-success " href="signup.php" >SignUp</a></li>    -->
<li class="nav-item">
<a class="nav-link btn btn-outline-primary " data-toggle="modal" data-target="#myModal" href="login.php" >Login</a></li>   
   </ul>
   
  </div>
</nav>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="validation.php" method="post" class="form-signin" id="admin_login" name="admin_login">
                    <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                    </div>

                    <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
                    </div>

                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit" placeholder="sign in">
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html>	
	 
	

	
