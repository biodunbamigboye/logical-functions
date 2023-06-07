function getCurrentMonthOfYear(responseInWords = false) {
    const d = new Date();
    const month = d.getMonth() + 1;

    let monthNames = [
        "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]

    return responseInWords ? monthNames[month-1] : month;
}
