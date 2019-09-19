<?php

require_once __DIR__ . '/../vendor/autoload.php';

use quwahara\HelloLib\Hello;

$hello = new Hello();

echo $hello->helloTo("world");
