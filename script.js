document.addEventListener('DOMContentLoaded', function() {
    emailjs.init("RN8vqjJo08r80Z8eK"); // Replace 'YOUR_USER_ID' with your actual EmailJS user ID
});

document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Display a loading message or add a class to form elements to indicate loading
    // e.g., this.querySelector('button').innerText = 'Sending...';

    emailjs.sendForm('service_k55mr5e', 'template_yi8l9bm', this)
        .then(function() {
            console.log('SUCCESS!');
            alert('Message sent successfully!');
            // Reset the form or update the UI to indicate the message was sent
            document.getElementById('contact-form').reset();
            // Optionally, revert the loading message back to the original
            // e.g., document.querySelector('button').innerText = 'Send Message';
        }, function(error) {
            console.log('FAILED...', error);
            alert('Failed to send the message, please try again.');
        });
});
