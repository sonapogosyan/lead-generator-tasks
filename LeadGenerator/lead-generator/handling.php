<?php
require 'vendor/autoload.php';

use LeadGenerator\Lead;
use LeadGenerator\HandlingLead;

$arg = json_decode($argv[1], true);

$lead = new Lead();
$lead->setId($arg['id']);
$lead->setCategoryName($arg['categoryName']);

$handlingLead = new HandlingLead();

$handlingLead->handling($lead);

