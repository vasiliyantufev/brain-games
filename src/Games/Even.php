<?php

namespace Games\Even;


function game($num, $answer)
{
    $rightAnswer = isEven($num) ? 'yes' : 'no';
    $check = $answer === $rightAnswer ? true : false;

    return [$check, $rightAnswer];
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
