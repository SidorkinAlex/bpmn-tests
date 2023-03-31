<?php

use ProcessMaker\Nayra\Storage\BpmnDocument;

require_once './vendor/autoload.php';

$bpmnRepository = new BpmnDocument();
$bpmnRepository->load('bpmn-files/test2.bpmn');
$start = $bpmnRepository->getStartEvent('');
var_export($start);
exit;

$process = $bpmnRepository->getProcess('start');
$dataStore = $bpmnRepository->repository->createDataStore();
$instance = $bpmnRepository->engine->createExecutionInstance($process, $dataStore);

$start = $bpmnRepository->getStartEvent('StartEvent');
$start->start($instance);

$this->engine->runToNextState();
$firstTask = $bpmnRepository->getScriptTask('start');
$token = $firstTask->getTokens($instance)->item(0);
var_export($firstTask);
var_export($token);