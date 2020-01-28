<?php
use Kago\Core\System;

require '../vendor/autoload.php';
require '../src/App/routes.php';

$system = new System();
$system->boot();