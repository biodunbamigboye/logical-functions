<?php

function getNthDayOfYearByDate(int $year, int $month, string $day): int
{
    $date = new DateTime();
    $date->setTime(0, 0, 0);
    $date->setDate($year, $month, $day);
    $startDate = (new DateTime())->setTime(0, 0, 0)->setDate($year, 1, 1);
    $interval = $date->diff($startDate);
    return $interval->days + 1;
}
