<?php


namespace Patterns\Behavioral\Command;


require_once __DIR__."/../../../vendor/autoload.php";

$invoker = new Invoker();

$simpleCommand = new SimpleCommand('Привет!');
$invoker->setOnStart($simpleCommand);

$receiver = new Receiver();
$complexCommand = new ComplexCommand($receiver, 'Сложный привет!', 'Сложное пока!');
$invoker->setOnFinish($complexCommand);

$invoker->doSomethingImportant();