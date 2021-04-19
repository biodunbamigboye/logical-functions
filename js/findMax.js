const findMaximumNumber = arrayOfNumbers => {
        let maximumNumber = Number.NEGATIVE_INFINITY;
        for (let num of arrayOfNumbers)
            if (num > maximumNumber) maximumNumber = num;
        return maximumNumber;
    }
    //-- Usage
findMaximumNumber([1, 5, 7, 10, 12, -5, 23, 29, 22, 20, 18, 7])
    // returns 29
    /*
    Author : Biodun Bamigboye
    This function recieves an array of numbers and returns 
    the Highest of all the Numbers

    */