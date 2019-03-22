<?php declare(strict_types=1);


namespace App;


/**
 * Class WasRun
 * @package App
 */
class WasRun extends TestCase
{
    /**
     * @var bool
     */
    public $wasRun;

    /**
     * @var bool
     */
    public $wasSetUp;

    /**
     * WasRun constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->wasRun = false;
    }

    public function testMethod(): void
    {
        $this->wasRun = true;
    }

    public function setUp(): void
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
    }
}
