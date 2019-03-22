<?php declare(strict_types=1);


namespace App;


/**
 * Class WasRun
 * @package App
 */
class WasRun
{
    /**
     * @var bool
     */
    public $wasRun;

    /**
     * @var string
     */
    private $name;

    /**
     * WasRun constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->wasRun = false;
        $this->name = $name;
    }

    public function testMethod(): void
    {
        $this->wasRun = true;
    }

    public function run(): void
    {
        $this->testMethod();
    }
}
