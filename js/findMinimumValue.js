const findMinimumNumber = arrayOfNumbers => {
        let minNumber = Number.MAX_VALUE;
        for (let num of arrayOfNumbers)
            if (num < minNumber) minNumber = num;
        return minNumber;
    }
    //-- Usage
findMinimumNumber([1, 5, 7, 10, 12, 5, 23, 29, 22, 20, 18, 7])
    // returns 1
    /*
    Author : Biodun Bamigboye
    This function recieves an array of numbers and returns 
    the Lowest of all the Numbers

    */