<?php


namespace Patterns\Structural\Facade;


class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1 is ready!\n";
    }

    // ....

    public function operationN(): string
    {
        return "Subsystem1: Go!\n";
    }
}