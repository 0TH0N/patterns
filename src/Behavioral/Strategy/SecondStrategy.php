<?php


namespace Patterns\Behavioral\Strategy;


class SecondStrategy implements StrategyInterface
{
    public function handle()
    {
        return "Start second strategy!\n";
    }
}