<?php declare(strict_types=1);

namespace App\Tests;

use App\WasRun;

require_once __DIR__ . '/../vendor/autoload.php';

class TestWasRun
{
    public function testWasRun(): void
    {
        $test = new WasRun('testMethod');
        echo (int)$test->wasRun;
        $test->run();
        echo (int)$test->wasRun;
    }
}

(new TestWasRun())->testWasRun();

