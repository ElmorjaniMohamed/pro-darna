const form = document.getElementById('form');
const username = document.getElementById('Name');
const email = document.getElementById('Email');
const password = document.getElementById('Password');
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

form.addEventListener('submit', (e) => {
    e.preventDefault();
    if(checkInputs()){
        form.submit();
    };
});

function checkInputs() {
    var success = true;
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
        success = false;
    } else {
        setSuccessFor(username);

    }

    if (emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
        success = false;
    } else if (!isValidEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
        success = false;
    } else {
        setSuccessFor(email);

    }

    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
        success = false;
    } else {
        if (passwordValue.length < 8) {
            setErrorFor(password, 'Password must be at least 8 characters long');
            success = false;
        } else if (!/\d/.test(passwordValue)) {
            setErrorFor(password, 'Password must contain at least one number');
            success = false;
        } else if (!/[a-zA-Z]/.test(passwordValue)) {
            setErrorFor(password, 'Password must contain at least one letter');
            success = false;
        } else if (!/[@$!%*#?&]/.test(passwordValue)) {
            setErrorFor(password, 'Password must contain at least one special character');
            success = false;
        }else {
            setSuccessFor(password);
        }
    }

    return success
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const errorIcon = formControl.querySelector('.fa-circle-exclamation');
    const successIcon = formControl.querySelector('.fa-check-circle');
    const small = formControl.querySelector('small');

    small.classList.remove('hidden');
    small.innerText = message;
    errorIcon.style.display = 'block';
    successIcon.style.display = 'none';
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    const errorIcon = formControl.querySelector('.fa-circle-exclamation');
    const successIcon = formControl.querySelector('.fa-check-circle');
    const small = formControl.querySelector('small');

    small.classList.add('hidden');
    errorIcon.style.display = 'none';
    successIcon.style.display = 'block';
}

function isValidEmail(email) {
    return emailRegex.test(email);
}

function isValidPassword(password) {
    return passwordRegex.test(password);
}
