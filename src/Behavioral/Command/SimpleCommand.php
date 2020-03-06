<?php


namespace Patterns\Behavioral\Command;


/**
 * Class SimpleCommand
 *
 * @package Patterns\Behavioral\Command
 */
class SimpleCommand implements CommandInterface
{
    /**
     * @var string
     */
    private $payload;

    /**
     * SimpleCommand constructor.
     *
     * @param string $payload
     */
    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo "Я проста команда. Могу вывести переданную мне в конструкторе строку: {$this->payload}!\n";
    }
}