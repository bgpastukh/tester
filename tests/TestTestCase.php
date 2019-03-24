<?php declare(strict_types=1);


namespace App\Tests;

use App\TestCase;
use App\TestResult;
use App\TestSuite;
use App\WasRun;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Class TestTestCase
 * @package App\Tests
 */
class TestTestCase extends TestCase
{
    /** @var TestResult */
    private $result;

    public function setUp(): void
    {
        $this->result = new TestResult();
    }

    public function testTemplateMethod(): void
    {
        $test = new WasRun('testMethod');
        $test->run($this->result);
        assert($test->log === 'setUp testMethod tearDown ');
    }

    public function testResult(): void
    {
        $test = new WasRun('testMethod');
        $test->run($this->result);
        assert($this->result->summary() === '1 run, 0 failed');
    }

    public function testFailedResult(): void
    {
        $test = new WasRun('testBrokenMethod');
        $test->run($this->result);
        assert($this->result->summary() === '1 run, 1 failed');
    }

    public function testFailedResultFormatting(): void
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();
        assert($result->summary() === '1 run, 1 failed');
    }

    public function testSuite(): void
    {
        $suite = new TestSuite();
        $suite->add(new WasRun('testMethod'));
        $suite->add(new WasRun('testBrokenMethod'));
        $result = new TestResult();
        $suite->run($result);
        assert($result->summary() === '2 run, 1 failed');
    }
}

$suite = new TestSuite();
$suite->add(new TestTestCase('testTemplateMethod'));
$suite->add(new TestTestCase('testResult'));
$suite->add(new TestTestCase('testTemplateMethod'));
$suite->add(new TestTestCase('testFailedResult'));
$suite->add(new TestTestCase('testSuite'));
$suite->add(new TestTestCase('testFailedResultFormatting'));

$result = new TestResult();
$suite->run($result);
echo $result->summary();
