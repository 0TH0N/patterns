<?php


namespace Patterns\Behavioral\Observer;


use SplSubject;

class ObserverA implements \SplObserver
{
    /**
     * Метод получения уведомлений от издателя
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        if ($subject->state >= 0 && $subject->state < 8) {
            echo "Observer A is reacting\n";
        }
    }
}