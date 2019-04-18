<?php
//Define source of text input
$patienthpos = "patient-hpo.txt";
$genehpos = "gene-hpo.txt";

//Create both patient and gene HPO arrays
$text = file_get_contents($patienthpos);
$separator = " - ";
include 'process-text.php';
$patienthpos = $hpoarray;

$text = file_get_contents($genehpos);
$separator = "\t";
include 'process-text.php';
$genehpos = $hpoarray;

echo "Patient HPOs:<br>";
print_r($patienthpos);
echo "<br>";
echo "Gene HPOs:<br>";
print_r($genehpos);
?>
