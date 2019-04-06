<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Game\run;

const OPERANDS = ["+", "-", "*"];
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const DESCRIPTION = 'What is the result of the expression?';

function startGame()
{
    $getQuestionAndAnswer = function () {
        $firstNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $secondNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $operand = OPERANDS[array_rand(OPERANDS)];

        $question = "{$firstNumber} {$operand} {$secondNumber}";
        $answer = strval(calculateAnswer($firstNumber, $operand, $secondNumber));

        return [$question, $answer];
    };

    run(DESCRIPTION, $getQuestionAndAnswer);
}

function calculateAnswer($firstNumber, $operand, $secondNumber): int
{
    switch ($operand) {
        case "+":
            return $firstNumber + $secondNumber;
        case "-":
            return $firstNumber - $secondNumber;
        case "*":
            return $firstNumber * $secondNumber;
    }
}
