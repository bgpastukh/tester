<?php declare(strict_types=1);


namespace App;


/**
 * Class TestSuite
 * @package App
 */
class TestSuite
{
    /** @var array */
    private $tests = [];

    public function add(TestCase $test): void
    {
        $this->tests[] = $test;
    }

    public function run(TestResult $result): TestResult
    {
        $testsToRun = $this->tests;
        /** @var TestCase $test */
        foreach ($testsToRun as $test) {
            $test->run($result);
        }

        return $result;
    }
}
