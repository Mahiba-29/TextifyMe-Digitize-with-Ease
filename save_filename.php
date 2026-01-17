<?php
// Start the session
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Your database password here
$dbname = "textifyme";

// Assuming you have retrieved the user email from the session
$email = $_SESSION["email"];

// Check if historyID is received
if(isset($_POST['historyID'])) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve filename based on ID
    $sql = "SELECT FileName FROM history WHERE ID = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        // Handle query preparation error
        die("Error preparing SQL query: " . $conn->error);
    }

    // Bind parameter to the prepared statement
    $stmt->bind_param("i", $_POST['historyID']);

    // Execute the prepared statement
    $stmt->execute();

    // Store the result
    $stmt->store_result();

    // Check if a row is found
    if ($stmt->num_rows > 0) {
        // Bind the result variable
        $stmt->bind_result($filename);

        // Fetch the value
        $stmt->fetch();
    } else {
        // No record found
        echo "Error: No record found.";
        exit(); // Exit the script
    }

    // Close statement
    $stmt->close();
} else {
    // Error message if historyID is not received
    echo "Error: historyID not received.";
    exit(); // Exit the script
}

// Check if content is received
if(isset($_POST['fileContent'])) {
    // Retrieve the content from the textarea
    $content = $_POST['fileContent'];

    // Generate the filename for the converted file
    $convertedFilename = $filename . "_converted" . ".txt";

    // Define the directory to save the file
    $uploadDir = "uploads/";

    // Define the path to save the file
    $filePath = $uploadDir . $convertedFilename;

    // Write the content to the file
    if(file_put_contents($filePath, $content) !== false) {
        // Update the database with the converted filename
        // Reusing existing database connection
        // Prepare SQL statement to update Converted Text field based on ID
        $sql = "UPDATE history SET ConvertedText = ? WHERE ID = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            // Handle query preparation error
            die("Error preparing SQL query: " . $conn->error);
        }

        // Bind parameters to the prepared statement
        $stmt->bind_param("si", $convertedFilename, $_POST['historyID']);

        // Execute the prepared statement
        if ($stmt->execute() === TRUE) {
            echo "File saved successfully.";
        } else {
            echo "Error updating database: " . $conn->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error saving file.";
    }
}

// Close connection
$conn->close();
?>
