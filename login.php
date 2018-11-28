
<?php
		//new PDO
	$host = '127.0.0.1';
	$db = 'carapp';
	$user = 'root';
	$pass = '';
	$charset = 'utf8';
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$opt = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		];
	$pdo = new PDO($dsn, $user, $pass, $opt);
		// end new PDO


session_start();
?>  

<form action="view.php" method="post">
<table>
<tr><td>email:</td>
<td><input type="text" name="useremail"></td></tr>
<tr><td>password:</td><td><input type="password" name="passinput" id="passinput"><br></td>
<tr><td><input type="submit" value="Sign In"></td></tr>
</form>
</table>
<?php if (isset($_GET['annotation'])) {echo $_GET['annotation'];}; ?>
<br><br><a href="signup.php">Sign Up</a><br>
</body></html>