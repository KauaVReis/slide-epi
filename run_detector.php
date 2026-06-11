<?php
// Execute python detector and log output
$cmd = 'python IA_apresentacao\detector_web.py > detector_log.txt 2>&1';
pclose(popen('start /B ' . $cmd, "r"));
header('Content-Type: application/json');
echo json_encode(["status" => "success"]);
?>
