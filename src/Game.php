<?php

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;
use function Games\Even\game;
const ROUNDS = 3;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($index = 0; $index < ROUNDS; $index++) {
        $randomNumber = rand(MIN_NUMBER, MAX_NUMBER);
        line('Question: ' . $randomNumber);
        $myAnswer = prompt('Your answer');

        [$check, $rightAnswer] = game($randomNumber, $myAnswer);

        if ($check) {
            line('Correct!');
        } else {
            line($myAnswer . ' is wrong answer ;(. Correct answer was ' . $rightAnswer);
            line("Let's try again, " . $name . "!") ;
            break;
        }
    }
    if ($index === ROUNDS) {
        line('Congratulations! ' . $name);
    }
}
