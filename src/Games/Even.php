<?php

namespace Games\Even;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function game()
{
    $game = function () {
        $randomNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $rightAnswer = isEven($randomNumber) ? 'yes' : 'no';
        return [$randomNumber, $rightAnswer];
    };

    run(DESCRIPTION, $game);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
