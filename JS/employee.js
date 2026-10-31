function validateForm() {

    var employeeId = document.getElementById("employee_id").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;

    if (employeeId == "") {
        alert("Please enter Employee ID");
        return false;
    }

    if (name == "") {
        alert("Please enter employee name");
        return false;
    }

    if (email == "") {
        alert("Please enter email");
        return false;
    }

    return true;
}