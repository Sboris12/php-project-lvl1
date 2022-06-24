<?php

namespace src\Games\Progression;

use function cli\line;

use function src\Cli\hellow;
use function src\Engine\engine;

function start()
{
    $name = hellow();

    line('What number is missing in the progression?');

    $game = 'src\\Games\\Progression\\progression';

    engine($game, $name);
}

function progression()
{
    $startNumber = mt_rand(1, 10);
    $progressionNumber = mt_rand(1, 10);
    
    $progression[] = $startNumber + $progressionNumber;

    $i = 1;
    while ($i <= 9) {
        $b = $i - 1;
        $progression[$i] = $progression[$b] + $progressionNumber;
        $i ++;
    }

    $exitNumber = mt_rand(0, 9);

    $answer = $progression[$exitNumber];
    $progression[$exitNumber] = '..'; 

    $question = implode(' ', $progression);
    return [$question, $answer];
}
