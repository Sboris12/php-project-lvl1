<?php

namespace src\Games\Even;

use function cli\line;
use function cli\prompt;

use function src\Cli\hellow;
use function src\Engine\engine;

$name = hellow();

line('Answer "yes" if the number is even, otherwise answer "no".');

function even()
{
    $question = mt_rand(1, 100);
    $even = $question % 2;

    if ($even === 0) {
        $answer = 'yes';
    } else {
        $answer = 'no';
        }
        return [$question, $answer];
}

$game = 'even';

engine($game, $name);


