<?php

function greetUser(): void
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $input = fgets(STDIN);
    if ($input === false) {
    } else {
        $name = trim($input);
    }

    echo "Hello, {$name}!\n";
}
