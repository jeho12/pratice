
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);

        if (empty($name) || empty($email) || empty($message)) {
            echo "All fields are required.";
        } else {
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Message:</strong> " . nl2br($message) . "</p>";

            // You can add additional processing here, such as saving to a database or sending an email.
        }
    } else {
        echo "No data submitted.";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }