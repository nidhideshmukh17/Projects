<?php
// Include database connection
include 'db.php';

// Check if mentor ID is provided
if(isset($_GET['id'])) {
    // Get mentor ID from the URL
    $mentor_id = $_GET['id'];

    // SQL query to delete mentor data from the database
    $sql = "UPDATE `mentor` SET `status`='approved' WHERE id = $mentor_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Approved Successfully');
window.location.href='managementor.php';
</script>";
    } else {
        echo "Error deleting mentor: " . $conn->error;
    }
} else {
    echo "Mentor ID not provided!";
}
?>
