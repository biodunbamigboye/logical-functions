<?php

function getCurrentMonthOfYear(bool $responseInWords = false): string
{
    $date = new DateTime("now");
    return $responseInWords ? $date->format('F') : $date->format('m');
}
