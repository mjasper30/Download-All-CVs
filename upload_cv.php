<?php
// Replace the database connection details with your own
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uploading_cv";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the file upload
if (isset($_POST['submit'])) {
    $cvName = $_POST['cv_name'];
    $cvFileName = $_FILES['cv_file']['name'];
    $cvTempPath = $_FILES['cv_file']['tmp_name'];

    // Move the uploaded file to a permanent location (adjust the destination directory as needed)
    $destinationDirectory = "uploads/";
    $destinationPath = $destinationDirectory . $cvFileName;

    if (move_uploaded_file($cvTempPath, $destinationPath)) {
        // File upload successful, insert CV information into the database
        $sql = "INSERT INTO cv_table (cv_name, cv_file_path) VALUES ('$cvName', '$destinationPath')";

        if ($conn->query($sql) === true) {
            echo "CV uploaded successfully!";
            // Redirect to index.php after successful CV upload
            header("Location: index.php");
            exit; // Make sure to exit the script after redirection
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the CV.";
    }
}

$conn->close();
