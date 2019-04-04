<?php

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;
use function Games\Even\game;
const ROUNDS = 3;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($index = 0; $index < ROUNDS; $index++) {

        [$randomNumber, $rightAnswer] = game();

        line("Question: {$randomNumber}");
        $myAnswer = prompt('Your answer');

        if ($myAnswer === $rightAnswer) {
            line('Correct!');
        } else {
            line('{$myAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}');
            line("Let's try again, %s!", $name) ;
            break;
        }
    }
    if ($index === ROUNDS) {
        line("Congratulations! %s", $name);
    }
}