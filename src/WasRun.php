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

    /** @var string */
    public $log;

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
        $this->log .= 'testMethod ';
        $this->tearDown();
        $this->log .= 'tearDown ';
    }

    /**
     * @throws \Exception
     */
    public function testBrokenMethod(): void
    {
        throw new \Exception();
    }

    public function setUp(): void
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
        $this->log = 'setUp ';
    }
}
