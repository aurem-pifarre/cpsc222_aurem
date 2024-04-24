<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $u = preg_replace('/[^a-z]/' ,'' ,$_POST['username']);
                $p = preg_replace('/[^a-z]/' ,'' ,$_POST['password']);
        } else {
                $u = '';
                $p = '';
        }

	function authenticate($u,$p){
		$auth_data = file("auth.db", FILE_IGNORE_NEW_LINES);
		foreach ($auth_data as $line){
			list($user, $pass) = explode("\t", $line);
			if($u == $user && password_verify($p, $pass)){
				return true;
			}
		}
		return false;
	}	
	
	if(authenticate($u, $p)){
			$_SESSION['username'] = $u;
			$_SESSION['username'] = $p;
	} else{
		$error = "Invalid username or password";
	}
	
	if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_SESSION['username'])){
?>
	<html>

		<head>
			<title>Final</title>		
		</head>
		
		<body>
			<h1>CPSC222 Final Exam</h1>
		 
			<p><b>Welcome, <?php echo $_SESSION['username']; ?></b><a href="final_logout.php">(Log Out)</a></p>
			<p>Dashboard:</p>
			<a href="?page=1">User list</a>
			<a href="?page=2">Group list</a>
			<a href="?page=3">Syslog></a>
					 
		</body>
		
		<footer>
			<hr>
        	        <?php echo "<p>".date('Y-m-d H:i:sA')."</p>"; ?>

		</footer>

<?php }?>


<html>
	<head>
		<title>Final</title>
	</head>
	<body>
		<h1>CPSC222 Final Exam</h1>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table>
                <tr><td>Username:</td><td><center> <input type="text" name="username"></td></tr>
                <tr><td>Password:</td><td><center> <input type="text" name="password"></td></tr>
		<tr><td><input type="submit" name="submit" value="Login" /></td>
		</form>
		</table>
		
	</body>
	<footer>
		<hr>
		<?php echo "<p>".date('Y-m-d H:i:sA')."</p>"; ?>
	</footer>

</html>

