<?php


namespace Patterns\Behavioral\Strategy;


class FirstStrategy implements StrategyInterface
{
    public function handle()
    {
        return "Start first strategy!\n";
    }
}