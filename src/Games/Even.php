<?php

namespace src\Games\Even;

use function cli\line;

use function src\Cli\hellow;
use function src\Engine\engine;

function start()
{
    $name = hellow();

    line('Answer "yes" if the number is even, otherwise answer "no".');

    $game = 'src\\Games\\Even\\even';

    engine($game, $name);
}

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
