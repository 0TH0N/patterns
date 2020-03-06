<?php


namespace Patterns\Behavioral\Command;


/**
 * Class ComplexCommand
 *
 * @package Patterns\Behavioral\Command
 */
class ComplexCommand implements CommandInterface
{
    /**
     * @var Receiver
     */
    private $receiver;
    /**
     * @var string
     */
    private $a;
    /**
     * @var string
     */
    private $b;

    /**
     * ComplexCommand constructor.
     *
     * @param Receiver $receiver
     * @param string   $a
     * @param string   $b
     */
    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    public function execute(): void
    {
        echo "Я сложная команда. Делаю следующее:\n";
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}