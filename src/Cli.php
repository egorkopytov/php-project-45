<?php

function greetUser(): void
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $input = fgets(STDIN);
    $name = 'Guest';
    if ($input !== false) {
        $name = trim($input);
    }

    echo "Hello, {$name}!\n";
}
