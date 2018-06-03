<?php
if (version_compare(PHP_VERSION, '5.4.0') < 0)
    throw new Exception('Required PHP version to run this script is 5.4.0, your version: ' . PHP_VERSION . "\n");

require_once __DIR__ . '/vendor/autoload.php';
include(__DIR__ . "/core/OCore.php");

$inputArray = [ [1, 2, [3]], 4 ];
$initArray = new OArray($inputArray);

OArray::display($initArray->getArray());

$tempArray = clone $initArray; //clone won't run constructor, but we don't need it
$tempArray->flatten();
OArray::display($tempArray->getArray());
