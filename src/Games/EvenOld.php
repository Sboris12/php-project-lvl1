<?php

namespace src\Games\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    $name = $_SESSION['name'];
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= 3; $i++) {
        $number = mt_rand(1, 100);
        line("Question: %s", $number);
        $numberAnswer = prompt('Your answer:');

        $even = $number % 2;

        if ($even === 0 && $numberAnswer === 'yes') {
            line('Correct!');
        } elseif ($even === 1 && $numberAnswer === 'no') {
            line('Correct!');
        } else {
            return line("'%s' is wrong answer ;(. Correct answer was 'no'" . "\n" .
            "Let's try again, %s!",$numberAnswer, $name);
        }
    }
    line("Congratulations, %s!", $name);
}
