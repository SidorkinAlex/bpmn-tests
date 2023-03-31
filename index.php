<?php

use PHPMentors\Workflower\Definition\Bpmn2Reader;

require_once './vendor/autoload.php';

$reader = new Bpmn2Reader();
$file = file_get_contents('bpmn-files/test2.bpmn');
$workflow = $reader->read($file);
var_dump($workflow);