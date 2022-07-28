<?php

require 'ICommand.php';
require 'RoomLight.php';
require 'LightOnCommand.php';
require 'LightOffCommand.php';
require 'RemoteInvoker.php';

$receiver = new RoomLight();
$onCommand = new LightOnCommand($receiver);
$offCommand = new LightOffCommand($receiver);
$remote = new RemoteInvoker($onCommand, $offCommand);
echo "START WITH LIGHT OFF".PHP_EOL;
echo "TURN ON THE LIGHT".PHP_EOL;

$remote->clickOn();
//var_dump($remote->stack);
//var_dump($receiver).PHP_EOL;
echo $receiver->state ? 'Accesa'.PHP_EOL : 'Spenta'.PHP_EOL;

echo "UNDO clickOn".PHP_EOL;
$remote->undo();
//var_dump($remote->stack);
//var_dump($receiver).PHP_EOL;
echo $receiver->state ? 'Accesa'.PHP_EOL : 'Spenta'.PHP_EOL;

echo "Click OFF".PHP_EOL;
$remote->clickOff();
//var_dump($remote->stack);
//var_dump($receiver).PHP_EOL;
echo $receiver->state ? 'Accesa'.PHP_EOL : 'Spenta'.PHP_EOL;

echo "Click ON".PHP_EOL;
$remote->clickOn();
//var_dump($remote->stack);
//var_dump($receiver).PHP_EOL;
echo $receiver->state ? 'Accesa'.PHP_EOL : 'Spenta'.PHP_EOL;

echo "UNDO clickOn".PHP_EOL;
$remote->undo();
//var_dump($remote->stack);
//var_dump($receiver).PHP_EOL;
echo $receiver->state ? 'Accesa'.PHP_EOL : 'Spenta'.PHP_EOL;

echo "UNDO clickOff".PHP_EOL;
$remote->undo();
//var_dump($remote->stack);
//var_dump($receiver).PHP_EOL;
echo $receiver->state ? 'Accesa'.PHP_EOL : 'Spenta'.PHP_EOL;
//stack empty
$remote->undo();
echo $receiver->state ? 'Accesa'.PHP_EOL : 'Spenta'.PHP_EOL;
