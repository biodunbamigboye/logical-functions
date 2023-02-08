function getNumberOfDaysAwayFromToday($year, $month, $day)
{
    $date = new Date($year, $month - 1, $day);
    $today = new Date();
    $diff = $date - $today;
    $oneDay = 1000 * 60 * 60 * 24;
    $day = Math.floor($diff / $oneDay);
    return $day;
}
