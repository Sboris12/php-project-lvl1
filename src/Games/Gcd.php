<?php

namespace src\Games\Gcd;

use function cli\line;

use function src\Cli\hellow;
use function src\Engine\engine;

function start()
{
    $name = hellow();

    line('Find the greatest common divisor of given numbers.');

    $game = 'src\\Games\\Gcd\\gcd';

    engine($game, $name);
}

function gcd()
{
    $num1 = mt_rand(1, 100);
    $num2 = mt_rand(1, 100);
    
    $question = "$num1 $num2";

    $answer = gmp_gcd($num1, $num2); 

    return [$question, $answer];
}