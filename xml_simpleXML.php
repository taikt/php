<?php
$myXMLData = 
"<?xml version='1.0' encoding='UTF-8'?>"
        . "<note>"
        . "<to> Tove </to>"
        . "<from> Tai </from>"
        . "<heading> testing </heading>"
        . "<body> don't forget me </body>"
        . "</note>";

$xml = simplexml_load_string($myXMLData) or die("error: cannot create object");
print_r($xml);

?>

