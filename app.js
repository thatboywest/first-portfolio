// Get the submit button element
const submitButton = document.getElementById('submit-button');

// Add a click event listener to the submit button
submitButton.addEventListener('click', function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the input values
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;

  // Send the email
  const emailUrl = 'mailto:morgingairaz@gmail.com?subject=Form Submission&body=' + name + ' ' + email;
  window.location.href = emailUrl;
});
