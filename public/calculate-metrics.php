<?php
//Calculation scripts for metrics
function percenthpos($alone,$overlap)
  {
  $total = $alone+$overlap;
  $fraction = $overlap/$total;
  $percent = $fraction*100;
  Return $percent;
  }

function texthpos($alone,$overlap)
  {
  $total = $alone+$overlap;
  $text = $overlap . "/" . $total;
  Return $text;
  }

//Include required functions
include_once 'required-functions.php';

include 'comparison-engine.php';

//Totals for number in each array
$nofoundboth = count($foundboth);
$nogenehpos = count($genehpos);
$nopatienthpos = count($patienthpos);

$patientoverlappercent = percenthpos($nopatienthpos,$nofoundboth);
$geneoverlappercent = percenthpos($nogenehpos,$nofoundboth);
$patientoverlaptext = texthpos($nopatienthpos,$nofoundboth);
$geneoverlaptext = texthpos($nogenehpos,$nofoundboth);

$smallest = min(array($nofoundboth+$nopatienthpos,$nofoundboth+$nogenehpos));
$overlapcoefficient = $nofoundboth/$smallest;

echo "Percentage of patient HPOs found in gene: " . $patientoverlappercent . " (" . $patientoverlaptext . ")<br>";
echo "Percentage of gene HPOs found in patient: " . $geneoverlappercent . " (" . $geneoverlaptext . ")<br>";
echo "Overlap Coeffient: " . $overlapcoefficient;
?>
