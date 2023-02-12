const addDays = (numberOfDays) => {
  const date = new Date();
  date.setDate(date.getDate() + numberOfDays);
  return date;
}

console.log(addDays(5));