#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';


use function cli\line;
use function cli\prompt;

function greetings() 
{
    echo "Welcome to the Brain Games!\n";
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    //return $name;
}