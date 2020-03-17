<?php


namespace Patterns\Behavioral\Observer;


use SplObserver;

class Subject implements \SplSubject
{
    public $state;

    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * Подпись на уведомления
     *
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
        echo "Observer attached\n";
    }

    /**
     * Отписка от уведомлений
     *
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
        echo "Observer detached\n";
    }

    /**
     * Метод уведомления активных подписчиков
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
        echo "Observers notified\n";
    }

    /**
     * Некая бизнес-логика
     */
    public function someBusinessLogic()
    {
        echo "Start business logis!\n";
        $this->state = rand(0, 10);

        echo "My state changed to: {$this->state}\n";
        $this->notify();
    }
}