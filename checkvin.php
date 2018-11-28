<head><link rel="manifest" href="7.webmanifest"></head>
<?php 
$selectornamevariable = $_POST["selectornamevariable"];
if(isset($_GET['VIN'])){$VINvariable = $_GET['VIN'];}
else {$VINvariable = $_SESSION['VIN'];}



	
	
	
$data = array(
	array('selectornamevariable'=>$selectornamevariable,
	'VIN'=>$VINvariable
	);
);
header('Content-Type: application/json');
echo json_encode($data);

?>