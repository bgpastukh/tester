<?php declare(strict_types=1);

require_once __DIR__ . '/../src/WasRun.php';

$test = new App\WasRun('testMethod');
echo (int)$test->wasRun;
$test->run();
echo (int)$test->wasRun;

