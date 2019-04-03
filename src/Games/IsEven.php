<?php

namespace Games\IsEven;


function game($num, $answer)
{
    $answerChk = isEven($num) ? 'yes' : 'no';

    $checkNumber = $answer === $answerChk ? true : false;
    $rightAnswer = getAnswer($num);

    return [$checkNumber, $rightAnswer];
}

function isEven(int $number)
{
    return $number % 2 === 0;
}

function getAnswer(int $number)
{
    return isEven($number) ? 'yes' : 'no';
}