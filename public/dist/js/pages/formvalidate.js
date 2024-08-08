function validateForm() {
    // Clear previous errors
    document.getElementById('nameError').textContent = '';
    document.getElementById('emailError').textContent = '';

    // Get form elements
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;

    var valid = true;

    // Validate name
    if (name.trim() === '') {
        document.getElementById('nameError').textContent = 'Name is required.';
        valid = false;
    }

    // Validate email
    if (email.trim() === '') {
        document.getElementById('emailError').textContent = 'Email is required.';
        valid = false;
    } else if (!validateEmail(email)) {
        document.getElementById('emailError').textContent = 'Invalid email address.';
        valid = false;
    }

    return valid;
}
