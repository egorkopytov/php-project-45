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

