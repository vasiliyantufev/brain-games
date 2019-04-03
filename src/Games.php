<?php

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;
use function Games\IsEven\game;
use function Games\IsEven\isEven;
const ROUNDS = 3;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $index = 0;

    for ( ; $index < ROUNDS; $index++)
    {
        $num = rand(1, 15);
        line('Question: ' . $num);
        $answer = prompt('Your answer');

        [$checkNumber, $rightAnswer] = game($num, $answer);

        if($checkNumber)
        {
            line('Correct!');
        }
        else
        {
            line($answer . ' is wrong answer ;(. Correct answer was ' . $rightAnswer);
            line("Let's try again, " . $name . "!") ;
            break;
        }
    }
    if($index === ROUNDS)
    {
        line('Congratulations! '. $name) ;
    }

}