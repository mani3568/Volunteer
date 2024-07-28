function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Add your authentication logic here

    alert('Login button clicked\nUsername: ' + username + '\nPassword: ' + password);
}

function forgotPassword() {
    alert('Forgot Password link clicked');
}

function signup() {
    var firstName = document.getElementById('firstName').value;
    var middleName = document.getElementById('middleName').value;
    var lastName = document.getElementById('lastName').value;
    var age = document.getElementById('age').value;
    var gender = document.querySelector('input[name="gender"]:checked').value;
    var employer = document.getElementById('employer').checked;

    // Add your sign-up logic here

    alert('Sign Up button clicked\nFirst Name: ' + firstName +
        '\nMiddle Name: ' + middleName + '\nLast Name: ' + lastName +
        '\nAge: ' + age + '\nGender: ' + gender + '\nEmployed: ' + employer);
}
