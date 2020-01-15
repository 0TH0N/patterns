<?php


namespace Patterns\Behavioral\Strategy;


$firstStrategy = new FirstStrategy();
$context = new Context($firstStrategy);
$context->doSomething();

$secondStrategy = new SecondStrategy();
$context->setStrategy($secondStrategy);
$context->doSomething();

