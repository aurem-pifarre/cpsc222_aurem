<?php

	session_start();	
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = preg_replace('/[^a-z]/' ,'' ,$_POST['username']);
    		$password = preg_replace('/[^a-z]/' ,'' ,$_POST['password']);
	} else {
    		$username = '';
    		$password = '';
	}

	if ($username == 'admin' && $password == 'password') {
    		$_SESSION['loggedin'] = true;
	}
	if($_SERVER['REQUEST_METHOD']=='POST' && ($username!='admin'&& $password != 'password')){
		$_SESSION['loggedin'] = false;
		echo "Invalid login...";
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)){  
	
?>
<html>

	<head>
		<title>ch13</title>
	</head>
	<body>
		<h1>Hello, admin</h1>
    		<a href="logout.php">Logout</a>

	</body>
</html>

	<?php }; ?>
	<?php if((isset($_SESSION['loggedin']) && $_SESSION['loggedin']==false) || $_SERVER['REQUEST_METHOD'] == 'GET'){ ?>
	<html>
		<head>
                <title>ch13</title>
	        </head>
	
		<body>
		
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<table>
		
		<tr><td>Username:</td><td><center> <input type="text" name="username" /></td></tr>
		<tr><td>Password:</td><td><center> <input type="text" name="password" /></td></tr>
		
		<tr><td><input type="submit" name="submit" value="Login" /></td></tr>
		
                </form>
	</body>
</html>
	<?php }; ?>
