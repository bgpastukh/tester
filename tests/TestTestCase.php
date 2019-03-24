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
    public function testTemplateMethod(): void
    {
        $test = new WasRun('testMethod');
        $test->run();
        echo assert($test->log === 'setUp testMethod tearDown ');
    }

    public function testResult(): void
    {
        $test = new WasRun('testmethod');
        $result = $test->run();
        echo assert($result->summary() === '1 run, 0 failed');
    }
}

// consider auto running tests
$testSetUp = new TestTestCase();
$testSetUp->testTemplateMethod();

$testSetUp = new TestTestCase();
$testSetUp->testResult();
