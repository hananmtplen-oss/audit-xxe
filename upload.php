<?php
$xml = $_POST['xml'];
$dom = new DOMDocument();
$dom->loadXML($xml);
print_r($dom->saveXML());
?>
