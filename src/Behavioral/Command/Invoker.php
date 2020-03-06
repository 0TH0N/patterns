<?php


namespace Patterns\Behavioral\Command;


class Invoker
{
    /** @var CommandInterface */
    private $onStart;

    /** @var CommandInterface */
    private $onFinish;

    /**
     * @param CommandInterface $onStart
     *
     * @return Invoker
     */
    public function setOnStart(CommandInterface $onStart): Invoker
    {
        $this->onStart = $onStart;
        return $this;
    }

    /**
     * @param CommandInterface $onFinish
     *
     * @return Invoker
     */
    public function setOnFinish(CommandInterface $onFinish): Invoker
    {
        $this->onFinish = $onFinish;
        return $this;
    }

    public function doSomethingImportant(): void
    {
        echo "Invoker: точно не знаю кто, возможно что-то будет делать до моей основной работы.\n";

        if ($this->onStart instanceof CommandInterface) {
            $this->onStart->execute();
        }

        echo "Invoker: сейчас я делаю свою мегаважную работу!\n";

        echo "Invoker: точно не знаю кто, возможно что-то будет делать после моей основной работы.\n";

        if ($this->onFinish instanceof CommandInterface) {
            $this->onFinish->execute();
        }
    }
}