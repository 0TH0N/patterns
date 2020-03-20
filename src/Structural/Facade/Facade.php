<?php


namespace Patterns\Structural\Facade;


class Facade
{
    protected $subsystem1;
    protected $subsystem2;

    /**
     * Facade constructor.
     *
     * @param $subsystem1
     * @param $subsystem2
     */
    public function __construct($subsystem1 = null, $subsystem2 = null)
    {
        $this->subsystem1 = $subsystem1;
        $this->subsystem2 = $subsystem2;
    }

    public function operate(): string
    {
        $result = "Facade initalizes subsysmtems:\n";
        $result .= isset($this->subsystem1) ? $this->subsystem1->operation1() : '';
        $result .= isset($this->subsystem2) ? $this->subsystem2->operation1() : '';
        $result .= "Facade start to perform action:\n";
        $result .= isset($this->subsystem1) ? $this->subsystem1->operationN() : '';
        $result .= isset($this->subsystem2) ? $this->subsystem2->operationZ() : '';

        return $result;
    }
}