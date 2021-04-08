
const obtainInputValuesByClassName = className => {
    let formData = document.querySelectorAll('.' + className)
    return Array.from(formData, (val) => val.value.trim())
}

/*
Author : Biodun Bamigboye
This function recieves a className that is to be added to
multiple input field and outputs an array of its value
*/
