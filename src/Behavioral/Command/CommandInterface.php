<?php


namespace Patterns\Behavioral\Command;

/**
 * Interface CommandInterface
 *
 * @package Patterns\Behavioral\Command
 */
interface CommandInterface
{
    public function execute(): void;
}