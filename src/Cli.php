#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';


use function cli\line;
use function cli\prompt;

    echo "Welcome to the Brain Game!\n";
    echo "May I have your name?\n";
    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
