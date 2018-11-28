<?php



/*	$deletesql= 'DELETE FROM '.$selectornamevariable.' WHERE vin = :vin;';
	$deleteexecutionarray = ['vin'=>$VINvariable];
	$stmt = $pdo->prepare($deletesql);
	$stmt->execute($deleteexecutionarray);
	$count = $stmt->rowCount();
	*/
		
	session_start();
	
	$useremail=$_POST['useremail'];
	$encrypted_password= password_hash($_POST["passinput"], PASSWORD_BCRYPT);
	if(isset($_POST["firstname"])){$firstname=$_POST["firstname"];}
	if(isset($_POST["lastname"])){$lastname=$_POST["lastname"];}

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

		
	$selectsqlwhereuseremailequalsuseremail = "SELECT useremail, password FROM user WHERE useremail = :useremail;";
	$stmt= $pdo->prepare($selectsqlwhereuseremailequalsuseremail);
	$selectexecutionarray=['useremail'=>$useremail];
	$stmt->execute($selectexecutionarray);
	$count = $stmt->rowCount();	
	$resultarray=$stmt->fetch();
	var_dump($resultarray["password"]);

	echo $count;
	if ($count==1){
		//echo $encrypted_password;
		echo "<br>";
		echo $resultarray["password"];
		if(password_verify($_POST["passinput"],$resultarray["password"])){
			header("Location: /form/form.php");
		}
		else {
			if(isset($_POST["passinput"])){header("Location: /form/l.php?annotation=invalid password");}
			else {header("Location: /form/signup.php?annotation=sorry, email is already taken");}
		} 
	}
	if ($count==0){
		
		if((isset($useremail))&&(isset($encrypted_password))&&(isset($firstname))&&(isset($lastname))){
			$insertuserintodatabase = "INSERT INTO user (useremail, password, firstname, lastname) VALUES (:useremail, :password, :firstname, :lastname);";
			$insertexecutionarray=['useremail'=>$useremail,'password'=>$encrypted_password,'firstname'=>$firstname,'lastname'=>$lastname];
			//var_dump($insertexecutionarray);
			$stmt=$pdo->prepare($insertuserintodatabase);
			$stmt->execute($insertexecutionarray);
			$stmt= $pdo->prepare($selectsqlwhereuseremailequalsuseremail);
			$selectexecutionarray=['useremail'=>$useremail];
			$stmt->execute($selectexecutionarray);
			$count = $stmt->rowCount();	
			echo "Success";
			$_SESSION["firstname"]=$firstname;
			header("Location: /form/form.php");
		}
		else {
			header("Location: /form/login.php?annotation=invalid credentials - please try again");
		}
	}
	
	$_SESSION["useremail"]=$useremail;
	$_SESSION["encrypted_password"]=$encrypted_password;
	if(isset($_SESSION["firstname"])){$_SESSION["firstname"]=$firstname;}
	if(isset($_SESSION["lastname"])){$_SESSION["lastname"]=$lastname;}
	
	//	header('Location: /form/login.php');
	
	
	
		/*
		
	$sql = 'SELECT * FROM user WHERE user = :useremail AND password = :pass';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user'=>$useremail, 'pass'=>$_POST['passinput']]);
	$user = $stmt->fetch();
	
	if (($user['user']=$_POST['userinput']) && ($user['pass']=$_POST['passinput'])) {
		require ('form.php');
		echo ('Welcome ');
	}
	//header('Location: /form/form.php');
	//header('Location: /form/login.php');
	if (isset($POST['pdo'])) {echo ("it's set");}
	$_GET['annotation']="invalid login credentials. please try again.";
}
echo (' '.$_SESSION['userinput'].'!');*/

?>