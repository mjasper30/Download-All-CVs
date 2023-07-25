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

// Fetch CV data from the database
$sql = "SELECT cv_name, cv_file_path FROM cv_table";
$result = $conn->query($sql);

// Prepare and initiate the download process
if ($result->num_rows > 0) {
    $zip = new ZipArchive();
    $zipFilename = "all_cvs.zip";

    if ($zip->open($zipFilename, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        while ($row = $result->fetch_assoc()) {
            $cvName = $row['cv_name'];
            $cvFilePath = $row['cv_file_path'];

            // Get the file extension from the file path
            $fileExtension = pathinfo($cvFilePath, PATHINFO_EXTENSION);

            // Include the file extension in the CV name
            $cvNameWithExtension = $cvName . '.' . $fileExtension;

            $zip->addFile($cvFilePath, $cvNameWithExtension);
        }
        $zip->close();

        // Set appropriate headers for download
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . $zipFilename . '"');
        header('Content-Length: ' . filesize($zipFilename));

        // Output the ZIP file for download
        readfile($zipFilename);

        // Delete the temporary ZIP file after download
        unlink($zipFilename);
    } else {
        echo "Failed to create ZIP archive.";
    }
} else {
    echo "No CVs found in the database.";
}

$conn->close();
