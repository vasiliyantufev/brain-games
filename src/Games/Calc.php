<?php

namespace Games\Calc;

const OPERANDS = ["+", "-", "*"];
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;

function game()
{
    $firstNumber = rand(MIN_NUMBER, MAX_NUMBER);
    $secondNumber = rand(MIN_NUMBER, MAX_NUMBER);
    $operand = array_rand(OPERANDS);

    return 0;
}
