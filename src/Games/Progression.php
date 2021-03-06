<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 5;
const SIZE_PROGRESSION = 10;
const DESCRIPTION = 'What number is missing in the progression?';

function startGame()
{
    $getQuestionAndAnswer = function () {

        $start = rand(MIN_NUMBER, MAX_NUMBER);
        $step = rand(MIN_NUMBER, MAX_NUMBER);

        $progression = buildProgression($start, $step);
        $hiddenPosition = array_rand($progression);

        $answer = (string)$progression[$hiddenPosition];
        $progression[$hiddenPosition] = '..';

        $question = implode(" ", $progression);

        return [$question, $answer];
    };

    run(DESCRIPTION, $getQuestionAndAnswer);
}

function buildProgression($start, $step): array
{
    for ($i = 0, $progression = []; $i < SIZE_PROGRESSION; $i++) {
        $progression[] = $start + $step * $i;
    }
    return $progression;
}
