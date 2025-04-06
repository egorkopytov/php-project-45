#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;

function Greetings(){
        line('Welcome to the Brain Game!');
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);
}


$rightAnswers = 0;

for ($i = 0; $i < 3; $i++){
    $number = rand(0,15);
    $answer = strtolower($answer);
    $mathSymbols = ["+", "-", "*"];
    $randomIndex = array_rand($mathSymbols);
    $randomMathSymbol = $mathSymbols[$randomIndex];

    print_r ("Question: {$number}\n");
    $answer = prompt("Your answer");

    
}

