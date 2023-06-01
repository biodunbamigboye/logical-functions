const isPrimeNumber = (number) => {
        if (typeof number !== 'number' || number <= 1) return false;
        for (let i = 2; i <= Math.floor(Math.sqrt(number)); i++) {
            if (number % i === 0) return false;
        }
        return true;
    }
    /*
    Author : wasp ix

    Contributor : Biodun Bamigboye

    Definition : This function receives a  Number as argument and returns
    true or false if its a prime number

    */
