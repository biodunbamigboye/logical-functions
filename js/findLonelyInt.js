const LonelyInteger = (a) => {
        let result = 0;
        for (const number of a) {
            result ^= number;
        }
        return result;
    }
    /*
    Author : Boluwaji Akinsefunmi(@Iammastercraft)
    Problem Statement : You will be given an array of integers.
     All of the integers except one occur twice. That one is unique in the
    array.
    Powered by xOR Bitwise logic
    Given an array of integers, find and print the unique element.
    Note that this problem is from hackerrank.com

    */