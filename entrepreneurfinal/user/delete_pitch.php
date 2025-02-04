<?php
// Include database connection
include 'db.php';

// Check if pitch ID is provided
if (isset($_GET['id'])) {
    // Get the pitch ID from the URL
    $pitch_id = $_GET['id'];

    // Delete pitch from the database
    $sql = "DELETE FROM pitches WHERE id=$pitch_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Pitch deleted successfully');
        window.location.href='mypitch.php';
        </script>";
    } else {
        echo "Error deleting pitch: " . $conn->error;
    }
} else {
    echo "Pitch ID not provided!";
}

// Close database connection
$conn->close();
?>
