const  getNumberOfDaysAwayFromToday = (year, month, day) =>
{
    const date = new Date(year, month - 1, day);
    const today = new Date();
    const diff = date - today;
    const oneDay = 1000 * 60 * 60 * 24;

    return Math.floor(diff / oneDay);
}

console.log(getNumberOfDaysAwayFromToday(2023, 10, 2))