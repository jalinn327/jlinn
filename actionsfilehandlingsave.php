<head><link rel='stylesheet' href='mystyle.css'></link></head>
<?php 
	$output="";
	if (isset($_POST['RPOs'])) {
		$inputRPOS=$_POST['RPOs'];
		$RPOsArray=explode(",",$inputRPOS,6);
	}
	include "form.php";

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
					else {}
				}
				else {echo $_FILES['formhtml']['name']." - Please limit files to 32MB<br>";}
		}
		
		} 
	else {echo $_FILES['formhtml']['name']." - Please upload a file of html, php, js, css, or sql format<br>--you can use the Upload Image form for photos<br>";
	}
	
	if(isset($_FILES['formimages']['tmp_name'][0])&&(!is_null($_FILES['formimages']['tmp_name'][0]))) {
		if((substr($_POST['imagedirectory'],-1))<>"/"){$_POST['imagedirectory'].="/";}
		for ($a=0; $a<(count($_FILES['formimages']['name'])); $a++){
			$imageFileType = pathinfo($_FILES['formimages']['name'][$a],PATHINFO_EXTENSION);
			if ($imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "jpg" || $imageFileType == "bmp" || $imageFileType == "gif" || $imageFileType == "sql") {
				if ($_FILES['formimages']['size'][$a] < 32000000) {
					
					if((isset($_POST['imagedirectory']))&&(!is_null($_POST['imagedirectory']))){
						if(is_dir($_POST['imagedirectory'])){
							$target_dir = $_POST['imagedirectory'];
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
							if (move_uploaded_file($_FILES['formimages']['tmp_name'][$a], $target_file)) {echo "File ".$target_file." has been received!<br>";}
						}
						
						else {}
					}
					else {echo "Please limit files to 32MB<br>";}
			}
			
			}			
		}
		else {echo $_FILES['formimages']['name'][$a].' - Please upload an image format <br>--you can use the Upload Form section for html, php, js, css, or sql format<br>';} 
	//var_dump($_FILES['formimages']);

	echo ("Current Vehicle: ".$_POST['VIN']."</align><br>");
	$VINArray=str_split($_POST['VIN']);
	switch ($VINArray[3]) {
		case "P":
			echo "<div id='content'>";
			include "camaro/camaroform.php";
			echo "</div>";
		break;
		case "S":
			echo "<div id='content'>";
			include "firebird/firebirdform2.php";
			echo "</div>";
		break;
		case "V":
			echo "<div id='content'>";
			include "firebird/firebirdform2.php";
			echo "</div>";
		break;
		default:
			echo "<div id='content'>";
			include "camaro/camaroform.php";
			echo "</div>";	
		break;
	}

	//require "classes.php";	
	/* for ($z=0;$z < count($RPOsArray);$z++) {
					switch($RPOsArray[$z]){
					case "GU2":
					$GeeYouToo = new DifferentialGU2;
					echo $GeeYouToo->displaySingleAttribute('gearRatio')." gears<br>";
					break;
					case "GU5":
					$GeeYouFive = new DifferentialGU5;
					echo $GeeYouFive->displaySingleAttribute('gearRatio')." gears<br>";
					break;
					case "GU6":
					$GeeYouSix = new DifferentialGU6;
					echo $GeeYouSix->displaySingleAttribute('gearRatio')." gears<br>";
					break;
					case "MN6":
					$tremec = new TremecFBodyTransmission;
					echo $tremec->displaySingleAttribute('transmissionName')." transmission<br>";
					break;
					case "M30":
					$fourElSixty = new FourLSixtyTransmission;
					echo $fourElSixty->displaySingleAttribute('transmissionName')." transmission<br>";
					break;
					case "N96":
					$inNinetySix=new SixteenInchPowderedRims;
					echo $inNinetySix->displaySingleAttribute('wheelDiameter')." inch ".$inNinetySix->displaySingleAttribute('wheelCoating')." wheels<br>";
					break;
					case "QA7":
					$QAyy7=new SixteenInchChromeRims;
					echo $QAyy7->displaySingleAttribute('wheelDiameter')." inch ".$QAyy7->displaySingleAttribute('wheelCoating')." wheels<br>";				
					break;					
					case "QF6":
					$QEff6=new SeventeenInchChromeRims;
					echo $QEff6->displaySingleAttribute('wheelDiameter')." inch ".$QEff6->displaySingleAttribute('wheelCoating')." wheels<br>";		
					break;
				};
	}	*/

echo "</form>";
?>
<script src="jquery-3.3.1.min.js"></script>
<script src="addeventfunctions.js"></script>
