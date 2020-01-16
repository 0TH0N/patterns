<?php


namespace Patterns\Behavioral\Strategy;


class Context
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param StrategyInterface $strategy
     */
    public function setStrategy(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function doSomething()
    {
        echo $this->strategy->handle();
    }
}