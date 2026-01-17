<?php
// Check if translated_text, language, and historyID are provided in the URL
if(isset($_POST['translated_text']) && isset($_POST['language']) && isset($_POST['historyID'])) {
    // Retrieve translated text, language, and historyID from the URL
    $translated_text = $_POST['translated_text'];
    $language = $_POST['language'];
    $historyID = $_POST['historyID'];

    // Define the uploads directory path
    $uploadDir = 'uploads/';

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

            // Construct the new filename with language suffix
            $languageSuffix = "";
            if ($language === "mr") {
                $languageSuffix = "_Marathi";
                $columnName = "TranslatedTextMarathi";
            } elseif ($language === "gu") {
                $languageSuffix = "_Gujarati";
                $columnName = "TranslatedTextGujarati";
            } elseif ($language === "ta") {
                $languageSuffix = "_Tamil";
                $columnName = "TranslatedTextTamil";
            } elseif ($language === "kn") {
                $languageSuffix = "_Kannada";
                $columnName = "TranslatedTextKannada";
            }

            $newFilename = $uploadDir . $filename . "_converted" . $languageSuffix . ".txt";

            // Write the translated text to the file
            if(file_put_contents($newFilename, $translated_text) !== false) {
                echo "File saved successfully.";

                // Update the database with the new filename
                $sql = "UPDATE history SET $columnName = ? WHERE ID = ?";
                $stmt = $conn->prepare($sql);

                // Get only the filename without the path
                $filenameOnly = basename($newFilename);

                // Bind parameters to the prepared statement
                $stmt->bind_param("si", $filenameOnly, $historyID);

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
    echo "Error: Translated text, language, or historyID not provided in the URL.";
}
?>
