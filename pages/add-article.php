<?php
$page_name = "Add an article";
include('header.php');
?>

<main class="relative bg-gray-50 min-h-screen flex items-center justify-center m-6">
    <form action="add-article.php" method="POST" enctype="multipart/form-data" class="bg-white  rounded-lg p-8 max-w-md w-full mr-6">
        <h2 class="text-2xl font-bold mb-6 mt-6 text-center text-gray-700">Add a New Article</h2>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
            <input type="text" id="title" name="title" placeholder="Enter the title for the Article"
                required class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-4">
            <label for="sub-title" class="block text-gray-700 font-semibold mb-2">Sub Title</label>
            <input type="text" id="sub-title" name="sub-title" placeholder="Enter the Sub title for the Article"
                required class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-semibold mb-2">Date</label>
            <input type="date" id="date" name="date" required class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-gray-700 font-semibold mb-2">Photo</label>
            <input type="file" id="photo" name="photo" class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-6">
            <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
            <textarea id="content" name="content" placeholder="Enter the content for the Article" required
                class="w-full px-4 py-8 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 h-32 resize-none"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" value="Submit" class="bg-blue-500 text-white font-semibold px-6 py-2 
            rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit</button>
        </div>
    </form>
</main>

<?php include("footer.php"); ?>

<?php
include("../database/db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $sub_title = $conn->real_escape_string($_POST['sub-title']);
    $date = $conn->real_escape_string($_POST['date']);
    $content = $conn->real_escape_string($_POST['content']);

    // Handling file upload
    // if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    //     $image_path = '../uploads/' . basename($_FILES['photo']['name']);
    //     move_uploaded_file($_FILES['photo']['tmp_name'], $image_path);
    // } else {
    //     $image_path = null;
    // }

    // Define the upload directory relative to the server document root
    $uploadDir = '/uganda-media-center/uploads/'; // Ensure this path is accessible from all pages

    // Handling file upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        // Construct the absolute path to save the image
        $image_path = $_SERVER['DOCUMENT_ROOT'] . $uploadDir . basename($_FILES['photo']['name']);

        // Move the uploaded file to the designated directory
        move_uploaded_file($_FILES['photo']['tmp_name'], $image_path);

        // Set the image path to be used in the HTML (accessible URL path)
        $image_path = $uploadDir . basename($_FILES['photo']['name']);
    } else {
        $image_path = null;
    }


    $sql = "INSERT INTO articles (title, sub_title, date_published, image_path, article_content) 
    VALUES('$title', '$sub_title', '$date', '$image_path', '$content')";

    $result = mysqli_query($conn, $sql);

    if ($result === TRUE) {
        echo "Article successifully Added";
    } else {
        echo "Operation failed, something went wrong";
    }
}
?>