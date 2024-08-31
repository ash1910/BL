function generateCode() {
    // The fixed prefix
    const prefix = "HNS-SE";

    // Get the current year and month
    const now = new Date();
    const year = now.getFullYear().toString().slice(-2); // Last two digits of the current year
    const month = ('0' + (now.getMonth() + 1)).slice(-2); // Current month (01-12)

    // Retrieve the last used incrementing number from local storage
    let lastNumber = localStorage.getItem('lastNumber');
    if (lastNumber === null) {
        lastNumber = 1000; // Initialize if not found
    } else {
        lastNumber = parseInt(lastNumber, 10);
    }

    // Increment the number
    lastNumber = (lastNumber + 1) % 10000; // Ensure it stays within 4 digits

    // Save the new number back to local storage
    localStorage.setItem('lastNumber', lastNumber.toString().padStart(4, '0'));

    // Create the final code
    const code = `${prefix}${year}${month}${lastNumber.toString().padStart(4, '0')}`;

    // Display the generated code in the textarea
    document.getElementById('bl_number').value = code;
}

window.onload = function() {
    generateCode(); // Generate code when the page loads
};
