<?php

namespace Games\Even;

const MIN_NUMBER = 1;
const MAX_NUMBER = 15;

function game()
{
    $randomNumber = rand(MIN_NUMBER, MAX_NUMBER);
    $rightAnswer = isEven($randomNumber) ? 'yes' : 'no';

    return [$randomNumber, $rightAnswer];
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
