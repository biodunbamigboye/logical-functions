<?php

function getNthDayOfYear(): int
{
    $date = new DateTime();
    $date->setTime(0, 0, 0);
    $date->setDate($date->format('Y'), 1, 1);
    $interval = $date->diff(new DateTime());
    return $interval->days + 1;
}
