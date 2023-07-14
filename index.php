<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
	</head>
<body>
	<style>
		body{
			background-color:blue;
		}
		</style>

	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Login only 3 Attempts</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<form method="POST" action="">
				<div class="form-group">
					<label>email</label>
					<input type="email" name="user" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" name="pass" class="form-control" required="required" />
				</div>
				
				<?php include 'login.php'?>
				
				<center><button class="btn btn-primary" name="login" <?php if(ISSET($_SESSION['msg'])){ echo $_SESSION['msg'];}?>><span class="glyphicon glyphicon-log-in"></span> Login</button> <a class="btn btn-success" href="reset.php"><span class="glyphicon glyphicon-refresh"></span> Reset</a></center>
				<br>
				<p class="link">Don't have an account?  <a href="signup.html">Sign up </a> here</a>
                    </p>
			</form>
		</div>
	</div>
</body>	
</html>