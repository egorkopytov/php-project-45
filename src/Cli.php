<?php

//require __DIR__ . '/../vendor/autoload.php';

function greetUser(): void
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";
    $name = ((string)trim(fgets(STDIN)));
    echo "Hello, {$name}!\n";
}
