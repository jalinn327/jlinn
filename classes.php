<?php
function salvageCondition() {$this->engine=null;$this->transmission=null;$this->suspension=null;$this->electrical=null;};
function hooptieCondition() {$this->transmission=null;$this->suspension=null;$this->electrical=null;};
function beaterCondition() {$this->transmission=null;$this->suspension=null;} ;
function drivesCondition() {};

function arrayToString($arrayInput){
}

$arrayToConvert=array(array("doug"=>"davies"),array("1"=>array("1","2","3","4")));
arrayToString($arrayToConvert);

trait hasRPO{
function checkRPO(){
		return $this->RPO;
		// factory production parts usually have RPO codes
		// aftermarket parts never have RPO codes
	}
}

trait useDisplay{
	
//function installPart($part){
	
	//	foreach($part as $partProperty => $partValue) {
		//	$this->partProperty=$partProperty;
			//$this->partValue=$partValue;
			//}
//}	
	function createPropertyName($name,$value){
		$this->{$name}=$value;
	}
	function countAll(){
		$countier=0;
		foreach ($this as $key => $value) {
			$countier++;
		}
		return $countier;
	}
	
	function outputArray(){
		$count=0;
		if (is_object($this)) {
		 do {
			foreach($this as $key=>$value) {
				$newLine=array($key=>$value);
				if (!isset($newArray)) {
					$newArray=array($newLine);	
				}
				else {
					array_merge($newArray,$newLine);
				}
			}
			$count++;
		} while ($count<($this->countAll()));
		}	
	
	return $newArray;
		
	}
	
	function addProperty($inputProperty){
		foreach ($inputProperty as $key => $value) {
			$this->key=$key;
			$this->value=$value;
		}
	}
	function installPart($part){
		foreach ($part as $a => $b) {
			$this->{'$a'}=$a;
			$this->{'$b'}=$b;
		}
	}
	function displayAllAttributes(){
		foreach($this as $key => $value) {
			if (gettype($value)=="string"||"double"||"integer"||"boolean"||"null") {
				if (is_array($value)) {
					if (!isset($output)) {$output="";}
					$output.=("<i>".$key." - </i><br>");
					foreach ($value as $aa => $bb) {
						$output.=($aa.": ".$bb."<br>");
					}
				}
				else 
				{
					if (!isset($output)) {$output="";}
					$output.=$key.": ".$value."<br>";
				}
			}
		}	
		return $output;
	}
	function displaySingleAttribute($attribute){
			return $this->{$attribute};
	}
	function useSeventeenInchChromeRims(){
			$outputRimInformation=[$this->wheelDiameter,$this->wheelDepth,$this->wheelCoating];
			return $outputRimInformation;
	}
	function createNewProperty($name,$nameValue){
		$this->{$name}=$nameValue;
	}
	function returnAllProperties(){
		$output=[];
			foreach ($this as $spec => $valueArray){
				switch (gettype ($valueArray)) {
					case "object":
					$spec->installPart($valueArray);
					continue;
					
					case "array":
						foreach ($valueArray as $specs => $values) {
						$valueArrayMerged=[$specs => $values];
						array_merge($output,$valueArrayMerged);
						
					}
					continue;
					
					case "string"or"integer"or"double"or"boolean":
					$newOutputArray=[$spec => $valueArray];
					array_merge($output,$newOutputArray);
					echo ("string");
					continue;
				}
			}
		return $output;	
	}

}
class LS1IntakeManifold {
	protected $EGR=["EGR"=>true];
	protected $intakeManifoldPort=["intakeManifoldPort"=>"cathedral"];
	protected $fuelInjectorLength=["fuelInjectorLength"=>2.5];
	protected $boundaryLayerPastRunner=["boundaryLayerPastRunner"=>"false"];
	use useDisplay;
	
};
class LS6intakeManifold {
	protected $EGR=false;
	protected $intakeManifoldPort="cathedral";
	protected $fuelInjectorLength=2.5;
	protected $boundaryLayerPastRunner=true;
	use useDisplay;	
};	
class NinetyEightFBodyExhaustManifold {
	protected $restrictive=true;
	protected $upstreamOxygenSensors=2;
	protected $downstreamOxygenSensors=2;
	use useDisplay;
}
class NinetyNineFBodyExhaustManifold {
	protected $restrictive=true;
	protected $upstreamOxygenSensors=2;
	protected $downstreamOxygenSensors=2;
	use useDisplay;
}
class TwoThousandFBodyExhaustManifold {
	protected $restrictive=false;
	protected $upstreamOxygenSensors=2;
	protected $downstreamOxygenSensors=2;
	use useDisplay;
}
class TwoThousandOneFBodyExhaustManifold {
	protected $restrictive=false;
	protected $upstreamOxygenSensors=2;
	protected $downstreamOxygenSensors=2;
	use useDisplay;
}
class TwoThousandTwoFBodyExhaustManifold {
	protected $restrictive=false;
	protected $upstreamOxygenSensors=2;
	protected $downstreamOxygenSensors=2;
	use useDisplay;
}
class NinetyEightFBodyCam{
	protected $camIntakeLift=.498;
	protected $camExhaustLift=.497;
	protected $camIntakeDuration=198;
	protected $camExhaustDuration=209;
	protected $camLobeSeparation=119.5;
	use useDisplay;
};
class NinetyNineFBodyCam{
	protected $camIntakeLift=.498;
	protected $camExhaustLift=.497;
	protected $camIntakeDuration=198;
	protected $camExhaustDuration=209;
	protected $camLobeSeparation=119.5;
	use useDisplay;
};
class TwoThousandFBodyCam{
	protected $camIntakeLift=.498;
	protected $camExhaustLift=.497;
	protected $camIntakeDuration=198;
	protected $camExhaustDuration=209;
	protected $camLobeSeparation=119.5;
	use useDisplay;
};
class TwoThousandOneFBodyCam{
	protected $camIntakeLift=.467;
	protected $camExhaustLift=.479;
	protected $camIntakeDuration=196;
	protected $camExhaustDuration=208;
	protected $camLobeSeparation=116;
	use useDisplay;
};
class TwoThousandTwoFBodyCam{
	protected $camIntakeLift=.467;
	protected $camExhaustLift=.479;
	protected $camIntakeDuration=196;
	protected $camExhaustDuration=208;
	protected $camLobeSeparation=116;
	use useDisplay;
};
class LS1EngineBlock{
	protected $bore=3.898;
	protected $stroke=3.622;
	protected $material="aluminum";
	protected $crankReluctorWheel = "24x";
	protected $crankGeneration = 3;
	protected $connectingRodGeneration=3;
	protected $connectingRodLength=6.098;
	protected $pistonDishVolume=0;
	protected $crankMainJournal=2.559;
	protected $crankRodJournal=2.100;
	protected $flyhweelMountingFlange=.857;
	use useDisplay;
};

class TwoFortyOneEngineHead{
	use useDisplay;	
	protected $headCastings=[12559853, 12558805, 12560621, 12562174, 12564241];
	protected $headMaterial="aluminum";
	protected $combustionChamberVolume=0;
	protected $intakePortType="cathedral";
	protected $exhaustPortType="oval";
	protected $intakeRunnerVolume=200;
	protected $exhaustRunnerVolume=70;
	protected $headBoltSize=["M11 x 2 x 155"=>8, "M11 x 2 x 100"=>2, "M8 x 1.25 x 45"=>5];
	protected $intakeValveDiameter=2.000;
	protected $exhaustValveDiameter=1.550;

};
class LS1Valvetrain{
	protected $lifterStyle="Hydraulic Roller";
	protected $lifterBodyDiameter=.842;
	protected $pushrodLength=7.385;
	protected $rockerRatio=1.7;
	protected $valveSpringPressure=["low"=>70,"high"=>220];
	protected $intakeValveMaterial="Steel - Solid Stem";
	protected $exhaustValveMaterial="Steel - Solid Stem";
	protected $valveSpringStyle="Beehive";
	protected $valveSpringColor="Natural";
	protected $valveAngle=15;
	use useDisplay;
};
class NinetyEightFBodyTBI{
	protected $size=78;
	protected $throttleControl="cable";
	protected $fuelInjectorFlow=29.6;
	protected $fuelInjectorLength=2.5;
	protected $fuelInjectorConnector="EV1";
	protected $PCM="1998";
	protected $camSensor="Rear Mount, 1x on cam";
	protected $oilPan="Rear sump";
	protected $oilPump="Standard Volume";
	use useDisplay;

}; 
class NinetyNineFBodyTBI{
	protected $size=78;
	protected $throttleControl="cable";
	protected $fuelInjectorFlow=27.3;
	protected $fuelInjectorLength=2.5;
	protected $fuelInjectorConnector="EV1";
	protected $PCM="1999-2002";
	protected $camSensor="Rear Mount, 1x on cam";
	protected $oilPan="Rear sump";
	protected $oilPump="Standard Volume";
	use useDisplay;
}; 
class TwoThousandFBodyTBI{
	protected $size=78;
	protected $throttleControl="cable";
	protected $fuelInjectorFlow=27.3;
	protected $fuelInjectorLength=2.5;
	protected $fuelInjectorConnector="EV1";
	protected $PCM="1999-2002";
	protected $camSensor="Rear Mount, 1x on cam";
	protected $oilPan="Rear sump";
	protected $oilPump="Standard Volume";
	use useDisplay;
}; 
class TwoThousandOneFBodyTBI{
	protected $size=78;
	protected $throttleControl="cable";
	protected $fuelInjectorFlow=30;
	protected $fuelInjectorLength=2.5;
	protected $fuelInjectorConnector="EV1";
	protected $PCM="1999-2002";
	protected $camSensor="Rear Mount, 1x on cam";
	protected $oilPan="Rear sump";
	protected $oilPump="Standard Volume";
	use useDisplay;
}; 
class TwoThousandTwoFBodyTBI{
	protected $size=78;
	protected $throttleControl="cable";
	protected $fuelInjectorFlow=30;
	protected $fuelInjectorLength=2.5;
	protected $fuelInjectorConnector="EV1";
	protected $PCM="1999-2002";
	protected $camSensor="Rear Mount, 1x on cam";
	protected $oilPan="Rear sump";
	protected $oilPump="Standard Volume";
	use useDisplay;
}; 

class OEMGMSuspensionV6{
	protected $frontSpringRate=257;
	protected $rearSpringRate=114;
	protected $rideHeightDrop=0;
	protected $bushings="stock";
	protected $RPO="FE2";
	use hasRPO;
	use useDisplay;
	};
class OEMGMSuspensionV8{
	protected $frontSpringRate=292;
	protected $rearSpringRate=114;
	protected $rideHeightDrop=0;
	protected $bushings="stock";
	protected $RPO="F41";
	use hasRPO;
	use useDisplay;
}	
class OneLEGMSuspension{
	protected $frontSpringRate=360;
	protected $rearSpringRate=[130,180];
	protected $rideHeightDrop=0;
	protected $bushings="urethane";
	protected $RPO="1LE";
	use useDisplay;
	use hasRPO;
}
class eibachVEightSuspension{
	protected $frontSpringRate=400;
	protected $rearSpringRate=[80,137];
	protected $rideHeightDrop=1.25;
	protected $bushings="urethane";
	use hasRPO;
	use useDisplay;
}
class SLPLevelOneSuspension{
	protected $frontSpringRate=[223,448];
	protected $rearSpringRate=[97,136];
	protected $rideHeightDrop=.75;
	protected $bushings="urethane";
	use hasRPO;
	use useDisplay;
}
class SLPLevelTwoSuspension{
	protected $frontSpringRate=[300,450];
	protected $rearSpringRate=[115,185];
	protected $rideHeightDrop=.50;
	protected $bushings="urethane";
	use useDisplay;
}
class FourLSixtyTransmission{
		public function useFourLSixty(){
		return [$this->transmissionName,$this->ECMYears,$this->ECMConnector,$this->inputShaft,$this->speedSensor,$this->torqueRating,$this->outputShaftSplines,$this->RPO,$this->gears,$this->torqueConverterLock,$this->overallLength,$this->bellhousingToCrossmember,$this->weight,$this->outputShaftLength];
	}
	protected $transmissionName="4L60-E";
	protected $ECMYears="1996-present";
	protected $ECMConnector=["2000-2005 ECM"=>"green connector","2006+ ECM"=>"purple connector"];
	protected $inputShaft=298;
	protected $midPlate="298mm input shaft midplate";
	protected $speedSensor="passenger side tail";
	protected $torqueRating=380;
	protected $outputShaftSplines=27;
	protected $RPO="M30";
	use hasRPO;
	use useDisplay;
	protected $gears=["1"=>3.06,"2"=>1.62,"3"=>1.00,"4"=>.70,"R"=>2.29];
	protected $torqueConverterLock=true;
	protected $overallLength=31+(5/32);
	protected $bellhousingToCrossmember=23+(19/32);
	protected $weight=160;
	protected $outputShaftLength="long";

};
class FourLSixtyFiveTransmission{
	protected $ECMYears="1996-present";
	protected $ECMConnector=["2000-2005"=>"green","2006+"=>"purple"];
	protected $inputShaft=300;
	protected $midPlate="300mm input shaft midplate";
	protected $speedSensor="passenger side tail";
	protected $torqueRating=400;
	protected $outputShaftSplines=27;
	protected $RPO="M32";
	use hasRPO;
	use useDisplay;
	protected $gears=["1"=>3.06,"2"=>1.62,"3"=>1.00,"4"=>.70,"R"=>2.29];
	protected $torqueConverterLock=true;
	protected $overallLength=31+(5/32);
	protected $bellhousingToCrossmember=23+(19/32);
	protected $weight=160;
	protected $outputShaftLength="long";
};
class FourLSeventyTransmission{
	protected $ECMYears="1996-present";
	protected $ECMConnector="black or neon blue";
	protected $inputShaft=300;
	protected $midPlate="300mm input shaft midplate";
	protected $speedSensor="input shaft";
	protected $torqueRating=495;
	protected $outputShaftSplines=27;
	protected $RPO="M70";
	use hasRPO;
	use useDisplay;
	protected $gears=["1"=>3.06,"2"=>1.62,"3"=>1.00,"4"=>.70,"R"=>2.29];
	protected $torqueConverterLock=true;
	protected $weight=160;
	protected $overallLength=31+(5/32);
	protected $bellhousingToCrossmember=23+(19/32);
	protected $outputShaftLength="short";
}
class FourLEightyTransmission{
	protected $ECMYears="1996-present";
	protected $ECMConnector="black or neon blue";
	protected $inputShaft=300;
	protected $speedSensor="input shaft";
	protected $torqueRating=440;
	protected $outputShaftSplines=32;
	protected $RPO="MT1";
	use hasRPO;
	use useDisplay;
	protected $gears=["1"=>2.48,"2"=>1.48,"3"=>1.0,"4"=>.75,"R"=>2.07];
	protected $torqueConverterLock=true;
	protected $weight=187;
	protected $overallLength=32;
	protected $bellhousingToCrossmember=30.5;
	protected $outputShaftLength="long";
}
class TremecFBodyTransmission{
	protected $transmissionName="Tremec T-56";
	protected $ECMYears="1998-present";
	protected $midPlate="tremec";
	protected $inputShaftLength="long";
	protected $inputShaft=298;
	protected $inputShaftSplines=26;
	protected $outputShaftSplines=27;
	protected $torqueRating=450;
	protected $RPO="MN6";
	use hasRPO;
	use useDisplay;
	public $compile;
	public function useTremec()
	{
		$compile = [$this->transmissionName,$this->ECMYears,$this->midPlate,$this->inputShaftLength,$this->inputShaft,$this->inputShaftSplines,$this->outputShaftSplines,$this->torqueRating];
		return $compile;
	}
	
	
}
class SmallAutomaticTransmission{};
class FBodyDriveline{
	protected $yokeSplines=27;
	protected $yokeStyle="slip";
	public function useFBodyDriveline(){
		$drivelineSpecs=[$this->yokeSplines,$this->yokeStyle];
		return $drivelineSpecs;
	}
};
class DifferentialGU2{
	protected $gearRatio=2.73;
	public function useDifferentialGU2(){
		$GU2=$this->gearRatio;
		return $GU2;
	}
	use useDisplay;	
}
class DifferentialGU5 {
	protected $gearRatio=3.23;
	public function useDifferentialGU5(){
		$GU5=$this->gearRatio;
		return $GU5;	
	}
	use useDisplay;	
}
class DifferentialGU6 {
	protected $gearRatio=3.42;
	public function useDifferentialGU6(){
		$GU6=$this->gearRatio;
		return $GU6;
	}
	use useDisplay;	
}

class TractionControlG80 {
	protected $tractionControl=true;
	public function useTractionControl(){
		return $tractionControl;
	}
	use useDisplay;
}
class SixteenInchPowderedRims {
	protected $wheelDiameter=16;
	protected $wheelDepth=8;
	protected $wheelCoating="powder coated";
	use useDisplay;
	public function useSixteenInchPowderedRims (){
		$outputRimInformation=[$this->wheelDiameter,$this->wheelDepth,$this->wheelCoating];
		return $outputRimInformation;
	}
	protected $RPO="N96";
}
class SixteenInchChromeRims {
	protected $wheelDiameter=16;
	protected $wheelDepth=8;
	protected $wheelCoating="chrome";
	use useDisplay;
	public function useSixteenInchChromeRims (){
		$outputRimInformation=[$this->wheelDiameter,$this->wheelDepth,$this->wheelCoating];
		return $outputRimInformation;
	}
}
class SeventeenInchChromeRims {
	protected $wheelDiameter=17;
	protected $wheelDepth=8;
	protected $wheelCoating="chrome";
	use useDisplay;
}
trait earlyWS6{/*use OneLEGMSuspension;*/};
trait lateWS6{/*use OEMGMSuspensionV8;*/};
trait Formula{/*use OEMGMSuspensionV6;*/};
trait TransAm{/*use OEMGMSuspensionV8;*/};
trait RS{};
trait SS{};
trait V6Engine{
	public function talkSmack(){
		echo("Theres no replacement for displacement");
		}
};

class NinetyEightLS1Engine{
	use useDisplay;
	protected $castings="asdf";
	protected $headCastings="asdf";
	protected $headMaterial="";
	protected $combustionChamberVolume;
	protected $intakePortType="";
	protected $exhaustPortType="";
	protected $intakeRunnerVolume;
	protected $exhaustRunnerVolume;
	protected $headBoltSize=[];
	protected $intakeValveDiameter;
	protected $exhaustValveDiameter;
	
	//use LS1IntakeManifold;
	//use LS1EngineBlock;
	//use TwoFourtyOneEngineHead;
	//use NinetyEightFBodyCam;
	//use LS1Valvetrain;
	//use NinetyEightFBodyTBI;
	//use NinetyEightFBodyExhaustManifold;
	};

class NinetyEightFBody{
	use useDisplay;
	protected $VIN;
	public $make;
	public $model;
	public $year;
	public $bodyType;
	public $restraintSystem;
	public $engine;
	public $miles;
	
	public $RPOCodes;
	public $transmission;
	public $suspension;
	public $wheels;
	public $differential;
	public $driveline;
	public $body;
	public $brakes;
	public $electrical;
	public $interior;
	
	public $condition;
	
	public function __construct($userInputVIN,$userInputRPO,$userInputCondition,$miles) {
		$this->decodeVIN($userInputVIN);
		$this->decodeRPO($userInputRPO);
		$this->condition=$userInputCondition;
		$this->miles=$miles;
		echo $this->condition;
		echo "<br>".$this->miles;
		echo "<br><br>";
	}
	public function decodeVIN($userInputVIN) {
		$this->VIN=$userInputVIN."<br>";
		echo $this->VIN;
		if (strlen($userInputVIN)==17) {
			/////////////////
			
		}
		else
			{echo "Please input valid VIN";}
		switch(substr($userInputVIN,9,1)){
			case "W":
			$this->year=1998;
			echo $this->year." ";
			break;
			case "X":
			$this->year=1999;
			echo $this->year." ";
			break;	
			case "Y":
			$this->year=2000;
			echo $this->year." ";
			break;				
			case "1":
			$this->year=2001;
			echo $this->year." ";
			break;					
			case "2":
			$this->year=2002;
			echo $this->year." ";
			break;
		}
		
				
		switch (substr($userInputVIN,4,1))	{
			case "P":
			$this->make="Chevrolet";
			$this->model="Camaro";
			echo $this->make." ".$this->model." ";
			break;
			case "S":
			$this->make="Pontiac";
			$this->model="Firebird";
			echo $this->make." ".$this->model." ";				
			break;
			case "V":
			$this->make="Pontiac";
			$this->model="Formula, Trans Am";
			echo $this->make." ".$this->model." ";			
			break;
		}
		
		switch (substr($userInputVIN,5,1)) {
			case "2": 
				$this->bodyType="2 door coupe (hatchback)";
				echo $this->bodyType."<br>";
			break;
			case "3":
				$this->bodyType="2 door convertible";
				echo $this->bodyType."<br>";
			break;	
		}

		switch (substr($userInputVIN,7,1)) {
			case "K":
			break;
			case "P":
			break;		
			case "X":
			break;					
		}
		
		
// the rest of this function will break down the vin to determine year, make, model, engine, body type, and restraint system
	}
	public function decodeRPO($userInputRPO) {
		$this->RPOCodes=$userInputRPO;
		foreach ($userInputRPO as $z) {
				switch($z){

					case "MN6":
					$tremec = new TremecFBodyTransmission;
					$this->transmission=$tremec;
						echo $this->transmission->displaySingleAttribute('transmissionName')." transmission";
						echo "<br>";
					
														
					//$this->transmission=$tremec->useTremec();
					//echo ($this->transmission[0]." transmission<br>");
					break;
					case "M30":
					$fourElSixty = new FourLSixtyTransmission;
					$this->transmission=$fourElSixty->useFourLSixty();
					echo $this->transmission[0]." transmission<br>";
					break;
					
					case "GU2":
					$GeeYouToo = new DifferentialGU2;
					$this->differential=$GeeYouToo->useDifferentialGU2();
					echo $this->differential." differential gears"."<br>";
					break;
					case "GU5":
					$GeeYouFive = new DifferentialGU5;
					$this->differential=$GeeYouFive->useDifferentialGU5();
					echo $this->differential." differential gears"."<br>";
					break;
					case "GU6":
					$GeeYouSix = new DifferentialGU6;
					$this->differential=$GeeYouSix->useDifferentialGU6();	
					echo $this->differential." differential gears"."<br>";
					break;
					case "N96":
					$inNinetySix=new SixteenInchPowderedRims;
					$this->wheels=$inNinetySix->useSixteenInchPowderedRims();
					echo $this->wheels[0]." x ".$this->wheels[1]." ".$this->wheels[2]." rims<br>";
					break;
					case "QF6":
					$QEffSix=new SeventeenInchChromeRims;
					$this->wheels=$QEffSix->useSeventeenInchChromeRims();
					echo $this->wheels[0]." x ".$this->wheels[1]." ".$this->wheels[2]." rims<br>";
					break;
					case "QA7":
					$QAyySeven=new SixteenInchChromeRims;
					$this->wheels=$QAyySeven->useSixteenInchChromeRims();
					echo $this->wheels[0]." x ".$this->wheels[1]." ".$this->wheels[2]." rims<br>";					
					break;
				};
				// the rest of this loop will eventually analyze the list of rpo codes input and use logic to determine 
				// which parts the car were originally installed from the factory
			}
	}
	public function applyCondition($userInputCondition) {
		//this code is going to rule out parts based on condition
		//and assign all parts with a mileage
		$this->condition=$userConditionSelection;
			switch($this->condition) {
				case "salvage":
					salvageCondition();
					break;
				case "hooptie":
					hooptieCondition();
					break;
				case "beater":
					beaterCondition();
					break;
				case "drives":
					drivesCondition();
					break;
			}
	}
}

class TwoThousandGMTruck{
	public $VIN;
	public $make;
	public $model;
	public $year;
	public $driveConfiguration;
	public $bodyType;
	public $restraintSystem;
	public $engine;
	public $miles;
	
	public $RPOCodes;
	public $transmission;
	public $suspension;
	public $wheels;
	public $differential;
	public $driveline;
	public $body;
	public $brakes;
	public $electrical;
	public $interior;
	
	public $condition;
	
	public function __construct($userInputVIN,$userInputRPO,$userInputCondition,$miles) {
		$this->decodeVIN($userInputVIN);
		$this->decodeRPO($userInputRPO);
		$this->condition=$userInputCondition;
		$this->miles=$miles;
		echo "<br>".$this->condition;
		echo "<br>".$this->miles;
		echo "<br><br>";
	}
	public function decodeVIN($userInputVIN) {
		$this->VIN=$userInputVIN."<br>";
		if (strlen($userInputVIN)==17)
			{echo $this->VIN;}
			else
			{echo "Please input valid VIN";}
// the rest of this function will break down the vin to determine year, make, model, engine, body type, and restraint system
	}
	public function decodeRPO($userInputRPO) {
		$this->RPOCodes=$userInputRPO;
		foreach ($userInputRPO as $z) {
				echo $z." ";
				// for trucks
				// the rest of this loop will eventually analyze the list of rpo codes input and use logic to determine 
				// which parts the car were originally installed from the factory
			}
	}
	public function applyCondition($userConditionSelection) {
		//this code is going to rule out parts based on condition
		//and assign all parts with a mileage
		$this->condition=$userConditionSelection;
			switch($this->condition) {
				case "salvage":
					salvageCondition();
					break;
				case "hooptie":
					hooptieCondition();
					break;
				case "beater":
					beaterCondition();
					break;
				case "drives":
					drivesCondition();
					break;
			}
	}
};
class NinetyNineFBody extends NinetyEightFBody {};
class TwoThousandFBody extends NinetyEightFBody {};
class TwoThousandOneFBody extends NinetyEightFBody {};
class TwoThousandTwoFBody extends NinetyEightFBody {};

//$cam=new NinetyEightFBodyCam;
//echo $cam->countAll();
//$output=$cam->outputArray();
//echo arrayToString($output);
//echo $output;
//echo $cam->outputArray();
?>