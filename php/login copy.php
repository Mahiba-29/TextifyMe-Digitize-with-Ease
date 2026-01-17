<?php
// Start the session
session_start();

// Include database connection file
$conn = new mysqli('localhost', 'root', '', 'textifyme');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is empty
    if (empty(trim($_POST['email1']))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST['email1']);
    }

    // Check if password is empty
    if (empty(trim($_POST['password1']))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST['password1']);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM form WHERE email = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if email exists
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($id, $email, $stored_password);
                    if ($stmt->fetch()) {
                        // Verify password
                        if ($password === $stored_password) {
                            // Password is correct, start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            // Redirect user to index.html page
                            echo "<script>alert('Login successful');</script>";
                            echo "<script>window.location.href = '../index.php';</script>";
                            exit;
                        } else {
                            // Display an error message if password is not valid
                            echo "<script>alert('The password you entered was not valid.');</script>";
                            echo "<script>window.location.href = '../index.php';</script>";
                            exit;
                        }
                    }
                } else {
                    // Display an error message if email doesn't exist
                    echo "<script>alert('No account found with that email.');</script>";
                    echo "<script>window.location.href = '../index.php';</script>";
                    exit;
                }
            } else {
                // Display an error message if something went wrong with the statement execution
                echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
                echo "<script>window.location.href = '../index.php';</script>";
                exit;
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $conn->close();
}
?>
