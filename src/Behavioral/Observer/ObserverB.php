<?php


namespace Patterns\Behavioral\Observer;


use SplSubject;

class ObserverB implements \SplObserver
{
    /**
     * Метод получения уведомлений от издателя
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        if ($subject->state > 3 && $subject->state <= 10) {
            echo "Observer B is reacting\n";
        }
    }
}