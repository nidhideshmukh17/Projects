<?php
// Include database connection
include 'db.php';

// Check if entrepreneur ID is provided
if(isset($_GET['id'])) {
    // Get the entrepreneur ID from the URL
    $entrepreneur_id = $_GET['id'];

    // SQL query to delete entrepreneur from the database
    $sql = "DELETE FROM pitcher WHERE id = $entrepreneur_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Deleted Successfully');
window.location.href='manageentrepreneur.php';
</script>";
    } else {
        // Redirect to error page or display error message
        header("Location: error.php");
        exit();
    }
} else {
    // Redirect to error page or handle error
    header("Location: error.php");
    exit();
}

// Close database connection
$conn->close();
?>
