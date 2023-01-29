<?php

function getCurrentWeekOfYear(): int 
{
    $date = new DateTime();
    return (int)$date->format('W');
}