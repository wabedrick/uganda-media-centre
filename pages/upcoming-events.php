<?php
$page_name = "Add an event";
include('header.php');
?>

<main class="relative bg-gray-50 min-h-screen flex items-center justify-center m-6">
    <form action="upcoming-events.php" method="POST" enctype="multipart/form-data" class="bg-white  rounded-lg p-8 max-w-md w-full mr-6">
        <h2 class="text-2xl font-bold mb-6 mt-6 text-center text-gray-700">Add an Upcoming Event</h2>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Event Name</label>
            <input type="text" id="event-name" name="event-name" placeholder="E.G., INDEPENDENCE DAY CELEBRATIONS"
                required class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-semibold mb-2">Date of Event</label>
            <input type="date" id="event-date" name="event-date" required class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>


        <div class="mb-6">
            <label for="content" class="block text-gray-700 font-semibold mb-2">About the Event</label>
            <textarea id="about-event" name="about-event" placeholder="Some more information about the event" required
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
    $event_name = $conn->real_escape_string($_POST['event-name']);
    $event_date = $conn->real_escape_string($_POST['event-date']);
    $about_event = $conn->real_escape_string($_POST['about-event']);

    // Handling file upload
    // if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    //     $image_path = '../uploads/' . basename($_FILES['photo']['name']);
    //     move_uploaded_file($_FILES['photo']['tmp_name'], $image_path);
    // } else {
    //     $image_path = null;
    // }
    // Check if the event is already added
    $checkSQL = "SELECT * FROM upcoming_events WHERE event_name='$event_name' AND event_date='$event_date'";
    $checkResult = mysqli_query($conn, $checkSQL);
    if ($result->num_rows > 0) {
        echo 'The event already exists';
    } else {
        $sql = "INSERT INTO upcoming_events (event_name, event_date, about_event) 
        VALUES('$event_name', '$event_date', '$about_event')";

        $result = mysqli_query($conn, $sql);

        if ($result === TRUE) {
            echo "Event successifully Added";
        } else {
            echo "Operation failed, something went wrong";
        }
    }
}
?>