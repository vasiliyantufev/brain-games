<?php

namespace Games\Progression;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const SIZE_PROGRESSION = 10;
const DESCRIPTION = 'What number is missing in the progression?';

function game()
{
    $game = function () {

        $start = rand(MIN_NUMBER, MAX_NUMBER);
        $step = rand(MIN_NUMBER, MAX_NUMBER);

        $progression = progression($start, $step);
        $position = array_rand($progression);

        $answer = $progression[$position];
        $progression[$position] = '..';

        $question = implode(" ", $progression);

        return [$question, strval($answer)];
    };

    run(DESCRIPTION, $game);
}

function progression($start, $step, $arrayProgression = []): array
{
    $arrayProgression[0] = $start;
    for ($i = 1; $i < SIZE_PROGRESSION; $i++) {
        $arrayProgression[$i] = $arrayProgression[$i - 1] + $step;
    }
    return $arrayProgression;
}
