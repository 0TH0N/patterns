<?php

namespace Patterns\Behavioral\Strategy;

require_once __DIR__."/../../../vendor/autoload.php";

$firstStrategy = new FirstStrategy();
$context = new Context($firstStrategy);
$context->doSomething();

$secondStrategy = new SecondStrategy();
$context->setStrategy($secondStrategy);
$context->doSomething();



