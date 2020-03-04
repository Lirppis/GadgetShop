
<?php include 'header.php'?>
<?php include 'server.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="discount.css">
  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
</head>
<body>



<div id="google_translate_element">


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

</div>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
<html>

<?php include 'footer.php' ?>