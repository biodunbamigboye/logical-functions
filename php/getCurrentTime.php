<?php
function getCurrentTimeWithZone(string $timeZone = null): string
{
    if ($timeZone) {
        $timeZone = new DateTimeZone($timeZone);
    }

    $date = new DateTime("now", $timeZone);

    return $date->format('Y-m-d H:i:s');
}

var_dump(date_default_timezone_get());
