<?php

namespace src\Engine;

use function cli\line;
use function cli\prompt;

use function src\Games\Even\even;

function engine($game, $name)
{
    for ($i = 1; $i <= 3; $i++) {

        $result = $game();
        $question = $result[0];
        $answer = $result[1];
        

        line("Question: %s", $question);
        $userAnswer = prompt('Your answer:');

        if ($userAnswer === $answer) {
            line('Correct!');
        } else {
            return line("'%s' is wrong answer ;(. Correct answer was '%s'" . "\n" .
            "Let's try again, %s!", $userAnswer, $answer, $name);
        }
    }

    line("Congratulations, %s!", $name);
}
