<?php
//Include required files
include_once 'required-functions.php';

//Get arrays needed for comparison - remove in working version
include 'process-double-inputs.php';

//Find matches between HPO terms
$foundboth = array();
foreach ($patienthpos as $patientkey=>$searchterm)
  {
  $genekey = array_search($searchterm,$genehpos);
  if ($genekey != false)
    {
    //Move the HPO term to the found in both array
    unset($patienthpos[$patientkey]);
    unset($genehpos[$genekey]);
    array_push($foundboth,$searchterm);
    }
  }
?>
