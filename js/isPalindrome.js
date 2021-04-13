const isPalindromeLong = word => {
    let stack = word.split('')
    let rword = '';
    rword = stack.reverse().join("");
    return rword === word
}

const isPalindrome = word => word.toLowerCase().split('').reverse().join("") === word.toLowerCase()

console.log(isPalindrome('raceCAr'))
