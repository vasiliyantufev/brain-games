<?php

namespace Games\Gcd;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;

function game()
{
    $game = function () {
        $firstNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $secondNumber = rand(MIN_NUMBER, MAX_NUMBER);

        $question = "{$firstNumber} {$secondNumber}";
        $gcd = gcd($firstNumber, $secondNumber);

        return [$question, strval($gcd)];
    };

    run($game);
}

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}
