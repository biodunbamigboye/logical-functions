function getNthDayOfYearByDate($year, $month, $day) {
    let $date = new Date($year, $month - 1, $day);
    let $start = new Date($year, 0, 0);
    let $diff = $date - $start;
    let $oneDay = 1000 * 60 * 60 * 24;
    return Math.floor($diff / $oneDay);
}
