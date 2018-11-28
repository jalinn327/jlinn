<!DOCTYPE html>
<head><link rel='stylesheet' href='mystyle.css'><title>actions</title>
</head>
<body>


<?php
	
if(!isset($_SESSION["VIN"])){echo("<a href=\"deletecar.php\">delete</a>");}
if(!isset($_SESSION["VIN"])){}
	$output="";
	if(isset($_POST['VIN'])){$_POST['VIN']=strtoupper($_POST['VIN']);}
	$VINArray=str_split($_POST['VIN']);
	$cookie_name = "VIN";
	if(isset($_POST["VIN"])){$cookie_value = $_POST["VIN"];}
	if(isset($_POST["VIN"])){setcookie($cookie_name, $cookie_value, time() + (86400 * 30));}
	//var_dump($VINArray);
	if (isset($_POST['RPOs'])) {
		$inputRPOS=$_POST['RPOs'];
		$RPOsArray=explode(",",$inputRPOS,6);
	}
	
	include "form.php";
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
		
	$selectvinform = 'SELECT formurl FROM vehicle WHERE vin = :vin';
	
	$stmt = $pdo->prepare($selectvinform);
	if(isset($_POST['VIN'])){$stmt->execute(['vin'=>$_POST['VIN']]);}
	
	$countvehicle = $stmt->rowCount();
	$formurlarray = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if(isset($_POST['VIN'])){$stmt->execute(['vin'=>$_POST['VIN']]);}
	$formurl = $stmt->fetchColumn();
	
	
	
	if($countvehicle < 1){
		if(isset($_POST['VIN'])){
			$str1= "INSERT INTO vehicle (vin";
			$str2="";
			if(isset($_POST['miles'])){$str2= ", miles";}
			$str3= ") VALUES (:vin";
			$str4="";
			if(isset($_POST['miles'])){$str4= ", :miles";}
			$str5= ");";
			$strfinal = $str1.$str2.$str3.$str4.$str5;
			//echo $strfinal;
			$stmt = $pdo->prepare($strfinal);
			$insertexecutionarrayvin=['vin'=>$_POST['VIN']];
			if(isset($_POST['miles'])){
				$insertexecutionarrayvin=['vin'=>$_POST['VIN'],'miles'=>$_POST['miles']];
			}
			
		//var_dump($insertexecutionarrayvin);
		$stmt = $pdo->prepare($strfinal);
		$stmt->execute($insertexecutionarrayvin);	
		
	}

	}
		
	if($countvehicle>=1) {
		if(isset($_POST['VIN'])){
		$str1= "INSERT INTO vehicle (vin";
		if(isset($_POST['miles'])){$str2= ", miles";}
		$str3= ") VALUES (:vin";
		if(isset($_POST['miles'])){$str4= ", :miles";}
		$str5= ");";
		$strfinal = $str1.$str2.$str3.$str4.$str5;
		//echo $strfinal;
		$stmt = $pdo->prepare($strfinal);
		$insertexecutionarrayvin=['vin'=>$_POST['VIN']];
		if(isset($_POST['miles'])){
			$insertexecutionarrayvin=['vin'=>$_POST['VIN'],'miles'=>$_POST['miles']];
			}
		//var_dump($insertexecutionarrayvin);
		$stmt = $pdo->prepare($strfinal);
		//$stmt->execute($insertexecutionarrayvin);	
		//echo $strfinal."<br>";
		if(isset($_POST['miles'])) {
			$strupdatemiles= "UPDATE vehicle SET miles = :miles WHERE vin = :vin;";
			$stmt = $pdo->prepare($strupdatemiles);
			$updatemilesarray=['miles'=>$_POST['miles'],'vin'=>$_POST['VIN']];		
			}
		}
	}
	

	
	
	
	
	
	
	
	/*if($vehiclecount=1) {//do we update the form for current mileage or nah since it's a salvage cars database?}*/
	
	
	if(isset($_POST['VIN'])){echo ("Current Vehicle: <div id='VINdiv'>".$_POST['VIN']."</div><br>");}
	if(isset($_POST["miles"])){
		
		$insertmiles="INSERT INTO vehicle (vin, fitment) VALUES (:vin, :fitment);";
		
		echo ("".$_POST["miles"]);
		}?>
<div id="content"><div id="content3"></div><div id="content2">
<?php 
	//include the form from db if entry in database matches vin
	if($countvehicle>=1){
		$formurlleadingchar= substr($formurlarray["formurl"],0,1);
		if($formurlleadingchar="/"){
			$formurlarray["formurl"]=substr($formurlarray["formurl"],1);}
		include $formurlarray["formurl"];
		$poundstring = "#";
			switch ($VINArray[4]) {
			case "P":
				echo ("<script>
				var somestring = \"#camaro/camaroform.php\"
				var stateObj = { foo: \"bar\"};
				history.replaceState(stateObj, \"page 2\", somestring);
				</script>");
	
			break;
			case "S":
				echo ("<script>
				var stateObj = { foo: \"bar\"};
				history.replaceState(stateObj, \"page 2\", \"#firebird/firebirdform2.php\");
				</script>");			
			break;
			case "V":
				echo ("<script>
				var stateObj = { foo: \"bar\"};
				history.replaceState(stateObj, \"page 2\", \"#firebird/firebirdform2.php\");
				</script>");			
			break;
			default:
				echo ("<script>
				var stateObj = { foo: \"bar\"};
				history.replaceState(stateObj, \"page 2\", \"#camaro/camaroform.php\");
				</script>");			
			break;
		};	
	}
	
	else {
	//include the car form the old fashioned way

	switch ($VINArray[4]) {
		case "P":
			$somethingtoinclude = "#camaro/camaroform.php";
			include "camaro/camaroform.php";
			echo ("<script>
			var somestring = \"#camaro/camaroform.php\"
			var stateObj = { foo: \"bar\"};
			history.replaceState(stateObj, \"page 2\", somestring);
			</script>");

		break;
		case "S":
		$somethingtoinclude = "firebird/firebirdform2.php";
			include "firebird/firebirdform2.php";
			echo ("<script>
			var stateObj = { foo: \"bar\"};
			history.replaceState(stateObj, \"page 2\", \"#firebird/firebirdform2.php\");
			</script>");			
		break;
		case "V":
		$somethingtoinclude = "firebird/firebirdform2.php";
			include "firebird/firebirdform2.php";
			echo ("<script>
			var stateObj = { foo: \"bar\"};
			history.replaceState(stateObj, \"page 2\", \"#firebird/firebirdform2.php\");
			</script>");			
		break;
		default:
		$somethingtoinclude = "camaro/camaroform.php";
			include "camaro/camaroform.php";
			echo ("<script>
			var stateObj = { foo: \"bar\"};
			history.replaceState(stateObj, \"page 2\", \"#camaro/camaroform.php\");
			</script>");			
		break;

	};	
	
	
	
	switch ($VINArray[4]) {
		case "V":
		//car is a trans am
		$model = "trans am";
		$bodytype="fbody";
		if($VINArray[3]="F") {
			if(($VINArray[9]==1)||($VINArray[9]==2)||($VINArray[9]=="W")||($VINArray[9]=="X")||($VINArray[9]=="Y")){$bodytype="fourthgenfbody";}
			if(($VINArray[9]=="P")||($VINArray[9]=="R")||($VINArray[9]=="S")||($VINArray[9]=="T")||($VINArray[9]=="V")) {$bodytype="thirdgenfbody";}
		}
		break;
		case "P":
		//car is a camaro
		$model = "camaro";
		if($VINArray[3]="F") {
			$bodytype="fbody";
			if(($VINArray[9]==1)||($VINArray[9]==2)||($VINArray[9]=="W")||($VINArray[9]=="X")||($VINArray[9]=="Y")){$bodytype="fourthgenfbody";}
			if(($VINArray[9]=="P")||($VINArray[9]=="R")||($VINArray[9]=="S")||($VINArray[9]=="T")||($VINArray[9]=="V")) {$bodytype="thirdgenfbody";}
		}
		case "S":
		$model = "firebird";
		if($VINArray[3]="F") {
			$bodytype="fbody";
			if(($VINArray[9]=="1")||($VINArray[9]=="2")||($VINArray[9]=="W")||($VINArray[9]=="X")||($VINArray[9]=="Y")){$bodytype="fourthgenfbody";}
			if(($VINArray[9]=="P")||($VINArray[9]=="R")||($VINArray[9]=="S")||($VINArray[9]=="T")||($VINArray[9]=="V")) {$bodytype="thirdgenfbody";}
		}
		//car is a firebird
		//do a insert to vehicles
		break;
		default:		
		$bodytype="fbody";
		$model = "unknown";
		if($VINArray[3]="F") {
			if(($VINArray[9]==1)||($VINArray[9]==2)||($VINArray[9]=="W")||($VINArray[9]=="X")||($VINArray[9]=="Y")){$bodytype="fourthgenfbody";}
			if(($VINArray[9]=="P")||($VINArray[9]=="R")||($VINArray[9]=="S")||($VINArray[9]=="T")||($VINArray[9]=="V")) {$bodytype="thirdgenfbody";}
		}
		break;		
	}
}
	
$tablenamesarray = ["accompressor", "alternator", "battery", "bbumper", "blaxle",  "blcaliper", "blcarrier", "blcoilspring", "blrotor", "blshock", "bltire", "blwheel", "brakemastercylinder", "braxle", "brcaliper", "brcarrier", "brcoilspring", "brrotor", "brshock", "brtire", "brwheel", "crossmember", "differential", "driveline", "engine", "fbumper", "flcaliper", "flcarrier", "flheadlamp", "flhub", "fllowercontrolarm", "flrotor", "flshock", "flspindle", "fltire", "fluppercontrolarm", "flwheel", "frcaliper", "frcarrier", "frheadlamp", "frhub", "frlowercontrolarm", "frontsway", "frrotor", "frshock", "frspindle", "frtire", "fruppercontrolarm", "frwheel", "gastank", "hood", "lcat", "ldoor", "lexhaustmanifold", "lfender", "lkicker", "lmirror", "lquarter", "ltaillight", "lttop", "lwindow", "muffler", "panhardbar", "panhardsupport", "powersteeringpump", "radiator", "rcat", "rdoor", "rearsway", "rexhaustmanifold", "rfender", "rkicker", "rmirror", "rquarter", "rtaillight", "rttop", "rwindow", "spoiler", "steeringrack", "tailpanel", "torquearm", "transmission", "waterpump", "ypipe", "campositionsensor", "camshaft", "clutchpilotbearing", "coilpack1", "coilpack2", "coolanttempsensor", "crankbearing1", "crankbearing2", "crankbearing3", "crankbearing4", "crankbearing5", "crankshaft", "engineblock", "exhaustpushrods1", "exhaustpushrods2", "exhaustrockers1", "exhaustrockers2", "exhaustvalves1", "exhaustvalves2", "fuelrail", "head1", "head2", "intakemanifold", "intakepushrods1", "intakepushrods2", "intakerockers1", "intakerockers2", "intakevalves1", "intakevalves2", "knocksensor", "maincap1", "maincap2", "maincap3", "maincap4", "maincap5", "mainbearing1", "mainbearing2", "mainbearing3", "mainbearing4", "mainbearing5", "mapsensor", "oilfillerneck", "oillevelsensor", "oilpan", "oilpressuresensor", "oiltempsensor", "piston1", "piston2", "piston3", "piston4", "piston5", "piston6", "piston7", "piston8", "pushrodexhaustbank1", "pushrodexhaustbank2", "pushrodintakebank1", "pushrodintakebank2", "steamtube", "timingchain", "throttlebody", "valleycover", "valvecover1", "valvecover2", "windagetray"];	
$tablenamestodeletearray = [];


if($countvehicle<1){
	
	
	for($aa=0;$aa<(count($tablenamesarray));$aa++){


	$tablenamevariable = $tablenamesarray[$aa];
	$selectsqlall = "SELECT * FROM ".$tablenamevariable." WHERE vin=:vin;";
	$selectexecutionarray=['vin'=>$_POST['VIN']];

	$stmt = $pdo->prepare($selectsqlall);
	$stmt->execute($selectexecutionarray);
	$count = $stmt->rowCount();
	//var_dump($count);
	$resultarray=$stmt->fetch();
	//$resultarray['database_table_column_name'];
	
	switch ($aa) {	
		case 0:
		//accompressor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 1:
		//alternator
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 2:
		//battery
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 3:
		//bbumper
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;
		case 4:
		//blaxle
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, differentialfitment, wheelfitment) VALUES (:vin, :fitment, :differentialfitment, :wheelfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'differentialfitment'=>$bodytype,'wheelfitment'=>$bodytype];
		break;		
		case 5:
		//blcaliper
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, carrierfitment, fitment) VALUES (:vin, :fitment, :carrierfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'carrierfitment'=>$bodytype];	
		break;
		case 6:
		//blcarrier
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, differentialfitment, caliperfitment, fitment) VALUES (:vin, :differentialfitment, :caliperfitment, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'differentialfitment'=>$bodytype,'caliperfitment'=>$bodytype,'fitment'=>$bodytype];
		break;		
		case 7:
		//blcoilspring
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, bodytypefitment, differentialfitment) VALUES (:vin, :fitment, :bodytypefitment, :differentialfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'bodytypefitment'=>$bodytype,'differentialfitment'=>$bodytype];
		break;			
		case 8:
		//blrotor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, calipercarrierfitment) VALUES (:vin, :fitment, :calipercarrierfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'calipercarrierfitment'=>$bodytype];
		break;	
		case 9:
		//blshock
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, bodytypefitment, differentialfitment) VALUES (:vin, :fitment, :bodytypefitment, :differentialfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'bodytypefitment'=>$bodytype,'differentialfitment'=>$bodytype];	
		break;	
		case 10:
		//bltire
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;
		case 11:
		//blwheel
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, axlefitment) VALUES (:vin, :fitment, :axlefitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'axlefitment'=>$bodytype];	
		break;
		case 12:
		//brakemastercylinder
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;		
		case 13:
		//braxle
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, differentialfitment, wheelfitment) VALUES (:vin, :fitment, :differentialfitment, :wheelfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'differentialfitment'=>$bodytype,'wheelfitment'=>$bodytype];
		break;		
		case 14:
		//brcaliper
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, carrierfitment, fitment) VALUES (:vin, :fitment, :carrierfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'carrierfitment'=>$bodytype];	
		break;
		case 15:
		//brcarrier
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, differentialfitment, caliperfitment, fitment) VALUES (:vin, :differentialfitment, :caliperfitment, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'differentialfitment'=>$bodytype,'caliperfitment'=>$bodytype,'fitment'=>$bodytype];		
		break;
		case 16:
		//brcoilspring		
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, bodytypefitment, differentialfitment) VALUES (:vin, :fitment, :bodytypefitment, :differentialfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'bodytypefitment'=>$bodytype,'differentialfitment'=>$bodytype];
		break;			
		case 17:
		//brrotor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, calipercarrierfitment) VALUES (:vin, :fitment, :calipercarrierfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'calipercarrierfitment'=>$bodytype];
		break;
		case 18:
		//brshock
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, bodytypefitment, differentialfitment) VALUES (:vin, :fitment, :bodytypefitment, :differentialfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'bodytypefitment'=>$bodytype,'differentialfitment'=>$bodytype];	
		break;			
		case 19:
		//brtire
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;		
		case 20:
		//brwheel
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, axlefitment) VALUES (:vin, :fitment, :axlefitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'axlefitment'=>$bodytype];	
		break;		
		case 21:
		//crossmember
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, lowercontrolarmfitment) VALUES (:vin, :fitment, :lowercontrolarmfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'lowercontrolarmfitment'=>$bodytype];	
		break;
		case 22:
		//differential
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, drivelinefitment, torquearmfitment, swayfitment, axlefitment,	panhardfitment) VALUES (:vin, :fitment, :drivelinefitment, :torquearmfitment, :swayfitment, :axlefitment, :panhardfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'drivelinefitment'=>$bodytype,'torquearmfitment'=>$bodytype,'swayfitment'=>$bodytype,'axlefitment'=>$bodytype,'panhardfitment'=>$bodytype];
		break;
		case 23:
		//driveline
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, torquearmfitment, differentialfitment, yokefitment) VALUES (:vin, :fitment, :torquearmfitment, :differentialfitment, :yokefitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'torquearmfitment'=>$bodytype,'differentialfitment'=>$bodytype,'yokefitment'=>$bodytype];			
		break;
		case 24:
		//engine
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, transmissionfitment) VALUES (:vin, :fitment, :transmissionfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'transmissionfitment'=>$bodytype];	
		break;		
		case 25:
		//fbumper
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;			
		case 26:
		//flcaliper
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, carrierfitment, fitment) VALUES (:vin, :carrierfitment, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'carrierfitment'=>$bodytype];	
		break;
		case 27:
		//flcarrier
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, spindlebracketfitment, caliperfitment, fitment) VALUES (:vin, :spindlebracketfitment, :caliperfitment, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'spindlebracketfitment'=>$bodytype,'caliperfitment'=>$bodytype,'fitment'=>$bodytype];
		break;		
		case 28:
		//flheadlamp
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;		
		case 29:
		//flhub
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, spindlebracketfitment, wheelfitment) VALUES (:vin, :fitment, :spindlebracketfitment, :wheelfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'spindlebracketfitment'=>$bodytype,'wheelfitment'=>$bodytype];	
		break;			
		case 30:
		//fllowercontrolarm
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, crossmemberfitment, spindlebracketfitment) VALUES (:vin, :fitment, :crossmemberfitment, :spindlebracketfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'crossmemberfitment'=>$bodytype,'spindlebracketfitment'=>$bodytype];	
		break;			
		case 31:
		//flrotor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, calipercarrierfitment) VALUES (:vin, :fitment, :calipercarrierfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'calipercarrierfitment'=>$bodytype];
		break;			
		case 32:
		//flshock
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, lowercontrolarmfitment, uppercontrolarmfitment) VALUES (:vin, :fitment, :lowercontrolarmfitment, :uppercontrolarmfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'lowercontrolarmfitment'=>$bodytype,'uppercontrolarmfitment'=>$bodytype];	
		break;			
		case 33:
		//flspindle
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, rackfitment, hubfitment, carrierfitment, lowercontrolarmfitment) VALUES (:vin, :fitment, :rackfitment, :hubfitment, :carrierfitment, :lowercontrolarmfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'rackfitment'=>$bodytype,'hubfitment'=>$bodytype,'carrierfitment'=>$bodytype,'lowercontrolarmfitment'=>$bodytype];	
		break;		
		case 34:
		//fltire
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;
		case 35:
		//fluppercontrolarm
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, shockfitment, spindlebracketfitment) VALUES (:vin, :fitment, :shockfitment, :spindlebracketfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'shockfitment'=>$bodytype,'spindlebracketfitment'=>$bodytype];	
		break;			
		case 36:
		//flwheel
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, hubfitment) VALUES (:vin, :fitment, :hubfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'hubfitment'=>$bodytype];	
		break;			
		case 37:
		//frcaliper
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, carrierfitment, fitment) VALUES (:vin, :carrierfitment, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'carrierfitment'=>$bodytype,'fitment'=>$bodytype];	
		break;		
		case 38:
		//frcarrier
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, spindlebracketfitment, caliperfitment, fitment) VALUES (:vin, :spindlebracketfitment, :caliperfitment, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'spindlebracketfitment'=>$bodytype,'caliperfitment'=>$bodytype,'fitment'=>$bodytype];
		break;	
		case 39:
		//frheadlamp
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;	
		case 40:
		//frhub
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, spindlebracketfitment, wheelfitment) VALUES (:vin, :fitment, :spindlebracketfitment, :wheelfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'spindlebracketfitment'=>$bodytype,'wheelfitment'=>$bodytype];	
		break;			
		case 41:
		//frlowercontrolarm
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, crossmemberfitment, spindlebracketfitment) VALUES (:vin, :fitment, :crossmemberfitment, :spindlebracketfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'crossmemberfitment'=>$bodytype,'spindlebracketfitment'=>$bodytype];	
		break;
		case 42:
		//frontsway
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, bodyfitment, lowercontrolarmfitment) VALUES (:vin, :fitment, :bodyfitment, :lowercontrolarmfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'bodyfitment'=>$bodytype,'lowercontrolarmfitment'=>$bodytype];	
		break;		
		case 43:
		//frrotor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, calipercarrierfitment) VALUES (:vin, :fitment, :calipercarrierfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'calipercarrierfitment'=>$bodytype];
		break;	
		case 44:
		//frshock
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, lowercontrolarmfitment, uppercontrolarmfitment) VALUES (:vin, :fitment, :lowercontrolarmfitment, :uppercontrolarmfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'lowercontrolarmfitment'=>$bodytype,'uppercontrolarmfitment'=>$bodytype];	
		break;			
		case 45:
		//frspindle
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, rackfitment, hubfitment, carrierfitment, lowercontrolarmfitment) VALUES (:vin, :fitment, :rackfitment, :hubfitment, :carrierfitment, :lowercontrolarmfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'rackfitment'=>$bodytype,'hubfitment'=>$bodytype,'carrierfitment'=>$bodytype,'lowercontrolarmfitment'=>$bodytype];	
		break;			
		case 46:
		//frtire
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];	
		break;		
		case 47:
		//fruppercontrolarm
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, shockfitment, spindlebracketfitment) VALUES (:vin, :fitment, :shockfitment, :spindlebracketfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'shockfitment'=>$bodytype,'spindlebracketfitment'=>$bodytype];	
		break;		
		case 48:
		//frwheel
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, hubfitment) VALUES (:vin, :fitment, :hubfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'hubfitment'=>$bodytype];	
		break;	
		case 49:
		//gastank
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 50:
		//hood
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 51:
		//lcat
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, exhaustmanifoldfitment, ypipefitment) VALUES (:vin, :fitment, :exhaustmanifoldfitment, :ypipefitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'exhaustmanifoldfitment'=>$bodytype,'ypipefitment'=>$bodytype];
		break;		
		case 52:
		//ldoor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;	
		case 53:
		//lexhaustmanifold
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, enginefitment, catfitment) VALUES (:vin, :fitment, :enginefitment, :catfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'enginefitment'=>$bodytype,'catfitment'=>$bodytype];
		break;
		case 54:
		//lfender
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 55:
		//lkicker
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;	
		case 56:
		//lmirror
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 57:
		//lquarter
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 58:
		//ltaillight	
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 59:
		//lttop
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 60:
		//lwindow
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;				
		case 61:
		//muffler
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, ypipefitment) VALUES (:vin, :fitment, :ypipefitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'ypipefitment'=>$bodytype];
		break;			
		case 62:
		//panhardbar
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, differentialfitment) VALUES (:vin, :fitment, :differentialfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'differentialfitment'=>$bodytype];
		break;			
		case 63: 
		//panhardsupport
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 64:
		//powersteeringpump
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;					
		case 65:
		//radiator
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 66:
		//rcat
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, exhaustmanifoldfitment, ypipefitment) VALUES (:vin, :fitment, :exhaustmanifoldfitment, :ypipefitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'exhaustmanifoldfitment'=>$bodytype,'ypipefitment'=>$bodytype];
		break;		
		case 67:
		//rdoor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 68:
		//rearsway
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, bodyfitment, differentialfitment) VALUES (:vin, :fitment, :bodyfitment, :differentialfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'bodyfitment'=>$bodytype,'differentialfitment'=>$bodytype];	
		break;		
		case 69:
		//rexhaustmanifold
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, enginefitment, catfitment) VALUES (:vin, :fitment, :enginefitment, :catfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'enginefitment'=>$bodytype,'catfitment'=>$bodytype];
		break;
		case 70:
		//rfender
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 71:
		//rkicker
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 72:
		//rmirror
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;	
		case 73:
		//rquarter
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;	
		case 74:
		//rtaillight
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;			
		case 75:
		//rttop
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 76:
		//rwindow
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 77:
		//spoiler
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 78:
		//steeringrack
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, crossmemberfitment, spindlebracketfitment) VALUES (:vin, :fitment, :crossmemberfitment, :spindlebracketfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'crossmemberfitment'=>$bodytype,'spindlebracketfitment'=>$bodytype];
		break;			
		case 79:
		//tailpanel
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 80:
		//torquearm
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, differentialfitment, transmissionfitment) VALUES (:vin, :fitment, :differentialfitment, :transmissionfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'differentialfitment'=>$bodytype,'transmissionfitment'=>$bodytype];
		break;				
		case 81:
		//transmission
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, torqueconverterfitment, starterfitment, yokefitment) VALUES (:vin, :fitment, :torqueconverterfitment, :starterfitment, :yokefitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'torqueconverterfitment'=>$bodytype,'starterfitment'=>$bodytype,'yokefitment'=>$bodytype];
		break;		
		case 82:
		//waterpump
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 83:
		//ypipe
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment, catfitment, mufflerfitment) VALUES (:vin, :fitment, :catfitment, :mufflerfitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype,'catfitment'=>$bodytype,'mufflerfitment'=>$bodytype];
		break;	
		case 84:
		//campositionsensor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		case 85:
		//camshaft
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 86:
		//clutchpilotbearing
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 87:
		//coilpack1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 88:
		//coilpack2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 89:
		//coolanttempsensor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 90:
		//crankbearing1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 91:
		//crankbearing2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 92:
		//crankbearing3
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 93:
		//crankbearing4 
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 94:
		//crankbearing5
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 95:
		//crankshaft
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 96:
		//engineblock
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 97:
		//exhaustpushrods1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 98:
		//exhaustpushrods2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 99:
		//exhaustrockers1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 100:
		//exhaustrockers2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 101:
		//exhaustvalves1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 102:
		//exhaustvalves2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 103:
		//fuelrail
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 104:
		//head1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 105:
		//head2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 106:
		//intakemanifold
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 107:
		//intakepushrods1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 108:
		//intakepushrods2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 109:
		//intakerockers1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 110:
		//intakerockers2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 111:
		//intakevalves1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 112:
		//intakevalves2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 113:
		//knocksensor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 114:
		//maincap1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 115:
		//maincap2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 116:
		//maincap3
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 117:
		//maincap4
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 118:
		//maincap5
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 119:
		//mainbearing1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 120:
		//mainbearing2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 121:
		//mainbearing3
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 122:
		//mainbearing4
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 123:
		//mainbearing5
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 124:
		//mapsensor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 125:
		//oilfillerneck
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 126:
		//oillevelsensor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 127:
		//oilpan
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 128:
		//oilpressuresensor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 129:
		//oiltempsensor
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 130:
		//piston1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 131:
		//piston2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 132:
		//piston3
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 133:
		//piston4
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 134:
		//piston5
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 135:
		//piston6
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 136:
		//piston7
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 137:
		//piston8
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 138:
		//pushrodexhaustbank1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 139:
		//pushrodexhaustbank2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 140:
		//pushrodintakebank1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 141:
		//pushrodintakebank2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 142:
		//steamtube
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 143:
		//timingchain
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 144:
		//throttlebody
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 145:
		//valleycover
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 146:
		//valvecover1
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 147:
		//valvecover2
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;		
		case 148:
		//windagetray
		$insertsql="INSERT INTO ".$tablenamevariable." (vin, fitment) VALUES (:vin, :fitment);";
		$insertexecutionarray=['vin'=>$_POST['VIN'],'fitment'=>$bodytype];
		break;
		
		default:
		break;
	}
		
		if($count<1){	
			$stmt = $pdo->prepare($insertsql);
			$stmt->execute($insertexecutionarray);
			$count = $stmt->rowCount();
			$resultarray=$stmt->fetch();
			//var_dump($insertsql);
		}
		/*if($count==1){
		//do we update the database if item already exists?
		//}*/
		
}
/*else {//we need update statements?}*/
}
	
	
	
//showtime for making array with names of tables/dom ids to delete	
	if($countvehicle>=1){
		
		for($bb=0;$bb<84;$bb++){	
			$tablenamevariable2 = $tablenamesarray[$bb];
			$selectsqlall = "SELECT * FROM ".$tablenamevariable2." WHERE vin=:vin;";
			$stmt = $pdo->prepare($selectsqlall);
			$selectexecutionarray=['vin'=>$_POST['VIN']];			
			$stmt->execute($selectexecutionarray);
			$count = $stmt->rowCount();
			
			if($count==0){
				echo ($tablenamesarray[$bb]."<br>");
				array_push($tablenamestodeletearray, $tablenamesarray[$bb]);
			}	
		}
	}



// handles form uploading
	if(isset($_FILES['formhtml']['tmp_name'])&&(!is_null($_FILES['formhtml']['name']))){
		$formFileType = pathinfo($_FILES['formhtml']['name'],PATHINFO_EXTENSION);
		if ($formFileType == "htm" || $formFileType == "html" || $formFileType == "php" || $formFileType == "js" || $formFileType == "css" || $formFileType == "sql") {
			if ($_FILES['formhtml']['size'] < 3200000) {
				$target_dir = "";
				$target_file = $target_dir.$_FILES['formhtml']['name'];
				if(!file_exists($target_file) OR (file_exists($target_file) AND (isset($_POST['overwrite'])))) {
					if (move_uploaded_file($_FILES['formhtml']['tmp_name'], $target_file)) {echo "File ".$target_file." has been received!<br>";}
					}
					if (file_exists($target_file) AND (!(isset($_POST['overwrite'])))) {echo "File".$target_file." already exists - please select overwrite to upload<br>";}
					else {echo $target_file." - file error. Please try again";}
				}
				else {echo $_FILES['formhtml']['name']." - Please limit files to 32MB<br>";}
		}
		
		} 
	else {echo $_FILES['formhtml']['name']." - Please upload a file of html, php, js, css, or sql format<br>--you can use the Upload Image form for photos<br>";
	}
	
	// handles duplicates, file errors, images file uploading
	if(isset($_FILES['formimages']['tmp_name'][0])&&(!is_null($_FILES['formimages']['tmp_name'][0]))) {
		if((substr($_POST['imagedirectory'],-1))<>"/"){$_POST['imagedirectory'].="/";}
		for ($a=0; $a<(count($_FILES['formimages']['name'])); $a++){
			$imageFileType = pathinfo($_FILES['formimages']['name'][$a],PATHINFO_EXTENSION);
			if ($imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "jpg" || $imageFileType == "bmp" || $imageFileType == "gif" || $imageFileType == "sql") {
				if ($_FILES['formimages']['size'][$a] < 32000000) {
					if((isset($_POST['imagedirectory']))&&(!is_null($_POST['imagedirectory']))){
						$target_dir=$_POST['imagedirectory'];
						if(is_dir($_POST['imagedirectory'])){
							
							$target_dir = $_POST['imagedirectory'];
							if(isset($target_file)){if(isset($target_dir)){if($target_dir<>"images/"){if(!file_exists($target_file)){if(!is_dir($_POST['imagedirectory'])){mkdir($_POST['imagedirectory']);}}}}}
						}
							else {
								if((substr($_POST['imagedirectory'],-1))<>'/'){$_POST['imagedirectory'].="/";}
								if(isset($target_dir)){if($target_dir<>"images/"){mkdir($_POST['imagedirectory']);}
								$target_dir=$_POST['imagedirectory'];
								}
							}
						}
						if (!isset($target_dir)||$target_dir=="/"){$target_dir = "images/";}
						$target_file = $target_dir.$_FILES['formimages']['name'][$a];
						if (file_exists($target_file) AND (!(isset($_POST['overwrite'])))) {echo $target_file." - File already exists - please select overwrite to upload<br>";}
						if(!file_exists($target_file) OR (file_exists($target_file)&&(isset($_POST['overwrite'])))) {
							try {
							if (move_uploaded_file($_FILES['formimages']['tmp_name'][$a], $target_file)) {echo "File ".$target_file." has been received!<br>";}
							} catch(Exception $e){echo "File error";}
						}
						else {}
					}
					else {echo "Please limit files to 32MB<br>";}
			}
			}			
		}
		else {echo $_FILES['formimages']['name'][$a].' - Please upload an image format <br>--you can use the Upload Form section for html, php, js, css, or sql format<br>';} 
	if (isset($POST['pdo'])) {echo ("it's set");}
for($zz=0;$zz<count($tablenamestodeletearray);$zz++) {
	
//this part generates scripts that animate the removed elemenets with css class outlined in red
	$strrsub0= '$(document).ready(function(){';
	$strr0= '<script>';
	$strr1= '$(".';
	$strr2= $tablenamestodeletearray[$zz];
	$strr3= '").';
	$strr4= 'addClass("red");';
	$strr5= '</script>';
	$strr6='});';
	$strrfinal = $strr0.$strrsub0.$strr1.$strr2.$strr3.$strr4.$strr6.$strr5;
	$strrintermediary = $strr0.$strr1.$strr2.$strr3.$strr4.$strr5;

	echo $strrintermediary;
	echo "<br>";
}

?>

<script src="jquery-3.3.1.min.js"></script>


</div></div>
<button id="viewvehicle">View Vehicle</button>
<button id="viewengine">View Engine</button>
<p id="dialogue">This car is missing the following parts:</p>;
<script>
let hashs = ["#camaro/camaroform.php", "#firebird/firebirdform2.php"]
let hash = window.location.hash;
let current = '';
if(hash===undefined || hash.length==0 || !hashs.includes(hash)) {
	current="#camaro/camaroform.php";
	var stateObj = { foo: "bar"};
	history.replaceState(stateObj, "page 2", somestring);
}
</script>



<input type="hidden" id="hiddeninput"></input>

<script>
let tester = false;
function loadScript(src, callback) {
			let script = document.createElement('script');
			script.src = src;
			script.onload = () => callback(script);
			document.body.appendChild(script);
		}
if(!tester){loadScript("addeventfunctions.js", script => {console.log("event functions script reloaded");tester=true;});}
$('#viewvehicle').on('click', function(event){
	event.preventDefault();
	$('#content2').show();
	$('#content3').hide();
	
		function loadScript(src, callback) {
			let script = document.createElement('script');
			script.src = src;
			script.onload = () => callback(script);
			document.body.appendChild(script);
		}

	if(!tester){loadScript("addeventfunctions.js", script => {console.log("event functions script reloaded");tester=true;});}
	
			
});

	$('#viewengine').on('click', function(event){
		event.preventDefault();
		$('#content2').hide();
		$("#content3").show();
		savedVIN = $('#VINdiv').text();
		console.log(savedVIN);
		
		function loadScript(src, callback) {
			let script = document.createElement('script');
			script.src = src;
			script.onload = () => callback(script);
			document.head.append(script);
		}
		function loadScriptBody(src, callback) {
			let script = document.createElement('script');
			script.src = src;
			script.onload = () => callback(script);
			document.body.append(script);
		}		
		
		
		$("#content3").load('ls1.php');
		
	loadScriptBody("addls1functions.js", script => {console.log("ls1 script loaded")});
	loadScriptBody("ls1ajax.js", script => {console.log("ls1 ajax script loaded");scripthasloaded=true;});
});
	
</script>






</form></body></html>






