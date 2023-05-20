console.log('hi');

const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (event) => {
    let messages = [];
    if (firstName.value === '' || firstName.value === null) {
        messages.push('First name is required.');
    }

    if (messages.length > 0) {
        event.preventDefault();
        errorElement.innerText = messages.join(', ');
    }
});

// function isInputFocused(inputElement) {
//     return inputElement === document.activeElement;
// }

// firstName.addEventListener("change", () => {
//     console.log(firstName.value);
//     if (firstName.value === '')
//         console.log('Input is empty.');
//     else
//         console.log('Input is not empty.');
// });