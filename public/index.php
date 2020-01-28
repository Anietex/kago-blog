<?php
use Kago\Core\System;

require '../vendor/autoload.php';
require '../src/App/routes.php';
require '../src/Core/global-helpers.php';

$system = new System();
$system->boot();