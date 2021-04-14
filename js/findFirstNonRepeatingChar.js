const findFirstNonRepeatingChar = (word) => {
    if (typeof word !== 'string') { return 'ony_string_allowed' }
    let arr = word.split('');
    for (let i = 0; i < arr.length; i++) {
        let count = 0;
        let data = arr[i];

        for (let inner = 0; inner < arr.length; inner++) {
            let dataInner = arr[inner]
            if (dataInner == data) { count += 1 }

        }

        console.log(count)
        if (count == 1) {
            return data
        }
    }
}