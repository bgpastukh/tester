<?php declare(strict_types=1);


namespace App;


/**
 * Class TestResult
 * @package App
 */
class TestResult
{
    private $runCount = 0;
    private $errorCount = 0;

    public function testStarted(): void
    {
        $this->runCount++;
    }

    public function testFailed(): void
    {
        $this->errorCount++;
    }

    public function summary(): string
    {
        return sprintf('%d run, %s failed', $this->runCount, $this->errorCount);
    }
}
