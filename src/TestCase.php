<?php declare(strict_types=1);


namespace App;

/**
 * Class TestCase
 * @package App
 */
class TestCase
{
    /**
     * @var string
     */
    private $name;

    /**
     * TestCase constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): TestResult
    {
        $this->setUp();
        $result = new TestResult();
        $result->testStarted();
        $method = $this->name;
        $this->$method();
        $this->tearDown();

        return $result;
    }

    public function setUp(): void
    {

    }

    public function tearDown(): void
    {

    }
}
