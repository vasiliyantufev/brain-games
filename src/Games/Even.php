<?php

namespace Games\Even;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;

function game()
{
    $game = function () {
        $randomNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $rightAnswer = isEven($randomNumber) ? 'yes' : 'no';
        return [$randomNumber, $rightAnswer];
    };
    run($game);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
