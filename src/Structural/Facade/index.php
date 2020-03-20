<?php


namespace Patterns\Structural\Facade;


require_once __DIR__."/../../../vendor/autoload.php";

$facade1 = new Facade();
echo $facade1->operate();

$subsystem1 = new Subsystem1();
$facade2 = new Facade($subsystem1);
echo $facade2->operate();

$subsystem2 = new Subsystem2();
$facade3 = new Facade($subsystem1, $subsystem2);
echo $facade3->operate();
