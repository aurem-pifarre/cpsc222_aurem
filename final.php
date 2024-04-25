<?php
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    		$u = preg_replace('/[^a-z]/', '', $_POST['username']);
    		$p = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['password']); // Updated regex to allow alphanumeric characters

   		 $file = fopen("/var/www/html/auth.db", "r") or die("Unable to open file");

    // Flag to track if credentials are found
    		$credentials_matched = false;

    		while (($line = fgets($file)) !== false) {
        // Split the line by tab character to get username and password
        	list($username_from_file, $password_from_file) = explode("\t", trim($line));

        // Check if username and password match
        		if ($username_from_file === $u && $password_from_file === $p) {
            // Credentials match, set flag to true and break the loop
            		$credentials_matched = true;
            		break;
        		}
    		}
		fclose($file);
    		if ($credentials_matched) {
        // Credentials match, do something like redirect to another page
        		$_SESSION['loggedin']=1;
    		} else {
        		$_SESSION['loggedin']=0;
        
    		}
	} else {
    		$u = '';
    		$p = '';
	}
	
		
        	
	
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1)){ 
?>
	<html>

		<head>
			<title>Final</title>		
		</head>
		
		<body>
			<h1>CPSC222 Final Exam</h1>
		 
			<p><b>Welcome, <?php echo $u.'! '; ?></b><a href="final_logout.php">(Log Out)</a></p>
			<p>Dashboard:</p>
			<ul><li><a href="?page=1">User list</a>
			<li><a href="?page=2">Group list</a>
			<li><a href="?page=3">Syslog></a></ul>
					 
		</body>
		
		<footer>
			<hr>
        	        <?php echo "<p>".date('Y-m-d H:i:sA')."</p>"; ?>

		</footer>

<?php }
	if(($_SERVER['REQUEST_METHOD']!='POST' && !isset($_GET['page']))  || (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 0)){
?>

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

<?php } ?>



	<?php if(isset($_GET['page'])){?>

    	<html>

		<head>

			<h1>CPSC222 Final Exam</h1>
		</head>
		
		<body>
			<p><b>Welcome, <?php echo .'! '; ?><a href="final_logout.php">(Log Out)</a></p></b>
			<p><a href="final.php">< Back to Dashboard</a></p>
		</body>

		<footer>
                        <hr>
                        <?php echo "<p>".date('Y-m-d H:i:sA')."</p>"; ?>
                </footer>

	</html>
    

	<?php	}?>


<?php if(isset($_GET['page']) && $_GET['page'] == 2){

    echo "<h1>Group List</h1>";

    // display user list here

}
?>

<?php if(isset($_GET['page']) && $_GET['page'] == 3){

    echo "<h1>Syslog List</h1>";

    // display user list here

}
?>

