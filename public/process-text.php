<?php
include_once 'required-functions.php';

//Define source of text and separator
if (isset($text) == false)
  $text = file_get_contents("hpo-terms.txt");
if (isset($separator) == false)
  $separator = " - ";

//Split text into array with one element per line
$text = standardisenewlines($text);
$text = explode("\n",$text);

$hpoarray = array();

//Process each line into ['HPO'] and ['Term'] array
foreach($text as $line)
  {
  //Remove anything that is before the first H in each line
  while (substr($line,0,1) != "H")
    {
    $line = substr($line,1);
    }

  //Make line into array with HPO and Term
  $line = explode($separator,$line);
  $line['HPO'] = $line[0];
  $line['Term'] = $line[1];
  unset($line[0]);
  unset($line[1]);

  if ($line['HPO'] != "HPO_TERM_ID")
    array_push($hpoarray,$line);
  }
?>
