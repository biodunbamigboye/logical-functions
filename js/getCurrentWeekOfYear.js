function getCurrentWeekOfYear() {
    const date = new Date();
    const firstDay = new Date(date.getFullYear(), 0, 1);
    const pastDaysOfYear = (date - firstDay) / 86400000;

    return Math.ceil((pastDaysOfYear + firstDay.getDay() + 1) / 7);
}
