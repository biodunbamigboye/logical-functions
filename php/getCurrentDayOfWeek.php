<?php

function getCurrentDayOfWeek(bool $responseInWords = false): string|int
{
    $dayOfWeek = date('w');
    $dayOfWeek = $dayOfWeek == 0 ? 7 : $dayOfWeek;
    $daysInWord = [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday'
    ];

    return $responseInWords ? $daysInWord[$dayOfWeek] : $dayOfWeek;
}