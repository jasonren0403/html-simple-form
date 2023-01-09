// https://developer.mozilla.org/en-US/docs/Learn/Forms/Sending_forms_through_JavaScript#sending_form_data
function sendData() {
    const XHR = new XMLHttpRequest();

    // Bind the FormData object and the form element
    const FD = new FormData(form);

    // Define what happens on successful data submission
    XHR.addEventListener("load", (event) => {
        alert(event.target.responseText);
    });

    // Define what happens in case of error
    XHR.addEventListener("error", (event) => {
        alert('Oops! Something went wrong.');
    });

    // Set up our request
    XHR.open("POST", "handle.php");

    // The data sent is what the user provided in the form
    XHR.send(FD);
}

// Get the form element
const form = document.getElementById("test-form");

// Add 'submit' event handler
form.addEventListener("submit", (event) => {
    event.preventDefault();

    sendData();
});