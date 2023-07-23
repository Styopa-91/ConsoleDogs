<?php

use Dogs\Index;

$loader = require 'vendor/autoload.php';
$loader->add('Dogs\\', __DIR__ . '/src/');

Index::workWithConsole();