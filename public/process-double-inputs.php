<?php
//Define source of text input
$patienthpos = file_get_contents("patient-hpo.txt");
$genehpos = file_get_contents("gene-hpo.txt");

//Create both patient and gene HPO arrays
$text = $patienthpos;
$separator = " - ";
include 'process-text.php';
$patienthpos = $hpoarray;

$text = $genehpos;
$separator = "\t";
include 'process-text.php';
$genehpos = $hpoarray;
?>
