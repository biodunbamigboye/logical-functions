<?php

function getNumberOfDaysAwayFromToday(int $year, int $month, string $day): int 
{
    $date = new DateTime();
    $date->setTime(0, 0, 0);
    $date->setDate($year, $month, $day);
    $today = (new DateTime())->setTime(0, 0, 0);
    $interval = $date->diff($today);
    return $interval->days;
}

echo getNumberOfDaysAwayFromToday(2020, 12, 31);
