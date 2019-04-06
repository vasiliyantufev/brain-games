<?php

namespace Games\Calc;

use function BrainGames\Game\run;

const OPERANDS = ["+", "-", "*"];
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const DESCRIPTION = 'What is the result of the expression?';

function startGame()
{
    $questionAndAnswer = function () {
        $firstNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $secondNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $operand = OPERANDS[array_rand(OPERANDS)];

        $question = "{$firstNumber} {$operand} {$secondNumber}";
        $answer = strval(calc($firstNumber, $operand, $secondNumber));

        return [$question, $answer];
    };

    run(DESCRIPTION, $questionAndAnswer);
}

function calc($firstNumber, $operand, $secondNumber)
{
    $answer = null;
    switch ($operand) {
        case "+":
            $answer = $firstNumber + $secondNumber;
            break;
        case "-":
            $answer = $firstNumber - $secondNumber;
            break;
        case "*":
            $answer = $firstNumber * $secondNumber;
            break;
    }
    return $answer;
}
