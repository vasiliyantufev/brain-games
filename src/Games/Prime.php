<?php

namespace Games\Prime;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function startGame()
{
    $getQuestionAndAnswer = function () {
        $question = rand(MIN_NUMBER, MAX_NUMBER);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    run(DESCRIPTION, $getQuestionAndAnswer);
}

function isPrime(int $number): bool
{
    if ($number == 1) {
        return false;
    }
    for ($d = 2; $d * $d <= $number; $d++) {
        if ($number % $d == 0) {
            return false;
        }
    }
    return true;
}
