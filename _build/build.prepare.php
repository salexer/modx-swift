<?php

$root = dirname(dirname(__FILE__)) . '/';
require_once $root . '_build/includes/functions.php';

// Clean vendors
$base = $root . 'core/components/swift/vendor/';
cleanPackages($base);