const getBegenningOfWeekByDate = (year, month, day) => {
    const date = new Date(year, month-1, day);
    const dayOfWeek = date.getDay();
    const diff = date.getDate() - dayOfWeek + (dayOfWeek === 0 ? -6 : 1);
    return new Date(date.setDate(diff));
}
