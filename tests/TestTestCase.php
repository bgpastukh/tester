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
    /** @var WasRun */
    private $test;

    public function setUp(): void
    {
        $this->test = new WasRun('testMethod');
    }

    public function testRunning(): void
    {
        $this->test->run();
        echo assert($this->test->wasRun);
    }

    public function testSetUp(): void
    {
        $this->test->run();
        echo assert($this->test->wasSetUp);
    }
}

// consider auto running tests
$testRunning = new TestTestCase();
$testRunning->setUp();
$testRunning->testRunning();

$testSetUp = new TestTestCase();
$testSetUp->setUp();
$testSetUp->testRunning();
