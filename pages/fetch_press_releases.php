<?php
include('../database/db_connection.php');

$sql = "SELECT title, date_published, sub_title, article_content, image_path, link FROM articles ORDER BY created_at DESC LIMIT 2";
$result = $conn->query($sql);

$press_releases = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $press_releases[] = $row;
    }
}

$conn->close();

echo json_encode($press_releases);
