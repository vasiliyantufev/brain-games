<?php

namespace Games\Progression;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const SIZE_PROGRESSION = 10;
const DESCRIPTION = 'What number is missing in the progression?';

function startGame()
{
    $questionAndAnswer = function () {

        $start = rand(MIN_NUMBER, MAX_NUMBER);
        $step = rand(MIN_NUMBER, MAX_NUMBER);

        $progression = getProgression($start, $step);
        $position = array_rand($progression);

        $answer = strval($progression[$position]);
        $progression[$position] = '..';

        $question = implode(" ", $progression);

        return [$question, $answer];
    };

    run(DESCRIPTION, $questionAndAnswer);
}

function getProgression($start, $step): array
{
    for ($i = 1, $progression[] = $start; $i < SIZE_PROGRESSION; $i++) {
        $progression[$i] = $progression[$i - 1] + $step;
    }
    return $progression;
}
