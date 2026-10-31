const email = document.getElementById("email");
const emailError = document.getElementById("emailError");


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
