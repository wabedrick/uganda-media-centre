<?php
include("../database/db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $comment = $conn->real_escape_string($_POST['comment']);
    $article_id = $conn->real_escape_string($_POST['id']);

    echo $article_id;
    exit;

    // Check if the comment is already there
    $checksql = "SELECT * FROM article_comment WHERE fullname='$fullname' AND comment='$comment'";
    $checkResult = mysqli_query($conn, $checksql);
    if ($checkResult->num_rows > 0) {
        echo "The comment already exists";
    } else {
        $sql = "INSERT INTO article_comment (fullname, email, comment, article_id) 
        VALUES('$fullname', '$email', '$comment', '$article_id')";

        $result = mysqli_query($conn, $sql);

        if ($result === TRUE) {
            echo "Article successifully Added";
        } else {
            echo "Operation failed, something went wrong";
        }
    }
}
