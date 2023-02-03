function getCurrentMonthOfYear(responseInWords = false) {
    var d = new Date();
    var month = d.getMonth() + 1;

    let monthNames = [
        "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]

    return responseInWords ? monthNames[month-1] : month;
}
