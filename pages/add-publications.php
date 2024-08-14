<?php $page_name = "Upload File";
include("./header.php");
?>

<main class="relative">
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <form action="add-publications.php" method="post" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold mb-4">Upload a File</h2>
            <div class="mb-4">
                <input type="text" name="file-info" placeholder="Enter the name of the file"
                    class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>
            <div class="mb-4">
                <input type="file" name="file" class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-blue-500 px-4 py-3">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Upload</button>
        </form>
    </div>
</main>

<?php
include('../database/db_connection.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileInfo = $conn->real_escape_string($_POST['file-info']);

    // Check if a file has been uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file'];

        // File properties
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        if ($fileError === 0) {
            if ($fileSize < 10000000) { // Restrict file size to 10MB
                $fileNameNew = uniqid('', true) . "-" . $fileName;
                $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/uganda-media-center/uploads/' . $fileNameNew;
                $filePath = '/uganda-media-center/uploads/' . $fileNameNew;

                // Move file to the uploads directory
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    // Insert file data into the database
                    $sql = "INSERT INTO downloads (description, file_path, file_type) VALUES ('$fileInfo', '$fileName', '$filePath')";

                    if ($conn->query($sql) === TRUE) {
                        echo "File uploaded and data saved successfully!";
                    } else {
                        echo "Error: " . $conn->error;
                    }
                } else {
                    echo "Failed to move uploaded file.";
                }
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}

$conn->close();
?>