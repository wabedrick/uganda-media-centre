<?php
$page_name = "Upload an Article";
include('header.php');

?>

<main>
    <form action="upload-image.php" method="POST" enctype="multipart/form-data" style="margin: 20px;">
        <textarea type="text" name="image-text" rows="10" columns="30" placeholder="Enter the article here" style="color:black;">

        </textarea> </br>
        <input type="file" name="image">
        <button type="submit">Submit</button>
    </form>
</main>
<?php include("footer.php");
?>

<?php
include('../database/db_connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $image_text = $conn->real_escape_string($_POST['image-text']);
    // $image = $_FILES['image']['tmp_name'];
    // $imageData = file_get_contents($image);
    // $imageType = $_FILES['image']['type'];

    $photoName = $_FILES['image']['name'];
    $imageFileType = strtolower(pathinfo($photoName, PATHINFO_EXTENSION));
    $photoTempPath = $_FILES['image']['tmp_name'];
    $photoUploadPath = '../uploads/' . "." . $imageFileType;

    $sql = "INSERT INTO slider_content_table (`image_text`, `image_url`) VALUES ('$image_text', '$photoUploadPath')";
    $result = $conn->query($sql);
    if ($result === TRUE) {
        echo "Image successfully added";
        echo 'script type="text/javascript"> alert("Operation successifull"); </script>';
    } else {
        echo "Failed to add the image";
        echo 'script type="text/javascript"> alert("Operation failed"); </script>';
    }
}
?>