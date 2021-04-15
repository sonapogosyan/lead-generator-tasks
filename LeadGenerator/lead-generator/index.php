<?php

require 'vendor/autoload.php';

use LeadGenerator\Generator;
use LeadGenerator\Lead;

$generator = new Generator();

$generator->generateLeads(10000, function (Lead $lead) {
    $cmd = 'php handling.php "' . addslashes(json_encode($lead)) . '"';
    exec("bash -c 'exec nohup setsid ".$cmd." > /dev/null 2>&1 &'");
});