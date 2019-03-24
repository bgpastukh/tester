<?php declare(strict_types=1);


namespace App;


/**
 * Class TestResult
 * @package App
 */
class TestResult
{
    private $runCount = 0;

    public function testStarted(): void
    {
        $this->runCount++;
    }

    public function summary(): string
    {
        return sprintf('%d run, 0 failed', $this->runCount);
    }
}
