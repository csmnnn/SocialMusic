const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const form = document.getElementById('form');

const errorName = document.getElementById('error-name');
const errorUsername = document.getElementById('error-username');
const errorEmail = document.getElementById('error-email');
const errorPassword = document.getElementById('error-password');

const regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

function checkName() {
    if (firstName.value === '' || lastName.value === '') {
        errorName.style.visibility = "visible";
        return false;
    } else {
        errorName.style.visibility = "hidden";
        return true;
    }
}

function checkUsername() {
    if (username.value === '' || username.value === null) {
        errorUsername.style.visibility = "visible";
        return false;
    } else {
        errorUsername.style.visibility = "hidden";
        return true;
    }
}

function checkEmail() {
    var match = email.value.toLowerCase().match(regex);
    if (email.value === '' || email.value === null) {
        errorEmail.innerHTML = "Enter your email";
        errorEmail.style.visibility = "visible";
        return false;
    }
    if (!match) {
        errorEmail.innerHTML = "Enter a valid email";
        errorEmail.style.visibility = "visible";
        return false;
    } else {
        errorEmail.style.visibility = "hidden";
        return true;
    }
}

function checkPassword() {
    if (password.value === '' || password.value === null) {
        errorPassword.style.visibility = "visible";
        return false;
    } else {
        errorPassword.style.visibility = "hidden";
        return true;
    }
}

form.addEventListener('submit', (event) => {
    if (!checkName())
        event.preventDefault();

    if (!checkUsername())
        event.preventDefault();

    if (!checkEmail())
        event.preventDefault();

    if (!checkPassword())
        event.preventDefault();
});
