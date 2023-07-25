<!DOCTYPE html>
<html>

<head>
    <title>Upload CV</title>
</head>

<body>
    <h1>Upload CV</h1>
    <form action="upload_cv.php" method="post" enctype="multipart/form-data">
        <label for="cv_name">CV Name:</label>
        <input type="text" name="cv_name" required><br><br>
        <label for="cv_file">Select CV File:</label>
        <input type="file" name="cv_file" required><br><br>
        <input type="submit" name="submit" value="Upload CV">
    </form>

    <h1>Download All CVs</h1>
    <a href="download_cvs.php">
        <button>Download All CVs</button>
    </a>
</body>

</html>