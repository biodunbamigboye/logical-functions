function getNthDayOfYear() {
    const date = new Date();
    const start = new Date(date.getFullYear(), 0, 0);
    const diff = date - start;
    const oneDay = 1000 * 60 * 60 * 24;
    return Math.floor(diff / oneDay);
}

console.log(getNthDayOfYear());
