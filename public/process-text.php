<?php
//Define source of text and separator
if (isset($text) == false)
  $text = file_get_contents("hpo-terms.txt");
if (isset($separator) == false)
  $separator = " - ";
?>
