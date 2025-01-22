<?php

namespace src\Games\Prime;

use function cli\line;

use function src\Cli\hellow;
use function src\Engine\engine;

function start()
{
    $name = hellow();

    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    $game = 'src\\Games\\Prime\\prime';

    engine($game, $name);
}

function prime()
{
    $question = mt_rand(1, 10);

    if (gmp_prob_prime($question) === 2) {
        $answer = 'yes';
    } else {
        $answer = 'no';
    }

    return [$question, $answer];
}
