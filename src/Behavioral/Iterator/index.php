<?php


namespace Patterns\Behavioral\Iterator;


require_once __DIR__."/../../../vendor/autoload.php";

$collection = new WordsCollection();
$collection->addItem('First');
$collection->addItem('Second');
$collection->addItem('Third');

try {
    $iterator = $collection->getIterator();
    echo "Straight iterator:\n";
    foreach ($iterator as $item) {
        echo "{$item}\n";
    }

    $reverseIterator = $collection->getReverseIterator();
    echo "Reverse Iterator:\n";
    foreach ($reverseIterator as $item) {
        echo "{$item}\n";
    }
} catch (\Exception $exception) {
    echo "Something went wrong!\n";
}
