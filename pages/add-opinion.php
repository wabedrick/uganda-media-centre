<?php
$page_name = "Add an Opinion";
include('header.php');
?>

<main class="relative bg-gray-50 min-h-screen flex items-center justify-center">
    <form action="add-opinion.php" method="POST" class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Add a New Opinion</h2>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
            <input type="text" id="title" name="title" placeholder="Enter the title for the Opinion" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-4">
            <label for="author" class="block text-gray-700 font-semibold mb-2">Author</label>
            <input type="text" id="author" name="author" placeholder="Enter the author's name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-4">
            <label for="image_url" class="block text-gray-700 font-semibold mb-2">Image URL</label>
            <input type="url" id="image_url" name="image_url" placeholder="Enter the image URL" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-6">
            <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
            <textarea id="content" name="content" placeholder="Enter the content for the Opinion" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 h-32 resize-none"></textarea>
        </div>

        <div class="text-center">
            <input type="submit" value="Submit" class="bg-blue-500 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" />
        </div>
    </form>
</main>

<?php include("footer.php"); ?>

<?php
include("../database/db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $image_url = $conn->real_escape_string($_POST['image_url']);
    $content = $conn->real_escape_string($_POST['content']);

    // Insert data into the database
    $sql = "INSERT INTO opinions (title, author, image_url, content) 
            VALUES ('$title', '$author', '$image_url', '$content')";

    $result = mysqli_query($conn, $sql);

    if ($result === TRUE) {
        echo "Opinion successfully added.";
    } else {
        echo "Operation failed, something went wrong: " . $conn->error;
    }
}
?>