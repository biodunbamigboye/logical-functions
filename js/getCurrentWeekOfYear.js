function getCurrentWeekOfYear() {
    var date = new Date();
    var firstDay = new Date(date.getFullYear(), 0, 1);
    var pastDaysOfYear = (date - firstDay) / 86400000;
    
    return Math.ceil((pastDaysOfYear + firstDay.getDay() + 1) / 7);
}