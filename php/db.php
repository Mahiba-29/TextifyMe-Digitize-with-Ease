<?php
        // Handle registration logic
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['cpassword'];

        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords do not match');</script>";
            echo "<script>window.location.href = '../index.php';</script>";
            exit; // Exit to prevent further execution
        }

        // Your database connection logic
        $conn = new mysqli('localhost', 'root', '', 'textifyme');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if email already exists
        $stmt = $conn->prepare("SELECT email FROM form WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "<script>alert('Email already exists');</script>";
            echo "<script>window.location.href = '../index.php';</script>";
            exit; // Exit if email exists
        }

        // Clear input fields
        echo "<script>document.getElementById('signupName').value = '';</script>";
        echo "<script>document.getElementById('signupEmail').value = '';</script>";
        echo "<script>document.getElementById('signupPassword').value = '';</script>";
        echo "<script>document.getElementById('confirmPassword').value = '';</script>";

        $stmt->close();

        // Insert new record
        $stmt = $conn->prepare("INSERT INTO form (name, email, password) VALUES (?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("sss", $name, $email, $password);
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        echo "<script>alert('Successfully registered');</script>";

        $stmt->close();
        $conn->close();

        // Redirect to success page after showing the alert
        echo "<script>window.location.href = '../index.php';</script>";
        exit;
?>
