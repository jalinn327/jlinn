<head><link rel="manifest" href="7.webmanifest"></head>
<?php

//111P1111211111111
	if(!isset($_SESSION["VIN"])){session_start();}
	$tablenamesarray = ["accompressor", "alternator", "battery", "bbumper", "blaxle",  "blcaliper", "blcarrier", "blcoilspring", "blrotor", "blshock", "bltire", "blwheel", "brakemastercylinder", "braxle", "brcaliper", "brcarrier", "brcoilspring", "brrotor", "brshock", "brtire", "brwheel", "crossmember", "differential", "driveline", "engine", "fbumper", "flcaliper", "flcarrier", "flheadlamp", "flhub", "fllowercontrolarm", "flrotor", "flshock", "flspindle", "fltire", "fluppercontrolarm", "flwheel", "frcaliper", "frcarrier", "frheadlamp", "frhub", "frlowercontrolarm", "frontsway", "frrotor", "frshock", "frspindle", "frtire", "fruppercontrolarm", "frwheel", "gastank", "hood", "lcat", "ldoor", "lexhaustmanifold", "lfender", "lkicker", "lmirror", "lquarter", "ltaillight", "lttop", "lwindow", "muffler", "panhardbar", "panhardsupport", "powersteeringpump", "radiator", "rcat", "rdoor", "rearsway", "rexhaustmanifold", "rfender", "rkicker", "rmirror", "rquarter", "rtaillight", "rttop", "rwindow", "spoiler", "steeringrack", "tailpanel", "torquearm", "transmission", "waterpump", "ypipe", "campositionsensor","camshaft","clutchpilotbearing","coilpack1","coilpack2","coolanttempsensor","crankbearing1","crankbearing2","crankbearing3","crankbearing4","crankbearing5","crankshaft","engineblock","exhaustpushrods1","exhaustpushrods2","exhaustrockers1","exhaustrockers2","exhaustvalves1","exhaustvalves2","fuelrail","head1","head2","intakemanifold","intakepushrods1","intakepushrods2","intakerockers1","intakerockers2","intakevalves1","intakevalves2","knocksensor","maincap1","maincap2","maincap3","maincap4","maincap5","mainbearing1","mainbearing2","mainbearing3","mainbearing4","mainbearing5","mapsensor","oilfillerneck","oillevelsensor","oilpan","oilpressuresensor","oiltempsensor","piston1","piston2","piston3","piston4","piston5","piston6","piston7","piston8","pushrodexhaustbank1","pushrodexhaustbank2","pushrodintakebank1","pushrodintakebank2","steamtube","timingchain","throttlebody","valleycover","valvecover1","valvecover2","windagetray"];

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
	$tempcounter = 0;
	
	if(isset($_SESSION["VIN"])){
		$deletesql= 'DELETE FROM vehicle WHERE vin = :vin;';
		$deleteexecutionarray = ['vin'=>$_SESSION["VIN"]];
		$stmt = $pdo->prepare($deletesql);
		$stmt->execute($deleteexecutionarray);
		$count = $stmt->rowCount();
		$tempcounter = $tempcounter + $count;	
		
		
		
		
		
		
	for ($hh=0;$hh<count($tablenamesarray);$hh++)
		{
		$currentselector=$tablenamesarray[$hh];
		$deletesql= 'DELETE FROM '.$currentselector.' WHERE vin = :vin;';
		$deleteexecutionarray = ['vin'=>$_SESSION["VIN"]];
		$stmt = $pdo->prepare($deletesql);
		$stmt->execute($deleteexecutionarray);
		$count = $stmt->rowCount();
		$tempcounter = $tempcounter + $count;
		}
	$_SESSION["tempcounter"]=$tempcounter;

	}
		header("Location: /form/form.php");
	//echo $count." rows were deleted.";
	
	
	//$resultarray=$stmt->fetch();

?>