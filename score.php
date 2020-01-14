<?php
$myfile = fopen("listfile.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
${"var" . "Street"} = "N/A";
${"var" . "Restaurants"} = "N/A";
${"var" . "Coffee"} = "N/A";
${"var" . "WalkScore"} = "N/A";
${"var" . "TransitScore"} = "N/A";
${"var" . "BikeScore"} = "N/A";
${"var" . "HeatingType"} = "N/A";
${"var" . "HeatingSystem"} = "N/A";
${"var" . "PhyiscalCondition"} = "N/A";
${"var" . "BuildingConstructionQuality"} = "N/A";
${"var" . "ExteriorWall"} = "N/A";
${"var" . "BuildingType"} = "N/A";
${"var" . "NofParkingSpaces"} = "N/A";
while(!feof($myfile)) 
{
    $fileext = fgets($myfile);
    $temp = explode(":",$fileext);
    echo $temp[0];
    ${"var" . $temp[0]} = $temp[1];
    #echo $varStreet;
  //if(strpos($temp, 'Restaurants'))
}
fclose($myfile);
?>