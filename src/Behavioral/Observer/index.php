<?php


namespace Patterns\Behavioral\Observer;


require_once __DIR__."/../../../vendor/autoload.php";

$subject = new Subject();

$observerA = new ObserverA();
$subject->attach($observerA);

$observerB = new ObserverB();
$subject->attach($observerB);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($observerB);

$subject->someBusinessLogic();

