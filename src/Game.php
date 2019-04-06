<?php

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;
const ROUNDS = 3;

function run($description, callable $game)
{
    line('Welcome to the Brain Game!');
    line($description);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($index = 0; $index < ROUNDS; $index++) {
        [$question, $rightAnswer] = $game();

        line("Question: {$question}");
        $myAnswer = prompt('Your answer');

        if ($myAnswer === $rightAnswer) {
            line('Correct!');
        } else {
            line("{$myAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}");
            line("Let's try again, %s!", $name) ;
            break;
        }
    }
    if ($index === ROUNDS) {
        line("Congratulations! %s", $name);
    }
}
