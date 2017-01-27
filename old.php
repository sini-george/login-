<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script type="text/avascript"src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
</head>
<body>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="text-center">Login</h1>
</div>
<div id="frm" class="modal-body">
<form action="#" method="POST" class="col-md-12 center-block">
<?php include 'login.php';	?>
<div class="form-group">
<p>
<label>Username:</label>
<input type="text" class="form-control input-lg" name="username" placeholder="username"/>
</p>
</div>
<!--
<div class="form-group">
<p>
<label>Email:</label>
<input type="email" class="form-control input-lg" name="email" placeholder="email"/>
</p>
</div>



<div class="form-group">
<p>
<label>Password again:</label>
<input type="password" class="form-control input-lg" name="password2" placeholder="password again"/>
</p>
</div>
-->
<div class="form-group">
<p>
<label>Password:</label>
<input type="password" class="form-control input-lg" name="password" placeholder="password"/>
</p>
</div>

<div class="form-group"><p>
<input type="submit" class="btn btn-block btn-lg btn-primary"  value="LOGIN" name="submit" id="button">
<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Forgot Password</a></span>
</p></div>
</form>
<div class="modal-footer">
<div class="col-md-12">
<button class="btn">Cancel</button>
</div>
</div>
</div>
</div>
</div>
</body>
</html>