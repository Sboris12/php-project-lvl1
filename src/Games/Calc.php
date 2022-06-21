<?php

namespace src\Games\Calc;

use function cli\line;
use function cli\prompt;

use function src\Cli\hellow;
use function src\Engine\engine;

$name = hellow();

line('What is the result of the expression?');

function calc()
{
    $genOperator = mt_rand(1, 3);
    $num1 = mt_rand(1, 100);
    $num2 = mt_rand(1, 100);

    if ($genOperator === 1) {
        $operator = "+";
        $answer = $num1 + $num2;
    } elseif ($genOperator === 2) {
        $operator = "-";
        $answer = $num1 - $num2;
    } else {
        $operator = "*";
        $answer = $num1 * $num2;
    }

    $question = "$num1 $operator $num2";

    return [$question, $answer];

}

$game = 'calc';

engine($game, $name);
