<?php


namespace Patterns\Behavioral\Command;


/**
 * Class Receiver
 *
 * @package Patterns\Behavioral\Command
 */
class Receiver
{
    /**
     * @param string $inner
     */
    public function doSomething(string $inner)
    {
        echo "Receiver: результат моей работы: {$inner}\n";
    }

    public function doSomethingElse(string $inner)
    {
        echo "Receiver: результат моей другой работы: {$inner}\n";
    }
}