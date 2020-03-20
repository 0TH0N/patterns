<?php


namespace Patterns\Behavioral\Iterator;


use Exception;
use Traversable;

class WordsCollection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator()
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}