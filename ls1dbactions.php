<head><link rel="manifest" href="7.webmanifest"></head>
<?php 
var_dump($_POST['VIN']);
$vinny="123";
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
		
	$selectvinform = 'SELECT vin FROM engine WHERE vin = :vin';
	
	$stmt = $pdo->prepare($selectvinform);
	$stmt->execute(['vin'=>$_POST['VIN']]);
	
	$count = $stmt->rowCount();
	$formurlarray = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if(isset($_POST['VIN'])){$stmt->execute(['vin'=>$_POST['VIN']]);}
	$formurl = $stmt->fetchColumn();
	
	$tablenamesarray = ["campositionsensor","camshaft","clutchpilotbearing","coilpack1","coilpack2","coolanttempsensor","crankbearing1","crankbearing2","crankbearing3","crankbearing4","crankbearing5","crankshaft","engineblock","exhaustpushrods1","exhaustpushrods2","exhaustrockers1","exhaustrockers2","exhaustvalves1","exhaustvalves2","fuelrail","head1","head2","intakemanifold","intakepushrods1","intakepushrods2","intakerockers1","intakerockers2","intakevalves1","intakevalves2","knocksensor","maincap1","maincap2","maincap3","maincap4","maincap5","mainbearing1","mainbearing2","mainbearing3","mainbearing4","mainbearing5","mapsensor","oilfillerneck","oillevelsensor","oilpan","oilpressuresensor","oiltempsensor","piston1","piston2","piston3","piston4","piston5","piston6","piston7","piston8","pushrodexhaustbank1","pushrodexhaustbank2","pushrodintakebank1","pushrodintakebank2","steamtube","timingchain","throttlebody","valleycover","valvecover1","valvecover2","windagetray"];
	
	//check the database for an entry in the engines table matching the VIN
	if($count < 1){
		//count is less than one means the engine has been removed
		$echostatement = "<script>$('#content3').html('this vehicle has no engine installed');</script>";
		echo $echostatement;
	}
	else {
	
	//echo "<p id=\"dialogue\">This car is missing the following parts: </p>";
	}
		
$data = array(
	array('selectornamevariable'=>$selectornamevariable,
	'VIN'=>$_POST['VIN'],
	'rowsaffected'=>$count
	)
);
var_dump($_POST['VIN']);
header('Content-Type: application/json');
echo json_encode($data);
die();
	
?>