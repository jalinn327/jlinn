
<?php 
$selectornamevariable = $_POST["selectornamevariable"];
if(isset($_POST['VIN'])){$VINvariable = $_POST['VIN'];}
else {$VINvariable = $_SESSION['VIN'];}

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
	
	$deletesql= 'DELETE FROM '.$selectornamevariable.' WHERE vin = :vin;';
	$deleteexecutionarray = ['vin'=>$VINvariable];
	$stmt = $pdo->prepare($deletesql);
	$stmt->execute($deleteexecutionarray);
	$count = $stmt->rowCount();
	//$resultarray=$stmt->fetch();

	
	
	
$data = array(
	array('selectornamevariable'=>$selectornamevariable,
	'VIN'=>$VINvariable,
	'rowsaffected'=>$count
	)
);
header('Content-Type: application/json');
echo json_encode($data);
die();
?>