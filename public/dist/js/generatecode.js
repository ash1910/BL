function generateCode() {
    // The prefix is always "HNS"
    const prefix = "HNS";
    
    // Define characters for both digits and letters
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    // Generate exactly seven random characters (both letters and digits)
    let randomCharacters = '';
    for (let i = 0; i < 7; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length); // Random index in the characters string
        randomCharacters += characters[randomIndex]; // Append random character
    }
    
    // Combine prefix with random characters
    const code = prefix + randomCharacters;
    
    // Display the generated code in the textarea
    document.getElementById('bl_number').value = code;
}

window.onload = function() {
    generateCode(); // Generate code when the page loads
};