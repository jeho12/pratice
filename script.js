<script>
    function submitForm() {
        // Prevent the default form submission behavior
        function submitForm(event) {
            event.preventDefault();
        
            // Rest of the code remains the same
        }
        

        // Get the form input values
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        // Display a message on the page
        var messageDiv = document.getElementById("messageDiv");
        messageDiv.innerHTML = "Thank you, " + name + "! Your message has been sent.";

        // You can perform additional actions or submit the data to a server here
    }
</script>
