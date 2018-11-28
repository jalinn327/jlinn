<head><link rel="manifest" href="7.webmanifest"></head>

<?php 
if(!isset($_POST["VIN"])){$_POST["VIN"]="11VPP111111111111";}
$tablenamestodeletearray=array();

if(!isset($_SESSION["VIN"])){
	
	$output="";
	$_POST['VIN']=strtoupper($_POST['VIN']);
	
	//var_dump($VINArray);
	if (isset($_POST['RPOs'])) {
		$inputRPOS=$_POST['RPOs'];
		$RPOsArray=explode(",",$inputRPOS,6);
	}
}

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
	$stmt->execute(['vin'=>$_POST['VIN']]);
	
	$countvehicle = $stmt->rowCount();
	$formurlarray = $stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt->execute(['vin'=>$_POST['VIN']]);
	$formurl = $stmt->fetchColumn();
	
	$tablenamesarray = ["campositionsensor","camshaft","clutchpilotbearing","coilpack1","coilpack2","coolanttempsensor","crankbearing1","crankbearing2","crankbearing3","crankbearing4","crankbearing5","crankshaft","engineblock","exhaustpushrods1","exhaustpushrods2","exhaustrockers1","exhaustrockers2","exhaustvalves1","exhaustvalves2","fuelrail","head1","head2","intakemanifold","intakepushrods1","intakepushrods2","intakerockers1","intakerockers2","intakevalves1","intakevalves2","knocksensor","maincap1","maincap2","maincap3","maincap4","maincap5","mainbearing1","mainbearing2","mainbearing3","mainbearing4","mainbearing5","mapsensor","oilfillerneck","oillevelsensor","oilpan","oilpressuresensor","oiltempsensor","piston1","piston2","piston3","piston4","piston5","piston6","piston7","piston8","pushrodexhaustbank1","pushrodexhaustbank2","pushrodintakebank1","pushrodintakebank2","steamtube","timingchain","throttlebody","valleycover","valvecover1","valvecover2","windagetray"];
	
	if($countvehicle<1){
	
	
	for($aa=0;$aa<(count($tablenamesarray));$aa++){
		$tablenamevariable = $tablenamesarray[$aa];	
		$selectsqlall = "SELECT * FROM ".$tablenamevariable." WHERE vin=:vin;";
		$selectexecutionarray=['vin'=>$_POST['VIN']];
	
		$stmt = $pdo->prepare($selectsqlall);
		$stmt->execute($selectexecutionarray);
		$count = $stmt->rowCount();
		$resultarray=$stmt->fetch();
		//$resultarray['database_table_column_name'];
	}
	}
	
	
	//this code selects a table name from the list and searches that table for any matching parts
	if($countvehicle>=1){
		
		for($bb=0;$bb<(count($tablenamesarray));$bb++){	
			$tablenamevariable2 = $tablenamesarray[$bb];
			$selectsqlall = "SELECT * FROM ".$tablenamevariable2." WHERE vin=:vin;";
			$stmt = $pdo->prepare($selectsqlall);
			$selectexecutionarray=['vin'=>$_POST['VIN']];			
			$stmt->execute($selectexecutionarray);
			$count = $stmt->rowCount();
// if there is no matching part then it has probably been removed or broken
// we keep track of the missing parts in $tablenamestodeletearray			
			if($count==0){
				echo ($tablenamesarray[$bb]."<br>");
				array_push($tablenamestodeletearray, $tablenamesarray[$bb]);
			}	
		}
	}

for($zz=0;$zz<count($tablenamestodeletearray);$zz++) {
	
	
	
//this part generates scripts that animate the removed elemenets with css class outlined in red
//those table names whose parts are missing corresponding to the current vin are styled with a red outline
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
<script>
var lengthofdeletearray = storage.length;
for (var gg=0; gg < lengthofdeletearray; gg++) {
	let someinterim = storage[gg];
	$('".'+someinterim+'"').addClass("red");
}
</script>

