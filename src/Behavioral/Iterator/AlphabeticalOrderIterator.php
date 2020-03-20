<?php


namespace Patterns\Behavioral\Iterator;


class AlphabeticalOrderIterator implements \Iterator
{
    /** @var WordsCollection $collection */
    private $collection;
    private $position = 0;
    private $reverse;

    /**
     * AlphabeticalOrderIterator constructor.
     *
     * @param      $collection
     * @param bool $reverse
     */
    public function __construct($collection, bool $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
    }
}