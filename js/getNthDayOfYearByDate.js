function getNthDayOfYearByDate($year, $month, $day)
{
    $date = new Date($year, $month - 1, $day);
    $start = new Date($year, 0, 0);
    $diff = $date - $start;
    $oneDay = 1000 * 60 * 60 * 24;
    $day = Math.floor($diff / $oneDay);
    return $day;
}
