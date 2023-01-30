<?php 

function getNthFutureDate(int $daysAhead = 0): string
{
    if($daysAhead < 0){
        throw new InvalidArgumentException("Days ahead must be a positive integer");
    }

    $date = new DateTime("now");

    if($daysAhead ==365){
        return $date->format('Y-m-d');
    }

    $date->add(new DateInterval("P{$daysAhead}D"));
    
        return $date->format('Y-m-d');
    
}
