
<?php include 'header.php'?>
<?php include('server.php') ?>



<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="discount.css">
</head>
<body>

<div class="language bg-dark" >
English  Finnish
</div>
<div class="header data">
  	<h2>Login</h2>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input class="text-box" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="text-box" type="password" name="password">
  	</div>
  	<div class="input-group" style="float: right">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		
  	</p>
  </form>
</div>
</body>
</html>

<?php include 'footer.php' ?>