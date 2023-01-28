
function getCurrentDayOfWeek(responseInWord = false)
{
    let dayOfWeek = new Date().getDay();
        dayOfWeek = dayOfWeek === 0 ? 7 : dayOfWeek;

    let daysOfWeekInWord = {
        1: 'Monday',
        2: 'Tuesday',
        3: 'Wednesday',
        4: 'Thursday',
        5: 'Friday',
        6: 'Saturday',
        7: 'Sunday'
    };

    return responseInWord ? daysOfWeekInWord[dayOfWeek] : dayOfWeek;
}
