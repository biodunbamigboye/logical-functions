const findFirstNonRepeatingChar = (word) => {
    if (typeof word !== 'string') { return 'ony_string_allowed' }
    let result;
    for (const character of word) {
        if (!(word.replace(character).includes(character))) {
            result = character;
            break;
        }
    }
    return result
}
