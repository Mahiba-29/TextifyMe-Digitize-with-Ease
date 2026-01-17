<?php
// Check if summarized_text and historyID are provided in the URL
if(isset($_POST['summarized_text']) && isset($_POST['historyID'])) {
    // Retrieve summarized text and historyID from the URL
    $summarized_text = $_POST['summarized_text'];
    $historyID = $_POST['historyID'];

    // Fetch filename from the database based on historyID
    $servername = "localhost";
    $username = "root";
    $password = ""; // Your database password here
    $dbname = "textifyme";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to fetch filename from the database
    $sql = "SELECT FileName FROM history WHERE ID = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("i", $historyID);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Store the result
        $result = $stmt->get_result();

        // Fetch the filename
        if ($row = $result->fetch_assoc()) {
            $filename = $row['FileName'];

            // Define the uploads directory path
            $uploadDir = 'uploads/';

            // Construct the new filename
            $newFilename = $filename . "_convertedSummarize" . ".txt";

            // Write the summarized text to the file
            if(file_put_contents($newFilename, $summarized_text) !== false) {
                echo "File saved successfully.";

                // Update the database with the new filename
                $sql = "UPDATE history SET SummarizedText = ? WHERE ID = ?";
                $stmt = $conn->prepare($sql);

                // Bind parameters to the prepared statement
                $stmt->bind_param("si", $newFilename, $historyID);

                // Execute the prepared statement to update the database
                if ($stmt->execute()) {
                    echo "";
                } else {
                    echo "Error updating database: " . $conn->error;
                }
            } else {
                echo "Error saving file.";
            }
        } else {
            echo "Error: Filename not found for historyID $historyID.";
        }
    } else {
        echo "Error executing SQL statement: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Error: Summarized text or historyID not provided in the URL.";
}
?>
