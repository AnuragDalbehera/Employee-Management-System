const username = document.getElementById("username");
const email = document.getElementById("email");
const emailError = document.getElementById("emailError");
const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirmpassword");
const passwordError = document.getElementById("passwordError");
const form = document.getElementById("signupForm");

function validateUsername() {

    const usernamePattern = /^[A-Za-z. ]+$/;

    if (!usernamePattern.test(username.value)) {
        return false;
    }

    return true;
}


function validateEmail() {
    const emailPattern = /^[A-Za-z0-9.]+@gmail\.com$/ ;
    if (!emailPattern.test(email.value)) {
        emailError.classList.add("show");
        return false;
    }
    else {
        emailError.classList.remove("show");
        return true;
    }
}


function validatePassword () {
    if (confirmpassword.value !== "" && confirmpassword.value !== password.value) {
        passwordError.classList.add("show");
        return false;
    }
    else {
        passwordError.classList.remove("show");
        return true;
    }
}
