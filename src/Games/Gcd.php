<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function startGame()
{
    $getQuestionAndAnswer = function () {
        $firstNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $secondNumber = rand(MIN_NUMBER, MAX_NUMBER);

        $question = "{$firstNumber} {$secondNumber}";
        $answer = strval(gcd($firstNumber, $secondNumber));

        return [$question, $answer];
    };

    run(DESCRIPTION, $getQuestionAndAnswer);
}

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}
