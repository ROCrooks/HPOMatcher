<?php
//---FunctionBreak---
/*Takes a piece of text and standardises the new line format to ensure compatibility between Windows and Android origin input

$text is the text to standardise lines of

Output is an array with standard new lines.*/
//---DocumentationBreak---
function standardisenewlines($text)
	{
	//Replace carriage returns with new lines
	$text = str_replace("\r","\n",$text);
	$replaced = 1;

	//Replace all double new lines and replace with singles until no more new lines are found
	while ($replaced > 0)
		{
		$text = str_replace("\n\n","\n",$text,$replaced);
		}

	//Remove new line tags from start and end if found
	if (substr($text,0,2) == "\n")
		$text = substr($text,2);
	if (substr($text,-2) == "\n")
		$text = substr($text,0,-2);

	Return $text;
	}
//---FunctionBreak---
?>
