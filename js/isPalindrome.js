let isPalindrome = word => {
    let stack = word.split('')
    let rword = '';
    rword = stack.reverse().join("");
    return rword === word
}

let isPalindrome2 = word => word.toLowerCase().split('').reverse().join("") === word.toLowerCase()

console.log(isPalindrome2('raceCAr'))