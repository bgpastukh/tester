<?php declare(strict_types=1);


namespace App\Tests;

use App\WasRun;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Class TestTestCase
 * @package App\Tests
 */
class TestTestCase
{
    public function testRunning(): void
    {
        $test = new WasRun('testMethod');
        echo assert(!$test->wasRun);
        $test->run();
        echo assert($test->wasRun);
    }
}

(new TestTestCase())->testRunning();
